<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Calculate extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model("calculate_model");
    }

    public function index()
    {
       $data = $this->calculate_model->fetch_data();
       $this->load->view("calculate/index", $data);

    }

    public function add() {
        if (isset($_POST["add"])) {
            $answer = $this->input->post("number1") + $this->input->post("number2");
            $data = array(
                "number1" => $this->input->post("number1"),
                "number2" => $this->input->post("number2"),
                "answer" => $answer
            );
        } else {
            $data = array(
                "number1" => "0",
                "number2" => "0",
                "answer" => "0"
            );
        }
        $this->load->view("calculate/add", $data);
        redirect('index');

    }

    public function subtraction()
    {
        if (isset($_POST["subtraction"])) {
            $answer = $this->input->post("number1") - $this->input->post("number2");
            $data = array(
                "number1" => $this->input->post("number1"),
                "number2" => $this->input->post("number2"),
                "answer" => $answer
            );
        }else {
            $data = array(
                "number1" => "0",
                "number2" => "0",
                "answer" => "0"
            );
    }
    $this->load->view("calculate/subtraction", $data);

}

    public function multiplication()
    {
        if (isset($_POST["multiplication"])) {
            $answer = $this->input->post("number1") * $this->input->post("number2");
            $data = array(
                "number1" => $this->input->post("number1"),
                "number2" => $this->input->post("number2"),
                "answer" => $answer
            );
        }else {
            $data = array(
                "number1" => "0",
                "number2" => "0",
                "answer" => "0"
            );
    }
    $this->load->view("calculate/multiplication", $data);

}

    public function division()
    {
        if (isset($_POST["division"])) {
            $answer = $this->input->post("number1") / $this->input->post("number2");
            $data = array(
                "number1" => $this->input->post("number1"),
                "number2" => $this->input->post("number2"),
                "answer" => $answer
            );
        }else {
            $data = array(
                "number1" => "0",
                "number2" => "0",
                "answer" => "0"
            );
    }
    $this->load->view("calculate/division", $data);

}
}
