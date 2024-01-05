<?php

include_once("User.php");
include_once("Post.php");

$user = new User;

$user->create('test');

$post = new Post;

$post->create("title", "body", ['tag1', 'tag2']);

$user->add_post($post);

print_r($user);

print_r($user->posts());
