# 🍣 SUSHI CRAVING - All You Can Eat & Takeaway

Welcome to **SUSHI CRAVING**, a vibrant and colorful web application designed to bring the **all-you-can-eat sushi experience** online, including a **takeaway option**! 🎌 This project features a **custom-built API** to manage the restaurant’s **menu** dynamically.

---

## 🎨 Project Overview

SUSHI is a **Laravel 12** and **MySQL**-powered website that offers users a beautifully designed interface to explore and order sushi dishes. The website is characterized by **bright colors**, playful aesthetics, and an engaging **user-friendly design**.

📌 **Main Features**:
- 🍱 **Custom Sushi Menu API** – Built to dynamically manage restaurant offerings.
- 🔎 **Search & Filter** – Quickly find favorite sushi dishes.
- 🛒 **Order System** – Add items to cart for an all-you-can-eat or takeaway experience.
- 🎨 **Colorful & Playful UI** – Designed for a fun and immersive experience.

---

## 🛠️ Technologies Used

✔️ **Laravel 12** – Backend framework for handling requests  
✔️ **MySQL** – Database for storing menu items and orders  
✔️ **PHP** – Server-side scripting  
✔️ **HTML5 & CSS3** – Structuring and styling the pages  
✔️ **Bootstrap 5** – Responsive UI components  
✔️ **JavaScript** – Enhancing interactivity  
✔️ **Custom API** – Manages the restaurant's menu dynamically  

---

## 📥 Installation & Setup

Follow these steps to run the project locally:

### 1️⃣ Clone the Repository
```bash
git clone https://github.com/MaDGiiRL/SUSHI.git
cd SUSHI
```

### 2️⃣ Install Dependencies
```bash
composer install
npm install
```

### 3️⃣ Configure Environment
Rename `.env.example` to `.env` and set up your database credentials:
```env
DB_DATABASE=your_database_name
DB_USERNAME=your_username
DB_PASSWORD=your_password
```

### 4️⃣ Run Migrations & Seed the Database
```bash
php artisan migrate --seed
```

### 5️⃣ Start the API & Development Server
```bash
php artisan serve
```

Now open **http://127.0.0.1:8000/** in your browser to access the website.

---

## 🚀 API Endpoints

This project includes a **custom-built API** to manage the restaurant’s menu. Some available endpoints:

- 📌 **Get All Menu Items**: `GET /api/menu`
- 📌 **Get Single Item**: `GET /api/menu/{id}`
- 📌 **Create New Item**: `POST /api/menu`
- 📌 **Update Item**: `PUT /api/menu/{id}`
- 📌 **Delete Item**: `DELETE /api/menu/{id}`

---

## 💡 Contributions & Improvements

Want to contribute? Feel free to **submit a pull request** or open an **issue**! 🚀

---

📌 **Author:** Sofia  
📅 **Last Updated:** March 2025  


## Typography
- font-family: "Poppins", sans-serif;
- font-family: "Ruslan Display", sans-serif;
