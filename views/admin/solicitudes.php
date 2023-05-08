<div class="container">
    <h1 class="titulo-pagina">Solicitudes</h1>
    <table class="table" id="myTable">
        <thead>
        <tr>
            <th>Mensaje ID</th>
            <th>Nombre</th>
            <th>Email</th>
            <th>Teléfono</th>
            <th>Mensaje</th>
            <th>Fecha</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($resultados as $orden): ?>
        <tr>
            <td><?php echo $orden['ID']; ?></td>
            <td><?php echo $orden['Nombre']; ?></td>
            <td><?php echo $orden['Email']; ?></td>
            <td><?php echo $orden['Telefono']; ?></td>
            <td><?php echo $orden['Mensaje']; ?></td>
            <td><?php echo $orden['Fecha']; ?></td>
        </tr>
        <?php endforeach; ?>
        </tbody>
    </table>

<?php

// Generar los enlaces para la paginación
$enlaces = '';
for ($i = 1; $i <= $totalPaginas; $i++) {
    $enlaces .= '<a href="/AdminPanel/ordenes/' . $i . '">' . $i . '</a> ';
}

// Mostrar los enlaces de paginación
?>


<script src="https://code.jquery.com/jquery-3.5.1.js"></script>

<script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.10.18/datatables.min.js"></script>

<script>
    jQuery(document).ready(function() {
        jQuery.noConflict();
        jQuery('#myTable').DataTable({
            "order": [[ 1, "desc" ]], // Ordenar por fecha de inicio descendente
            "language": { // Lenguaje de la tabla
                "lengthMenu": "Mostrar _MENU_ registros por página",
                "zeroRecords": "No se encontraron resultados",
                "info": "Mostrando página _PAGE_ de _PAGES_",
                "infoEmpty": "No hay registros disponibles",
                "infoFiltered": "(filtrado de _MAX_ registros totales)",
                "search": "Buscar:",
                "paginate": {
                    "first": "Primera",
                    "last": "Última",
                    "next": "Siguiente",
                    "previous": "Anterior"
                }
            }
        });
    });
</script>



