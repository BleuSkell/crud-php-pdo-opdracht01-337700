<?php
    class Chantal extends BaseController {
        private $chantalModel;

        public function __construct() {
            $this->chantalModel = $this->model('ChantalModel');
        }

        public function index() {
            $appointments = $this->chantalModel->getAppointments();

            $dataRows = '';

            foreach ($appointments as $appointment) {
                $dataRows .= "<tr> 
                                <td>$appointment->color1</td>
                                <td>$appointment->color2</td>
                                <td>$appointment->color3</td>
                                <td>$appointment->color4</td>
                                <td>$appointment->phone</td>
                                <td>$appointment->mail</td>
                                <td>$appointment->date</td>
                                <td>$appointment->treatment</td>
                             </tr>";
            }

            $data = [
                'title' => 'Bling Bling Nail Studio Chantal',
                'dataRows' => $dataRows
            ];

            $this->view('chantal/index', $data);
        }
    }
?>