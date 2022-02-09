@extends('components.layout')
@extends('components.header')
@section('content')
<div class="container" style="direction:ltr">
    <div class="wrapper">
        @if (Session::has('success'))
            <h2 style="text-align: center; color:green; padding-top:15px"><i class="fas fa-check-circle"></i> {{Session::get('success')}}</h2>
        @endif
        <h1>{{__('tran.HR reg')}}</h1>
        <div style="" class="title">
            <img src="{{asset('images/1.svg')}}" alt="">
        </div>
        <form method="POST" action="{{ URL::route('register-page',app()->getLocale()) }}" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <i class="fas fa-user"></i>
                <input id="name" name="u_name"
                    style="{{ app()->getLocale() == 'ar'? 'text-align: right;padding-right: 9px;' : 'text-align: left' }}"
                    type="text" placeholder="{{__('tran.HR name')}}" required>
            </div>
            @error('u_name')
                <h2 style="text-align: center; color:red; padding-bottom:10px;"> <i class="fas fa-times"></i> {{$message}}</h2>
            @enderror
            <div class="row">
                <i class="fas fa-phone-alt"></i>
                <input
                    style="{{ app()->getLocale() == 'ar'? 'text-align: right;padding-right: 9px;' : 'text-align: left' }}"
                    type="text" id="number" name="u_mobile" placeholder="{{__('tran.HR number')}}" required>
            </div>
            @error('u_mobile')
                <h2 style="text-align: center; color:red; padding-bottom:10px;"> <i class="fas fa-times"></i> {{$message}}</h2>
            @enderror
            <div class="row">
                <i class="fas fa-envelope"></i>
                <input
                    style="{{ app()->getLocale() == 'ar'? 'text-align: right;padding-right: 9px;' : 'text-align: left' }}"
                    type="text" id="email" name="u_email" placeholder="{{__('tran.HR email')}}" required>
            </div>
            @error('u_email')
                <h2 style="text-align: center; color:red; padding-bottom:10px;"> <i class="fas fa-times"></i> {{$message}}</h2>
            @enderror
            <div class="row">
                <i class="fas fa-images"></i>
                <input
                    style="{{ app()->getLocale() == 'ar'? 'text-align: right;padding-right: 9px;' : 'text-align: left' }}"
                    type="file" id="photo" name="u_photo" placeholder="{{__('tran.HR photo')}}" required>
            </div>
            @error('u_photo')
                <h2 style="text-align: center; color:red; padding-bottom:10px;"> <i class="fas fa-times"></i> {{$message}}</h2>
            @enderror
            <div class="row">
                <i class="fas fa-lock"></i>
                <input
                    style="{{ app()->getLocale() == 'ar'? 'text-align: right;padding-right: 9px;' : 'text-align: left' }}"
                    type="password" id="password" name="u_pass" placeholder="{{__('tran.HR password')}}" required>
            </div>
            @error('u_pass')
                <h2 style="text-align: center; color:red; padding-bottom:10px;"> <i class="fas fa-times"></i> {{$message}}</h2>
            @enderror
            {{-- <div class="row">
                <i class="fas fa-lock"></i>
                <input
                    style="{{ app()->getLocale() == 'ar'? 'text-align: right;padding-right: 9px;' : 'text-align: left' }}"
                    type="password" id="sure_password" name="sure_pass" placeholder="{{__('tran.HR password')}}"
                    required>
            </div> --}}
            <div class="row button">
                <input type="submit" value="{{__('tran.HR enter')}}">
            </div>
            <div class="signup-link">
                <h4>{{__('tran.HR already')}}</h4><a
                    href="{{ URL::route('login-page',app()->getLocale()) }}">{{__('tran.HR login')}}</a>
            </div>
        </form>
    </div>
</div>
@endsection
@extends('components.footer')
