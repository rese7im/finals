<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" type="text/css" href="css/coverage.css">
    <style>
        body {
            font-family: 'Georgia', serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: space-between;
            align-items: center;
            height: 100vh;
            background-color: #e6e6fa; /* Change the background color */
        }

        .content-container {
            text-align: center; /* Center the content */
            width: 70%;
            margin: 0 auto; /* Center the container */
        }

        .navbar {
            background-color: #ffffff;
            padding: 10px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            position: fixed;
            left: 0;
            height: 100%;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: flex-start;
        }

        .navbar-list {
            list-style: none;
            padding: 0;
            display: flex;
            flex-direction: column;
        }

        .navbar-item {
            margin-bottom: 20px;
        }

        .navbar-item a {
            text-decoration: none;
            color: #000000;
            font-weight: bold;
            font-size: 1em;
            transition: color 0.3s ease-in-out;
        }

        .navbar-item a:hover {
            color: #800080;
        }

        .photo-container {
            background-color: #ffffff;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .photo-container td {
            width: 30%;
            padding: 20px;
        }

        .photo-container h1,
        .photo-container h2,
        .photo-container h3,
        .photo-container p {
            margin: 0;
        }

        .photo-container img {
            display: block;
            margin: 0 auto;
            max-width: 100%;
            height: auto;
        }
    </style>
</head>

<body>
    <!-- Left-aligned navigation bar -->
    <nav class="navbar">
        <ul class="navbar-list">
            <li class="navbar-item"><a href="index.php">HOME</a></li>
            <li class="navbar-item"><a href="latest.php">LATEST</a></li>
            <li class="navbar-item"><a href="coverage.php">COVERAGE</a></li>
            <li class="navbar-item"><a href="contact.php">CONTACT</a></li>
        </ul>
    </nav>

    <!-- Justified content -->
    <div class="content-container">
        <table class="photo-container" cellpadding="20">
            <tr>
                <td>
                    
                    <img src="pics/21.jpg" alt="Photo 2">
                </td>

                <td>
                    <p> Why us? </p>
                    <br>
                    <h2> Lorem ipsum dolor sit amet consectetur adipiscing elit. 
                        In luctus nec dolor eget pulvinar. Nulla ultricies feugiat tincidunt. 
                        Proin placerat Lorem ipsum dolor sit amet, consectet adipiscing </h2>
                        <br>
                    <p>Just 20 mins.</p>
                    <br>
                   <h2> Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    In luctus nec dolor eget pulvinar. Nulla ultricies feugiat tincidunt.
                    Proin placerat. </2>

                    <img src="pics/62.jpg" alt="Photo 2">
                    
                </td>

                <td>
                    <img src="pics/61.jpg" alt="Photo 2">
                    <p> About? </p>
                    <h3> Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                        In luctus nec dolor eget pulvinar. Nulla ultricies feugiat
                        tincidunt. Proin placerat </h3>
                    
                    
                </td>
            </tr>
        </table>
    </div>
</body>

</html>
