<!doctype html>
<html lang="en">
<?php require_once('includes/header.php'); ?>
<body>

<div class="wrapper">
	<div class="sidebar" data-background-color="black" data-active-color="danger">

    <!--
		Tip 1: you can change the color of the sidebar's background using: data-background-color="white | black"
		Tip 2: you can change the color of the active button using the data-active-color="primary | info | success | warning | danger"
	-->

    	<div class="sidebar-wrapper">
            <div class="logo">
                <a href="https://blockchain.rkweb.fr" class="simple-text">
                    Blockchain Lab
                </a>
            </div>

            <?php require_once('includes/menu.php'); ?>
        </div>
    </div>

    <div class="main-panel">
		<nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar bar1"></span>
                        <span class="icon-bar bar2"></span>
                        <span class="icon-bar bar3"></span>
                    </button>
                    <a class="navbar-brand" href="#">Support</a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="ti-panel"></i>
								<p>Stats</p>
                            </a>
                        </li>
                        <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="ti-bell"></i>
                                    <p class="notification">5</p>
									<p>Notifications</p>
									<b class="caret"></b>
                              </a>
                              <ul class="dropdown-menu">
                                <li><a href="#">Notification 1</a></li>
                                <li><a href="#">Notification 2</a></li>
                                <li><a href="#">Notification 3</a></li>
                                <li><a href="#">Notification 4</a></li>
                                <li><a href="#">Another notification</a></li>
                              </ul>
                        </li>
						<li>
                            <a href="#">
								<i class="ti-settings"></i>
								<p>Settings</p>
                            </a>
                        </li>
                    </ul>

                </div>
            </div>
        </nav>


        <div class="content">
            <div class="container-fluid">
                <div class="card">
                    <div class="header">
                        <h4 class="title">Notifications</h4>
                        <p class="category">Handcrafted by our friend <a target="_blank" href="https://github.com/mouse0270">Robert McIntosh</a>. Please checkout the <a href="http://bootstrap-notify.remabledesigns.com/" target="_blank">full documentation.</a></p>

                    </div>
                    <div class="content">
                        <div class="row">
                            <div class="col-md-6">
                                <h5>Notifications Style</h5>
                                <div class="alert alert-info">
                                    <span>This is a plain notification</span>
                                </div>
                                <div class="alert alert-info">
                                    <button type="button" aria-hidden="true" class="close">×</button>
                                    <span>This is a notification with close button.</span>
                                </div>
                                <div class="alert alert-info alert-with-icon" data-notify="container">
                                    <button type="button" aria-hidden="true" class="close">×</button>
                                    <span data-notify="icon" class="ti-bell"></span>
                                    <span data-notify="message">This is a notification with close button and icon.</span>
                                </div>
                                <div class="alert alert-info alert-with-icon" data-notify="container">
                                    <button type="button" aria-hidden="true" class="close">×</button>
                                    <span data-notify="icon" class="ti-pie-chart"></span>
                                    <span data-notify="message">This is a notification with close button and icon and have many lines. You can see that the icon and the close button are always vertically aligned. This is a beautiful notification. So you don't have to worry about the style.</span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <h5>Notification states</h5>
                                <div class="alert alert-info">
                                    <button type="button" aria-hidden="true" class="close">×</button>
                                    <span><b> Info - </b> This is a regular notification made with ".alert-info"</span>
                                </div>
                                <div class="alert alert-success">
                                    <button type="button" aria-hidden="true" class="close">×</button>
                                    <span><b> Success - </b> This is a regular notification made with ".alert-success"</span>
                                </div>
                                <div class="alert alert-warning">
                                    <button type="button" aria-hidden="true" class="close">×</button>
                                    <span><b> Warning - </b> This is a regular notification made with ".alert-warning"</span>
                                </div>
                                <div class="alert alert-danger">
                                    <button type="button" aria-hidden="true" class="close">×</button>
                                    <span><b> Danger - </b> This is a regular notification made with ".alert-danger"</span>
                                </div>
                            </div>
                        </div>
                        <br>
                        <br>
                        <div class="places-buttons">
                            <div class="row">
                                <div class="col-md-9">
                                    <h5>Notifications Places
                                        <p class="category">Click to view notifications</p>
                                    </h5>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                    <button class="btn btn-default btn-block" onclick="demo.showNotification('top','left')">Top Left</button>
                                </div>
                                <div class="col-md-3">
                                    <button class="btn btn-default btn-block" onclick="demo.showNotification('top','center')">Top Center</button>
                                </div>
                                <div class="col-md-3">
                                    <button class="btn btn-default btn-block" onclick="demo.showNotification('top','right')">Top Right</button>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                    <button class="btn btn-default btn-block" onclick="demo.showNotification('bottom','left')">Bottom Left</button>
                                </div>
                                <div class="col-md-3">
                                    <button class="btn btn-default btn-block" onclick="demo.showNotification('bottom','center')">Bottom Center</button>
                                </div>
                                <div class="col-md-3">
                                    <button class="btn btn-default btn-block" onclick="demo.showNotification('bottom','right')">Bottom Right</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <?php require_once('includes/footer.php'); ?>

    </div>
</div>


</body>

    <!--   Core JS Files   -->
    <script src="js/jquery-1.10.2.js" type="text/javascript"></script>
	<script src="js/bootstrap.min.js" type="text/javascript"></script>

	<!--  Checkbox, Radio & Switch Plugins -->
	<script src="js/bootstrap-checkbox-radio.js"></script>

	<!--  Charts Plugin -->
	<script src="js/chartist.min.js"></script>

    <!--  Notifications Plugin    -->
    <script src="js/bootstrap-notify.js"></script>

    <!--  Google Maps Plugin    -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>

    <!-- Paper Dashboard Core javascript and methods for Demo purpose -->
	<script src="js/paper-dashboard.js"></script>

	<!-- Paper Dashboard DEMO methods, don't include it in your project! -->
	<script src="js/demo.js"></script>

</html>
