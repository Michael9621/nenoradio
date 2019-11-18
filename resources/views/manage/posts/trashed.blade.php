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
                            <h2 class="pageheader-title"> Trashed posts</h2>
                            <p class="pageheader-text">Nulla euismod urna eros, sit amet scelerisque torton lectus vel mauris facilisis faucibus at enim quis massa lobortis rutrum.</p>
                            <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard-posts</a></li>
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
                                                    <th>Featured</th>
                                                    <th>Title</th>
                                                    <th>Restore</th>
                                                    <th>Delete</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            @if($posts->count() > 0)
                                                @foreach($posts as $post)
                                                <tr>
                                                    <td><img src="{{ $post->featured_image }}" style="width:130px; height:60px;"></td>
                                                    <td>{{ $post->title }}</td>
                                                    <td> <a href="{{route('restore_post', ['id' => $post->id] )}}" class="btn btn-success btn-sm">restore</a></td>
                                                    <td> <a href="{{route('kill_post', ['id' => $post->id] )}}" class="btn btn-danger btn-sm">delete</a></td>
                                                </tr>
                                                 
                                            @endforeach
                                            @else
                                                <tr>
                                                    <td></td>
                                                    <td><p class="text-center">no posts yet</p></td>
                                                </tr>
                                            @endif                    
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