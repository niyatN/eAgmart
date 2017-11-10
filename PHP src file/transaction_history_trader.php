<?php
session_start();
 ?>
<!DOCTYPE html>
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>e-Agmart</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link href="./New_ Dashboard_files/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="./New_ Dashboard_files/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="./New_ Dashboard_files/ionicons.min.css" rel="stylesheet" type="text/css">
    <link href="./New_ Dashboard_files/AdminLTE.min.css" rel="stylesheet" type="text/css">
    <link href="./New_ Dashboard_files/_all-skins.min.css" rel="stylesheet" type="text/css">
    <link href="./New_ Dashboard_files/bootstrap3-wysihtml5.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="http://code.ionicframework.com/ionicons/2.0.0/css/ionicons.min.css" rel="stylesheet" type="text/css" />
  <style type="text/css">.jqstooltip { position: absolute;left: 0px;top: 0px;visibility: hidden;background: rgb(0, 0, 0) transparent;background-color: rgba(0,0,0,0.6);filter:progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000);-ms-filter: "progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000)";color: white;font: 10px arial, san serif;text-align: left;white-space: nowrap;padding: 5px;border: 1px solid white;z-index: 10000;}.jqsfield { color: white;font: 10px arial, san serif;text-align: left;}</style></head>
  <body class="wysihtml5-supported skin-green">
    <div class="wrapper">
      <header class="main-header">
        <a href="file:///F:/SEM-3/SOFTWARE%20PROJECT/AdminLTE-master/index2.html" class="logo"><img src="./New_ Dashboard_files/Resized-9KMC8.jpg"><b style="padding-left: 5px;">eAgmart</b>
        </a><nav class="navbar navbar-static-top" role="navigation"><a href="file:///F:/SEM-3/SOFTWARE%20PROJECT/AdminLTE-master/index.html" class="sidebar-toggle" class="fa fa-bars" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
          </a>
          <div  class="navbar-custom-menu">
                    <div class="pull-right" style="background-color:green; margin-left:300px; margin-top: 7px;">
                      <a href="Login.php" class="btn btn-success">Sign out</a>
                    </div>
          </div>
        </nav>
      </header>
      <aside class="main-sidebar">
        <section class="sidebar" style="height: auto;">
          <ul class="sidebar-menu">
            <li class="header">MAIN NAVIGATION</li>
            <li class="active treeview">
                <li><a href="trader_dashboard.php"><i class="fa fa-home"></i>Home</a></li>
            </li>
            <li class="active treeview">
                <li><a href="New_Dashboard_trader.php"><i class="fa fa-circle-o"></i>Trader</a></li>
            </li>
            <li class="treeview">
              <a href="transaction_history_trader.php">
                <i class="fa fa-history"></i>
                <span>Transaction History</span>
              </a>
            </li>
          </ul>
        </section>
      </aside>
      <div class="content-wrapper" style="min-height: 916px;">
        <section class="content-header">
          <h1>
            Dashboard
            <small>Control panel</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="file:///F:/SEM-3/SOFTWARE%20PROJECT/AdminLTE-master/index.html#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Dashboard</li>
          </ol>
        </section>
        <div align="center">
            <?php
              $host="localhost";
              $dbuser="root";
              $pass="";
              $dbname="eagmart";
              $conn=mysqli_connect($host,$dbuser,$pass,$dbname);
              if(mysqli_connect_errno())
              {
                die("connection lost");
              }
          ?>
            <style type="text/css">
              body {
                font-size: 15px;
                color: #343d44;
                font-family: "segoe-ui", "open-sans", tahoma, arial;
                padding: 0;
                margin: 0;
              }
              table {
                margin: auto;
                font-family: "Lucida Sans Unicode", "Lucida Grande", "Segoe Ui";
                font-size: 12px;
              }
              h1 {
                margin: 25px auto 0;
                text-align: center;
                text-transform: uppercase;
                font-size: 17px;
              }
              table td {
                transition: all .5s;
              }
              .data-table {
                border-collapse: collapse;
                font-size: 14px;
                min-width: 537px;
              }
              .data-table th,
              .data-table td {
                border: 1px solid #e1edff;
                padding: 7px 17px;
              }
              .data-table caption {
                margin: 7px;
              }
              .data-table thead th {
                background-color: #4CAF50;
                color: #FFFFFF;
                border-color: #6ea1cc !important;
                text-transform: uppercase;
              }
              .data-table tbody td {
                color: #353535;
              }
              .data-table tbody td:first-child,
              .data-table tbody td:nth-child(4),
              .data-table tbody td:last-child {
                text-align: right;
              }
              .data-table tbody tr:nth-child(odd) td {
                background-color: #A5D6A7;
              }
              .data-table tbody tr:hover td {
                background-color: ;
                border-color: #ffff0f;
              }
              .data-table tfoot th {
                background-color: #A5D6A7;
                text-align: right;
              }
              .data-table tfoot th:first-child {
                text-align: left;
              }
              .data-table tbody td:empty
              {
                background-color: #ffcccc;
              }
            </style>
            <h1>Table 1</h1>
            <table class="data-table">
              <caption class="title"></caption>
              <thead>
                <tr>
                  <th>Farmer Name</th>
                  <th>Date of Deal</th>
                  <th>Request Id</th>
                  <th>Produce</th>
                </tr>
              </thead>
              <tbody>
              <?php
              $un=$_SESSION['trader'];
              $sql2="SELECT FirstName , LastName FROM registration_details where UserName='$un'";
              $res2=mysqli_query($conn,$sql2);
              $row2=mysqli_fetch_assoc($res2);
              $un2=$row2['FirstName'] ." ". $row2['LastName'];
              echo $un2;
              $sql="SELECT * FROM deal where trader_name='$un2' ";
                $res=mysqli_query($conn,$sql);
                if(!$res){
                  die("Query Failed!");
                }
                while ($row=mysqli_fetch_assoc($res)) {
                  ?>
                  <tr>
                  <td><?php echo $row['farmer_name']; ?></td>
                  <td><?php echo $row['date']; ?></td>
                  <td><?php echo $row['request_id']; ?></td>
                  <td><?php echo $row['produce']; ?></td>
                  </tr>
                  <?php
                }
              ?>
              </tbody>
              <tfoot>
              </tfoot>
            </table>
        </div>
        <script src="./New_ Dashboard_files/jQuery-2.1.3.min.js.download"></script>
        <script src="./New_ Dashboard_files/jquery-ui.min.js.download" type="text/javascript"></script>
        <script>
          $.widget.bridge('uibutton', $.ui.button);
        </script>
        <script src="./New_ Dashboard_files/bootstrap.min.js.download" type="text/javascript"></script>
        <script src="./New_ Dashboard_files/app.min.js.download" type="text/javascript"></script>
</div>
</body>
</html>
