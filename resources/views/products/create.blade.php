<form method="POST" action="{{ route('products.store') }}">
    @csrf
    <input type="text" name="name" placeholder="Name">
    <textarea name="description" placeholder="Description"></textarea>
    <input type="text" name="price" placeholder="Price">
    <input type="number" name="stock_level" placeholder="stock_level">
    <button type="submit">Save</button>
</form>
