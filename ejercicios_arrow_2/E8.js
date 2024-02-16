const empleados = [
    { nombre: "Juan", sueldo: 2500 },
    { nombre: "María", sueldo: 1500 },
    { nombre: "Marina", sueldo: 3000 },
    { nombre: "Marta", sueldo: 2000 },
    { nombre: "Paco", sueldo: 3500 },
    { nombre: "Cristina", sueldo: 1750 },
    { nombre: "Alex", sueldo: 1500 },
    { nombre: "Mario", sueldo: 2000 },

];

const empleadoMasGana = empleados.reduce((max, empleado) => max.sueldo > empleado.sueldo ? max : empleado);
console.log(`El empleado que más gana es ${empleadoMasGana.nombre} con un sueldo de ${empleadoMasGana.sueldo}`);
