<?php
namespace Model;
use \Db;
use \PDO;



abstract class Model
{

    public static $tableName = '';

    public static function getAll(): array
    {
        $list = [];
        $dbInstance = Db::getInstance();
        $db = $dbInstance->getConnection();
        $query = "SELECT * FROM " . static::$tableName;
        $stmt = $db->prepare($query);

        $stmt->execute();
        $res = $stmt->fetchAll(PDO::FETCH_ASSOC);
        foreach ($res as $row) {
            $list[] = new static($row);
        }
        return $list;
    }


    public static function getOne(int $id)
    {
        $dbInstance = Db::getInstance();
        $db = $dbInstance->getConnection();
        $query = "SELECT * from " . static::$tableName . " WHERE id = :id ";
        $stmt = $db->prepare($query);
        $stmt->execute([':id' => $id]);
        if ($res = $stmt->fetch(PDO::FETCH_ASSOC)) {
            return new static($res);
        }
    }

    public static function findById(int $id): array
    {
        $list = [];
        $dbInstance = Db::getInstance();
        $db = $dbInstance->getConnection();
        $query = "SELECT * FROM " . static::$tableName . " WHERE id=:id";
        $stmt = $db->prepare($query);
        $stmt->execute([':id' => $id]);
        $res = $stmt->fetchAll(PDO::FETCH_ASSOC);
        foreach ($res as $row) {
            $list[] = new static($row);
        }
        return $list;


    }

    public static function delete($id)
    {

        $dbInstance = Db::getInstance();
        $db = $dbInstance->getConnection();
        $query = "DELETE FROM " . static::$tableName . " WHERE id=:id";
        $stmt = $db->prepare($query);
        $stmt->execute([':id' => $id]);


    }
}


