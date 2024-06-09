@foreach($products as $product)
    <div>{{ $product->name }}</div>
@endforeach

<a href="{{ route('products.create')}}">ADD</a>
