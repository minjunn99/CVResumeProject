<?php

class ContactController extends BaseController {
    public function index() {
        $this->view('frontend.contacts.index');
    }
}