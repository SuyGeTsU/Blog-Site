<!DOCTYPE html>
<html lang="en">

<?php include ('head.php'); ?>
<?php include ('conn.php'); ?>
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="responsive.css">

<body>
    <!-- Navigation -->
    <?php include ('navbar.php'); ?>
    <!-- ************** -->
    <div class="detailsBlog">
        <div class="blogDetailsDiv">
            <img src="https://www.billboard.com/wp-content/uploads/2024/02/Liam-Gallagher-july-2023-billboard-1548.jpg?w=942&h=623&crop=1"
                alt="Not Found">
            <div class="blogDetailsDivContent">

                <h2>Liam Gallagher and John Squire Spin ‘I’m A Wheel’ For Late-Night TV</h3>
                    <b>By Lars Brandel , 04/10/2024</b><br>
                    <p>Manchester, for any music (or sport) fan who knows their stuff, is a city that punches several
                        divisions above its weight. For its part in the spread of electronic dance music through the
                        U.K. in
                        the late ‘80s, and the peerless, timeless bands that emerged from its scene — think The Smiths,
                        Joy
                        Division/New Order, Happy Mondays — Manchester is one of the world’s great music cities.The
                        Stone
                        Roses, the indie-rock enigmas whose iconic, self-titled debut from 1989, is considered by many
                        as
                        the greatest debut of them all, if not the greatest album, period, are among the Manchester
                        royalty.

                        As is Oasis, the now-defunct giant of the Britpop era, which landed at No. 1 on the Official
                        U.K.
                        Albums Chart with every studio album (seven in total), and smashed records along the way. The
                        “Live
                        Forever” rockers are one step away from induction into the Rock And Roll Hall of Fame.

                        The Stones Roses’ guitarist John Squire and former Oasis and Beady Eye frontman Liam Gallagher
                        recently teamed up for a collaborative, self-titled album which – no surprises here – blasted to
                        No.
                        1 on the Official U.K. Albums Chart earlier this year, outselling its nearest competitor by
                        three
                        copies to one. Liam now boasts 14 U.K. No. 1 albums across a three-decade career.

                        On Tuesday night, April 9, that “superduo” paid a visit to NBC’s The Tonight Show Starring Jimmy
                        Fallon, for a performance of the bluesy-rock album track “I’m A Wheel.”</p>
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
                <b>Xyz</b>
                <p>Nicely written and informative blog. Looking forward for more such content!!</p>
            </div>
        </div>
    </div>
    <!-- Comment Form -->
    <form action="" method="POST" class="commentForm">
        <input type="text" placeholder="name" name="name" autocomplete="off">
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

</body>

</html>