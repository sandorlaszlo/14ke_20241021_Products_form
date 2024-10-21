<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Products</title>
    <x-styles></x-styles>
</head>
<body>
    <div class="container">
        <x-nav></x-nav>
        <x-header></x-header>

        {{$slot}}

        <x-footer></x-footer>
    </div>

    <x-scripts></x-scripts>
</body>
</html>