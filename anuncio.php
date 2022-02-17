<?php include 'includes/templates/header.php'; ?>
    <main class="contenedor seccion contenido-centrado">
      <h1>Casa en Venta frente al bosque</h1>
      <picture>
        <source srcset="build/img/destacada.webp" type="image/webp" />
        <source srcset="build/img/destacada.jpg" type="image/jpeg" />
        <img
          loading="lazy"
          src="build/img/destacada.jpg"
          alt="imagen de la propiedad"
        />
      </picture>
      <div class="resumen-propiedad">
        <p class="precio">$3,000,000</p>
        <ul class="iconos-caracteristicas">
          <li>
            <img class="icono" src="build/img/icono_wc.svg" alt="icono wc" />
            <p>3</p>
          </li>
          <li>
            <img
              class="icono"
              src="build/img/icono_estacionamiento.svg"
              alt="icono estacionamiento"
            />
            <p>3</p>
          </li>
          <li>
            <img
              class="icono"
              src="build/img/icono_dormitorio.svg"
              alt="icono dormitorio"
            />
            <p>4</p>
          </li>
        </ul>
        <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore
          voluptates qui quis deserunt tenetur soluta ipsa sit, eaque,
          asperiores corrupti incidunt consequuntur distinctio, cumque
          voluptatibus explicabo tempora officia vel quidem! Lorem ipsum, dolor
          sit amet consectetur a dipisicing elit. Rerum corporis saepe ut beatae
          facilis earum corrupti soluta reprehenderit dolorum, fugiat officia
          veniam eos qui id libero sunt voluptate reiciendis? Corporis.
        </p>
        <p>
          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias,
          nisi suscipit! Est voluptates ducimus recusandae ad accusamus vitae.
          Tempora itaque eaque culpa similique provident voluptatum
          necessitatibus ipsa nemo animi voluptates. Lorem ipsum dolor sit amet
          consectetur adipisicing elit. Odit nisi quo alias perspiciatis
          assumenda delectus hic. Numquam dicta dolorum exercitationem neque
          itaque, sapiente quas consectetur est saepe recusandae, aperiam
          deserunt!
        </p>
      </div>
    </main>
    <?php include 'includes/templates/footer.php'; ?>
