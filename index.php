<?php 

      /*
          TO DO:
            1. Check if a cookie for the user's name exists.
              - If it exists, store its value in a variable.
              - If it does not exist, set the variable to an empty string.
              
            2. Check if the form was submitted.
              - If so:
                a. Get the user's name from the submitted form data.
                b. Store it in a cookie so we can use it on other pages.
                c. Redirect the user to the first page of the adventure:
                      - Go to "adventure.php" and set the name/value pair for the first page in the URL. 
                d. Use exit() after the redirect to stop the script from continuing.
      */
     
?>

<!-- DO NOT MAKE ANY CHANGES TO THE FOLLOWING HTML CODE! -->
<!DOCTYPE html>
<html>

  <head>
    <meta charset="UTF-8">
    <title>Begin Your Adventure!</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  </head>

  <body>
    <div class="container" id="intro">
      <!-- Introduction text for the user -->
      <h1>Welcome to the Quest!</h1>
      <p>You’re about to embark on a wild journey. But first… what should we call you?</p>

      <!-- Form to collect the user's name -->
      <form id="startForm" method="POST" action="index.php">
        <!-- Input field for the user's name -->
        <input type="text" name="user_name" id="user_name" placeholder="Enter your name" required value="<?= htmlspecialchars($name) ?>" />
        <br>
        <!-- Submit button to start the adventure -->
        <button type="submit">Start Adventure</button>
      </form>
    </div>

    <!-- JavaScript file for animations -->
    <script src="js/animations.js"></script>
  </body>
</html>
<!-- DO NOT MAKE ANY CHANGES TO THE FOLLOWING HTML CODE! -->