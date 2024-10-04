<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "//www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta name="version" content="1.0">
    <meta name="applicable-device" content="pc,mobile">
    <meta name="keywords" content="Hassan, hassan, portfolio, Portfolio, Programming">
    <meta name="description" content="Good morning !! I'm Hassan, a hob, by programmer. This portfolio collects my most recent projects and my skills. Check out my work and contact me if you want to collaborate.">
    <meta name="author" content="Hassan">
    <meta property="og:url" content="#">
    <meta name="og:description" content="Good morning !! I'm Hassan, a hob, by programmer. This portfolio collects my most recent projects and my skills. Check out my work and contact me if you want to collaborate.">
    <meta property="og:locale" content="it_IT">
    <meta property="og:type" content="website, app">
    <link rel="dns-prefetch" href="https://cdnjs.cloudflare.com/">
    <link rel="canonical" href="#">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta http-equiv="Content-Language" content="en" />
    <meta name="apple-mobile-web-app-status-bar" content="#202125">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.11/typed.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
    <link rel="stylesheet" href="
        <?php 
            $token = bin2hex(random_bytes(16));
            $baseUrl = 'Home/style.css' . '?token=' . $token;
            echo $baseUrl;
        ?>
    ">
    <link rel="icon" type="image/x-icon" href="
        <?php 
            $token = bin2hex(random_bytes(16));
            $baseUrl = 'Signup/Logo_Black.ico' . '?token=' . $token;
            echo $baseUrl;
        ?>
    ">
    <title>portfolio</title>
</head>
<body>
    <div class="page">
        <div class="bg"></div>
        <div class="bg bg2"></div>
        <div class="bg bg3"></div>
        <div class="scroll-up-btn">
            <i class="fas fa-angle-up"></i>
        </div>
        <nav class="navbar">
            <div class="width">
                <div class="logo">
                    <a href="#">
                        <img src="
                        <?php 
                            $token = bin2hex(random_bytes(16));
                            $baseUrl = 'Signup/Logo.png' . '?token=' . $token;
                            echo $baseUrl;
                        ?>
                        " alt="Logo" style="width: 60px;" id="Logo_W">
                        <img src="
                        <?php 
                            $token = bin2hex(random_bytes(16));
                            $baseUrl = 'Signup/Logo_Black.png' . '?token=' . $token;
                            echo $baseUrl;
                        ?>
                        " alt="Logo" style="width: 60px;" id="Logo_B">
                    </a>
                </div>
                <ul class="menu">
                    <li>
                        <a href='#home'>Home</a>
                    </li>
                    <li>
                        <a href='#about'>About</a>
                    </li>
                    <li>
                        <a href='#services'>Services</a>
                    </li>
                    <li>
                        <a href='#skills'>Skills</a>
                    </li>
                    <li>
                        <a href='#contact'>Contact</a>
                    </li>
                </ul>
                <div class="menu-btn">
                    <i class="fas fa-bars"></i>
                </div>
            </div>
        </nav>
        <section class="home" id="home">
            <div class="width">
                <div class="home-content">
                    <div class="text-1">My name is</div>
                    <div class="text-2">Hassan</div>
                    <div class="text-3">And I'm a <span class="typing"></span></div>
                    <a href="https://www.linkedin.com/in/hassan-allam-3112ba297?utm_source=share&ytm_campaign=share_via&utm_content=profile&utm_medium=android_app">Hire Me</a>
                </div>
            </div>
        </section>
        <section class="about" id="about">
            <div class="width">
                <h2 class="title">About me</h2>
                <div class="about-content">
                    <div class="column left">
                        <img src="https://careertraining.utep.edu/common/images/1/16894/game-designer-video-game-developer.webp" alt="Game Design Image">
                    </div>
                    <div class="column right">
                        <div class="text">I'm Hassan and I'm a <span class="typing-2"></span></div>
                        <p>Hi, I am a programmer and a passionate web developer with experience in the front-end and are still in the bases on the development of the back-end. I specialize in the creation of visually captivating and functional websites. Let's give life to your ideas!</p>
                        <a href= "
                          <?php
                            $token = bin2hex(random_bytes(16));
                            $baseUrl = '#' . '?token=' . $token;
                            echo $baseUrl;
                          ?>
                        ">Read More</a>
                    </div>
                </div>
            </div>
        </section>
        <section class="services" id="services">
            <div class="width">
                <h2 class="title">My Services</h2>
                <div class="serv-content">
                    <div class="card">
                        <div class="box">
                            <i class="fas fa-paint-brush"></i>
                            <div class="text">Photo Editor</div>
                            <p>With a careful eye to aesthetics and a profound understanding of the design principles centered on the user, I have a talent to create and edit photos and make them visually stunning and intuitive that captures users.</p>
                        </div>
                    </div>
                    <div class="card">
                        <div class="box">
                            <i class="fas fa-gamepad"></i>
                            <div class="text">Games Design</div>
                            <p>Drawing from my passion for gaming and extensive knowledge of game design principles, I specialize in creating immersive and engaging gameplay experiences that blend captivating storytelling, intuitive mechanics, and stunning visuals, bringing virtual worlds to life.</p>
                        </div>
                    </div>
                    <a href="
                        <?php
                            $token = bin2hex(random_bytes(16));
                            $baseUrl = '#' . '?token=' . $token;
                            echo $baseUrl;
                        ?>
                    " class="card">
                        <div class="box">
                            <i class="fas fa-code"></i>
                            <div class="text">Web Development</div>
                            <p>With a solid base in web development technologies and a talent for solving problems. From front-end design to back-end function, the best practices in HTML, CSS, Javascript and PHP to offer User experiences without continuity and solid web applications.</p>
                        </div>
                    </a>
                </div>
            </div>
        </section>
        <section class="skills" id="skills">
            <div class="width">
                <h2 class="title">My Skills</h2>
                <div class="skills-content">
                    <div class="column left">
                        <div class="text">My creative skills & experiences:</div>
                        <p>As a creative web developer, I bring a unique mixture of technical skills and artistic talent in the world of web development. With years of experience in the sector, I have created many online experiences and attractive projects.</p>
                    </div>
                    <div class="column right">
                        <div class="bars">
                            <div class="info">
                                <span>HTML</span>
                                <span>90%</span>
                            </div>
                            <div class="line html"></div>
                        </div>
                        <div class="bars">
                            <div class="info">
                                <span>CSS</span>
                                <span>60%</span>
                            </div>
                            <div class="line css"></div>
                        </div>
                        <div class="bars">
                            <div class="info">
                                <span>JavaScript</span>
                                <span>70%</span>
                            </div>
                            <div class="line js"></div>
                        </div>
                        <div class="bars">
                            <div class="info">
                                <span>PHP</span>
                                <span>30%</span>
                            </div>
                            <div class="line php"></div>
                        </div>
                        <div class="bars">
                            <div class="info">
                                <span>MySQL</span>
                                <span>20%</span>
                            </div>
                            <div class="line mysql"></div>
                        </div>
                        <div class="bars">
                            <div class="info">
                                <span>Python</span>
                                <span>20%</span>
                            </div>
                            <div class="line python"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="contact" id="contact">
            <div class="width">
                <h2 class="title">Contact me</h2>
                <div class="contact-content">
                    <div class="column left">
                        <div class="text">Get in Touch</div>
                        <p>Feel free to reach out using the contact form below or connect with me on social media. I'll get back to you as soon as possible. Let's create something amazing together!</p>
                        <div class="icons">
                            <div class="row">
                                <i class="fas fa-user"></i>
                                <div class="info">
                                    <div class="head">Name</div>
                                    <div class="sub-title"><strong>Hassan</strong></div>
                                </div>
                            </div>
                            <div class="row">
                                <i class="fas fa-envelope"></i>
                                <div class="info">
                                    <div class="head">Email</div>
                                    <div class="sub-title"><a href="mailto:allamhassan684@gmail.com">allamhassan684@gmail.com</a></div>
                                </div>
                            </div>
                            <div class="row">
                                <i class="fab fa-facebook"></i>
                                <div class="info">
                                    <div class="head">
                                        <a style="color:#fff" href="https://m.facebook.com/codinglab.2024">Facebook</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> 
                    <div class="column right">
                        <div class="text">Message Me</div>
                        <form action="https://formsubmit.co/bc816f0f358c5cf0976d0b39bce0412d" method="post">
                            <div class="fields">
                                <div class="field">
                                    <input type="text" name="subject" placeholder="Subject . . ." required>
                                </div>
                                <div class="field name">
                                    <input type="text" name="name" placeholder="Name . . ." class="name" required>
                                </div>   
                                <div class="field email">
                                    <input type="email" name="email" placeholder="Email . . ." required>
                                </div>
                            </div>
                            <div class="field textarea">
                                <textarea cols="30" rows="10" name="message" placeholder="Message . . ." required></textarea>
                            </div>
                            <div class="button-area">
                                <button type="submit">Send message</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <div class="google_tr">
            <div id="google_translate_element"></div>
        </div>
        <footer>
            <span>Copyright © 
                <script>
                    document.write(new Date().getFullYear());
                </script> All rights reserved By <span> </span><i class="fa fa-heart"></i><span> </span>
                <strong>
                    <a href="
                        <?php 
                            $token = bin2hex(random_bytes(16));
                            $baseUrl = 'donate' . '?id=' . $id . '?token=' . $token;
                            echo $baseUrl;
                        ?>
                    ">Hassan</a>
                </strong>
            </span>
        </footer>
    </div>
    <script src="
        <?php 
            $token = bin2hex(random_bytes(16));
            $baseUrl = 'Home/script.js' . '?token=' . $token;
            echo $baseUrl;
        ?>
    " crossorigin="anonymous"></script>
    <script src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>
</body>
</html>
