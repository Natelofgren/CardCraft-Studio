<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CardCraft Studio</title>
    <link rel="stylesheet" href="styles.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" />
</head>
<body>

<!-- Header Section with Navbar -->
<?php include '../header.php'; ?>
       

<!-- User Preferences Page -->
<div style="background-color:#f2e1d8; padding-left: 500px; padding-right: 500px; padding-bottom: 50px; padding-top: 50px;">
    <section>
        <center>
            <div style="border: 2px solid #000; padding: 50px; border-radius: 10px;">
                <ins><h2>Profile Information:</h2></ins>
                <br>
                <img src="logonobg.png" width="150">
                <br />
                <form action="temporarily_renamed.php" method="POST">
                    <button type="button">Change Profile Image</button>
                    <br>
                    <input type="text" name="fn" id="fn" placeholder="First Name" required>
                    <input type="text" name="ln" id="ln" placeholder="Last Name" required>
                    <br>
                    <input type="email" name="em" id="em" placeholder="Email" required>
                    <br>
                    <input type="submit" value="Submit">
                </form>

                <br>

                <ins><h2>Appearance:</h2></ins>
                <br>
                <form action="temporarily_renamed.php" method="POST">
                    <label for="theme">Theme:</label>
                    <select id="theme" name="theme">
                        <option value="light">Light</option>
                        <option value="dark">Dark</option>
                    </select>

                    <label for="font">Font:</label>
                    <select id="font" name="font">
                        <option value="arial">Arial</option>
                        <option value="times">Times New Roman</option>
                        <option value="courier">Courier New</option>
                    </select>

                    <label for="size">Font Size:</label>
                    <select id="size" name="size">
                        <option value="small">Small</option>
                        <option value="medium">Medium</option>
                        <option value="large">Large</option>
                    </select>
                    <br>
                    <br>
                    <input type="submit" value="Submit">
                </form>
                <form action="http://localhost:3000/log_out_user.php">
                <input class="button" type="submit" value="Log Out" name="log_out">
                </form>
            </div>
        </center>
    </section>
</div>

<!-- Footer Section -->
<footer>
    <p>&copy; 2024 CardCraft Studio. All rights reserved.</p>
</footer>

</body>
</html>
