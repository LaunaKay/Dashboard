<!DOCTYPE html>
<html lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Title Page</title>

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
                    <li class="active"><a href="#">Dashboard</a></li>
                    <li><a href="#">Profile</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#">logoff</a></li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
        <div class = "container">
            <div class="col-lg-6">
                <div class="row">
                    <div class="col-lg-6">
                        <legend>Michael Choi</legend>
                    </div>
                </div>
                <fieldset>
                <div class="row">
                    <div class="col-lg-6">
                        <label>Registered at:</label>
                    </div>
                    <div class="col-lg-6">
                        <field>December 24, 2014</field>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <label>User ID:</label>
                    </div>
                    <div class="col-lg-6">
                        <field>1</field>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <label>Email address:</label>
                    </div>
                    <div class="col-lg-6">
                        <field>choi@village88.net</field>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <label>Description:</label>
                    </div>
                    <div class="col-lg-6">
                        <field>This is my description</field>
                    </div>
                </div>
            </fieldset>
            </div>
        </div>
        <div class="container" style="margin-top:100px;">
            <div class="row">
                <form action="" method="POST" role="form">
                    <legend>Leave a message for Michael</legend>
                    <div class="form-group">
                        <textarea name="message" id="inputMessage" class="form-control" rows="3" required="required"></textarea>
                        <button type="submit" class="btn btn-primary">Post</button>
                </form>
            </div>
        </div>
        <div class="container" style="margin-bottom:50px;">
            <div class="col-lg-6">
                <div class="row">
                    <p>Mark Gullen wrote</p>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="row">
                    <p style="float:right">7 hours ago</p>
                </div>
            </div>
            <div class="container">
                    <h3 style="outline:1px solid black; padding:20px;">This is a new message as a sample.</h3>
            </div>
        </div>
        <div class="container">
            <div class="col-lg-6">
                <div class="row">
                    <p style="margin-left:75px">Diana Manlulu wrote</p>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="row">
                    <p style="float:right">23 minutes ago</p>
                </div>
            </div>
            <div class="container">
                    <h3 style="outline:1px solid black; padding:20px; background-color:lightgrey; margin-left:75px">This is a new message as a sample.</h3>
            </div>
        </div>
        <div>
            <button type="submit" class="btn btn-default" style="float:right;">Comment</button>
        </div>


        <!-- jQuery -->
        <script src="//code.jquery.com/jquery.js"></script>
        <!-- Bootstrap JavaScript -->
        <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    </body>
</html>