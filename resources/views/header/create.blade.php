@extends('admin.layouts.master')

@section('content')
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 ml-4 text-gray-800">header Page</h1>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="./">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">header</li>
            </ol>
    </div>

    <div class="row justify-content-center">
        @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

      <div class="col-lg-10">
        <form action="{{route('header.store')}}" method="POST" enctype="multipart/form-data">@csrf
              <div class="card mb-6">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Add Header Info.</h6>
                </div>
                <div class="card-body">
                    <div class="form-group"> 
                      <label for="">Name</label>
                      <input type="text" name="name" class="form-control">
                    
                    </div>
                    <div class="form-group"> 
                        <label for="">Type</label>
                        <input type="text" name="type" class="form-control">
                      
                      </div>
                      <div class="form-group"> 
                        <label for="">Github Link</label>
                        <input type="text" name="github" class="form-control">
                      
                      </div>
                      <div class="form-group"> 
                        <label for="">Stack Overflow link</label>
                        <input type="text" name="stackoverflow" class="form-control">
                      
                      </div>
                      <div class="form-group"> 
                        <label for="">Linkedin link </label>
                        <input type="text" name="linkedin" class="form-control">
                      
                      </div>
                 
                    <div class="form-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input " id="customFile" name="photo">
                        <label class="custom-file-label" for="customFile">Choose file</label>
                      </div>
                       
                    </div>
                  
                   
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </div>
            </form>

          </div>
</div>
@endsection
php artisan migrate:refresh --path=/database/migrations/2021_02_27_105218_create_headers_table.php