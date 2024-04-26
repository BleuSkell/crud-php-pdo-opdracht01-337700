<?php

class Nagelstudio
{
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    //zangeressen controllers
    public function getTests()
    {
        $sql = "SELECT Id
                      ,Naam
                      ,NettoWaarde
                      ,Land
                      ,Mobiel
                      ,Leeftijd
                      ,Haarkleur
                FROM  zangeres";

        $this->db->query($sql);

        return $this->db->resultSet();
    }
}