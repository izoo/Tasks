@extends('admin.app')
@section('title') {{ $pageTitle }} @endsection
@section('content')
<div id="content" class="main-content">
  <div class="layout-px-spacing">
  <div class="row layout-top-spacing">
<div>
    <h2>{{ $pageTitle }}</h2>
</div>
<div id="basic" class="col-lg-12 col-sm-12 col-12 layout-spacing">
    <div class="statbox widget box box-shadow">
        <div class="widget-header">                                
            <div class="row">
                <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                    <h4>{{ $subTitle }}</h4>
                </div>
            </div>
        </div>
        <div class="row">
          <div class="col-xl-12 col-md-12 col-sm-12 col-12">
            @include('admin.partials.flash')
          </div>
        </div>
        <div class="widget-content widget-content-area">
            <form method="POST" action="{{ route('admin.categories.store') }}" enctype="multipart/form-data">
                @csrf
                <label for="name">Category Name</label>
            <div class="input-group mb-4">
              <input type="text" class="form-control" name="name" placeholder="Category Name" aria-label="Category Name">
              @error('name') 
              <div class="invalid-feedback">
                {{ $message }}
            </div>
              
              @enderror
            </div>

            <div class="form-row">
              <div class="col-md-12">
                <div id="select_menu" class="form-group mb-4">
                  <label for="">Parent Category</label>
                  <select class="custom-select" name="parent_id" required>
                    <option value="">Open this select menu</option>
                   @foreach($categories as $category)
                   <option value="{{ $category->id}}">{{ $category->name }}</option>
                   @endforeach
                  </select>
                  @error('parent_id')
                    <div class="invalid-feedback">
                    {{ $message }}
                    </div>
                    @enderror
                  </div>
              </div>
            </div>

            <div class="n-chk">
                <label class="new-control new-radio square-radio radio-primary">
                  <input type="checkbox" id="featured" class="new-control-input" name="featured">
                  <span class="new-control-indicator"></span>Featured Category
                </label>
            </div>

            <div class="n-chk">
                <label class="new-control new-radio square-radio radio-primary">
                  <input type="checkbox" id="menu" class="new-control-input" name="menu">
                  <span class="new-control-indicator"></span>Show in Menu
                </label>
            </div>

            <div class="input-group mb-4">
              <div class="input-group-prepend">
                <span class="input-group-text">Category Image</span>
              </div>
              <input type="file" name="image" class="form-control @error('image') is-invalid @enderror" aria-label="Category Image">
              @error('image')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
              @enderror
            </div>
             
            <div class="row">
            <div class="input-group col-lg-6 col-md-6 col-xl-6">
            <button type="submit" class="btn btn-primary btn-block mb-4 mr-2">SUBMIT</button>
            </div>

            <div class="input-group col-lg-6 col-md-6 col-xl-6">
            <a href="{{ route('admin.categories.index') }}" class="btn btn-success btn-block mb-4 mr-2">CANCEL</a>
            </div>
            </div>
          

            </form>
        </div>
    </div>
</div>
</div>

              
</div>
  </div>
</div>
@endsection