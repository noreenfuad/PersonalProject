<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>NIM Game</title>
</head>
<body>

<!--kolla om det finns användarinput-->
<?php




if($_SERVER["REQUEST_METHOD"]== "POST"){
  if (isset($_POST["sticksChosen"])) {
    $updateSticks = intval($_POST["updateSticks"]);
  
    $noOfSticks = $_POST["noOfSticks"];
    $updateSticks -= $noOfSticks;
    $sticksLeft=$updateSticks;
  }
} else {
  $sticksLeft=21;
}
?>

<!-- 
//if($_SERVER ["REQUEST_METHOD"]== "POST"){​​​​​​​
//deklarera start värde
 //if (isset($_POST["sticksChosen"])) {​​​​​​​
 //$updateSticks = intval($_POST["updateSticks"]);
 $sticksLeft=$updateSticks;
 
 //echo "test"; (to see if button works)
 
 //hämtar från formen no of sticks 1,2,3 
 //$noOfSticks = $_POST["noOfSticks"];
 $updateSticks = $updateSticks + $noOfSticks;
 
//echo $noOfSticks;
//}​​​​​​​
//}​​​​​​​ else {​​​​​​​
 //to set start value 21 and to reset no of sticks to 21 
$sticksLeft=21;
//}​​​​​​​
?> -->
<form action="" method="POST">
<input type="number" name="noOfSticks" min="1" max="3"> No of Sticks
<input type="submit" name="sticksChosen" id="sticksChosen" value="Sticks Chosen">
<input type="hidden" name="updateSticks" id="updateSticks" value="<?php echo $sticksLeft; ?>"> 

</form>
<h3>   
<?php echo $sticksLeft; ?>
</h3>
</body>
</html>


