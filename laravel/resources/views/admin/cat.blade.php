@extends('layout.syntax')

@section('content')

@include('layout.catNav')
	
	<section id="portfolio" class="bg-lightest-gray" style="margin-top:-2px">
		<div class="container">
			{!! Form::open(['route' => ['storeCats', $user->id],'enctype' => 'multipart/form-data', 'method' => 'post'] ) !!}
				<div class="container">
		    		<div class="row">
		                <div class="col-lg-12 text-center">
		                    <h2 class="section-heading"> 
		                        <i style="color:black" class="fa fa-user  fa-3x"> </i>       
		                    </h2>
		                    <h3 style="color:red" class="section-subheading text-muted">
		                    	Categories.
		                    </h3>
		                </div>
		            </div> <br>
		    	</div>

				<div class="row">				
					<div class="col-lg-6 col-md-6 form-group {{ $errors->has('motors') ? 'has-error' : '' }}" style="font:bold 28px bradley hand itc">
						{!! Form::label('motors', 'Motors.', ['class'=> 'control-label col-sm-3']) !!}
						<div class="col-sm-8 col-sm-offset-1" style="font:bold 38px book antiqua">
							{!! Form::file('motors[]', ['class'=> 'btn btn-default btn-block', 'multiple', 'placeholder'=> 'Motors Category.'])!!}
						</div><br>

						<!-- VALIDATION.. -->
	                    <div style="font:bold 20px book antiqua; color:#BF360C" class="col-sm-offset-4">
	                        @if($errors->has('motors'))
	                            {{ $errors->first('motors') }}
	                        @endif
	                    </div> 
					</div>
					<div class="col-lg-6 col-md-6 form-group {{ $errors->has('picture') ? 'has-error' : '' }}" style="font:bold 28px bradley hand itc">
						{!! Form::label('cycles', 'Cycles.', ['class'=> 'control-label col-sm-3']) !!}
						<div class="col-sm-8 col-sm-offset-1" style="font:bold 38px book antiqua">
							{!! Form::file('cycles[]', ['class'=> 'btn btn-default btn-block', 'multiple', 'placeholder'=> 'Bicycle Category.'])!!}
						</div><br>

						<!-- VALIDATION.. -->
	                    <div style="font:bold 20px book antiqua; color:#BF360C" class="col-sm-offset-4">
	                        @if($errors->has('cycles'))
	                            {{ $errors->first('cycles') }}
	                        @endif
	                    </div> 
					</div>
				</div><br><br>

				<div class="row">
	                <div class="col-md-6 col-lg-6 form-group">
	                    <div >    
	                        {!! Form::submit('Upload Your Item.', ['class' => 'btn btn-primary btn-block', 'style' => 'font:bold 24px bradley hand itc']) !!}
	                    </div> <br><br>
	                </div>

	                <div class="col-md-6 col-lg-6 form-group">
	                    <div >                  
	                        {!! Form::reset('Erase Your Item.', ['style' => 'font:bold 24px bradley hand itc', 'class' => 'btn btn-danger btn-block']) !!}
	                    </div>
	                </div>
	            </div> 
			{!! Form::close() !!}
		</div>
	</section>
@stop