<?php
include('session.php');
?>
<?php require_once 'config.php'; ?>
<?php require_once DBAPI; ?>

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
                                <tr class="danger">
                                    <td>Reiki - Nível 1</td>
                                    <td>Julia Pestana</td>
                                    <td>20</td>
                                    <td class="center">17</td>
                                    <td class="center">
                                        <input type="button" onclick="window.open('cursosDetalhes.php')" value="Detalhes" class="btn btn-success" />

                                    </td>
                                </tr>
                                <tr class="warning">
                                    <td>Astrologia Hermética</td>
                                    <td>Edivaldo Marchini Jr</td>
                                    <td>8</td>
                                    <td class="center">8</td>
                                    <td class="center"><input type="button" onclick="window.open('cursosDetalhes.php')" value="Detalhes" class="btn btn-success" /></td>
                                </tr>
                                <tr class="success">
                                    <td>Rituais com ervas na Umbanda</td>
                                    <td>Matheus Bernardelli</td>
                                    <td>15</td>
                                    <td class="center">13</td>
                                    <td class="center"><input type="button" onclick="window.open('cursosDetalhes.php')" value="Detalhes" class="btn btn-success" /></td>
                                </tr>
                                <tr class="info">
                                    <td>Consciência Corporal dos Sete Chackras Quânticos</td>
                                    <td>Vinicius Pandolfi</td>
                                    <td>12</td>
                                    <td class="center">11</td>
                                    <td class="center"><input type="button" onclick="window.open('cursosDetalhes.php')" value="Detalhes" class="btn btn-success" /></td>
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
