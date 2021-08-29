<?php
echo "<center>";

echo "<form action=updated.php method='POST'>
" . $_GET['email'] . "<br>
Update Password : <input type='text' name='pwd' value=''><br>
<input type='hidden' name='email' value='" . $_GET['email'] . "'><br>
<input type='submit' name='submit' value='Update'>
</form>";





echo "</center>";

?> 
