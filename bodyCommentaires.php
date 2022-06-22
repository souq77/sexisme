<body>

    <div id="post_commentaires_entete">
        <div class="post_commentaires_entete_perso">
            <img id="post_commentaires_entete_perso_chevron" src="images/icones/chevron.png" />
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

    <div id="post_commentaires_corps">
        <div id="post_commentaires_corps_img">
            <img src="images/icones/agresseur.png" />
        </div>
        <div id="post_commentaires_corps_txt">
            <p class="gras">nonetteandthecats</p>
            <p>team 38 ans ici, et idem, on me essayait de me culpabiliser « c’est juste de la drague », « c’est flatteur », « tu prends tout de travers » idem j’ai jamais accepté ces comportements. A l’époque j’étais assez incomprise. J’arrivais pas à mettre des mots sur ce que je vivais même si je savais que tout ça n’était pas acceptable. Je suis heureuse de voir cette jeune génération qui a le courage de dire merde! Et stop!</p>
        </div>
    </div>

    <div id="post_commentaires_fixed">
        <div id="post_commentaires_fixed_message">
            <textarea placeholder="Votre commentaire..."></textarea>
        </div>
        <div id="post_commentaires_fixed_menu">
            <div>
                <div>
                    <img src="images/icones/home.png" />
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

    <!-- Popup sondage cadeau pour Rabie ;) -->
    <div id="feed_sondage_popup">
        <div id="feed_sondage_popup_question" onclick="feedSondagePopupClose()">
            <div>
                <p>Que ferais-tu à ma place ?</p>
            </div>
            <div>
                <img id="feed_sondage_popup_close" src="images/icones/croix_bis.png" />
            </div>
        </div>
        <div class="feed_sondage_popup_reponse" onclick="choiceSelectSurvey()">
            <p>A. Texte</p>
        </div>
        <div class="feed_sondage_popup_reponse">
            <p>B. Texte</p>
        </div>
        <div class="feed_sondage_popup_reponse">
            <p>C. Texte</p>
        </div>
        <div class="feed_sondage_popup_reponse">
            <p>D. Texte</p>
        </div>
    </div>

    <script>
        function feedSondagePopupClose() {
            const closure = document.getElementById("feed_sondage_popup");
            const feedSondagePopup = document.getElementById("eed_sondage_popup");
            closure.style.opacity = "0";
            closure.style.transition = "1s";
            feedSondagePopup.style.pointerEvents = "none";
        }

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