@extends('manage.index')

@section('content')

<div class="dashboard-wrapper">
    <div class="dashboard-ecommerce">
        <div class="container-fluid dashboard-content ">
            <!-- ============================================================== -->
            <!-- pageheader  -->
            <!-- ============================================================== -->
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="page-header">
                        <h2 class="pageheader-title">Create a user</h2>
                        <p class="pageheader-text">Nulla euismod urna eros, sit amet scelerisque torton lectus vel mauris facilisis faucibus at enim quis massa lobortis rutrum.</p>
                        <div class="page-breadcrumb">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard > create a user</a></li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- end pageheader  -->
            <!-- ============================================================== -->
            
            <div class="row">
                <div class="col-xl-12">
                    
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="card">
                                <div class="card-body">
                                    <form method="POST" action="{{ route('store_user') }}">
                                        <div class="form-group">
                                            <input id="inputText3" type="text"  name="name" class="form-control" placeholder="enter a user's name">
                                        </div>
                                        <div class="form-group">
                                            <input id="inputText3" type="email"  name="email" class="form-control" placeholder="enter a user's email">
                                        </div>
                                        <div class="form-group">
                                            <input id="inputText3" type="password"  name="password" class="form-control" placeholder="password">
                                        </div>
                                        <div class="form-group">
                                            <input id="inputText3" type="password"  name="password_confirmation" class="form-control" placeholder="confirm password">
                                        </div>

                                        <div class="form-group">
                                            <button class="btn btn-success" type="submit">Save</button>
                                        </div>   

                                        @csrf
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
            
                </div>
            
            </div>
        </div>
    </div>      
</div>

@endsection