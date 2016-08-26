<!-- Vista index-->
<div class="row">
  <div class="col-ms-12">
<table class="highlight responsive-table" border="0">
  <h2>Listado de cuentas</h2>
  <thead>
    <tr>
        <th bgcolor="tomato">ID</th>
		    <th bgcolor="tomato">ID del usuario</th>
		    <th bgcolor="tomato">Nombre</th>
		    <th bgcolor="tomato">Action</th>
		</tr>
  </thead>
  <tbody>
<?php foreach ($accounts as $account ): ?>



<style>

th {
	width: 200px;
	text-align: center;
	font-size: 16px;
	border-radius: 20px;
}

td {
	height: 50px;
	border-radius: 20px;
	text-align: center;
}

table {
	border-radius: 20px;

}


</style>

    <tr>
        <td bgcolor="#00B159"><strong><?php echo $account['id']; ?></strong></td>
		<td><?php echo $account['user_id']; ?></td>
		<td><?php echo $account['name']; ?></td>
		<td>
          <a href="<?php echo APP_URL; ?>accounts/edit/<?php echo $account["id"]; ?>">Editar</a>
        	<a href="<?php echo APP_URL; ?>accounts/delete/?id=<?php echo $account['id']; ?>">Eliminar</a>
    </td>
    </tr>
<?php endforeach; ?>
  </tbody>
</table>
<br>
<form action="<?php echo APP_URL; ?>accounts/add">
    <input type="submit" value="Nuevo cuenta">
</form>
</div>
</div>
