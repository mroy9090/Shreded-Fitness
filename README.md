# 🏋️‍♂️ Shreded-Fitness

Welcome to **Shreded-Fitness** — a complete gym management website built with PHP and Laravel. This platform helps gym owners manage members, trainers, classes, and workouts all in one place.

---

## 🚀 Features

### 🧑‍💼 Member Management
- Member registration and login
- User profile with personal info and membership status
- Membership plans: Monthly, Quarterly, Annual
- Auto-renew and manual renew options

### 🗓️ Class & Schedule Management
- View all available classes (Yoga, CrossFit, Zumba, HIIT, etc.)
- Schedule calendar and trainer assignments
- Members can join or leave classes
- Class limits and waiting lists

### 🏋️ Trainer Panel
- Admins can add and manage trainer profiles
- Assign trainers to specific classes or personal training slots
- Trainers can manage their schedules and view assigned classes

### 📈 Workout & Diet Tracking
- Personalized workout plans
- Diet and nutrition tracking with calorie counters
- Daily log for members to track progress
- Trainer-suggested routines

### 💳 Payment Integration (SSLCommerz)
- Integrated with SSLCommerz for secure online payments
- Handles membership plan payments and invoices
- Payment status and transaction logs
- Support for manual and auto-renew plans

### 🔔 Notifications & Announcements
- Email and in-app notifications
- Workout reminders, class alerts
- Gym-wide announcements

### 📊 Admin Dashboard
- View all registered members, trainers, classes
- Graphs for revenue, class attendance, active/inactive members
- CRUD management for all modules (users, trainers, classes, workouts)

### 📍 Multi-Branch Support (Optional)
- Manage multiple gym locations
- Separate staff and schedule per branch

---

## 🛠️ Tech Stack

| Layer         | Technology              |
|---------------|--------------------------|
| Backend       | PHP (Laravel 10+)        |
| Frontend      | Blade, HTML, CSS, Bootstrap |
| Database      | MySQL                    |
| Auth          | Laravel Breeze / Sanctum |
| Payments      | SSLCommerz               |
| Hosting       | Laravel Forge / Shared Hosting / VPS |

---

## 📦 Installation Guide

```bash
# Clone the repository
git clone https://github.com/Shreded-Fitness/your-repo.git
cd your-repo

# Install PHP dependencies
composer install

# Install frontend assets
npm install && npm run build

# Setup environment
cp .env.example .env
php artisan key:generate

# Set up the database
php artisan migrate --seed

# Run the application
php artisan serve




---

Do you want me to add instructions or code snippets for configuring SSLCommerz in Laravel too?
