            <ul class="nav">
                <?php if(basename($page) == 'index.php'){echo '<li class="active">'; }else { echo '<li>'; } ?>
                    <a href="index.php">
                        <i class="ti-panel"></i>
                        <p>Home</p>
                    </a>
                </li>
                <?php if(basename($page) == 'profil.php'){echo '<li class="active">'; }else { echo '<li>'; } ?>
                    <a href="profil.php">
                        <i class="ti-user"></i>
                        <p>My account</p>
                    </a>
                </li>
                <?php if(basename($page) == 'transactions.php'){echo '<li class="active">'; }else { echo '<li>'; } ?>
                    <a href="transactions.php">
                        <i class="ti-view-list-alt"></i>
                        <p>My transactions</p>
                    </a>
                </li>
                <?php if(basename($page) == 'order.php'){echo '<li class="active">'; }else { echo '<li>'; } ?>
                    <a href="order.php">
                        <i class="ti-credit-card"></i>
                        <p>Create an order</p>
                    </a>
                </li>
                <?php if(basename($page) == 'wallet.php'){echo '<li class="active">'; }else { echo '<li>'; } ?>
                    <a href="wallet.php">
                        <i class="ti-wallet"></i>
                        <p>Create a wallet</p>
                    </a>
                </li>
                <?php if(basename($page) == 'maps.php'){echo '<li class="active">'; }else { echo '<li>'; } ?>
                    <a href="maps.php">
                        <i class="ti-map"></i>
                        <p>Localization</p>
                    </a>
                </li>
                <?php if(basename($page) == 'support.php'){echo '<li class="active">'; }else { echo '<li>'; } ?>
                    <a href="support.php">
                        <i class="ti-headphone-alt"></i>
                        <p>Support</p>
                    </a>
                </li>
            </ul>
