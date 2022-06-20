<body>
    <div class="post_principal">
    <!-- Header. -->
        <div class="post_menu">
            <img id="fermerPost" src="images/icones/croix.png" />
            <p id="creerPost">Créer un poste</p>
            <button id="publierPost" class="bouton" onclick="closeBulle('popup_titre'), closeBulle('popup_agresseur'), closeBulle('popup_victime')">Suivant</button>
        </div>
        <div id="post_img">
            <div id="img_couche_1" class="post_img_couche_1">

                <div id="img_couche_2" class="post_img_couche_2">
                    <div id="img_couche_3" class="post_img_couche_3">
                        <div id="img_couche_3_titre" class="img_couche_3">
                            <p id="p_couche_3_titre" class="p_couche_3"></p>
                        </div>
                        <div id="img_couche_3_bulle_gauche" class="img_couche_3">
                            <p id="p_couche_3_gauche" class="p_couche_3"></p>
                        </div>
                        <div id="img_couche_3_bulle_droite" class="img_couche_3">
                            <p id="p_couche_3_droite" class="p_couche_3"></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Sous-outils bloc 1. -->
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
                    <img src="images/scenarios/travail.png" alt="">
                    <figcaption>Au travail</figcaption>
                </figure>
            </div>
            <div onclick="scenario('residence')">
                <figure>
                    <img src="images/scenarios/maison.png" alt="">
                    <figcaption>À la maison</figcaption>
                </figure>
            </div>
            <div onclick="scenario('activite')">
                <figure>
                    <img src="images/scenarios/activite.png" alt="">
                    <figcaption>En activités</figcaption>
                </figure>
            </div>
            <div onclick="scenario('ami')">
                <figure>
                    <img src="images/scenarios/ami.png" alt="">
                    <figcaption>Chez un ami</figcaption>
                </figure>
            </div>
            <div onclick="scenario('autre')">
                <figure>
                    <img src="images/scenarios/autre.png" alt="">
                    <figcaption>Autre lieu</figcaption>
                </figure>
            </div>
        </div>
        <!-- Sous-outils bloc 2. -->
        <div class="tools" id="post_sous_outils_personnages">
            <div onclick="personnages('1')">
                <figure>
                    <img src="images/personnages/sifflement.png" alt="">
                    <figcaption>Sifflement</figcaption>
                </figure>
            </div>
            <div onclick="personnages('2')">
                <figure>
                    <img src="images/personnages/regard.png" alt="">
                    <figcaption>Regard</figcaption>
                </figure>
            </div>
            <div onclick="personnages('3')">
                <figure>
                    <img src="images/personnages/menace.png" alt="">
                    <figcaption>Menace</figcaption>
                </figure>
            </div>
            <div onclick="personnages('4')">
                <figure>
                    <img src="images/personnages/agression.png" alt="">
                    <figcaption>Agression</figcaption>
                </figure>
            </div>
            <div onclick="personnages('5')">
                <figure>
                    <img src="images/personnages/exhibition.png" alt="">
                    <figcaption>Exhibition</figcaption>
                </figure>
            </div>
            <div onclick="personnages('6')">
                <figure>
                    <img src="images/personnages/viol.png" alt="">
                    <figcaption>Viol</figcaption>
                </figure>
            </div>
            <div onclick="personnages('7')">
                <figure>
                    <img src="images/personnages/pornographie.png" alt="">
                    <figcaption>Pornographie</figcaption>
                </figure>
            </div>
            <div onclick="personnages('8')">
                <figure>
                    <img src="images/personnages/remarque.png" alt="">
                    <figcaption>Remarque</figcaption>
                </figure>
            </div>
        </div>
        <!-- Sous-outils bloc 3. -->
        <div class="tools" id="post_sous_outils_bulles">
            <div onclick="bulles('popup_titre')">
                <figure>
                    <img src="images/icones/titre-popup.png" alt="">
                    <figcaption>Titre</figcaption>
                </figure>
            </div>
            <div onclick="bulles('popup_agresseur')">
                <figure>
                    <img src="images/icones/victime.png" alt="">
                    <figcaption>Victime</figcaption>
                </figure>
            </div>
            <div onclick="bulles('popup_victime')">
                <figure>
                    <img src="images/icones/agresseur.png" alt="">
                    <figcaption>Agresseur</figcaption>
                </figure>
            </div>
        </div>
        <!-- Popups de dialogues. -->
        <div class="fond_gris"></div>
        <div class="popup_bulle" id="popup_titre">
            <div class="popup_img">
                <img src="images/icones/croix.png" onclick="closeBulle('popup_titre')" />
            </div>
            <div class="popup_texte">
                <textarea maxlength="80" minlength="1" placeholder="Donnez un titre à votre image" id="popup_titre_dialogue"></textarea>
            </div>
            <div class="popup_bouton">
                <button  onclick="submitBulle('img_couche_3_titre','popup_titre_dialogue')" class="bouton">Valider</button>
            </div>
        </div>
        <div class="popup_bulle" id="popup_agresseur">
            <div class="popup_img">
                <img src="images/icones/croix.png" onclick="closeBulle('popup_agresseur')" />
            </div>
            <div class="popup_texte">
                <textarea maxlength="80" minlength="1" placeholder="Donnez un titre à votre image" id="popup_agresseur_dialogue"></textarea>
            </div>
            <div class="popup_bouton">
                <button  onclick="submitBulle('img_couche_3_agresseur','popup_agresseur_dialogue')" class="bouton">Valider</button>
            </div>
        </div>
        <div class="popup_bulle" id="popup_victime">
            <div class="popup_img">
                <img src="images/icones/croix.png" onclick="closeBulle('popup_victime')" />
            </div>
            <div class="popup_texte">
                <textarea maxlength="80" minlength="1" placeholder="Donnez un titre à votre image" id="popup_victime_dialogue"></textarea>
            </div>
            <div class="popup_bouton">
                <button  onclick="submitBulle('img_couche_3_victime','popup_victime_dialogue')" class="bouton">Valider</button>
            </div>
        </div>
        <!-- Barre d'outils statique. -->
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
<script>
$("#publierPost").click(function() {
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
