<?php 
 
class m_register extends CI_Model{	
	function cek_register($data){		
		$this->db->insert('spkbrevet_users',$data);
	}	
	function cobain($table,$where){		
		return $this->db->get_where($table,$where);
	}
}