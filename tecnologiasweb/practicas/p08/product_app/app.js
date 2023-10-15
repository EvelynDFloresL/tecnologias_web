// JSON BASE A MOSTRAR EN FORMULARIO
var baseJSON = {
    "precio": 0.0,
    "unidades": 1,
    "modelo": "XX-000",
    "marca": "NA",
    "detalles": "NA",
    "imagen": "img/ejemplo.png"
  };

// FUNCIÓN CALLBACK DE BOTÓN "Buscar"
function buscar(e) { 

    e.preventDefault();

    // SE OBTIENE EL ID A BUSCAR
    var busqueda = document.getElementById('search').value; //modificado

    // SE CREA EL OBJETO DE CONEXIÓN ASÍNCRONA AL SERVIDOR
    var client = getXMLHttpRequest();
    client.open('POST', './backend/read.php', true);
    client.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    client.onreadystatechange = function () {
        // SE VERIFICA SI LA RESPUESTA ESTÁ LISTA Y FUE SATISFACTORIA
        if (client.readyState == 4 && client.status == 200) {
            console.log('[CLIENTE]\n' + client.responseText);
            // SE OBTIENE EL OBJETO DE DATOS A PARTIR DE UN STRING JSON
            let productos = JSON.parse(client.responseText);    // similar a eval('('+client.responseText+')');
            // SE VERIFICA SI EL OBJETO JSON TIENE DATOS
            if (Object.keys(productos).length > 0) {
                // SE CREA UNA LISTA HTML CON LA DESCRIPCIÓN DEL PRODUCTO
                let template = '';
                productos.forEach(function(producto) {
                    let descripcion = '';
                    descripcion += '<li>precio: $' + producto.precio + '</li>';
                    descripcion += '<li>unidades: ' + producto.unidades + '</li>';
                    descripcion += '<li>modelo: ' + producto.modelo + '</li>';
                    descripcion += '<li>marca: ' + producto.marca + '</li>';
                    descripcion += '<li>detalles: ' + producto.detalles + '</li>';
            
                    // SE CREA UNA PLANTILLA PARA CREAR LA(S) FILA(S) A INSERTAR EN EL DOCUMENTO HTML
                    template += `
                        <tr>
                            <td>${producto.id}</td>
                            <td>${producto.nombre}</td>
                            <td><ul>${descripcion}</ul></td>
                        </tr>
                    `;
                });
                // SE INSERTA LA PLANTILLA EN EL ELEMENTO CON ID "productos"
                document.getElementById("productos").innerHTML = template;
            }else{
                // Mostrar mensaje de "Producto no encontrado"
                document.getElementById("productos").innerHTML = '<p>Producto no encontrado</p>';
            }
        }
    };
    client.send("buscar=" + busqueda); //modificado
}

function validarProducto(producto) {
    var val = 0;
  
    if (producto.nombre === '' || producto.nombre.length > 100) {
      val = 1;
      alert('Escriba el nombre con el formato correcto');
    }
    if (producto.marca === '') {
      val = 1;
      alert('Escriba la marca del producto');
    }
    if (producto.precio < 99.99) {
      val = 1;
      alert('El precio debe ser mayor a $99.99');
    }
    if (producto.unidades < 0) {
      val = 1;
      alert('Numero invalido de unidades');
    }
    if (producto.modelo === '' || producto.modelo.length > 25) {
      val = 1;
      alert('Escriba el modelo del producto');
    }
    if (producto.detalles.length > 250) {
      val = 1;
      alert('El tamaño del atributo detalles ha superado el limite');
    }
    if (producto.imagen === '') {
      producto.imagen = 'img/ejemplo.png';
    }
  
    return val === 0;
  }

  // FUNCIÓN CALLBACK DE BOTÓN "Agregar Producto"
  function agregarProducto(e) {
    e.preventDefault();
  
    var productoJsonString = document.getElementById('description').value;
    var producto = JSON.parse(productoJsonString);
    producto.nombre = document.getElementById('name').value;
  
    if (validarProducto(producto)) {
      productoJsonString = JSON.stringify(producto, null, 2);
  
      var client = getXMLHttpRequest();
      client.open('POST', './backend/create.php', true);
      client.setRequestHeader('Content-Type', 'application/json;charset=UTF-8');
      client.onreadystatechange = function () {
        if (client.readyState == 4 && client.status == 200) {
          console.log(client.responseText);
          window.alert(client.responseText);
        }
      };
  
      client.send(productoJsonString);
    }
  }

// SE CREA EL OBJETO DE CONEXIÓN COMPATIBLE CON EL NAVEGADOR
function getXMLHttpRequest() {
    var objetoAjax;

    try{
        objetoAjax = new XMLHttpRequest();
    }catch(err1){
        /**
         * NOTA: Las siguientes formas de crear el objeto ya son obsoletas
         *       pero se comparten por motivos historico-académicos.
         */
        try{
            // IE7 y IE8
            objetoAjax = new ActiveXObject("Msxml2.XMLHTTP");
        }catch(err2){
            try{
                // IE5 y IE6
                objetoAjax = new ActiveXObject("Microsoft.XMLHTTP");
            }catch(err3){
                objetoAjax = false;
            }
        }
    }
    return objetoAjax;
}

function init() {
    /**
     * Convierte el JSON a string para poder mostrarlo
     * ver: https://developer.mozilla.org/es/docs/Web/JavaScript/Reference/Global_Objects/JSON
     */
    var JsonString = JSON.stringify(baseJSON,null,2);
    document.getElementById("description").value = JsonString;
}