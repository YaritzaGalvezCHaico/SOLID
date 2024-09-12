# SOLID
Práctica SOLID 

# Calculadora de Patas

Este proyecto es una simple calculadora que toma una lista de animales (representados por la cantidad de patas que tienen) y calcula el total de patas. La clase permite generar el resultado tanto en texto plano como en formato JSON.

## Contenido

Este proyecto incluye los siguientes archivos:

- `index.php`: El archivo principal que ejecuta el programa.
- `patas.php`: Contiene la clase `CalculatePatas` que se encarga de realizar los cálculos y formatear los resultados.

## ¿Cuántas cosas crees que hace esta clase?

La clase `CalculatePatas` realiza tres tareas principales:

1. **Almacenar los datos de entrada:** La clase recibe una lista de cantidades de patas de diferentes animales.
2. **Calcular la suma de las patas:** Utiliza el método `sum()` para sumar el total de patas.
3. **Mostrar el resultado en diferentes formatos:** 
    - **Formato texto:** El método `print()` devuelve el total de patas en formato legible.
    - **Formato JSON:** El método `toJson()` devuelve el total de patas en un formato JSON, útil para integraciones con APIs o interfaces modernas.

### Métodos de la clase `CalculatePatas`

- **`__construct($animals = [])`:** Inicializa la clase con una lista de animales y establece la suma en 0.
- **`sum()`:** Realiza la suma de todas las cantidades de patas en el arreglo.
- **`print()`:** Retorna el resultado en texto: "Cálculo ejecutado. Los animales suman X patas."
- **`toJson()`:** Retorna el resultado en formato JSON con el mensaje y el total de patas.
- **`validateAnimals()`:** (opcional) Se asegura de que los valores en la lista de animales sean enteros no negativos.

## ¿Cómo cambiamos la calculadora para que además de dar como salida el total de patas, también tenga la posibilidad de dar el total de patas en formato JSON?

Para agregar la funcionalidad de salida en formato JSON, añadimos el método `toJson()` a la clase. Este método utiliza la función `json_encode()` de PHP para convertir el resultado en un formato JSON.

El método `toJson()` en la clase `CalculatePatas` genera una salida con la siguiente estructura:

```json
{
    "mensaje": "Cálculo ejecutado",
    "total_patas": X
}
