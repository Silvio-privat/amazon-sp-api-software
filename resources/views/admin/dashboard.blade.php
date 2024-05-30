<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
crossorigin="anonymous" referrerpolicy="no-referrer" />

<link rel="preconnect" href="https://fonts.bunny.net">
<link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />


<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.7/css/all.css" />
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />

<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lipis/flag-icons@7.0.0/css/flag-icons.min.css" />

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</head>
<body>
 <div class="container-fluid">
    <div class="row flex-nowrap">
        <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 bg-info">
            <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
                <a href="/" class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                    <span class="fs-5 d-none d-sm-inline">Menu</span>
                </a>
                <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">
                    <li class="nav-item">
                        <a href="#" class="nav-link align-middle px-0">
                            <i class="bi-person-circle"></i> <span class="ms-1 d-none d-sm-inline">Kampagnen</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link align-middle px-0">
                            <i class="fs-4 bi-house"></i> <span class="ms-1 d-none d-sm-inline">Deine Produkte</span>
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                          Giveaways
                        </a>
                        <ul class="dropdown-menu bg-info" aria-labelledby="navbarDropdownMenuLink ">
                          <li><a class="dropdown-item" href="#">Gratis Produkte</a></li>
                          <li><a class="dropdown-item" href="#">eBooks/Anleitungen</a></li>
                          <li><a class="dropdown-item" href="#">Verträge/Garantie</a></li>
                          <li><a class="dropdown-item" href="#">Gutscheine</a></li>
                        </ul>
                      </li>
                    <li>
                        <a href="#" class="nav-link px-0 align-middle">
                            <i class="fs-4 bi-table"></i> <span class="ms-1 d-none d-sm-inline">QR/Flyer</span></a>
                    </li>
                    <li>
                        <a href="#submenu2" data-bs-toggle="collapse" class="nav-link px-0 align-middle ">
                            <i class="bi-person"></i> <span class="ms-1 d-none d-sm-inline">Verifikationszentrum</span></a>
                    </li>
                    <li>
                        <a href="#submenu3" data-bs-toggle="collapse" class="nav-link px-0 align-middle">
                            <i class="fs-4 bi-grid"></i> <span class="ms-1 d-none d-sm-inline">Products</span> </a>
                    </li>
                    <li>
                        <a href="#" class="nav-link px-0 align-middle">
                        <i class="fs-4 bi-people"></i> <span class="ms-1 d-none d-sm-inline">Customers</span> </a>
                    </li>
                </ul>
                <hr/>
                <div class="dropdown pb-4">
                    <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                        {{--<img src="/" alt="hugenerd" width="30" height="30" class="rounded-circle" />--}}
                        <span class="d-none d-sm-inline mx-1">Log in</span>
                    </a>

                    <ul class="dropdown-menu dropdown-menu-dark text-small shadow">
                        <li><a class="dropdown-item" href="#">New project...</a></li>
                        <li><a class="dropdown-item" href="/profile">Settings</a></li>
                        <li><a class="dropdown-item" href="/profile">Profile</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                        <a class="dropdown-item" href="route('logout')"
                         onclick="event.preventDefault();
                          this.closest('form').submit();">
                         {{ __('Sign out') }}
                        </a>
                    </form>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col py-3">
            <h5> This is Admin Dashboard Reset Your Information</h5>
            <p>If you want to any Information please feel free to contact us!</p>
            <div class="d-flex mb-3 bg-secondary">
                <a class="p-3 text-decoration-none text-white" href="{{ route('admin/products/create') }}">
                  <span>Algemeine informationen</span>
                </a>
                <a class="p-3 text-decoration-none text-white" href="/profile">
                  <span>Rechung & Zahlung</span>
                </a>
                <a class="p-3 text-decoration-none text-white" href="/profile">
                  <span>Impressum</span>
                </a>
              </div>
        </div>
    </div>
 </div>
</body>
</html>


















