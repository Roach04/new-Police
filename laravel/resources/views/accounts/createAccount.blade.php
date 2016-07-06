@extends('layout.syntax')

@section('content')
	
@include('layout.othersNav')
	
	<section id="portfolio" class="bg-light-gray" style="margin-top:-2px">

		<div class="container">

			{!! Form::open(['route' => ['storeAccount'], 'method' => 'post'] ) !!}
				<!-- <h1 class="pull-left" style="color:#f44336"> <i class="fa fa-user fa-2x"> 
					</i> Sign Up. 
				</h1> <br><br><br><br><br> -->
				<div class="container">
		    		<div class="row">
		                <div class="col-lg-12 text-center">
		                    <h2 class="section-heading"> 
		                        <i style="color:black" class="fa fa-user  fa-3x"> </i>       
		                    </h2>
		                    <h3 style="color:red" class="section-subheading text-muted">
		                    	Sign Up.
		                    </h3>
		                </div>
		            </div> <br>
		    	</div>

				<div  class="row">
					<div class="col-lg-6 col-md-6 form-group {{ $errors->has('firstname') ? 'has-error' : '' }}" style="font:bold 28px bradley hand itc">
						{!! Form::label('firstname', 'Firstname.', ['class'=> 'control-label col-sm-3']) !!}
						<div class="col-sm-8 col-sm-offset-1" style="font:bold 38px book antiqua">
							{!! Form::text('firstname', null, ['class'=> 'form-control', 'placeholder'=> 'Your Firstname.'])!!}
						</div><br>

						<!-- VALIDATION.. -->
	                    <div style="font:bold 20px book antiqua; color:#BF360C" class="col-sm-offset-4">
	                        @if($errors->has('firstname'))
	                            {{ $errors->first('firstname') }}
	                        @endif
	                    </div>
					</div>
				
					<div class="col-lg-6 col-md-6 form-group {{ $errors->has('lastname') ? 'has-error' : '' }}" style="font:bold 28px bradley hand itc">
						{!! Form::label('lastname', 'Lastname.', ['class'=> 'control-label col-sm-3']) !!}
						<div class="col-sm-8 col-sm-offset-1" style="font:bold 38px book antiqua">
							{!! Form::text('lastname', null, ['class'=> 'form-control', 'placeholder'=> 'Your Lastname.'])!!}
						</div><br>

						<!-- VALIDATION.. -->
	                    <div style="font:bold 20px book antiqua; color:#BF360C" class="col-sm-offset-4">
	                        @if($errors->has('lastname'))
	                            {{ $errors->first('lastname') }}
	                        @endif
	                    </div> 
					</div>
				</div><br><br>

				<div class="row">
					<div class="col-lg-6 col-md-6 form-group {{ $errors->has('emailAddress') ? 'has-error' : '' }}" style="font:bold 28px bradley hand itc">
						{!! Form::label('emailAddress', 'Mail.', ['class'=> 'control-label col-sm-3']) !!}
						<div class="col-sm-8 col-sm-offset-1" style="font:bold 38px book antiqua">
							{!! Form::text('emailAddress', null, ['class'=> 'form-control', 'placeholder'=> 'Your Email Address.'])!!}
						</div><br>

						<!-- VALIDATION.. -->
	                    <div style="font:bold 20px book antiqua; color:#BF360C" class="col-sm-offset-4">
	                        @if($errors->has('emailAddress'))
	                            {{ $errors->first('emailAddress') }}
	                        @endif
	                    </div> 
					</div>

					<div class="col-md-6 col-lg-6 form-group {{ $errors->has('username') ? 'has-error' : '' }}" style="font:bold 28px bradley hand itc">
						{!! Form::label('username', 'Username.', ['class'=> 'control-label col-sm-3']) !!}
						<div class="col-sm-8 col-sm-offset-1" style="font:bold 38px book antiqua">
							{!! Form::text('username', null, ['class'=> 'form-control', 'placeholder'=> 'Your Username.'])!!}
						</div><br>
	                        
	                    <!-- VALIDATION.. -->
	                    <div style="font:bold 20px book antiqua; color:#BF360C" class="col-sm-offset-4">
	                        @if($errors->has('username'))
	                            {{ $errors->first('username') }}
	                        @endif
	                    </div> 
					</div>
				</div><br><br>

				<div class="row">
					<div class="col-md-6 col-lg-6 form-group {{ $errors->has('password') ? 'has-error' : '' }}" style="font:bold 28px bradley hand itc">
						{!! Form::label('password', 'Password.', ['class'=> 'control-label col-sm-3']) !!}
						<div class="col-sm-8 col-sm-offset-1" style="font:bold 38px book antiqua">
							{!! Form::password('password', ['class'=> 'form-control', 'placeholder'=> 'Your Password.'])!!}
						</div><br>

						<!-- VALIDATION.. -->
	                    <div style="font:bold 20px book antiqua; color:#BF360C" class="col-sm-offset-4">
	                        @if($errors->has('password'))
	                            {{ $errors->first('password') }}
	                        @endif
	                    </div> 
					</div>
				
					<div class="col-md-6 col-lg-6 form-group {{ $errors->has('confirmPassword') ? 'has-error' : '' }}" style="font:bold 28px bradley hand itc">
						{!! Form::label('confirmPassword', 'Confirm Password.', ['class'=> 'control-label col-sm-3']) !!}
						<div class="col-sm-8 col-sm-offset-1" style="font:bold 38px book antiqua">
							{!! Form::password('confirmPassword', ['class'=> 'form-control', 'placeholder'=> 'Confirm Your Password.'])!!}
						</div><br>

						<!-- VALIDATION.. -->
	                    <div style="font:bold 20px book antiqua; color:#BF360C" class="col-sm-offset-4">
	                        @if($errors->has('confirmPassword'))
	                            {{ $errors->first('confirmPassword') }}
	                        @endif
	                    </div> 
					</div>
				</div><br><br>

				<div class="row">
					<div class="col-md-12 col-lg-12 form-group {{ $errors->has('badgeNumber') ? 'has-error' : '' }}" style="font:bold 28px bradley hand itc">
						{!! Form::label('badgeNumber', 'Badge Number.', ['class'=> 'control-label col-sm-3']) !!}
						<div class="col-sm-8 col-sm-offset-1" style="font:bold 38px book antiqua">
							{!! Form::number('badgeNumber', null, ['class'=> 'form-control', 'placeholder'=> 'Your Badge Number.'])!!}
						</div><br>

						<!-- VALIDATION.. -->
	                    <div style="font:bold 20px book antiqua; color:#BF360C" class="col-sm-offset-4">
	                        @if($errors->has('badgeNumber'))
	                            {{ $errors->first('badgeNumber') }}
	                        @endif
	                    </div> 
					</div>
				</div><br><br>

				<div class="row">
	                <div class="col-md-6 col-lg-6 form-group" style="font:bold 20px arial">
	                    <div >    
	                        {!! Form::submit('Create Your Account.', ['class' => 'btn btn-primary btn-block', 'style' => 'font:bold 24px bradley hand itc']) !!}
	                    </div> <br><br>
	                </div>

	                <div class="col-md-6 col-lg-6 form-group" style="font:bold 20px arial">
	                    <div >                  
	                        {!! Form::reset('Erase Your Input.', ['style' => 'font:bold 24px bradley hand itc', 'class' => 'btn btn-danger btn-block']) !!}
	                    </div>
	                </div>
	            </div> 
			{!! Form::close() !!}
		</div>
	</section>
@stop