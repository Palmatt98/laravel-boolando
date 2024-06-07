<header class="p-2">
    <ul class="d-flex justify-content-center gap-3">
        <li class="{{ Request::route()->getName() === 'home' ? 'active' : '' }}">
            <a href="{{ route('home') }}">Home</a>
        </li>
        <li class="{{ Request::route()->getName() === 'products' ? 'active' : '' }}">
            <a href="{{ route('products') }}">Prodotti</a>
        </li>
    </ul>
</header>
