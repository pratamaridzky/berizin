@section('menus')
    <div class="header-nav-bar">
        <div class="container">
            <div class="header-row">
                <div class="header-column">
                    <div class="header-row">

                        <div class="header-column">
                            <div class="header-nav justify-content-start header-nav-line header-nav-bottom-line header-nav-bottom-line-effect-1">
                                <div class="header-nav-main header-nav-main-square header-nav-main-dropdown-no-borders header-nav-main-effect-2 header-nav-main-sub-effect-1">
                                    <nav class="collapse">
                                    <!-- menus -->
                                        <ul class="nav nav-pills" id="mainNav">
                                            <li class="dropdown">
                                                <a class="dropdown-item {{ $home ?? ''}}" href="home">
                                                    Home
                                                </a>
                                            </li>
                                            <li class="dropdown">
                                                <a class="dropdown-item {{ $about ?? ''}}" href="about" >
                                                    Tentang Kami
                                                </a>
                                            </li>
                                            <li class="dropdown">
                                                <a class="dropdown-item {{ $attorneys ?? ''}}" href="attorneys">
                                                    Attorneys
                                                </a>
                                            </li>
                                            <li class="dropdown">
                                                <a class="dropdown-item {{ $jasa ?? ''}}" href="jasa">
                                                    Jasa
                                                </a>
                                            </li>										
                                            <li class="dropdown">
                                                <a class="dropdown-item {{ $event ?? ''}}" href="event">
                                                    Event
                                                </a>
                                            </li>
                                            <li class="dropdown">
                                                <a class="dropdown-item {{ $contact ?? ''}}" href="contact">
                                                    Contact Us
                                                </a>
                                            </li>
                                        </ul>
                                    <!-- end menus -->
                                    </nav>
                                </div>
                            </div>
                        </div>
                        
                        <!-- search -->
                        <div class="header-column">
                            <div class="header-row justify-content-end py-2">
                                <div class="header-nav-features header-nav-features-no-border ms-0 ps-0 w-100">
                                    <form role="search" class="d-flex w-100">
                                        <div class="simple-search input-group w-100">
                                            <input class="form-control bg-transparent border-0 border-radius-0 text-2" id="headerSearch" name="q" type="search" value="" placeholder="Search...">
                                            <button class="btn border-0" type="submit">
                                                <i class="fa fa-search text-color-primary header-nav-top-icon p-relative top-1"></i>
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <button class="btn header-btn-collapse-nav" data-bs-toggle="collapse" data-bs-target=".header-nav-main nav">
                            <i class="fas fa-bars"></i>
                        </button>
                        <!-- end search -->

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection