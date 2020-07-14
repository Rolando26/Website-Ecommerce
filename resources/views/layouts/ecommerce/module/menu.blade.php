<ul class="nav navbar-nav center_nav pull-right">
    <li class="nav-item active">
        <a class="nav-link" href="{{ route('front.index') }}">Home</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('front.product') }}">Produk</a>
    </li>
    @foreach ($categories as $category)
    <li class="nav-item">
        <a class="nav-link" href="{{ url('/category/' . $category->slug) }}">{{ $category->name }}</a>
    </li>
    @endforeach
</ul>