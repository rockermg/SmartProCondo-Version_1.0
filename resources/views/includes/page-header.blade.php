<!-- Header Starts -->
<nav class="container-fluid navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl w-auto" id="navbarBlur" data-scroll="false">
    <div class=" py-1 px-lg-3 d-flex align-items-baseline flex-column-reverse justify-content-between flex-lg-column-reverse  flex-xl-row w-100">

        <!-- Start Breadcrumb & Title-->
        <nav aria-label="breadcrumb d-none">
        <ol class="breadcrumb bg-transparent mb-0 pb-0 mt-2 px-0 me-sm-6 me-5 mt-xl-0">
            
            <?php if($page_name){ ?>
                <li class="breadcrumb-item text-sm"><a class="opacity-5 text-white" href="{{route($home_url)}}"><?php echo $home_name  ?></a>
                <?php } else {  ?>
                <li class="breadcrumb-item text-sm text-white active" aria-current="page"><?php echo $home_name; ?></li>
            <?php } ?>  
            <?php if($page_name){ ?>
                <li class="breadcrumb-item text-sm text-white active" aria-current="page"><?php echo $page_name  ?></li>
            <?php } ?>
        </ol>

        <h3 class="font-weight-bolder text-white mb-0"><?php echo $page_title  ?></h6>
        </nav>
        <!-- End Breadcrumb & Title-->

        <div class="collapse navbar-collapse mt-2 mt-xl-0 me-md-0 w-100 w-xl-auto flex-xl-grow-0 w-xl-auto flex-column flex-sm-row justify-content-sm-between" id="navbar">

        <!-- Start Mobile Size Only Logo-->
        <div class="d-xl-none mobile-logo w-100 w-sm-auto">
            <a class="navbar-brand m-0" href=" https://demos.creative-tim.com/argon-dashboard/pages/dashboard.html " target="_blank">
            <img src="{{asset('img/SMARTCONDOPRO-mobile.png')}}" class="navbar-brand-img h-100" alt="main_logo">
            <!-- <span class="ms-1 font-weight-bold">Argon Dashboard 2</span> -->
            </a>
        </div>
        <!-- Start Mobile Size Only Logo-->

        <!-- Start Rightside Nav-->
        <ul class="navbar-nav w-sm-auto">

            <li class="nav-item dropdown ms-2 me-4 d-flex align-items-center">
            <a href="javascript:;" class="nav-link text-white p-0" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="fa fa-bell cursor-pointer"></i>
            </a>
            <ul class="dropdown-menu tool-tip  dropdown-menu-end  px-2 py-3 me-sm-n4" aria-labelledby="dropdownMenuButton">

                <li class="mb-2">
                <a class="dropdown-item border-radius-md" href="javascript:;">
                    <div class="d-flex py-1">
                    <div class="">
                        <img src="./assets/img/team-2.jpg" class="avatar avatar-sm  me-3 ">
                    </div>
                    <div class="d-flex flex-column justify-content-center">
                        <h6 class="text-sm font-weight-normal mb-1">
                        <span class="font-weight-bold">New message</span> from Laur
                        </h6>
                        <p class="text-xs text-secondary mb-0">
                        <i class="fa fa-clock me-1"></i>
                        13 minutes ago
                        </p>
                    </div>
                    </div>
                </a>
                </li>
                
                <li class="mb-2">
                <a class="dropdown-item border-radius-md" href="javascript:;">
                    <div class="d-flex py-1">
                    <div class="">
                        <img src="./assets/img/small-logos/logo-spotify.svg" class="avatar avatar-sm bg-gradient-dark  me-3 ">
                    </div>
                    <div class="d-flex flex-column justify-content-center">
                        <h6 class="text-sm font-weight-normal mb-1">
                        <span class="font-weight-bold">New album</span> by Travis Scott
                        </h6>
                        <p class="text-xs text-secondary mb-0">
                        <i class="fa fa-clock me-1"></i>
                        1 day
                        </p>
                    </div>
                    </div>
                </a>
                </li>
                <li>
                <a class="dropdown-item border-radius-md" href="javascript:;">
                    <div class="d-flex py-1">
                    <div class="avatar avatar-sm bg-gradient-secondary  me-3  my-auto">
                        <svg width="12px" height="12px" viewBox="0 0 43 36" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                        <title>credit-card</title>
                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <g transform="translate(-2169.000000, -745.000000)" fill="#FFFFFF" fill-rule="nonzero">
                            <g transform="translate(1716.000000, 291.000000)">
                                <g transform="translate(453.000000, 454.000000)">
                                <path class="color-background" d="M43,10.7482083 L43,3.58333333 C43,1.60354167 41.3964583,0 39.4166667,0 L3.58333333,0 C1.60354167,0 0,1.60354167 0,3.58333333 L0,10.7482083 L43,10.7482083 Z" opacity="0.593633743"></path>
                                <path class="color-background" d="M0,16.125 L0,32.25 C0,34.2297917 1.60354167,35.8333333 3.58333333,35.8333333 L39.4166667,35.8333333 C41.3964583,35.8333333 43,34.2297917 43,32.25 L43,16.125 L0,16.125 Z M19.7083333,26.875 L7.16666667,26.875 L7.16666667,23.2916667 L19.7083333,23.2916667 L19.7083333,26.875 Z M35.8333333,26.875 L28.6666667,26.875 L28.6666667,23.2916667 L35.8333333,23.2916667 L35.8333333,26.875 Z"></path>
                                </g>
                            </g>
                            </g>
                        </g>
                        </svg>
                    </div>
                    <div class="d-flex flex-column justify-content-center">
                        <h6 class="text-sm font-weight-normal mb-1">
                        Payment successfully completed
                        </h6>
                        <p class="text-xs text-secondary mb-0">
                        <i class="fa fa-clock me-1"></i>
                        2 days
                        </p>
                    </div>
                    </div>
                </a>
                </li>
            </ul>
            </li>

            <li class="nav-item dropdown d-flex align-items-center">

            <a href="javascript:;" class="nav-link text-white font-weight-bold px-0 d-flex align-items-center" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="fa fa-user-circle-o me-sm-2 text-lg"></i>
                <div class="d-sm-flex d-none flex-column lh-1">
                    <span class="text-white text-sm">{{auth()->user()->first_name}} {{auth()->user()->last_name}}</span>
                    <span class="text-secondary text-sm text-xs">{{auth()->user()->department_id==1?'Human Resource':(auth()->user()->department_id==2?'Accounts':'Labour')}}</span>
                </div>
            </a>

            <ul class="tool-tip dropdown-menu mw-75  dropdown-menu-end  px-2 py-2 me-sm-n4" aria-labelledby="dropdownMenuButton">
                <li>
                    <a class="dropdown-item border-radius-md" href="{{route('profile')}}">
                        <div class="d-flex py-1 align-items-center">
                            <i class="fa fa-user me-sm-3 text-lg"></i>
                            <span class="font-weight-normal">Profile</span>
                        </div>
                    </a>
                </li>
                <li>
                    <a class="dropdown-item border-radius-md" href="{{route('logout.perform')}}">
                        <div class="d-flex py-1 align-items-center">
                            <i class="fa fa-sign-out me-sm-3 text-lg"></i>
                            <span class="font-weight-normal">Logout</span>
                        </div>
                    </a>
                </li>

            </ul>
            </li>

            <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
            <a href="javascript:;" class="nav-link text-white p-0" id="iconNavbarSidenav">
                <div class="sidenav-toggler-inner">
                <i class="sidenav-toggler-line bg-white"></i>
                <i class="sidenav-toggler-line bg-white"></i>
                <i class="sidenav-toggler-line bg-white"></i>
                </div>
            </a>
            </li>
            <!-- End Rightside Nav-->

        </ul>
        <!-- End Breadcrumb & Title-->

        </div>

    </div>
</nav>
<!-- Header Ends -->