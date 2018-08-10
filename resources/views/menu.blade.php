<div class="row site-menu">

    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top navbar-light bg-faded col-sm-12">

        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="/">Головна <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown"
                       aria-haspopup="true" aria-expanded="false">
                        Каталог
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="/products?category=1&sub_category=none">Вхідні двері</a>
                        <a class="dropdown-item" href="/products?category=2&sub_category=none">Міжкімнатні двері</a>
                        <a class="dropdown-item" href="/products?category=3&sub_category=none">Вікна</a>
                    </div>
                </li>
                {{--<li class="nav-item active">--}}
                    {{--<a class="nav-link" href="{{ route('cart') }}">Кошик</a>--}}
                {{--</li>--}}
            </ul>
        </div>

        <div class="col-sm-3 phone-number">+380971011007, +380997309837</div>
        <div class="col-sm-3">Україна, м. Чернівці, Проспект Незалежності 91</div>
        <div class="col-sm-3 email">etalon.slon@gmail.com</div>



    </nav>
</div>

<div class="row">
    <div class="cart-container">
        <a href="{{ route('cart') }}" class="cart-text">
            @if(Cart::count()==0)
                {{--<span class="cart-text">Кошик порожній</span>--}}
                Кошик <span id="count"> порожній </span>
            @else
                Кошик <span id="count">( {{ Cart::count() }} )</span>
            @endif
            <img src="{{ URL::asset('img/cart-icon.png')}}" class="cart-icon">
        </a>
    </div>
</div>