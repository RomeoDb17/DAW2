const calcularTiempo = (distancia, velocidad) => {
    return distancia / velocidad;
  };
  
  const distancia = 120;
  const velocidad = 73000;
  const tiempo = calcularTiempo(distancia, velocidad);
  console.log(`El tiempo necesario es de ${tiempo} horas`);
  