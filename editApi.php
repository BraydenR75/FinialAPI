<?php
            echo("Please Enter Your Email to recieve a new API Key<br>");
           include 'form.php';
           

            if ($_SERVER["REQUEST_METHOD"] == "POST") {
            
                // Retrive data from the form
                $email = $_POST["email"];
                $findEmailQuery = "SELECT user_email FROM users WHERE user_email = '$email'";
                $result = $db->query($findEmailQuery);
                
                if ($result->rowCount() == 1) //finds when the row count is 1 now
                {
                    echo("Email found on reccord: '$email'");
                    $apiKey = bin2hex(random_bytes(16)); // Generates a 32-character hex string
                    $insertInfoQuery = "UPDATE users SET user_api = '$apiKey' WHERE user_email = '$email'"; //should update the apikey to give it a new one
                } 

                else{
                    echo("Email Does Not Exists"); // since I am looking for one now the code is kinds switch from the index
                }



               // $apiKey = bin2hex(random_bytes(16)); // Generates a 32-character hex string
                //echo "API Key: $apiKey<br>"; //just here for safe keeping
            
                
                
            } else {
                // If the form is not submitted, display message
                echo "Form not submitted.";
            }
        ?>