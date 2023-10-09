<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class StudentController extends Controller {
    
    public function home(){
        $this->call->model('Student_model');
        $data['student_info'] = $this->Student_model->getInfo();
        $this->call->view('home',$data);
    }
    
    public function add(){
        $Name = $this->io->post('Name');
        $Age = $this->io->post('Age');
        $Address = $this->io->post('Address');
        $bind = array(
            "Name" => $Name,
            "Age" => $Age,
            "Address" => $Address,
        );
        $this->db->table('student_info')->insert($bind);
        redirect('/home');
    }
    public function delete($id)
    {
        if(isset($id)){
            $this->db->table('student_info')->where("id", $id)->delete();
            redirect('/home');
        }
        else{
            $_SESSION['delete'] = "FAILED";
            redirect('/home');
        }
        
    }
    public function edit($id)
    {
        $this->call->model('Student_model');
        $data['student_info'] = $this->Student_model->getInfo();
        $data['edit'] = $this->Student_model->searchInfo($id);
        $this->call->view('home', $data);
    }
    public function submitedit($id)
    {
        if(isset($id))
        {
            $Name = $this->io->post('Name');
            $Age = $this->io->post('Age');
            $Address = $this->io->post('Address');
        $data = [
            "Name" => $Name,
            "Age" => $Age,
            "Address" => $Address,
        ];
        $this->db->table('student_info')->where("id", $id)->update($data);
        redirect('/home');    
        }
        
    }
}
?>
