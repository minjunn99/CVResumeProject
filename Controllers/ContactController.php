<?php

class ContactController extends BaseController {
    public function index() {
        $this->view('contacts.index');
    }
}