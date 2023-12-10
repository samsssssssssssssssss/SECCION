<?php
require_once("modelosecc.php");
$provincia = new clase_seccion();
$registros = $provincia->_consultartodo($_POST['valor']);
echo "<thead class='bg-primary text-light text-center'>
         <tr>
             <th>ID</th>
             <th>seccion</th>
             <th>observacion</th>
             <th>Editar</th>
             <th>Eliminar</th>
         </tr>
      </thead>";

if ($registros) {
    $f = 1;
    while ($fila = $registros->fetch()) {
        echo "<tr>
                <td>".$fila['sec_id']."</td>
                <td>".$fila['sec_nombre']."</td>
                <td>".$fila['sec_observ']."</td>
                <td><button class='btn btn-warning' onclick='editar_curso({$fila['sec_id']})'>Editar</button></td>
                <td><button class='btn btn-danger' onclick='eliminar_curso({$fila['sec_id']})'>Eliminar</button></td>
              </tr>";
        $f++;
    }
} else {
    echo "<tr><td colspan='5'>No se encontraron resultados</td></tr>";
}
?>
