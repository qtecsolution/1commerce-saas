# 1Commerce

This project is developed using PHP, Laravel, and Vue.js, specifically designed for small and medium-sized enterprises (SMEs) to create and manage landing pages for their niche products. With this platform, users can effortlessly choose and customize their landing pages in real-time with just a few clicks. The intuitive interface and robust features ensure that businesses can quickly set up attractive, functional, and conversion-optimized landing pages without needing extensive technical knowledge. The seamless integration of PHP, Laravel, and Vue.js provides a powerful, scalable, and responsive solution to meet the dynamic needs of online marketing and sales.

---

## 🚀 Features

-   **Real-Time Customization**: Easily customize landing pages in real-time with a user-friendly interface.
-   **Niche Product Focus**: Tailored for SMEs to showcase and manage niche products effectively.
-   **Responsive Design**: Built with Bootstrap and Vue.js for a seamless experience across devices.
-   **Scalable Backend**: Powered by Laravel for robust and scalable backend operations.
-   **Database Management**: Utilizes MySQL for reliable and efficient data storage.

---

## 🛠️ Technologies

-   **Backend**: PHP, Laravel
-   **Frontend**: Bootstrap, Vue.js
-   **Database**: MySQL
-   **Version Control**: Git
-   **Package Manager**: Composer (PHP), npm (JavaScript)

---

## 📦 Installation

Welcome to the setup guide for the **1Commerce**. This document provides comprehensive steps to install, configure, and run the project in your local environment, using both Docker and a native setup. Follow these instructions to ensure proper configuration.

## 📝 Prerequisites

Please ensure you have the following installed on your system:

-   **PHP** (version 8.1 or higher)
-   **Composer**
-   **npm**
-   **MySQL** (version 8.0 or compatible, e.g., MariaDB)
-   **Git**

## 📈 Server Requirements

This application requires a server with the following specifications:

-   **PHP** (version 8.1 or higher) with the extensions:
    -   Ctype
    -   Fileinfo
    -   JSON
    -   Mbstring
    -   PDO
    -   GD
    -   Zip
    -   PDO MySQL
-   **MySQL** (version 8.0) or **MariaDB**
-   **Composer**
-   **Web Server**: Apache or Nginx

## ⚙️ Setup Options

This guide covers two setup methods:

1. **Using Docker**
2. **Setting Up Locally (Without Docker)**

### 🐳 Setup with Docker

#### 1. Clone the Repository

```bash
git clone https://github.com/qtecsolution/1commerce.git
```

```bash
cd 1commerce
```

#### 2. Initialize the Project

```bash
make setup
```

The application should now be accessible at [http://localhost](http://localhost).

#### Available Docker Commands

-   **Manage Container**

```bash
make docker-up
```

```bash
make docker-down
```

-   **Install Dependencies**

```bash
make composer-install
```

```bash
make composer-update
```

-   **Set File Permissions**

```bash
make set-permissions
```

-   **Generate Application Key**

```bash
make generate-key
```

-   **Run Migrations and Seed the Database**

```bash
make migrate-fresh-seed
```

-   **Setup Environment File**

```bash
make setup-env
```

---

### 🚀 Setup Without Docker

#### 1. Clone the Repository

```bash
git clone https://github.com/qtecsolution/1commerce.git
```

```bash
cd 1commerce
```

#### 2. Install PHP Dependencies & NPM Dependencies

Within the project directory, run:

```bash
composer install
```

```bash
npm install
```

#### 3. Configure the Environment

Create the `.env` file by copying the sample configuration:

```bash
cp .env.example .env
```

#### 4. Generate Application Key

Secure the application by generating a key:

```bash
php artisan key:generate
```

#### 5. Configure Database

1. **Access MySQL**:

    ```bash
    mysql -u {username} -p
    ```

2. **Create Database**:

    ```sql
    CREATE DATABASE 1commerce_db;
    ```

3. **Grant User Permissions**:

    ```sql
    GRANT ALL ON 1commerce_db.* TO '{your_username}'@'localhost' IDENTIFIED BY '{your_password}';
    ```

4. **Apply Changes and Exit**:

    ```sql
    FLUSH PRIVILEGES;
    EXIT;
    ```

5. **Update `.env` Database Settings**:

    ```plaintext
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=1commerce_db
    DB_USERNAME={your_username}
    DB_PASSWORD={your_password}
    ```

#### 6. Run Migrations and Seed Data

To set up the database tables and populate them with initial data, run:

```bash
php artisan migrate --seed
```

#### 7. Start the Development Server

To run the application locally, execute:

```bash
php artisan serve
```

```bash
npm run dev
```

Your application will be available at [http://127.0.0.1:8000](http://127.0.0.1:8000).

## 🛠️ Additional Information

-   **Seeding**: The database seeder is configured to populate initial data. Run `php artisan migrate --seed` to use it.
-   **Environment Variables**: Ensure all necessary environment variables are set in the `.env` file.
-   **Database Configuration**: The application is configured for MySQL by default. Update the `.env` file as needed for other database connections.

## 🤝 Contributing

This is an open source project and contributions are welcome. If you are interested in contributing, please fork the repository and submit a pull request with your changes. The project maintainers will review and merge your changes accordingly.

## 📝 License

The 1commerce project is open source and available under the MIT License. You are free to use, modify, and distribute this codebase in accordance with the terms of the license.

Please refer to the LICENSE file for more details.
