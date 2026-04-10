# 🚀 Laravel Authentication, Session & Database Relationship Project

## 📌 Overview

This project is a simple web application built using **Laravel** that
demonstrates fundamental web development concepts, including:

- Authentication (Register, Login, Logout)
- Session Management
- Database Relationships (Product & Variant)
- Route Protection using Middleware
- MVC Architecture

This project is designed as a learning implementation of how Laravel handles
user authentication, data management, and access control.

---

## 🧱 Tech Stack

- **Framework:** Laravel
- **Language:** PHP
- **Database:** MySQL
- **Frontend:** Blade (Laravel Template Engine)
- **Server:** Laragon / Localhost

---

## 🗄️ Database Structure

### 1. Users Table

Stores user authentication data.

| Field    | Description     |
| -------- | --------------- |
| id       | Primary Key     |
| name     | User name       |
| email    | User email      |
| password | Hashed password |

---

### 2. Products Table

| Field | Description  |
| ----- | ------------ |
| id    | Primary Key  |
| name  | Product name |

---

### 3. Variants Table

| Field      | Description            |
| ---------- | ---------------------- |
| id         | Primary Key            |
| name       | Variant name           |
| product_id | Foreign key (products) |

---

## 🔗 Database Relationship

- One Product → Many Variants
- One Variant → Belongs to one Product

```php
// Product Model
public function variants()
{
    return $this->hasMany(Variant::class);
}

// Variant Model
public function product()
{
    return $this->belongsTo(Product::class);
}
```

---

## 🔐 Authentication Features

- ✅ User Registration
- ✅ User Login
- ✅ User Logout
- ✅ Session-based Authentication

Laravel handles authentication using session storage.

---

## 🗂️ Session Management

This project demonstrates how to:

- Store session data
- Retrieve session data
- Delete session data

Example:

```php
session(['product_name' => 'Example']);
session('product_name');
session()->forget('product_name');
```

---

## 🛡️ Route Protection (Middleware)

Protected routes are secured using Laravel middleware:

```php
Route::middleware('auth')->group(function () {
    Route::get('/products', ...);
});
```

Only authenticated users can access protected routes.

---

## 🌐 Routes Overview

### Public Routes

- `/login`
- `/register`

### Protected Routes

- `/dashboard`
- `/products`

### Session Routes

- `/session/store`
- `/session/get`
- `/session/delete`

---

## 📊 Features

- Display products and their variants
- Authentication system
- Session handling
- Protected routes using middleware
- Simple UI using Blade

---

## 🔄 Application Flow

1. User opens the application
2. User registers or logs in
3. Laravel stores user data in session
4. User accesses protected routes
5. Application fetches data from database
6. User logs out → session is destroyed

---

## ⚙️ Installation Guide

Follow these steps to run the project locally:

```bash
# Clone repository
git clone https://github.com/your-username/laravel-session-db.git

# Go to project folder
cd laravel-session-db

# Install dependencies
composer install

# Copy environment file
cp .env.example .env

# Generate app key
php artisan key:generate

# Configure database in .env

# Run migration
php artisan migrate

# Start server
php artisan serve
```

---

## 🎯 Key Concepts Implemented

- MVC (Model-View-Controller)
- Eloquent ORM
- Authentication (Session-based)
- Middleware Security
- Relational Database Design

---

## 👨‍💻 Author

**Rivaldo Tandoko** Frontend Developer & Informatics Engineering Student

---

## ⭐ Notes

This project demonstrates the integration of authentication, session management,
and relational databases within a structured Laravel application.
