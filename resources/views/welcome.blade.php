  @extends('layout')

  @section('content')
  <main class="main home-main">
      <!-- Hero Section -->
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
      <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
      @if ($errors->any())
      <script>
          Swal.fire({
              icon: 'error'
              , title: 'Validation Failed'
              , html: `
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            `
          });

      </script>
      @endif
      <section class="hero">
          <div class="container">
              <div class="hero__content">
                  <div class="hero__content__fancy-icon">
                      <div class="hero__content__fancy-small-icons"><svg class="icon-1" fill="none" height="53" viewbox="0 0 53 53" width="53" xmlns="http://www.w3.org/2000/svg">
                              <circle cx="26.5" cy="26.5" fill="#021303" r="26" stroke="url(#paint0_linear_8_1710)"></circle>
                              <path d="M29.7813 25.1875V21.25C29.7813 20.3798 29.4356 19.5452 28.8203 18.9298C28.2049 18.3145 27.3703 17.9688 26.5001 17.9688C25.6298 17.9688 24.7952 18.3145 24.1799 18.9298C23.5645 19.5452 23.2188 20.3798 23.2188 21.25V25.1875M33.1553 23.4436L34.2605 33.9436C34.3217 34.5255 33.8667 35.0312 33.2813 35.0312H19.7188C19.5808 35.0314 19.4442 35.0025 19.318 34.9464C19.1919 34.8904 19.0789 34.8084 18.9865 34.7058C18.8941 34.6032 18.8242 34.4824 18.7816 34.3511C18.7389 34.2197 18.7243 34.0809 18.7388 33.9436L19.8448 23.4436C19.8703 23.2017 19.9845 22.9779 20.1653 22.8152C20.3461 22.6525 20.5807 22.5625 20.824 22.5625H32.1762C32.6802 22.5625 33.1028 22.9431 33.1553 23.4436ZM23.547 25.1875C23.547 25.2745 23.5124 25.358 23.4508 25.4195C23.3893 25.4811 23.3059 25.5156 23.2188 25.5156C23.1318 25.5156 23.0483 25.4811 22.9868 25.4195C22.9253 25.358 22.8907 25.2745 22.8907 25.1875C22.8907 25.1005 22.9253 25.017 22.9868 24.9555C23.0483 24.8939 23.1318 24.8594 23.2188 24.8594C23.3059 24.8594 23.3893 24.8939 23.4508 24.9555C23.5124 25.017 23.547 25.1005 23.547 25.1875ZM30.1095 25.1875C30.1095 25.2745 30.0749 25.358 30.0133 25.4195C29.9518 25.4811 29.8684 25.5156 29.7813 25.5156C29.6943 25.5156 29.6108 25.4811 29.5493 25.4195C29.4878 25.358 29.4532 25.2745 29.4532 25.1875C29.4532 25.1005 29.4878 25.017 29.5493 24.9555C29.6108 24.8939 29.6943 24.8594 29.7813 24.8594C29.8684 24.8594 29.9518 24.8939 30.0133 24.9555C30.0749 25.017 30.1095 25.1005 30.1095 25.1875Z" stroke="#96FB4A" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"></path>
                              <defs>
                                  <lineargradient gradientunits="userSpaceOnUse" id="paint0_linear_8_1710" x1="26.5" x2="26.5" y1="0" y2="53">
                                      <stop stop-color="#021303"></stop>
                                      <stop offset="1" stop-color="#96FB4A"></stop>
                                  </lineargradient>
                              </defs>
                          </svg> <svg class="icon-2" fill="none" height="53" viewbox="0 0 53 53" width="53" xmlns="http://www.w3.org/2000/svg">
                              <circle cx="26.5" cy="26.5" fill="#021303" r="26" stroke="url(#paint0_linear_8_1711)"></circle>
                              <path d="M17.9688 23.2188H35.0312M17.9688 23.875H35.0312M20.5938 28.4688H25.8438M20.5938 30.4375H23.2188M19.9375 33.0625H33.0625C33.5846 33.0625 34.0854 32.8551 34.4546 32.4859C34.8238 32.1167 35.0312 31.6159 35.0312 31.0938V21.9062C35.0312 21.3841 34.8238 20.8833 34.4546 20.5141C34.0854 20.1449 33.5846 19.9375 33.0625 19.9375H19.9375C19.4154 19.9375 18.9146 20.1449 18.5454 20.5141C18.1762 20.8833 17.9688 21.3841 17.9688 21.9062V31.0938C17.9688 31.6159 18.1762 32.1167 18.5454 32.4859C18.9146 32.8551 19.4154 33.0625 19.9375 33.0625Z" stroke="#96FB4A" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"></path>
                              <defs>
                                  <lineargradient gradientunits="userSpaceOnUse" id="paint0_linear_8_1711" x1="26.5" x2="26.5" y1="0" y2="53">
                                      <stop stop-color="#021303"></stop>
                                      <stop offset="1" stop-color="#96FB4A"></stop>
                                  </lineargradient>
                              </defs>
                          </svg> <svg class="icon-3" fill="none" height="53" viewbox="0 0 53 53" width="53" xmlns="http://www.w3.org/2000/svg">
                              <circle cx="26.5" cy="26.5" fill="#021303" r="26" stroke="url(#paint0_linear_8_1719)"></circle>
                              <path d="M27.6875 22.4375C27.0044 22.2604 26.0551 22 25.2941 22C21.5418 22 18.5 24.3341 18.5 27.2135C18.5 28.8681 19.5044 30.3427 21.071 31.2978L20.6465 32.6977C20.5443 33.0348 20.7966 33.375 21.1489 33.375H22.6925C22.8062 33.375 22.9168 33.3382 23.0077 33.2699L24.2279 32.3541H26.3602L27.5805 33.2699C27.6714 33.3382 27.782 33.375 27.8957 33.375H29.4393C29.7915 33.375 30.0439 33.0348 29.9416 32.6977L29.5172 31.2978C30.4505 30.7288 31.1843 29.9754 31.625 29.1094" stroke="#96FB4A" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"></path>
                              <path d="M27.6875 22.4375L31.625 21.125L31.5515 24.2998L33.375 25.0625V28.125L31.6898 29" stroke="#96FB4A" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"></path>
                              <path d="M28.5625 26.375C28.3209 26.375 28.125 26.1791 28.125 25.9375C28.125 25.6959 28.3209 25.5 28.5625 25.5C28.8041 25.5 29 25.6959 29 25.9375C29 26.1791 28.8041 26.375 28.5625 26.375Z" fill="#96FB4A" stroke="#96FB4A" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"> </path>
                              <path d="M16.75 23.75C16.75 23.75 16.75 25.85 18.5 26.375" stroke="#96FB4A" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"></path>
                              <path d="M26.2007 21.7838C26.3136 21.4586 26.375 21.1087 26.375 20.7441C26.375 19.0215 25.0039 17.625 23.3125 17.625C21.6211 17.625 20.25 19.0215 20.25 20.7441C20.25 21.5681 20.5637 22.3174 21.076 22.875" stroke="#96FB4A" stroke-linejoin="round" stroke-width="1.5"></path>
                              <defs>
                                  <lineargradient gradientunits="userSpaceOnUse" id="paint0_linear_8_1719" x1="26.5" x2="26.5" y1="0" y2="53">
                                      <stop stop-color="#021303"></stop>
                                      <stop offset="1" stop-color="#96FB4A"></stop>
                                  </lineargradient>
                              </defs>
                          </svg> <svg class="icon-4" fill="none" height="53" viewbox="0 0 53 53" width="53" xmlns="http://www.w3.org/2000/svg">
                              <circle cx="26.5" cy="26.5" fill="#021303" r="26" stroke="url(#paint0_linear_8_1711)"></circle>
                              <path d="M17.9688 23.2188H35.0312M17.9688 23.875H35.0312M20.5938 28.4688H25.8438M20.5938 30.4375H23.2188M19.9375 33.0625H33.0625C33.5846 33.0625 34.0854 32.8551 34.4546 32.4859C34.8238 32.1167 35.0312 31.6159 35.0312 31.0938V21.9062C35.0312 21.3841 34.8238 20.8833 34.4546 20.5141C34.0854 20.1449 33.5846 19.9375 33.0625 19.9375H19.9375C19.4154 19.9375 18.9146 20.1449 18.5454 20.5141C18.1762 20.8833 17.9688 21.3841 17.9688 21.9062V31.0938C17.9688 31.6159 18.1762 32.1167 18.5454 32.4859C18.9146 32.8551 19.4154 33.0625 19.9375 33.0625Z" stroke="#96FB4A" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"></path>
                              <defs>
                                  <lineargradient gradientunits="userSpaceOnUse" id="paint0_linear_8_1711" x1="26.5" x2="26.5" y1="0" y2="53">
                                      <stop stop-color="#021303"></stop>
                                      <stop offset="1" stop-color="#96FB4A"></stop>
                                  </lineargradient>
                              </defs>
                          </svg></div>
                      <svg fill="none" viewbox="0 0 675 675" xmlns="http://www.w3.org/2000/svg">
                          <circle class="circle-dots" cx="337" cy="337" r="336" stroke="url(#paint0_linear_8_1732)" stroke-dasharray="17 17" stroke-linejoin="round" stroke-width="2"></circle>
                          <defs>
                              <lineargradient class="dots-color" gradientunits="userSpaceOnUse" id="paint0_linear_8_1732" x1="337" x2="337" y1="0" y2="674">
                                  <stop offset="0.435" stop-color="#030303"></stop>
                                  <stop offset="1" stop-color="#96FB4A"></stop>
                              </lineargradient>
                          </defs>
                      </svg>
                  </div>

                  <h1 class="hero__title">3X <span>Your Rewards</span> for every transaction with any credit card</h1>

                  <p class="hero__dsc">Supercharge your credit card with RewardsX and earn $1000+ a year - absolutely free !!.</p>
                  <a class="hero__btn btn-primary" href="{{ url('/registration') }}">Join Waitlist Now</a>
              </div>

              <div class="hero__highlight">
                  <div class="hero__hightlight__inner"><span>3X </span>

                      <h2 class="hero__vtcl-text"><span>Cash Back</span> <span>Fuel Points</span> <span>Travel Points</span> <span>Air Mile points</span> <span>Bonus Points</span></h2>
                  </div>
              </div>
          </div>
      </section>
      <!-- Backed Experties -->

      <section class="alliances-wrap">
          <div class="container">
              <div class="backed-experties__header" style="margin-bottom: 0;">
                  <h5 class="section-subtitle backed-experties__subtitle">Over 1200+ Credit cards &amp; loyalty program supported</h5>
              </div>

              <div class="alliances alliances-slider">
                  <div class="alliances__item"><img alt="" src="imgs/Frame1.1.png" /></div>

                  <div class="alliances__item"><img alt="" src="imgs/Frame2.1.png" /></div>

                  <div class="alliances__item"><img alt="" src="imgs/Frame3.1.png" /></div>

                  <div class="alliances__item"><img alt="" src="imgs/Frame4.1.png" /></div>

                  <div class="alliances__item"><img alt="" src="imgs/Frame5.1.png" /></div>

                  <div class="alliances__item"><img alt="" src="imgs/Frame6.1.png" /></div>

                  <div class="alliances__item"><img alt="" src="imgs/Frame7.1.png" /></div>

                  <div class="alliances__item"><img alt="" src="imgs/Frame8.1.png" /></div>

                  <div class="alliances__item"><img alt="" src="imgs/Frame1.1.png" /></div>

                  <div class="alliances__item"><img alt="" src="imgs/Frame2.1.png" /></div>

                  <div class="alliances__item"><img alt="" src="imgs/Frame3.1.png" /></div>

                  <div class="alliances__item"><img alt="" src="imgs/Frame4.1.png" /></div>

                  <div class="alliances__item"><img alt="" src="imgs/Frame5.1.png" /></div>

                  <div class="alliances__item"><img alt="" src="imgs/Frame6.1.png" /></div>

                  <div class="alliances__item"><img alt="" src="imgs/Frame7.1.png" /></div>

                  <div class="alliances__item"><img alt="" src="imgs/Frame8.1.png" /></div>
              </div>
          </div>
      </section>
      <!-- Procedure -->

      <section class="backed-experties">
          <div class="container">
              <div class="backed-experties__header">
                  <h5 class="section-subtitle backed-experties__subtitle">We are Proudly</h5>

                  <h2 class="backed-experties__title section-title">Backed by Experts</h2>
              </div>

              <div class="backed-experties__body flex-ctr-spb">
                  <div class="backed-experties__item"><img alt="" src="imgs/img1.webp" /></div>

                  <div class="backed-experties__item"><img alt="" src="imgs/img2.webp" /></div>

                  <div class="backed-experties__item"><img alt="" src="imgs/img3.webp" /></div>
              </div>
          </div>
      </section>
      <!-- Alliances -->

      <section class="alliances-wrap">
          <div class="container">
              <h3 class="alliances-label section-subtitle">Our Partner Network includes 100+ businesses</h3>

              <div class="alliances alliances-slider">
                  <div class="alliances__item"><img alt="" src="imgs/alliance-item1.png" /></div>

                  <div class="alliances__item"><img alt="" src="imgs/alliance-item2.png" /></div>

                  <div class="alliances__item"><img alt="" src="imgs/alliance-item1.png" /></div>

                  <div class="alliances__item"><img alt="" src="imgs/alliance-item3.png" /></div>

                  <div class="alliances__item"><img alt="" src="imgs/alliance-item4.png" /></div>

                  <div class="alliances__item"><img alt="" src="imgs/alliance-item5.png" /></div>

                  <div class="alliances__item"><img alt="" src="imgs/alliance-item6.png" /></div>

                  <div class="alliances__item"><img alt="" src="imgs/alliance-item1.png" /></div>

                  <div class="alliances__item"><img alt="" src="imgs/alliance-item2.png" /></div>

                  <div class="alliances__item"><img alt="" src="imgs/alliance-item1.png" /></div>

                  <div class="alliances__item"><img alt="" src="imgs/alliance-item3.png" /></div>

                  <div class="alliances__item"><img alt="" src="imgs/alliance-item4.png" /></div>

                  <div class="alliances__item"><img alt="" src="imgs/alliance-item5.png" /></div>

                  <div class="alliances__item"><img alt="" src="imgs/alliance-item6.png" /></div>
              </div>
          </div>
      </section>
      <!-- Procedure -->

      <section class="procedure">
          <div class="container">
              <div class="procedure__header">
                  <h4 class="procedure__subtitle section-subtitle">Let&rsquo;s See</h4>

                  <h2 class="procedure__title section-title">How It Works?</h2>
              </div>

              <div class="procedure__body flex-auto-spb">
                  <div class="procedure__icon icon-1"><img alt="" src="imgs/procedure-fancy-icon.webp" /></div>

                  <div class="procedure__icon icon-2"><img alt="" src="imgs/procedure-fancy-icon.webp" /></div>

                  <div class="procedure__card card card1 card-style01 gradient-bg">
                      <div class="gradient-animated-border"></div>

                      <div class="card__icon"><svg fill="none" height="80" viewbox="0 0 80 80" width="80" xmlns="http://www.w3.org/2000/svg">
                              <rect fill="#96FB4A" height="80" rx="16" width="80"></rect>
                              <path d="M31.5714 20H27.2857C26.1491 20 25.059 20.4515 24.2553 21.2553C23.4515 22.059 23 23.1491 23 24.2857V55.7143C23 56.8509 23.4515 57.941 24.2553 58.7447C25.059 59.5485 26.1491 60 27.2857 60H41.5714C42.7081 60 43.7982 59.5485 44.6019 58.7447C45.4056 57.941 45.8571 56.8509 45.8571 55.7143V24.2857C45.8571 23.1491 45.4056 22.059 44.6019 21.2553C43.7982 20.4515 42.7081 20 41.5714 20H37.2857M31.5714 20V22.8571H37.2857V20M31.5714 20H37.2857M31.5714 55.7143H37.2857" stroke="#021303" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"></path>
                              <path d="M34.4287 37.6891H57.3699H34.4287ZM34.4287 38.5715H57.3699H34.4287ZM37.9581 44.7479H45.0169H37.9581ZM37.9581 47.395H41.4875H37.9581ZM37.0758 50.9244H54.7228C55.4249 50.9244 56.0982 50.6455 56.5946 50.1491C57.091 49.6527 57.3699 48.9794 57.3699 48.2773V35.9244C57.3699 35.2224 57.091 34.5491 56.5946 34.0526C56.0982 33.5562 55.4249 33.2773 54.7228 33.2773H37.0758C36.3737 33.2773 35.7004 33.5562 35.204 34.0526C34.7076 34.5491 34.4287 35.2224 34.4287 35.9244V48.2773C34.4287 48.9794 34.7076 49.6527 35.204 50.1491C35.7004 50.6455 36.3737 50.9244 37.0758 50.9244Z" fill="#96FB4A"></path>
                              <path d="M34.4287 37.6891H57.3699M34.4287 38.5715H57.3699M37.9581 44.7479H45.0169M37.9581 47.395H41.4875M37.0758 50.9244H54.7228C55.4249 50.9244 56.0982 50.6455 56.5946 50.1491C57.091 49.6527 57.3699 48.9794 57.3699 48.2773V35.9244C57.3699 35.2224 57.091 34.5491 56.5946 34.0526C56.0982 33.5562 55.4249 33.2773 54.7228 33.2773H37.0758C36.3737 33.2773 35.7004 33.5562 35.204 34.0526C34.7076 34.5491 34.4287 35.2224 34.4287 35.9244V48.2773C34.4287 48.9794 34.7076 49.6527 35.204 50.1491C35.7004 50.6455 36.3737 50.9244 37.0758 50.9244Z" stroke="#021303" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"></path>
                          </svg></div>

                      <h3 class="card__title">Step 1: Select your card</h3>

                      <p class="card__dsc">Start by selecting the credit cards that you own already.</p>
                  </div>

                  <div class="procedure__card card card2 card-style01 gradient-bg">
                      <div class="gradient-animated-border"></div>

                      <div class="card__icon"><svg fill="none" height="80" viewbox="0 0 80 80" width="80" xmlns="http://www.w3.org/2000/svg">
                              <rect fill="#96FB4A" height="80" rx="16" width="80"></rect>
                              <g clip-path="url(#clip0_37_10553)">
                                  <path d="M34.9999 51.25C34.9999 50.9185 35.1316 50.6005 35.366 50.3661C35.6004 50.1317 35.9184 50 36.2499 50H43.7499C44.0814 50 44.3994 50.1317 44.6338 50.3661C44.8682 50.6005 44.9999 50.9185 44.9999 51.25C44.9999 51.5815 44.8682 51.8995 44.6338 52.1339C44.3994 52.3683 44.0814 52.5 43.7499 52.5H36.2499C35.9184 52.5 35.6004 52.3683 35.366 52.1339C35.1316 51.8995 34.9999 51.5815 34.9999 51.25ZM27.4999 40.155C27.4999 36.9 30.5874 34.4125 33.8249 34.715C37.9327 35.0984 42.0672 35.0984 46.1749 34.715C49.4124 34.4125 52.4999 36.9 52.4999 40.155V43.0475C52.5101 43.6006 52.3234 44.1394 51.9731 44.5676C51.6227 44.9958 51.1316 45.2855 50.5874 45.385C48.4749 45.7525 44.7374 46.25 39.9999 46.25C35.2624 46.25 31.5249 45.75 29.4124 45.385C28.8682 45.2855 28.3771 44.9958 28.0268 44.5676C27.6764 44.1394 27.4897 43.6006 27.4999 43.0475V40.155ZM38.8549 38.0875C38.7575 38.0709 38.6575 38.0777 38.5632 38.1072C38.4689 38.1368 38.383 38.1883 38.3124 38.2575L36.0124 40.5075C34.448 40.4142 32.8877 40.2616 31.3349 40.05C31.174 40.034 31.0131 40.081 30.8862 40.1811C30.7592 40.2812 30.6759 40.4267 30.6539 40.5869C30.6319 40.7471 30.6729 40.9096 30.7681 41.0402C30.8634 41.1709 31.0056 41.2595 31.1649 41.2875C32.5399 41.4775 34.2449 41.66 36.2149 41.77C36.3017 41.7749 36.3885 41.7616 36.4699 41.7311C36.5512 41.7005 36.6253 41.6533 36.6874 41.5925L38.5724 39.7525L40.6899 44.0275C40.7345 44.1172 40.8 44.1948 40.8809 44.2539C40.9618 44.313 41.0557 44.3517 41.1547 44.3669C41.2537 44.3821 41.3549 44.3733 41.4498 44.3412C41.5447 44.3091 41.6305 44.2547 41.6999 44.1825L44.0299 41.7575C45.637 41.6621 47.2398 41.5053 48.8349 41.2875C48.9942 41.2595 49.1364 41.1709 49.2317 41.0402C49.327 40.9096 49.3679 40.7471 49.3459 40.5869C49.3239 40.4267 49.2406 40.2812 49.1137 40.1811C48.9867 40.081 48.8258 40.034 48.6649 40.05C47.3199 40.235 45.6474 40.4125 43.7149 40.5225C43.5576 40.5312 43.4093 40.5991 43.2999 40.7125L41.4149 42.675L39.3099 38.425C39.266 38.3369 39.2019 38.2604 39.1228 38.2017C39.0438 38.1431 38.952 38.1039 38.8549 38.0875Z" fill="#021303"></path>
                                  <path d="M41.25 24.6651C41.7266 24.3899 42.0991 23.9652 42.3097 23.4567C42.5203 22.9483 42.5573 22.3845 42.4148 21.853C42.2724 21.3214 41.9585 20.8516 41.5219 20.5166C41.0853 20.1816 40.5503 20 40 20C39.4497 20 38.9147 20.1816 38.4781 20.5166C38.0415 20.8516 37.7276 21.3214 37.5852 21.853C37.4427 22.3845 37.4797 22.9483 37.6903 23.4567C37.9009 23.9652 38.2734 24.3899 38.75 24.6651V27.5001H33.75C30.7663 27.5001 27.9048 28.6853 25.795 30.7951C23.6853 32.9049 22.5 35.7664 22.5 38.7501V40.0001C21.837 40.0001 21.2011 40.2635 20.7322 40.7323C20.2634 41.2011 20 41.837 20 42.5001V47.5001C20 48.1631 20.2634 48.799 20.7322 49.2678C21.2011 49.7367 21.837 50.0001 22.5 50.0001V52.5001C22.5 53.8261 23.0268 55.0979 23.9645 56.0356C24.9021 56.9733 26.1739 57.5001 27.5 57.5001H52.5C53.8261 57.5001 55.0979 56.9733 56.0355 56.0356C56.9732 55.0979 57.5 53.8261 57.5 52.5001V50.0001C58.163 50.0001 58.7989 49.7367 59.2678 49.2678C59.7366 48.799 60 48.1631 60 47.5001V42.5001C60 41.837 59.7366 41.2011 59.2678 40.7323C58.7989 40.2635 58.163 40.0001 57.5 40.0001V38.7501C57.5 35.7664 56.3147 32.9049 54.2049 30.7951C52.0952 28.6853 49.2337 27.5001 46.25 27.5001H41.25V24.6651ZM55 38.7501V52.5001C55 53.1631 54.7366 53.799 54.2678 54.2678C53.7989 54.7367 53.163 55.0001 52.5 55.0001H27.5C26.837 55.0001 26.2011 54.7367 25.7322 54.2678C25.2634 53.799 25 53.1631 25 52.5001V38.7501C25 36.4294 25.9219 34.2038 27.5628 32.5629C29.2038 30.9219 31.4294 30.0001 33.75 30.0001H46.25C48.5706 30.0001 50.7962 30.9219 52.4372 32.5629C54.0781 34.2038 55 36.4294 55 38.7501Z" fill="#021303"></path>
                              </g>
                              <defs>
                                  <clippath id="clip0_37_10553">
                                      <rect fill="white" height="40" transform="translate(20 20)" width="40"></rect>
                                  </clippath>
                              </defs>
                          </svg></div>

                      <h3 class="card__title">Step 2: Unlock super-power</h3>

                      <p class="card__dsc">Everytime you are about to make a transaction in-store - the app suggests you the right credit card.</p>
                  </div>

                  <div class="procedure__card card card3 card-style01 gradient-bg">
                      <div class="gradient-animated-border"></div>

                      <div class="card__icon"><svg fill="none" height="80" viewbox="0 0 80 80" width="80" xmlns="http://www.w3.org/2000/svg">
                              <rect fill="#96FB4A" height="80" rx="16" width="80"></rect>
                              <g clip-path="url(#clip0_37_10553)">
                                  <path d="M34.9999 51.25C34.9999 50.9185 35.1316 50.6005 35.366 50.3661C35.6004 50.1317 35.9184 50 36.2499 50H43.7499C44.0814 50 44.3994 50.1317 44.6338 50.3661C44.8682 50.6005 44.9999 50.9185 44.9999 51.25C44.9999 51.5815 44.8682 51.8995 44.6338 52.1339C44.3994 52.3683 44.0814 52.5 43.7499 52.5H36.2499C35.9184 52.5 35.6004 52.3683 35.366 52.1339C35.1316 51.8995 34.9999 51.5815 34.9999 51.25ZM27.4999 40.155C27.4999 36.9 30.5874 34.4125 33.8249 34.715C37.9327 35.0984 42.0672 35.0984 46.1749 34.715C49.4124 34.4125 52.4999 36.9 52.4999 40.155V43.0475C52.5101 43.6006 52.3234 44.1394 51.9731 44.5676C51.6227 44.9958 51.1316 45.2855 50.5874 45.385C48.4749 45.7525 44.7374 46.25 39.9999 46.25C35.2624 46.25 31.5249 45.75 29.4124 45.385C28.8682 45.2855 28.3771 44.9958 28.0268 44.5676C27.6764 44.1394 27.4897 43.6006 27.4999 43.0475V40.155ZM38.8549 38.0875C38.7575 38.0709 38.6575 38.0777 38.5632 38.1072C38.4689 38.1368 38.383 38.1883 38.3124 38.2575L36.0124 40.5075C34.448 40.4142 32.8877 40.2616 31.3349 40.05C31.174 40.034 31.0131 40.081 30.8862 40.1811C30.7592 40.2812 30.6759 40.4267 30.6539 40.5869C30.6319 40.7471 30.6729 40.9096 30.7681 41.0402C30.8634 41.1709 31.0056 41.2595 31.1649 41.2875C32.5399 41.4775 34.2449 41.66 36.2149 41.77C36.3017 41.7749 36.3885 41.7616 36.4699 41.7311C36.5512 41.7005 36.6253 41.6533 36.6874 41.5925L38.5724 39.7525L40.6899 44.0275C40.7345 44.1172 40.8 44.1948 40.8809 44.2539C40.9618 44.313 41.0557 44.3517 41.1547 44.3669C41.2537 44.3821 41.3549 44.3733 41.4498 44.3412C41.5447 44.3091 41.6305 44.2547 41.6999 44.1825L44.0299 41.7575C45.637 41.6621 47.2398 41.5053 48.8349 41.2875C48.9942 41.2595 49.1364 41.1709 49.2317 41.0402C49.327 40.9096 49.3679 40.7471 49.3459 40.5869C49.3239 40.4267 49.2406 40.2812 49.1137 40.1811C48.9867 40.081 48.8258 40.034 48.6649 40.05C47.3199 40.235 45.6474 40.4125 43.7149 40.5225C43.5576 40.5312 43.4093 40.5991 43.2999 40.7125L41.4149 42.675L39.3099 38.425C39.266 38.3369 39.2019 38.2604 39.1228 38.2017C39.0438 38.1431 38.952 38.1039 38.8549 38.0875Z" fill="#021303"></path>
                                  <path d="M41.25 24.6651C41.7266 24.3899 42.0991 23.9652 42.3097 23.4567C42.5203 22.9483 42.5573 22.3845 42.4148 21.853C42.2724 21.3214 41.9585 20.8516 41.5219 20.5166C41.0853 20.1816 40.5503 20 40 20C39.4497 20 38.9147 20.1816 38.4781 20.5166C38.0415 20.8516 37.7276 21.3214 37.5852 21.853C37.4427 22.3845 37.4797 22.9483 37.6903 23.4567C37.9009 23.9652 38.2734 24.3899 38.75 24.6651V27.5001H33.75C30.7663 27.5001 27.9048 28.6853 25.795 30.7951C23.6853 32.9049 22.5 35.7664 22.5 38.7501V40.0001C21.837 40.0001 21.2011 40.2635 20.7322 40.7323C20.2634 41.2011 20 41.837 20 42.5001V47.5001C20 48.1631 20.2634 48.799 20.7322 49.2678C21.2011 49.7367 21.837 50.0001 22.5 50.0001V52.5001C22.5 53.8261 23.0268 55.0979 23.9645 56.0356C24.9021 56.9733 26.1739 57.5001 27.5 57.5001H52.5C53.8261 57.5001 55.0979 56.9733 56.0355 56.0356C56.9732 55.0979 57.5 53.8261 57.5 52.5001V50.0001C58.163 50.0001 58.7989 49.7367 59.2678 49.2678C59.7366 48.799 60 48.1631 60 47.5001V42.5001C60 41.837 59.7366 41.2011 59.2678 40.7323C58.7989 40.2635 58.163 40.0001 57.5 40.0001V38.7501C57.5 35.7664 56.3147 32.9049 54.2049 30.7951C52.0952 28.6853 49.2337 27.5001 46.25 27.5001H41.25V24.6651ZM55 38.7501V52.5001C55 53.1631 54.7366 53.799 54.2678 54.2678C53.7989 54.7367 53.163 55.0001 52.5 55.0001H27.5C26.837 55.0001 26.2011 54.7367 25.7322 54.2678C25.2634 53.799 25 53.1631 25 52.5001V38.7501C25 36.4294 25.9219 34.2038 27.5628 32.5629C29.2038 30.9219 31.4294 30.0001 33.75 30.0001H46.25C48.5706 30.0001 50.7962 30.9219 52.4372 32.5629C54.0781 34.2038 55 36.4294 55 38.7501Z" fill="#021303"></path>
                              </g>
                              <defs>
                                  <clippath id="clip0_37_10553">
                                      <rect fill="white" height="40" transform="translate(20 20)" width="40"></rect>
                                  </clippath>
                              </defs>
                          </svg></div>

                      <h3 class="card__title">Step 3: Track your benefits</h3>

                      <p class="card__dsc">All your benefits are tracked in one place.</p>
                  </div>
              </div>
          </div>
      </section>
      <!-- Advantage -->

      <section class="advantage">
          <div class="advantage__icon"><svg fill="none" height="408" viewbox="0 0 387 408" width="387" xmlns="http://www.w3.org/2000/svg">
                  <g clip-path="url(#clip0_35_6393)" opacity="0.3">
                      <mask height="544" id="mask0_35_6393" maskunits="userSpaceOnUse" style="mask-type: alpha" width="762" x="69" y="178">
                          <path clip-rule="evenodd" d="M341.717 614.595V722C191.496 722 69.7175 600.221 69.7175 450C69.7175 299.779 191.496 178 341.717 178C430.078 178 508.598 220.133 558.283 285.405V178C708.504 178 830.283 299.779 830.283 450C830.283 600.221 708.504 722 558.283 722C469.922 722 391.402 679.867 341.717 614.595ZM180.587 450C180.587 361.01 252.728 288.87 341.717 288.87C430.707 288.87 502.848 361.01 502.848 450H613.717C613.717 389.702 594.097 333.987 560.892 288.89C648.678 290.284 719.413 361.881 719.413 450C719.413 538.99 647.273 611.13 558.283 611.13C469.293 611.13 397.152 538.99 397.152 450H286.283C286.283 510.298 305.903 566.013 339.108 611.11C251.322 609.716 180.587 538.118 180.587 450Z" fill="url(#paint0_linear_35_6393)" fill-rule="evenodd"></path>
                      </mask>
                      <g mask="url(#mask0_35_6393)">
                          <g filter="url(#filter0_ii_35_6393)">
                              <path clip-rule="evenodd" d="M180.587 450C180.587 361.01 252.728 288.87 341.717 288.87C430.707 288.87 502.848 361.01 502.848 450H613.717C613.717 389.702 594.097 333.987 560.892 288.89C648.678 290.284 719.413 361.881 719.413 450C719.413 538.99 647.273 611.13 558.283 611.13C469.293 611.13 397.152 538.99 397.152 450H286.283C286.283 510.298 305.903 566.013 339.108 611.11C251.322 609.716 180.587 538.118 180.587 450ZM341.717 614.595V722C191.496 722 69.7175 600.221 69.7175 450C69.7175 299.779 191.496 178 341.717 178C430.078 178 508.598 220.133 558.283 285.405V178C708.504 178 830.283 299.779 830.283 450C830.283 600.221 708.504 722 558.283 722C469.922 722 391.402 679.867 341.717 614.595Z" fill="url(#paint1_radial_35_6393)" fill-rule="evenodd"></path>
                              <path clip-rule="evenodd" d="M180.587 450C180.587 361.01 252.728 288.87 341.717 288.87C430.707 288.87 502.848 361.01 502.848 450H613.717C613.717 389.702 594.097 333.987 560.892 288.89C648.678 290.284 719.413 361.881 719.413 450C719.413 538.99 647.273 611.13 558.283 611.13C469.293 611.13 397.152 538.99 397.152 450H286.283C286.283 510.298 305.903 566.013 339.108 611.11C251.322 609.716 180.587 538.118 180.587 450ZM341.717 614.595V722C191.496 722 69.7175 600.221 69.7175 450C69.7175 299.779 191.496 178 341.717 178C430.078 178 508.598 220.133 558.283 285.405V178C708.504 178 830.283 299.779 830.283 450C830.283 600.221 708.504 722 558.283 722C469.922 722 391.402 679.867 341.717 614.595Z" fill="#1F2E7E" fill-opacity="0.2" fill-rule="evenodd"></path>
                          </g>
                      </g>
                  </g>
                  <defs>
                      <filter color-interpolation-filters="sRGB" filterunits="userSpaceOnUse" height="574.9" id="filter0_ii_35_6393" width="803.574" x="52.0605" y="178">
                          <feflood flood-opacity="0" result="BackgroundImageFix"></feflood>
                          <feblend in="SourceGraphic" in2="BackgroundImageFix" mode="normal" result="shape"></feblend>
                          <fecolormatrix in="SourceAlpha" result="hardAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"></fecolormatrix>
                          <feoffset dx="-17.657" dy="30.8998"></feoffset>
                          <fegaussianblur stddeviation="37.5212"></fegaussianblur>
                          <fecomposite in2="hardAlpha" k2="-1" k3="1" operator="arithmetic"></fecomposite>
                          <fecolormatrix type="matrix" values="0 0 0 0 1 0 0 0 0 1 0 0 0 0 1 0 0 0 0.87 0"></fecolormatrix>
                          <feblend in2="shape" mode="lighten" result="effect1_innerShadow_35_6393"></feblend>
                          <fecolormatrix in="SourceAlpha" result="hardAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"></fecolormatrix>
                          <feoffset dx="25.3522" dy="14.7888"></feoffset>
                          <fegaussianblur stddeviation="14.7888"></fegaussianblur>
                          <fecomposite in2="hardAlpha" k2="-1" k3="1" operator="arithmetic"></fecomposite>
                          <fecolormatrix type="matrix" values="0 0 0 0 0.168627 0 0 0 0 0.180392 0 0 0 0 0.239216 0 0 0 0.9 0"> </fecolormatrix>
                          <feblend in2="effect1_innerShadow_35_6393" mode="multiply" result="effect2_innerShadow_35_6393"></feblend>
                      </filter>
                      <lineargradient gradientunits="userSpaceOnUse" id="paint0_linear_35_6393" x1="154" x2="751.27" y1="622" y2="309.611">
                          <stop offset="0.132716" stop-opacity="0"></stop>
                          <stop offset="1"></stop>
                      </lineargradient>
                      <radialgradient cx="0" cy="0" gradienttransform="translate(254.067 133.601) rotate(87.2124) scale(193.986 504.314)" gradientunits="userSpaceOnUse" id="paint1_radial_35_6393" r="1">
                          <stop stop-color="#949494"></stop>
                          <stop offset="0.635171" stop-color="#181818"></stop>
                          <stop offset="1" stop-color="#1D1D1D"></stop>
                      </radialgradient>
                      <clippath id="clip0_35_6393">
                          <rect fill="white" height="408" width="529"></rect>
                      </clippath>
                  </defs>
              </svg></div>

          <div class="container">
              <h2 class="advantage__title section-title">The 3X Rewards Advantage</h2>

              <div class="advantage__table-wrap">
                  <table class="advantage__table">
                      <thead>
                          <tr>
                              <th>Name of Feature</th>
                              <th>RewardsX</th>
                              <th>Others</th>
                          </tr>
                      </thead>
                      <tbody>
                          <tr>
                              <td><span class="icon"><svg fill="none" height="24" viewbox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                                          <g clip-path="url(#clip0_14_9804)">
                                              <path d="M12 21.5C8.96 21.5 6.048 20.786 3.5 19.517L12 3L20.5 19.517C17.8578 20.8255 14.9485 21.5043 12 21.5V21.5Z" stroke="#96FB4A" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path>
                                              <path d="M5.37988 15.866C7.48986 16.9433 9.82579 17.5033 12.1949 17.5C14.4459 17.503 16.6686 16.9974 18.6969 16.021" stroke="#96FB4A" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path>
                                              <path d="M13 11.01V11" stroke="#96FB4A" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path>
                                              <path d="M11 14V13.99" stroke="#96FB4A" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path>
                                          </g>
                                          <defs>
                                              <clippath id="clip0_14_9804">
                                                  <rect fill="white" height="24" width="24"></rect>
                                              </clippath>
                                          </defs>
                                      </svg> </span>3X Rewards</td>
                              <td>
                                  <p class="checked flex-ctr"><span class="icon"><svg fill="none" height="30" viewbox="0 0 30 30" width="30" xmlns="http://www.w3.org/2000/svg">
                                              <path clip-rule="evenodd" d="M15 30C23.2843 30 30 23.2843 30 15C30 6.71573 23.2843 0 15 0C6.71573 0 0 6.71573 0 15C0 23.2843 6.71573 30 15 30ZM24.9496 11.3132C25.9259 10.3369 25.9259 8.754 24.9496 7.77769C23.9733 6.80138 22.3904 6.80138 21.4141 7.77769L11.9318 17.2599L8.58595 13.9141C7.60964 12.9377 6.02673 12.9377 5.05042 13.9141C4.0741 14.8904 4.0741 16.4733 5.05042 17.4496L10.1641 22.5632C11.1404 23.5395 12.7233 23.5395 13.6996 22.5632L24.9496 11.3132Z" fill="#3EC775" fill-rule="evenodd"></path>
                                          </svg> </span> Have This Feature</p>
                              </td>
                              <td>
                                  <p class="unchecked flex-ctr"><span class="icon"><svg fill="none" height="30" viewbox="0 0 30 30" width="30" xmlns="http://www.w3.org/2000/svg">
                                              <path clip-rule="evenodd" d="M15 30C23.2843 30 30 23.2843 30 15C30 6.71573 23.2843 0 15 0C6.71573 0 0 6.71573 0 15C0 23.2843 6.71573 30 15 30ZM10.6314 7.09587C9.65509 6.11956 8.07218 6.11956 7.09587 7.09587C6.11956 8.07218 6.11956 9.65509 7.09587 10.6314L11.4645 15L7.09587 19.3686C6.11956 20.3449 6.11956 21.9278 7.09587 22.9041C8.07218 23.8804 9.65509 23.8804 10.6314 22.9041L15 18.5355L19.3686 22.9041C20.3449 23.8804 21.9278 23.8804 22.9041 22.9041C23.8804 21.9278 23.8804 20.3449 22.9041 19.3686L18.5355 15L22.9041 10.6314C23.8804 9.65509 23.8804 8.07218 22.9041 7.09587C21.9278 6.11956 20.3449 6.11956 19.3686 7.09587L15 11.4645L10.6314 7.09587Z" fill="#EB5353" fill-rule="evenodd"></path>
                                          </svg> </span> Don&rsquo;t Have This Feature</p>
                              </td>
                          </tr>
                          <tr>
                              <td><span class="icon"><svg fill="none" height="19" viewbox="0 0 22 19" width="22" xmlns="http://www.w3.org/2000/svg">
                                          <path d="M1.25 15.75C6.58561 15.7457 11.898 16.4522 17.047 17.851C17.774 18.049 18.5 17.509 18.5 16.755V15.75M2.75 1.5V2.25C2.75 2.44891 2.67098 2.63968 2.53033 2.78033C2.38968 2.92098 2.19891 3 2 3H1.25M1.25 3V2.625C1.25 2.004 1.754 1.5 2.375 1.5H19.25M1.25 3V12M19.25 1.5V2.25C19.25 2.664 19.586 3 20 3H20.75M19.25 1.5H19.625C20.246 1.5 20.75 2.004 20.75 2.625V12.375C20.75 12.996 20.246 13.5 19.625 13.5H19.25M1.25 12V12.375C1.25 12.6734 1.36853 12.9595 1.5795 13.1705C1.79048 13.3815 2.07663 13.5 2.375 13.5H2.75M1.25 12H2C2.19891 12 2.38968 12.079 2.53033 12.2197C2.67098 12.3603 2.75 12.5511 2.75 12.75V13.5M19.25 13.5V12.75C19.25 12.5511 19.329 12.3603 19.4697 12.2197C19.6103 12.079 19.8011 12 20 12H20.75M19.25 13.5H2.75M14 7.5C14 8.29565 13.6839 9.05871 13.1213 9.62132C12.5587 10.1839 11.7956 10.5 11 10.5C10.2044 10.5 9.44129 10.1839 8.87868 9.62132C8.31607 9.05871 8 8.29565 8 7.5C8 6.70435 8.31607 5.94129 8.87868 5.37868C9.44129 4.81607 10.2044 4.5 11 4.5C11.7956 4.5 12.5587 4.81607 13.1213 5.37868C13.6839 5.94129 14 6.70435 14 7.5ZM17 7.5H17.008V7.508H17V7.5ZM5 7.5H5.008V7.508H5V7.5Z" stroke="#96FB4A" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"></path>
                                      </svg> </span>Cashback Booster</td>
                              <td>
                                  <p class="checked flex-ctr"><span class="icon"><svg fill="none" height="20" viewbox="0 0 20 20" width="20" xmlns="http://www.w3.org/2000/svg">
                                              <path d="M10 1C12.755 1 15.455 1.232 18.083 1.678C18.616 1.768 19 2.234 19 2.774V3.818C19 4.11348 18.9418 4.40606 18.8287 4.67904C18.7157 4.95203 18.5499 5.20007 18.341 5.409L12.909 10.841C12.7001 11.0499 12.5343 11.298 12.4213 11.571C12.3082 11.8439 12.25 12.1365 12.25 12.432V15.359C12.2501 15.777 12.1337 16.1867 11.914 16.5423C11.6943 16.8978 11.3799 17.1851 11.006 17.372L7.75 19V12.432C7.75 12.1365 7.69181 11.8439 7.57874 11.571C7.46566 11.298 7.29993 11.0499 7.091 10.841L1.659 5.409C1.45007 5.20007 1.28434 4.95203 1.17126 4.67904C1.05819 4.40606 0.999997 4.11348 1 3.818V2.774C1 2.234 1.384 1.768 1.917 1.678C4.58757 1.22586 7.29143 0.999058 10 1Z" stroke="#96FB4A" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"></path>
                                          </svg> </span> Have This Feature</p>
                              </td>
                              <td>
                                  <p class="checked flex-ctr"><span class="icon"><svg fill="none" height="30" viewbox="0 0 30 30" width="30" xmlns="http://www.w3.org/2000/svg">
                                              <path clip-rule="evenodd" d="M15 30C23.2843 30 30 23.2843 30 15C30 6.71573 23.2843 0 15 0C6.71573 0 0 6.71573 0 15C0 23.2843 6.71573 30 15 30ZM24.9496 11.3132C25.9259 10.3369 25.9259 8.754 24.9496 7.77769C23.9733 6.80138 22.3904 6.80138 21.4141 7.77769L11.9318 17.2599L8.58595 13.9141C7.60964 12.9377 6.02673 12.9377 5.05042 13.9141C4.0741 14.8904 4.0741 16.4733 5.05042 17.4496L10.1641 22.5632C11.1404 23.5395 12.7233 23.5395 13.6996 22.5632L24.9496 11.3132Z" fill="#3EC775" fill-rule="evenodd"></path>
                                          </svg> </span> Have This Feature</p>
                              </td>
                          </tr>
                          <tr>
                              <td><span class="icon"><svg fill="none" height="20" viewbox="0 0 20 20" width="20" xmlns="http://www.w3.org/2000/svg">
                                          <path d="M10 1C12.755 1 15.455 1.232 18.083 1.678C18.616 1.768 19 2.234 19 2.774V3.818C19 4.11348 18.9418 4.40606 18.8287 4.67904C18.7157 4.95203 18.5499 5.20007 18.341 5.409L12.909 10.841C12.7001 11.0499 12.5343 11.298 12.4213 11.571C12.3082 11.8439 12.25 12.1365 12.25 12.432V15.359C12.2501 15.777 12.1337 16.1867 11.914 16.5423C11.6943 16.8978 11.3799 17.1851 11.006 17.372L7.75 19V12.432C7.75 12.1365 7.69181 11.8439 7.57874 11.571C7.46566 11.298 7.29993 11.0499 7.091 10.841L1.659 5.409C1.45007 5.20007 1.28434 4.95203 1.17126 4.67904C1.05819 4.40606 0.999997 4.11348 1 3.818V2.774C1 2.234 1.384 1.768 1.917 1.678C4.58757 1.22586 7.29143 0.999058 10 1Z" stroke="#96FB4A" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"></path>
                                      </svg> </span>Fuel Points Booster</td>
                              <td>
                                  <p class="checked flex-ctr"><span class="icon"><svg fill="none" height="30" viewbox="0 0 30 30" width="30" xmlns="http://www.w3.org/2000/svg">
                                              <path clip-rule="evenodd" d="M15 30C23.2843 30 30 23.2843 30 15C30 6.71573 23.2843 0 15 0C6.71573 0 0 6.71573 0 15C0 23.2843 6.71573 30 15 30ZM24.9496 11.3132C25.9259 10.3369 25.9259 8.754 24.9496 7.77769C23.9733 6.80138 22.3904 6.80138 21.4141 7.77769L11.9318 17.2599L8.58595 13.9141C7.60964 12.9377 6.02673 12.9377 5.05042 13.9141C4.0741 14.8904 4.0741 16.4733 5.05042 17.4496L10.1641 22.5632C11.1404 23.5395 12.7233 23.5395 13.6996 22.5632L24.9496 11.3132Z" fill="#3EC775" fill-rule="evenodd"></path>
                                          </svg> </span> Have This Feature</p>
                              </td>
                              <td>
                                  <p class="unchecked flex-ctr"><span class="icon"><svg fill="none" height="30" viewbox="0 0 30 30" width="30" xmlns="http://www.w3.org/2000/svg">
                                              <path clip-rule="evenodd" d="M15 30C23.2843 30 30 23.2843 30 15C30 6.71573 23.2843 0 15 0C6.71573 0 0 6.71573 0 15C0 23.2843 6.71573 30 15 30ZM10.6314 7.09587C9.65509 6.11956 8.07218 6.11956 7.09587 7.09587C6.11956 8.07218 6.11956 9.65509 7.09587 10.6314L11.4645 15L7.09587 19.3686C6.11956 20.3449 6.11956 21.9278 7.09587 22.9041C8.07218 23.8804 9.65509 23.8804 10.6314 22.9041L15 18.5355L19.3686 22.9041C20.3449 23.8804 21.9278 23.8804 22.9041 22.9041C23.8804 21.9278 23.8804 20.3449 22.9041 19.3686L18.5355 15L22.9041 10.6314C23.8804 9.65509 23.8804 8.07218 22.9041 7.09587C21.9278 6.11956 20.3449 6.11956 19.3686 7.09587L15 11.4645L10.6314 7.09587Z" fill="#EB5353" fill-rule="evenodd"></path>
                                          </svg> </span> Don&rsquo;t Have This Feature</p>
                              </td>
                          </tr>
                          <tr>
                              <td><span class="icon"><svg fill="none" height="18" viewbox="0 0 22 18" width="22" xmlns="http://www.w3.org/2000/svg">
                                          <path d="M1.25 5.25H20.75M1.25 6H20.75M4.25 11.25H10.25M4.25 13.5H7.25M3.5 16.5H18.5C19.0967 16.5 19.669 16.2629 20.091 15.841C20.5129 15.419 20.75 14.8467 20.75 14.25V3.75C20.75 3.15326 20.5129 2.58097 20.091 2.15901C19.669 1.73705 19.0967 1.5 18.5 1.5H3.5C2.90326 1.5 2.33097 1.73705 1.90901 2.15901C1.48705 2.58097 1.25 3.15326 1.25 3.75V14.25C1.25 14.8467 1.48705 15.419 1.90901 15.841C2.33097 16.2629 2.90326 16.5 3.5 16.5Z" stroke="#96FB4A" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"></path>
                                      </svg> </span>Best card Feature</td>
                              <td>
                                  <p class="checked flex-ctr"><span class="icon"><svg fill="none" height="30" viewbox="0 0 30 30" width="30" xmlns="http://www.w3.org/2000/svg">
                                              <path clip-rule="evenodd" d="M15 30C23.2843 30 30 23.2843 30 15C30 6.71573 23.2843 0 15 0C6.71573 0 0 6.71573 0 15C0 23.2843 6.71573 30 15 30ZM24.9496 11.3132C25.9259 10.3369 25.9259 8.754 24.9496 7.77769C23.9733 6.80138 22.3904 6.80138 21.4141 7.77769L11.9318 17.2599L8.58595 13.9141C7.60964 12.9377 6.02673 12.9377 5.05042 13.9141C4.0741 14.8904 4.0741 16.4733 5.05042 17.4496L10.1641 22.5632C11.1404 23.5395 12.7233 23.5395 13.6996 22.5632L24.9496 11.3132Z" fill="#3EC775" fill-rule="evenodd"></path>
                                          </svg> </span> Have This Feature</p>
                              </td>
                              <td>
                                  <p class="checked flex-ctr"><span class="icon"><svg fill="none" height="30" viewbox="0 0 30 30" width="30" xmlns="http://www.w3.org/2000/svg">
                                              <path clip-rule="evenodd" d="M15 30C23.2843 30 30 23.2843 30 15C30 6.71573 23.2843 0 15 0C6.71573 0 0 6.71573 0 15C0 23.2843 6.71573 30 15 30ZM24.9496 11.3132C25.9259 10.3369 25.9259 8.754 24.9496 7.77769C23.9733 6.80138 22.3904 6.80138 21.4141 7.77769L11.9318 17.2599L8.58595 13.9141C7.60964 12.9377 6.02673 12.9377 5.05042 13.9141C4.0741 14.8904 4.0741 16.4733 5.05042 17.4496L10.1641 22.5632C11.1404 23.5395 12.7233 23.5395 13.6996 22.5632L24.9496 11.3132Z" fill="#3EC775" fill-rule="evenodd"></path>
                                          </svg> </span> Have This Feature</p>
                              </td>
                          </tr>
                          <tr>
                              <td><span class="icon"><svg fill="none" height="22" viewbox="0 0 20 22" width="20" xmlns="http://www.w3.org/2000/svg">
                                          <path d="M9.412 14.655L7.75 20.75L11.495 16.738M7.257 12.5H1.75L4.409 9.651M6.457 7.457L12.25 1.25L10 9.5H18.25L13.543 14.543M6.457 7.457L1 2M6.457 7.457L13.543 14.543M13.543 14.543L19 20" stroke="#96FB4A" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"></path>
                                      </svg> </span>Off-line mode</td>
                              <td>
                                  <p class="checked flex-ctr"><span class="icon"><svg fill="none" height="30" viewbox="0 0 30 30" width="30" xmlns="http://www.w3.org/2000/svg">
                                              <path clip-rule="evenodd" d="M15 30C23.2843 30 30 23.2843 30 15C30 6.71573 23.2843 0 15 0C6.71573 0 0 6.71573 0 15C0 23.2843 6.71573 30 15 30ZM24.9496 11.3132C25.9259 10.3369 25.9259 8.754 24.9496 7.77769C23.9733 6.80138 22.3904 6.80138 21.4141 7.77769L11.9318 17.2599L8.58595 13.9141C7.60964 12.9377 6.02673 12.9377 5.05042 13.9141C4.0741 14.8904 4.0741 16.4733 5.05042 17.4496L10.1641 22.5632C11.1404 23.5395 12.7233 23.5395 13.6996 22.5632L24.9496 11.3132Z" fill="#3EC775" fill-rule="evenodd"></path>
                                          </svg> </span> Have This Feature</p>
                              </td>
                              <td>
                                  <p class="checked flex-ctr"><span class="icon"><svg fill="none" height="30" viewbox="0 0 30 30" width="30" xmlns="http://www.w3.org/2000/svg">
                                              <path clip-rule="evenodd" d="M15 30C23.2843 30 30 23.2843 30 15C30 6.71573 23.2843 0 15 0C6.71573 0 0 6.71573 0 15C0 23.2843 6.71573 30 15 30ZM24.9496 11.3132C25.9259 10.3369 25.9259 8.754 24.9496 7.77769C23.9733 6.80138 22.3904 6.80138 21.4141 7.77769L11.9318 17.2599L8.58595 13.9141C7.60964 12.9377 6.02673 12.9377 5.05042 13.9141C4.0741 14.8904 4.0741 16.4733 5.05042 17.4496L10.1641 22.5632C11.1404 23.5395 12.7233 23.5395 13.6996 22.5632L24.9496 11.3132Z" fill="#3EC775" fill-rule="evenodd"></path>
                                          </svg> </span> Have This Feature</p>
                              </td>
                          </tr>
                          <tr>
                              <td><span class="icon"><svg fill="none" height="20" viewbox="0 0 22 20" width="22" xmlns="http://www.w3.org/2000/svg">
                                          <path d="M1.25 19H20.75M2.75 1V19M13.25 1V19M19.25 5.5V19M5.75 4.75H6.5M5.75 7.75H6.5M5.75 10.75H6.5M9.5 4.75H10.25M9.5 7.75H10.25M9.5 10.75H10.25M5.75 19V15.625C5.75 15.004 6.254 14.5 6.875 14.5H9.125C9.746 14.5 10.25 15.004 10.25 15.625V19M2 1H14M13.25 5.5H20M16.25 9.25H16.258V9.258H16.25V9.25ZM16.25 12.25H16.258V12.258H16.25V12.25ZM16.25 15.25H16.258V15.258H16.25V15.25Z" stroke="#96FB4A" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"></path>
                                      </svg> </span>Others</td>
                              <td>
                                  <p class="checked flex-ctr"><span class="icon"><svg fill="none" height="30" viewbox="0 0 30 30" width="30" xmlns="http://www.w3.org/2000/svg">
                                              <path clip-rule="evenodd" d="M15 30C23.2843 30 30 23.2843 30 15C30 6.71573 23.2843 0 15 0C6.71573 0 0 6.71573 0 15C0 23.2843 6.71573 30 15 30ZM24.9496 11.3132C25.9259 10.3369 25.9259 8.754 24.9496 7.77769C23.9733 6.80138 22.3904 6.80138 21.4141 7.77769L11.9318 17.2599L8.58595 13.9141C7.60964 12.9377 6.02673 12.9377 5.05042 13.9141C4.0741 14.8904 4.0741 16.4733 5.05042 17.4496L10.1641 22.5632C11.1404 23.5395 12.7233 23.5395 13.6996 22.5632L24.9496 11.3132Z" fill="#3EC775" fill-rule="evenodd"></path>
                                          </svg> </span> Have This Feature</p>
                              </td>
                              <td>
                                  <p class="unchecked flex-ctr"><span class="icon"><svg fill="none" height="30" viewbox="0 0 30 30" width="30" xmlns="http://www.w3.org/2000/svg">
                                              <path clip-rule="evenodd" d="M15 30C23.2843 30 30 23.2843 30 15C30 6.71573 23.2843 0 15 0C6.71573 0 0 6.71573 0 15C0 23.2843 6.71573 30 15 30ZM10.6314 7.09587C9.65509 6.11956 8.07218 6.11956 7.09587 7.09587C6.11956 8.07218 6.11956 9.65509 7.09587 10.6314L11.4645 15L7.09587 19.3686C6.11956 20.3449 6.11956 21.9278 7.09587 22.9041C8.07218 23.8804 9.65509 23.8804 10.6314 22.9041L15 18.5355L19.3686 22.9041C20.3449 23.8804 21.9278 23.8804 22.9041 22.9041C23.8804 21.9278 23.8804 20.3449 22.9041 19.3686L18.5355 15L22.9041 10.6314C23.8804 9.65509 23.8804 8.07218 22.9041 7.09587C21.9278 6.11956 20.3449 6.11956 19.3686 7.09587L15 11.4645L10.6314 7.09587Z" fill="#EB5353" fill-rule="evenodd"></path>
                                          </svg> </span> Don&rsquo;t Have This Feature</p>
                              </td>
                          </tr>
                      </tbody>
                  </table>
              </div>
          </div>
      </section>
      <!-- Call to Action -->

      <section class="cta">
          <div class="container flex-ctr-spb">
              <form action="{{ route('newsletter.store') }}" class="cta__context" method="POST">
                  @csrf
                  <h2 class="cta__title">Join Now &amp; Start Maximizing Your Rewards</h2>

                  <div class="cta__row flex-ctr">
                      <div class="cta__field flex-ctr"><label for="mail"><svg fill="none" height="24" viewbox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                                  <path d="M1.5 8.66992V17.2499C1.5 18.0456 1.81607 18.8086 2.37868 19.3712C2.94129 19.9339 3.70435 20.2499 4.5 20.2499H19.5C20.2956 20.2499 21.0587 19.9339 21.6213 19.3712C22.1839 18.8086 22.5 18.0456 22.5 17.2499V8.66992L13.572 14.1629C13.0992 14.4538 12.5551 14.6078 12 14.6078C11.4449 14.6078 10.9008 14.4538 10.428 14.1629L1.5 8.66992Z" fill="#021303"></path>
                                  <path d="M22.5 6.908V6.75C22.5 5.95435 22.1839 5.19129 21.6213 4.62868C21.0587 4.06607 20.2956 3.75 19.5 3.75H4.5C3.70435 3.75 2.94129 4.06607 2.37868 4.62868C1.81607 5.19129 1.5 5.95435 1.5 6.75V6.908L11.214 12.886C11.4504 13.0314 11.7225 13.1084 12 13.1084C12.2775 13.1084 12.5496 13.0314 12.786 12.886L22.5 6.908Z" fill="#021303"></path>
                              </svg> </label> <input class="cta__input" name="email" id="mail" placeholder="mail@gmail.com" required/></div>
                      <button class="btn-primary cta__btn flex-ctr"><span class="icon"><svg fill="none" height="24" viewbox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                                  <path d="M3.47779 2.40404C3.34782 2.36629 3.21006 2.3644 3.07911 2.39859C2.94817 2.43277 2.82891 2.50175 2.73398 2.59822C2.63906 2.69468 2.572 2.81503 2.53992 2.94651C2.50785 3.07799 2.51195 3.2157 2.55179 3.34504L4.98379 11.25H13.4998C13.6987 11.25 13.8895 11.3291 14.0301 11.4697C14.1708 11.6104 14.2498 11.8011 14.2498 12C14.2498 12.199 14.1708 12.3897 14.0301 12.5304C13.8895 12.671 13.6987 12.75 13.4998 12.75H4.98379L2.55179 20.655C2.51218 20.7843 2.50826 20.9219 2.54044 21.0532C2.57263 21.1846 2.63971 21.3047 2.7346 21.4011C2.82949 21.4974 2.94865 21.5663 3.07947 21.6004C3.2103 21.6346 3.34793 21.6327 3.47779 21.595C10.0928 19.6714 16.3307 16.6324 21.9228 12.609C22.0194 12.5396 22.0981 12.4481 22.1524 12.3422C22.2067 12.2363 22.235 12.119 22.235 12C22.235 11.881 22.2067 11.7637 22.1524 11.6579C22.0981 11.552 22.0194 11.4605 21.9228 11.391C16.3308 7.36734 10.0928 4.328 3.47779 2.40404Z" fill="#021303"></path>
                              </svg> </span>JOIN NOW</button>
                  </div>

                  <div class="cta__links flex-ctr"><a class="cta__link" href="#"><img alt="" src="imgs/App_Store.webp" /> </a> <a class="cta__link" href="#"> <img alt="" src="imgs/Google_Play.webp" /> </a></div>
              </form>

              <figure class="cta__figure"><img alt="" src="imgs/Iphone3.png" /></figure>
          </div>
      </section>
      <!-- Our Partners -->

      <section class="our-partners">
          <div class="container">
              <div class="our-partners__header">
                  <h5 class="section-subtitle our-partners__subtitle">Our Sophisticated</h5>

                  <h2 class="our-partners__title section-title">Technology Partner</h2>
              </div>

              <div class="our-partners__body flex-ctr-spb">
                  <div class="our-partners__item"><img alt="" src="imgs/partner1.webp" /></div>

                  <div class="our-partners__item"><img alt="" src="imgs/partner2.webp" /></div>

                  <div class="our-partners__item"><img alt="" src="imgs/partner3.webp" /></div>
              </div>
          </div>
      </section>
      <!-- Fancy Accordioin -->

      <section class="fancy-accordion">
          <!-- <div class="fancy-accordion__icon">
              <svg
                width="240"
                height="262"
                viewBox="0 0 240 262"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <mask
                  id="mask0_35_6380"
                  style="mask-type: alpha"
                  maskUnits="userSpaceOnUse"
                  x="-237"
                  y="0"
                  width="849"
                  height="607"
                >
                  <path
                    fill-rule="evenodd"
                    clip-rule="evenodd"
                    d="M67.0877 486.948V606.74C-100.459 606.74 -236.282 470.917 -236.282 303.37C-236.282 135.823 -100.459 0 67.0877 0C165.639 0 253.215 46.9925 308.63 119.792V0C476.177 0 612 135.823 612 303.37C612 470.917 476.177 606.74 308.63 606.74C210.078 606.74 122.503 559.748 67.0877 486.948ZM-112.626 303.37C-112.626 204.117 -32.1655 123.656 67.0877 123.656C166.341 123.656 246.802 204.117 246.802 303.37H370.458C370.458 236.118 348.574 173.977 311.54 123.679C409.451 125.234 488.344 205.089 488.344 303.37C488.344 402.623 407.883 483.084 308.63 483.084C209.377 483.084 128.916 402.623 128.916 303.37H5.25961C5.25961 370.622 27.143 432.763 64.1776 483.061C-33.7335 481.507 -112.626 401.652 -112.626 303.37Z"
                    fill="url(#paint0_linear_35_6380)"
                  />
                </mask>
                <g mask="url(#mask0_35_6380)">
                  <g filter="url(#filter0_ii_35_6380)">
                    <path
                      fill-rule="evenodd"
                      clip-rule="evenodd"
                      d="M67.0877 123.656C-32.1655 123.656 -112.626 204.117 -112.626 303.37C-112.626 402.623 -32.1655 483.084 67.0877 483.084V606.74C-100.459 606.74 -236.282 470.917 -236.282 303.37C-236.282 135.823 -100.459 0 67.0877 0C234.634 0 370.458 135.823 370.458 303.37H246.802C246.802 204.117 166.341 123.656 67.0877 123.656Z"
                      fill="url(#paint1_radial_35_6380)"
                    />
                    <path
                      fill-rule="evenodd"
                      clip-rule="evenodd"
                      d="M67.0877 123.656C-32.1655 123.656 -112.626 204.117 -112.626 303.37C-112.626 402.623 -32.1655 483.084 67.0877 483.084V606.74C-100.459 606.74 -236.282 470.917 -236.282 303.37C-236.282 135.823 -100.459 0 67.0877 0C234.634 0 370.458 135.823 370.458 303.37H246.802C246.802 204.117 166.341 123.656 67.0877 123.656Z"
                      fill="#1F2E7E"
                      fill-opacity="0.2"
                    />
                  </g>
                </g>
                <defs>
                  <filter
                    id="filter0_ii_35_6380"
                    x="-253.94"
                    y="0"
                    width="649.75"
                    height="637.64"
                    filterUnits="userSpaceOnUse"
                    color-interpolation-filters="sRGB"
                  >
                    <feFlood flood-opacity="0" result="BackgroundImageFix" />
                    <feBlend
                      mode="normal"
                      in="SourceGraphic"
                      in2="BackgroundImageFix"
                      result="shape"
                    />
                    <feColorMatrix
                      in="SourceAlpha"
                      type="matrix"
                      values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"
                      result="hardAlpha"
                    />
                    <feOffset dx="-17.657" dy="30.8998" />
                    <feGaussianBlur stdDeviation="37.5212" />
                    <feComposite
                      in2="hardAlpha"
                      operator="arithmetic"
                      k2="-1"
                      k3="1"
                    />
                    <feColorMatrix
                      type="matrix"
                      values="0 0 0 0 1 0 0 0 0 1 0 0 0 0 1 0 0 0 0.87 0"
                    />
                    <feBlend
                      mode="lighten"
                      in2="shape"
                      result="effect1_innerShadow_35_6380"
                    />
                    <feColorMatrix
                      in="SourceAlpha"
                      type="matrix"
                      values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"
                      result="hardAlpha"
                    />
                    <feOffset dx="25.3522" dy="14.7888" />
                    <feGaussianBlur stdDeviation="14.7888" />
                    <feComposite
                      in2="hardAlpha"
                      operator="arithmetic"
                      k2="-1"
                      k3="1"
                    />
                    <feColorMatrix
                      type="matrix"
                      values="0 0 0 0 0.168627 0 0 0 0 0.180392 0 0 0 0 0.239216 0 0 0 0.9 0"
                    />
                    <feBlend
                      mode="multiply"
                      in2="effect1_innerShadow_35_6380"
                      result="effect2_innerShadow_35_6380"
                    />
                  </filter>
                  <linearGradient
                    id="paint0_linear_35_6380"
                    x1="-142.28"
                    y1="495.207"
                    x2="523.875"
                    y2="146.79"
                    gradientUnits="userSpaceOnUse"
                  >
                    <stop offset="0.132716" stop-opacity="0" />
                    <stop offset="1" />
                  </linearGradient>
                  <radialGradient
                    id="paint1_radial_35_6380"
                    cx="0"
                    cy="0"
                    r="1"
                    gradientUnits="userSpaceOnUse"
                    gradientTransform="translate(-89.2176 -49.5197) rotate(88.0054) scale(216.234 402.549)"
                  >
                    <stop stop-color="#949494" />
                    <stop offset="0.635171" stop-color="#181818" />
                    <stop offset="1" stop-color="#1D1D1D" />
                  </radialGradient>
                </defs>
              </svg>
            </div> -->
          <div class="container flex-ctr-spb">
              <div class="fancy-accordion__thumb"><img alt="" src="imgs/fancy-accordion-img.webp" /></div>

              <div class="fancy-accordion__text">
                  <h5 class="fancy-accordion__subtitle section-subtitle">RewardsX</h5>

                  <h2 class="fancy-accordion__title section-title">RewardsX - The magic features</h2>

                  <ul class="fancy-accordion__list">
                      <li class="fancy-accordion__line"></li>
                      <li class="fancy-accordion__item item-1 accordion-active">
                          <h3 class="fancy-accordion__item-title accordion-tigger">Off-line card mode</h3>

                          <div class="fancy-accordion__item-dsc">
                              <p>Let&rsquo;s you select card safely without linking your card. This allows you to know your benefits that you are entitled to with all your credit cards.</p>
                          </div>
                      </li>
                      <li class="fancy-accordion__item item-2">
                          <h3 class="fancy-accordion__item-title accordion-tigger">Linked card mode</h3>

                          <div class="fancy-accordion__item-dsc">
                              <p>By linking your card, you are supercharging your credit card. This allows you to do things the right way, and let&rsquo;s you rack-up rewards more magically.</p>
                          </div>
                      </li>
                      <li class="fancy-accordion__item item-3">
                          <h3 class="fancy-accordion__item-title accordion-tigger">Best card X</h3>

                          <div class="fancy-accordion__item-dsc">
                              <p>When you are in place of business, our A.I suggest the right card for the transaction, therefore you make maximum in benefits.</p>
                          </div>
                      </li>
                      <li class="fancy-accordion__item item-4">
                          <h3 class="fancy-accordion__item-title accordion-tigger">Security &amp; Privacy</h3>

                          <div class="fancy-accordion__item-dsc">
                              <p>We care about your privacy and we do not sell your data. RewardsX is one step closer to being PCI DSS 4.0 Compliant.</p>
                          </div>
                      </li>
                  </ul>
              </div>
              <!--<div class="fancy-accordion__thumb">
                <img src="imgs/fancy-accordion-img.webp" alt="" />
               <div
                  class="fancy-accordion__figure-wrap active-thumb-wrap item-1 accordion-active"
                >
                  <figure class="fancy-accordion__figure">
                    <img src="imgs/fancy-accordion-img.webp" alt="" />
                  </figure>
                </div>
                 <div class="fancy-accordion__figure-wrap item-2">
                  <figure class="fancy-accordion__figure">
                    <img src="imgs/bg2.webp" alt="" />
                  </figure>
                </div>
                <div class="fancy-accordion__figure-wrap item-3">
                  <figure class="fancy-accordion__figure">
                    <img src="imgs/bg3.webp" alt="" />
                  </figure>
                </div>
                <div class="fancy-accordion__figure-wrap item-4">
                  <figure class="fancy-accordion__figure">
                    <img src="imgs/bg4.webp" alt="" />
                  </figure>
                </div>
              </div> -->
          </div>
      </section>
      <!-- Why Choose Us -->

      <section class="wcu">
          <div class="container">
              <div class="wcu__title section-title">Why Choose RewardsX</div>

              <div class="wcu__cards">
                  <div class="card gradient-bg">
                      <div class="gradient-animated-border"></div>

                      <div class="card__context">
                          <h2 class="card__title">Powerful Features</h2>

                          <p class="card__dsc">RewardsX intelligently optimizes your credit card usage to maximize rewards on every transaction, ensuring you never miss out on earning potential.</p>
                      </div>
                  </div>

                  <div class="card flex-auto-spb x2 gradient-bg">
                      <div class="gradient-animated-border"></div>

                      <div class="card__context">
                          <h2 class="card__title">Strong Security</h2>

                          <p class="card__dsc">RewardsX employs advanced encryption and security protocols to protect your financial data and ensure your transactions are safe and secure.</p>
                      </div>

                      <figure class="card__figure mx340"><img alt="Security" src="imgs/Iphone3.png" /></figure>
                  </div>

                  <div class="card flex-auto-spb xfull gradient-bg">
                      <div class="gradient-animated-border"></div>

                      <div class="card__context">
                          <h2 class="card__title">Our Community</h2>

                          <p class="card__dsc">Join the RewardsX community to connect with like-minded individuals and share insights on maximizing your credit card rewards.</p>
                      </div>

                      <figure class="card__figure"><img alt="Community" src="imgs/community.webp" /></figure>
                  </div>
              </div>
          </div>
      </section>
      <!-- Frequently Asked Questions -->

      <section class="faq">
          <div class="faq__inner">
              <div class="faq__header">
                  <h2 class="faq__title section-title">Do you have more questions?</h2>

                  <h5 class="section-subtitle faq__subtitle">Check out our FAQ&rsquo;s</h5>
              </div>

              <div class="faq__items">
                  <div class="faq__item gradient-bg">
                      <div class="gradient-animated-border"></div>

                      <div class="faq__item__header collapse__trigger">
                          <div class="faq__item__collapse-icon"></div>

                          <h3 class="faq__item__title">What is RewardsX?</h3>
                      </div>

                      <div class="faq__item__body">
                          <p class="faq__item__dsc">RewardsX is a revolutionary app designed to help Canadians maximize their credit card rewards. By intelligently understanding your credit card and its rewards network, RewardsX ensures you get the most out of every transaction.</p>
                      </div>
                  </div>

                  <div class="faq__item gradient-bg">
                      <div class="gradient-animated-border"></div>

                      <div class="faq__item__header collapse__trigger">
                          <div class="faq__item__collapse-icon"></div>

                          <h3 class="faq__item__title">How does RewardsX work?</h3>
                      </div>

                      <div class="faq__item__body">
                          <p class="faq__item__dsc">RewardsX allows you to link your credit cards to the app. It then analyzes your spending patterns and provides recommendations on which card to use for specific transactions to maximize your rewards.</p>
                      </div>
                  </div>

                  <div class="faq__item gradient-bg">
                      <div class="gradient-animated-border"></div>

                      <div class="faq__item__header collapse__trigger">
                          <div class="faq__item__collapse-icon"></div>

                          <h3 class="faq__item__title">Is RewardsX free to use?</h3>
                      </div>

                      <div class="faq__item__body">
                          <p class="faq__item__dsc">Yes, the consumer application of RewardsX is completely free for users. Enjoy all the benefits without any cost.</p>
                      </div>
                  </div>

                  <div class="faq__item gradient-bg">
                      <div class="gradient-animated-border"></div>

                      <div class="faq__item__header collapse__trigger">
                          <div class="faq__item__collapse-icon"></div>

                          <h3 class="faq__item__title">How much can I earn using RewardsX?</h3>
                      </div>

                      <div class="faq__item__body">
                          <p class="faq__item__dsc">On average, users can earn upwards of $1000 annually by using the app&#39;s recommendations and maximizing their credit card rewards.</p>
                      </div>
                  </div>

                  <div class="faq__item gradient-bg">
                      <div class="gradient-animated-border"></div>

                      <div class="faq__item__header collapse__trigger">
                          <div class="faq__item__collapse-icon"></div>

                          <h3 class="faq__item__title">Is my financial information safe with RewardsX?</h3>
                      </div>

                      <div class="faq__item__body">
                          <p class="faq__item__dsc">Absolutely. We prioritize your security and privacy. RewardsX uses advanced encryption and security measures to protect your data. Furthermore, RewardsX will be compliant with PCI DSS 4.0 standards very soon.</p>
                      </div>
                  </div>

                  <div class="faq__item gradient-bg">
                      <div class="gradient-animated-border"></div>

                      <div class="faq__item__header collapse__trigger">
                          <div class="faq__item__collapse-icon"></div>

                          <h3 class="faq__item__title">Which credit cards are compatible with RewardsX?</h3>
                      </div>

                      <div class="faq__item__body">
                          <p class="faq__item__dsc">RewardsX supports a wide range of North American credit cards. You can link multiple cards from different issuers to get the best recommendations.</p>
                      </div>
                  </div>

                  <div class="faq__item gradient-bg">
                      <div class="gradient-animated-border"></div>

                      <div class="faq__item__header collapse__trigger">
                          <div class="faq__item__collapse-icon"></div>

                          <h3 class="faq__item__title">How do I get started with RewardsX?</h3>
                      </div>

                      <div class="faq__item__body">
                          <p class="faq__item__dsc">Join the waiting list now, as we are preparing to launch. You will be the first person to know when we make the app available on Apple App store and Google play store.</p>
                      </div>
                  </div>

                  <div class="faq__item gradient-bg">
                      <div class="gradient-animated-border"></div>

                      <div class="faq__item__header collapse__trigger">
                          <div class="faq__item__collapse-icon"></div>

                          <h3 class="faq__item__title">Can I use RewardsX if I only have one credit card?</h3>
                      </div>

                      <div class="faq__item__body">
                          <p class="faq__item__dsc">Yes, even with one credit card, RewardsX can help you maximize your rewards by providing tailored spending recommendations.</p>
                      </div>
                  </div>

                  <div class="faq__item gradient-bg">
                      <div class="gradient-animated-border"></div>

                      <div class="faq__item__header collapse__trigger">
                          <div class="faq__item__collapse-icon"></div>

                          <h3 class="faq__item__title">Does RewardsX offer support for businesses?</h3>
                      </div>

                      <div class="faq__item__body">
                          <p class="faq__item__dsc">Yes, RewardsX has a B2B application that supports merchants with advanced AI-based insights to drive profits. Businesses are highly recommended to join our Merchant partner network and can contact us for more information.</p>
                      </div>
                  </div>

                  <div class="faq__item gradient-bg">
                      <div class="gradient-animated-border"></div>

                      <div class="faq__item__header collapse__trigger">
                          <div class="faq__item__collapse-icon"></div>

                          <h3 class="faq__item__title">Who can I contact for support or more information?</h3>
                      </div>

                      <div class="faq__item__body">
                          <p class="faq__item__dsc">For support or additional information, you can reach out to our customer service team through our website&rsquo;s contact form.</p>
                      </div>
                  </div>

                  <div class="faq__item gradient-bg">
                      <div class="gradient-animated-border"></div>

                      <div class="faq__item__header collapse__trigger">
                          <div class="faq__item__collapse-icon"></div>

                          <h3 class="faq__item__title">How often does RewardsX update its recommendations?</h3>
                      </div>

                      <div class="faq__item__body">
                          <p class="faq__item__dsc">RewardsX continuously analyzes your spending patterns and the latest reward offers to provide real-time, up-to-date recommendations.</p>
                      </div>
                  </div>

                  <div class="faq__item gradient-bg">
                      <div class="gradient-animated-border"></div>

                      <div class="faq__item__header collapse__trigger">
                          <div class="faq__item__collapse-icon"></div>

                          <h3 class="faq__item__title">Can I earn rewards from other loyalty programs with RewardsX?</h3>
                      </div>

                      <div class="faq__item__body">
                          <p class="faq__item__dsc">Yes, RewardsX can help you maximize rewards from various loyalty programs in addition to your credit card rewards.</p>
                      </div>
                  </div>

                  <div>
                      <h5 class="section-subtitle faq__subtitle">If you have any other questions, feel free to contact our support team or visit our website for more details.</h5>
                  </div>
              </div>
          </div>
      </section>
  </main>

  @endsection
