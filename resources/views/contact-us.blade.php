    @extends('layout')

    @section('content')
        <main class="main contactus-main">
            <!-- Contact Form -->
            <section class="contact-us wave-left">
                <div class="container flex-auto-spb contact-us__inner gradient-bg">
                    <form action="#" class="contact-form form">
                        <h2 class="contact-form__title section-title">Contact RewardX</h2>
                        <p class="contact-form__dsc">
                            Get in touch with us for any inquiries or assistance
                        </p>
                        <div class="contact-form__fields">
                            <div class="form__row flex-ctr-spb">
                                <div class="form__field">
                                    <div class="gradient-animated-border"></div>
                                    <input type="text" class="form__input" placeholder="Last Name" />
                                </div>
                                <div class="form__field">
                                    <div class="gradient-animated-border"></div>
                                    <input type="text" class="form__input" placeholder="First Name" />
                                </div>
                            </div>
                            <div class="form__field">
                                <div class="gradient-animated-border"></div>
                                <input class="form__input" type="email" placeholder="Email" />
                            </div>
                            <div class="form__field">
                                <div class="gradient-animated-border"></div>
                                <input class="form__input" type="number" placeholder="Phone Number" />
                            </div>
                            <div class="form__field">
                                <div class="gradient-animated-border"></div>
                                <textarea name="message" placeholder="Message" class="form__textarea"></textarea>
                            </div>
                            <div class="form__submit">
                                <button class="form__submit-btn btn-primary">
                                    SUBMIT THE MESSAGE
                                </button>
                            </div>
                        </div>
                    </form>
                    <div class="contact-info flex-ctr-ctr">
                        <div class="contact-info__bg">
                            <img src="imgs/contact-info-bg.webp" alt="" />
                        </div>
                        <div class="contact-info__inner">
                            <h3 class="contact-info__title">Contact Information</h3>
                            <p class="contact-info__dsc">
                                Say something to start a live chat!
                            </p>
                            <ul class="contact-info__list">
                                <!-- <li>
                    <a href="#" class="contact-info__link flex-ctr"
                      ><span class="contact-info__link-icon">
                        <svg
                          width="24"
                          height="25"
                          viewBox="0 0 24 25"
                          fill="none"
                          xmlns="http://www.w3.org/2000/svg"
                        >
                          <path
                            fill-rule="evenodd"
                            clip-rule="evenodd"
                            d="M1.5 5C1.5 4.20435 1.81607 3.44129 2.37868 2.87868C2.94129 2.31607 3.70435 2 4.5 2H5.872C6.732 2 7.482 2.586 7.691 3.42L8.796 7.843C8.88554 8.201 8.86746 8.57746 8.74401 8.92522C8.62055 9.27299 8.39723 9.57659 8.102 9.798L6.809 10.768C6.674 10.869 6.645 11.017 6.683 11.12C7.24738 12.6549 8.1386 14.0487 9.29495 15.2051C10.4513 16.3614 11.8451 17.2526 13.38 17.817C13.483 17.855 13.63 17.826 13.732 17.691L14.702 16.398C14.9234 16.1028 15.227 15.8794 15.5748 15.756C15.9225 15.6325 16.299 15.6145 16.657 15.704L21.08 16.809C21.914 17.018 22.5 17.768 22.5 18.629V20C22.5 20.7956 22.1839 21.5587 21.6213 22.1213C21.0587 22.6839 20.2956 23 19.5 23H17.25C8.552 23 1.5 15.948 1.5 7.25V5Z"
                            fill="#96FB4A"
                          />
                        </svg> </span
                      ><span class="contact-info__link-text">825-785-4124</span></a
                    >
                  </li> -->
                                <li>
                                    <a href="#" class="contact-info__link flex-ctr"><span
                                            class="contact-info__link-icon">
                                            <svg width="24" height="25" viewBox="0 0 24 25" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M1.5 9.16998V17.75C1.5 18.5456 1.81607 19.3087 2.37868 19.8713C2.94129 20.4339 3.70435 20.75 4.5 20.75H19.5C20.2956 20.75 21.0587 20.4339 21.6213 19.8713C22.1839 19.3087 22.5 18.5456 22.5 17.75V9.16998L13.572 14.663C13.0992 14.9538 12.5551 15.1078 12 15.1078C11.4449 15.1078 10.9008 14.9538 10.428 14.663L1.5 9.16998Z"
                                                    fill="#96FB4A" />
                                                <path
                                                    d="M22.5 7.408V7.25C22.5 6.45435 22.1839 5.69129 21.6213 5.12868C21.0587 4.56607 20.2956 4.25 19.5 4.25H4.5C3.70435 4.25 2.94129 4.56607 2.37868 5.12868C1.81607 5.69129 1.5 6.45435 1.5 7.25V7.408L11.214 13.386C11.4504 13.5314 11.7225 13.6084 12 13.6084C12.2775 13.6084 12.5496 13.5314 12.786 13.386L22.5 7.408Z"
                                                    fill="#96FB4A" />
                                            </svg> </span><span class="contact-info__link-text">admin@rewardx.com</span></a>
                                </li>
                                <li class="contact-info__item flex-ctr">
                                    <span class="contact-info__link-icon">
                                        <svg width="24" height="25" viewBox="0 0 24 25" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M11.54 22.851L11.61 22.891L11.638 22.907C11.749 22.967 11.8733 22.9985 11.9995 22.9985C12.1257 22.9985 12.25 22.967 12.361 22.907L12.389 22.892L12.46 22.851C12.8511 22.6191 13.2328 22.3716 13.604 22.109C14.5651 21.4305 15.463 20.6667 16.287 19.827C18.231 17.837 20.25 14.847 20.25 11C20.25 8.81196 19.3808 6.71354 17.8336 5.16637C16.2865 3.61919 14.188 2.75 12 2.75C9.81196 2.75 7.71354 3.61919 6.16637 5.16637C4.61919 6.71354 3.75 8.81196 3.75 11C3.75 14.846 5.77 17.837 7.713 19.827C8.53664 20.6667 9.43427 21.4304 10.395 22.109C10.7666 22.3716 11.1485 22.6191 11.54 22.851ZM12 14C12.7956 14 13.5587 13.6839 14.1213 13.1213C14.6839 12.5587 15 11.7956 15 11C15 10.2044 14.6839 9.44129 14.1213 8.87868C13.5587 8.31607 12.7956 8 12 8C11.2044 8 10.4413 8.31607 9.87868 8.87868C9.31607 9.44129 9 10.2044 9 11C9 11.7956 9.31607 12.5587 9.87868 13.1213C10.4413 13.6839 11.2044 14 12 14Z"
                                                fill="#96FB4A" />
                                        </svg> </span><span class="contact-info__link-text">14604, 106 Ave NW, Edmonton,
                                        Alberta T5N1B8</span>
                                </li>
                            </ul>

                            <!-- <div class="contact-info__map">
                  <iframe
                    src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d193582.05291079436!2d-74.15168569970702!3d40.70217323773291!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sbd!4v1711257506908!5m2!1sen!2sbd"
                    style="border: 0"
                    allowfullscreen=""
                    loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"
                  ></iframe>
                </div> -->
                        </div>
                    </div>
                </div>
            </section>

            <!-- Get in Tuch -->
            <section class="git">
                <div class="container">
                    <div class="git__header">
                        <h3 class="git__title">PRESS KIT</h3>
                    </div>
                    <div class="git__cards flex-auto-spb">
                        <div class="card media-card gradient-bg">
                            <div class="gradient-animated-border"></div>
                            <div class="card__inner">
                                <h3 class="card__label">For Media</h3>
                                <ul class="git__contact-list">
                                    <li>
                                        <a href="mailto:media01@gmail.com" class="git__contact-link flex-ctr"><span
                                                class="git__contact-link__icon">
                                                <svg width="24" height="25" viewBox="0 0 24 25" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M1.5 9.16998V17.75C1.5 18.5456 1.81607 19.3087 2.37868 19.8713C2.94129 20.4339 3.70435 20.75 4.5 20.75H19.5C20.2956 20.75 21.0587 20.4339 21.6213 19.8713C22.1839 19.3087 22.5 18.5456 22.5 17.75V9.16998L13.572 14.663C13.0992 14.9538 12.5551 15.1078 12 15.1078C11.4449 15.1078 10.9008 14.9538 10.428 14.663L1.5 9.16998Z"
                                                        fill="#96FB4A" />
                                                    <path
                                                        d="M22.5 7.408V7.25C22.5 6.45435 22.1839 5.69129 21.6213 5.12868C21.0587 4.56607 20.2956 4.25 19.5 4.25H4.5C3.70435 4.25 2.94129 4.56607 2.37868 5.12868C1.81607 5.69129 1.5 6.45435 1.5 7.25V7.408L11.214 13.386C11.4504 13.5314 11.7225 13.6084 12 13.6084C12.2775 13.6084 12.5496 13.5314 12.786 13.386L22.5 7.408Z"
                                                        fill="#96FB4A" />
                                                </svg> </span><span
                                                class="git__contact-link__text">media01@gmail.com</span></a>
                                    </li>
                                    <li>
                                        <a href="mailto:media02@gmail.com" class="git__contact-link flex-ctr"><span
                                                class="git__contact-link__icon">
                                                <svg width="24" height="25" viewBox="0 0 24 25" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M1.5 9.16998V17.75C1.5 18.5456 1.81607 19.3087 2.37868 19.8713C2.94129 20.4339 3.70435 20.75 4.5 20.75H19.5C20.2956 20.75 21.0587 20.4339 21.6213 19.8713C22.1839 19.3087 22.5 18.5456 22.5 17.75V9.16998L13.572 14.663C13.0992 14.9538 12.5551 15.1078 12 15.1078C11.4449 15.1078 10.9008 14.9538 10.428 14.663L1.5 9.16998Z"
                                                        fill="#96FB4A" />
                                                    <path
                                                        d="M22.5 7.408V7.25C22.5 6.45435 22.1839 5.69129 21.6213 5.12868C21.0587 4.56607 20.2956 4.25 19.5 4.25H4.5C3.70435 4.25 2.94129 4.56607 2.37868 5.12868C1.81607 5.69129 1.5 6.45435 1.5 7.25V7.408L11.214 13.386C11.4504 13.5314 11.7225 13.6084 12 13.6084C12.2775 13.6084 12.5496 13.5314 12.786 13.386L22.5 7.408Z"
                                                        fill="#96FB4A" />
                                                </svg> </span><span
                                                class="git__contact-link__text">media02@gmail.com</span></a>
                                    </li>
                                    <li>
                                        <a href="mailto:media03@gmail.com" class="git__contact-link flex-ctr"><span
                                                class="git__contact-link__icon">
                                                <svg width="24" height="25" viewBox="0 0 24 25" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M1.5 9.16998V17.75C1.5 18.5456 1.81607 19.3087 2.37868 19.8713C2.94129 20.4339 3.70435 20.75 4.5 20.75H19.5C20.2956 20.75 21.0587 20.4339 21.6213 19.8713C22.1839 19.3087 22.5 18.5456 22.5 17.75V9.16998L13.572 14.663C13.0992 14.9538 12.5551 15.1078 12 15.1078C11.4449 15.1078 10.9008 14.9538 10.428 14.663L1.5 9.16998Z"
                                                        fill="#96FB4A" />
                                                    <path
                                                        d="M22.5 7.408V7.25C22.5 6.45435 22.1839 5.69129 21.6213 5.12868C21.0587 4.56607 20.2956 4.25 19.5 4.25H4.5C3.70435 4.25 2.94129 4.56607 2.37868 5.12868C1.81607 5.69129 1.5 6.45435 1.5 7.25V7.408L11.214 13.386C11.4504 13.5314 11.7225 13.6084 12 13.6084C12.2775 13.6084 12.5496 13.5314 12.786 13.386L22.5 7.408Z"
                                                        fill="#96FB4A" />
                                                </svg> </span><span
                                                class="git__contact-link__text">media03@gmail.com</span></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="card bussiness-card gradient-bg">
                            <div class="gradient-animated-border"></div>
                            <div class="card__inner">
                                <h3 class="card__label">For Bussiness</h3>
                                <ul class="git__contact-list">
                                    <li>
                                        <a href="mailto:bussiness01@gmail.com" class="git__contact-link flex-ctr"><span
                                                class="git__contact-link__icon">
                                                <svg width="24" height="25" viewBox="0 0 24 25" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M1.5 9.16998V17.75C1.5 18.5456 1.81607 19.3087 2.37868 19.8713C2.94129 20.4339 3.70435 20.75 4.5 20.75H19.5C20.2956 20.75 21.0587 20.4339 21.6213 19.8713C22.1839 19.3087 22.5 18.5456 22.5 17.75V9.16998L13.572 14.663C13.0992 14.9538 12.5551 15.1078 12 15.1078C11.4449 15.1078 10.9008 14.9538 10.428 14.663L1.5 9.16998Z"
                                                        fill="#96FB4A" />
                                                    <path
                                                        d="M22.5 7.408V7.25C22.5 6.45435 22.1839 5.69129 21.6213 5.12868C21.0587 4.56607 20.2956 4.25 19.5 4.25H4.5C3.70435 4.25 2.94129 4.56607 2.37868 5.12868C1.81607 5.69129 1.5 6.45435 1.5 7.25V7.408L11.214 13.386C11.4504 13.5314 11.7225 13.6084 12 13.6084C12.2775 13.6084 12.5496 13.5314 12.786 13.386L22.5 7.408Z"
                                                        fill="#96FB4A" />
                                                </svg> </span><span
                                                class="git__contact-link__text">bussiness01@gmail.com</span></a>
                                    </li>
                                    <li>
                                        <a href="mailto:bussiness02@gmail.com" class="git__contact-link flex-ctr"><span
                                                class="git__contact-link__icon">
                                                <svg width="24" height="25" viewBox="0 0 24 25" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M1.5 9.16998V17.75C1.5 18.5456 1.81607 19.3087 2.37868 19.8713C2.94129 20.4339 3.70435 20.75 4.5 20.75H19.5C20.2956 20.75 21.0587 20.4339 21.6213 19.8713C22.1839 19.3087 22.5 18.5456 22.5 17.75V9.16998L13.572 14.663C13.0992 14.9538 12.5551 15.1078 12 15.1078C11.4449 15.1078 10.9008 14.9538 10.428 14.663L1.5 9.16998Z"
                                                        fill="#96FB4A" />
                                                    <path
                                                        d="M22.5 7.408V7.25C22.5 6.45435 22.1839 5.69129 21.6213 5.12868C21.0587 4.56607 20.2956 4.25 19.5 4.25H4.5C3.70435 4.25 2.94129 4.56607 2.37868 5.12868C1.81607 5.69129 1.5 6.45435 1.5 7.25V7.408L11.214 13.386C11.4504 13.5314 11.7225 13.6084 12 13.6084C12.2775 13.6084 12.5496 13.5314 12.786 13.386L22.5 7.408Z"
                                                        fill="#96FB4A" />
                                                </svg> </span><span
                                                class="git__contact-link__text">bussiness02@gmail.com</span></a>
                                    </li>
                                    <li>
                                        <a href="mailto:media03@gmail.com" class="git__contact-link flex-ctr"><span
                                                class="git__contact-link__icon">
                                                <svg width="24" height="25" viewBox="0 0 24 25" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M1.5 9.16998V17.75C1.5 18.5456 1.81607 19.3087 2.37868 19.8713C2.94129 20.4339 3.70435 20.75 4.5 20.75H19.5C20.2956 20.75 21.0587 20.4339 21.6213 19.8713C22.1839 19.3087 22.5 18.5456 22.5 17.75V9.16998L13.572 14.663C13.0992 14.9538 12.5551 15.1078 12 15.1078C11.4449 15.1078 10.9008 14.9538 10.428 14.663L1.5 9.16998Z"
                                                        fill="#96FB4A" />
                                                    <path
                                                        d="M22.5 7.408V7.25C22.5 6.45435 22.1839 5.69129 21.6213 5.12868C21.0587 4.56607 20.2956 4.25 19.5 4.25H4.5C3.70435 4.25 2.94129 4.56607 2.37868 5.12868C1.81607 5.69129 1.5 6.45435 1.5 7.25V7.408L11.214 13.386C11.4504 13.5314 11.7225 13.6084 12 13.6084C12.2775 13.6084 12.5496 13.5314 12.786 13.386L22.5 7.408Z"
                                                        fill="#96FB4A" />
                                                </svg> </span><span
                                                class="git__contact-link__text">bussiness03@gmail.com</span></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="card support-card gradient-bg">
                            <div class="gradient-animated-border"></div>
                            <div class="card__inner">
                                <h3 class="card__label">For Support</h3>
                                <ul class="git__contact-list">
                                    <li>
                                        <a href="mailto:support01@gmail.com" class="git__contact-link flex-ctr"><span
                                                class="git__contact-link__icon">
                                                <svg width="24" height="25" viewBox="0 0 24 25" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M1.5 9.16998V17.75C1.5 18.5456 1.81607 19.3087 2.37868 19.8713C2.94129 20.4339 3.70435 20.75 4.5 20.75H19.5C20.2956 20.75 21.0587 20.4339 21.6213 19.8713C22.1839 19.3087 22.5 18.5456 22.5 17.75V9.16998L13.572 14.663C13.0992 14.9538 12.5551 15.1078 12 15.1078C11.4449 15.1078 10.9008 14.9538 10.428 14.663L1.5 9.16998Z"
                                                        fill="#96FB4A" />
                                                    <path
                                                        d="M22.5 7.408V7.25C22.5 6.45435 22.1839 5.69129 21.6213 5.12868C21.0587 4.56607 20.2956 4.25 19.5 4.25H4.5C3.70435 4.25 2.94129 4.56607 2.37868 5.12868C1.81607 5.69129 1.5 6.45435 1.5 7.25V7.408L11.214 13.386C11.4504 13.5314 11.7225 13.6084 12 13.6084C12.2775 13.6084 12.5496 13.5314 12.786 13.386L22.5 7.408Z"
                                                        fill="#96FB4A" />
                                                </svg> </span><span
                                                class="git__contact-link__text">support01@gmail.com</span></a>
                                    </li>
                                    <li>
                                        <a href="mailto:support02@gmail.com" class="git__contact-link flex-ctr"><span
                                                class="git__contact-link__icon">
                                                <svg width="24" height="25" viewBox="0 0 24 25" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M1.5 9.16998V17.75C1.5 18.5456 1.81607 19.3087 2.37868 19.8713C2.94129 20.4339 3.70435 20.75 4.5 20.75H19.5C20.2956 20.75 21.0587 20.4339 21.6213 19.8713C22.1839 19.3087 22.5 18.5456 22.5 17.75V9.16998L13.572 14.663C13.0992 14.9538 12.5551 15.1078 12 15.1078C11.4449 15.1078 10.9008 14.9538 10.428 14.663L1.5 9.16998Z"
                                                        fill="#96FB4A" />
                                                    <path
                                                        d="M22.5 7.408V7.25C22.5 6.45435 22.1839 5.69129 21.6213 5.12868C21.0587 4.56607 20.2956 4.25 19.5 4.25H4.5C3.70435 4.25 2.94129 4.56607 2.37868 5.12868C1.81607 5.69129 1.5 6.45435 1.5 7.25V7.408L11.214 13.386C11.4504 13.5314 11.7225 13.6084 12 13.6084C12.2775 13.6084 12.5496 13.5314 12.786 13.386L22.5 7.408Z"
                                                        fill="#96FB4A" />
                                                </svg> </span><span
                                                class="git__contact-link__text">support02@gmail.com</span></a>
                                    </li>
                                    <li>
                                        <a href="mailto:support03@gmail.com" class="git__contact-link flex-ctr"><span
                                                class="git__contact-link__icon">
                                                <svg width="24" height="25" viewBox="0 0 24 25" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M1.5 9.16998V17.75C1.5 18.5456 1.81607 19.3087 2.37868 19.8713C2.94129 20.4339 3.70435 20.75 4.5 20.75H19.5C20.2956 20.75 21.0587 20.4339 21.6213 19.8713C22.1839 19.3087 22.5 18.5456 22.5 17.75V9.16998L13.572 14.663C13.0992 14.9538 12.5551 15.1078 12 15.1078C11.4449 15.1078 10.9008 14.9538 10.428 14.663L1.5 9.16998Z"
                                                        fill="#96FB4A" />
                                                    <path
                                                        d="M22.5 7.408V7.25C22.5 6.45435 22.1839 5.69129 21.6213 5.12868C21.0587 4.56607 20.2956 4.25 19.5 4.25H4.5C3.70435 4.25 2.94129 4.56607 2.37868 5.12868C1.81607 5.69129 1.5 6.45435 1.5 7.25V7.408L11.214 13.386C11.4504 13.5314 11.7225 13.6084 12 13.6084C12.2775 13.6084 12.5496 13.5314 12.786 13.386L22.5 7.408Z"
                                                        fill="#96FB4A" />
                                                </svg> </span><span
                                                class="git__contact-link__text">support03@gmail.com</span></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
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
                                    Morbi fringilla metus ac lacus dapibus.
                                </h3>
                            </div>
                            <div class="faq__item__body">
                                <p class="faq__item__dsc">
                                    Sed nec pharetra felis, in ultrices neque. Phasellus varius
                                    semper tellus, ac imperdiet erat commodo id. Aenean lobortis
                                    justo et velit ornare malesuada. Nam lacus orci, elementum eu
                                    odio ac, molestie venenatis turpis. Mauris ex ipsum, dictum
                                    gravida pretium sed, molestie nec ante. Sed ac ullamcorper
                                    nisi.
                                </p>
                            </div>
                        </div>
                        <div class="faq__item gradient-bg">
                            <div class="gradient-animated-border"></div>
                            <div class="faq__item__header collapse__trigger">
                                <div class="faq__item__collapse-icon"></div>
                                <h3 class="faq__item__title">
                                    What we like to do & what we don’t like to do
                                </h3>
                            </div>
                            <div class="faq__item__body">
                                <p class="faq__item__dsc">
                                    Sed nec pharetra felis, in ultrices neque. Phasellus varius
                                    semper tellus, ac imperdiet erat commodo id. Aenean lobortis
                                    justo et velit ornare malesuada. Nam lacus orci, elementum eu
                                    odio ac, molestie venenatis turpis. Mauris ex ipsum, dictum
                                    gravida pretium sed, molestie nec ante. Sed ac ullamcorper
                                    nisi.
                                </p>
                            </div>
                        </div>
                        <div class="faq__item gradient-bg">
                            <div class="gradient-animated-border"></div>
                            <div class="faq__item__header collapse__trigger">
                                <div class="faq__item__collapse-icon"></div>
                                <h3 class="faq__item__title">
                                    Fusce fermentum tempus sapien a sagittis tellus mattis id.
                                    Cras et enim ex.
                                </h3>
                            </div>
                            <div class="faq__item__body">
                                <p class="faq__item__dsc">
                                    Sed nec pharetra felis, in ultrices neque. Phasellus varius
                                    semper tellus, ac imperdiet erat commodo id. Aenean lobortis
                                    justo et velit ornare malesuada. Nam lacus orci, elementum eu
                                    odio ac, molestie venenatis turpis. Mauris ex ipsum, dictum
                                    gravida pretium sed, molestie nec ante. Sed ac ullamcorper
                                    nisi.
                                </p>
                            </div>
                        </div>
                        <div class="faq__item gradient-bg">
                            <div class="gradient-animated-border"></div>
                            <div class="faq__item__header collapse__trigger">
                                <div class="faq__item__collapse-icon"></div>
                                <h3 class="faq__item__title">
                                    Nunc aliquam tempus iaculis. Ut eu imperdiet velit.
                                </h3>
                            </div>
                            <div class="faq__item__body">
                                <p class="faq__item__dsc">
                                    Sed nec pharetra felis, in ultrices neque. Phasellus varius
                                    semper tellus, ac imperdiet erat commodo id. Aenean lobortis
                                    justo et velit ornare malesuada. Nam lacus orci, elementum eu
                                    odio ac, molestie venenatis turpis. Mauris ex ipsum, dictum
                                    gravida pretium sed, molestie nec ante. Sed ac ullamcorper
                                    nisi.
                                </p>
                            </div>
                        </div>
                        <div class="faq__item gradient-bg">
                            <div class="gradient-animated-border"></div>
                            <div class="faq__item__header collapse__trigger">
                                <div class="faq__item__collapse-icon"></div>
                                <h3 class="faq__item__title">
                                    Nam sit amet neque auctor, dignissim augue eu, condimentum
                                    justo.
                                </h3>
                            </div>
                            <div class="faq__item__body">
                                <p class="faq__item__dsc">
                                    Sed nec pharetra felis, in ultrices neque. Phasellus varius
                                    semper tellus, ac imperdiet erat commodo id. Aenean lobortis
                                    justo et velit ornare malesuada. Nam lacus orci, elementum eu
                                    odio ac, molestie venenatis turpis. Mauris ex ipsum, dictum
                                    gravida pretium sed, molestie nec ante. Sed ac ullamcorper
                                    nisi.
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
                            <a href="{{ url('/sign-up') }}" class="explore__btn btn-primary bg-solid">
                                Get Started Today
                            </a>
                            <a href="{{ url('/sign-up') }}" class="explore__btn btn-primary bg-transparent">
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