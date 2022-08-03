<?php
class Database
{
    public function __construct()
    {
        $host='localhost';
        $user='root';
        $password='Weakpass$12';
        //public $connection;
        try{
            $connection=new PDO("mysql:host=$host;dbname=addressbook",$user,$password);
            echo "Connected";

        }catch(PDOException $e){
          echo "Connection error ".$e->getMessage();

        }
    }
        
    
}

?>