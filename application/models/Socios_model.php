<?php
defined('BASEPATH') OR exit('No direct script access allowed');

final class Socios_model extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
    }

    public function insertSocio($nombre,$apellidos,$dni,$direccion,$ciudad,$email,$telefono,$promedio)
    {
        $datos = array(
            'nombre'    => $nombre,
            'apellidos' => $apellidos,
            'dni'       => $dni,
            'direccion' => $direccion,
            'ciudad'    => $ciudad,
            'email'     => $email,
            'telefono'  => $telefono,
            'promedio'  => $promedio
        );
        
        $this->db->insert('socios',$datos);
    }

    public function getSocios()
    {
        $sql = 'SELECT * FROM socios';
        $query = $this->db->query($sql);
        return $query->result();
    }

    public function delete($id) {
        $this->db->where('id_socio', $id);
        $this->db->delete('socios');
    }

    // public function editSocio($id) {
    //     $sql = "SELECT * FROM socios s INNER JOIN noticias n on s.id_socio = n.id_socio"
    //             . "WHERE s.id_socio = $id";
    //     $consulta = $this->db->query($sql);
    //     return $consulta->result();
    // }

    function obtenerSocio($id) {
        $result = $this->db->query("SELECT * FROM socios WHERE id_socio='".$id."' LIMIT 1");
        if($result->num_rows()>0){
            return $result->row();
        } else{
            return null;
        }
    }

    public function updateSocio($id_socio, $nombre, $apellidos, $dni, $direccion, $ciudad, $email, $telefono, $promedio)
    {
        $datos = [
            'nombre'    => $nombre,
            'apellidos' => $apellidos,
            'dni'       => $dni,
            'direccion' => $direccion,
            'ciudad'    => $ciudad,
            'email'     => $email,
            'telefono'  => $telefono,
            'promedio'  => $promedio
        ];
        $this->db->where('id_socio', $id_socio);
        $this->db->update('socios',$datos);
    }

    function check_email($email) {
        $this->db->select('email');
        $this->db->where('email', $email);

        $consulta = $this->db->get('socios');

        if ($consulta->num_rows() > 0) {
            return TRUE;
        } 
        else {
            return FALSE;
        }
    }


}