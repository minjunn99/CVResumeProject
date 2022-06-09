<?php
class AboutModel extends BaseModel {
    // Get info
    public function getInfo($table, $select, $condition) {
        return $this->find($table, $select, $condition);
    }

    // Get edu information
    public function getEducation($table, $select, $condition) {
        return $this->fill($table, $select, $condition);
    }

    // Get employment information
    public function getEmployment($table, $select, $condition) {
        return $this->fill($table, $select, $condition);
    }

    // Get project
    public function getProject($table, $select, $condition) {
        return $this->fill($table, $select, $condition);
    }

    // Get testimonial information
    public function getTestimonial($table, $select, $condition) {
        return $this->fill($table, $select, $condition);
    }
}