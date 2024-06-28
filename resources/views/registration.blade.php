    @extends('layout')

    @section('content')
            <main class="main signup-main">
            <!-- Sign-Up Form -->
            <section class="signup-wrap wave-left">
                <div class="signup">
                    <div class="container signup__inner gradient-bg">
                        <form action="{{ route('credits.store') }}" method="post" class="signup__form form">
                            @csrf
                            <h2 class="signup__form__title section-title">
                                Sign Up
                            </h2>
                            <p class="signup__form__dsc">
                                Get in touch with us for any inquiries or
                                assistance
                            </p>
                            <div class="form__fields">
                              <div class="steps-wrap">
                                <div class="step-item">
                                    <h3 class="form__fields-question">
                                        How many credit cards do you have?
                                    </h3>
                                    <div class="form__fields-group">
                                        <div class="form__field">
                                            <div
                                                class="gradient-animated-border"
                                            ></div>
                                            <input
                                                type="radio"
                                                class="form__input"
                                                name="amount"
                                                id="one"
                                                value="1"
                                            />
                                            <label for="one">1</label>
                                        </div>
                                        <div class="form__field">
                                            <div
                                                class="gradient-animated-border"
                                            ></div>
                                            <input
                                                type="radio"
                                                class="form__input"
                                                name="amount"
                                                id="two"
                                                value="2"
                                            />
                                            <label for="two">2</label>
                                        </div>
                                        <div class="form__field">
                                            <div
                                                class="gradient-animated-border"
                                            ></div>
                                            <input
                                                class="form__input"
                                                type="radio"
                                                name="amount"
                                                id="three"
                                                value="3"
                                            />
                                            <label for="three">3</label>
                                        </div>
                                        <div class="form__field">
                                            <div
                                                class="gradient-animated-border"
                                            ></div>
                                            <input
                                                class="form__input"
                                                type="radio"
                                                name="amount"
                                                id="more-than-3"
                                                value="4 or more"
                                            />
                                            <label for="more-than-3"
                                                >4 or more</label
                                            >
                                        </div>
                                    </div>

                                    <div class="step-buttons form__submit">
                                      <button
                                          type="button"
                                          class="form__submit-btn btn-primary button-next"
                                      >
                                          Next
                                      </button>
                                  </div>
                                </div>

                                <div class="step-item">
                                    <h3 class="form__fields-question">
                                        Select the banks that you have credit
                                        card with? ( Select all the apply to
                                        you)
                                    </h3>
                                    <div class="form__fields-group">
                                        <div class="form__field">
                                            <div
                                                class="gradient-animated-border"
                                            ></div>
                                            <input
                                                type="checkbox"
                                                class="form__input"
                                                name="bank_name"
                                                id="BMO"
                                                value="BMO"
                                            />
                                            <label for="BMO">BMO</label>
                                        </div>
                                        <div class="form__field">
                                            <div
                                                class="gradient-animated-border"
                                            ></div>
                                            <input
                                                type="checkbox"
                                                class="form__input"
                                                name="bank_name"
                                                id="Capital-one"
                                                value="Capital One"
                                            />
                                            <label for="Capital-one"
                                                >Capital One</label
                                            >
                                        </div>
                                        <div class="form__field">
                                            <div
                                                class="gradient-animated-border"
                                            ></div>
                                            <input
                                                class="form__input"
                                                type="checkbox"
                                                name="bank_name"
                                                id="CIBC"
                                                value="CIBC"
                                            />
                                            <label for="CIBC">CIBC</label>
                                        </div>
                                        <div class="form__field">
                                            <div
                                                class="gradient-animated-border"
                                            ></div>
                                            <input
                                                class="form__input"
                                                type="checkbox"
                                                name="bank_name"
                                                id="National-bank"
                                                value="National Bank"
                                            />
                                            <label for="National-bank"
                                                >National Bank
                                            </label>
                                        </div>
                                        <div class="form__field">
                                            <div
                                                class="gradient-animated-border"
                                            ></div>
                                            <input
                                                type="checkbox"
                                                class="form__input"
                                                name="bank_name"
                                                id="Neo-financial"
                                                value="Neo Financial"
                                            />
                                            <label for="Neo-financial"
                                                >Neo Financial
                                            </label>
                                        </div>
                                        <div class="form__field">
                                            <div
                                                class="gradient-animated-border"
                                            ></div>
                                            <input
                                                type="checkbox"
                                                class="form__input"
                                                name="bank_name"
                                                id="PC-Financial"
                                                value="PC Financial"
                                            />
                                            <label for="PC-Financial"
                                                >PC Financial
                                            </label>
                                        </div>
                                        <div class="form__field">
                                            <div
                                                class="gradient-animated-border"
                                            ></div>
                                            <input
                                                class="form__input"
                                                type="checkbox"
                                                name="bank_name"
                                                id="RBC"
                                                value="RBC"
                                            />
                                            <label for="RBC">RBC</label>
                                        </div>
                                        <div class="form__field">
                                            <div
                                                class="gradient-animated-border"
                                            ></div>
                                            <input
                                                class="form__input"
                                                type="checkbox"
                                                name="bank_name"
                                                id="Scotiabank"
                                                value="Scotiabank"
                                            />
                                            <label for="Scotiabank"
                                                >Scotiabank
                                            </label>
                                        </div>
                                        <div class="form__field">
                                            <div
                                                class="gradient-animated-border"
                                            ></div>
                                            <input
                                                type="checkbox"
                                                class="form__input"
                                                name="bank_name"
                                                id="Tim-hortons"
                                                value="Tim Hortons"
                                            />
                                            <label for="Tim-hortons"
                                                >Tim Hortons MasterCard</label
                                            >
                                        </div>
                                        <div class="form__field">
                                            <div
                                                class="gradient-animated-border"
                                            ></div>
                                            <input
                                                type="checkbox"
                                                class="form__input"
                                                name="bank_name"
                                                id="Tangerine"
                                                value="Tangerine"
                                            />
                                            <label for="Tangerine"
                                                >Tangerine MasterCard</label
                                            >
                                        </div>
                                        <div class="form__field">
                                            <div
                                                class="gradient-animated-border"
                                            ></div>
                                            <input
                                                class="form__input"
                                                type="checkbox"
                                                name="bank_name"
                                                id="Triangle"
                                                value="Triangle"
                                            />
                                            <label for="Triangle"
                                                >Triangle</label
                                            >
                                        </div>
                                        <div class="form__field">
                                            <div
                                                class="gradient-animated-border"
                                            ></div>
                                            <input
                                                class="form__input"
                                                type="checkbox"
                                                name="bank_name"
                                                id="Walmart"
                                                value="Walmart"
                                            />
                                            <label for="Walmart"
                                                >Walmart MasterCard
                                            </label>
                                        </div>
                                    </div>
                                    <div class="step-buttons form__submit">
                                      <button
                                          type="button"
                                          class="form__submit-btn btn-primary button-prev"
                                      >
                                          Prev
                                      </button>
                                      <button
                                          type="button"
                                          class="form__submit-btn btn-primary button-next"
                                      >
                                          Next
                                      </button>
                                  </div>
                                </div>

                                <div class="step-item">
                                    <label for="email">Your email
                                    </label>
                                    <div class="form__field">
                                        <div
                                            class="gradient-animated-border"
                                        ></div>
                                        <input
                                            class="form__input"
                                            id="email"
                                            type="email"
                                            name="email"
                                            placeholder="Please Enter your email"
                                        />
                                    </div>

                                    <div class="step-buttons form__submit">
                                        <button
                                        type="button"
                                        class="form__submit-btn btn-primary button-prev"
                                    >
                                        Prev
                                    </button>
                                      <button
                                          class="form__submit-btn btn-primary button-submit"
                                      >
                                          Submit
                                      </button>
                                  </div>
                                </div>
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
                        <h2 class="faq__title section-title">
                            Frequently Asked Questions
                        </h2>
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
                                    Yes, the app is completely free for B2C
                                    users. Our goal is to help you maximize your
                                    credit card rewards without any additional
                                    cost.
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
                                    Yes, the app is completely free for B2C
                                    users. Our goal is to help you maximize your
                                    credit card rewards without any additional
                                    cost.
                                </p>
                            </div>
                        </div>
                        <div class="faq__item gradient-bg">
                            <div class="gradient-animated-border"></div>
                            <div class="faq__item__header collapse__trigger">
                                <div class="faq__item__collapse-icon"></div>
                                <h3 class="faq__item__title">
                                    How does the app keep my financial
                                    information secure?
                                </h3>
                            </div>
                            <div class="faq__item__body">
                                <p class="faq__item__dsc">
                                    Yes, the app is completely free for B2C
                                    users. Our goal is to help you maximize your
                                    credit card rewards without any additional
                                    cost.
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
                                    Yes, the app is completely free for B2C
                                    users. Our goal is to help you maximize your
                                    credit card rewards without any additional
                                    cost.
                                </p>
                            </div>
                        </div>
                        <div class="faq__item gradient-bg">
                            <div class="gradient-animated-border"></div>
                            <div class="faq__item__header collapse__trigger">
                                <div class="faq__item__collapse-icon"></div>
                                <h3 class="faq__item__title">
                                    How can I see the rewards I’ve earned
                                    through the app?
                                </h3>
                            </div>
                            <div class="faq__item__body">
                                <p class="faq__item__dsc">
                                    Yes, the app is completely free for B2C
                                    users. Our goal is to help you maximize your
                                    credit card rewards without any additional
                                    cost.
                                </p>
                            </div>
                        </div>
                        <div class="faq__item gradient-bg">
                            <div class="gradient-animated-border"></div>
                            <div class="faq__item__header collapse__trigger">
                                <div class="faq__item__collapse-icon"></div>
                                <h3 class="faq__item__title">
                                    How can I see the rewards I’ve earned
                                    through the app?
                                </h3>
                            </div>
                            <div class="faq__item__body">
                                <p class="faq__item__dsc">
                                    Yes, the app is completely free for B2C
                                    users. Our goal is to help you maximize your
                                    credit card rewards without any additional
                                    cost.
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
                        <h2 class="explore__title">
                            Your Security Our Priority
                        </h2>
                        <p class="explore__dsc">
                            Want to know more about how we protect your data?
                            Get in touch with our security team. Your peace of
                            mind is our highest priority.
                        </p>
                        <div class="explore__btns flex-ctr">
                            <a
                                href="{{ url('/sign-up') }}"
                                class="explore__btn btn-primary bg-solid"
                            >
                                Get Started Today
                            </a>
                            <a
                                href="#"
                                class="explore__btn btn-primary bg-transparent"
                            >
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
