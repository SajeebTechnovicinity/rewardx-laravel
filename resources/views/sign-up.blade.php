    @extends('layout')

    @section('content')
         <main class="main signup-main">
      <!-- Sign-Up Form -->
      <section class="signup-wrap wave-left">
        <div class="signup">
          <div class="container signup__inner gradient-bg">
            <form action="#" class="signup__form form">
              <h2 class="signup__form__title section-title">Sign Up</h2>
              <p class="signup__form__dsc">
                Get in touch with us for any inquiries or assistance
              </p>
              <div class="contact-form__fields">
                <div class="form__field">
                  <div class="gradient-animated-border"></div>
                  <input
                    type="text"
                    class="form__input"
                    placeholder="Last Name"
                  />
                </div>
                <div class="form__field">
                  <div class="gradient-animated-border"></div>
                  <input
                    type="text"
                    class="form__input"
                    placeholder="First Name"
                  />
                </div>
                <div class="form__field">
                  <div class="gradient-animated-border"></div>
                  <input class="form__input" type="email" placeholder="Email" />
                </div>
                <div class="form__field">
                  <div class="gradient-animated-border"></div>
                  <input
                    class="form__input"
                    type="number"
                    placeholder="Phone Number"
                  />
                </div>
                <div class="form__submit">
                  <button class="form__submit-btn btn-primary">SIGN UP</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </section>

      <!-- Frequently Asked Questions -->
      <section class="faq wave-right">
        <div class="faq__inner">
          <div class="faq__header">
            <h2 class="faq__title section-title">Frequently Asked Questions</h2>
            <h5 class="section-subtitle faq__subtitle">
              Figma ipsum component variant main
            </h5>
          </div>
          <div class="faq__items">
            <div class="faq__item gradient-bg">
              <div class="gradient-animated-border"></div>
              <div class="faq__item__header collapse__trigger">
                <div class="faq__item__collapse-icon"></div>
                <h3 class="faq__item__title">
                  How does the RewardsX app work?
                </h3>
              </div>
              <div class="faq__item__body">
                <p class="faq__item__dsc">
                  Yes, the app is completely free for B2C users. Our goal is to
                  help you maximize your credit card rewards without any
                  additional cost.
                </p>
              </div>
            </div>
            <div class="faq__item gradient-bg">
              <div class="gradient-animated-border"></div>
              <div class="faq__item__header collapse__trigger">
                <div class="faq__item__collapse-icon"></div>
                <h3 class="faq__item__title">
                  Is the RewardsX app free to use?
                </h3>
              </div>
              <div class="faq__item__body">
                <p class="faq__item__dsc">
                  Yes, the app is completely free for B2C users. Our goal is to
                  help you maximize your credit card rewards without any
                  additional cost.
                </p>
              </div>
            </div>
            <div class="faq__item gradient-bg">
              <div class="gradient-animated-border"></div>
              <div class="faq__item__header collapse__trigger">
                <div class="faq__item__collapse-icon"></div>
                <h3 class="faq__item__title">
                  How does the app keep my financial information secure?
                </h3>
              </div>
              <div class="faq__item__body">
                <p class="faq__item__dsc">
                  Yes, the app is completely free for B2C users. Our goal is to
                  help you maximize your credit card rewards without any
                  additional cost.
                </p>
              </div>
            </div>
            <div class="faq__item gradient-bg">
              <div class="gradient-animated-border"></div>
              <div class="faq__item__header collapse__trigger">
                <div class="faq__item__collapse-icon"></div>
                <h3 class="faq__item__title">
                  Can I link multiple credit cards to the app?
                </h3>
              </div>
              <div class="faq__item__body">
                <p class="faq__item__dsc">
                  Yes, the app is completely free for B2C users. Our goal is to
                  help you maximize your credit card rewards without any
                  additional cost.
                </p>
              </div>
            </div>
            <div class="faq__item gradient-bg">
              <div class="gradient-animated-border"></div>
              <div class="faq__item__header collapse__trigger">
                <div class="faq__item__collapse-icon"></div>
                <h3 class="faq__item__title">
                  How can I see the rewards I’ve earned through the app?
                </h3>
              </div>
              <div class="faq__item__body">
                <p class="faq__item__dsc">
                  Yes, the app is completely free for B2C users. Our goal is to
                  help you maximize your credit card rewards without any
                  additional cost.
                </p>
              </div>
            </div>
            <div class="faq__item gradient-bg">
              <div class="gradient-animated-border"></div>
              <div class="faq__item__header collapse__trigger">
                <div class="faq__item__collapse-icon"></div>
                <h3 class="faq__item__title">
                  How can I see the rewards I’ve earned through the app?
                </h3>
              </div>
              <div class="faq__item__body">
                <p class="faq__item__dsc">
                  Yes, the app is completely free for B2C users. Our goal is to
                  help you maximize your credit card rewards without any
                  additional cost.
                </p>
              </div>
            </div>
          </div>
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
              <a href="#" class="explore__btn btn-primary bg-solid">
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
