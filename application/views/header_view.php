<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Untitled Document</title>

<link rel="stylesheet" type="text/css" href="<?=  base_url()?>public/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="<?=  base_url()?>public/bootstrap/css/date-picker.css">
<link rel="stylesheet" type="text/css" href="<?=  base_url()?>public/bootstrap/css/custom.css">
</head>

<body>

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Kazi+</a>
        </div>
        
        <div class="collapse navbar-collapse" id="collapse">
         <ul class="nav navbar-nav navbar-right">
            
             
             <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Projects <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                  <li><a href="<?=  base_url()?>index.php/projects/addproject/">Add Project</a></li>
                <li class="divider"></li>
                <li><a href="<?=  base_url()?>index.php/projects/alterprojects/">Update/Delete Projects</a></li>
              </ul>
            </li>
            
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Tasks <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="<?=  base_url()?>index.php/tasks/addtask/">Add Tasks</a></li>
                <li class="divider"></li>
                <li><a href="<?=  base_url()?>index.php/tasks/altertasks/">Update/Delete Tasks</a></li>
              </ul>
            </li>
             
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Users <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="<?=  base_url()?>index.php/users/adduser/">Add User</a></li>
                <li class="divider"></li>
                <li><a href="<?=  base_url()?>index.php/users/alterusers/">Update/Delete User</a></li>
              </ul>
            </li>
            
            <li><a href="<?=  base_url()?>index.php/users/logout/">Logout</a></li>
          </ul>
                       
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>
    
    
    <div class="container">
        <div class="row" id="partials">
            
        </div>
    </div>


    