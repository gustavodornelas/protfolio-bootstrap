<?php
require_once("./cabecalho.php");
ini_set('display_errors', 1);
error_reporting(E_ALL);
?>

<main id="main">
    <section id="">
        <div class="container">
            <div class="section-title">
                <h2>Mensagem recebidas</h2>
            </div>
            <div>
                <table class="table table-striped">
                    <caption>Lista de mensagens recebidas</caption>
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nome</th>
                            <th scope="col">E-mail</th>
                            <th scope="col">Assunto</th>
                            <th scope="col">Mensagem</th>
                            <th scope="col">Data</th>
                        </tr>
                    </thead>

                    <?php
                    require_once("./conexao.php");

                    $stmt = $pdo->query("SELECT * FROM tab_contatos");

                    while ($row = $stmt->fetch()) {
                        echo "<tr scope='row'>" .
                            "<td>" . $row['id'] . "</td>" .
                            "<td>" . $row['nome'] . "</td>" .
                            "<td>" . $row['email'] . "</td>" .
                            "<td>" . $row['assunto'] . "</td>" .
                            "<td>" . $row['mensagem'] . "</td>" .
                            "<td>" . $row['data'] . "</td>" .
                            "<tr>";
                    }
                    ?>

                </table>
            </div>
        </div>
    </section>
</main>

<?php
require_once("./rodape.php");
?>