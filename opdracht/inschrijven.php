<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zaal voetbalclubASD!</title>
</head>
<body style="font-family: monospace; background-color: beige">

    <h3>Inschrijf formulier</h3>
    <form action="create_gebruikers.php" method="post">
        Voornaam:
        <br>
        <input type="text" name="form_voornaam"><br>
        Achternaam:
        <br>
        <input type="text" name="form_achternaam"><br>
        Email:
        <br>
        <input type="text" name="form_email"><br>
        Wachtwoord:
        <br>
        <input type="password" name="form_wachtwoord"><br>
        Team:
        <br>
        <input type="text" name="form_team"><br>
        Contributie:
        <br>
        <input type="text" name="form_contributie"><br>
        <br>
        <button type="submit">Verzenden</button>
    </form>
    <p><strong>Klik <a href="overzicht_leden.php">hier</a> voor een overzicht van alle teams.</strong></p>
</body>
</html>
