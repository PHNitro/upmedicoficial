<?php 	
	
	include "/sql/upmedic.sql";
	include "util.php";
	date_default_timezone_set('America/Sao_Paulo');

	$demail = $_POST["demail"];
	$desenh = trim(md5($_POST["desenh"]));

	$aTrab = ConsultarDados("usuarios", "demail", $demail);

	$mensagem = "A senha não confere. Tente novamente!";
	$login = "UPMedic <br /> Acesso";

	if (count($aTrab) > 0 ) {

		$cdusua=$aTrab[0]["cdusua"];
		$flativ=$aTrab[0]["flativ"];
		$desenhbd = trim($aTrab[0]["desenh"]);

		if ($flativ == 'N') {
			$demens = "Usuário não está ativo. Contate o suporte técnico!";
		} 

		if ($desenhbd == $desenh) {
			$cdusua=$aTrab[0]["cdusua"];
			$deusua=$aTrab[0]["deusua"];
			$cdtipo=$aTrab[0]["cdtipo"];
			$defoto=$aTrab[0]["defoto"];
			$demail=$aTrab[0]["demail"];
			$flativ=$aTrab[0]["flativ"];
			$dtcada=$aTrab[0]["dtcada"];

			setcookie("cdusua",$cdusua);
			setcookie("deusua",$deusua);
			setcookie("defoto",$defoto);
			setcookie("demail",$demail);
			setcookie("cdtipo",$cdtipo);
			setcookie("flativ",$flativ);
			setcookie("dtcada",$dtcada);

			GravarLog($cdusua, 'Acesso ao sistema efetuado nesta data');

			header('Location: index.php');
		} Else {
			header('Location: mensagem.php?demens='.$demens.'&detitu='.$detitu);
		}
	} Else {
		$demens = "Usuário não cadastrado!";
		header('Location: mensagem.php?demens='.$demens.'&detitu='.$detitu);
	}

?>