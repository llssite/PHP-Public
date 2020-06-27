<?php

// Create an array to store the image location and the date range to show.
$image_array = array(
    // New Year's Day
    array(
        "image" => "bin/assets/img/image1.png",
        "start" => "12-31", // MM-DD
        "end" => "01-01" // MM-DD
    ),
    // Independence Day
    array(
        "image" => "bin/assets/img/image2.png",
        "start" => "07-04", // MM-DD
        "end" => "07-04" // MM-DD
    ),
    // Veteran's Day
    array(
        "image" => "bin/assets/img/image3.png",
        "start" => "11-14", // MM-DD
        "end" => "11-14" // MM-DD
    )
);

// Foreach statement that will display the images based on their start and end date.
foreach($image_array as $image) {
  if(date("m-d") >= $image["start"] && date("m-d") <= $image["end"]) {
    echo "<img src='" . $image['image'] . "'>";
  }
}

/*
 * ---------------------------------------------------------------------------------------
 */

// Want to add the year for multi year image placement?
// Create an array to store the image location and the date range to show.
$image_array = array(
    // New Year's Day
    array(
        "image" => "bin/assets/img/image1.png",
        "start" => "12-31-2019", // MM-DD-YYYY
        "end" => "01-01-2020" // MM-DD-YYYY
    ),
    // Independence Day 2020
    array(
        "image" => "bin/assets/img/image2-2020.png",
        "start" => "07-04-2020", // MM-DD-YYYY
        "end" => "07-04-2020" // MM-DD-YYYY
    ),
    // Independence Day 2021
    array(
        "image" => "bin/assets/img/image2-2021.png",
        "start" => "07-04-2021", // MM-DD-YYYY
        "end" => "07-04-2021" // MM-DD-YYYY
    ),
    // Veteran's Day 2020
    array(
        "image" => "bin/assets/img/image3.png",
        "start" => "11-14-2020", // MM-DD-YYYY
        "end" => "11-14-2020" // MM-DD-YYYY
    )
);

// Foreach statement that will display the images based on their start and end date.
foreach($image_array as $image) {
  if(date("m-d-Y") >= $image["start"] && date("m-d-Y") <= $image["end"]) {
    echo "<img src='" . $image['image'] . "'>";
  }
}

?>
