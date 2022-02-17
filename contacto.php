<?php include 'includes/templates/header.php'; ?>
    <main class="contenedor seccion">
      <h1>Contacto</h1>
      <picture>
        <source srcset="build/img/destacada3.webp" type="image/webp" />
        <source srcset="build/img/destacada3.jpg" type="image/jpeg" />
        <img
          loading="lazy"
          src="build/img/destacada3.jpg"
          alt="Imagen Contacto"
        />
      </picture>
      <h2>Llene el formualrio de Contacto</h2>

      <form action="" class="formulario">
        <fieldset>
          <legend>Informacion Personal</legend>
          <label for="nombre">Nombre</label>
          <input type="text" id="nombre" placeholder="Tu Nombre" />
          <label for="email">Email</label>
          <input type="email" id="email" placeholder="Tu Email" />
          <label for="telefono">Telefono</label>
          <input type="tel" id="telefono" placeholder="Tu Telefono" />
          <label for="mensaje">Mensaje</label>
          <textarea id="mensaje"></textarea>
        </fieldset>
        <fieldset>
          <legend>Informacion sobre la propiedad</legend>
          <label for="opciones">Vende o Compra</label>
          <select id="opciones">
            <option value="" disabled selected>-- Seleccione --</option>
            <option value="Compra">Compra</option>
            <option value="Vende">Vende</option>
          </select>
          <label for="presupuesto">Precio o Presupuesto</label>
          <input
            type="number"
            id="presupuesto"
            placeholder="Tu Precio o Presupuesto"
          />
        </fieldset>
        <fieldset>
          <legend>Contacto</legend>
          <p>Como desea ser contactado</p>
          <div class="forma-contacto">
            <label for="contactar-telefono">Telefono</label>
            <input
              name="contacto"
              type="radio"
              value="telefono"
              id="contactar-telefono"
            />
            <label for="contactar-email">Email</label>
            <input
              name="contacto"
              type="radio"
              value="Email"
              id="contactar-email"
            />
          </div>
          <p>Si eligio telefono, elija la fecha y la hora</p>

          <label for="fecha">Fecha</label>
          <input type="date" id="fecha" />

          <label for="hora">Hora</label>
          <input type="time" id="hora" min="09:00" max="18:00" />
        </fieldset>
        <input type="submit" value="Enviar" class="boton-verde" />
      </form>
    </main>
    <?php include 'includes/templates/footer.php'; ?>
