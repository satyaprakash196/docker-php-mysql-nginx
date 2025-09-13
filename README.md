# docker-php-mysql-nginx

This is a simple **Docker-based PHP application** with **MySQL** as the database and **Nginx** as the web server.  
It provides an easy way to set up a PHP development environment without installing PHP, MySQL, or Nginx on your local machine.


## Features
- PHP running in a separate Docker container
- MySQL database container
- Nginx as a reverse proxy and web server
- Docker Compose for easy setup and management
- Persistent MySQL storage using Docker volumes
- `.env` support for environment variables

- docker-php-nginx-mysql/
│
├── docker-compose.yml # Docker Compose configuration file
├── .gitignore # Ignored files and folders
│
├── nginx/
│ └── default.conf # Nginx configuration
│
└── app/
├── Dockerfile # PHP Dockerfile
├── index.php # Sample PHP entry point
└── config.php # Database configuration

. Build and Start Containers

docker-compose up -d --build

Verify the Setup

You should see three containers:

php_app_service

mysql_service

nginx_service

Verify Database Directly
docker exec -it mysql_service mysql -u root -p
Check the database:
SHOW DATABASES;
USE my_database;
SHOW TABLES;

Environment Variables

MYSQL_ROOT_PASSWORD=rootpassword
MYSQL_DATABASE=myapp
MYSQL_USER=myuser
MYSQL_PASSWORD=mypassword

docker compose up -d	Start containers in detached mode
docker compose down	Stop and remove containers
docker compose logs	View logs from all containers
docker compose ps	List running containers
docker exec -it php bash	Access PHP container shell
docker exec -it mysql bash	Access MySQL container shell


Frontend: User visits http://localhost:8080

Nginx: Receives the request and passes it to PHP.

PHP Code: Fetches blog posts from MySQL.

MySQL: Stores all posts, users, and comments.

Response: PHP sends HTML back via Nginx to the browser.
