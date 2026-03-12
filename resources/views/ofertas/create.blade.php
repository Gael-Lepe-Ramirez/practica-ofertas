<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Nueva Oferta</title>
    <style>
        input[type="text"], input[type="date"], input[type="number"] {
            width: 350px; padding: 5px; margin-bottom: 5px;
        }
    </style>
</head>
<body>
    <h1>Crear Nueva Oferta</h1>
    <form action="{{ route('ofertas.store') }}" method="POST">
        @csrf
        <table border="0">
            <tr>
                <td><label>Título:</label></td>
                <td><input type="text" name="titulo" value="{{ old('titulo') }}">
                @error('titulo') <div style="color:red">{{ $message }}</div> @enderror</td>
            </tr>
            <tr>
                <td><label>Vigencia:</label></td>
                <td><input type="date" name="vigencia" value="{{ old('vigencia') }}">
                @error('vigencia') <div style="color:red">{{ $message }}</div> @enderror</td>
            </tr>
            <tr>
                <td><label>Tienda:</label></td>
                <td><input type="text" name="tienda" value="{{ old('tienda') }}">
                @error('tienda') <div style="color:red">{{ $message }}</div> @enderror</td>
            </tr>
            <tr>
                <td><label>Precio Original:</label></td>
                <td><input type="number" step="0.01" name="precio_original" value="{{ old('precio_original') }}">
                @error('precio_original') <div style="color:red">{{ $message }}</div> @enderror</td>
            </tr>
            <tr>
                <td><label>Precio Descuento:</label></td>
                <td><input type="number" step="0.01" name="precio_descuento" value="{{ old('precio_descuento') }}">
                @error('precio_descuento') <div style="color:red">{{ $message }}</div> @enderror</td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="Guardar Oferta"></td>
            </tr>
        </table>
    </form>
</body>
</html>