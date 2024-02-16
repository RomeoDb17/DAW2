const obtenerLetraDNI = (dni) => {
    const letras = "TRWAGMYFPDXBNJZSQVHLCKE";
    const numero = dni % 23;
    if (isNaN(dni) || dni < 0 || dni.toString().length !== 8) {
      return "DNI Erróneo";
    }
    return letras.charAt(numero);
  };
  
  const dni = 12345678;
  console.log(obtenerLetraDNI(dni));
  