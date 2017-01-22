<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="{{ url('css/app.css')}}">

<!--
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
-->
    <title>احمد العدوان</title>

    <!-- Bootstrap Core CSS -->
    <link href="{{ asset('design/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{{ asset('design/css/heroic-features.css') }}" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

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
                <a class="navbar-brand" href="#">  ديون احمد العدوان  </a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">

                    <li>
                    </li>

                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Content -->
    <div class="container">


      <div class="container">
        <h2>Files </h2>
        <table class="table table-striped">
          <thead>
            <tr>
              <th>اسم صاحب الدين</th>
              <th>قيمة الدين</th>
               <th> </th>
            </tr>
          </thead>
          <tbody>

<?php

 foreach ($arrears as $row)

  { ?>
            <tr>
              <td> <?= $row->name ?></td>
              <td> <?= $row->value ?></td>


              <td>

              <a href="/destroy/{{$row->id}}" class="btn btn-danger">  حذف </a>
</td>
            </tr>

<?php }?>
                      </tbody>
        </table>
      </div>

      </div>

<form action="add" method="post">
  <div class="container">
    <div class="col-md-12">

        <div class="form-group">
            <input type="text" class="form-control" name="name" placeholder=" اسم صاحب الدين " >
            <input type="text" class="form-control" name="value" placeholder= "قيمة الدين"   >
            <input type="submit" value="اضافة" class="btn btn-success">
        </div>
    </div>

  </div>
  {{csrf_field()}}
</form>

<script src="{{ url('js/app.js')}}"></script>
</body>

</html>


<?php



 ?>
