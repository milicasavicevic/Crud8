
<?php
class Db
{
    private static $instance = null;
    private $servername = "localhost:3308";
    private $username = "root";
    private $password = "";
    private $dbName = "test";
    private $conn;
    private function __construct()
    {
        $this->conn = new PDO("mysql:host={$this->servername};dbname={$this->dbName}", $this->username,$this->password);
        //echo "connection success";
    }
    public static function getInstance()
    {
        if(!self::$instance) {
            self::$instance = new Db();
        }
        return self::$instance;
    }
    public function getConnection()

    {

        return $this->conn; //or die("connection failed");


    }
    public function read($sql){

        $query = $this->connection->query($sql);

        if ($query == false) {
            return false;
        }

        $rows = array();

        while ($row = $query->fetch_array()) {
            $rows[] = $row;
        }

        return $rows;
    }

}
