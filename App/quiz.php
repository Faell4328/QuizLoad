<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <title>Iniciar Questão</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, inicial-scale=1">
        <link rel="stylesheet" href="Public/quiz.css">
        <link rel="stylesheet" href="Public/bootstrap/css/bootstrap.min.css">
        <script defer src="Public/quiz.js"></script>
        <script defer src="Public/bootstrap/js/bootstrap.min.js"></script>
    </head>
    <body style="background-color: #353531">

        <!-- Campo do Quiz -->
        <div class="container py-2 mt-5 rounded-4" style="background-color: #BBBAC6">
            <div class="d-flex mt-3 justify-content-center">
                <p class="fs-1"><? echo($_POST['parametro']) ?></p>
            </div>
            <div class="d-sm-block d-lg-flex justify-content-center mt-4" style="widht: 100%">
                <div class="col-0 col-lg-4 mx-auto mx-lg-0 text-center text-lg-start">
                    <span class="fs-5 clicavel">Seleciona o Modo do Quiz:</span>
                </div>
                <div class="col-0 col-lg-2 mx-auto mx-lg-0 text-center text-lg-start clicavel pergunta-modo">
                    <img class="d-none d-lg-inline imagem-pergunta-modo" src="Public/Icones/nocheck.png" style="width: inherit; height: inherit">
                    <label class="fs-5 clicavel">Normal</label>
                </div>
                <div class="col-0 col-lg-2 mx-auto mx-lg-0 text-center text-lg-start clicavel pergunta-modo">
                    <img class="d-none d-lg-inline imagem-pergunta-modo" src="Public/Icones/nocheck.png" style="width: inherit; height: inherit">
                    <label class="fs-5 clicavel">Explicação</label>
                </div>
            </div>
            <div class="d-sm-block d-lg-flex justify-content-center mt-4" style="widht: 100%">
                <div class="col-0 col-lg-4 mx-auto mx-lg-0 text-center text-lg-start">
                    <span class="fs-5 clicavel">Pergunta Aleatórias?</span>
                </div>
                <div class="col-0 col-lg-2 mx-auto mx-lg-0 text-center text-lg-start clicavel pergunta-aleatoria">
                    <img class="d-none d-lg-inline" src="Public/Icones/nocheck.png" style="width: inherit; height: inherit">
                    <span class="fs-5 clicavel">Sim</span>
                </div>
                <div class="col-0 col-lg-2 mx-auto mx-lg-0 text-center text-lg-start clicavel pergunta-aleatoria">
                    <img class="d-none d-lg-inline" src="Public/Icones/nocheck.png" style="width: inherit; height: inherit">
                    <span class="fs-5 clicavel">Não</span>
                </div>
            </div>
            <div class="d-sm-block d-lg-flex justify-content-center mt-4" style="widht: 100%">
                <div class="col-0 col-lg-4 mx-auto mx-lg-0 text-center text-lg-start">
                    <span class="fs-5 clicavel">Alternativas Aleatórias?</span>
                </div>
                <div class="col-0 col-lg-2 mx-auto mx-lg-0 text-center text-lg-start clicavel alternativa-aleatoria">
                    <img class="d-none d-lg-inline" src="Public/Icones/nocheck.png" style="width: inherit; height: inherit">
                    <span class="fs-5 clicavel">Sim</span>
                </div>
                <div class="col-0 col-lg-2 mx-auto mx-lg-0 text-center text-lg-start clicavel alternativa-aleatoria">
                    <img class="d-none d-lg-inline" src="Public/Icones/nocheck.png" style="width: inherit; height: inherit">
                    <span class="fs-5 clicavel">Não</span>
                </div>
            </div>
            <div class="d-sm-block d-lg-flex justify-content-center mt-4" style="widht: 100%">
                <div class="col-0 col-lg-4 mx-auto mx-lg-0 text-center text-lg-start text-center">
                    <span class="fs-5">Duração:</span>
                </div>
                <div class="col-0 col-lg-4 mx-auto mx-lg-0 text-center text-lg-start clicavel" id="duracao">
                    <input type="number" class="border-1 border-dark rounded-4 text-center w-25" style="background-color: #BBBAC6"><label class="fs-5 ms-1">Minutos</label>
                </div>
            </div>
            <div class="d-flex my-5 justify-content-center">
                <div class="col-8 p-3 rounded-4 d-flex justify-content-center fs-5" style="background-color: #353531">
                    <span class="fs-5 text-white">Iniciar</span>
                </div>
            </div>
        </div>

    </body>
</html>
