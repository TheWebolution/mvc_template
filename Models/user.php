<?php
class User {
    public $id;
    public $username;
    public $password;
    public $logged;
    public $admin;

    public function __construct($username, $password) {
        if ($username !== null && $password != null) {
            $select = "SELECT * FROM users WHERE username = ' . $username . ' AND password = ' . $password . '";
            $query = new Query($select);
            if ($query->status === "SUCCESS") {
                foreach ($query->result as $row) {
                    $this->id = $row["id"];
                    $this->username = $row["username"];
                    $this->password = $row["password"];
                    $this->logged = true;
                    $this->admin = $row["admin"] === 1 ? true : false;
                }
            }
        }
        else {
            $this->logged = false;
            $this->admin = false;
        }
    }
}
?>
