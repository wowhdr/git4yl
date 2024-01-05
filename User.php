<?php

include_once('Post.php');

class User {

    private $id;
    private $name;
    private $posts;

    function create($name) {

        // Create new user

        $this->name = $name;

        $this->save();
    }

    function update($name) {

        // Update user
        $this->name = $name;

        $this->save();
    }

    function save() {

        // Insert to database;

        return "Success";
    }

    function add_post($post) {
                
        $this->posts[] = $post;
        
    }
}
