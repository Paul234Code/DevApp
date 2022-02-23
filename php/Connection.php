<?php
//classe contenant les parametres de connections de la base de donnée
class DatabaseConnection
{
    private $_HOST = 'localhost';
    private $_USER = 'admin';
    private $_PASSWORD = 'paul198803';
    private $_PORT = 3306;
    //constructeur de la classe sans parameters
    public function __construct()
    {

    }
    //accesseurs et getters
    public function getHost()
    {
        return $this->_HOST;
    }
// get the user
    public function getUser()
    {
        return $this->_USER;
    }
    // get the password
    public function getPassword()
    {
        return $this->_PASSWORD;
    }
// get the number of ports
    public function getPort()
    {
        return $this->_PORT;
    }
}
