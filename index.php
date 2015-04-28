<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Thumbnail Gallery - Start Bootstrap Template</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/thumbnail-gallery.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

<style>

.view_all_deals_container {
	display: table;
	text-align: center;
	width: 100%;
}

.view_all_deals {
	background-image: -webkit-linear-gradient(top, rgba(254,253,253,1) 23%,rgba(244,242,243,1) 100%);
	background-image:    -moz-linear-gradient(top, rgba(254,253,253,1) 23%,rgba(244,242,243,1) 100%);
	background-image:     -ms-linear-gradient(top, rgba(254,253,253,1) 23%,rgba(244,242,243,1) 100%);
	background-image:      -o-linear-gradient(top, rgba(254,253,253,1) 23%,rgba(244,242,243,1) 100%);
	background-image:         linear-gradient(top, rgba(254,253,253,1) 23%,rgba(244,242,243,1) 100%);
	border: solid 1px rgba(232,232,232,1);
	width: 149px;
	padding: 14px;
	display: inline-block;
	font-size: 19px;
	text-align: center;
	color: rgba(0,0,0,1);
	text-transform: uppercase;
	text-decoration:none;
} .view_all_deals {
	/* custom code */
	display: table-cell;
    width: 200px;
	margin:0 auto;
}
a.view_all_deals {
	text-decoration: none;
}
.view_all_deals:hover {
	border: solid 1px rgba(199,199,199,1);
}

</style>	
	
</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Start Bootstrap</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="#">About</a>
                    </li>
                    <li>
                        <a href="#">Services</a>
                    </li>
                    <li>
                        <a href="#">Contact</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <div class="col-lg-12">
                <h1 class="page-header">Thumbnail Gallery</h1>
            </div>
			
			<?php for($i = 0; $i < 20; $i++) { ?>
				<div class="thumbnail-container col-lg-3 col-md-4 col-xs-6 thumb">
					<a class="thumbnail" href="#">
						<img class="img-responsive" src="http://img.grouponcdn.com/deal/7ybWmg543J4tuPbMFcz7/ca-2048x1229/v1/c220x134.jpg" alt="">
						<div class="details">
							<div class="panel-heading">
								<h3 class="panel-title col-lg-offset-1">
									Project Management Training
								</h3>
							</div>
							<p class="col-lg-offset-2">Career academy</p>
							<div class="col-lg-offset-9">$99.89</div>
						</div>
					</a>
				</div>
				<div class="thumbnail-container col-lg-3 col-md-4 col-xs-6 thumb">
					<a class="thumbnail" href="#">
						<img class="img-responsive" src="http://img.grouponcdn.com/deal/jsGqFYN2QfmtFS1vDFogLD/ambers_olive_company-2048x1229/v1/c220x134.jpg" alt="">
						<div class="details">
							<div class="panel-heading">
								<h3 class="panel-title col-lg-offset-1">
									Project Pro Training
								</h3>
							</div>
							<p class="col-lg-offset-2">Career academy</p>
							<div class="col-lg-offset-9">$99.89</div>
						</div>
					</a>
				</div>
			<?php } ?>
        </div>
		
		<div class="row view_all_deals_container">
			<a class="view_all_deals" href="/browse/anchorage">
				View All Deals
			</a>
		</div>
		
        <hr>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; Your Website 2014</p>
                </div>
            </div>
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
