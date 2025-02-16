# Simple Blog - Laravel 11

Welcome to **Simple Blog**, a lightweight and modern blog platform built with **Laravel 11**, using **MySQL** as the database, and running inside a **Docker container**. The project is hosted on a **VPS** and can be accessed via: [blog.ghozimahdi.com](https://blog.ghozimahdi.com).

## Features 🚀

- **Laravel 11** - Latest version of Laravel for web development.
- **MySQL Database** - A robust and scalable relational database.
- **Docker** - The project runs inside a Docker container for better scalability and portability.
- **TailwindCSS** - A utility-first CSS framework for styling.
- **Blade Templates** - Laravel's powerful templating engine.
- **Authentication** - Built-in user authentication system.
- **Eloquent ORM** - Elegant and simple database interaction with Laravel's ORM.

## Installation & Setup ⚙️

### Prerequisites
Ensure you have the following installed on your system:
- **Docker & Docker Compose**
- **Git**

### Steps to Set Up

1. Clone the repository:
   ```sh
   git clone git@github.com:ghozimahdi/MyBlog-Laravel.git
   cd MyBlog-Laravel
   ```

2. Copy the environment configuration:
   ```sh
   cp .env.example .env
   ```

3. Start the application using Docker Compose:
   ```sh
   docker-compose up -d
   ```

4. Run database migrations:
   ```sh
   docker exec -it blog-app php artisan migrate --seed
   ```

5. Access the blog at:
   ```
   http://localhost
   ```

## Usage 📝
- **Create an account** or **log in** to start posting.
- **Write, edit, and delete** blog posts with ease.
- **Manage users and authentication** with Laravel's built-in auth system.

## Contributing 🤝
If you’d like to contribute to this project, feel free to submit a pull request. Any contributions, suggestions, and improvements are welcome!

## License 📜
This project is open-source and available under the [MIT License](https://opensource.org/licenses/MIT).

---

**Developed by Ghozi Mahdi** | [blog.ghozimahdi.com](https://blog.ghozimahdi.com)

