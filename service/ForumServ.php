<?php 

include_once(__DIR__."/../DAO/CommonDAO.php");
include_once(__DIR__."/../DAO/ForumDAO.php");
// include_once(__DIR__."/../model/CommentModel.php");

class ForumServices extends CommonDAO
{
    public function process_comment() : string
    {
        $forumDao = new ForumDAO();
        return $forumDao->process_comment();
    }

    public function get_games() : array
    {
        $forumDao = new ForumDAO();
        return $forumDao->get_games();
    }

    public function get_comments() : array
    {
        $forumDao = new ForumDAO();
        return $forumDao->get_comments();
    }
}