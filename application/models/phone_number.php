<?php

class phone_number extends CI_Model
{
    public function get_entries()
    {
        $query = $this->db->get('phone_number');
        if (count($query->result()) > 0) {
            return $query->result();
        }
    }

    public function insert_entry($data)
    {
        return $this->db->insert('phone_number', $data);
    }

    public function delete_entry($id)
    {
        return $this->db->delete('citest', array('id' => $id));
    }

    public function single_entry($id)
    {
        $this->db->select('id');
        $this->db->from('phone_number');
        $this->db->where('user_id', $id);
        $query = $this->db->get();
        if (count($query->result()) > 0) {
            return $query->row();
        }
    }

    public function single_entry_edit($id)
    {
        /* $this->db->select('*');
        $this->db->from('phone_number');
        $this->db->where('user_id', $id); */


        $query = $this->db->query("SELECT *,GROUP_CONCAT(phone_number.number) AS same FROM phone_number WHERE user_id = '$id'");
        if (count($query->result()) > 0) {
            return $query->row();
        }
    }

    public function search($data)
    {
        /* $this->db->select('*');
        $this->db->from('phone_number');
        $this->db->where('user_id', $id); */

        $getdata = $data[0]->id;
        /* "SELECT * FROM citest, phone_number WHERE citest.id = '" . $getdata . "' AND user_id = '" . $getdata . "" */


        $query = $this->db->query("SELECT * FROM citest, phone_number WHERE citest.id = '" . $getdata . "' AND user_id = '" . $getdata . "'");

        return $query->result();
    }



    public function update_entry_ph($datas)
    {


        $id = $datas['id'];

        $query = $this->db->query("SELECT id FROM phone_number WHERE user_id = '$id'");


        $result = $query->result();



        $arrleng = count($datas['value']);

        for ($n = 0; $n < $arrleng; $n++) {

            $number = $datas['value'][$n];

            $postid = $result[$n]->id;

            $this->db->query("UPDATE phone_number SET number ='" . $number . "' WHERE user_id = '" . $id . "' AND id =  '" . $postid . "'");
        }
    }

    public function search_number($data)
    {
        $query = $this->db->query("SELECT * FROM phone_number WHERE number = '" . $data . "'");

        return $query->result();
    }
}
