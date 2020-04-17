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

                                        <label for="input-select">choose domain</label>
                                        <br>
                                            <label class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" name="choice" class="custom-control-input" id="tv" value="1"> <span onclick="javascript:text();" class="custom-control-label">TV</span>
                                            </label>
                                            <label class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" name="choice" class="custom-control-input" id="radio" value="0"> <span onclick="javascript:text2();" class="custom-control-label"  >Radio</span>
                                            </label>
                                
                                        <div class="tv" style="display:none;" id="tv_domain">
                                            <div class="form-group">
                                                <label for="input-select">Select category (tv)</label>
                                                <select class="form-control" id="input-select" name="tv_category">
                                                    @foreach($tv_categories as $tv_category)
                                                        <option value="{{$tv_category->id}}">{{ $tv_category->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>        
                                        </div>

                                        <div class="radio" style="display: none;" id="radio_domain">
                                            <div class="form-group">
                                                <label for="input-select">Select category (radio)</label>
                                                <select class="form-control" id="input-select" name="radio_category">
                                                    @foreach($radio_categories as $radio_category)
                                                        <option value="{{$radio_category->id}}">{{ $radio_category->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>        
                                        </div>
                                        
                                        
                            
                                        <label class="control-label sr-only" for="summernote">Descriptions </label>
                                        <div class="form-group">
                                            <label class="control-label sr-only" for="content">Descriptions </label>
                                            <textarea class="form-control" id="summernote" name="content" rows="6" placeholder="Write Descriptions"></textarea>
                                        </div>
                                        
                                       
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <label class="custom-control custom-radio custom-control-inline">
                                                    <input type="radio" name="draft"  value="0" class="custom-control-input"><span class="custom-control-label">save as draft</span>
                                                </label>
                                            </div>
                                            <div class="col-sm-6">
                                            <label class="custom-control custom-radio custom-control-inline">
                                                    <input type="radio" name="draft" value="1"  class="custom-control-input"><span class="custom-control-label">publish</span>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <button class="btn btn-success" type="submit">save post</button>
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
