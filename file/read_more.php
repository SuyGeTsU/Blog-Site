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
            <img src="https://newbreak.church/wp-content/uploads/bb-plugin/cache/9mkcjtynqty-portrait-7ce7f19b4531151fd8d581518326e9e1-f98wc3lguqia.jpg"
                alt="Not Found">
            <div class="blogDetailsDivContent">

                <h2>God Of Miracles</h2>
                <b>By Samantha Brooks ,02-04-2024</b><br>
                <p>Can you imagine the scene? Jesus just learning of the death of His cousin, John the Baptist, resting
                    and most likely praying in the hill country of Golan Heights. The weight of His loss could not
                    compare with His compassion for His people as He looked up and saw the large crowd.
                    The first thought Jesus has about this crowd is not, "Why are they here, don't they know that I am
                    in morning!" Jesus' first thought is compassion and He moves in healing and teaching.Lorem ipsum
                    dolor sit amet consectetur adipisicing elit. Quisquam quae debitis iure nesciunt tempora,
                    cupiditate, ipsa assumenda quasi nobis ex voluptatem. Modi, maiores enim nisi cum voluptatum
                    suscipit commodi nobis. Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam obcaecati et
                    ex tempora. Doloremque, hic ad dolorum dignissimos voluptatem cumque iste vitae sed, quia saepe enim
                    quasi dolores, recusandae at?</p>
            </div>
        </div>
    </div>
    <!-- Comments -->
    <div class="comment">
        <div class="individualComments commentLeft">
            <div class="commentImg">
                <img src="https://newbreak.church/wp-content/uploads/bb-plugin/cache/9mkcjtynqty-portrait-7ce7f19b4531151fd8d581518326e9e1-f98wc3lguqia.jpg"
                    alt="Not Found">
            </div>
            <div class="commentContent">
                <b>Dhruv</b>
                <p>Nicely written and informative blog. Looking forward for more such content!!</p>
            </div>
        </div>
        <div class="individualComments commentRight">
            <div class="commentImg">
                <img src="https://www.forbesindia.com/media/images/2024/Apr/img_231817_mayankyadavipl.jpg"
                    alt="Not Found">
            </div>
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