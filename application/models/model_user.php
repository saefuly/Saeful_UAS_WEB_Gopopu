<?php
class Model_user extends CI_Model{

	var $tabel = 'user';
    
    function list_user(){
        // ambil data user dari tabel user
        $user = $this->db->get('user');
        return $user;
    }
    
    function getUser($username){
        return $this->db->get_where('user',array('username'=>$username));
    }
}
?>