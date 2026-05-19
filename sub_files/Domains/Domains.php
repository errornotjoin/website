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
    <link rel="stylesheet" href="../../css/index.css">
        <link rel="stylesheet" href="../../css/contact.css">
    <title>Domains -- ErrorNotJoin</title>
</head>
<body>
    <header>
        <h1>ErrorNotJoin.tech</h1>
    </header>
    <main class="Main_items">
        <aside>
            <nav>
                <a href="../../index.php"><button>Home</button></a>
                <a><button>post</button></a>
                <a href="../sub_files/Discord_Bot/Index.php"><button>Discord Server</button></a>
                <a href="../sub_files/minecraft_server/minecraft_server.php"><button>Minecraft Server</button></a>
                <a href="../Contact.php"><button>Contact</button></a>
            </nav>
        </aside>
        <section class="The_main_items" id="The_main_items">
           <?php
            $sql_code = "SELECT * FROM `Domain` ";
            $Sql_query = mysqli_query($Server_connects, $sql_code);
            while($row = mysqli_fetch_assoc($Sql_query))
                {
                   $Domain_name = $row['Names'];
                   $Registrar = $row['Registrar'];
                   $link = $row['Link'];
                   echo "<a href='$link' target='_blank'>";
                   echo "<section class='Updates_section' style='animation: 0.5s ease-in-out 0s 1 normal forwards running Loading_page;'>
                        <div class='End_of_div'>
                           <h3> $Domain_name</h3>
                        </div>
                        <div class='title_center'>
                           <p>Registrar: $Registrar</p>
                        </div>
                         </section>";
                   echo "</a>";
                   time_sleep_until(microtime(true) + 0.5);

                }
           
           
           ?>

            
        </section>
    </main>

</body>
</html>