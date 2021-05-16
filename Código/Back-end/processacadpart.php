<?php

include_once("conexao_cad_part.php");
$nome_do_participante = filter_input (INPUT_POST, 'nome_do_participante', FILTER_SANITIZE_STRING);
$rg_do_participante = filter_input (INPUT_POST, 'rg_do_participante', FILTER_SANITIZE_STRING);
$cpf_do_participante = filter_input (INPUT_POST, 'cpf_do_participante', FILTER_SANITIZE_STRING);
$cep = filter_input (INPUT_POST, 'cep', FILTER_SANITIZE_STRING);
$endereco = filter_input (INPUT_POST, 'endereco', FILTER_SANITIZE_STRING);
$mae = filter_input (INPUT_POST, 'mae', FILTER_SANITIZE_STRING);
$pai = filter_input (INPUT_POST, 'pai', FILTER_SANITIZE_STRING);
$email = filter_input (INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
$senha = filter_input (INPUT_POST, 'senha', FILTER_SANITIZE_STRING);
$transf_participante = "INSERT INTO participantes (Nome_Participante, RG,  CPF, CEP, Endereço, Mãe, Pai, E-mail, Senha, Adicionado_em) VALUES ('$nome_do_participante', '$rg_do_participante', '$cpf_do_participante', '$cep', '$endereco', '$mae', '$pai', '$email', '$senha', NOW() )";
$transferido_participante = mysqli_query($conn2, $transf_participante);
if (mysqli_insert_id($conn)){ header("Location: home.html");} else{header("Location: home.html");}

?>