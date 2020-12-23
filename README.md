
## Patrón Adapter

Este es el código de ejemplo realizado para el video de youtube explicando que es y cuando usar
el patrón adapter con implementación en Laravel.

### Link del video

https://www.youtube.com/watch?v=DEriDJS9IR0

### Setup

 1. Clonar el projecto `git clone git@github.com:jcwirko/Adapter-Pattern-Laravel.git`
 2. Ejecutar `php -S localhost:8000 -t public`
 3. Hay una carpeta postman en el directorio raíz del proyecto, importarlo y ejecutar las colecciones 
    o en el browers. Las 3 rutas son:
   
    - `http://localhost:8000/api/countries`
    - `http://localhost:8000/api/country-by-name?name=colombia` acepta un País para este parámetro
    - `http://localhost:8000/api/country-by-capital?capital=bue` acepta una capital para este parámetro
    
