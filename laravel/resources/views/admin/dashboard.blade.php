@extends('layout.syntax')

@section('content')

@include('layout.dashboardNav')
	
	<section id="portfolio" class="bg-light-gray" style="margin-top:-2px">
		<div class="container">
			<div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading"> 
                        <i style="color:#311B92" class="fa fa-group  fa-3x"> </i>       
                    </h2>
                    <h3 class="section-subheading text-muted">
                    	Users.
                    </h3>
                </div>
            </div> <br>

            @foreach($user as $users)
				<div class="horizontal">
	                <div class="col-md-4 col-sm-6 portfolio-item">
	                    <a style="height:200px; width:100%" href=" {{ URL::route('user', [$users->id] ) }} " class="portfolio-link">
	                        <div class="portfolio-hover">
	                            <div class="portfolio-hover-content">
	                            	@if($users->role == 1)
	                            		<i style="color:green" class="fa fa-user fa-5x"></i>
	                            	@else
	                                	<i style="color:#000" class="fa fa-user fa-5x"></i>
	                                @endif
	                            </div>
	                        </div>
	                    </a>
	                   	
	                   	<div class="portfolio-caption">
	                   		@if($users->role == 1)
	                   			<h4 style="color:green; font:bold 24px bradley hand itc"> 
	                            	{{ $users->username }} 
	                            </h4> <br>
	                   		@else
	                            <h4 style="color:red; font:bold 24px bradley hand itc"> 
	                            	{{ $users->username }} 
	                            </h4> <br>
                            @endif
                        </div>
	                </div>
	            </div>   
			@endforeach
		</div>
	</section>
@stop