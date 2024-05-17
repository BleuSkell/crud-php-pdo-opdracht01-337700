<?php
    class Chantal extends BaseController {
        private $chantalModel;

        public function __construct() {
            $this->chantalModel = $this->model('ChantalModel');
        }

        public function index() {
            $data = [
                'title' => 'Bling Bling Nail Studio Chantal'
            ];

            $this->view('chantal/index', $data);
        }
    }
?>