# project-tracker
# Final Project Tracker

A user-friendly web-based system to submit, track, and manage client projects. Built with **PHP**, **MySQL**, and **Bootstrap 5**, with a modern UI/UX

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


Admin: http://localhost/final_project_tracker/admin

Client: http://localhost/final_project_tracker/public
