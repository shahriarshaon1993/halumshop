@extends('backend.layouts.layout')

@section('title', 'update sub category')

@section('pagename', 'Update-Sub Category')

@section('content')

    @include('backend.partials._message')

    <div class="card pd-20 pd-sm-40">
        <h6 class="card-body-title">Update Sub Category
            <a href="{{ route('subcategories.index') }}" class="btn btn-sm btn-primary mg-b-10 float-right" >
                 All Sub Categories <i class="fa fa-plus mg-r-10"></i>
            </a>
        </h6>

        <div class="row mg-b-20">
            <div class="col-md-6">

                <div class="card card-body bg-gray-200">
                    {{ Form::open(['route' => ['subcategories.update', $subcategory->id], 'method' => 'PUT', 'files' => true]) }}
                        <div class="form-group">
                            {{ Form::label('name', 'Sub Category Name',['class' => 'form-control-label']) }}
                            {{ Form::text('name', $subcategory->name, ['class' => 'form-control mb-2']) }}
                        </div>

                        <div class="form-group">
                            {{ Form::label('category_id', 'Sub Category name', ['class' => 'form-control-label']) }}

                            <select name="category_id" id="category_id" class="form-control select2">
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}"
                                        @if ($category->id == $subcategory->category_id)
                                            {{ 'selected' }}
                                        @endif
                                    >{{ $category->name }}</option>
                                @endforeach
                            </select>
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

