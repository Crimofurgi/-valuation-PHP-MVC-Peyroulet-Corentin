<?php
//CONTROLLER
    include('vue/vue_article.php');
    include('util/connect.php');
    include('model/model_article.php');

    if(isset($_POST['nom_article']) and $_POST['nom_article']!=""
    and isset($_POST['prix_article']) and $_POST['prix_article']!=""){
        $nom_article = $_POST['nom_article'];
        $prix_article = $_POST['prix_article'];

        insertArticle($bdd,$nom_article,$prix_article);
    }
    else {
        echo "<p> Formulaire mal remplie </p>";
    }

    include('vue/footer.php');


?>