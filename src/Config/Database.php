<?php 
namespace App\Config ;
require __DIR__ . '/../../vendor/autoload.php';
use Dotenv\Dotenv; 
use PDO ;
use PDOException;

class Database {
    
    
    private static $conn ; 
    public function __construct()
    {
        $dotenv = Dotenv::createImmutable(__DIR__ . '/../../');
        $dotenv->load();


         $servername = $_ENV['DB_HOST'];
         $username = $_ENV['DB_USER'];
         $password = $_ENV['DB_PASSWORD'];
         $db_name = $_ENV['DB_NAME'];
       
         try{
     
             self::$conn = new PDO("mysql:host=$servername;dbname=$db_name" , $username , $password);
             self::$conn->setAttribute(PDO::ATTR_ERRMODE , PDO::ERRMODE_EXCEPTION);
     
         }catch(PDOException $err){
            die("connection field" . $err->getMessage());
         }
    }

    public static function getConnection(){
        if(!self::$conn){
            new self();
        }
        return self::$conn ; 
    }
 

}

$db = Database::getConnection();
