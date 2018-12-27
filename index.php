<?
$servidor = 'localhost';
$banco = 'guiaphp';
$usuario = 'root';
$senha = '';
$link = mysqli_connect($servidor, $usuario, $senha, $banco);

if(!$link)
{
    echo "erro ao conectar ao banco de dados!";exit();
}

$SQL = "SELECT * FROM tabela_teste";
$RS = mysqli_query($link, $SQL);
while($RF = mysqli_fetch_array($RS))
{
    echo '<pre>';
    print_r($RF);
    echo '</pre>';
}

/*
RESULTADO:
Array
(
    [0] => 1
    [id] => 1
    [1] => registro 1
    [descricao] => registro 1
)
Array
(
    [0] => 2
    [id] => 2
    [1] => registro 2 para teste
    [descricao] => registro 2 para tabela_teste
)
*/
?>

