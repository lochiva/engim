<?php

?>

<!-- add new bet -->

<html>
<form method="POST" >
<input type="text" name="betName">
<input type="submit" value="new bet">

<input type="hidden" name="formName" value="create">
</form>

<ul>
<li>
<?php echo $_POST["betName"]; ?>
</li>
</ul>






</html>
