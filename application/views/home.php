<!DOCTYPE html>
<html lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Home Page</title>

        <!-- Bootstrap CSS -->
        <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <nav class="navbar navbar-default" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">the dashboard</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="#">home</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#">login</a></li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
        <div class="jumbotron">
            <div class="container">
                <h1>welcome to the dashboard</h1>
                <p>the dashboard is your one-stop shop for an awesome bulletin board!</p>
                <p>
                    <a class="btn btn-primary btn-lg">Start</a>
                </p>
            </div>
        </div>
        <div class="container">
            <div class = "row">
                <div class="col-md-4"><h2>Manage Users</h2><p>Using this application, you'll learn how to add, remove, and edit users for the application.</p>
                </div>
                <div class="col-md-4"><h2>Leave messages</h2><p>Users will be able to leave a message to another user using this application.</p>
                </div>
                <div class="col-md-4"><h2>Edit User Information</h2><p>Admins will be able to edit another user's information (email address, first name, last name, etc.).</p>
                </div>
            </div>
        </div>







        <!-- jQuery -->
        <script src="//code.jquery.com/jquery.js"></script>
        <!-- Bootstrap JavaScript -->
        <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    </body>
</html>