<?php

class AboutController extends BaseController {
    private $aboutModel;
    public function __construct() {
        $this->load_model('AboutModel');
        $this->aboutModel = new AboutModel;
    }

    public function index() {
        $id_member = $_GET['id'];

        $member = $this->aboutModel->getInfo("member",
            ['full_name','description', 'image'],
            [
                'id' => $id_member
            ]
        );

        $education = $this->aboutModel->getEducation("education",
            [' id', 'name','detail','date_start','date_end'],
            [
                'id_member' => $id_member,
            ]
        );

        $employment = $this->aboutModel->getEmployment("employment",
            [' id','undertake','detail','description','date_start','date_end'],
            [
                'id_member' => $id_member,
            ]
        );

        $project = $this->aboutModel->getTestimonial("project",
            ['title','description','date','image','demo'],
            [
                'id_member' => $id_member,
            ]
        );

        $testimonial = $this->aboutModel->getTestimonial("testimonial",
            ['id','full_name','comment'],
            [
                'id_member' => $id_member,
            ]
        );

        $this->view('frontend.abouts.index', [
            'member' => $member,
            'education' => $education,
            'employment' => $employment,
            'projects' => $project,
            'testimonial' => $testimonial,
        ]);
    }
}