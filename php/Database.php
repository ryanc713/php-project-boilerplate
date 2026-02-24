<?php

class Database 
{
    public function __construct(
        string $host,
        string $dbname,
        string $username,
        string $password,
        string $charset = 'utf8mb4'
    )
    {
        $dsn = "mysql:host={$host};dbname={$dbname};charset={$charset}";

        $options = [
            PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES   => false,
        ];

        $conn = $this->pdo = new PDO($dsn, $username, $password, $options);

        return $conn;
    }
}