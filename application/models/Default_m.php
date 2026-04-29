<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Default_m extends CI_Model
{
    public function __construct()
    {
        $this->db->query("SET sql_mode = ''");
    }


    public function insert($data, $table)
    {
        $this->db->insert($table, $data);
        return $this->db->insert_id();
    }
    /* ======================================
        Items Insert Area End
    ======================================== */



    public function update($data, $id, $table)
    {
        $this->db->where('id', $id);
        $this->db->update($table, $data);
        return $id;
    }

    /* ======================================
        Items Update Area End
    ======================================== */



    public function delete($id, $table)
    {
        $this->db->delete($table, array('id' => $id));
        return $id;
    }
    /* ======================================
        Items Delete Area End 
    ======================================== */

  

    public function select($table)
    {
        $this->db->select();
        $this->db->from($table);
        $query = $this->db->get();
        $query = $query->result();
        return $query;
    }
    /* ======================================
        Items Select Area End
    ======================================== */

    

    public function single_select($table)
    {
        $this->db->select();
        $this->db->from($table);
        $query = $this->db->get();
        $query = $query->row();
        return $query;
    }
    /* ======================================
        Single Items Select Area End
    ======================================== */

    

    public function single_select_by_id($id, $table)
    {
        $this->db->select();
        $this->db->from($table);
        $this->db->where('id', $id);
        $query = $this->db->get();
        $query = $query->row();
        return $query;
    }
    /* ======================================
        Single Items Select By ID Area End
    ======================================== */

    

    public function check_existing_email($email, $table)
    {
        $this->db->select('u.email');
        $this->db->from($table.' '.'as u');
        $this->db->where('email', $email);
        $query = $this->db->get();
        $query = $query->row();
        return $query;
    }
    /* ======================================
        check_existing_email Area End
    ======================================== */



    public function update_in($data, $ids, $table)
    {
        $this->db->where_in('id', $ids);
        $this->db->update($table, $data);
        return 1;
    }
    /* ======================================
        Update_In  Area End
    ======================================== */



    public function get_categories_with_items() {
        // Fetch all categories
        $this->db->select('*');
        $this->db->from('table name');
        $categories = $this->db->get()->result_array();
    
        // Loop through each category and fetch its items
        foreach ($categories as $key => $category) {
            $category_id = $category['id'];
    
            // Fetch items for the current category
            $this->db->select('*');
            $this->db->from('table name');
            $this->db->where('category_id', $category_id);
            $categories[$key]['items'] = $this->db->get()->result_array();
        }
    
        return $categories;
    }
    /* ======================================
        Table join Area End
    ======================================== */



    public function user_login($username, $password)
    {
        
        $this->db->from('users u');
        $this->db->where("(u.email = '$username' OR u.username = '$username')"); 
        $this->db->limit(1);
        $query = $this->db->get();
        $user = $query->row(); 

        if (password_verify($password, $user->password)) {
            return $user; 
        } else {
            return false;
        }
    }
    /* ======================================
        User Login Area End
    ======================================== */



 


}
