
<?php

$characters = ['Paul', 'Mark', 'Jane'];
    for ($i = 0; $i < count($characters); $i++) {
        echo $i . ' is the key and ' . $characters[$i] . ' is the value in the $characters array <br/>';
    }


    $schools = [
        'Drexel University' => [
            'type' => 'University',
            'url'  => 'https://drexel.edu'
        ],
        'Temple University'  => [
            'type' => 'University',
            'url'  => 'https://www.temple.edu/'
        ],
        'University of Pennsylvania' => [
            'type' => 'University',
            'url'  => 'https://www.upenn.edu/'
        ],
      ];
    foreach ($schools as $key => $school) {
        echo '<p>' . $key . ' is a ' . $school['type'] . ' and the website is ' . $school['url'] . ' </p>';
    }
?>
