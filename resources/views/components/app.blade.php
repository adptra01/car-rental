<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'none' }} Page - Rent your favourite car</title>
    <link rel="shortcut icon" href="front/favicon.svg" type="image/svg+xml">
    <link rel="stylesheet" href="front/assets/css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600&family=Open+Sans&display=swap"
        rel="stylesheet">
    @vite([])
</head>

<body>

    <header class="header" data-header>
        <div class="container">

            <div class="overlay" data-overlay></div>

            <a href="#" class="logo">
                <h3 class="font-weight-bold">Car Rental</h3>
            </a>

            <nav class="navbar" data-navbar>
                <ul class="navbar-list">

                    <li>
                        <a href="/" class="navbar-link" data-nav-link>Home</a>
                    </li>

                    <li>
                        <a href="{{ Route('explore') }}" class="navbar-link" data-nav-link>Explore cars</a>
                    </li>

                </ul>
            </nav>

            <div class="header-actions">

                <div class="header-contact">
                    <a href="tel:88002345678" class="contact-link">8 800 234 56 78</a>

                    <span class="contact-time">Mon - Sat: 9:00 am - 6:00 pm</span>
                </div>
                @guest
                    <a href="{{ Route('login') }}" class="btn" aria-labelledby="aria-label-txt">
                        <span id="aria-label-txt">Login</span>
                    </a>
                    <a href="{{ Route('register') }}" class="btn" aria-labelledby="aria-label-txt">
                        <span id="aria-label-txt">Register</span>
                    </a>
                @endguest
                @auth

                    <a href="#" class="btn user-btn" aria-label="Profile">
                        <ion-icon name="person-outline"></ion-icon>
                    </a>
                @endauth

                <button class="nav-toggle-btn" data-nav-toggle-btn aria-label="Toggle Menu">
                    <span class="one"></span>
                    <span class="two"></span>
                    <span class="three"></span>
                </button>

            </div>

        </div>
    </header>
    <main>
        <article>

            <section class="section">
                {{ $slot }}
        </article>
    </main>
    <footer class="footer">
        <div class="container">

            <div class="footer-top">

                <div class="footer-brand">
                    <a href="#" class="logo">
                        <h3 class="font-weight-bold">Car Rental</h3>
                    </a>

                    <p class="footer-text">
                        Search for cheap rental cars in New York. With a diverse fleet of 19,000 vehicles, Waydex offers
                        its
                        consumers an
                        attractive and fun selection.
                    </p>
                </div>

                <ul class="footer-list">

                    <li>
                        <p class="footer-list-title">Company</p>
                    </li>

                    <li>
                        <a href="#" class="footer-link">About us</a>
                    </li>

                    <li>
                        <a href="#" class="footer-link">Pricing plans</a>
                    </li>

                    <li>
                        <a href="#" class="footer-link">Our blog</a>
                    </li>

                    <li>
                        <a href="#" class="footer-link">Contacts</a>
                    </li>

                </ul>

                <ul class="footer-list">

                    <li>
                        <p class="footer-list-title">Support</p>
                    </li>

                    <li>
                        <a href="#" class="footer-link">Help center</a>
                    </li>

                    <li>
                        <a href="#" class="footer-link">Ask a question</a>
                    </li>

                    <li>
                        <a href="#" class="footer-link">Privacy policy</a>
                    </li>

                    <li>
                        <a href="#" class="footer-link">Terms & conditions</a>
                    </li>

                </ul>

                <ul class="footer-list">

                    <li>
                        <p class="footer-list-title">Neighborhoods in New York</p>
                    </li>

                    <li>
                        <a href="#" class="footer-link">Manhattan</a>
                    </li>

                    <li>
                        <a href="#" class="footer-link">Central New York City</a>
                    </li>

                    <li>
                        <a href="#" class="footer-link">Upper East Side</a>
                    </li>

                    <li>
                        <a href="#" class="footer-link">Queens</a>
                    </li>

                    <li>
                        <a href="#" class="footer-link">Theater District</a>
                    </li>

                    <li>
                        <a href="#" class="footer-link">Midtown</a>
                    </li>

                    <li>
                        <a href="#" class="footer-link">SoHo</a>
                    </li>

                    <li>
                        <a href="#" class="footer-link">Chelsea</a>
                    </li>

                </ul>

            </div>

            <div class="footer-bottom">

                <ul class="social-list">

                    <li>
                        <a href="#" class="social-link">
                            <ion-icon name="logo-facebook"></ion-icon>
                        </a>
                    </li>

                    <li>
                        <a href="#" class="social-link">
                            <ion-icon name="logo-instagram"></ion-icon>
                        </a>
                    </li>

                    <li>
                        <a href="#" class="social-link">
                            <ion-icon name="logo-twitter"></ion-icon>
                        </a>
                    </li>

                    <li>
                        <a href="#" class="social-link">
                            <ion-icon name="logo-linkedin"></ion-icon>
                        </a>
                    </li>

                    <li>
                        <a href="#" class="social-link">
                            <ion-icon name="logo-skype"></ion-icon>
                        </a>
                    </li>

                    <li>
                        <a href="#" class="social-link">
                            <ion-icon name="mail-outline"></ion-icon>
                        </a>
                    </li>

                </ul>

                <p class="copyright">
                    &copy; 2022 <a href="#">codewithsadee</a>. All Rights Reserved
                </p>

            </div>

        </div>
    </footer>




    <script src="front/assets/js/script.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>
