<nav>
			<ul>
				<li><a href="index.php"><i class="fas fa-home"></i> Inicio</a></li>
				<?php
					if($_SESSION['rol'] ==1){
				?>
				<li class="principal">
					<a href="#"><i class="fa fa-user"></i> Usuarios</a>
					<ul>
						<li><a href="registro_usuario.php"><i class="fas fa-plus-circle"></i>Nuevo Usuario</a></li>
						<li><a href="lista_usuario.php"><i class="fas fa-clipboard-list"></i> Lista de Usuarios</a></li>
					</ul>
				</li>
					<?php } ?>
				<li class="principal">
					<a href="#"><i class="fas fa-users"></i> Clientes</a>
					<ul>
						<li><a href="registro_cliente.php"><i class="fas fa-plus-circle"></i>Nuevo Cliente</a></li>
						<li><a href="lista_cliente.php"><i class="fas fa-clipboard-list"></i> Lista de Clientes</a></li>
					</ul>
				</li>
				<?php
					if($_SESSION['rol'] ==1 || $_SESSION['rol'] == 2){
				?>
				<li class="principal">
					<a href="#"><i class="fas fa-industry"></i> Proveedores</a>
					<ul>
						<li><a href="registro_proveedor.php"><i class="fas fa-plus-circle"></i> Nuevo Proveedor</a></li>
						<li><a href="lista_proveedor.php"><i class="fas fa-clipboard-list"></i> Lista de Proveedores</a></li>
					</ul>
				</li>
					<?php } ?>
				
				<li class="principal">
					<a href="#"><i class="fas fa-boxes"></i> Productos</a>
					<ul>
					<?php
					if($_SESSION['rol'] ==1 || $_SESSION['rol'] == 2){
				?>
						<li><a href="registro_producto.php"><i class="fas fa-plus-circle"></i> Nuevo Producto</a></li>
						<?php } ?>
						<li><a href="lista_producto.php"><i class="fas fa-clipboard-list"></i> Lista de Productos</a></li>
					</ul>
				</li>
			
				<li class="principal">
					<a href="#"><i class="fas fa-coins"></i> Ventas</a>
					<ul>
						<li><a href="nueva_venta.php"><i class="fas fa-plus-circle"></i> Nuevo Venta</a></li>
						<li><a href="ventas.php"><i class="fas fa-clipboard-list"></i> Ventas</a></li>
					</ul>
				</li>
			</ul>
		</nav>