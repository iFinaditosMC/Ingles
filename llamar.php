<?php
include("conexion/conexion.php");

$sql=$conexion->query("select * from register");
while($datos=$sql->fetch_object()){?>
    <tr>
      <td><?=$datos->Id_register?></td>
      <td><?=$datos->Name?></td>
      <td><?=$datos->email?></td>
      <td><?=$datos->password?></td>
      <td>
        <a href=""class="btn btn-small btn-warning"  name="editar"><i class="fa-solid fa-pen-to-square">Editar</i></a>
        <a href=""class="btn btn-small btn-danger" name="delete"><i class="fa-solid fa-trash"></i>Eliminar</a>
      </td>
    </tr>
<?php
}
?>