<div class="feed_menu">
    <div class="feed_menu_div1">
        <img src="images/icones/profil.png" />
    </div>
    <div class="feed_menu_div2">
        <!--<img src="images/icones/profil.png" />-->
        <h1>Speak <span class="color_h1">Out<span></h1>
    </div>
    <div class="feed_menu_div3">
        <div>
            <img src="images/icones/search.png" />
        </div>
        <div>
            <img src="images/icones/notification.png" />
        </div>
    </div>
</div>

<div class="feed_tri_posts">
    <div>
        <a href="?page=feed">
            <button onclick="colorButtons(this)">Tous les spics</button>
        </a>
    </div>
    <div>
        <a href="?page=feed&postSuivi=1">
            <button onclick="colorButtons(this), colorIcone()">
                <img id="feed_tri_posts_pin" src="images/icones/pin.png" />
                <img id="feed_tri_posts_pin_select" src="images/icones/pin_select.png" />
                Suivis
            </button>
        </a>
    </div>
</div>

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
        <?php echo '<progress id="progress_1'.$value["idPost"].'" class="progress" max="100" value="0" onclick="progressChangeValue(this,"progress_1'.$value["idPost"].'")"></progress>'; ?>        
        <?php echo '<p id="repA'.$value["idPost"].'" class="rep_style">Porter plainte</p>'; ?>
        </div>
        <div class="feed_sondage_popup_reponse" onclick="choiceSelectSurvey(<?php echo $value['idPost'] ?>, 2)">
        <?php echo '<progress id="progress_2'.$value["idPost"].'" class="progress" max="100" value="0" onclick="progressChangeValue(this,"progress_2'.$value["idPost"].'")"></progress>'; ?>        
        <?php echo '<p id="repB'.$value["idPost"].'" class="rep_style">Dénoncer</p>'; ?>
        </div>
        <div class="feed_sondage_popup_reponse" onclick="choiceSelectSurvey(<?php echo $value['idPost'] ?> ,3)">
        <?php echo '<progress id="progress_3'.$value["idPost"].'" class="progress" max="100" value="0" onclick="progressChangeValue(this,"progress_3'.$value["idPost"].'")"></progress>'; ?>        
        <?php echo '<p id="repC'.$value["idPost"].'" class="rep_style">En parler à un professionnel</p>'; ?>
        </div>
        <div class="feed_sondage_popup_reponse" onclick="choiceSelectSurvey(<?php echo $value['idPost'] ?>, 4)">
        <?php echo '<progress id="progress_4'.$value["idPost"].'" class="progress" max="100" value="0" onclick="progressChangeValue(this,"progress_4'.$value["idPost"].'")"></progress>'; ?>        
        <?php echo '<p id="repD'.$value["idPost"].'" class="rep_style">En parler à la personne </p>'; ?>
        </div>
        <div class="feed_sondage_popup_reponse" onclick="choiceSelectSurvey(<?php echo $value['idPost'] ?>, 5)">
        <?php echo '<progress id="progress_5'.$value["idPost"].'" class="progress" max="100" value="0" onclick="progressChangeValue(this,"progress_5'.$value["idPost"].'")"></progress>'; ?>        
        <?php echo '<p id="repE'.$value["idPost"].'" class="rep_style">En parler à ses proches</p>'; ?>
        </div>
        <div class="feed_sondage_popup_reponse" onclick="choiceSelectSurvey(<?php echo $value['idPost'] ?>, 6)">
        <?php echo '<progress id="progress_6'.$value["idPost"].'" class="progress" max="100" value="0" onclick="progressChangeValue(this,"progress_6'.$value["idPost"].'")"></progress>'; ?>        
        <?php echo '<p id="repF'.$value["idPost"].'" class="rep_style">Ne pas tenir compte</p>'; ?>
        </div>
    </div>

    <div class="feed_post_user">
        <img class="feed_post_user_img" src="images/icones/characters.png">
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
        <div class="feed_post_user_post_img_sondage_fond"></div>
        <div onclick="feedSondagePopupOpen(<?php echo $value['idPost'] ?>)" id="<?php echo "Sondage".$value['idPost'] ?>" class="feed_post_user_post_img_sondage">
            <img class="feed_post_user_post_img_sondage_icone" src="images/icones/sondage_emoji.png" >
            <p class="feed_post_user_post_img_sondage_text" >Sondage</p>
            <img class="feed_post_user_post_img_sondage_icone" src="images/icones/sondage_chevrons.png" >
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

<div id="post_commentaires_fixed">
    <a id="bouton_create_post" href="?page=post">
        <div id="create_post">
            <p id="create_pics">Créer un spics</p>
            <img src="images/icones/create_post.png" onmouseover="displayTitle()" onmouseout="hideTitle()" />
        </div>
    </a>

    <div id="post_commentaires_fixed_menu">
        <div>
            <div onmouseon="imgMenuMouseon" onmouseout="imgMenuMouseout()">
                <img id="post_commentaires_fixed_menu_home" src="images/icones/home.png" />
                <img id="post_commentaires_fixed_menu_home_select" src="images/icones/home_select.png" />
            </div>
            <div>
                <img src="images/icones/urgence.png" />
            </div>
            <div>
                <img src="images/icones/quiz.png" />
            </div>
        </div>
    </div>
</div>
