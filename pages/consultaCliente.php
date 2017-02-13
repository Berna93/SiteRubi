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

<?php if (!empty($_SESSION['message'])) : ?>
    <div class="alert alert-<?php echo $_SESSION['type']; ?> alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <?php echo $_SESSION['message']; ?>
    </div>
    <?php clear_messages(); ?>
<?php endif; ?>

<?php if ($db) : ?>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Consulta de Clientes</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
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
        <td class="actions text-right">
            <a href="view.php?id=<?php echo $customer['id']; ?>" class="btn btn-sm btn-success"><i class="fa fa-eye"></i> Visualizar</a>
        </td>
    </tr>
<?php endforeach; ?>
<?php else : ?>
    <tr>
        <td colspan="6">Nenhum registro encontrado.</td>
    </tr>
<?php endif; ?>

                                    <tr>
                                        <td>1</td>
                                        <td>Antonio Carlos</td>
                                        <td>(19) 98474-3813</td>
                                        <td class="center">antonio.carlos@gmail.com</td>
                                        <td class="center">
                                            <input type="button" onclick="window.open('cadastroCliente.php')" value="Detalhes" class="btn btn-success" />

                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Mariana Neves</td>
                                        <td>(18) 9823-5262</td>
                                        <td class="center">mariananeves19@gmail.com</td>
                                        <td class="center"><input type="button" onclick="window.open('cadastroCliente.html')" value="Detalhes" class="btn btn-success" /></td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>Matheus Bernardelli</td>
                                        <td>(19) 98474-3813</td>
                                        <td class="center">email@email.com</td>
                                        <td class="center">
                                            <input type="button" onclick="window.open('cadastroCliente.php')" value="Detalhes" class="btn btn-success" />

                                        </td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>Edivaldo Marchini Jr</td>
                                        <td>(18) 9823-5262</td>
                                        <td class="center">email@email.com</td>
                                        <td class="center"><input type="button" onclick="window.open('cadastroCliente.html')" value="Detalhes" class="btn btn-success" /></td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td>Vinicius Pandolfi</td>
                                        <td>(19) 98474-3813</td>
                                        <td class="center">email@email.com</td>
                                        <td class="center">
                                            <input type="button" onclick="window.open('cadastroCliente.php')" value="Detalhes" class="btn btn-success" />

                                        </td>
                                    </tr>
                                    <tr>
                                        <td>6</td>
                                        <td>Luiz Fernando Marchini</td>
                                        <td>(18) 9823-5262</td>
                                        <td class="center">email@email.com</td>
                                        <td class="center"><input type="button" onclick="window.open('cadastroCliente.html')" value="Detalhes" class="btn btn-success" /></td>
                                    </tr>
                                    <tr>
                                        <td>7</td>
                                        <td>Giovana Maniero</td>
                                        <td>(19) 98474-3813</td>
                                        <td class="center">email@email.com</td>
                                        <td class="center">
                                            <input type="button" onclick="window.open('cadastroCliente.php')" value="Detalhes" class="btn btn-success" />

                                        </td>
                                    </tr>
                                    <tr>
                                        <td>8</td>
                                        <td>Lais Sartori</td>
                                        <td>(18) 9823-5262</td>
                                        <td class="center">email@email.com</td>
                                        <td class="center"><input type="button" onclick="window.open('cadastroCliente.html')" value="Detalhes" class="btn btn-success" /></td>
                                    </tr>
                                    <tr>
                                        <td>9</td>
                                        <td>Nataly Baldessin</td>
                                        <td>(19) 98474-3813</td>
                                        <td class="center">email@email.com</td>
                                        <td class="center">
                                            <input type="button" onclick="window.open('cadastroCliente.php')" value="Detalhes" class="btn btn-success" />

                                        </td>
                                    </tr>
                                    <tr>
                                        <td>10</td>
                                        <td>Nair Children Party Dancer</td>
                                        <td>(18) 9823-5262</td>
                                        <td class="center">email@email.com</td>
                                        <td class="center"><input type="button" onclick="window.open('cadastroCliente.html')" value="Detalhes" class="btn btn-success" /></td>
                                    </tr>
                                     <tr>
                                        <td>11</td>
                                        <td>Luis Gustavo Cadorin</td>
                                        <td>(19) 98474-3813</td>
                                        <td class="center">email@email.com</td>
                                        <td class="center">
                                            <input type="button" onclick="window.open('cadastroCliente.php')" value="Detalhes" class="btn btn-success" />

                                        </td>
                                    </tr>
                                    <tr>
                                        <td>12</td>
                                        <td>Maria Thereza</td>
                                        <td>(18) 9823-5262</td>
                                        <td class="center">email@email.com</td>
                                        <td class="center"><input type="button" onclick="window.open('cadastroCliente.html')" value="Detalhes" class="btn btn-success" /></td>
                                    </tr>


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


