const promediar = () => {
    let diasmax = [45, 95, 54, 68, 45, 98, 48, 35, 36];
    let diasmin = [12, 18, 25, 32, 21, 7, 13, 32, 5];

    for (let index = 0; index < diasmax.length; index++) {
        const promedio = (diasmax[index] + diasmin[index]) / 2;
        console.log(`El promedio del día ${index + 1} fue ${promedio}`);
    }
};

promediar();
