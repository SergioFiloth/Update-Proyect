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
    <link rel="stylesheet" href="websiteAdd.css">
</head>

<body id="websitesP">
    <?php
        include("../../../templates/nav.php")
    ?>
    <div class="main mN" id="fean">
        <h1 class="title">
            Publisher <span class="sT">» Website » Add New Website</span>
        </h1>
    </div>
    <div class="main container">
        <?php
            include("../../../templates/asideP.php")
        ?>
        <div class="main principal">
            <h2 class="titleP">
                Submit a Website
            </h2>
            <form class="multisteps-form__progress">
                <button class="multisteps-form__progress-btn js-active" type="button" title="Step 1">Step 1</button>
                <button class="multisteps-form__progress-btn" type="button" id="step_2" title="Step 2">Step 2</button>
                <button class="multisteps-form__progress-btn" type="button" id="step_3" title="Step 3">Step 3</button>
                <button class="multisteps-form__progress-btn" type="button" id="step_4" title="Step 4">Step 4</button>
            </form>
            <h2 class="titleW">
                Website
            </h2>
            <form action="" class="formWeb">
                <input type="text" name="website" class="fWebsite" id="website" placeholder="http://example.com">
                <button href="" class="btn btnN">Next</button>
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