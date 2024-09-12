<?php


class Crud_model extends CI_Model
{


    public function getAllProducts()
    {
        $query = $this->db->get('products');
        if ($query) {
            return $query->result();
        }

    }
    public function InsertProduct($data)
    {

        $query = $this->db->insert('products', $data);

        if ($query) {
            return true;

        } else {
            return false;
        }

    }

    public function getSingleProduct($id)
    {
        $this->db->where('id', $id);

        $query = $this->db->get('products');

        if ($query) {
            return $query->row();
        }
    }

    public function UpdateProduct($data, $id)
    {

        $this->db->where('id', $id);

        $query = $this->db->update('products', $data);

        if ($query) {
            return true;

        } else {
            return false;
        }
    }

    public function DeleteItem($id)
    {
        $this->db->where('id', $id);
        $query = $this->db->delete('products');

        if ($query) {
            return true;
        } else {

            return false;
        }
    }


}

?>