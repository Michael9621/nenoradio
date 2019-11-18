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
                        <h2 class="pageheader-title">Create a post</h2>
                        <p class="pageheader-text">Nulla euismod urna eros, sit amet scelerisque torton lectus vel mauris facilisis faucibus at enim quis massa lobortis rutrum.</p>
                        <div class="page-breadcrumb">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard > create blog post</a></li>
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
                                    <form method="POST" action="{{ route('store_post') }}" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <input id="inputText3" type="text"  name="title" class="form-control" placeholder="post title">
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleFormControlTextarea1">Featured image</label>
                                            <input id="inputText3" type="file"  name="featured" class="form-control" placeholder="featured image">
                                        </div>

                                        
                                        <div class="form-group">
                                            <label for="input-select">Select category</label>
                                            <select class="form-control" id="input-select" name="category">
                                                @foreach($categories as $category)
                                                    <option value="{{$category->id}}">{{ $category->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        

                                        
                                        <div class="form-group">
                                            <label class="control-label sr-only" for="summernote">Descriptions </label>
                                            <textarea class="form-control" id="summernote" name="content" rows="6" placeholder="Write Descriptions"></textarea>
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
