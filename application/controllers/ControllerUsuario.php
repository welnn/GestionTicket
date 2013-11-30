<?php
    class ControllerUsuario extends CI_Controller{
        function index()
        {
            $this->load->model('ModelUsuario');

            $data['result'] = $this->ModelUsuario->getUsuarios();
            $data['page_title'] = "Usuarios Spring";

            $this->load->view('ShowUsuarios',$data);
        }
    }
?>