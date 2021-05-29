@extends('layouts.app')


@section('content_head')

    <link rel="stylesheet" href="lib/bootstrap.min index.css">
    <link rel="stylesheet" href="lib/Article-List.css">
    <link rel="stylesheet" href="lib/Header-Blue.css">
    <link rel="stylesheet" href="lib/animate.min.css">
    
    <style>
        .w
        {
            width: 15%;
        }
    </style>
    <link href="lib/footer.css" rel="stylesheet">
@endsection


@section('content')
<body>
    <div>
        <div class="header-blue">
            <nav class="navbar navbar-light navbar-expand-md navigation-clean-search">
                <div class="container-fluid"><a class="navbar-brand" href="#">Trip's aid</a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
                    
                </div>
                <div class="w" id="navcol-1"><a class="btn btn-light action-button" role="button" href="/logout_admin">Log out</a></div>
            </nav>
            <div class="container hero">
                <div class="row">
                    <div class="col-12 col-lg-6 col-xl-5 offset-xl-1 pulse animated">
                        <h1>welcome Admin</h1>
                        <p>as Admin&nbsp;can now manage the site like users table and service managers tables<br><br></p>
                    </div>
                    <div class="col-md-5 col-lg-5 offset-lg-1 offset-xl-0 d-none d-lg-block phone-holder"><img class="pulse animated" src="images/hh.jpg" style="width: 100%;">
                        <div class="iphone-mockup"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="article-list">
        <div class="container">
            <div class="intro">
                <h2 class="text-center">Trip's aid management<br></h2>
                <p class="text-center">you can manage the service managers , users account and places table<br></p>
            </div>
            <div class="row articles">
                <div class="col-sm-6 col-md-4 item"><a href="/user_table"><img class="img-fluid animated pulse" data-bs-hover-animate="pulse" src="images/users table.jpg"></a>
                    <h3 class="name">Users table<br></h3><a class="action" href="/user_table"><i class="fa fa-arrow-circle-right"></i></a></div>
                <div class="col-sm-6 col-md-4 item"><a href="/service_table"><img class="img-fluid animated pulse" data-bs-hover-animate="pulse" src="images/SM table.jpg"></a>
                    <h3 class="name">Service managers&nbsp;table<br></h3><a class="action" href="/service_table"><i class="fa fa-arrow-circle-right"></i></a></div>
                <div class="col-sm-6 col-md-4 item"><a href="/place_table"><img class="img-fluid animated pulse" data-bs-hover-animate="pulse" src="images/places table.jpg"></a>
                    <h3 class="name">places table<br></h3><a class="action" href="/place_table"><i class="fa fa-arrow-circle-right"></i></a></div>
            </div>
        </div>
    </div>
   
    <footer class="site-footer">
  
        <div class="container">
          <div class="row">
            <div class="col-md-8 col-sm-6 col-xs-12">
              <p class="copyright-text">@ Trip's Aid team 2021
              </p>
            </div>
    
          </div>
        </div>
    </footer>

</body>

@endsection
