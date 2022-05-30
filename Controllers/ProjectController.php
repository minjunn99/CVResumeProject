<?php

class ProjectController extends BaseController {
    private $projectModel;

    public function __construct() {
        $this->load_model('ProjectModel');
        $this->projectModel = new ProjectModel;
    }

    public function index() {
        $projects = $this->projectModel->getProjects("project");

        $this->view('frontend.projects.index', [
            'projects' => $projects
        ]);
    }
}