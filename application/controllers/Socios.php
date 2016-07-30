<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Socios extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Socios_model');
        $this->load->library('form_validation');
	}

    public function index()
    {
    	$data = [
    		'socios'      => $this->Socios_model->getSocios(),
    		'titulo'      => 'Socios',
    		'app'         => 'CB. ONIL',
    		'descripcion' => 'Socios del Club Billar Onil'
    	];

        $this->load->view('guest/head', $data);
        $this->load->view('guest/nav', $data);
        $this->load->view('guest/header', $data);
        $this->load->view('socios/socios', $data);
        $this->load->view('guest/footer');
    }

    public function nuevo()
    {
    	$data = [
    		'titulo'      => 'Socios',
    		'app'         => 'CB. ONIL',
    		'descripcion' => 'Bienvenido al Club Billar Onil',
    		'contenido'   => 'socios/nuevo'
    	];
    	
    	$this->load->view('guest/head', $data);
        $this->load->view('guest/nav', $data);
        $this->load->view('guest/header', $data);
        $this->load->view('socios/nuevo', $data);
        $this->load->view('guest/footer');
    }

    public function insert()
	{
		$datos = $this->input->post();

        if (isset($datos)) {
            $nombre = $datos['nombre'];
            $apellidos = $datos['apellidos'];
            $dni = $datos['dni'];
            $direccion = $datos['direccion'];
            $ciudad = $datos['ciudad'];
            $email = $datos['email'];
            $telefono = $datos['telefono'];
            $promedio = $datos['promedio'];

            $this->Socios_model->insertSocio($nombre, $apellidos, $dni, $direccion, $ciudad, $email, $telefono, $promedio);
            redirect('socios');
            $datos = NULL;
        }
	}

    public function delete($id = NULL) {
        if ($id != NULL) {
            $this->Socios_model->delete($id);
            redirect('socios');
        }
    }

    public function edit($id = NULL) {
        if ($id != NULL) {
            $data = [
            'titulo'      => 'Modificar socio',
            'app'         => 'CB. ONIL',
            'descripcion' => 'Socios Club Billar Onil',
        ];
            $data['datosSocio'] = $this->Socios_model->obtenerSocio($id);
            $this->load->view('guest/head', $data);
            $this->load->view('guest/nav', $data);
            $this->load->view('guest/header', $data);
            $this->load->view('socios/edit', $data);
            $this->load->view('guest/footer');
        } else {
            redirect('');
        }
    }

    public function update()
    {
        $datos = $this->input->post();

        if (isset($datos)) {
            $id_socio = $datos['id_socio'];
            $nombre = $datos['nombre'];
            $apellidos = $datos['apellidos'];
            $dni = $datos['dni'];
            $direccion = $datos['direccion'];
            $ciudad = $datos['ciudad'];
            $email = $datos['email'];
            $telefono = $datos['telefono'];
            $promedio = $datos['promedio'];

            $this->Socios_model->updateSocio($id_socio, $nombre, $apellidos, $dni, $direccion, $ciudad, $email, $telefono, $promedio);
            redirect('socios');
        }
    }

    public function validar()
    {
        //$this->form_validation->set_error_delimiters('<span class="mensaje_error">','</span>');

        $this->form_validation->set_rules('nombre','Nombre','trim|required|min_length[3]');
        $this->form_validation->set_rules('apellidos','Apellidos','trim|required|min_length[3]');
        $this->form_validation->set_rules('dni','DNI','trim|required|min_length[3]');
        $this->form_validation->set_rules('direccion','Dirección','trim|required|min_length[3]');
        $this->form_validation->set_rules('ciudad','Ciudad','trim|required|min_length[3]');
        $this->form_validation->set_rules('email','Correo','trim|valid_email|callback_check_email');
        $this->form_validation->set_rules('telefono','Teléfono','trim|required|integer');
        $this->form_validation->set_rules('promedio','Promedio','trim|decimal');

        if($this->form_validation->run() === FALSE) {
            $data = [
                'titulo'      => 'Socios',
                'app'         => 'CB. ONIL',
                'descripcion' => 'Bienvenido al Club Billar Onil',
                'contenido'   => 'socios/nuevo'
            ];
            
            $this->load->view('guest/head', $data);
            $this->load->view('guest/nav', $data);
            $this->load->view('guest/header', $data);
            $this->load->view('socios/nuevo', $data);
            $this->load->view('guest/footer');
        }
        else {
            $this->insert();
        }
    }


    function check_email($email) {
        // con consulta a la base de datos
        if($this->Socios_model->check_email($email)) {
            if (empty($this->input->post('email')))
            {
                return TRUE;
            }
            else {
                $this->form_validation->set_message('check_email','El correo ' . $email . ' ya se encuentra en la base de datos');
                return FALSE;
            }
            
        }
        else {
            return TRUE;
        }
    }
}