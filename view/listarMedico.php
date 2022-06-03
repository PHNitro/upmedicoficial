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
</head>

<body>
    <div class="container mt-3">
        <?php
require_once '../dao/MedicoDAO.php';
$medicoDAO = new MedicoDAO();
$medicos = $medicoDAO->findAll();
echo "<table class='table table-striped table-bordered'>";
echo "<thead>";
echo "  <tr>";
echo "      <th>Nome</th>";
echo "      <th>Email</th>";
echo "      <th class='text-center'>Data de nascimento</th>";
echo "      <th>Cpf</th>";
echo "      <th>Crm</th>";
echo "      <th>Telefone</th>";
echo "      <th>Password</th>";
echo "      <th>Especialidade</th>";
echo "      <th class='text-center'>Excluir</th>";
echo "      <th class='text-center'>Editar</th>";
echo "  </tr>"; 
echo "</thead>";
echo "<tbody>";
foreach ( $medicos as $medico ) {
    echo "<tr>";
    echo "  <td> {$medico["nome"]}</td>";
    echo "  <td>", ( $medico["crm"] ), "</td>";
    echo "  <td class='text-center'> ", date( "d/m/Y", strtotime( $medico["datanascimento"] ) ), "</td>";
    echo "  <td>", $medico["especialidade"] == "cg" ? "Cirurgia Geral" : "Clínica Médica", "</td>";
    echo "  <td> {$medico["celular"]} </td>";
    echo "  <td> {$medico["email"]} </td>";
    echo "  <td> {$medico["crm"]} </td>";
    echo "  <td align='center'><a href='../controller/excluirMedicoController.php?id={$medico["id"]}'><i class='fa-solid fa-trash-can'></a></i></td>";
    echo "  <td align='center'><a href='../controller/alterarMedicoController.php?id={$medico["id"]}&&'><i class='fa-solid fa-pen-to-square'></a></i></td>";
    echo "</tr>";
}
echo "</tbody>";
echo "</table>";
?>
    </div>
</body>
</html>