<!-- login.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="Ressources/AC2FL.png" type="image/x-icon">
    <link rel="stylesheet" href="Styles/login.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css">
    <title>Connexion</title>
<body>
    <header>
    <a href ="index.php"class="btn-home"  ><i class="ri-home-2-line"></i></a>
        <h1>Bienvenue !</h1>
    </header>
    <main>
        <form id="login_form" class="form_class" action="authentification.php" method="post">
            <div class="form_div">
            <label for="id_adherent">Numéro d'adhérent:</label>
                <input class="field_class" id="id_adherent" name="id_adherent" required type="number" placeholder="Entrez votre numéro d'adhérent" autofocus>
                <label for="email">E-mail :</label>
                <input id="email" class="field_class" name="email" type="email" required placeholder="Entrez votre adresse e-mail">
                <button class="submit_class" type="submit" form="login_form" >Connexion</button>
            </div>
            <div class="info_div">
                <p>Vous n'êtes pas adhérent ? <a href="index.php#formulaire" class="contact">Cliquez ici</a></p>
            </div>
        </form>
    </main>
   
    <style>
        body {
    background: url(Ressources/fond_log1.jpg) no-repeat;
    background-size:cover;
}
</style>
</body>
</html>
