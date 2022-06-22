<a href="?page=post"><button>Creer un post</button></a>

<?php
foreach ($conn->query('SELECT * FROM `post` ORDER BY `post`.`idPost` DESC ') as $value) {?>
<div id="feed_post">
    <div id="feed_post_user">
        <img id="feed_post_user_img" src="images/icones/victime.png">
        <div>
            <div id="feed_post_user_info">
                <p id="feed_post_user_info_nom">User Test</p>
                <p id="feed_post_user_info_pseudo">@usertest</p>
            </div>
            <p id="feed_post_user_info_date"></p>
        </div>
    </div>
    <div id="feed_post_user_description">

    </div>
    <div id="feed_post_user_post_img">
        <img id="feed_post_user_post_img_img"/>
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