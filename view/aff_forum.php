<?php
include_once(__DIR__ . "/../view/showHeader.php");
include_once(__DIR__ . '/showNav.php');
include_once(__DIR__ . '/showFooter.php');

showHeader();
showNav();

function pageForum(array $games, array $comments) {
    // transfert des arrays aux fonctions
    $select = create_select_game($games);
    $list = display_comments($comments, $games);
?>

    <div class="forum-container">
        <div class="form">
            <form action="../controller/forum.php?comment=process" method="POST">
                <label for="game"><strong>BIENVENUE AU FORUM !<br><br>Choisissez le jeu que vous voulez commentez :</strong></label><br><br>
                <select name="game">
                    <?php echo $select; ?>
                </select><br><br>
                
                <label for="subject"></label><br>
                <input type="text" name="subject" placeholder="Entrez le titre du sujet"><br><br>
                
                <label for="message"></label><br>
                <textarea name="message" placeholder="Entrez du texte"></textarea><br><br>

                <input type="Submit" name="submit" value="Validation">
            </form>
        </div>
        <div class="comment-list"><?php echo $list;?></div>
    </div>

<?php

showFooter();

}

function create_select_game(array $arr){
    $select = "";
    for($i = 0; $i < count($arr); $i++){ // récupération des id pour afficher les jeux
        $select .= "<option value =\"".$arr[$i]['game_id']."\">".$arr[$i]['name']."</options>\n";
    }
    return $select;
}

// on escape les guillemets dans les variables pour différiencier les guillemets d'html aux guillemets de php
function display_comments(array $comments, array $games) : string {
    $list = "";
    
    for($i = 0; $i < count($comments); $i++){// récupération des id pour afficher les comments
        $game_id = $comments[$i]['game'];
        $list .= " 
                <div class=\"comment-container\">
                    <div class=\"comment-author\">".$comments[$i]['author']."</div>
                    <div class=\"comment-game\">".$games[$game_id-1]['name']."</div> 
                    <div class=\"comment-date\">".$comments[$i]['date_post']."</div>
                    <div class=\"clear\"></div>
                    <div class=\"comment-subject\">".$comments[$i]['sujet']."</div>
                    <div class=\"comment-message\">".$comments[$i]['contenu']."</div>
                </div>
            "; // l'array games commence à l'indice 0 alors que l'indice des jeux commence à l'id 1, du coup on met -1 à la ligne 11 pour décaler au bon endroit l'indice des jeux
    }
    return $list;
}