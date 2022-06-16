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
            img.style.backgroundImage = "url('images/scenarios/balloon.png')";      
        break;
        case "residence":  
            img.style.backgroundImage = "url('images/scenarios/balloon.png')";      
        break;
        case "activite": 
            img.style.backgroundImage = "url('images/scenarios/balloon.png')";       
        break;
        case "ami":
            img.style.backgroundImage = "url('images/scenarios/balloon.png')";        
        break;
    }
}

function personnages(type) {
    let img = document.getElementById("img_couche_2");
    switch (type) {
        case "1":
            img.style.backgroundImage = "url('images/personnages/balloon.png')"; 
        break;
        case "2":
            img.style.backgroundImage = "url('images/personnages/balloon.png')";       
        break;
        case "3":  
            img.style.backgroundImage = "url('images/personnages/balloon.png')";      
        break;
        case "4":  
            img.style.backgroundImage = "url('images/personnages/balloon.png')";      
        break;
        case "5": 
            img.style.backgroundImage = "url('images/personnages/balloon.png')";       
        break;
        case "6":
            img.style.backgroundImage = "url('images/personnages/balloon.png')";        
        break;
        case "7":
            img.style.backgroundImage = "url('images/personnages/balloon.png')";        
        break;
        case "8":
            img.style.backgroundImage = "url('images/personnages/balloon.png')";        
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
