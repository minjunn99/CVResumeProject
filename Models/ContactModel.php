<?php

class ContactModel extends BaseModel {
    // Store data email from contact form
    public function storeData($table, $data) {
        return $this->add($table, $data);
    }
}