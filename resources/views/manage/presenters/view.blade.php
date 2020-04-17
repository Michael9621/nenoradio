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
                            <h2 class="pageheader-title">View all presenters</h2>
                            <p class="pageheader-text">Nulla euismod urna eros, sit amet scelerisque torton lectus vel mauris facilisis faucibus at enim quis massa lobortis rutrum.</p>
                            <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard- view presenters</a></li>
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
                                        <table class="table table-borderless first">
                                            <thead>
                                                <tr>
                                                    <th>Featured image</th>
                                                    <th>Name</th>
                                                    <th>Edit</th>
                                                    <th>Delete</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @if($presenters->count() > 0)
                                                    @foreach($presenters as $presenter)
                                                    <tr>
                                                        <td><img src="{{ asset($presenter->featured_image) }}" style="width:130px; height:60px;"></td>
                                                        <td>{{$presenter->name }}</td>
                                                        <td> <a href="{{route('view_presenter', ['id' => $presenter->id] )}}" class="btn btn-primary btn-sm">view</a></td>
                                                        <td> <a href="{{route('edit_presenter', ['id' => $presenter->id] )}}" class="btn btn-success btn-sm">edit</a></td>
                                                        <td><a href="{{ route('delete_presenter', ['id' => $presenter->id ]) }}" class="btn btn-danger btn-sm">delete</a></td>


                                                    </tr>
                                                    @endforeach
                        
                                                <tr>
                                                    @else
                                                        <td></td>
                                                        <td><p class="text-center">no presenters yet</p></td>
                                                    @endif
                                                </tr>                    
                                            </tbody>
                                        </table>
                                        
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