<?php

class HomeController extends BaseController {
    private $homeModel;

    public function __construct() {
        $this->load_model('HomeModel');
        $this->homeModel = new HomeModel;
    }

    public function index() {
        $members = $this->homeModel->getMembers("member");
        $this->view('frontend.homes.index', [
            'member' => $members
        ]);
    }
}