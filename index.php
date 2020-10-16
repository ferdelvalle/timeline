<?php
  function odd_even_class($id) {
    if($id % 2 !== 0){
      $class = "odd";
    } else {
      $class = "even";
    }
    return $class;
  }

  function first_even_or_odd_id($num) {
    if($num === 1){
      $id = 'id="first-odd"';
    } elseif($num === 2){
      $id = 'id="first-even"';
    } else {
      $id = "";
    }
    return $id;
  }

  function timeline_item($index, $text_title, $text_body, $text_image_src, $text_date){
    $card_id = first_even_or_odd_id($index);
    $odd_or_even = odd_even_class($index);
    return '
  <div ' . $card_id . 'class="card ' . $odd_or_even . '">
    <div class="card-border">
      <div class="card-date">
        <p class="card-date-text">' . $text_date . '</p>
      </div>
      <div class="card-text">
        <p class="card-text-title">' . $text_title . '</p>
        <p class="card-text-body">' . $text_body . '</p>
        <img src="' . $text_image_src . '" class="card-text-image">
      </div>
    </div>
    <div class="card-line-container">
      <div class="card-line">
        <div class="card-line-circle"></div>
      </div>
    </div>
  </div>
  ';
	}
	
	function timeline($timeline_data, $holiday_name){
    $timeline_title= strtoupper($holiday_name) . ' TIMELINE';
    echo '
    <p class="timeline-title">' . $timeline_title . '</p>
    <div class="main-container">
    ';
    for ($i = 0; $i <= 3; $i++){
      $item = timeline_item($timeline_data[$i][0], $timeline_data[$i][1], $timeline_data[$i][2], $timeline_data[$i][3], $timeline_data[$i][4]);
      echo $item;
    }
    echo '</div>' . "\n";
  }
  
  // PARÁMETROS DE MUESTRA

  $timeline_data = [
    [1, "President Obama declared a new day on September 11", "With Patriot Day, he also announced September 11 as National Day of Service and Remembrance.", "./assets/sample.png", "September 2020"],
    [2, "President Obama declared a new day on September 11", "With Patriot Day, he also announced September 11 as National Day of Service and Remembrance.", "./assets/sample.png", "September 2020"],
    [3, "President Obama declared a new day on September 11", "With Patriot Day, he also announced September 11 as National Day of Service and Remembrance.", "./assets/sample.png", "September 2020"],
    [4, "President Obama declared a new day on September 11", "With Patriot Day, he also announced September 11 as National Day of Service and Remembrance.", "./assets/sample.png", "September 2020"]
  ];
  
  $holiday_name = "Taco Day";

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./style.css">
  <title>Timeline</title>
</head>
<body>
  <?php timeline($timeline_data, $holiday_name) ?>
</body>
</html>
