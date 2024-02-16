const Calcular = () => {
    let salarioMensual = 3500000;
    let comision = 1500000;
    let lecenciaVendida = 4;
    let totalcomisiones = comision * lecenciaVendida;
    let totalSalario = ((salarioMensual + totalcomisiones) / 100) * 95;

    console.log('El salario mensual es de ' + totalSalario);
};

Calcular();
