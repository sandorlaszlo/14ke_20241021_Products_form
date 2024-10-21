<x-layout>
    <h1>{{ $product->name }}</h1>
    <p>Code: {{ $product->code }}</p>
    <p>Price: {{ $product->price }}</p>
    <p>Quantity: {{ $product->quantity }}</p>
    <p>Color: {{ $product->color }}</p>
    <p>Desription: {{ $product->description }}</p>
</x-layout>