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

        public function createAppointment($post) {
            $sql = "INSERT INTO afspraak   ( color1
                                            ,color2
                                            ,color3
                                            ,color4
                                            ,phone
                                            ,mail
                                            ,date
                                            ,treatment) 
                    VALUES                (  :Color1
                                            ,:Color2
                                            ,:Color3
                                            ,:Color4
                                            ,:phone
                                            ,:mail
                                            ,:date
                                            ,:treatment)";
            
            $this->db->query($sql);

            $this->db->bind(':Color1', $post['color1'], PDO::PARAM_STR);
            $this->db->bind(':Color2', $post['color2'], PDO::PARAM_STR);
            $this->db->bind(':Color3', $post['color3'], PDO::PARAM_STR);
            $this->db->bind(':Color4', $post['color4'], PDO::PARAM_STR);
            $this->db->bind(':phone', $post['phone'], PDO::PARAM_STR);
            $this->db->bind(':mail', $post['mail'], PDO::PARAM_STR);
            $this->db->bind(':date', $post['appointment'], PDO::PARAM_STR);
            $this->db->bind(':treatment', $post['treatment'], PDO::PARAM_STR);

            $this->db->execute();
        }
    }
?>