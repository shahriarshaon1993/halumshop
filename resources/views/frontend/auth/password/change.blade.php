@extends('frontend.layouts.master')

@section('content')

    @include('backend.partials._message')

<div class="container mt-5 mb-5">
    <div class="main-body">
        <div class="row gutters-sm">
            <div class="col-md-4 mb-3">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex flex-column align-items-center text-center">
                            <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Admin" class="rounded-circle" style="width: 50%">

                            <div class="mt-3">
                                <h4>{{ Auth::user()->name }}</h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card mt-3">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <a href="{{ route('profile', Auth::user()->slug) }}" class="d-block text-dark">My Profile</a>
                        </li>

                        <li class="list-group-item">
                            <a href="{{ route('password.change') }}" class="d-block text-dark">Change Password</a>
                        </li>

                        <li class="list-group-item">
                            <a href="#" class="d-block text-dark">Demo 2</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card mb-3">
                    <h5 class="card-header">Change Password</h5>
                    <div class="card-body">
                        {{ Form::open(['route' => 'password.change']) }}
                            <div class="form-group">
                                {{ Form::password('oldPassword', ['class' => 'form-control', 'placeholder' => 'Old Password']) }}
                            </div>
                            <div class="form-group">
                                {{ Form::password('password', ['class' => 'form-control', 'placeholder' => 'New Password']) }}
                            </div>
                            <div class="form-group">
                                {{ Form::password('password_confirmation', ['class' => 'form-control', 'placeholder' => 'Confirm Password']) }}
                            </div>
                            <button class="btn btn-primary" type="submit">Submit</button>
                        {{ Form::close() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
