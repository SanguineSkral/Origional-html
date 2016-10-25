<!DOCTYPE html>
<html><head><title>if else</title>

<style>
.r1 { background-color: #f48a03;
		color: #000000;
	}

.r2 { background-color: #000;
		color: #f48a03;
	}
</style>
</head>
<body>
	<center>
<h1>
shots fiyerd by noble. 1995
<hr />
once upon a time their was an alien spaceship and it was going looking if it can see another spaceship. and then it saw another spaceship. and then POF! the spaceship got hit. then the spaceship fiyerd back then POW! the alien space ship got hit. then the alien spaceship got mad and then it fiyerd back and then CRACK! the spaceship got hit. and then the ship fiyerd agin and then ZAP! the ship got hit agin. and then the uther spaceship fiyerd then ZOOP! the alien ship got hit. and then the ship fiyerd agin and then SUBOOM! the alien ship got hit agin. then the alien ship fiyerd back and then SPLAT! the ship got hit. then the spaceship fiyerd back then THURP! the ship got hit. and then the alien ship fiyerd back and then SONICK BOOM! the ship got hit. and then the ship BLOOEN UP!!!!!!!!!!!!!!!!!!!!!!!!!!!* and then it saw a planet and it was jooputer. and it lived happily ever after.
<hr />
the end.
</h1>

<h1>
	<?php
$a = 'a';
$b = 'b';
$c = 'c';
echo "<h1>";
	for ($i = 0; $i < 1000; $i++){
		if($i % 2 == 0 ){
				echo"<div class=\"r1\">";
			}else{
			echo"<div class=\"r2\">";
		}
		
		echo "$a$b$c";
		echo "</div>";
		$a++;
	}
?>
</h1>
</center>
</body>
</html>
