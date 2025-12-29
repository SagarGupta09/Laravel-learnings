# CRUD App – Laravel Internship Project

A Laravel-based CRUD application developed during my internship. This project demonstrates the use of **Eloquent Models**, **Resource Controllers**, **CRUD operations with validation**, **image upload**, and **Query Builder** for database interactions.

---

## 🚀 Features

- Create, Read, Update, and Delete (CRUD) operations
- Resource Controllers for clean and RESTful architecture
- Eloquent ORM for database interaction
- Image upload with validation
- Form validation using Laravel validation rules
- Query Builder for complex database queries
- Blade templating for UI
- MySQL database integration

---

## 🛠️ Technologies Used

- **Laravel**
- **PHP**
- **MySQL**
- **Blade Template Engine**
- **Eloquent ORM**
- **Laravel Query Builder**
- **Git & GitHub**

---

## 📁 Project Structure Highlights

- **Models**
  - Used Eloquent models to represent database tables
  - Handled database operations such as insert, update, delete, and fetch records

- **Resource Controllers**
  - Implemented CRUD operations using Laravel resource controllers
  - Followed RESTful conventions for better code organization

---
## 🔄 CRUD Operations with Validation

- **Create**
  - Form validation using Laravel validator
  - Image upload with file type and size validation
  - Data stored using Eloquent ORM

- **Read**
  - Display records using Blade views
  - Fetch data using Eloquent and Query Builder

- **Update**
  - Update existing records with validation
  - Replace or retain uploaded images

- **Delete**
  - Delete records and associated images safely

---

## 🖼️ Image Upload

- Images are uploaded using Laravel file handling
- Validation includes:
  - Required field check
  - File type (jpg, png, jpeg)
  - Maximum file size
- Images are stored in the public storage directory

---
## ⚙️ Installation & Setup

1. Clone the repository:
   ```bash
   git clone git@github.com:your-username/crud-app.git
Navigate to the project directory:

bash
Copy code
cd crud-app
Install dependencies:

bash
Copy code
composer install
Create .env file:

bash
Copy code
cp .env.example .env
Generate application key:

bash
Copy code
php artisan key:generate
Configure database in .env file

Run migrations:

bash
Copy code
php artisan migrate
Start the server:

bash
Copy code
php artisan serve
