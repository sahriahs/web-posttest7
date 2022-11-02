<?php
    session_start();  
    if(!isset($_SESSION["userlogin"])){
        header("Location: login.php");
        exit;
    }  
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" contentt="IE=edge">
    <meta name="viewport" contentt="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="indexStyle.css"/>
    <title>Digital Podcast</title>
</head>
<body>
    <!-- <script>alert('Welcome to Digital Podcast')</script> -->
    <nav>
        <div class="logo">
            <a href="main.php">
                <!-- <div id="logo"><img src="image/digipod_logo.png" width="45px"></div> -->
                <div class="logo_name">Digital Podcast</div>
            </a>
        </div>

        <ul>
            <li><a href="main.php">Beranda</a></li>
            <li><a href="#media-patner" id="mdpt">Media Patner</a></li>
            <li><a href="#content-3">Tentang Saya</a></li>
        </ul>

        <img src="image/mode-light.png" id="icon"></img>

        <div class="registrasi">
            <div class="login">
                <a href="login.php">Masuk</a>
             </div>
            <div class="register">
                <a href="registration.php">Daftar</a>
            </div>
        </div>
    </nav>
    
    <div class="break"></div>

    <div class="content-1">
        <div class="content-1-1">DENGARKAN PODCAST DIMANAPUN & KAPANPUN</div>
        <div class="content-1-2">Mulai mendengarkan episode-episode seru secara <b>gratis</b>.</div>
        <div class="content-1-3">Dengarkan Sekarang</div>
    </div>

    <div class="break"></div>

    <div class="content-2">
        <div class="content-2-1">Pilih dan dengarkan <br> Sesuaikan dengan suasana hatimu</div>
        <div class="content-2-2"><img src="image/podcast-1.jpg" alt=""></div>
    </div>

    <div class="media-patner" id="media-patner">
        <div class="media-patner-1"><a href="www.noice.id"><img src="https://www.noice.id/wp-content/themes/zerif-lite/images/logo.svg" alt="noice logo"></a></div>
        <div class="media-patner-2"><a href="https://anchor.fm/"><img src="image/anchor logo.jfif" alt=""></a></div>
    </div>

    <div class="content-3" id="content-3">
        <div class="content-3-1">
            <div class="content-3-1-1">Hi there!</div>
            <div class="content-3-1-2">I am <b>Sahriah</b></div>
            <div class="content-3-1-3">I am a student majoring in Informatics</div>
            <div class="content-3-1-4">at the University of Mulawarman</div>
            <div class="content-3-1-5">
                You can connect with me via
                <b><a onclick="alert('Apakah Anda yakin?')" href="https://www.instagram.com/sas.shr/">Instagram</a></b>
            </div>
        </div>
        <div class="content-3-2"><img src="image/profil.jpg" alt=""></div>
    </div>

    <div class="break"></div>
    
    <footer>Sahriah Informatika B2 2021</footer>

    <script>
        // darkmode - lightmode
        var icon = document.getElementById("icon");
        icon.onclick = function(){
            document.body.classList.toggle('light-mode');
            if (document.body.classList.contains('light-mode')){
                icon.scr="image/mode-light.png";
            } else{
                icon.scr="image/mode-dark.png";
            }
        };
        const register= document.getElementClassName("#register");
        register.style.property.color = 'rgb(4, 198, 252)';

        const mdpt = document.getElementById('mdpt');
        mdpt.addEventListener("click", function showInfo(){
            const x = document.getElementById('content-3');
            if (x.style.display == 'none'){
                x.style.display = 'block';
            } else{
                x.style.display = 'none'
            }
        });
    </script>
</body>
</html>