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
            <img src="https://cdn1.thecomeback.com/32flags/wp-content/uploads/sites/158/2015/06/476127676-1024x675.jpg"
                alt="Not Found" class="blogImg">
            <div class="blogDetailsDivContent">

                <h2>Barcelona: A Master-Class</h2>
                <b>By Swati Kothari , 02-06-2024</b><br>
                <p>It's always a pleasure to watch the top two contenders make it to the final and then for the best
                    man to walk away with the ultimate prize. Of course to be able to really enjoy that we have to first
                    be able put aside our biases, as a contest between the best is always a mouthwatering prospect but a
                    hell lot of a times it comes at the expense of one's own preferred candidate.Now this candidate
                    could be anyone from the several men competing to woo and marry the lone girl in 'The Bachelorette'
                    or our favourite clubs in contention for the biggest glory in club football - the UEFA Champions
                    League. I know many would scoff at the above comparison, some even wanting to kill me, but don't
                    worry I have my heart (and brain) in the right place and I, don't watch the show. That was only for
                    people for whom sport and more importantly football, is gibberish.

                    I, for one, decided to put aside my preference for Chelsea and relish the Wembley final between
                    Barcelona and Manchester United even though the latter is a team I'm not too fond of. Well, that, is
                    without a doubt an understatement. Of course, the fact that Barca is another favourite of mine made
                    it much easier to do so.

                    It is a privilege to watch this Barcelona team and people whose love for the game can rise above
                    their love for their favourite teams would have little hesitation in admitting as much. Likewise it
                    was a privilege to witness Barca dismantling United in one of the best finals in recent memory. A
                    Man U supporter watching the contest beside me seemed a changed man after the game and had little
                    shame in admitting to the fact. His words: "I have nothing but respect for Barca." Yes, he wasn't
                    alone. Barca succeeded in doing something next to impossible - making several Man U fans accept that
                    they lost to a better team. That, mind you, is no small feat as they are known to be arrogant and
                    have little respect for other clubs' fans. This is one reason why most other club supporters join
                    hands in rooting for the team in contention against Man U once their own team is out of the contest.
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