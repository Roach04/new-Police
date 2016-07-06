<!-- here we're doin the navigation links of our site. Later we will authenticate these links.-->
    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <a class="navbar-brand page-scroll" href=" {{ URL::route('home') }} ">
                    <span style="color:lavender"> Kenya Police. </span>
                </a>
                
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul style="margin-top:3px" class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>

                    <li class="dropdown">
                        <a href="#" data-toggle="dropdown" style="border-radius:5px"> 
                            <i class="fa fa-group fa-2x"> </i>
                            Guest. <i class="fa fa-caret-down"> </i> 
                        </a>
                        <ul class="dropdown-menu" style="background-color:black">
                            <li> 
                                <a href=" {{ URL::route('createAccount')}} ">
                                    <i class="fa fa-sign-in fa-2x"> </i>
                                    Sign Up. 
                                </a> 
                            </li>

                            <li> 
                                <a href=" {{ URL::route('signIn') }} ">
                                    <i class="fa fa-user fa-2x"> </i>
                                    Sign In. 
                                </a> 
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>







