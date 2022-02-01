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
            <form method="POST" action="{{ route('admin.attributes.store') }}" enctype="multipart/form-data">
                @csrf
                <h3 class="mb-4 text-center">Attribute Information</h3>

            <label for="name">Code</label>
            <div class="input-group mb-4">
              <input type="text" class="form-control" name="code" id="code" placeholder="Enter Attribute Code" aria-label="Enter Attribute Code" value="{{ old('code') }}">
              @error('code') 
              <div class="invalid-feedback">
                {{ $message }}
            </div>
              
              @enderror
            </div>

            <label for="name">Name</label>
            <div class="input-group mb-4">
              <input type="text" class="form-control" name="name" id="name" placeholder="Enter Attribute Name" aria-label="Enter Attribute Name" value="{{ old('code') }}">
              @error('code') 
              <div class="invalid-feedback">
                {{ $message }}
            </div>
              
              @enderror
            </div>
            <div class="form-group">
              <label class="control-label" for="frontend_type">Frontend Type</label>
              @php $types = ['select' => 'Select Box', 'radio' => 'Radio Button', 'text' => 'Text Field', 'text_area' => 'Text Area']; @endphp
              <select name="frontend_type" id="frontend_type" class="form-control">
                  @foreach($types as $key => $label)
                      <option value="{{ $key }}">{{ $label }}</option>
                  @endforeach
              </select>
          </div>
          <div class="form-group">
              <div class="form-check">
                  <label class="form-check-label">
                      <input class="form-check-input" type="checkbox" id="is_filterable" name="is_filterable"/>Filterable
                  </label>
              </div>
          </div>
          <div class="form-group">
              <div class="form-check">
                  <label class="form-check-label">
                      <input class="form-check-input" type="checkbox" id="is_required" name="is_required"/>Required
                  </label>
              </div>
          </div>
      </div>
             
            <div class="row">
            <div class="input-group col-lg-6 col-md-6 col-xl-6">
            <button type="submit" class="btn btn-primary btn-block mb-4 mr-2">SUBMIT</button>
            </div>

            <div class="input-group col-lg-6 col-md-6 col-xl-6">
            <a href="{{ route('admin.attributes.index') }}" class="btn btn-success btn-block mb-4 mr-2">CANCEL</a>
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