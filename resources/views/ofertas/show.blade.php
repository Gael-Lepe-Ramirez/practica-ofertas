<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Detalles de la Oferta</title>
    <style>
        .card { border: 1px solid #ccc; padding: 20px; width: 400px; margin: 20px auto; font-family: Arial, sans-serif; }
        .precio-old { text-decoration: line-through; color: gray; }
        .precio-new { color: green; font-size: 1.5em; font-weight: bold; }
    </style>
</head>
<body>
    <div class="card">
        <h1>{{ $offer->titulo }}</h1>
        <p><strong>Tienda:</strong> {{ $offer->tienda }}</p>
        <p><strong>Válido hasta:</strong> {{ $offer->vigencia }}</p>
        <hr>
        <p class="precio-old">Precio regular: ${{ number_format($offer->precio_original, 2) }}</p>
        <p class="precio-new">¡Oferta!: ${{ number_format($offer->precio_descuento, 2) }}</p>
        
        <br>
        <a href="{{ route('ofertas.index') }}">Volver a la lista</a>
    </div>
</body>
</html>