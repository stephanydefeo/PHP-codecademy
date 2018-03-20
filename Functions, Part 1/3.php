<html>
    <p>
    <?php
    // Print out the position of a letter that is in
    // your own name
    strpos("stephany", "s");   
    strpos("stephany", "e");   
    strpos("stephany", "any"); 
    strpos("stephany", "abc"); 
    ?>
    </p>
    <p>
    <?php
    // Check for a false value of a letter that is not
    // in your own name and print out an error message
    if (strpos("stephany","x") === false) {
        print "Sorry, no 'x' in 'stephany'";
    }
    // prints the "Sorry" message
    ?>
    </p>
</html>