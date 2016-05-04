<?php
$mail = "Voznesenskyy@gmail.com";
$phone_number="+38 050 372 62 50";
$skype="serega.voznesenskyy";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>RESUME</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<header> РЕЗЮМЕ
</header>
<main>
    <div class="logo">
        <img src="img/logo.jpg" alt="photo" width="250" height="250">
    </div>
    <div class="contacts">
        <h1>
    <?php
		$name="Сергей";
$surname="Вознесенский";
		echo "$name $surname";
?>
            </br>
        </h1>
        <h2>Студент курсов PHP Academy </br></h2>
        <h3>Мои контакти: </br></h3>
        <ul type="none">
            <li><a href="http://vk.com/id33904794" target="_blank"><img src="img/vk.png" alt="photo" width="20" height="20"></a> Я В Контакте </br></li></br>
            <li><a href="https://www.facebook.com/dereek.voznes" target="_blank"><img src="img/fb.png" alt="photo" width="20" height="20"></a> Я В Фейсбуке</li></br>
            <li> <img src="img/Gmail.png" alt="photo" width="20" height="20"> Мой e-mail:<?php echo $mail;?> </li></br>
            <li> <img src="img/Phone.ico" alt="photo" width="20" height="20"> Мой номер тел.: <?php echo $phone_number;?></li></br>
            <li> <img src="img/Skype.png" alt="photo" width="20" height="20"> Мой skype: <?php echo $skype;?></li></br>
        </ul>
    </div>
    <div class="lang"><h1>ИЗУЧАЮ ЯЗЫКИ:</h1>
    </div>
    <div class="programs">
	<div class="programs">
        <ul type="none">
            <li> <img src="img/file1336753392.png" alt="photo" width="20" height="20"> HTML; <br/></li>
            <li> <img src="img/css-3-icon.png" alt="photo" width="20" height="20">  CSS; <br/></li>
            <li> <img src="img/php.png"  alt="photo" width="20" height="20"> PHP; <br/></li>
            <li> <img src="img/java.png"  alt="photo" width="20" height="20"> JAVA; <br/></li>
            <li> <img src="img/MySQL.jpg" alt="photo" width="20" height="20"> MySQL; <br/></li>
            <li> <img src="img/500_68.gif" alt="photo" width="20" height="20"> MQL4; <br/></li>

        </ul>
    </div>
    <div class="oput"> <h1>ОПЫТ РАБОТЫ:</h1> </div>
    <div class="company">
        <ul type="none">
            <li> <img src="img/galka.png"alt="photo" width="20" height="20">SweedBank - експерт по оценке залогового имущества - работал с 2008 по 2009 год;</li><br/>
            <li> <img src="img/galka.png"alt="photo" width="20" height="20">ТзОВ "Радехівський цукровий завод" - диспечер - работал с 2009 по 2011 год;</li><br/>
            <li> <img src="img/galka.png"alt="photo" width="20" height="20">ПП "Західний Буг" - старший менеджер отдела закупки запчастей к с/г техныке - с 2011 года.</li><br/>
        </ul>
    </div>
</main>
</body>
</html>