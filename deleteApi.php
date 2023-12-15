<?php
           echo("Please Enter Your Email Delete your reccord<br>");
           include 'form.php';
            

            if ($_SERVER["REQUEST_METHOD"] == "POST") {
            
                // Retrive data from the form
                $email = $_POST["email"];
                $findEmailQuery = "SELECT user_email FROM users WHERE user_email = '$email'";
                $result = $db->query($findEmailQuery);
                
                if ($result->rowCount() == 1) //looks fir matching email and when found it tells rowcounter
                {
                    echo("Email found on reccord: '$email'"); //displays the to be deleted email and api
                    $insertInfoQuery = "DELETE FROM users WHERE user_email = '$email'"; //delets api key email anf user id
                    echo("Your reccord is now deleted");
                } 

                else{
                    echo("Email Does Not Exists");
                }



               // $apiKey = bin2hex(random_bytes(16)); // Generates a 32-character hex string
                //echo "API Key: $apiKey<br>";
            
                
                
            } else {
                // If the form is not submitted, display message
                echo "Form not submitted.";
            }
        ?>