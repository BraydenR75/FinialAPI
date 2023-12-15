<?php
include 'database.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <?php
            include 'form.php';

            if ($_SERVER["REQUEST_METHOD"] == "POST") {
            
                // Retrieve data from the form
                $email = $_POST["email"]; //grabs email from the form
                $findEmailQuery = "SELECT user_email FROM users WHERE user_email = '$email'"; //selects the user email to scan
                $result = $db->query($findEmailQuery); //figures out what is under the query
                
                if ($result->rowCount() == 0) //had to look this one up, im not 100% on how it works, but I know htta it basicly looks to see how mant rows include said email
                {
                    $apiKey = bin2hex(random_bytes(16)); // Generates a 32-character hex string
                    echo "API Key: $apiKey<br>"; //code you gave us
                    
                    $insertInfo = "INSERT INTO users (user_email, user_api) VALUES ('$email', '$apiKey')"; //should insert the api and email
                } 

                else{
                    echo("Email Already Exists"); // this is when the counter for the row count is anything but 0
                }



               // $apiKey = bin2hex(random_bytes(16)); // Generates a 32-character hex string
                //echo "API Key: $apiKey<br>";
            
                // Print the data
                echo "Email: $email <br>"; //prints the previously typed email
            } else {
                // If the form is not submitted, display a message
                echo "Form not submitted.";
            }
        ?>
        <a href="editApi.php">Edit Api</a>
        <a href="deleteApi.php">Delete Api</a>
        <a href="viewApi.php">View All Api</a>
</body>
</html>