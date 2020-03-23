<?php
class model_login extends CI_Model
{
    public function login($username, $password)
    {
        $check = $this->db->get_where('login', array('username' => $username, 'password' => md5($password)));
        if ($check->num_rows() > 0) {
            return 1;
        } else {
            return 0;
        }
    }

    function ampilData(){
        return $this->db->get('login');
    }

    function ambilData($id){
        $param = array('id_login'=>$id);
        return $this->db->get_where('login',$param);
    }
}
