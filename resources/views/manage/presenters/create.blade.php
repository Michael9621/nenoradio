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
                        <h2 class="pageheader-title">Create a presenter</h2>
                        <p class="pageheader-text">Nulla euismod urna eros, sit amet scelerisque torton lectus vel mauris facilisis faucibus at enim quis massa lobortis rutrum.</p>
                        <div class="page-breadcrumb">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard > create a show</a></li>
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
                                    <form method="POST" action="{{ route('store_presenter') }}" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <input id="inputText3" type="text"  name="name" class="form-control" placeholder="enter presenter's name">
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleFormControlTextarea1">Featured image</label>
                                            <input id="inputText3" type="file"  name="featured" class="form-control" placeholder="featured image">
                                        </div>

                                        <div class="form-group">
                                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="5"name="bio" placeholder="presenter's bio"></textarea>
                                        </div>

                                        <h4>choose domain</h4>
                                        @foreach($domains as $domain)
                                        <label class="custom-control custom-checkbox custom-control-inline">
                                            <input type="checkbox" name=domain[] value="{{ $domain->id }}" class="custom-control-input"><span class="custom-control-label">{{ $domain->domain }}</span>
                                        </label>
                                        @endforeach
                                       
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