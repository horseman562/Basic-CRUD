<?php

class Crud__model extends CI_Model
{
    public function get_entries($offset)
    {
        /* $query = $this->db->get('citest'); */


        /* SELECT a.a_id, GROUP_CONCAT(b.au_user) FROM apis a, apis_user b WHERE b.au_apis = a.a_id */

        $query = $this->db->query("SELECT citest.id, citest.name, GROUP_CONCAT(phone_number.number) AS phone FROM citest, phone_number WHERE phone_number.user_id = citest.id GROUP BY citest.id LIMIT 10 OFFSET $offset");

        if (count($query->result()) > 0) {
            return $query->result();
        }
    }

    public function insert_entry($data)
    {
        return $this->db->insert('citest', $data);
    }

    public function delete_entry($id)
    {
        return $this->db->delete('citest', array('id' => $id));
    }

    public function single_entry($id)
    {

        $this->db->select('*');
        $this->db->from('citest');
        $this->db->where('id', $id);
        $query = $this->db->get();
        if (count($query->result()) > 0) {
            return $query->row();
        }
    }

    public function single_entry_name($name)
    {
        /* $this->db->select('id');
        $this->db->from('citest');
        $this->db->where('name', $name);
        $query = $this->db->get();
        if (count($query->result()) > 0) {
            return $query->row();
        } */

        $query = $this->db->query("SELECT citest.id FROM citest WHERE citest.name = '$name'");

        if (count($query->result()) > 0) {
            return $query->result();
        }
    }

    public function update_entry($data)
    {
        return  $this->db->update('citest', $data, array('id' => $data['id']));
    }

    public function search_name($name)
    {
        $query = $this->db->query("SELECT * FROM citest WHERE citest.name = '$name'");

        if (count($query->result()) > 0) {
            return $query->result();
        }
    }

    /* public function last_id()
    {
        $this->db->select('id');
        $this->db->from('citest');
        return $this->db->orderBy('id', 'DESC');
    } */
}
