<?php
session_start();
if(!isset($_SESSION['user'])){
    header("Location:login.php");
}
?>

<h2>Dashboard</h2>

<a href="team.php">Add Team</a><br>
<a href="player.php">Add Player</a><br>
<a href="match.php">Add Match</a><br>
<a href="score.php">Add Score</a><br>
<a href="view.php">View Data</a><br>
<a href="logout.php">Logout</a>