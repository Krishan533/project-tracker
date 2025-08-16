# project-tracker
# Final Project Tracker

A user-friendly web-based system to submit, track, and manage client projects. Built with **PHP**, **MySQL**, and **Bootstrap 5**, with a modern UI/UX like `www.ap.lk/dashboard`.

---

## Features

- **Admin Panel**
  - Add, edit, delete client projects
  - Dashboard overview (Total, Completed, Pending)
  - Searchable, sortable project table (DataTables)
  - SweetAlert confirmations for delete actions
- **Client Panel**
  - Submit new project
  - Track project progress via phone/project ID
  - Progress bar and status badges

---

## Requirements

- PHP >= 7.4
- MySQL 
- Apache server (XAMPP/WAMP/LAMP)
- Composer (optional for dependencies)
- Browser

---

## Folder Structure

final_project_tracker/
├─ admin/
│ ├─ dashboard.php
│ └─ index.php (login)
├─ includes/
│ ├─ auth.php
│ ├─ functions.php
│ └─ partials/
│ ├─ header.php
│ └─ footer.php
├─ public/
│ ├─ index.php (submit project)
│ ├─ track.php (track project)
│ └─ assets/
│ ├─ css/app.css
│ └─ js/app.js
└─ sql/
└─ clients.sql

yaml
Copy
Edit

---

## MySQL Setup

1. Create database:

```sql
CREATE DATABASE final_tracker;
USE final_tracker;
Create clients table:

sql
Copy
Edit
CREATE TABLE clients (
  id INT AUTO_INCREMENT PRIMARY KEY,
  project_id VARCHAR(50) NOT NULL,
  name VARCHAR(100) NOT NULL,
  phone VARCHAR(20) NOT NULL,
  email VARCHAR(100),
  address TEXT,
  project_status ENUM('Pending','In Progress','Completed') DEFAULT 'Pending',
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
Note: id is the auto-generated user/project ID. Do not submit it in the form.

Installation
Copy project to your server root (e.g., htdocs/final_project_tracker/ for XAMPP).

Import clients.sql into MySQL via phpMyAdmin or CLI.

Update includes/functions.php with your DB credentials:

php
Copy
Edit
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "final_tracker";
Access in browser:

Admin: http://localhost/final_project_tracker/admin

Client: http://localhost/final_project_tracker/public
