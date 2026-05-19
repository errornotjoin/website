
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

    <title>minecraft Servers -- ErrorNotJoin</title>
</head>
<body>

    <main class="Main_items">
        <aside>
            <nav>
                <a href="../../index.php"><button>Home</button></a>
                <a href="minecraft_server.php"><button>minecraft server</button></a>
                <a href="Server_map.php"><button>Server map</button></a>

            </nav>
        </aside>
        <section class="Main_section" id="Main_section">
            <div class="small_div">
                <?php
                $Ips = [];
                $sql_code = "SELECT IP FROM `mc_ip` ";
                $Sql_query = mysqli_query($Server_connects, $sql_code);
                while($row = mysqli_fetch_assoc($Sql_query))
                    {
                        $Name = $row['IP'];
                        $Ips[] = $Name;
                        
                        
                    }
                ?>
                <h3>Java IP:</h3>
                <input disabled type="text" placeholder="Server IP Address" id="server_ip_input" value="<?php echo $Ips[0]; ?>">
            </div>
            <div class="small_div">

                <h3>BedRock IP:</h3>
                <?php
                $sql_code = "SELECT Port FROM `mc_ip` WHERE `Platform` = 'BedRock' ";
                $Sql_query = mysqli_query($Server_connects, $sql_code);
                while($row = mysqli_fetch_assoc($Sql_query))
                    {
                        $Port = $row['Port'];

                        
                        
                    }
                ?>
                <input disabled id="" value="<?php echo $Ips[1]; ?>">
                <input type="text" disabled value=": <?php echo $Port; ?>">
            </div>
            <div class="small_div">
                <h3>Server Version</h3>
                <input type="text" disabled value="<?php echo $Ips[2]?>">
            </div>
            <div class="Other_div">
                <h3>Rules</h3>
                <ul>
                <?php
                $sql_code = "SELECT title FROM `mc_roles` ";
                $Sql_query = mysqli_query($Server_connects, $sql_code);
                while($row = mysqli_fetch_assoc($Sql_query))
                    {
                        echo '<li> <input type="text" disabled value="' . $row['title'] . '"></li>';
                    }
                ?>
                </ul>
            </div>
            <div class="Other_div">
                <h3>Plugins</h3>
                <ul>
                <?php
                $sql_code = "SELECT * FROM `mc_plugins` ";
                $Sql_query = mysqli_query($Server_connects, $sql_code);
                while($row = mysqli_fetch_assoc($Sql_query))
                    {
                        echo '<li> <a href="' . $row['Link'] . '"><p class="rule_title"> ' . $row['title'] . '</p></a></li>';
                    }
                ?>
                </ul>
                
            </div>
            <div class="Other_div">
                <h3>Safety Information</h3>
                <ul>
                    <li>Do not share your personal information with other players.</li><br>
                    <li>Report any suspicious activity to the server administrators.</li> <br>
                    <li>Follow the server rules at all times.</li> <br>
                    <li>Links To The Plugins Pages may not be 100% Safe but they have been reviewed for safety from us at 09/04/26 .</li>
                </ul>
            </div>

        </section>
    </main>
    

</body>
</html>