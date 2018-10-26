<?php

require_once('Bdd/mdp.php'); // créé la variable $MDPBDD, à l'abri de git. Syntaxe : define("MDPBDD", "root");
/* à inclure dans les contrôleurs */
class Database
{
    private static $hote = 'localhost' ;
    private static $bdd = 'progiplus';
    private static $dbUser = 'root';
    
    private static $pdo = null;
    
    public static function connect()
    {
        try
        {
            self::$pdo = new PDO('mysql:host=' . self::$hote. ';dbname=' . self::$bdd,self::$dbUser,MDPBDD);
        }
        catch (PDOException $e)
        {
            die($e-> getMessage());
            exit();
        }
        return self::$pdo;
    }
    
    public static function disconnect()
    {
        self::$pdo = null;
    } 
}
?>
