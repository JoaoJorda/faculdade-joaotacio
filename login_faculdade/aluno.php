<?php include"menu.php"; ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/alunos.css">
    <title>Área do aluno</title>
</head>
<body>

    <div class="container">
        <div class="texto_principal">
            <h1>Aréa do aluno</h1>
        </div>

        <div class="container_card">

            <div class="card">
                <img src="img/biblioteca.jpg" alt="imagem1">
                <p class="texto_card">Nossa biblioteca</p>
                <a href="https://www.bvirtual.com.br/"><button>Acesse</button></a>
            </div>
            <div class="card">
                <img src="img/formatura.jpg" alt="imagem2">
                <p class="texto_card">Sua formação</p>
                <a href="https://escoladeformacao.educacao.mg.gov.br/"><button>Acesse</button></a>
            </div>

        </div>

        <div class="butoes">
            <a class="configurar" href="eidtar_aluno.php"><button>Editar</button></a>
            <a class="sair" href="logout.php"><button>Sair </button></a>
        </div>
    </div>

</body>
</html>