const celsiusToFahrenheit = (celsius) => {
    return (celsius * 9/5) + 32;
  };
  
  const temperaturaCelsius = 30;
  const temperaturaFahrenheit = celsiusToFahrenheit(temperaturaCelsius);
  console.log(`${temperaturaCelsius} grados Celsius son ${temperaturaFahrenheit} grados Fahrenheit`);
  