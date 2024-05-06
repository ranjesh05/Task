<div class="sidebar-wrapper sidebar-theme">

    <nav id="sidebar">
        <div class="profile-info">

            <div class="user-info">
            <h6 class="">Welcome to</h6>

                <h6 class="">{{ Auth::user()->name }}</h6>
            </div>
        </div>

        <ul class="list-unstyled menu-categories" id="accordionExample">
        @if (Auth::user()->user_group_id == 1)


                <li
                    class="menu {{ request()->is('super-admin/category-list') || request()->is('super-admin/product-list')? 'active' : '' }}">
                    <a href="#elements" data-toggle="collapse"
                        aria-expanded="{{ request()->is('super-admin/category-list') || request()->is('super-admin/product-list') ? 'true' : 'false' }}"
                        class="dropdown-toggle">
                        <div class="">
                            {{-- <img style="width: 30px;padding-right: 5px;" src="{{asset('assets/img/menu.png')}}" alt=""> --}}
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 900 900" width="900" height="900" style="fill:#000000;stroke:none;">
  <g transform="translate(0,900) scale(0.1,-0.1)">
    <path d="M8286 8603c-16 -3 -216 -79 -445 -170c-229 -91 -466 -184 -527 -208c-61 -24 -129 -52 -151 -63c-49 -25 -109 -91 -133 -146c-10 -22 -57 -257 -104 -521c-47 -264 -88 -490 -91 -502l-5 -23 -798 0c-773 0 -798 -1 -829 -20c-68 -41 -68 -39 -68 -500c0 -414 0 -415 23 -451c46 -75 -105 -69 1796 -67l1705 3c19 19 40 50 46 70c7 22 9 177 7 430c-3 439 -3 437 -71 479c-34 21 -42 21 -651 21c-422 0 -616 3 -616 10c0 15 109 608 118 644c7 27 29 37 461 207c250 98 470 189 488 201c82 55 141 193 130 304c-16 160 -173 290 -321 267z"/>
    <path d="M2965 6054c-322 -33 -516 -69 -737 -134c-685 -202 -1238 -604 -1563 -1134c-92 -150 -166 -294 -228 -441c-69 -166 -147 -403 -147 -450c0 -50 21 -95 62 -131l35 -31l2776 -7l2776 -7l40 21c22 11 50 22 63 23c34 6 61 49 66 110c3 43 -3 76 -37 176c-22 67 -58 163 -80 214c-22 51 -64 154 -94 230c-324 816 -1185 1404 -2257 1543c-119 15 -581 27 -675 18z"/>
    <path d="M5430 5602c0 -35 6 -43 96 -122c186 -164 409 -430 553 -662c129 -205 251 -477 321 -708c69 -232 45 -407 -77 -557l-43 -53l20 -568c33 -935 52 -1467 54 -1469c0 -1 451 -3 1001 -4c1127 -3 1034 -9 1075 75c20 42 20 47 20 2074l0 2032l-1510 0l-1510 0z"/>
    <path d="M682 3287c-56 -18 -128 -91 -167 -170c-90 -183 -60 -418 70 -549c25 -26 65 -53 88 -62c43 -15 -10 -15 4907 -30l185 -1l53 30c73 40 148 125 191 215c31 64 36 86 39 166c8 179 -67 332 -193 390c-50 24 -74 66 -90 154l-12 50l-316 -3l-317 -2l5 27c22 106 56 162 127 211c196 135 480 36 529 -183l12 -55l318 0l317 0l7 43c11 61 47 128 95 171c115 103 299 114 433 25c70 -46 108 -108 131 -211l6 -28l320 0l320 0l0 33c0 45 41 127 85 172c21 21 63 49 94 64c48 22 69 26 151 26c112 -1 162 -19 235 -86c54 -50 74 -84 90 -154l11 -50l212 -3l212 -2l0 38c0 21 -7 65 -15 97c-58 224 -236 396 -495 481c-78 26 -98 28 -245 28c-141 1 -169 -2 -235 -22c-155 -49 -304 -146 -384 -251l-38 -51l-27 37c-77 106 -219 203 -371 254c-178 59 -403 51 -572 -21c-121 -52 -241 -144 -317 -245c-22 -28 -23 -29 -34 -10c-21 39 -113 129 -180 176c-144 101 -304 145 -501 136c-233 -9 -427 -101 -564 -265l-49 -59l-47 59c-89 111 -240 202 -404 244c-112 28 -274 32 -387 7z"/>
    <path d="M485 1387c-54 -21 -89 -45 -127 -84c-45 -47 -68 -99 -68 -156c0 -81 24 -124 171 -302c78 -93 155 -190 172 -215c44 -66 96 -119 142 -143l40 -22l2364 -3c1526 -1 2376 1 2400 8c64 17 128 65 168 127c21 32 100 134 176 226c76 93 148 184 159 203c11 19 22 61 25 94c8 83 -14 136 -82 199c-99 89 192 81 -2829 80c-2030 0 -2688 -3 -2711 -12z"/>
  </g>
</svg>

                            <span> Menu</span>
                        </div>
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="feather feather-chevron-right">
                                <polyline points="9 18 15 12 9 6"></polyline>
                            </svg>
                        </div>
                    </a>
                    <ul class="collapse submenu list-unstyled {{ request()->is('super-admin/category-list')||request()->is('super-admin/product-list')  ? 'show' : '' }}"
                        id="elements" data-parent="#accordionExample">
                        <li
                            class="{{ request()->is('super-admin/category-list') ? 'active' : '' }}">
                            <a href="{{ route('super-admin.category_list') }}"> Master Category</a>
                        </li>

                        <li
                            class="{{ request()->is('super-admin/product-list')  ? 'active' : '' }}">
                            <a href="{{ route('super-admin.product_list') }}"> Master Product </a>
                        </li>
                    </ul>
                </li>

                @endif
                @if (Auth::user()->user_group_id == 2)
                <li class="{{ request()->is('user/dashboard') ? 'menu active' : 'menu' }}">
                    <a href="{{ route('user.dashboard') }}"
                        aria-expanded="{{ request()->is('user/dashboard') ? 'true' : 'false' }}"
                        class="dropdown-toggle">
                        <div class="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="feather feather-airplay" style="color:black">
                                <path d="M5 17H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-1" >
                                </path>
                                <polygon points="12 15 17 21 7 21 12 15"></polygon>
                            </svg>
                            <span>Dashboard</span>
                        </div>
                    </a>
                </li>
                @endif




        </ul>
    </nav>
</div>
