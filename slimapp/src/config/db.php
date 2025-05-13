<?php
    class db {
    // Pasqyrimi
    private $dbhost = 'localhost';
    private $dbuser = 'root';
    private $dbpass = '';
    private $dbname = 'smt';
    private $dbport = '3307'; // Vendosim portën këtu

    class db{
        // Pasqyrimi
        private $dbhost = 'localhost';
        private $dbuser = 'root';
        private $dbpass = '';
        private $dbname = 'smt';

    // Lidhja
    public function connect() {
        // Ndrysho lidhjen për të përfshirë portin
        $mysql_connect_str = "mysql:host=$this->dbhost;port=$this->dbport;dbname=$this->dbname";
        $dbConnection = new PDO($mysql_connect_str, $this->dbuser, $this->dbpass);
        $dbConnection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $dbConnection;
    }
}

	?>