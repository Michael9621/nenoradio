<!doctype html>
<html lang="en">
 
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Mwangaza wa neno radio</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('../assets/vendor/bootstrap/css/bootstrap.min.css') }}">
    <link href="{{ asset('../assets/vendor/fonts/circular-std/style.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('../assets/libs/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('../assets/vendor/fonts/fontawesome/css/fontawesome-all.css') }}">
    <link rel="stylesheet" href="{{ asset ('assets/vendor/summernote/css/summernote-bs4.css') }}">
    <link rel="stylesheet" href="{{ asset('css/toastr.min.css') }}">
    <link rel="stylesheet" href="{{ asset('../assets/vendor/multi-select/css/multi-select.css') }}">
</head>

<body>
    <!-- ============================================================== -->
    <!-- main wrapper -->
    <!-- ============================================================== -->
    <div class="dashboard-main-wrapper">
         <!-- ============================================================== -->
        <!-- navbar -->
        <!-- ============================================================== -->
        <div class="dashboard-header">
            <nav class="navbar navbar-expand-lg bg-white fixed-top">
                <a class="navbar-brand" href="{{ route('index') }}">Mwangaza Admin</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse " id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto navbar-right-top">
                        
                        
                        <li class="nav-item dropdown nav-user">
                            <a class="nav-link nav-user-img" href="#" id="navbarDropdownMenuLink2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">welcome {{ Auth::user()->name}} :)</a>
                            <div class="dropdown-menu dropdown-menu-right nav-user-dropdown" aria-labelledby="navbarDropdownMenuLink2">
                                <div class="nav-user-info">
                                    <h5 class="mb-0 text-white nav-user-name">{{ Auth::user()->name}}</h5>
                                    <span class="status"></span><span class="ml-2">Available</span>
                                </div>
                                
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <!-- ============================================================== -->
        <!-- end navbar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- left sidebar -->
        <!-- ============================================================== -->
        <div class="nav-left-sidebar sidebar-dark">
            <div class="menu-list">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <a class="d-xl-none d-lg-none" href="#">Dashboard</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav flex-column">

                            <li class="nav-divider">
                                menu
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('index')}}">Dashboard</a>
                            </li>

                            <li class="nav-divider">
                                blog
                            </li>

                            <li class="nav-item">
                                <a class="nav-link"  data-toggle="collapse" aria-expanded="false" data-target="#submenu-4" aria-controls="submenu-4">radio blog</a>
                                <div id="submenu-4" class="collapse submenu" style="">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('view_posts')}}">view posts<span class="badge badge-secondary">New</span></a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('create_post')}}">create a post</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('trashed_posts')}}">trashed posts</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        
                            @if(Auth::user()->admin)
                                
                                <li class="nav-item">
                                    <a class="nav-link"  data-toggle="collapse" aria-expanded="false" data-target="#submenu-2" aria-controls="submenu-2">manage categories</a>
                                    <div id="submenu-2" class="collapse submenu" style="">
                                        <ul class="nav flex-column">
                                            <li class="nav-item">
                                                <a class="nav-link" href="{{ route('view_category')}}">view categories<span class="badge badge-secondary">New</span></a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="{{ route('create_category')}}">create categories</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>

                                <li class="nav-divider">
                                    shows and presenters
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link"  data-toggle="collapse" aria-expanded="false" data-target="#submenu-6" aria-controls="submenu-6">presenters</a>
                                    <div id="submenu-6" class="collapse submenu" style="">
                                        <ul class="nav flex-column">
                                            <li class="nav-item">
                                                <a class="nav-link" href="{{ route('view_presenters')}}">view presenters<span class="badge badge-secondary">New</span></a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="{{ route('create_presenter')}}">create presenters</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link"  data-toggle="collapse" aria-expanded="false" data-target="#submenu-5" aria-controls="submenu-5">shows</a>
                                    <div id="submenu-5" class="collapse submenu" style="">
                                        <ul class="nav flex-column">
                                            <li class="nav-item">
                                                <a class="nav-link" href="{{ route('tv_view_show')}}">TV shows<span class="badge badge-secondary">New</span></a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="{{ route('radio_view_show')}}">Radio shows</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="{{ route('create_show')}}">Create shows</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>

                                <li class="nav-divider">
                                    manage users
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="collapse" aria-expanded="false" data-target="#submenu-1" aria-controls="submenu-2">manage users</a>
                                    <div id="submenu-1" class="collapse submenu" style="">
                                        <ul class="nav flex-column">
                                            <li class="nav-item">
                                                <a class="nav-link" href="{{ route('view_users') }}">view users <span class="badge badge-secondary">New</span></a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="{{ route('create_user') }}">create users</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                            @endif

                        </ul>
                    </div>
                </nav>
            </div>
            </div>
            
                @yield('content')
                <!-- ============================================================== -->
                <!-- footer -->
                <!-- ============================================================== -->
                <div class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 text-center">
                                Copyright © 2019. All rights reserved
                                    <br>
                                Mwangaza IT...powered by mitochondria 
                            </div>
                            
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- end footer -->
                <!-- ============================================================== -->
            </div>
        </div>
    <!-- ============================================================== -->
    <!-- end main wrapper -->
    <!-- ============================================================== -->
    <!-- Optional JavaScript -->
    <script src="{{ asset('../assets/vendor/jquery/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('../assets/vendor/bootstrap/js/bootstrap.bundle.js') }}"></script>
    <script src="{{ asset('../assets/vendor/slimscroll/jquery.slimscroll.js') }}"></script>
    <script src="{{ asset('../assets/libs/js/main-js.js') }}"></script>
    <script src="{{ asset ('assets/vendor/summernote/js/summernote-bs4.js') }}"></script>
    <script src="{{ asset('js/toastr.min.js') }}"></script>
    <script src="{{ asset('../assets/vendor/multi-select/js/jquery.multi-select.js') }}"></script>
    <script>
    $('#my-select').multiSelect()
    </script>
    <script>
        $(document).ready(function() {
            $('#summernote').summernote({
                height: 300

            });
        });

        @if(Session::has('success'))
            toastr.success("{{Session::get('success')}}")
        @endif
        @if(Session::has('info'))
            toastr.info("{{Session::get('info')}}")
        @endif
        @if(Session::has('warning'))
            toastr.warning("{{Session::get('warning')}}")
        @endif

        
    </script>

    <script type="text/javascript">
        function text() {
            if (document.getElementById('tv').checked) {

                document.getElementById('radio_domain').style.display = 'none';
                
                document.getElementById('tv_domain').style.display = 'block';
            }

            else document.getElementById('tv_domain').style.display = 'none';

        }

        function text2(){
            if (document.getElementById('radio').checked) {
                document.getElementById('tv_domain').style.display = 'none';

                document.getElementById('radio_domain').style.display = 'block';
            }

            else document.getElementById('radio_domain').style.display = 'none';
        }
    </script>
</body>
 
</html>