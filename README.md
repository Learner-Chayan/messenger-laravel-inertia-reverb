# Real-Time Chat Application
# Chayan Roy

This is a real-time chat application built using **Laravel Jetstream (Inertia.js)** and **Reverb**. This README provides a step-by-step guide for anyone who wants to clone, set up, and run this project locally.

---

## Features

- Real-time messaging using Laravel broadcasting.
- User authentication and management with Jetstream.
- Built-in Vue.js integration for dynamic front-end features.
- Private channels for chat security.
- Modern architecture leveraging Laravel, Inertia.js, and Vue.js.

---



## Installation

Follow these steps to set up and run the project locally:

### Step 1: Clone the Repository

```bash
clone the project
```

### Step 2: Install PHP Dependencies

```bash
composer install
```

### Step 3: Install Node.js Dependencies

```bash
npm install
```

or, if using yarn:

```bash
yarn install
```

### Step 4: Set Up the Environment File

Copy the `.env.example` file to `.env`:

```bash
cp .env.example .env
```

Edit the `.env` file to configure the following settings:

1. **Database Configuration**
   ```env
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=your_database_name
   DB_USERNAME=your_database_user
   DB_PASSWORD=your_database_password
   ```

2. **Broadcasting Configuration**
   ```env
   BROADCAST_DRIVER=pusher
   PUSHER_APP_ID=your-reverb-app-id
   PUSHER_APP_KEY=your-reverb-app-key
   PUSHER_APP_SECRET=your-reverb-app-secret
   PUSHER_APP_CLUSTER=your-reverb-app-cluster
   ```
   Replace the `PUSHER_` keys with your **Reverb** broadcasting credentials.

### Step 5: Generate Application Key

```bash
php artisan key:generate
```

### Step 6: Run Migrations

```bash
php artisan migrate
```

### Step 7: Seed the Database (Optional)

If you have seeders defined, run:

```bash
php artisan db:seed
```

### Step 8: Build Frontend Assets

```bash
npm run dev
```

or, for production:

```bash
npm run build
```

### Step 9: Start the Development Server

```bash
php artisan serve
```

### Step 10: Start Reverb

Run the following command to start the Reverb server for broadcasting:

```bash
php artisan reverb:start
```

Open your browser and navigate to:

```
http://127.0.0.1:8000
```




