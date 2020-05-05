<?php

namespace ArmadilloEstates\Database;


abstract class Database
{
    public static function connect(): \PDO
    {
        $db = new \PDO('mysql:host=DB;dbname=armadilloEstates', 'root', 'password');
        $db->setAttribute(\PDO::ATTR_DEFAULT_FETCH_MODE, \PDO::FETCH_ASSOC);

        return $db;
    }
}