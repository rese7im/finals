<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" type="text/css" href="css/about.css">
    <style>
        /* Styles from about.css */

        /* Add any existing styles from about.css here */

        /* Additional inline styles */

        body {
            font-family: 'Georgia', serif;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            background-color: #e6e6fa; /* Updated background color */
        }

        .navbar {
            background-color: #ffffff;
            padding: 10px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            width: 100%;
        }

        .navbar-list {
            list-style: none;
            padding: 0;
            display: flex;
            justify-content: space-around; /* Adjusted to space around items */
        }

        .navbar-item {
            margin-right: 20px;
        }

        .navbar-item:last-child {
            margin-right: 0; /* Remove margin from the last item */
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

        .container-box {
            background-color: #ffffff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            border-radius: 10px;
            width: 80%; /* Adjusted width to make it a bit smaller */
            margin: 20px auto; /* Center the container and add some space at the top */
        }

        .photo-container {
            text-align: center;
            position: relative;
        }

        .photo-container h1 {
            color: #000000;
            font-weight: bold;
            font-size: 1em; /* Updated size to 1em (equivalent to 10px) */
            margin-bottom: 10px;
        }

        .photo-container p {
            color: #800080;
            font-family: 'Guard Script', cursive; /* Set the font to Guard Script */
            font-size: 1em; /* Updated size to 1em (equivalent to 10px) */
            margin-bottom: 5px;
        }

        .underline {
            border-top: 1px solid #800080;
            width: 50%;
            margin: 10px auto;
        }

        /* Add any other global styles or overrides here */
    </style>
</head>

<body>
    <!-- Navigation bar above -->
    <div class="navbar">
        <ul class="navbar-list">
            <li class="navbar-item"><a href="index.php">HOME</a></li>
            <li class="navbar-item"><a href="latest.php">LATEST</a></li>
            <li class="navbar-item"><a href="coverage.php">COVERAGE</a></li>
            <li class="navbar-item"><a href="contact.php">CONTACT</a></li>
        </ul>
    </div>

    <!-- Container box -->
    <div class="container-box">
        <!-- Justified content -->
        <div class="photo-container">
            <table class="photo-container" cellpadding="10"> <!-- Adjusted cellpadding to make it a bit closer -->
                <tr>
                    <td class="photo arrow-above-pic">
                        <img src="pics/45.png" alt="Photo 1">
                    </td>
                    <td class="photo">
                        <img src="pics/2.png" alt="Photo 1">
                    </td>
                    <td class="photo">
                       
                        <h1>Visit us</h1>
                        <p>Pilar College of Zamboanga City</p>
                        <h1>Connect with us</h1>
                       
                        <p>@thursdaythegreat</p>
                        <br>
                         <br>
                   <img src="pics/modi.png" alt="Photo 2">
                        <h1>Professional UX Designer</h1>
                        <div class="underline"></div>
                        <p>Since 2023</p></td>
                    
                    </td>
                </tr>

                <tr>
                    <td class="photo">
                        <img src="pics/3.png" alt="Photo 1">
                        <p>We design every interaction</p>
                        <p>We design details </p>
                        <p>whether big and small</p>
                    </td>
                    <td class="photo">
                        <img src="pics/4.png" alt="Photo 1">
                        <p>We design for every user</p>
                        <p>We design everything to</p>
                        <p>create seamless experience</p>
                    </td>
                    <td class="photo">
                        <img src="pics/ii.png" alt="Photo 2">
                    </td>
                </tr>
                
            </table>
        </div>
    </div>
</body>

</html>
