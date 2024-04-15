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
            <img src="https://www.billboard.com/wp-content/uploads/2024/04/ryan-gosling-snl-promo-2024-billboard-1548.jpg?w=942&h=623&crop=1"
                alt="Not Found" class="blogImg">
            <div class="blogDetailsDivContent">

                <h2>Ryan Gosling Nervously Rehearses His Meet Cool With Chris Stapleton in ‘SNL’ Promo</h2>
                <b>By Gil Kaufmann , 04/10/2024</b><br>
                <p>Ryan Gosling has been a star for more than three decades. And, judging by the way he absolutely
                    crushed it during the mega song-and-dance performance of his spotlight Barbie song “I’m Just
                    Ken”
                    But in the first promo for his third stint as host of Saturday Night Live this weekend (April
                    13),
                    Gosling is as jangled as a 12-year-old asking his first crush out to the movies. It’s all a
                    put-on,
                    of course. But in the endearing video, Gosling practices how he’s going to introduce himself to
                    the
                    night’s musical guest, country singer Chris Stapleton, and he just can’t seem to get it right.

                    Wearing a Stapleton T-shirt, Gosling works up his nerve to knock on the singer’s dressing room
                    door
                    as he rehearses his best meet cool lines for the “Tennessee Whiskey” star. “Mr. Stapleton, big
                    fan,
                    love your music,” Gosling says as he grips a head shot of Stapleton and a black marker. “Nah,
                    it’s
                    stupid.”

                    Trying out a more casual approach, Gosling whips his phone out of his back pocket and gets in
                    selfie
                    position as he says, “Yo Chris! One for the ‘gram?” That one also fell flat, so Gosling opts for
                    a
                    more formal, Shakespearean take, intoning, “Master Stapleton, ’tis I, Sir Gosling. That’s cool,”
                    he
                    says.

                    But when Gosling finally works up the confidence to open the door, he walks into a darkened room
                    to
                    find Stapleton’s perfectly lit, signature straw cowboy hat sitting majestically on a mannequin
                    head.
                    The image is so overwhelming that Gosling drops his marker and photo in awe as he struts toward
                    the
                    hat, thinks better of it, then plops it on his head contentedly as Stapleton’s “White Horse”
                    blasts
                    out.</p>
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