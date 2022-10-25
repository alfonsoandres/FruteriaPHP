<form name='entrada' method="POST">
<table>
<tr>
<td>Introduzca su nombre:</td><td> <input type="text" name="nombre" 
    value="<?=(isset($_REQUEST['nombre']))?$_REQUEST['nombre']:''?>"></td></tr> 
</table>
<input type="submit" name="orden" value="Entrar">
</form>

