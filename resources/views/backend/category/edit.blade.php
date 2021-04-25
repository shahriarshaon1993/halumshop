@extends('backend.layouts.layout')

@section('title', 'update category')

@section('pagename', 'Update-Cateory')

@section('content')

    @include('backend.partials._message')

    <div class="card pd-20 pd-sm-40">
        <h6 class="card-body-title">Update Category
            <a href="{{ route('categories.index') }}" class="btn btn-sm btn-primary mg-b-10 float-right" >
                 All Categories <i class="fa fa-plus mg-r-10"></i>
            </a>
        </h6>

        <div class="row mg-b-20">
            <div class="col-md-6">

                <div class="card card-body bg-gray-200">
                    {{ Form::open(['route' => ['categories.update', $category->id], 'method' => 'PUT', 'files' => true]) }}
                        <div class="form-group">
                            {{ Form::label('name', 'Category Name',['class' => 'form-control-label']) }}
                            {{ Form::text('name', $category->name, ['class' => 'form-control mb-2']) }}
                        </div>

                        <div class="form-group">
                            <label class="custom-file" for="banner">
                                <input type="file" name="banner" id="banner" class="form-control custom-file-input" onchange="readURL(this)">
                                <span class="custom-file-control custom-file-control-primary"></span>
                            </label>
                            <br><br>
                            <img src="{{ asset($category->banner) }}" alt="Category Banner" id="one" width="120px" height="80px">
                        </div>

                        <div class="form-layout-footer">
                            <button type="submit" class="btn btn-info mg-r-5">Update</button>
                        </div>
                    {{ Form::close() }}
                </div><!-- card -->
            </div><!-- col -->
        </div><!-- row -->

    </div><!-- card -->

    {{--Ajax Image loader --}}
    <script>
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function (e) {
                    $('#one')
                        .attr('src', e.target.result)
                        .width(120)
                        .height(80);
                };
                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>
@endsection

