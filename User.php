<?php

class User {

    $id;
    $name;
    $posts;

    function create() {

        // Create new user

        $this->name = $name;
    }

    function update() {

        // Update user
        $this->name = $name;
    }

    function save() {

        // Insert to database;
    }

    function posts() {

        $post = new Post;
        

        $this->posts = $post->get_by_user($this->id);
    }
}
