<div class="products">
    <div>
        <img class="w-100" src="{{ Vite::asset('resources/img/' . $product['frontImage']) }}" alt="">

    </div>
    <div>{{ $product['name'] }}</div>
    <span>{{ $product['brand'] }}</span>
    <span>{{ $product['price'] }}</span>

</div>
