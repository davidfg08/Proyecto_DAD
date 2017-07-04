# proyecto
Proyecto con PHP de la materia Desarrollo de Aplicaciones Distribuidas

MapReduce es un modelo de programación que da soporte a la computación paralela
sobre grandes colecciones de datos en grupos de computadoras. Consta de 2
funciones, Map y Reduce, que se aplican sobre pares de datos (clave, valor), así:

• Map toma como entrada un par (clave,valor) y devuelve una lista de pares
(clave2, valor2). Esta operación se realiza en paralelo para cada par de datos de
entrada.
• Luego se agrupan todos los pares generados con la misma clave de todas las
listas, creando una lista por cada una de las claves generadas.
• Reduce se realiza en paralelo tomando las entradas obtenidas en el Map y
produciendo una colección de valores.

Se requiere realizar un contador de palabras implementando las funciones Map y
Reduce de manera que las mismas puedan utilizarse en un entorno distribuido.
Se pueden ingresar datos a la aplicación mediante un archivo de texto sin formato ó a
través de un campo de texto multilínea (textarea). La palabra a buscar se ingresará a
través de un campo de texto de una línea (input).

El sistema debe poseer capas que permitan:
1. Centralizar la conexión a la base de datos
2. Cambiar de manejador de base de datos
3. Validar la información que se envía al servidor (seguridad)

Consideraciones:
1. La programación se realizará en un servidor previamente configurado.
2. Se empleará PHP como lenguaje de programación y MySQL como manejador
de base de datos.
3. Se requiere una interfaz gráfica funcional mas no sumamente elaborada o
compleja.
