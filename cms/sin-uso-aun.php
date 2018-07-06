<li class="menu-category">Tienda</li>

          <li class="menu-item <?php echo ($menu == "productos" ? "active" : "")?>">
            <a class="menu-link <?php echo ($menu == "productos" ? "open" : "") ?>" href="#">
              <span class="icon fa fa-cube"></span>
              <span class="title">Productos</span>
              <span class="arrow"></span>
            </a>

            <ul class="menu-submenu" <?php echo ($menu == "productos" ? "style='display:block;'" : "")?>>
              <li class="menu-item">
                <a class="menu-link" href="productos-categorias.php">
                  <span class="dot"></span>
                  <span class="title">Categor&iacute;as</span>
                </a>
              </li>

              <li class="menu-item">
                <a class="menu-link" href="productos-subcategorias.php">
                  <span class="dot"></span>
                  <span class="title">Sub-categor&iacute;a</span>
                </a>
              </li>

              <li class="menu-item">
                <a class="menu-link" href="productos.php">
                  <span class="dot"></span>
                  <span class="title">Productos</span>
                </a>
              </li>

              <li class="menu-item">
                <a class="menu-link" href="productos-fotos.php">
                  <span class="dot"></span>
                  <span class="title">Fotos</span>
                </a>
              </li>

              <li class="menu-item">
                <a class="menu-link" href="productos-pedidos.php">
                  <span class="dot"></span>
                  <span class="title">Pedidos</span>
                </a>
              </li>
            </ul>
          </li>

          <li class="menu-item <?php echo ($menu == "clientes" ? "active" : "")?>">
            <a class="menu-link" href="clientes.php">
              <span class="icon fa fa-users"></span>
              <span class="title">Clientes</span>
            </a>
          </li>