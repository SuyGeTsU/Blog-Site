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
            <img src="https://cdn.dnaindia.com/sites/default/files/styles/full/public/2018/03/18/662082-arijitsingh-031918.jpg"
                alt="Not Found" class="blogImg">
            <div class="blogDetailsDivContent">

                <h2>Arijit Singh — The Golden Voice of India</h2>
                <b>By Surbhi , 10-12-2024</b><br>
                <p>Arijit Singh started his journey of music at a very young age, everyone who heard him sing cannot get
                    enough of him ever. And this is still happening even today.

                    Bollywood’s favourite Singer.

                    Arijit Singh’s voice found its way into the hearts of people through Bollywood. His first big break
                    came with the song “Tum Hi Ho” from the movie “Aashiqui 2.” Suddenly, everyone wanted to know who
                    this magical voice belonged to. Arijit became the melody king, and his songs turned into anthems for
                    love, heartbreak, and everything in between.

                    Makes the heart go La La

                    Arijit Singh’s songs are not just melodies; they are emotions that touch the soul. Songs like
                    “Channa Mereya,” “Raabta,” and “Tera Ban Jaunga” became the heartbeat of a generation. His ability
                    to infuse feelings into his songs makes him a storyteller through music.
                    Vision of singing and versatility of notes

                    What makes Arijit Singh truly special is his versatility. He can sing a soulful romantic melody one
                    moment and switch to a peppy, energetic tune the next. From heartbreaking ballads to foot-tapping
                    numbers, Arijit has a song for every mood.

                    The Man Behind the Magic

                    Beyond the stage and the studio, Arijit Singh is a simple man who lets his music speak for itself.
                    He doesn’t need flashy antics because his voice does all the talking. His humility and genuine love
                    for music make him not just a singing sensation but a beloved artist.

                    Fan’s love and admiration

                    Arijit Singh understands the power of connection. He connects with the fans like no one. The love he
                    receives from his fans is a testament to the deep connection he shares with them.
                </p>
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