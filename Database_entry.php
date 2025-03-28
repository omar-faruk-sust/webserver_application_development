<?php

// First way with procedural function call
/*require_once('config/db_config.php');
require 'config/connect.php';

connect($host, $user, $dbName, $password);*/


// Second way to call the object oriented way
require_once('config/db_config.php');
require_once('config/DBConnection.php');

// Step 1: Connect to MySQL server
$pdoObject = DBConnection::connect($host, $user, $dbName, $password);

// Step 2: Create the database if it doesn't exist
$sql = "create database if not exists `$dbName`";
$pdoObject->exec($sql);
echo "Database '$dbName' created or already exists.<br>";

// Step 3: Switch to the new database
$pdoObject->exec("USE `$dbName`");

// Setp 4: SQL statement for creation of tables
$tablesSql = [
    "books" => 'CREATE TABLE IF NOT EXISTS books( 
        book_id   INT AUTO_INCREMENT,
        name  VARCHAR(100) NOT NULL, 
        isbn  VARCHAR(50) NOT NULL,
        PRIMARY KEY(book_id));',
    "authors" => 'CREATE TABLE IF NOT EXISTS authors( 
        author_id   INT AUTO_INCREMENT,
        first_name  VARCHAR(100) NOT NULL, 
        middle_name VARCHAR(50) NULL, 
        last_name   VARCHAR(100) NULL,
        PRIMARY KEY(author_id));',
    "book_authors" => 'CREATE TABLE IF NOT EXISTS book_authors (
        book_id   INT NOT NULL, 
        author_id INT NOT NULL, 
        PRIMARY KEY(book_id, author_id), 
        CONSTRAINT fk_book 
            FOREIGN KEY(book_id) 
            REFERENCES books(book_id) 
            ON DELETE CASCADE, 
            CONSTRAINT fk_author 
                FOREIGN KEY(author_id) 
                REFERENCES authors(author_id) 
                ON DELETE CASCADE
    );'
];

foreach ($tablesSql as $tableName => $sql) {
    $pdoObject->exec($sql);
    echo "Table `$tableName` created successfully. <br>";
}

// Insert data into author table
$authors = [
    ['James', null, 'Bond'],
    ['J.K.', null, 'Rowling'],
    ['Jane', null, 'Austen'],
];

$authorIds = [];

$sqlStatement = $pdoObject->prepare("insert into authors (first_name, middle_name, last_name) values (?, ?, ?)");
foreach ($authors as $author) {
    $sqlStatement->execute($author);
    $authorIds[] = $pdoObject->lastInsertId();
}
echo "Inserted ". count($authors). "Authors. <br>";


// Insert data into book table
$books = [
    ['Rich Daddy', '22334455'],
    ['Shrimad Bhagwat', '11223344'],
    ['Money Power',  '21121121'],
];

$bookId = [];

$sqlStatement = $pdoObject->prepare("insert into books (name, isbn) values (?, ?)");
foreach ($books as $book) {
    $sqlStatement->execute($book);
    $bookId[] = $pdoObject->lastInsertId();
}
echo "Inserted ". count($books). "Books. <br>";



$bookAuthors = [
    [$bookId[0], $authorIds[0]], 
    [$bookId[1], $authorIds[1]], 
    [$bookId[2], $authorIds[2]],
];

$sqlStatement = $pdoObject->prepare("insert into book_authors (book_id, author_id) values (?, ?)");
foreach ($bookAuthors as $bookAuthor) {
    $sqlStatement->execute($bookAuthor);
}
echo "Inserted ". count($bookAuthors). " Book-Author. <br>";


echo "<H2> Database setup completed successfully! <h2>";
