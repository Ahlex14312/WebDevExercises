 
<?php
  $start_num = 1;
  $end_num = 10;
?>
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
  <title>Exercise Number 3</title>
</head>
<body>
<nav class="bg-dark pb-4">
        <h2 class="text-center text-danger pt-4">Division Table</h2>
    </nav>
<TABLE class="table">
<?php
$beginnum = 1;
$endnum = 10;
  print("<tr>");
  print("<th> </th>");
  for ($count_1 = $beginnum;$count_1 <= $endnum;$count_1++)
    print("<th>$count_1</th>");
  print("</tr>");

  for ($count_1 = $beginnum;$count_1 <= $endnum;$count_1++){
    print("<tr><th>$count_1</th>");
    for ($count_2 = $beginnum;$count_2 <= $endnum;$count_2++){
        $result = $count_1 / $count_2;
        printf("<td>%.3f</td>",
               $result);  
      }
    print("</tr>\n");
  }
?> 
</TABLE>
</BODY>
</HTML> 