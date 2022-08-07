<html>

<head>
    <title>I.T Store</title>
    <script>
        function myFunction() {
            var element = document.body;
            element.classList.toggle("dark-mode");
        }
    </script>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <!--<div class="bg1" style="background-image: url('bg.jpg');">-->
    <!-- Top navigation -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://www.w3schools.com/lib/w3.js"></script>


    <div class="navbar">
        <a href="Index.php">Home</a>
        <div class="subnav">
            <button class="subnavbtn">computers <i class="fa fa-caret-down"></i></button>
            <div class="subnav-content">
                <a href="computers.html">labtob</a>
                <a href="pc.html">pc </a>
                <a href="pc.html">pc parts</a>
            </div>
        </div>
        <div class="subnav">
            <button class="subnavbtn">phone <i class="fa fa-caret-down"></i></button>
            <div class="subnav-content">
                <a href="phones.html">smartphone</a>
                <a href="#deliver">tablet</a>
                <a href="#package">smart watch</a>
                <a href="#express">smsmartphones accessories </a>
            </div>
        </div>
        <div class="subnav">
            <button class="subnavbtn">console <i class="fa fa-caret-down"></i></button>
            <div class="subnav-content">
                <a href="#link1">sony playStation</a>
                <a href="#link2">xbox</a>
                <a href="#link3">nintendo switch</a>

            </div>
        </div>
        <a href="accessibility.html">Accessibility</a>
        <a href="about.html">about us</a>


        <a onclick="myFunction()">[Dark Mode]</a>

        <a id="login" href="login.php">login</a>

    </div>

    <!-- Top navigation -->
    <br>
    <img src="pics/logo/it-store.jpg" style="width:250; height:100;  border-radius:8px;">
    <br>
    <br>
    <!--   slide-show-->
    <style>
        .nature {
            border-radius: 8px;
            border: 20px solid #05B8E3;
            border-radius: 4px;
            padding: 5px;
            width: 590px;
            height: 480px;
        }
        
        img {
            border-radius: 8px;
        }
    </style>


    <center>
        <img class="nature" src="pics/menu/menu1.png">
        <img class="nature" src="pics/menu/menu2.jpg">
        <img class="nature" src="pics/menu/menu3.png">
        <br>
        <img src="pics/a1.jpg" alt="a1">
        <br>
        <br>
        <img src="pics/featured.png">
    </center>
    <br>
    <script>
        w3.slideshow(".nature", 2000);
    </script>
    <!---slide-show-end-->

    <table align="center">
        <td>
            <div class="phone">
                <img src="pics/mate20.png" alt="a1" style="width:300; height:300;">
                <h1>Mate 20 Pro</h1>
                <p class="price">$400</p>
                <p>Best phone ever made</p>
                <a href="cart.html">
                    <p><button>Add to Cart</button></p>
                </a>
            </div>
        </td>
        <td>
            <div class="phone">
                <img src="pics/p30.png" style="width:100%;">
                <h1>P30 Pro</h1>
                <p class="price">$600</p>
                <p>NEW !!! 2019</p>
                <a href="cart.html">
                    <p><button>Add to Cart</button></p>
                </a>
            </div>
        </td>
        <td>
            <div class="phone">
                <img src="pics/p30.png" style="width:100%">
                <h1>P30 Pro</h1>
                <p class="price">$600</p>
                <p>NEW !!! 2019</p>
                <a href="cart.html">
                    <p><button>Add to Cart</button></p>
                </a>
            </div>
        </td>
        </tr>

        <tr>
            <td>
                <div class="phone">
                    <img src="pics/s10.jpg" style="width:100%">
                    <h1>Galaxy S10</h1>
                    <p class="price">$550</p>
                    <p>Mode XX1524</p>
                    <a href="cart.html">
                        <p><button>Add to Cart</button></p>
                    </a>
                </div>
            </td>
            <td>
                <div class="phone">
                    <img src="pics/s10.jpg" style="width:100%">
                    <h1>Galaxy S10 Plus</h1>
                    <p class="price">$600</p>
                    <p>Mode XS1524</p>
                    <a href="cart.html">
                        <p><button>Add to Cart</button></p>
                    </a>
                </div>
            </td>
            <td>
                <div class="phone">
                    <img src="pics/note10.jpg" style="width:100%">
                    <h1>Note 10</h1>
                    <p class="price">$700</p>
                    <p>Now With SPen</p>
                    <a href="cart.html">
                        <p><button>Add to Cart</button></p>
                    </a>
                </div>
            </td>
        </tr>
    </table>
    <br>
    <center>
        <img src="pics/poco.png">
        <br>
        <br>
        <img src="pics/new.png">
    </center>

    <br>
    <table align="center">
        <td>
            <div class="phone">
                <img src="pics/n1.jpg" width="100%" height="270">
                <h1>Galaxy Note 20 Ultra</h1>
                <p class="price">4,749 ₪</p>
                <p>12GB+128GB</p>
                <a href="cart.html">
                    <p><button>Add to Cart</button></p>
                </a>
            </div>
        </td>
        <td>
            <div class="phone">
                <img src="pics/n2.jpg" width="100%" height="270">
                <h1>Realme x3 SuperZoom</h1>
                <p class="price">$1,999 ₪</p>
                <p>12GB+256GB</p>
                <a href="cart.html">
                    <p><button>Add to Cart</button></p>
                </a>
            </div>
        </td>
        <td>
            <div class="phone">
                <img src="pics/n3.jpg" width="100%" height="310">
                <h1>One plus 8</h1>
                <p class="price">2,949 ₪</p>
                <p>8GB+128GB</p>
                <a href="cart.html">
                    <p><button>Add to Cart</button></p>
                </a>
            </div>
        </td>
        <br>
        <br>