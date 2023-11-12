<?php
session_start();
if (isset($_SESSION['usuario'])) {
?>
<header>
    <div class="nav-bar">
        <a href="#home" class="logo"><img src="../resources/images/LogoSF3.png" alt=""></a>
        <div class="navigation">
            <div class="nav-items">
                <div class="nav-close-btn"></div>
                <a href="inicio.php">Inicio</a>
                <a href="cortes.php">Cortes</a>
                <a href="#">AAAA</a>
                <a href="web-ia.php">IA</a>
            </div> 
        </div> 
        <div class="navigation2">
            <div class="nav-items2">
                <a href=".">Bienveindo: </a>
                <a class="button-signup" href="·"><?=$_SESSION['usuario']?></a>
            </div>
        </div>
        <div class="nav-menu-btn"></div>  
    </div>
</header>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<?php
} else {
    header("location: ../index.php");
}
?>