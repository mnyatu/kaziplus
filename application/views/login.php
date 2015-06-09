<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Untitled Document</title>

<link rel="stylesheet" type="text/css" href="<?=  base_url()?>public/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="<?=  base_url()?>public/bootstrap/css/custom.css">
</head>

<body>
      
    <div class="container">
        <div class="row" id="partials">
           
            <div class="col-sm-10 col-md-6 col-md-offset-3">
                
                <div class="thumbnail">
                    <p></p>
                    
                    <p class="text-center text-danger">
                        <?php
                            if(isset($error)){
                                echo 'wrong email/password combination';
                            }
                        ?>
                    </p>
                    
                    <form action="<?=  base_url()?>index.php/users/login/" method="post" class="form-horizontal">
                        <label>Email:</label>
                        <input type="text" name="username" class="form-control" required placeholder="username">
                        <p></p>
                        <label>Password:</label>
                        <input type="password" name="password" class="form-control" required placeholder="password">
                        <p></p>
                        <button type="submit" name="submit" class="btn btn-primary">Login</button>
                    </form>
                    
                    <p></p>
                </div>
            </div>
            
        </div>
    </div>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="<?=  base_url()?>public/js/jquery.js"><\/script>')</script>

<script type="text/javascript" src="<?=  base_url()?>public/bootstrap/js/bootstrap.min.js"></script>

</body>
</html>