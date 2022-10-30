<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/svg+xml" href="{{ asset('assets/images/favicon.svg') }}">
    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
        integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://kit.fontawesome.com/8e0bceeac7.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="{{ asset('assets/css/styles.css') }}">
    <title>Vetted-About US</title>
</head>

<body>
    <header class="site-header">
        <div class="container">
            <div class="header-row-wrap">
                <div class="row">
                    <div class="col-md-3 themed-grid-col logo-section">
                        <a href="http://vttd.com/"><img src="{{ asset('assets/images/site-logo.svg') }}" alt="Vetted"></a>
                    </div>
                    <div class="col-md-6 themed-grid-col">
                        <nav class="navbar navbar-expand-lg" aria-label="Eleventh navbar example">
                            <div class="container-fluid">
                                <a class="navbar-brand" href="home.html"><img src="img/logo.png" alt=""></a>
                                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#navbarsExample09" aria-controls="navbarsExample09"
                                    aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="navbar-toggler-icon"></span>
                                </button>

                                <div class="collapse navbar-collapse" id="navbarsExample09">
                                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                        <li class="nav-item">
                                            <a class="nav-link" aria-current="page" href="http://vttd.com/">Home</a>
                                        </li>
                                        <li class="nav-item  active">
                                            <a class="nav-link" aria-current="page" href="/about-us.html">About</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" aria-current="page" href="#">Events</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" aria-current="page" href="#">Login</a>
                                        </li>

                                        <li class="nav-item">
                                            <a class="nav-link contact-us" aria-current="page" href="#">Contact
                                                Us</a>
                                        </li>

                                    </ul>
                                </div>
                            </div>
                        </nav>
                    </div>
                    <div class="col-md-3 themed-grid-col header-right-section">
                        <ul>
                            <li class="btn-client-login"><a href="#">Client Login</a></li>
                            <li class="btn-register"><a href="#">Register</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="search-section">
                <form class="d-flex" role="search">
                    <input class="form-control" type="search" placeholder="Search for company name"
                        aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>

        </div>
        </div>
    </header>
    <main class="about-site-main">
        <div class="about-1st-section-wrap">
            <div class="container">
                <div class="row about-1st-section">
                    <div class="page-title">About US</div>
                    <h1>Vetted is the primary resource for KYC information on corporate entities across Sub-Saharan
                        Africa</h1>
                </div>
            </div>
        </div>

        <div class="about-2nd-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h2 class="title-b-green">Our Company</h2>
                        <p>Corporate profiles from Vetted are collected from more than 2000 data points, including local
                            company registries, regulatory agencies, proprietary databases and through on-ground field
                            interviews. </p>
                        <a href="#" class="btn-green">Discover</a>
                    </div>
                    <div class="col-md-6">
                        <img src="{{ asset('assets/images/about-us-section2-img.jpg') }}" alt="Our Company" />
                    </div>
                </div>
            </div>
        </div>


        <div class="about-3rd-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <img src="{{ asset('assets/images/about-us-section3-img.jpg') }}" alt="Our Offering" />
                    </div>
                    <div class="col-md-6 right-side">
                        <h2 class="title-b-green">Our Offering</h2>
                        <p>We help our clients fulfill due diligence, risk assessment, compliance and KYC requirements
                            by providing in-depth information on potential partners, clients, vendors and other parties
                            of interest across Sub-Saharan Africa. </p>
                        <a href="#" class="btn-green">Discover</a>
                    </div>
                </div>
            </div>
        </div>


        <div class="aobut-4th-section">
            <div class="container">
                <div class="row">
                    <h1>No other platform provides the wealth of KYC information our platform offers on African
                        corporate entities. Not only do we curate this information but we consistently updates and
                        maintains it to the benefit of our clients.</h1>
                </div>
            </div>
        </div>

    </main>
    <footer class="site-footer">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <img src="{{ asset('assets/images/site-logo.svg') }}" alt="Vetted" class="footer-logo" />
                    <p>Vetted is the primary source for corporate KYC information across Africa</p>
                </div>
                <div class="col-md-2">
                    <h1 class="title">Policies</h1>
                    <ul>
                        <li><a href="#">Privacy policy</a></li>
                        <li><a href="#">Cookie Policy</a></li>
                        <li><a href="#">Terms of use</a></li>
                        <li><a href="#">Acceptable use policy</a></li>
                    </ul>
                </div>
                <div class="col-md-2">
                    <h1 class="title">About Us</h1>
                    <ul>
                        <li><a href="#">Who we are</a></li>
                        <li><a href="#">What we do</a></li>
                        <li><a href="#">FAQs</a></li>
                        <li><a href="#">Contact Us</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="copyright-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-9">
                        <p>© Vetted Technologies Ltd</p>
                    </div>
                    <div class="col-md-3 footer-social-icons">
                        <ul class="social-media">
                            <li class="social-in"><a href="#">In</a></li>
                            <li class="social-twitter"><a href="#">Twitter</a></li>
                            <li class="social-youtube"><a href="#">Youtube</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</body>

</html>
