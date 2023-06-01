<?php

class DBC
{
    const SERVER_IP = "127.0.0.1";
    const USER = "root";
    const PASSWORD = "";
    const DATABASE = "credentials";

    private static $connection = null;

    public static function getConnection(){
        if (!self::$connection) {
            self::$connection = mysqli_connect(self::SERVER_IP, self::USER, self::PASSWORD, self::DATABASE);
            if (!self::$connection) {
                die('Could not connect: ' . mysqli_error());
            }
        }
        return self::$connection;
    }

    public static function closeConnection(){
        if(self::$connection){
            mysqli_close(self::$connection);
        }
    }
}
