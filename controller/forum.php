<?php
session_start();
include_once(__DIR__ . "/../view/aff_forum.php");
include_once(__DIR__ . "/../service/ForumServ.php");

showHeader();
showNav();
container_start();
title();

if (empty($_GET)) {
  $forumServices = new ForumServices();
  $games = $forumServices->get_games();
  $comments = $forumServices->get_comments();
  pageForum($games, $comments);
} elseif (!empty($_GET) && $_GET['comment'] == 'process') {
  $forumServices = new ForumServices();
  $err = $forumServices->process_comment();
  display_message($err);
}

container_end();
showFooter();
