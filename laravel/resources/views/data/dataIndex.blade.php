@extends('layout.syntax')

@section('content')

@include('layout.dataNav')
	
	<section id="portfolio" class="bg-light-gray" style="margin-top:-2px">
		<div class="container">
			<div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading"> 
                        <i style="color:red" class="fa fa-user  fa-3x"> </i>       
                    </h2>
                    <h3 class="section-subheading text-muted">
                    	Rentown Clients.
                    </h3>
                </div>
            </div> <br>

			@foreach($client as $clients)
				<div class="horizontal">
	                <div class="col-md-4 col-sm-6 portfolio-item">
	                    <a style="height:200px; width:100%" href=" {{ URL::route('client', [$clients->id]) }} " class="portfolio-link">
	                        <div class="portfolio-hover">
	                            <div class="portfolio-hover-content">
	                                <i style="color:#f00" class="fa fa-user fa-5x"></i>
	                            </div>
	                        </div>
	                    </a>
	                   	
	                   	<div class="portfolio-caption">
                            <h4 style="font:bold 24px bradley hand itc"> {{ $clients->clientName }} </h4> <br>
                        </div><br>

                        <div class="row">
		                    <div class="col-lg-offset-4 col-md-offset-2 col-sm-offset-3 col-xs-offset-4">
		                        {!! Form::open(['route' => ['destroy',$clients->id], 'method' => 'delete' ]) !!}
		                            <div class="col-sm-9 col-sm-offset-3">
		                                {!! Form::submit('Delete this Client', ['class' => 'btn btn-warning btn-block', 'style' => 'font:bold 16px book antiqua']) !!}
		                            </div>
		                        {!! Form::close() !!}
		                    </div>
		                </div>
	                </div>
	            </div>   
			@endforeach
		</div>
	</section>
@stop