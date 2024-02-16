const calcularMedia = (numeros) => {
    const suma = numeros.reduce((total, num) => total + num, 0);
    return suma / numeros.length;
  };
  
  // Ejemplo de uso:
  const arrayEnteros = [10, 20, 30, 40, 50];
  console.log(`La media es: ${calcularMedia(arrayEnteros)}`);
  