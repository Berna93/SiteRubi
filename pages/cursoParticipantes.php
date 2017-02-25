<?php
include('session.php');
?>
<?php require_once 'config.php'; ?>
<?php require_once DBAPI; ?>


<?php
require_once('cursos/functions.php');
searchCourseStudents($curso['id']);
editParticipant();



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


		<div class="col-lg-12" align="right">
                    		<a href="download.php" class="btn btn-sm btn-primary"><i class="fa fa-download"></i> Download</a>
                    </div>
        <div>
        <br><br><br>

        	<?php if (!empty($_SESSION['message'])) : ?>
						<div class="alert alert-<?php echo $_SESSION['type']; ?> alert-dismissible" role="alert">
							<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
							<?php echo $_SESSION['message']; ?>
						</div>


					<?php endif; ?>

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

								<form role="form" action="cursoParticipantes.php?id=<?php echo $curso['id']; ?>" method="post">
									<div class="form-group">
										<label>Nome do Curso</label>
										<input type="text" class="form-control" readonly name="curso['nome']" value="<?php echo $curso['nome']; ?>">

										<label>Professor/Palestrante</label>

										<input type="text" class="form-control"  readonly name="curso['professor']" value="<?php echo $curso['professor']; ?>">

										<label>Quantidade de Vagas</label>
										<input type="text" class="form-control" readonly name="curso['qtdeVagas']" value="<?php echo $curso['qtdeVagas']; ?>">
										<p class="help-block">Apenas números</p>


											<label>Adicionar Participante</label>
											<div class="form-group input-group">

												<input type="text" class="form-control" id="skills" name="participante['nomeCliente']"/>
												<span class="input-group-btn">


														<button class="btn btn-default" type="submit" name="btnAdiciona"><i class="fa fa-check"></i>
														</button>

												</span>
											</div>

									</div>
								</form>


							</div>
							<div class="col-lg-6">
							<div>
											<p>
											<strong>Preenchimento das Vagas</strong>
												<span class="pull-right text-muted"><?php echo ($curso['qtdePreenchidas']/$curso['qtdeVagas'] * 100) .  "% Completo"; ?></span>
											</p>
											<div class="progress progress-striped active">
												<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="<?php echo ($curso['qtdePreenchidas']/$curso['qtdeVagas'] * 100); ?>" aria-valuemin="0" aria-valuemax="100" style="<?php echo "width:" . ($curso['qtdePreenchidas']/$curso['qtdeVagas'] * 100) . "%"; ?>">
													<span class="sr-only">40% Complete (success)</span>
												</div>
											</div>
										</div>




										<div class="panel-heading">
											Participantes
										</div>








										<!-- /.panel-heading -->
										<div class="panel-body">




											<table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
												<thead>
													<tr>
														<th>Id</th>
														<th>Nome</th>
														<th>Situação Financeira</th>
														<th>Excluir Participante</th>
														<th>Baixar Contrato</th>
													</tr>
												</thead>
												<tbody>
													<?php if ($cursosParticipantes) : ?>
														<?php foreach ($cursosParticipantes as $participante) : ?>
															<tr>
																<td><?php echo $participante['id']; ?></td>
																<td><?php echo $participante['nomeCliente']; ?></td>


																<td class="center">
																	<a href="#" class="btn btn-success btn-circle" data-toggle="modal" data-target="#delete-modal-participante" data-customer="<?php echo $participante['id']; ?>" data-curso="<?php echo $curso['id']; ?>"><i class="fa fa-dollar">
																</td>
																<td class="center">
																	<a href="#" class="btn btn-warning btn-circle <?php if ($_SESSION['usertype']!='admin') echo "disabled"; ?>" data-toggle="modal" data-target="#delete-modal-participante" data-customer="<?php echo $participante['id']; ?>" data-curso="<?php echo $curso['id']; ?>"><i class="fa fa-times">

																<td><?php echo $participante['situacaoPagamento']; ?></td>
																<td class="center">
																	<a href="edicaoCliente.php?id=<?php echo $customer['id']; ?>" class="btn btn-warning btn-circle"><i class="fa fa-times">

																</td>
																<td class="center">
																	<a href="edicaoCliente.php?id=<?php echo $customer['id']; ?>" class="btn btn-info btn-circle"><i class="fa fa-download">
																</td>
															</tr>
														<?php endforeach; ?>
													<?php else : ?>
														<tr>
															<td colspan="6">Nenhum registro encontrado.</td>
														</tr>
													<?php endif; ?>

												</tbody>
											</table>
										</div>
										<!-- /.table-responsive -->
									</div>
								</div>
							</div>
						</div>





									<!-- /.panel-body -->
									<button type="submit" class="btn btn-primary">Atualizar</button>
									<button type="reset" class="btn btn-warning">Limpar</button>
									<a href="#" class="btn btn-danger" data-toggle="modal" data-target="#delete-modal-curso" data-customer="<?php echo $curso['id']; ?>">
										<i class="fa fa-trash"></i> Excluir
									</a>
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



<?php include('cursos/modalParticipante.php'); ?>


<?php include(FOOTER_TEMPLATE); ?>



