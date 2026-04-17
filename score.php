<?php include 'db.php'; ?>

<form method="post">
<input name="match_id" placeholder="Match ID">
<input name="player_id" placeholder="Player ID">
<input name="score" placeholder="Score">
<button name="submit">Add Score</button>
</form>

<?php
if(isset($_POST['submit'])){
    mysqli_query($conn,"INSERT INTO scores(match_id,player_id,score)
    VALUES('$_POST[match_id]','$_POST[player_id]','$_POST[score]')");
    echo "Score Added!";
}
?>