<?php defined('BASEPATH') OR exit('No direct script access allowed');

class M_alternatif extends CI_Model
{
    private $_table = "spkbrevet_alternatif";
    private $_table2 = "spkbrevet_kriteria";
    public $id;
    public $nama_alternatif;
    public $k1;
    public $k2;
    public $k3;
    public $k4;
    public $k5;
    public $k6;
    public $k7;



    public function getAllKrit()
    {
        return $this->db->get($this->_table2)->result();
    }

    public function besar1()
    {
        return $this->db->select_max('k1')->select_max('k2')->select_max('k3')->select_max('k4')->select_max('k5')->select_max('k6')->select_max('k7')->from('spkbrevet_alternatif')->limit(1)->get()->row_array();
       
    }

    public function bobotAll()
    {
          return $this->db->select('bobot1')->select('bobot2')->select_max('bobot3')->select_max('bobot4')->select_max('bobot5')->select_max('bobot6')->select_max('bobot7')->from('spkbrevet_bobot')->limit(1)->get()->row_array();
    }
/*
    public function jumlah()
    {
        return $this->db->select_sum('bobot_kriteria')->from('spkbrevet_kriteria')->limit(1,0)->limit(1,1)->limit(1,2)->limit(1,3)->limit(1,4)->limit(1,5)->limit(1,6)->get()->row_array();
    }*/

    public function rate()
    {
        return $this->db->select('rating')->from('spkbrevet_alternatif')->limit(1,0)->get()->row_array();
    }

    public function kriteria1()
    {
        return $this->db->select('nama_kriteria')->from('spkbrevet_kriteria')->limit(1,0)->get()->row_array();
    }

     public function kriteria2()
    {
        return $this->db->select('nama_kriteria')->from('spkbrevet_kriteria')->limit(1,1)->get()->row_array();
    }

     public function kriteria3()
    {
        return $this->db->select('nama_kriteria')->from('spkbrevet_kriteria')->limit(1,2)->get()->row_array();
    }

     public function kriteria4()
    {
        return $this->db->select('nama_kriteria')->from('spkbrevet_kriteria')->limit(1,3)->get()->row_array();
    }

     public function kriteria5()
    {
        return $this->db->select('nama_kriteria')->from('spkbrevet_kriteria')->limit(1,4)->get()->row_array();
    }

     public function kriteria6()
    {
        return $this->db->select('nama_kriteria')->from('spkbrevet_kriteria')->limit(1,5)->get()->row_array();
    }

     public function kriteria7()
    {
        return $this->db->select('nama_kriteria')->from('spkbrevet_kriteria')->limit(1,6)->get()->row_array();
    }
    
    public function baris0()
    {
         return $this->db->select('k1')->select('k2')->select('k3')->select('k4')->select('k5')->select('k6')->select('k7')->from('spkbrevet_alternatif')->limit(1,0)->get()->row_array();
    }

    public function baris1()
    {
         return $this->db->select('k1')->select('k2')->select('k3')->select('k4')->select('k5')->select('k6')->select('k7')->from('spkbrevet_alternatif')->limit(1,1)->get()->row_array();
    }

    public function baris2()
    {
         return $this->db->select('k1')->select('k2')->select('k3')->select('k4')->select('k5')->select('k6')->select('k7')->from('spkbrevet_alternatif')->limit(1,2)->get()->row_array();
    }

    public function save($data)
    {
        /*$this->db->select_min('id')->from('spkbrevet_alternatif');*/
        $this->db->insert('spkbrevet_alternatif',$data);
    }

    public function update($tabel)
    {
        $post = $this->input->post();
        $this->id = $post["id"];
        $this->nama_alternatif = $post["nama_alternatif"];
        $this->db->update($this->_table, $this, array('id' => $post['id']));
    }

    public function read_update($tabel,$fieldpk,$pk)
    {
        $this->db->where($fieldpk,$pk);
        return $this->db->get($tabel)->result_array();
    }
    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }
    public function getAsc()
    {
        $this->db->order_by('rating', 'desc');
        return $this->db->get('spkbrevet_alternatif')->result();
    }

    public function update_nilai($tabel)
    {
        $post = $this->input->post();
        $this->id = $post["id"];
        $this->nama_alternatif = $post["nama_alternatif"];
        $this->k1 = $post["k1"];
        $this->k2 = $post["k2"];
        $this->k3 = $post["k3"];
        $this->k4 = $post["k4"];
        $this->k5 = $post["k5"];
        $this->k6 = $post["k6"];
        $this->k7 = $post["k7"];
        $this->rating = 
        ($post["k1"] / $post["maxk1"]) * $post["bobot1"] +
        ($post["k2"] / $post["maxk2"]) * $post["bobot2"] +
        ($post["k3"] / $post["maxk3"]) * $post["bobot3"] +
        ($post["k4"] / $post["maxk4"]) * $post["bobot4"] +
        ($post["k5"] / $post["maxk5"]) * $post["bobot5"] +
        ($post["k6"] / $post["maxk6"]) * $post["bobot6"] +
        ($post["k7"] / $post["maxk7"]) * $post["bobot7"];
        
        $this->db->update($this->_table, $this, array('id' => $post['id']));
    }

    public function update_rating($tabel)
    {
        $post = $this->input->post();
        $this->id = $post["id"];
        $this->nama_alternatif = $post["nama_alternatif"];
        $this->rating = $post["rating"];
            
        $this->db->update($this->_table, $this, array('id' => $post['id']));
    }

    public function update_skor($tabel)
    {
        $post = $this->input->post();
        $this->rating = $post["rating"];
        $this->db->update($this->_table, $this, array( $post['rating']));
    }

    public function delete($id)
    {
        return $this->db->delete($this->_table, array("id" => $id));
        /*$this->db->select_max('id')->from('spkbrevet_alternatif');*/
        /*return $this->db->query('ALTER TABLE spkbrevet_alternatif AUTO_INCREMENT 0');*/
    }
}