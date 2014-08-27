<!doctypehtml>
<html lang="en"> 
	<head>
		<meta charset="UTF-8">
		<title>Jacky Yuen's Space</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
		<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">
		<link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/font-awesome.min.css">
	</head>

  <body>
    <div id="wrapper">
    	<header>
    		<nav class="navbar navbar-default" role="navigation">
          <div class="container-fluid">
            
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="/">JY's Space</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <ul class="nav navbar-nav">
                <li><a href="{{URL::route('get_home')}}">Home</a></li>
                <li><a href="{{URL::route('get_about')}}">About Me</a></li>
                <li><a href="{{URL::route('get_suggestions')}}">Suggestion Box</a></li>
                <li><a href="{{URL::route('get_contact')}}">Contact Me</a></li>
              </ul>
            </div><!-- /.navbar-collapse -->

          </div><!-- /.container-fluid -->
        </nav>
      </header>

      <!-- View/Content injection -->
		  <div id="contentsection" class="container col-md-8 col-md-offset-2 contentsection">
			 @yield('content')
		  </div>

      <!-- JavaScript/JQuery/Bootstrap -->
      <script src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-2.1.1.min.js"></script>
      <script src="//ajax.aspnetcdn.com/ajax/jquery.validate/1.13.0/jquery.validate.js"></script>
      <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
      <script src="../js/script.js"></script>
     
    </div>

	</body>


  
	
</html>