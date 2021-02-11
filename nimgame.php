<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nim Game</title>
</head>
<body>

<?php 
//check to see if there is input; 
//if not always use default start value=21 in ELSE;
if ($_SERVER["REQUEST_METHOD"]=="POST"){
//if submit button clicked, start below function
    if(isset($_POST["chooseSticks"])){

        //connect the VALUE of updateSticks hidden in form to this function
        //to keep track of number of sticks left in the pile        
        $updateSticks=intval($_POST["updateSticks"]);

        //define var to connect no of sticks chosen 
        //in form input to this value in the function
        $sticksTaken=($_POST["sticksTaken"]);
            //echo $sticksTaken;

        //counter to calculate sticks left after each turn
        $updateSticks-=$sticksTaken;

        //update no of sticks left
        $updateSticks=$sticksLeft;

        

}
}
else {
    //default value if no input;
$sticksLeft=21;
}

?>



<form>

<input type="number" name="chooseSticks" min="1" max="3"> 
<input type="submit" name="sticksTaken" value="Stick/s taken">
<input type="hidden" name="updateSticks" value="<?php echo $sticksLeft ?>">
    

</form>

</body>
</html>

