<?php
include('session.php');
?>
<?php require_once 'config.php'; ?>
<?php require_once DBAPI; ?>

<?php
require_once('cursos/functions.php');
index();
?>

<?php include(HEADER_TEMPLATE); ?>
<?php $db = open_database(); ?>

<?php if ($db) : ?>


    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Cursos Em Aberto</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Cursos Em Aberto
                    </div>
                    <!-- /.panel-heading -->
                    <div class="panel-body">
                        <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                            <thead>
                                <tr>
                                    <th>Nome do Curso</th>
                                    <th>Professor/Palestrante</th>
                                    <th>Qtd. Total de Vagas</th>
                                    <th>Qtd. Vagas Preenchidas</th>
                                    <th>Detalhes</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if ($cursos) : ?>
                                    <?php foreach ($cursos as $curso) : ?>
                                        <tr>
                                            <td><?php echo $curso['id']; ?></td>
                                            <td><?php echo $curso['nome']; ?></td>
                                            <td><?php echo $curso['professor']; ?></td>
                                            <td><?php echo $curso['qtdeVagas']; ?></td>
                                            <td class="center">
                                                <a href="edicaoCurso.php?id=<?php echo $curso['id']; ?>" class="btn btn-sm btn-success"><i class="fa fa-eye"></i> Visualizar</a>
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
                    <!-- /.panel-body -->
                </div>
                <!-- /.panel -->
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
    </div>


<?php else : ?>
    <div class="alert alert-danger" role="alert">
        <p><strong>ERRO:</strong> Não foi possível Conectar ao Banco de Dados!</p>
    </div>

<?php endif; ?>

<?php include(FOOTER_TEMPLATE); ?>
