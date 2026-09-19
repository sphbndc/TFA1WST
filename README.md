# LabDesk POS

LabDesk POS is a CodeIgniter 4 website with database-backed customer and user account directories.

## Pages

- `/` — landing page
- `/about` — about page
- `/customers` — customer records loaded through `CustomerModel`
- `/users` — user records loaded through `UserModel`

## Local setup

Requirements: PHP 8.2+, Composer, and MySQL/MariaDB through XAMPP.

1. Start Apache and MySQL in XAMPP.
2. Create the database and tables by importing `database/export.sql` in phpMyAdmin.
3. Confirm the database values in `.env`:

```ini
database.default.hostname = localhost
database.default.database = labdesk_pos
database.default.username = root
database.default.password =
database.default.DBDriver = MySQLi
database.default.port = 3306
```

4. Install the dependencies and start CodeIgniter:

```bash
composer install
php spark serve
```

Open `http://localhost:8080/` and test `/`, `/about`, `/customers`, and `/users`.

The account pages use CodeIgniter Models and `findAll()` to retrieve records through Query Builder. No raw SQL is used by the controllers.
