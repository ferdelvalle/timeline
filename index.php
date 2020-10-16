<?php
  function odd_even_class($id) {
    if($id % 2 !== 0){
      $class = "odd";
    } else {
      $class = "even";
    }
    return $class;
  }

  function first_even_id($num) {
    if($num === 2){
      $id = 'id="first-even"';
    } else {
      $id = "";
    }
    return $id;
  }

  function timeline_item($index, $text_title, $text_body, $text_image_src, $text_date){
    $card_id = first_even_id($index);
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
	
	function timeline($timeline_data){
    echo '<div class="main-container">' . "\n";
    for ($i = 0; $i <= 3; $i++){
			$index = $timeline_data[$i][0];
			$text_title = $timeline_data[$i][1];
			$text_body = $timeline_data[$i][2];
			$text_image_src = $timeline_data[$i][3];
			$text_date = $timeline_data[$i][4];
      $item = timeline_item($index, $text_title, $text_body, $text_image_src, $text_date);
      echo $item;
    }
    echo '</div>' . "\n";
	}

  $timeline_data = [
    [1, "President Obama declared a new day on September 11", "With Patriot Day, he also announced September 11 as National Day of Service and Remembrance.", "./assets/sample.png", "September 2020"],
    [2, "President Obama declared a new day on September 11", "With Patriot Day, he also announced September 11 as National Day of Service and Remembrance.", "./assets/sample.png", "September 2020"],
    [3, "President Obama declared a new day on September 11", "With Patriot Day, he also announced September 11 as National Day of Service and Remembrance.", "./assets/sample.png", "September 2020"],
    [4, "President Obama declared a new day on September 11", "With Patriot Day, he also announced September 11 as National Day of Service and Remembrance.", "./assets/sample.png", "September 2020"]
	];

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
  <?php timeline($timeline_data) ?>
</body>
</html>
