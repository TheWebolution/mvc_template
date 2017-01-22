<?php
class User {
    private $id;
    private $username;
    private $password;
    private $logged;

    public function __construct($username, $password) {
        if ($username !== null && $password != null) {
            $select = "SELECT * FROM users";
            $query = new Query($select);
            if ($query->status === "SUCCESS") {
                foreach ($query->result as $row) {
                    $this->id = $row["id"];
                    $this->username = $row["username"];
                    $this->logged = true;
                }
            }
        }
        else {
            $this->logged = false;
        }
    }
}
?>
