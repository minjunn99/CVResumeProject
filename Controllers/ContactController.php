<?php

class ContactController extends BaseController {
    private $contactModel;

    public function __construct() {
        $this->load_model('ContactModel');
        $this->contactModel = new ContactModel;
    }

    public function index() {
        $this->view('frontend.contacts.index', [
            'id_member' => $_GET['id'],
        ]);
    }

    public function send() {
        $id_member = $_GET['id'];

        if(!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['message'])) {
            $name = $_POST['name'];
            $email = $_POST['email'];
            
            $message = str_replace("'", "-",$_POST['message']);
            $message = str_replace("’", "--",$_POST['message']);
            $message = str_replace("“", "---",$_POST['message']);
            $message = str_replace("”", "+++",$_POST['message']);

            $isSuccess = $this->contactModel->storeData("contact", [
                'full_name' => $name,
                'email' => $email,
                'message' => $message,
                'id_member' => $id_member,
            ]);
            
            if($isSuccess) {
                header("location:./index.php?controller=contact&id=${id_member}");
            }
        }
    }
}