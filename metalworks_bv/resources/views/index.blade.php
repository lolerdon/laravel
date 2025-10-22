<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>
<body>
{{--create form--}}
<div class="grid grid-cols-2 grid-flow-col gap-4 ">
    <div>
        <form action="/" method="post" class="grid grid-cols-2 gap-4 p-4 bg-gray-100 ">
            @csrf
            <h1 class="text-3xl text-center col-span-2">Leverancier toevoegen</h1>
            <input type="text" name="bedrijfsnaam" placeholder="bedrijfsnaam" required>
            <input type="text" name="contactpersoon" placeholder="contactpersoon" required>
            <input type="text" name="email" placeholder="email" required>
            <input type="text" name="telefoonnummer" placeholder="telefoonnummer" required>
            <input type="text" name="adres" placeholder="adres" required>
            <input type="text" name="postcode" placeholder="postcode" required>
            <input type="text" name="plaats" placeholder="plaats" required>
            <input type="text" name="land" placeholder="land" required>
            <input type="text" name="kvk_nummer" placeholder="kvk_nummer" required>
            <input type="text" name="bankrekening" placeholder="bankrekening" required>
            <input type="submit" value="Toevoegen" class="bg-blue-500 text-white p-2 col-span-2 hover:bg-blue-700 cursor-pointer">
        </form>
    </div>
    <br>
    <div class="col-start-2 grid grid-cols-2 gap-4 p-4 bg-gray-100 ">
        @foreach($leveranciers as $leverancier)
            <ul>
                <li class="text-3xl text-center">{{$leverancier->bedrijfsnaam}}</li>
                <div class="grid grid-cols-2 duration-1000 ">
                    <p>Contactpersoon:</p>
                    <li class="col-start-2">{{$leverancier->contactpersoon}}</li>
                    <p>Email:</p>
                    <li class="col-start-2">{{$leverancier->email}}</li>
                    <p>Telefoonnummer:</p>
                    <li class="col-start-2">{{$leverancier->telefoonnummer}}</li>
                    <p>Adres:</p>
                    <li class="col-start-2">{{$leverancier->adres}}</li>
                    <p>Postcode:</p>
                    <li class="col-start-2">{{$leverancier->postcode}}</li>
                    <p>Plaats:</p>
                    <li class="col-start-2">{{$leverancier->plaats}}</li>
                    <p>Land:</p>
                    <li class="col-start-2">{{$leverancier->land}}</li>
                    <p>KVK nummer:</p>
                    <li class="col-start-2">{{$leverancier->kvk_nummer}}</li>
                    <p>bankrekening:</p>
                    <li class="col-start-2">{{$leverancier->bankrekening}}</li>
                    <p>Aangemaakt op:</p>
                    <li class="col-start-2">{{$leverancier->aangemaakt_op}}</li>
                    <p>Bijgewerkt op:</p>
                    <li class="col-start-2">{{$leverancier->bijgewerkt_op}}</li>
                </div>
            </ul>
        @endforeach
    </div>
</div>

</body>
</html>
