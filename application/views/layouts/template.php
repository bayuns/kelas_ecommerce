<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <title><?php echo isset($title)?$title:'' ?></title>
</head>
    
    <body>
        <?php 
            $this->load->view('layouts/header'); 
        ?>
        
        <div class="container">
            <ol class="breadcrumb">
                <li><a href="#">Dashboard</a></li>
                <li><a href="#"><?php echo isset($breadcrumb)?$breadcrumb:'' ?></a></li>
                <li class="active"><?php echo isset($breadcrumb_aktif)?$breadcrumb_aktif:'' ?></li>
            </ol>

            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title"><?php echo isset($title)?$title:'' ?></h3>
                </div>
                <div class="panel-body">
                    <div class="pull-right">
                        <a href="#" class="btn btn-success" role="button">Tambah</a>
                    </div>
                    
                </div>

                <?php 
                    $this->load->view($table_view); 
                ?>
                
                <div class="panel-footer">
                    <a href="#" class="btn btn-warning" role="button">Simpan</a>
                </div>
            </div>


            <?php 
                $this->load->view('layouts/footer'); 
            ?>
        </div>

         <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    </body>
</html>