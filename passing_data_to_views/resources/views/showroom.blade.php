<?php
$data = (object)[
    "showroom" => [
        [
            "id" => 1,
            "brand" => "Tesla",
            "model" => "Model S",
            "price" => 89999,
            "image" => "https://tse2.mm.bing.net/th/id/OIP.YTntGhpVZXDPsJbKt4BxiAHaEK?rs=1&pid=ImgDetMain&o=7&rm=3"
        ],
        [
            "id" => 2,
            "brand" => "BMW",
            "model" => "i4",
            "price" => 69999,
            "image" => "https://static0.carbuzzimages.com/wordpress/wp-content/uploads/2024/04/cropped-p90546641.jpeg"
        ],
        [
            "id" => 3,
            "brand" => "Mercedes",
            "model" => "EQE",
            "price" => 75999,
            "image" => "https://th.bing.com/th/id/R.a7710eec6ef6a969e858d1824eb82bc8?rik=diFCYzgA8GdF6w&pid=ImgRaw&r=0"
        ],
        [
            "id" => 4,
            "brand" => "Audi",
            "model" => "e-tron",
            "price" => 82999,
            "image" => "https://th.bing.com/th/id/R.7c4de6a5b84d42163eea3e0e0c4d7f77?rik=FiZITDosomjk%2fA&pid=ImgRaw&r=0"
        ],
        [
            "id" => 5,
            "brand" => "Volkswagen",
            "model" => "ID.4",
            "price" => 45999,
            "image" => "https://media.drivingelectric.com/image/private/s--SlQJiZ5M--/v1615464947/drivingelectric/2021-03/DSC_5737.jpg"
        ],
        [
            "id" => 6,
            "brand" => "Volvo",
            "model" => "XC40 Recharge",
            "price" => 51999,
            "image" => "https://www.topgear.com/sites/default/files/2023/05/1-Volvo-XC40-Recharge.jpg"
        ],
        /*
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
        */
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
    @vite('resources/css/app.css')
    <title>Document</title>
</head>
<body>
<h1 class="text-4xl">De showroom:</h1>
<div class="grid sm:grid-cols-2 gap-1 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 2xl:grid-cols-6">
@foreach ($data->showroom as $car)
    <div>
        <img src="{{ $car['image'] }}" alt="{{ $car['brand'] }} {{ $car['model'] }}" @style("max-width: 100%; height: auto;")>
        <p class="text-red-600 font-bold text-2xl text-left">Prijs: €{{ number_format($car['price'], 2, ',', '.') }}</p>
        <h1 class="text-3xl font-sans">{{ $car['brand'] }} {{ $car['model'] }}</h1>
    </div>
@endforeach
</div>

<a class="fixed bottom-0 left-2/4" href="/cotact">Naar contact</a>
</body>
</html>
