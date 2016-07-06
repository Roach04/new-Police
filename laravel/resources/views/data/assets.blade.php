@extends('layout.syntax')

@section('content')

@include('layout.assetsNav')
	
	<section class="bg-light-gray" style="margin-top:-2px">
		<div class="container">
			{!! Form::open(['route' => ['storeAssets'], 'method' => 'post'] ) !!}
				<h1 class="pull-left" style="color:#f44336"> <i class="fa fa-user fa-2x"> </i> Assets. </h1> <br><br><br>

				<div style="margin-top:70px" class="row">
					<div class="form-group col-sm-7 col-sm-offset-2 {{ $errors->has('assetType') ? 'has-error' : '' }}" style="font:bold 28px bradley hand itc">
						{!! Form::label('assetType', 'Type / Category of Asset', ['class' => 'control-label']) !!}
						<br>
						<div style="font:bold 38px book antiqua">
							{!! Form::select('assetType', [
									   'Psv'  => 'Public service vehicle.',
									   'Heavy Commercials' => 'Heavy Commercials',
									   'Other'     => 'Other'], null, array('class' => 'form-control'
									)) !!}
						</div><br>

						<!-- VALIDATION.. -->
	                    <div style="font:bold 20px book antiqua; color:#f44336" class="col-sm-offset-4">
	                        @if($errors->has('assetType'))
	                            {{ $errors->first('assetType') }}
	                        @endif
	                    </div>
					</div>
				</div><br><br>

				<div class="row">
					<div class="form-group col-sm-7 col-sm-offset-2 {{ $errors->has('make') ? 'has-error' : '' }}" style="font:bold 28px bradley hand itc">
						{!! Form::label('make', 'Make of the Vehicle.', ['class' => 'control-label']) !!}
						<br>
						<div style="font:bold 38px book antiqua">
							{!! Form::text('make', null, ['class'=> 'form-control', 'placeholder'=> 'Make of the Vehicle.'])!!}
						</div><br>

						<!-- VALIDATION.. -->
	                    <div style="font:bold 20px book antiqua; color:#f44336" class="col-sm-offset-4">
	                        @if($errors->has('make'))
	                            {{ $errors->first('make') }}
	                        @endif
	                    </div> 
					</div>
				</div><br><br>

				<div class="row">
					<div class="form-group col-sm-7 col-sm-offset-2 {{ $errors->has('model') ? 'has-error' : '' }}" style="font:bold 28px bradley hand itc">
						{!! Form::label('model', 'Model Number.', ['class'=> 'control-label']) !!}
						<br>
						<div style="font:bold 38px book antiqua">
							{!! Form::text('model', null, ['class'=> 'form-control', 'placeholder'=> 'Model Number.'])!!}
						</div><br>

						<!-- VALIDATION.. -->
	                    <div style="font:bold 20px calibri; color:#f44336" class="col-sm-offset-4">
	                        @if($errors->has('model'))
	                            {{ $errors->first('model') }}
	                        @endif
	                    </div> 
					</div>
				</div><br><br>

				<div class="row">
					<div class="form-group col-sm-7 col-sm-offset-2 {{ $errors->has('manufacturer') ? 'has-error' : '' }}" style="font:bold 28px bradley hand itc">
						{!! Form::label('manufacturer', 'Manufacturer.', ['class'=> 'control-label']) !!}
						<br>
						<div style="font:bold 38px book antiqua">
							{!! Form::text('manufacturer', null, ['class'=> 'form-control', 'placeholder'=> 'Manufacturer.'])!!}
						</div><br>
	                        
	                    <!-- VALIDATION.. -->
	                    <div style="font:bold 20px book antiqua; color:#f44336" class="col-sm-offset-4">
	                        @if($errors->has('manufacturer'))
	                            {{ $errors->first('manufacturer') }}
	                        @endif
	                    </div> 
					</div>
				</div><br><br>

				<div class="row">
					<div class="form-group col-sm-7 col-sm-offset-2 {{ $errors->has('yearOfMake') ? 'has-error' : '' }}" style="font:bold 28px bradley hand itc">
						{!! Form::label('yearOfMake', 'Year of Make.', ['class'=> 'control-label']) !!}
						<br>
						<div style="font:bold 38px book antiqua">
							{!! Form::number('yearOfMake', null, ['class'=> 'form-control', 'placeholder'=> 'Year Of Make.'])!!}
						</div><br>
	                        
	                    <!-- VALIDATION.. -->
	                    <div style="font:bold 20px book antiqua; color:#f44336" class="col-sm-offset-4">
	                        @if($errors->has('yearOfMake'))
	                            {{ $errors->first('yearOfMake') }}
	                        @endif
	                    </div> 
					</div>
				</div><br><br>

				<div class="row">
					<div class="form-group col-sm-7 col-sm-offset-2 {{ $errors->has('registrationNumber') ? 'has-error' : '' }}" style="font:bold 28px bradley hand itc">
						{!! Form::label('registrationNumber', 'Registration Number.', ['class'=> 'control-label']) !!}
						<br>
						<div style="font:bold 38px book antiqua">
							{!! Form::text('registrationNumber', null, ['class'=> 'form-control', 'placeholder'=> 'Registration Number.'])!!}
						</div><br>
	                        
	                    <!-- VALIDATION.. -->
	                    <div style="font:bold 20px book antiqua; color:#f44336" class="col-sm-offset-4">
	                        @if($errors->has('registrationNumber'))
	                            {{ $errors->first('registrationNumber') }}
	                        @endif
	                    </div> 
					</div>
				</div><br><br>

				

				<div class="row">
					<div class="form-group col-sm-7 col-sm-offset-2 {{ $errors->has('chasisNumber') ? 'has-error' : '' }}" style="font:bold 28px bradley hand itc">
						{!! Form::label('chasisNumber', 'Chasis Number.', ['class'=> 'control-label']) !!}
						<br>
						<div style="font:bold 38px book antiqua">
							{!! Form::text('chasisNumber', null, ['class'=> 'form-control', 'value' => '{{ old(postalAddress) }} ', 'placeholder'=> 'Chasis Number.'])!!}
						</div><br>

						<!-- VALIDATION.. -->
	                    <div style="font:bold 20px calibri; color:#f44336" class="col-sm-offset-4">
	                        @if($errors->has('chasisNumber'))
	                            {{ $errors->first('chasisNumber') }}
	                        @endif
	                    </div> 
					</div>
				</div><br><br>

				<div class="row">
					<div class="form-group col-sm-7 col-sm-offset-2 {{ $errors->has('fuelType') ? 'has-error' : '' }}" style="font:bold 28px bradley hand itc">
						{!! Form::label('fuelType', 'Fuel Type.', ['class'=> 'control-label']) !!}
						<br>
						<div style="font:bold 38px book antiqua">
							{!! Form::text('fuelType', null, ['class'=> 'form-control', 'placeholder'=> 'Fuel Type.'])!!}
						</div><br>
	                        
	                    <!-- VALIDATION.. -->
	                    <div style="font:bold 20px book antiqua; color:#f44336" class="col-sm-offset-4">
	                        @if($errors->has('fuelType'))
	                            {{ $errors->first('fuelType') }}
	                        @endif
	                    </div> 
					</div>
				</div><br><br>

				<div class="row">
	                <div class="form-group " style="font:bold 20px arial">
	                    <div class="col-sm-7 col-sm-offset-2">    
	                        {!! Form::submit('Register A New Asset.', ['class' => 'btn btn-primary btn-block', 'style' => 'font:bold 24px bradley hand itc']) !!}
	                    </div> <br><br>
	                </div>
	            </div> <br>

	            <div class="row">
	                <div class="form-group" style="font:bold 20px arial">
	                    <div class="col-sm-7 col-sm-offset-2">                  
	                        {!! Form::reset('Erase The Asset\'s Details.', ['style' => 'font:bold 24px bradley hand itc', 'class' => 'btn btn-danger btn-block']) !!}
	                    </div>
	                </div>
	            </div> <br>
			{!! Form::close() !!}
		</div>
	</div>
@stop