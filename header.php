<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Optik Melawai- Online Training</title>


    <link href='https://fonts.googleapis.com/css?family=Cookie' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css" />
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>

    <style type="text/css">
        @import url('http://fonts.googleapis.com/css?family=Open+Sans:400,700');

        html {
            background-color: #eaf0f2;
        }

        body {
            font: 14px/1.5 Arial, Helvetica, sans-serif;
            padding: 0;
            margin: 0;
        }

        .menu {
            text-align: center;
            padding-top: 25px;
            margin-bottom: 200px;
        }

        .menu img {
            opacity: 0.4;
            margin: 20px auto;
        }

        .menu h1 {
            margin-top: 0;
            font: normal 32px/1.5 'Open Sans', sans-serif;
            color: #3F71AE;
            padding-bottom: 16px;
        }

        .menu h2 {
            color: #F05283;
        }

        .menu h2 a {
            color: inherit;
            text-decoration: none;
            display: inline-block;
            border: 1px solid #F05283;
            padding: 10px 15px;
            border-radius: 3px;
            font: bold 14px/1 'Open Sans', sans-serif;
            text-transform: uppercase;
        }

        .menu h2 a:hover {
            background-color: #F05283;
            transition: 0.2s;
            color: #fff;
        }

        .menu ul {
            max-width: 600px;
            margin: 60px auto 0;
        }

        .menu ul a {
            text-decoration: none;
            color: #FFF;
            text-align: left;
            background-color: #B9C1CA;
            padding: 10px 16px;
            border-radius: 2px;
            opacity: 0.8;
            font-size: 16px;
            display: inline-block;
            margin: 4px;
            line-height: 1;
            outline: none;

            transition: 0.2s ease;
        }

        .menu ul li a.active {
            background-color: #66B650;
            pointer-events: none;
        }

        .menu ul li a:hover {
            opacity: 1;
        }

        .menu ul {
            list-style: none;
            padding: 0;
        }

        .menu ul li {
            display: inline-block;
        }

        @media (max-height:800px) {
            .menu {
                padding-top: 40px;
            }
        }


        /* -- Demo ads -- */

        @media (max-width: 1200px) {
            #bsaHolder {
                display: none;
            }
        }

        /* -- Link to Tutorialzine -- */

        .tz-link {
            text-decoration: none;
            color: #fff !important;
            font: bold 36px Arial, Helvetica, sans-serif !important;
        }

        .tz-link span {
            color: #da431c;
        }

        .header-fixed {
            background-color: #282A35;
            box-shadow: 0 1px 1px #ccc;
            padding: 20px 40px;
            height: 100px;
            color: #ffffff;
            box-sizing: border-box;
            top: -100px;

            -webkit-transition: top 0.3s;
            transition: top 0.3s;
        }

        .header-fixed .header-limiter {
            max-width: 1200px;
            text-align: center;
            margin: 0 auto;
        }

        /*	The header placeholder. It is displayed when the header is fixed to the top of the
	browser window, in order to prevent the content of the page from jumping up. */

        .header-fixed-placeholder {
            height: 80px;
            display: none;
        }

        /* Logo */

        .header-fixed .header-limiter h1 {
            float: left;
            font-family: "Times New Roman", Times, serif;
            line-height: 40px;
            font-size: 25px;
            margin: 0;
        }

        .header-fixed .header-limiter h1 span {
            color: #5383d3;
        }

        /* The navigation links */

        .header-fixed .header-limiter a {
            color: #ffffff;
            text-decoration: none;
        }

        .header-fixed .header-limiter nav {
            font: 16px Arial, Helvetica, sans-serif;
            line-height: 40px;
            float: right;
        }

        .header-fixed .header-limiter nav a {
            display: inline-block;
            padding: 0 5px;
            text-decoration: none;
            color: #ffffff;
            opacity: 0.9;
        }

        .header-fixed .header-limiter nav a:hover {
            opacity: 1;
        }

        .header-fixed .header-limiter nav a.selected {
            color: #608bd2;
            pointer-events: none;
            opacity: 1;
        }

        /* Fixed version of the header */

        body.fixed .header-fixed {
            padding: 10px 40px;
            height: 50px;
            position: fixed;
            width: 100%;
            top: 0;
            left: 0;
            z-index: 1;
        }

        body.fixed .header-fixed-placeholder {
            display: block;
        }

        body.fixed .header-fixed .header-limiter h1 {
            font-size: 24px;
            line-height: 30px;
        }

        body.fixed .header-fixed .header-limiter nav {
            line-height: 28px;
            font-size: 13px;
        }


        /* Making the header responsive */

        @media all and (max-width: 600px) {

            .header-fixed {
                padding: 20px 0;
                height: 75px;
            }

            .header-fixed .header-limiter h1 {
                float: none;
                margin: -8px 0 10px;
                text-align: center;
                font-size: 24px;
                line-height: 1;
            }

            .header-fixed .header-limiter nav {
                line-height: 1;
                float: none;
            }

            .header-fixed .header-limiter nav a {
                font-size: 13px;
            }

            body.fixed .header-fixed {
                display: none;
            }

        }

        /*
	 We are clearing the body's margin and padding, so that the header fits properly.
	 We are also adding a height to demonstrate the scrolling behavior. You can remove
	 these styles.
 */

        body {
            margin: 0;
            padding: 0;
            height: 1500px;
        }

        .warning {
            background-color: #ffffcc;
            border-left: 6px solid #ffeb3b;
        }

        .button {
            background-color: #4CAF50;
            /* Green */
            border: none;
            color: white;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            padding: 10px 24px;
            cursor: pointer;
        }

        .button:hover {
            border: none;
            color: white;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            cursor: pointer;
            padding: 10px 24px;
            background-color: #3e8e41;
        }

        .footer {
            position: fixed;
            left: 0;
            bottom: 0;
            width: 100%;
            background-color: white;
            color: black;
            text-align: center;
            border: black;
        }
    </style>

</head>

<body>
    <header class="header-fixed">
        <div style="margin-left: 5px;" class="header-limiter">
            <h1> Optik Melawai E-Learning, Upload CSVs </h1>
            <nav>
                <a href="index.php"><b>Home</b></a>
                <a href="index.php?menu=user&aksi=import"><b>Upload</b></a>
            </nav>
        </div>
    </header>