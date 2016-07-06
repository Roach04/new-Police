@extends('layout.syntax')

@section('content')
	
@include('layout.assetsNav')

	<section id="portfolio" class="container" style="margin-top:100px">
		<div class="horizontal">
            <div class="col-md-4 col-sm-6 portfolio-item">
                <a href=" #asset1 " class="portfolio-link" data-toggle="modal">
                    <div class="portfolio-hover">
                        <div class="portfolio-hover-content">
                            <i style="color: #f44336" class="fa fa-plus fa-3x"></i>
                        </div>
                    </div>

                    {!! Html::image('images/cruiser.png',null, ['style'=> 'height:200px; width:100%', 'class'=> 'img-responsive']) !!} 
                </a>
                <div class="portfolio-caption">
                    <h4> 33 Seater. </h4>
                </div>
            </div>

            <div class="col-md-4 col-sm-6 portfolio-item">
                <a href=" #asset2 " class="portfolio-link" data-toggle="modal">
                    <div class="portfolio-hover">
                        <div class="portfolio-hover-content">
                            <i style="color: #f44336" class="fa fa-plus fa-3x"></i>
                        </div>
                    </div>

                    {!! Html::image('images/37 seater.png',null, ['style'=> 'height:200px; width:100%', 'class'=> 'img-responsive']) !!} 
                </a>
                <div class="portfolio-caption">
                    <h4> 37 Seater. </h4>
                </div>
            </div>

            <div class="col-md-4 col-sm-6 portfolio-item">
                <a href=" #asset3 " class="portfolio-link" data-toggle="modal">
                    <div class="portfolio-hover">
                        <div class="portfolio-hover-content">
                            <i style="color: #f44336" class="fa fa-plus fa-3x"></i>
                        </div>
                    </div>

                    {!! Html::image('images/51 seater.png',null, ['style'=> 'height:200px; width:100%', 'class'=> 'img-responsive']) !!} 
                </a>
                <div class="portfolio-caption">
                    <h4> 51 Seater. </h4>
                </div>
            </div>

            
        </div>
	</section>

	<!-- Portfolio Modal 1 -->
    <div class="portfolio-modal modal fade" id="asset1" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content" style="background-color: #222;">
            <div class="close-modal"  data-dismiss="modal">
                <!-- <div class="lr">
                    <div class="rl"> </div>
                </div> -->
                <a href="">
                    <i style="border-radius:100%; color:#f44336" class="fa fa-close fa-5x pull-right"> </i>
                </a>
            </div>

            <div class="container">
                <div class="row">
                    <div class="col-lg-10 col-lg-offset-1">
                        <div class="modal-body">
                            <!-- Project Details Go Here -->
                            <p style="color:#f44336; font:bold 34px lucida handwriting"> Asset One. </p>
                            
                            <p style="color:lavender;">
                                Text goes here...
                            </p>

                            <center>
                               <img style="width:25%; height:300px" alt="No picture.." class="img-responsive" src=""> 
                            </center>

                           <div class="row">
                                <p style="text-align:center; font:bold 24px lucida handwriting; color:lavender">
                                    <i style="color:#f44336" class="fa fa-smile-o fa-lg fa-spin"> </i>
                                    ENJOY..
                                </p>
                           </div>

                            <!-- End of audios. 
                            <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close Project</button> -->
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <!-- Portfolio Modal 2 -->
    <div class="portfolio-modal modal fade" id="asset2" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content" style="background-color: #222;">
            <div class="close-modal"  data-dismiss="modal">
                <!-- <div class="lr">
                    <div class="rl"> </div>
                </div> -->
                <a href="">
                    <i style="border-radius:100%; color:#f44336" class="fa fa-close fa-5x pull-right"> </i>
                </a>
            </div>

            <div class="container">
                <div class="row">
                    <div class="col-lg-10 col-lg-offset-1">
                        <div class="modal-body">
                            <!-- Project Details Go Here -->
                            <p style="color:#f44336; font:bold 34px lucida handwriting"> Asset Two. </p>
                            
                            <p style="color:lavender;">
                                Details go here...
                            </p>

                            <center>
                               <img style="width:25%; height:300px" alt="No picture.." class="img-responsive" src=""> 
                            </center>

                           <div class="row">
                                <p style="text-align:center; font:bold 24px lucida handwriting; color:lavender">
                                    <i style="color:#f44336" class="fa fa-smile-o fa-lg fa-spin"> </i>
                                    ENJOY..
                                </p>
                           </div>

                            <!-- End of audios. 
                            <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close Project</button> -->
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <!-- Portfolio Modal 3 -->
    <div class="portfolio-modal modal fade" id="asset3" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content" style="background-color: #222;">
            <div class="close-modal"  data-dismiss="modal">
                <!-- <div class="lr">
                    <div class="rl"> </div>
                </div> -->
                <a href="">
                    <i style="border-radius:100%; color:#f44336" class="fa fa-close fa-5x pull-right"> </i>
                </a>
            </div>

            <div class="container">
                <div class="row">
                    <div class="col-lg-10 col-lg-offset-1">
                        <div class="modal-body">
                            <!-- Project Details Go Here -->
                            <p style="color:#f44336; font:bold 34px lucida handwriting"> Asset Three. </p>
                            
                            <p style="color:lavender;">
                                Details go here...
                            </p>

                            <center>
                               <img style="width:25%; height:300px" alt="No picture.." class="img-responsive" src=""> 
                            </center>

                           <div class="row">
                                <p style="text-align:center; font:bold 24px lucida handwriting; color:lavender">
                                    <i style="color:#f44336" class="fa fa-smile-o fa-lg fa-spin"> </i>
                                    ENJOY..
                                </p>
                           </div>

                            <!-- End of audios. 
                            <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close Project</button> -->
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@stop