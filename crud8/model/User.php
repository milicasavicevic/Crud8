<?php
namespace Model;
use \Db;

class User extends Model
{
    public $id;
    public $name;
    public $surname;
    public $position;
    public $email;
    public $password;
    public static $tableName='users';
   // protected static $class_name=__CLASS__;


//    public function __construct($id, $name, $surname, $position, $email, $password)
//    {
//        $this->id = $id;
//        $this->name = $name;
//        $this->surname = $surname;
//        $this->position = $position;
//        $this->position = $email;
//        $this->position = $password;
//    }
    public function __construct($parameters)
    {
        foreach ($parameters as $key => $value) {
            $this->$key = htmlspecialchars($value);
        }
    }

    public function edit($id)
    {
        $dbInstance = Db::getInstance();
        $db = $dbInstance->getConnection();
        $query = "UPDATE users SET name= :name,surname= :surname,position= :position,email= :email,password= :password WHERE id= :id";
        $stmt = $db->prepare($query);
        $stmt->execute([
            ':name' => $this->name,
            ':surname'=> $this->surname,
            ':position'=>$this->position,
            ':email'=>$this->email,
            ':password'=>$this->password,
            ':id'=>$id
        ]);
    }
    public function add()
    {
        $dbInstance = Db::getInstance();
        $db = $dbInstance->getConnection();
        $query = "INSERT INTO users (name,surname,position,email,password) VALUES (:name,:surname,:position,:email,:password)";
        $stmt = $db->prepare($query);
        $stmt->execute([
            'name' => $this->name,
            'surname'=> $this->surname,
            'position'=>$this->position,
            'email'=>$this->email,
            'password'=>$this->password
        ]);
    }

}