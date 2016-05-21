<html>
<head>
<title>Test</title>
</head>
<body>
<p>
<?php
  $dictionary = array(
    "test" => "The test works!"
  );
  $dictionary["adele"] = "When the pain cuts you deep, when the night " .
    "keeps you from sleeping, " .
    "just look and you will see, " .
    "I will be your remedy.";
  $dictionary["give_me_cat_image"] = "<img src=\"/map/images/random.jpg\" />";
  $query = $_GET["query"];
  if (array_key_exists($query, $dictionary)) {
    echo $dictionary[$query];
  }
  else {
    echo "Cannot find case " . $query . ".";
  }
?>
</p>
</body>
</html>
