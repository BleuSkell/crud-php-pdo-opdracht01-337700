<?php
    class ChantalModel {
        private $db;

        public function __construct()
        {
            $this->db = new Database();
        }

        public function getAppointments() {
            $sql = "SELECT   ID
                            ,color1
                            ,color2
                            ,color3
                            ,color4
                            ,phone
                            ,mail
                            ,date
                            ,treatment
                    FROM     afspraak";

            $this->db->query($sql);

            return $this->db->resultSet();
        }
    }
?>