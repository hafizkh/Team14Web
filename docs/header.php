<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lobster&family=Russo+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/hafiz-styles.css">
    <script src="script.js"></script>
    <link rel="stylesheet" href="css/Styles-Ahmed.css">
    
    <!---Javascript file,"defer" keyword loads the script after the html body.---> 
    <script defer src="SA form.js"></script>
</head>

<style>
    header {
        background-image: url("https://images.pexels.com/photos/958545/pexels-photo-958545.jpeg?cs=srgb&dl=pexels-chan-walrus-958545.jpg&fm=jpg");
        opacity: 100%;
        z-index: -1;
        display: block;
        font-family: Verdana, Geneva, Tahoma, sans-serif;
        object-fit: fill;
        padding: 90px;

    }

    h1 {
        /* text-align: center; */
        border: 3px whitesmoke;
        font-family: Verdana, Geneva, Tahoma, sans-serif;
        padding: auto;
        margin-top: 10px;
        background-color: rgb(245, 228, 228);
        /* z-index: 2; */
        padding-top: 14px;
        border-bottom-width: 0px;
        border-bottom-style: solid;
        padding-bottom: -17px;
        margin-bottom: 0px;




    }

    .logo {
        width: 80px;
        height: 80px;
        border-radius: 77px;
        border-color: 10px black;
        cursor: pointer;


    }

    .descriptive-line {
        text-align: center;
        background-color: rgb(245, 228, 228);
        font-family: Verdana, Geneva, Tahoma, sans-serif;
        font-size: 30px;

    }

    .bctx {
        background-color: rgb(245, 228, 228);
        font-size: 30px;
        display: flex;
        justify-content: center;
    }

    p {
        text-align: center;
        font-family: Verdana, Geneva, Tahoma, sans-serif;
        text-align: inherit;
    }

    ul {
        list-style-type: none;
        padding: 0;
        overflow: hidden;
        background-color: rgb(245, 228, 228);
        border-style: solid;
        border-spacing: 5px;
        border-radius: 5px;
        border-color: rgb(222, 200, 171);

    }

    li {
        float: left;
        width: 25%;
        line-height: 40px;

    }

    li a {
        display: block;
        color: black;
        text-align: center;
        padding: 14px 16px;
        text-decoration: none;

        font-size: 24px;


    }

    /* Change the link color to #111 (black) on hover */
    li a:hover {
        background-color: bisque;
    }

    img {
        padding: 20px;
        height: 350px;
        width: 350px;

    }

    .services {
 
        margin-left: auto;
        margin-right: auto;
        width: 73%;
        


    }

    h2 {
        text-align: center;

    }

    footer {
        text-align: center;
        padding-top: 40px;
        background-color: rgb(245, 228, 228);
        padding-bottom: 76;
        padding-left: 18px;
        padding-right: 18px;

    }

    .footleft,
    .footmid,
    .footright {
        width: 33.33%;
        /**/
        font-size: 15px;



    }

    .footleft {
        float: left;
        /*margin-top: -30px;*/
        text-align: initial;

    }

    .footmid {
        text-align: center;
        padding-left: 30%;
        padding-right: 30%;

    }

    .footright {
        float: right;
        text-align: right;
        margin-top: -67px;
    }

    #restnav label,
    #restaurant {
        display: none;
        float: right;
    }

    /*Increase fornts and paddings when using phones and tablets,make horisontal menus vertical if nessesary,make footer as a menu.*/
    @media only screen and (max-width: 600px) {
        header {
            padding: 20px;
        }

        li {
            width: 50%;
            text-align: center;
        }

        .footleft,
        .footmid,
        .footright {
            width: 100%;
            text-align: center;
            font-size: 15px;
        }

        footer {
            padding-bottom: 10px;
        }

        .footmid {
            padding: 50px 0;
        }

        /* .logo{
            display: none;
        } */
    }

    @media only screen and (max-width: 460px) {
        .logo {
            display: none;
        }
    }

    @media only screen and (max-width: 1340px) {

        /*.footmid{margin-top: 200px;}*/
        .footright {
            margin-top: -100px;
        }

        .services {
            width: 80%;
        }

        img {
            width: 100%;
            height: max-content
        }

        ;

        .footleft,
        .footmid,
        .footright {
            font-size: 30px;
            width: 100%;
        }

        li {
            line-height: 40px;

        }

        a {
            font-size: 30px;
        }

    }

    @media screen and (max-width:605px) {
        #navitem {
            display: block;
        }



        #navitem ul li {
            display: block;
            width: 100%;
            box-sizing: border-box;
            border-top: 1px solid #333;
        }

        #restnav label {
            display: inline-block;
            color: #fff;
            background: #864646;
            font-size: 1.2em;
            font-style: normal;
            padding: 10px;
        }

        #navitem {
            display: none;
        }

        #restnav input:checked~#navitem {
            display: block;
        }

    }

    @media screen and (max-width:601px) {
        footer {
            display: inline-block;
        }

        .footright {
            margin-top: -3px;
        }
        .footer-container{
            display: grid;
        }


    }
</style>



<header>
    <title>IL Marino- Best Mediterranean Dishes since 2009 </title>
    <div class="bctx">
        <a href="index.html">
            <img class="logo" src="images/illogo.jpg" alt="">
        </a>
        <h1>IL MARINO</h1>
    </div>
    <div>
        <p class="descriptive-line">Best Mediterranean Dishes since 2009</p>
    </div>
</header>

<nav id="restnav">

    <label for="restaurant">&#9776;</label>
    <input type="checkbox" name="" id="restaurant" />

    <div id="navitem">
        <ul>
            <li><a href="./index.php">Home</a></li>
            <li><a href="./menu.php">Menu</a></li>
            <li><a href="./Order and Reservation.php">Orders and Reservations</a></li>
            <li><a href="./feedback.php">Feedback & Contact Us</a></li>
        </ul>
    </div>
</nav>