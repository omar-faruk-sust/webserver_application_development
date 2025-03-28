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

/*$authorIds = [];
$sqlStatement = $pdoObject->prepare("insert into authors (first_name, middle_name, last_name) values (?, ?, ?)");
foreach ($authors as $author) {
    $sqlStatement->execute($author);
    $authorIds[] = $pdoObject->lastInsertId();
}
echo "Inserted ". count($authors). "Authors. <br>";

echo "<H2> Database setup completed successfully! <h2>";
*/

try {
    $authorIds = [];
    
    $sqlStatement = $pdoObject->prepare("insert into authors (first_name, middle_name, last_name) values (:first_name, :middle_name, :last_name)");
    foreach ($authors as $key => $author) {
        $firstName = $author[0];
        $middleName = $author[1];
        $lastName = $author[2];

        $sqlStatement->bindValue(":first_name", $firstName, PDO::PARAM_STR);
        $sqlStatement->bindValue(":middle_name", $middleName, PDO::PARAM_STR);
        $sqlStatement->bindValue(":last_name", $lastName, PDO::PARAM_STR);
        
        if ($key == 1) {
            $lastName = "Moti";
        }
        
        $sqlStatement->execute();
        $authorIds[] = $pdoObject->lastInsertId();
    }
    echo "Inserted ". count($authors). "Authors. <br>";

    echo "<H2> Database setup completed successfully! <h2>";

} catch (PDOException $exception) {
    echo "Error inserting authors: " . htmlspecialchars($exception->getMessage()) . "<br>";
}


// Insert data into book
try {
    $books = [
        ['Cloude Computing', '555-222'],
        ['Introduction to Networking', '000-999'],
        ['Object Oriented PHP', '111-888']
    ];

    $bookIds = [];
    $stmtBooks = $pdoObject->prepare("INSERT INTO books (name, isbn) VALUES (:name, :isbn)");

    foreach ($books as $k => $book) {
        $bookName = $book[0];
        $bookIsbn = $book[1];

        $stmtBooks->bindParam(':name', $bookName);
        $stmtBooks->bindParam(':isbn', $bookIsbn);

        if ($k == 2) {
            $bookIsbn = '444-000';
        }

        $stmtBooks->execute();
        $bookIds[] = $pdoObject->lastInsertId();
    }

    echo "Inserted " . count($books) . " books.<br>";
} catch (PDOException $e) {
    echo "Error inserting books: " . htmlspecialchars($e->getMessage()) . "<br>";
}

//Insert data into book_author table
try {
    $stmtLinks = $pdoObject->prepare("INSERT INTO book_authors (book_id, author_id) VALUES (:book_id, :author_id)");

    for ($i = 0; $i < count($books); $i++) {
        $stmtLinks->bindValue(':book_id', $bookIds[$i], PDO::PARAM_INT);
        $stmtLinks->bindValue(':author_id', $authorIds[$i], PDO::PARAM_INT);
        $stmtLinks->execute();
    }

    echo "Linked books with authors securely using bindValue().<br>";
} catch (PDOException $e) {
    echo "Error linking books & authors: " . htmlspecialchars($e->getMessage()) . "<br>";
}
