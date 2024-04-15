<?php
include ('conn.php');
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blogs</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Reddit+Mono&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="responsive.css">
</head>

<body>
    <!-- Navigation -->
    <?php include ('navbar.php'); ?>
    <!-- ************** -->

    <!-- Banner -->
    <section class="banner">
        <div class="bannerHead">
            <h1><span>Discover</span> Monitor & Share Engaging Content!</h1>
            <p>Welcome to our vibrant community of bloggers!
                We're thrilled to have you join us on this exciting journey of creativity and expression.
                Whether you're here to share your thoughts, showcase your talents, or connect with like-minded
                individuals, our platform offers a welcoming space for you to explore and grow.
                Dive into discussions, spark inspiration, and let your voice be heard. Take a moment to settle in,
                explore the diverse array of content, and most importantly, enjoy the enriching experience of being part
                of our blogging community.
            </p>
            <a href="blog.php" class="btn">Explore Blogs</a>
        </div>
        <div class="bannerImg">
            <img src="thought-catalog-505eectW54k-unsplash.jpg" alt="Not Found">
        </div>
    </section>
    <!-- *********** -->


    <!-- About Us -->
    <h1 class="heading" id="about">Who Are We...</h1>
    <div class="aboutUs">
        <div class="aboutImg">
            <img src="https://media.istockphoto.com/id/1402604850/photo/the-word-about-us-on-wooden-cubes-business-communication-and-information.webp?b=1&s=170667a&w=0&k=20&c=M1zgL2pGwZ_g3cwmOvdMtzz92PlTLdihv6_wgaW1QZc="
                alt="Not Found">
        </div>
        <div class="aboutContent">
            <p><span>We are a family</span>,
                united by our passion for expression, connection, and creativity. Welcome to our vibrant corner of the
                internet, where every voice is celebrated, and every story matters. As the founders of this blogging
                website, we believe in the power of words to inspire, inform, and connect people from all walks of life.
                Here, you'll find a diverse community of writers, thinkers, and dreamers coming together to share their
                experiences, insights, and perspectives. Whether you're a seasoned wordsmith or just dipping your toes
                into the world of blogging, we invite you to join our family and embark on a journey of exploration,
                discovery, and meaningful conversation. Together, let's create a space where ideas flourish, connections
                deepen, and stories come to life. Welcome home.
            </p>
        </div>
    </div>


    <!-- Recent Blogs -->
    <div class="recentBlogs" id="recentBlog">
        <h1 class="heading" style="color:#ffff;">Recent Blogs...</h1>
        <div class="blogsDiv">
            <div class="individualRecentBlogs">
                <img src="https://newbreak.church/wp-content/uploads/bb-plugin/cache/9mkcjtynqty-portrait-7ce7f19b4531151fd8d581518326e9e1-f98wc3lguqia.jpg"
                    alt="Not Found">
                <div class="recentBlogContent">
                    <h4>God Of Miracles</h4>
                    <b>By Samantha Brooks , 02-04-2024</b>
                    <p>
                        Can you imagine the scene? Jesus just learning of the death of His cousin, John the Baptist,
                        resting and most likely praying in the hill country of Golan Heights. The weight of His loss
                        could not compare with His compassion for His people as He looked up and saw the large crowd.
                        The first thought Jesus has about this crowd is not, "Why are they here, don't they know that I
                        am in morning!" Jesus' first thought is compassion and He moves in healing and teaching.
                    </p>
                    <a href="read_more.php" class="btn">Read More</a>
                </div>
            </div>


            <div class="individualRecentBlogs">
                <img src="https://www.forbesindia.com/media/images/2024/Apr/img_231817_mayankyadavipl.jpg"
                    alt="Not Found">
                <div class="recentBlogContent">
                    <h4>IPL 2024 youngster</h4>
                    <b>By Mohsin Kamal , 01-04-2024</b>
                    <p>
                        "Speed” is the word that has dominated the headlines in Indian cricket circles since March 30.
                        In the ongoing Indian Premier League (IPL), Lucknow Super Giants were hosting Punjab Kings at
                        Ekana Stadium and things were going great for Punjab. They were 88 for none in nine overs,
                        chasing 200.

                        Then Lucknow brought on Mayank Yadav, a name that was unheard of, at least for people who did
                        not follow India’s domestic cricket. A young pacer debuting in the world’s most-watched cricket
                        league is a challenging experience.
                    </p>
                    <a href="read_more4.php" class="btn">Read More</a>
                </div>
            </div>

            <div class="individualRecentBlogs">
                <img src="https://cdn1.thecomeback.com/32flags/wp-content/uploads/sites/158/2015/06/476127676-1024x675.jpg"
                    alt="Not Found" class="blogImg">
                <div class="recentBlogContent">
                    <h4>Barcelona: A master-class</h4>
                    <b>By Swati Kothari , 02-06-2024</b>
                    <p>
                        It's always a pleasure to watch the top two contenders make it to the final and then for the
                        best
                        man to walk away with the ultimate prize. Of course to be able to really enjoy that we have to
                        first
                        be able put aside our biases, as a contest between the best is always a mouthwatering prospect
                        but a
                        hell lot of a times it comes at the expense of one's own preferred candidate.
                    </p>
                    <a href="read_more5.php" class="btn">Read More</a>
                </div>
            </div>
        </div>
    </div>


    <!-- Contact Us -->
    <h1 class="heading" id="contact">Contact Us...</h1>
    <div class="contactUs">
        <div class="ContactImg">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS4oER-uef-zXmp1MBTIrgDIHpt0tCPUIwieQ&s"
                alt="Not Found">
        </div>
        <form action="" method="POST">
            <h2>Get In Touch</h2>
            <div class="formAddress">
                <div>
                    <i class="fa fa-map-marker" aria-hidden="true"></i>
                    <p>Address:<span>Okhla,New Delhi,India-110020</span></p>
                </div>
                <div>
                    <i class="fa fa-envelope-open" aria-hidden="true"></i>
                    <p>Email Id:<span>abcd@gmail.com</span></p>
                </div>
                <div>
                    <i class="fa fa-phone " aria-hidden="true"></i>
                    <p>Phone No: <span>+91 9599784521</span></p>
                </div>
            </div>
            <input type="text" class="formField" placeholder="Name" name="name" autocomplete="off">
            <input type="text" class="formField" placeholder="Phone no" name="phone" autocomplete="off">
            <input type="email" class="formField" placeholder="Email Id" name="email" autocomplete="off">
            <input type="text" class="formField" placeholder="Subject Id" name="subject" autocomplete="off">
            <textarea name="message" class="formField" placeholder="Message"></textarea>
            <div class="formBtn">
                <input type="Submit" class="btn" value="submit" name="contactSubmit"><br>
                <input type="Reset" class="btn" value="reset" name="reset">
            </div>
        </form>
        <?php
        // contactUs
        if (isset($_POST['contactSubmit'])) {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $phone = $_POST['phone'];
            $subject = $_POST['subject'];
            $message = $_POST['message'];

            $res = mysqli_query($conn, "insert into contact(name,email,phone,subject,message) values('$name','$email','$phone','$subject','$message')");
            if ($res) {
                echo "<script>alert('Your message has been sent successfully')</script>";
            } else {
                echo "<script>alert('Failed')</script>";
            }
        }
        ?>
    </div>
    <!-- Map -->
    <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14008.940852880954!2d77.09098035!3d28.622711749999997!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390ce4751aa3f39f%3A0x5c10ed47eba39c7d!2sOkhla%2C%20New%20Delhi%2C%20Delhi!5e0!3m2!1sen!2sin!4v1712507768046!5m2!1sen!2sin"
        width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
        referrerpolicy="no-referrer-when-downgrade"></iframe>


    <!-- Footer -->
    <footer>
        <p> <i class="fa fa-copyright" aria-hidden="true"></i>
            <?php echo date('Y'); ?> Copyright All Rights Reserved
        </p>
        <ul>
            <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
            <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
            <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
            <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
        </ul>

    </footer>
</body>

</html>