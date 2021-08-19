<?php
class Registration extends CI_Controller
{
    public function index()
    {
        $this->load->helper('form');
        $this->load->model('registermodel');
        $country_list = $this->registermodel->loadCountry();

        $countries[0] = 'Select Country';
        foreach ($country_list as $country) {
            $arr = get_object_vars($country);
            $countries[$arr['id']] = $arr['countryname'];
        }
        // echo "<pre>";
        // print_r($countries);
        // echo "</pre>";
        $this->load->view('register',   compact('countries'));
    }

    public function getState()
    {
        $country_id = $this->input->post('country_id');
        $this->load->model('registermodel');
        $state_list = $this->registermodel->loadState($country_id);
        echo json_encode($state_list);
    }
    public function getCity()
    {
        $city_id = $this->input->post('state_id');
        $this->load->model('registermodel');
        $city_list = $this->registermodel->loadCity($city_id);
        echo json_encode($city_list);
    }
    public function user_registration()
    {
        $this->load->library('form_validation');
        $this->load->library('upload');
        // $this->form_validation->set_error_delimiters('<div class="text-danger">', '</div>');
        $this->form_validation->set_rules('name', 'Username', 'required|alpha|min_length[5]|max_length[20]');
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[8]');
        $this->form_validation->set_rules('password1', 'Password-Confirm', 'required|match[password]');
        $this->form_validation->set_rules('country', 'Country Name', 'required');
        $this->form_validation->set_rules('state', 'State Name', 'required');
        $this->form_validation->set_rules('city', 'City Name', 'required');
        $this->form_validation->set_rules('radio', 'Gender', 'required');
        $this->form_validation->set_rules('file', 'File', 'required');

        if ($this->form_validation->run() == TRUE) {
            $this->load->view('public/admin_login');
        } else {
            $this->load->view('register');
        }

        $user_data = $this->input->post();
    }
}