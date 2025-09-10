<?php
$data = (object)[
    "showroom" => [
        [
            "id" => 1,
            "brand" => "Tesla",
            "model" => "Model S",
            "price" => 89999
        ],
        [
            "id" => 2,
            "brand" => "BMW",
            "model" => "i4",
            "price" => 69999
        ],
        [
            "id" => 3,
            "brand" => "Mercedes",
            "model" => "EQE",
            "price" => 75999
        ],
        [
            "id" => 4,
            "brand" => "Audi",
            "model" => "e-tron",
            "price" => 82999
        ],
        [
            "id" => 5,
            "brand" => "Volkswagen",
            "model" => "ID.4",
            "price" => 45999
        ],
        [
            "id" => 6,
            "brand" => "Volvo",
            "model" => "XC40 Recharge",
            "price" => 51999
        ],
        [
            "id" => 7,
            "brand" => "Hyundai",
            "model" => "Ioniq 5",
            "price" => 42999
        ],
        [
            "id" => 8,
            "brand" => "Kia",
            "model" => "EV6",
            "price" => 44999
        ],
        [
            "id" => 9,
            "brand" => "Ford",
            "model" => "Mustang Mach-E",
            "price" => 55999
        ],
        [
            "id" => 10,
            "brand" => "Nissan",
            "model" => "Ariya",
            "price" => 39999
        ],
        [
            "id" => 11,
            "brand" => "Porsche",
            "model" => "Taycan",
            "price" => 99999
        ],
        [
            "id" => 12,
            "brand" => "Peugeot",
            "model" => "e-208",
            "price" => 25999
        ],
        [
            "id" => 13,
            "brand" => "Renault",
            "model" => "Megane E-Tech",
            "price" => 31999
        ],
        [
            "id" => 14,
            "brand" => "Opel",
            "model" => "Corsa-e",
            "price" => 24999
        ],
        [
            "id" => 15,
            "brand" => "Fiat",
            "model" => "500e",
            "price" => 21999
        ],
        [
            "id" => 16,
            "brand" => "Mazda",
            "model" => "MX-30",
            "price" => 28999
        ],
        [
            "id" => 17,
            "brand" => "Honda",
            "model" => "e",
            "price" => 26999
        ],
        [
            "id" => 18,
            "brand" => "Jaguar",
            "model" => "I-Pace",
            "price" => 79999
        ],
        [
            "id" => 19,
            "brand" => "Skoda",
            "model" => "Enyaq iV",
            "price" => 37999
        ],
        [
            "id" => 20,
            "brand" => "Citroën",
            "model" => "ë-C4",
            "price" => 30999
        ],
    ],
    "company" => (object)[
        "name" => "FutureDrive B.V.",
        "address" => "Elektronstraat 42, 1234 AB Amsterdam",
        "phone" => "+31 20 123 4567",
        "email" => "info@futuredrive.nl",
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
    <title>Contact</title>
</head>
<body>
<h1>Contact</h1>
<p>Bedankt voor je interesse in onze elektrische auto's! Als je vragen hebt of meer informatie wilt, neem dan gerust contact met ons op via de onderstaande gegevens:</p>
<p>Naam: {{ $data->company->name }}</p>
<p>Adres: {{ $data->company->address }}</p>
<p>Telefoon: {{ $data->company->phone }}</p>
<p>E-mail: {{ $data->company->email }}</p>
<a style="position: fixed; bottom: 0; left: 50%" href="/">Naar Home</a>

</body>
</html>
