<html>
<head>
<title>Documento sem t&iacute;tulo</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body>
<?

require_once ('conexao.php');

define ('PASTA_UPLOAD', '../imagens/img_textos/');

$titulo = $_POST['titulo'];
$imagem = $_FILES['imagem']['name'];
$nome = $_POST['nome_original'];
$ocupacao = $_POST['ocupacao'];
$primeira_aparicao = $_POST['primeira_aparicao'];
$titulo_brasil = $_POST['titulo_brasil'];
$titulo_original = $_POST['titulo_original'];
$genero = $_POST['genero'];
$ref_anteriores = $_POST['ref_anteriores'];
$autor_obra = $_POST['autor_obra'];
$sinopse = $_POST['sinopse'];
$detalhes = $_POST['detalhes'];
$aspecto_fisico = $_POST['aspecto_fisico'];
$perfil = $_POST['perfil']
$frases_definitivas = $_POST['frases_definitivas'];
$personagens = $_POST['personagens'];
$ref_posteriores = $_POST['ref_posteriores'];
$consultas = $_POST['consultas'];

$target= PASTA_UPLOAD . $imagem;
move_uploaded_file ($_FILES['imagem']['tmp_name'], $target);
$conexao = mysql_connect($DB_HOST, '$DB_USER, $DB_PASSWORD, $DB_NAME) or die ('Erro na conexão com o banco');

$consulta = "INSERT INTO posts(titulo, imagem, nome_original, ocupacao, primeira_aparicao, titulo_brasil, titulo_original, genero, ref_anteriores, autor_obra, sinopse, detalhes, aspecto_fisico, perfil, frases_definitivas, personagens, ref_posteriores, consultas)". 
"VALUES('$titulo', '$imagem', '$nome', '$ocupacao', '$primeira_aparicao', '$titulo_brasil', '$titulo_original', '$genero', '$ref_anteriores', '$autor_obra', '$sinopse', '$detalhes', '$aspecto_fisico', '$perfil', '$frases_definitivas', '$personagens', '$ref_posteriores', '$consultas')";

$requisicao = mysql_query($conexao, $consulta) or die ('Erro na gravação dos dados');

mysql_close($conexao);




?>
</body>
</html>
