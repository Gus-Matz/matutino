<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Punto de Venta | Matz-Shop</title>
</head>
<body>
    <div id="app">
        <ul>
            <li v-for='producto in productos'>
                {{producto}}
            </li>
        </ul>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/vue"></script>
    
    <script>
        const app = new Veu({
            el = 'app',
            data: {
                productos: [
                    'Papel',
                    'Cafe',
                    'Playera'
                ]
            }
        })
    </script>
</body>
</html>