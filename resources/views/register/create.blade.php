@extends('components.layout')

@extends('components.header')

@section('content')
    


	<div class="container" style="direction:ltr">
		<div class="wrapper">
         <h1 style="">{{__('tran.HR reg')}}</h1>
			<div style="" class="title">
            <img src="{{asset('images/1.svg')}}" alt="">
         </div>
         
			<form method="POST" action="/register">
            @csrf
            
				<div class="row">
					<i class="fas fa-user"></i>
					<input style="{{ app()->getLocale() == 'ar'? 'text-align: right;padding-right: 9px;' : 'text-align: left' }}" type="text" placeholder="{{__('tran.HR name')}}" required>
				</div>
				<div class="row">
					<i class="fas fa-phone-alt"></i>
					<input style="{{ app()->getLocale() == 'ar'? 'text-align: right;padding-right: 9px;' : 'text-align: left' }}" type="text" placeholder="{{__('tran.HR number')}}" required>
				</div>
				<div class="row">
					<i class="fas fa-envelope"></i>
					<input style="{{ app()->getLocale() == 'ar'? 'text-align: right;padding-right: 9px;' : 'text-align: left' }}" type="text" placeholder="{{__('tran.HR email')}}" required>
				</div>
				<div class="row">
					<i class="fas fa-images"></i>
					<input style="{{ app()->getLocale() == 'ar'? 'text-align: right;padding-right: 9px;' : 'text-align: left' }}" type="text" placeholder="{{__('tran.HR photo')}}" required>
				</div>
				
				<div class="row">
					<i class="fas fa-lock"></i>
					<input style="{{ app()->getLocale() == 'ar'? 'text-align: right;padding-right: 9px;' : 'text-align: left' }}" type="password" placeholder="{{__('tran.HR password')}}" required>
				</div>
				<div class="row button">
					<input  type="submit" value="{{__('tran.HR enter')}}">
				</div>
				
			</form>
		</div>
	</div>


   
    


@endsection


    
@extends('components.footer')