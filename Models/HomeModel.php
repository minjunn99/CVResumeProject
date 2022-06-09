<?php

class HomeModel extends BaseModel {
    // Store data email from contact form
    public function getMembers($table) {
        return $this->all($table);
    }
}