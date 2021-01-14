<?php

$output = array('catalog' => array('song' =>  array(
                                              0 =>
                                              array(
                                              "title" => "I Want to Know What Love Is",
                                              "artist" => "Foreigner",
                                              "rating" => "10"
                                              ),
                                              1 =>
                                              array(
                                              "title" => "Tragedy",
                                              "artist" => "Bee Gees",
                                              "rating" => "6"
                                              ),
                                              2 =>
                                              array(
                                              "title" => "They Dance Alone",
                                              "artist" => "Sting",
                                              "rating" => "10"
                                              ),
                                              3 =>
                                              array(
                                              "title" => "Biko",
                                              "artist" => "Peter Gabriel",
                                              "rating" => "10"
                                              ),
                                              4 =>
                                              array(
                                              "title" => "Keep On Loving You",
                                              "artist" => "REO Speedwagon",
                                              "rating" => "9"
                                              ),
                                              5 =>
                                              array(
                                              "title" => "Sailing",
                                              "artist" => "Christopher Cross",
                                              "rating" => "9"
                                              ),
                                              6 =>
                                              array(
                                              "title" => "Beat It",
                                              "artist" => "Michael Jackson",
                                              "rating" => "7"
                                              )
                                              )
                                              ));

$response = json_encode($output);

echo($response);



 ?>
