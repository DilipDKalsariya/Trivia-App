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
    <p>What are the colors in the Indian national flag? Select all</p>

    <input type="checkbox" name="quesid[]" value="White"> White <br>
    <input type="checkbox" name="quesid[]" value="Yellow">  Yellow <br>
    <input type="checkbox" name="quesid[]" value="Orange"> Orange <br>
    <input type="checkbox" name="quesid[]" value="Green"> Green <br>
    
    <br> Select more than 1 <br>
    <h4><?php echo form_error('quesid[]');?></h4>
    <input type="submit" name="Next" value="Submit">
    
    </form>
    
</div>

</body>
</html>