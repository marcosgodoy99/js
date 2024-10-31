<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        <style>
            
        </style>
    </head>
    <body class="antialiased">
        <script>
        
            fetch('https://rickandmortyapi.com/api/character')
                .then(response => response.json())
                .then(datos => {
                    console.log(datos); // Muestra los datos en la consola
                    fetch('/storeApi', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    },
                    body: JSON.stringify(datos) // Convierte los datos a formato JSON
                })
                .then(response => response.json()) // Asumiendo que PHP devuelve JSON
                })
                .catch(error => {
                    console.error('Hubo un problema con la solicitud:', error);
                });
    
    
        </script>
    </body>
</html>
