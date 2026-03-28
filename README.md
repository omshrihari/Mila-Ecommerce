# 🚀 Full Stack Laravel Application with PhonePe Payment Gateway

A fully functional, production-ready full-stack web application built using **Laravel**, designed with scalability, security, and performance in mind. This project integrates a secure **PhonePe payment gateway**, modern interactive UI using **Livewire**, and a robust authentication system with separate guards for users and admins.

---

## 📌 Features

### 🔐 Authentication & Authorization

* Separate authentication guards for:

  * **Users**
  * **Admins**
* Secure login & registration system
* Role-based access control
* Protected routes and middleware implementation

### 💳 Payment Integration

* Integrated **PhonePe Payment Gateway**
* Secure transaction handling
* Server-side validation of payment responses
* Safe API handling and encryption practices

### ⚡ Interactive UI (Livewire)

* Dynamic, reactive components without full page reloads
* SPA-like experience using **Laravel Livewire**
* Clean and maintainable component-based structure

### 🛠️ Admin Panel

* Dedicated admin dashboard
* Manage users, transactions, and system data
* Secure admin routes with separate guard
* Data control with CRUD operations

### 📧 Mailing System

* Email notifications (e.g., registration, transactions)
* Configurable mail drivers (SMTP, Mailgun, etc.)
* Queue support (optional)

### 🗄️ Database

* MySQL database integration
* Structured schema with migrations and seeders
* Optimized queries and relationships

---

## 🧑‍💻 Tech Stack

| Technology    | Description                                           |
| ------------- | ----------------------------------------------------- |
| Laravel       | Backend framework                                     |
| PHP           | Core programming language                             |
| Livewire      | Interactive frontend (like React, but Laravel-native) |
| MySQL         | Database                                              |
| JavaScript    | Frontend enhancements                                 |
| PhonePe API   | Payment gateway                                       |
| Mail Services | Email handling                                        |

---

## 🔒 Security Practices

* CSRF protection enabled
* Input validation & sanitization
* Secure API integration for payment gateway
* Environment-based configuration (`.env`)
* Password hashing using Laravel’s built-in mechanisms
* Proper guard separation for admin and user roles

---

## ⚙️ Installation & Setup

### 1️⃣ Clone the Repository

```bash
git clone https://github.com/your-username/your-repo-name.git
cd your-repo-name
```

### 2️⃣ Install Dependencies

```bash
composer install
npm install && npm run dev
```

### 3️⃣ Configure Environment

```bash
cp .env.example .env
php artisan key:generate
```

Update `.env` with:

* Database credentials
* Mail configuration
* PhonePe API credentials

### 4️⃣ Run Migrations

```bash
php artisan migrate --seed
```

### 5️⃣ Start the Server

```bash
php artisan serve
```

---

## 📁 Project Structure Highlights

```
app/
 ├── Http/
 │   ├── Controllers/
 │   ├── Livewire/
 │   └── Middleware/
 ├── Models/

routes/
 ├── web.php
 ├── admin.php

resources/
 ├── views/
 ├── livewire/

database/
 ├── migrations/
 ├── seeders/
```

---

## 🔄 Payment Flow (PhonePe)

1. User initiates payment
2. Request sent securely to PhonePe API
3. Payment processed
4. Callback/response handled on server
5. Transaction verified and stored in database

---

## 👨‍💼 Admin Capabilities

* Manage users
* Monitor transactions
* Access system analytics (optional extension)
* Secure login via admin guard

---

## 🧪 Future Improvements

* REST API support
* Mobile app integration
* Advanced analytics dashboard
* Queue & job optimization
* Multi-payment gateway support

---

## 🤝 Contributing

Contributions are welcome! Feel free to fork the repository and submit a pull request.

---

## 📄 License

This project is open-source and available under the **MIT License**.

---

## 🙌 Acknowledgements

* Laravel Community
* PhonePe Developer Docs
* Livewire Documentation

---

## 📬 Contact

For any queries or collaboration:

* GitHub: omshrihari
* Email: [your-email@example.com](mailto:omshrihari1912@gmail.com)

---

⭐ If you like this project, don't forget to give it a star!
