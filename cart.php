<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart</title>
    <!-- Here we add Roboto Font of Google -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" id="fontsGoogle">
    <!-- Here we use fontawesome 5.15.1 -->
    <script src="js/allFontAwesome.js"></script>
    <!-- Here we use normalize.css for nomalizer the styles css -->
    <link rel="stylesheet" href="css/normalize.css">
    <!-- Principal Styles -->
    <link rel="stylesheet" href="css/styles.css">
    <!-- Styles of the pages -->
    <link rel="stylesheet" href="css/cart.css">
</head>

<body>
    <?php
        include("templates/nav.php")
    ?>
    <header class="main header" id="fean">
        <h2 class="titleMp">
            Cart
        </h2>
    </header>
    <div class="main mainC">
        <div class="steps">
            <div class="step active">
                <h2 class="titleS">Step 1</h2>
                <p>Review Cart & Provide Details</p>
            </div>
            <div class="step">
                <h2 class="titleS">Step 2</h2>
                <p>Select payment method & confirm order</p>
            </div>
            <div class="step">
                <h2 class="titleS">Step 3</h2>
                <p>Order complete</p>
            </div>
        </div>
    </div>
    <div class="main mBuy">
        <div class="items">
            <form class="item">
                <div class="nI">
                    <p class="dI">Item <span class="dSI">value</span></p>
                    <button class="remove">Remove</button>
                </div>
                <div class="descriptionI">
                    <div class="oneI">
                        <p>Name Website</p><br>
                        <p><span class="dSI">DA</span> Domain Authority / <span class="dSI">PA</span> Page Authority</p>
                        <br>
                        <p class="follow">Do Follow <span class="lFollow">link</span></p>
                    </div>
                    <div class="twoI">
                        <input type="checkbox" name="index" id="index">
                        <label for="index">Make google index</label>
                    </div>
                    <div class="treeI">
                        <p class="price">
                            US $Price
                        </p>
                        <p class="addP">
                            Guest post price
                        </p>
                    </div>
                </div>
                <div class="content">
                    <div class="sChose">
                        <button class="chose active">
                            Provide Post Content (500 Words Atleast)
                        </button>
                        <button class="chose">
                            Let the Author Write Post Content ($20)
                        </button>
                        <button class="chose">
                            Let our Experts write post content for you ($10)
                        </button>
                    </div>
                    <textarea name="post" id="post"></textarea>
                    <p class="titleC">
                        Any special requirements
                    </p>
                    <p class="descriptionC">
                        If necessary, you can write additional task requirements here, e. g., deadline, necessity of
                        disclosure, preferences
                        regarding content placement, etc.
                    </p>
                    <textarea name="addR" id="addR"></textarea>
                </div>
            </form>
        </div>
        <div class="checkout">
            <form>
                <div class="main cM">
                    <button class="btn btnC" id="checkout">
                        Go to checkout
                    </button>
                    <div class="service">
                        <p>Websites(value)</p>
                        <p>$value</p>
                    </div>
                    <div class="service">
                        <p>Indexing Service (value)</p>
                        <p>$value</p>
                    </div>
                    <div class="service">
                        <p>Post content (value)</p>
                        <p>$value</p>
                    </div>
                    <div class="service t">
                        <p>Total</p>
                        <p>$value</p>
                    </div>
                </div>
            </form>
            <p class="note">
                NOTE: No adult, Sexual, Gambling, Casino or any type of illegal links.
            </p>
        </div>
    </div>
    <?php
        include("templates/footer.php")
    ?>
    <script src="js/main.js"></script>
    <script>
        fean.style.marginTop = `${hNavbar}px`;
    </script>
</body>

</html>