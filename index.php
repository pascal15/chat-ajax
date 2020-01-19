<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
    <script src="actualiser.js"></script>
</head>
<body>
    <style>
    .return{
        background-color: red;
        border-radius: 0.2%;
        margin-left: 25%;
        margin-right: 25%;
        
    }
    .formulaire{
        margin-left: 50%;
        margin-right:50%;
        background-color: teal;
    }
    
    </style>
    <form method="post" class="formulaire">
        <div class="return"></div>
        <input type="text" class="nom"><br>
        <input type="text" class="message"><br>
        <input type="submit" value="valider">

    </form>
    <div class="afficher"></div>

</body>
</html>