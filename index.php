<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="drawing.css">
    <style>
    .cla {
        opacity: 0.4;
    }
    </style>


    <div class="process-heading cla">Not yet compatible with smart phones and tablets</div>
    <title>Homepage|Portfolio</title>
</head>

<body>
    <!-- <video autoplay muted loop id="vid">
        <source src="3D/bgvid.mp4" type="video/mp4">
      </video> -->
    <div>
        <div style="float:right; display: flex; padding:0px">

            <a href="https://github.com/stmblueprint" target="_blank" rel="noopener noreferrer"><img class="log"
                    src="images/github.png" width="30"></a>
            <a href="https://www.linkedin.com/in/aarontulloch/" target="_blank" rel="noopener noreferrer"><img
                    class="log" src="images/linkedin.png" width="30"></a>
            <a href="https://www.instagram.com/stmblueprint/" target="_blank" rel="noopener noreferrer"><img class="log"
                    src="images/insta.png" width="30"></a>
            <a href="https://discord.com/channels/@Zreb%E2%84%A2#0052" target="_blank" rel="noopener noreferrer"><img
                    class="log" src="images/discord.png" width="30"></a>
            <div>
                <!-- <a href="pw/resume.pdf" target="_blank" rel="noopener noreferrer"><img class="log" src="images/res.jpg" style="border-radius: 100%;" width="25"></a>  -->
                <!-- <div style="color: white;">Resume</div>      -->
            </div>

        </div>


        <div><img src="pw/me1.png" style="border-radius: 100%; filter:contrast(0.7)" width="90"></div>

        <header>



            <nav class="nav__format">
                <a href="index.html">
                    <h1 class="h1__heading">Aaron's Portfolio</h1>
                </a>
                <a href="about.html" name="about" value="write">About Me</a><br>
                <a href="Apps.html">Apps</a><br>
                <a href="developer.html">Logos</a><br>
                <a href="extras.html">2D 3D</a>
            </nav>
        </header>
    </div>
    <main>


        <section class="sliding">
            <div class="dj-slider">

                <a href="Apps.html">
                    <div class="dj-slide">

                        <div style="filter: contrast(30%);"><img src="pw/pwvideo1.gif" width="250" height="250" /></div>
                        <div
                            style="position: absolute; top: 50%; bottom: 50%; right:50%; font-family:sans-serif; color: rgb(255, 197, 177);">
                            APP'S</div>
                </a>
            </div>


            <a href="developer.html">
                <div class="dj-slide">
                    <div style="filter: contrast(30%);"><img src="pw/lum.png" width="250" height="250" /></div>
                    <div
                        style="position: absolute; top: 50%; bottom: 50%;  right: 50%; font-family:sans-serif; font: lighter; color: rgb(248, 212, 188);">
                        LOGO'S</div>
            </a>
            </div>

            <div class="dj-slide">
            </div>

            <div class="dj-slide">
            </div>

            </div>
        </section>



        </div>







    </main>

    <footer>
        <div>


            <?php
            
            $file = "portfoliovisitors.txt";
            $VList = file_get_contents($file); // visitor list. A list of vistors 
            $ip = $_SERVER["REMOTE_ADDR"];
            $vtime = $_SERVER["REQUEST_TIME"];
            $mydate = getdate($vtime);


            $newVisitor = $ip." ".$mydate["month"]."/".$mydate["mday"]."/".$mydate["year"]." ".
                        $mydate["hours"].":".$mydate["minutes"].":".$mydate["seconds"]."\n";
            file_put_contents($file, $newVisitor, FILE_APPEND | LOCK_EX); // specify file_append so the visitors dont get replaced.

            
            ?>




        </div>
    </footer>
</body>

</html>