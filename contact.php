<?php
$page_title = 'Contact';
include_once 'include/header.php';
?>

<h1>Contact Us:</h1>
<form class="contact-form" action="include/contact.inc.php" method="post">
    <div class="contact-page">
        <p><label>
            <input type="text" name="name" placeholder="Full name">
        </label></p>
        <p><label>
            <input type="text" name="mail" placeholder="Your e-mail">
        </label></p>
        <p><label>
            <textarea name="message" placeholder="Message"></textarea>
        </label></p>
        <button type="submit" name="submit" >Send Mail!</button>
    </div>
</form>
<?php
    // error handlers
    if(isset($_GET["error"])) {
        if ($_GET["error"] == "mailsent") {
            echo "<h2>Your message was sent!</h2>";
        }
    }
?>

<?php
include_once 'include/footer.php';
?>
