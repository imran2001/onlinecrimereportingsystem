<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="../../scss/style.css">
    <link rel="stylesheet" href="../../awesome_font/font-awesome.min.css">
    <link rel="stylesheet" href="../../scss/initial_pages_scss/_login.scss">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Step2</title>
    <link
      rel="icon"
      href="../../img/icon.jfif"
      type="image/icon type"
    />
</head>

<body>
    <header>
        <nav>
            <a href="../../index.php">
                <section class="logo">
                    <img src="../../img/icon.jfif" alt="police logo">
                </section>
            </a>
            <ul>
                <a href="../../index.php">
                    <li>Home</li>
                </a>
                <a href="../login.php">
                    <li>Login</li>
                </a>
                <a href="./register1.php">
                    <li>Register</li>
                </a>
                <a href="../about.php">
                    <li>About</li>
                </a>
                <a href="../emergency.php">
                    <li>Emergency numbers</li>
                </a>
            </ul>
        </nav>
    </header>
    <div class="page_body">

        <div class="register_box">
            <div class="register_sidebar">
                <section class="steps_section">
                    <h2>Step 1</h2>
                    <h2>Step 2</h2>
                    <h2 class="active_step">Step 3</h2>
                </section>
                    <p class="reg_signup_link">Have an account already? <a href="">Login</p></a>
                
            </div>
            

            <!-- <form class="register_form" action="..processor.php" method="POST"> -->
            <form class="register1_form">
                <div class="heading_label">
                    <h2>SIGN UP</h2>
                </div>

                <div class="user_text">
                    <p>Upload a passport photo of yourself</p>
                </div>

                <div class="insider">
                    <label for="photo">Photo</label>
                    <input type="file" name="photo" />
                </div>

                <div class="direct_container">
                    <a href="./register2.php"><div class="step2_button">Previous</div></a>

                    <a href="../login.php"><div   class="step2_button">Next</div></a>
                </div>
            </form>

        </div>
    </div>
    <footer>
        <section class="sitemap">
            <h2>Site Map</h2>
            <ul>
                <a href="../../index.php">
                    <li>Home</li>
                </a>
                <a href="../login.php">
                    <li>Login</li>
                </a>
                <a href="./register1.php">
                    <li>Register</li>
                </a>
                <a href="../about.php">
                    <li>About</li>
                </a>
                <a href="../emergency.php">
                    <li>Emergency numbers</li>
                </a>
            </ul>
        </section>
        <section class="social">
            <h2>Follow Us On:</h2>

            <a href="https://www.facebook.com/IPSAssociation/">
                <div class="link_item"><i class="fa fa-facebook" aria-hidden="true"></i>
                    <p> : facebook</p>
                </div>
            </a>
            <a href="https://twitter.com/IPF_ORG">
                <div class="link_item"><i class="fa fa-twitter" aria-hidden="true"></i>
                    <p>: twitter</p>
                </div>
            </a>
            <a href="https://www.instagram.com/ips_national_service_/">
                <div class="link_item"><i class="fa fa-instagram" aria-hidden="true"></i>
                    <p> : instagram</p>
                </div>
            </a>
            <a href="hhttps://www.youtube.com/watch?v=7aTvu92k8gQ">
                <div class="link_item"><i class="fa fa-youtube" aria-hidden="true"></i>
                    <p> : youtube</p>
                </div>
            </a>
        </section>
        <section class="footer_map">
            <h2>Locate Us</h2>
            <iframe src="https://www.google.com/maps/embed?pb==!4m9!1m2!2m1!1sIndian+Police+Headquarters!3m5!1s0x3bd4c0f935b6e891:0x9de22ccde11201ca!8m2!3d21.1611608!4d79.0685542!15sChpJbmRpYW4gUG9saWNlIEhlYWRxdWFydGVyc5IBEGNvcnBvcmF0ZV9vZmZpY2XgAQA"></iframe>
        </section>
    </footer>
</body>

</html>