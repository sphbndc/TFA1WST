# LabDesk POS

LabDesk POS is a four-page CodeIgniter 4 website for organizing laboratory customer and staff records.

## Pages

- `/` — landing page
- `/about` — about page
- `/customers` — customer accounts from a static PHP array
- `/users` — user accounts from a static PHP array

## Run locally

```bash
composer install
php spark serve
```

Open `http://localhost:8080/` in a browser. The application uses CodeIgniter 4, PHP 8.2+, Composer, HTML, and custom CSS.

## Hosting

For InfinityFree, set the production `app.baseURL` in `.env`, then upload `app/`, `public/`, `writable/`, `.env`, `.htaccess`, `spark`, and the Composer files into `htdocs`. Run `composer install --no-dev` before hosting if `vendor/` is not included in the upload package.

No database is used yet. Customer and user records are temporary static PHP arrays in their controllers.
