<?php
class ProjectModel extends BaseModel {
    // Get project information
    public function getProjects($table) {
        return $this->all($table);
    }
}