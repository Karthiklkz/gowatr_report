<?php
class DbConfig {
    protected $serverName;
    protected $userName;
    protected $password;
    protected $dbName;

    public function __construct() {
        $this->serverName = 'localhost';
        $this->userName = 'root';
        $this->password = '';
        $this->dbName = 'gowatr_api';
    }
}
?>