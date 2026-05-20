<?php
include("../../database/sql_items.php");


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="../../css/Main_colours.css">
    <link rel="stylesheet" href="../../css/Main_background.css">
    <link rel="stylesheet" href="css/index.css">
    <script src="https://kit.fontawesome.com/60adc08c28.js" crossorigin="anonymous"></script>
    <title>Projects -- ErrorNotJoin</title>
</head>
<body>
<img src="../../images/Project_image.webp" alt="an image of 3 off monitors on a desk"  class="image_background">
    <main class="Main_items" style="  grid-template-columns: 100% ;">

        <section class="Main_section" id="The_main_items" style="position: relative; left: 5%;">
            <?php
                    $projects_tages = [];
                $sql_code = "SELECT * FROM `Project`";
                $sql_query = mysqli_query($connection, $sql_code);
                while ($Project = mysqli_fetch_assoc($sql_query))
                {
                    $Id = $Project['ID'];
                    echo "<a href='Project.php?id=".$Project["ID"]."'>";
                    echo "<section class='Updates_section'>";
                        echo "<div class='End_of_div'>"; 
                            echo "<i class='". $Project["fontawanson"]."'></i>";
                            echo"<p>". $Project["Name"] . "</p>"; 
                        echo"</div>";
                        echo "<div class='something'>";
                            echo "<p class='text_to_low'>" . "</p>";
                        echo"</div>";
                        echo "<aside class='the_aside_thing'>";
                        $sql = "SELECT * FROM `Porjects_tags` WHERE ID = '$Id'";
                        $query = mysqli_query($connection, $sql);
                        $rows = mysqli_fetch_assoc($query);
                        foreach($rows as $Columan_Names => $value)
                            {
                                if($value == 1 AND $Columan_Names != 'ID' and $Columan_Names != 'Projects_ID')
                                {
                                    echo "<div class='".$Columan_Names."'><p>". $Columan_Names. "</p></div>";
                                }
                            }

                        echo "</aside>";
                    echo "</section>";
                    echo "</a>";






                }
                    echo "<a href='../../index.php'>";
                    echo "<section class='Updates_section'>";
                    echo "<div class='End_of_div'>"; 
                    echo "<i class='fa-solid fa-pen-to-square fa-xl'></i>";
                    echo"<p>". "Go Back" . "</p>"; 
                    echo"</div>";
                    echo "<div>";
                    echo "<p class='text_to_low'>" ."test". "</p>";
                    echo"</div>";
                    echo "</section>";
                    echo "</a>";

            
            
            
            ?>

        
        </section>

        
    </main>

</body>
</html>