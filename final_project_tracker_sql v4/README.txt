
Final Project Tracker (MySQL/PHP) — Ready to Run

Requirements
- WampServer/XAMPP (PHP 7.2+), MySQL
- phpMyAdmin (optional)

Setup
1) Create database: project_tracker (via phpMyAdmin)
2) Import database.sql
3) Copy this folder to your web root:
   - WAMP: C:\wamp\www\final_project_tracker_sql
   - XAMPP: C:\xampp\htdocs\final_project_tracker_sql
4) Open: http://localhost/final_project_tracker_sql/public

Default Admin
- Username: admin
- Password: admin123

Config
- config/db.php: change DB credentials if needed

Routes
- /public/index.php        (Client form)
- /public/track.php        (Client tracking by phone or user ID)
- /admin/index.php         (Admin login)
- /admin/dashboard.php     (Admin dashboard: list/add/edit/delete)

Security Notes
- Change the default admin password after first login (edit in DB).
- For production, move /storage/uploads outside web root and add auth checks.
