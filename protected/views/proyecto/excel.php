<?php if($model!==null){ ?>

<table border="1">

<tr> 
<th>Proyecto</th>
<th>Nombre</th>
<th>Codigo BIP</th>
<th>Duracion</th>
<th>Director</th>
</tr>

 
<tr <?php echo ($x++)%2==0?"style='background-color:#CCC'":"";?>>
<td><?php echo $model->codigoProyecto;?></td>
<td><?php echo $model->nombre;?></td>
<td><?php echo $model->codigoBip;?></td>
<td><?php echo $model->duracion;?></td>
<td><?php echo $model->director;?></td>
</tr>
<table>



<table border="1">

<tr> 
<th>Codigo</th>
<th>Descripcion</th>
<th>Cantidad</th>
<th>Costo Unitario</th>
<th>Monto Total</th>
</tr>

<?php foreach($model->subitems as $subitem) { ?> 
<tr <?php echo ($x++)%2==0?"style='background-color:#CCC'":"";?>>
<td><?php echo $subitem->codigo;?></td>
<td><?php echo $subitem->descripcion;?></td>
<td><?php echo $subitem->cantidad;?></td>
<td><?php echo $subitem->costoUnitario;?></td>
<td><?php echo $subitem->montos;?></td>
</tr>
<?php } ?>
<table>

<?php } ?>


 
