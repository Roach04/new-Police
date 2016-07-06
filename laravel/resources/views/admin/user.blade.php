@extends('layout.syntax')

@section('content')

@include('layout.userNav')
	
	<section id="portfolio" class="bg-light-gray" style="margin-top:-20px;"> 
   		<div class="container">
   			<div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading"> 
                        <i style="color:red" class="fa fa-user-times  fa-3x"> </i>       
                    </h2>
                    <h3 style="color:black" class="section-subheading text-muted">
                    	{{ Auth::user()->username }}.
                    </h3>
                </div>
            </div> <br>

        	{!! Form::open(['route' => ['storeRoles',$user->id], 'method' => 'patch' ]) !!}
            	
            	<div class="row">
                    <div class="form-group col-lg-6 col-md-6" style="font:bold 28px bradley hand itc">
                        {!! Form::label('firstname', 'First name.', ['class' => 'control-label'] ) !!}
                        <div style="font:bold 38px book antiqua">
                            {!! Form::text('firstname', $user->firstname , ['class' => 'form-control', 'readonly']) !!}
                        </div>
                    </div> 

                    <div class="form-group col-lg-6 col-md-6" style="font:bold 28px bradley hand itc">
                        {!! Form::label('lastname', '	Last name.', ['class' => 'control-label'] ) !!}
                        <div style="font:bold 38px book antiqua">
                            {!! Form::text('lastname', $user->lastname , ['class' => 'form-control', 'readonly']) !!}
                        </div>
                    </div> 
                </div><br> 

                <div class="row">
                    <div class="form-group col-lg-6 col-md-6" style="font:bold 28px bradley hand itc">
                        {!! Form::label('username', 'Username.', ['class' => 'control-label'] ) !!}
                        <div style="font:bold 38px book antiqua">
                            {!! Form::text('username', $user->username , ['class' => 'form-control', 'readonly']) !!}
                        </div>
                    </div> 

                    <div class="form-group col-lg-6 col-md-6 {{ $errors->has('role') ? 'has-error' : '' }}" style="font:bold 28px bradley hand itc">
                        {!! Form::label('role', 'Role', ['class' => 'control-label'] ) !!}
                        <div style="font:bold 38px book antiqua">
                        	{!! Form::select('role', [
							   '1'  => 'Administrator.',
							   '0' => 'Askari'], null, array('class' => 'form-control'
							)) !!}

                            
                        </div><br>

                        <!-- VALIDATION.. -->
	                    <div style="font:bold 20px book antiqua; color:#f44336" class="col-sm-offset-4">
	                        @if($errors->has('role'))
	                            {{ $errors->first('role') }}
	                        @endif
	                    </div>
                    </div> 
                </div> <br>

                <div class="row">
	                <div class="col-lg-6 col-md-6">
	                	{!! Form::submit('Update User\'s Role.', ['class' => 'btn btn-primary btn-block', 'style' => 'font:bold 24px bradley hand itc']) !!}
	                </div>
                
            {!! Form::close() !!}


	            	{!! Form::open(['route' => ['destroy', $user->id], 'method' => 'delete' ]) !!}

	            		<div class="col-lg-6 col-md-6">
	            			{!! Form::submit('Delete This User.', ['class' => 'btn btn-danger btn-block', 'style' => 'font:bold 24px bradley hand itc' ] ) !!}
	            		</div>
	            	{!! Form::close() !!}
            	</div>
   		</div>
   </section>
@stop