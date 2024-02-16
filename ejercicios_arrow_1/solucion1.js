const calcularDistancia = (x1, y1, x2, y2) => Math.sqrt(Math.pow(x2 - x1, 2) + Math.pow(y2 - y1, 2));

let distancia = calcularDistancia(0, 0, 12, 0);
console.log(`La distancia calculada es ${distancia}`);
