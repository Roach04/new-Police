@extends('layout.syntax')

@section('content')
	
@include('layout.uploadsNav')

	<section id="porfolio" class="bg-light-gray" style="margin-top:-2px">
		<div class="container">

			{!! Form::open(['route' => ['storeUploads', $user->id],'enctype' => 'multipart/form-data', 'method' => 'post'] ) !!}
				<div class="container">
		    		<div class="row">
		                <div class="col-lg-12 text-center">
		                    <h2 class="section-heading"> 
		                        <i style="color:black" class="fa fa-user  fa-3x"> </i>       
		                    </h2>
		                    <h3 style="color:red" class="section-subheading text-muted">
		                    	Register a new case.
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
					<div class="col-lg-6 col-md-6 form-group {{ $errors->has('station') ? 'has-error' : '' }}" style="font:bold 28px bradley hand itc">
						{!! Form::label('station', 'Station.', ['class'=> 'control-label col-sm-3']) !!}
						<div class="col-sm-8 col-sm-offset-1" style="font:bold 38px book antiqua">
							{!! Form::text('station', null, ['class'=> 'form-control', 'placeholder'=> 'Your Station.'])!!}
						</div><br>

						<!-- VALIDATION.. -->
	                    <div style="font:bold 20px book antiqua; color:#BF360C" class="col-sm-offset-4">
	                        @if($errors->has('station'))
	                            {{ $errors->first('station') }}
	                        @endif
	                    </div> 
					</div>

					<div class="col-md-6 col-lg-6 form-group {{ $errors->has('case') ? 'has-error' : '' }}" style="font:bold 28px bradley hand itc">
						{!! Form::label('case', 'Case.', ['class'=> 'control-label col-sm-3']) !!}
						<div class="col-sm-8 col-sm-offset-1" style="font:bold 38px book antiqua">
							{!! Form::text('case', null, ['class'=> 'form-control', 'placeholder'=> 'Your Case.'])!!}
						</div><br>
	                        
	                    <!-- VALIDATION.. -->
	                    <div style="font:bold 20px book antiqua; color:#BF360C" class="col-sm-offset-4">
	                        @if($errors->has('case'))
	                            {{ $errors->first('case') }}
	                        @endif
	                    </div> 
					</div>
				</div><br><br>

				<div class="row">
					<div class="col-md-12 col-lg-12 form-group {{ $errors->has('idNumber') ? 'has-error' : '' }}" style="font:bold 28px bradley hand itc">
						{!! Form::label('idNumber', 'Id Number.', ['class'=> 'control-label col-sm-3']) !!}
						<div class="col-sm-8 col-sm-offset-1" style="font:bold 38px book antiqua">
							{!! Form::number('idNumber', null, ['class'=> 'form-control', 'placeholder'=> 'Your Id Number.'])!!}
						</div><br>

						<!-- VALIDATION.. -->
	                    <div style="font:bold 20px book antiqua; color:#BF360C" class="col-sm-offset-4">
	                        @if($errors->has('idNumber'))
	                            {{ $errors->first('idNumber') }}
	                        @endif
	                    </div> 
					</div>
				</div><br><br>

				<div class="row">
	                <div class="col-md-6 col-lg-6 form-group">
	                    <div >    
	                        {!! Form::submit('Upload The Case.', ['class' => 'btn btn-primary btn-block', 'style' => 'font:bold 24px bradley hand itc']) !!}
	                    </div> <br><br>
	                </div>

	                <div class="col-md-6 col-lg-6 form-group">
	                    <div >                  
	                        {!! Form::reset('Erase The Case.', ['style' => 'font:bold 24px bradley hand itc', 'class' => 'btn btn-danger btn-block']) !!}
	                    </div>
	                </div>
	            </div> 
			{!! Form::close() !!}
		</div>
	</section>
@stop