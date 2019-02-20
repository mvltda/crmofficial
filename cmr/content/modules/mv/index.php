
		<div>
			<div id="app">
				<div>
					<div id="preload"></div>
				
					<nav class="navbar navbar-inverse navbar-fixed-top">
							<ul class="nav navbar-nav navbar-right" >
								
								<li class="nav-item dropdown">
								  <a href="#" class="nav-link dropdown-toggle animated rubberBand" data-toggle="dropdown">
									  <i class="fa fa-cogs"></i> 
									  <span class="badge total-notifications-response-navbartop">Config</span>
								  </a>
									<ul class="dropdown-menu two question-pending-navbar">
										<li class="dropdown-header">Modulos</li>
										<li><a href="#/Clients"><i class="fa fa-handshake-o"></i> Cuentas</a></li>
										<li><a href="#/Employees"><i class="fa fa-address-card"></i> Empleados</a></li>
										<li><a href="#/Vehicles"><i class="fa fa-automobile"></i> Vehiculos</a></li>
										<li><a href="#/Services"><i class="fa fa-briefcase"></i> Servicios</a></li>
										<li><a href="#/Contacts"><i class="fa fa-address-book"></i> Contactos</a></li>
									  
										<li class="dropdown-header">Listas</li>
										<li><a href="#/ARL"><i class="fa fa-fire"></i> ARL</a></li>
										<li><a href="#/EPS"><i class="fa fa-ambulance"></i> EPS</a></li>
										<li><a href="#/Funds/Compensations"><i class="fa fa-child"></i> Cajas de compensacion</a></li>

										<li><a href="#/Funds/Pension"><i class="fa fa-heartbeat"></i> Cajas de Pension</a></li>
										<li><a href="#/Funds/Severances"><i class="fa fa-university"></i> Cajas de Cesantias</a></li>

										<li><a href="#/GEO/Departments"><i class="fa fa-globe"></i> Departamentos (Ciudad)</a></li>
										<li><a href="#/GEO/Citys"><i class="fa fa-map"></i> Ciudades</a></li>
										<li><a href="#/Status/Employees"><i class="fa fa-suitcase"></i> Estados de Empleados</a></li>
										<li><a href="#/Status/Services"><i class="fa fa-wrench"></i> Estados de Servicios</a></li>

										<li><a href="#/Vehicles/Categories"><i class="fa fa-rocket"></i> Categorias de Vehiculos</a></li>
										<li><a href="#/Status/Vehicles"><i class="fa fa-thumbs-o-up"></i> Estados de Vehiculos</a></li>

										<li><a href="#/Types/Bloods"><i class="fa fa-heart"></i> Tipos de Sangre</a></li>
										<li><a href="#/Types/BloodsRH"><i class="fa fa-heart-o"></i> Tipos de RH</a></li>
										<li><a href="#/Types/Clients"><i class="fa fa-building"></i> Tipos de Cliente</a></li>
										<li><a href="#/Types/Contacts"><i class="fa fa-user-o"></i> Tipos de Contacto</a></li>

										<li><a href="#/Types/Fuels"><i class="fa fa-tint"></i> Tipos de Combustibles</a></li>

										<li><a href="#/Types/Identifications"><i class="fa fa-vcard-o"></i> Tipos de Identificaciones</a></li>

										<li><a href="#/Types/Meditions"><i class="fa fa-cubes"></i> Tipos de Mediciones</a></li>

										<li><a href="#/Types/ReasonsResignations"><i class="fa fa-window-close"></i> Tipos de Retiros (Empleados)</a></li>
										<li><a href="#/Types/Societys"><i class="fa fa-group"></i> Tipos de Sociedades</a></li>
										<li><a href="#/Types/Vehicles"><i class="fa fa-truck"></i> Tipos de Vehiculos</a></li>
										<li><a href="#/Types/Charges"><i class="fa fa-id-badge"></i> Tipos de Cargos</a></li>
										<li><a href="#/Employees/Actions/Performances"><i class="fa fa-id-badge"></i> Acciones de Desempeño</a></li>
										<li><a href="#/Attributes"><i class="fa fa-id-badge"></i> Conceptos de Servios</a></li>
										
										<li role="separator" class="divider"></li>
										<li><a href="javascript: window.open('#/SettingsApp/TermsAndConditions/Edit')"><i class="fa fa-id-badge"></i> Terminos y Condiciones del Servicio </a></li>
										<li><a href="javascript: window.open('#/SettingsApp/proposalLetter/Edit')"><i class="fa fa-id-badge"></i> Modelo de Carta Propuestas </a></li>
										<!-- <li><a href="#">Ver todas las notificaciones</a></li> -->
								  </ul>
								</li>
								<!-- <li><a href="#/Help"><i class="fa fa-question-circle" aria-hidden="true"></i> </a></li> -->
							</ul>
					</nav>
					<div class="container">
						<main>
							<router-view></router-view>
						</main>
						<hr>

						<footer>
							<p>&copy; 2019 Monteverde LTDA. - Developed by <a href="https://github.com/Feliphegomez">!FelipheGomez</a>.</p>
						</footer>
					</div>
				</div>
			</div>
		</div>

		<template id="page-Home">
			<div>
				<!--
				<div class="jumbotron">
				  <div class="container">
					<h1>Bienvenid@!</h1>
					<p>
						Esta es una herramienta para un aplicativo empresarial.
					</p>
					<p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more &raquo;</a></p>
				  </div>
				</div>
				
				<div class="row">
					<div class="col-md-4">
					  <h2>Clientes</h2>
					  <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
					  <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
					</div>
					<div class="col-md-4">
					  <h2>Servicios</h2>
					  <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
					  <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
					</div>
					<div class="col-md-4">
					  <h2>Empleados</h2>
					  <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
					  <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
					</div>
				</div> -->
				
				<div class="jumbotron">
					<div class="container">
						<!-- <h1>Bienvenid@!</h1>
						<p>Estas son las estadisticas actuales de la empresa.</p>-->
						<h3>CMR Monteverde LTDA</h3>
						<p>Estas son las estadisticas actuales de la empresa.</p>
					</div>
				</div>
				<div class="row" >
					<div class="col-sm-4">
						<div class="circle-tile">
							<a href="#">
								<div class="circle-tile-heading dark-blue">
									<i class="fa fa-users fa-fw fa-3x"></i>
								</div>
							</a>
							<div class="circle-tile-content dark-blue">
								<div class="circle-tile-description text-faded">
									Users
								</div>
								<div class="circle-tile-number text-faded">
									{{ statistics.users_total }}
									<span id="sparklineA"></span>
								</div>
								<a href="#" class="circle-tile-footer">More Info <i class="fa fa-chevron-circle-right"></i></a>
							</div>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="circle-tile">
							<a href="#">
								<div class="circle-tile-heading green">
									<i class="fa fa-money fa-fw fa-3x"></i>
								</div>
							</a>
							<div class="circle-tile-content green">
								<div class="circle-tile-description text-faded">
									Cuentas
								</div>
								<div class="circle-tile-number text-faded">
									{{ statistics.accounts_total }}
								</div>
								<a href="#" class="circle-tile-footer">More Info <i class="fa fa-chevron-circle-right"></i></a>
							</div>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="circle-tile">
							<a href="#">
								<div class="circle-tile-heading orange">
									<i class="fa fa-bell fa-fw fa-3x"></i>
								</div>
							</a>
							<div class="circle-tile-content orange">
								<div class="circle-tile-description text-faded">
									Interventores
								</div>
								<div class="circle-tile-number text-faded">
									{{ statistics.auditors_total }}
								</div>
								<a href="#" class="circle-tile-footer">More Info <i class="fa fa-chevron-circle-right"></i></a>
							</div>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="circle-tile">
							<a href="#">
								<div class="circle-tile-heading blue">
									<i class="fa fa-tasks fa-fw fa-3x"></i>
								</div>
							</a>
							<div class="circle-tile-content blue">
								<div class="circle-tile-description text-faded">
									Contactos
								</div>
								<div class="circle-tile-number text-faded">
									{{ statistics.contacts_total }}
									<span id="sparklineB"></span>
								</div>
								<a href="#" class="circle-tile-footer">More Info <i class="fa fa-chevron-circle-right"></i></a>
							</div>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="circle-tile">
							<a href="#">
								<div class="circle-tile-heading red">
									<i class="fa fa-shopping-cart fa-fw fa-3x"></i>
								</div>
							</a>
							<div class="circle-tile-content red">
								<div class="circle-tile-description text-faded">
									Contratos de Empleados
								</div>
								<div class="circle-tile-number text-faded">
									{{ statistics.contracts_employees_total }}
									<span id="sparklineC"></span>
								</div>
								<a href="#" class="circle-tile-footer">More Info <i class="fa fa-chevron-circle-right"></i></a>
							</div>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="circle-tile">
							<a href="#">
								<div class="circle-tile-heading purple">
									<i class="fa fa-comments fa-fw fa-3x"></i>
								</div>
							</a>
							<div class="circle-tile-content purple">
								<div class="circle-tile-description text-faded">
									Empleados
								</div>
								<div class="circle-tile-number text-faded">
									{{ statistics.employees_total }}
									<span id="sparklineD"></span>
								</div>
								<a href="#" class="circle-tile-footer">More Info <i class="fa fa-chevron-circle-right"></i></a>
							</div>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="circle-tile">
							<a href="#">
								<div class="circle-tile-heading dark-blue">
									<i class="fa fa-comments fa-fw fa-3x"></i>
								</div>
							</a>
							<div class="circle-tile-content dark-blue">
								<div class="circle-tile-description text-faded">
									Radicados
								</div>
								<div class="circle-tile-number text-faded">
									{{ statistics.redicated_clients_total }}
									<span id="sparklineD"></span>
								</div>
								<a href="#" class="circle-tile-footer">More Info <i class="fa fa-chevron-circle-right"></i></a>
							</div>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="circle-tile">
							<a href="#">
								<div class="circle-tile-heading green">
									<i class="fa fa-comments fa-fw fa-3x"></i>
								</div>
							</a>
							<div class="circle-tile-content green">
								<div class="circle-tile-description text-faded">
									Propuestas
								</div>
								<div class="circle-tile-number text-faded">
									{{ statistics.quotations_clients_total }}
									<span id="sparklineD"></span>
								</div>
								<a href="#" class="circle-tile-footer">More Info <i class="fa fa-chevron-circle-right"></i></a>
							</div>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="circle-tile">
							<a href="#">
								<div class="circle-tile-heading orange">
									<i class="fa fa-comments fa-fw fa-3x"></i>
								</div>
							</a>
							<div class="circle-tile-content orange">
								<div class="circle-tile-description text-faded">
									Servicios
								</div>
								<div class="circle-tile-number text-faded">
									{{ statistics.services_total }}
									<span id="sparklineD"></span>
								</div>
								<a href="#" class="circle-tile-footer">More Info <i class="fa fa-chevron-circle-right"></i></a>
							</div>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="circle-tile">
							<a href="#">
								<div class="circle-tile-heading blue">
									<i class="fa fa-comments fa-fw fa-3x"></i>
								</div>
							</a>
							<div class="circle-tile-content blue">
								<div class="circle-tile-description text-faded">
									Vehiculos
								</div>
								<div class="circle-tile-number text-faded">
									{{ statistics.vehicles_total }}
									<span id="sparklineD"></span>
								</div>
								<a href="#" class="circle-tile-footer">More Info <i class="fa fa-chevron-circle-right"></i></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</template>

		<template id="page-LogIn">
		  <div>
			<h2>Sesion no encontrada</h2>
			<p>
				No iniciaste sesion o tu sesion a expirado, ingresa tu usuario y contraseĂ±a para continuar utilizando el sitio.
			</p>
			<hr>

			<form class="navbar-form navbar-right" v-if="$parent.status === 'not_connect'" v-on:submit="$parent.submitLogIn">
				<div class="form-group">
					<input type="text" placeholder="Email" class="form-control" v-model="$parent.forms.login.nick" />
				</div>
				<div class="form-group">
					<input type="password" placeholder="Password" class="form-control" v-model="$parent.forms.login.hash" />
				</div>
				<button type="submit" class="btn btn-success">Ingresar</button>
			</form>
		  </div>
		</template>

		<template id="page-Settings">
			<div>
				<h2>Opciones</h2>
				<hr>
				<table class="table  table-responsive">
					<tr><td>Cambiar clave</td><td></td></tr>
				</table>
			</div>
		</template>

		<template id="page-SettingsApp-Edit">
			<div>
				<h2>Opciones del aplicativo</h2>
				<hr>
				
				<form v-on:submit="updateCartaPropuestas">
					<div class="form-group">
						<label for="edit-content">Nombre</label>
						<input class="form-control" id="edit-content" v-model="post.name" />
					</div>
					<div class="form-group">
						<label for="edit-content">Configuración</label>
						<textarea style="margin: 0px 7.00781px 0px 0px; width: 100%; max-height: 700px; min-height: 700px; height: 700px; min-width: 100%; max-width: 100%;" class="form-control" id="edit-content" v-model="post.result"></textarea>
					</div>
					<button type="submit" class="btn btn-primary">Guardar</button>
				</form>
			</div>
		</template>

		<template id="page-Profile">
			<div>
				<h2>Mi Perfil</h2>
				<hr>
				<table class="table  table-responsive">
					<tr><td>ID</td><td>{{ userData.id }}</td></tr>
					<tr><td>Usuario</td><td>{{ userData.nick }}</td></tr>
				</table>
			</div>
		</template>

		<template id="page-Help">
			<div>
				<h2>Help</h2>
				<hr>
				
				<table class="table  table-responsive">
					<tr><td>Notificar un Problema</td><td></td></tr>
				</table>
			</div>
		</template>

		<!-- // ------------ ARL INICIO -------------------------------------  -->
		<template id="page-ARL">
			<div>
				<header class="page-header">
					<div class="branding">
						<h1>ARL</h1>
					</div>
				</header>
				<div class="filters row">
					<div class="form-group col-sm-8">
						<label for="search-element">Filtrar / Buscar</label>
						<input v-model="searchKey" class="form-control" id="search-element" required/>
					</div>
					<div class="form-group col-sm-4 text-right">
						<div class="actions">
							<br>
							<router-link class="btn btn-primary" v-bind:to="{ name: 'ARL-Add' }">
								<span class="fa fa-plus"></span>
								Nuevo
							</router-link>
						</div>
					</div>
				</div>
				<table class="table table-responsive">
					<thead>
						<tr>
							<th>ID</th>
							<th>Codigo</th>
							<th>Nombre</th>
							<th class="col-sm-2">Actions</th>
						</tr>
					</thead>
					<tbody>
						<tr v-if="posts===null">
							<td colspan="4">Loading...</td>
						</tr>
						<tr v-else v-for="post in filteredposts">
							<td><router-link v-bind:to="{name: 'ARL-View', params: { arl_id: post.id }}">{{ post.id }}</router-link></td>
							<td><router-link v-bind:to="{name: 'ARL-View', params: { arl_id: post.id }}">{{ post.code }}</router-link></td>
							<td><router-link v-bind:to="{name: 'ARL-View', params: { arl_id: post.id }}">{{ post.name }}</router-link></td>
							<td>
							<router-link class="btn btn-warning btn-md" v-bind:to="{name: 'ARL-Edit', params: { arl_id: post.id }}"><i class="fa fa-pencil-square-o"></i> </router-link>
							<router-link class="btn btn-danger btn-md" v-bind:to="{name: 'ARL-Delete', params: { arl_id: post.id }}"><i class="fa fa-trash"></i> </router-link>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
		</template>
		
		<template id="view-ARL">
			<div>
				<header class="page-header">
					<div class="branding">
						<h1>ARL - {{ post.name }}</h1>
					</div>
				</header>
				<table class="table  table-responsive">
					<tr>
						<td>ID INTERNO</td>
						<td>{{ post.id }}</td>
					</tr>
					<tr>
						<td>CODIGO</td>
						<td>{{ post.code }}</td>
					</tr>
					<tr>
						<td>NOMBRE</td>
						<td>{{ post.name }}</td>
					</tr>
				</table>
				<br/>
				<span class="fa fa-arrow-left" aria-hidden="true"></span>
				<router-link v-bind:to="{ name: 'ARL-List' }">Volver a la lista</router-link>
			</div>		  
		</template>
		
		<template id="add-ARL">
			<div>
				<h2>ARL - Crear</h2>
				<form v-on:submit="createARL">
					<div class="form-group">
						<label for="add-content">Codigo</label>
						<input class="form-control" type="text" v-model="post.code" />
					</div>
					<div class="form-group">
						<label for="add-content">Nombre</label>
						<input class="form-control" type="text" v-model="post.name" />
					</div>
					<button type="submit" class="btn btn-primary">Crear</button>
					<router-link class="btn btn-primary" v-bind:to="{ name: 'ARL-List' }">Regresar</router-link>
				</form>
			</div>
		</template>
		
		<template id="edit-ARL">
			<div>
				<h2>ARL - Modificar</h2>
				<form v-on:submit="updateARL">
					<div class="form-group">
						<label for="edit-content">Codigo</label>
						<input class="form-control" id="edit-content" v-model="post.code" />
					</div>
					<div class="form-group">
						<label for="edit-content">Nombre</label>
						<input class="form-control" id="edit-content" v-model="post.name" />
					</div>
					<button type="submit" class="btn btn-primary">Guardar</button>
					<router-link class="btn btn-primary" v-bind:to="{ name: 'ARL-List' }">Regresar</router-link>
				</form>
			</div>
		</template>
		
		<template id="delete-ARL">
			<div>
				<h2>ARL - Eliminar</h2>
				<form v-on:submit="deleteARL">
					<p>The action cannot be undone.</p>
					<button type="submit" class="btn btn-danger">Eliminar</button>
					<router-link class="btn btn-primary" v-bind:to="{ name: 'ARL-List' }">Cancelar</router-link>
				</form>
			</div>
		</template>
		<!-- // ------------ ARL FIN -------------------------------------  -->
		
		<!-- // ------------ CATEGORIAS DE VEHICULOS INICIO -------------------------------------  -->
		<template id="page-VH-Cats">
			<div>
				<header class="page-header">
					<div class="branding">
						<h1>VH-Cats</h1>
					</div>
				</header>
				<div class="filters row">
					<div class="form-group col-sm-8">
						<label for="search-element">Filtrar / Buscar</label>
						<input v-model="searchKey" class="form-control" id="search-element" required/>
					</div>
					<div class="form-group col-sm-4 text-right">
						<div class="actions">
							<br>
							<router-link class="btn btn-primary" v-bind:to="{ name: 'VH-Categories-Add' }">
								<span class="fa fa-plus"></span>
								Nuevo
							</router-link>
						</div>
					</div>
				</div>
				<table class="table table-responsive">
					<thead>
						<tr>
							<th>ID</th>
							<th>Nombre</th>
							<th class="col-sm-2">Actions</th>
						</tr>
					</thead>
					<tbody>
						<tr v-if="posts===null">
							<td colspan="4">Loading...</td>
						</tr>
						<tr v-else v-for="post in filteredposts">
							<td><router-link v-bind:to="{name: 'VH-Categories-View', params: { cat_vh_id: post.id }}">{{ post.id }}</router-link></td>
							<td><router-link v-bind:to="{name: 'VH-Categories-View', params: { cat_vh_id: post.id }}">{{ post.name }}</router-link></td>
							<td>
								<router-link class="btn btn-warning btn-md" v-bind:to="{name: 'VH-Categories-Edit', params: { cat_vh_id: post.id }}"><i class="fa fa-pencil-square-o"></i> </router-link>
								<router-link class="btn btn-danger btn-md" v-bind:to="{name: 'VH-Categories-Delete', params: { cat_vh_id: post.id }}"><i class="fa fa-trash"></i> </router-link>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
		</template>
		
		<template id="view-VH-Cats">
			<div>
				<header class="page-header">
					<div class="branding">
						<h1>VH-Cats - {{ post.name }}</h1>
					</div>
				</header>
				<table class="table  table-responsive">
					<tr>
						<td>ID INTERNO</td>
						<td>{{ post.id }}</td>
					</tr>
					<tr>
						<td>NOMBRE</td>
						<td>{{ post.name }}</td>
					</tr>
				</table>
				<br/>
				<span class="fa fa-arrow-left" aria-hidden="true"></span>
				<router-link v-bind:to="{ name: 'VH-Categories-List' }">Volver a la lista</router-link>
			</div>		  
		</template>
		
		<template id="add-VH-Cats">
			<div>
				<h2>VH-Cats - Crear</h2>
				<form v-on:submit="createCatVH">
					<div class="form-group">
						<label for="add-content">NOMBRE</label>
						<input class="form-control" type="text" v-model="post.name" />
					</div>
					<button type="submit" class="btn btn-primary">Crear</button>
					<router-link class="btn btn-primary" v-bind:to="{ name: 'ARL-List' }">Regresar</router-link>
				</form>
			</div>
		</template>
		
		<template id="edit-VH-Cats">
			<div>
				<h2>VH-Cats - Modificar</h2>
				<form v-on:submit="updateCatVH">
					<div class="form-group">
						<label for="edit-content">Nombre</label>
						<input class="form-control" id="edit-content" v-model="post.name" />
					</div>
					<button type="submit" class="btn btn-primary">Guardar</button>
					<router-link class="btn btn-primary" v-bind:to="{ name: 'VH-Categories-List' }">Regresar</router-link>
				</form>
			</div>
		</template>
		
		<template id="delete-VH-Cats">
			<div>
				<h2>VH-Cats - Eliminar</h2>
				<form v-on:submit="deleteCatVH">
					<p>The action cannot be undone.</p>
					<button type="submit" class="btn btn-danger">Eliminar</button>
					<router-link class="btn btn-primary" v-bind:to="{ name: 'VH-Categories-List' }">Cancelar</router-link>
				</form>
			</div>
		</template>
		<!-- // ------------ CATEGORIAS DE VEHICULOS FIN -------------------------------------  -->
		
		<!-- // ------------ EPS INICIO -------------------------------------  -->
		<template id="page-EPS">
			<div>
				<header class="page-header">
					<div class="branding">
						<h1>EPS</h1>
					</div>
				</header>
				<div class="filters row">
					<div class="form-group col-sm-8">
						<label for="search-element">Filtrar / Buscar</label>
						<input v-model="searchKey" class="form-control" id="search-element" required/>
					</div>
					<div class="form-group col-sm-4 text-right">
						<div class="actions">
							<br>
							<router-link class="btn btn-primary" v-bind:to="{ name: 'EPS-Add' }">
								<span class="fa fa-plus"></span>
								Nuevo
							</router-link>
						</div>
					</div>
				</div>
				<table class="table table-responsive">
					<thead>
						<tr>
							<th>ID</th>
							<th>Codigo</th>
							<th>Nombre</th>
							<th class="col-sm-2">Actions</th>
						</tr>
					</thead>
					<tbody>
						<tr v-if="posts===null">
							<td colspan="4">Loading...</td>
						</tr>
						<tr v-else v-for="post in filteredposts">
							<td><router-link v-bind:to="{name: 'EPS-View', params: { eps_id: post.id }}">{{ post.id }}</router-link></td>
							<td><router-link v-bind:to="{name: 'EPS-View', params: { eps_id: post.id }}">{{ post.code }}</router-link></td>
							<td><router-link v-bind:to="{name: 'EPS-View', params: { eps_id: post.id }}">{{ post.name }}</router-link></td>
							<td>
							<router-link class="btn btn-warning btn-md" v-bind:to="{name: 'EPS-Edit', params: { eps_id: post.id }}"><i class="fa fa-pencil-square-o"></i> </router-link>
							<router-link class="btn btn-danger btn-md" v-bind:to="{name: 'EPS-Delete', params: { eps_id: post.id }}"><i class="fa fa-trash"></i> </router-link>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
		</template>
		
		<template id="view-EPS">
			<div>
				<header class="page-header">
					<div class="branding">
						<h1>EPS - {{ post.name }}</h1>
					</div>
				</header>
				<table class="table  table-responsive">
					<tr>
						<td>ID INTERNO</td>
						<td>{{ post.id }}</td>
					</tr>
					<tr>
						<td>CODIGO</td>
						<td>{{ post.code }}</td>
					</tr>
					<tr>
						<td>NOMBRE</td>
						<td>{{ post.name }}</td>
					</tr>
				</table>
				<br/>
				<span class="fa fa-arrow-left" aria-hidden="true"></span>
				<router-link v-bind:to="{ name: 'EPS-List' }">Volver a la lista</router-link>
			</div>		  
		</template>
		
		<template id="add-EPS">
			<div>
				<h2>EPS - Crear</h2>
				<form v-on:submit="createEPS">
					<div class="form-group">
						<label for="add-content">Codigo</label>
						<input class="form-control" type="text" v-model="post.code" />
					</div>
					<div class="form-group">
						<label for="add-content">Nombre</label>
						<input class="form-control" type="text" v-model="post.name" />
					</div>
					<button type="submit" class="btn btn-primary">Crear</button>
					<router-link class="btn btn-primary" v-bind:to="{ name: 'EPS-List' }">Regresar</router-link>
				</form>
			</div>
		</template>
		
		<template id="edit-EPS">
			<div>
				<h2>EPS - Modificar</h2>
				<form v-on:submit="updateEPS">
					<div class="form-group">
						<label for="edit-content">Codigo</label>
						<input class="form-control" id="edit-content" v-model="post.code" />
					</div>
					<div class="form-group">
						<label for="edit-content">Nombre</label>
						<input class="form-control" id="edit-content" v-model="post.name" />
					</div>
					<button type="submit" class="btn btn-primary">Guardar</button>
					<router-link class="btn btn-primary" v-bind:to="{ name: 'EPS-List' }">Regresar</router-link>
				</form>
			</div>
		</template>
		
		<template id="delete-EPS">
			<div>
				<h2>EPS - Eliminar</h2>
				<form v-on:submit="deleteEPS">
					<p>The action cannot be undone.</p>
					<button type="submit" class="btn btn-danger">Eliminar</button>
					<router-link class="btn btn-primary" v-bind:to="{ name: 'EPS-List' }">Cancelar</router-link>
				</form>
			</div>
		</template>
		<!-- // ------------ EPS FIN -------------------------------------  -->
		
		<!-- // ------------ CAJAS DE COMPENSACION INICIO -------------------------------------  -->
		<template id="page-FundsCompensation">
			<div>
				<header class="page-header">
					<div class="branding">
						<h1>FundsCompensation</h1>
					</div>
				</header>
				<div class="filters row">
					<div class="form-group col-sm-8">
						<label for="search-element">Filtrar / Buscar</label>
						<input v-model="searchKey" class="form-control" id="search-element" required/>
					</div>
					<div class="form-group col-sm-4 text-right">
						<div class="actions">
							<br>
							<router-link class="btn btn-primary" v-bind:to="{ name: 'FundsCompensation-Add' }">
								<span class="fa fa-plus"></span>
								Nuevo
							</router-link>
						</div>
					</div>
				</div>
				<table class="table table-responsive">
					<thead>
						<tr>
							<th>ID</th>
							<th>Codigo</th>
							<th>Nombre</th>
							<th class="col-sm-2">Actions</th>
						</tr>
					</thead>
					<tbody>
						<tr v-if="posts===null">
							<td colspan="4">Loading...</td>
						</tr>
						<tr v-else v-for="post in filteredposts">
							<td><router-link v-bind:to="{name: 'FundsCompensation-View', params: { fund_compensation_id: post.id }}">{{ post.id }}</router-link></td>
							<td><router-link v-bind:to="{name: 'FundsCompensation-View', params: { fund_compensation_id: post.id }}">{{ post.code }}</router-link></td>
							<td><router-link v-bind:to="{name: 'FundsCompensation-View', params: { fund_compensation_id: post.id }}">{{ post.name }}</router-link></td>
							<td>
							<router-link class="btn btn-warning btn-md" v-bind:to="{name: 'FundsCompensation-Edit', params: { fund_compensation_id: post.id }}"><i class="fa fa-pencil-square-o"></i> </router-link>
							<router-link class="btn btn-danger btn-md" v-bind:to="{name: 'FundsCompensation-Delete', params: { fund_compensation_id: post.id }}"><i class="fa fa-trash"></i> </router-link>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
		</template>
		
		<template id="view-FundsCompensation">
			<div>
				<header class="page-header">
					<div class="branding">
						<h1>FundsCompensation - {{ post.name }}</h1>
					</div>
				</header>
				<table class="table  table-responsive">
					<tr>
						<td>ID INTERNO</td>
						<td>{{ post.id }}</td>
					</tr>
					<tr>
						<td>CODIGO</td>
						<td>{{ post.code }}</td>
					</tr>
					<tr>
						<td>NOMBRE</td>
						<td>{{ post.name }}</td>
					</tr>
				</table>
				<br/>
				<span class="fa fa-arrow-left" aria-hidden="true"></span>
				<router-link v-bind:to="{ name: 'FundsCompensation-List' }">Volver a la lista</router-link>
			</div>		  
		</template>
		
		<template id="add-FundsCompensation">
			<div>
				<h2>FundsCompensation - Crear</h2>
				<form v-on:submit="createFundCompensation">
					<div class="form-group">
						<label for="add-content">Codigo</label>
						<input class="form-control" type="text" v-model="post.code" />
					</div>
					<div class="form-group">
						<label for="add-content">Nombre</label>
						<input class="form-control" type="text" v-model="post.name" />
					</div>
					<button type="submit" class="btn btn-primary">Crear</button>
					<router-link class="btn btn-primary" v-bind:to="{ name: 'FundsCompensation-List' }">Regresar</router-link>
				</form>
			</div>
		</template>
		
		<template id="edit-FundsCompensation">
			<div>
				<h2>FundsCompensation - Modificar</h2>
				<form v-on:submit="updateFundCompensation">
					<div class="form-group">
						<label for="edit-content">Codigo</label>
						<input class="form-control" id="edit-content" v-model="post.code" />
					</div>
					<div class="form-group">
						<label for="edit-content">Nombre</label>
						<input class="form-control" id="edit-content" v-model="post.name" />
					</div>
					<button type="submit" class="btn btn-primary">Guardar</button>
					<router-link class="btn btn-primary" v-bind:to="{ name: 'FundsCompensation-List' }">Regresar</router-link>
				</form>
			</div>
		</template>
		
		<template id="delete-FundsCompensation">
			<div>
				<h2>FundsCompensation - Eliminar</h2>
				<form v-on:submit="deleteFundCompensation">
					<p>The action cannot be undone.</p>
					<button type="submit" class="btn btn-danger">Eliminar</button>
					<router-link class="btn btn-primary" v-bind:to="{ name: 'FundsCompensation-List' }">Cancelar</router-link>
				</form>
			</div>
		</template>
		<!-- // ------------ CAJAS DE COMPENSACION FIN -------------------------------------  -->

		<!-- // ------------ CAJAS DE PENSION INICIO -------------------------------------  -->
		<template id="page-FundsPension">
			<div>
				<header class="page-header">
					<div class="branding">
						<h1>FundsPension</h1>
					</div>
				</header>
				<div class="filters row">
					<div class="form-group col-sm-8">
						<label for="search-element">Filtrar / Buscar</label>
						<input v-model="searchKey" class="form-control" id="search-element" required/>
					</div>
					<div class="form-group col-sm-4 text-right">
						<div class="actions">
							<br>
							<router-link class="btn btn-primary" v-bind:to="{ name: 'FundsPension-Add' }">
								<span class="fa fa-plus"></span>
								Nuevo
							</router-link>
						</div>
					</div>
				</div>
				<table class="table table-responsive">
					<thead>
						<tr>
							<th>ID</th>
							<th>Codigo</th>
							<th>Nombre</th>
							<th class="col-sm-2">Actions</th>
						</tr>
					</thead>
					<tbody>
						<tr v-if="posts===null">
							<td colspan="4">Loading...</td>
						</tr>
						<tr v-else v-for="post in filteredposts">
							<td><router-link v-bind:to="{name: 'FundsPension-View', params: { fund_pension_id: post.id }}">{{ post.id }}</router-link></td>
							<td><router-link v-bind:to="{name: 'FundsPension-View', params: { fund_pension_id: post.id }}">{{ post.code }}</router-link></td>
							<td><router-link v-bind:to="{name: 'FundsPension-View', params: { fund_pension_id: post.id }}">{{ post.name }}</router-link></td>
							<td>
							<router-link class="btn btn-warning btn-md" v-bind:to="{name: 'FundsPension-Edit', params: { fund_pension_id: post.id }}"><i class="fa fa-pencil-square-o"></i> </router-link>
							<router-link class="btn btn-danger btn-md" v-bind:to="{name: 'FundsPension-Delete', params: { fund_pension_id: post.id }}"><i class="fa fa-trash"></i> </router-link>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
		</template>
		
		<template id="view-FundsPension">
			<div>
				<header class="page-header">
					<div class="branding">
						<h1>FundsPension - {{ post.name }}</h1>
					</div>
				</header>
				<table class="table  table-responsive">
					<tr>
						<td>ID INTERNO</td>
						<td>{{ post.id }}</td>
					</tr>
					<tr>
						<td>CODIGO</td>
						<td>{{ post.code }}</td>
					</tr>
					<tr>
						<td>NOMBRE</td>
						<td>{{ post.name }}</td>
					</tr>
				</table>
				<br/>
				<span class="fa fa-arrow-left" aria-hidden="true"></span>
				<router-link v-bind:to="{ name: 'FundsPension-List' }">Volver a la lista</router-link>
			</div>		  
		</template>
		
		<template id="add-FundsPension">
			<div>
				<h2>FundsPension - Crear</h2>
				<form v-on:submit="createFundPension">
					<div class="form-group">
						<label for="add-content">Codigo</label>
						<input class="form-control" type="text" v-model="post.code" />
					</div>
					<div class="form-group">
						<label for="add-content">Nombre</label>
						<input class="form-control" type="text" v-model="post.name" />
					</div>
					<button type="submit" class="btn btn-primary">Crear</button>
					<router-link class="btn btn-primary" v-bind:to="{ name: 'FundsPension-List' }">Regresar</router-link>
				</form>
			</div>
		</template>
		
		<template id="edit-FundsPension">
			<div>
				<h2>FundsPension - Modificar</h2>
				<form v-on:submit="updateFundPension">
					<div class="form-group">
						<label for="edit-content">Codigo</label>
						<input class="form-control" id="edit-content" v-model="post.code" />
					</div>
					<div class="form-group">
						<label for="edit-content">Nombre</label>
						<input class="form-control" id="edit-content" v-model="post.name" />
					</div>
					<button type="submit" class="btn btn-primary">Guardar</button>
					<router-link class="btn btn-primary" v-bind:to="{ name: 'FundsPension-List' }">Regresar</router-link>
				</form>
			</div>
		</template>
		
		<template id="delete-FundsPension">
			<div>
				<h2>FundsPension - Eliminar</h2>
				<form v-on:submit="deleteFundPension">
					<p>The action cannot be undone.</p>
					<button type="submit" class="btn btn-danger">Eliminar</button>
					<router-link class="btn btn-primary" v-bind:to="{ name: 'FundsPension-List' }">Cancelar</router-link>
				</form>
			</div>
		</template>
		<!-- // ------------ CAJAS DE PENSION FIN -------------------------------------  -->
		
		<!-- // ------------ CAJAS DE PENSION INICIO -------------------------------------  -->
		<template id="page-FundSeverances">
			<div>
				<header class="page-header">
					<div class="branding">
						<h1>FundSeverances</h1>
					</div>
				</header>
				<div class="filters row">
					<div class="form-group col-sm-8">
						<label for="search-element">Filtrar / Buscar</label>
						<input v-model="searchKey" class="form-control" id="search-element" required/>
					</div>
					<div class="form-group col-sm-4 text-right">
						<div class="actions">
							<br>
							<router-link class="btn btn-primary" v-bind:to="{ name: 'FundSeverances-Add' }">
								<span class="fa fa-plus"></span>
								Nuevo
							</router-link>
						</div>
					</div>
				</div>
				<table class="table table-responsive">
					<thead>
						<tr>
							<th>ID</th>
							<th>Codigo</th>
							<th>Nombre</th>
							<th class="col-sm-2">Actions</th>
						</tr>
					</thead>
					<tbody>
						<tr v-if="posts===null">
							<td colspan="4">Loading...</td>
						</tr>
						<tr v-else v-for="post in filteredposts">
							<td><router-link v-bind:to="{name: 'FundSeverances-View', params: { fund_severances_id: post.id }}">{{ post.id }}</router-link></td>
							<td><router-link v-bind:to="{name: 'FundSeverances-View', params: { fund_severances_id: post.id }}">{{ post.code }}</router-link></td>
							<td><router-link v-bind:to="{name: 'FundSeverances-View', params: { fund_severances_id: post.id }}">{{ post.name }}</router-link></td>
							<td>
							<router-link class="btn btn-warning btn-md" v-bind:to="{name: 'FundSeverances-Edit', params: { fund_severances_id: post.id }}"><i class="fa fa-pencil-square-o"></i> </router-link>
							<router-link class="btn btn-danger btn-md" v-bind:to="{name: 'FundSeverances-Delete', params: { fund_severances_id: post.id }}"><i class="fa fa-trash"></i> </router-link>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
		</template>
		
		<template id="view-FundSeverances">
			<div>
				<header class="page-header">
					<div class="branding">
						<h1>FundSeverances - {{ post.name }}</h1>
					</div>
				</header>
				<table class="table  table-responsive">
					<tr>
						<td>ID INTERNO</td>
						<td>{{ post.id }}</td>
					</tr>
					<tr>
						<td>CODIGO</td>
						<td>{{ post.code }}</td>
					</tr>
					<tr>
						<td>NOMBRE</td>
						<td>{{ post.name }}</td>
					</tr>
				</table>
				<br/>
				<span class="fa fa-arrow-left" aria-hidden="true"></span>
				<router-link v-bind:to="{ name: 'FundSeverances-List' }">Volver a la lista</router-link>
			</div>		  
		</template>
		
		<template id="add-FundSeverances">
			<div>
				<h2>FundSeverances - Crear</h2>
				<form v-on:submit="createFundSeverance">
					<div class="form-group">
						<label for="add-content">Codigo</label>
						<input class="form-control" type="text" v-model="post.code" />
					</div>
					<div class="form-group">
						<label for="add-content">Nombre</label>
						<input class="form-control" type="text" v-model="post.name" />
					</div>
					<button type="submit" class="btn btn-primary">Crear</button>
					<router-link class="btn btn-primary" v-bind:to="{ name: 'FundSeverances-List' }">Regresar</router-link>
				</form>
			</div>
		</template>
		
		<template id="edit-FundSeverances">
			<div>
				<h2>FundSeverances - Modificar</h2>
				<form v-on:submit="updateFundSeverance">
					<div class="form-group">
						<label for="edit-content">Codigo</label>
						<input class="form-control" id="edit-content" v-model="post.code" />
					</div>
					<div class="form-group">
						<label for="edit-content">Nombre</label>
						<input class="form-control" id="edit-content" v-model="post.name" />
					</div>
					<button type="submit" class="btn btn-primary">Guardar</button>
					<router-link class="btn btn-primary" v-bind:to="{ name: 'FundSeverances-List' }">Regresar</router-link>
				</form>
			</div>
		</template>
		
		<template id="delete-FundSeverances">
			<div>
				<h2>FundSeverances - Eliminar</h2>
				<form v-on:submit="deleteFundSeverance">
					<p>The action cannot be undone.</p>
					<button type="submit" class="btn btn-danger">Eliminar</button>
					<router-link class="btn btn-primary" v-bind:to="{ name: 'FundSeverances-List' }">Cancelar</router-link>
				</form>
			</div>
		</template>
		<!-- // ------------ CAJAS DE PENSION FIN -------------------------------------  -->
		
		<!-- // ------------ GEO - DEPARTAMENTOS INICIO -------------------------------------  -->
		<template id="page-GEO-Departments">
			<div>
				<header class="page-header">
					<div class="branding">
						<h1>GEO - DEPARTAMENTOS</h1>
					</div>
				</header>
				<div class="filters row">
					<div class="form-group col-sm-8">
						<label for="search-element">Filtrar / Buscar</label>
						<input v-model="searchKey" class="form-control" id="search-element" required/>
					</div>
					<div class="form-group col-sm-4 text-right">
						<div class="actions">
							<br>
							<router-link class="btn btn-primary" v-bind:to="{ name: 'DepartmentsGEO-Add' }">
								<span class="fa fa-plus"></span>
								Nuevo
							</router-link>
						</div>
					</div>
				</div>
				<table class="table table-responsive">
					<thead>
						<tr>
							<th>ID</th>
							<th>Codigo</th>
							<th>Nombre</th>
							<th class="col-sm-2">Actions</th>
						</tr>
					</thead>
					<tbody>
						<tr v-if="posts===null">
							<td colspan="4">Loading...</td>
						</tr>
						<tr v-else v-for="post in filteredposts">
							<td><router-link v-bind:to="{name: 'DepartmentsGEO-View', params: { geo_department_id: post.id }}">{{ post.id }}</router-link></td>
							<td><router-link v-bind:to="{name: 'DepartmentsGEO-View', params: { geo_department_id: post.id }}">{{ post.code }}</router-link></td>
							<td><router-link v-bind:to="{name: 'DepartmentsGEO-View', params: { geo_department_id: post.id }}">{{ post.name }}</router-link></td>
							<td>
							<router-link class="btn btn-warning btn-md" v-bind:to="{name: 'DepartmentsGEO-Edit', params: { geo_department_id: post.id }}"><i class="fa fa-pencil-square-o"></i> </router-link>
							<router-link class="btn btn-danger btn-md" v-bind:to="{name: 'DepartmentsGEO-Delete', params: { geo_department_id: post.id }}"><i class="fa fa-trash"></i> </router-link>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
		</template>
		
		<template id="view-GEO-Departments">
			<div>
				<header class="page-header">
					<div class="branding">
						<h1>GEO - DEPARTAMENTOS - {{ post.name }}</h1>
					</div>
				</header>
				<table class="table  table-responsive">
					<tr>
						<td>ID INTERNO</td>
						<td>{{ post.id }}</td>
					</tr>
					<tr>
						<td>CODIGO</td>
						<td>{{ post.code }}</td>
					</tr>
					<tr>
						<td>NOMBRE</td>
						<td>{{ post.name }}</td>
					</tr>
				</table>
				<br/>
				<span class="fa fa-arrow-left" aria-hidden="true"></span>
				<router-link v-bind:to="{ name: 'DepartmentsGEO-List' }">Volver a la lista</router-link>
			</div>		  
		</template>
		
		<template id="add-GEO-Departments">
			<div>
				<h2>GEO - DEPARTAMENTOS - Crear</h2>
				<form v-on:submit="createDepartmentGEO">
					<div class="form-group">
						<label for="add-content">Codigo</label>
						<input class="form-control" type="text" v-model="post.code" />
					</div>
					<div class="form-group">
						<label for="add-content">Nombre</label>
						<input class="form-control" type="text" v-model="post.name" />
					</div>
					<button type="submit" class="btn btn-primary">Crear</button>
					<router-link class="btn btn-primary" v-bind:to="{ name: 'DepartmentsGEO-List' }">Regresar</router-link>
				</form>
			</div>
		</template>
		
		<template id="edit-GEO-Departments">
			<div>
				<h2>GEO - DEPARTAMENTOS - Modificar</h2>
				<form v-on:submit="updateDepartmentGEO">
					<div class="form-group">
						<label for="edit-content">Codigo</label>
						<input class="form-control" id="edit-content" v-model="post.code" />
					</div>
					<div class="form-group">
						<label for="edit-content">Nombre</label>
						<input class="form-control" id="edit-content" v-model="post.name" />
					</div>
					<button type="submit" class="btn btn-primary">Guardar</button>
					<router-link class="btn btn-primary" v-bind:to="{ name: 'DepartmentsGEO-List' }">Regresar</router-link>
				</form>
			</div>
		</template>
		
		<template id="delete-GEO-Departments">
			<div>
				<h2>GEO - DEPARTAMENTOS - Eliminar</h2>
				<form v-on:submit="deleteDepartmentGEO">
					<p>The action cannot be undone.</p>
					<button type="submit" class="btn btn-danger">Eliminar</button>
					<router-link class="btn btn-primary" v-bind:to="{ name: 'DepartmentsGEO-List' }">Cancelar</router-link>
				</form>
			</div>
		</template>
		<!-- // ------------ GEO - DEPARTAMENTOS FIN -------------------------------------  -->
		
		<!-- // ------------ GEO - CIUDADES INICIO -------------------------------------  -->
		<template id="page-GEO-Citys">
			<div>
				<header class="page-header">
					<div class="branding">
						<h1>GEO - CIUDADES</h1>
					</div>
				</header>
				<div class="filters row">
					<div class="form-group col-sm-8">
						<label for="search-element">Filtrar / Buscar</label>
						<input v-model="searchKey" class="form-control" id="search-element" required/>
					</div>
					<div class="form-group col-sm-4 text-right">
						<div class="actions">
							<br>
							<router-link class="btn btn-primary" v-bind:to="{ name: 'CitysGEO-Add' }">
								<span class="fa fa-plus"></span>
								Nuevo
							</router-link>
						</div>
					</div>
				</div>
				<table class="table table-responsive">
					<thead>
						<tr>
							<th>ID</th>
							<th>Departamento</th>
							<th>Nombre</th>
							<th class="col-sm-2">Actions</th>
						</tr>
					</thead>
					<tbody>
						<tr v-if="posts===null">
							<td colspan="4">Loading...</td>
						</tr>
						<tr v-else v-for="post in filteredposts">
							<td><router-link v-bind:to="{name: 'CitysGEO-View', params: { geo_city_id: post.id }}">{{ post.id }}</router-link></td>
							<td><router-link v-bind:to="{name: 'CitysGEO-View', params: { geo_city_id: post.id }}">{{ post.department.name }}</router-link></td>
							<td><router-link v-bind:to="{name: 'CitysGEO-View', params: { geo_city_id: post.id }}">{{ post.name }}</router-link></td>
							<td>
							<router-link class="btn btn-warning btn-md" v-bind:to="{name: 'CitysGEO-Edit', params: { geo_city_id: post.id }}"><i class="fa fa-pencil-square-o"></i> </router-link>
							<router-link class="btn btn-danger btn-md" v-bind:to="{name: 'CitysGEO-Delete', params: { geo_city_id: post.id }}"><i class="fa fa-trash"></i> </router-link>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
		</template>
			
		<template id="view-GEO-Citys">
			<div>
				<header class="page-header">
					<div class="branding">
						<h1>GEO - CIUDADES - {{ post.name }}</h1>
					</div>
				</header>
				<table class="table  table-responsive">
					<tr>
						<td>ID INTERNO</td>
						<td>{{ post.id }}</td>
					</tr>
					<tr>
						<td>DEPARTAMENTO</td>
						<td>
							<table class="table  table-responsive">
								<tr>
									<td>ID INTERNO</td>
									<td>{{ post.department.id }}</td>
								</tr>
								<tr>
									<td>CODIGO</td>
									<td>{{ post.department.code }}</td>
								</tr>
								<tr>
									<td>NOMBRE</td>
									<td>{{ post.department.name }}</td>
								</tr>
							</table>
						</td>
					</tr>
					<tr>
						<td>NOMBRE</td>
						<td>{{ post.name }}</td>
					</tr>
				</table>
				<br/>
				<span class="fa fa-arrow-left" aria-hidden="true"></span>
				<router-link v-bind:to="{ name: 'CitysGEO-List' }">Volver a la lista</router-link>
			</div>		  
		</template>
		
		<template id="add-GEO-Citys">
			<div>
				<h2>GEO - CIUDADES - Crear</h2>
				<form v-on:submit="createDepartmentGEO">
					<div class="form-group">
						<label for="add-content">DEPARTAMENTO</label>
						<select class="form-control" v-model="post.department">
							<option v-for="item in selectOptions.departments" :value="item.id">{{ item.name }}</option>
						</select>
					</div>
					<div class="form-group">
						<label for="add-content">NOMBRE</label>
						<input class="form-control" type="text" v-model="post.name" />
					</div>
					<button type="submit" class="btn btn-primary">Crear</button>
					<router-link class="btn btn-primary" v-bind:to="{ name: 'DepartmentsGEO-List' }">Regresar</router-link>
				</form>
			</div>
		</template>

		<template id="edit-GEO-Citys">
			<div>
				<h2>GEO - CIUDADES - Modificar</h2>
				<form v-on:submit="updateCityGEO">
					<div class="form-group">
						<label for="edit-content">DEPARTAMENTO</label>
						<select class="form-control" v-model="post.department">
							<option v-for="item in selectOptions.departments" :value="item.id">{{ item.name }}</option>
						</select>
					</div>
					<div class="form-group">
						<label for="edit-content">NOMBRE</label>
						<input class="form-control" id="edit-content" v-model="post.name" />
					</div>
					<button type="submit" class="btn btn-primary">Guardar</button>
					<router-link class="btn btn-primary" v-bind:to="{ name: 'CitysGEO-List' }">Regresar</router-link>
				</form>
			</div>
		</template>

		<template id="delete-GEO-Citys">
			<div>
				<h2>GEO - CIUDADES - Eliminar</h2>
				<form v-on:submit="deleteCityGEO">
					<p>The action cannot be undone.</p>
					<button type="submit" class="btn btn-danger">Eliminar</button>
					<router-link class="btn btn-primary" v-bind:to="{ name: 'CitysGEO-List' }">Cancelar</router-link>
				</form>
			</div>
		</template>
		<!-- // ------------ GEO - CIUDADES FIN -------------------------------------  -->
		
		<!-- // ------------ ESTADOS - EMPLEADOS INICIO -------------------------------------  -->
		<template id="page-StatusEmployees">
			<div>
				<header class="page-header">
					<div class="branding">
						<h1>ESTADOS - EMPLEADOS</h1>
					</div>
				</header>
				<div class="filters row">
					<div class="form-group col-sm-8">
						<label for="search-element">Filtrar / Buscar</label>
						<input v-model="searchKey" class="form-control" id="search-element" required/>
					</div>
					<div class="form-group col-sm-4 text-right">
						<div class="actions">
							<br>
							<router-link class="btn btn-primary" v-bind:to="{ name: 'StatusEmployees-Add' }">
								<span class="fa fa-plus"></span>
								Nuevo
							</router-link>
						</div>
					</div>
				</div>
				<table class="table table-responsive">
					<thead>
						<tr>
							<th>ID</th>
							<th>Nombre</th>
							<th class="col-sm-2">Actions</th>
						</tr>
					</thead>
					<tbody>
						<tr v-if="posts===null">
							<td colspan="4">Loading...</td>
						</tr>
						<tr v-else v-for="post in filteredposts">
							<td><router-link v-bind:to="{name: 'StatusEmployees-View', params: { status_employee_id: post.id }}">{{ post.id }}</router-link></td>
							<td><router-link v-bind:to="{name: 'StatusEmployees-View', params: { status_employee_id: post.id }}">{{ post.name }}</router-link></td>
							<td>
							<router-link class="btn btn-warning btn-md" v-bind:to="{name: 'StatusEmployees-Edit', params: { status_employee_id: post.id }}"><i class="fa fa-pencil-square-o"></i> </router-link>
							<router-link class="btn btn-danger btn-md" v-bind:to="{name: 'StatusEmployees-Delete', params: { status_employee_id: post.id }}"><i class="fa fa-trash"></i> </router-link>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
		</template>
		
		<template id="view-StatusEmployees">
			<div>
				<header class="page-header">
					<div class="branding">
						<h1>ESTADOS - EMPLEADOS - {{ post.name }}</h1>
					</div>
				</header>
				<table class="table  table-responsive">
					<tr>
						<td>ID INTERNO</td>
						<td>{{ post.id }}</td>
					</tr>
					<tr>
						<td>NOMBRE</td>
						<td>{{ post.name }}</td>
					</tr>
				</table>
				<br/>
				<span class="fa fa-arrow-left" aria-hidden="true"></span>
				<router-link v-bind:to="{ name: 'StatusEmployees-List' }">Volver a la lista</router-link>
			</div>		  
		</template>
		
		<template id="add-StatusEmployees">
			<div>
				<h2>ESTADOS - EMPLEADOS - Crear</h2>
				<form v-on:submit="createStatusEmployee">
					<div class="form-group">
						<label for="add-content">Nombre</label>
						<input class="form-control" type="text" v-model="post.name" />
					</div>
					<button type="submit" class="btn btn-primary">Crear</button>
					<router-link class="btn btn-primary" v-bind:to="{ name: 'StatusEmployees-List' }">Regresar</router-link>
				</form>
			</div>
		</template>
		
		<template id="edit-StatusEmployees">
			<div>
				<h2>ESTADOS - EMPLEADOS - Modificar</h2>
				<form v-on:submit="updateStatusEmployee">
					<div class="form-group">
						<label for="edit-content">Nombre</label>
						<input class="form-control" id="edit-content" v-model="post.name" />
					</div>
					<button type="submit" class="btn btn-primary">Guardar</button>
					<router-link class="btn btn-primary" v-bind:to="{ name: 'StatusEmployees-List' }">Regresar</router-link>
				</form>
			</div>
		</template>
		
		<template id="delete-StatusEmployees">
			<div>
				<h2>ESTADOS - EMPLEADOS - Eliminar</h2>
				<form v-on:submit="deleteStatusEmployee">
					<p>The action cannot be undone.</p>
					<button type="submit" class="btn btn-danger">Eliminar</button>
					<router-link class="btn btn-primary" v-bind:to="{ name: 'StatusEmployees-List' }">Cancelar</router-link>
				</form>
			</div>
		</template>
		<!-- // ------------ ESTADOS - EMPLEADOS FIN -------------------------------------  -->
		
		<!-- // ------------ ESTADOS - SERVICIOS INICIO -------------------------------------  -->
		<template id="page-StatusServices">
			<div>
				<header class="page-header">
					<div class="branding">
						<h1>ESTADOS - SERVICIOS</h1>
					</div>
				</header>
				<div class="filters row">
					<div class="form-group col-sm-8">
						<label for="search-element">Filtrar / Buscar</label>
						<input v-model="searchKey" class="form-control" id="search-element" required/>
					</div>
					<div class="form-group col-sm-4 text-right">
						<div class="actions">
							<br>
							<router-link class="btn btn-primary" v-bind:to="{ name: 'StatusServices-Add' }">
								<span class="fa fa-plus"></span>
								Nuevo
							</router-link>
						</div>
					</div>
				</div>
				<table class="table table-responsive">
					<thead>
						<tr>
							<th>ID</th>
							<th>Nombre</th>
							<th>Color</th>
							<th class="col-sm-2">Actions</th>
						</tr>
					</thead>
					<tbody>
						<tr v-if="posts===null">
							<td colspan="4">Loading...</td>
						</tr>
						<tr v-else v-for="post in filteredposts">
							<td><router-link v-bind:to="{name: 'StatusServices-View', params: { status_service_id: post.id }}">{{ post.id }}</router-link></td>
							<td><router-link v-bind:to="{name: 'StatusServices-View', params: { status_service_id: post.id }}">{{ post.name }}</router-link></td>
							<!-- <td><router-link v-bind:to="{name: 'StatusServices-View', params: { status_service_id: post.id }}">{{ post.color }}</router-link></td> -->
							<td v-bind:style="'background-color: ' + post.color"><router-link v-bind:to="{name: 'StatusServices-View', params: {status_service_id: post.id}}"></router-link></td>
							<td>
							<router-link class="btn btn-warning btn-md" v-bind:to="{name: 'StatusServices-Edit', params: { status_service_id: post.id }}"><i class="fa fa-pencil-square-o"></i> </router-link>
							<router-link class="btn btn-danger btn-md" v-bind:to="{name: 'StatusServices-Delete', params: { status_service_id: post.id }}"><i class="fa fa-trash"></i> </router-link>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
		</template>
		
		<template id="view-StatusServices">
			<div>
				<header class="page-header">
					<div class="branding">
						<h1>ESTADOS - SERVICIOS - {{ post.name }}</h1>
					</div>
				</header>
				<table class="table  table-responsive">
					<tr>
						<td>ID INTERNO</td>
						<td>{{ post.id }}</td>
					</tr>
					<tr>
						<td>NOMBRE</td>
						<td>{{ post.name }}</td>
					</tr>
					<tr>
						<td>COLOR</td>
						<td v-bind:style="'background-color: ' + post.color"></td>
					</tr>
					<tr>
						<td>COLOR CODE</td>
						<td>{{ post.color }}</td>
					</tr>
				</table>
				<br/>
				<span class="fa fa-arrow-left" aria-hidden="true"></span>
				<router-link v-bind:to="{ name: 'StatusServices-List' }">Volver a la lista</router-link>
			</div>		  
		</template>
		
		<template id="add-StatusServices">
			<div>
				<h2>ESTADOS - SERVICIOS - Crear</h2>
				<form v-on:submit="createStatusService">
					<div class="form-group">
						<label for="add-content">NOMBRE</label>
						<input class="form-control" type="text" v-model="post.name" />
					</div>
					<div class="form-group">
						<label for="add-content">COLOR</label>
						<input class="form-control" type="color" v-model="post.color" />
					</div>
					<button type="submit" class="btn btn-primary">Crear</button>
					<router-link class="btn btn-primary" v-bind:to="{ name: 'StatusServices-List' }">Regresar</router-link>
				</form>
			</div>
		</template>
		
		<template id="edit-StatusServices">
			<div>
				<h2>ESTADOS - SERVICIOS - Modificar</h2>
				<form v-on:submit="updateStatusService">
					<div class="form-group">
						<label for="edit-content">Nombre</label>
						<input class="form-control" id="edit-content" v-model="post.name" />
					</div>
					<div class="form-group">
						<label for="add-content">COLOR</label>
						<input class="form-control" type="color" v-model="post.color" />
					</div>
					<button type="submit" class="btn btn-primary">Guardar</button>
					<router-link class="btn btn-primary" v-bind:to="{ name: 'StatusServices-List' }">Regresar</router-link>
				</form>
			</div>
		</template>
		
		<template id="delete-StatusServices">
			<div>
				<h2>ESTADOS - SERVICIOS - Eliminar</h2>
				<form v-on:submit="deleteStatusService">
					<p>The action cannot be undone.</p>
					<button type="submit" class="btn btn-danger">Eliminar</button>
					<router-link class="btn btn-primary" v-bind:to="{ name: 'StatusServices-List' }">Cancelar</router-link>
				</form>
			</div>
		</template>
		<!-- // ------------ ESTADOS - SERVICIOS FIN -------------------------------------  -->
		
		<!-- // ------------ ESTADOS - VEHICULOS INICIO -------------------------------------  -->
		<template id="page-StatusVehicles">
			<div>
				<header class="page-header">
					<div class="branding">
						<h1>ESTADOS - VEHICULOS</h1>
					</div>
				</header>
				<div class="filters row">
					<div class="form-group col-sm-8">
						<label for="search-element">Filtrar / Buscar</label>
						<input v-model="searchKey" class="form-control" id="search-element" required/>
					</div>
					<div class="form-group col-sm-4 text-right">
						<div class="actions">
							<br>
							<router-link class="btn btn-primary" v-bind:to="{ name: 'StatusVehicles-Add' }">
								<span class="fa fa-plus"></span>
								Nuevo
							</router-link>
						</div>
					</div>
				</div>
				<table class="table table-responsive">
					<thead>
						<tr>
							<th>ID</th>
							<th>Nombre</th>
							<th class="col-sm-2">Actions</th>
						</tr>
					</thead>
					<tbody>
						<tr v-if="posts===null">
							<td colspan="4">Loading...</td>
						</tr>
						<tr v-else v-for="post in filteredposts">
							<td><router-link v-bind:to="{name: 'StatusVehicles-View', params: { status_vehicle_id: post.id }}">{{ post.id }}</router-link></td>
							<td><router-link v-bind:to="{name: 'StatusVehicles-View', params: { status_vehicle_id: post.id }}">{{ post.name }}</router-link></td>
							<td>
							<router-link class="btn btn-warning btn-md" v-bind:to="{name: 'StatusVehicles-Edit', params: { status_vehicle_id: post.id }}"><i class="fa fa-pencil-square-o"></i> </router-link>
							<router-link class="btn btn-danger btn-md" v-bind:to="{name: 'StatusVehicles-Delete', params: { status_vehicle_id: post.id }}"><i class="fa fa-trash"></i> </router-link>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
		</template>
		
		<template id="view-StatusVehicles">
			<div>
				<header class="page-header">
					<div class="branding">
						<h1>ESTADOS - VEHICULOS - {{ post.name }}</h1>
					</div>
				</header>
				<table class="table  table-responsive">
					<tr>
						<td>ID INTERNO</td>
						<td>{{ post.id }}</td>
					</tr>
					<tr>
						<td>NOMBRE</td>
						<td>{{ post.name }}</td>
					</tr>
				</table>
				<br/>
				<span class="fa fa-arrow-left" aria-hidden="true"></span>
				<router-link v-bind:to="{ name: 'StatusVehicles-List' }">Volver a la lista</router-link>
			</div>		  
		</template>
		
		<template id="add-StatusVehicles">
			<div>
				<h2>ESTADOS - VEHICULOS - Crear</h2>
				<form v-on:submit="createStatusVehicle">
					<div class="form-group">
						<label for="add-content">NOMBRE</label>
						<input class="form-control" type="text" v-model="post.name" />
					</div>
					<button type="submit" class="btn btn-primary">Crear</button>
					<router-link class="btn btn-primary" v-bind:to="{ name: 'StatusVehicles-List' }">Regresar</router-link>
				</form>
			</div>
		</template>
		
		<template id="edit-StatusVehicles">
			<div>
				<h2>ESTADOS - VEHICULOS - Modificar</h2>
				<form v-on:submit="updateStatusVehicle">
					<div class="form-group">
						<label for="edit-content">Nombre</label>
						<input class="form-control" id="edit-content" v-model="post.name" />
					</div>
					<button type="submit" class="btn btn-primary">Guardar</button>
					<router-link class="btn btn-primary" v-bind:to="{ name: 'StatusVehicles-List' }">Regresar</router-link>
				</form>
			</div>
		</template>
		
		<template id="delete-StatusVehicles">
			<div>
				<h2>ESTADOS - VEHICULOS - Eliminar</h2>
				<form v-on:submit="deleteStatusVehicle">
					<p>The action cannot be undone.</p>
					<button type="submit" class="btn btn-danger">Eliminar</button>
					<router-link class="btn btn-primary" v-bind:to="{ name: 'StatusVehicles-List' }">Cancelar</router-link>
				</form>
			</div>
		</template>
		<!-- // ------------ ESTADOS - VEHICULOS FIN -------------------------------------  -->
		
		<!-- // ------------ TIPOS - SANGRE INICIO -------------------------------------  -->
		<template id="page-TypesBloods">
			<div>
				<header class="page-header">
					<div class="branding">
						<h1>TIPOS - SANGRE</h1>
					</div>
				</header>
				<div class="filters row">
					<div class="form-group col-sm-8">
						<label for="search-element">Filtrar / Buscar</label>
						<input v-model="searchKey" class="form-control" id="search-element" required/>
					</div>
					<div class="form-group col-sm-4 text-right">
						<div class="actions">
							<br>
							<router-link class="btn btn-primary" v-bind:to="{ name: 'TypesBloods-Add' }">
								<span class="fa fa-plus"></span>
								Nuevo
							</router-link>
						</div>
					</div>
				</div>
				<table class="table table-responsive">
					<thead>
						<tr>
							<th>ID</th>
							<th>Nombre</th>
							<th class="col-sm-2">Actions</th>
						</tr>
					</thead>
					<tbody>
						<tr v-if="posts===null">
							<td colspan="4">Loading...</td>
						</tr>
						<tr v-else v-for="post in filteredposts">
							<td><router-link v-bind:to="{name: 'TypesBloods-View', params: { type_blood_id: post.id }}">{{ post.id }}</router-link></td>
							<td><router-link v-bind:to="{name: 'TypesBloods-View', params: { type_blood_id: post.id }}">{{ post.name }}</router-link></td>
							<td>
							<router-link class="btn btn-warning btn-md" v-bind:to="{name: 'TypesBloods-Edit', params: { type_blood_id: post.id }}"><i class="fa fa-pencil-square-o"></i> </router-link>
							<router-link class="btn btn-danger btn-md" v-bind:to="{name: 'TypesBloods-Delete', params: { type_blood_id: post.id }}"><i class="fa fa-trash"></i> </router-link>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
		</template>
		
		<template id="view-TypesBloods">
			<div>
				<header class="page-header">
					<div class="branding">
						<h1>TIPOS - SANGRE - {{ post.name }}</h1>
					</div>
				</header>
				<table class="table  table-responsive">
					<tr>
						<td>ID INTERNO</td>
						<td>{{ post.id }}</td>
					</tr>
					<tr>
						<td>NOMBRE</td>
						<td>{{ post.name }}</td>
					</tr>
				</table>
				<br/>
				<span class="fa fa-arrow-left" aria-hidden="true"></span>
				<router-link v-bind:to="{ name: 'TypesBloods-List' }">Volver a la lista</router-link>
			</div>		  
		</template>
		
		<template id="add-TypesBloods">
			<div>
				<h2>TIPOS - SANGRE - Crear</h2>
				<form v-on:submit="createTypesBlood">
					<div class="form-group">
						<label for="add-content">NOMBRE</label>
						<input class="form-control" type="text" v-model="post.name" />
					</div>
					<button type="submit" class="btn btn-primary">Crear</button>
					<router-link class="btn btn-primary" v-bind:to="{ name: 'TypesBloods-List' }">Regresar</router-link>
				</form>
			</div>
		</template>
		
		<template id="edit-TypesBloods">
			<div>
				<h2>TIPOS - SANGRE - Modificar</h2>
				<form v-on:submit="updateTypesBlood">
					<div class="form-group">
						<label for="edit-content">Nombre</label>
						<input class="form-control" id="edit-content" v-model="post.name" />
					</div>
					<button type="submit" class="btn btn-primary">Guardar</button>
					<router-link class="btn btn-primary" v-bind:to="{ name: 'TypesBloods-List' }">Regresar</router-link>
				</form>
			</div>
		</template>
		
		<template id="delete-TypesBloods">
			<div>
				<h2>TIPOS - SANGRE - Eliminar</h2>
				<form v-on:submit="deleteTypesBlood">
					<p>The action cannot be undone.</p>
					<button type="submit" class="btn btn-danger">Eliminar</button>
					<router-link class="btn btn-primary" v-bind:to="{ name: 'TypesBloods-List' }">Cancelar</router-link>
				</form>
			</div>
		</template>
		<!-- // ------------ TIPOS - SANGRE FIN -------------------------------------  -->
		
		<!-- // ------------ TIPOS - RH INICIO -------------------------------------  -->
		<template id="page-TypesBloodsRH">
			<div>
				<header class="page-header">
					<div class="branding">
						<h1>TIPOS - RH</h1>
					</div>
				</header>
				<div class="filters row">
					<div class="form-group col-sm-8">
						<label for="search-element">Filtrar / Buscar</label>
						<input v-model="searchKey" class="form-control" id="search-element" required/>
					</div>
					<div class="form-group col-sm-4 text-right">
						<div class="actions">
							<br>
							<router-link class="btn btn-primary" v-bind:to="{ name: 'TypesBloodsRH-Add' }">
								<span class="fa fa-plus"></span>
								Nuevo
							</router-link>
						</div>
					</div>
				</div>
				<table class="table table-responsive">
					<thead>
						<tr>
							<th>ID</th>
							<th>Nombre</th>
							<th class="col-sm-2">Actions</th>
						</tr>
					</thead>
					<tbody>
						<tr v-if="posts===null">
							<td colspan="4">Loading...</td>
						</tr>
						<tr v-else v-for="post in filteredposts">
							<td><router-link v-bind:to="{name: 'TypesBloodsRH-View', params: { type_blood_rh_id: post.id }}">{{ post.id }}</router-link></td>
							<td><router-link v-bind:to="{name: 'TypesBloodsRH-View', params: { type_blood_rh_id: post.id }}">{{ post.name }}</router-link></td>
							<td>
							<router-link class="btn btn-warning btn-md" v-bind:to="{name: 'TypesBloodsRH-Edit', params: { type_blood_rh_id: post.id }}"><i class="fa fa-pencil-square-o"></i> </router-link>
							<router-link class="btn btn-danger btn-md" v-bind:to="{name: 'TypesBloodsRH-Delete', params: { type_blood_rh_id: post.id }}"><i class="fa fa-trash"></i> </router-link>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
		</template>
		
		<template id="view-TypesBloodsRH">
			<div>
				<header class="page-header">
					<div class="branding">
						<h1>TIPOS - RH - {{ post.name }}</h1>
					</div>
				</header>
				<table class="table  table-responsive">
					<tr>
						<td>ID INTERNO</td>
						<td>{{ post.id }}</td>
					</tr>
					<tr>
						<td>NOMBRE</td>
						<td>{{ post.name }}</td>
					</tr>
				</table>
				<br/>
				<span class="fa fa-arrow-left" aria-hidden="true"></span>
				<router-link v-bind:to="{ name: 'TypesBloodsRH-List' }">Volver a la lista</router-link>
			</div>		  
		</template>
		
		<template id="add-TypesBloodsRH">
			<div>
				<h2>TIPOS - RH - Crear</h2>
				<form v-on:submit="createTypesBloodRH">
					<div class="form-group">
						<label for="add-content">NOMBRE</label>
						<input class="form-control" type="text" v-model="post.name" />
					</div>
					<button type="submit" class="btn btn-primary">Crear</button>
					<router-link class="btn btn-primary" v-bind:to="{ name: 'TypesBloodsRH-List' }">Regresar</router-link>
				</form>
			</div>
		</template>
		
		<template id="edit-TypesBloodsRH">
			<div>
				<h2>TIPOS - RH - Modificar</h2>
				<form v-on:submit="updateTypesBloodRH">
					<div class="form-group">
						<label for="edit-content">Nombre</label>
						<input class="form-control" id="edit-content" v-model="post.name" />
					</div>
					<button type="submit" class="btn btn-primary">Guardar</button>
					<router-link class="btn btn-primary" v-bind:to="{ name: 'TypesBloodsRH-List' }">Regresar</router-link>
				</form>
			</div>
		</template>
		
		<template id="delete-TypesBloodsRH">
			<div>
				<h2>TIPOS - RH - Eliminar</h2>
				<form v-on:submit="deleteTypesBloodRH">
					<p>The action cannot be undone.</p>
					<button type="submit" class="btn btn-danger">Eliminar</button>
					<router-link class="btn btn-primary" v-bind:to="{ name: 'TypesBloodsRH-List' }">Cancelar</router-link>
				</form>
			</div>
		</template>
		<!-- // ------------ TIPOS - RH FIN -------------------------------------  -->
		
		<!-- // ------------ TIPOS - CLIENTES INICIO -------------------------------------  -->
		<template id="page-TypesClients">
			<div>
				<header class="page-header">
					<div class="branding">
						<h1>TIPOS - CLIENTES</h1>
					</div>
				</header>
				<div class="filters row">
					<div class="form-group col-sm-8">
						<label for="search-element">Filtrar / Buscar</label>
						<input v-model="searchKey" class="form-control" id="search-element" required/>
					</div>
					<div class="form-group col-sm-4 text-right">
						<div class="actions">
							<br>
							<router-link class="btn btn-primary" v-bind:to="{ name: 'TypesClients-Add' }">
								<span class="fa fa-plus"></span>
								Nuevo
							</router-link>
						</div>
					</div>
				</div>
				<table class="table table-responsive">
					<thead>
						<tr>
							<th>ID</th>
							<th>Nombre</th>
							<th class="col-sm-2">Actions</th>
						</tr>
					</thead>
					<tbody>
						<tr v-if="posts===null">
							<td colspan="4">Loading...</td>
						</tr>
						<tr v-else v-for="post in filteredposts">
							<td><router-link v-bind:to="{name: 'TypesClients-View', params: { type_client_id: post.id }}">{{ post.id }}</router-link></td>
							<td><router-link v-bind:to="{name: 'TypesClients-View', params: { type_client_id: post.id }}">{{ post.name }}</router-link></td>
							<td>
							<router-link class="btn btn-warning btn-md" v-bind:to="{name: 'TypesClients-Edit', params: { type_client_id: post.id }}"><i class="fa fa-pencil-square-o"></i> </router-link>
							<router-link class="btn btn-danger btn-md" v-bind:to="{name: 'TypesClients-Delete', params: { type_client_id: post.id }}"><i class="fa fa-trash"></i> </router-link>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
		</template>
		
		<template id="view-TypesClients">
			<div>
				<header class="page-header">
					<div class="branding">
						<h1>TIPOS - CLIENTES - {{ post.name }}</h1>
					</div>
				</header>
				<table class="table  table-responsive">
					<tr>
						<td>ID INTERNO</td>
						<td>{{ post.id }}</td>
					</tr>
					<tr>
						<td>NOMBRE</td>
						<td>{{ post.name }}</td>
					</tr>
				</table>
				<br/>
				<span class="fa fa-arrow-left" aria-hidden="true"></span>
				<router-link v-bind:to="{ name: 'TypesClients-List' }">Volver a la lista</router-link>
			</div>		  
		</template>
		
		<template id="add-TypesClients">
			<div>
				<h2>TIPOS - CLIENTES - Crear</h2>
				<form v-on:submit="createTypesClient">
					<div class="form-group">
						<label for="add-content">NOMBRE</label>
						<input class="form-control" type="text" v-model="post.name" />
					</div>
					<button type="submit" class="btn btn-primary">Crear</button>
					<router-link class="btn btn-primary" v-bind:to="{ name: 'TypesClients-List' }">Regresar</router-link>
				</form>
			</div>
		</template>
		
		<template id="edit-TypesClients">
			<div>
				<h2>TIPOS - CLIENTES - Modificar</h2>
				<form v-on:submit="updateTypesClient">
					<div class="form-group">
						<label for="edit-content">Nombre</label>
						<input class="form-control" id="edit-content" v-model="post.name" />
					</div>
					<button type="submit" class="btn btn-primary">Guardar</button>
					<router-link class="btn btn-primary" v-bind:to="{ name: 'TypesClients-List' }">Regresar</router-link>
				</form>
			</div>
		</template>
		
		<template id="delete-TypesClients">
			<div>
				<h2>TIPOS - CLIENTES - Eliminar</h2>
				<form v-on:submit="deleteTypesClient">
					<p>The action cannot be undone.</p>
					<button type="submit" class="btn btn-danger">Eliminar</button>
					<router-link class="btn btn-primary" v-bind:to="{ name: 'TypesClients-List' }">Cancelar</router-link>
				</form>
			</div>
		</template>
		<!-- // ------------ TIPOS - CLIENTES FIN -------------------------------------  -->
		
		<!-- // ------------ TIPOS - CONTACTOS INICIO -------------------------------------  -->
		<template id="page-TypesContacts">
			<div>
				<header class="page-header">
					<div class="branding">
						<h1>TIPOS - CONTACTOS</h1>
					</div>
				</header>
				<div class="filters row">
					<div class="form-group col-sm-8">
						<label for="search-element">Filtrar / Buscar</label>
						<input v-model="searchKey" class="form-control" id="search-element" required/>
					</div>
					<div class="form-group col-sm-4 text-right">
						<div class="actions">
							<br>
							<router-link class="btn btn-primary" v-bind:to="{ name: 'TypesContacts-Add' }">
								<span class="fa fa-plus"></span>
								Nuevo
							</router-link>
						</div>
					</div>
				</div>
				<table class="table table-responsive">
					<thead>
						<tr>
							<th>ID</th>
							<th>Nombre</th>
							<th>Color</th>
							<th class="col-sm-2">Actions</th>
						</tr>
					</thead>
					<tbody>
						<tr v-if="posts===null">
							<td colspan="4">Loading...</td>
						</tr>
						<tr v-else v-for="post in filteredposts">
							<td><router-link v-bind:to="{name: 'TypesContacts-View', params: { type_contact_id: post.id }}">{{ post.id }}</router-link></td>
							<td><router-link v-bind:to="{name: 'TypesContacts-View', params: { type_contact_id: post.id }}">{{ post.name }}</router-link></td>
							<td>
							<router-link class="btn btn-warning btn-md" v-bind:to="{name: 'TypesContacts-Edit', params: { type_contact_id: post.id }}"><i class="fa fa-pencil-square-o"></i> </router-link>
							<router-link class="btn btn-danger btn-md" v-bind:to="{name: 'TypesContacts-Delete', params: { type_contact_id: post.id }}"><i class="fa fa-trash"></i> </router-link>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
		</template>
		
		<template id="view-TypesContacts">
			<div>
				<header class="page-header">
					<div class="branding">
						<h1>TIPOS - CONTACTOS - {{ post.name }}</h1>
					</div>
				</header>
				<table class="table  table-responsive">
					<tr>
						<td>ID INTERNO</td>
						<td>{{ post.id }}</td>
					</tr>
					<tr>
						<td>NOMBRE</td>
						<td>{{ post.name }}</td>
					</tr>
				</table>
				<br/>
				<span class="fa fa-arrow-left" aria-hidden="true"></span>
				<router-link v-bind:to="{ name: 'TypesContacts-List' }">Volver a la lista</router-link>
			</div>		  
		</template>
		
		<template id="add-TypesContacts">
			<div>
				<h2>TIPOS - CONTACTOS - Crear</h2>
				<form v-on:submit="createTypesContact">
					<div class="form-group">
						<label for="add-content">NOMBRE</label>
						<input class="form-control" type="text" v-model="post.name" />
					</div>
					<button type="submit" class="btn btn-primary">Crear</button>
					<router-link class="btn btn-primary" v-bind:to="{ name: 'TypesContacts-List' }">Regresar</router-link>
				</form>
			</div>
		</template>
		
		<template id="edit-TypesContacts">
			<div>
				<h2>TIPOS - CONTACTOS - Modificar</h2>
				<form v-on:submit="updateTypesContact">
					<div class="form-group">
						<label for="edit-content">Nombre</label>
						<input class="form-control" id="edit-content" v-model="post.name" />
					</div>
					<button type="submit" class="btn btn-primary">Guardar</button>
					<router-link class="btn btn-primary" v-bind:to="{ name: 'TypesContacts-List' }">Regresar</router-link>
				</form>
			</div>
		</template>
		
		<template id="delete-TypesContacts">
			<div>
				<h2>TIPOS - CONTACTOS - Eliminar</h2>
				<form v-on:submit="deleteTypesContact">
					<p>The action cannot be undone.</p>
					<button type="submit" class="btn btn-danger">Eliminar</button>
					<router-link class="btn btn-primary" v-bind:to="{ name: 'TypesContacts-List' }">Cancelar</router-link>
				</form>
			</div>
		</template>
		<!-- // ------------ TIPOS - CONTACTOS FIN -------------------------------------  -->
		
		<!-- // ------------ TIPOS - COMBUSTIBLES INICIO -------------------------------------  -->
		<template id="page-TypesFuels">
			<div>
				<header class="page-header">
					<div class="branding">
						<h1>TIPOS - COMBUSTIBLES</h1>
					</div>
				</header>
				<div class="filters row">
					<div class="form-group col-sm-8">
						<label for="search-element">Filtrar / Buscar</label>
						<input v-model="searchKey" class="form-control" id="search-element" required/>
					</div>
					<div class="form-group col-sm-4 text-right">
						<div class="actions">
							<br>
							<router-link class="btn btn-primary" v-bind:to="{ name: 'TypesFuels-Add' }">
								<span class="fa fa-plus"></span>
								Nuevo
							</router-link>
						</div>
					</div>
				</div>
				<table class="table table-responsive">
					<thead>
						<tr>
							<th>ID</th>
							<th>Nombre</th>
							<th class="col-sm-2">Actions</th>
						</tr>
					</thead>
					<tbody>
						<tr v-if="posts===null">
							<td colspan="4">Loading...</td>
						</tr>
						<tr v-else v-for="post in filteredposts">
							<td><router-link v-bind:to="{name: 'TypesFuels-View', params: { type_fuel_id: post.id }}">{{ post.id }}</router-link></td>
							<td><router-link v-bind:to="{name: 'TypesFuels-View', params: { type_fuel_id: post.id }}">{{ post.name }}</router-link></td>
							<td>
							<router-link class="btn btn-warning btn-md" v-bind:to="{name: 'TypesFuels-Edit', params: { type_fuel_id: post.id }}"><i class="fa fa-pencil-square-o"></i> </router-link>
							<router-link class="btn btn-danger btn-md" v-bind:to="{name: 'TypesFuels-Delete', params: { type_fuel_id: post.id }}"><i class="fa fa-trash"></i> </router-link>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
		</template>
		
		<template id="view-TypesFuels">
			<div>
				<header class="page-header">
					<div class="branding">
						<h1>TIPOS - COMBUSTIBLES - {{ post.name }}</h1>
					</div>
				</header>
				<table class="table  table-responsive">
					<tr>
						<td>ID INTERNO</td>
						<td>{{ post.id }}</td>
					</tr>
					<tr>
						<td>NOMBRE</td>
						<td>{{ post.name }}</td>
					</tr>
				</table>
				<br/>
				<span class="fa fa-arrow-left" aria-hidden="true"></span>
				<router-link v-bind:to="{ name: 'TypesFuels-List' }">Volver a la lista</router-link>
			</div>		  
		</template>
		
		<template id="add-TypesFuels">
			<div>
				<h2>TIPOS - COMBUSTIBLES - Crear</h2>
				<form v-on:submit="createTypesFuel">
					<div class="form-group">
						<label for="add-content">NOMBRE</label>
						<input class="form-control" type="text" v-model="post.name" />
					</div>
					<button type="submit" class="btn btn-primary">Crear</button>
					<router-link class="btn btn-primary" v-bind:to="{ name: 'TypesFuels-List' }">Regresar</router-link>
				</form>
			</div>
		</template>
		
		<template id="edit-TypesFuels">
			<div>
				<h2>TIPOS - COMBUSTIBLES - Modificar</h2>
				<form v-on:submit="updateTypesFuel">
					<div class="form-group">
						<label for="edit-content">Nombre</label>
						<input class="form-control" id="edit-content" v-model="post.name" />
					</div>
					<button type="submit" class="btn btn-primary">Guardar</button>
					<router-link class="btn btn-primary" v-bind:to="{ name: 'TypesFuels-List' }">Regresar</router-link>
				</form>
			</div>
		</template>
		
		<template id="delete-TypesFuels">
			<div>
				<h2>TIPOS - COMBUSTIBLES - Eliminar</h2>
				<form v-on:submit="deleteTypesFuel">
					<p>The action cannot be undone.</p>
					<button type="submit" class="btn btn-danger">Eliminar</button>
					<router-link class="btn btn-primary" v-bind:to="{ name: 'TypesFuels-List' }">Cancelar</router-link>
				</form>
			</div>
		</template>
		<!-- // ------------ TIPOS - COMBUSTIBLES FIN -------------------------------------  -->
		
		<!-- // ------------ TIPOS - IDENTIFICACIONES INICIO -------------------------------------  -->
		<template id="page-TypesIdentifications">
			<div>
				<header class="page-header">
					<div class="branding">
						<h1>TIPOS - IDENTIFICACIONES</h1>
					</div>
				</header>
				<div class="filters row">
					<div class="form-group col-sm-8">
						<label for="search-element">Filtrar / Buscar</label>
						<input v-model="searchKey" class="form-control" id="search-element" required/>
					</div>
					<div class="form-group col-sm-4 text-right">
						<div class="actions">
							<br>
							<router-link class="btn btn-primary" v-bind:to="{ name: 'TypesIdentifications-Add' }">
								<span class="fa fa-plus"></span>
								Nuevo
							</router-link>
						</div>
					</div>
				</div>
				<table class="table table-responsive">
					<thead>
						<tr>
							<th>ID</th>
							<th>Nombre</th>
							<th class="col-sm-2">Actions</th>
						</tr>
					</thead>
					<tbody>
						<tr v-if="posts===null">
							<td colspan="4">Loading...</td>
						</tr>
						<tr v-else v-for="post in filteredposts">
							<td><router-link v-bind:to="{name: 'TypesIdentifications-View', params: { type_identification_id: post.id }}">{{ post.id }}</router-link></td>
							<td><router-link v-bind:to="{name: 'TypesIdentifications-View', params: { type_identification_id: post.id }}">{{ post.name }}</router-link></td>
							<td>
							<router-link class="btn btn-warning btn-md" v-bind:to="{name: 'TypesIdentifications-Edit', params: { type_identification_id: post.id }}"><i class="fa fa-pencil-square-o"></i> </router-link>
							<router-link class="btn btn-danger btn-md" v-bind:to="{name: 'TypesIdentifications-Delete', params: { type_identification_id: post.id }}"><i class="fa fa-trash"></i> </router-link>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
		</template>
		
		<template id="view-TypesIdentifications">
			<div>
				<header class="page-header">
					<div class="branding">
						<h1>TIPOS - IDENTIFICACIONES - {{ post.name }}</h1>
					</div>
				</header>
				<table class="table  table-responsive">
					<tr>
						<td>ID INTERNO</td>
						<td>{{ post.id }}</td>
					</tr>
					<tr>
						<td>NOMBRE</td>
						<td>{{ post.name }}</td>
					</tr>
				</table>
				<br/>
				<span class="fa fa-arrow-left" aria-hidden="true"></span>
				<router-link v-bind:to="{ name: 'TypesIdentifications-List' }">Volver a la lista</router-link>
			</div>		  
		</template>
		
		<template id="add-TypesIdentifications">
			<div>
				<h2>TIPOS - IDENTIFICACIONES - Crear</h2>
				<form v-on:submit="createTypesIdentification">
					<div class="form-group">
						<label for="add-content">NOMBRE</label>
						<input class="form-control" type="text" v-model="post.name" />
					</div>
					<button type="submit" class="btn btn-primary">Crear</button>
					<router-link class="btn btn-primary" v-bind:to="{ name: 'TypesIdentifications-List' }">Regresar</router-link>
				</form>
			</div>
		</template>
		
		<template id="edit-TypesIdentifications">
			<div>
				<h2>TIPOS - IDENTIFICACIONES - Modificar</h2>
				<form v-on:submit="updateTypesIdentification">
					<div class="form-group">
						<label for="edit-content">Nombre</label>
						<input class="form-control" id="edit-content" v-model="post.name" />
					</div>
					<button type="submit" class="btn btn-primary">Guardar</button>
					<router-link class="btn btn-primary" v-bind:to="{ name: 'TypesIdentifications-List' }">Regresar</router-link>
				</form>
			</div>
		</template>
		
		<template id="delete-TypesIdentifications">
			<div>
				<h2>TIPOS - IDENTIFICACIONES - Eliminar</h2>
				<form v-on:submit="deleteTypesIdentification">
					<p>The action cannot be undone.</p>
					<button type="submit" class="btn btn-danger">Eliminar</button>
					<router-link class="btn btn-primary" v-bind:to="{ name: 'TypesIdentifications-List' }">Cancelar</router-link>
				</form>
			</div>
		</template>
		<!-- // ------------ TIPOS - IDENTIFICACIONES FIN -------------------------------------  -->
		
		<!-- // ------------ TIPOS - MEDICIONES INICIO -------------------------------------  -->
		<template id="page-TypesMeditions">
			<div>
				<header class="page-header">
					<div class="branding">
						<h1>TIPOS - MEDICIONES</h1>
					</div>
				</header>
				<div class="filters row">
					<div class="form-group col-sm-8">
						<label for="search-element">Filtrar / Buscar</label>
						<input v-model="searchKey" class="form-control" id="search-element" required/>
					</div>
					<div class="form-group col-sm-4 text-right">
						<div class="actions">
							<br>
							<router-link class="btn btn-primary" v-bind:to="{ name: 'TypesMeditions-Add' }">
								<span class="fa fa-plus"></span>
								Nuevo
							</router-link>
						</div>
					</div>
				</div>
				<table class="table table-responsive">
					<thead>
						<tr>
							<th>ID</th>
							<th>Nombre</th>
							<th>Codigo</th>
							<th class="col-sm-2">Actions</th>
						</tr>
					</thead>
					<tbody>
						<tr v-if="posts===null">
							<td colspan="4">Loading...</td>
						</tr>
						<tr v-else v-for="post in filteredposts">
							<td><router-link v-bind:to="{name: 'TypesMeditions-View', params: { type_medition_id: post.id }}">{{ post.id }}</router-link></td>
							<td><router-link v-bind:to="{name: 'TypesMeditions-View', params: { type_medition_id: post.id }}">{{ post.name }}</router-link></td>
							<td><router-link v-bind:to="{name: 'TypesMeditions-View', params: { type_medition_id: post.id }}">{{ post.code }}</router-link></td>
							<td>
							<router-link class="btn btn-warning btn-md" v-bind:to="{name: 'TypesMeditions-Edit', params: { type_medition_id: post.id }}"><i class="fa fa-pencil-square-o"></i> </router-link>
							<router-link class="btn btn-danger btn-md" v-bind:to="{name: 'TypesMeditions-Delete', params: { type_medition_id: post.id }}"><i class="fa fa-trash"></i> </router-link>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
		</template>
		
		<template id="view-TypesMeditions">
			<div>
				<header class="page-header">
					<div class="branding">
						<h1>TIPOS - MEDICIONES - {{ post.name }}</h1>
					</div>
				</header>
				<table class="table  table-responsive">
					<tr>
						<td>ID INTERNO</td>
						<td>{{ post.id }}</td>
					</tr>
					<tr>
						<td>NOMBRE</td>
						<td>{{ post.name }}</td>
					</tr>
					<tr>
						<td>CODIGO</td>
						<td>{{ post.code }}</td>
					</tr>
				</table>
				<br/>
				<span class="fa fa-arrow-left" aria-hidden="true"></span>
				<router-link v-bind:to="{ name: 'TypesMeditions-List' }">Volver a la lista</router-link>
			</div>		  
		</template>
		
		<template id="add-TypesMeditions">
			<div>
				<h2>TIPOS - MEDICIONES - Crear</h2>
				<form v-on:submit="createTypesMedition">
					<div class="form-group">
						<label for="add-content">NOMBRE</label>
						<input class="form-control" type="text" v-model="post.name" />
					</div>
					<div class="form-group">
						<label for="add-content">CODIGO</label>
						<input class="form-control" type="text" v-model="post.code" />
					</div>
					<button type="submit" class="btn btn-primary">Crear</button>
					<router-link class="btn btn-primary" v-bind:to="{ name: 'TypesMeditions-List' }">Regresar</router-link>
				</form>
			</div>
		</template>
		
		<template id="edit-TypesMeditions">
			<div>
				<h2>TIPOS - MEDICIONES - Modificar</h2>
				<form v-on:submit="updateTypesMedition">
					<div class="form-group">
						<label for="edit-content">NOMBRE</label>
						<input class="form-control" id="edit-content" v-model="post.name" />
					</div>
					<div class="form-group">
						<label for="edit-content">CODIGO</label>
						<input class="form-control" id="edit-content" v-model="post.code" />
					</div>
					<button type="submit" class="btn btn-primary">Guardar</button>
					<router-link class="btn btn-primary" v-bind:to="{ name: 'TypesMeditions-List' }">Regresar</router-link>
				</form>
			</div>
		</template>
		
		<template id="delete-TypesMeditions">
			<div>
				<h2>TIPOS - MEDICIONES - Eliminar</h2>
				<form v-on:submit="deleteTypesMedition">
					<p>The action cannot be undone.</p>
					<button type="submit" class="btn btn-danger">Eliminar</button>
					<router-link class="btn btn-primary" v-bind:to="{ name: 'TypesMeditions-List' }">Cancelar</router-link>
				</form>
			</div>
		</template>
		<!-- // ------------ TIPOS - MEDICIONES FIN -------------------------------------  -->
		
		<!-- // ------------ TIPOS - SOCIEDADES INICIO -------------------------------------  -->
		<template id="page-TypesSocietys">
			<div>
				<header class="page-header">
					<div class="branding">
						<h1>TIPOS - SOCIEDADES</h1>
					</div>
				</header>
				<div class="filters row">
					<div class="form-group col-sm-8">
						<label for="search-element">Filtrar / Buscar</label>
						<input v-model="searchKey" class="form-control" id="search-element" required/>
					</div>
					<div class="form-group col-sm-4 text-right">
						<div class="actions">
							<br>
							<router-link class="btn btn-primary" v-bind:to="{ name: 'TypesSocietys-Add' }">
								<span class="fa fa-plus"></span>
								Nuevo
							</router-link>
						</div>
					</div>
				</div>
				<table class="table table-responsive">
					<thead>
						<tr>
							<th>ID</th>
							<th>Nombre</th>
							<th class="col-sm-2">Actions</th>
						</tr>
					</thead>
					<tbody>
						<tr v-if="posts===null">
							<td colspan="4">Loading...</td>
						</tr>
						<tr v-else v-for="post in filteredposts">
							<td><router-link v-bind:to="{name: 'TypesSocietys-View', params: { type_society_id: post.id }}">{{ post.id }}</router-link></td>
							<td><router-link v-bind:to="{name: 'TypesSocietys-View', params: { type_society_id: post.id }}">{{ post.name }}</router-link></td>
							<td>
								<router-link class="btn btn-warning btn-md" v-bind:to="{name: 'TypesSocietys-Edit', params: { type_society_id: post.id }}"><i class="fa fa-pencil-square-o"></i> </router-link>
								<router-link class="btn btn-danger btn-md" v-bind:to="{name: 'TypesSocietys-Delete', params: { type_society_id: post.id }}"><i class="fa fa-trash"></i> </router-link>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
		</template>
		
		<template id="view-TypesSocietys">
			<div>
				<header class="page-header">
					<div class="branding">
						<h1>TIPOS - SOCIEDADES - {{ post.name }}</h1>
					</div>
				</header>
				<table class="table  table-responsive">
					<tr>
						<td>ID INTERNO</td>
						<td>{{ post.id }}</td>
					</tr>
					<tr>
						<td>NOMBRE</td>
						<td>{{ post.name }}</td>
					</tr>
				</table>
				<br/>
				<span class="fa fa-arrow-left" aria-hidden="true"></span>
				<router-link v-bind:to="{ name: 'TypesSocietys-List' }">Volver a la lista</router-link>
			</div>		  
		</template>
		
		<template id="add-TypesSocietys">
			<div>
				<h2>TIPOS - SOCIEDADES - Crear</h2>
				<form v-on:submit="createTypesSociety">
					<div class="form-group">
						<label for="add-content">NOMBRE</label>
						<input class="form-control" type="text" v-model="post.name" />
					</div>
					<button type="submit" class="btn btn-primary">Crear</button>
					<router-link class="btn btn-primary" v-bind:to="{ name: 'TypesSocietys-List' }">Regresar</router-link>
				</form>
			</div>
		</template>
		
		<template id="edit-TypesSocietys">
			<div>
				<h2>TIPOS - SOCIEDADES - Modificar</h2>
				<form v-on:submit="updateTypesSociety">
					<div class="form-group">
						<label for="edit-content">Nombre</label>
						<input class="form-control" id="edit-content" v-model="post.name" />
					</div>
					<button type="submit" class="btn btn-primary">Guardar</button>
					<router-link class="btn btn-primary" v-bind:to="{ name: 'TypesSocietys-List' }">Regresar</router-link>
				</form>
			</div>
		</template>
		
		<template id="delete-TypesSocietys">
			<div>
				<h2>TIPOS - SOCIEDADES - Eliminar</h2>
				<form v-on:submit="deleteTypesSociety">
					<p>The action cannot be undone.</p>
					<button type="submit" class="btn btn-danger">Eliminar</button>
					<router-link class="btn btn-primary" v-bind:to="{ name: 'TypesSocietys-List' }">Cancelar</router-link>
				</form>
			</div>
		</template>
		<!-- // ------------ TIPOS - SOCIEDADES FIN -------------------------------------  -->
		
		<!-- // ------------ TIPOS - VEHICULOS INICIO -------------------------------------  -->
		<template id="page-TypesVehicles">
			<div>
				<header class="page-header">
					<div class="branding">
						<h1>TIPOS - VEHICULOS</h1>
					</div>
				</header>
				<div class="filters row">
					<div class="form-group col-sm-8">
						<label for="search-element">Filtrar / Buscar</label>
						<input v-model="searchKey" class="form-control" id="search-element" required/>
					</div>
					<div class="form-group col-sm-4 text-right">
						<div class="actions">
							<br>
							<router-link class="btn btn-primary" v-bind:to="{ name: 'TypesVehicles-Add' }">
								<span class="fa fa-plus"></span>
								Nuevo
							</router-link>
						</div>
					</div>
				</div>
				<table class="table table-responsive">
					<thead>
						<tr>
							<th>ID</th>
							<th>Nombre</th>
							<th class="col-sm-2">Actions</th>
						</tr>
					</thead>
					<tbody>
						<tr v-if="posts===null">
							<td colspan="4">Loading...</td>
						</tr>
						<tr v-else v-for="post in filteredposts">
							<td><router-link v-bind:to="{name: 'TypesVehicles-View', params: { type_vehicle_id: post.id }}">{{ post.id }}</router-link></td>
							<td><router-link v-bind:to="{name: 'TypesVehicles-View', params: { type_vehicle_id: post.id }}">{{ post.name }}</router-link></td>
							<td>
								<router-link class="btn btn-warning btn-md" v-bind:to="{name: 'TypesVehicles-Edit', params: { type_vehicle_id: post.id }}"><i class="fa fa-pencil-square-o"></i> </router-link>
								<router-link class="btn btn-danger btn-md" v-bind:to="{name: 'TypesVehicles-Delete', params: { type_vehicle_id: post.id }}"><i class="fa fa-trash"></i> </router-link>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
		</template>
		
		<template id="view-TypesVehicles">
			<div>
				<header class="page-header">
					<div class="branding">
						<h1>TIPOS - VEHICULOS - {{ post.name }}</h1>
					</div>
				</header>
				<table class="table  table-responsive">
					<tr>
						<td>ID INTERNO</td>
						<td>{{ post.id }}</td>
					</tr>
					<tr>
						<td>NOMBRE</td>
						<td>{{ post.name }}</td>
					</tr>
				</table>
				<br/>
				<span class="fa fa-arrow-left" aria-hidden="true"></span>
				<router-link v-bind:to="{ name: 'TypesVehicles-List' }">Volver a la lista</router-link>
			</div>		  
		</template>
		
		<template id="add-TypesVehicles">
			<div>
				<h2>TIPOS - VEHICULOS - Crear</h2>
				<form v-on:submit="createTypesVehicle">
					<div class="form-group">
						<label for="add-content">NOMBRE</label>
						<input class="form-control" type="text" v-model="post.name" />
					</div>
					<button type="submit" class="btn btn-primary">Crear</button>
					<router-link class="btn btn-primary" v-bind:to="{ name: 'TypesVehicles-List' }">Regresar</router-link>
				</form>
			</div>
		</template>
		
		<template id="edit-TypesVehicles">
			<div>
				<h2>TIPOS - VEHICULOS - Modificar</h2>
				<form v-on:submit="updateTypesVehicle">
					<div class="form-group">
						<label for="edit-content">Nombre</label>
						<input class="form-control" id="edit-content" v-model="post.name" />
					</div>
					<button type="submit" class="btn btn-primary">Guardar</button>
					<router-link class="btn btn-primary" v-bind:to="{ name: 'TypesVehicles-List' }">Regresar</router-link>
				</form>
			</div>
		</template>
		
		<template id="delete-TypesVehicles">
			<div>
				<h2>TIPOS - VEHICULOS - Eliminar</h2>
				<form v-on:submit="deleteTypesVehicle">
					<p>The action cannot be undone.</p>
					<button type="submit" class="btn btn-danger">Eliminar</button>
					<router-link class="btn btn-primary" v-bind:to="{ name: 'TypesVehicles-List' }">Cancelar</router-link>
				</form>
			</div>
		</template>
		<!-- // ------------ TIPOS - VEHICULOS FIN -------------------------------------  -->
		
		<!-- // ------------ TIPOS - CARGOS INICIO -------------------------------------  -->
		<template id="page-TypesCharges">
			<div>
				<header class="page-header">
					<div class="branding">
						<h1>TIPOS - CARGOS</h1>
					</div>
				</header>
				<div class="filters row">
					<div class="form-group col-sm-8">
						<label for="search-element">Filtrar / Buscar</label>
						<input v-model="searchKey" class="form-control" id="search-element" required/>
					</div>
					<div class="form-group col-sm-4 text-right">
						<div class="actions">
							<br>
							<router-link class="btn btn-primary" v-bind:to="{ name: 'TypesCharges-Add' }">
								<span class="fa fa-plus"></span>
								Nuevo
							</router-link>
						</div>
					</div>
				</div>
				<table class="table table-responsive">
					<thead>
						<tr>
							<th>ID</th>
							<th>Nombre</th>
							<th class="col-sm-2">Actions</th>
						</tr>
					</thead>
					<tbody>
						<tr v-if="posts===null">
							<td colspan="4">Loading...</td>
						</tr>
						<tr v-else v-for="post in filteredposts">
							<td><router-link v-bind:to="{name: 'TypesCharges-View', params: { type_charge_id: post.id }}">{{ post.id }}</router-link></td>
							<td><router-link v-bind:to="{name: 'TypesCharges-View', params: { type_charge_id: post.id }}">{{ post.name }}</router-link></td>
							<td>
							<router-link class="btn btn-warning btn-md" v-bind:to="{name: 'TypesCharges-Edit', params: { type_charge_id: post.id }}"><i class="fa fa-pencil-square-o"></i> </router-link>
							<router-link class="btn btn-danger btn-md" v-bind:to="{name: 'TypesCharges-Delete', params: { type_charge_id: post.id }}"><i class="fa fa-trash"></i> </router-link>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
		</template>
		
		<template id="view-TypesCharges">
			<div>
				<header class="page-header">
					<div class="branding">
						<h1>TIPOS - CARGOS - {{ post.name }}</h1>
					</div>
				</header>
				<table class="table  table-responsive">
					<tr>
						<td>ID INTERNO</td>
						<td>{{ post.id }}</td>
					</tr>
					<tr>
						<td>NOMBRE</td>
						<td>{{ post.name }}</td>
					</tr>
				</table>
				<br/>
				<span class="fa fa-arrow-left" aria-hidden="true"></span>
				<router-link v-bind:to="{ name: 'TypesCharges-List' }">Volver a la lista</router-link>
			</div>		  
		</template>
		
		<template id="add-TypesCharges">
			<div>
				<h2>TIPOS - CARGOS - Crear</h2>
				<form v-on:submit="createTypesCharge">
					<div class="form-group">
						<label for="add-content">NOMBRE</label>
						<input class="form-control" type="text" v-model="post.name" />
					</div>
					<button type="submit" class="btn btn-primary">Crear</button>
					<router-link class="btn btn-primary" v-bind:to="{ name: 'TypesCharges-List' }">Regresar</router-link>
				</form>
			</div>
		</template>
		
		<template id="edit-TypesCharges">
			<div>
				<h2>TIPOS - CARGOS - Modificar</h2>
				<form v-on:submit="updateTypesCharge">
					<div class="form-group">
						<label for="edit-content">Nombre</label>
						<input class="form-control" id="edit-content" v-model="post.name" />
					</div>
					<button type="submit" class="btn btn-primary">Guardar</button>
					<router-link class="btn btn-primary" v-bind:to="{ name: 'TypesCharges-List' }">Regresar</router-link>
				</form>
			</div>
		</template>
		
		<template id="delete-TypesCharges">
			<div>
				<h2>TIPOS - CARGOS - Eliminar</h2>
				<form v-on:submit="deleteTypesCharge">
					<p>The action cannot be undone.</p>
					<button type="submit" class="btn btn-danger">Eliminar</button>
					<router-link class="btn btn-primary" v-bind:to="{ name: 'TypesCharges-List' }">Cancelar</router-link>
				</form>
			</div>
		</template>
		<!-- // ------------ TIPOS - CARGOS FIN -------------------------------------  -->
		
		<!-- // ------------ ACCIONES DE DESEMPEÑO INICIO -------------------------------------  -->
		<template id="page-Actions_Performance_Employees">
			<div>
				<header class="page-header">
					<div class="branding">
						<h1>ACCIONES DE DESEMPEÑO</h1>
					</div>
				</header>
				<div class="filters row">
					<div class="form-group col-sm-8">
						<label for="search-element">Filtrar / Buscar</label>
						<input v-model="searchKey" class="form-control" id="search-element" required/>
					</div>
					<div class="form-group col-sm-4 text-right">
						<div class="actions">
							<br>
							<router-link class="btn btn-primary" v-bind:to="{ name: 'Actions_Performance_Employees-Add' }">
								<span class="fa fa-plus"></span>
								Nuevo
							</router-link>
						</div>
					</div>
				</div>
				<table class="table table-responsive">
					<thead>
						<tr>
							<th>ID</th>
							<th>Nombre</th>
							<th class="col-sm-2">Actions</th>
						</tr>
					</thead>
					<tbody>
						<tr v-if="posts===null">
							<td colspan="4">Loading...</td>
						</tr>
						<tr v-else v-for="post in filteredposts">
							<td><router-link v-bind:to="{name: 'Actions_Performance_Employees-View', params: { action_performance_employee_id: post.id }}">{{ post.id }}</router-link></td>
							<td><router-link v-bind:to="{name: 'Actions_Performance_Employees-View', params: { action_performance_employee_id: post.id }}">{{ post.name }}</router-link></td>
							<td>
							<router-link class="btn btn-warning btn-md" v-bind:to="{name: 'Actions_Performance_Employees-Edit', params: { action_performance_employee_id: post.id }}"><i class="fa fa-pencil-square-o"></i> </router-link>
							<router-link class="btn btn-danger btn-md" v-bind:to="{name: 'Actions_Performance_Employees-Delete', params: { action_performance_employee_id: post.id }}"><i class="fa fa-trash"></i> </router-link>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
		</template>
		
		<template id="view-Actions_Performance_Employees">
			<div>
				<header class="page-header">
					<div class="branding">
						<h1>ACCIONES DE DESEMPEÑO - {{ post.name }}</h1>
					</div>
				</header>
				<table class="table  table-responsive">
					<tr>
						<td>ID INTERNO</td>
						<td>{{ post.id }}</td>
					</tr>
					<tr>
						<td>NOMBRE</td>
						<td>{{ post.name }}</td>
					</tr>
				</table>
				<br/>
				<span class="fa fa-arrow-left" aria-hidden="true"></span>
				<router-link v-bind:to="{ name: 'Actions_Performance_Employees-List' }">Volver a la lista</router-link>
			</div>		  
		</template>
		
		<template id="add-Actions_Performance_Employees">
			<div>
				<h2>ACCIONES DE DESEMPEÑO - Crear</h2>
				<form v-on:submit="createAction_Performance_Employee">
					<div class="form-group">
						<label for="add-content">NOMBRE</label>
						<input class="form-control" type="text" v-model="post.name" />
					</div>
					<button type="submit" class="btn btn-primary">Crear</button>
					<router-link class="btn btn-primary" v-bind:to="{ name: 'Actions_Performance_Employees-List' }">Regresar</router-link>
				</form>
			</div>
		</template>
		
		<template id="edit-Actions_Performance_Employees">
			<div>
				<h2>ACCIONES DE DESEMPEÑO - Modificar</h2>
				<form v-on:submit="updateAction_Performance_Employee">
					<div class="form-group">
						<label for="edit-content">Nombre</label>
						<input class="form-control" id="edit-content" v-model="post.name" />
					</div>
					<button type="submit" class="btn btn-primary">Guardar</button>
					<router-link class="btn btn-primary" v-bind:to="{ name: 'Actions_Performance_Employees-List' }">Regresar</router-link>
				</form>
			</div>
		</template>
		
		<template id="delete-Actions_Performance_Employees">
			<div>
				<h2>ACCIONES DE DESEMPEÑO - Eliminar</h2>
				<form v-on:submit="deleteAction_Performance_Employee">
					<p>The action cannot be undone.</p>
					<button type="submit" class="btn btn-danger">Eliminar</button>
					<router-link class="btn btn-primary" v-bind:to="{ name: 'Actions_Performance_Employees-List' }">Cancelar</router-link>
				</form>
			</div>
		</template>
		<!-- // ------------ ACCIONES DE DESEMPEÑO FIN -------------------------------------  -->
		
		<!-- // ------------ CONCEPTOS - INICIO -------------------------------------  -->
		<template id="page-Attributes">
			<div>
				<header class="page-header">
					<div class="branding">
						<h1>CONCEPTOS</h1>
					</div>
				</header>
				<div class="filters row">
					<div class="form-group col-sm-8">
						<label for="search-element">Filtrar / Buscar</label>
						<input v-model="searchKey" class="form-control" id="search-element" required/>
					</div>
					<div class="form-group col-sm-4 text-right">
						<div class="actions">
							<br>
							<router-link class="btn btn-primary" v-bind:to="{ name: 'Attributes-Add' }">
								<span class="fa fa-plus"></span>
								Nuevo
							</router-link>
						</div>
					</div>
				</div>
				<table class="table table-responsive">
					<thead>
						<tr>
							<th>ID</th>
							<th>Nombre</th>
							<th>Descvripcion</th>
							<th>Valor</th>
							<th>Tipo de Medicion</th>
							<th class="col-sm-2">Actions</th>
						</tr>
					</thead>
					<tbody>
						<tr v-if="posts===null">
							<td colspan="4">Loading...</td>
						</tr>
						<tr v-else v-for="post in filteredposts">
							<td><router-link v-bind:to="{name: 'Attributes-View', params: { attribute_id: post.id }}">{{ post.id }}</router-link></td>
							<td><router-link v-bind:to="{name: 'Attributes-View', params: { attribute_id: post.id }}">{{ post.name }}</router-link></td>
							<td><router-link v-bind:to="{name: 'Attributes-View', params: { attribute_id: post.id }}">{{ post.description }}</router-link></td>
							<td><router-link v-bind:to="{name: 'Attributes-View', params: { attribute_id: post.id }}">{{ post.price }}</router-link></td>
							<td><router-link v-bind:to="{name: 'Attributes-View', params: { attribute_id: post.id }}">{{ post.type_medition.code }}</router-link></td>
							<td>
							<router-link class="btn btn-warning btn-md" v-bind:to="{name: 'Attributes-Edit', params: { attribute_id: post.id }}"><i class="fa fa-pencil-square-o"></i> </router-link>
							<router-link class="btn btn-danger btn-md" v-bind:to="{name: 'Attributes-Delete', params: { attribute_id: post.id }}"><i class="fa fa-trash"></i> </router-link>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
		</template>
		
		<template id="view-Attributes">
			<div>
				<header class="page-header">
					<div class="branding">
						<h1>CONCEPTOS - {{ post.name }}</h1>
					</div>
				</header>
				<table class="table  table-responsive">
					<tr>
						<td>ID INTERNO</td>
						<td>{{ post.id }}</td>
					</tr>
					<tr>
						<td>NOMBRE</td>
						<td>{{ post.name }}</td>
					</tr>
					<tr>
						<td>DESCRIPCION</td>
						<td>{{ post.description }}</td>
					</tr>
					<tr>
						<td>TIPO DE MEDICION</td>
						<td>
							<table class="table  table-responsive">
								<tr>
									<td>ID INTERNO</td>
									<td>{{ post.type_medition.id }}</td>
								</tr>
								<tr>
									<td>NOMBRE</td>
									<td>{{ post.type_medition.name }}</td>
								</tr>
								<tr>
									<td>CODIGO</td>
									<td>{{ post.type_medition.code }}</td>
								</tr>
							</table>
						</td>
					</tr>
					<tr>
						<td>PRECIO</td>
						<td>{{ post.price }}</td>
					</tr>
				</table>
				<br/>
				<span class="fa fa-arrow-left" aria-hidden="true"></span>
				<router-link v-bind:to="{ name: 'Attributes-List' }">Volver a la lista</router-link>
			</div>		  
		</template>
		
		<template id="add-Attributes">
			<div>
				<h2>CONCEPTOS - Crear</h2>
				<form v-on:submit="createAttribute">
					<div class="form-group">
						<label for="add-content">NOMBRE</label>
						<input class="form-control" type="text" v-model="post.name" />
					</div>
					<div class="form-group">
						<label for="add-content">DESCRIPCION</label>
						<input class="form-control" type="text" v-model="post.description" />
					</div>
					<div class="form-group">
						<label for="add-content">TIPO DE MEDICION</label>
						<select class="form-control" v-model="post.type_medition">
							<option v-for="item in selectOptions.types_meditions" :value="item.id">{{ item.name }}</option>
						</select>
					</div>
					<div class="form-group">
						<label for="add-content">PRECIO</label>
						<input class="form-control" type="number" v-model="post.price" step="0.01" />
					</div>
					<button type="submit" class="btn btn-primary">Crear</button>
					<router-link class="btn btn-primary" v-bind:to="{ name: 'Attributes-List' }">Regresar</router-link>
				</form>
			</div>
		</template>
		
		<template id="edit-Attributes">
			<div>
				<h2>CONCEPTOS - Modificar</h2>
				<form v-on:submit="updateAttribute">
					<div class="form-group">
						<label for="edit-content">Nombre</label>
						<input class="form-control" id="edit-content" v-model="post.name" />
					</div>
					<div class="form-group">
						<label for="add-content">DESCRIPCION</label>
						<input class="form-control" type="text" v-model="post.description" />
					</div>
					<div class="form-group">
						<label for="add-content">TIPO DE MEDICION</label>
						<select class="form-control" v-model="post.type_medition">
							<option v-for="item in selectOptions.types_meditions" :value="item.id">{{ item.name }}</option>
						</select>
					</div>
					<div class="form-group">
						<label for="add-content">PRECIO</label>
						<input class="form-control" type="number" v-model="post.price" step="0.01" />
					</div>
					<button type="submit" class="btn btn-primary">Guardar</button>
					<router-link class="btn btn-primary" v-bind:to="{ name: 'Attributes-List' }">Regresar</router-link>
				</form>
			</div>
		</template>
		
		<template id="delete-Attributes">
			<div>
				<h2>CONCEPTOS - Eliminar</h2>
				<form v-on:submit="deleteAttribute">
					<p>The action cannot be undone.</p>
					<button type="submit" class="btn btn-danger">Eliminar</button>
					<router-link class="btn btn-primary" v-bind:to="{ name: 'Attributes-List' }">Cancelar</router-link>
				</form>
			</div>
		</template>
		<!-- // ------------ CONCEPTOS - FIN -------------------------------------  -->
		
		<!-- // ------------ SERVICIOS - INICIO -------------------------------------  -->
		<template id="page-Services">
			<div>
				<header class="page-header">
					<div class="branding">
						<h1>SERVICIOS</h1>
					</div>
				</header>
				<div class="filters row">
					<div class="form-group col-sm-8">
						<label for="search-element">Filtrar / Buscar</label>
						<input v-model="searchKey" class="form-control" id="search-element" required/>
					</div>
					<div class="form-group col-sm-4 text-right">
						<div class="actions">
							<br>
							<router-link class="btn btn-primary" v-bind:to="{ name: 'Services-Add' }">
								<span class="fa fa-plus"></span>
								Nuevo
							</router-link>
						</div>
					</div>
				</div>
				<table class="table table-responsive">
					<thead>
						<tr>
							<th>ID</th>
							<th>Nombre</th>
							<th>Precio</th>
							<th>Medicion</th>
							<th class="col-sm-2">Actions</th>
						</tr>
					</thead>
					<tbody>
						<tr v-if="posts===null">
							<td colspan="4">Loading...</td>
						</tr>
						<tr v-else v-for="post in filteredposts">
							<td><router-link v-bind:to="{name: 'Services-View', params: { service_id: post.id }}">{{ post.id }}</router-link></td>
							<td><router-link v-bind:to="{name: 'Services-View', params: { service_id: post.id }}">{{ post.name }}</router-link></td>
							<td><router-link v-bind:to="{name: 'Services-View', params: { service_id: post.id }}">{{ post.price }}</router-link></td>
							<td><router-link v-bind:to="{name: 'Services-View', params: { service_id: post.id }}">{{ post.type_medition.name }}</router-link></td>
							<td>
								<router-link class="btn btn-warning btn-md" v-bind:to="{name: 'Services-Edit', params: { service_id: post.id }}"><i class="fa fa-pencil-square-o"></i> </router-link>
								<router-link class="btn btn-danger btn-md" v-bind:to="{name: 'Services-Delete', params: { service_id: post.id }}"><i class="fa fa-trash"></i> </router-link>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
		</template>
		
		<template id="view-Services">
			<div>
				<header class="page-header">
					<div class="branding">
						<h1>SERVICIOS - {{ post.name }}</h1>
					</div>
				</header>
				<table class="table  table-responsive">
					<tr>
						<td>ID INTERNO</td>
						<td>{{ post.id }}</td>
					</tr>
					<tr>
						<td>NOMBRE</td>
						<td>{{ post.name }}</td>
					</tr>
					<tr>
						<td>PRECIO</td>
						<td>{{ post.price }}</td>
					</tr>
					<tr>
						<td>DESCRIPCION</td>
						<td>{{ post.description }}</td>
					</tr>
					<tr>
						<td>TIPO DE MEDICION</td>
						<td>
							<table class="table  table-responsive">
								<tr>
									<td>ID INTERNO</td>
									<td>{{ post.type_medition.id }}</td>
								</tr>
								<tr>
									<td>NOMBRE</td>
									<td>{{ post.type_medition.name }}</td>
								</tr>
								<tr>
									<td>CODIGO</td>
									<td>{{ post.type_medition.code }}</td>
								</tr>
							</table>
						</td>
					</tr>
				</table>
				<br/>
				<span class="fa fa-arrow-left" aria-hidden="true"></span>
				<router-link v-bind:to="{ name: 'Services-List' }">Volver a la lista</router-link>
			</div>		  
		</template>
		
		<template id="add-Services">
			<div>
				<h2>SERVICIOS - Crear</h2>
				<form v-on:submit="createService">
					<div class="form-group">
						<label for="add-content">NOMBRE</label>
						<input class="form-control" type="text" v-model="post.name" />
					</div>
					<div class="form-group">
						<label for="add-content">PRECIO</label>
						<input class="form-control" type="text" v-model="post.price" />
					</div>
					<div class="form-group">
						<label for="add-content">DESCRIPCION</label>
						<textarea class="form-control" type="text" v-model="post.description"></textarea>
					</div>
					<div class="form-group">
						<label for="add-content">MEDICION</label>
						<select class="form-control" v-model="post.type_medition">
							<option v-for="item in selectOptions.types_meditions" :value="item.id">{{ item.name }} - {{ item.code }}</option>
						</select>
					</div>
					<button type="submit" class="btn btn-primary">Crear</button>
					<router-link class="btn btn-primary" v-bind:to="{ name: 'Services-List' }">Regresar</router-link>
				</form>
			</div>
		</template>
		
		<template id="edit-Services">
			<div>
				<h2>SERVICIOS - Modificar</h2>
				<form v-on:submit="updateService">
					<div class="form-group">
						<label for="add-content">NOMBRE</label>
						<input class="form-control" type="text" v-model="post.name" />
					</div>
					<div class="form-group">
						<label for="add-content">PRECIO</label>
						<input class="form-control" type="text" v-model="post.price" />
					</div>
					<div class="form-group">
						<label for="add-content">DESCRIPCION</label>
						<textarea class="form-control" type="text" v-model="post.description"></textarea>
					</div>
					<div class="form-group">
						<label for="add-content">MEDICION</label>
						<select class="form-control" v-model="post.type_medition">
							<option v-for="item in selectOptions.types_meditions" :value="item.id">{{ item.name }} - {{ item.code }}</option>
						</select>
					</div>
					<button type="submit" class="btn btn-primary">Crear</button>
					<router-link class="btn btn-primary" v-bind:to="{ name: 'Services-List' }">Regresar</router-link>
				</form>
			</div>
		</template>
		
		<template id="delete-Services">
			<div>
				<h2>SERVICIOS - Eliminar</h2>
				<form v-on:submit="deleteService">
					<p>The action cannot be undone.</p>
					<button type="submit" class="btn btn-danger">Eliminar</button>
					<router-link class="btn btn-primary" v-bind:to="{ name: 'Services-List' }">Cancelar</router-link>
				</form>
			</div>
		</template>
		<!-- // ------------ SERVICIOS - FIN -------------------------------------  -->
		
		<!-- // ------------ VEHICULOS - INICIO -------------------------------------  -->
		<template id="page-Vehicles">
			<div>
				<header class="page-header">
					<div class="branding">
						<h1>VEHICULOS</h1>
					</div>
				</header>
				
				<div class="filters row">
					<div class="form-group col-sm-8">
						<label for="search-element">Filtrar / Buscar</label>
						<input v-model="searchKey" class="form-control" id="search-element" required/>
					</div>
					<div class="form-group col-sm-4 text-right">
						<div class="actions">
							<br>
							<router-link class="btn btn-primary" v-bind:to="{ name: 'Vehicles-Add' }">
								<span class="fa fa-plus"></span>
								Nuevo
							</router-link>
						</div>
					</div>
				</div>
				<table class="table table-responsive">
					<thead>
						<tr>
							<th>ID</th>
							<th>Placa</th>
							<th class="col-sm-2">Actions</th>
						</tr>
					</thead>
					<tbody>
						<tr v-if="posts===null">
							<td colspan="4">Loading...</td>
						</tr>
						<tr v-else v-for="post in filteredposts">
							<td><router-link v-bind:to="{name: 'Vehicles-View', params: { vehicle_id: post.id }}">{{ post.id }}</router-link></td>
							<td><router-link v-bind:to="{name: 'Vehicles-View', params: { vehicle_id: post.id }}">{{ post.license_plate }}</router-link></td>
							<td><router-link v-bind:to="{name: 'Vehicles-View', params: { vehicle_id: post.id }}">{{ post.type_vehicle.name }}</router-link></td>
							<td>
							<router-link class="btn btn-warning btn-md" v-bind:to="{name: 'Vehicles-Edit', params: { vehicle_id: post.id }}"><i class="fa fa-pencil-square-o"></i> </router-link>
							<router-link class="btn btn-danger btn-md" v-bind:to="{name: 'Vehicles-Delete', params: { vehicle_id: post.id }}"><i class="fa fa-trash"></i> </router-link>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
		</template>
		
		<template id="view-Vehicles">
			<div>
				<header class="page-header">
					<div class="branding">
						<h1>VEHICULOS - {{ post.license_plate }}</h1>
					</div>
				</header>
				
				<div id="exTab1">
					<ul  class="nav nav-pills">
						<li class="active"><a  href="#1a" data-toggle="tab">Infomacion Basica</a></li>
						<li><a href="#2a" data-toggle="tab">Tripulantes</a></li>
						<li><a href="#3a" data-toggle="tab">Galeria</a></li>
					</ul>
				</div>
				<div class="tab-content clearfix">
					<div class="tab-pane active" id="1a">
						<table class="table  table-responsive">
							<tr>
								<td>ID INTERNO</td>
								<td>{{ post.id }}</td>
							</tr>
							<tr>
								<td>PLACA</td>
								<td>{{ post.license_plate }}</td>
							</tr>
							<tr>
								<td>MARCA</td>
								<td>{{ post.brand }}</td>
							</tr>
							<tr>
								<td>TIPO DE VEHICULO</td>
								<td>
									<table class="table  table-responsive">
										<tr>
											<td>ID</td>
											<td>{{ post.type_vehicle.id }}</td>
										</tr>
										<tr>
											<td>NOMBRE</td>
											<td>{{ post.type_vehicle.name }}</td>
										</tr>
									</table>
								</td>
							</tr>
							<tr>
								<td>CAPACIDAD DE PASAJEROS</td>
								<td>{{ post.passangers_capacity }}</td>
							</tr>
							<tr>
								<td>TIPO DE COMBUSTIBLE</td>
								<td>
									<table class="table  table-responsive">
										<tr>
											<td>ID</td>
											<td>{{ post.type_fuel.id }}</td>
										</tr>
										<tr>
											<td>NOMBRE</td>
											<td>{{ post.type_fuel.name }}</td>
										</tr>
									</table>
								</td>
							</tr>
							<tr>
								<td>CILINDRAJE</td>
								<td>{{ post.cilindraje }}</td>
							</tr>
							<tr>
								<td>TITULAR</td>
								<td>
									<table class="table  table-responsive">
										<tr>
											<td>NOMBRE COMPLETO</td>
											<td>{{ post.holder.first_name }} {{ post.holder.second_name }} {{ post.holder.surname }} {{ post.holder.second_surname }}</td>
										</tr>
										<tr>
											<td>TELEFONO FIJO</td>
											<td>{{ post.holder.phone }}</td>
										</tr>
										<tr>
											<td>TELEFONO MOVIL</td>
											<td>{{ post.holder.phone_mobile }}</td>
										</tr>
										<tr>
											<td>CORREO ELECTRONICO</td>
											<td>{{ post.holder.mail }}</td>
										</tr>
									</table>
								</td>
							</tr>
							<tr>
								<td>PROPIETARIO</td>
								<td>
									<table class="table  table-responsive">
										<tr>
											<td>NOMBRE COMPLETO</td>
											<td>{{ post.propietary.first_name }} {{ post.propietary.second_name }} {{ post.propietary.surname }} {{ post.propietary.second_surname }}</td>
										</tr>
										<tr>
											<td>TELEFONO FIJO</td>
											<td>{{ post.propietary.phone }}</td>
										</tr>
										<tr>
											<td>TELEFONO MOVIL</td>
											<td>{{ post.propietary.phone_mobile }}</td>
										</tr>
										<tr>
											<td>CORREO ELECTRONICO</td>
											<td>{{ post.propietary.mail }}</td>
										</tr>
									</table>
								</td>
							</tr>
							<tr>
								<td># TARJETA DE PROPIEDAD</td>
								<td>{{ post.card_propiety_number }}</td>
							</tr>
							<tr>
								<td># CHASIS</td>
								<td>{{ post.chassis_number }}</td>
							</tr>
							<tr>
								<td># SOAT</td>
								<td>{{ post.soat_number }}</td>
							</tr>
							<tr>
								<td># POLIZA DE TERCEROS</td>
								<td>{{ post.third_party_number }}</td>
							</tr>
							<tr>
								<td>FECHA VENCIMIENTO POLIZA SOAT</td>
								<td>{{ post.soat_date_expiration }}</td>
							</tr>
							<tr>
								<td>FECHA VENCIMIENTO POLIZA TERCEROS</td>
								<td>{{ post.third_party_date_expiration }}</td>
							</tr>
							<tr>
								<td>CAPACIDAD CON REALCE</td>
								<td>{{ post.capacity_with_enhancement }}</td>
							</tr>
							<tr>
								<td>CAPACIDAD SIN REALCE</td>
								<td>{{ post.capacity_without_enhancement }}</td>
							</tr>
							<tr>
								<td>PESO BASE</td>
								<td>{{ post.base_weight }}</td>
							</tr>
							<tr>
								<td>COSTO DE RENTA</td>
								<td>{{ post.rent_cost }}</td>
							</tr>
							<tr>
								<td>ESTADO</td>
								<td>
									<table class="table  table-responsive">
										<tr>
											<td>ID</td>
											<td>{{ post.status.id }}</td>
										</tr>
										<tr>
											<td>NOMBRE</td>
											<td>{{ post.status.name }}</td>
										</tr>
									</table>
								</td>
							</tr>
						</table>
					</div>
					<div class="tab-pane" id="2a">
						<div class="row">
							<h3>Tripulantes</h3>
							<hr>
							<div class="col-md-12">
								<table class="table  table-responsive">
									<thead>
										<tr>
											<td>ID</td>
											<td>Cargo</td>
											<td>Empleado</td>
										</tr>
									</thead>
									<tbody>
										<tr v-for="item in crew">
											<td>{{ item.charge.id }}</td>
											<td>{{ item.charge.name }}</td>
											<td>{{ item.employee.first_name }} {{ item.employee.second_name }} {{ item.employee.surname }} {{ item.employee.second_surname }}</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>
					<div class="tab-pane" id="3a">
						<h3>Galeria</h3>
						<hr>
						<div class="col-md-12" style="display:nones;">
							<div class="card card-default">
								<div class="card-body">
									<div class="row">
										<div class="col-lg-3" v-for="img in galery_vehicles" style="min-height: 350px;height:350px;">
											<a class="btn btn-info btn-md" target="_new" v-bind:href="'/api/pictures/' + img.picture"><i class="fa fa-eye"></i> Ver</a>
											<hr>
											<img width="100%" class="image image-responsive" v-bind:src="'/api/pictures/' + img.picture" />
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				
				<br/>
				<span class="fa fa-arrow-left" aria-hidden="true"></span>
				<router-link v-bind:to="{ name: 'Vehicles-List' }">Volver a la lista</router-link>
			</div>		  
		</template>
		
		<template id="add-Vehicles">
			<div>
				<h2>VEHICULOS - Crear</h2>
				<form v-on:submit="createVehicle">
					<div class="form-group">
						<label for="add-content">PLACA</label>
						<input class="form-control" type="text" v-model="post.license_plate" />
					</div>
					<div class="form-group">
						<label for="add-content">MARCA</label>
						<input class="form-control" type="text" v-model="post.brand" />
					</div>
					<div class="form-group">
						<label for="add-content">MODELO</label>
						<input class="form-control" type="text" v-model="post.model" />
					</div>
					<div class="form-group">
						<label for="add-content">TIPO DE VEHICULO</label>
						<select class="form-control" v-model="post.type_vehicle">
							<option v-for="item in selectOptions.types_vehicles" :value="item.id">{{ item.name }}</option>
						</select>
					</div>
					<div class="form-group">
						<label for="add-content">CAPACIDAD DE PASAJEROS</label>
						<input class="form-control" type="text" v-model="post.passangers_capacity" />
					</div>
					<div class="form-group">
						<label for="add-content">TIPO DE COMBUSTIBLE</label>
						<select class="form-control" v-model="post.type_fuel">
							<option v-for="item in selectOptions.types_fuels" :value="item.id">{{ item.name }}</option>
						</select>
					</div>
					<div class="form-group">
						<label for="add-content">CILINDRAJE</label>
						<input class="form-control" type="text" v-model="post.cilindraje" />
					</div>
					<div class="form-group">
						<label for="add-content">TITULAR</label>
						<select class="form-control" v-model="post.holder">
							<option v-for="item in selectOptions.contacts" :value="item.id">{{ item.identification_number }} - {{ item.first_name }} {{ item.second_name }} {{ item.surname }} {{ item.second_surname }}</option>
						</select>
					</div>
					<div class="form-group">
						<label for="add-content">PROPIETARIO</label>
						<select class="form-control" v-model="post.propietary">
							<option v-for="item in selectOptions.contacts" :value="item.id">{{ item.identification_number }} - {{ item.first_name }} {{ item.second_name }} {{ item.surname }} {{ item.second_surname }}</option>
						</select>
					</div>
					<div class="form-group">
						<label for="add-content"># TARJETA DE PROPIEDAD</label>
						<input class="form-control" type="text" v-model="post.card_propiety_number" />
					</div>
					<div class="form-group">
						<label for="add-content"># TARJETA DE CHASIS</label>
						<input class="form-control" type="text" v-model="post.chassis_number" />
					</div>
					<div class="form-group">
						<label for="add-content"># SOAT</label>
						<input class="form-control" type="text" v-model="post.soat_number" />
					</div>
					<div class="form-group">
						<label for="add-content"># POLIZA DE TERCEROS</label>
						<input class="form-control" type="text" v-model="post.third_party_number" />
					</div>
					<div class="form-group">
						<label for="add-content">FECHA DE VENCIMIENTO SOAT</label>
						<input class="form-control" type="date" v-model="post.soat_date_expiration" />
					</div>
					<div class="form-group">
						<label for="add-content">FECHA DE VENCIMIENTO POLIZA DE TERCEROS</label>
						<input class="form-control" type="date" v-model="post.third_party_date_expiration" />
					</div>
					<div class="form-group">
						<label for="add-content">CAPACIDAD CON REALCE</label>
						<input class="form-control" type="text" v-model="post.capacity_with_enhancement" />
					</div>
					<div class="form-group">
						<label for="add-content">CAPACIDAD SIN REALCE</label>
						<input class="form-control" type="text" v-model="post.capacity_without_enhancement" />
					</div>
					<div class="form-group">
						<label for="add-content">PESO BASE</label>
						<input class="form-control" type="text" v-model="post.base_weight" />
					</div>
					<div class="form-group">
						<label for="add-content">COSTO DE RENTA</label>
						<input class="form-control" type="text" v-model="post.rent_cost" />
					</div>
					<div class="form-group">
						<label for="add-content">ESTADO</label>
						<select class="form-control" v-model="post.status">
							<option v-for="item in selectOptions.status_vehicles" :value="item.id">{{ item.name }}</option>
						</select>
					</div>
					<button type="submit" class="btn btn-primary">Crear</button>
					<router-link class="btn btn-primary" v-bind:to="{ name: 'Vehicles-List' }">Regresar</router-link>
				</form>
			</div>
		</template>
		
		<template id="edit-Vehicles">
			<div>
				<h2>VEHICULOS - Modificar</h2>
				<div id="exTab1">
					<ul  class="nav nav-pills">
						<li class="active"><a  href="#1a" data-toggle="tab">Infomacion Basica</a></li>
						<li><a href="#2a" data-toggle="tab">Tripulantes</a></li>
						<li><a href="#3a" data-toggle="tab">Galeria</a></li>
					</ul>
				</div>
				<hr>
				<div class="tab-content clearfix">
					<div class="tab-pane active" id="1a">
						<form v-on:submit="updateVehicle">
							<div class="form-group">
								<label for="edit-content">PLACA</label>
								<input class="form-control" id="edit-content" v-model="post.license_plate" />
							</div>
							<div class="form-group">
								<label for="add-content">MARCA</label>
								<input class="form-control" type="text" v-model="post.brand" />
							</div>
							<div class="form-group">
								<label for="add-content">MODELO</label>
								<input class="form-control" type="text" v-model="post.model" />
							</div>
							<div class="form-group">
								<label for="add-content">TIPO DE VEHICULO</label>
								<select class="form-control" v-model="post.type_vehicle">
									<option v-for="item in selectOptions.types_vehicles" :value="item.id">{{ item.name }}</option>
								</select>
							</div>
							<div class="form-group">
								<label for="add-content">CAPACIDAD DE PASAJEROS</label>
								<input class="form-control" type="text" v-model="post.passangers_capacity" />
							</div>
							<div class="form-group">
								<label for="add-content">TIPO DE COMBUSTIBLE</label>
								<select class="form-control" v-model="post.type_fuel">
									<option v-for="item in selectOptions.types_fuels" :value="item.id">{{ item.name }}</option>
								</select>
							</div>
							<div class="form-group">
								<label for="add-content">CILINDRAJE</label>
								<input class="form-control" type="text" v-model="post.cilindraje" />
							</div>
							<div class="form-group">
								<label for="add-content">TITULAR</label>
								<select class="form-control" v-model="post.holder">
									<option v-for="item in selectOptions.contacts" :value="item.id">{{ item.identification_number }} - {{ item.first_name }} {{ item.second_name }} {{ item.surname }} {{ item.second_surname }}</option>
								</select>
							</div>
							<div class="form-group">
								<label for="add-content">PROPIETARIO</label>
								<select class="form-control" v-model="post.propietary">
									<option v-for="item in selectOptions.contacts" :value="item.id">{{ item.identification_number }} - {{ item.first_name }} {{ item.second_name }} {{ item.surname }} {{ item.second_surname }}</option>
								</select>
							</div>
							<div class="form-group">
								<label for="add-content"># TARJETA DE PROPIEDAD</label>
								<input class="form-control" type="text" v-model="post.card_propiety_number" />
							</div>
							<div class="form-group">
								<label for="add-content"># TARJETA DE CHASIS</label>
								<input class="form-control" type="text" v-model="post.chassis_number" />
							</div>
							<div class="form-group">
								<label for="add-content"># SOAT</label>
								<input class="form-control" type="text" v-model="post.soat_number" />
							</div>
							<div class="form-group">
								<label for="add-content"># POLIZA DE TERCEROS</label>
								<input class="form-control" type="text" v-model="post.third_party_number" />
							</div>
							<div class="form-group">
								<label for="add-content">FECHA DE VENCIMIENTO SOAT</label>
								<input class="form-control" type="date" v-model="post.soat_date_expiration" />
							</div>
							<div class="form-group">
								<label for="add-content">FECHA DE VENCIMIENTO POLIZA DE TERCEROS</label>
								<input class="form-control" type="date" v-model="post.third_party_date_expiration" />
							</div>
							<div class="form-group">
								<label for="add-content">CAPACIDAD CON REALCE</label>
								<input class="form-control" type="text" v-model="post.capacity_with_enhancement" />
							</div>
							<div class="form-group">
								<label for="add-content">CAPACIDAD SIN REALCE</label>
								<input class="form-control" type="text" v-model="post.capacity_without_enhancement" />
							</div>
							<div class="form-group">
								<label for="add-content">PESO BASE</label>
								<input class="form-control" type="text" v-model="post.base_weight" />
							</div>
							<div class="form-group">
								<label for="add-content">COSTO DE RENTA</label>
								<input class="form-control" type="text" v-model="post.rent_cost" />
							</div>
							<div class="form-group">
								<label for="add-content">ESTADO</label>
								<select class="form-control" v-model="post.status">
									<option v-for="item in selectOptions.status_vehicles" :value="item.id">{{ item.name }}</option>
								</select>
							</div>
							<button type="submit" class="btn btn-primary">Guardar</button>
							<router-link class="btn btn-primary" v-bind:to="{ name: 'Vehicles-List' }">Regresar</router-link>
						</form>

					</div>
					<div class="tab-pane" id="2a">
						<div class="row">
							<h3>Tripulantes</h3>
							<hr>
							<div class="row">
								<div class="form-group col-sm-12 text-right">
									<div class="actions">
										<button class="btn btn-primary" onclick="javascript: $('#includeCrewVehicle-Fast').show();">
											<span class="fa fa-plus"></span>
											Agregar
										</button>
									</div>
								</div>
							</div>
			
							
							<div class="col-md-12" id="includeCrewVehicle-Fast">
								<form class="row" v-on:submit="includeCrewVehicle"> 
									<div class="form-group col-md-4">
										<label for="edit-content">CARGO</label>
										<select class="form-control" v-model="post_crew.charge">
											<option v-for="item in selectOptions.types_charges" :value="item.id">{{ item.name }}</option>
										</select>
									</div>
									<div class="form-group col-md-4">
										<label for="add-content">EMPLEADO</label>
										<select class="form-control" v-model="post_crew.employee">
											<option v-for="item in selectOptions.employees" :value="item.id">{{ item.identification_number }} - {{ item.first_name }} {{ item.second_name }} {{ item.surname }} {{ item.second_surname }}</option>
										</select>
									</div>
									<button type="submit" class="btn btn-primary col-md-4">Agregar</button>
								</form>
								<hr>
							</div>
							<div class="col-md-12">
								<table class="table  table-responsive">
									<thead>
										<tr>
											<td>ID</td>
											<td>Cargo</td>
											<td>Empleado</td>
											<td></td>
										</tr>
									</thead>
									<tbody>
										<tr v-for="item in crew">
											<td>{{ item.charge.id }}</td>
											<td>{{ item.charge.name }}</td>
											<td>{{ item.employee.first_name }} {{ item.employee.second_name }} {{ item.employee.surname }} {{ item.employee.second_surname }}</td>
											<td>
												<router-link class="btn btn-danger btn-md" v-bind:to="{name: 'includeCrewVehicle-Delete', params: { vehicle_id: post.id, crew_vehicle_id: item.id }}"><i class="fa fa-trash"></i> </router-link>
											</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>
					<div class="tab-pane" id="3a">
						<h3>Galeria</h3>
						<hr>
						
						<div class="col-sm-12 col-md-2" style="display:nones;">
							<div class="card card-default">
								<div class="card-body">
									<div class="row">
										<div class="col-lg-2">
											<input v-model="image_preview.name" type="hidden" class="form-control" />
										</div>
										<div class="col-lg-3">
											<input v-model="image_preview.type" type="hidden" class="form-control" readonly="" />
										</div>
										<div class="col-lg-3">
											<input v-model="image_preview.size" type="hidden" class="form-control" readonly="" />
										</div>
										<div class="col-lg-12">
											<input v-model="image_preview.src" type="hidden" class="form-control image-preview-filename" readonly="" />
										</div>
										<div class="col-lg-12">
											<div class="input-group image-preview">
												<img id="dynamic" width="100%" v-bind:src="image_preview.src" />
											</div>
										</div>
									</div>
								</div>
							</div>
							<hr>
							<div class="row">
								<div class="form-group col-sm-12 text-right">
									<div class="input-group image-preview" style="float-right">
										<div class="btn btn-default image-preview-input">
											<span class="glyphicon glyphicon-folder-open"></span>
											<span class="image-preview-input-title"> <i class="fa fa-camera"></i> </span>
											<input type="file" accept="image/png, image/jpeg, image/gif" name="input-file-preview" @change="changeImage" />
										</div>
									</div>
								</div>
							</div>
							
						</div>
						<div class="col-sm-12 col-md-10" style="display:nones;">
							<div class="card card-default">
								<div class="card-body">
									<div class="row">
										<div class="col-lg-3" v-for="img in galery_vehicles" style="min-height: 350px;height:350px;">
											<router-link class="btn btn-danger btn-md" v-bind:to="{name: 'GaleryVehicles-delete', params: { vehicle_id: post.id, galery_vehicles_id: img.id }}">
												<i class="fa fa-trash"></i> Eliminar
											</router-link>
											<a class="btn btn-info btn-md" target="_new" v-bind:href="'/api/pictures/' + img.picture"><i class="fa fa-eye"></i> Ver</a>
											<hr>
											<img width="100%" class="image image-responsive" v-bind:src="'/api/pictures/' + img.picture" />
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</template>
		
		<template id="delete-Vehicles">
			<div>
				<h2>VEHICULOS - Eliminar</h2>
				<form v-on:submit="deleteVehicle">
					<p>The action cannot be undone.</p>
					<button type="submit" class="btn btn-danger">Eliminar</button>
					<router-link class="btn btn-primary" v-bind:to="{ name: 'Vehicles-List' }">Cancelar</router-link>
				</form>
			</div>
		</template>
		
		<template id="delete-includeCrewVehicle">
			<div>
				<h2>VEHICULOS - TRIPULACION - Eliminar</h2>
				<form v-on:submit="deleteCrewVehicle">
					<p>The action cannot be undone.</p>
					<button type="submit" class="btn btn-danger">Eliminar</button>
					<router-link class="btn btn-primary" v-bind:to="{name: 'Vehicles-Edit', params: { vehicle_id: post.id }}">Cancelar</router-link>
				</form>
			</div>
		</template>
		
		<template id="GaleryVehicles-delete">
		  <div>
			<h2>Delete galery_vehicles {{ galery_vehicles_id }}</h2>
			<form v-on:submit="deletegalery_vehicles" method="POST">
			  <p>The action cannot be undone.</p>
			  <button type="submit" class="btn btn-danger">Eliminar</button>
			  <router-link class="btn btn-primary" v-bind:to="'/Vehicles/' + vehicle_id + '/edit'">Cancelar</router-link>
			</form>
		  </div>
		</template>
		<!-- // ------------ VEHICULOS - FIN -------------------------------------  -->
		
		<!-- // ------------ CONTACTOS - INICIO -------------------------------------  -->
		<template id="page-Contacts">
			<div>
				<header class="page-header">
					<div class="branding">
						<h1>CONTACTOS</h1>
					</div>
				</header>
				<div class="filters row">
					<div class="form-group col-sm-8">
						<label for="search-element">Filtrar / Buscar</label>
						<input v-model="searchKey" class="form-control" id="search-element" required/>
					</div>
					<div class="form-group col-sm-4 text-right">
						<div class="actions">
							<br>
							<router-link class="btn btn-primary" v-bind:to="{ name: 'Contacts-Add' }">
								<span class="fa fa-plus"></span>
								Nuevo
							</router-link>
						</div>
					</div>
				</div>
				<table class="table table-responsive">
					<thead>
						<tr>
							<th>ID</th>
							<th>Numero de identificacion</th>
							<th>Nombre Completo</th>
							<th class="col-sm-2">Actions</th>
						</tr>
					</thead>
					<tbody>
						<tr v-if="posts===null">
							<td colspan="4">Loading...</td>
						</tr>
						<tr v-else v-for="post in filteredposts">
							<td><router-link v-bind:to="{name: 'Contacts-View', params: { contact_id: post.id }}">{{ post.id }}</router-link></td>
							<td><router-link v-bind:to="{name: 'Contacts-View', params: { contact_id: post.id }}">{{ post.identification_number }}</router-link></td>
							<td><router-link v-bind:to="{name: 'Contacts-View', params: { contact_id: post.id }}">{{ post.first_name }} {{ post.second_name }} {{ post.surname }} {{ post.second_surname }}</router-link></td>
							<td>
							<router-link class="btn btn-warning btn-md" v-bind:to="{name: 'Contacts-Edit', params: { contact_id: post.id }}"><i class="fa fa-pencil-square-o"></i> </router-link>
							<router-link class="btn btn-danger btn-md" v-bind:to="{name: 'Contacts-Delete', params: { contact_id: post.id }}"><i class="fa fa-trash"></i> </router-link>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
		</template>
		
		<template id="view-Contacts">
			<div>
				<header class="page-header">
					<div class="branding">
						<h1>CONTACTOS - [{{ post.identification_number }}] {{ post.first_name }} {{ post.second_name }} {{ post.surname }} {{ post.second_surname }}</h1>
					</div>
				</header>
				<table class="table  table-responsive">
					<tr>
						<td>ID INTERNO</td>
						<td>{{ post.id }}</td>
					</tr>
					<tr>
						<td>TIPO DE IDENTIFICACION</td>
						<td>
							<table class="table  table-responsive">
								<tr>
									<td>ID INTERNO</td>
									<td>{{ post.identification_type.id }}</td>
								</tr>
								<tr>
									<td>NOMBRE</td>
									<td>{{ post.identification_type.name }}</td>
								</tr>
							</table>
						</td>
					</tr>
					<tr>
						<td># IDENTIFICACION</td>
						<td>{{ post.identification_number }}</td>
					</tr>
					<tr>
						<td>PRIMER NOMBRE</td>
						<td>{{ post.first_name }}</td>
					</tr>
					<tr>
						<td>SEGUNDO NOMBRE</td>
						<td>{{ post.second_name }}</td>
					</tr>
					<tr>
						<td>PRIMER APELLIDO</td>
						<td>{{ post.surname }}</td>
					</tr>
					<tr>
						<td>SEGUNDO APELLIDO</td>
						<td>{{ post.second_surname }}</td>
					</tr>
					<tr>
						<td>TELEFONO FIJO</td>
						<td>{{ post.phone }}</td>
					</tr>
					<tr>
						<td>TELEFONO MOVIL</td>
						<td>{{ post.phone_mobile }}</td>
					</tr>
					<tr>
						<td>CORREO ELECTRONICO</td>
						<td>{{ post.mail }}</td>
					</tr>
					<tr>
						<td>DEPARTAMENTO</td>
						<td>
							<table class="table  table-responsive">
								<tr>
									<td>ID INTERNO</td>
									<td>{{ post.department.id }}</td>
								</tr>
								<tr>
									<td>NOMBRE</td>
									<td>{{ post.department.name }}</td>
								</tr>
							</table>
						</td>
					</tr>
					<tr>
						<td>CIUDAD</td>
						<td>
							<table class="table  table-responsive">
								<tr>
									<td>ID INTERNO</td>
									<td>{{ post.city.id }}</td>
								</tr>
								<tr>
									<td>NOMBRE</td>
									<td>{{ post.city.name }}</td>
								</tr>
							</table>
						</td>
					</tr>
					<tr>
						<td>DIRECCION DETALLADA</td>
						<td>{{ post.address }}</td>
					</tr>
					<tr>
						<td>DIRECCION NORMALIZADA</td>
						<td>{{ post.geo_address }}</td>
					</tr>
				</table>
				<br/>
				<span class="fa fa-arrow-left" aria-hidden="true"></span>
				<router-link v-bind:to="{ name: 'Contacts-List' }">Volver a la lista</router-link>
			</div>		  
		</template>
		
		<template id="add-Contacts">
			<div>
				<h2>CONTACTOS - Crear</h2>
				<form v-on:submit="createContact">
					<div class="form-group">
						<label for="add-content">TIPO DE IDENTIFICACION</label>
						<select class="form-control" v-model="post.identification_type">
							<option v-for="item in selectOptions.types_identifications" :value="item.id">{{ item.name }}</option>
						</select>
					</div>
					<div class="form-group">
						<label for="add-content"># IDENTIFICACION</label>
						<input class="form-control" type="text" v-model="post.identification_number" />
					</div>
					<div class="form-group">
						<label for="add-content">PRIMER NOMBRE</label>
						<input class="form-control" type="text" v-model="post.first_name" />
					</div>
					<div class="form-group">
						<label for="add-content">SEGUNDO NOMBRE</label>
						<input class="form-control" type="text" v-model="post.second_name" />
					</div>
					<div class="form-group">
						<label for="add-content">PRIMER APELLIDO</label>
						<input class="form-control" type="text" v-model="post.surname" />
					</div>
					<div class="form-group">
						<label for="add-content">SEGUNDO APELLIDO</label>
						<input class="form-control" type="text" v-model="post.second_surname" />
					</div>
					<div class="form-group">
						<label for="add-content">TELEFONO FIJO</label>
						<input class="form-control" type="text" v-model="post.phone" />
					</div>
					<div class="form-group">
						<label for="add-content">TELEFONO MOVIL</label>
						<input class="form-control" type="text" v-model="post.phone_mobile" />
					</div>
					<div class="form-group">
						<label for="add-content">DEPARTAMENTO</label>
						<select class="form-control" v-model="post.department" @change="loadCitys">
							<option v-for="item in selectOptions.geo_departments" :value="item.id">{{ item.name }}</option>
						</select>
					</div>
					<div class="form-group">
						<label for="add-content">CIUDAD</label>
						<select class="form-control" v-model="post.city" >
							<option v-for="item in selectOptions.geo_citys" :value="item.id">{{ item.name }}</option>
						</select>
					</div>
					<button type="submit" class="btn btn-primary">Crear</button>
					<router-link class="btn btn-primary" v-bind:to="{ name: 'Contacts-List' }">Regresar</router-link>
				</form>
			</div>
		</template>
		
		<template id="edit-Contacts">
			<div>
				<header class="page-header">
					<div class="branding">
						<h1>CONTACTOS - Modificar</h1>
					</div>
				</header>
				
				<form v-on:submit="updateContact" class="row">
					<div class="form-group col-md-4">
						<label for="add-content">TIPO DE IDENTIFICACION</label>
						<select class="form-control" v-model="post.identification_type">
							<option v-for="item in selectOptions.types_identifications" :value="item.id">{{ item.name }}</option>
						</select>
					</div>
					<div class="form-group col-md-4">
						<label for="add-content"># IDENTIFICACION</label>
						<input class="form-control" type="text" v-model="post.identification_number" />
					</div>
					<div class="form-group col-md-4">
						<label for="add-content">PRIMER NOMBRE</label>
						<input class="form-control" type="text" v-model="post.first_name" />
					</div>
					<div class="form-group col-md-4">
						<label for="add-content">SEGUNDO NOMBRE</label>
						<input class="form-control" type="text" v-model="post.second_name" />
					</div>
					<div class="form-group col-md-4">
						<label for="add-content">PRIMER APELLIDO</label>
						<input class="form-control" type="text" v-model="post.surname" />
					</div>
					<div class="form-group col-md-4">
						<label for="add-content">SEGUNDO APELLIDO</label>
						<input class="form-control" type="text" v-model="post.second_surname" />
					</div>
					<div class="form-group col-md-3">
						<label for="add-content">TELEFONO FIJO</label>
						<input class="form-control" type="text" v-model="post.phone" />
					</div>
					<div class="form-group col-md-3">
						<label for="add-content">TELEFONO MOVIL</label>
						<input class="form-control" type="text" v-model="post.phone_mobile" />
					</div>
					<div class="form-group col-md-3">
						<label for="add-content">DEPARTAMENTO</label>
						<select class="form-control" v-model="post.department" @change="loadCitys">
							<option v-for="item in selectOptions.geo_departments" :value="item.id">{{ item.name }}</option>
						</select>
					</div>
					<div class="form-group col-md-3">
						<label for="add-content">CIUDAD</label>
						<select class="form-control" v-model="post.city" >
							<option v-for="item in selectOptions.geo_citys" :value="item.id">{{ item.name }}</option>
						</select>
					</div>
					<button type="submit" class="btn btn-primary">Guardar</button>
					<router-link class="btn btn-primary" v-bind:to="{ name: 'Contacts-List' }">Regresar</router-link>
				</form>
			</div>
		</template>
		
		<template id="delete-Contacts">
			<div>
				<h2>CONTACTOS - Eliminar</h2>
				<form v-on:submit="deleteContact">
					<p>The action cannot be undone.</p>
					<button type="submit" class="btn btn-danger">Eliminar</button>
					<router-link class="btn btn-primary" v-bind:to="{ name: 'Contacts-List' }">Cancelar</router-link>
				</form>
			</div>
		</template>
		<!-- // ------------ CONTACTOS - FIN -------------------------------------  -->
		
		<!-- // ------------ EMPLEADOS INICIO -------------------------------------  -->
		<template id="page-Employees">
			<div>
				<header class="page-header">
					<div class="branding">
						<h1>EMPLEADOS</h1>
					</div>
				</header>
				<div class="filters row">
					<div class="form-group col-sm-8">
						<label for="search-element">Filtrar / Buscar</label>
						<input v-model="searchKey" class="form-control" id="search-element" required/>
					</div>
					<div class="form-group col-sm-4 text-right">
						<div class="actions">
							<br>
							<router-link class="btn btn-primary" v-bind:to="{ name: 'Employees-Add' }">
								<span class="fa fa-plus"></span>
								Nuevo
							</router-link>
						</div>
					</div>
				</div>
				<table class="table table-responsive">
					<thead>
						<tr>
							<th>ID</th>
							<th># Identificacion</th>
							<th>Nombre completo</th>
							<th class="col-sm-2">Actions</th>
						</tr>
					</thead>
					<tbody>
						<tr v-if="posts===null">
							<td colspan="4">Loading...</td>
						</tr>
						<tr v-else v-for="post in filteredposts">
							<td><router-link v-bind:to="{name: 'Employees-View', params: { employee_id: post.id }}">{{ post.id }}</router-link></td>
							<td><router-link v-bind:to="{name: 'Employees-View', params: { employee_id: post.id }}">{{ post.identification_number }}</router-link></td>
							<td><router-link v-bind:to="{name: 'Employees-View', params: { employee_id: post.id }}">{{ post.first_name }} {{ post.second_name }} {{ post.surname }} {{ post.second_surname }}</router-link></td>
							<td>
							<router-link class="btn btn-warning btn-md" v-bind:to="{name: 'Employees-Edit', params: { employee_id: post.id }}"><i class="fa fa-pencil-square-o"></i> </router-link>
							<router-link class="btn btn-danger btn-md" v-bind:to="{name: 'Employees-Delete', params: { employee_id: post.id }}"><i class="fa fa-trash"></i> </router-link>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
		</template>
		
		<template id="view-Employees">
			<div>
				<header class="page-header">
					<div class="branding">
						<h1>EMPLEADOS - {{ post.first_name }} {{ post.second_name }} {{ post.surname }} {{ post.second_surname }}</h1>
					</div>
				</header>
				<div id="exTab1">
					<ul  class="nav nav-pills">
						<li class="active"><a  href="#1a" data-toggle="tab">Infomacion Basica</a></li>
						<li><a href="#2a" data-toggle="tab">Contactos</a></li>
						<li><a href="#3a" data-toggle="tab">Contratos</a></li>
						<li><a href="#4a" data-toggle="tab">Desempeño</a></li>
						<li><a href="#5a" data-toggle="tab">Colillas</a></li>
					</ul>
				</div>
				<div class="tab-content clearfix">
					<div class="tab-pane active" id="1a">
						<h3>Infomacion Basica</h3>
						<hr>
						<table class="table  table-responsive">
							<tr>
								<td>ID INTERNO</td>
								<td>{{ post.id }}</td>
							</tr>
							<tr>
								<td>PRIMER NOMBRE</td>
								<td>{{ post.first_name }}</td>
							</tr>
							<tr>
								<td>SEGUNDO NOMBRE</td>
								<td>{{ post.second_name }}</td>
							</tr>
							<tr>
								<td>PRIMER APELLIDO</td>
								<td>{{ post.surname }}</td>
							</tr>
							<tr>
								<td>SEGUNDO APELLIDO</td>
								<td>{{ post.second_surname }}</td>
							</tr>
							<tr>
								<td>TIPO DE IDENTIFICACION</td>
								<td>
									<table class="table  table-responsive">
										<tr>
											<td>ID INTERNO</td>
											<td>{{ post.identification_type.id }}</td>
										</tr>
										<tr>
											<td>NOMBRE</td>
											<td>{{ post.identification_type.name }}</td>
										</tr>
									</table>
								</td>
							</tr>
							<tr>
								<td># IDENTIFICACION</td>
								<td>{{ post.identification_number }}</td>
							</tr>
							<tr>
								<td>FECHA DE EXPEDICION DEL DOCUMENTO</td>
								<td>{{ post.identification_date_expedition }}</td>
							</tr>
							<tr>
								<td>FECHA DE NACIMIENTO</td>
								<td>{{ post.birthdate }}</td>
							</tr>
							<tr>
								<td>TIPO DE SANGRE</td>
								<td>
									<table class="table  table-responsive">
										<tr>
											<td>ID INTERNO</td>
											<td>{{ post.blood_type.id }}</td>
										</tr>
										<tr>
											<td>NOMBRE</td>
											<td>{{ post.blood_type.name }}</td>
										</tr>
									</table>
								</td>
							</tr>
							<tr>
								<td>TIPO DE RH</td>
								<td>
									<table class="table  table-responsive">
										<tr>
											<td>ID INTERNO</td>
											<td>{{ post.blood_rh.id }}</td>
										</tr>
										<tr>
											<td>NOMBRE</td>
											<td>{{ post.blood_rh.name }}</td>
										</tr>
									</table>
								</td>
							</tr>
							<tr>
								<td>CORREO ELECTRONICO</td>
								<td>{{ post.mail }}</td>
							</tr>
							<tr>
								<td>TELEFONO FIJO</td>
								<td>{{ post.number_phone }}</td>
							</tr>
							<tr>
								<td>TELEFONO MOVIL</td>
								<td>{{ post.number_mobile }}</td>
							</tr>
							<tr>
								<td>FECHA DE ENTRADA A LA EMPRESA</td>
								<td>{{ post.company_date_entry }}</td>
							</tr>
							<tr>
								<td>FECHA DE SALIDA DE LA EMPRESA</td>
								<td>{{ post.company_date_out }}</td>
							</tr>
							<tr>
								<td>CORREO ELECTRONICO EMPRESARIAL</td>
								<td>{{ post.company_mail }}</td>
							</tr>
							<tr>
								<td>TELEFONO FIJO/EXTENSION EMPRESARIAL</td>
								<td>{{ post.company_number_phone }}</td>
							</tr>
							<tr>
								<td>TELEFONO MOVIL EMPRESARIAL</td>
								<td>{{ post.company_number_mobile }}</td>
							</tr>
							<tr>
								<td>FOTO</td>
								<td>{{ post.avatar }}</td>
							</tr>
							<tr>
								<td>ESTADO</td>
								<td>
									<table class="table  table-responsive">
										<tr>
											<td>ID INTERNO</td>
											<td>{{ post.status.id }}</td>
										</tr>
										<tr>
											<td>NOMBRE</td>
											<td>{{ post.status.name }}</td>
										</tr>
									</table>
								</td>
							</tr>
							<tr>
								<td>EPS</td>
								<td>
									<table class="table  table-responsive">
										<tr>
											<td>ID INTERNO</td>
											<td>{{ post.eps.id }}</td>
										</tr>
										<tr>
											<td>CODIGO</td>
											<td>{{ post.eps.code }}</td>
										</tr>
										<tr>
											<td>NOMBRE</td>
											<td>{{ post.eps.name }}</td>
										</tr>
									</table>
								</td>
							</tr>
							<tr>
								<td>ARL</td>
								<td>
									<table class="table  table-responsive">
										<tr>
											<td>ID INTERNO</td>
											<td>{{ post.arl.id }}</td>
										</tr>
										<tr>
											<td>CODIGO</td>
											<td>{{ post.arl.code }}</td>
										</tr>
										<tr>
											<td>NOMBRE</td>
											<td>{{ post.arl.name }}</td>
										</tr>
									</table>
								</td>
							</tr>
							<tr>
								<td>FONDO DE PENSION</td>
								<td>
									<table class="table  table-responsive">
										<tr>
											<td>ID INTERNO</td>
											<td>{{ post.pension_fund.id }}</td>
										</tr>
										<tr>
											<td>CODIGO</td>
											<td>{{ post.pension_fund.code }}</td>
										</tr>
										<tr>
											<td>NOMBRE</td>
											<td>{{ post.pension_fund.name }}</td>
										</tr>
									</table>
								</td>
							</tr>
							<tr>
								<td>CAJA DE COMPENSACION</td>
								<td>
									<table class="table  table-responsive">
										<tr>
											<td>ID INTERNO</td>
											<td>{{ post.compensation_fund.id }}</td>
										</tr>
										<tr>
											<td>CODIGO</td>
											<td>{{ post.compensation_fund.code }}</td>
										</tr>
										<tr>
											<td>NOMBRE</td>
											<td>{{ post.compensation_fund.name }}</td>
										</tr>
									</table>
								</td>
							</tr>
							<tr>
								<td>FONDO DE CESANTIAS</td>
								<td>
									<table class="table  table-responsive">
										<tr>
											<td>ID INTERNO</td>
											<td>{{ post.severance_fund.id }}</td>
										</tr>
										<tr>
											<td>CODIGO</td>
											<td>{{ post.severance_fund.code }}</td>
										</tr>
										<tr>
											<td>NOMBRE</td>
											<td>{{ post.severance_fund.name }}</td>
										</tr>
									</table>
								</td>
							</tr>
							<tr>
								<td>DEPARTAMENTO</td>
								<td>
									<table class="table  table-responsive">
										<tr>
											<td>ID INTERNO</td>
											<td>{{ post.department.id }}</td>
										</tr>
										<tr>
											<td>NOMBRE</td>
											<td>{{ post.department.name }}</td>
										</tr>
									</table>
								</td>
							</tr>
							<tr>
								<td>CIUDAD</td>
								<td>
									<table class="table  table-responsive">
										<tr>
											<td>ID INTERNO</td>
											<td>{{ post.city.id }}</td>
										</tr>
										<tr>
											<td>NOMBRE</td>
											<td>{{ post.city.name }}</td>
										</tr>
										<tr>
											<td>DEPARTAMENTOS</td>
											<td>{{ post.city.department }}</td>
										</tr>
									</table>
								</td>
							</tr>
							<tr>
								<td>DIRECCION DETALLADA</td>
								<td>{{ post.address }}</td>
							</tr>
							<tr>
								<td>DIRECCION NORMALIZADA</td>
								<td>{{ post.geo_address }}</td>
							</tr>
							<tr>
								<td>OBSERVACIONES</td>
								<td>{{ post.observations }}</td>
							</tr>
						</table>
					</div>
					<div class="tab-pane" id="2a">
						<div class="row">
							<h3>Contactos</h3>
							<hr>
							<div class="col-md-12">
								<table class="table  table-responsive">
									<thead>
										<tr>
											<td>ID</td>
											<td>Nombre Completo</td>
											<td>Parentesco</td>
										</tr>
									</thead>
									<tbody>
										<tr v-for="item in post_contacts">
											<td>{{ item.id }}</td>
											<td>{{ item.contact.first_name }} {{ item.contact.second_name }} {{ item.contact.surname }} {{ item.contact.second_surname }}</td>
											<td>{{ item.type_contact.name }}</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>
					<div class="tab-pane" id="3a">
						<div class="row">
							<h3>Contratos</h3>
							<hr>
							<div class="col-md-12">
								<table class="table  table-responsive">
									<thead>
										<tr>
											<td>ID</td>
											<td>Contrato</td>
											<td>Termino</td>
											<td>Salario Básico</td>
											<td>Descripcion</td>
											<td>Cargo</td>
											<td>Fecha Inicio</td>
											<td>Fecha Termino</td>
											<td></td>
										</tr>
									</thead>
									<tbody>
										<tr v-for="item in contracted_staff">
											<td>{{ item.id }}</td>
											<td>{{ item.contract_employee.name }}</td>
											<td>{{ item.contract_employee.term.name }}</td>
											<td>{{ item.contract_employee.basic_salary }}</td>
											<td>{{ item.contract_employee.description }}</td>
											<td>{{ item.type_charge.name }}</td>
											<td>{{ item.date_start }}</td>
											<td>{{ item.date_end }}</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>
					<div class="tab-pane" id="4a">
						<div class="row">
							<h3>Desempeño</h3>
							<hr>
							
							<div class="col-md-12">
								<table class="table  table-responsive">
									<thead>
										<tr>
											<td>ID</td>
											<td>Motivo</td>
											<td>Fecha Inicio</td>
											<td>Fecha Fin</td>
											<td>Accion Tomada</td>
											<td>Notas</td>
										</tr>
									</thead>
									<tbody>
										<tr v-for="item in performances_employees">
											<td>{{ item.id }}</td>
											<td>{{ item.reason.name }}</td>
											<td>{{ item.date_start }}</td>
											<td>{{ item.date_end }}</td>
											<td>{{ item.action_taken.name }}</td>
											<td>{{ item.notes }}</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>
					<div class="tab-pane" id="5a">
						<div class="row">
							<h3>Colillas</h3>
							<hr>
						</div>
					</div>
				</div>
				<br/>
				<span class="fa fa-arrow-left" aria-hidden="true"></span>
				<router-link v-bind:to="{ name: 'Employees-List' }">Volver a la lista</router-link>
			</div>		  
		</template>
		
		<template id="add-Employees">
			<div>
				<h2>EMPLEADOS - Crear</h2>
				<form v-on:submit="createEmployee">
					<div class="form-group">
						<label for="add-content">PRIMER NOMBRE</label>
						<input class="form-control" type="text" v-model="post.first_name" />
					</div>
					<div class="form-group">
						<label for="add-content">SEGUNDO NOMBRE</label>
						<input class="form-control" type="text" v-model="post.second_name" />
					</div>
					<div class="form-group">
						<label for="add-content">PRIMER APELLIDO</label>
						<input class="form-control" type="text" v-model="post.surname" />
					</div>
					<div class="form-group">
						<label for="add-content">SEGUNDO APELLIDO</label>
						<input class="form-control" type="text" v-model="post.second_surname" />
					</div>
					<div class="form-group">
						<label for="add-content">TIPO DE IDENTIFICACION</label>
						<select class="form-control" v-model="post.identification_type">
							<option v-for="item in selectOptions.types_identifications" :value="item.id">{{ item.name }}</option>
						</select>
					</div>
					<div class="form-group">
						<label for="add-content"># IDENTIFICACION</label>
						<input class="form-control" type="text" v-model="post.identification_number" />
					</div>
					<div class="form-group">
						<label for="add-content">FECHA DE EXPEDICION DEL DOCUMENTO</label>
						<input class="form-control" type="date" v-model="post.identification_date_expedition" />
					</div>
					<div class="form-group">
						<label for="add-content">FECHA DE NACIMIENTO</label>
						<input class="form-control" type="date" v-model="post.birthdate" />
					</div>
					<div class="form-group">
						<label for="add-content">TIPO DE SANGRE</label>
						<select class="form-control" v-model="post.blood_type">
							<option v-for="item in selectOptions.types_bloods" :value="item.id">{{ item.name }}</option>
						</select>
					</div>
					<div class="form-group">
						<label for="add-content">TIPO DE RH</label>
						<select class="form-control" v-model="post.blood_rh">
							<option v-for="item in selectOptions.types_bloods_rhs" :value="item.id">{{ item.name }}</option>
						</select>
					</div>
					<div class="form-group">
						<label for="add-content">CORREO ELECTRONICO</label>
						<input class="form-control" type="text" v-model="post.mail" />
					</div>
					<div class="form-group">
						<label for="add-content">TELEFONO FIJO</label>
						<input class="form-control" type="text" v-model="post.number_phone" />
					</div>
					<div class="form-group">
						<label for="add-content">TELEFONO MOVIL</label>
						<input class="form-control" type="text" v-model="post.number_mobile" />
					</div>
					<div class="form-group">
						<label for="add-content">FECHA DE ENTRADA A LA EMPRESA</label>
						<input class="form-control" type="date" v-model="post.company_date_entry" />
					</div>
					<div class="form-group">
						<label for="add-content">FECHA DE SALIDA DE LA EMPRESA</label>
						<input class="form-control" type="date" v-model="post.company_date_out" />
					</div>
					<div class="form-group">
						<label for="add-content">CORREO ELECTRONICO EMPRESARIAL</label>
						<input class="form-control" type="text" v-model="post.company_mail" />
					</div>
					<div class="form-group">
						<label for="add-content">TELEFONO FIJO/EXTENSION EMPRESARIAL</label>
						<input class="form-control" type="text" v-model="post.company_number_phone" />
					</div>
					<div class="form-group">
						<label for="add-content">TELEFONO MOVIL EMPRESARIAL</label>
						<input class="form-control" type="text" v-model="post.company_number_mobile" />
					</div>
					<div class="form-group">
						<label for="add-content">ESTADO</label>
						<select class="form-control" v-model="post.status">
							<option v-for="item in selectOptions.status_employees" :value="item.id">{{ item.name }}</option>
						</select>
					</div>
					<div class="form-group">
						<label for="add-content">EPS</label>
						<select class="form-control" v-model="post.eps">
							<option v-for="item in selectOptions.eps" :value="item.id">{{ item.name }}</option>
						</select>
					</div>
					<div class="form-group">
						<label for="add-content">ARL</label>
						<select class="form-control" v-model="post.arl">
							<option v-for="item in selectOptions.arl" :value="item.id">{{ item.name }}</option>
						</select>
					</div>
					<div class="form-group">
						<label for="add-content">FONDO DE PENSION</label>
						<select class="form-control" v-model="post.pension_fund">
							<option v-for="item in selectOptions.funds_pensions" :value="item.id">{{ item.name }}</option>
						</select>
					</div>
					<div class="form-group">
						<label for="add-content">CAJA DE COMPENSACION</label>
						<select class="form-control" v-model="post.compensation_fund">
							<option v-for="item in selectOptions.funds_compensations" :value="item.id">{{ item.name }}</option>
						</select>
					</div>
					<div class="form-group">
						<label for="add-content">FONDO DE CESANTIAS</label>
						<select class="form-control" v-model="post.severance_fund">
							<option v-for="item in selectOptions.funds_severances" :value="item.id">{{ item.name }}</option>
						</select>
					</div>
					<div class="form-group">
						<label for="add-content">DEPARTAMENTO</label>
						<select class="form-control" v-model="post.department" @change="loadCitys">
							<option v-for="item in selectOptions.geo_departments" :value="item.id">{{ item.name }}</option>
						</select>
					</div>
					<div class="form-group">
						<label for="add-content">CIUDAD</label>
						<select class="form-control" v-model="post.city">
							<option v-for="item in selectOptions.geo_citys" :value="item.id">{{ item.name }}</option>
						</select>
					</div>
					<div class="form-group">
						<label for="add-content">DIRECCION DETALLADA</label>
						<input class="form-control" type="text" v-model="post.address" />
					</div>
					<div class="form-group">
						<label for="add-content">DIRECCION NORMALIZADA</label>
						<input class="form-control" type="text" v-model="post.geo_address" />
					</div>
					<div class="form-group">
						<label for="add-content">OBSERVACIONES</label>
						<input class="form-control" type="text" v-model="post.observations" />
					</div>
					<button type="submit" class="btn btn-primary">Crear</button>
					<router-link class="btn btn-primary" v-bind:to="{ name: 'Employees-List' }">Regresar</router-link>
				</form>
			</div>
		</template>
		
		<template id="edit-Employees">
			<div>
				<h2>EMPLEADOS - Modificar</h2>
				<div id="exTab1">
					<ul  class="nav nav-pills">
						<li class="active"><a  href="#1a" data-toggle="tab">Infomacion Basica</a></li>
						<li><a href="#2a" data-toggle="tab">Contactos</a></li>
						<li><a href="#3a" data-toggle="tab">Contratos</a></li>
						<li><a href="#4a" data-toggle="tab">Desempeño</a></li>
						<li><a href="#5a" data-toggle="tab">Colillas</a></li>
					</ul>
				</div>
				<div class="tab-content clearfix">
					<div class="tab-pane active" id="1a">	
						<h3>Infomacion Basica</h3>
						<hr>						
						<form v-on:submit="updateEmployee">
							<div class="form-group">
								<label for="add-content">PRIMER NOMBRE</label>
								<input class="form-control" type="text" v-model="post.first_name" />
							</div>
							<div class="form-group">
								<label for="add-content">SEGUNDO NOMBRE</label>
								<input class="form-control" type="text" v-model="post.second_name" />
							</div>
							<div class="form-group">
								<label for="add-content">PRIMER APELLIDO</label>
								<input class="form-control" type="text" v-model="post.surname" />
							</div>
							<div class="form-group">
								<label for="add-content">SEGUNDO APELLIDO</label>
								<input class="form-control" type="text" v-model="post.second_surname" />
							</div>
							<div class="form-group">
								<label for="add-content">TIPO DE IDENTIFICACION</label>
								<select class="form-control" v-model="post.identification_type">
									<option v-for="item in selectOptions.types_identifications" :value="item.id">{{ item.name }}</option>
								</select>
							</div>
							<div class="form-group">
								<label for="add-content"># IDENTIFICACION</label>
								<input class="form-control" type="text" v-model="post.identification_number" />
							</div>
							<div class="form-group">
								<label for="add-content">FECHA DE EXPEDICION DEL DOCUMENTO</label>
								<input class="form-control" type="date" v-model="post.identification_date_expedition" />
							</div>
							<div class="form-group">
								<label for="add-content">FECHA DE NACIMIENTO</label>
								<input class="form-control" type="date" v-model="post.birthdate" />
							</div>
							<div class="form-group">
								<label for="add-content">TIPO DE SANGRE</label>
								<select class="form-control" v-model="post.blood_type">
									<option v-for="item in selectOptions.types_bloods" :value="item.id">{{ item.name }}</option>
								</select>
							</div>
							<div class="form-group">
								<label for="add-content">TIPO DE RH</label>
								<select class="form-control" v-model="post.blood_rh">
									<option v-for="item in selectOptions.types_bloods_rhs" :value="item.id">{{ item.name }}</option>
								</select>
							</div>
							<div class="form-group">
								<label for="add-content">CORREO ELECTRONICO</label>
								<input class="form-control" type="text" v-model="post.mail" />
							</div>
							<div class="form-group">
								<label for="add-content">TELEFONO FIJO</label>
								<input class="form-control" type="text" v-model="post.number_phone" />
							</div>
							<div class="form-group">
								<label for="add-content">TELEFONO MOVIL</label>
								<input class="form-control" type="text" v-model="post.number_mobile" />
							</div>
							<div class="form-group">
								<label for="add-content">FECHA DE ENTRADA A LA EMPRESA</label>
								<input class="form-control" type="date" v-model="post.company_date_entry" />
							</div>
							<div class="form-group">
								<label for="add-content">FECHA DE SALIDA DE LA EMPRESA</label>
								<input class="form-control" type="date" v-model="post.company_date_out" />
							</div>
							<div class="form-group">
								<label for="add-content">CORREO ELECTRONICO EMPRESARIAL</label>
								<input class="form-control" type="text" v-model="post.company_mail" />
							</div>
							<div class="form-group">
								<label for="add-content">TELEFONO FIJO/EXTENSION EMPRESARIAL</label>
								<input class="form-control" type="text" v-model="post.company_number_phone" />
							</div>
							<div class="form-group">
								<label for="add-content">TELEFONO MOVIL EMPRESARIAL</label>
								<input class="form-control" type="text" v-model="post.company_number_mobile" />
							</div>
							<div class="form-group">
								<label for="add-content">ESTADO</label>
								<select class="form-control" v-model="post.status">
									<option v-for="item in selectOptions.status_employees" :value="item.id">{{ item.name }}</option>
								</select>
							</div>
							<div class="form-group">
								<label for="add-content">EPS</label>
								<select class="form-control" v-model="post.eps">
									<option v-for="item in selectOptions.eps" :value="item.id">{{ item.name }}</option>
								</select>
							</div>
							<div class="form-group">
								<label for="add-content">ARL</label>
								<select class="form-control" v-model="post.arl">
									<option v-for="item in selectOptions.arl" :value="item.id">{{ item.name }}</option>
								</select>
							</div>
							<div class="form-group">
								<label for="add-content">FONDO DE PENSION</label>
								<select class="form-control" v-model="post.pension_fund">
									<option v-for="item in selectOptions.funds_pensions" :value="item.id">{{ item.name }}</option>
								</select>
							</div>
							<div class="form-group">
								<label for="add-content">CAJA DE COMPENSACION</label>
								<select class="form-control" v-model="post.compensation_fund">
									<option v-for="item in selectOptions.funds_compensations" :value="item.id">{{ item.name }}</option>
								</select>
							</div>
							<div class="form-group">
								<label for="add-content">FONDO DE CESANTIAS</label>
								<select class="form-control" v-model="post.severance_fund">
									<option v-for="item in selectOptions.funds_severances" :value="item.id">{{ item.name }}</option>
								</select>
							</div>
							<div class="form-group">
								<label for="add-content">DEPARTAMENTO</label>
								<select class="form-control" v-model="post.department" @change="loadCitys">
									<option v-for="item in selectOptions.geo_departments" :value="item.id">{{ item.name }}</option>
								</select>
							</div>
							<div class="form-group">
								<label for="add-content">CIUDAD</label>
								<select class="form-control" v-model="post.city">
									<option v-for="item in selectOptions.geo_citys" :value="item.id">{{ item.name }}</option>
								</select>
							</div>
							<div class="form-group">
								<label for="add-content">DIRECCION DETALLADA</label>
								<input class="form-control" type="text" v-model="post.address" />
							</div>
							<div class="form-group">
								<label for="add-content">DIRECCION NORMALIZADA</label>
								<input class="form-control" type="text" v-model="post.geo_address" />
							</div>
							<div class="form-group">
								<label for="add-content">OBSERVACIONES</label>
								<input class="form-control" type="text" v-model="post.observations" />
							</div>
							<button type="submit" class="btn btn-primary">Guardar</button>
							<router-link class="btn btn-primary" v-bind:to="{ name: 'Employees-List' }">Regresar</router-link>
						</form>
					</div>
					<div class="tab-pane" id="2a">
						<div class="row">
							<h3>Contactos</h3>
							<hr>
							<div class="row">
								<div class="form-group col-sm-12 text-right">
									<div class="actions">
										<button class="btn btn-primary" onclick="javascript: $('#includeCrewEmployee-Fast').show();">
											<span class="fa fa-plus"></span>
											Agregar
										</button>
									</div>
								</div>
							</div>
							<div class="col-md-12" id="includeCrewEmployee-Fast">
								<form class="row" v-on:submit="includeCrewEmployee"> 
									<div class="form-group col-md-6">
										<label for="add-content">CONTACTO</label>
										<select class="form-control" v-model="post_crew.contact">
											<option v-for="item in selectOptions.contacts" :value="item.id">{{ item.identification_number }} - {{ item.first_name }} {{ item.second_name }} {{ item.surname }} {{ item.second_surname }}</option>
										</select>
									</div>
									<div class="form-group col-md-6">
										<label for="edit-content">PARENTESCO</label>
										<select class="form-control" v-model="post_crew.type_contact">
											<option v-for="item in selectOptions.types_contacts" :value="item.id">{{ item.name }}</option>
										</select>
									</div>
									<button type="submit" class="btn btn-primary col-md-12">Agregar</button>
								</form>
								<hr>
							</div>
							
							<div class="col-md-12">
								<table class="table  table-responsive">
									<thead>
										<tr>
											<td>ID</td>
											<td>Nombre Completo</td>
											<td>Parentesco</td>
											<td></td>
										</tr>
									</thead>
									<tbody>
										<tr v-for="item in post_contacts">
											<td>{{ item.id }}</td>
											<td>{{ item.contact.first_name }} {{ item.contact.second_name }} {{ item.contact.surname }} {{ item.contact.second_surname }}</td>
											<td>{{ item.type_contact.name }}</td>
											<td>
												<router-link class="btn btn-success btn-md" target="_new" v-bind:to="{name: 'Contacts-View', params: { contact_id: item.contact.id }}"><i class="fa fa-eye"></i> </router-link>
												<router-link class="btn btn-danger btn-md" v-bind:to="{name: 'EmployeesContacts-Delete', params: { employee_id: item.employee, employee_contact_id: item.id }}"><i class="fa fa-trash"></i> </router-link>
											</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>
					<div class="tab-pane" id="3a">
						<div class="row">
							<h3>Contratos</h3>
							<hr>
							<div class="row">
								<div class="form-group col-sm-12 text-right">
									<div class="actions">
										<button class="btn btn-primary" onclick="javascript: $('#includeContractEmployee-Fast').show();">
											<span class="fa fa-plus"></span>
											Agregar
										</button>
									</div>
								</div>
							</div>
							<div class="col-md-12" id="includeContractEmployee-Fast">
								<form class="row" v-on:submit="includeContractEmployee"> 
									<div class="form-group col-md-3">
										<label for="add-content">CONTRATO</label>
										<select class="form-control" v-model="post_contracted_staff.contract_employee">
											<option v-for="item in selectOptions.contracts_employees" :value="item.id">{{ item.name }} - {{ item.term.name }} - {{ item.basic_salary }}</option>
										</select>
									</div>
									<div class="form-group col-md-3">
										<label for="edit-content">CARGO</label>
										<select class="form-control" v-model="post_contracted_staff.type_charge">
											<option v-for="item in selectOptions.types_charges" :value="item.id">{{ item.name }}</option>
										</select>
									</div>
									<div class="form-group col-md-3">
										<label for="add-content">FECHA INICIO</label>
										<input class="form-control" type="date" v-model="post_contracted_staff.date_start" />
									</div>
									<div class="form-group col-md-3">
										<label for="add-content">FECHA FIN</label>
										<input class="form-control" type="date" v-model="post_contracted_staff.date_end" />
									</div>
									<button type="submit" class="btn btn-primary col-md-12">Agregar</button>
								</form>
								<hr>
							</div>
							
							<div class="col-md-12">
								<table class="table  table-responsive">
									<thead>
										<tr>
											<td>ID</td>
											<td>Contrato</td>
											<td>Termino</td>
											<td>Salario Básico</td>
											<td>Descripcion</td>
											<td>Cargo</td>
											<td>Fecha Inicio</td>
											<td>Fecha Termino</td>
											<td></td>
										</tr>
									</thead>
									<tbody>
										<tr v-for="item in contracted_staff">
											<td>{{ item.id }}</td>
											<td>{{ item.contract_employee.name }}</td>
											<td>{{ item.contract_employee.term.name }}</td>
											<td>{{ item.contract_employee.basic_salary }}</td>
											<td>{{ item.contract_employee.description }}</td>
											<td>{{ item.type_charge.name }}</td>
											<td>{{ item.date_start }}</td>
											<td>{{ item.date_end }}</td>
											<td><router-link class="btn btn-danger btn-md" v-bind:to="{name: 'ContractedStaff-Delete', params: { employee_id: item.employee, contracted_staff_id: item.id }}"><i class="fa fa-trash"></i> </router-link></td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>
					<div class="tab-pane" id="4a">
						<div class="row">
							<h3>Desempeño</h3>
							<hr>
							<div class="row">
								<div class="form-group col-sm-12 text-right">
									<div class="actions">
										<button class="btn btn-primary" onclick="javascript: $('#includePerformancesEmployee-Fast').show();">
											<span class="fa fa-plus"></span>
											Agregar
										</button>
									</div>
								</div>
								<div class="col-md-12" id="includePerformancesEmployee-Fast">
									<form class="row" v-on:submit="includePerformancesEmployee"> 
										<div class="form-group col-md-3">
											<label for="add-content">MOTIVO</label>
											<select class="form-control" v-model="post_performances_employees.reason">
												<option v-for="item in selectOptions.reasons_performances_employees" :value="item.id">{{ item.name }}</option>
											</select>
										</div>
										<div class="form-group col-md-3">
											<label for="add-content">FECHA INICIO</label>
											<input class="form-control" type="date" v-model="post_performances_employees.date_start" />
										</div>
										<div class="form-group col-md-3">
											<label for="add-content">FECHA FIN</label>
											<input class="form-control" type="date" v-model="post_performances_employees.date_end" />
										</div>
										<div class="form-group col-md-3">
											<label for="edit-content">ACCION TOMADA</label>
											<select class="form-control" v-model="post_performances_employees.action_taken">
												<option v-for="item in selectOptions.actions_performances_employees" :value="item.id">{{ item.name }}</option>
											</select>
										</div>
										<div class="form-group col-md-12">
											<label for="edit-content">NOTAS</label>
											<textarea class="form-control" v-model="post_performances_employees.notes"></textarea>
										</div>
										<button type="submit" class="btn btn-primary col-md-12">Agregar</button>
									</form>
									<hr>
								</div>
							</div>
							
							
							<div class="col-md-12">
								<table class="table  table-responsive">
									<thead>
										<tr>
											<td>ID</td>
											<td>Motivo</td>
											<td>Fecha Inicio</td>
											<td>Fecha Fin</td>
											<td>Accion Tomada</td>
											<td>Notas</td>
										</tr>
									</thead>
									<tbody>
										<tr v-for="item in performances_employees">
											<td>{{ item.id }}</td>
											<td>{{ item.reason.name }}</td>
											<td>{{ item.date_start }}</td>
											<td>{{ item.date_end }}</td>
											<td>{{ item.action_taken.name }}</td>
											<td>{{ item.notes }}</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>
					<div class="tab-pane" id="5a">
						<div class="row">
							<h3>Colillas</h3>
							<hr>
						</div>
					</div>
				</div>
			</div>
		</template>
		
		<template id="delete-Employees">
			<div>
				<h2>EMPLEADOS - Eliminar</h2>
				<form v-on:submit="deleteEmployee">
					<p>The action cannot be undone.</p>
					<button type="submit" class="btn btn-danger">Eliminar</button>
					<router-link class="btn btn-primary" v-bind:to="{ name: 'Employees-List' }">Cancelar</router-link>
				</form>
			</div>
		</template>
		
		<template id="delete-EmployeesContacts">
			<div>
				<h2>CONTACTOS - Eliminar</h2>
				<form v-on:submit="deleteEmployeeContact">
					<p>The action cannot be undone.</p>
					<button type="submit" class="btn btn-danger">Eliminar</button>
					<router-link class="btn btn-primary" v-bind:to="{ name: 'Employees-List' }">Cancelar</router-link>
				</form>
			</div>
		</template>
		
		<template id="delete-ContractedStaff">
			<div>
				<h2>CONTACTOS - Eliminar</h2>
				<form v-on:submit="deleteContractedStaff">
					<p>The action cannot be undone.</p>
					<button type="submit" class="btn btn-danger">Eliminar</button>
					<router-link class="btn btn-primary" v-bind:to="{ name: 'Employees-List' }">Cancelar</router-link>
				</form>
			</div>
		</template>
		<!-- // ------------ EMPLEADOS FIN -------------------------------------  -->
		
		<!-- // ------------ CLIENTES - INICIO -------------------------------------  -->
		<template id="page-Clients">
			<div>
				<header class="page-header">
					<div class="branding">
						<h1>CLIENTES</h1>
					</div>
				</header>
				<div class="filters row">
					<div class="form-group col-sm-8">
						<label for="search-element">Filtrar / Buscar</label>
						<input v-model="searchKey" class="form-control" id="search-element" required/>
					</div>
					<div class="form-group col-sm-4 text-right">
						<div class="actions">
							<br>
							<router-link class="btn btn-primary" v-bind:to="{ name: 'Clients-Add' }">
								<span class="fa fa-plus"></span>
								Nuevo
							</router-link>
						</div>
					</div>
				</div>
				<table class="table table-responsive">
					<thead>
						<tr>
							<th>ID</th>
							<th>TIPO DE CLIENTE</th>
							<th>TIPO DE IDENTIFICACION</th>
							<th># IDENTIFICACION</th>
							<th>RASON SOCIAL</th>
							<th>NOMBRE COMERCIAL</th>
							<th class="col-sm-2">Actions</th>
						</tr>
					</thead>
					<tbody>
						<tr v-if="posts===null">
							<td colspan="4">Loading...</td>
						</tr>
						<tr v-else v-for="post in filteredposts">
							<td><router-link v-bind:to="{name: 'Clients-View', params: { client_id: post.id }}">{{ post.id }}</router-link></td>
							<td><router-link v-bind:to="{name: 'Clients-View', params: { client_id: post.id }}">{{ post.type.name }}</router-link></td>
							<td><router-link v-bind:to="{name: 'Clients-View', params: { client_id: post.id }}">{{ post.identification_type.name }}</router-link></td>
							<td><router-link v-bind:to="{name: 'Clients-View', params: { client_id: post.id }}">{{ post.identification_number }}</router-link></td>
							<td><router-link v-bind:to="{name: 'Clients-View', params: { client_id: post.id }}">{{ post.social_reason }}</router-link></td>
							<td><router-link v-bind:to="{name: 'Clients-View', params: { client_id: post.id }}">{{ post.tradename }}</router-link></td>
							<td>
							<router-link class="btn btn-warning btn-md" v-bind:to="{name: 'Clients-Info-Edit', params: { client_id: post.id }}"><i class="fa fa-pencil-square-o"></i> </router-link>
							<router-link class="btn btn-danger btn-md" v-bind:to="{name: 'Clients-Delete', params: { client_id: post.id }}"><i class="fa fa-trash"></i> </router-link>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
		</template>
		
		<template id="view-Clients">
			<div>
				<header class="page-header">
					<div class="branding">
						<h1>CLIENTES - {{ post.identification_number }} - {{ post.social_reason }}</h1>
					</div>
				</header>
				
				<div id="exTab1">
					<ul  class="nav nav-pills">
						<li class="active"><a  href="#1a" data-toggle="tab">Infomacion Basica</a></li>
						<li><a href="#2a" data-toggle="tab">Contactos</a></li>
						<li><a href="#3a" data-toggle="tab">Radicados</a></li>
						<li v-if="post.enable_audit == 1"><a href="#4a" data-toggle="tab">Interventores</a></li>
						<li><a href="#5a" data-toggle="tab">Servicios</a></li>
						<li><a href="#6a" data-toggle="tab">Facturas</a></li>
					</ul>
				</div>
				<div class="tab-content clearfix">
					<div class="tab-pane active" id="1a">
						<h3>Infomacion Basica</h3>
						<hr>
						<table class="table  table-responsive">
							<tr>
								<td>ID INTERNO</td>
								<td>{{ post.id }}</td>
							</tr>
							<tr>
								<td>TIPO DE CLIENTE</td>
								<td>
									<table class="table  table-responsive">
										<tr>
											<td>ID INTERNO</td>
											<td>{{ post.type.id }}</td>
										</tr>
										<tr>
											<td>NOMBRE</td>
											<td>{{ post.type.name }}</td>
										</tr>
									</table>
								</td>
							</tr>
							<tr>
								<td>TIPO DE IDENTIFICACION</td>
								<td>
									<table class="table  table-responsive">
										<tr>
											<td>ID INTERNO</td>
											<td>{{ post.identification_type.id }}</td>
										</tr>
										<tr>
											<td>NOMBRE</td>
											<td>{{ post.identification_type.name }}</td>
										</tr>
									</table>
								</td>
							</tr>
							<tr>
								<td># DE IDENTIFICACION</td>
								<td>{{ post.identification_number }}</td>
							</tr>
							<tr>
								<td>RASON SOCIAL</td>
								<td>{{ post.social_reason }}</td>
							</tr>
							<tr>
								<td>NOMBRE COMERCIAL</td>
								<td>{{ post.tradename }}</td>
							</tr>
							<tr>
								<td>TIPO DE SOCIEDAD</td>
								<td>
									<table class="table  table-responsive">
										<tr>
											<td>ID INTERNO</td>
											<td>{{ post.society_type.id }}</td>
										</tr>
										<tr>
											<td>TIPO DE SOCIEDAD</td>
											<td>{{ post.society_type.name }}</td>
										</tr>
									</table>
								</td>
							</tr>
							<tr>
								<td>DEPARTAMENTO</td>
								<td>
									<table class="table  table-responsive">
										<tr>
											<td>ID INTERNO</td>
											<td>{{ post.department.id }}</td>
										</tr>
										<tr>
											<td>TIPO DE SOCIEDAD</td>
											<td>{{ post.department.name }}</td>
										</tr>
									</table>
								</td>
							</tr>
							<tr>
								<td>CIUDAD</td>
								<td>
									<table class="table  table-responsive">
										<tr>
											<td>ID INTERNO</td>
											<td>{{ post.city.id }}</td>
										</tr>
										<tr>
											<td>TIPO DE SOCIEDAD</td>
											<td>{{ post.city.name }}</td>
										</tr>
									</table>
								</td>
							</tr>
							<tr>
								<td>DIRECCION DETALLADA</td>
								<td>{{ post.address }}</td>
							</tr>
							<tr>
								<td>DIRECCION NORMALIZADA</td>
								<td>{{ post.geo_address }}</td>
							</tr>
							<tr>
								<td>REPRESENTANTE LEGAL</td>
								<td>
									<table class="table  table-responsive">
										<tr>
											<td>NOMBRE COMPLETO</td>
											<td>{{ post.legal_representative.first_name }} {{ post.legal_representative.second_name }} {{ post.legal_representative.surname }} {{ post.legal_representative.second_surname }}</td>
										</tr>
										<tr>
											<td>TELEFONO FIJO</td>
											<td>{{ post.legal_representative.phone }}</td>
										</tr>
										<tr>
											<td>TELEFONO MOVIL</td>
											<td>{{ post.legal_representative.phone_mobile }}</td>
										</tr>
										<tr>
											<td>CORREO ELECTRONICO</td>
											<td>{{ post.legal_representative.mail }}</td>
										</tr>
									</table>
								</td>
							</tr>
							<tr>
								<td>CONTACTO PRINCIPAL</td>
								<td>
									<table class="table  table-responsive">
										<tr>
											<td>NOMBRE COMPLETO</td>
											<td>{{ post.contact_principal.first_name }} {{ post.contact_principal.second_name }} {{ post.contact_principal.surname }} {{ post.contact_principal.second_surname }}</td>
										</tr>
										<tr>
											<td>TELEFONO FIJO</td>
											<td>{{ post.contact_principal.phone }}</td>
										</tr>
										<tr>
											<td>TELEFONO MOVIL</td>
											<td>{{ post.contact_principal.phone_mobile }}</td>
										</tr>
										<tr>
											<td>CORREO ELECTRONICO</td>
											<td>{{ post.contact_principal.mail }}</td>
										</tr>
									</table>
								</td>
							</tr>
							<tr>
								<td>INTERVENTORIA HABILITADA</td>
								<td v-if="post.enable_audit == 1">HABILITADA</td>
								<td v-if="post.enable_audit == 0">NO HABILITADA</td>
							</tr>
						</table>
					</div>
					<div class="tab-pane " id="2a">	
						<div class="row">
							<h3>Contactos</h3>
							<hr>
							<div class="col-md-12">
								<table class="table  table-responsive">
									<thead>
										<tr>
											<td>ID</td>
											<td>Nombre Completo</td>
											<td>Parentesco</td>
										</tr>
									</thead>
									<tbody>
										<tr v-for="item in crew_clients">
											<td>{{ item.id }}</td>
											<td>{{ item.contact.first_name }} {{ item.contact.second_name }} {{ item.contact.surname }} {{ item.contact.second_surname }}</td>
											<td>{{ item.type_contact.name }}</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>
					<div class="tab-pane " id="3a">	
						<div class="row">
							<h3>Radicados</h3>
							<hr>
							<div class="col-md-12">
								<table class="table  table-responsive">
									<thead>
										<tr>
											<td>ID</td>
											<td>CONSECUTIVO</td>
											<td>NOMBRE</td>
											<td>FECHA DE INICIO</td>
											<td>FECHA DE TERMINO</td>
										</tr>
									</thead>
									<tbody>
										<tr v-for="item in redicated_clients">
											<td>{{ item.id }}</td>
											<td>{{ item.consecutive }}</td>
											<td>{{ item.name }}</td>
											<td>{{ item.date_start }}</td>
											<td>{{ item.date_end }}</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>
					<div class="tab-pane " id="4a">	
						<div class="row">
							<h3>Interventores</h3>
							<hr>
							<div class="col-md-12">
								<table class="table  table-responsive">
									<thead>
										<tr>
											<td>ID</td>
											<td># IDENTIFICACION</td>
											<td>NOMBRE COMPLETO</td>
										</tr>
									</thead>
									<tbody>
										<tr v-for="item in auditors_clients">
											<td>{{ item.id }}</td>
											<td>{{ item.contact.identification_number }}</td>
											<td>{{ item.contact.first_name }} {{ item.contact.second_name }} {{ item.contact.surname }} {{ item.contact.second_surname }}</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>
					<div class="tab-pane " id="5a">	
						<div class="row">
							<h3>Servicios</h3>
							<hr>
							<div class="col-md-12">
								<table class="table  table-responsive">
									<thead>
										<tr>
											<td>ID</td>
											<td>NOMBRE DEL SERVICIO</td>
											<td>CANTIDAD</td>
											<td>PRECIO</td>
											<td>FECHA INICIO</td>
											<td>FECHA TERMINO</td>
											<td>ATRIBUTOS</td>
										</tr>
									</thead>
									<tbody>
										<tr v-for="item in services_clients">
											<td>{{ item.id }}</td>
											<td>{{ item.service.name }}</td>
											<td>{{ item.quantity }}</td>
											<td>{{ item.service.price }}</td>
											<td>{{ item.date_start }}</td>
											<td>{{ item.date_end }}</td>
											<td>
												<table class="table  table-responsive">
													<tr>
														<td>ID</td>
														<td>ATRIBUTO</td>
														<td>CANTIDAD</td>
														<td>PRECIO</td>
													</tr>
													<tr v-for="attribute in item.attributes_services_clients">
														<td>{{ attribute.id }}</td>
														<td>{{ attribute.attribute.name }}</td>
														<td>{{ attribute.quantity }}</td>
														<td>{{ attribute.attribute.price }}</td>
													</tr>
												</table>
											</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>
					<div class="tab-pane " id="6a">
						<div class="row">
							<h3>Facturas</h3>
							<hr>
						</div>
					</div>
					
				</div>
				<br/>
				<span class="fa fa-arrow-left" aria-hidden="true"></span>
				<router-link v-bind:to="{ name: 'Clients-List' }">Volver a la lista</router-link>
			</div>		  
		</template>
		
		<template id="add-Clients">
			<div>
				<h2>CLIENTES - Crear</h2>
				<form v-on:submit="createClient">
					<div class="form-group col-md-4">
						<label for="add-content">TIPO DE CLIENTE</label>
						<select class="form-control" v-model="post.type">
							<option v-for="item in selectOptions.types_clients" :value="item.id">{{ item.name }}</option>
						</select>
					</div>
					<div class="form-group col-md-4">
						<label for="add-content">TIPO DE IDENTIFICACION</label>
						<select class="form-control" v-model="post.identification_type">
							<option v-for="item in selectOptions.types_identifications" :value="item.id">{{ item.name }}</option>
						</select>
					</div>
					<div class="form-group col-md-4">
						<label for="add-content"># DE IDENTIFICACION</label>
						<input class="form-control" type="text" v-model="post.identification_number" />
					</div>
					<div class="form-group col-md-4">
						<label for="add-content">RASON SOCIAL</label>
						<input class="form-control" type="text" v-model="post.social_reason" />
					</div>
					<div class="form-group col-md-4">
						<label for="add-content">NOMBRE COMERCIAL</label>
						<input class="form-control" type="text" v-model="post.tradename" />
					</div>
					<div class="form-group col-md-4">
						<label for="add-content">TIPO DE SOCIEDAD</label>
						<select class="form-control" v-model="post.society_type">
							<option v-for="item in selectOptions.types_societys" :value="item.id">{{ item.name }}</option>
						</select>
					</div>
					<div class="form-group col-md-6">
						<label for="add-content">DEPARTAMENTO</label>
						<select class="form-control" v-model="post.department" @change="loadCitys">
							<option v-for="item in selectOptions.geo_departments" :value="item.id">{{ item.name }}</option>
						</select>
					</div>
					<div class="form-group col-md-6">
						<label for="add-content">CIUDAD</label>
						<select class="form-control" v-model="post.city">
							<option v-for="item in selectOptions.geo_citys" :value="item.id">{{ item.name }}</option>
						</select>
					</div>
					<div class="form-group col-md-8">
						<label for="add-content">DIRECCION DETALLADA</label>
						<input class="form-control" type="text" v-model="post.address" />
					</div>
					<div class="form-group col-md-4">
						<label for="add-content">DIRECCION NORMALIZADA</label>
						<input class="form-control" type="text" v-model="post.geo_address" />
					</div>
					<div class="form-group col-md-4">
						<label for="add-content">REPRESENTANTE LEGAL</label>
						<select class="form-control" v-model="post.legal_representative">
							<option v-for="item in selectOptions.contacts" :value="item.id">{{ item.first_name }} {{ item.second_name }} {{ item.surname }} {{ item.second_surname }} </option>
						</select>
					</div>
					<div class="form-group col-md-4">
						<label for="add-content">CONTACTO PRINCIPAL</label>
						<select class="form-control" v-model="post.contact_principal">
							<option v-for="item in selectOptions.contacts" :value="item.id">{{ item.first_name }} {{ item.second_name }} {{ item.surname }} {{ item.second_surname }} </option>
						</select>
					</div>
					<div class="form-group col-md-4">
						<label for="add-content">HABILITAR INTERVENTORIA</label>
						<select class="form-control" v-model="post.enable_audit">
							<option value="0">NO HABILITADA</option>
							<option value="1">HABILITADA</option>
						</select>
					</div>
					<button type="submit" class="btn btn-primary">Crear</button>
					<router-link class="btn btn-primary" v-bind:to="{ name: 'Clients-List' }">Regresar</router-link>
				</form>
			</div>
		</template>
		
		<template id="edit-Clients-Info">
			<div>
				<header class="page-header">
					<div class="branding">
						<h1>INFORMACION BÁSICA - {{ post.identification_number }} - {{ post.social_reason }}</h1>
					</div>
				</header>
				
				<div id="exTab1">
					<ul  class="nav nav-pills">
						<router-link tag="li" class="active" v-bind:to="{name: 'Clients-Info-Edit', params: { client_id: post.id }}"><a><i class="fa fa-plus"></i> Infomacion Basica</a></router-link>
						<router-link tag="li" class="" v-bind:to="{name: 'Clients-Contacts-Edit', params: { client_id: post.id }}"><a><i class="fa fa-plus"></i> Contactos</a></router-link>
						<router-link tag="li" class="" v-bind:to="{name: 'Clients-Contracts-Edit', params: { client_id: post.id }}"><a><i class="fa fa-plus"></i> Radicados</a></router-link>
						<router-link v-if="post.enable_audit == 1" tag="li" class="" v-bind:to="{name: 'Clients-Auditors-Edit', params: { client_id: post.id }}"><a><i class="fa fa-plus"></i> Interventores</a></router-link>
						<router-link tag="li" class="" v-bind:to="{name: 'Clients-Accounts-Edit', params: { client_id: post.id }}"><a><i class="fa fa-plus"></i> Solicitudes</a></router-link>
						<router-link tag="li" class="" v-bind:to="{name: 'Clients-Invoices-Edit', params: { client_id: post.id }}"><a><i class="fa fa-plus"></i> Facturas</a></router-link>
						<router-link tag="li" class="" v-bind:to="{name: 'Clients-Quotations-Edit', params: { client_id: post.id }}"><a><i class="fa fa-plus"></i> Propuestas Aprobadas</a></router-link>						
						<router-link tag="li" class="" v-bind:to="{name: 'Clients-ContractsServices-Edit', params: { client_id: post.id }}"><a><i class="fa fa-plus"></i> Contratos</a></router-link>
					</ul>
				</div>
				<div class="tab-content clearfix">
					<div class="tab-pane active" id="1a">
						<h3>Infomacion Basica</h3>
						<hr>
						<form v-on:submit="updateClient">
							<div class="form-group col-sm-4">
								<label for="add-content">TIPO DE CLIENTE</label>
								<select class="form-control" v-model="post.type">
									<option v-for="item in selectOptions.types_clients" :value="item.id">{{ item.name }}</option>
								</select>
							</div>
							<div class="form-group col-sm-4">
								<label for="add-content">TIPO DE IDENTIFICACION</label>
								<select class="form-control" v-model="post.identification_type">
									<option v-for="item in selectOptions.types_identifications" :value="item.id">{{ item.name }}</option>
								</select>
							</div>
							<div class="form-group col-sm-4">
								<label for="add-content"># DE IDENTIFICACION</label>
								<input class="form-control" type="text" v-model="post.identification_number" />
							</div>
							<div class="form-group col-sm-4">
								<label for="add-content">RASON SOCIAL</label>
								<input class="form-control" type="text" v-model="post.social_reason" />
							</div>
							<div class="form-group col-sm-4">
								<label for="add-content">NOMBRE COMERCIAL</label>
								<input class="form-control" type="text" v-model="post.tradename" />
							</div>
							<div class="form-group col-sm-4">
								<label for="add-content">TIPO DE SOCIEDAD</label>
								<select class="form-control" v-model="post.society_type">
									<option v-for="item in selectOptions.types_societys" :value="item.id">{{ item.name }}</option>
								</select>
							</div>
							<div class="form-group col-sm-6">
								<label for="add-content">DEPARTAMENTO</label>
								<select class="form-control" v-model="post.department" @change="loadCitys">
									<option v-for="item in selectOptions.geo_departments" :value="item.id">{{ item.name }}</option>
								</select>
							</div>
							<div class="form-group col-sm-6">
								<label for="add-content">CIUDAD</label>
								<select class="form-control" v-model="post.city">
									<option v-for="item in selectOptions.geo_citys" :value="item.id">{{ item.name }}</option>
								</select>
							</div>
							<div class="form-group col-sm-8">
								<label for="add-content">DIRECCION DETALLADA</label>
								<input class="form-control" type="text" v-model="post.address" />
							</div>
							<div class="form-group col-sm-4">
								<label for="add-content">DIRECCION NORMALIZADA</label>
								<input class="form-control" type="text" v-model="post.geo_address" />
							</div>
							<div class="form-group col-sm-4">
								<label for="add-content">REPRESENTANTE LEGAL</label>
								<select class="form-control" v-model="post.legal_representative">
									<option v-for="item in selectOptions.contacts" :value="item.id">{{ item.first_name }} {{ item.second_name }} {{ item.surname }} {{ item.second_surname }} </option>
								</select>
							</div>
							<div class="form-group col-sm-4">
								<label for="add-content">CONTACTO PRINCIPAL</label>
								<select class="form-control" v-model="post.contact_principal">
									<option v-for="item in selectOptions.contacts" :value="item.id">{{ item.first_name }} {{ item.second_name }} {{ item.surname }} {{ item.second_surname }} </option>
								</select>
							</div>
							<div class="form-group col-sm-4">
								<label for="add-content">HABILITAR INTERVENTORIA</label>
								<select class="form-control" v-model="post.enable_audit">
									<option value="0">NO HABILITADA</option>
									<option value="1">HABILITADA</option>
								</select>
							</div>
							<button type="submit" class="btn btn-primary">Guardar</button>
							<router-link class="btn btn-primary" v-bind:to="{ name: 'Clients-List' }">Regresar</router-link>
						</form>
					</div>
				</div>
				<hr>
				<router-link v-bind:to="{ name: 'Clients-List' }">Volver a la lista</router-link>
			</div>
		</template>
		
		<template id="edit-Clients-Contacts">
			<div>
				<header class="page-header">
					<div class="branding">
						<h1>CONTACTOS - {{ post.identification_number }} - {{ post.social_reason }}</h1>
					</div>
				</header>
				
				<div id="exTab1">
					<ul  class="nav nav-pills">
						<router-link tag="li" class="" v-bind:to="{name: 'Clients-Info-Edit', params: { client_id: post.id }}"><a><i class="fa fa-plus"></i> Infomacion Basica</a></router-link>
						<router-link tag="li" class="active" v-bind:to="{name: 'Clients-Contacts-Edit', params: { client_id: post.id }}"><a><i class="fa fa-plus"></i> Contactos</a></router-link>
						<router-link tag="li" class="" v-bind:to="{name: 'Clients-Contracts-Edit', params: { client_id: post.id }}"><a><i class="fa fa-plus"></i> Radicados</a></router-link>
						<router-link v-if="post.enable_audit == 1" tag="li" class="" v-bind:to="{name: 'Clients-Auditors-Edit', params: { client_id: post.id }}"><a><i class="fa fa-plus"></i> Interventores</a></router-link>
						<router-link tag="li" class="" v-bind:to="{name: 'Clients-Accounts-Edit', params: { client_id: post.id }}"><a><i class="fa fa-plus"></i> Solicitudes</a></router-link>
						<router-link tag="li" class="" v-bind:to="{name: 'Clients-Invoices-Edit', params: { client_id: post.id }}"><a><i class="fa fa-plus"></i> Facturas</a></router-link>
						<router-link tag="li" class="" v-bind:to="{name: 'Clients-Quotations-Edit', params: { client_id: post.id }}"><a><i class="fa fa-plus"></i> Propuestas Aprobadas</a></router-link>
						<router-link tag="li" class="" v-bind:to="{name: 'Clients-ContractsServices-Edit', params: { client_id: post.id }}"><a><i class="fa fa-plus"></i> Contratos</a></router-link>
					</ul>
				</div>
				<div class="tab-content clearfix">
					<div class="tab-pane active">	
						<div class="row">
							<h3>Contactos</h3>
							<hr>
							<div class="row">
								<div class="form-group col-sm-12 text-right">
									<div class="actions">
										<button class="btn btn-primary" onclick="javascript: $('#includeContactClient-Fast').show();">
											<span class="fa fa-plus"></span>
											Agregar
										</button>
									</div>
								</div>
								<div class="col-md-12" id="includeContactClient-Fast">
									<form class="row" v-on:submit="includeContactClient"> 
										<div class="form-group col-md-6">
											<label for="add-content">CONTACTO</label>
											<select class="form-control" v-model="post_crew_clients.contact">
												<option v-for="item in selectOptions.contacts" :value="item.id">{{ item.identification_number }} - {{ item.first_name }} {{ item.second_name }} {{ item.surname }} {{ item.second_surname }}</option>
											</select>
										</div>
										<div class="form-group col-md-6">
											<label for="edit-content">PARENTESCO</label>
											<select class="form-control" v-model="post_crew_clients.type_contact">
												<option v-for="item in selectOptions.types_contacts" :value="item.id">{{ item.name }}</option>
											</select>
										</div>
										<button type="submit" class="btn btn-primary col-md-12">Agregar</button>
									</form>
									<hr>
								</div>
							</div>
							<div class="col-md-12">
								<table class="table  table-responsive">
									<thead>
										<tr>
											<td>ID</td>
											<td>Nombre Completo</td>
											<td>Parentesco</td>
											<td></td>
										</tr>
									</thead>
									<tbody>
										<tr v-for="item in crew_clients">
											<td>{{ item.id }}</td>
											<td>{{ item.contact.first_name }} {{ item.contact.second_name }} {{ item.contact.surname }} {{ item.contact.second_surname }}</td>
											<td>{{ item.type_contact.name }}</td>
											<td>
												<router-link target="_new" class="btn btn-success btn-md" target='_blank' v-bind:to="{name: 'Contacts-View', params: { contact_id: item.contact.id }}"><i class="fa fa-eye"></i> </router-link>
												<router-link class="btn btn-danger btn-md" v-bind:to="{name: 'ClientsContacts-Delete', params: { client_id: post.id, client_contact_id: item.id }}"><i class="fa fa-trash"></i> </router-link>
												
											</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>
					
				</div>
				<hr>
				<router-link v-bind:to="{ name: 'Clients-List' }">Volver a la lista</router-link>
			</div>
		</template>
		
		<template id="edit-Clients-Contracts">
			<div>
				<header class="page-header">
					<div class="branding">
						<h1>CONTRATOS - {{ post.identification_number }} - {{ post.social_reason }}</h1>
					</div>
				</header>
				
				<div id="exTab1">
					<ul  class="nav nav-pills">
						<router-link tag="li" class="" v-bind:to="{name: 'Clients-Info-Edit', params: { client_id: post.id }}"><a><i class="fa fa-plus"></i> Infomacion Basica</a></router-link>
						<router-link tag="li" class="" v-bind:to="{name: 'Clients-Contacts-Edit', params: { client_id: post.id }}"><a><i class="fa fa-plus"></i> Contactos</a></router-link>
						<router-link tag="li" class="active" v-bind:to="{name: 'Clients-Contracts-Edit', params: { client_id: post.id }}"><a><i class="fa fa-plus"></i> Radicados</a></router-link>
						<router-link v-if="post.enable_audit == 1" tag="li" class="" v-bind:to="{name: 'Clients-Auditors-Edit', params: { client_id: post.id }}"><a><i class="fa fa-plus"></i> Interventores</a></router-link>
						<router-link tag="li" class="" v-bind:to="{name: 'Clients-Accounts-Edit', params: { client_id: post.id }}"><a><i class="fa fa-plus"></i> Solicitudes</a></router-link>
						<router-link tag="li" class="" v-bind:to="{name: 'Clients-Invoices-Edit', params: { client_id: post.id }}"><a><i class="fa fa-plus"></i> Facturas</a></router-link>
						<router-link tag="li" class="" v-bind:to="{name: 'Clients-Quotations-Edit', params: { client_id: post.id }}"><a><i class="fa fa-plus"></i> Propuestas Aprobadas</a></router-link>
						<router-link tag="li" class="" v-bind:to="{name: 'Clients-ContractsServices-Edit', params: { client_id: post.id }}"><a><i class="fa fa-plus"></i> Contratos</a></router-link>
					</ul>
				</div>
				<div class="tab-content clearfix">
					<div class="tab-pane active" id="3a">	
						<div class="row">
							<h3>Radicados</h3>
							<hr>
							<div class="row">
								<div class="form-group col-sm-12 text-right">
									<div class="actions">
										<button class="btn btn-primary" onclick="javascript: $('#includeRedicatedClient-Fast').show();">
											<span class="fa fa-plus"></span>
											Agregar
										</button>
									</div>
								</div>
								<div class="col-md-12" id="includeRedicatedClient-Fast">
									<form class="row" v-on:submit="includeRedicatedClient">
										<div class="form-group col-md-3">
											<label for="add-content">CONSECUTIVO</label>
											<input class="form-control" type="text" v-model="post_redicated_clients.consecutive" />
										</div>
										<div class="form-group col-md-3">
											<label for="add-content">NOMBRE</label>
											<input class="form-control" type="text" v-model="post_redicated_clients.name" />
										</div>
										<div class="form-group col-md-3">
											<label for="add-content">OBJECTO DEL CONTRATO</label>
											<textarea class="form-control" type="text" v-model="post_redicated_clients.object"></textarea>
										</div>
										<div class="form-group col-md-3">
											<label for="add-content">DESCRIPCION DEL SERVICIO</label>
											<textarea class="form-control" type="text" v-model="post_redicated_clients.description_service"></textarea>
										</div>
										<div class="form-group col-md-3">
											<label for="add-content">FECHA INICIO</label>
											<input class="form-control" type="date" v-model="post_redicated_clients.date_start" />
										</div>
										<div class="form-group col-md-3">
											<label for="add-content">FECHA FIN</label>
											<input class="form-control" type="date" v-model="post_redicated_clients.date_end" />
										</div>
										<div class="form-group col-md-3">
											<label for="add-content">NOTAS ADICCIONALES</label>
											<textarea class="form-control" type="text" v-model="post_redicated_clients.additional_notes"></textarea>
										</div>
										
										<button type="submit" class="btn btn-primary col-md-12">Agregar</button>
									</form>
									<hr>
								</div>
							</div>
							<div class="col-md-12">
								<table class="table  table-responsive">
									<thead>
										<tr>
											<th>ID</th>
											<th>CONSECUTIVO</th>
											<th>NOMBRE</th>
											<th>OBJECTO DEL CONTRATO</th>
											<th>DESCRIPCION DEL SERVICIO</th>
											<th>FECHA DE INICIO</th>
											<th>FECHA DE TERMINO</th>
											<th>NOTAS ADICCIONALES</th>
											<th></th>
										</tr>
									</thead>
									<tbody>
										<tr v-for="item in redicated_clients">
											<td>{{ item.id }}</td>
											<td>{{ item.consecutive }}</td>
											<td>{{ item.name }}</td>
											<td>{{ item.object }}</td>
											<td>{{ item.description_service }}</td>
											<td>{{ item.date_start }}</td>
											<td>{{ item.date_end }}</td>
											<td>{{ item.additional_notes }}</td>
											<td><router-link class="btn btn-danger btn-md" v-bind:to="{name: 'RedicatedClients-Delete', params: { client_id: post.id, redicated_client_id: item.id }}"><i class="fa fa-trash"></i> </router-link></td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>
					
				</div>
				<hr>
				<router-link v-bind:to="{ name: 'Clients-List' }">Volver a la lista</router-link>
			</div>
		</template>
		
		<template id="edit-Clients-Auditors">
			<div>
				<header class="page-header">
					<div class="branding">
						<h1>Interventores - {{ post.identification_number }} - {{ post.social_reason }}</h1>
					</div>
				</header>
				
				<div id="exTab1">
					<ul  class="nav nav-pills">
						<router-link tag="li" class="" v-bind:to="{name: 'Clients-Info-Edit', params: { client_id: post.id }}"><a><i class="fa fa-plus"></i> Infomacion Basica</a></router-link>
						<router-link tag="li" class="" v-bind:to="{name: 'Clients-Contacts-Edit', params: { client_id: post.id }}"><a><i class="fa fa-plus"></i> Contactos</a></router-link>
						<router-link tag="li" class="" v-bind:to="{name: 'Clients-Contracts-Edit', params: { client_id: post.id }}"><a><i class="fa fa-plus"></i> Radicados</a></router-link>
						<router-link v-if="post.enable_audit == 1" tag="li" class="active" v-bind:to="{name: 'Clients-Auditors-Edit', params: { client_id: post.id }}"><a><i class="fa fa-plus"></i> Interventores</a></router-link>
						<router-link tag="li" class="" v-bind:to="{name: 'Clients-Accounts-Edit', params: { client_id: post.id }}"><a><i class="fa fa-plus"></i> Solicitudes</a></router-link>
						<router-link tag="li" class="" v-bind:to="{name: 'Clients-Invoices-Edit', params: { client_id: post.id }}"><a><i class="fa fa-plus"></i> Facturas</a></router-link>
						<router-link tag="li" class="" v-bind:to="{name: 'Clients-Quotations-Edit', params: { client_id: post.id }}"><a><i class="fa fa-plus"></i> Propuestas Aprobadas</a></router-link>
						<router-link tag="li" class="" v-bind:to="{name: 'Clients-ContractsServices-Edit', params: { client_id: post.id }}"><a><i class="fa fa-plus"></i> Contratos</a></router-link>
					</ul>
				</div>
				<div class="tab-content clearfix">
					<div class="tab-pane active" id="4a">	
						<div class="row">
							<h3>Interventores</h3>
							<hr>
							<div class="row">
								<div class="form-group col-sm-12 text-right">
									<div class="actions">
										<button class="btn btn-primary" onclick="javascript: $('#includeAuditorClient-Fast').show();">
											<span class="fa fa-plus"></span>
											Agregar
										</button>
									</div>
								</div>
								<div class="col-md-12" id="includeAuditorClient-Fast">
									<form class="row" v-on:submit="includeAuditorClient"> 
										<div class="form-group col-md-12">
											<label for="add-content">CONTACTO</label>
											<select class="form-control" v-model="post_auditors_clients.contact">
												<option v-for="item in selectOptions.contacts" :value="item.id">{{ item.identification_number }} - {{ item.first_name }} {{ item.second_name }} {{ item.surname }} {{ item.second_surname }}</option>
											</select>
										</div>
										<button type="submit" class="btn btn-primary col-md-12">Agregar</button>
									</form>
									<hr>
								</div>
							</div>
							
							<div class="col-md-12">
								<table class="table  table-responsive">
									<thead>
										<tr>
											<td>ID</td>
											<td># IDENTIFICACION</td>
											<td>NOMBRE COMPLETO</td>
											<td></td>
										</tr>
									</thead>
									<tbody>
										<tr v-for="item in auditors_clients">
											<td>{{ item.id }}</td>
											<td>{{ item.contact.identification_number }}</td>
											<td>{{ item.contact.first_name }} {{ item.contact.second_name }} {{ item.contact.surname }} {{ item.contact.second_surname }}</td>
											<td>
												<router-link class="btn btn-success btn-md" target="_new" v-bind:to="{name: 'Contacts-View', params: { contact_id: item.contact.id }}"><i class="fa fa-eye"></i> </router-link>
												<router-link class="btn btn-danger btn-md" v-bind:to="{name: 'ClientsAuditors-Delete', params: { client_id: post.id, auditor_client_id: item.id }}"><i class="fa fa-trash"></i> </router-link>
											</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>
					
				</div>
				<hr>
				<router-link v-bind:to="{ name: 'Clients-List' }">Volver a la lista</router-link>
			</div>
		</template>
		
		<template id="edit-Clients-Accounts">
			<div>
				<header class="page-header">
					<div class="branding">	
						<h1>SOLICITUDES - {{ post.identification_number }} - {{ post.social_reason }}</h1>
					</div>
				</header>
				
				<div id="exTab1">
					<ul  class="nav nav-pills">
						<router-link tag="li" class="" v-bind:to="{name: 'Clients-Info-Edit', params: { client_id: post.id }}"><a><i class="fa fa-plus"></i> Infomacion Basica</a></router-link>
						<router-link tag="li" class="" v-bind:to="{name: 'Clients-Contacts-Edit', params: { client_id: post.id }}"><a><i class="fa fa-plus"></i> Contactos</a></router-link>
						<router-link tag="li" class="" v-bind:to="{name: 'Clients-Contracts-Edit', params: { client_id: post.id }}"><a><i class="fa fa-plus"></i> Radicados</a></router-link>
						<router-link v-if="post.enable_audit == 1" tag="li" class="" v-bind:to="{name: 'Clients-Auditors-Edit', params: { client_id: post.id }}"><a><i class="fa fa-plus"></i> Interventores</a></router-link>
						<router-link tag="li" class="active" v-bind:to="{name: 'Clients-Accounts-Edit', params: { client_id: post.id }}"><a><i class="fa fa-plus"></i> Solicitudes</a></router-link>
						<router-link tag="li" class="" v-bind:to="{name: 'Clients-Invoices-Edit', params: { client_id: post.id }}"><a><i class="fa fa-plus"></i> Facturas</a></router-link>
						<router-link tag="li" class="" v-bind:to="{name: 'Clients-Quotations-Edit', params: { client_id: post.id }}"><a><i class="fa fa-plus"></i> Propuestas Aprobadas</a></router-link>
						<router-link tag="li" class="" v-bind:to="{name: 'Clients-ContractsServices-Edit', params: { client_id: post.id }}"><a><i class="fa fa-plus"></i> Contratos</a></router-link>
					</ul>
				</div>
				<div class="tab-content clearfix">
					<div class="tab-pane active" id="5a">	
						<div class="row">
							<h3>Solicitudes</h3>
							<hr>
							<div class="row">
								<div class="form-group col-sm-12 text-right">
									<div class="actions">
										<button class="btn btn-primary" onclick="javascript: $('#includeAccountClient-Fast').show();">
											<span class="fa fa-plus"></span>
											Nueva 
										</button>
									</div>
								</div>
								<div class="col-md-12" id="includeAccountClient-Fast">
									<form class="row" v-on:submit="createNewAccount"> 
										<div class="form-group col-md-6">
											<label for="add-content">NOMBRE DEL PROYECTO</label>
											<input class="form-control" type="text" v-model="post_account.name" />
										</div>
										<div class="form-group col-md-6">
											<label for="add-content">PERSONA DE CONTACTO</label>
											<select class="form-control" v-model="post_account.contact">
												<option v-for="item in selectOptions.crew_clients" :value="item.contact.id">{{ item.contact.identification_number }} - {{ item.contact.first_name }} {{ item.contact.second_name }} {{ item.contact.surname }} {{ item.contact.second_surname }} - {{ item.type_contact.name }}</option>
											</select>
										</div>
										<div class="form-group col-md-6">
											<label for="add-content">UBICACION DEL PROYECTO</label>
											<input class="form-control" type="text" v-model="post_account.address" />
										</div>
										<div class="form-group col-md-6">
											<label for="add-content">DIRECCION DE FACTURACION</label>
											<input class="form-control" type="text" v-model="post_account.address_invoices" />
										</div>
										<div class="form-group col-md-12">
											<label for="add-content">OBSERVACIONES</label>
											<textarea class="form-control" v-model="post_account.observations"></textarea>
										</div>
										<button type="submit" class="btn btn-primary col-md-12">Agregar</button>
									</form>
									<hr>
								</div>
							</div>
							
							<hr>
							<div class="panel-group" id="accordion">
								<div class="panel panel-default" v-for="account in accounts_clients">
									<div class="panel-heading">
										<h4 class="panel-title">
											<a data-toggle="collapse" data-parent="#accordion" v-bind:href="'#collapse' + account.id"> 
												 {{ zfill(account.id, 11) }} - {{ account.name }} 
											</a>
											{{ account.nsme }} 
										</h4>
									</div>
									<div v-bind:id="'collapse' + account.id" class="panel-collapse collapse in_">
										<div class="panel-body">
											<div class="col-md-3">
												<router-link class="btn btn-danger btn-md" v-bind:to="{name: 'Clients-Accounts-Delete', params: { client_id: account.client, account_client_id: account.id }}">
													<i class="fa fa-trash text-write"></i>
													Eliminar esta solicitud
												</router-link>
											</div>
											<div class="col-md-3">
												
												<router-link class="btn btn-success btn-md" v-bind:to="{name: 'ServicesClients-Add', params: { client_id: account.client, account_client_id: account.id }}">
													<i class="fa fa-plus"></i>
													Agregar Servicio
												</router-link>
											</div>
											<div class="col-md-3">
												<router-link class="btn btn-success btn-md" v-bind:to="{name: 'AttributesServicesClients-Add', params: { client_id: account.client, account_client_id: account.id }}">
													<i class="fa fa-plus"></i>
													Agregar Otro
												</router-link>
											</div>
											<div class="col-md-3">
												<div class="dropup">
													<button class="btn btn-default btn-md dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
														Generar Propuesta
														<span class="caret"></span>
													</button>
													<ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
														<li>
															<a @click="generateQuotation(account, 30)">
																<i class="fa fa-plus"></i>
																30 Días
															</a>
														</li>
														<li>
															<a @click="generateQuotation(account, 60)">
																<i class="fa fa-plus"></i>
																60 Días
															</a>
														</li>
														<li>
															<a @click="generateQuotation(account, 90)">
																<i class="fa fa-plus"></i>
																90 Días
															</a>
														</li>
														<li role="separator" class="divider"></li>
														<!-- <li><a href="#">Separated link</a></li> -->
													</ul>
												</div>											
											</div>											
											
											<hr>
											<div class="row">
												<div class="col-md-12">
													<form class="row" v-on:submit="updateAccountClient(account)">
														<input class="form-control" type="hidden" v-model="account.id" />
														<input class="form-control" type="hidden" v-model="account.client" />
														<div class="form-group col-md-6">
															<label for="add-content">NOMBRE DEL PROYECTO</label>
															<input class="form-control" type="text" v-model="account.name" />
														</div>
														<div class="form-group col-md-6">
															<label for="add-content">PERSONA DE CONTACTO</label>
															<select class="form-control" v-model="account.contact">
																<option v-for="item in selectOptions.crew_clients" :value="item.contact.id">{{ item.contact.identification_number }} - {{ item.contact.first_name }} {{ item.contact.second_name }} {{ item.contact.surname }} {{ item.contact.second_surname }} - {{ item.type_contact.name }}</option>
															</select>
														</div>
														<div class="form-group col-md-6">
															<label for="add-content">UBICACION DEL PROYECTO</label>
															<input class="form-control" type="text" v-model="account.address" />
														</div>
														<div class="form-group col-md-6">
															<label for="add-content">DIRECCION DE FACTURACION</label>
															<input class="form-control" type="text" v-model="account.address_invoices" />
														</div>
														<div class="form-group col-md-12">
															<label for="add-content">OBSERVACIONES</label>
															<textarea class="form-control" v-model="account.observations"></textarea>
														</div>
														<button type="submit" class="btn btn-success col-md-12">Guardar</button>
													</form>
													<hr>
												</div>
											</div>
											
											<h3>Servicios</h3>
											<hr>
											<table class="table table-responsive">
												<thead>
													<tr>
														<th>ID</th>
														<th>NOMBRE</th>
														<th>DESCRIPCION</th>
														<th>NOTAS DEL SERVICIO</th>
														<th>TIPO DE MEDIDA</th>
														<th>CANTIDAD</th>
														<th>FRECUENCIA</th>
														<th>PRECIO</th>
														<th>SUBTOTAL</th>
														<th>IVA</th>
														<th>IVA TOTAL</th>
														<th>TOTAL</th>
														<th></th>
													</tr>
												</thead>
												<tr v-for="item in account.services_clients">
													<td>{{ item.id }}</td>
													<td>{{ item.service.name }}</td>
													<td>{{ item.service.description }}</td>
													<td>{{ item.description }}</td>
													<td>{{ item.service.type_medition.code }}</td>
													<td>{{ item.quantity }}</td>
													<td>{{ item.repeat.code }} - {{ item.repeat.name }}</td>
													<td>{{ formatMoney(item.service.price) }}</td>
													<td>{{ formatMoney((item.service.price * item.quantity)) }}</td>
													<td>{{ item.iva }}</td>
													<td>{{ ((item.service.price * item.quantity) * (item.iva / 100)) }}</td>
													<td>{{ formatMoney((item.service.price * item.quantity) + ((item.service.price * item.quantity) * (item.iva / 100))) }}</td>
													<td>
														<router-link class="btn btn-danger btn-md" v-bind:to="{name: 'ServicesClients-Delete', params: { client_id: post.id, client_service_id: item.id, account_client_id: account.id }}">
															<i class="fa fa-trash"></i>
														</router-link>
													</td>
												</tr>
											</table>
											<hr>
											<h3>Otros</h3>
											<table class="table table-responsive">
												<tr>
													<th>ID</th>
													<th>NOMBRE</th>
													<th>CANTIDAD</th>
													<th>PRECIO</th>
													<th>SUBTOTAL</th>
													<th>IVA</th>
													<th>IVA TOTAL</th>
													<th>TOTAL</th>
													<th></th>
												</tr>
												<tr v-for="attribute in account.attributes_services_clients">
													<td>{{ attribute.id }}</td>
													<td>{{ attribute.attribute.name }}</td>
													<td>{{ attribute.quantity }}</td>
													<td>{{ formatMoney(attribute.attribute.price) }}</td>
													<td>{{ formatMoney(attribute.attribute.price * attribute.quantity) }}</td>
													<td>{{ attribute.iva }}</td>
													<td>{{ ((attribute.attribute.price * attribute.quantity) * (attribute.iva / 100)) }}</td>
													<td>{{ formatMoney((attribute.attribute.price * attribute.quantity) + ((attribute.attribute.price * attribute.quantity) * (attribute.iva / 100))) }}</td>
													<td>
														<router-link class="btn btn-danger btn-md" v-bind:to="{name: 'AttributesServicesClients-Delete', params: { client_id: post.id, client_attribute_service_id: attribute.id, account_client_id: account.id }}">
															<i class="fa fa-trash"></i>
														</router-link>
													</td>
												</tr>
											</table>
											<hr>
											<h3>Propuestas Generadas</h3>
											
											<table class="table table-responsive">
												<tr>
													<th>ID</th>
													<th>FECHA DE CREACION</th>
													<th>ESTADO ACTUAL</th>
													<th>VIGENCIA</th>
													<th></th>
												</tr>
												<tr v-for="quotation in account.quotations_clients">
													<td>{{ zfill(quotation.id, 11) }}</td>
													<td>{{ quotation.create }}</td>
													<td>
														 <span v-if="quotation.status == 0">Pdte. por Aprobación</span>
														 <span v-if="quotation.status == 1">Rechazada</span>
														 <span v-if="quotation.status == 2">Aprobada</span>
													</td>
													<td>{{ quotation.validity }}</td>
													<td>														
													<div class="dropup">
														<button class="btn btn-default btn-md dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
															Ver PDF
															<span class="caret"></span>
														</button>
														<ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
															<li>
																<a target="_new" v-bind:href="'http://cmr.monteverdeltda.com/api/genQ.php?refQuotations=' + zfill(quotation.id, 11) + '&wellcome=false'">
																	<i class="fa fa-eye"></i>
																	Solo Propuesta
																</a>
															</li>
															<li role="separator" class="divider"></li>
															<li>
																<a target="_new" v-bind:href="'http://cmr.monteverdeltda.com/api/genQ.php?refQuotations=' + zfill(quotation.id, 11)">
																	<i class="fa fa-eye"></i>
																	Completa
																</a>
															</li>
															<!-- <li><a href="#">Separated link</a></li> -->
														</ul>
													</div>	
													
													</td>
													<!-- 
													<td>
														<router-link class="btn btn-danger btn-md" v-bind:to="{name: 'AttributesServicesClients-Delete', params: { client_id: post.id, client_attribute_service_id: attribute.id, account_client_id: account.id }}">
															<i class="fa fa-trash"></i>
														</router-link>
													</td> -->
												</tr>
											</table>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<hr>
				<router-link v-bind:to="{ name: 'Clients-List' }">Volver a la lista</router-link>
			</div>
		</template>
		
		<template id="edit-Clients-Invoices">
			<div>
				<header class="page-header">
					<div class="branding">	
						<h1>FACTURAS - {{ post.identification_number }} - {{ post.social_reason }}</h1>
					</div>
				</header>
				
				<div id="exTab1">
					<ul  class="nav nav-pills">
						<router-link tag="li" class="" v-bind:to="{name: 'Clients-Info-Edit', params: { client_id: post.id }}"><a><i class="fa fa-plus"></i> Infomacion Basica</a></router-link>
						<router-link tag="li" class="" v-bind:to="{name: 'Clients-Contacts-Edit', params: { client_id: post.id }}"><a><i class="fa fa-plus"></i> Contactos</a></router-link>
						<router-link tag="li" class="" v-bind:to="{name: 'Clients-Contracts-Edit', params: { client_id: post.id }}"><a><i class="fa fa-plus"></i> Radicados</a></router-link>
						<router-link v-if="post.enable_audit == 1" tag="li" class="" v-bind:to="{name: 'Clients-Auditors-Edit', params: { client_id: post.id }}"><a><i class="fa fa-plus"></i> Interventores</a></router-link>
						<router-link tag="li" class="" v-bind:to="{name: 'Clients-Accounts-Edit', params: { client_id: post.id }}"><a><i class="fa fa-plus"></i> Solicitudes</a></router-link>
						<router-link tag="li" class="active" v-bind:to="{name: 'Clients-Invoices-Edit', params: { client_id: post.id }}"><a><i class="fa fa-plus"></i> Facturas</a></router-link>
						<router-link tag="li" class="" v-bind:to="{name: 'Clients-Quotations-Edit', params: { client_id: post.id }}"><a><i class="fa fa-plus"></i> Propuestas Aprobadas</a></router-link>
						<router-link tag="li" class="" v-bind:to="{name: 'Clients-ContractsServices-Edit', params: { client_id: post.id }}"><a><i class="fa fa-plus"></i> Contratos</a></router-link>
					</ul>
				</div>
				<div class="tab-content clearfix">
					<div class="tab-pane active" id="6a">
						<div class="row">
							<h3>Facturas</h3>
							<hr>
						</div>
					</div>
					
				</div>
				<hr>
				<router-link v-bind:to="{ name: 'Clients-List' }">Volver a la lista</router-link>
			</div>
		</template>

		<template id="edit-Clients-ContractsServices">
			<div>
				<header class="page-header">
					<div class="branding">	
						<h1>Contratos - {{ post.identification_number }} - {{ post.social_reason }}</h1>
					</div>
				</header>
				
				<div id="exTab1">
					<ul  class="nav nav-pills">
						<router-link tag="li" class="" v-bind:to="{name: 'Clients-Info-Edit', params: { client_id: post.id }}"><a><i class="fa fa-plus"></i> Infomacion Basica</a></router-link>
						<router-link tag="li" class="" v-bind:to="{name: 'Clients-Contacts-Edit', params: { client_id: post.id }}"><a><i class="fa fa-plus"></i> Contactos</a></router-link>
						<router-link tag="li" class="" v-bind:to="{name: 'Clients-Contracts-Edit', params: { client_id: post.id }}"><a><i class="fa fa-plus"></i> Radicados</a></router-link>
						<router-link v-if="post.enable_audit == 1" tag="li" class="" v-bind:to="{name: 'Clients-Auditors-Edit', params: { client_id: post.id }}"><a><i class="fa fa-plus"></i> Interventores</a></router-link>
						<router-link tag="li" class="" v-bind:to="{name: 'Clients-Accounts-Edit', params: { client_id: post.id }}"><a><i class="fa fa-plus"></i> Solicitudes</a></router-link>
						<router-link tag="li" class="" v-bind:to="{name: 'Clients-Invoices-Edit', params: { client_id: post.id }}"><a><i class="fa fa-plus"></i> Facturas</a></router-link>
						<router-link tag="li" class="" v-bind:to="{name: 'Clients-Quotations-Edit', params: { client_id: post.id }}"><a><i class="fa fa-plus"></i> Propuestas Aprobadas</a></router-link>
						<router-link tag="li" class="active" v-bind:to="{name: 'Clients-ContractsServices-Edit', params: { client_id: post.id }}"><a><i class="fa fa-plus"></i> Contratos</a></router-link>
					</ul>
				</div>
				<div class="tab-content clearfix">
					<div class="tab-pane active" id="6a">
						<div class="row">
							<h3>Contratos</h3>
							<hr>
							<table class="table table-responsive">
								<tr>
									<th>ID CONTRATO</th>
									<th>ID PROPUESTA</th>
									<th>FECHA DE CREACION</th>
									<th>FECHA ULTIMA MODIFICACION</th>
									<th>ESTADO DEL CONTRATO</th>
									<th></th>
								</tr>
								<tr v-for="contract in posts">
									<td>
										{{ zfill(contract.id, 11) }}
									</td>
									<td>
										<a target="_new" v-bind:href="'http://cmr.monteverdeltda.com/api/genQ.php?refQuotations=' + zfill(contract.quotation.id, 11) + '&wellcome=false'">
											{{ zfill(contract.quotation.id, 11) }}
										</a>
									</td>
									<td>{{ contract.create }}</td>
									<td>{{ contract.update }}</td>
									<td>
										 <span v-if="contract.status == 0">Pre-Aprobado</span>
										 <span v-if="contract.status == 1">Aprobado</span>
										 <span v-if="contract.status == 2">En Ejecucion</span>
										 <span v-if="contract.status == 3">Liquidado</span>
										 <span v-if="contract.status == 4">Suspendido</span>
									</td>
								</tr>
							</table>
						</div>
					</div>
				</div>
				<hr>
				<router-link v-bind:to="{ name: 'Clients-List' }">Volver a la lista</router-link>
			</div>
		</template>

		<template id="edit-Clients-Quotations">
			<div>
				<header class="page-header">
					<div class="branding">	
						<h1>PROPUESTAS APROBADAS - {{ post.identification_number }} - {{ post.social_reason }}</h1>
					</div>
				</header>
				
				<div id="exTab1">
					<ul  class="nav nav-pills">
						<router-link tag="li" class="" v-bind:to="{name: 'Clients-Info-Edit', params: { client_id: post.id }}"><a><i class="fa fa-plus"></i> Infomacion Basica</a></router-link>
						<router-link tag="li" class="" v-bind:to="{name: 'Clients-Contacts-Edit', params: { client_id: post.id }}"><a><i class="fa fa-plus"></i> Contactos</a></router-link>
						<router-link tag="li" class="" v-bind:to="{name: 'Clients-Contracts-Edit', params: { client_id: post.id }}"><a><i class="fa fa-plus"></i> Radicados</a></router-link>
						<router-link v-if="post.enable_audit == 1" tag="li" class="" v-bind:to="{name: 'Clients-Auditors-Edit', params: { client_id: post.id }}"><a><i class="fa fa-plus"></i> Interventores</a></router-link>
						<router-link tag="li" class="" v-bind:to="{name: 'Clients-Accounts-Edit', params: { client_id: post.id }}"><a><i class="fa fa-plus"></i> Solicitudes</a></router-link>
						<router-link tag="li" class="" v-bind:to="{name: 'Clients-Invoices-Edit', params: { client_id: post.id }}"><a><i class="fa fa-plus"></i> Facturas</a></router-link>
						<router-link tag="li" class="active" v-bind:to="{name: 'Clients-Quotations-Edit', params: { client_id: post.id }}"><a><i class="fa fa-plus"></i> Propuestas Aprobadas</a></router-link>
						<router-link tag="li" class="" v-bind:to="{name: 'Clients-ContractsServices-Edit', params: { client_id: post.id }}"><a><i class="fa fa-plus"></i> Contratos</a></router-link>
					</ul>
				</div>
				<div class="tab-content clearfix">
					<div class="tab-pane active" id="6a">
						<div class="row">
							<h3>PROPUESTAS</h3>
							<hr>
							<table class="table table-responsive">
								<tr>
									<th>ID PROPUESTA</th>
									<th>ESTADO ACTUAL</th>
									<th>FECHA DE CREACION</th>
									<th>FECHA DE APROBACION</th>
									<th>VIGENCIA</th>
									<th>CONTRATO(S)</th>
									<th></th>
								</tr>
								<tr v-for="quotation in posts">
									<td>
										<a target="_new" v-bind:href="'http://cmr.monteverdeltda.com/api/genQ.php?refQuotations=' + zfill(quotation.id, 11) + '&wellcome=false'">
											{{ zfill(quotation.id, 11) }}
										</a>
									</td>
									<td>
										 <span v-if="quotation.status == 0">Pdte. por Aprobación</span>
										 <span v-if="quotation.status == 1">Rechazada</span>
										 <span v-if="quotation.status == 2">Aprobada</span>
									</td>
									<td>{{ quotation.create }}</td>
									<td>{{ quotation.accept }}</td>
									<td>{{ quotation.validity }}</td>
									<td>
										<div v-if="quotation.contracts_clients[0].id">
											<ul>
												<li v-for="quotation_contract in quotation.contracts_clients">{{ zfill(quotation_contract.id, 11) }}</li>
											</ul>
										</div>
									</td>
									<td>
										<div class="dropup">
											<button class="btn btn-default btn-md dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
												Generar
												<span class="caret"></span>
											</button>
											<ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
												<li>
													<a target="_new" v-bind:href="'http://cmr.monteverdeltda.com/api/genQ.php?refQuotations=' + zfill(quotation.id, 11) + '&wellcome=false'">
														<i class="fa fa-eye"></i>
														Contrato
													</a>
												</li>
												<li>
													<a target="_new" v-bind:href="'http://cmr.monteverdeltda.com/api/genQ.php?refQuotations=' + zfill(quotation.id, 11) + '&wellcome=false'">
														<i class="fa fa-eye"></i>
														Contrato y Facturacion
													</a>
												</li>
												<li>
													<a target="_new" v-bind:href="'http://cmr.monteverdeltda.com/api/genQ.php?refQuotations=' + zfill(quotation.id, 11) + '&wellcome=false'">
														<i class="fa fa-eye"></i>
														Contrato, Facturacion y Programacion
													</a>
												</li>
												<li role="separator" class="divider"></li>
												<!-- <li><a href="#">Separated link</a></li> -->
											</ul>
										</div>
									</td>
									<!-- 
									<td>
										<router-link class="btn btn-danger btn-md" v-bind:to="{name: 'AttributesServicesClients-Delete', params: { client_id: post.id, client_attribute_service_id: attribute.id, account_client_id: account.id }}">
											<i class="fa fa-trash"></i>
										</router-link>
									</td> -->
								</tr>
							</table>
						</div>
					</div>
					
				</div>
				<hr>
				<router-link v-bind:to="{ name: 'Clients-List' }">Volver a la lista</router-link>
			</div>
		</template>

		<template id="delete-Clients">
			<div>
				<h2>CLIENTES - Eliminar</h2>
				<form v-on:submit="deleteClient">
					<p>The action cannot be undone.</p>
					<button type="submit" class="btn btn-danger">Eliminar</button>
					<router-link class="btn btn-primary" v-bind:to="{ name: 'Clients-List' }">Cancelar</router-link>
				</form>
			</div>
		</template>
		
		<template id="delete-ClientsContacts">
			<div>
				<h2>CONTACTOS - Eliminar</h2>
				<form v-on:submit="deleteClientsContacts">
					<p>The action cannot be undone.</p>
					<button type="submit" class="btn btn-danger">Eliminar</button>
					<router-link class="btn btn-primary" v-bind:to="{ name: 'Clients-List' }">Cancelar</router-link>
				</form>
			</div>
		</template>
		
		<template id="delete-RedicatedClients">
			<div>
				<h2>CONTACTOS - Eliminar</h2>
				<form v-on:submit="deleteRedicatedClients">
					<p>The action cannot be undone.</p>
					<button type="submit" class="btn btn-danger">Eliminar</button>
					<router-link class="btn btn-primary" v-bind:to="{ name: 'Clients-List' }">Cancelar</router-link>
				</form>
			</div>
		</template>
		
		<template id="delete-ClientsAuditors">
			<div>
				<h2>CONTACTOS - Eliminar</h2>
				<form v-on:submit="deleteClientsAuditors">
					<p>The action cannot be undone.</p>
					<button type="submit" class="btn btn-danger">Eliminar</button>
					<router-link class="btn btn-primary" v-bind:to="{ name: 'Clients-List' }">Cancelar</router-link>
				</form>
			</div>
		</template>
		
		<template id="delete-AttributesServicesClients">
			<div>
				<h2>ATRIBUTOS DEL SERVICIO - Eliminar</h2>
				<form v-on:submit="deleteClientsAttributesServices">
					<p>The action cannot be undone.</p>
					<button type="submit" class="btn btn-danger">Eliminar</button>
					<router-link class="btn btn-primary" v-bind:to="{name: 'Clients-Info-Edit', params: { client_id: $route.params.client_id }}">Cancelar</router-link>
				</form>
			</div>
		</template>
		
		<template id="delete-ServicesClients">
			<div>
				<h2>ATRIBUTOS DEL SERVICIO - Eliminar</h2>
				<form v-on:submit="deleteClientsServices">
					<p>The action cannot be undone.</p>
					<button type="submit" class="btn btn-danger">Eliminar</button>
					<router-link class="btn btn-primary" v-bind:to="{name: 'Clients-Info-Edit', params: { client_id: $route.params.client_id }}">Cancelar</router-link>
				</form>
			</div>
		</template>
		
		<template id="delete-AccountsClients">
			<div>
				<h2>CUENTA DE CLIENTE - Eliminar</h2>
				<form v-on:submit="deleteAccountsClients">
					<p>The action cannot be undone.</p>
					<button type="submit" class="btn btn-danger">Eliminar</button>
					<router-link class="btn btn-primary" v-bind:to="{name: 'Clients-Accounts-Edit', params: { client_id: $route.params.client_id }}">Cancelar</router-link>
				</form>
			</div>
		</template>
		<!-- // ------------ CLIENTES - FIN -------------------------------------  -->
		
		<!-- // ------------ SERVICIO CLIENTE - INICIO ------------ // -->		
		<template id="add-AttributesServicesClients">
			<div>
				<h2>ATRRIBUTOS DE SERVICIO - Crear</h2>
				<form v-on:submit="createAttributesServicesClients">
					<div class="form-group">
						<label for="add-content">ATRIBUTO</label>
						<select class="form-control" v-model="post.attribute">
							<option v-for="item in selectOptions.attributes" :value="item.id">{{ item.id }} - {{ item.name }} - {{ formatMoney(item.price) }} </option>
						</select>
					</div>
					<div class="form-group">
						<label for="add-content">CANTIDAD</label>
						<input class="form-control" type="number" v-model="post.quantity" />
					</div>
					<div class="form-group">
						<label for="add-content">IVA</label>
						<input class="form-control" type="number" v-model="post.iva" />
					</div>
					<button type="submit" class="btn btn-primary">Crear</button>
					<router-link class="btn btn-primary" v-bind:to="{name: 'Clients-Accounts-Edit', params: { client_id: $route.params.client_id }}">Cancelar</router-link>
				</form>
			</div>
		</template>
		
		<template id="add-ServicesClients">
			<div>
				<h2>SERVICIO - Crear</h2>
				<form v-on:submit="createServicesClients">
					<div class="form-group">
						<label for="add-content">SERVICIO</label>
						<select class="form-control" v-model="post.service">
							<option v-for="item in selectOptions.services" :value="item.id">{{ item.type_medition.code }} - {{ item.name }} - {{ formatMoney(item.price) }} </option>
						</select>
					</div>
					<div class="form-group">
						<label for="add-content">CANTIDAD</label>
						<input class="form-control" type="number" v-model="post.quantity" />
					</div>
					<div class="form-group">
						<label for="add-content">FRECUENCIA</label>
						<select class="form-control" v-model="post.repeat">
							<option v-for="item in selectOptions.types_repeats_services_clients" :value="item.id">{{ item.code }} - {{ item.name }} </option>
						</select>
					</div>
					<div class="form-group">
						<label for="add-content">IVA</label>
						<input class="form-control" type="number" v-model="post.iva" />
					</div>
					<div class="form-group">
						<label for="add-content">NOTAS DEL SERVICIO	 </label>
						<textarea class="form-control" v-model="post.observations"></textarea>
					</div>
					<button type="submit" class="btn btn-primary">Crear</button>
					<router-link class="btn btn-primary" v-bind:to="{name: 'Clients-Accounts-Edit', params: { client_id: $route.params.client_id }}">Cancelar</router-link>
				</form>
			</div>
		</template>
		<!-- // ------------ SERVICIO CLIENTE - FIN ------------ // -->