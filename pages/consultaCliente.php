<?php
include('session.php');
?>
<?php require_once 'config.php'; ?>
<?php require_once DBAPI; ?>
<?php
require_once('clientes/functions.php');
index();
?>

<?php include(HEADER_TEMPLATE); ?>
<?php $db = open_database(); ?>

<?php if ($db) : ?>

    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Consulta de Clientes</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
          <div class="col-lg-12" align="right">
                    		<a href="download.php" class="btn btn-sm btn-primary"><i class="fa fa-download"></i> Download</a>
                    </div>
                    <br>
       <br><br>
        <!-- /.row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Consulta de Clientes
                    </div>
                    <!-- /.panel-heading -->
                    <div class="panel-body">
                        <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                            <thead>
                                <tr>
                                    <th>Código do Cliente</th>
                                    <th>Nome do Cliente</th>
                                    <th>Telefone</th>
                                    <th>E-mail</th>
                                    <th>Detalhes</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if ($customers) : ?>
                                    <?php foreach ($customers as $customer) : ?>
                                        <tr>
                                            <td><?php echo $customer['id']; ?></td>
                                            <td><?php echo $customer['nome']; ?></td>
                                            <td><?php echo $customer['telefone']; ?></td>
                                            <td><?php echo $customer['email']; ?></td>
                                            <td class="center">
                                                <a href="edicaoCliente.php?id=<?php echo $customer['id']; ?>" class="btn btn-sm btn-success"><i class="fa fa-eye"></i> Visualizar</a>
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
                        <!-- /.table-responsive -->

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


