<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Name Greeting Form</title>
</head>

<body>
    <h1>PHP Name Greeting Form</h1>
    <p>Create a simple HTML form and accept the user name and display the name through PHP echo statement.</p>

    <form method="POST">
        <div>
            <label for="name">Please input your name:</label>
        </div>
        <div>
            <input type="text" name="name" id="name">
        </div>
        <input type="submit" value="Submit Name">
    </form>

    <?php
    // Check if the form is submitted with the POST method and if 'name' is set in $_POST
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['name'])) {
        // Retrieve the 'name' field from the form and store it in a variable
        $name = $_POST['name'];

        // Display a greeting message using the entered name
        echo "<h2>Greetings " . $name . "!</h2>";
    }
    ?>

</body>

</html>