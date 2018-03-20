<html>
  <p>
    <?php
    $myName = "Stephany";
    // Get a partial string from within your own name
    // and print it to the screen!
    $partial = substr($myName, 0, 3);
    print $partial;
    ?>
  </p>
  <p>
    <?php
    // Make your name upper case and print it to the screen:
    $uppercase = strtoupper($myName);
    print $uppercase;
    ?>
  </p>
  <p>
    <?php
    // Make your name lower case and print it to the screen:
    $lowercase = strtolower($uppercase);
    print $lowercase;
    ?>
  </p>
</html>