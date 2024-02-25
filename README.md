# Simple PHP/MySQL Note Application

## Description
This is a simple PHP/MySQL Note Application that allows users to perform CRUD (Create, Read, Update, Delete) operations on notes. Users can create new notes, view existing notes, update notes, and delete notes.

## Features
- **Create Note:** Users can create a new note by providing content.
- **View Note:** Users can view a list of existing notes and view the details of each note.
- **Update Note:** Users can edit the content of an existing note.
- **Delete Note:** Users can delete a note.

## Installation
1. Clone this repository to your local machine or web server
2.  Import the provided SQL file (`notes.sql`) into your MySQL database to create the necessary tables. WILL UPLOAD SOON
3.  Configure the database connection in the `config.php` file:
```php
define('DB_HOST', 'localhost');
define('DB_USER', 'username');
define('DB_PASS', 'password');
define('DB_NAME', 'database_name');
