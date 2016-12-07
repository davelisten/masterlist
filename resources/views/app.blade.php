<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Master List</title>

	<link href="{{url("css/bootstrap.min.css")}}" rel="stylesheet">
	<link href="{{url("css/bootstrap-theme.min.css")}}" rel="stylesheet">

	<style type="text/css">
	
.design {
	border: solid 0px #000000;
/*	height: 70px;*/
	font-size: 15px;
	color: #800000;
	overflow: hidden;
}

.design:nth-child(odd){ background: blue; }

.design:nth-child(even){ background: yellow; }

.bghead{
		border: solid 0px #000000;
	  /*  background: -webkit-linear-gradient(320deg, #ffffff, #ffffff, #800000, #800000);*/
	    color: #800000;
	    overflow: hidden;
	}


</style>
</head>
<body>
<div class="container">
    <div class="bghead">
        <h1><b>TELFORD</b></h1>
        <p>Telford Svc Phils., Inc.</p>
  	</div>
      <!-- Static navbar -->
      <nav class="navbar navbar-default ">
        <div class="container-fluid">
          <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
              <li class="active"><a href="#">Home</a></li>
              <li><a href="#">About</a></li>
              <li><a href="#">Contact</a></li>
              
            </ul>
            <ul class="nav navbar-nav navbar-right">
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">User <span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="#">My Account</a></li>
                  <li role="separator" class="divider"></li>
                  <li><a href="#">Log Out</a></li>
                </ul>
              </li>
            </ul>
          </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
      </nav>
</div>



<div class="container">
	@yield('content')
</div>

	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../bootstrap/js/bootstrap.min.js"></script>
</body>
</html>