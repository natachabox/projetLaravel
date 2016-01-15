<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>fichier tableau</title>
</head>
<body>

<h1>fichier tableau</h1>

{{ dump($bladeProduct) }}

{{-- Ceci est un commentaire en blade --}}

<ul>
    @foreach ($bladeProduct as $prod)
        <li>Titre : {{ $prod['title'] }}</li>
        <li>Description : {{ $prod['description'] }}</li>
        <li>Prix : {{ $prod['prix'] }}</li>
        <li>Date :  {{ $prod['date_created']->format('d m Y') }}</li>
    @endforeach
</ul>


<ul>
    @forelse ($bladeProduct as $prod)
        <li>Titre : {{ $prod['title'] }}</li>
        <li>Description : {{ $prod['description'] }}</li>
        <li>Prix : {{ $prod['prix'] }}</li>
        <li>Date :  {{ $prod['date_created']->format('d m Y') }}</li>
    @empty
        <p>Il n'y a pas de produit disponible</p>
    @endforelse
</ul>

</body>
</html>