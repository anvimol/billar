<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Usuarios extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Usuarios_model');
		$this->load->library('encryption');
	}

 	function index()
	{
		$data = [
    		'selUsuario'   => $this->Usuarios_model->getUsuarios(),
    		'selPerfil'   => $this->Usuarios_model->getPerfil(),
    		'titulo'      => 'Usuarios',
    		'app'         => 'CB. ONIL',
    		'descripcion' => 'Socios del Club Billar Onil'
    	];

        $this->load->view('guest/head', $data);
        $this->load->view('guest/nav', $data);
        $this->load->view('guest/header', $data);
        $this->load->view('usuarios/usuarios', $data);
        $this->load->view('guest/footer');
	}

	public function nuevo($value='')
	{
		$data = [
    		'selSocio'  => $this->Usuarios_model->selSocio(),
    		'selPerfil'   => $this->Usuarios_model->selPerfil(),
    		'titulo'      => 'Nuevo usuario',
    		'app'         => 'CB. ONIL',
    		'descripcion' => 'Socios del Club Billar Onil'
    	];

        $this->load->view('guest/head', $data);
        $this->load->view('guest/nav', $data);
        $this->load->view('guest/header', $data);
        $this->load->view('usuarios/nuevo', $data);
        $this->load->view('guest/footer');
	}

	public function insert() {

        $datos = $this->input->post();

        if (isset($datos)) {
            $usuario = $datos['usuario'];
            $password = md5($datos['pass']);
            $estado = $datos['estado'];
            $id_perfil = $datos['idPer'];
            $id_socio = $datos['idSocio'];

            $this->Usuarios_model->insertUsuario($usuario, $password, $estado, $id_perfil, $id_socio);
            redirect('usuarios');
            $datos = NULL;
        }
    }

    public function delete($id = NULL) {
        if ($id != NULL) {
            $this->Usuarios_model->deleteUsuario($id);
            redirect('usuarios');
        }
    }

    public function edit($id = NULL) {
        if ($id != NULL) {
            $data = [
            'titulo'      => 'Modificar usuario',
            'app'         => 'CB. ONIL',
            'descripcion' => 'Usuarios Club Billar Onil',
        ];
            $data['datosUsuario'] = $this->Usuarios_model->obtenerUsuario($id);
            $this->load->view('guest/head', $data);
            $this->load->view('guest/nav', $data);
            $this->load->view('guest/header', $data);
            $this->load->view('usuarios/edit', $data);
            $this->load->view('guest/footer');
        } else {
            redirect('usuarios');
        }
    }

    public function update()
    {
        $datos = $this->input->post();

        if (isset($datos)) {
            $id_usuario = $datos['id_usuario'];
            $usuario = $datos['usuario'];
            $pass = md5($datos['pass']);
            $estado = $datos['estado'];

            $this->Usuarios_model->updateUsuario($id_usuario, $usuario, $pass, $estado);
            redirect('usuarios');
        }
    }
}