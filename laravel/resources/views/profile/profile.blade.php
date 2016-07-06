@extends('layout.syntax')

@section('content')
	
@include('layout.profileNav')  
	
    <section id="portfolio" class="bg-lightest-gray" style="margin-top:-2px">
    	<div class="container">
    		<div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading"> 
                        <i style="color:black" class="fa fa-user  fa-3x"> </i>       
                    </h2>
                    <h3 style="color:red" class="section-subheading text-muted">
                    	{{ Auth::user()->username }}.
                    </h3>
                </div>
            </div> <br>

                   
            @foreach($user->getChase as $users)
            <div class="horizontal">
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a style="height:200px; width:100%" href="  " class="portfolio-link">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                
                                <i style="color:green" class="fa fa-user fa-5x"></i>
                                
                            </div>
                        </div>
                    </a>
                    
                    <div class="portfolio-caption">
                        <h4 style="color:green; font:bold 24px bradley hand itc"> 
                            {{ $users->case }} Case <br>

                            <p style="color:black"> 
                                {{ $users->firstname }} | {{ $users->lastname }}.
                            </p>
                        </h4> <br>
                    </div>
                </div>
            </div> 
            @endforeach          
    	</div>
    </section>
@stop