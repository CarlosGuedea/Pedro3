
<div class="container">
    <h1 class="titulo-pagina">Ordenes</h1>
        <a href="/nueva-orden" class="btn btn-success">Crear Nueva Orden</a>
        <a href="/cerrar-sesion" class="btn btn-danger">Cerrar Sesión</a>
    <table class="display" id="myTable">
        <thead>
        <tr>
            
            <th>Comapaña</th>
            <th>Fecha Inicio</th>
            <th>Detalles</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($resultado as $orden): ?>
        <tr>
            <td><?php echo $orden['Descripcion']; ?></td>
            <td><?php echo $orden['Fecha_inicio']; ?></td>
            <td><a  class="btn btn-info"href="/detalle-orden/<?php echo $orden['ID']; ?>">Ver Detalles</a></td>
        </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</div>

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

