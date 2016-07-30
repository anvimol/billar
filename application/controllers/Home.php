<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->model('Noticias_model');
    }

    public function index()
    {
    	$data = [
    		'titulo'      => 'Home',
    		'app'         => 'CB. ONIL',
    		'descripcion' => 'Bienvenido al Club Billar Onil',
    		'contenido'   => 'guest/content',
            'resultado'   => $this->Noticias_model->getNoticias()
    	];

        $this->load->view('guest/head', $data);
        $this->load->view('guest/nav', $data);
        $this->load->view('guest/header', $data);
        $this->load->view('guest/content', $data);
        $this->load->view('guest/footer');
    }

    public function detalle_noticia($id_noticia) {

        $data = [
            'app'         => 'CB. ONIL',
            'descripcion' => 'Bienvenido al Club Billar Onil',
            'contenido'   => 'guest/content',
            'resultado'   => $this->Noticias_model->getNoticias()
        ];

        $id_limpio = $this->security->xss_clean($id_noticia);
        $data['detalle'] = $this->Noticias_model->detalle_noticia($id_limpio);
        $data['titulo'] = $data['detalle']->titulo;
        $this->load->view('guest/head', $data);
        $this->load->view('guest/nav', $data);
        $this->load->view('guest/header', $data);
        $this->load->view('noticias/contenido', $data);
        $this->load->view('guest/footer');
    }

}