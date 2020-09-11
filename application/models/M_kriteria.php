<?php defined('BASEPATH') OR exit('No direct script access allowed');

class M_kriteria extends CI_Model
{
    private $_table = "spkbrevet_kriteria";
    public $id;
    public $nama_kriteria;
    public $atribut;

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

        $this->db->insert('spkbrevet_kriteria',$data);
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
        $this->nama_kriteria = $post["nama_kriteria"];
        $this->atribut = $post["atribut"];
        $this->db->update($this->_table, $this, array('id' => $post['id']));
    }

    public function delete($id)
    {
        return $this->db->delete($this->_table, array("id" => $id));
    }
}