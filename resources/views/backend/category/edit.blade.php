@extends('backend.master')
@section('title')
Edit Category
@endsection
@section('content')
<div class="row">
    <h3>Edit Category</h3>
    <div class="col-12">
        <form action="{{route('category.update',$catagory->id)}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group mt-4">
                <input required name="title" value="{{$catagory->title}}" type="text" placeholder="Category Name" autocomplete="none" class="form-control @error('title') is-invalid                                
                    @enderror">
                    @error('title')
                    <div class="alert alert-danger">
                        {{$message}}
                    </div>
                    @enderror
            </div>
            <div class="form-group mt-4">
                <input  name="thumbnail" type="file" autocomplete="none" class="form-control @error('thumbnail') is-invalid                                
                    @enderror">
                    @error('thumbnail')
                    <div class="alert alert-danger">
                        {{$message}}
                    </div>
                    @else
                    <span class="text-danger">*Only JPG And PNG Format Allow</span>
                    @enderror
            </div>
            <div class="form-group mt-4">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
</div>
@endsection

