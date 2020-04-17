@extends('manage.index')

    @section('content')
    <div class="dashboard-wrapper">
        <div class="dashboard-ecommerce">
            <div class="container-fluid dashboard-content ">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="page-header">
                            <h2 class="pageheader-title">Dashboard</h2>
                            <p class="pageheader-text">Nulla euismod urna eros, sit amet scelerisque torton lectus vel mauris facilisis faucibus at enim quis massa lobortis rutrum.</p>
                            
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
                        <div class="card">
                            <div class="card-body">
                                <h3 class="card-title text-center">All posts</h3>
                                <p class="card-text text-center" style="padding:20px; font-size:20px;"> {{$all_posts}} </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
                        <div class="card">
                            <div class="card-body">
                                <h3 class="card-title text-center">All categories</h3>
                                <p class="card-text text-center" style="padding:20px; font-size:20px;">{{ $all_categories }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
                        <div class="card">
                            <div class="card-body">
                                <h3 class="card-title text-center">All users</h3>
                                <p class="card-text text-center" style="padding:20px; font-size:20px;">{{ $all_users }}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
                        <div class="card">
                            <div class="card-body">
                                <h3 class="card-title text-center">published posts</h3>
                                <p class="card-text text-center" style="padding:20px; font-size:20px;"> {{$published_posts}} </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
                        <div class="card">
                            <div class="card-body">
                                <h3 class="card-title text-center">Drafted posts</h3>
                                <p class="card-text text-center" style="padding:20px; font-size:20px;">{{ $draft_posts}}</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
                        <div class="card">
                            <div class="card-body">
                                <h3 class="card-title text-center">Trashed posts</h3>
                                <p class="card-text text-center" style="padding:20px; font-size:20px;"> {{$all_trashed}} </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                        <div class="card">
                            <div class="card-body">
                                <h3 class="card-title text-center">tv categories</h3>
                                <p class="card-text text-center" style="padding:20px; font-size:20px;"> {{$tv_categories}} </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                        <div class="card">
                            <div class="card-body">
                                <h3 class="card-title text-center">radio categories</h3>
                                <p class="card-text text-center" style="padding:20px; font-size:20px;">{{$radio_categories}}</p>
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
                                                <tr class="text-center">
                                                    <th>user</th>
                                                    <th>number of posts</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            @if($users->count() > 0)
                                                @foreach($users as $user)
                                                <tr class="text-center">
                                                    <td>{{ $user->name }}</td>
                                                    <td>{{ $user->posts()->count() }}</td>
                                                </tr>
                                                
                                            @endforeach
                                            
                                            @else
                                                <tr>
                                                    <td></td>
                                                    <td><p class="text-center">nothing to show :(</p></td>
                                                </tr>
                                            @endif                    
                                            </tbody>
                                            
                                        </table>
                                        {{ $users->links() }}
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