@extends('admin.layouts.admin_master')

@section('admin_content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8" style="margin-top: 120px">
            <div class="card border-success">
                <div class="card-header bg-success text-white">{{ __('Update Category') }}
                    <a href="{{ route('category.index') }}" class="btn btn-primary btn-sm" style="float: right">All Category</a>
                </div>

                @if (session()->has('success'))
                     <strong class="text-danger text-center mt-3">{{ session()->get('success') }}</strong>
                @endif

                <div class="card-body">
                    <form action="{{ route('category.update',$category->id) }}" method="post">
                        @csrf
                        <div class="form-group mt-1">
                          <label for="category_name">Class Name:</label>
                          <input type="text" class="form-control mt-1 @error('category_name') is-invalid @enderror" value="{{ $category->category_name }}"  id="category_name" placeholder="Enter Category Name..." name="category_name">
                            @error('category_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-outline-primary mt-2">Update Category</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
