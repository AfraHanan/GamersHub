<?php
include('session.php');  
include('includes/db_config.php'); 

if(isset($_POST['login_btn']))
{
    $email_id = $_POST['email_id'];
    $password = md5($_POST['password']);

    $query = "SELECT * FROM admins WHERE email_id = '$email_id' AND password = '$password'";
    $query_run = mysqli_query($connection, $query);

    if(mysqli_fetch_array($query_run))
    {
        $_SESSION['email_id'] = $email_id ;
        header('Location: index.php');
    }
    else
    {
        $_SESSION['status'] = 'Wrong Email ID or Password ';
        header('Location: login.php');
    }
 
}

if(isset($_POST['logout_btn']))
{
    session_destroy();
    unset($_SESSION['username']);
    header('Location: login.php');
}

if(isset($_POST['submit_tournament']))
{

    $tournament_title = $_POST['tournament_title'];
    $gameName = $_POST['gameName'];
    $tournamentType = $_POST['tournamentType'];
    $tournamentDesc = $_POST['tournamentDesc'];
    $duration = $_POST['duration'];
    $playerCapacity = $_POST['playerCapacity'];
    $trn_featured_image = $_FILES['trn_featured_image']['name'];

    $target = "img/".basename($trn_featured_image);
    

        $query = "INSERT INTO tournaments (tournament_title, gameName, tournamentType, tournamentDesc, duration, playerCapacity, trn_featured_image) VALUES ('$tournament_title', '$gameName', '$tournamentType', '$tournamentDesc', '$duration', '$playerCapacity', '$trn_featured_image')";
        $query_run = mysqli_query($connection, $query);

        if($query_run)
        {
            move_uploaded_file($_FILES['trn_featured_image']['tmp_name'], $target);
            header('location: view_tournaments.php');
        }
        else
        {
            
            header('location: add_tournaments.php');
        }

}

if(isset($_POST['submit_game_updates']))
{

    $title = $_POST['title'];
    $gameName = $_POST['gameName'];
    $description = $_POST['description'];
    $sourceLink = $_POST['sourceLink'];
    $gmu_featured_image = $_FILES['gmu_featured_image']['name'];

    $target = "img/game_updates/".basename($gmu_featured_image);
    

        $query = "INSERT INTO game_updates (title, gameName, description, sourceLink, gmu_featured_image) VALUES ('$title', '$gameName', '$description', '$sourceLink', '$gmu_featured_image')";
        $query_run = mysqli_query($connection, $query);

        if($query_run)
        {
            move_uploaded_file($_FILES['gmu_featured_image']['tmp_name'], $target);
            header('location: view_game_updates.php');
        }
        else
        {
            
            header('location: add_game_updates.php');
        }

}

if(isset($_POST['submit_games']))
{

    $gameName = $_POST['gameName'];
    $gameCat = $_POST['gameCat'];
    $gameDesc = $_POST['gameDesc'];
    $gameDeveloperName = $_POST['gameDeveloperName'];
    $gameRating = $_POST['gameRating'];
    $g_featured_image = $_FILES['g_featured_image']['name'];

    $target = "img/games/".basename($g_featured_image);
    

        $query = "INSERT INTO games (gameName, gameCat, gameDesc, gameDeveloperName, gameRating, g_featured_image) VALUES ('$gameName', '$gameCat', '$gameDesc', '$gameDeveloperName', '$gameRating', '$g_featured_image')";
        $query_run = mysqli_query($connection, $query);

        if($query_run)
        {
            move_uploaded_file($_FILES['g_featured_image']['tmp_name'], $target);
            header('location: view_games.php');
        }
        else
        {
            
            header('location: add_games.php');
        }

}



?>
