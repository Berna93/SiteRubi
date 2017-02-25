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
								<form role="form" action="edicaoCurso.php?id=<?php echo $curso['id']; ?>" data-toggle="validator" method="post">
									<div class="form-group">
										<label>Nome do Curso</label>
										<input type="text" class="form-control" name="curso['nome']" value="<?php echo $curso['nome']; ?>" data-error="Por favor, informe um nome válido." required>
										<div class="help-block with-errors"></div>
									</div>
									<div class="form-group">	
										<label>Professor/Palestrante</label>

										<input type="text" class="form-control" name="curso['professor']" value="<?php echo $curso['professor']; ?>" data-error="Por favor, informe um nome de professor/palestrante válido."  required>
                                        <div class="help-block with-errors"></div>
									</div>
									<div class="form-group">
										<label>Quantidade de Vagas</label>
										<input type="number"  min="1" max="100" class="form-control" name="curso['qtdeVagas']" value="<?php echo $curso['qtdeVagas']; ?>" data-error="Por favor, informe uma quantidade de vagas válida (entre 1 e 100)."  required>
                                        <p class="help-block">Apenas números</p>
                                        <div class="help-block with-errors"></div>
									</div>
									<div class="form-group">
										<label>Valor do Curso</label>
										<input type="text" class="form-control" name="curso['valor']" value="<?php echo $curso['valor']; ?>" data-error="Por favor, informe um valor de curso válido."  data-mask="000.000.000.000.000,00" data-mask-reverse="true" required>
                                        <div class="help-block with-errors"></div>
									</div>
									<div class="form-group">
										<label>Data do Curso</label>
										<input type="date" class="form-control" name="curso['data']" value="<?php echo $curso['data']; ?>"  data-error="Por favor, informe a data do curso." required>
                                        <div class="help-block with-errors"></div>
									</div>
									<div class="form-group">
										<label>Contrato</label>
										<textarea class="form-control" rows="10" name="curso['contrato']" data-error="É preciso informar um contrato padrão para este curso." required> <?php echo $curso['contrato']; ?> </textarea>
                                        <div class="help-block with-errors"></div>
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



