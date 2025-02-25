# Tribes Task Project

This repository contains the Tribes Task project. Follow the instructions below to set up and run the application.

## Setup Instructions

### 1. Clone the project
```bash
git clone <repository-url>
cd tribes-task
```

### 2. Set up environment variables
```bash
cp .env.example .env
```

### 3. Configure the database
Edit the `.env` file and update the database connection settings:
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=your_database_name
DB_USERNAME=your_database_username
DB_PASSWORD=your_database_password
```

### 4. Install dependencies
```bash
composer install
npm install
```

### 5. Set up the database
```bash
php artisan migrate:fresh --seed
```

### 6. Run the application
```bash
php artisan serve
```
The application will be available at http://localhost:8000/admin

## Login Credentials

Use the following credentials to log in:
- **Email**: sina@test.com
- **Password**: password

