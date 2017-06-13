# PHP-MYSQLI Databases OOP
<hr>

This is a simple OOP database connection to MYSQL


## Installation
To utilize this class, first import Database.php into your project, and require it.

```php
require_once ('Database.php');
```

## Configuration
Replace with your database credential details on the config.ini

```
[database]
username = username here
password = password here
dbname = database name
```

## Query
Simple example

```php
$db = new Db();
$rows = $db -> select("SELECT `name`,`email` FROM `users` WHERE id=5");
```
