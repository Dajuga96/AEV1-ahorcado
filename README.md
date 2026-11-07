# Juego del Ahorcado

El clásico juego del ahorcado desarrollado en PHP utilizando el manejo de sesiones (`$_SESSION`) para mantener el estado de la partida y dividido en diferentes vistas.

##  Instrucciones Básicas del Juego

1. **Objetivo:** Adivinar la palabra secreta oculta (en esta versión, nombres de animales) antes de quedarte sin intentos.
2. **Vidas:** Comienzas la partida con **6 vidas**.
3. **Mecánica del turno:**
    - Introduce una letra en la caja de texto y pulsa el botón "Adivinar".
    - Si la letra pertenece a la palabra secreta, se revelará en su posición correspondiente.
    - Si la letra **no** pertenece a la palabra secreta, perderás 1 vida.
    - El sistema recordará y te mostrará qué letras has usado ya para que no las repitas por error.
4. **Fin de la partida:**
    - **Ganas** si logras revelar todas las letras de la palabra secreta.
    - **Pierdes** si tu contador de vidas llega a 0.
    - Al finalizar, el juego te redirigirá a una pantalla de victoria o derrota con la opción de volver a jugar.

