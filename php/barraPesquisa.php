<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  <h1>Pesquisar</h1>
    <form id="Pesquisar" onsubmit="return false;">
        <input type="text" name="PESQUISAR" id="PESQUISAR" placeholder="Busque o que você procura">
        <button type="button" onclick="fPesquisar()">Pesquisar</button>
    </form>
    <br>
    <table border="1" id="tabelaProdutos">
        <tr>
            <th>Nome</th>
            <th>Preço</th>
            <th>Categoria</th>
            <th>Descrição</th>
        </tr>
        <tr>
            <td colspan="4">Digite algo para pesquisar...</td>
        </tr>
    </table>
    <script src="../js/pesquisa.js"></script>
</body>
</html>