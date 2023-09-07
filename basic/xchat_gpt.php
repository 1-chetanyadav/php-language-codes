<!DOCTYPE html>
<html>
<head>
    <title>Age Input</title>
</head>
<body>
    <h1>Enter Your Birthdate</h1>
    <form method="POST">
        <label for="birthdate">Birthdate:</label>
        <input type="date" name="birthdate" required>
        <input type="submit" name="submit" value="Submit">
    </form>

    <?php
    if (isset($_POST['submit'])) {
        // Get the user's birthdate from the form
        $birthdate = $_POST['birthdate'];

        // Display the user's entered birthdate
        echo "<p>Your birthdate is: $birthdate</p>";
    }
    ?>

</body>
</html>
