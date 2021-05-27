<?php

include_once(__DIR__."/../DAO/CommonDAO.php");

class ForumDAO extends CommonDAO
{
    private string $tbl = "post_forum";

    public function process_comment() : string 
    {
        // validation des données
        $conn = $this->connexion();
        $q = "INSERT INTO ".$this->tbl." VALUES('', ?, ?, ?, 1, ?)";
        $stmt = $conn->prepare($q);
        $val = [
            date("Y-m-d H:i:s"), 
            $_POST['message'],
            $_POST['subject'],
            $_POST['game']
        ];

        $stmt->bind_param('sssi', ...$val);
        $stmt->execute();

        $stmt->free_result();
        $stmt->close();

        return $conn->error;
    }

    public function get_games() : array
    {
        $conn = $this->connexion();
        $res = $conn->query("SELECT * FROM games");

        $data = $res->fetch_all(MYSQLI_ASSOC);
        
        $res->free_result();
        $conn->close();

        return $data;
    }

    public function get_comments() : array
    {
        $conn = $this->connexion();
        $res = $conn->query("SELECT * FROM ".$this->tbl." ORDER BY date_post DESC");
        $data = $res->fetch_all(MYSQLI_ASSOC);

        $res->free_result();
        $conn->close();

        return $data;
    }
}

// Faire du debugging