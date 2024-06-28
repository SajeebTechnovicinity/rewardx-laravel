<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&family=Manrope:wght@200..800&display=swap" rel="stylesheet" />
    <!-- CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote-lite.css" />
    <style>
        /* Alert styles */
        .alert {
            padding: 15px;
            margin-bottom: 20px;
            border: 1px solid transparent;
            border-radius: 4px;
        }

        .alert-success {
            color: #3c763d;
            background-color: #dff0d8;
            border-color: #d6e9c6;
        }

        .alert-danger {
            color: #a94442;
            background-color: #f2dede;
            border-color: #ebccd1;
        }

    </style>
    <link rel="stylesheet" href="{{ asset('backend/css/dashboard.css') }}" />
    <title>RewardsX | @yield('title')</title>
</head>

<body>
    <header class="header flex-ctr-spb">
        <div class="flex-ctr">
            <a href="#" class="header__logo brand-logo">
                <img src="{{ asset('imgs/logo-dark.webp') }}" alt="logo-light" />
            </a>
            <form action="#" class="header__form">
                <button type="submit" class="header__search-btn">
                    <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M16 16L11.9581 11.9581M11.9581 11.9581C13.052 10.8641 13.6666 9.38039 13.6666 7.8333C13.6666 6.28621 13.052 4.80249 11.9581 3.70853C10.8641 2.61458 9.38039 2 7.8333 2C6.28621 2 4.80249 2.61458 3.70853 3.70853C2.61458 4.80249 2 6.28621 2 7.8333C2 9.38039 2.61458 10.8641 3.70853 11.9581C4.80249 13.052 6.28621 13.6666 7.8333 13.6666C9.38039 13.6666 10.8641 13.052 11.9581 11.9581Z" stroke="#000000" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </button>
                <input type="text" class="header__search-field" placeholder="Search" />
            </form>
        </div>

        @if (Auth::user()->usertype == 2)
        <b>{{ Auth::user()->name }} -- Wallet Balance: {{ Auth::user()->wallet_balance }}</b>

        <a class="form__submit btn-solid" id="clearCacheBtn" href="{{ route('user.wallet.add-money') }}">Add Money</a>
        @endif

        <div class="header__profile profile dropdown">
            <div class="profile__trigger dropdown__trigger">
                <span class="profile__img">
                    <img src="{{ asset('backend/imgs/user-img.png') }}" alt="profile-image" />
                </span>
                <span class="profile__name">{{ Auth::user()->name }}</span>
                <span class="profile__arrow">
                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M13 5.5L8 10.5L3 5.5" stroke="#000000" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </span>
            </div>
            <ul class="profile__dropdown dropdown-body">
                {{--  <li><a class="profile__dropdown-link" href="{{ route('user.profile') }}">Profile</a></li>  --}}
                <li>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <div class="nav-item">
                            <a class="profile__dropdown-link" href="{{ route('logout') }}" onclick="event.preventDefault();
                        this.closest('form').submit(); " role="button">
                                <i class="fas fa-sign-out-alt"></i>

                                {{ __('Log Out') }}
                            </a>
                        </div>
                    </form>
                </li>
                
            </ul>
        </div>
    </header>
    <section class="dashboard-body report-body">
        <!-- Dashboard Nav panel  -->
        <div class="nav-panel-wrap">
            <nav class="nav-panel nav">
                <div class="drawer-close">
                    <svg width="15" height="16" viewBox="0 0 15 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g id="maki:cross">
                            <path id="Vector" d="M3.64016 2.77L7.50016 6.63L11.3402 2.79C11.425 2.69972 11.5272 2.62749 11.6406 2.57766C11.754 2.52783 11.8763 2.50141 12.0002 2.5C12.2654 2.5 12.5197 2.60536 12.7073 2.79289C12.8948 2.98043 13.0002 3.23478 13.0002 3.5C13.0025 3.6226 12.9797 3.74439 12.9333 3.85788C12.8869 3.97138 12.8178 4.07419 12.7302 4.16L8.84016 8L12.7302 11.89C12.895 12.0512 12.9916 12.2696 13.0002 12.5C13.0002 12.7652 12.8948 13.0196 12.7073 13.2071C12.5197 13.3946 12.2654 13.5 12.0002 13.5C11.8727 13.5053 11.7456 13.484 11.6268 13.4375C11.508 13.3911 11.4002 13.3204 11.3102 13.23L7.50016 9.37L3.65016 13.22C3.56567 13.3073 3.46473 13.3769 3.35316 13.425C3.2416 13.4731 3.12163 13.4986 3.00016 13.5C2.73495 13.5 2.48059 13.3946 2.29306 13.2071C2.10552 13.0196 2.00016 12.7652 2.00016 12.5C1.99783 12.3774 2.02058 12.2556 2.06701 12.1421C2.11344 12.0286 2.18257 11.9258 2.27016 11.84L6.16016 8L2.27016 4.11C2.10535 3.94876 2.0087 3.73041 2.00016 3.5C2.00016 3.23478 2.10552 2.98043 2.29306 2.79289C2.48059 2.60536 2.73495 2.5 3.00016 2.5C3.24016 2.503 3.47016 2.6 3.64016 2.77Z" fill="#000000" />
                        </g>
                    </svg>
                </div>
                <ul class="nav__list">
                    <li class="nav__item">
                        <a href="{{ url('/home') }}" class="nav__link {{ Request::is('user/dashboard') ? 'active-link' : '' }}"><span class="icon">
                                <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M8.60256 2.88002C8.70803 2.77469 8.851 2.71552 9.00006 2.71552C9.14912 2.71552 9.29209 2.77469 9.39756 2.88002L15.9151 9.39752C15.9666 9.45279 16.0287 9.49712 16.0977 9.52786C16.1667 9.5586 16.2411 9.57514 16.3167 9.57647C16.3922 9.5778 16.4672 9.56391 16.5373 9.53562C16.6073 9.50733 16.6709 9.46522 16.7243 9.4118C16.7778 9.35839 16.8199 9.29476 16.8482 9.22472C16.8764 9.15468 16.8903 9.07966 16.889 9.00413C16.8877 8.92861 16.8711 8.85412 16.8404 8.78512C16.8097 8.71612 16.7653 8.65402 16.7101 8.60252L10.1933 2.08502C10.0366 1.92832 9.85058 1.80402 9.64584 1.71921C9.44111 1.63441 9.22167 1.59076 9.00006 1.59076C8.77845 1.59076 8.55902 1.63441 8.35428 1.71921C8.14954 1.80402 7.96351 1.92832 7.80681 2.08502L1.28931 8.60252C1.1869 8.70866 1.13026 8.85078 1.13162 8.99826C1.13297 9.14575 1.19219 9.2868 1.29653 9.39105C1.40087 9.49529 1.54198 9.55438 1.68947 9.55559C1.83696 9.5568 1.97902 9.50004 2.08506 9.39752L8.60256 2.88002Z" fill="black" />
                                    <path d="M3.3125 10.4686L8.99929 4.78041L14.6875 10.4686V14.9063C14.6875 15.4064 14.2814 15.8125 13.7812 15.8125H11.25C11.2334 15.8125 11.2175 15.8059 11.2058 15.7942C11.1941 15.7825 11.1875 15.7666 11.1875 15.75V12.375C11.1875 12.0932 11.0756 11.823 10.8763 11.6237C10.677 11.4245 10.4068 11.3125 10.125 11.3125H7.875C7.59321 11.3125 7.32295 11.4245 7.1237 11.6237C6.92444 11.823 6.8125 12.0932 6.8125 12.375V15.75C6.8125 15.7666 6.80591 15.7825 6.79419 15.7942C6.78247 15.8059 6.76658 15.8125 6.75 15.8125H4.21875C3.9784 15.8125 3.74789 15.717 3.57793 15.5471C3.40798 15.3771 3.3125 15.1466 3.3125 14.9063V10.4686Z" stroke="black" />
                                </svg> </span>DASHBOARD</a>
                    </li>

                    <li class="nav__item">
                        <a href="{{ url('/credits') }}" class="nav__link {{ Request::is('credits') ? 'active-link' : '' }}"><span class="icon">
                                <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M8.60256 2.88002C8.70803 2.77469 8.851 2.71552 9.00006 2.71552C9.14912 2.71552 9.29209 2.77469 9.39756 2.88002L15.9151 9.39752C15.9666 9.45279 16.0287 9.49712 16.0977 9.52786C16.1667 9.5586 16.2411 9.57514 16.3167 9.57647C16.3922 9.5778 16.4672 9.56391 16.5373 9.53562C16.6073 9.50733 16.6709 9.46522 16.7243 9.4118C16.7778 9.35839 16.8199 9.29476 16.8482 9.22472C16.8764 9.15468 16.8903 9.07966 16.889 9.00413C16.8877 8.92861 16.8711 8.85412 16.8404 8.78512C16.8097 8.71612 16.7653 8.65402 16.7101 8.60252L10.1933 2.08502C10.0366 1.92832 9.85058 1.80402 9.64584 1.71921C9.44111 1.63441 9.22167 1.59076 9.00006 1.59076C8.77845 1.59076 8.55902 1.63441 8.35428 1.71921C8.14954 1.80402 7.96351 1.92832 7.80681 2.08502L1.28931 8.60252C1.1869 8.70866 1.13026 8.85078 1.13162 8.99826C1.13297 9.14575 1.19219 9.2868 1.29653 9.39105C1.40087 9.49529 1.54198 9.55438 1.68947 9.55559C1.83696 9.5568 1.97902 9.50004 2.08506 9.39752L8.60256 2.88002Z" fill="black" />
                                    <path d="M3.3125 10.4686L8.99929 4.78041L14.6875 10.4686V14.9063C14.6875 15.4064 14.2814 15.8125 13.7812 15.8125H11.25C11.2334 15.8125 11.2175 15.8059 11.2058 15.7942C11.1941 15.7825 11.1875 15.7666 11.1875 15.75V12.375C11.1875 12.0932 11.0756 11.823 10.8763 11.6237C10.677 11.4245 10.4068 11.3125 10.125 11.3125H7.875C7.59321 11.3125 7.32295 11.4245 7.1237 11.6237C6.92444 11.823 6.8125 12.0932 6.8125 12.375V15.75C6.8125 15.7666 6.80591 15.7825 6.79419 15.7942C6.78247 15.8059 6.76658 15.8125 6.75 15.8125H4.21875C3.9784 15.8125 3.74789 15.717 3.57793 15.5471C3.40798 15.3771 3.3125 15.1466 3.3125 14.9063V10.4686Z" stroke="black" />
                                </svg> </span>Credits</a>
                    </li>

                    <!--End Admin Menu-->

                </ul>
                <div class="user-logout">
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <a href="{{ route('logout') }}" onclick="event.preventDefault();
                        this.closest('form').submit(); " role="button" class="logout-link flex-ctr-spb">
                            <span>Logout </span>
                            <span class="icon">
                                <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M13.4543 11.5543C13.447 11.8132 13.3878 12.068 13.2801 12.3035C13.1724 12.539 13.0185 12.7505 12.8276 12.9254C12.6366 13.1003 12.4124 13.2351 12.1683 13.3216C11.9242 13.4082 11.6653 13.4448 11.4068 13.4293C9.792 13.4383 8.17725 13.4293 6.5625 13.4293C6.46304 13.4293 6.36766 13.3898 6.29733 13.3195C6.22701 13.2492 6.1875 13.1538 6.1875 13.0543C6.1875 12.9549 6.22701 12.8595 6.29733 12.7892C6.36766 12.7188 6.46304 12.6793 6.5625 12.6793C8.2125 12.6793 9.8625 12.7033 11.5125 12.6793C12.3428 12.6673 12.7043 12.0433 12.7043 11.3008V1.95358C12.71 1.71753 12.6436 1.48534 12.5139 1.28805C12.3842 1.09077 12.1973 0.937791 11.9783 0.849584C11.7193 0.778918 11.4499 0.754793 11.1825 0.778333H6.5625C6.46304 0.778333 6.36766 0.738825 6.29733 0.668499C6.22701 0.598172 6.1875 0.50279 6.1875 0.403333C6.1875 0.303877 6.22701 0.208495 6.29733 0.138168C6.36766 0.0678422 6.46304 0.0283333 6.5625 0.0283333C8.2305 0.0283333 9.91125 -0.0354167 11.5777 0.0283333C11.833 0.0347875 12.0843 0.0919318 12.3172 0.196441C12.5502 0.30095 12.76 0.450737 12.9344 0.637086C13.1089 0.823435 13.2446 1.04262 13.3336 1.2819C13.4226 1.52117 13.4631 1.77576 13.4528 2.03083L13.4543 11.5543Z" fill="#000000" />
                                    <path d="M0.109864 6.46568C0.0464981 6.52712 0.00940175 6.61072 0.00636398 6.69893C0.00636398 6.71018 0.00636395 6.71993 0.00186395 6.73118C-0.00263604 6.74243 0.00186399 6.75143 0.00636398 6.76193C0.009365 6.85036 0.0464519 6.93421 0.109864 6.99593L2.86161 9.74768C2.93234 9.81599 3.02706 9.85378 3.12539 9.85293C3.22371 9.85208 3.31777 9.81264 3.3873 9.74311C3.45682 9.67358 3.49626 9.57953 3.49712 9.4812C3.49797 9.38288 3.46017 9.28815 3.39186 9.21743L1.28061 7.10543H9.33711C9.43657 7.10543 9.53195 7.06592 9.60228 6.99559C9.6726 6.92527 9.71211 6.82988 9.71211 6.73043C9.71211 6.63097 9.6726 6.53559 9.60228 6.46526C9.53195 6.39494 9.43657 6.35543 9.33711 6.35543H1.28061L3.39186 4.24343C3.46017 4.1727 3.49797 4.07798 3.49712 3.97965C3.49626 3.88133 3.45682 3.78727 3.3873 3.71775C3.31777 3.64822 3.22371 3.60878 3.12539 3.60792C3.02706 3.60707 2.93234 3.64487 2.86161 3.71318L0.109864 6.46568Z" fill="#000000" />
                                </svg>
                            </span>
                        </a>
                    </form>
                </div>
            </nav>
        </div>

        @yield('content')
    </section>
    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <!-- Main JS -->
    <script src="{{ asset('backend/js/dashboard.js') }}"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote-lite.js"></script>
    <script>
        $(function() {
            // Number of editors you want to create
            var numEditors = 7;

            // Loop to create editors
            for (var i = 1; i <= numEditors; i++) {
                var editorId = 'editor' + i;
                var editorDiv = $('<div>').attr('id', editorId);
                $('#editors-container').append(editorDiv);

                // Initialize Summernote editor
                $('#' + editorId).summernote({
                    tabsize: 2
                    , height: 150
                    , toolbar: [
                        ['style', ['style']]
                        , ['font', ['bold', 'underline', 'clear']]
                        , ['color', ['color']]
                        , ['para', ['ul', 'ol', 'paragraph']]
                        , ['table', ['table']]
                        , ['insert', ['link', 'picture', 'video']]
                        , ['view', ['fullscreen', 'codeview', 'help']]
                    ]
                });
            }
        });

    </script>

</body>

</html>
