<?php
class Deliveryuser {
    use Model;

    protected $table = 'user';
    protected $allowedColumns = ['fname','lname','cnum','email','password_hash','id','vnumber'];
    public $errors = [];
    // private $db;

    // function __construct($db) {
    //     $this->db = $db;
    // }

    // function addUser($name, $email, $password) {
    //     $sql = "INSERT INTO user (fname, email, password) VALUES (:fname, :email, :password)";
    //     $stmt = $this->db->prepare($sql);
    //     $stmt->bindParam(':fname', $name, PDO::PARAM_STR);
    //     $stmt->bindParam(':email', $email, PDO::PARAM_STR);
    //     $stmt->bindParam(':password', password_hash($password, PASSWORD_DEFAULT), PDO::PARAM_STR);
    //     return $stmt->execute();
    // }

    // function getUserByEmail($email) {
    //     $sql = "SELECT * FROM user WHERE email = :email";
    //     $stmt = $this->db->prepare($sql);
    //     $stmt->bindParam(':email', $email, PDO::PARAM_STR);
    //     $stmt->execute();
    //     return $stmt->fetch(PDO::FETCH_ASSOC);
    // }

    // function checkUserExists($email) {
    //     $sql = "SELECT COUNT(*) FROM user WHERE email = :email";
    //     $stmt = $this->db->prepare($sql);
    //     $stmt->bindParam(':email', $email, PDO::PARAM_STR);
    //     $stmt->execute();
    //     return $stmt->fetchColumn();
    // }
}
?>
