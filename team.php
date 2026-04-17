<?php include 'db.php'; ?>

<form method="post">
<input name="team" placeholder="Team Name">
<button name="submit">Add Team</button>
</form>

<?php
if(isset($_POST['submit'])){
    mysqli_query($conn,"INSERT INTO teams(team_name) VALUES('$_POST[team]')");
    echo "Team Added!";
}
?>