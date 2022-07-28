<!DOCTYPE html>
<html>
<head>
<script>
function validateForm() {
  let x = document.forms["myForm"]["fname"].value;
  if (x == "") {
    alert("Name must be filled out");
    return false;
  }
}
</script>
</head>
<body>

<h2>JavaScript Validation</h2>

<form name="myForm" action="/action_page.php" onsubmit="return validateForm()" method="post">

  <fieldset>
        <legend>Signup</legend>

        <table>
          <tr>
  <td>Name:</td>
  <td> <input type="text" name="fname"></td></tr>
  <tr>
  <td>Password:</td>
  <td> <input type="text" name="fname"></td></tr>
  <tr><td><input type="submit" value="Submit"></td>
</tr>
</table>
</fieldset>

</form>

</body>

</html>