<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Lista de Ofertas</title>
    <style>
        table { width: 100%; border-collapse: collapse; }
        th, td { border: 1px solid #ddd; padding: 12px; text-align: left; }
        th { background-color: #f2f2f2; }
        .alert { padding: 15px; background-color: #d4edda; color: #155724; margin-bottom: 20px; }
    </style>
</head>
<body>
    <h1>Panel de Ofertas Disponibles</h1>

    @if(session('success'))
        <div class="alert">{{ session('success') }}</div>
    @endif

    <p><a href="{{ route('ofertas.create') }}">+ Crear Nueva Oferta</a></p>

    <table>
        <thead>
            <tr>
                <th>Título</th>
                <th>Tienda</th>
                <th>Vigencia</th>
                <th>Precio Original</th>
                <th>Precio Descuento</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($ofertas as $oferta)
            <tr>
                <td>{{ $oferta->titulo }}</td>
                <td>{{ $oferta->tienda }}</td>
                <td>{{ $oferta->vigencia }}</td>
                <td>${{ number_format($oferta->precio_original, 2) }}</td>
                <td><strong>${{ number_format($oferta->precio_descuento, 2) }}</strong></td>
                <td>
                    <a href="{{ route('ofertas.show', $oferta) }}">Ver detalles</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>