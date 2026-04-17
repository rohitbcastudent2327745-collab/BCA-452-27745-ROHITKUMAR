<?php include 'db.php'; ?>

<form method="post">
<input name="name" placeholder="Player Name">
<input name="team_id" placeholder="Team ID">
<input name="role" placeholder="Role">
<button name="submit">Add Player</button>
</form>

<?php
if(isset($_POST['submit'])){
    mysqli_query($conn,"INSERT INTO players(name,team_id,role)
    VALUES('$_POST[name]','$_POST[team_id]','$_POST[role]')");
    echo "Player Added!";
}
?>