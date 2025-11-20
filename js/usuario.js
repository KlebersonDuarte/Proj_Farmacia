async function fCadastrar() {
    const CADASTRAR = document.getElementById("CADASTRAR");

    const DadosCadas = new FormData(CADASTRAR);

  const dados = Object.fromEntries(DadosCadas.entries());
  dados.acao = "cadastrar";

    if (!dados.NOME || !dados.EMAILnew || !dados.SENHAnew || !dados.CPF) {
        alert("Preencha todos os campos.");
        return; 
    }

  try{
    const Retorno = await fetch("usuario.php",{
        method: 'POST',
      headers: { 'Content-Type': 'application/json' },
      body: JSON.stringify(dados)
    })

    const Resposta = await Retorno.json();
alert(Resposta.msg);
}
  catch (error) {
    console.error("Erro:",error)
  }
  
}

async function fLogin() {
        const LOGIN = document.getElementById("LOGIN");
         const DadosLogin = new FormData(LOGIN);

  const entrar = Object.fromEntries(DadosLogin.entries());
  entrar.acao = "login";

      if (!entrar.EMAIL || !entrar.SENHA) {
        alert("Preencha todos os campos.");
        return; 
    }


  try {
    const Retorno = await fetch("usuario.php",{
        method: "POST",
      headers: { 'Content-Type': 'application/json' },
      body: JSON.stringify(entrar)
    })

    const Resposta = await Retorno.json();
alert(Resposta.msg);

  } catch (error) {
    console.error("Erro:",error)
  }
}