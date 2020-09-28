<div class="pull-right">
	<a href="<?php echo site_url('doccomercial/add'); ?>" class="btn btn-success">Add</a> 
</div>

<table class="table table-striped table-bordered">
    <tr>
		<th>Iddoccomercial</th>
		<th>Inscripcion</th>
		<th>Inscripcionobs</th>
		<th>Inscripcionok</th>
		<th>Balance</th>
		<th>Balanceobs</th>
		<th>Balanceok</th>
		<th>Refbancarias</th>
		<th>Refbancariasobs</th>
		<th>Refbancariasok</th>
		<th>Antecedentes</th>
		<th>Antecedentesobs</th>
		<th>Antecedentesok</th>
		<th>Refcomerciales</th>
		<th>Refcomercialesobs</th>
		<th>Refcomercialesok</th>
		<th>Contastanciaiibb</th>
		<th>Constanciaiibbobs</th>
		<th>Constanciaiibbok</th>
		<th>Infotecnica</th>
		<th>Infotecnicaobs</th>
		<th>Infotecnicaok</th>
		<th>Autoevaluacion</th>
		<th>Autoevaluacionobs</th>
		<th>Autoevaluacionok</th>
		<th>Constmonotirbuto</th>
		<th>Constmonotributoobs</th>
		<th>Constmonotributook</th>
		<th>Titutlo</th>
		<th>Tituloobs</th>
		<th>Titulook</th>
		<th>Matricula</th>
		<th>Matriculaobs</th>
		<th>Matriculaok</th>
		<th>Antecedentesmono</th>
		<th>Antecedentesmonoobs</th>
		<th>Antecedentesmonook</th>
		<th>Refcomercialesmono</th>
		<th>Refcomercialesmonoobs</th>
		<th>Refcomercialesmonook</th>
		<th>Refbancariasmono</th>
		<th>Refbancariasmonoobs</th>
		<th>Refbancariasmonook</th>
		<th>Completo</th>
		<th>Aprobado</th>
		<th>Idproveedor</th>
		<th>Contratosocial</th>
		<th>Contratosocialobs</th>
		<th>Contratosocialok</th>
		<th>Actions</th>
    </tr>
	<?php foreach($doccomercial as $d){ ?>
    <tr>
		<td><?php echo $d['iddoccomercial']; ?></td>
		<td><?php echo $d['inscripcion']; ?></td>
		<td><?php echo $d['inscripcionobs']; ?></td>
		<td><?php echo $d['inscripcionok']; ?></td>
		<td><?php echo $d['balance']; ?></td>
		<td><?php echo $d['balanceobs']; ?></td>
		<td><?php echo $d['balanceok']; ?></td>
		<td><?php echo $d['refbancarias']; ?></td>
		<td><?php echo $d['refbancariasobs']; ?></td>
		<td><?php echo $d['refbancariasok']; ?></td>
		<td><?php echo $d['antecedentes']; ?></td>
		<td><?php echo $d['antecedentesobs']; ?></td>
		<td><?php echo $d['antecedentesok']; ?></td>
		<td><?php echo $d['refcomerciales']; ?></td>
		<td><?php echo $d['refcomercialesobs']; ?></td>
		<td><?php echo $d['refcomercialesok']; ?></td>
		<td><?php echo $d['contastanciaiibb']; ?></td>
		<td><?php echo $d['constanciaiibbobs']; ?></td>
		<td><?php echo $d['constanciaiibbok']; ?></td>
		<td><?php echo $d['infotecnica']; ?></td>
		<td><?php echo $d['infotecnicaobs']; ?></td>
		<td><?php echo $d['infotecnicaok']; ?></td>
		<td><?php echo $d['autoevaluacion']; ?></td>
		<td><?php echo $d['autoevaluacionobs']; ?></td>
		<td><?php echo $d['autoevaluacionok']; ?></td>
		<td><?php echo $d['constmonotirbuto']; ?></td>
		<td><?php echo $d['constmonotributoobs']; ?></td>
		<td><?php echo $d['constmonotributook']; ?></td>
		<td><?php echo $d['titutlo']; ?></td>
		<td><?php echo $d['tituloobs']; ?></td>
		<td><?php echo $d['titulook']; ?></td>
		<td><?php echo $d['matricula']; ?></td>
		<td><?php echo $d['matriculaobs']; ?></td>
		<td><?php echo $d['matriculaok']; ?></td>
		<td><?php echo $d['antecedentesmono']; ?></td>
		<td><?php echo $d['antecedentesmonoobs']; ?></td>
		<td><?php echo $d['antecedentesmonook']; ?></td>
		<td><?php echo $d['refcomercialesmono']; ?></td>
		<td><?php echo $d['refcomercialesmonoobs']; ?></td>
		<td><?php echo $d['refcomercialesmonook']; ?></td>
		<td><?php echo $d['refbancariasmono']; ?></td>
		<td><?php echo $d['refbancariasmonoobs']; ?></td>
		<td><?php echo $d['refbancariasmonook']; ?></td>
		<td><?php echo $d['completo']; ?></td>
		<td><?php echo $d['aprobado']; ?></td>
		<td><?php echo $d['idproveedor']; ?></td>
		<td><?php echo $d['contratosocial']; ?></td>
		<td><?php echo $d['contratosocialobs']; ?></td>
		<td><?php echo $d['contratosocialok']; ?></td>
		<td>
            <a href="<?php echo site_url('doccomercial/edit/'.$d['iddoccomercial']); ?>" class="btn btn-info btn-xs">Edit</a> 
            <a href="<?php echo site_url('doccomercial/remove/'.$d['iddoccomercial']); ?>" class="btn btn-danger btn-xs">Delete</a>
        </td>
    </tr>
	<?php } ?>
</table>
