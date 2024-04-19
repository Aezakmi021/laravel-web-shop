

<div class="flex flex-wrap gap-10 justify-between">
    @foreach($products as $product)
        <div>
            <p>{{$product['id']}}</p>
            <p>{{$product['product_name']}}</p>
            <p>{{$product['product_description']}}</p>
            <p>{{$product['product_count']}}</p>
            <p>{{$product['product_price']}}</p>
            <hr>
        </div>
    @endforeach
</div>
