<!DOCTYPE html>
<html>

<body>

<h2>Apresentação</h2>
<?php

$nome = 'Gabriel';
$sobrenome = 'Rodrigues';
$idade = 17;
$cidade = 'Miguelopolis';
$estado = 'SP';
$endereco = 'NUM SEI';
$bairro = 'NUM SEI';

$cadastro = array($nome,$sobrenome,$idade,$cidade,$estado,$endereco,$bairro);

echo "Olá, me chamo <b>$cadastro[0] $cadastro[1]</b>, tenho $cadastro[2] anos e moro em $cadastro[3], $cadastro[4], na $cadastro[5], $cadastro[6]. <br>
Sou aluno do curso de informatica para internet.";
?>
</body>

</html>