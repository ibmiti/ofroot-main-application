<!DOCTYPE HTML>
<html>
	<head>
		<title>OFROOT</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href=" {{ asset('css/main.css') }}" />
		<noscript><link rel="stylesheet" href="{{asset('css/noscript.css')}}" /></noscript>
	</head>
	<body class="is-preload">
		<!-- Sidebar -->
        <section id="sidebar">
            <div class="inner">
                <nav>
                    <ul>
                        <li><a href="#intro">Welcome</a></li>
                        <li><a href="#one">Who we are</a></li>
                        <li><a href="#two">What we do</a></li>
                        <li><a href="#three">Get in touch</a></li>
                        <li><a href="#blog">Blog</a></li>
                        <li><a href="{{ url('online-booking/service-selection') }}">Book a Meeting</a></li>
                        <li><a href="{{ route('health') }}">Health Services</a></li>

                    </ul>
                </nav>
            </div>
        </section>

		<!-- Wrapper -->
        <div id="wrapper">
            <!-- Intro -->
                <section  style="background-color:white;" id="intro" class="wrapper fullscreen style1 fade-up">
                    <div class="inner">
                        <h1 style="color:black;"> OFROOT </h1>
                        <hr style="background-color:orange;" width="50%">
                        <h2 style="color:black;">Creating scalable technology for your business operations.</h2>
                        <p style="color:black;">we are your trusted partner for top-notch PHP and Laravel
                        application development services. With our expertise, innovation, and dedication,
                        we turn your ideas into exceptional digital experiences.
                        </p>
                        <ul class="actions">
                            <li><a href="#one" style="background-color:orange;" class="button scrolly">Learn more</a></li>
                        </ul>
                    </div>
                </section>

            <!-- One -->
            <section id="one" class="wrapper style1 spotlights">
                <section>
                    <!-- <a href="#" class="image"><img src="" alt="" data-position="center center" height="100%;" width="100%;" /></a> -->
                    <div class="content">
                        <div class="inner">
                            <h2>Our Capabilities</h2>
                            <p>We are passionate about delivering innovative solutions to fit your needs.</p>
                            <ul class="actions">
                                <li><a style="background-color:orange;" href="/capabilities" class="button">Learn more</a></li>
                            </ul>
                        </div>
                    </div>
                </section>
                <section>
                    <!-- <a href="#" class="image"><img src="" alt="" data-position="top center" height="100%;" width="100%;" /></a> -->
                    <div class="content">
                        <div class="inner">
                            <h2>Our Mission</h2>
                            <p>
                            Improving and preserving the human experience and taking care of our planet.

                            </p>
                            <ul class="actions">
                                <li><a style="background-color:orange;" href="/ourmission" class="button">Learn more</a></li>
                            </ul>
                        </div>
                    </div>
                </section>
                <section>
                    <!-- <a href="#" class="image"><img src="" alt="" data-position="25% 25%" -->
                    <!-- height="100%;" width="100%;"/></a> -->
                    <div class="content">
                        <div class="inner">
                            <h2>WHY WE ARE DIFFERENT</h2>
                            <p>We can create turn-key or completely custom applications for your business.</p>
                            <ul class="actions">
                                <li><a style="background-color:orange;" href="/whyWeAreDifferent" class="button">Learn more</a></li>
                            </ul>
                        </div>
                    </div>
                </section>
                <section>
                    <!-- <a href="#" class="image"><img src="" alt="" data-position="top center" height="100%;" width="100%;" /> </a> -->
                    <div class="content">
                        <div class="inner">
                            <h2>Our Promise</h2>
                            <p>
                            Building your web presence shouldn't be a hassle. Find out the OFROOT promise.
                            </p>
                            <ul class="actions">
                                <li><a style="background-color:orange;" href="/ourpromise" class="button">Learn more</a></li>
                            </ul>
                        </div>
                    </div>
                </section>
                <section>
                    <div class="content" id="blog">
                        <div class="inner">
                            <h2>Our Blog</h2>
                            <p>
                            Building your web presence shouldn't be a hassle. Find out the OFROOT promise.
                            </p>
                            <ul class="actions">
                                <li><a style="background-color:orange;"
                                href="https://substack.com/@ofroottech" class="button">
                                Read more</a></li>
                            </ul>
                        </div>
                    </div>
                </section>
            </section>

            <!-- Two -->
            <section id="two" class="wrapper style1 fade-up">
                <div class="inner">
                    <h2>WHAT WE DO</h2>
                    <p>Here's a bit of the DNA of our studio we are always adding technologies to our knowledge bank.</br>
                    If you don't see the tech you'd like to use in your project, no worries, we're tech stack agnostic. </br>
                    <strong>We Can Do it All!</strong>
                    </p>
                    <div class="features">
                        <section>
                            <span class="icon solid major fa-code"></span>
                            <h3>Laravel Development</h3>
                            <p>We're passionate about Laravel, the elegant PHP framework renowned for its impeccable syntax and robust feature set. Our Laravel development services are designed to empower your web applications with speed, efficiency, and scalability.</p>
                        </section>
                        <section>
                            <span class="icon solid major fa-lock"></span>
                            <h3>Business Strategy</h3>
                            <p>We understand your goals, challenges, and industry. Our solutions are tailored to align with your business objectives. </p>
                        </section>
                        <section>
                            <span class="icon solid major fa-cog"></span>
                            <h3>Web Development + Ecommerce</h3>
                            <p>We can help you build a landing page to bring more business or a full-stack application to sell products online to millions of users.</p>
                        </section>
                        <section>
                            <span class="icon solid major fa-desktop"></span>
                            <h3>CMS development </h3>
                            <p>giving you the power to control and manage your website's content effortlessly. If e-commerce is your focus, we excel in building PHP and Laravel-based e-commerce solutions. From online stores to shopping carts and seamless payment gateway integrations.</p>
                        </section>
                        <section>
                            <span class="icon solid major fa-link"></span>
                            <h3>API development</h3>
                            <p>Our Laravel API development services facilitate seamless integration with third-party applications and services, opening up new possibilities for your business.</p>
                        </section>
                        <section>
                            <span class="icon major fa-gem"></span>
                            <h3>Maintenance & Support</h3>
Our Laravel API development services facilitate seamless integration with third-party applications and services, opening up new possibilities for your business.</p>
                        </section>
                    </div>
                </div>
            </section>

            <!-- Three -->
            <section id="three" class="wrapper fade-up" style="background-color: white;">
                <div class="inner">
                    <h2 style="color:black;">Get in touch</h2>
                    <!--    <p style="color:black;">Feel free to reach out by providing the following links.</p> -->
                    <div class="split style1">

                    <section style="color:black;">
                        <ul class="contact">
                            <!-- <li>
                                <h3>Address</h3>
                                <span>We Work Remotely<br />
                                </span>
                            </li> -->
                            <li>
                                <h3>Email</h3>
                                <p style="color:black;">
                                    Send us a note: <br>
                                    <a href="mailto:ofroot.technology@gmail.com">
                                        ofroot.technology@gmail.com
                                    </a>
                                </p>
                            </li>
                            <!-- <li>
                                <h3>Phone</h3>
                                <span>Coming Soon</span>
                            </li> -->
                            <li>
                                <h3>Social</h3>
                                <!-- Facebook -->
                                <!-- <a class="fb-ic">
                                <i class="fab fa-facebook-f fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
                                </a> -->
                                <!-- Twitter -->
                                <a href="https://twitter.com/theBassinet" class="tw-ic">
                                <i class="fab fa-twitter fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
                                </a>
                                <!-- Linkedin -->
                                <!-- <a href="" class="li-ic">
                                <i class="fab fa-linkedin-in fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
                                </a> -->
                                <!--Instagram-->
                                <a href="https://www.instagram.com/babysbassinet/" class="ins-ic">
                                <i class="fab fa-instagram fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
                                </a>
                                <!--Pinterest-->
                                <a href="https://www.pinterest.com/Babys_Bassinet/" class="pin-ic">
                                <i class="fab fa-pinterest fa-lg white-text fa-2x mr-4"> </i>
                                </a>

                                <a href="https://twitter.com/OFROOTTweets?ref_src=twsrc%5Etfw"
                                    class="ml-3 twitter-follow-button"
                                    data-show-count="false">
                                    Follow @OFROOTTweets
                                </a>
                                <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                            </li>
                        </ul>
                    </section>
                </section>
                 <!-- Four - Newly added section -->
                <section style="padding-top: 6%; padding-bottom: 6%;" id="four" class="wrapper style2 fade-up">
                    <div class="inner">
                        <h2>Book A Meeting</h2>
                        <a href="{{ url('online-booking/service-selection') }}">Click here</a> to book a meeting.</p>
                    </div>
                </section>
                <section>
                <a class="twitter-timeline"
                href="https://twitter.com/OFROOTTweets?ref_src=twsrc%5Etfw">
                Tweets by OFROOTTweets</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                </section>
            <!-- <section>
                    <form method="post" action="#">
                        <div class="fields">
                            <div class="field half">
                                <label for="name">Name</label>
                                <input type="text" name="name" id="name" />
                            </div>
                            <div class="field half">
                                <label for="email">Email</label>
                                <input type="text" name="email" id="email" />
                            </div>
                            <div class="field">
                                <label for="message">Message</label>
                                <textarea name="message" id="message" rows="5"></textarea>
                            </div>
                        </div>
                        <ul class="actions">
                            <li><a href="" class="button submit">Send Message</a></li>
                        </ul>
                    </form>
                </section> -->

                      </div>
                  </div>
                </section>
        </div>
<!-- Footer -->
<x-footer/>
</body>
</html>
