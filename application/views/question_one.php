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
    <p>What is your name ?</p>
    
    <input type="text" name="quesid_1" ><br>
    <br><h4><?php echo form_error('quesid_1');?></h4><br>
    <input type="submit" value="Submit">
    
    </form>
    
</div>

</body>
</html>