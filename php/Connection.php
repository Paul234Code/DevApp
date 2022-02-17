<?php
//classe contenant les parametres de connections
class DatabaseConnection
{
    private $_HOST = 'localhost';
    private $_USER = 'root';
    private $_PASSWORD = 'paul198803';
    private $_PORT = 3306;

    //constructeur de la classe sans parametre
    public function __construct()
    {

    }

    //accesseurs et getters
    public function getHost()
    {
        return $this->_HOST;
    }

    public function getUser()
    {
        return $this->_USER;
    }

    public function getPassword()
    {
        return $this->_PASSWORD;
    }

    public function getPort()
    {
        return $this->_PORT;
    }
}
