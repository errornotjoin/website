<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/Main_colours.css">
    <link rel="stylesheet" href="../../css/Main_background.css">
    <link rel="stylesheet" href="css\Server_map.css">

    <title>Server Map -- ErrorNotJoin</title>
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
        <section id="Main_section">
            <?php
             if (isset($_GET["total_fail"]) && $_GET["total_fail"] == "5" )
             {  
                echo '<div class="error_div">';
                echo '<h1 id="title">Error</h1>';
                echo '<p id="error_message">The map is currently down, please try again later,<br> reach max attempts 5/5</p>';
                    echo '<div class="links">';
                        echo '<a href="Server_map.php">Try again</a>';
                        echo '<a href="../../index.php">Go Home</a>';
                    echo '</div>';
                echo '</div>'; 
            }
             else
              {

                echo '<iframe id="iframes" src="http://mcmap.errornotjoin.space/" allowfullscreen width="102.5%" height="900px"  style="  border-radius: 10px;" allowtransparency="true" frameborder="0"></iframe>';
                
              }
            ?>
        </section>
    </main>
    <script type="text/javascript" src="Error_for_iframe.js"></script>
</body>
</html>
