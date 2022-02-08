@extends('components.layout')

@extends('components.header')

@section('content')
    


	<div class="container" style="direction:ltr">
		<div class="wrapper">
         <h1>{{__('tran.HR reg')}}</h1>
			<div style="" class="title">
            <img src="{{asset('images/1.svg')}}" alt="">
         </div>

			<form method="POST" action="{{ URL::route('register-page',app()->getLocale()) }}" enctype="multipart/form-data">
            @csrf
            
				<div class="row">
					<i class="fas fa-user"></i>
					<input id="name" name="u_name" style="{{ app()->getLocale() == 'ar'? 'text-align: right;padding-right: 9px;' : 'text-align: left' }}" type="text" placeholder="{{__('tran.HR name')}}" required>
				</div>

				<div class="row">
					<i class="fas fa-phone-alt"></i>
					<input 
					style="{{ app()->getLocale() == 'ar'? 'text-align: right;padding-right: 9px;' : 'text-align: left' }}"
					 type="text" id="number" name="u_mobile"
						 placeholder="{{__('tran.HR number')}}" required>
				</div>
				
				<div class="row">
					<i class="fas fa-envelope"></i>
					<input 
					style="{{ app()->getLocale() == 'ar'? 'text-align: right;padding-right: 9px;' : 'text-align: left' }}"
					 type="text" id="email" name="u_email"
						placeholder="{{__('tran.HR email')}}" required>
				</div>

				<div class="row">
					<i class="fas fa-images"></i>
					<input 
					style="{{ app()->getLocale() == 'ar'? 'text-align: right;padding-right: 9px;' : 'text-align: left' }}"
					 type="file" id="photo" name="u_photo"
						placeholder="{{__('tran.HR photo')}}" required>
				</div>
				
				<div class="row">
					<i class="fas fa-lock"></i>
					<input 
					style="{{ app()->getLocale() == 'ar'? 'text-align: right;padding-right: 9px;' : 'text-align: left' }}" 
					type="password" id="password" name="u_pass"
					placeholder="{{__('tran.HR password')}}" required>
				</div>
	
				
				<div class="row">
					<i class="fas fa-lock"></i>
					<input 
					style="{{ app()->getLocale() == 'ar'? 'text-align: right;padding-right: 9px;' : 'text-align: left' }}" 
					type="password" id="sure_password" name="sure_pass"
					placeholder="{{__('tran.HR password')}}" required>
				</div>
	

				<div class="row button">
					<input  type="submit" value="{{__('tran.HR enter')}}">
				</div>
				
				 <div class="signup-link"><h4>{{__('tran.HR already')}}</h4><a href="{{ URL::route('login-page',app()->getLocale()) }}">{{__('tran.HR login')}}</a></div>

			</form>
		</div>
	</div>


   
    


@endsection


    
@extends('components.footer')