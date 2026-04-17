<?php include 'db.php'; ?>

<h2>Teams</h2>
<?php
$res=mysqli_query($conn,"SELECT * FROM teams");
while($row=mysqli_fetch_assoc($res)){
echo $row['id']." - ".$row['team_name']."<br>";
}
?>

<h2>Players</h2>
<?php
$res=mysqli_query($conn,"SELECT * FROM players");
while($row=mysqli_fetch_assoc($res)){
echo $row['name']." (Team ".$row['team_id'].")<br>";
}
?>