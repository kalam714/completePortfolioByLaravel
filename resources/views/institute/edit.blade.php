@extends('admin.layouts.master')

@section('content')
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 ml-4 text-gray-800">education</h1>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="./">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">education</li>
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
        <form action="{{route('education.update',[$education->id])}}" method="POST" enctype="multipart/form-data">@csrf
            {{method_field('PATCH')}}
              <div class="card mb-6">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Update Institute</h6>
                </div>
                <div class="card-body">
                    <div class="form-group"> 
                      <label for="">Degree</label>
                      <input type="text" name="degree" value="{{$education->degree}}" class="form-control">
                    
                    </div>
                    <div class="form-group"> 
                        <label for="">Institute</label>
                        <input type="text" name="institute" value="{{$education->institute}}" class="form-control">
                      
                      </div>
                    <div class="form-group"> 
                        <label for="">Since</label>
                        <input type="text" name="since" value="{{$education->since}}" class="form-control">
                      
                      </div>
                   
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </div>
            </form>

          </div>
</div>
@endsection