<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Publisher Dashboard</title>
    <!-- Here we add Roboto Font of Google -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" id="fontsGoogle">
    <!-- Here we use fontawesome 5.15.1 -->
    <script src="../../../js/allFontAwesome.js"></script>
    <!-- Here we use normalize.css for nomalizer the styles css -->
    <link rel="stylesheet" href="../../../css/normalize.css">
    <!-- Principal Styles -->
    <link rel="stylesheet" href="../../../css/styles.css">
    <link rel="stylesheet" href="../../css/panel.css">
    <link rel="stylesheet" href="website.css">
</head>

<body id="websitesP">
    <?php
        include("../../../templates/nav.php")
    ?>
    <div class="main mN" id="fean">
        <h1 class="title">
            Publisher <span class="sT">» Dashboard</span>
        </h1>
        <a href="../websiteAdd/" class="btn">+ Submit Website</a>
    </div>
    <div class="main container">
        <?php
            include("../../../templates/asideP.php")
        ?>
        <div class="main principal">
            <form action="">
                <table class="tableO">
                    <tbody class="bodyT">
                        <tr class="trH">
                            <th>Your Properties </th>
                            <th>
                                <select id="formFilter" class="formSelect">
                                    <option>Category</option>
                                    <option>Automotive</option>
                                    <option>Business &amp; Finance</option>
                                    <option>Cryptocurrency</option>
                                    <option>Education</option>
                                    <option>Family &amp; Parenting</option>
                                    <option>Food &amp; Drink</option>
                                    <option>Gaming</option>
                                    <option>General: Multi-Niche </option>
                                    <option>Government &amp; Politics </option>
                                    <option>Health</option>
                                    <option>Home &amp; Architecture</option>
                                    <option>Pets</option>
                                    <option>Podcasts</option>
                                    <option>Premium Websites</option>
                                    <option>SEO &amp; Digital Marketing</option>
                                    <option>Technology</option>
                                    <option>Travel</option>
                                    <option>Visual Arts &amp; Design</option>
                                    <option>Web Design &amp; Development</option>
                                    <option>Weddings</option>
                                </select>
                            </th>
                            <th>
                                <select id="orderPrice" class="formSelect">
                                    <option>Price</option>
                                    <option>Low to High</option>
                                    <option>High to Low</option>
                                </select>
                            </th>
                            <th>
                                <form action="">
                                    <input type="text" name="search" class="search" placeholder="Search Website">
                                </form>
                            </th>
                        </tr>
                        <tr class="trD">
                            <td>Website</td>
                            <td>Other Details</td>
                            <td>
                                <select class="formSelect">
                                    <option>Status</option>
                                    <option>Pending</option>
                                    <option>Approved</option>
                                    <option>Processing</option>
                                    <option>Rejected</option>
                                </select>
                            </td>
                            <td>Actions</td>
                        </tr>
                    </tbody>
                </table>
            </form>
        </div>
    </div>
    <?php
        include("../../../templates/footer.php")
    ?>
    <script src="../../../js/main.js"></script>
    <script src="../../main.js"></script>
</body>

</html>