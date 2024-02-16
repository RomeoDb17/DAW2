const generarNumerosAleatoriosSinRepetir = () => {
    const numeros = new Set();
    while (numeros.size < 100) {
      numeros.add(Math.floor(Math.random() * 1000) + 1);
    }
    return [...numeros];
  };
  
  console.log(generarNumerosAleatoriosSinRepetir());
  