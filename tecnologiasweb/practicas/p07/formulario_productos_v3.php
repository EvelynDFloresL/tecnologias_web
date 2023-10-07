<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <title>Productos</title> 

  <script type="text/javascript">
    function validarForm() {
      var nombreInput = document.getElementById("nombre");
      var nombreValue = nombreInput.value.trim();

      var marcaSelect = document.getElementById("marca");
      var marcaValue = marcaSelect.value;

      var modeloInput = document.getElementById("modelo");
      var modeloValue = modeloInput.value.trim();

      var precioInput = document.getElementById("precio");
      var precioValue = parseFloat(precioInput.value.trim());

      var unidadesInput = document.getElementById("unidades");
      var unidadesValue = parseInt(unidadesInput.value.trim());

      var imagenInput = document.getElementById("imagen");
      var imagenValue = imagenInput.value.trim();

      var detallesTextarea = document.getElementById("detalles");
      var detallesValue = detallesTextarea.value.trim();

      if (nombreValue === "" || nombreValue.length > 100) {
        alert("El nombre debe ser requerido y tener 100 caracteres o menos.");
        return false;
      }

      if (marcaValue === "") {
        alert("Por favor, seleccione una marca.");
        return false;
      }
      if (modeloValue === "") {
        alert("El modelo es requerido.");
        return false;
      } else if (!/^[a-zA-Z0-9\s]*$/.test(modeloValue)) {
        alert("El modelo debe contener solo caracteres alfanuméricos.");
        return false;
      } else if (modeloValue.length > 25) {
        alert("El modelo debe tener 25 caracteres o menos.");
        return false;
      }

      if (isNaN(precioValue) || precioValue <= 99.99) {
        alert("El precio debe ser requerido y debe ser mayor a 99.99");
        return false;
      }

      if (isNaN(unidadesValue) || unidadesValue < 0) {
        alert(
          "Las unidades son requeridas y deben ser un número mayor o igual a 0."
        );
        return false;
      }

      if (detallesValue.length > 0 && detallesValue.length > 250) {
        alert("Los detalles deben tener 250 caracteres o menos si se ingresan.");
        return false;
      }

      if (imagenValue === "") {
        imagenInput.value = "img/ejemplo.png";
      }
      return true;
    }

    function sendFormData(_id, nombre, marca, modelo, precio, unidades, detalles, imagen) {
      var form = document.createElement("form");
      form.method = "POST";
      form.action = "formulario_productos_v3.php";

      // Crea campos ocultos para enviar los datos
      var idInput = document.createElement("input");
      idInput.type = "hidden";
      idInput.name = "id";
      idInput.value = _id;

      var nombreInput = document.createElement("input");
      nombreInput.type = "hidden";
      nombreInput.name = "nombre";
      nombreInput.value = nombre;

      var marcaInput = document.createElement("input");
      marcaInput.type = "hidden";
      marcaInput.name = "marca";
      marcaInput.value = marca;

      var modeloInput = document.createElement("input");
      modeloInput.type = "hidden";
      modeloInput.name = "modelo";
      modeloInput.value = modelo;

      var precioInput = document.createElement("input");
      precioInput.type = "hidden";
      precioInput.name = "precio";
      precioInput.value = precio;

      var unidadesInput = document.createElement("input");
      unidadesInput.type = "hidden";
      unidadesInput.name = "unidades";
      unidadesInput.value = unidades;

      var detallesInput = document.createElement("input");
      detallesInput.type = "hidden";
      detallesInput.name = "detalles";
      detallesInput.value = detalles;

      var imagenInput = document.createElement("input");
      imagenInput.type = "hidden";
      imagenInput.name = "imagen";
      imagenInput.value = imagen;

      // Agrega los campos ocultos al formulario
      form.appendChild(idInput);
      form.appendChild(nombreInput);
      form.appendChild(marcaInput);
      form.appendChild(modeloInput);
      form.appendChild(precioInput);
      form.appendChild(unidadesInput);
      form.appendChild(detallesInput);
      form.appendChild(imagenInput);

      // Agrega el formulario al cuerpo del documento y envíalo
      document.body.appendChild(form);
      form.submit();
    }
  </script>
</head>

<body>
  <div id="form">
    <form method="POST" action="https://localhost/tecnologias_web/tecnologiasweb/practicas/p07/set_producto_v3.php" onsubmit="return validarForm()">
      <h1><strong>Registro de Productos</strong></h1>
      <h3>Llena cada campo con la informacion correcta.</h3>
      <p><br /></p>
      <input type="hidden" name="id" value="<?= isset($_POST['id']) ? $_POST['id'] : (isset($_GET['id']) ? $_GET['id'] : '') ?>">
      <ul>
        <li>Nombre: <input id="nombre" name="nombre" type="text" value="<?= !empty($_POST['nombre']) ? $_POST['nombre'] : $_GET['nombre'] ?>" /></li>
        <br />
        <li>
          Marca:
          <select name="marca" id="marca" value="<?= !empty($_POST['marca']) ? $_POST['marca'] : $_GET['marca'] ?>">
            <option value="">Elegir</option>
            <option value="emece">emece</option>
            <option value="Gran Travesia">Gran Travesia</option>
            <option value="Diana">Diana</option>
            <option value="booket">booket</option>
            <option value="Penguin Random House">Penguin Random House</option>
          </select>
          <br />
          <br />
        </li>

        <li>Modelo: <input id="modelo" name="modelo" type="text" value="<?= !empty($_POST['modelo']) ? $_POST['modelo'] : $_GET['modelo'] ?>" /></li>
        <br />
        <li>
          Precio:
          <input id="precio" name="precio" type="text" placeholder="$000.00" value="<?= !empty($_POST['precio']) ? $_POST['precio'] : $_GET['precio'] ?>" />
        </li>
        <br />
        <li>
          Detalles: <br />
          <textarea name="detalles" rows="3" cols="50" id="detalles" placeholder="No más de 250 caracteres de longitud"><?= isset($_POST['detalles']) ? $_POST['detalles'] : (isset($_GET['detalles']) ? $_GET['detalles'] : '') ?></textarea>
          <br /><br />
        </li>
        <li>Unidades: <input id="unidades" name="unidades" type="text" value="<?= isset($_POST['unidades']) ? $_POST['unidades'] : (isset($_GET['unidades']) ? $_GET['unidades'] : '') ?>" /></li>
        <br />
        <li>
          Imagen:
          <input id="imagen" name="imagen" type="text" placeholder="img/ejemplo.png" value="<?= !empty($_POST['imagen']) ? $_POST['imagen'] : $_GET['imagen'] ?>" />
        </li>
        <br />
      </ul>
      <p><input id="boton" type="submit" value="ACTUALIZAR" /></p>
    </form>
  </div>
</body>

</html>