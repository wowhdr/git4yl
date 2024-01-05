<?php

class Post {

    private $id;
    private $title;
    private $body;
    private $author;
    private $tags;

    function create($user) {

        // Create new post
        // Post belongs to user

        $this->id = 0;
        $this->title = 'some title';
        $this->body = 'some content';
        $this->author = $user;
        $this->tags = array();
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
