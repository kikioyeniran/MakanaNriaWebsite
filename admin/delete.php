<?php require_once("includes/sessions.php"); ?>
<?php confirm_logged_in(); ?>
<?php require_once("includes/connection.php"); ?>
<?php require_once("includes/functions.php"); ?>
<?php

if(isset($_GET['portfolioid']))
{
    $id = mysql_prep($_GET['portfolioid']);
    if($id)
    {$query = "DELETE FROM portfolio WHERE id = {$id} LIMIT 1";
        $result = $mysqli->query($query) or die($mysqli->error);
        if(mysqli_affected_rows($mysqli) == 1){
            header("Location: portfolio.php");
            }
            else{
                //Deletion Failed
                echo "<script>alert(\"Image deleted from database\")<script>";
                echo "<p>" .  mysql_error() .  "</p>";
                echo "<a href = 'event.php'>Return to Main Page</a>";
                }
        }else{
            //subject didn't exist in  database
            //redirect_to("videos.php");
            header("Location: portfolio.php");
            }
}

if(isset($_GET['videoid']))
{
    $id = mysql_prep($_GET['videoid']);
    if($id)
    {$query = "DELETE FROM videos WHERE id = {$id} LIMIT 1";
        $result = $mysqli->query($query) or die($mysqli->error);
        if(mysqli_affected_rows($mysqli) == 1){
            header("Location: videos.php");
            }
            else{
                //Deletion Failed
                echo "<script>alert(\"Image deleted from database\")<script>";
                echo "<p>" .  mysql_error() .  "</p>";
                echo "<a href = 'event.php'>Return to Main Page</a>";
                }
        }else{
            //subject didn't exist in  database
            //redirect_to("videos.php");
            header("Location: videos.php");
            }
}

if(isset($_GET['spadeid']))
{
    $id = mysql_prep($_GET['spadeid']);
    if($id)
    {$query = "DELETE FROM spade WHERE id = {$id} LIMIT 1";
        $result = $mysqli->query($query) or die($mysqli->error);
        if(mysqli_affected_rows($mysqli) == 1){
            header("Location: spade.php");
            }
            else{
                //Deletion Failed
                echo "<script>alert(\"Image deleted from database\")<script>";
                echo "<p>" .  mysql_error() .  "</p>";
                echo "<a href = 'event.php'>Return to Main Page</a>";
                }
        }else{
            //subject didn't exist in  database
            //redirect_to("spade.php");
            header("Location: spade.php");
            }
}

if(isset($_GET['poetryid']))
{
    $id = mysql_prep($_GET['poetryid']);
    if($id)
    {$query = "DELETE FROM poetry WHERE id = {$id} LIMIT 1";
        $result = $mysqli->query($query) or die($mysqli->error);
        if(mysqli_affected_rows($mysqli) == 1){
            header("Location: poetry.php");
            }
            else{
                //Deletion Failed
                echo "<script>alert(\"Image deleted from database\")<script>";
                echo "<p>" .  mysql_error() .  "</p>";
                echo "<a href = 'event.php'>Return to Main Page</a>";
                }
        }else{
            //subject didn't exist in  database
            //redirect_to("poetry.php");
            header("Location: poetry.php");
            }
}

?>
