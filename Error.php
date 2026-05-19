<?php
// can't add database connection as this page is only for displaying errors
//DON'T ADD (database/sql_items.php")
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="css/Main_colours.css">
    <link rel="stylesheet" href="css/Main_background.css">
</head>
<body>
    <main class="Main_items">
        <?php
        if (isset($_GET["error"])) {
            if ( $_GET["error"] == "database_connection_failed" )
            {  
                echo '<section>';
                    echo '<h2>There was An Error</h2>';
                    echo '<p>There was an Error When trying to connect to the database </p>';
                    echo '<div>';
                        echo '<a href="index.php">Go Home</a>';
                    echo '</div>';
                echo '</section>';
            }
            else if ( $_GET["error"] == "Post_data_not_set" )
                {  
                    echo '<section>';
                        echo '<h2>There was An Error</h2>';
                        echo '<p>The form was not filled out correctly, please go back and try again</p>';
                        echo '<div>';
                            echo '<a href="sub_files/minecraft_server/unbanned_accounts.php">Retry </a>';
                            echo '<a href="index.php">Go Home</a>';
                        echo '</div>';
                    echo '</section>';
                }
        }
        else if (!isset($_GET["error"]) or $_GET["error"] == "")
            {
                // if no error code is present, redirect to home page
                // because this page is only for displaying errors
                // just in case someone tries to access this page directly
                
                header("Location: index.php");
            }
        ?>
    </main>
</body>
</html>
