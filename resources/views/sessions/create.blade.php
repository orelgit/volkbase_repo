@extends('components.layout')

@extends('components.header')

@section('content')
    


	<div class="container" style="direction:ltr">
		<div class="wrapper">
         <h1>{{__('tran.HR login')}}</h1>
			<div class="title">
            <img src="{{asset('images/3.svg')}}" alt="">
         </div>

			<form method="POST" action="{{ URL::route('login-page',app()->getLocale()) }}">
            @csrf
            
		
				<div class="row">
					<i class="fas fa-envelope"></i>
					<input 
					style="{{ app()->getLocale() == 'ar'? 'text-align: right;padding-right: 9px;' : 'text-align: left' }}"
					 type="text" id="email" name="u_email"
						placeholder="{{__('tran.HR email')}}" required>
				</div>

				
				<div class="row">
					<i class="fas fa-lock"></i>
					<input 
					style="{{ app()->getLocale() == 'ar'? 'text-align: right;padding-right: 9px;' : 'text-align: left' }}" 
					type="password" id="password" name="u_pass"
					placeholder="{{__('tran.HR password')}}" required>
				</div>
	

				<div class="row button">
					<input  type="submit" value="{{__('tran.HR enter')}}">
				</div>
				

                <div class="signup-link"><h4>{{__('tran.HR account')}}</h4><a href="{{ URL::route('register-page',app()->getLocale()) }}">{{__('tran.HR create')}}</a></div>
			</form>
		</div>
	</div>


   
    


@endsection


    
@extends('components.footer')