<?php 
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.html");
    exit();
}
$username = $_SESSION['username'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="logo/ph-logo.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="main_style.css">
    <title>PinoyHub</title>
</head>
<body>
    
    <div id="pre-loader"></div>

    <header>

        <div class="headSide">

            <div class="title">
                <a href="main.php">
                    <h1 class="pinoy">Pinoy</h1>
                    <h1 class="hub">hub</h1>
                </a>
            </div>
            
            <div class="searchBar">
                <div class="input">
                    <input type="text" placeholder="Search" id="searchBar">
                </div>
                <i class="bi bi-search"></i>
            </div>

            <div class="profilePicture">
                <p>Welcome, <?php echo htmlspecialchars($username); ?>!</p>
                <img src="prof-pic/profile-picture.png" title="profile-picture Example">
            </div>
        </div>

        <div class="list">
            <div class="movieList">

                
                <div class="latestMovie">
                    <h4>Latest Movie</h4>
                    <li class="lmList">
                        <span>01</span>
                        <img src="movie picture/angpangarapkongholdap.jpg">
                        <button id="8">Ang Pangarap Kong Holdap</button>
                    </li>
                    <li class="lmList">
                        <span>02</span>
                        <img src="movie picture/clarita.jpg">
                        <button id="4">Clarita</button>
                    </li>
                    <li class="lmList">
                        <span>03</span>
                        <img src="movie picture/fivebreakupsandaromance.jpg">
                        <button id="5">Five Breakups and a Romance</button>
                    </li>
                </div>
                    

                <div class="recommended">
                    <h4>Recommended</h4>
                    <li class="lmList">
                        <span>01</span>
                        <img src="movie picture/Heneral Luna.jpg">
                        <button id="1">Heneral Luna</button>
                    </li>
                    <li class="lmList">
                        <span>02</span>
                        <img src="movie picture/Jose Rizal.jpg">
                        <button id="3">Jose Rizal</button>
                    </li>
                    <li class="lmList">
                        <span>03</span>
                        <img src="movie picture/Andres Boni.jpg">
                        <button id="2">Bonifacio: Ang Unang Pangulo</button>                    
                    </li>
                </div>
                    

                <div class="mostViewed">
                    <h4>Most Viewed</h4>
                    <li class="lmList">
                        <span>01</span>
                        <img src="movie picture/mangkepweng.jpg">
                        <button id="9">Mang Kepweng Returns</button>
                    </li>
                    <li class="lmList">
                        <span>02</span>
                        <img src="movie picture/myexandwhys.jpg">
                        <button id="6">My Ex and Whys</button>
                    </li>
                    <li class="lmList">
                        <span>03</span>
                        <img src="movie picture/ilovelizzy.jpg">
                        <button id="7">I Love Lizzy</button>     
                    </li>
                </div>
            </div>
            

            <div class="information">
                <h4 class="about"><a href="about.html"> About</a></h4>
                <h4 class="contact"><a href="contactUs.html"> Contact Us</a></h4>
                <h4 class="register"><a href="register.html">Register</a></h4>
                <h4 class="login"><a href="login.html">Login</a></h4>
                <h4 class="remark"><i class="bi bi-c-circle"></i> 2024 Pinoyhub RCC</h4>
            </div>
        </div>


        <div class="displayMovie">
            <li class="displayCard">
                <img src="movie picture/Heneral Luna.jpg" >
                <div class="about">
                    <span class="movieTitle">Heneral Luna</span>
                    <div class="spaceLine"></div>
                    <button id="1">Play</button>
                </div>
            </li>
            <li class="displayCard">
                <img src="movie picture/Andres Boni.jpg" >
                <div class="about">
                    <span class="movieTitle">Bonifacio: Ang Unang Pangulo</span>
                    <div class="spaceLine"></div>
                    <button id="2">Play</button>
                </div>
            </li>
            <li class="displayCard">
                <img src="movie picture/Jose Rizal.jpg" >
                <div class="about">
                    <span class="movieTitle">Jose Rizal</span>
                    <div class="spaceLine"></div>
                    <button id="3">Play</button>
                </div>
            </li>
            <li class="displayCard">
                <img src="movie picture/clarita.jpg" >
                <div class="about">
                    <span class="movieTitle">Clarita</span>
                    <div class="spaceLine"></div>
                    <button id="4">Play</button>
                </div>
            </li>
            <li class="displayCard">
                <img src="movie picture/fivebreakupsandaromance.jpg" >
                <div class="about">
                    <span class="movieTitle">Five Breakups And A Romance</span>
                    <div class="spaceLine"></div>
                    <button id="5">Play</button>
                </div>
            </li>
            <li class="displayCard">
                <img src="movie picture/myexandwhys.jpg" >
                <div class="about">
                    <span class="movieTitle">My Ex And Whys</span>
                    <div class="spaceLine"></div>
                    <button id="6">Play</button>
                </div>
            </li>
            <li class="displayCard">
                <img src="movie picture/ilovelizzy.jpg" >
                <div class="about">
                    <span class="movieTitle">I Love Lizzy</span>
                    <div class="spaceLine"></div>
                    <button id="7">Play</button>
                </div>
            </li>
            <li class="displayCard">
                <img src="movie picture/angpangarapkongholdap.jpg" >
                <div class="about">
                    <span class="movieTitle">Ang Pangarap Kong Holdap</span>
                    <div class="spaceLine"></div>
                    <button id="8">Play</button>
                </div>
            </li>
            <li class="displayCard">
                <img src="movie picture/mangkepweng.jpg" >
                <div class="about">
                    <span class="movieTitle">Mang Kepweng</span>
                    <div class="spaceLine"></div>
                    <button id="9">Play</button>
                </div>
            </li>
            <li class="displayCard">
                <img src="movie picture/dabestindawest2.jpg" >
                <div class="about">
                    <span class="movieTitle">Da Best In Da West 2</span>
                    <div class="spaceLine"></div>
                    <button id="10">Play</button>
                </div>
            </li>
        </div>
    </header>
    

    <script src="function.js"></script>
</body>
</html>