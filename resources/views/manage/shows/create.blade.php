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
                        <h2 class="pageheader-title">Create a show</h2>
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
                                    <form method="POST" action="{{ route('store_show') }}" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <input id="inputText3" type="text"  name="name" class="form-control" placeholder="enter show's name">
                                        </div>

                                        <div class="form-group">
                                            <textarea class="form-control" id="exampleFormControlTextarea1" name="bio" rows="5" placeholder="show's bio"></textarea>
                                        </div>

                                        <div class="form-group">
                                            <input id="inputText3" type="text" class="form-control" name="promo_link" placeholder="enter promo-link">
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
                                        

                                        <br>
                                        <label for="input-select">pick presenter</label>
                                        <div class="container">
                                            <select multiple="multiple" id="my-select" name="presenters[]">
                                                @foreach($presenters as $presenter)
                                                    <option value='{{ $presenter->id }}'>{{ $presenter->name }}</option>
                                                @endforeach
                                            </select>
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