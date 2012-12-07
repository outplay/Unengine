<div><form action="components/add.php" target="ajax" method="post">
<table>
<tr><td>ID: </td><td><input type="text" name="id" placeholder="ID here"></td></tr>
<tr><td>TITLE: </td><td><input type="text" name="title" placeholder="Title here"></td></tr>
<tr><td>ARTICLE:</td><td>
<textarea cols="40" rows="10" name="text" placeholder="Article text here"></textarea></td></tr>
</table>
<input type="submit" name="post" value="Add">
</form>

<font id=write></font>
<br>
<iframe name=ajax frameborder=0 src=components/add.php width=0 height=0 scrolling=no></iframe>
</div>