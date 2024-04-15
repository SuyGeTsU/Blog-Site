<!DOCTYPE html>
<html lang="en">

<?php include ('head.php'); ?>
<link rel="stylesheet" href="style.css">
<?php include ('conn.php'); ?>
<link rel="stylesheet" href="responsive.css">

<body>
    <!-- Navigation -->
    <?php include ('navbar.php'); ?>
    <!-- ************** -->
    <div class="detailsBlog">
        <div class="blogDetailsDiv">
            <img src="https://www.forbesindia.com/media/images/2024/Apr/img_231817_mayankyadavipl.jpg" alt="Not Found"
                class="blogImg">
            <div class="blogDetailsDivContent">

                <h2>IPL 2024 Youngster</h2>
                <b>By Mohsin Kamal , 01-04-2024</b><br>
                <p>"Speed” is the word that has dominated the headlines in Indian cricket circles since March 30. In
                    the ongoing Indian Premier League (IPL), Lucknow Super Giants were hosting Punjab Kings at Ekana
                    Stadium and things were going great for Punjab. They were 88 for none in nine overs, chasing 200.

                    Then Lucknow brought on Mayank Yadav, a name that was unheard of, at least for people who did not
                    follow India’s domestic cricket. A young pacer debuting in the world’s most-watched cricket league
                    is a challenging experience. Still, before people could say anything about him, everyone suddenly
                    started noticing the speedometer. </p>
            </div>
        </div>
    </div>
    <!-- Comments -->
    <div class="comment">
        <div class="individualComments commentLeft">
            <!-- <div class="commentImg">
                <img src="https://newbreak.church/wp-content/uploads/bb-plugin/cache/9mkcjtynqty-portrait-7ce7f19b4531151fd8d581518326e9e1-f98wc3lguqia.jpg"
                    alt="Not Found">
            </div> -->
            <div class="commentContent">
                <b>Dhruv</b>
                <p>Nicely written and informative blog. Looking forward for more such content!!</p>
            </div>
        </div>
        <div class="individualComments commentRight">
            <!-- <div class="commentImg">
                <img src="https://www.forbesindia.com/media/images/2024/Apr/img_231817_mayankyadavipl.jpg"
                    alt="Not Found">
            </div> -->
            <div class="commentContent">
                <b>Ayaz</b>
                <p>Nicely written and informative blog. Looking forward for more such content!!</p>
            </div>
        </div>
    </div>
    <!-- Comment Form -->
    <form action="" method="POST" class="commentForm">
        <input type="text" placeholder="name" name="name">
        <textarea name="message" placeholder="message"></textarea>
        <input type="Submit" name="commentSubmit" value="submit" class="btn">
    </form>
    <?php

    if (isset($_POST['commentSubmit'])) {
        $name = $_POST['name'];
        $message = $_POST['message'];

        $res = mysqli_query($conn, "insert into comment(name,message) values('$name','$message')");
        if ($res) {
            echo "<script>alert('Your message has been sent successfully')</script>";
        } else {
            echo "<script>alert('Failed')</script>";
        }
    }
    ?>
    <?php include ('footer.php'); ?>
</body>

</html>