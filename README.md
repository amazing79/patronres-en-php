Repositorio sobre patrones de diseño realizados o adaptados en php

La idea es ir actualizando con ejemplos de patrones encontrados y adaptados (o realizados desde cero) con php. La mayoría
son ejemplos del libro "Head First Design Patterns" cuyos ejemplos son realizados en Java. 

**Listado de patrones**

- Patron Composite
- Patron Command
- Patron Observer
- Patron State

Algunas aclaraciones

Patron Observer

Este patron se realizó en 2 versiones, usando clases y usando interfaces. Para el caso de clases, en el libro usa como
ejemplo una clase que tiene Java y extiende la misma para implementar el patron. En este caso, se simulo el mismo comportamiento
teniendo en cuenta que php no posee esta clase. La ventaja es reusar los métodos para agregar, quitar y notificar a los 
observer, además que la interfaz Observer sabe que en el método update que va a recibir un "Observable". 
Contra: es más acoplado y estamos diseñando para clases concretas en vez de abstracciones

Para el caso de interfaces, la ventaja es que hay menos acoplamiento. Pero tenemos otra contra, al tener este desacople, 
nuestra interfaz Observer en el método update tiene que saber qué parámetros va a recibir para pasarle a los observadores
y puede que no necesiten todos. Se podría mejorar con crear distintas interfaces de observadores. 

Se muestran ambas aunque el caso de la versión con clases esta pensada para lenguajes que tienen su propia version del patron
observer.

Patron state

Se muestran 2 ejemplos. Uno que se muestra en las clases prácticas de la asignatura. El otro hace referencia al ejemplo del 
libro. 