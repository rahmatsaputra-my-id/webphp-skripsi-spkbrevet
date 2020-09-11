<?php defined('BASEPATH') OR exit('No direct script access allowed');

class M_bobot extends CI_Model
{
    private $_table = "spkbrevet_bobot";
    public $id;
    public $bobot1;
    public $bobot2;
    public $bobot3;
    public $bobot4;
    public $bobot5;
    public $bobot6;
    public $bobot7;

    /*public function rules()
    {
        return [

            ['field' => 'id_kriteria',
            'label' => 'Id Kriteria',
            'rules' => 'required'],

            ['field' => 'nama_kriteria',
            'label' => 'Nama Kriteria',
            'rules' => 'required']
        ];
    }*/

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }

    
    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["id" => $id])->row();
    }

    public function save($data)
    {

        $this->db->insert('spkbrevet_bobot',$data);
    }

    public function read_update($tabel,$fieldpk,$pk)
    {
        $this->db->where($fieldpk,$pk);
        return $this->db->get($tabel)->result_array();
    }    

    public function update($tabel)
    {
        $post = $this->input->post();
        $this->id = $post["id"];
		$this->bobot1 = $post["bobot1"]/100;
        $this->bobot2 = $post["bobot2"]/100;
        $this->bobot3 = $post["bobot3"]/100;
        $this->bobot4 = $post["bobot4"]/100;
        $this->bobot5 = $post["bobot5"]/100;
        $this->bobot6 = $post["bobot6"]/100;
        $this->bobot7 = $post["bobot7"]/100;

        if( $post["bobot1"]/100 + $post["bobot2"]/100 + $post["bobot3"]/100 + $post["bobot4"]/100 + $post["bobot5"]/100 + $post["bobot6"]/100 + $post["bobot7"]/100 != 1.0){
        	echo '<script>alert("Gagal Menyimpan, Jumlah bobot kriteria harus 100%!");</script>';
        }else {
        	$this->db->update($this->_table, $this, array('id' => $post['id']));
        }
    }

    public function delete($id)
    {
        return $this->db->delete($this->_table, array("id" => $id));
    }
}