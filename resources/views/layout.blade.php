<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" /><!-- Font -->
    <link href="https://fonts.googleapis.com" rel="preconnect" />
    <link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect" />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&amp;display=swap" rel="stylesheet" /><!-- Styles -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet" />
    <title>RewardsX</title>
</head>
<body>
    <!-- Mobile Offcanvas -->
    <div class="mbl-offcanvas">
        <div class="mbl-offcanvas__close flex-ctr-ctr">&times;</div>

        <div class="mbl-offcanvas__inner">
            <div class="mbl-offcanvas__logo"><a href="https://rewardsx.ca"><img alt="logo" src="{{ asset('imgs/Logor1.png') }} " /></a></div>

            <nav class="mbl-offcanvas__nav">
                <ul class="mbl-offcanvas__nav-list parent-list">
                    <li><a class="active-link mbl-offcanvas__nav-link" href="{{ url('/') }}">Home</a></li>
                    <li><a class="mbl-offcanvas__nav-link" href="{{ url('/security') }}">Security</a></li>
                    <li><a class="mbl-offcanvas__nav-link" href="{{ url('/spotlight') }}">Spotlight</a></li>
                    <li><a class="mbl-offcanvas__nav-link" href="{{ url('/contact-us') }}">Contact Us</a></li>
                </ul>
            </nav>
        </div>
    </div>
    <!-- Header -->

    <header class="header">
        <div class="header__bg"><svg fill="none" height="309" viewbox="0 0 1728 309" width="1728" xmlns="http://www.w3.org/2000/svg">
                <g filter="url(#filter0_d_48_10354)">
                    <path d="M498.827 210.502C298.888 229.237 89.4142 182.731 -8.71791 159.156L-3.64648 -54.4595L677.84 -38.2804L1831.67 22.6585C1842.69 99.4368 1864.84 255.347 1819.55 265.339C1484.25 339.327 1244.58 276.072 1153.38 249.524C918.568 181.17 709.253 190.784 498.827 210.502Z" fill="#04130B"></path>
                    <g filter="url(#filter1_d_48_10354)">
                        <path d="M481.144 144.793C292.088 167.047 92.528 127.687 -1 107.552V-95H645.194L1740.02 -63.2092C1752.19 9.30394 1776.69 156.558 1734 167.047C1417.91 244.707 1189.36 190.154 1102.33 167.047C878.263 107.552 680.117 121.372 481.144 144.793Z" fill="#081E0F"></path>
                    </g>
                </g>
                <defs>
                    <filter color-interpolation-filters="sRGB" filterunits="userSpaceOnUse" height="403.054" id="filter0_d_48_10354" width="1863.6" x="-12.7178" y="-95">
                        <feflood flood-opacity="0" result="BackgroundImageFix"></feflood>
                        <fecolormatrix in="SourceAlpha" result="hardAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"></fecolormatrix>
                        <feoffset dy="4"></feoffset>
                        <fegaussianblur stddeviation="2"></fegaussianblur>
                        <fecomposite in2="hardAlpha" operator="out"></fecomposite>
                        <fecolormatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0"> </fecolormatrix>
                        <feblend in2="BackgroundImageFix" mode="normal" result="effect1_dropShadow_48_10354"></feblend>
                        <feblend in="SourceGraphic" in2="effect1_dropShadow_48_10354" mode="normal" result="shape"> </feblend>
                    </filter>
                    <filter color-interpolation-filters="sRGB" filterunits="userSpaceOnUse" height="382.292" id="filter1_d_48_10354" width="1839.13" x="-31" y="-135">
                        <feflood flood-opacity="0" result="BackgroundImageFix"></feflood>
                        <fecolormatrix in="SourceAlpha" result="hardAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"></fecolormatrix>
                        <feoffset dx="10"></feoffset>
                        <fegaussianblur stddeviation="20"></fegaussianblur>
                        <fecomposite in2="hardAlpha" operator="out"></fecomposite>
                        <fecolormatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.1 0"></fecolormatrix>
                        <feblend in2="BackgroundImageFix" mode="normal" result="effect1_dropShadow_48_10354"></feblend>
                        <feblend in="SourceGraphic" in2="effect1_dropShadow_48_10354" mode="normal" result="shape"> </feblend>
                    </filter>
                </defs>
            </svg></div>

        <div class="container flex-ctr"><a class="heder__logo" href="https://rewardsx.ca"><img alt="Logo" src="imgs/Logor1.png" /></a>

            <nav class="header__nav">
                <ul class="header__nav-list flex-ctr">
                    <li><a class="header__nav-link {{ Request::is('/') ? 'active-link' : '' }}" href="{{ url('/') }}">Home</a></li>
                    <li><a class="header__nav-link {{ Request::is('security') ? 'active-link' : '' }}" href="{{ url('/security') }}">Security</a></li>
                    <li><a class="header__nav-link {{ Request::is('spotlight') ? 'active-link' : '' }}" href="{{ url('/spotlight') }}">Spotlight</a></li>
                    <li><a class="header__nav-link {{ Request::is('contact-us') ? 'active-link' : '' }}" href="{{ url('/contact-us') }}">Contact Us</a></li>

                </ul>
            </nav>
            <a class="header__offcanvas offcanvas-trigger" href="#"> <svg fill="none" height="40px" viewbox="0 0 24 24" width="40px" xmlns="http://www.w3.org/2000/svg">
                    <path d="M22 18.0048C22 18.5544 21.5544 19 21.0048 19H12.9952C12.4456 19 12 18.5544 12 18.0048C12 17.4552 12.4456 17.0096 12.9952 17.0096H21.0048C21.5544 17.0096 22 17.4552 22 18.0048Z" fill="#ffffff"></path>
                    <path d="M22 12.0002C22 12.5499 21.5544 12.9954 21.0048 12.9954H2.99519C2.44556 12.9954 2 12.5499 2 12.0002C2 11.4506 2.44556 11.0051 2.99519 11.0051H21.0048C21.5544 11.0051 22 11.4506 22 12.0002Z" fill="#ffffff"></path>
                    <path d="M21.0048 6.99039C21.5544 6.99039 22 6.54482 22 5.99519C22 5.44556 21.5544 5 21.0048 5H8.99519C8.44556 5 8 5.44556 8 5.99519C8 6.54482 8.44556 6.99039 8.99519 6.99039H21.0048Z" fill="#ffffff"></path>
                </svg> </a>
        </div>
    </header>

    @yield('content')

    <!-- Footer -->
    <footer class="footer">
        <div class="footer__main">
            <div class="container">
                <div class="footer__main__left"><a class="footer__logo" href="#"><img alt="" src="imgs/Logor1.png" /></a>

                    <p class="footer__label">Follow Us On:</p>

                    <ul class="footer__social flex-ctr">
                        <li><a class="footer__social-link" href="https://www.linkedin.com/company/rewardsx-ai/" target="_blank"><img alt="" src="https://rewardsx.ca/registration/wp-content/themes/hello-child/imgs/LinkedIn.png" /> </a></li>
                        <li><a class="footer__social-link" href="https://www.instagram.com/rewardsxai/" target="_blank"><img alt="" src="https://rewardsx.ca/registration/wp-content/themes/hello-child/imgs/instagram.svg" /> </a></li>
                        <li><a class="footer__social-link" href="https://www.threads.net/@rewardsxai" target="_blank"><img alt="" src="https://rewardsx.ca/registration/wp-content/themes/hello-child/imgs/facebook.svg" /> </a></li>
                        <li><a class="footer__social-link" href="https://x.com/RewardsXai" target="_blank"><img alt="" src="https://rewardsx.ca/registration/wp-content/themes/hello-child/imgs/twitter-X.svg" /> </a></li>
                    </ul>
                </div>

                <div class="footer__main__right">
                    <h2 class="footer__title">Territorial Acknowledgement</h2>

                    <p class="footer__dsc">RewardsX is a subsidiary of Credwise Financial Inc - We respectfully acknowledges that we are located on Treaty 6 territory, a traditional gathering place for diverse Indigenous peoples including the Cree, Blackfoot, M&eacute;tis, Nakota Sioux, Iroquois, Dene, Ojibway/ Saulteaux/Anishinaabe, Inuit, and many others whose histories, languages, and cultures continue to influence our vibrant community.</p>
                </div>
            </div>

            <p class="disclimer">Disclaimer: RewardsX is an independent platform and is not affiliated with, endorsed by, or officially connected to any financial institutions, retailers, or their respective programs. This includes but is not limited to TD Bank and its TD Rewards, Aeroplan, and Cashback programs; RBC and its RBC Rewards, Avion, and Cashback programs; Scotiabank with Scene+, Scotia Rewards, and Cashback programs; BMO with BMO Rewards and Cashback programs; CIBC with Aventura, Aeroplan, and Cashback programs; American Express with Membership Rewards and Cashback programs; National Bank of Canada with its &Agrave; la carte Rewards program; as well as PC Optimum and Loblaws Digital; Costco; Walmart and its Mastercard program; WestJet Rewards; Aeroplan; Air Miles; and Neo Financial. The use of these logos and program names is for informational and identification purposes only and does not imply any partnership or sponsorship with the respective institutions or companies. All trademarks and registered trademarks are the property of their respective owners. RewardsX does not guarantee the accuracy or completeness of any information related to these institutions, retailers, or programs and recommends that users verify the terms and conditions of their credit cards and loyalty programs directly with the issuer.</p>
            <p class="disclimer">
                <a href="terms-and-conditions.html">Terms and Conditions</a> |
                <a href="delete-account.html">Account Deletion Policy</a> |
                <a href="privacy-policy.html">Privacy Policy</a>
            </p>
        </div>

        <div></div>

        <div class="footer__copywrite">
            <div class="container">
                <p class="footer__copywrite-text">&copy; 2024 <a href="#">Credwise Financial Inc</a>. All rights reserved.</p>
            </div>
        </div>
    </footer>
    <!-- Scripts -->
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/slick.min.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
</body>
</html>
