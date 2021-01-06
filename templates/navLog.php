<?php
session_start();
if (empty($_SESSION['active'])) {
	header('location: ../');
}
?>
<nav class="navigation" id="nav">
    <div class="nav">
        <div class="cMenuT">
            <a id="lindex">
                <img src="../../img/logo.png" class="nav__link--logo" alt="Logo X">
            </a>
            <div id="menuT" class="navigation__menuT">
                <i class="fas fa-bars"></i>
            </div>
        </div>
        <div class="contMenu desactive" id="contNav">
            <div class="nav__link">
                <ul class="nav__link--navbar">
                    <li class="navbar">
                        <a class="navbar__link" href="/sellGuestPost.php">Sell Guest Posts</a>
                    </li>
                    <li class="navbar">
                        <a class="navbar__link" href="/marketplace.php">Marketplace</a>
                    </li>
                    <li class="navbar">
                        <a class="navbar__link" href="/guestPostingServices">Guest Posting Services</a>
                    </li>
                    <li class="navbar">
                        <a class="navbar__link" href="/da-dr.php">Increase DA/DR</a>
                    </li>
                </ul>
            </div>
            <div class="nav__cardAndLogin">
                <ul class="nav__cardAndLogin--ul">
                    <a class="cart" id="lcart">
                        <li class="numberItem"><i class="fas fa-cart-plus cart"></i> 0 item</li>
                    </a>
                    <li class="login" id="btnL">
                        <a>Amit</a>
                    </li>
                </ul>
                <ul class="navLogin" id="nL">
                    <li class="liL"><a
                            href="/login/advertiser/index.php?id=<?php echo $_SESSION['idUser']; ?>">Buyer</a></li>
                    <li class="liL"><a
                            href="/login/publisher/index.php?id=<?php echo $_SESSION['idUser']; ?>">Seller</a></li>
                    <?php
                        include "php/db.php";
                        $query_data = mysqli_query($conexion, "CALL data();");
                        $result_data = mysqli_num_rows($query_data);
                        if ($result_data > 0) {
                            $data = mysqli_fetch_assoc($query_data);
                        }
					  ?>
                    <li class="liL"><a href="/login/profile/index.php?id=<?php echo $_SESSION['idUser']; ?>">My
                            Profile</a></li>

                    <li class="liL"><a href="/login/profile/">Transactions History</a></li>
                    <li class="liL"><a href="">Balance: $<?php echo $_SESSION['balance']; ?> usd</a></li>
                    <li class="liL"><a href="/php/salir.php">Logout</a></li>
                </ul>
            </div>
        </div>
    </div>
</nav>