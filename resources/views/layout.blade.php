<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
      rel="stylesheet"
    />

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/slick.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
    <title>RewardsX</title>
  </head>
  <body>
    <!-- Mobile Offcanvas -->
    <div class="mbl-offcanvas">
      <div class="mbl-offcanvas__close flex-ctr-ctr">×</div>
      <div class="mbl-offcanvas__inner">
        <div class="mbl-offcanvas__logo">
          <a href="index.html"><img src="{{ asset('imgs/logo-dark.webp') }}" alt="logo" /></a>
        </div>
        <nav class="mbl-offcanvas__nav">
          <ul class="mbl-offcanvas__nav-list parent-list">
            <li>
              <a class="active-link mbl-offcanvas__nav-link" href="{{ url('/') }}">Home</a>
            </li>
            <li><a class="mbl-offcanvas__nav-link" href="{{ url('/b2c') }}">Join RewardsX</a></li>
            <li><a class="mbl-offcanvas__nav-link" href="{{ url('/b2b') }}">Partner</a></li>
            <li><a class="mbl-offcanvas__nav-link" href="{{ url('/security') }}">Security</a></li>
            <li><a class="mbl-offcanvas__nav-link" href="{{ url('/about-us') }}">About us</a></li>
            <li><a class="mbl-offcanvas__nav-link" href="{{ url('/contact-us') }}">Contact us</a></li>
          </ul>
        </nav>
      </div>
    </div>

    <!-- Header -->
    <header class="header">
      <div class="header__bg">
        <svg
          width="1728"
          height="309"
          viewBox="0 0 1728 309"
          fill="none"
          xmlns="http://www.w3.org/2000/svg"
        >
          <g filter="url(#filter0_d_48_10354)">
            <path
              d="M498.827 210.502C298.888 229.237 89.4142 182.731 -8.71791 159.156L-3.64648 -54.4595L677.84 -38.2804L1831.67 22.6585C1842.69 99.4368 1864.84 255.347 1819.55 265.339C1484.25 339.327 1244.58 276.072 1153.38 249.524C918.568 181.17 709.253 190.784 498.827 210.502Z"
              fill="#04130B"
            />
            <g filter="url(#filter1_d_48_10354)">
              <path
                d="M481.144 144.793C292.088 167.047 92.528 127.687 -1 107.552V-95H645.194L1740.02 -63.2092C1752.19 9.30394 1776.69 156.558 1734 167.047C1417.91 244.707 1189.36 190.154 1102.33 167.047C878.263 107.552 680.117 121.372 481.144 144.793Z"
                fill="#081E0F"
              />
            </g>
          </g>
          <defs>
            <filter
              id="filter0_d_48_10354"
              x="-12.7178"
              y="-95"
              width="1863.6"
              height="403.054"
              filterUnits="userSpaceOnUse"
              color-interpolation-filters="sRGB"
            >
              <feFlood flood-opacity="0" result="BackgroundImageFix" />
              <feColorMatrix
                in="SourceAlpha"
                type="matrix"
                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"
                result="hardAlpha"
              />
              <feOffset dy="4" />
              <feGaussianBlur stdDeviation="2" />
              <feComposite in2="hardAlpha" operator="out" />
              <feColorMatrix
                type="matrix"
                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0"
              />
              <feBlend
                mode="normal"
                in2="BackgroundImageFix"
                result="effect1_dropShadow_48_10354"
              />
              <feBlend
                mode="normal"
                in="SourceGraphic"
                in2="effect1_dropShadow_48_10354"
                result="shape"
              />
            </filter>
            <filter
              id="filter1_d_48_10354"
              x="-31"
              y="-135"
              width="1839.13"
              height="382.292"
              filterUnits="userSpaceOnUse"
              color-interpolation-filters="sRGB"
            >
              <feFlood flood-opacity="0" result="BackgroundImageFix" />
              <feColorMatrix
                in="SourceAlpha"
                type="matrix"
                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"
                result="hardAlpha"
              />
              <feOffset dx="10" />
              <feGaussianBlur stdDeviation="20" />
              <feComposite in2="hardAlpha" operator="out" />
              <feColorMatrix
                type="matrix"
                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.1 0"
              />
              <feBlend
                mode="normal"
                in2="BackgroundImageFix"
                result="effect1_dropShadow_48_10354"
              />
              <feBlend
                mode="normal"
                in="SourceGraphic"
                in2="effect1_dropShadow_48_10354"
                result="shape"
              />
            </filter>
          </defs>
        </svg>
      </div>
      <div class="container flex-ctr">
        <a href="#" class="heder__logo"
          ><img src="{{ asset('imgs/rewardsx-logo.png') }}" alt="Logo"
        /></a>
        <nav class="header__nav">
          <ul class="header__nav-list flex-ctr">
            <li><a href="{{ url('/') }}" class="header__nav-link {{ Request::is('/') ? 'active-link' : '' }}">Home</a></li>
            <li><a href="{{ url('/b2c') }}" class="header__nav-link {{ Request::is('/b2c') ? 'active-link' : '' }}">Join RewardsX</a></li>
            <li><a href="{{ url('/b2b') }}" class="header__nav-link {{ Request::is('/b2b') ? 'active-link' : '' }}">Partner</a></li>
            <li><a href="{{ url('/security') }}" class="header__nav-link {{ Request::is('/security') ? 'active-link' : '' }}">Security</a></li>
            <li><a href="{{ url('/about-us') }}" class="header__nav-link {{ Request::is('/about-us') ? 'active-link' : '' }}">About us</a></li>
            <li><a href="{{ url('/contact-us') }}" class="header__nav-link {{ Request::is('/contact-us') ? 'active-link' : '' }}">Contact us</a></li>
          </ul>
        </nav>
        <a href="#" class="header__offcanvas offcanvas-trigger">
          <svg
            width="40px"
            height="40px"
            viewBox="0 0 24 24"
            fill="none"
            xmlns="http://www.w3.org/2000/svg"
          >
            <path
              d="M22 18.0048C22 18.5544 21.5544 19 21.0048 19H12.9952C12.4456 19 12 18.5544 12 18.0048C12 17.4552 12.4456 17.0096 12.9952 17.0096H21.0048C21.5544 17.0096 22 17.4552 22 18.0048Z"
              fill="#ffffff"
            />
            <path
              d="M22 12.0002C22 12.5499 21.5544 12.9954 21.0048 12.9954H2.99519C2.44556 12.9954 2 12.5499 2 12.0002C2 11.4506 2.44556 11.0051 2.99519 11.0051H21.0048C21.5544 11.0051 22 11.4506 22 12.0002Z"
              fill="#ffffff"
            />
            <path
              d="M21.0048 6.99039C21.5544 6.99039 22 6.54482 22 5.99519C22 5.44556 21.5544 5 21.0048 5H8.99519C8.44556 5 8 5.44556 8 5.99519C8 6.54482 8.44556 6.99039 8.99519 6.99039H21.0048Z"
              fill="#ffffff"
            />
          </svg>
        </a>
      </div>
    </header>

    @yield('content')

    <!-- Footer -->
    <footer class="footer">
      <div class="footer__main">
        <div class="container">
          <div class="footer__main__left">
            <a href="#" class="footer__logo"
              ><img src="{{ asset('imgs/logo.webp') }}" alt=""
            /></a>
            <p class="footer__label">Follow Us On:</p>
            <ul class="footer__social flex-ctr">
              <li>
                <a href="#" class="footer__social-link">
                  <svg
                    width="50"
                    height="50"
                    viewBox="0 0 50 50"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <rect width="50" height="50" rx="25" fill="#96FB4A" />
                    <path
                      d="M34.7314 32.2266L35.8398 25H28.9062V20.3125C28.9062 18.335 29.873 16.4062 32.9785 16.4062H36.1328V10.2539C36.1328 10.2539 33.2715 9.76562 30.5371 9.76562C24.8242 9.76562 21.0938 13.2275 21.0938 19.4922V25H14.7461V32.2266H21.0938V49.6973C22.3682 49.8975 23.6719 50 25 50C26.3281 50 27.6318 49.8975 28.9062 49.6973V32.2266H34.7314Z"
                      fill="#021303"
                    />
                  </svg>
                </a>
              </li>
              <li>
                <a href="#" class="footer__social-link">
                  <svg
                    width="50"
                    height="50"
                    viewBox="0 0 50 50"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <rect width="50" height="50" rx="25" fill="#96FB4A" />
                    <path
                      d="M24.994 12.7029C29 12.7029 29.4702 12.7208 31.0536 12.7922C32.5179 12.8577 33.3095 13.1018 33.8393 13.3102C34.5417 13.584 35.0417 13.9055 35.5655 14.4295C36.0893 14.9534 36.4167 15.4535 36.6845 16.156C36.8869 16.6859 37.1369 17.4777 37.2024 18.9423C37.2738 20.5259 37.2917 20.9962 37.2917 25.003C37.2917 29.0097 37.2738 29.4801 37.2024 31.0637C37.1369 32.5283 36.8929 33.3201 36.6845 33.85C36.4107 34.5525 36.0893 35.0526 35.5655 35.5765C35.0417 36.1004 34.5417 36.4279 33.8393 36.6958C33.3095 36.8982 32.5179 37.1482 31.0536 37.2137C29.4702 37.2852 29 37.303 24.994 37.303C20.9881 37.303 20.5179 37.2852 18.9345 37.2137C17.4702 37.1482 16.6786 36.9041 16.1488 36.6958C15.4464 36.4219 14.9464 36.1004 14.4226 35.5765C13.8988 35.0526 13.5714 34.5525 13.3036 33.85C13.1012 33.3201 12.8512 32.5283 12.7857 31.0637C12.7143 29.4801 12.6964 29.0097 12.6964 25.003C12.6964 20.9962 12.7143 20.5259 12.7857 18.9423C12.8512 17.4777 13.0952 16.6859 13.3036 16.156C13.5774 15.4535 13.8988 14.9534 14.4226 14.4295C14.9464 13.9055 15.4464 13.5781 16.1488 13.3102C16.6786 13.1078 17.4702 12.8577 18.9345 12.7922C20.5179 12.7148 20.994 12.7029 24.994 12.7029ZM24.994 10C20.9226 10 20.4107 10.0179 18.8095 10.0893C17.2143 10.1607 16.125 10.4167 15.1726 10.7859C14.1845 11.1669 13.3512 11.6849 12.5179 12.5184C11.6845 13.3519 11.1726 14.1913 10.7857 15.1736C10.4167 16.1262 10.1607 17.2157 10.0893 18.8172C10.0179 20.4128 10 20.9248 10 24.997C10 29.0693 10.0179 29.5813 10.0893 31.1828C10.1607 32.7783 10.4167 33.8678 10.7857 34.8264C11.1667 35.8146 11.6845 36.6481 12.5179 37.4816C13.3512 38.3151 14.1905 38.8271 15.1726 39.2141C16.125 39.5833 17.2143 39.8393 18.8155 39.9107C20.4167 39.9821 20.9226 40 25 40C29.0774 40 29.5833 39.9821 31.1845 39.9107C32.7798 39.8393 33.869 39.5833 34.8274 39.2141C35.8155 38.8331 36.6488 38.3151 37.4821 37.4816C38.3155 36.6481 38.8274 35.8087 39.2143 34.8264C39.5833 33.8738 39.8393 32.7843 39.9107 31.1828C39.9821 29.5813 40 29.0752 40 24.997C40 20.9188 39.9821 20.4128 39.9107 18.8113C39.8393 17.2157 39.5833 16.1262 39.2143 15.1677C38.8333 14.1794 38.3155 13.3459 37.4821 12.5124C36.6488 11.6789 35.8095 11.1669 34.8274 10.7799C33.875 10.4108 32.7857 10.1548 31.1845 10.0833C29.5774 10.0179 29.0655 10 24.994 10Z"
                      fill="#021303"
                    />
                    <path
                      d="M24.9939 17.2993C20.7439 17.2993 17.2915 20.7464 17.2915 25.0032C17.2915 29.26 20.7379 32.7071 24.9939 32.7071C29.2498 32.7071 32.6963 29.26 32.6963 25.0032C32.6963 20.7464 29.2498 17.2993 24.9939 17.2993ZM24.9939 29.9983C22.232 29.9983 19.9939 27.7597 19.9939 24.9973C19.9939 22.2348 22.232 19.9963 24.9939 19.9963C27.7558 19.9963 29.9939 22.2348 29.9939 24.9973C29.9939 27.7597 27.7558 29.9983 24.9939 29.9983Z"
                      fill="#021303"
                    />
                    <path
                      d="M33.0003 18.7878C33.9931 18.7878 34.7979 17.9829 34.7979 16.9899C34.7979 15.9969 33.9931 15.1919 33.0003 15.1919C32.0075 15.1919 31.2026 15.9969 31.2026 16.9899C31.2026 17.9829 32.0075 18.7878 33.0003 18.7878Z"
                      fill="#021303"
                    />
                  </svg>
                </a>
              </li>
              <li>
                <a href="#" class="footer__social-link">
                  <svg
                    width="50"
                    height="50"
                    viewBox="0 0 50 50"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <rect width="50" height="50" rx="25" fill="#96FB4A" />
                    <path
                      fill-rule="evenodd"
                      clip-rule="evenodd"
                      d="M19.8236 38H11L21.4616 23.8609L11.6692 12H16.1936L23.5999 20.9708L30.1764 12.0826H39L28.2344 26.6325L28.2535 26.6074L37.5228 37.8349H32.9985L26.1148 29.4972L19.8236 38ZM15.8705 35.5238H18.6174L34.1295 14.5588H31.3826L15.8705 35.5238Z"
                      fill="#021303"
                    />
                  </svg>
                </a>
              </li>
            </ul>
          </div>
          <div class="footer__main__right">
            <h2 class="footer__title">Territorial Acknowledgement</h2>
            <p class="footer__dsc">
              RewardsX Financial Inc. respectfully acknowledges that we are
              located on Treaty 6 territory, a traditional gathering place for
              diverse Indigenous peoples including the Cree, Blackfoot, Métis,
              Nakota Sioux, Iroquois, Dene, Ojibway/ Saulteaux/Anishinaabe,
              Inuit, and many others whose histories, languages, and cultures
              continue to influence our vibrant community.
            </p>
          </div>
        </div>
      </div>
      <div class="footer__copywrite">
        <div class="container">
          <p class="footer__copywrite-text">
            © 2024 <a href="#">RewardsX</a>. All rights reserved.
          </p>
        </div>
      </div>
    </footer>

    <!-- Scripts -->
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/slick.min.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
  </body>
</html>
