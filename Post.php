<?php

class Post {

    private $title;
    private $body;
    private $author;
    private $tags;

    function create($title, $body, $tags) {

        // Create new post
        // Post belongs to user

        $this->title = $title;
        $this->body = $body;
        $this->tags = $tags;
    }

    function tags() {

        // Post has many tags
        return $this->tags;
    }

    function save() {

        // save post in database
        return "Success";
    }

    function get_by_user($user_id) {

        return "SELECT * FROM USER WHERE id = ".$user_id;
    }
}
