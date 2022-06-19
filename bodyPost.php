<body>
    <div class="post_principal">
        <div class="post_menu">
            <img id="fermerPost" src="images/icones/croix.png" />
            <p id="creerPost">Créer un poste</p>
            <button id="publierPost">Publier</button>
        </div>

            <div id="post_img" class="post_img">
                <div id="img_couche_1" class="post_img_couche_1">
                    <div id="img_couche_2" class="post_img_couche_2">
                        <div id="img_couche_3" class="post_img_couche_3">
                            <div id="Blockdialogue">
                                <div id="img_couche_3_bulle_gauche">
                                    <p id="p_couche_3_gauche">
                                    </p>
                                </div>
                                <div id="img_couche_3_bulle_droite">
                                    <p id="p_couche_3_droite">
                                    </p>
                                </div>
                            </div>
                            <div id="img_couche_3_titre">
                                <p id="p_couche_3_titre"></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        <div class="tools" id="post_sous_outils_scenario">
            <div onclick="scenario('soiree')">
                <figure>
                    <img src="images/scenarios/soiree.png" alt="">
                    <figcaption>En soirée</figcaption>
                </figure>
            </div>
            <div onclick="scenario('rue')">
                <figure>
                    <img src="images/scenarios/rue.png" alt="">
                    <figcaption>Dans la rue</figcaption>
                </figure>
            </div>
            <div onclick="scenario('taff')">
                <figure>
                    <img src="images/scenarios/rue.png" alt="">
                    <figcaption>Au travail</figcaption>
                </figure>
            </div>
            <div onclick="scenario('residence')">
                <figure>
                    <img src="images/scenarios/rue.png" alt="">
                    <figcaption>À la maison</figcaption>
                </figure>
            </div>
            <div onclick="scenario('activite')">
                <figure>
                    <img src="images/scenarios/rue.png" alt="">
                    <figcaption>En activités</figcaption>
                </figure>
            </div>
            <div onclick="scenario('ami')">
                <figure>
                    <img src="images/scenarios/rue.png" alt="">
                    <figcaption>Autre lieu</figcaption>
                </figure>
            </div>
        </div>

        <div class="tools" id="post_sous_outils_personnages">
            <div onclick="personnages('1')">
                <figure>
                    <img src="images/personnages/sifflement.png" alt="">
                    <figcaption>Scenario</figcaption>
                </figure>
            </div>
            <div onclick="personnages('2')">
                <figure>
                    <img src="images/personnages/regard.png" alt="">
                    <figcaption>Scenario</figcaption>
                </figure>
            </div>
            <div onclick="personnages('3')">
                <figure>
                    <img src="images/personnages/menace.png" alt="">
                    <figcaption>Scenario</figcaption>
                </figure>
            </div>
            <div onclick="personnages('4')">
                <figure>
                    <img src="images/personnages/agression.png" alt="">
                    <figcaption>Scenario</figcaption>
                </figure>
            </div>
            <div onclick="personnages('5')">
                <figure>
                    <img src="images/personnages/exhibition.png" alt="">
                    <figcaption>Scenario</figcaption>
                </figure>
            </div>
            <div onclick="personnages('6')">
                <figure>
                    <img src="images/personnages/viol.png" alt="">
                    <figcaption>Scenario</figcaption>
                </figure>
            </div>
            <div onclick="personnages('7')">
                <figure>
                    <img src="images/personnages/pornographie.png" alt="">
                    <figcaption>Scenario</figcaption>
                </figure>
            </div>
            <div onclick="personnages('8')">
                <figure>
                    <img src="images/personnages/remarque.png" alt="">
                    <figcaption>Scenario</figcaption>
                </figure>
            </div>
        </div>

        <div class="tools" id="post_sous_outils_bulles">
           <!-- <div onclick="bulles('popup_titre')">
                <figure>
                    <img src="images/icones/icone-test.png" alt="">
                    <figcaption>Scenario</figcaption>
                </figure>
            </div>
            <div onclick="bulles('popup_agresseur')">
                <figure>
                    <img src="images/icones/icone-test.png" alt="">
                    <figcaption>Scenario</figcaption>
                </figure>
            </div>
            <div onclick="bulles('popup_victime')">
                <figure>
                    <img src="images/icones/icone-test.png" alt="">
                    <figcaption>Scenario</figcaption>
                </figure>
            </div>-->
            <div class="insertion_text_bulle">
                <label>Victime :</label>
                <textarea id="insertion_text_bulle_victime" onclick="bulles('popup_titre')"></textarea>
            </div>
            <div class="insertion_text_bulle">
                <label>Agresseur :</label>
                <textarea id="insertion_text_bulle_agresseur" onclick="bulles('popup_agresseur')"></textarea>
            </div>
            <div class="insertion_text_bulle">
                <label>Titre :</label>
                <textarea id="insertion_text_bulle_titre" onclick="bulles('popup_victime')"></textarea>
            </div>
        </div>

        <div class="fond_gris"></div>

        <div class="popup_bulle" id="popup_titre">
            <button onclick="closeBulle('popup_titre')">Fermer</button>
            <textarea maxlength="50" minlength="5" id="popup_titre_dialogue">Zone de texte</textarea>
            <button  onclick="submitBulle('img_couche_3_titre','popup_titre_dialogue')">Valider</button>
        </div>
        <div class="popup_bulle" id="popup_agresseur">
            <button onclick="closeBulle('popup_agresseur')">Fermer</button>
            <textarea maxlength="50" minlength="5" id="popup_agresseur_dialogue">Zone de texte</textarea>
            <button  onclick="submitBulle('img_couche_3_agresseur','popup_agresseur_dialogue')">Valider</button>
        </div>
        <div class="popup_bulle" id="popup_victime">
            <button onclick="closeBulle('popup_victime')">Fermer</button>
            <textarea maxlength="50" minlength="5" id="popup_victime_dialogue">Zone de texte</textarea>
            <button onclick="submitBulle('img_couche_3_victime','popup_victime_dialogue')">Valider</button>
        </div>

        <div class="post_outils">
            <div id="outil_gauche" onclick="reveal('Scenario'), selectOutil('outil_gauche')">
                <figure>
                    <img src="images/icones/scenario.png" alt="">
                    <figcaption>Scénario</figcaption>
                </figure>
            </div>
            <div id="outil_milieu" onclick="reveal('Personnage'), selectOutil('outil_milieu')">
                <figure>
                    <img src="images/icones/situation.png" alt="">
                    <figcaption>Situation</figcaption>
                </figure>
            </div>
            <div id="outil_droit" onclick="reveal('Bulle'), selectOutil('outil_droit')">
                <figure>
                    <img src="images/icones/texte.png" alt="">
                    <figcaption>Texte</figcaption>
                </figure>
            </div>
        </div>
    </div>
</body>

</body>
<script>
$("#publierPost").click(function() {
document.getElementById('img_couche_1').style.backgroundSize ='';
html2canvas($("#img_couche_1"), {
    onrendered: function(canvas) {
        $("#post_img").show();
        var dataURL = canvas.toDataURL();
        $.ajax({
            type: "POST",
            url: "save_image.php?action=ajoutPost",
            data: {
                imgBase64: dataURL
            },
            success : function(resultat, statut)
            { 
                window.location.href = "index.php?page=postDescription&id="+resultat;                
            },
        });
    }
    });
});
</script>
