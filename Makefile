setup:
	@make docker-up-build
	@make composer-install
	@make set-permissions
	@make setup-env
	@make generate-key
	@make migrate-fresh-seed
	@make storage-link
	@make npm-install
	@make npm-run-dev

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

set-permissions:
	@echo "Adjusting permissions..."
	docker exec 1com-app bash -c "chmod -R 775 /var/www/html/storage"
	docker exec 1com-app bash -c "chmod -R 775 /var/www/html/bootstrap"

generate-key:
	@echo "Application key Generate ..."
	docker exec 1com-app bash -c "php artisan key:generate"

setup-env:
	@echo "Copy env from env.example ..."
	docker exec 1com-app bash -c "cp .env.docker .env"

migrate:
	@echo "Run database migration ..."
	docker exec 1com-app bash -c "php artisan migrate"

migrate-fresh-seed:
	@echo "Run database migration ..."
	docker exec 1com-app bash -c "php artisan migrate:fresh --seed"

db-seed:
	@echo "Run db seed ..."
	docker exec 1com-app bash -c "php artisan db:seed"

storage-link:
	@echo "Create a symbolic link at public/storage ..."
	docker exec 1com-app bash -c "php artisan storage:link"

npm-install:
	docker exec 1com-app bash -c "npm install"

npm-run-dev:
	docker exec 1com-app bash -c "npm run dev"

npm-run-build:
	docker exec 1com-app bash -c "npm run build"
