@extends('layout.syntax')

@section('content')

@include('layout.othersNav')

	<section id="portfolio" class="bg-light-gray" style="margin-top:-2px">
		{!! Form::open(['route'=> ['account-signIn'], 'method' => 'post' ]) !!}
			<!-- <br>
			<div class="row">
				<h1 style="color:#f44336"> <i class="fa fa-lock fa-2x"> </i> Sign In. </h1> 
			</div>
			<br><br><br> -->
			<div class="container">
	    		<div class="row">
	                <div class="col-lg-12 text-center">
	                    <h2 class="section-heading"> 
	                        <i style="color:black" class="fa fa-lock fa-3x"> </i>       
	                    </h2>
	                    <h3 style="color:red" class="section-subheading text-muted">
	                    	Sign In.
	                    </h3>
	                </div>
	            </div> <br>
	    	
				<div style="margin-top:20px" class="row"> 
					<div class="form-group {{ $errors->has('emailAddress') ? 'has-error' : '' }} " style="font:bold 28px bradley hand itc">
						{!! Form::label('emailAddress', 'Email Address', ['class' => 'control-label col-sm-3']) !!}
						<div class="col-sm-6" style="font:bold 38px book antiqua">
							{!! Form::text('emailAddress', null, ['class' => 'form-control', 'value' => '{{ old(emailAddress) }} ', 'placeholder' => 'Provide Your Email Address.'] ) !!}
						</div><br>

						<!-- Validation. -->
						<span style="font:20px book antiqua; color:#BF360C">
							@if($errors-> has('emailAddress'))
								{{ $errors-> first('emailAddress')}}
							@endif
						</span>	
					</div>
				</div><br><br>

				<div class="row">
					<div class="form-group {{ $errors->has('password') ? 'has-error' : '' }} " style="font:bold 28px bradley hand itc">
						{!! Form::label('password', 'Password', ['class' => 'control-label control-label col-sm-3']) !!}
						<div class="col-sm-6" style="font:bold 38px book antiqua">
							{!! Form::password('password', ['class' => 'form-control', 'placeholder' => 'Provide Your Password.'] ) !!}
						</div><br>

						<!-- Validation. -->
						<span style="font:20px book antiqua; color:#BF360C">
							@if($errors-> has('password'))
								{{ $errors-> first('password')}}
							@endif
						</span>	
					</div>
				</div><br>
				
				<div class="row">
	                <div class="form-group" style="font:bold 28px bradley hand itc">
	                    <div class="col-sm-6 col-sm-offset-3">    
	                        {!! Form::submit('Sign In.', ['class' => 'btn btn-primary btn-block', 'style' => 'font:bold 24px bradley hand itc']) !!}
	                    </div> <br><br>
	                </div>
	            </div> <br>

	            <div class="row">
	                <div class="form-group">
	                    <div class="col-sm-6 col-sm-offset-3">                  
	                        {!! Form::reset('Erase Your Input.', ['style' => 'font:bold 24px bradley hand itc', 'class' => 'btn btn-danger btn-block']) !!}
	                    </div>
	                </div>
	            </div>
			{!! Form::close() !!}
		</div>
	</section>
@stop