<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="test_web_site.css">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Luckiest+Guy&display=swap" rel="stylesheet">
    
    
    
</head>
<body>
    <nav>
        <div class = menu>
            <?php include 'logo.inc.php'?>
        </div>

        <div class = menu>
            <?php include 'menu.inc.php'?>
        </div>
    </nav>
    <div class = content>
    	<h1 class="greetings">
        	<?php echo $greet ?>
    	</h1>
    	<div class="main_content">
        	<p class="left_side">
            	<?php
            	echo <<<EOT
		   	<img class="char_img" src="/img/Chris.webp"
                   	onmouseover="this.src='/img/MC.jpg';this.class='char_img'"
                   	onmouseout="this.src='/img/Chris.webp';">
EOT;
            	?>
        	</p>
        	<ol class="knowledge">
            	<li>
                	Меня зовут <?php echo $name ?>.<br>
                	Я из города <?php echo $city ?>. <br>
                	<br>
                	Мне <?php echo $age?>. <br>
                	<br>
                	Мы почти научились считать до цифры <?php echo $gameDigit ?> в своих играх:<br>
                	<?php printGameNumber($ice = 'Icewind Dale') ?>
                	<br>
                	<?php printGameNumber($fallout = 'Fallout') ?>
                	<s><?php echo $waitingForGame ?></s>.<br>
                	Чем-то мы похожи с моим другом Гейбом!<br>
                	Цифра <?php
                        	if ($good < $gameDigit && $gameDigit <$bad)
                            	echo $gameDigit;
                       	?>,
                	как всем известно, <s>хуже</s> больше чем <?php echo $good ?>, но намного <s>лучше</s> меньше чем <?php echo $bad ?>.
            	</li>
            	<li class="next_items">
                	Я хорош на 100%, посмотри все мои проекты у моего <a href="https://store.steampowered.com/">друга</a>.<br>
            	</li>
        	</ol>
    	</div>
    </div>
    <footer>
        <p class="footer_p_images">
                             <?php
			$list_of_games = [['img/f1.png','https://store.steampowered.com/app/38400/Fallout_A_Post_Nuclear_Role_Playing_Game/','10%'],
                                         ['img/f2.png','https://store.steampowered.com/app/38410/Fallout_2_A_Post_Nuclear_Role_Playing_Game/','10%'],
                                         ['img/fnv.png','https://store.steampowered.com/app/22380/Fallout_New_Vegas/','10%'],
				         ['img/ps.png','https://store.steampowered.com/app/466300/Planescape_Torment_Enhanced_Edition/','10%'],
                                         ['img/iwd.png','https://store.steampowered.com/app/321800/Icewind_Dale_Enhanced_Edition/?l=russian','10%'],
                                         ['img/iwd2.png','https://www.gog.com/ru/game/icewind_dale_2','10%'],
				         ['img/nw.png','https://store.steampowered.com/app/704450/Neverwinter_Nights_Enhanced_Edition/','10%'],
                                         ['img/pf.png','https://store.steampowered.com/app/640820/Pathfinder_Kingmaker__Enhanced_Plus_Edition/','20%'],
                                         ['img/vault.png','https://ru.wikipedia.org/wiki/Van_Buren','10%']];

				for ($i=0; $i<count($list_of_games); $i++) {
	                            echo "<a  href=\"{$list_of_games[$i][1]}\"><img class=\"footer_img\" style=\"max-width: {$list_of_games[$i][2]}\" src=\"{$list_of_games[$i][0]}\"></a>";
                             }

                             ?>
        </p>
        <p class="footer_p">Someone wanted to cancel Christopher Frederic Avellone.<br>
                            They will all be destroyed.<br>
                            And remember: <a href="https://www.youtube.com/watch?v=ZwqXsXu_xsk">war, war never changes.</a><br>

        </p>
    </footer>
</body>
</html>

