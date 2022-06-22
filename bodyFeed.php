<a href="?page=post"><button>Creer un post</button></a>

<?php
$sql = 'SELECT * FROM `post` ORDER BY `post`.`idPost` DESC ';
if (isset($_GET['hashtag'])) {
    $sql = "SELECT * FROM `post` WHERE hashtag LIKE '%".$_GET['hashtag']."%' ORDER BY `post`.`idPost` DESC";
}
foreach ($conn->query($sql) as $value) {?>
<div id="feed_post">
    <div id="feed_post_user">
        <img id="feed_post_user_img" src="images/icones/Characters.png">
        <div id="feed_post_user_info_1">
            <div id="feed_post_user_info_2">
                <p id="feed_post_user_info_2_nom">User Test</p>
                <p id="feed_post_user_info_2_pseudo">@usertest</p>
            </div>
        </div>
        <div id="feed_post_user_info_2_date">
            <p><?php echo $value['datePost']?></p>
        </div>
    </div>
    <div id="feed_post_user_description">
        <p>
        <?php echo $value['description'];
              foreach (explode(',',$value['hashtag']) as $val) {
                echo '<a href="?hashtag='.$val.'"> #'.$val.'</a>';
              };
            ?>
        </p>
    </div>
    <div id="feed_post_user_post_img">
        <img id="feed_post_user_post_img_img" src="<?php echo $value['image'] ?>"/>
        <div id="feed_post_user_post_img_sondage">
            <img id="feed_post_user_post_img_sondage_icone" >
            <p id="feed_post_user_post_img_sondage_text" >Sondage >></p>
        </div>
    </div>
    <div id="feed_post_user_post_interaction">
        <img id="feed_post_user_post_interaction_suivi"/>
        <img id="feed_post_user_post_interaction_commentaire"/>
        <img id="feed_post_user_post_interaction_partager"/>       
    </div>
    
</div>
<?php
}
?>