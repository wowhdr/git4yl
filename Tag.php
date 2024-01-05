<?php

class Tag {

    private $name;
    
    function create($name) {

        // Create new tag
        $this->name = $name;

        $this->save();
    }

    function save() {

        // Insert to database
        return "success";
    }
}
