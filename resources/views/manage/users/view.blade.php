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
                            <h2 class="pageheader-title">View all users</h2>
                            <p class="pageheader-text">Nulla euismod urna eros, sit amet scelerisque torton lectus vel mauris facilisis faucibus at enim quis massa lobortis rutrum.</p>
                            <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard - users</a></li>
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
                                                @if($users->count() > 0)
                                                    @foreach($users as $user)
                                                    <tr>
                                                        <td>{{ $user->name }}</td>
                                                        @if(Auth::user()->id != $user->id)
                                                            <td> <a href="{{route('edit_user', ['id' => $user->id] )}}" class="btn btn-success btn-sm">edit</a></td>
                                                            <td> <a href="{{ route('delete_user', ['id' => $user->id ]) }}" class="btn btn-danger btn-sm">delete</a></td>
                                                        @endif
                                                    </tr>
                                                    @endforeach
                        
                                                <tr>
                                                    @else
                                                        <td></td>
                                                        <td><p class="text-center">no user yet</p></td>
                                                    @endif
                                                </tr>                    
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