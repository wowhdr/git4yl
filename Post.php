<?php

include_once("Tag.php");

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

        foreach ($tags as $tag) {
            $temp = new Tag;
            $temp->create("tag");
            $this->tags[] = $temp;
        }
    }

    function set_author($name) {

        $this->author = $name;
    }

    function get_by_user($user_id) {

        return "SELECT * FROM USER WHERE id = ".$user_id;
    }
}
