<?php

class Post {

    $title;
    $body;
    $author;
    $tags;

    function create($user) {

        // Create new post
        // Post belongs to user

        $author = $user;
    }

    function tags() {

        // Post has many tags
        return $this->tags;
    }

    function save() {

        // save post in database
    }

    function get_by_user($user_id) {

        return "SELECT * FROM USER WHERE id = ".$user_id;
    }
}
