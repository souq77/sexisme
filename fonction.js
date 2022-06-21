function reveal(type) {
    switch (type) {
        case 'Scenario':
            displayTool("post_sous_outils_scenario", "post_outils_phrase_1");
            break;
        case 'Personnage':
            displayTool("post_sous_outils_personnages", "post_outils_phrase_2");
            break;
        case 'Bulle':
            displayTool("post_sous_outils_bulles", "post_outils_phrase_3");
            break;
    }
}

function fermeOutils() {
    let tools = document.getElementsByClassName("tools");

    for (let i = 0; i < tools.length; i++) {
        const element = tools[i];
        //element.style.display = "none";        
        element.style.bottom = "0vh";       
        element.style.transition = "1s";       
    }
}

function fermePhrases() {
    let phrases = document.getElementsByClassName("post_outils_phrases");

    for (let i = 0; i < phrases.length; i++) {
        const element = phrases[i];
        //element.style.display = "none";        
        element.style.opacity = "0";       
        element.style.transition = "1s";    
    }
}

function displayTool(idDiv, idTxt) {
    let postImg = document.getElementById("post_img");
    let tool = document.getElementById(idDiv);
    let phrase = document.getElementById(idTxt);
    /*if (tool.style.bottom != "0vh") {
        fermeOutils();
        postImg.style.height = "78vh";
    } else {*/
        fermeOutils();
        fermePhrases();
        tool.style.bottom = "16vh";
        tool.style.transition = "1s";
        phrase.style.opacity = "1";
        phrase.style.transition = "1s";
        //postImg.style.height = "62vh";
    //}
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
            img.style.backgroundImage = "url('images/scenarios/travail.png')";      
        break;
        case "residence":  
            img.style.backgroundImage = "url('images/scenarios/maison.png')";      
        break;
        case "activite": 
            img.style.backgroundImage = "url('images/scenarios/activite.png')";       
        break;
        case "ami":
            img.style.backgroundImage = "url('images/scenarios/ami.png')";        
        break;
        case "autre":
            img.style.backgroundImage = "url('images/scenarios/autre.png')";        
        break;
    }
}

function personnages(type) {
    let img = document.getElementById("img_couche_2");
    switch (type) {
        case "1":
            img.style.backgroundImage = "url('images/personnages/sifflement-personnages.png')"; 
        break;
        case "2":
            img.style.backgroundImage = "url('images/personnages/regard-personnages.png')";       
        break;
        case "3":  
            img.style.backgroundImage = "url('images/personnages/menace-personnages.png')";      
        break;
        case "4":  
            img.style.backgroundImage = "url('images/personnages/agression-personnages.png')";      
        break;
        case "5": 
            img.style.backgroundImage = "url('images/personnages/exhibition-personnages.png')";       
        break;
        case "6":
            img.style.backgroundImage = "url('images/personnages/viol-personnages.png')";        
        break;
        case "7":
            img.style.backgroundImage = "url('images/personnages/pornographie-personnages.png')";        
        break;
        case "8":
            img.style.backgroundImage = "url('images/personnages/remarque-personnages.png')";        
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

    switch (nom) {
        case "outil_gauche":
            /*if (leftTool.style.opacity == "1") {
                leftTool.style.opacity = ".5";
                middleTool.style.opacity = ".5";
                rightTool.style.opacity = ".5";            
            } else {*/
                leftTool.style.opacity = "1";
                middleTool.style.opacity = ".5";
                rightTool.style.opacity = ".5";            
            //}
        break;
        case "outil_milieu":
            /*if (middleTool.style.opacity == "1") {
                leftTool.style.opacity = ".5";
                middleTool.style.opacity = ".5";
                rightTool.style.opacity = ".5";            
            } else {*/
                leftTool.style.opacity = ".5";
                middleTool.style.opacity = "1";
                rightTool.style.opacity = ".5";            
            //}
        break;
        case "outil_droit":  
        /*if (rightTool.style.opacity == "1") {
            leftTool.style.opacity = ".5";
            middleTool.style.opacity = "1";
            rightTool.style.opacity = ".5";            
        } else {*/
            leftTool.style.opacity = ".5";
            middleTool.style.opacity = ".5";
            rightTool.style.opacity = "1";            
        //}
        break;
    }
    
    /*leftTool.style.opacity = ".5";
    middleTool.style.opacity = ".5";
    rightTool.style.opacity = ".5";

    switch (nom) {
        case "outil_gauche":
            leftTool.style.opacity = "1";
        break;
        case "outil_milieu":
            middleTool.style.opacity = "1"; 
        break;
        case "outil_droit":  
        rightTool.style.opacity = "1"; 
        break;
    }*/
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
