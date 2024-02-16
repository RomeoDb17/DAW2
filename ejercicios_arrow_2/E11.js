const fibonacci = (n) => {
    const serie = [0, 1];
    for (let i = 2; i < n; i++) {
      serie[i] = serie[i - 1] + serie[i - 2];
    }
    return serie.slice(0, n);
  };
  
  const primeros10Fibonacci = fibonacci(10);
  console.log(primeros10Fibonacci);
  