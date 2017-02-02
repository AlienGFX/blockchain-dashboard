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
                    <a class="navbar-brand" href="#">Order</a>
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
            <div class="container">
                <div class="row">
                    <div class="col-sm-8 col-sm-offset-2">

                        <!--      Wizard container        -->
                        <div class="wizard-container">

                            <div class="card wizard-card" data-color="orange" id="wizardProfile">
                                <form action="" method="">
                            <!--        You can switch " data-color="orange" "  with one of the next bright colors: "blue", "green",    "orange", "red", "azure"          -->

                                    <div class="wizard-header text-center">
                                        <h3 class="wizard-title">Create a new order</h3>
                                        <p class="category">This information will let us know more about you.</p>
                                    </div>

                                    <div class="wizard-navigation">
                                        <div class="progress-with-circle">
                                             <div class="progress-bar" role="progressbar" aria-valuenow="1" aria-valuemin="1" aria- valuemax="3" style="width: 21%;"></div>
                                        </div>
                                        <ul>
                                            <li>
                                                <a href="#emitter" data-toggle="tab">
                                                    <div class="icon-circle">
                                                        <i class="ti-user"></i>
                                                    </div>
                                                    Emitter
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#recipient" data-toggle="tab">
                                                    <div class="icon-circle">
                                                        <i class="ti-settings"></i>
                                                    </div>
                                                    Recipient
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#account" data-toggle="tab">
                                                    <div class="icon-circle">
                                                        <i class="ti-map"></i>
                                                    </div>
                                                    Account
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#validation" data-toggle="tab">
                                                    <div class="icon-circle">
                                                        <i class="ti-map"></i>
                                                    </div>
                                                    Validation
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="tab-content">
                                        <div class="tab-pane" id="emitter">
                                            <div class="row">
                                                <h5 class="info-text"> Please tell us more about request.</h5>
                                                <div class="col-sm-4 col-sm-offset-1">
                                                    <div class="picture-container">
                                                        <div class="picture">
                                                            <img src="img/example.png" class="picture-src" id="   wizardPicturePreview" title="" />
                                                            <input type="file" id="wizard-picture">
                                                        </div>
                                                        <h6><b>#167981</b> Request</h6>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label>Smartcontract <small>(required)</small></label>
                                                        <input name="smartcontract" type="text" class="form-control">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Wallet number <small>(required)</small></label>
                                                        <input name="wallet" type="text" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-sm-10 col-sm-offset-1">
                                                    <div class="form-group">
                                                        <label>Email <small>(required)</small></label>
                                                        <input name="email" type="email" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane" id="recipient">
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <h5 class="info-text"> Banking Information </h5>
                                                </div>
                                                <div class="col-sm-7 col-sm-offset-1">
                                                    <div class="form-group">
                                                        <label>ID Wallet</label>
                                                        <input type="text" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-sm-3">
                                                    <div class="form-group">
                                                        <label>Price</label>
                                                        <input type="text" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-sm-5 col-sm-offset-1">
                                                    <div class="form-group">
                                                        <label>OTP</label>
                                                        <input type="text" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-sm-5">
                                                    <div class="form-group">
                                                        <label>Money</label><br>
                                                        <select name="country" class="form-control">
                                                            <option value="bitcoin"> Bitcoin </option>
                                                            <option value="dogecoin"> Dogecoin </option>
                                                            <option value="litecoin"> Litecoin </option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane" id="account">
                                            <h5 class="info-text"> What are you doing ? </h5>
                                            <div class="row">
                                                <div class="col-sm-8 col-sm-offset-2">
                                                    <div class="col-sm-4">
                                                        <div class="choice" data-toggle="wizard-checkbox">
                                                            <input type="checkbox" name="jobb" value="Design">
                                                            <div class="card card-checkboxes card-hover-effect">
                                                                <i class="ti-paint-roller"></i>
                                                                <p>Testing</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <div class="choice" data-toggle="wizard-checkbox">
                                                            <input type="checkbox" name="jobb" value="Code">
                                                            <div class="card card-checkboxes card-hover-effect">
                                                                <i class="ti-pencil-alt"></i>
                                                                <p>Development</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <div class="choice" data-toggle="wizard-checkbox">
                                                            <input type="checkbox" name="jobb" value="Develop">
                                                            <div class="card card-checkboxes card-hover-effect">
                                                                <i class="ti-star"></i>
                                                                <p>Production</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane" id="validation">
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <h5 class="info-text"> Validation </h5>
                                                </div>
                                                <div class="choice" data-toggle="wizard-checkbox">
                                                    <input type="checkbox" name="jobb" value="Code">
                                                    <div class="card card-checkboxes card-hover-effect">
                                                        <i class="ti-pencil-alt"></i>
                                                        <p>Validation</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="wizard-pre-footer">
                                        <div class="pull-right">
                                            <input type='button' class='btn btn-next btn-fill btn-warning btn-wd' name='next' value='   Next' />
                                            <input type='button' class='btn btn-finish btn-fill btn-warning btn-wd' name='finish'   value='Finish' />
                                        </div>

                                        <div class="pull-left">
                                            <input type='button' class='btn btn-previous btn-default btn-wd' name='previous' value='    Previous' />
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </form>
                            </div>
                        </div> <!-- wizard container -->
                    </div>
                </div><!-- end row -->
            </div> <!--  big container -->
        </div>

        <?php require_once('includes/footer.php'); ?>


    </div>
</div>


</body>

    <!--   Core JS Files   -->
    <script src="js/jquery-2.2.4.min.js" type="text/javascript"></script>
	<script src="js/bootstrap.min.js" type="text/javascript"></script>
    <script src="js/jquery.bootstrap.wizard.js" type="text/javascript"></script>

	<!--  Checkbox, Radio & Switch Plugins -->
	<script src="js/bootstrap-checkbox-radio.js"></script>

	<!--  Charts Plugin -->
	<script src="js/chartist.min.js"></script>

    <!--  Notifications Plugin    -->
    <script src="js/bootstrap-notify.js"></script>

    <!--  Google Maps Plugin    -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>

    <!--  Plugin for the Wizard -->
    <script src="js/paper-bootstrap-wizard.js" type="text/javascript"></script>

    <!-- Paper Dashboard Core javascript and methods for Demo purpose -->
	<script src="js/paper-dashboard.js"></script>

    <!--  More information about jquery.validate here: http://jqueryvalidation.org/  -->
    <script src="js/jquery.validate.min.js" type="text/javascript"></script>

	<!-- Paper Dashboard DEMO methods, don't include it in your project! -->
	<script src="js/demo.js"></script>

</html>
