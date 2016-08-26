<h2>Listado de Usuarios</h2>

<table border="0">
	<tr>
		<th bgcolor="tomato">ID</th>
		<th bgcolor="tomato">Username</th>
		<th bgcolor="tomato">Rol</th>
		<th bgcolor="tomato">Action</th>
	</tr>
<?php foreach ($users as $user): ?>
	<tr>
		<td bgcolor="#00B159"><strong><?php echo $user["id"]; ?></strong></td>
		<td><?php echo $user["username"]; ?></td>
		<td><?php echo $user["rol"]; ?></td>
		<td>
			<a href="<?php echo APP_URL; ?>users/edit/<?php echo $user["id"]; ?>">Edit</a>
			<a href="<?php echo APP_URL; ?>users/delete/?id=<?php echo $user["id"]; ?>">Delete</a>
		</td>
	</tr>
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

<?php endforeach; ?>
</table>
<br>
<form action="<?php echo APP_URL; ?>users/add">
      <input type="submit" value="Nuevo Usuario">
  </form>
