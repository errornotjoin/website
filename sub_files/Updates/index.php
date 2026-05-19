<?php
include("../../database/sql_items.php");



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/Main_colours.css">
    <link rel="stylesheet" href="../../css/Main_background.css">
    <link rel="stylesheet" href="css/index.css">
    <title>Updates - ErrorNotJoin</title>
</head>
<body>
    <main class="Main_items" style="display: ;">

        <section class="The_main_items">

             <?php
             $sql_code = "SELECT * FROM Updates ORDER BY id DESC";
             $sql_query = mysqli_query($connection, $sql_code);
                while ($update = mysqli_fetch_assoc($sql_query)) {
                    echo "<a href='update.php?id=".$update["Id"]."'>";
                    echo "<div class='update_item'>";
                            
                        echo '<div class="update_item_top">';
                                echo '<p class="update_id">#'.$update["Id"].'</p>';
                                echo '<p class="update_type">'.$update["Type_of_post"].'</p>';
                                if($update["has_been_edited"] == 1)
                                {
                                    echo '<p class="update_important">been Edited</p>';
                                }
                        echo '</div>';
                        echo '<h2>'.$update["Title"].'</h2>';
                        echo '<div class="update_item_info">';
                            echo '<p title="User Role">'.$update["User_role"].'</p>';
                            echo '<p title="Author">'.$update["By_who"].'</p>';
                            echo '<p title="Date Created">'.$update["When_made"].'</p>';
                        echo "</div>";
                    echo "</div>";
                    echo "</a>";


                }
             
             ?>
             <a href="../../index.php">
                <div class='update_item'>
                    <h2>Go Back</h2>
                </div>
             </a>
        </section>
    </main>
    
</body>
</html>