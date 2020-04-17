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
                            <h2 class="pageheader-title">show profile</h2>
                            <p class="pageheader-text">Nulla euismod urna eros, sit amet scelerisque torton lectus vel mauris facilisis faucibus at enim quis massa lobortis rutrum.</p>
                            <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard-shows</a></li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            
                <div class="row">
                    <div class="col-xl-12">
                        
                        <div class="row">
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div style="text-align:center;">
                                            <img src="{{ asset($show->featured_image) }}" style="height:400px; width:600px;">
                                        </div>
                                        <h2 class="text-center"> {{ $show->name }} 
                                            @if($show->domain == 0)
                                                <span class="badge badge-primary">radio show</span>
                                            @else
                                                <span class="badge badge-primary">tv show</span>
                                            @endif
                                        </h2>
                                        
                                        <p class="text-center"> {{ $show->bio }} </p>

                                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 offset-xl-4">
                                            <div class="card">
                                                <h5 class="card-header">Presenter</h5>
                                                <div class="card-body">
                                                    <ul class="list-group list-group-flush">
                                                        @foreach($show->presenters as $show_p)
                                                            <li class="list-group-item">{{ $show_p->name }}</li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        
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