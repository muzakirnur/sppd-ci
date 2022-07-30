## Server Requirements

PHP version 7.4 or higher is required, with the following extensions installed:

- [intl](http://php.net/manual/en/intl.requirements.php)
- [libcurl](http://php.net/manual/en/curl.requirements.php) if you plan to use the HTTP\CURLRequest library

Additionally, make sure that the following extensions are enabled in your PHP:

- json (enabled by default - don't turn it off)
- [mbstring](http://php.net/manual/en/mbstring.installation.php)
- [mysqlnd](http://php.net/manual/en/mysqlnd.install.php)
- xml (enabled by default - don't turn it off)

## Cara Instalasi

- Clone Repository dengan cara ketikkan<code>git clone https://github.com/muzakirnur/sppd-ci.git myappname</code> di terminal
- Rename file <code>env</code> menjadi <code>.env</code>
- Set up database credentials pada file <code>.env</code> seperti berikut, sesuaikan dengan database yang digunakan
  <code>database.default.hostname = localhost</code>
  <code>database.default.database = namaDatabase</code>
  <code>database.default.username = root</code>
  <code>database.default.password =</code>
  <code>database.default.DBDriver = MySQLi</code>
  <code>database.default.DBPrefix =</code>
- Jalankan <code>php spark migrate</code> untuk menjalankan migrasi ke database
- Jalankan <code>php spark db:seed UserSeeder</code> untuk menjalankan seeder
- Jalankan <code>php spark serve</code> untuk menjalankan server
- login dengan
  <code>username : admin</code>
  <code>password : password</code>
