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
        <a class="logo"><img src="./New_ Dashboard_files/Resized-9KMC8.jpg"><b style="padding-left: 5px;">eAgmart</b>
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
                <li><a href="farmer_dashboard.php"><i class="fa fa-home"></i>Home</a></li>
            </li>
            <li class="active treeview">
                <li><a href="farmer_dashboard.php"><i class="fa fa-circle-o"></i>Farmer</a></li>
            </li>
            <li class="treeview">
              <a href="https://www.google.co.in/url?sa=t&rct=j&q=&esrc=s&source=web&cd=2&ved=0ahUKEwjS94ac9JXWAhVBO48KHcJUB1QQFggxMAE&url=http%3A%2F%2Fsoiltesting.tamu.edu%2Frecscalc%2Frecscalc.htm&usg=AFQjCNHlHsXj_It5DNWdyUR7pmCIszv5gg" target="_blank">
                <i class="fa fa-files-o"></i>
                <span>Advice Fertilizer</span>
              </a>
            </li>
            <li>
              <a href="frameset.html" target="_blanks">
                <i class="fa fa-th"></i> <span>News</span>
              </a>
            </li>
            <li class="treeview">
              <a href="transaction_history_farmer.php">
                <i class="fa fa-history"></i>
                <span>Transaction History</span>
              </a>
            </li>
            <li class="treeview">
              <a href="pending_transaction.php">
                <i class="fa fa-history"></i>
                <span>Pending Transaction</span>
              </a>
            </li>
          </ul>
        </section>
      </aside>
      <div class="content-wrapper" style="min-height: 916px;">
        <div align="center">
            <link rel="stylesheet" type="text/css" href="produce_by_farmer.css">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

          <div class="container">
            <form action="produce_by_farmer.php" method="POST">
              <div class="row">
                <h4>Produce Details</h4>
                <div class="input-group input-group-icon">
                  <input type="text" placeholder="Full Name" name="Full_name" />
                  <div class="input-icon"><i class="fa fa-user"></i></div>
                </div>
                <div class="input-group input-group-icon">
                  <input type="text" placeholder="Address" name="Address" />
                  <div class="input-icon"><i class="fa fa-address-book"></i></div>
                </div>
                <div class="input-group input-group-icon">
                  <input type="text" placeholder="Contact No" name="Contact" />
                  <div class="input-icon"><i class="fa fa-envelope"></i></div>
                </div>
                <div class="input-group input-group-icon">
                  <input type="text" placeholder="Pincode" name="Pincode"/>
                  <div class="input-icon"><i class="fa fa-map-marker"></i></div>
                </div>
                <div class="input-group input-group-icon">
                  <input type="text" placeholder="Product" name="Product"/>
                  <div class="input-icon"><i class="fa fa-shopping-bag"></i></div>
                </div>
                <div class="input-group input-group-icon">
                  <input type="text" placeholder="Quantity (In Kg)" name="Quantity" />
                  <div class="input-icon"><i class="fa fa-shopping-cart"></i></div>
                </div>
                <div class="input-group input-group-icon">
                  <input type="text" placeholder="Crop Stage" name="Crop_Stage"/>
                  <div class="input-icon"><i class="fa fa-leaf"></i></div>
                </div>
              </div>
              <div class="row">
                <div class="col-half">
                  <h4>Date of Harvest</h4>
                  <input type="text" placeholder="yyyy-mm-dd" name="date_of_harvest" style="margin-left: 120px;" />
                </div>
              </div>
              <input type="submit" name="submit" value="Submit Request" onclick="alert('Request is successfully Submited')"/>
            </form>
          </div>
        </div>
        <script src="./New_ Dashboard_files/jQuery-2.1.3.min.js.download"></script>
        <script src="./New_ Dashboard_files/jquery-ui.min.js.download" type="text/javascript"></script>
        <script>
          $.widget.bridge('uibutton', $.ui.button);
        </script>
        <script src="./New_ Dashboard_files/bootstrap.min.js.download" type="text/javascript"></script>
        <script src="./New_ Dashboard_files/app.min.js.download" type="text/javascript"></script>
</div></body></html>
