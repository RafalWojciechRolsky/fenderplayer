<?php
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$formcontent="Wiadamość od: $name \n Treść widomości: $message";
$recipient = "zamowienia@skladmuzyczny.pl";
$subject = "Formularz kontaktowy - Fender PLayer";
$mailheader = "Wiadamość od: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo "<html lang='pl'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <meta http-equiv='X-UA-Compatible' content='ie=edge'>
    <style media='scree'>
    .fenks {
        color: var(--Maple);
        text-shadow: 0 .4rem .6rem rgba(0,0,0,.4);
        font-size: 5rem;
        font-family: Lobster;
        text-align: center;
        padding: 3rem;
    }
    </style>
    <title>Podziękowania</title>
</head>
<body>
<h1 class="fenks">Dziękujemy za przesłanie zapytania :)</h1>
</body>
</html>";
?>
