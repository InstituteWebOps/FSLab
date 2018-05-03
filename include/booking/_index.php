<?php
require_once('config/_db.php');

$statement = "SELECT * FROM users WHERE email = '".$_SESSION['email']."';"; 
$query = $conn->query($statement);
$query->setFetchMode(PDO::FETCH_ASSOC);
$row = $query->fetch();
?>

<div class="col-sm-6 contact-info bookings">
    <div class="about-us text-center col-sm-6">
        <h4>User Details</h4>
        <label>Name: <?php echo $row['name'] ?></label><br>
        <label>Email: <?php echo $row['email'] ?></label><br>
        <label>Faculty Advisor: <?php echo $row['facname'] ?></label><br>
        <!-- <span class="st-border center"></span> -->
        <!-- <a target="_blank" href="https://docs.google.com/spreadsheets/d/19lixwzk0nO3OZAWkk7UawlViQeJDjl27u0fj3h3QmXU/edit#gid=0" class="btn btn-send btn-lg">Click Here</a> -->
    </div>
    <div class="about-us text-center col-sm-6">
        <?php
            echo (($row['verified'] == 0)
            ?'<h4>Verified for Lab Safety. Apply for a Lab Slot Booking</h4>
            <a target="_blank" href="book.php" class="btn btn-send btn-lg">Book A Slot</a>'
            :'<h4>Apply for Lab Safety Certification</h4>
            <a target="_blank" href="apply.php" class="btn btn-send btn-lg">Apply</a>'
        );
        ?>

    </div>
</div>
<div class="col-sm-6">
    <form style="float:right" method="POST" action="action.php">
        <input type="hidden" name="type" value="logout" />        
        <button type="submit" class="btn btn-send btn-lg">Log Out</button>
    </form>
<h3>
    Previous Bookings:
</h3> 
<table class="table table-striped">
    <thead>
        <tr>
            <th>Booking Date</th>
            <th>Booking Lab</th>
            <th>Status</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Booking Date</td>
            <td>Booking Lab</td>
            <td>Status</td>
        </tr>
    </tbody>
</table>
</div>
