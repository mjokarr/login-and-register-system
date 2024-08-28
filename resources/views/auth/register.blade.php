@extends('layouts.app')

@section('title', __('auth.user_register'))

@section('content')
<div class="row justify-content-center">
    <div class="col-md-8">
        {{-- @include('partials.alerts') --}}
        <div class="card">
            <div class="card-header">
                @lang('auth.register user')
            </div>
            <div class="card-body">
            <form method="POST" action="">
                @csrf
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label" for="email">email</label>
                        <div class="col-sm-9">
                        <input type="email" name="email" class="form-control" id="email" value=""
                                aria-describedby="emailHelp" placeholder="enter your email">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label" for="name">name</label>
                        <div class="col-sm-9">
                            <input value="" type="text" name="name" class="form-control" id="name"
                                placeholder="enter your name">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label" for="password">password</label>
                        <div class="col-sm-9">
                            <input  type="password" name="password" class="form-control" id="password"
                                placeholder="enter your password">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label" for="password_confirmation">confirm password</label>
                        <div class="col-sm-9">
                            <input  type="password" name="password_confirmation" class="form-control"
                                id="password_confirmation" placeholder="confirm your password">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label" for="phone_number">phone number</label>
                        <div class="col-sm-9">
                            <input value="" name="phone_number" type="tel" class="form-control" id="phone_number"
                                placeholder="enter your phone number">
                        </div>
                    </div>
                    <div class="offset-sm-3">
                        {{-- @include('partials.validation-errors') --}}
                    </div>
                    <button type="submit" class="btn btn-primary">register</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
