@extends('layout.syntax')

@section('content')

@include('layout.serviceProvidersNav')

	<section class="bg-light-gray" style="margin-top:-2px">
		<div class="container">
			{!! Form::open(['route' => ['storeProvider', Auth::user()->id], 'method' => 'post'] ) !!}
				<h1 class="pull-left" style="color:#f44336"> <i class="fa fa-user fa-2x"> </i> Service Provider. </h1> <br><br><br>

				<div style="margin-top:70px" class="row">
					<div class="form-group col-sm-7 col-sm-offset-2 {{ $errors->has('serviceProvider') ? 'has-error' : '' }}" style="font:bold 28px bradley hand itc">
						{!! Form::label('serviceProvider', 'Type of Service Provider', ['class' => 'control-label']) !!}
						<br>
						<div style="font:bold 38px book antiqua">
							{!! Form::select('serviceProvider', [
									   'Tracking'  => 'Vehicle Tracking',
									   'Insurance' => 'Insurance',
									   'Repair'     => 'Repair'], null, array('class' => 'form-control'
									)) !!}
						</div><br>

						<!-- VALIDATION.. -->
	                    <div style="font:bold 20px book antiqua; color:#f44336" class="col-sm-offset-4">
	                        @if($errors->has('serviceProvider'))
	                            {{ $errors->first('serviceProvider') }}
	                        @endif
	                    </div>
					</div>
				</div><br><br>

				<div class="row">
					<div class="form-group col-sm-7 col-sm-offset-2 {{ $errors->has('serviceProviderName') ? 'has-error' : '' }}" style="font:bold 28px bradley hand itc">
						{!! Form::label('serviceProviderName', 'Name of Service Provider.', ['class' => 'control-label']) !!}
						<br>
						<div style="font:bold 38px book antiqua">
							{!! Form::text('serviceProviderName', null, ['class'=> 'form-control', 'placeholder'=> 'Name of Service Provider.'])!!}
						</div><br>

						<!-- VALIDATION.. -->
	                    <div style="font:bold 20px book antiqua; color:#f44336" class="col-sm-offset-4">
	                        @if($errors->has('serviceProviderName'))
	                            {{ $errors->first('serviceProviderName') }}
	                        @endif
	                    </div> 
					</div>
				</div><br><br>

				<div class="row">
					<div class="form-group col-sm-7 col-sm-offset-2 {{ $errors->has('emailAddress') ? 'has-error' : '' }}" style="font:bold 28px bradley hand itc">
						{!! Form::label('emailAddress', 'Official Email.', ['class'=> 'control-label']) !!}
						<br>
						<div style="font:bold 38px book antiqua">
							{!! Form::text('emailAddress', null, ['class'=> 'form-control', 'placeholder'=> 'Email Address.'])!!}
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
					<div class="form-group col-sm-7 col-sm-offset-2 {{ $errors->has('phoneNumber') ? 'has-error' : '' }}" style="font:bold 28px bradley hand itc">
						{!! Form::label('phoneNumber', 'Phone Number.', ['class'=> 'control-label']) !!}
						<br>
						<div style="font:bold 38px book antiqua">
							{!! Form::number('phoneNumber', null, ['class'=> 'form-control', 'placeholder'=> 'Phone Number.'])!!}
						</div><br>
	                        
	                    <!-- VALIDATION.. -->
	                    <div style="font:bold 20px book antiqua; color:#f44336" class="col-sm-offset-4">
	                        @if($errors->has('phoneNumber'))
	                            {{ $errors->first('phoneNumber') }}
	                        @endif
	                    </div> 
					</div>
				</div><br><br>

				<div class="row">
					<div class="form-group col-sm-7 col-sm-offset-2 {{ $errors->has('county') ? 'has-error' : '' }}" style="font:bold 28px bradley hand itc">
						{!! Form::label('county', 'County.', ['class'=> 'control-label']) !!}
						<br>
						<div style="font:bold 38px book antiqua">
							{!! Form::text('county', null, ['class'=> 'form-control', 'placeholder'=> 'County.'])!!}
						</div><br>
	                        
	                    <!-- VALIDATION.. -->
	                    <div style="font:bold 20px book antiqua; color:#f44336" class="col-sm-offset-4">
	                        @if($errors->has('county'))
	                            {{ $errors->first('county') }}
	                        @endif
	                    </div> 
					</div>
				</div><br><br>

				<div class="row">
					<div class="form-group col-sm-7 col-sm-offset-2 {{ $errors->has('constituency') ? 'has-error' : '' }}" style="font:bold 28px bradley hand itc">
						{!! Form::label('constituency', 'Constituency.', ['class'=> 'control-label']) !!}
						<br>
						<div style="font:bold 38px book antiqua">
							{!! Form::text('constituency', null, ['class'=> 'form-control', 'placeholder'=> 'Constituency / Sub County.'])!!}
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
					<div class="form-group col-sm-7 col-sm-offset-2 {{ $errors->has('postalAddress') ? 'has-error' : '' }}" style="font:bold 28px bradley hand itc">
						{!! Form::label('postalAddress', 'Postal Address.', ['class'=> 'control-label']) !!}
						<br>
						<div style="font:bold 38px book antiqua">
							{!! Form::text('postalAddress', null, ['class'=> 'form-control', 'value' => '{{ old(postalAddress) }} ', 'placeholder'=> 'Provide the Postal Address.'])!!}
						</div><br>

						<!-- VALIDATION.. -->
	                    <div style="font:bold 20px calibri; color:#f44336" class="col-sm-offset-4">
	                        @if($errors->has('postalAddress'))
	                            {{ $errors->first('postalAddress') }}
	                        @endif
	                    </div> 
					</div>
				</div><br><br>

				<div class="row">
					<div class="form-group col-sm-7 col-sm-offset-2 {{ $errors->has('contactPerson') ? 'has-error' : '' }}" style="font:bold 28px bradley hand itc">
						{!! Form::label('contactPerson', 'Contact Person.', ['class'=> 'control-label']) !!}
						<br>
						<div style="font:bold 38px book antiqua">
							{!! Form::text('contactPerson', null, ['class'=> 'form-control', 'placeholder'=> 'Contact Person ie Name(s).'])!!}
						</div><br>
	                        
	                    <!-- VALIDATION.. -->
	                    <div style="font:bold 20px book antiqua; color:#f44336" class="col-sm-offset-4">
	                        @if($errors->has('contactPerson'))
	                            {{ $errors->first('contactPerson') }}
	                        @endif
	                    </div> 
					</div>
				</div><br><br>

				<div class="row">
					<div class="form-group col-sm-7 col-sm-offset-2 {{ $errors->has('mobileNumber') ? 'has-error' : '' }}" style="font:bold 28px bradley hand itc">
						{!! Form::label('mobileNumber', 'Mobile Number.', ['class'=> 'control-label']) !!}
						<br>
						<div style="font:bold 38px book antiqua">
							{!! Form::number('mobileNumber', null, ['class'=> 'form-control', 'placeholder'=> 'Mobile Number.' ])!!}
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
					<div class="form-group col-sm-7 col-sm-offset-2 {{ $errors->has('serviceProviderBrief') ? 'has-error' : '' }}" style="font:bold 28px bradley hand itc">
						{!! Form::label('serviceProviderBrief', 'Brief of the Service Provider.', ['class'=> 'control-label']) !!}
						<br>
						<div style="font:bold 38px book antiqua">
							{!! Form::textarea('serviceProviderBrief', null, ['class'=> 'form-control', 'placeholder'=> 'Brief of the Service Provider.' ])!!}
						</div><br>

						<!-- VALIDATION.. -->
	                    <div style="font:bold 20px book antiqua; color:#f44336" class="col-sm-offset-4">
	                        @if($errors->has('serviceProviderBrief'))
	                            {{ $errors->first('serviceProviderBrief') }}
	                        @endif
	                    </div> 
					</div>
				</div><br><br>

				<div class="row">
	                <div class="form-group " style="font:bold 20px arial">
	                    <div class="col-sm-7 col-sm-offset-2">    
	                        {!! Form::submit('Register A New Service Provider.', ['class' => 'btn btn-primary btn-block', 'style' => 'font:bold 24px bradley hand itc']) !!}
	                    </div> <br><br>
	                </div>
	            </div> <br>

	            <div class="row">
	                <div class="form-group" style="font:bold 20px arial">
	                    <div class="col-sm-7 col-sm-offset-2">                  
	                        {!! Form::reset('Erase The Service Provider\'s Details.', ['style' => 'font:bold 24px bradley hand itc', 'class' => 'btn btn-danger btn-block']) !!}
	                    </div>
	                </div>
	            </div> <br>
			{!! Form::close() !!}
		</div>
	</section>
@stop