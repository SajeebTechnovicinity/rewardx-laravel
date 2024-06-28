   @extends('layout')

   @section('content')
       <main class="main b2b-main">
           <!-- Hero Section -->
           <section class="hero">
               <div class="container">
                   <div class="hero__content">
                       <h1 class="hero__title">
                           Empower Your Business with
                           <span>Intelligent Rewards</span> Solutions
                       </h1>
                       <p class="hero__dsc">
                           Enhance Customer Engagement and Drive Sales with Data-Driven
                           Rewards Strategies
                       </p>
                   </div>
               </div>
           </section>

           <!-- Intro Video -->
           <section class="intro-video">
               <div class="intro-video__bg">
                   <img src="imgs/makbook-bg.webp" alt="background wave dots" />
               </div>
               <div class="container">
                   <div class="intro-video__thumb-wrap">
                       <figure class="intro-video__thumb">
                           <img src="imgs/Macbook.webp" alt="" />
                       </figure>
                       <div class="intro-video__thumb-icons">
                           <span class="intro-video__thumb-icon icon-1">
                               <img src="imgs/mackbook-indicator.png" alt="" />
                           </span>
                           <span class="intro-video__thumb-icon icon-2">
                               <img src="imgs/makbook-indicator2.png" alt="" />
                           </span>
                           <span class="intro-video__thumb-icon icon-3">
                               <img src="imgs/makbook-indicator3.png" alt="" />
                           </span>
                       </div>
                       <a href="#" class="intro-video__play-icon">
                           <svg width="65" height="65" viewBox="0 0 65 65" fill="none"
                               xmlns="http://www.w3.org/2000/svg">
                               <path fill-rule="evenodd" clip-rule="evenodd"
                                   d="M32.8929 64.0004C50.5071 64.0004 64.7862 49.7212 64.7862 32.107C64.7862 14.4928 50.5071 0.213684 32.8929 0.213684C15.2786 0.213684 0.999512 14.4928 0.999512 32.107C0.999512 49.7212 15.2786 64.0004 32.8929 64.0004Z"
                                   fill="#96FB4A" />
                               <path fill-rule="evenodd" clip-rule="evenodd"
                                   d="M26.5333 19.9666C25.8674 19.5468 25 20.0253 25 20.8125V44.8322C25 45.6194 25.8674 46.0979 26.5333 45.6781L45.5847 33.6683C46.207 33.276 46.207 32.3687 45.5847 31.9764L26.5333 19.9666Z"
                                   fill="#021303" />
                           </svg>
                       </a>
                   </div>
               </div>
           </section>

           <!-- Compare With Others -->
           <section class="compare">
               <div class="container flex-ctr-ctr">
                   <div class="competitor compare__block">
                       <figure>
                           <img src="imgs/RewardsX.webp" alt="" />
                           <figcaption class="competitor__text">
                               Price: <span>$80</span>
                           </figcaption>
                       </figure>
                   </div>
                   <div class="compare__block">
                       <figure>
                           <img src="imgs/vs.webp" alt="" />
                       </figure>
                   </div>
                   <div class="competitor compare__block">
                       <figure>
                           <img src="imgs/other-competitors.webp" alt="" />
                           <figcaption class="competitor__text">
                               Price: <span>$550+</span>
                           </figcaption>
                       </figure>
                   </div>
               </div>
           </section>

           <!-- Benefits -->
           <section class="benefits">
               <div class="container">
                   <div class="benefits__header">
                       <h5 class="benefits__subtitle section-subtitle">Let’s See</h5>
                       <h2 class="benefits__title section-title">
                           Benefits of Partnering
                       </h2>
                   </div>
                   <div class="benefits__fig-content fig-content flex-ctr-spb">
                       <figure class="fig-content__thumb">
                           <img src="imgs/benefit1.webp" alt="" />
                       </figure>
                       <div class="fig-content__context">
                           <h3 class="fig-content__title">Enhanced Customer Engagement</h3>
                           <p class="fig-content__dsc">
                               Figma ipsum component variant main layer. Horizontal text
                               ellipse scrolling list vertical asset. Asset ellipse overflow
                               horizontal project connection selection.
                           </p>
                           <div class="fig-content__items">
                               <div class="fig-content__item flex-auto-spb">
                                   <div class="fig-content__item__icon">
                                       <svg width="50" height="51" viewBox="0 0 50 51" fill="none"
                                           xmlns="http://www.w3.org/2000/svg">
                                           <circle cx="25" cy="25.7285" r="25" fill="#96FB4A" />
                                           <path fill-rule="evenodd" clip-rule="evenodd"
                                               d="M20.5001 19.7285C20.5001 18.535 20.9742 17.3904 21.8181 16.5465C22.662 15.7026 23.8066 15.2285 25.0001 15.2285C26.1936 15.2285 27.3382 15.7026 28.1821 16.5465C29.026 17.3904 29.5001 18.535 29.5001 19.7285C29.5001 20.922 29.026 22.0666 28.1821 22.9105C27.3382 23.7544 26.1936 24.2285 25.0001 24.2285C23.8066 24.2285 22.662 23.7544 21.8181 22.9105C20.9742 22.0666 20.5001 20.922 20.5001 19.7285ZM16.7511 33.8335C16.7848 31.668 17.6687 29.6026 19.2121 28.0831C20.7554 26.5636 22.8343 25.712 25.0001 25.712C27.1659 25.712 29.2448 26.5636 30.7881 28.0831C32.3315 29.6026 33.2154 31.668 33.2491 33.8335C33.2517 33.9793 33.2117 34.1227 33.1341 34.2461C33.0565 34.3696 32.9446 34.4677 32.8121 34.5285C30.3613 35.6522 27.6963 36.2322 25.0001 36.2285C22.2141 36.2285 19.5671 35.6205 17.1881 34.5285C17.0556 34.4677 16.9437 34.3696 16.8661 34.2461C16.7884 34.1227 16.7485 33.9793 16.7511 33.8335Z"
                                               fill="#021303" />
                                       </svg>
                                   </div>
                                   <div class="fig-content__item__text">
                                       <h5 class="fig-content__item__label">
                                           Personalized Experiences
                                       </h5>
                                       <p class="fig-content__item__dsc">
                                           By integrating with the RewardsX, businesses can offer
                                           personalized rewards to their customers based on the
                                           customers' spending habits and preferences. This
                                           personalization fosters a deeper connection between the
                                           brand and its customers, enhancing loyalty and
                                           satisfaction.
                                       </p>
                                   </div>
                               </div>
                               <div class="fig-content__item flex-auto-spb">
                                   <div class="fig-content__item__icon">
                                       <svg width="50" height="51" viewBox="0 0 50 51" fill="none"
                                           xmlns="http://www.w3.org/2000/svg">
                                           <circle cx="25" cy="25.7285" r="25" fill="#96FB4A" />
                                           <path fill-rule="evenodd" clip-rule="evenodd"
                                               d="M14.5 20.8535C14.5 19.8175 15.34 18.9785 16.375 18.9785H22.375C23.411 18.9785 24.25 19.8185 24.25 20.8535V24.6035C24.25 25.6395 23.41 26.4785 22.375 26.4785H16.375C15.8777 26.4785 15.4008 26.281 15.0492 25.9293C14.6975 25.5777 14.5 25.1008 14.5 24.6035V20.8535ZM26.5 22.3535C26.5 21.3175 27.34 20.4785 28.375 20.4785H33.625C34.66 20.4785 35.5 21.3185 35.5 22.3535V30.6035C35.5 31.6385 34.66 32.4785 33.625 32.4785H28.375C27.8777 32.4785 27.4008 32.281 27.0492 31.9293C26.6975 31.5777 26.5 31.1008 26.5 30.6035V22.3535ZM16 29.8535C16 28.8175 16.84 27.9785 17.875 27.9785H23.125C24.161 27.9785 25 28.8185 25 29.8535V32.1035C25 33.1385 24.16 33.9785 23.125 33.9785H17.875C17.3777 33.9785 16.9008 33.781 16.5492 33.4293C16.1975 33.0777 16 32.6008 16 32.1035V29.8535Z"
                                               fill="#021303" />
                                       </svg>
                                   </div>
                                   <div class="fig-content__item__text">
                                       <h5 class="fig-content__item__label">
                                           Increased Interaction
                                       </h5>
                                       <p class="fig-content__item__dsc">
                                           The app encourages repeated interactions with your brand
                                           through the rewards system, keeping your business
                                           top-of-mind for consumers and driving sustained engagement
                                           over time.
                                       </p>
                                   </div>
                               </div>
                           </div>
                       </div>
                   </div>
                   <div class="benefits__fig-content fig-content flex-ctr-spb">
                       <figure class="fig-content__thumb">
                           <img src="imgs/benefit2.webp" alt="" />
                       </figure>
                       <div class="fig-content__context">
                           <h3 class="fig-content__title">Driven Sales Growth</h3>
                           <p class="fig-content__dsc">
                               Figma ipsum component variant main layer. Horizontal text
                               ellipse scrolling list vertical asset. Asset ellipse overflow
                               horizontal project connection selection.
                           </p>
                           <div class="fig-content__items">
                               <div class="fig-content__item flex-auto-spb">
                                   <div class="fig-content__item__icon">
                                       <svg width="50" height="50" viewBox="0 0 50 50" fill="none"
                                           xmlns="http://www.w3.org/2000/svg">
                                           <circle cx="25" cy="25" r="25" fill="#96FB4A" />
                                           <path fill-rule="evenodd" clip-rule="evenodd"
                                               d="M21.9999 17.5C22.1629 17.5 22.3214 17.5531 22.4515 17.6513C22.5816 17.7495 22.6762 17.8873 22.7209 18.044L23.5339 20.89C23.709 21.5029 24.0374 22.0611 24.4881 22.5118C24.9388 22.9626 25.497 23.2909 26.1099 23.466L28.9559 24.279C29.1125 24.3239 29.2503 24.4185 29.3483 24.5486C29.4464 24.6786 29.4994 24.8371 29.4994 25C29.4994 25.1629 29.4464 25.3214 29.3483 25.4514C29.2503 25.5815 29.1125 25.6761 28.9559 25.721L26.1099 26.534C25.497 26.7091 24.9388 27.0374 24.4881 27.4882C24.0374 27.9389 23.709 28.4971 23.5339 29.11L22.7209 31.956C22.6761 32.1126 22.5815 32.2503 22.4514 32.3484C22.3213 32.4464 22.1628 32.4995 21.9999 32.4995C21.8371 32.4995 21.6786 32.4464 21.5485 32.3484C21.4184 32.2503 21.3238 32.1126 21.2789 31.956L20.4659 29.11C20.2909 28.4971 19.9625 27.9389 19.5118 27.4882C19.061 27.0374 18.5029 26.7091 17.8899 26.534L15.0439 25.721C14.8874 25.6761 14.7496 25.5815 14.6516 25.4514C14.5535 25.3214 14.5005 25.1629 14.5005 25C14.5005 24.8371 14.5535 24.6786 14.6516 24.5486C14.7496 24.4185 14.8874 24.3239 15.0439 24.279L17.8899 23.466C18.5029 23.2909 19.061 22.9626 19.5118 22.5118C19.9625 22.0611 20.2909 21.5029 20.4659 20.89L21.2789 18.044C21.3237 17.8873 21.4183 17.7495 21.5484 17.6513C21.6785 17.5531 21.837 17.5 21.9999 17.5ZM30.9999 14.5C31.1673 14.4999 31.3298 14.5558 31.4617 14.6587C31.5936 14.7616 31.6873 14.9057 31.7279 15.068L31.9859 16.104C32.2219 17.044 32.9559 17.778 33.8959 18.014L34.9319 18.272C35.0946 18.3123 35.239 18.4059 35.3423 18.5378C35.4455 18.6697 35.5016 18.8325 35.5016 19C35.5016 19.1675 35.4455 19.3303 35.3423 19.4622C35.239 19.5941 35.0946 19.6877 34.9319 19.728L33.8959 19.986C32.9559 20.222 32.2219 20.956 31.9859 21.896L31.7279 22.932C31.6877 23.0946 31.5941 23.2391 31.4621 23.3423C31.3302 23.4456 31.1675 23.5017 30.9999 23.5017C30.8324 23.5017 30.6697 23.4456 30.5377 23.3423C30.4058 23.2391 30.3122 23.0946 30.2719 22.932L30.0139 21.896C29.8986 21.4344 29.6599 21.0129 29.3235 20.6765C28.987 20.3401 28.5655 20.1014 28.1039 19.986L27.0679 19.728C26.9053 19.6877 26.7609 19.5941 26.6576 19.4622C26.5544 19.3303 26.4983 19.1675 26.4983 19C26.4983 18.8325 26.5544 18.6697 26.6576 18.5378C26.7609 18.4059 26.9053 18.3123 27.0679 18.272L28.1039 18.014C28.5655 17.8986 28.987 17.6599 29.3235 17.3235C29.6599 16.9871 29.8986 16.5656 30.0139 16.104L30.2719 15.068C30.3125 14.9057 30.4063 14.7616 30.5382 14.6587C30.6701 14.5558 30.8326 14.4999 30.9999 14.5ZM29.4999 28C29.6575 27.9999 29.811 28.0494 29.9388 28.1415C30.0666 28.2336 30.1622 28.3636 30.2119 28.513L30.6059 29.696C30.7559 30.143 31.1059 30.495 31.5539 30.644L32.7369 31.039C32.8859 31.089 33.0154 31.1845 33.1071 31.3121C33.1989 31.4397 33.2482 31.5929 33.2482 31.75C33.2482 31.9071 33.1989 32.0603 33.1071 32.1879C33.0154 32.3155 32.8859 32.411 32.7369 32.461L31.5539 32.856C31.1069 33.006 30.7549 33.356 30.6059 33.804L30.2109 34.987C30.1609 35.136 30.0654 35.2655 29.9378 35.3572C29.8103 35.4489 29.6571 35.4983 29.4999 35.4983C29.3428 35.4983 29.1896 35.4489 29.0621 35.3572C28.9345 35.2655 28.839 35.136 28.7889 34.987L28.3939 33.804C28.3203 33.5833 28.1963 33.3827 28.0318 33.2182C27.8672 33.0537 27.6667 32.9297 27.4459 32.856L26.2629 32.461C26.114 32.411 25.9845 32.3155 25.8927 32.1879C25.801 32.0603 25.7516 31.9071 25.7516 31.75C25.7516 31.5929 25.801 31.4397 25.8927 31.3121C25.9845 31.1845 26.114 31.089 26.2629 31.039L27.4459 30.644C27.8929 30.494 28.2449 30.144 28.3939 29.696L28.7889 28.513C28.8387 28.3637 28.9341 28.2339 29.0617 28.1418C29.1893 28.0497 29.3426 28.0001 29.4999 28Z"
                                               fill="#021303" />
                                       </svg>
                                   </div>
                                   <div class="fig-content__item__text">
                                       <h5 class="fig-content__item__label">
                                           Targeted Promotions
                                       </h5>
                                       <p class="fig-content__item__dsc">
                                           Utilize the app's data analytics to create targeted
                                           promotions that resonate with specific customer segments.
                                           By offering rewards that are genuinely valuable to the
                                           customer, businesses can see a significant uptick in sales
                                           and transaction volumes.
                                       </p>
                                   </div>
                               </div>
                               <div class="fig-content__item flex-auto-spb">
                                   <div class="fig-content__item__icon">
                                       <svg width="50" height="50" viewBox="0 0 50 50" fill="none"
                                           xmlns="http://www.w3.org/2000/svg">
                                           <circle cx="25" cy="25" r="25" fill="#96FB4A" />
                                           <path fill-rule="evenodd" clip-rule="evenodd"
                                               d="M15.25 15.25C15.0511 15.25 14.8603 15.329 14.7197 15.4697C14.579 15.6103 14.5 15.8011 14.5 16C14.5 16.1989 14.579 16.3897 14.7197 16.5303C14.8603 16.671 15.0511 16.75 15.25 16.75H16V27.25C16 28.0456 16.3161 28.8087 16.8787 29.3713C17.4413 29.9339 18.2044 30.25 19 30.25H20.21L19.038 33.763C18.9751 33.9518 18.9899 34.1579 19.079 34.3359C19.168 34.5138 19.3242 34.6491 19.513 34.712C19.7018 34.7749 19.9079 34.7601 20.0859 34.671C20.2638 34.582 20.3991 34.4258 20.462 34.237L20.791 33.25H29.209L29.539 34.237C29.6073 34.4186 29.7433 34.5666 29.9184 34.6501C30.0935 34.7335 30.2941 34.7459 30.4782 34.6845C30.6622 34.6232 30.8153 34.4929 30.9053 34.3211C30.9954 34.1493 31.0153 33.9492 30.961 33.763L29.791 30.25H31C31.7956 30.25 32.5587 29.9339 33.1213 29.3713C33.6839 28.8087 34 28.0456 34 27.25V16.75H34.75C34.9489 16.75 35.1397 16.671 35.2803 16.5303C35.421 16.3897 35.5 16.1989 35.5 16C35.5 15.8011 35.421 15.6103 35.2803 15.4697C35.1397 15.329 34.9489 15.25 34.75 15.25H15.25ZM21.79 30.25H28.21L28.71 31.75H21.29L21.79 30.25ZM29.875 21.255C29.961 21.2061 30.0364 21.1407 30.097 21.0625C30.1577 20.9844 30.2022 20.895 30.2281 20.7995C30.254 20.7041 30.2608 20.6044 30.2481 20.5063C30.2353 20.4083 30.2033 20.3137 30.1538 20.228C30.1044 20.1423 30.0385 20.0673 29.9599 20.0072C29.8813 19.9472 29.7916 19.9032 29.696 19.8779C29.6004 19.8526 29.5007 19.8465 29.4027 19.8599C29.3047 19.8733 29.2103 19.906 29.125 19.956C27.7615 20.7452 26.5554 21.7792 25.567 23.006L24.03 21.47C23.8894 21.3295 23.6988 21.2507 23.5 21.2507C23.3012 21.2507 23.1106 21.3295 22.97 21.47L19.97 24.47C19.8963 24.5387 19.8372 24.6215 19.7962 24.7135C19.7552 24.8055 19.7332 24.9048 19.7314 25.0055C19.7296 25.1062 19.7482 25.2062 19.7859 25.2996C19.8236 25.393 19.8797 25.4778 19.951 25.549C20.0222 25.6203 20.107 25.6764 20.2004 25.7141C20.2938 25.7518 20.3938 25.7704 20.4945 25.7686C20.5952 25.7668 20.6945 25.7448 20.7865 25.7038C20.8785 25.6628 20.9613 25.6037 21.03 25.53L23.5 23.06L25.117 24.678C25.1946 24.7556 25.2882 24.8152 25.3913 24.8526C25.4945 24.8901 25.6046 24.9045 25.7138 24.8947C25.8231 24.885 25.9289 24.8514 26.0238 24.7963C26.1187 24.7413 26.2003 24.6661 26.263 24.576C27.2095 23.2181 28.4425 22.0844 29.875 21.255Z"
                                               fill="#021303" />
                                       </svg>
                                   </div>
                                   <div class="fig-content__item__text">
                                       <h5 class="fig-content__item__label">
                                           Upsell Opportunities
                                       </h5>
                                       <p class="fig-content__item__dsc">
                                           Leverage recommendations and rewards to introduce
                                           customers to higher-value products or services,
                                           effectively increasing the average transaction value.
                                       </p>
                                   </div>
                               </div>
                           </div>
                       </div>
                   </div>
                   <div class="benefits__fig-content fig-content flex-ctr-spb">
                       <figure class="fig-content__thumb">
                           <img src="imgs/benefit3.webp" alt="" />
                       </figure>
                       <div class="fig-content__context">
                           <h3 class="fig-content__title">Improved Customer Insights</h3>
                           <p class="fig-content__dsc">
                               Figma ipsum component variant main layer. Horizontal text
                               ellipse scrolling list vertical asset. Asset ellipse overflow
                               horizontal project connection selection.
                           </p>
                           <div class="fig-content__items">
                               <div class="fig-content__item flex-auto-spb">
                                   <div class="fig-content__item__icon">
                                       <svg width="50" height="50" viewBox="0 0 50 50" fill="none"
                                           xmlns="http://www.w3.org/2000/svg">
                                           <circle cx="25" cy="25" r="25" fill="#96FB4A" />
                                           <path fill-rule="evenodd" clip-rule="evenodd"
                                               d="M18.625 14.5H22C22.9946 14.5 23.9484 14.8951 24.6517 15.5983C25.3549 16.3016 25.75 17.2554 25.75 18.25V20.125C25.75 21.161 26.59 22 27.625 22H29.5C30.4946 22 31.4484 22.3951 32.1517 23.0983C32.8549 23.8016 33.25 24.7554 33.25 25.75V33.625C33.25 34.66 32.41 35.5 31.375 35.5H18.625C18.1277 35.5 17.6508 35.3025 17.2992 34.9508C16.9475 34.5992 16.75 34.1223 16.75 33.625V16.375C16.75 15.339 17.59 14.5 18.625 14.5ZM22.75 30.25C22.75 30.0511 22.671 29.8603 22.5303 29.7197C22.3897 29.579 22.1989 29.5 22 29.5C21.8011 29.5 21.6103 29.579 21.4697 29.7197C21.329 29.8603 21.25 30.0511 21.25 30.25V31C21.25 31.1989 21.329 31.3897 21.4697 31.5303C21.6103 31.671 21.8011 31.75 22 31.75C22.1989 31.75 22.3897 31.671 22.5303 31.5303C22.671 31.3897 22.75 31.1989 22.75 31V30.25ZM25 27.25C25.1989 27.25 25.3897 27.329 25.5303 27.4697C25.671 27.6103 25.75 27.8011 25.75 28V31C25.75 31.1989 25.671 31.3897 25.5303 31.5303C25.3897 31.671 25.1989 31.75 25 31.75C24.8011 31.75 24.6103 31.671 24.4697 31.5303C24.329 31.3897 24.25 31.1989 24.25 31V28C24.25 27.8011 24.329 27.6103 24.4697 27.4697C24.6103 27.329 24.8011 27.25 25 27.25ZM28.75 25.75C28.75 25.5511 28.671 25.3603 28.5303 25.2197C28.3897 25.079 28.1989 25 28 25C27.8011 25 27.6103 25.079 27.4697 25.2197C27.329 25.3603 27.25 25.5511 27.25 25.75V31C27.25 31.1989 27.329 31.3897 27.4697 31.5303C27.6103 31.671 27.8011 31.75 28 31.75C28.1989 31.75 28.3897 31.671 28.5303 31.5303C28.671 31.3897 28.75 31.1989 28.75 31V25.75Z"
                                               fill="#021303" />
                                           <path
                                               d="M27.2502 18.2499C27.2519 16.9885 26.7977 15.7689 25.9712 14.8159C27.6445 15.2559 29.1709 16.1324 30.3943 17.3558C31.6177 18.5792 32.4942 20.1056 32.9342 21.7789C31.9812 20.9524 30.7616 20.4982 29.5002 20.4999H27.6252C27.5257 20.4999 27.4304 20.4604 27.36 20.3901C27.2897 20.3198 27.2502 20.2244 27.2502 20.1249V18.2499Z"
                                               fill="#021303" />
                                       </svg>
                                   </div>
                                   <div class="fig-content__item__text">
                                       <h5 class="fig-content__item__label">
                                           Data Driven Decisions
                                       </h5>
                                       <p class="fig-content__item__dsc">
                                           Access to detailed analytics and spending behavior data
                                           allows businesses to make informed decisions about product
                                           offerings, marketing strategies, and customer service
                                           improvements.
                                       </p>
                                   </div>
                               </div>
                               <div class="fig-content__item flex-auto-spb">
                                   <div class="fig-content__item__icon">
                                       <svg width="50" height="50" viewBox="0 0 50 50" fill="none"
                                           xmlns="http://www.w3.org/2000/svg">
                                           <circle cx="25" cy="25" r="25" fill="#96FB4A" />
                                           <path fill-rule="evenodd" clip-rule="evenodd"
                                               d="M20.5 18.25C20.5 17.4544 20.8161 16.6913 21.3787 16.1287C21.9413 15.5661 22.7044 15.25 23.5 15.25H26.5C27.2956 15.25 28.0587 15.5661 28.6213 16.1287C29.1839 16.6913 29.5 17.4544 29.5 18.25V18.455C30.433 18.54 31.357 18.652 32.274 18.789C33.728 19.007 34.75 20.272 34.75 21.706V24.739C34.75 25.95 34.016 27.091 32.814 27.491C30.2938 28.3275 27.6554 28.7526 25 28.75C22.27 28.75 19.643 28.308 17.186 27.491C15.984 27.091 15.25 25.95 15.25 24.739V21.706C15.25 20.272 16.272 19.006 17.726 18.789C18.6473 18.6512 19.5723 18.5398 20.5 18.455V18.25ZM28 18.25V18.34C26.0018 18.2186 23.9982 18.2186 22 18.34V18.25C22 17.8522 22.158 17.4706 22.4393 17.1893C22.7206 16.908 23.1022 16.75 23.5 16.75H26.5C26.8978 16.75 27.2794 16.908 27.5607 17.1893C27.842 17.4706 28 17.8522 28 18.25ZM25 26.5C25.1989 26.5 25.3897 26.421 25.5303 26.2803C25.671 26.1397 25.75 25.9489 25.75 25.75C25.75 25.5511 25.671 25.3603 25.5303 25.2197C25.3897 25.079 25.1989 25 25 25C24.8011 25 24.6103 25.079 24.4697 25.2197C24.329 25.3603 24.25 25.5511 24.25 25.75C24.25 25.9489 24.329 26.1397 24.4697 26.2803C24.6103 26.421 24.8011 26.5 25 26.5Z"
                                               fill="#021303" />
                                           <path
                                               d="M16 31.4V28.604C16.2278 28.7287 16.4665 28.8324 16.713 28.914C19.3857 29.8014 22.1839 30.2525 25 30.25C27.892 30.25 30.68 29.782 33.287 28.915C33.539 28.831 33.777 28.726 34 28.604V31.4C34 32.852 32.953 34.128 31.477 34.323C29.357 34.605 27.195 34.75 25 34.75C22.834 34.7504 20.6702 34.6078 18.523 34.323C17.047 34.128 16 32.852 16 31.4Z"
                                               fill="#021303" />
                                       </svg>
                                   </div>
                                   <div class="fig-content__item__text">
                                       <h5 class="fig-content__item__label">Market Trends</h5>
                                       <p class="fig-content__item__dsc">
                                           Understanding how and where customers prefer to spend
                                           their rewards can offer insights into market trends,
                                           helping businesses stay ahead of the competition.
                                       </p>
                                   </div>
                               </div>
                           </div>
                       </div>
                   </div>
                   <div class="benefits__fig-content fig-content flex-ctr-spb">
                       <figure class="fig-content__thumb">
                           <img src="imgs/benefit4.webp" alt="" />
                       </figure>
                       <div class="fig-content__context">
                           <h3 class="fig-content__title">Cost Effecting Marketing</h3>
                           <p class="fig-content__dsc">
                               Figma ipsum component variant main layer. Horizontal text
                               ellipse scrolling list vertical asset. Asset ellipse overflow
                               horizontal project connection selection.
                           </p>
                           <div class="fig-content__items">
                               <div class="fig-content__item flex-auto-spb">
                                   <div class="fig-content__item__icon">
                                       <svg width="50" height="51" viewBox="0 0 50 51" fill="none"
                                           xmlns="http://www.w3.org/2000/svg">
                                           <circle cx="25" cy="25.7285" r="25" fill="#96FB4A" />
                                           <path fill-rule="evenodd" clip-rule="evenodd"
                                               d="M20.5001 19.7285C20.5001 18.535 20.9742 17.3904 21.8181 16.5465C22.662 15.7026 23.8066 15.2285 25.0001 15.2285C26.1936 15.2285 27.3382 15.7026 28.1821 16.5465C29.026 17.3904 29.5001 18.535 29.5001 19.7285C29.5001 20.922 29.026 22.0666 28.1821 22.9105C27.3382 23.7544 26.1936 24.2285 25.0001 24.2285C23.8066 24.2285 22.662 23.7544 21.8181 22.9105C20.9742 22.0666 20.5001 20.922 20.5001 19.7285ZM16.7511 33.8335C16.7848 31.668 17.6687 29.6026 19.2121 28.0831C20.7554 26.5636 22.8343 25.712 25.0001 25.712C27.1659 25.712 29.2448 26.5636 30.7881 28.0831C32.3315 29.6026 33.2154 31.668 33.2491 33.8335C33.2517 33.9793 33.2117 34.1227 33.1341 34.2461C33.0565 34.3696 32.9446 34.4677 32.8121 34.5285C30.3613 35.6522 27.6963 36.2322 25.0001 36.2285C22.2141 36.2285 19.5671 35.6205 17.1881 34.5285C17.0556 34.4677 16.9437 34.3696 16.8661 34.2461C16.7884 34.1227 16.7485 33.9793 16.7511 33.8335Z"
                                               fill="#021303" />
                                       </svg>
                                   </div>
                                   <div class="fig-content__item__text">
                                       <h5 class="fig-content__item__label">
                                           ROI Focused Campaigns
                                       </h5>
                                       <p class="fig-content__item__dsc">
                                           Compared to traditional advertising, partnering with
                                           Rewards Hub offers a more direct and cost-effective way to
                                           reach potential customers through offers and rewards,
                                           ensuring a better return on investment for marketing
                                           spend.
                                       </p>
                                   </div>
                               </div>
                               <div class="fig-content__item flex-auto-spb">
                                   <div class="fig-content__item__icon">
                                       <svg width="50" height="51" viewBox="0 0 50 51" fill="none"
                                           xmlns="http://www.w3.org/2000/svg">
                                           <circle cx="25" cy="25.7285" r="25" fill="#96FB4A" />
                                           <path fill-rule="evenodd" clip-rule="evenodd"
                                               d="M14.5 20.8535C14.5 19.8175 15.34 18.9785 16.375 18.9785H22.375C23.411 18.9785 24.25 19.8185 24.25 20.8535V24.6035C24.25 25.6395 23.41 26.4785 22.375 26.4785H16.375C15.8777 26.4785 15.4008 26.281 15.0492 25.9293C14.6975 25.5777 14.5 25.1008 14.5 24.6035V20.8535ZM26.5 22.3535C26.5 21.3175 27.34 20.4785 28.375 20.4785H33.625C34.66 20.4785 35.5 21.3185 35.5 22.3535V30.6035C35.5 31.6385 34.66 32.4785 33.625 32.4785H28.375C27.8777 32.4785 27.4008 32.281 27.0492 31.9293C26.6975 31.5777 26.5 31.1008 26.5 30.6035V22.3535ZM16 29.8535C16 28.8175 16.84 27.9785 17.875 27.9785H23.125C24.161 27.9785 25 28.8185 25 29.8535V32.1035C25 33.1385 24.16 33.9785 23.125 33.9785H17.875C17.3777 33.9785 16.9008 33.781 16.5492 33.4293C16.1975 33.0777 16 32.6008 16 32.1035V29.8535Z"
                                               fill="#021303" />
                                       </svg>
                                   </div>
                                   <div class="fig-content__item__text">
                                       <h5 class="fig-content__item__label">Community Building</h5>
                                       <p class="fig-content__item__dsc">
                                           Being part of a larger rewards ecosystem enables
                                           businesses to benefit from network effects, gaining
                                           visibility among a wider audience of engaged consumers.
                                       </p>
                                   </div>
                               </div>
                           </div>
                       </div>
                   </div>
                   <div class="benefits__fig-content fig-content flex-ctr-spb">
                       <figure class="fig-content__thumb">
                           <img src="imgs/benefit5.webp" alt="" />
                       </figure>
                       <div class="fig-content__context">
                           <h3 class="fig-content__title">Enhanced Brand Loyalty</h3>
                           <p class="fig-content__dsc">
                               Figma ipsum component variant main layer. Horizontal text
                               ellipse scrolling list vertical asset. Asset ellipse overflow
                               horizontal project connection selection.
                           </p>
                           <div class="fig-content__items">
                               <div class="fig-content__item flex-auto-spb">
                                   <div class="fig-content__item__icon">
                                       <svg width="50" height="51" viewBox="0 0 50 51" fill="none"
                                           xmlns="http://www.w3.org/2000/svg">
                                           <circle cx="25" cy="25.7285" r="25" fill="#96FB4A" />
                                           <path fill-rule="evenodd" clip-rule="evenodd"
                                               d="M20.5001 19.7285C20.5001 18.535 20.9742 17.3904 21.8181 16.5465C22.662 15.7026 23.8066 15.2285 25.0001 15.2285C26.1936 15.2285 27.3382 15.7026 28.1821 16.5465C29.026 17.3904 29.5001 18.535 29.5001 19.7285C29.5001 20.922 29.026 22.0666 28.1821 22.9105C27.3382 23.7544 26.1936 24.2285 25.0001 24.2285C23.8066 24.2285 22.662 23.7544 21.8181 22.9105C20.9742 22.0666 20.5001 20.922 20.5001 19.7285ZM16.7511 33.8335C16.7848 31.668 17.6687 29.6026 19.2121 28.0831C20.7554 26.5636 22.8343 25.712 25.0001 25.712C27.1659 25.712 29.2448 26.5636 30.7881 28.0831C32.3315 29.6026 33.2154 31.668 33.2491 33.8335C33.2517 33.9793 33.2117 34.1227 33.1341 34.2461C33.0565 34.3696 32.9446 34.4677 32.8121 34.5285C30.3613 35.6522 27.6963 36.2322 25.0001 36.2285C22.2141 36.2285 19.5671 35.6205 17.1881 34.5285C17.0556 34.4677 16.9437 34.3696 16.8661 34.2461C16.7884 34.1227 16.7485 33.9793 16.7511 33.8335Z"
                                               fill="#021303" />
                                       </svg>
                                   </div>
                                   <div class="fig-content__item__text">
                                       <h5 class="fig-content__item__label">Reward For Loyalty</h5>
                                       <p class="fig-content__item__dsc">
                                           Customers feel valued when rewarded for their loyalty,
                                           which can significantly enhance their overall perception
                                           of a brand. This positive reinforcement encourages repeat
                                           business and long-term loyalty. Confidential
                                       </p>
                                   </div>
                               </div>
                               <div class="fig-content__item flex-auto-spb">
                                   <div class="fig-content__item__icon">
                                       <svg width="50" height="51" viewBox="0 0 50 51" fill="none"
                                           xmlns="http://www.w3.org/2000/svg">
                                           <circle cx="25" cy="25.7285" r="25" fill="#96FB4A" />
                                           <path fill-rule="evenodd" clip-rule="evenodd"
                                               d="M14.5 20.8535C14.5 19.8175 15.34 18.9785 16.375 18.9785H22.375C23.411 18.9785 24.25 19.8185 24.25 20.8535V24.6035C24.25 25.6395 23.41 26.4785 22.375 26.4785H16.375C15.8777 26.4785 15.4008 26.281 15.0492 25.9293C14.6975 25.5777 14.5 25.1008 14.5 24.6035V20.8535ZM26.5 22.3535C26.5 21.3175 27.34 20.4785 28.375 20.4785H33.625C34.66 20.4785 35.5 21.3185 35.5 22.3535V30.6035C35.5 31.6385 34.66 32.4785 33.625 32.4785H28.375C27.8777 32.4785 27.4008 32.281 27.0492 31.9293C26.6975 31.5777 26.5 31.1008 26.5 30.6035V22.3535ZM16 29.8535C16 28.8175 16.84 27.9785 17.875 27.9785H23.125C24.161 27.9785 25 28.8185 25 29.8535V32.1035C25 33.1385 24.16 33.9785 23.125 33.9785H17.875C17.3777 33.9785 16.9008 33.781 16.5492 33.4293C16.1975 33.0777 16 32.6008 16 32.1035V29.8535Z"
                                               fill="#021303" />
                                       </svg>
                                   </div>
                                   <div class="fig-content__item__text">
                                       <h5 class="fig-content__item__label">Differentiation</h5>
                                       <p class="fig-content__item__dsc">
                                           In competitive markets, offering unique rewards through
                                           the Rewards Hub can differentiate your business from
                                           competitors, offering a compelling reason for customers to
                                           choose your brand.
                                       </p>
                                   </div>
                               </div>
                           </div>
                       </div>
                   </div>
                   <div class="benefits__fig-content fig-content flex-ctr-spb">
                       <figure class="fig-content__thumb">
                           <img src="imgs/benefit6.webp" alt="" />
                       </figure>
                       <div class="fig-content__context">
                           <h3 class="fig-content__title">
                               Access to Advanced Technologies
                           </h3>
                           <p class="fig-content__dsc">
                               Figma ipsum component variant main layer. Horizontal text
                               ellipse scrolling list vertical asset. Asset ellipse overflow
                               horizontal project connection selection.
                           </p>
                           <div class="fig-content__items">
                               <div class="fig-content__item flex-auto-spb">
                                   <div class="fig-content__item__icon">
                                       <svg width="50" height="51" viewBox="0 0 50 51" fill="none"
                                           xmlns="http://www.w3.org/2000/svg">
                                           <circle cx="25" cy="25.7285" r="25" fill="#96FB4A" />
                                           <path fill-rule="evenodd" clip-rule="evenodd"
                                               d="M20.5001 19.7285C20.5001 18.535 20.9742 17.3904 21.8181 16.5465C22.662 15.7026 23.8066 15.2285 25.0001 15.2285C26.1936 15.2285 27.3382 15.7026 28.1821 16.5465C29.026 17.3904 29.5001 18.535 29.5001 19.7285C29.5001 20.922 29.026 22.0666 28.1821 22.9105C27.3382 23.7544 26.1936 24.2285 25.0001 24.2285C23.8066 24.2285 22.662 23.7544 21.8181 22.9105C20.9742 22.0666 20.5001 20.922 20.5001 19.7285ZM16.7511 33.8335C16.7848 31.668 17.6687 29.6026 19.2121 28.0831C20.7554 26.5636 22.8343 25.712 25.0001 25.712C27.1659 25.712 29.2448 26.5636 30.7881 28.0831C32.3315 29.6026 33.2154 31.668 33.2491 33.8335C33.2517 33.9793 33.2117 34.1227 33.1341 34.2461C33.0565 34.3696 32.9446 34.4677 32.8121 34.5285C30.3613 35.6522 27.6963 36.2322 25.0001 36.2285C22.2141 36.2285 19.5671 35.6205 17.1881 34.5285C17.0556 34.4677 16.9437 34.3696 16.8661 34.2461C16.7884 34.1227 16.7485 33.9793 16.7511 33.8335Z"
                                               fill="#021303" />
                                       </svg>
                                   </div>
                                   <div class="fig-content__item__text">
                                       <h5 class="fig-content__item__label">
                                           AI and Machine Learning
                                       </h5>
                                       <p class="fig-content__item__dsc">
                                           Small and medium businesses, in particular, can benefit
                                           from the advanced AI and machine learning capabilities of
                                           the Rewards Hub without the need for significant
                                           investment in their own technology infrastructure.
                                       </p>
                                   </div>
                               </div>
                               <div class="fig-content__item flex-auto-spb">
                                   <div class="fig-content__item__icon">
                                       <svg width="50" height="51" viewBox="0 0 50 51" fill="none"
                                           xmlns="http://www.w3.org/2000/svg">
                                           <circle cx="25" cy="25.7285" r="25" fill="#96FB4A" />
                                           <path fill-rule="evenodd" clip-rule="evenodd"
                                               d="M14.5 20.8535C14.5 19.8175 15.34 18.9785 16.375 18.9785H22.375C23.411 18.9785 24.25 19.8185 24.25 20.8535V24.6035C24.25 25.6395 23.41 26.4785 22.375 26.4785H16.375C15.8777 26.4785 15.4008 26.281 15.0492 25.9293C14.6975 25.5777 14.5 25.1008 14.5 24.6035V20.8535ZM26.5 22.3535C26.5 21.3175 27.34 20.4785 28.375 20.4785H33.625C34.66 20.4785 35.5 21.3185 35.5 22.3535V30.6035C35.5 31.6385 34.66 32.4785 33.625 32.4785H28.375C27.8777 32.4785 27.4008 32.281 27.0492 31.9293C26.6975 31.5777 26.5 31.1008 26.5 30.6035V22.3535ZM16 29.8535C16 28.8175 16.84 27.9785 17.875 27.9785H23.125C24.161 27.9785 25 28.8185 25 29.8535V32.1035C25 33.1385 24.16 33.9785 23.125 33.9785H17.875C17.3777 33.9785 16.9008 33.781 16.5492 33.4293C16.1975 33.0777 16 32.6008 16 32.1035V29.8535Z"
                                               fill="#021303" />
                                       </svg>
                                   </div>
                                   <div class="fig-content__item__text">
                                       <h5 class="fig-content__item__label">
                                           Analytics and Reporting Tools
                                       </h5>
                                       <p class="fig-content__item__dsc">
                                           The platform provides sophisticated analytics and
                                           reporting tools, enabling businesses to track the
                                           performance of their rewards programs and adjust
                                           strategies for maximum impact.
                                       </p>
                                   </div>
                               </div>
                           </div>
                       </div>
                   </div>
                   <div class="benefits__fig-content fig-content flex-ctr-spb">
                       <figure class="fig-content__thumb">
                           <img src="imgs/benefit7.webp" alt="" />
                       </figure>
                       <div class="fig-content__context">
                           <h3 class="fig-content__title">
                               security and trustworthy partnership
                           </h3>
                           <p class="fig-content__dsc">
                               Figma ipsum component variant main layer. Horizontal text
                               ellipse scrolling list vertical asset. Asset ellipse overflow
                               horizontal project connection selection.
                           </p>
                           <div class="fig-content__items">
                               <div class="fig-content__item flex-auto-spb">
                                   <div class="fig-content__item__icon">
                                       <svg width="50" height="51" viewBox="0 0 50 51" fill="none"
                                           xmlns="http://www.w3.org/2000/svg">
                                           <circle cx="25" cy="25.7285" r="25" fill="#96FB4A" />
                                           <path fill-rule="evenodd" clip-rule="evenodd"
                                               d="M20.5001 19.7285C20.5001 18.535 20.9742 17.3904 21.8181 16.5465C22.662 15.7026 23.8066 15.2285 25.0001 15.2285C26.1936 15.2285 27.3382 15.7026 28.1821 16.5465C29.026 17.3904 29.5001 18.535 29.5001 19.7285C29.5001 20.922 29.026 22.0666 28.1821 22.9105C27.3382 23.7544 26.1936 24.2285 25.0001 24.2285C23.8066 24.2285 22.662 23.7544 21.8181 22.9105C20.9742 22.0666 20.5001 20.922 20.5001 19.7285ZM16.7511 33.8335C16.7848 31.668 17.6687 29.6026 19.2121 28.0831C20.7554 26.5636 22.8343 25.712 25.0001 25.712C27.1659 25.712 29.2448 26.5636 30.7881 28.0831C32.3315 29.6026 33.2154 31.668 33.2491 33.8335C33.2517 33.9793 33.2117 34.1227 33.1341 34.2461C33.0565 34.3696 32.9446 34.4677 32.8121 34.5285C30.3613 35.6522 27.6963 36.2322 25.0001 36.2285C22.2141 36.2285 19.5671 35.6205 17.1881 34.5285C17.0556 34.4677 16.9437 34.3696 16.8661 34.2461C16.7884 34.1227 16.7485 33.9793 16.7511 33.8335Z"
                                               fill="#021303" />
                                       </svg>
                                   </div>
                                   <div class="fig-content__item__text">
                                       <h5 class="fig-content__item__label">Data Security</h5>
                                       <p class="fig-content__item__dsc">
                                           Adherence to ISO 27001 and PCI DSS 4.0 standards ensures
                                           that customer data is handled with the utmost security,
                                           building trust not only between the Rewards Hub and
                                           businesses but also between businesses and their
                                           customers.
                                       </p>
                                   </div>
                               </div>
                               <div class="fig-content__item flex-auto-spb">
                                   <div class="fig-content__item__icon">
                                       <svg width="50" height="51" viewBox="0 0 50 51" fill="none"
                                           xmlns="http://www.w3.org/2000/svg">
                                           <circle cx="25" cy="25.7285" r="25" fill="#96FB4A" />
                                           <path fill-rule="evenodd" clip-rule="evenodd"
                                               d="M14.5 20.8535C14.5 19.8175 15.34 18.9785 16.375 18.9785H22.375C23.411 18.9785 24.25 19.8185 24.25 20.8535V24.6035C24.25 25.6395 23.41 26.4785 22.375 26.4785H16.375C15.8777 26.4785 15.4008 26.281 15.0492 25.9293C14.6975 25.5777 14.5 25.1008 14.5 24.6035V20.8535ZM26.5 22.3535C26.5 21.3175 27.34 20.4785 28.375 20.4785H33.625C34.66 20.4785 35.5 21.3185 35.5 22.3535V30.6035C35.5 31.6385 34.66 32.4785 33.625 32.4785H28.375C27.8777 32.4785 27.4008 32.281 27.0492 31.9293C26.6975 31.5777 26.5 31.1008 26.5 30.6035V22.3535ZM16 29.8535C16 28.8175 16.84 27.9785 17.875 27.9785H23.125C24.161 27.9785 25 28.8185 25 29.8535V32.1035C25 33.1385 24.16 33.9785 23.125 33.9785H17.875C17.3777 33.9785 16.9008 33.781 16.5492 33.4293C16.1975 33.0777 16 32.6008 16 32.1035V29.8535Z"
                                               fill="#021303" />
                                       </svg>
                                   </div>
                                   <div class="fig-content__item__text">
                                       <h5 class="fig-content__item__label">
                                           Compliance and Reliability
                                       </h5>
                                       <p class="fig-content__item__dsc">
                                           The platform's commitment to maintaining high standards of
                                           compliance and reliability protects businesses from
                                           potential legal and operational risks associated with
                                           customer data management and financial transactions.
                                       </p>
                                   </div>
                               </div>
                           </div>
                       </div>
                   </div>
               </div>
           </section>

           <!-- How It Works -->
           <section class="procedure">
               <div class="container flex-ctr-spb">
                   <div class="procedure__context">
                       <h5 class="procedure__subtitle section-subtitle">How It Works?</h5>
                       <h2 class="section-title procedure__title">
                           Steps Of How It Work Process
                       </h2>
                       <div class="procedure__steps">
                           <div class="procedure__step flex-ctr">
                               <div class="procedure__step-no flex-ctr-ctr">1</div>
                               <div class="procedure__step-text">
                                   <h3 class="procedure__step-title">Figma ipsum component</h3>
                                   <p class="procedure__step-dsc">
                                       Figma ipsum component variant main layer. Figjam rectangle
                                       bold inspect image. Select project subtract.
                                   </p>
                               </div>
                           </div>
                           <div class="procedure__step flex-ctr">
                               <div class="procedure__step-no flex-ctr-ctr">2</div>
                               <div class="procedure__step-text">
                                   <h3 class="procedure__step-title">Figma ipsum component</h3>
                                   <p class="procedure__step-dsc">
                                       Figma ipsum component variant main layer. Figjam rectangle
                                       bold inspect image. Select project subtract.
                                   </p>
                               </div>
                           </div>
                           <div class="procedure__step flex-ctr">
                               <div class="procedure__step-no flex-ctr-ctr">3</div>
                               <div class="procedure__step-text">
                                   <h3 class="procedure__step-title">Figma ipsum component</h3>
                                   <p class="procedure__step-dsc">
                                       Figma ipsum component variant main layer. Figjam rectangle
                                       bold inspect image. Select project subtract.
                                   </p>
                               </div>
                           </div>
                       </div>
                   </div>
                   <figure class="procedure__figure">
                       <img src="imgs/procedure.webp" alt="" />
                   </figure>
               </div>
           </section>

           <!-- Badges -->
           <section class="badges">
               <div class="container">
                   <div class="badges__header">
                       <h5 class="section-subtitle badges__subtitle">We Proudly</h5>
                       <h2 class="badges__title section-title">backed by Experties</h2>
                   </div>
                   <div class="badges__body flex-ctr-spb">
                       <div class="badge">
                           <img src="imgs/badge1.webp" alt="" />
                       </div>
                       <div class="badge">
                           <img src="imgs/badge2.webp" alt="" />
                       </div>
                       <div class="badge">
                           <img src="imgs/badge3.webp" alt="" />
                       </div>
                       <div class="badge">
                           <img src="imgs/badge4.webp" alt="" />
                       </div>
                       <div class="badge">
                           <img src="imgs/badge5.webp" alt="" />
                       </div>
                   </div>
               </div>
           </section>

           <!-- Competitors -->
           <section class="competitors">
               <div class="container flex-ctr-spb">
                   <div class="competitors__context">
                       <h2 class="competitors__title">
                           Lorem ipsum dolor sit amet consectetur.
                       </h2>
                       <p class="competitors__dsc">
                           Figma ipsum component variant main layer. Invite line vertical
                           editor invite. Opacity pen selection overflow object object invite
                           flatten. Align community star overflow arrange project follower
                           bullet reesizing slice.
                       </p>
                   </div>
                   <figure class="competitors__figure">
                       <img src="imgs/competitors.webp" alt="" />
                   </figure>
               </div>
           </section>

           <!-- Start Exploring -->
           <section class="explore">
               <div class="container gradient-bg flex-ctr-spb explore__block">
                   <div class="explore__context">
                       <h2 class="explore__title">Your Security Our Priority</h2>
                       <p class="explore__dsc">
                           Want to know more about how we protect your data? Get in touch
                           with our security team. Your peace of mind is our highest
                           priority.
                       </p>
                       <div class="explore__btns flex-ctr">
                           <a href="{{ url('/sign-up') }}" class="explore__btn btn-primary bg-solid">
                               Get Started Today
                           </a>
                           <a href="#" class="explore__btn btn-primary bg-transparent">
                               Learn more
                           </a>
                       </div>
                   </div>
                   <figure class="explore__thumb">
                       <img src="imgs/secure.webp" alt="" />
                   </figure>
               </div>
           </section>
       </main>
  @endsection