<nav class="navbar navbar-light">
<div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="nav navbar-nav center_nav pull-right">
    @if (auth()->guard('customer')->check())
        <li class="nav-item {{ 'member/dashboard' == request()->path() ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('customer.dashboard') }}">Home</a>
        </li>
    @else
        <li class="nav-item {{ '/' == request()->path() ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('front.index') }}">Home</a>
        </li>
    @endif
        <li class="nav-item  {{ 'product' == request()->path() ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('front.product') }}">Produk</a>
        </li>
    </ul>
</div>
<form action="{{ route('front.product') }}" method="get" class="form-inline">
<input type="text" name="q" class="form-control" placeholder="Cari..." value="{{ request()->q }}">
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
</form>
</nav>
