<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
    <title>Exercise Number 1</title>
</head>
<body>
<nav class="bg-dark pb-4">
        <h2 class="text-center text-white pt-4">Looping Data
</h2>
    </nav>
    <?php
    $JSONdata = 
        '[
            {
            "name" : "John Garg",
            "age"  : "15",
            "school" : "Ahlcon Public school"
            },
            {
            "name" : "Smith Soy",
            "age"  : "16",
            "school" : "St. Marie school"
            },
            {
            "name" : "Charle Rena",
            "age"  : "16",
            "school" : "St. Columba school"
            }
        ]';

  $data1 = json_decode($JSONdata, true);
  foreach ($data1 as $key => $value) {
    echo $value["name"] . ", " . $value["age"]. ", " . $value["school"] . "<br>";
  }
    ?>
</body>
</html>