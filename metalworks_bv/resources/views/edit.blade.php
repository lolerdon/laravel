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
<form class="form-control max-w-full grid grid-cols-2 bg-gray-100" method="post">
    @csrf
    <input type="hidden" name="id" value="{{$leverancier->leveranciersnummer}}">
    <p>Bedrijfsnaam</p>
    <input type="text" name="bedrijfsnaam" value="{{$leverancier->bedrijfsnaam}}">
    <p>Contactpersoon</p>
    <input type="text" name="contactpersoon" value="{{$leverancier->contactpersoon}}">
    <p>Email</p>
    <input type="text" name="email" value="{{$leverancier->email}}">
    <p>Telefoonnummer</p>
    <input type="text" name="telefoonnummer" value="{{$leverancier->telefoonnummer}}">
    <p>Adres</p>
    <input type="text" name="adres" value="{{$leverancier->adres}}">
    <p>Postcode</p>
    <input type="text" name="postcode" value="{{$leverancier->postcode}}">
    <p>Plaats</p>
    <input type="text" name="plaats" value="{{$leverancier->plaats}}">
    <p>Land</p>
    <input type="text" name="land" value="{{$leverancier->land}}">
    <p>KVK nummer</p>
    <input type="text" name="kvk_nummer" value="{{$leverancier->kvk_nummer}}">
    <p>BTW nummer</p>
    <input type="text" name="btw_nummer" value="{{$leverancier->btw_nummer}}">
    <p>Bankrekening</p>
    <input type="text" name="bankrekening" value="{{$leverancier->bankrekening}}">
    <br>
    <input type="submit" value="Bijwerken" class="bg-blue-500 text-white p-2 col-span-2 hover:bg-blue-700 cursor-pointer">
</form>
</body>
</html>
