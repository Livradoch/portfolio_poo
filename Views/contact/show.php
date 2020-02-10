<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" href="<?php echo env::assetsUrl() . 'css/style-contact.css'?>">
    <title>contact</title>
</head>
<body>
    
</body>
</html>


<body id="contact">
<form action="" method="post" class="contact" style="display:flex; flex-direction:column; ">
    <container class="nuage">
    <label for="your_name">votre nom</label>    
    <input type="text" name="your_name" id="name">
        <label for="email">votre mail</label>
        <input type="email" name="email" id="mail">
        <label for="password">votre mot de passe</label>
        <input type="password" name="password" id="pw">
        <label for="message">votre message</label>
        <textarea name="message" id="msg" cols="30" rows="10"></textarea>
    </container>
</form>
</body>