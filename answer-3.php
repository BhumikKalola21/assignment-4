<?php

namespace solutions;

// Define the abstract class DatabaseConnector
abstract class DatabaseConnector {
    // Abstract methods to be implemented by subclasses
    abstract public function connect();
    abstract public function disconnect();
}

// Implement MySQLConnector extending DatabaseConnector
class MySQLConnector extends DatabaseConnector {
    public function connect() {
        echo "Connecting to MySQL database<br>";
    }

    public function disconnect() {
        echo "Disconnecting from MySQL database<br>";
    }
}

// Implement PostgreSQLConnector extending DatabaseConnector
class PostgreSQLConnector extends DatabaseConnector {
    public function connect() {
        echo "Connecting to PostgreSQL database<br>";
    }

    public function disconnect() {
        echo "Disconnecting from PostgreSQL database<br>";
    }
}

// Instantiate objects of both classes
$mysqlConnector = new MySQLConnector();
$postgresqlConnector = new PostgreSQLConnector();

// Demonstrate calling connect and disconnect methods
$mysqlConnector->connect();
$mysqlConnector->disconnect();

$postgresqlConnector->connect();
$postgresqlConnector->disconnect();

?>
