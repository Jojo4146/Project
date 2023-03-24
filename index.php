<?php

    $page_title = 'Home';
    include_once 'include/header.php';

?>

<h1>The Premier Place for Continuing Education Credits for Imaging Technologists</h1>

<img class="image" src="images/radtech1.jpeg" alt="radtech" width="700" height="500">
<br><br>

<p>
    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
    incididunt ut labore et dolore magna aliqua. Leo urna molestie at elementum eu
    facilisis sed odio. Non pulvinar neque laoreet suspendisse interdum consectetur
    libero id. Nunc sed blandit libero volutpat sed cras ornare arcu dui. Aliquet
    sagittis id consectetur purus ut faucibus pulvinar elementum. Urna condimentum
    mattis pellentesque id. Eu lobortis elementum nibh tellus molestie nunc. Magna
    sit amet purus gravida quis blandit turpis cursus in. Sit amet luctus venenatis
    lectus magna fringilla urna porttitor.
</p>

<?php
    if(isset($_SESSION["usersEmail"])){
        echo "<h2>Welcome back, " . $_SESSION["usersEmail"] . "</h2>";
    }
?>

<br><br>
<?php

    include_once 'include/footer.php';

?>