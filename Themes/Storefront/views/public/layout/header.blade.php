<header class="header-wrap">
    <div class="header-wrap-inner">
        <div class="container">
            <div class="row flex-nowrap justify-content-between position-relative">
                <div class="header-column-left">
                    <div class="sidebar-menu-icon-wrap">
                        <div class="sidebar-menu-icon">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </div>

                    <a href="{{ route('home') }}" class="header-logo">
                        @if (is_null($logo))
                            <img src="{{ '/img/logo.svg' }}" alt="logo">
                        @else
                            <img src="{{ $logo }}" alt="logo">
                        @endif
                    </a>
                </div>
                
                <header-search
                    :categories="{{ $categories }}"
                    :most-searched-keywords="{{ $mostSearchedKeywords }}"
                    initial-query="{{ request('query') }}"
                    initial-category="{{ request('category') }}"
                >
                </header-search>

                <div class="header-column-right d-flex">
                    {{--
                    <a href="{{ route('account.wishlist.index') }}" class="header-wishlist">
                        <div class="icon-wrap">
                            <i class="lar la-heart"></i>
                            <div class="count" v-text="wishlistCount"></div>
                        </div>

                        <span>{{ trans('storefront::layout.favorites') }}</span>
                    </a>
                    --}}
                    @auth
                    <a href="{{ route('account.dashboard.index') }}" class="header-wishlist">
                        <div class="icon-wrap">
                            <i class="las la-user"></i>
                        </div>
                        <span>{{ trans('storefront::layout.account') }}</span>
                    </a>
                    @else
                    <a href="{{ route('login') }}" class="header-wishlist">
                        <div class="icon-wrap">
                            <i class="las la-sign-in-alt"></i>
                        </div>
                        <span>{{ trans('storefront::layout.login') }}</span>
                    </a>
                    @endauth
                    <div class="header-cart">
                        <div class="icon-wrap">
                            <i class="las la-cart-arrow-down"></i>
                            <div class="count" v-text="cart.quantity"></div>
                        </div>

                        <span v-html="cart.subTotal.inCurrentCurrency.formatted"></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
