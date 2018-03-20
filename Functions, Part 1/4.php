<html>
    <p>
    <?php
    // Try rounding a floating point number to an integer
    // and print it to the screen
    // Round pi down from 3.1416...
    $round = round(M_PI);
    print $round;  // prints 3
    ?>
    </p>
    <p>
    <?php
    // try rounding a floating point number to 3 decimal places
    // and print it to the screen
    $round_decimal = round(M_PI, 3);
    print $round_decimal; // prints 3.1416
    ?>
    </p>
</html>