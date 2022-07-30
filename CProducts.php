<?php
class CProducts {
    private $pdo;
    public function __construct() {
        require_once "database.php";
        $this->pdo = new PDO('mysql:host=' . $dbinfo['host'] . ';dbname=' . $dbinfo['dbname'], $dbinfo['user'], $dbinfo['password']);
    }
    public function query($sql, $params = []) {
        $query = $this->db->prepare($sql);
        if ( !empty($params) ) {
            foreach ($params as $key => $value) {
                $query->bindValue(":$key", $value);
            }
        }
        $query->execute();
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }
}
?>