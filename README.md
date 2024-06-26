Repositorio sobre patrones de diseño realizados o adaptados en php

La idea es ir actualizando con ejemplos de patrones encontrados y adaptados (o realizados desde cero) con php. La mayoría
son ejemplos del libro "Head First Design Patterns" cuyos ejemplos son realizados en Java. 

**Listado de patrones**

- Patron Composite
- Patron Command
- Patron Observer
- Patron State
- Patron Decorator
- Patron Factory
- Patron Singleton
- Patron Template Method

Algunas aclaracionesq

**Patron Composite**

En el libro se explica el patron Composite junto con el patron Iterator. Esto es para recorrer los objetos (tipo item)  que tiene
el objeto Compuesto. Para evitar esto, se uso la clase Array de php que ya cuenta con la implementación del patron iterator. El uso de 
este patron es con fines practicos, ya que actualmente contamos con la estructura "foreach" que nos simplifica el recorrer arreglos.

Pero cual es el sentido del Patron iterator? No tener que exponer como accedemos a los elmentos de nuestra colección (generalmente
a traves del indice del array), pero tener en cuenta que podemos usar otras estructuras para guardar nuestros elementos (como por 
ejemplo, hashTables)

Tambien podemos ver que parte del truco del patron Composite es que tenemos que tener objetos que son hojas y otros compuestos. 
Es muy comun de usarlo en problemas donde tenemos relaciones parte-de (o una estructura de arbol, de ahí entender de porque necesitamos
objetos tipo hojas). 

Otro patron que suma para hacer mas eficiente el patron Iterator es del uso del Iterator nulo (una especie de patron null object), el cual
tiene comportamiento cuando no tenemos nada. 

**Patron Observer**

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

**Patron state**

Se muestran 2 ejemplos. Uno que se muestra en las clases prácticas de la asignatura. El otro hace referencia al ejemplo del 
libro. 

**Patron Decorator**

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

**Patron Factory**

La idea principal de este patron es desacoplar la creación de objetos encapsulando la creación de estos a "Fábricas". Cabe 
destacar que se pueden usar tanto interfaces como clases abstractas en el diseño del patron.

En este caso, podemos destacar un conjunto de conceptos que se explican en el capítulo: Se explican 2 patrones y medio
(se hace mención a un casi patrón, el simple factory, que es en realidad una técnica para crear objetos), se explica el 
principio de inversión de dependencia, se hace una distinción que "implementar una interfaz" no siempre hace referencia a
usar Interfaces (pueden ser clases abstractas), que no se puede evitar el uso de clases concretas y que tenemos oculto 
el uso del patron "Template Method", el cual lo podemos ver en la clase Pizza.

"2 patrones y medio": Como se aclaró, nombra a una técnica (o estrategia) "simple factory" la cual se basa en un usar un objeto
que se encarga de fabricar otros objetos, pero además muestra el uso del patron "Abstract Factory" y el "Factory Method". 
Para no tener que definir todas las clases del capítulo y no re-factorizar las clases creadas, se opto por crear 2 métodos 
en la clase PizzaStore, uno para uso del "Factory Method" y otro para el uso de "Abstract Factory" (para ser más precisos 
en la Interfaz PizzaIngredientFactory).

Notar que las "Fabricas" pueden crear varios tipos de objetos (en el caso de las pizzas, cuando indicamos por parámetro 
que tipo de pizza queremos) o contar con varios métodos que nos devuelven distintos productos (En el caso de PizzaIngredientsFactory, 
el cual tiene un método por cada ingrediente)

"Principio de inversión de dependencia": Al diseñar para abstracciones y no clases concretas, hacemos uso de este principio.
¿Pero qué es lo que invertimos? Imaginemos que tenemos un sentido de arriba a abajo donde una clase que utiliza objetos concretos
es la de más alto nivel, y la concreta, es más bajo nivel. En este sentido, la clase de más alto nivel depende de la de más
bajo nivel. Al usar abstracciones, nuestra clase de Alto nivel ya no depende de algo concreto y por lo cual se dice que ahora
invertimos esa dependencia, ya que ahora la clase de bajo nivel se diseña pensando en cumplir el protocolo de la de más alto 
nivel.

Otra aclaración sobre este principio es que es una guía (o sugerencia) y no una regla, ya que si solo tenemos abstracciones,
¿quien resuelve el problema? Recordemos que las clases concretas son las que hacen realmente el trabajo.

"Implementar Interfaz" Si bien usa clases abstractas para el caso de "Factory Method", usa este término para hacer referencia 
a que implementamos "interfaces" en manera general y no en término técnico, ya que implementamos la interfaz de un súpertipo. 

"No se puede evitar el uso de clases concretas": Recordar que son las clases concretas las cuales realizan todo el trabajo
y que siempre que usemos el operador "new" estamos creando un objeto concreto. Lo que hacemos con esto patron es que si en 
alguna parte de nuestro código, la creación de objetos varía mucho, la encapsulemos en una clase (o método)

"Uso del patron template method": Esto lo podemos ver en la clase PizzaStore, la cual propone el método orderPizza donde creamos 
un tipo de Pizza (este se personaliza en las Fábricas) y luego usamos la plantilla "prepare, bake, cut y box" (además estas se 
pueden redefinir en las subclases de Pizza).

**Patron Singleton**

En este caso, no hay mucho para aclarar en la implementación del mismo. Se hacen observaciones para el caso de Java donde pueden 
correr varios hilos y que sin sincronizacion se puedan crear mas de una instancia. 

**Patron Template Method**

En el ejemplo del libro, se explaya bastante con los distintos tipos de uso del patron y aclarando la idea principal: El proposito 
de este patron es ofrecer una plantilla y que las subclases pueden modificar las partes del algoritmo a su antojo. Cual puede ser 
el detalle? Que reemplacemos todas las partes del Algoritmo, en todas las subclases, dando una idea de un "patron strategy" mas que 
de un "template method". Cabe aclarar que el objetivo principal del patron strategy es ofrecer distintas formas de hacer un algoritmo, 
 es decir, propone  distintos comportamientos que pueden ser intercambiables. En cambio, el objetivo del template method es que las 
subclases pueden elegir como implementar pasos del algoritmo. 

Un ejemplo rebuscado de esto es cuando propone un algoritmo de ordenamiento (donde puede ordenar desde numeros hasta patos) usando el 
principio de hollywood (no nos llame, nosotros lo llamaremos, que a su vez es una forma de invertir las dependencias). En el caso de 
este principio podemos ver como la clase de alto nivel, usa las de mas bajo nivel pero teniendo control de como y cuando. Si observamos 
el ejemplo de ordenar, la clase de mas alto nivel decide como ordenar, pero usando las implementaciones de mas bajo nivel. 

Para cerrar, ademas vemos como usar un metodo gancho ("hook") para variar parte del algoritmo. Estos métodos suelen tener poca (o nula) 
funcionalidad. Para esto, podemos ver la clase CoffeeWithHook el cual aleatoriamente agrega condimentos. Notar que en la clase padre 
siempre se agrega condimentos y las hijas deciden si sobreescriber o no este comportamiento. 