<?php
$offertes = [
    'of12872' => [
        'offertenummer' => 'of12872',
        'klant' => 'Van Meer Solutions',
        'bedrag' => 1500.50
    ],
    'of10632' => [
        'offertenummer' => 'of10632',
        'klant' => 'Groene vingers',
        'bedrag' => 1200.00
    ],
    'of28003' => [
        'offertenummer' => 'of28003',
        'klant' => 'Marios pizza',
        'bedrag' => 2500.75
    ],
    'of10891' => [
        'offertenummer' => 'of10891',
        'klant' => 'Blauwwater Consulting',
        'bedrag' => 1750.00
    ]
];
?>
    <!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>Order Info</h1>
<p>Order Number: {{$offertes[$order]['offertenummer']}}</p>
<p>Customer: {{$offertes[$order]['klant']}}</p>
<p>&euro;: {{$offertes[$order]['bedrag']}}</p>

</body>
</html>
