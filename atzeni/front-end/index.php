<?php 
	include "newSession.php";

	
/*	$_SESSION["scommesse"] = $_POST["name"];
	echo $_SESSION["scommesse"];
	*/
	
	
	
	if (!isset($_SESSION["scommesse"]) || ($_SESSION["scommesse"])=="" ) {
		header('location: login.php');
	}
	
	
	
	
	
?>

<doctype html>
<html>
  <head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

  </head>
  <body>
    <table>
      <thead>
        <tr>
          <th>vincitore</th>
          <th>vincita</th>
        </tr>
      </thead>
      <tbody>
          <th>maronnekick</th>
          <th>millemila</th>
      </tbody>
    </table>

    <thead>
      <tr>
        <th>scommetti</th>
        <th>scommettitori</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th><input /><button type="submit">ciaocicoa</button></th>
        <th>15321562153</th>
      </tr>
    </tbody>
  </table>
  </body>
</html>


<?php






 ?>
