<!-- Vista Index-->
<div class="row">
<div class="col s12 m12 l12">
<table border="0">
  <h2>Categorias</h2>
  <thead>
    <tr>
        <th bgcolor="tomato">Id</th>
		    <th bgcolor="tomato">Nombre</th>
		    <th bgcolor="tomato">Action</th>
    </tr>
  </thead>



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





  <tbody>
<?php foreach ($categories as $category ): ?>
    <tr>
      <td bgcolor="#00B159"><strong><?php echo $category['id']; ?></strong></td>
      <td><?php echo $category['name']; ?></td>
      <td>
	    <a href="<?php echo APP_URL; ?>categories/edit/<?php echo $category['id']; ?>">Editar</a>
		<a href="<?php echo APP_URL; ?>categories/delete/?id=<?php echo $category['id']; ?>">Eliminar</a>
      </td>
    </tr>
<?php endforeach; ?>
  </tbody>
</table>
</div>
<br>
<form action="<?php echo APP_URL; ?>categories/add">
      <input type="submit" value="Nueva categoria">
  </form>
</div>
