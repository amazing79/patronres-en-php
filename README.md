Repositorio sobre patrones de diseño realizados o adaptados en php

La idea es ir actualizando con ejemplos de patrones encontrados y adaptados (o realizados desde cero) con php. La mayoría
son ejemplos del libro "Head First Design Patterns" cuyos ejemplos son realizados en Java. 

**Listado de patrones**

- Patron Composite
- Patron Command
- Patron Observer
- Patron State
- Patron Decorator

Algunas aclaraciones

Patron Observer

Este patron se realizó en 2 versiones, usando clases y usando interfaces. Para el caso de clases, en el libro usa como
ejemplo una clase que tiene Java y extiende la misma para implementar el patron. En este caso, se simulo el mismo comportamiento
teniendo en cuenta que php no posee esta clase. La ventaja es reusar los métodos para agregar, quitar y notificar a los 
observer, además que la interfaz Observer sabe que en el método update que va a recibir un "Observable". 
Contra: es más acoplado y estamos diseñando para clases concretas en vez de abstracciones

Para el caso de interfaces, la ventaja es que hay menos acoplamiento. Pero tenemos otra contra, al tener este desacople, 
nuestra interfaz Observer en el método update tiene que saber qué parámetros va a recibir para pasarle a los observadores
y puede que no necesiten todos. Se podría mejorar con crear distintas interfaces de observadores. Notar que en libro empieza
desarrollando el patron usando interfaces y luego lo modifica extendiendo las clases de Java

Se muestran ambas aunque el caso de la versión con clases esta pensada para lenguajes que tienen su propia version del patron
observer.

Patron state

Se muestran 2 ejemplos. Uno que se muestra en las clases prácticas de la asignatura. El otro hace referencia al ejemplo del 
libro. 

Patron Decorator

En el ejemplo del libro, al momento de definir la clase CondimentDecorator (la cual extiende de Beverage), sobreescribe el
método "getDescription" para que sea abstracta. Esto lo hace para obligar a las subclases del decorador a redefinir este 
método. En el caso de php, no permite hacer un método abstracto si el método sobreescrito no es abstracto. 

Para solucionar esto, fue necesario declarar dicho método como abstracto en la clase Beverage (y asi redefinirlo como abstracto
en la clase decorator, lo cual no aporta nada y se puede omitir). Ahora, con estos cambios, tenemos a Beverage como una clase 
abstracta con todos sus métodos abstractos, lo cual no tiene mucho sentido y se puede reemplazar por una interfaz. 

¿Por qué lo dejamos de esta manera? Más que nada para ser lo más fiel a la versión del libro y aclarando que las subclases
de decorator deben sobreescribir este método (Nota: se dejó a propósito, ya que se puede omitir y, aun así, sigue siendo 
abstracto por lo cual se debe implementar por las subclases de este). Al analizar la herencia de esta manera, vemos que la
versión del método abstracto qué implementados es de la clase Decorador, en cambio, el método "cost" estamos implementando 
la versión de la clase Beverage. Nuevamente, se aclara que se puede realizar sin necesidad de hacer este método "getDescription"
abstracto, recordando sobreescribirlo en todos los condimentos y es parte del uso de este patron.