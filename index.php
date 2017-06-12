<?php 

include_once('Tweet.php');
$instanceTweet = new Tweet();


$tweets= [["pseudo" => "Toto",
 "message" => "Salut C'EST UN TEST",
 "photo" => "/Images/jb.jpg",
 "date" => "14 Juin 2017",
 "retweet" => "2 retweets",
 "like" => "4 likes"],

 ["pseudo" => "tata",
 "message" => "Salut C'EST UN TEST",
 "photo" => "image.jpg",
 "date" => "14 Juin 2017",
 "retweet" => "2 retweets",
 "like" => "4 likes"],
 
 ["pseudo" => "titi",
 "message" => "Salut C'EST UN TEST",
 "photo" => "image.jpg",
 "date" => "14 Juin 2017",
 "retweet" => "2 retweets",
 "like" => "4 likes"]];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tweetie</title>

    <style>
    body {
        display: flex;
        flex-direction:row;
        justify-content: space-between;
    }

.timeline {
    width: 45%;
    height: 700px;
    background-color: #42adf4;
    border: 2px solid black;
    border-radius: 15px;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: space-between;

}

.tendance {
    width: 45%;
    height: 700px;
    border: 2px solid black;
    background-color:  #42adf4;
    border: 2px solid black;
    display: flex;
    flex-direction: column;
    border-radius: 15px;
    align-items: center;
    
}

.tweet {
    width: 80%;
    height: 150px;
    border: 2px solid black;
    background-color: white;
    
}

h1 {
    text-align: center;
}

h2 {
    text-align: center;
    font-size: 2em;
}
    </style>
</head>
<body>
<?php

echo '
    <section class="timeline">
    <h1> Timeline </h1>';
    
    foreach ($tweets as $value) {
        echo '<section class = "tweet">';
        echo '<h3 class = "pseudo">'.$value["pseudo"].'</h3>'; 
        echo '<p class= "message">'.$value["message"].'</p>'; 
       
        echo '</section>';
        }
         echo '</div>;
   
    </section>
    <section class="tendance">
    <h2> Most Popular </h2>
    <div class="tweet"> </div>
    </section>';
?>

</body>
</html>