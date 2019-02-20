# PHP-REST-API (v2)

Script PHP 7 de un solo archivo que agrega una API REST a una base de datos InnoDB MySQL 5.6. PostgreSQL 9.1 y MS SQL Server 2012 son totalmente compatibles.

NB: Esta es la implementaci�n de referencia de [TreeQL](https://treeql.org) en PHP.

NB: �Est�s buscando v1? Est� aqu�: https://github.com/Feliphegomez/api-rest-php/tree/v1.0.0

## Requerimientos

  - PHP 7.0 o superior con controladores PDO para MySQL, PgSQL o SqlSrv habilitados
  - MySQL 5.6 / MariaDB 10.0 o superior para caracter�sticas espaciales en MySQL
  - PostGIS 2.0 o superior para caracter�sticas espaciales en PostgreSQL 9.1 o superior
  - SQL Server 2012 o superior (2017 para soporte de Linux)

##  Problemas conocidos

- �Ver los enteros como cadenas de texto? Aseg�rese de habilitar la extensi�n nd_pdo_mysql y deshabilite pdo_mysql .

## Instalaci�n

Esta es una aplicaci�n de un solo archivo! Cargue "`api.php`" en alg�n lugar y disfrute!

Para el desarrollo local, puede ejecutar el servidor web incorporado de PHP:

    php -S localhost:8080/api/

Pruebe el script abriendo la siguiente URL:

    http://localhost:8080/api/api.php/records/posts/1
    http://localhost:8080/api/posts/1 (si se incluye el archivo .htaccess)

No olvide modificar la configuraci�n en la parte inferior del archivo.

## Configuraci�n

Edite las siguientes l�neas en la parte inferior del archivo "`api.php`":

    $config = new Config([
        'username' => 'xxx',
        'password' => 'xxx',
        'database' => 'xxx',
    ]);

Estas son todas las opciones de configuraci�n y su valor predeterminado entre par�ntesis:

"driver": mysql , pgsql o sqlsrv ( mysql )
"address": Nombre de host del servidor de base de datos ( localhost )
"port": puerto TCP del servidor de la base de datos (predeterminado en el controlador predeterminado)
"username": nombre de usuario del usuario que se conecta a la base de datos (no predeterminado)
"password": contrase�a del usuario que se conecta a la base de datos (no predeterminada)
"database": Base de datos a la que se realiza la conexi�n (no predeterminada)
"middlewares": Lista de middlewares para cargar ( cors )
"controllers": lista de controladores para cargar ( records,openapi )
"openApiBase": informaci�n de OpenAPI ( {"info":{"title":"PHP-CRUD-API","version":"1.0.0"}} )
"cacheType": TempFile , Redis , Memcache , Memcached o NoCache ( TempFile )
"cachePath": ruta / direcci�n del cach� (por defecto al directorio temporal del sistema)
"cacheTime": n�mero de segundos que la memoria cach� es v�lida ( 10 )
"debug": muestra los errores en el encabezado "X-Debug-Info" ( false )

## Compilacion

El c�digo reside en el directorio "`src`". Puedes acceder a ella en la URL:

    http://localhost:8080/api/src/records/posts/1

Puede compilar todos los archivos en un solo archivo "`api.php`" usando:

    php build.php

NB: La secuencia de comandos agrega las clases en orden alfab�tico (directorios primero).

## Limitaciones

Estas limitaciones tambi�n estaban presentes en v1:

  - Las claves primarias deben ser de incremento autom�tico (de 1 a 2 ^ 53) o UUID
  - Las claves primarias o externas compuestas no son compatibles
  - No se admiten escrituras complejas (transacciones)
  - Las consultas complejas que llaman a funciones (como "concat" o "suma") no son compatibles
  - La base de datos debe soportar y definir restricciones de clave externa

## Caracteristicas

Estas caracter�sticas coinciden con las caracter�sticas en v1 (ver rama "v1"):

  - [x] Un solo archivo PHP, f�cil de implementar.
  - [x] Muy poco c�digo, f�cil de adaptar y mantener.
  - [ ] ~~Transmisi�n de datos, bajo consumo de memoria.~~
  - [x] Admite variables POST como entrada (x-www-form-urlencoded)
  - [x] Admite un objeto JSON como entrada
  - [x]  Admite una matriz JSON como entrada (inserci�n por lotes)
  - [ ] ~~Admite la carga de archivos desde formularios web (multipart / form-data)~~
  - [ ] ~~Salida JSON condensada: la primera fila contiene nombres de campo~~
  - [x] Desinfectar y validar la entrada utilizando devoluciones de llamada
  - [x] Sistema de permisos para bases de datos, tablas, columnas y registros.
  - [x] Los dise�os de bases de datos multiusuario son compatibles
  - [x] Soporte CORS multi-dominio para peticiones de dominio cruzado
  - [x] Soporte para la lectura de resultados combinados de varias tablas.
  - [x] Soporte de b�squeda en m�ltiples criterios
  - [x] Paginaci�n, b�squeda, clasificaci�n y selecci�n de columnas.
  - [x] Detecci�n de relaciones con resultados anidados (belongsTo, hasMany y HABTM)
  - [ ] ~~Relaci�n "transforma" (de JSON condensado) para PHP y JavaScript~~
  - [x] Soporte de incremento at�mico mediante PATCH (para contadores)
  - [x] Campos binarios soportados con codificaci�n base64
  - [x] Campos y filtros espaciales / SIG compatibles con WKT
  - [ ] ~~Soporte de datos no estructurados a trav�s de JSON / JSONB~~
  - [x] Generar documentaci�n de API utilizando herramientas OpenAPI
  - [x] Autenticaci�n a trav�s de token JWT o nombre de usuario / contrase�a
  - [ ] ~~Soporte de SQLite~~

 NB: Sin marca significa: a�n no implementado. Striken significa: no ser� implementado.

### Caracter�sticas adicionales

Estas caracter�sticas son nuevas y no se incluyeron en v1.

  - No refleja en cada solicitud (mejor rendimiento)
  - Los filtros complejos (con "y" y "o") son compatibles
  - Soporte para salida de estructura de base de datos en JSON
  - Soporte para datos booleanos y binarios en todos los motores de bases de datos
  - Soporte para datos relacionales en lectura (no solo en operaci�n de lista)
  - Soporte para middleware para modificar todas las operaciones (tambi�n lista)
  - Informe de errores en JSON con el estado HTTP correspondiente
  - Soporte para autenticaci�n b�sica y v�a proveedor de autenticaci�n (JWT)
  - Soporte para funcionalidad b�sica de firewall.

## Middleware

Puede habilitar el siguiente middleware utilizando el par�metro de configuraci�n "middlewares":

- "firewall": limita el acceso a direcciones IP espec�ficas
- "cors": soporte para solicitudes CORS (habilitado por defecto)
- "xsrf": Bloquee los ataques XSRF usando el m�todo 'Double Submit Cookie'
- "ajaxOnly": restringe las solicitudes que no sean AJAX para evitar ataques XSRF
- "jwtAuth": soporte para "autenticaci�n JWT"
- "basicAuth": Soporte para "Autenticaci�n b�sica"
- "authorization": restringe el acceso a ciertas tablas o columnas
- "validation": devuelve errores de validaci�n de entrada para reglas personalizadas
- "sanitation": aplicar saneamiento de entrada en crear y actualizar
- "multiTenancy": restringe el acceso de los inquilinos en un escenario con m�ltiples inquilinos
- "customization": proporciona controladores para la personalizaci�n de solicitudes y respuestas

El par�metro de configuraci�n "middlewares" es una lista separada por comas de middlewares habilitados. Puede ajustar el comportamiento del middleware utilizando par�metros de configuraci�n espec�ficos del middleware:

- "firewall.reverseProxy": se establece en "true" cuando se utiliza un proxy inverso ("")
- "firewall.allowedIpAddresses": lista de direcciones IP que pueden conectarse ("")
- "cors.allowedOrigins": los or�genes permitidos en los encabezados CORS ("*")
- "cors.allowHeaders": los encabezados permitidos en la solicitud CORS ("Content-Type, X-XSRF-TOKEN")
- "cors.allowMethods": los m�todos permitidos en la solicitud CORS ("OPTIONS, GET, PUT, POST, DELETE, PATCH")
- "cors.allowCredentials": para permitir credenciales en la solicitud CORS ("true")
- "cors.exposeHeaders": encabezados de lista blanca a los que los navegadores pueden acceder ("")
- "cors.maxAge": el tiempo que la concesi�n de CORS es v�lida en segundos ("1728000")
- "xsrf.excludeMethods": los m�todos que no requieren la protecci�n XSRF ("OPTIONS, GET")
- "xsrf.cookieName": el nombre de la cookie de protecci�n XSRF ("XSRF-TOKEN")
- "xsrf.headerName": el nombre del encabezado de protecci�n XSRF ("X-XSRF-TOKEN")
- "ajaxOnly.excludeMethods": los m�todos que no requieren AJAX ("OPTIONS, GET")
- "ajaxOnly.headerName": el nombre del encabezado requerido ("X-Requested-With")
- "ajaxOnly.headerValue": el valor del encabezado requerido ("XMLHttpRequest")
- "jwtAuth.mode": config�relo como "opcional" si desea permitir el acceso an�nimo ("requerido")
- "jwtAuth.header": nombre del encabezado que contiene el token JWT ("X-Autorizaci�n")
- "jwtAuth.leeway": el n�mero aceptable de segundos de inclinaci�n del reloj ("5")
- "jwtAuth.ttl": el n�mero de segundos que el token es v�lido ("30")
- "jwtAuth.secret": el secreto compartido utilizado para firmar el token JWT con ("")
- "jwtAuth.algorithms": los algoritmos permitidos, vac�o significa 'todos' ("")
- "jwtAuth.audiences": las audiencias permitidas, vac�o significa "todos" ("")
- "jwtAuth.issuers": los emisores que est�n permitidos, vac�o significa 'todos' ("")
- "basicAuth.mode": config�relo como "opcional" si desea permitir el acceso an�nimo ("requerido")
- "basicAuth.realm": texto que se le solicitar� al mostrar el inicio de sesi�n ("Se requieren nombre de usuario y contrase�a")
- "basicAuth.passwordFile": el archivo a leer para las combinaciones de nombre de usuario / contrase�a (".htpasswd")
- "permission.tableHandler": controlador para implementar las reglas de autorizaci�n de tablas ("")
- "permission.columnHandler": controlador para implementar las reglas de autorizaci�n de columna ("")
- "permission.recordHandler": controlador para implementar reglas de filtro de autorizaci�n de registros ("")
- "validation.handler": controlador para implementar reglas de validaci�n para valores de entrada ("")
- "sanitation.handler": controlador para implementar reglas de saneamiento para valores de entrada ("")
- "multiTenancy.handler": controlador para implementar reglas simples de tenencia m�ltiple ("")
- "customization.beforeHandler": Controlador para implementar la personalizaci�n de la solicitud ("")
- "customization.afterHandler": controlador para implementar la personalizaci�n de la respuesta ("")

Si no especifica estos par�metros en la configuraci�n, se utilizan los valores predeterminados (entre par�ntesis).

##  TreeQL, un GraphQL pragm�tico

TreeQL le permite crear un "�rbol" de objetos JSON en funci�n de la estructura (relaciones) de la base de datos SQL y su consulta.

Se basa libremente en el est�ndar REST y tambi�n est� inspirado en json: api.

### CRUD + Lista

La tabla de publicaciones de ejemplo tiene solo unos pocos campos:

    posts  
    =======
    id     
    title  
    content
    created

Las siguientes operaciones de la lista CRUD + act�an en esta tabla.

#### Crear

Si desea crear un registro, la solicitud se puede escribir en formato de URL como:

    POST /records/posts

Tienes que enviar un cuerpo que contiene:

    {
        "title": "Black is the new red",
        "content": "This is the second post.",
        "created": "2018-03-06T21:34:01Z"
    }

Y devolver� el valor de la clave principal del registro reci�n creado:

    2

#### Leer

Para leer un registro de esta tabla, la solicitud se puede escribir en formato de URL como:

    GET /records/posts/1

Donde "1" es el valor de la clave principal del registro que desea leer. Volver�

    {
        "id": 1
        "title": "Hello world!",
        "content": "Welcome to the first post.",
        "created": "2018-03-05T20:12:56Z"
    }

En las operaciones de lectura puede aplicar uniones.

#### Actualizar

Para actualizar un registro en esta tabla, la solicitud se puede escribir en formato de URL como:

    PUT /records/posts/1

Donde "1" es el valor de la clave principal del registro que desea actualizar. Enviar como un cuerpo:

    {
        "title": "Adjusted title!"
    }

Esto ajusta el t�tulo del post. Y el valor de retorno es el n�mero de filas que se establecen:

    1

#### Borrar

Si desea eliminar un registro de esta tabla, la solicitud se puede escribir en formato de URL como:

    DELETE /records/posts/1

Y devolver� el n�mero de filas eliminadas:

    1

#### Lista

Para listar los registros de esta tabla, la solicitud se puede escribir en formato de URL como:

    GET /records/posts

Volver�

    {
        "records":[
            {
                "id": 1,
                "title": "Hello world!",
                "content": "Welcome to the first post.",
                "created": "2018-03-05T20:12:56Z"
            }
        ]
    }

En las operaciones de lista puede aplicar filtros y uniones.

### Filtros

Los filtros proporcionan la funcionalidad de b�squeda, en las llamadas de lista, utilizando el par�metro "filtro". Debe especificar el nombre de la columna, una coma, el tipo de coincidencia, otra coma y el valor que desea filtrar. Estos son tipos de concordancia soportados:

  - "cs": contiene cadena (cadena contiene valor)
  - "sw": comienza con (la cadena comienza con el valor)
  - "ew": termina con (final de cadena con valor)
  - "eq": igual (la cadena o el n�mero coinciden exactamente)
  - "lt": menor que (el n�mero es menor que el valor)
  - "le": menor o igual (el n�mero es menor o igual al valor)
  - "ge": mayor o igual (el n�mero es mayor o igual que el valor)
  - "gt": mayor que (el n�mero es mayor que el valor)
  - "bt": entre (el n�mero est� entre dos valores separados por comas)
  - "in": in (el n�mero o la cadena est� en una lista de valores separados por comas)
  - "is": es nulo (el campo contiene el valor "NULL")

Puede negar todos los filtros al anteponer un car�cter "n", de modo que "eq" se convierta en "neq". Ejemplos de uso del filtro son:

    GET /records/categories?filter=name,eq,Internet
    GET /records/categories?filter=name,sw,Inter
    GET /records/categories?filter=id,le,1
    GET /records/categories?filter=id,ngt,2
    GET /records/categories?filter=id,bt,1,1

Salida:

    {
        "records":[
            {
                "id": 1
                "name": "Internet"
            }
        ]
    }

En la siguiente secci�n profundizaremos en c�mo puede aplicar varios filtros en una sola llamada de lista.

### Filtros m�ltiples

Los filtros pueden aplicarse aplicando el par�metro "filtro" en la URL. Por ejemplo la siguiente URL:

    GET /records/categories?filter=id,gt,1&filter=id,lt,3

solicitar� todas las categor�as "donde id> 1 e id <3". Si quieres "where id = 2 o id = 4" debes escribir:

    GET /records/categories?filter1=id,eq,2&filter2=id,eq,4
    
Como ve, agregamos un n�mero al par�metro "filtro" para indicar que se debe aplicar "OR" en lugar de "AND". Tenga en cuenta que tambi�n puede repetir "filter1" y crear un "AND" dentro de un "OR". Ya que tambi�n puede ir un nivel m�s profundo agregando una letra (af) puede crear casi cualquier �rbol de condici�n razonablemente complejo.

NB: solo puede filtrar en la tabla solicitada (no incluida en ella) y los filtros solo se aplican en la lista de llamadas.

### Selecci�n de columna

Por defecto, todas las columnas est�n seleccionadas. Con el par�metro "incluir" puede seleccionar columnas espec�ficas. Puede usar un punto para separar el nombre de la tabla del nombre de la columna. Las columnas m�ltiples deben estar separadas por comas. Se puede utilizar un asterisco ("*") como comod�n para indicar "todas las columnas". Similar a "incluir" puede usar el par�metro "excluir" para eliminar ciertas columnas:

```
GET /records/categories/1?include=name
GET /records/categories/1?include=categories.name
GET /records/categories/1?exclude=categories.id
```

Salida:

```
    {
        "name": "Internet"
    }
```

NB: las columnas que se utilizan para incluir entidades relacionadas se agregan autom�ticamente y no se pueden dejar fuera de la salida.

### Ordenando

Con el par�metro "orden" se puede ordenar. Por defecto, la clasificaci�n est� en orden ascendente, pero al especificar "desc" esto se puede revertir:

```
GET /records/categories?order=name,desc
GET /records/categories?order=id,desc&order=name
```

Salida:

```
    {
        "records":[
            {
                "id": 3
                "name": "Web development"
            },
            {
                "id": 1
                "name": "Internet"
            }
        ]
    }
```

NB: Puede ordenar en m�ltiples campos utilizando m�ltiples par�metros de "orden". No se puede ordenar en columnas "unidas".

### Paginaci�n

El par�metro "p�gina" contiene la p�gina solicitada. El tama�o de p�gina predeterminado es 20, pero se puede ajustar (por ejemplo, a 50):

```
GET /records/categories?order=id&page=1
GET /records/categories?order=id&page=1,50
```

Salida:

```
    {
        "records":[
            {
                "id": 1
                "name": "Internet"
            },
            {
                "id": 3
                "name": "Web development"
            }
        ],
        "results": 2
    }
```

NB: las p�ginas que no est�n ordenadas no pueden paginarse.

### Uniones / JOIN

Digamos que usted tiene una tabla de publicaciones que tiene comentarios (realizados por los usuarios) y que las publicaciones pueden tener etiquetas.

    posts    comments  users     post_tags  tags
    =======  ========  =======   =========  ======= 
    id       id        id        id         id
    title    post_id   username  post_id    name
    content  user_id   phone     tag_id
    created  message

Cuando desee enumerar las publicaciones con sus usuarios y etiquetas de comentarios, puede solicitar dos rutas de "�rbol":

    posts -> comments  -> users
    posts -> post_tags -> tags

Estas rutas tienen la misma ra�z y esta solicitud se puede escribir en formato de URL como:

    GET /records/posts?join=comments,users&join=tags

Aqu� puede omitir la tabla intermedia que vincula las publicaciones a las etiquetas. En este ejemplo, ver� los tres tipos de relaciones de tabla (hasMany, belongsTo y hasAndBelongsToMany) en efecto:

- "post" has many "comments"
- "comment" belongs to "user"
- "post" has and belongs to many "tags"

Esto puede llevar a los siguientes datos JSON:

    {
        "records":[
            {
                "id": 1,
                "title": "Hello world!",
                "content": "Welcome to the first post.",
                "created": "2018-03-05T20:12:56Z",
                "comments": [
                    {
                        id: 1,
                        post_id: 1,
                        user_id: {
                            id: 1,
                            username: "mevdschee",
                            phone: null,
                        },
                        message: "Hi!"
                    },
                    {
                        id: 2,
                        post_id: 1,
                        user_id: {
                            id: 1,
                            username: "mevdschee",
                            phone: null,
                        },
                        message: "Hi again!"
                    }
                ],
                "tags": []
            },
            {
                "id": 2,
                "title": "Black is the new red",
                "content": "This is the second post.",
                "created": "2018-03-06T21:34:01Z",
                "comments": [],
                "tags": [
                    {
                        id: 1,
                        message: "Funny"
                    },
                    {
                        id: 2,
                        message: "Informational"
                    }
                ]
            }
        ]
    }

Ver� que se detectan las relaciones "belongsTo" y el valor al que se hace referencia reemplaza el valor de la clave externa. En el caso de "hasMany" y "hasAndBelongsToMany", el nombre de la tabla se utiliza una nueva propiedad en el objeto.

NB: debe crear una restricci�n de clave externa para que la uni�n funcione.

### Operaciones por lotes

Cuando desee crear, leer, actualizar o eliminar, puede especificar varios valores de clave principal en la URL. Tambi�n debe enviar una matriz en lugar de un objeto en el cuerpo de la solicitud para crear y actualizar. 

Para leer un registro de esta tabla, la solicitud se puede escribir en formato de URL como:

    GET /records/posts/1,2

El resultado puede ser:

    [
            {
                "id": 1,
                "title": "Hello world!",
                "content": "Welcome to the first post.",
                "created": "2018-03-05T20:12:56Z"
            },
            {
                "id": 2,
                "title": "Black is the new red",
                "content": "This is the second post.",
                "created": "2018-03-06T21:34:01Z"
            }
    ]

De forma similar, cuando desea realizar una actualizaci�n por lotes, la solicitud en formato de URL se escribe como:

    PUT /records/posts/1,2

Donde "1" y "2" son los valores de las claves primarias de los registros que desea actualizar. El cuerpo debe contener el mismo n�mero de objetos, ya que hay claves primarias en la URL:

    [   
        {
            "title": "Adjusted title for ID 1"
        },
        {
            "title": "Adjusted title for ID 2"
        }        
    ]

This adjusts the titles of the posts. And the return values are the number of rows that are set:

    1,1

Esto ajusta los t�tulos de los mensajes. Y los valores de retorno son el n�mero de filas que se establecen:

### Lo que significa que hab�a dos operaciones de actualizaci�n y cada una de ellas hab�a establecido una fila. Las operaciones por lotes utilizan las transacciones de la base de datos, por lo que todas tienen �xito o todas fallan (las exitosas se devuelven).

Para el soporte espacial hay un conjunto adicional de filtros que se pueden aplicar en las columnas de geometr�a y que comienzan con una "s":

- "sco": contiene espacial (la geometr�a contiene otra)
- "scr": cruces espaciales (la geometr�a cruza otra)
- "sdi": separaci�n espacial (la geometr�a es diferente de otra)
- "seq": espacial igual (la geometr�a es igual a otra)
- "pecado": intersecciones espaciales (la geometr�a se interseca con otra)
- "sov": superposiciones espaciales (la geometr�a se superpone a otra)
- "sto": toques espaciales (la geometr�a toca a otra)
- "swi": espacial dentro (la geometr�a est� dentro de otra)
- "sic": el espacio est� cerrado (la geometr�a es cerrada y simple)
- "sis": espacial es simple (la geometr�a es simple)
- "siv": el espacio es v�lido (la geometr�a es v�lida)

Estos filtros se basan en los est�ndares OGC y tambi�n lo es la especificaci�n WKT en la que se representan las columnas de geometr�a.

### Autenticaci�n

La autenticaci�n se realiza mediante el env�o de un encabezado de "Autorizaci�n". Identifica al usuario y lo almacena en el $_SESSION super global. Esta variable se puede usar en los controladores de autorizaci�n para decidir si o no sombeody deber�a tener acceso de lectura o escritura a ciertas tablas, columnas o registros. Actualmente hay dos tipos de autenticaci�n admitidos: "B�sico" y "JWT". Esta funcionalidad se habilita agregando el middleware 'basicAuth' y / o 'jwtAuth'.

#### utenticaci�n b�sica

El tipo B�sico es compatible con un archivo que contiene a los usuarios y sus contrase�as (con hash) separadas por dos puntos (':'). Cuando las contrase�as se ingresan en texto sin formato, se llenan autom�ticamente. El nombre de usuario autenticado se almacenar� en la $_SESSION['username'] . Debe enviar un encabezado de "Autorizaci�n" que contenga un nombre de usuario y una contrase�a codificados en base64 url ??y separados por dos puntos despu�s de la palabra "B�sico".

    Authorization: Basic dXNlcm5hbWUxOnBhc3N3b3JkMQ

Este ejemplo env�a la cadena "username1:password1".

#### Autenticaci�n JWT

El tipo JWT requiere que otro servidor (SSO / Identity) firme un token que contiene notificaciones. Ambos servidores comparten un secreto para que puedan firmar o verificar que la firma es v�lida. Las reclamaciones se almacenan en la $_SESSION['claims'] . Debe enviar un encabezado de "Autorizaci�n X" que contenga un encabezado, cuerpo y firma de token con codificaci�n url base64, cuerpo y firma despu�s de la palabra "Portador" ( lea m�s sobre JWT aqu� ). El est�ndar dice que necesita usar el encabezado "Autorizaci�n", pero esto es problem�tico en Apache y PHP.

    X-Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiIxMjM0NTY3ODkwIiwibmFtZSI6IkpvaG4gRG9lIiwiYWRtaW4iOnRydWUsImlhdCI6IjE1MzgyMDc2MDUiLCJleHAiOjE1MzgyMDc2MzV9.Z5px_GT15TRKhJCTHhDt5Z6K6LRDSFnLj8U5ok9l7gw

Este ejemplo env�a las reclamaciones firmadas:

    {
      "sub": "1234567890",
      "name": "John Doe",
      "admin": true,
      "iat": "1538207605",
      "exp": 1538207635
    }

NB: la implementaci�n de JWT solo admite los algoritmos basados ??en hash HS256, HS384 y HS512.
