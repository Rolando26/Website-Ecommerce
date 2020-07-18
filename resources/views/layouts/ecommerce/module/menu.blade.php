<ul class="nav navbar-nav center_nav pull-right">
    <li class="nav-item {{ '/' == request()->path() ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('front.index') }}">Home</a>
    </li>
    <li class="nav-item  {{ 'product' == request()->path() ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('front.product') }}">Produk</a>
    </li>
</ul>

