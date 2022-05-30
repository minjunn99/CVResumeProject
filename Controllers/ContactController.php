<?php

class ContactController extends BaseController {
    private $contactModel;

    public function __construct() {
        $this->load_model('ContactModel');
        $this->contactModel = new ContactModel;
    }

    public function index() {
        $this->view('frontend.contacts.index');
    }

    public function send() {
        if(!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['message'])) {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $message = $_POST['message'];

            $isSuccess = $this->contactModel->storeData("contact", [
                'full_name' => $name,
                'email' => $email,
                'message' => $message,
            ]);
            
            if($isSuccess) {
                header("location:./index.php?controller=contact");
            }
        }
    }
}