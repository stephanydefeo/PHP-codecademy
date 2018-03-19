<html>
  <head>
    <title>Modifying Elements</title>
  </head>
  <body>
    <p>
      <?php
        $languages = array("HTML/CSS",
        "JavaScript", "PHP", "Python", "Ruby");
        
        // Write the code to modify
        $languages[2] = "C++";
        // the $languages array!
        echo $languages[2];
      ?>
    </p>
  </body>
</html>