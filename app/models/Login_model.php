<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class Login_model extends Model {
    public function getUsers()
    {
        return $this->db->table('login_auth')->get_all();
    }
    public function searchUser($id)
    {
        return $this->db->table('login_auth')->where('id', $id)->get();
    }
    public function addUser($data)
    {
        return $this->db->table('login_auth')->insert($data);
    }
    public function updateToken($id,$data)
    {
        return $this->db->table('login_auth')->where('id',$id)->update($data);
    }
}
?>
