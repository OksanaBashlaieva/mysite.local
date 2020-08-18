<html>
<head>
    <meta charset = "utf-8">
    <link href = "/style.css" rel = "stylesheet">
    <title>NIX Education</title>
</head>
<body>

<header>
    <nav >
    <div class = "nav_ f_nav">
        Hello, <b>NixEducation!</b><br><br>
       <a href="index.php?NumL=1">Урок 1 </a>  <a href="index.php?NumL=2"> Урок 2 </a>  <a href="index.php?NumL=3"> Урок 3 </a>
    </div>
    
    </nav>
    
</header>

<main style= "height: 70%; background-color: powderblue;">
   
<div class = "cont_l">
<?php
    include ("functions.php");
    $NumL = $_GET["NumL"];

    if ($NumL){ echo "Урок " . $NumL . "<br><br>";}

    switch ($NumL) {
        case 1:
            echo GetMultTable(0);    
        break;
        case 2:
            echo GetMultTable(1);    
        break;
        case 3:

        echo "<form action=\"index.php?NumL=3\" method=\"post\">
            <p>Введите строку:<br><br> <input type=\"text\" name=\"str_inp\" /></p>
            <p><input type=\"submit\" /></p>
            </form>";
            
            echo  "Результат: <i>" . ReversString(htmlspecialchars($_POST['str_inp'])) . "</i><br/>"; 
            
        break;
        default:
            echo "Online курс PHP <br><i>и базовые сведения о HTML, CSS, JavaScript</i>";
        break;
    }

    ?>
 </div>
  

</main>


<footer class = "foot_ f_nav">
Online курс PHP
    
</footer>
</body>
</html>