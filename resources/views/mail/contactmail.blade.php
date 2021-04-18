<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Travel.it</title>
</head>
<body>
    <h1>Ciao {{$contact['user']}}, grazie per averci contattati!</h1>
    <p>Verrai presto ricontattato da un membro del nostro team!</p>
    <p>Siamo a sua completa disposizione.</p>
    <hr>
    <p>Riepilogo dati:</p>
    <ul>
        <li>Nome Utente: {{$contact['user']}}</li>
        <li>Messaggio: {{$contact['message']}}</li>
    </ul>
</body>
</html>