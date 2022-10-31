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
    <title>Vetted Website</title>
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
                                <a class="navbar-brand" href="home.html"><img src="{{ asset('assets/img/logo.png') }}" alt=""></a>
                                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#navbarsExample09" aria-controls="navbarsExample09"
                                    aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="navbar-toggler-icon"></span>
                                </button>

                                <div class="collapse navbar-collapse" id="navbarsExample09">
                                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                        <li class="nav-item active">
                                            <a class="nav-link" aria-current="page" href="http://vttd.com/">Home</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" aria-current="page" href="{{route('aboutus')}}">About</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" aria-current="page" href="#">Events</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" aria-current="page" href="#">Login</a>
                                        </li>

                                        <li class="nav-item">
                                            <a class="nav-link contact-us" aria-current="page" href="{{route('aboutus')}}">Contact
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
    <main class="site-main">
        <div class="container">

            <div class="row home-1st-section">
                <div class="col-md-6">
                    <div class="date-wrap">
                        <span class="degit-green">01</span>/ 03
                    </div>
                    <h1>Comprehensive KYC Data on Companies in Sub-Saharan Africa</h1>
                    <a href="#" class="btn-green">Discover</a>
                </div>
                <div class="col-md-6 right-side-section">
                    <img src="{{ asset('assets/images/home-1st-section-img.svg') }}" alt="Comprehensive KYC" />
                </div>
            </div>
        </div>
        <!--end of container class -->
        <div class="home-2nd-section">
            <div class="container">
                <div class="row">
                    <h1 class="title">Why <span>Vetted?</span></h1>
                    <p>Our offering helps companies fulfill due diligence, risk assessment, compliance and KYC
                        requirements by providing in-depth information on potential partners, clients, vendors and other
                        parties of interest across Sub-Saharan Africa. </p>
                </div>
                <div class="why-vetted">
                    <div class="why-section-1">
                        <h1>40+</h1>
                        <p>Countries</p>
                    </div>
                    <div class="why-section-2">
                        <h1>2000+</h1>
                        <p>Data Points</p>
                    </div>
                    <div class="why-section-3">
                        <h1>1</h1>
                        <p>Platform</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="home-3rd-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h2>How it works?</h2>
                        <p>Corporate profiles from Vetted are collated from more than 2000 data points, including local
                            company registries, regulatory agencies, proprietary databases and through on-ground field
                            interviews. </p>
                        <a href="#" class="btn-green">Discover</a>
                    </div>
                    <div class="col-md-6">
                        <img src="{{ asset('assets/images/how-it-work-img.svg') }}" alt="How it works?" />
                    </div>
                </div>
            </div>
        </div>


        <div class="home-4th-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <img src="{{ asset('assets/images/our-service-img.svg') }}" alt="Our Service" />
                    </div>
                    <div class="col-md-6 right-side">
                        <h2>Our Service</h2>
                        <p>Our team of analysts, country and sector specialists across 40 Sub-Saharan African
                            jurisdictions further refine, maintain and provide context for our collated KYC data and
                            profiles for actionable use by our clients. </p>
                        <a href="#" class="btn-green">Discover</a>
                    </div>
                </div>
            </div>
        </div>


        <div class="home-5th-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h2>Coverage</h2>
                        <p>We cover the entirety of Sub-Saharan Africa across multiple jurisdictions, languages, legal
                            systems, regulatory and reporting requirements.</p>
                        <a href="#" class="btn-green">Discover</a>
                    </div>
                    <div class="col-md-6">
                        <img src="{{ asset('assets/images/coverage-img.svg') }}" alt="How it works?" />
                    </div>
                </div>
            </div>
        </div>


        <div class="home-6th-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <ul>
                            <li>
                                <h3>Concise</h3>
                            </li>
                            <li>
                                <h3>Comprehensive</h3>
                            </li>
                            <li>
                                <h3>Clear</h3>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-6 right-sdie">
                        <h1>Vetted.</h1>
                    </div>
                </div>
            </div>
        </div>


        <div class="home-7th-section">
            <div class="container">
                <div class="row">
                    <h1>Special Requirements?</h1>
                    <p>Please contact us</p>
                    <div class="arrow-wrap">
                        <a href="#"><img src="{{ asset('assets/images/special-arrow-icon.svg') }}" alt="" /></a>
                    </div>
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
