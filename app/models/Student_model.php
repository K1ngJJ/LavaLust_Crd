<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class Student_model extends Model {
    public function getInfo()
    {
        return $this->db->table('student_info')->get_all();
    }
    public function searchInfo($id)
    {
        return $this->db->table('student_info')->where('id',$id)->get();
    }
}
?>
