<?php

include_once('Post.php');

class User {

    private $name;
    private $posts;

    function create($name) {

        // Create new user

        $this->name = $name;

    }

    function add_post($post) {

        $post->set_author($this->name);
                
        $this->posts[] = $post;
        
    }

    function posts() {

        return $this->posts;
    }
}
