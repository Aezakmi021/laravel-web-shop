

<div class="flex flex-wrap gap-10 justify-between">
    @foreach($products as $product)
        <a href="{{route('/product/'.$product->id)}}" class="shadow hover:shadow-lg p-4 w-1/5 shadow-blue-500/40 md:shadow-indigo-500/40 hover:shadow-indigo-500/40">
            <p>{{$product->id}}</p>
            <p>{{$product->product_name}}</p>
            <p>{{$product->product_description}}</p>
            <p>{{$product->product_count}}</p>
            <p>{{$product->product_price}}</p>
        </a>
    @endforeach
</div>
