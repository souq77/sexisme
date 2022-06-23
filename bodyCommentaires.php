<body>

    <div id="post_commentaires_entete">
        <div class="post_commentaires_entete_perso">
            <a href="?page=feed"><img id="post_commentaires_entete_perso_chevron" src="images/icones/chevron.png" /></a>
        </div>
        <div class="post_commentaires_entete_perso">
            <img id="post_commentaires_entete_perso_avatar" src="images/icones/agresseur.png" />
        </div>
        <div id="post_commentaires_entete_infos">
            <div id="post_commentaires_entete_infos_pseudo">
                <p>Grenier qui chante</p>
            </div>
            <div id="post_commentaires_entete_infos_pseudo2">
                <p>@grenierquichante</p>
            </div>
        </div>
    </div>

    <?php
        $sql = "SELECT * FROM `commentaire` WHERE idPost = ".$_GET["idPost"]." ORDER BY date DESC;";
        foreach ($conn->query($sql) as $value) {
            ?>

    <div id="post_commentaires_corps">
        <div id="post_commentaires_corps_img">
            <img src="images/icones/agresseur.png" />
        </div>
        <div id="post_commentaires_corps_txt">
            <p class="gras">nonetteandthecats</p>
            <p><?php echo $value["contenu"] ?></p>
        </div>
    </div>
    <?php
        } ?>
    <div id="post_commentaires_fixed">
        <div id="post_commentaires_fixed_message">
            <textarea id="commentValue" placeholder="Votre commentaire..."></textarea>
            <button class="bouton" onclick="postCommentaire()">Envoyer</button>
        </div>
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

    <script>
        /*function imgMenuMouseon() {
            const postCommentairesFixedMenuHome = document.getElementById("post_commentaires_fixed_menu_home");
            const postCommentairesFixedMenuHomeSelect = document.getElementById("post_commentaires_fixed_menu_home_select");

            postCommentairesFixedMenuHome.style.display = "none";
            postCommentairesFixedMenuHomeSelect.style.display = "block";
        }

        function imgMenuMouseout() {
            const postCommentairesFixedMenuHome = document.getElementById("post_commentaires_fixed_menu_home");
            const postCommentairesFixedMenuHomeSelect = document.getElementById("post_commentaires_fixed_menu_home_select");

            postCommentairesFixedMenuHome.style.display = "block";
            postCommentairesFixedMenuHomeSelect.style.display = "none";
        }*/

        /*document.addEventListener("click", () => {
            const selectOption = document.getElementsByClassName("feed_sondage_popup_reponse");
            selectOption.map(element => element.style.background = "#fff")
        });*/

        /*function choiceSelectSurvey() {
            const selectOption = document.getElementsByClassName("feed_sondage_popup_reponse");
            selectOption.foreach(element => 
            element.style.backgound == "#000" ? element.style.backgound = "#fff" : element.style.backgound = "#000")
        }*/
    </script>
</body>