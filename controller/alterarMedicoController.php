<?php
require_once '../dto/MedicoDTO.php';
require_once '../dao/MedicoDAO.php';

$idmedico = $_POST["ID"];
$nome = $_POST["nome"];
$cpf = $_POST["cpf"];
$crm = $_POST["crm"];
$email = $_POST["email"];
$password = $_POST["password"];

$medicoDTO = new MedicoDTO();
$medicoDTO->setId ( $id );
$medicoDTO->setNome( $nome );
$medicoDTO->setcpf( $cpf );
$medicoDTO->setcrm( $crm );
$medicoDTO->setEmail( $email );
$medicoDTO->setpassword( $password );

$medicoDAO = new MedicoDAO();

if ( $medicoDAO->update( $medicoDTO ) ) {
    header( "Location: ../view/formAlterarMedico.html" );
}