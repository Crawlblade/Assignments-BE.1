<?php
    $firstValue = $_GET['firstNumber'];
    $secondValue = $_GET['secondNumber'];
    $thirdValue = $_GET['thirdNumber'];
    $highestValue = max ( $firstValue , $secondValue , $thirdValue);
    print '<h3>Assignment BE01, Kasper Kudsk</h3>';
    print '<br>';
    print '<p>The highest value of your entered numbers is:</p>';
    print $highestValue;
    print '<br><p>Your numbers were:';
    print '<br>';
    print $firstValue . '<br>' . $secondValue . '<br>' . $thirdValue;
