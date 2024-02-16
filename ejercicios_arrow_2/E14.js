const calcularPrecioConIVA = (precio, iva = 21) => {
    return precio * (1 + iva / 100);
  };
  
  console.log(calcularPrecioConIVA(100));
  