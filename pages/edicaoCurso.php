<?php
include('session.php');
?>
<?php require_once 'config.php'; ?>
<?php require_once DBAPI; ?>

<?php 
require_once('cursos/functions.php');
searchCourseStudents($curso['id']);
edit();


?>

<?php include(HEADER_TEMPLATE); ?>
<?php $db = open_database(); ?>

<?php if ($db) : ?>

	<div id="page-wrapper">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Cadastro de Cursos</h1>
			</div>
			<!-- /.col-lg-12 -->
		</div>
		<!-- /.row -->
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-primary">
					<div class="panel-heading">
						Dados básicos
					</div>
					<div class="panel-body">
						<div class="row">
							<div class="col-lg-6">
								<form role="form" action="edicaoCurso.php?id=<?php echo $curso['id']; ?>" method="post">
									<div class="form-group">
										<label>Nome do Curso</label>
										<input type="text" class="form-control" name="curso['nome']" value="<?php echo $curso['nome']; ?>">

										<label>Professor/Palestrante</label>

										<input type="text" class="form-control" name="curso['professor']" value="<?php echo $curso['professor']; ?>">

										<label>Quantidade de Vagas</label>
										<input type="text" class="form-control" name="curso['qtdeVagas']" value="<?php echo $curso['qtdeVagas']; ?>">
										<p class="help-block">Apenas números</p>

										<label>Valor do Curso</label>
										<input type="text" class="form-control" name="curso['valor']" value="<?php echo $curso['valor']; ?>">

										<label>Data do Curso</label>
										<input type="text" class="form-control" name="curso['data']" value="<?php echo $curso['data']; ?>">
										<div class="form-group">
											<label>Contrato</label>
											<textarea class="form-control" rows="10" name="curso['contrato']" value="<?php echo $curso['contrato']; ?>"></textarea>
										</div>

									</div>


								
							</div>
							<!-- /.col-lg-6 (nested) -->

						</div>

									<!-- /.panel-body -->
									<button type="submit" class="btn btn-primary">Atualizar</button>
									<button type="reset" class="btn btn-warning">Limpar</button>
									<a href="#" class="btn btn-danger <?php if ($_SESSION['usertype']!='admin') echo "disabled"; ?>" data-toggle="modal" data-target="#delete-modal-curso" data-customer="<?php echo $curso['id']; ?>">
										<i class="fa fa-trash"></i> Excluir
									</a>
									 <a href="cursoParticipantes.php?id=<?php echo $curso['id']; ?>" class="btn btn-success"><i class="fa fa-eye"></i> Participantes</a>
									
					</form>

				</div>
				<!-- /.col-lg-6 (nested) -->
			</div>
			<!-- /.row (nested) -->
		</div>
	</div>
</div>
</div>


<?php else : ?>
	<div class="alert alert-danger" role="alert">
		<p><strong>ERRO:</strong> Não foi possível Conectar ao Banco de Dados!</p>
	</div>

<?php endif; ?>
<?php include('cursos/modal.php'); ?>

<?php include(FOOTER_TEMPLATE); ?>



