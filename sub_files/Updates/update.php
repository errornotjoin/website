<?php
if(!isset($_GET["id"]) or $_GET["id"] == "") 
    {
        // if no id is present, redirect to updates page
        header("Location: index.php");
    }
    include("../../database/sql_items.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/Main_colours.css">
    <link rel="stylesheet" href="../../css/Main_background.css">
    <link rel="stylesheet" href="css/update.css">
    <title>Update -- ErrorNotJoin</title>
</head>
<body>

    <main>
        <?php
            $id = mysqli_real_escape_string($connection, $_GET["id"]);
            $sql_code = "SELECT * FROM Updates WHERE Id = '$id'";
            $sql_query = mysqli_query($connection, $sql_code);
            $update = mysqli_fetch_assoc($sql_query);
            echo "<a href='index.php' class='Update_go_back'><p title='Go Back'>Go Back</p></a>";
            echo "<div class='update_item'>";
            echo "<div class='update_item_top'>";
                echo "<h1>".$update["Title"]."</h1>";
                echo "<div class='update_item_info'>";
                    
                    echo "<a href='../../account.php?id=".$update["By_who"]."'><p> By: ". $update["By_who"]."</p></a>";
                    echo "<p>". $update["Type_of_post"]."</p>";
                    echo "<p>Made On: ". $update["When_made"]."</p>";

                echo "</div>";
            echo "</div >";
            echo "<div class='update_item_text'>".$update["Text"]."</div>";
            echo "<div style='height: 20px; width:100%;'></div>";
            echo "</div>";
        ?>
    </main>


    
</body>
</html>