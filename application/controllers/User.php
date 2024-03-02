<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database(); 
        $this->load->helper('url');
        $this->load->library('session'); 
        $this->load->model('User_model');

    }
    public function index(){
        $this->load->view('user/fejvoks');
    }
    
    public function schedule()
    {
        $this->load->view('user/schedule');
    }
    public function speaker()
    {
        $this->load->view('user/speaker');
    }
    public function venue()
    {
        $this->load->view('user/venue');
    }
    
    public function register()
    {
        $this->load->view('user/register');
    }
    
    public function submitdata()
     {
        $checkBox1 = implode(',', $this->input->post('qualif'));
        $checkBox2 = implode(',', $this->input->post('langs'));

        $data = array(
           'unique_id' => $this->input->post('uniqueid'),
            'name' => $this->input->post('name1'),
            'email' => $this->input->post('email'),
            'gender' => $this->input->post('gender'),
            'd_o_b' => $this->input->post('dob'),
            'Religion' => $this->input->post('religion'),
            'Caste' => $this->input->post('caste'),
            'fname' => $this->input->post('fname'),
            'foccup' => $this->input->post('foccup'),
            'mname' => $this->input->post('mname'),
            'moccup' => $this->input->post('moccup'),
            'qualif' => $checkBox1,
            'address' => $this->input->post('address'),
            'cnumber' => $this->input->post('number'),
            'degree' => $this->input->post('degree'),
            'langs' => $checkBox2
        );

        if ($this->User_model->insertUser($data)) {
            $uniqueId = $this->input->post('uniqueid');
            echo "<script>alert(\"Your registration has been done successfully. Your Unique ID is: $uniqueId \");</script>";
        } else {
            echo "Error: Unable to insert user details.";
        }
    }
    
    public function loginpage()
    {
        $this->load->view('user/loginpage');
    }
    public function check_login() {
        $uniqueId = $this->input->post('uniqueid');
        $dob = $this->input->post('dob');
    
        $isUniqueIdValid = $this->User_model->check_unique_id($uniqueId); 
    
        if ($isUniqueIdValid) {
            $this->session->set_userdata('uniqueid', $uniqueId);
            redirect('User/profile/' . $uniqueId);
        } else {
            redirect('User/index?error=Incorrect Unique id');
        }
    }
    
    public function profile($unique_id) {
        $this->load->model('User_model');
        $data['row'] = $this->User_model->getUser($unique_id);
        $data['qualif'] = explode(',', $data['row']['qualif']);
        $data['langs'] = explode(',', $data['row']['langs']); 
        $this->load->view('user/profile', $data);
    }
    public function updateuser() {
        if ($this->input->post()) {
            $data = array(
                'name' => $this->input->post('name1'),
                'email' => $this->input->post('email'),
                'gender' => $this->input->post('gender'),
                'd_o_b' => $this->input->post('dob'),
                'Religion' => $this->input->post('religion'),
                'Caste' => $this->input->post('caste'),
                'fname' => $this->input->post('fname'),
                'foccup' => $this->input->post('foccup'),
                'mname' => $this->input->post('mname'),
                'moccup' => $this->input->post('moccup'),
                'qualif' => implode(',', $this->input->post('qualif')),
                'address' => $this->input->post('address'),
                'cnumber' => $this->input->post('number'),
                'degree' => $this->input->post('degree'),
                'langs' => implode(',', $this->input->post('langs'))
            );

            if ($this->User_model->updateUser($data, $this->input->post('unique_id'))) {
                redirect('user/profile/' . $this->input->post('unique_id'));
            } else {
                echo "Error: Unable to update user profile.";
            }
        }
    }
    
    
}