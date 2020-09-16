<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Trivia App</title>

</head>
<style>
  h4 {color:red;}
</style>
<body>

<div id="container">
	<h1>Play the Quiz!</h1>
    
    <form method="post" action="">
    <p>Who is the best cricketer in the world?</p>

    <input type="radio" name="quesid_2" value="Sachin Tendulkar"> Sachin Tendulkar <br>
    <input type="radio" name="quesid_2" value="Virat Kolli">  Virat Kolli <br>
    <input type="radio" name="quesid_2" value="Adam Gilchirst"> Adam Gilchirst <br>
    <input type="radio" name="quesid_2" value="Jacques Kallis"> Jacques Kallis <br>
    
    <br><h4><?php echo form_error('quesid_2');?></h4><br>
    <input type="submit" value="Submits">
    
    </form>
    
</div>

</body>
</html>