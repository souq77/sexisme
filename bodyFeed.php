<a href="?page=post"><button>Creer un post</button></a>
<a href="?page=feed&postSuivi=1"><button>Mes posts</button></a>

<?php
$sql = 'SELECT * FROM `post` ORDER BY `post`.`idPost` DESC ';
if (isset($_GET['hashtag'])) {
    $sql = "SELECT * FROM `post` WHERE hashtag LIKE '%".$_GET['hashtag']."%' ORDER BY `post`.`idPost` DESC";
}
if (isset($_GET['postSuivi'])) {
    $sql = "SELECT * FROM `post` WHERE idPost IN (SELECT IdPost FROM postsuivi);";
}
foreach ($conn->query($sql) as $value) {?>


<div class="feed_post">
    <!-- Popup sondage cadeau pour Rabie ;) -->
    <?php echo '<div id="'.$value["idPost"].'" class="feed_sondage_popup">'; ?>
        <div class="feed_sondage_popup_question">
            <div>
                <p>Que ferais-tu à ma place ?</p>
            </div>
            <div>
                <img onclick="feedSondagePopupClose(<?php echo $value['idPost'] ?>)" class="feed_sondage_popup_close"  src="images/icones/croix_bis.png" />
            </div>
        </div>
        <div class="feed_sondage_popup_reponse" onclick="choiceSelectSurvey(<?php echo $value['idPost'] ?>, 1)">
        <progress id="progress_1" class="progress" max="100" value="75" onclick="progressChangeValue(this)"></progress>
        <?php echo '<p id="repA'.$value["idPost"].'" class="rep_style">A. Texte</p>'; ?>
        </div>
        <div class="feed_sondage_popup_reponse" onclick="choiceSelectSurvey(<?php echo $value['idPost'] ?>, 2)">
        <?php echo '<p id="repB'.$value["idPost"].'" class="rep_style">B. Texte</p>'; ?>

        </div>
        <div class="feed_sondage_popup_reponse" onclick="choiceSelectSurvey(<?php echo $value['idPost'] ?> ,3)">
        <?php echo '<p id="repC'.$value["idPost"].'" class="rep_style">C. Texte</p>'; ?>

        </div>
        <div class="feed_sondage_popup_reponse" onclick="choiceSelectSurvey(<?php echo $value['idPost'] ?>, 4)">
        <?php echo '<p id="repD'.$value["idPost"].'" class="rep_style">D. Texte</p>'; ?>

        </div>
    </div>

    <div class="feed_post_user">
        <img class="feed_post_user_img" src="images/icones/Characters.png">
        <div class="feed_post_user_info_1">
            <div class="feed_post_user_info_2">
                <p class="feed_post_user_info_2_nom">User Test</p>
                <p class="feed_post_user_info_2_pseudo">@usertest</p>
            </div>
        </div>
        <div class="feed_post_user_info_2_date">
            <p><?php echo $value['datePost']?></p>
        </div>
    </div>
    <div class="feed_post_user_description">
        <p>
        <?php echo $value['description'];
              foreach (explode(',',$value['hashtag']) as $val) {
                echo '<a href="?hashtag='.$val.'"> #'.$val.'</a>';
              };
            ?>
        </p>
    </div>
    <div class="feed_post_user_post_img">
        <img class="feed_post_user_post_img_img" src="<?php echo $value['image'] ?>"/>
        <div onclick="feedSondagePopupOpen(<?php echo $value['idPost'] ?>)" class="feed_post_user_post_img_sondage">
            <img class="feed_post_user_post_img_sondage_icone" >
            <p class="feed_post_user_post_img_sondage_text" >Sondage >></p>
        </div>
    </div>
    <div class="feed_post_user_post_interaction">
        <div>
            <img onclick="ajoutPostSuivi(<?php echo $value['idPost']; ?>)" class="feed_post_user_post_interaction_suivi" src="images/icones/epingle" />
            <a href="?page=commentaires&idPost=<?php echo $value['idPost']; ?>">
                <img class="feed_post_user_post_interaction_commentaire" src="images/icones/commentaire" />
            </a>
            <img class="feed_post_user_post_interaction_partager" src="images/icones/share" />       
        </div>
    </div>
    
</div>
<?php
}
?>