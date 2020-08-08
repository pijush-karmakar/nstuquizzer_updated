@extends('vendor.layouts.app') 

@section('title','Create Degree')

@section('content')


    <!-- basic form start -->
    <div class="col-12 mt-5">
        <div class="card">
            <div class="card-body">
                <h4 class="header-title">ADD New Degree</h4>
                 @include('multiauth::message')
                <form action="{{ route('degree.store') }}" method="post">
                  @csrf

                    

                    <div class="form-group">
                        <label for="exampleInputEmail1">Degree Name</label>
                        <input type="text" name="short_title" class="form-control" id="exampleInputEmail1" required>
                     
                    </div>

                    <div class="form-group">
                        <select class="form-control" name="department_id">
                             <option> -- Select -- </option>
                          @foreach($departments as $department)
                             <option value="{{ $department->id }}">{{ $department->short_name }}</option>
                          @endforeach
                            
                        </select>
                     
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Degree Full Title</label>
                        <input type="text" name="full_title" class="form-control" id="exampleInputEmail1" required>
                     
                    </div>

                    <button type="submit" class="btn btn-primary btn-sm">Store</button>
                     <a href="{{ route('degree.index') }}" class="btn btn-sm btn-danger float-right">Back</a>

                </form>
            </div>
        </div>
    </div>
    <!-- basic form end -->

@endsection