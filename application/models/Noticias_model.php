<?php
defined('BASEPATH') OR exit('No direct script access allowed');

final class Noticias_model extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
    }

    public function insertNoticia()
    {
    }

    public function getNoticias()
    {
        $sql = 'SELECT * FROM noticias n INNER JOIN socios s ON n.id_socio = s.id_socio';
        $query = $this->db->query($sql);
        return $query->result();
    }

    //muestra el detalle de un articulo por ID
    function detalle_noticia($id_noticia) {

    	$this->db->where('id_noticia', $id_noticia);
    	$consulta = $this->db->get('noticias');
    	return $consulta->row();
    }
}