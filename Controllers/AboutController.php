<?php

class AboutController extends BaseController {
    private $aboutModel;
    public function __construct() {
        $this->load_model('AboutModel');
        $this->aboutModel = new AboutModel;
    }

    public function index() {
        $education = $this->aboutModel->getEducation("education");
        $employment = $this->aboutModel->getEmployment("employment");
        $testimonial = $this->aboutModel->getTestimonial("testimonial");

        $this->view('frontend.abouts.index', [
            'education' => $education,
            'employment' => $employment,
            'testimonial' => $testimonial,
        ]);
    }
}