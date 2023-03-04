<!-- model/database.php -->
<?php
    class Database
    {
        private $host = "localhost";
        private $user = "root";
        private $pass = "";
        private $dbname = "examenditi4s1";

        public $ds;

        public function __construct()
        {
            //set DSN
            $dsn = 'mysql:host='.$this->host.";dbname=".$this->dbname.';charset=utf8'; 

            //options
            $options = array(
                PDO::ATTR_PERSISTENT => true,
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
            );

            // pdof instance
            try
            {
                $this->ds = new PDO($dsn, $this->user, $this->pass, $options);
            }
            catch(PDOException $e)
            {
                echo $e->getMessage();
            }
        } 
    }