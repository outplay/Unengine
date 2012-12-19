<div><form action="components/settings.php" target="ajax" method="post">
<table>
<tr><td>TITLE: </td><td><input type="text" name="title" placeholder="Site title here"></td></tr>
<tr><td>KEYWORDS: </td><td><textarea cols="30" rows="5" name="keywords" placeholder="Keywords here"></textarea></td></tr>
<tr><td>DESCRIPTION:</td><td>
<textarea cols="30" rows="5" name="description" placeholder="Description text here"></textarea></td></tr>
<tr><td>ADMINISTRATOR: </td><td><input type="text" name="admin" placeholder="Admin name here"></td></tr>
<input name="id" id="id" type="hidden" value="1" />

</table>
<input type="submit" name="post" value="UPDATE">
</form>

<font id=write></font>
<br>
<iframe name=ajax frameborder=0 src=components/settings.php width=0 height=0 scrolling=no></iframe>
</div>