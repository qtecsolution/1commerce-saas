setup:
	@make docker-up-build
	@make composer-install
	@make permission
	@make copy-env
	@make generate-key
	@make migrate-fresh

docker-up:
	docker compose up -d

docker-down:
	docker compose down

docker-up-build:
	docker compose up -d --build

build:
	docker compose build

composer-update:
	docker exec 1com-app bash -c "composer update"

composer-install:
	docker exec 1com-app bash -c "composer install"

permission:
	@echo "Adjusting permissions..."
	docker exec 1com-app bash -c "chmod -R 777 /var/www/html/storage"

generate-key:
	@echo "Application key Generate ..."
	docker exec 1com-app bash -c "php artisan key:generate"

copy-env:
	@echo "Copy env from env.example ..."
	docker exec 1com-app bash -c "cp .env.example .env"

migrate:
	@echo "Run database migration ..."
	docker exec 1com-app bash -c "php artisan migrate"
migrate-fresh:
	@echo "Run database migration ..."
	docker exec 1com-app bash -c "php artisan migrate:fresh --seed"
db-seed:
	@echo "Run db seed ..."
	docker exec 1com-app bash -c "php artisan db:seed"
storage-link:
	@echo "Create a symbolic link at public/storage ..."
	docker exec 1com-app bash -c "php artisan storage:link"