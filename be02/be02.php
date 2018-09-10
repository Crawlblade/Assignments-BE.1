<?php
    $firstValue = $_GET['firstNumber'];
    $secondValue = $_GET['secondNumber'];
    $thirdValue = $_GET['thirdNumber'];
    $fourthValue = $_GET['fourthNumber'];
    $fifthValue = $_GET['fifthNumber'];
    $sixthValue = $_GET['sixthNumber'];
    $seventhValue = $_GET['seventhNumber'];
    $eighthValue = $_GET['eighthNumber'];
    $ninthValue = $_GET['ninthNumber'];
    $tenthValue = $_GET['tenthNumber'];

    $numbers = array($firstValue , $secondValue , $thirdValue , $fourthValue , $fifthValue , $sixthValue , $seventhValue , $eighthValue , $ninthValue , $tenthValue);
    echo '<h3>Assignment BE02, Kasper Kudsk</h3>';
    echo '<pre>';
    print_r($numbers);
    echo '</pre>';

    $highestValue = max ($numbers);
    $lowestValue = min ($numbers);
    echo '<p>The highest value of your entered numbers is:</p>';
    print_r($highestValue);
    echo '<p>The lowest value of your entered numbers is</p>';
    echo $lowestValue;
