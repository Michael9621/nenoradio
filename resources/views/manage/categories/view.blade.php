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
                            <h2 class="pageheader-title">View all categories</h2>
                            <p class="pageheader-text">Nulla euismod urna eros, sit amet scelerisque torton lectus vel mauris facilisis faucibus at enim quis massa lobortis rutrum.</p>
                            <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard- view categories</a></li>
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
                                                    <th>Name</th>
                                                    <th>Edit</th>
                                                    <th>Delete</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @if($categories->count() > 0)
                                                    @foreach($categories as $category)
                                                    <tr>
                                                        <td>{{ $category->name }}</td>
                                                        <td> <a href="{{route('edit_category', ['id' => $category->id] )}}" class="btn btn-success btn-sm">edit</a></td>
                                                        <td> <a href="{{ route('delete_category', ['id' => $category->id ]) }}" class="btn btn-danger btn-sm">delete</a></td>
                                                    </tr>
                                                    @endforeach
                        
                                                <tr>
                                                    @else
                                                        <td></td>
                                                        <td><p class="text-center">no categories yet</p></td>
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