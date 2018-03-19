<!DOCTYPE html>
<html>
    <head>
		<title>Your own do-while</title>
        <link type='text/css' rel='stylesheet' href='style.css'/>
	</head>
	<body>
    <?php
        do {
			echo "<p>The loop ran even though the loop condition is false.</p>";
		} while ($loopCond);
		
		
		echo "<p>Now the loop is done running.</p>";
		
    ?>
    </body>
</html>