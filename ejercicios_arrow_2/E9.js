const primeros20NumerosPares = [];
for (let i = 1; primeros20NumerosPares.length < 20; i++) {
  if (i % 2 === 0) {
    primeros20NumerosPares.push(i);
  }
}
console.log(primeros20NumerosPares);
