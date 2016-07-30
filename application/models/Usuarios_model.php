<?php
defined('BASEPATH') OR exit('No direct script access allowed');

Class Usuarios_model extends CI_Model
{

	public function __construct()
	{
		parent::__construct();
	}

	public function selPerfil() {
        $query = $this->db->query("SELECT * FROM perfil");
        //retornamos todos los registros de la tabla perfil
        return $query->result();
    }

    public function selSocio() {
        $query = $this->db->query("SELECT * FROM socios ORDER BY apellidos");
        //retornamos todos los registros de la tabla perfil
        return $query->result();
    }

    public function getUsuarios()
    {
        $sql = 'SELECT * FROM usuarios u INNER JOIN socios s ON u.id_socio = s.id_socio';
        $query = $this->db->query($sql);
        return $query->result();
    }

    public function getPerfil()
    {
        $sql = 'SELECT * FROM perfil p INNER JOIN usuarios u ON p.id_perfil = u.id_perfil';
        $query = $this->db->query($sql);
        return $query->result();
    }

    public function insertUsuario($usuario, $password, $estado, $id_perfil, $id_socio) {

        $datos = array(
            'usuario'   => $usuario,
            'password'  => $password,
            'estado'    => $estado,
            'id_perfil' => $id_perfil,
            'id_socio'  => $id_socio
        );
        
        $this->db->insert('usuarios',$datos);
    }

    public function deleteUsuario($id) {
        $this->db->where('id_usuario', $id);
        $this->db->delete('usuarios');
    }

    function obtenerUsuario($id) {
        $result = $this->db->query("SELECT * FROM usuarios WHERE id_usuario='".$id."' LIMIT 1");
        if($result->num_rows()>0){
            return $result->row();
        } else{
            return null;
        }
    }

    public function updateUsuario($id_usuario, $usuario, $pass, $estado)
    {
        $datos = [
            'usuario'    => $usuario,
            'password' => $pass,
            'estado'       => $estado
        ];

        $this->db->where('id_usuario', $id_usuario);
        $this->db->update('usuarios',$datos);
    }

	function login($username, $password)
	{
		$this->db-> select('id_usuario, usuario, password');
		$this->db-> from('usuarios');
		$this->db-> where('usuario', $username);
		$this->db-> where('password', MD5($password));
		$this->db-> limit(1);

		$query = $this->db-> get();

		if($query->num_rows() == 1)
		{
		 return $query->result();
		}
		else
		{
		 return false;
		}
	}
}
