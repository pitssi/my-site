<?php
require('dbconn.php');
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="shourcut icon" type="x-icon" href="./img/jpcd-logo.png" />
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

    <script src="./js/app.js"></script>
    <title>My Site | JPCD</title>
</head>

<body>


    <section id="header">
        <div class="header container">
            <div class="nav-bar">
                <div class="brand">
                    <a href="#hero">
                        <img src="./img/jpcd-logo.png" alt="JPCD">

                    </a>
                </div>
                <ul>

                    <div class="indicator"></div>
                </ul>
            </div>
        </div>
    </section>
    <!-- End Header -->


    <!-- Home Section  -->
    <section id="hero">
        <div class="hero container">
            <div>
                <span class="hi">Hi,</span><span class="iam">i am...</span>
                <br>
                <span class="name">John Peter Calimag Dulin.</span>
                <br>
                <span class="desc">I built things for the web,</span>
                <a href="#contact">
                    <span class="tagline">share with me.</span>
                </a>
            </div>
        </div>
    </section>


    <!-- Projects Section -->
    <section id="project">
        <div class="project-container">
            <div class="all-project">
                <span class="SomeThingsIveBuilt">Some Things I’ve Built</span>

                <!--Project 01-->
                <span class="project01-rp">Recent Project</span>
                <span class="project01-title">Quick Access Application</span>
                <span class="project01-desc">
                    <span>A mobile application to facilitate</span>
                    <br />
                    <span>and easy access the personal verification.</span>
                </span>
                <div class="project01-img-container">
                    <img src="./img/0001.png" alt="000111015" class="project01-image0001" />
                    <img src="./img/mobile-screen.png" alt="screen1" class="project01-mobile-screen1" />

                    <img src="./img/0002.png" alt="0002" class="project01-image0002" />
                    <img src="./img/mobile-screen.png" alt="screen2" class="project01-mobile-screen2" />
                </div>

                <div class="portfolio-btnviewproject1">
                    <li class="button-view-project1">
                        <a href="#Not Authorized">
                            <span class="view-project1-text">View Project</span>
                        </a>
                    </li>
                </div>


                <!--Project 02-->
                <span class="project02-rp">Recent Project</span>
                <span class="project02-title">E-Laptop Store</span>
                <span class="project02-description">
                    <span>It give flexibility and freedom.</span>
                    <br />
                    <span>No matter where you are, a online laptop</span>
                    <br />
                    <span>store allows you to bring your work with you.</span>
                </span>

                <img src="./img/three-dots.png" alt="threedots" class="treedots" />
                <img src="./img/laptop-icon.png" alt="laptopicon" class="laptopicon" />


                <div class="portfolio-btnviewproject">
                    <li class="button-view-project2">
                        <a href="https://three-dots.netlify.app/">
                            <span class="view-project2-text">View Project</span>
                        </a>
                    </li>
                </div>

            </div>
        </div>
    </section>

    <!-- Skills Section -->
    <section id="skills">
        <span class="SkillsIveGain">-  Skills I&apos;ve Gain  -</span>
        <span class="skills-desc">
            <span class="other-desc">Learning is continous and fun;</span><span> that's why I love exploring and
                trying new things. And that makes me a student forever. I spend my
                day after my class watching tech videos on youtube and do it on my
                favorite IDE.
            </span>


            <div class="skills-back">
                <div class="skillscont">
                    <div class="android-s">
                        <img src="./public/android-studio-icon.svg" alt="androidstudioicon" class="androidstudioicon" />
                        <span class="AS-text"><span>Android Studio</span></span>
                    </div>
                    <div class="vs-code">
                        <img src="./public/vscode-icon.svg" alt="vscodeicon" class="vscodeicon" />
                        <span class="VsCode-text"><span>VsCode</span></span>
                    </div>
                    <div class="visual-t">
                        <img src="./public/visualstudio-icon.svg" alt="visualstudio" class="visualstudioicon" />
                        <span class="VS-text"><span>Visual Studio</span></span>
                    </div>
                    <div class="j-query">
                        <img src="./public/jquery-icon.svg" alt="jqueryicon" class="jqueryicon" />
                        <span class="JQuery-text"><span>Jquery</span></span>
                    </div>
                    <div class="mysql">
                        <img src="./public/mysql-icon.svg" alt="mysqlicon" class="mysqlicon" />
                        <span class="MySql-text"><span>MySql</span></span>
                    </div>
                    <div class="python">
                        <img src="./public/python-icon.svg" alt="pythonicon" class="pythonicon" />
                        <span class="Python-text"><span>Python</span></span>
                    </div>
                    <div class="react">
                        <img src="./public/reactjs-icon.svg" alt="reactjsicon" class="reactjsicon" />
                        <span class="ReactJs-text"><span>React Js</span></span>
                    </div>
                    <div class="node">
                        <img src="./public/nodejs-icon.svg" alt="nodejsicon" class="nodejsicon" />
                        <span class="NodeJs-text"><span>Node Js</span></span>
                    </div>
                    <div class="c">
                        <img src="./public/c-icon.svg" alt="c#" class="c-icon" />
                        <span class="C-text"><span>C#</span></span>
                    </div>
                    <div class="c1">
                        <img src="./public/c2-icon.svg" alt="c++" class="c2icon" />
                        <span class="C2-text"><span>C++</span></span>
                    </div>
                    <div class="java">
                        <img src="./public/java-icon.svg" alt="javaicon" class="javaicon" />
                        <span class="Java-text"><span>Java</span></span>
                    </div>
                    <div class="js">
                        <img src="./public/javascript-icon.svg" alt="javascripticon" class="javascripticon" />
                        <span class="Javascript-text"><span>Javascript</span></span>
                    </div>
                    <div class="css">
                        <img src="./public/css3-icon.svg" alt="css3icon" class="css3icon" />
                        <span class="Css3-text"><span>Css3</span></span>
                    </div>
                    <div class="html">
                        <img src="./public/html-icon.svg" alt="htmlicon" class="htmlicon" />
                        <span class="html5-text"><span>Html5</span></span>
                    </div>
                </div>
            </div>
    </section>



    <section id="contact">
        <span class="Have-Something-On-Mind">Have something on mind ??</span>
        <span class="contact-desc">
            Please<span class="other-contact-desc"> share with me </span>johnpetercalimagdulin@yahoo.com
        </span>

        <div>
            <span class="object">“</span>
            <span class="contact-tagline">
                My inbox is always open. Whether you have a question or just want
                to say hi, I’ll try my best to get back to you!
            </span>


            <div class="containercontact">
                <form action="https://formsubmit.co/el/fakahu" method="POST">
                    <div class="form-row">
                        <div class="input-data">
                            <input type="text" required>
                            <div class="underline"></div>
                            <label for="">First Name</label>
                        </div>
                        <div class="input-data">
                            <input type="text" required>
                            <div class="underline"></div>
                            <label for="">Last Name</label>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="input-data">
                            <input type="text" required>
                            <div class="underline"></div>
                            <label for="">Email</label>
                        </div>

                    </div>
                    <div class="form-row">
                        <div class="input-data textarea">
                            <textarea rows="8" cols="80" required></textarea>
                            <br />
                            <div class="underline"></div>
                            <label for="">Message</label>
                            <br />

                            <div class="form-row submit-btn">
                                <div class="input-data">
                                    <div class="inner"></div>
                                    <input type="submit" value="send">
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>



    <!-- Footer -->
    <section id="footer">
        <div class="footer">
            <span class="copyright">Design & Built By <span class="myname">JPCD</span> | 2022</span>
            <br>
            <a>
                <span class="gitacc">https://github.com/pitssi</span>
            </a>
        </div>
    </section>
    <!--End Footer -->



</body>

</html>