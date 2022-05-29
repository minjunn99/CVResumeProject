<?php
class AboutModel extends BaseModel {
    // Get edu information
    public function getEducation($table) {
        return $this->all($table);
    }
    // Get employment information
    public function getEmployment($table) {
        return $this->all($table);
    }
    // Get testimonial information
    public function getTestimonial($table) {
        return $this->all($table);
    }
}