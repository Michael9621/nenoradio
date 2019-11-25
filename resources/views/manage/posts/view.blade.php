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
                            <h2 class="pageheader-title">Posts</h2>
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
                                                    <th>title</th>
                                                    <th>Edit</th>
                                                    <th>Delete</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            @if($posts->count() > 0)
                                                @foreach($posts as $post)
                                                <tr>
                                                    <td><img src="{{ $post->featured_image }}" style="width:130px; height:60px;"></td>
                                                    <td>{{ $post->title }}</td>
                                                    <td> <a href="{{route('edit_post', ['id' => $post->id] )}}" class="btn btn-success btn-sm">edit</a></td>
                                                    <td> <a href="{{ route('delete_post', ['id' => $post->id ]) }}" class="btn btn-warning btn-sm">trash</a></td>
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
                                        {{$posts->links()}}
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