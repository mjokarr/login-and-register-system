@extends('layouts.app')


@section('title', 'home')


@section('content')

<div class="flex-center course-title position-ref full-height">
            <div class="content">
                <div class="title m-b-md">
                    @lang('public.register & login system')
                    {{-- سیستم ورود و ثبت نام --}}
                </div>
                <div class="library-title">
                    @lang('public.practical laravel')
                    {{-- دوره‌ی لاراول کاربردی --}}
                </div>
            </div>
        </div>

@endsection
