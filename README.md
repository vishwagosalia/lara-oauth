### **📌 Laravel Project - README**
This is a Laravel-based web application which demonstrates use of Oauth2.0 using Google.

## 🚀 Prerequisites

Before setting up the project, ensure you have the following installed on your system:

- **PHP** (>= 8.1)
- **Composer** (Dependency Manager for PHP)
- **Postgres** (or any database of your choice)
- **Node.js** & **NPM** (for frontend assets)
- **Git** (for version control)

---

## 🛠️ Installation Steps

### 1️⃣ **Clone the Repository**
<!-- ```sh
git clone https://github.com/your-username/your-repo.git
cd your-repo
``` -->

### 2️⃣ **Install Dependencies**
```sh
composer install
npm install
```

### 3️⃣ **Set Up Environment**
Copy the `.env.example` file and configure your environment settings:
```sh
cp .env.example .env
```
Now, update database credentials in the `.env` file:
```dotenv
DB_CONNECTION=pgsql
DB_HOST=127.0.0.1
DB_PORT=5432
DB_DATABASE=your_database
DB_USERNAME=your_db_user
DB_PASSWORD=your_db_password
```

### 4️⃣ **Generate Application Key**
```sh
php artisan key:generate
```

### 5️⃣ **Run Database Migrations**
```sh
php artisan migrate --seed
```


### 6️⃣ **Compile Frontend Assets**
```sh
npm run dev   # For development
npm run build # For production
```

### 7️⃣ **Run the Server**
```sh
php artisan serve
```
The project will be accessible at: **http://127.0.0.1:8000**

---

## 🔐 Setting Up Google OAuth (If Applicable)

This project uses Google OAuth for authentication:

1. Create OAuth credentials at [Google Cloud Console](https://console.cloud.google.com/).
2. Set up the **Redirect URIs** in the Google console:
   ```
   http://127.0.0.1:8000/auth/google/callback
   http://localhost:8000/auth/google/callback
   ```
3. Update `.env` with:
   ```dotenv
   GOOGLE_CLIENT_ID=your-client-id
   GOOGLE_CLIENT_SECRET=your-client-secret
   GOOGLE_REDIRECT_URI=http://127.0.0.1:8000/auth/google/callback
   ```
4. Clear config cache:
   ```sh
   php artisan config:clear
   php artisan cache:clear
   ```
---

## 🎯 Additional Commands

- **Clear Cache**: `php artisan cache:clear && php artisan config:clear`
- **Run Tests**: `php artisan test`

---
<!--
## 📌 License
This project is open-source and available under the **MIT License**.

---

### ✅ **Now You're Ready to Go! 🚀**
```

This README provides a solid foundation for setting up your Laravel project properly. 🎯🚀 Let me know if you need any modifications! -->