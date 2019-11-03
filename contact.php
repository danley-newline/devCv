<?php


    if (isset($_POST['submit'])){
 
    $name= $_POST['name'];
    $mailFrom= $_POST['sujet'];
    $message= $_POST['message'];

    $mailTo= "danleynewline@gmail.com";
    $headers= "From:".$mailFrom.".\n\n".$message;

    $txt= "vous avez un message de  ". $name ;
    
    mail($mailTo,$txt,$headers);
    
    
    }
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Daniel-kacou-page</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="asset/css/bootstrap.min.css">
    <link rel="stylesheet" href="asset/css/style.css">
    <link rel="stylesheet" href="asset/css/nav.css">
</head>
<body >
<nav class=" container-fluid navbar navbar-inverse">
        <div class="container">
            <div class="espace">
                <div class="navbar-header">

                    <a class="navbar-brand" href="apropos.html">back-accueil</a>
                </div>
                
            </div>
        </div>
    </nav>

    <div class="ins_fin">
        <h1>votre message a bien été envoyée merci pour votre passage sur mon site ,merci encore et a bientot.
        </h1>

    </div>

    

    
</body>
</html>
    
