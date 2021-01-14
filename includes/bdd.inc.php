<?php

    $host = 'localhost';
    $db = '06-sql'; // nom au choix
    $user = 'root';
    $password = '';

    $bdd = new PDO(
        'mysql:host=' . $host . ';dbname=' . $db . ';charset=utf8',
        $user,
        $password
    );
    // Équivaut à :
    // $bdd = new PDO('mysql:host=localhost;dbname=06-sql;charset=tf8', 'root', '');

    /*
        php.net :

        The PHP Data Objects (PDO) extension defines a lightweight, consistent interface for accessing databases in PHP. Each database driver that implements the PDO interface can expose database-specific features as regular extension functions. Note that you cannot perform any database functions using the PDO extension by itself; you must use a database-specific PDO driver to access a database server.

        PDO provides a data-access abstraction layer, which means that, regardless of which database you're using, you use the same functions to issue queries and fetch data. PDO does not provide a database abstraction; it doesn't rewrite SQL or emulate missing features. You should use a full-blown abstraction layer if you need that facility.

        PDO ships with PHP 5.1, and is available as a PECL extension for PHP 5.0; PDO requires the new OO features in the core of PHP 5, and so will not run with earlier versions of PHP.
    */

?>