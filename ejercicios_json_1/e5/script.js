const jsonString = '{"nombre": "Mario", "apellidos": "Sánchez López", "nacido": "26-11-1986", "curso": "DAW2", "asignatura": "DEWC", "ciudad": "El Puerto de Santa María"}';

const alumnoObject = JSON.parse(jsonString);
alumnoObject.nacido = new Date(alumnoObject.nacido);

const datosConcatenados = `Nombre: ${alumnoObject.nombre}, Apellidos: ${alumnoObject.apellidos}, Nacido: ${alumnoObject.nacido.toDateString()}, Curso: ${alumnoObject.curso}, Asignatura: ${alumnoObject.asignatura}, Ciudad: ${alumnoObject.ciudad}`;

document.getElementById("datosAlumno").innerText = datosConcatenados;
