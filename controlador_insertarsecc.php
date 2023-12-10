<link href="../../../Libs/sweetalert2-8.2.5/sweetalert.css" rel="stylesheet">
<script src="../../../Libs/jquery.min.js"></script>
<script src="../../../Libs/sweetalert2-8.2.5/sweetalert.min.js"></script>

<?php
require_once('modelosecc.php');

$obj = new clase_seccion();
$result = $obj->_insertar($_POST['sec_nombre'], $_POST['sec_observ'] );

if ($result) {
    echo '<script>jQuery(function(){swal({
        title:"Guardar seccion", text:"Registro Guardado", type:"success", confirmButtonText:"Aceptar"
    }, function(){location.href="http://localhost/school32/formularios/seccion/crud_secc.php";});});</script>';
} else {
    echo '<script>jQuery(function(){swal({
        title:"Guardar seccion", text:"Error al Guardar", type:"danger", confirmButtonText:"Aceptar"
    }, function(){location.href="http://localhost/school32/formularios/seccion/crud_secc.php";});});</script>';
}
?>



