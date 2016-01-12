<?php
   
    session_start();

   $db = new PDO('mysql:host=127.0.0.1; dbname=crud' ,'root','');

   if(isset($_POST['formemail'])){

        if(!empty($_POST['email'])){

            $email=$_POST['email'];

            if(filter_var($email,FILTER_VALIDATE_EMAIL)){

                 $reqmail=$db->prepare("SELECT * FROM tbl_users WHERE email_id= ?");
                 $reqmail->execute(array($email));
                 $mailexist = $reqmail->rowCount();
                 
                     if($mailexist== 0){

                        $rqt= $db->prepare("INSERT INTO tbl_users ( email_id ) VALUES (?)");
                        $rqt->execute(array($email));
                        $erreur="<p font color='green'> votre adresse a bien été enregistrée </p>";


                                    }


                                }
                else{


                        $erreur="adresse email utilisée";

                    }


            
        }



    }



?>


<html><head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
        <script type="text/javascript" src="http://netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
        <link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <link href="https://bootswatch.com/yeti/bootstrap.css" rel="stylesheet" type="text/css">
    </head><body>
        <div class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-ex-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#"><span>TESTSTRESS-SECURITY</span></a>
                </div>
                <div class="collapse navbar-collapse" id="navbar-ex-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="active">
                            <a href="connexion.php">Login</a>
                        </li>
                        <li>
                            <a href="login.php">s'enregistrer</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="cover">
            
            <div class="cover-image" style="background-image: url(https://unsplash.imgix.net/photo-1418065460487-3e41a6c84dc5?q=25&amp;fm=jpg&amp;s=127f3a3ccf4356b7f79594e05f6c840e);"></div>
            
        </div>
        <div class="section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="text-center">Abonnez vous à la Newsletter</h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-offset-3 col-md-6">
                        <form role="form" method="POST" action="">
                            <div class="form-group">
                                <div class="input-group">
                                    <input type="email" class="form-control" placeholder="Votre adresse email" name="email">
                                    <span class="input-group-btn">
                                        <button type="submit" class="btn btn-success" name="formemail">Sign in</button>
                                    </span>
                                </div>
                            </div>
                        </form>


                    </div>
                </div>
            </div>
        </div>

         <?php if(isset($erreur)){echo $erreur;}?>
        <footer class="section section-primary">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="row">
                            <div class="col-md-12 hidden-lg hidden-md hidden-sm text-left">
                                <a href="#"><i class="fa fa-3x fa-fw fa-instagram text-inverse"></i></a>
                                <a href="#"><i class="fa fa-3x fa-fw fa-twitter text-inverse"></i></a>
                                <a href="#"><i class="fa fa-3x fa-fw fa-facebook text-inverse"></i></a>
                                <a href="#"><i class="fa fa-3x fa-fw fa-github text-inverse"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    

</body></html>