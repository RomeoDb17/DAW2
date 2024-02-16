const obtenerEnteroAleatorio = (valorMaximo) => {
    return Math.floor(Math.random() * valorMaximo) + 1;
  };
  
  const valorMaximo = 10;
  const numeroAleatorio = obtenerEnteroAleatorio(valorMaximo);
  console.log(numeroAleatorio);
  