<?php include 'db.php'; ?>

<form method="post">
<input name="t1" placeholder="Team 1 ID">
<input name="t2" placeholder="Team 2 ID">
<input type="date" name="date">
<button name="submit">Add Match</button>
</form>

<?php
if(isset($_POST['submit'])){
    mysqli_query($conn,"INSERT INTO matches(team1_id,team2_id,match_date)
    VALUES('$_POST[t1]','$_POST[t2]','$_POST[date]')");
    echo "Match Added!";
}
?>