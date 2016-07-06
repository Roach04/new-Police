@extends('layout.syntax')

@section('content')

@include('layout.createClientNav')

	<section class="bg-light-gray" style="margin-top:-2px">
		<div class="container">
			{!! Form::open(['route' => ['storeClient'], 'method' => 'post'] ) !!}
				<h1 class="pull-left" style="color:#f44336"> 
					<i class="fa fa-user fa-2x"> </i> 
					Client. 
				</h1> <br><br><br>

				<div style="margin-top:70px" class="row">
					<div class="form-group col-sm-7 col-sm-offset-2 {{ $errors->has('clientName') ? 'has-error' : '' }}" style="font:bold 28px bradley hand itc">
						{!! Form::label('clientName', 'Client Name', ['class' => 'control-label']) !!}
						<br>
						<div style="font:bold 38px book antiqua">
							{!! Form::text('clientName', null, ['class'=> 'form-control', 'placeholder'=> 'Client Name.'])!!}
						</div><br>

						<!-- VALIDATION.. -->
	                    <div style="font:bold 20px book antiqua; color:#f44336" class="col-sm-offset-4">
	                        @if($errors->has('clientName'))
	                            {{ $errors->first('clientName') }}
	                        @endif
	                    </div>
					</div>
				</div><br><br>

				<div class="row">
					<div class="form-group col-sm-7 col-sm-offset-2 {{ $errors->has('kraPinNumber') ? 'has-error' : '' }}" style="font:bold 28px bradley hand itc">
						{!! Form::label('kraPinNumber', 'Client\'s Kra Pin Number.', ['class' => 'control-label']) !!}
						<br>
						<div style="font:bold 38px book antiqua">
							{!! Form::text('kraPinNumber', null, ['class'=> 'form-control', 'placeholder'=> 'Client\'s kra Pin Number.'])!!}
						</div><br>

						<!-- VALIDATION.. -->
	                    <div style="font:bold 20px book antiqua; color:#f44336" class="col-sm-offset-4">
	                        @if($errors->has('kraPinNumber'))
	                            {{ $errors->first('kraPinNumber') }}
	                        @endif
	                    </div> 
					</div>
				</div><br><br>

				<div class="row">
					<div class="form-group col-sm-7 col-sm-offset-2 {{ $errors->has('nationalIdPassport') ? 'has-error' : '' }}" style="font:bold 28px bradley hand itc">
						{!! Form::label('nationalIdPassport', 'National ID/Passport Number.', ['class'=> 'control-label']) !!}
						<br>
						<div style="font:bold 38px book antiqua">
							{!! Form::number('nationalIdPassport', null, ['class'=> 'form-control', 'placeholder'=> 'National Id / Passport.'])!!}
						</div><br>

						<!-- VALIDATION.. -->
	                    <div style="font:bold 20px calibri; color:#f44336" class="col-sm-offset-4">
	                        @if($errors->has('nationalIdPassport'))
	                            {{ $errors->first('nationalIdPassport') }}
	                        @endif
	                    </div> 
					</div>
				</div><br><br>

				<div class="row">
					<div class="form-group col-sm-7 col-sm-offset-2 {{ $errors->has('countyOfBirth') ? 'has-error' : '' }}" style="font:bold 28px bradley hand itc">
						{!! Form::label('countyOfBirth', 'County of Birth.', ['class'=> 'control-label']) !!}
						<br>
						<div style="font:bold 38px book antiqua">
							{!! Form::text('countyOfBirth', null, ['class'=> 'form-control', 'placeholder'=> 'County Of Birth.'])!!}
						</div><br>
	                        
	                    <!-- VALIDATION.. -->
	                    <div style="font:bold 20px book antiqua; color:#f44336" class="col-sm-offset-4">
	                        @if($errors->has('countyOfBirth'))
	                            {{ $errors->first('countyOfBirth') }}
	                        @endif
	                    </div> 
					</div>
				</div><br><br>

				<div class="row">
					<div class="form-group col-sm-7 col-sm-offset-2 {{ $errors->has('constituency') ? 'has-error' : '' }}" style="font:bold 28px bradley hand itc">
						{!! Form::label('constituency', 'Constituency.', ['class'=> 'control-label']) !!}
						<br>
						<div style="font:bold 38px book antiqua">
							{!! Form::text('constituency', null, ['class'=> 'form-control', 'placeholder'=> 'Constituency.'])!!}
						</div><br>
	                        
	                    <!-- VALIDATION.. -->
	                    <div style="font:bold 20px book antiqua; color:#f44336" class="col-sm-offset-4">
	                        @if($errors->has('constituency'))
	                            {{ $errors->first('constituency') }}
	                        @endif
	                    </div> 
					</div>
				</div><br><br>

				<div class="row">
					<div class="form-group col-sm-7 col-sm-offset-2 {{ $errors->has('subCounty') ? 'has-error' : '' }}" style="font:bold 28px bradley hand itc">
						{!! Form::label('subCounty', 'Sub County.', ['class'=> 'control-label']) !!}
						<br>
						<div style="font:bold 38px book antiqua">
							{!! Form::text('subCounty', null, ['class'=> 'form-control', 'placeholder'=> 'Sub County.'])!!}
						</div><br>
	                        
	                    <!-- VALIDATION.. -->
	                    <div style="font:bold 20px book antiqua; color:#f44336" class="col-sm-offset-4">
	                        @if($errors->has('subCounty'))
	                            {{ $errors->first('subCounty') }}
	                        @endif
	                    </div> 
					</div>
				</div><br><br>

				<div class="row">
					<div class="form-group col-sm-7 col-sm-offset-2 {{ $errors->has('emailAddress') ? 'has-error' : '' }}" style="font:bold 28px bradley hand itc">
						{!! Form::label('emailAddress', 'Email Address of Client.', ['class'=> 'control-label']) !!}
						<br>
						<div style="font:bold 38px book antiqua">
							{!! Form::text('emailAddress', null, ['class'=> 'form-control', 'value' => '{{ old(emailAddress) }} ', 'placeholder'=> 'Your Email Address.'])!!}
						</div><br>

						<!-- VALIDATION.. -->
	                    <div style="font:bold 20px calibri; color:#f44336" class="col-sm-offset-4">
	                        @if($errors->has('emailAddress'))
	                            {{ $errors->first('emailAddress') }}
	                        @endif
	                    </div> 
					</div>
				</div><br><br>

				<div class="row">
					<div class="form-group col-sm-7 col-sm-offset-2 {{ $errors->has('mobileNumber') ? 'has-error' : '' }}" style="font:bold 28px bradley hand itc">
						{!! Form::label('mobileNumber', 'Mobile Number of The Client.', ['class'=> 'control-label']) !!}
						<br>
						<div style="font:bold 38px book antiqua">
							{!! Form::number('mobileNumber', null, ['class'=> 'form-control', 'placeholder'=> 'Mobile Number of the client.'])!!}
						</div><br>
	                        
	                    <!-- VALIDATION.. -->
	                    <div style="font:bold 20px book antiqua; color:#f44336" class="col-sm-offset-4">
	                        @if($errors->has('mobileNumber'))
	                            {{ $errors->first('mobileNumber') }}
	                        @endif
	                    </div> 
					</div>
				</div><br><br>

				<div class="row">
					<div class="form-group col-sm-7 col-sm-offset-2 {{ $errors->has('servedBy') ? 'has-error' : '' }}" style="font:bold 28px bradley hand itc">
						{!! Form::label('servedBy', 'Served By.', ['class'=> 'control-label']) !!}
						<br>
						<div style="font:bold 38px book antiqua">
							{!! Form::text('servedBy', Auth::user()->username, ['class'=> 'form-control' ])!!}
						</div><br>

						<!-- VALIDATION.. -->
	                    <div style="font:bold 20px book antiqua; color:#f44336" class="col-sm-offset-4">
	                        @if($errors->has('servedBy'))
	                            {{ $errors->first('servedBy') }}
	                        @endif
	                    </div> 
					</div>
				</div><br><br>

				<div class="row">
	                <div class="form-group " style="font:bold 20px arial">
	                    <div class="col-sm-7 col-sm-offset-2">    
	                        {!! Form::submit('Register A New Client.', ['class' => 'btn btn-primary btn-block', 'style' => 'font:bold 24px bradley hand itc']) !!}
	                    </div> <br><br>
	                </div>
	            </div> <br>

	            <div class="row">
	                <div class="form-group" style="font:bold 20px arial">
	                    <div class="col-sm-7 col-sm-offset-2">                  
	                        {!! Form::reset('Erase The Client\'s Input.', ['style' => 'font:bold 24px bradley hand itc', 'class' => 'btn btn-danger btn-block']) !!}
	                    </div>
	                </div>
	            </div> <br>
			{!! Form::close() !!}
		</div>
	</section>
@stop