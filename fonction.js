function reveal(type) {
    switch (type) {
        case 'Scenario':
            displayTool("post_sous_outils_scenario");
            break;
        case 'Personnage':
            displayTool("post_sous_outils_personnages");
            break;
        case 'Bulle':
            displayTool("post_sous_outils_bulles");
            break;
    }
}

function fermeOutils () {
    let tools = document.getElementsByClassName("tools");

    for (let i = 0; i < tools.length; i++) {
        const element = tools[i];
        //element.style.display = "none";        
        element.style.bottom = "0vh";        
    }
}

function displayTool(idDiv) {
    let postImg = document.getElementById("post_img");
    let tool = document.getElementById(idDiv);
    if (tool.style.bottom != "0vh") {
        fermeOutils();
        postImg.style.height = "78vh";
    } else {
        fermeOutils();
        tool.style.bottom = "16vh";
        tool.style.transition = "1s";
        postImg.style.height = "62vh";
    }
}

function scenario(type) {
    let img = document.getElementById("img_couche_1");
    switch (type) {
        case "soiree":
            img.style.backgroundImage = "url('images/scenarios/soiree.png')"; 
        break;
        case "rue":
            img.style.backgroundImage = "url('images/scenarios/rue.png')";       
        break;
        case "taff":  
            img.style.backgroundImage = "url('images/scenarios/jerry.png')";      
        break;
        case "residence":  
            img.style.backgroundImage = "url('images/scenarios/jerry.png')";      
        break;
        case "activite": 
            img.style.backgroundImage = "url('images/scenarios/jerry.png')";       
        break;
        case "ami":
            img.style.backgroundImage = "url('images/scenarios/jerry.png')";        
        break;
    }
}

function personnages(type) {
    let img = document.getElementById("img_couche_2");
    switch (type) {
        case "1":
            img.style.backgroundImage = "url('images/personnages/jerry.png')"; 
        break;
        case "2":
            img.style.backgroundImage = "url('images/personnages/jerry.png')";       
        break;
        case "3":  
            img.style.backgroundImage = "url('images/personnages/jerry.png')";      
        break;
        case "4":  
            img.style.backgroundImage = "url('images/personnages/jerry.png')";      
        break;
        case "5": 
            img.style.backgroundImage = "url('images/personnages/jerry.png')";       
        break;
        case "6":
            img.style.backgroundImage = "url('images/personnages/jerry.png')";        
        break;
        case "7":
            img.style.backgroundImage = "url('images/personnages/jerry.png')";        
        break;
        case "8":
            img.style.backgroundImage = "url('images/personnages/jerry.png')";        
        break;
    }
}

function submitBulle(nom, dialogue){
    let dialogues = document.getElementById(dialogue).value;
    let img;
    let newP;
    switch (nom) {
        case "img_couche_3_titre":
            img = document.getElementById('img_couche_3_titre');
            newP = document.getElementById("p_couche_3_titre");
            img.style.backgroundImage = "url('images/bulles/bulleViergeTitre.png')";
            img.style.backgroundRepeat = "no-repeat";
            img.style.backgroundPosition = "center top";
            img.style.height = "20vh";
            newP.innerText = dialogues;
            closeBulle("popup_titre");
        break;
        case "img_couche_3_agresseur":
            img = document.getElementById('img_couche_3_bulle_gauche');
            newP = document.getElementById("p_couche_3_gauche");
            img.style.backgroundImage = "url('images/bulles/bulleViergeGauche.png')";
            newP.innerText = dialogues;
            closeBulle("popup_agresseur");
        break;
        case "img_couche_3_victime":  
            img = document.getElementById('img_couche_3_bulle_droite');
            newP = document.getElementById("p_couche_3_droite");
            img.style.backgroundImage = "url('images/bulles/bulleViergeDroite.png')";
            newP.innerText = dialogues;
            closeBulle("popup_victime");
        break;

}
}

function bulles(nom) {
    let bulle = document.getElementById(nom);
    let fondGris = document.getElementsByClassName("fond_gris");
    //bulle.style.display = "block";
    bulle.style.opacity = "1";
    bulle.style.transition = "1s";
    bulle.style.zIndex = "2";
    fondGris[0].style.display = "block";
}

function closeBulle(nom){
    let bulle = document.getElementById(nom);
    let fondGris = document.getElementsByClassName("fond_gris");
    //bulle.style.display = "block";
    bulle.style.opacity = "0";
    bulle.style.transition = "1s";
    bulle.style.zIndex = "-1";
    fondGris[0].style.display = "none";
}

function selectOutil(nom) {
    let leftTool = document.getElementById("outil_gauche");
    let middleTool = document.getElementById("outil_milieu");
    let rightTool = document.getElementById("outil_droit");

    leftTool.style.opacity = ".5";
    middleTool.style.opacity = ".5";
    rightTool.style.opacity = ".5";

    switch (nom) {
        case "outil_gauche":
            outil_gauche.style.opacity = "1";
        break;
        case "outil_milieu":
            outil_milieu.style.opacity = "1"; 
        break;
        case "outil_droit":  
            outil_droit.style.opacity = "1"; 
        break;
    }
}


















/*$("#imgclicks").click(function() {
html2canvas($("#post"), {
    onrendered: function(canvas) {
        $("#img").show();
        var dataURL = canvas.toDataURL();
        $.ajax({
            type: "POST",
            url: "save_image.php",
            data: {
                imgBase64: dataURL
            }
        }).done(function(o) {
            console.log('saved');
            //insertion bdd<?php
              //  $sql = "INSERT INTO post (idOwner, description, image) VALUES (?,?,?)";
              //  $stmt= $conn->prepare($sql);
               // $stmt->execute([1, 'bla bla bla', 'test.png']);
           // ?>
        });
    }
});
});*/