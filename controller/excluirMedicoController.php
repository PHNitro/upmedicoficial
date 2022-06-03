<?php 
require_once '../dao/MedicoDAO.php';

$idmedico = $_GET["id"];
$medicoDAO = new medicoDAO();
if ($medicoDAO->deleteById( $idMedico ) ) {
header("Location: ../view/listarTodosMedicos.php?=$error[1]");
}
