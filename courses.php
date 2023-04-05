<?php
$page_title = 'Courses';
include_once 'include/header.php';

// Initializing a cart
if (!(isset($_SESSION['cart']))) {
    $_SESSION['cart'];
}
?>

<main>
    <h2>Courses Available</h2>
    <p>Select from any of our courses to get started.</p>
    <br>

    <form action="cart.php" method="post">
        <table class="courses">
            <tr class="col0">
                <th></th>
                <th class="table-title">Course Number</th>
                <th class="table-title">Course Name</th>
                <th class="table-title">Description</th>
                <th class="table-title">Credits</th>
                <th class="table-title">Date</th>
                <th class="table-title">Category</th>
                <th class="table-title">Price</th>

                <?php
                // Connect to database
                require('include/dbh.inc.php');
                // Fetch everything from 'courses' table and saving in $results
                $sql = "SELECT coursesId, coursesName, coursesDescription, coursesCrdts, 
                    coursesDate, coursesCategory, coursesPrice FROM courses";
                $result = mysqli_query($con, $sql);  // everything in the db for courses

                if (mysqli_num_rows($result) > 0) {
                    // output data of each row
                    while ($row = mysqli_fetch_assoc($result)) {
                        // Table with variables
                        echo '<tr>';
                        echo '<th><a href="cart.php?id=' . $row["coursesId"] . '">Add Course</a></th>';
                        echo '<td>' . $row["courseName"] . '</td>';
                        echo '<td>' . $row["coursesDescription"] . '</td>';
                        echo '<td>' . $row["coursesCrdts"] . '</td>';
                        echo '<td>' . $row["coursesPrice"] . '</td>';
                        echo '<td>' . $row["coursesCategory"] . '</td>';
                        echo '</tr>';
                    }
                }
                mysqli_close($con);
                ?>
    </form>
</main>