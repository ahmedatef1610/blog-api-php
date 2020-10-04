<?php

class Database {

    //Db Params
    private $host = '127.0.0.1:3325';
    private $db_name = 'myblog';
    private $username = 'root';
    private $password = '';
    private $connection;
    private $options = [PDO::MYSQL_ATTR_INIT_COMMAND => "SET time_zone = '+02:00';"];
    // DB Connect

    public function connect() {
        $this->connection = null;
        try {
            $this->connection = new PDO( "mysql:host={$this->host};dbname={$this->db_name}", $this->username, $this->password , $this->options);
            $this->connection->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
        } catch( PDOException $e ) {
            echo 'Connection Error: ' . $e->getMessage();
        }
        return $this->connection;
    }

}

?>