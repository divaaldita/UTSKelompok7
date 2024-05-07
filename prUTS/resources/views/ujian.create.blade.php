<html>
<body>

<h2>HTML Forms</h2>

<form action="/action_page.php">
  <label for="fname">Nama:</label><br>
  <input type="text" id="fname" name="fname" ><br>
  <label for="lname">Nim</label><br>
  <input type="text" id="lname" name="lname" ><br><br>
  <label for="fname">jurusan:</label><br>
  <input type="radio" id="html" name="fav_language" value="HTML">
  <label for="html">HTML</label><br>
  <input type="radio" id="css" name="fav_language" value="CSS">
  <label for="css">CSS</label><br>
  <input type="radio" id="javascript" name="fav_language" value="JavaScript">
  <label for="javascript">JavaScript</label>
  <input type="submit" value="Submit">
</form> 

<p>If you click the "Submit" button, the form-data will be sent to a page called "/action_page.php".</p>

</body>
</html>