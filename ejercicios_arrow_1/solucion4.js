const revisarSables = () => {
    let sablesDeLuz = [-1, -5, 9, 8, 7, -8];
    let filtroSables = sablesDeLuz.filter(sable => sable < 0);
    console.log('Sables con energía negativa: ' + filtroSables.length);
};

revisarSables();
