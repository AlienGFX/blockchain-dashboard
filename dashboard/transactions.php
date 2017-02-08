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
                    <a class="navbar-brand" href="#">Last Transactions</a>
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
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title"><?php print $network; ?></h4>
                                <p class="category">25 last Transactions (Received)</p>
                            </div>
                            <div class="content table-responsive table-full-width">
                                <table class="table table-striped">
                                    <thead>
                                        <th>ReqId</th>
                                        <th>Senders</th>
                                        <th>Amount</th>
                                        <th>Network</th>
                                        <th>Date</th>
                                        <th>Time</th>
                                        <th>Status</th>
                                    </thead>
                                    <tbody>
                                            <?php
                                            parse_str(implode('&', array_slice($argv, 1)), $_GET);

                                            $txs = $block_io->get_transactions(array(
                                                'type' => 'received',
                                                'addresses' => $walletUser
                                            ));

                                            $txr = $txs;
                                            $txd = $txs->data;
                                            $txs = $txs->data->txs;

                                            foreach($txs as $tx) {
                                                foreach($tx->amounts_received as $amountReceived) {
                                                    print "<tr><td>".$tx->txid."</td>";
                                                    print "<td>".$tx->senders[0]."</td>";
                                                    print "<td><b>".$amountReceived->amount."</b></td>";
                                                    print "<td><b>".$txd->network."</b></td>";
                                                    print "<td>".date('d/m/Y', $tx->time)."</td>";
                                                    print "<td>".date('H:i:s', $tx->time)."</td>";
                                                    print "<td>".$txr->status."</td></tr>";
                                                }
                                            }
                                            ?>
                                    </tbody>
                                </table>
                                <p align="center">
                                    <?php
                                    print "You have received <b>".$available_balance." ".$network."</b>
                                    in your wallet <b>".$walletUser."</b>";
                                    ?>
                                </p>

                            </div>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title"><?php print $network; ?></h4>
                                <p class="category">25 last Transactions (Sent)</p>
                            </div>
                            <div class="content table-responsive table-full-width">
                                <table class="table table-striped">
                                    <thead>
                                        <th>ReqId</th>
                                        <th>Receiver</th>
                                        <th>Amount</th>
                                        <th>Network</th>
                                        <th>Date</th>
                                        <th>Time</th>
                                        <th>Status</th>
                                    </thead>
                                    <tbody>
                                            <?php
                                            parse_str(implode('&', array_slice($argv, 1)), $_GET);

                                            $txs = $block_io->get_transactions(array(
                                                'type' => 'sent',
                                                'addresses' => $walletUser
                                            ));

                                            $txr = $txs;
                                            $txd = $txs->data;
                                            $txs = $txs->data->txs;

                                            foreach($txs as $tx) {
                                                foreach($tx->amounts_sent as $amountSent) {
                                                    $sent_balance = array_count_values($amountSent->amount);
                                                    print "<tr><td>".$tx->txid."</td>";
                                                    print "<td>".$amountSent->recipient."</td>";
                                                    print "<td><b>".$amountSent->amount."</b></td>";
                                                    print "<td><b>".$txd->network."</b></td>";
                                                    print "<td>".date('d/m/Y', $tx->time)."</td>";
                                                    print "<td>".date('H:i:s', $tx->time)."</td>";
                                                    print "<td>".$txr->status."</td></tr>";
                                                }
                                            }
                                            ?>
                                    </tbody>
                                </table>

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
