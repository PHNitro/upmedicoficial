<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="styleSheet" href="../lib/fontawesome-6.1.1/css/all.min.css" />
    <script src="../lib/fontawesome-free-6.1.1-web/"></script>
    <link rel="stylesheet" href="../lib/bootstrap-5.1.3/css/bootstrap.min.css">
    <script src="../lib/bootstrap-5.1.3/js/bootstrap.min.js"></script>
    <a href="/view/listarMedicos.php"></a>
    <center>
        <h1>Listar Médicos</h1>
    <style>
        table, tr, td, th{
            border: 1px solid black;
            border-collapse: collapse;
            text-align: center;
        }

    </style>

</head>
    <body>
    <div class="container mt-3">
                    <table>
                        <tr>
                        <th>Nome</th>
                        <th>Email</th>
                        <th>Data de Nascimento</th>
                        <th>Cpf</th>
                        <th>Crm</th>
                        <th>Celular</th>
                        <th>Senha</th>
                        <th>Especialidade</th>
                        <th>Excluir</th>
                        <th>Editar</th>
                    </tr>
                    </center>
                    <?php
                        require_once '../dao/MedicoDAO.php';

                        $medicoDAO = new MedicoDAO();
                        $medicos   = $medicoDAO->findAll();
                        foreach ( $medicos as $medico ) {
                            $data = date( 'd/m/Y', strtotime( $medico["datanascimento"] ) );
                        ?>
                <tr>
                <td><?=$medico['nome']?></td>
                <td><?=$medico['email']?></td>
                <td><?=$medico['datanascimento']?></td>
                <td><?=$medico['cpf']?></td>
                <td><?=$medico['crm']?></td>
                <td><?=$medico["celular"]?></td>
                <td><?=$medico["password"]?></td>
                <td><?=$medico["especialidade"]?></td>

                <td><a href="../controller/excluirMedicoController.php?id=<?=$medico["id"]?>"><i class='fa-solid fa-trash-can'></a></i></td>
                <td><a href="../controller/alterarMedicoController.php?id=<?=$medico["id"]?>"><i class='fa-solid fa-pen-to-square' style="color: red"; ></a></i></td>
                </tr>
            <?php
                }
            ?>
            </table>
</div>
</body>
</html>