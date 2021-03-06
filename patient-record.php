<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patient Records</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header class="meinHeader">
        <section class="logoContainer">
            <a href="index.php">
                <img src="imgs/logo.png" alt="CICADA Logo">
            </a>
        </section>
        <section class="navLinks">
            <ul>
                <li><a href="#"> <?php if(isset($_SESSION["username"])) { echo $_SESSION["username"]; echo ' Logged in'; } ?>  </a></li>
                <li><a class="selectedItem" href="index.php">Home</a></li>
                <li><a href="managment.php">Management</a></li>
                <li><a href="#">About</a></li>
                <li><a href="logout.php">Log Out</a></li>
            </ul>
        </section>
    </header>
    <main>
    <?php
    if(isset($_SESSION["username"]))    //check if session is active TRUE = session active
    {
        if($_SESSION["username"] == "admin" OR $_SESSION["username"] == "doctor")
        {
            echo '
                    <section class="options">
                        <h1>
                            Patients Record Management
                        </h1>

                        <section class="buttons">
                            <ul>
                                <li><a href="add-pt.html" class="add">Add Record</a></li>
                                <li><a href="update-pt.html" class="update">Update Record</a></li>
                                <li><a href="search-pt.html" class="search">Search Record</a></li>
                                <li><a href="delete-pt.html" class="delete">Delete Record</a></li>
                            </ul>
                        </section>
                    </section>
                
                     ';
        }
    }
    else
    {
        echo '
                <h1>...RESTRICTED SESSION NOT ACTIVE...</h1>
                <h2>...NOT AUTHORIZED...</h2>
            ';
    }
    ?>
    </main>
    <footer class = "footer">
        <section class="footerLeft">
            <a href="index.html">
                <img src="imgs/logo.png" alt="CICADA's Logo">
            </a>
        </section>
        <section class="footerMid">
            <h2>Useful Links</h2>
            <ul>
                <li><a href="#">Symptoms</a></li>
                <li><a href="#">Preventions</a></li>
                <li><a href="#">Get Help</a></li>
            </ul>
        </section>
        <section class="footerRight">
            <h2>Navigate</h2>
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">Management</a></li>
                <li><a href="#">Contact Us</a></li>
            </ul>
        </section>
    </footer>
    <section class="copyright">
        <p>All right reserved &#169; 2020. CICADA Technologies.</p>
    </section>
</body>
</html>