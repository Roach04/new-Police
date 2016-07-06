@extends('layout.syntax')

@section('content')

@include('layout.cycleNav')
	
	<section id="portfolio" class="bg-lightest-gray" style="margin-top:-2px">
		<div class="container">
			<div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading"> 
                        <i style="color:black" class="fa fa-bicycle  fa-3x"> </i>       
                    </h2>
                    <h3 style="color:red" class="section-subheading text-muted">
                    	Reward-1.
                    </h3>
                </div>
            </div> <br>

			@if($cycle->count())
            @foreach($cycle->getCycle as $cycles)
            <div class="horizontal">
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="{{ $cycles->picture}}" data-lightbox="gallery" data-caption="..." data-title="{{ $cycles->lostItem }}" class="portfolio-link">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i style="color:#FF0000" class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        
                        <img style="height:250px; width:100%" class="img-rounded img-responsive" src=" {{ $cycles->picture }} "> 
                    </a>
                    @if(Auth::user()->username != 'Authentica')
                        <div class="portfolio-caption">
                            <h4> 
                            	{{ $cycles->lostItem }}  <span style="color:red"> | </span>

                            	{{ $cycles->reward }}
                            </h4> <br>
                           	
                           	<h4 style="font:bold italic 24px bradley hand itc">
                           		{{ $cycles->where }}
                           	</h4>
                        </div>
                    @endif
                    
                </div>
            </div>
            @endforeach
            @else
                <p style="color:#87D37C; text-align:center; font:bold 22px calibri"> Start uploading your Photographs and don't compromise on quality. </p>
            @endif
		</div>
	</section>
@stop