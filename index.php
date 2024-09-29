 <?php
    echo "<style>  body {background-color: #101010;  color: #eee;}</style> ";
    try {
      $pdo =new PDO("mysql:host=localhost;dbname=products","root","",[PDO::ATTR_DEFAULT_FETCH_MODE=>PDO::FETCH_ASSOC]);
    }
    catch(PDOException $e)
      {
         die($e->getMessage());
      }
      class student{
        public $id;
        public $name;
        public $mark1;
        public $mark2;
        public $mark;
      }
      $stat=$pdo->query("SELECT * FROM students ");
      $result=$stat->fetch();
      print_r($result);
 ?>