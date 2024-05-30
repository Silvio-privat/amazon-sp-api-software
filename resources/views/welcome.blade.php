
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Experten Schulungs</title>
        <!-- Fonts -->
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.7/css/all.css" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lipis/flag-icons@7.0.0/css/flag-icons.min.css" />

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Scripts -->
     {{-- @vite(['resources/css/app.css', 'resources/js/app.js'])   --}}

        <!-- Styles -->
    </head>
    <body class="antialiased">
            {{--Nav link side--}}
            <nav class="navbar navbar-expand-lg bg-dark border-bottom border-bottom-dark ticky-top bg-body-tertiary p-3"
            data-bs-theme="dark">
            <div class="container">
                <a class="navbar-brand fw-light" href="/register"><span class="fab fa-fort-awesome me-1"> </span>Experten-Schulungs-API Software</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end d-flex justify-content-end" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="/login">Products</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="/register">Solution</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="/profile">Pricing</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="/login">Login</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="/register">Register</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="/profile">Profile</a>
                        </li>
                    </ul>
                    <select class="selectpicker" data-width="fit" class="bg-success">
                        <option data-content='<span class="flag-icon flag-icon-us"></span> English'>English</option>
                        <option  data-content='<span class="flag-icon flag-icon-mx"></span> Español'>Deutsch</option>
                        <option  data-content='<span class="flag-icon flag-icon-mx"></span> Español'>Französisch</option>
                        <option  data-content='<span class="flag-icon flag-icon-mx"></span> Español'>Español</option>
                    </select>
                </div>
            </div>
        </nav>
        </div>
            <section class="bg-info pt-5 pb-5 shadow-sm">
                <div class="container">
                <div class="row pt-5">
                    <div class="col-12">
                    <h4 class="d-flex justify-content-center mb-5"> We create Sp-api for amazon selling partner.</h4>
                    </div>
                </div>
                <div class="row">
                    <!--ADD CLASSES HERE d-flex align-items-stretch-->
                    <div class="col-lg-4 mb-3 d-flex align-items-stretch">
                    <div class="card">
                        <img src="photo/dev-img.jpg" class="card-img-top" alt="Card Image">
                        <div class="card-body d-flex flex-column">
                        <h5 class="card-title">SP-API blog</h5>
                        <p class="card-text mb-4">Visit the blog to read articles from Amazon Solutions Architects and API experts covering a range of topics including customer stories, migration, best practices, tips and tricks, and much more.</p>
                        <a href="#" class="btn btn-primary text-white mt-auto align-self-start">Book now</a>
                        </div>
                    </div>
                    </div>
                    <!--ADD CLASSES HERE d-flex align-items-stretch-->
                    <div class="col-lg-4 mb-3 d-flex align-items-stretch">
                    <div class="card">
                        <img src="photo/phone-img.jpg" class="card-img-top" alt="Card Image">
                        <div class="card-body d-flex flex-column">
                        <h5 class="card-title">Announcements</h5>
                        <p class="card-text mb-4">Stay up-to-date on the latest updates, announcements, releases and more from our team..</p>
                        <a href="#" class="btn btn-primary text-white mt-auto align-self-start">Book now</a>
                        </div>
                    </div>
                    </div>
                    <!--ADD CLASSES HERE d-flex align-items-stretch-->
                    <div class="col-lg-4 mb-3 d-flex align-items-stretch">
                    <div class="card">
                        <img src="photo/p1_image.jpg" class="card-img-top" alt="Card Image">
                        <div class="card-body d-flex flex-column">
                        <h5 class="card-title">Developer forums</h5>
                        <p class="card-text mb-4">The Selling Partner API (SP-API) is a REST-based API that helps Amazon selling partners programmatically access their data on orders, shipments, payments, and much more. Applications using the SP-API can increase selling efficiency, reduce labor requirements, and improve response time to customers, helping selling partners grow their businesses.</p>
                        <a href="#" class="btn btn-primary text-white mt-auto align-self-start">Book now</a>
                        </div>
                    </div>
                    </div>
                </div>
                </div>
            </section>
        {{-- Card Section--}}
        <div class="bg-success m-3">
            {{--page goes here-- passing data here this is footer page --}}
        @include('card.card')
        </div>
        <div class="bg-success m-3">
             {{--page goes here-- passing data here this is footer page --}}
            @include('footer.footer')
        </div>
        </div>

  </body>
</html>








