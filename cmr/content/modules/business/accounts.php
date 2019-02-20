<div>
	<div id="app">
		<div>
			<div id="preload"></div>
			<div class="container_not">
				<main>
					<router-view></router-view>
				</main>
			</div>
		</div>
	</div>
</div>

<!-- // NAVBAR TOP CLIENTS -->
<template id="Navbar-Top-Clients-Edit-Component">
	<div> btn btn-secondary
		Cuentas
			<router-link class="btn btn-secondary" v-bind:to="{name: 'Clients-Info', params: { client_id: client_id }}">
				<i class="fas fa-user-circle"></i>
				<!-- <span class="badge badge-default">Cerrar </span> -->
				Infomacion Basica
			</router-link>  
			<router-link class="btn btn-secondary" v-bind:to="{name: 'Clients-Contacts-Edit', params: { client_id: client_id }}">
				<i class="fas fa-user-circle"></i>
				<!-- <span class="badge badge-default">Cerrar </span> -->
				Contactos
			</router-link>  
			<router-link class="btn btn-secondary" v-bind:to="{name: 'Clients-Redicateds-Edit', params: { client_id: client_id }}">
				<i class="fas fa-user-circle"></i>
				<!-- <span class="badge badge-default">Cerrar </span> -->
				Radicados
			</router-link>  
			<router-link class="btn btn-secondary" v-bind:to="{name: 'Clients-Auditors-Edit', params: { client_id: client_id }}">
				<i class="fas fa-user-circle"></i>
				<!-- <span class="badge badge-default">Cerrar </span> -->
				Interventores
			</router-link>  
			<router-link class="btn btn-secondary" v-bind:to="{name: 'Clients-Accounts-Edit', params: { client_id: client_id }}">
				<i class="fas fa-user-circle"></i>
				<!-- <span class="badge badge-default">Cerrar </span> -->
				Solicitudes
			</router-link>  
			<router-link class="btn btn-secondary" v-bind:to="{name: 'Clients-Invoices-Edit', params: { client_id: client_id }}">
				<i class="fas fa-user-circle"></i>
				<!-- <span class="badge badge-default">Cerrar </span> -->
				Facturas
			</router-link>  
			<router-link class="btn btn-secondary" v-bind:to="{name: 'Clients-Quotations-Edit', params: { client_id: client_id }}">
				<i class="fas fa-user-circle"></i>
				<!-- <span class="badge badge-default">Cerrar </span> -->
				Propuestas Aprobadas
			</router-link>  
			<router-link class="btn btn-secondary" v-bind:to="{name: 'Clients-ContractsServices-Edit', params: { client_id: client_id }}">
				<i class="fas fa-user-circle"></i>
				<!-- <span class="badge badge-default">Cerrar </span> -->
				Contratos
			</router-link>  
			<router-link class="btn btn-secondary" v-bind:to="{name: 'Clients-Users-Edit', params: { client_id: client_id }}">
				<i class="fas fa-user-circle"></i>
				<!-- <span class="badge badge-default">Cerrar </span> -->
				Usuarios
			</router-link>  
		<router-link class="btn btn-secondary" v-bind:to="{ name: 'Clients-List' }">
			<span class="fa fa-window-close"></span>
			<!-- <span class="badge badge-default">Cerrar </span> -->
			Cerrar
		</router-link> 
	</div>
</template>
<!-- SIDEBAR // -->

<template id="page-Clients">
	<div>
		<div class="card mb-3">
			<div class="card-header">
				<router-link class="btn btn-success" v-bind:to="{ name: 'Clients-Add' }">
					<span class="fa fa-plus"></span>
					Nuevo
				</router-link>
				Clientes
			</div>
			<div class="card-body">
				<div class="table-responsive">
					<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
						<thead>
							<tr>
								<th>ID</th>
								<th>TIPO DE CLIENTE</th>
								<th>TIPO DE IDENTIFICACION</th>
								<th># IDENTIFICACION</th>
								<th>RASON SOCIAL</th>
								<th>NOMBRE COMERCIAL</th>
								<th>Actions</th>
							</tr>
						</thead>
						<tbody>
							<tr v-if="posts===null">
								<td colspan="4">Loading...</td>
							</tr>
							<tr v-else v-for="post in filteredposts">
								<td>{{ post.id }}</td>
								<td>{{ post.type.name }}</td>
								<td>{{ post.identification_type.name }}</td>
								<td>{{ post.identification_number }}</td>
								<td>{{ post.social_reason }}</td>
								<td>{{ post.tradename }}</td>
								<td>
									<router-link class="btn btn-info btn-md" v-bind:to="{name: 'Clients-View', params: { client_id: post.id }}"><i class="fas fa-eye"></i> </router-link>
									<router-link class="btn btn-warning btn-md" v-bind:to="{name: 'Clients-Info', params: { client_id: post.id }}"><i class="fas fa-pencil-alt"></i> </router-link>
									<router-link class="btn btn-danger btn-md" v-bind:to="{name: 'Clients-Delete', params: { client_id: post.id }}"><i class="fa fa-trash"></i> </router-link>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
			<div class="card-footer small text-muted"></div>
		</div>
	</div>
</template>

<template id="add-Clients">
	<div>
		<div class="card mb-3">
			<div class="card-header">
				<router-link class="btn btn-secondary" v-bind:to="{ name: 'Clients-List' }">
					<span class="fa fa-window-close"></span>
					<!-- <span class="badge badge-default">Cerrar </span> -->
					Cerrar
				</router-link>  
				 Cuentas
			</div>
			<div class="card-body">				
				<form v-on:submit="createClient" class="row">
					<div class="form-group col-md-4">
						<label for="add-content">TIPO DE CLIENTE</label>
						<select class="form-control search-select2-basic-single-null" v-model="post.type">
							<option v-for="item in selectOptions.types_clients" :value="item.id">{{ item.name }}</option>
						</select>
					</div>
					<div class="form-group col-md-4">
						<label for="add-content">TIPO DE IDENTIFICACION</label>
						<select class="form-control search-select2-basic-single-null" v-model="post.identification_type">
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
						<select class="form-control search-select2-basic-single-null" v-model="post.society_type">
							<option v-for="item in selectOptions.types_societys" :value="item.id">{{ item.name }}</option>
						</select>
					</div>
					<div class="form-group col-md-6">
						<label for="add-content">DEPARTAMENTO</label>
						<select class="form-control search-select2-basic-single-null" v-model="post.department" @change="loadCitys">
							<option v-for="item in selectOptions.geo_departments" :value="item.id">{{ item.name }}</option>
						</select>
					</div>
					<div class="form-group col-md-6">
						<label for="add-content">CIUDAD</label>
						<select class="form-control search-select2-basic-single-null" v-model="post.city">
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
						<select class="form-control search-select2-basic-single-null" v-model="post.legal_representative">
							<option v-for="item in selectOptions.contacts" :value="item.id">{{ item.identification_number }} - {{ item.first_name }} {{ item.second_name }} {{ item.surname }} {{ item.second_surname }} </option>
						</select>
					</div>
					<div class="form-group col-md-4">
						<label for="add-content">CONTACTO PRINCIPAL</label>
						<select class="form-control search-select2-basic-single-null" v-model="post.contact_principal">
							<option v-for="item in selectOptions.contacts" :value="item.id">{{ item.identification_number }} - {{ item.first_name }} {{ item.second_name }} {{ item.surname }} {{ item.second_surname }} </option>
						</select>
					</div>
					<div class="form-group col-md-4">
						<label for="add-content">HABILITAR INTERVENTORIA</label>
						<select class="form-control search-select2-basic-single-null" v-model="post.enable_audit">
							<option value="0">NO HABILITADA</option>
							<option value="1">HABILITADA</option>
						</select>
					</div>
					<button type="submit" class="btn btn-primary">Crear</button>
				</form>
			</div>
			<div class="card-footer small text-muted"></div>
		</div>
	</div>
</template>

<template id="edit-Clients-Info">
	<div>
		<div class="card mb-3">
			<div class="card-header">
				<component-navbar-top-clients-edit v-bind:client_id="$route.params.client_id"></component-navbar-top-clients-edit>
			</div>
			<div class="card-body">
				<form v-on:submit="updateClient" class="row">
					<div class="form-group col-sm-4">
						<label for="add-content">TIPO DE CLIENTE</label>
						<select class="form-control search-select2-basic-single-null" v-model="post.type">
							<option v-for="item in selectOptions.types_clients" :value="item.id">{{ item.name }}</option>
						</select>
					</div>
					<div class="form-group col-sm-4">
						<label for="add-content">TIPO DE IDENTIFICACION</label>
						<select class="form-control search-select2-basic-single-null" v-model="post.identification_type">
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
						<select class="form-control search-select2-basic-single-null" v-model="post.society_type">
							<option v-for="item in selectOptions.types_societys" :value="item.id">{{ item.name }}</option>
						</select>
					</div>
					<div class="form-group col-sm-6">
						<label for="add-content">DEPARTAMENTO</label>
						<select class="form-control search-select2-basic-single-null" v-model="post.department" @change="loadCitys">
							<option v-for="item in selectOptions.geo_departments" :value="item.id">{{ item.name }}</option>
						</select>
					</div>
					<div class="form-group col-sm-6">
						<label for="add-content">CIUDAD</label>
						<select class="form-control search-select2-basic-single-null" v-model="post.city">
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
						<select class="form-control search-select2-basic-single-null" v-model="post.legal_representative">
							<option v-for="item in selectOptions.contacts" :value="item.id">{{ item.first_name }} {{ item.second_name }} {{ item.surname }} {{ item.second_surname }} </option>
						</select>
					</div>
					<div class="form-group col-sm-4">
						<label for="add-content">CONTACTO PRINCIPAL</label>
						<select class="form-control search-select2-basic-single-null" v-model="post.contact_principal">
							<option v-for="item in selectOptions.contacts" :value="item.id">{{ item.first_name }} {{ item.second_name }} {{ item.surname }} {{ item.second_surname }} </option>
						</select>
					</div>
					<div class="form-group col-sm-4">
						<label for="add-content">HABILITAR INTERVENTORIA</label>
						<select class="form-control search-select2-basic-single-null" v-model="post.enable_audit">
							<option value="0">NO HABILITADA</option>
							<option value="1">HABILITADA</option>
						</select>
					</div>
					<button type="submit" class="btn btn-primary">Guardar</button>
				</form>
			</div>
			<div class="card-footer small text-muted"></div>
		</div>
	</div>
</template>

<template id="edit-Clients-Contacts">
	<div>
		<div class="card mb-3">
			<div class="card-header">
				<component-navbar-top-clients-edit v-bind:client_id="$route.params.client_id"></component-navbar-top-clients-edit>
			</div>
			<div class="card-body">
					<thead>
				<table class="table table-bordered">
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
								<a target="_new" class="btn btn-success btn-md" target='_blank' v-bind:href="'/business/contacts/#/View/' + item.contact.id"><i class="fa fa-eye"></i> </a>
								<router-link class="btn btn-danger btn-md" v-bind:to="{name: 'ClientsContacts-Delete', params: { client_id: post.id, client_contact_id: item.id }}"><i class="fa fa-trash"></i> </router-link>
								
							</td>
						</tr>
					</tbody>
				</table>
			</div>
			<div class="card-footer small text-muted">
				<div >
					<hr>
				</div>
				<div class="card-body" id="includeContactClient-Fast">
					<form v-on:submit="includeContactClient" class="row"> 
						<div class="form-group col-md-6">
							<label for="add-content">CONTACTO</label>
							<select class="form-control search-select2-basic-single-null" v-model="post_crew_clients.contact">
								<option v-for="item in selectOptions.contacts" :value="item.id">{{ item.identification_number }} - {{ item.first_name }} {{ item.second_name }} {{ item.surname }} {{ item.second_surname }} </option>
							</select>
						</div>
						<div class="form-group col-md-6">
							<label for="edit-content">PARENTESCO</label>
							<select class="form-control search-select2-basic-single-null" v-model="post_crew_clients.type_contact">
								<option v-for="item in selectOptions.types_contacts" :value="item.id">{{ item.name }}</option>
							</select>
						</div>
						<button type="submit" class="btn btn-primary col-md-12">Agregar</button>
					</form>
				</div>
				<div class="text-right">
					<div class="actions">
						<button class="btn btn-primary" onclick="javascript: $('#includeContactClient-Fast').show();">
							<span class="fa fa-plus"></span>
							Agregar
						</button>
					</div>
				</div>
			</div>
		</div>
	</div>
</template>

<template id="edit-Clients-Redicateds">
	<div>
		<div class="card mb-3">
			<div class="card-header">
				<component-navbar-top-clients-edit v-bind:client_id="$route.params.client_id"></component-navbar-top-clients-edit>
			</div>
			<div class="card-body">
				<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
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
			<div class="card-footer small text-muted">
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
			</div>
		</div>
	</div>
</template>

<template id="edit-Clients-Auditors">
	<div>
		<div class="card mb-3">
			<div class="card-header">
				<component-navbar-top-clients-edit v-bind:client_id="$route.params.client_id"></component-navbar-top-clients-edit>
			</div>
			<div class="card-body">
				<table class="table table-bordered">
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
			<div class="card-footer small text-muted">
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
							<select class="form-control search-select2-basic-single-null" v-model="post_auditors_clients.contact">
								<option v-for="item in selectOptions.contacts" :value="item.id">{{ item.identification_number }} - {{ item.first_name }} {{ item.second_name }} {{ item.surname }} {{ item.second_surname }}</option>
							</select>
						</div>
						<button type="submit" class="btn btn-primary col-md-12">Agregar</button>
					</form>
					<hr>
				</div>
			</div>
		</div>
	</div>
</template>

<template id="edit-Clients-Invoices">
	<div>
		<div class="card mb-3">
			<div class="card-header">
				<component-navbar-top-clients-edit v-bind:client_id="$route.params.client_id"></component-navbar-top-clients-edit>
			</div>
			<div class="card-body">
			</div>
			<div class="card-footer small text-muted"></div>
		</div>
	</div>
</template>

<template id="edit-Clients-ContractsServices">
	<div>
		<div class="card mb-3">
			<div class="card-header">
				<component-navbar-top-clients-edit v-bind:client_id="$route.params.client_id"></component-navbar-top-clients-edit>
			</div>
			<div class="card-body">
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
							<a target="_new" v-bind:href="'/api/genQ.php?refQuotations=' + zfill(contract.quotation.id, 11) + '&wellcome=false'">
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
			<div class="card-footer small text-muted"></div>
		</div>
	</div>
</template>

<template id="edit-Clients-Quotations">
	<div>
		<div class="card mb-3">
			<div class="card-header">
				<component-navbar-top-clients-edit v-bind:client_id="$route.params.client_id"></component-navbar-top-clients-edit>
			</div>
			<div class="card-body">
				<table class="table table-responsive">
					<tr>
						<th>ID PROPUESTA</th>
						<th>SOLICITUD</th>
						<th>NOMBRE DEL PROYECTO</th>
						<th>ESTADO ACTUAL</th>
						<th>FECHA DE CREACION</th>
						<th>FECHA DE APROBACION</th>
						<th>VIGENCIA</th>
						<th>CONTRATO(S)</th>
						<th></th>
					</tr>
					<tr v-for="quotation in posts">
						<td>
							<a target="_new" v-bind:href="'/api/genQ.php?refQuotations=' + zfill(quotation.id, 11) + '&wellcome=false'">
								{{ zfill(quotation.id, 11) }}
							</a>
						</td>
						<td>
							<a target="_new" v-bind:href="'/business/accounts/#/Edit/' + quotation.account.client + '/Accounts/' + quotation.account.id + '/Info'">
								{{ zfill(quotation.account.id, 11) }}
							</a>
						</td>
						<td>{{ quotation.account.name }}</td>
						<td>
							 <span v-if="quotation.status == 0">Pdte. por Aprobación</span>
							 <span v-if="quotation.status == 1">Rechazada</span>
							 <span v-if="quotation.status == 2">Aprobada</span>
						</td>
						<td>{{ quotation.create }}</td>
						<td>{{ quotation.accept }}</td>
						<td>{{ quotation.validity }}</td>
						<td>
							<div v-if="quotation.contracts_clients[0] != undefined && quotation.contracts_clients[0].id != undefined && quotation.contracts_clients[0].id > 0">
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
										<a target="_new" v-bind:href="'/api/genQ.php?refQuotations=' + zfill(quotation.id, 11) + '&wellcome=false'">
											<i class="fa fa-eye"></i>
											Contrato
										</a>
									</li>
									<li>
										<a target="_new" v-bind:href="'/api/genQ.php?refQuotations=' + zfill(quotation.id, 11) + '&wellcome=false'">
											<i class="fa fa-eye"></i>
											Contrato y Facturacion
										</a>
									</li>
									<li>
										<a target="_new" v-bind:href="'/api/genQ.php?refQuotations=' + zfill(quotation.id, 11) + '&wellcome=false'">
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
			<div class="card-footer small text-muted"></div>
		</div>
	</div>
</template>

<template id="edit-Clients-Users">
	<div>
		<div class="card mb-3">
			<div class="card-header">
				<component-navbar-top-clients-edit v-bind:client_id="$route.params.client_id"></component-navbar-top-clients-edit>
			</div>
			<div class="card-body">
				<div class="table-responsive">
					<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
						<thead>
							<tr>
								<th>ID</th>
								<th>USUARIO</th>
								<th>NOMBRES Y APELLIDOS</th>
								<th>PERFIL</th>
								<th>Actions</th>
							</tr>
						</thead>
						<tbody>
							<tr v-if="posts===null">
								<td colspan="4">Loading...</td>
							</tr>
							<tr v-else v-for="post in filteredposts">
								<td>{{ post.id }}</td>
								<td>{{ post.user.username }}</td>
								<td>{{ post.user.names }} {{ post.user.surname }} {{ post.user.second_surname }}</td>
								<td>{{ post.permissions.name }}</td>
								<td>
									<!-- 
									{{ post }}
									<router-link class="btn btn-info btn-md" v-bind:to="{name: 'Clients-View', params: { client_id: post.id }}"><i class="fas fa-eye"></i> </router-link>
									<router-link class="btn btn-warning btn-md" v-bind:to="{name: 'Clients-Info', params: { client_id: post.id }}"><i class="fas fa-pencil-alt"></i> </router-link>
									<router-link class="btn btn-danger btn-md" v-bind:to="{name: 'Clients-Delete', params: { client_id: post.id }}"><i class="fa fa-trash"></i> </router-link>
									-->
								</td> 
								
							</tr>
						</tbody>
					</table>
			</div>
			<div class="card-footer small text-muted"></div>
		</div>
	</div>
</template>

<template id="delete-Clients">
	<div>
		<div class="card mb-3">
			<div class="card-header">
				<router-link class="btn btn-secondary" v-bind:to="{ name: 'ARL-List' }">
					<span class="fa fa-window-close"></span>
					<!-- <span class="badge badge-default">Cerrar </span> -->
					Cerrar
				</router-link> 
			</div>
			<div class="card-body">
				<form v-on:submit="deleteClient">
					<p>The action cannot be undone.</p>
					<button type="submit" class="btn btn-danger">Eliminar</button>
					<router-link class="btn btn-primary" v-bind:to="{ name: 'Clients-List' }">Cancelar</router-link>
				</form>
			</div>
			<div class="card-footer small text-muted"></div>
		</div>
	</div>
</template>

<template id="delete-ClientsContacts">
	<div>
		<div class="card mb-3">
			<div class="card-header">
				<router-link class="btn btn-secondary" v-bind:to="{name: 'Clients-Contacts-Edit', params: { client_id: $route.params.client_id }}">
					<span class="fa fa-window-close"></span>
					<!-- <span class="badge badge-default">Cerrar </span> -->
					Cerrar
				</router-link> 
			</div>
			<div class="card-body">
				<form v-on:submit="deleteClientsContacts">
					<p>The action cannot be undone.</p>
					<button type="submit" class="btn btn-danger">Eliminar</button>
				</form>

			</div>
			<div class="card-footer small text-muted"></div>
		</div>
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
		<div class="card mb-3">
			<div class="card-header">
				<router-link class="btn btn-secondary" v-bind:to="{name: 'Clients-Accounts-Edit-Invoices', params: { client_id: $route.params.client_id, account_id: $route.params.account_client_id }}">
					<span class="fa fa-window-close"></span>
					<!-- <span class="badge badge-default">Cerrar </span> -->
					Cerrar
				</router-link> 
			</div>
			<div class="card-body">
				<form v-on:submit="deleteClientsAuditors">
					<p>The action cannot be undone.</p>
					<button type="submit" class="btn btn-danger">Eliminar</button>
					<router-link class="btn btn-primary" v-bind:to="{ name: 'Clients-List' }">Cancelar</router-link>
				</form>
			</div>
			<div class="card-footer small text-muted"></div>
		</div>
	</div>
</template>

<template id="delete-AttributesServicesClients">
	<div>
		<div class="card mb-3">
			<div class="card-header">
				<router-link class="btn btn-secondary" v-bind:to="{name: 'Clients-Accounts-Edit-Invoices', params: { client_id: $route.params.client_id, account_id: $route.params.account_client_id }}">
					<span class="fa fa-window-close"></span>
					<!-- <span class="badge badge-default">Cerrar </span> -->
					Cerrar
				</router-link> 
			</div>
			<div class="card-body">
				<form v-on:submit="deleteClientsAttributesServices">
					<p>The action cannot be undone.</p>
					<button type="submit" class="btn btn-danger">Eliminar</button>
				</form>
			</div>
			<div class="card-footer small text-muted"></div>
		</div>
	</div>
</template>

<template id="delete-ServicesClients">
	<div>
		<div class="card mb-3">
			<div class="card-header">
				<router-link class="btn btn-secondary" v-bind:to="{name: 'Clients-Accounts-Edit-Invoices', params: { client_id: $route.params.client_id, account_id: $route.params.account_client_id }}">
					<span class="fa fa-window-close"></span>
					<!-- <span class="badge badge-default">Cerrar </span> -->
					Cerrar
				</router-link> 
			</div>
			<div class="card-body">
				<form v-on:submit="deleteClientsServices">
					<p>The action cannot be undone.</p>
					<button type="submit" class="btn btn-danger">Eliminar</button>
				</form>
			</div>
			<div class="card-footer small text-muted"></div>
		</div>
	</div>
</template>

<template id="delete-AccountsClients">
	<div>
		<div class="card mb-3">
			<div class="card-header">
				<router-link class="btn btn-secondary" v-bind:to="{name: 'Clients-Accounts-Edit-Invoices', params: { client_id: $route.params.client_id, account_id: $route.params.account_client_id }}">
					<span class="fa fa-window-close"></span>
					<!-- <span class="badge badge-default">Cerrar </span> -->
					Cerrar
				</router-link> 
			</div>
			<div class="card-body">
				<form v-on:submit="deleteAccountsClients">
					<p>The action cannot be undone.</p>
					<button type="submit" class="btn btn-danger">Eliminar</button>
					<router-link class="btn btn-primary" v-bind:to="{name: 'Clients-Accounts-Edit', params: { client_id: $route.params.client_id }}">Cancelar</router-link>
				</form>
			</div>
			<div class="card-footer small text-muted"></div>
		</div>
	</div>
</template>
	
<template id="add-AttributesServicesClients">
	<div>
		<div class="card mb-3">
			<div class="card-header">
				<router-link class="btn btn-secondary" v-bind:to="{name: 'Clients-Accounts-Edit-Invoices', params: { client_id: $route.params.client_id, account_id: $route.params.account_client_id }}">
					<span class="fa fa-window-close"></span>
					<!-- <span class="badge badge-default">Cerrar </span> -->
					Cerrar
				</router-link> 
			</div>
			<div class="card-body">
				<form v-on:submit="createAttributesServicesClients">
					<div class="form-group">
						<label for="add-content">ATRIBUTO</label>
						<select class="form-control search-select2-basic-single-null" v-model="post.attribute">
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
				</form>
			</div>
			<div class="card-footer small text-muted"></div>
		</div>
	</div>
</template>

<template id="add-ServicesClients">
	<div>
		<div class="card mb-3">
			<div class="card-header">
				<router-link class="btn btn-secondary" v-bind:to="{name: 'Clients-Accounts-Edit-Invoices', params: { client_id: $route.params.client_id, account_id: $route.params.account_client_id }}">
					<span class="fa fa-window-close"></span>
					<!-- <span class="badge badge-default">Cerrar </span> -->
					Cerrar
				</router-link> 
			</div>
			<div class="card-body">
				<form v-on:submit="createServicesClients">
					<div class="form-group">
						<label for="add-content">SERVICIO</label>
						<select class="form-control search-select2-basic-single-null" v-model="post.service">
							<option v-for="item in selectOptions.services" :value="item.id">{{ item.type_medition.code }} - {{ item.name }} - {{ formatMoney(item.price) }} </option>
						</select>
					</div>
					<div class="form-group">
						<label for="add-content">CANTIDAD</label>
						<input class="form-control" type="number" v-model="post.quantity" />
					</div>
					<div class="form-group">
						<label for="add-content">FRECUENCIA</label>
						<select class="form-control search-select2-basic-single-null" v-model="post.repeat">
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
				</form>
			</div>
			<div class="card-footer small text-muted"></div>
		</div>
	</div>
</template>

<template id="view-Clients">
	<div>
		<div class="card mb-3">
			<div class="card-header">
				Cuentas
					<router-link class="btn btn-primary" v-bind:to="{ name: 'Clients-View' }">
						<i class="fas fa-user-circle"></i>
						<!-- <span class="badge badge-default">Cerrar </span> -->
						Infomacion Basica
					</router-link>  
					<router-link class="btn btn-secondary" v-bind:to="{ name: 'Clients-View-Contacts' }">
						<span class="fas fa-users"></span>
						<!-- <span class="badge badge-default">Cerrar </span> -->
						Contactos
					</router-link>  
					<router-link class="btn btn-secondary" v-bind:to="{ name: 'Clients-View-Redicateds' }">
						<i class="fas fa-file-contract"></i>
						<!-- <span class="badge badge-default">Cerrar </span> -->
						Radicados
					</router-link>
					<router-link class="btn btn-secondary" v-bind:to="{ name: 'Clients-View-Auditors' }">
						<i class="fas fa-poll-h"></i>
						<!-- <span class="badge badge-default">Cerrar </span> -->
						Interventores
					</router-link>
					<router-link class="btn btn-secondary" v-bind:to="{ name: 'Clients-View-Services' }">
						<i class="fas fa-ticket-alt"></i>
						<!-- <span class="badge badge-default">Cerrar </span> -->
						Servicios
					</router-link>
					<router-link class="btn btn-secondary" v-bind:to="{ name: 'Clients-View-Invoices' }">
						<i class="fas fa-ticket-alt"></i>
						<!-- <span class="badge badge-default">Cerrar </span> -->
						Facturas
					</router-link>
				<router-link class="btn btn-secondary" v-bind:to="{ name: 'Clients-List' }">
					<span class="fa fa-window-close"></span>
					<!-- <span class="badge badge-default">Cerrar </span> -->
					Cerrar
				</router-link> 
			</div>
			<div class="card-body">
				<table class="table table-bordered">
					<tr>
						<td>ID INTERNO</td>
						<td>{{ post.id }}</td>
					</tr>
					<tr>
						<td>TIPO DE CLIENTE</td>
						<td>
							<table class="table table-bordered">
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
							<table class="table table-bordered">
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
							<table class="table table-bordered">
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
							<table class="table table-bordered">
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
							<table class="table table-bordered">
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
							<table class="table table-bordered">
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
							<table class="table table-bordered">
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
			<div class="card-footer small text-muted"></div>
		</div>
	</div>		  
</template>

<template id="view-Clients-Contacts">
	<div>
		<div class="card mb-3">
			<div class="card-header">
				Cuentas
					<router-link class="btn btn-secondary" v-bind:to="{ name: 'Clients-View' }">
						<i class="fas fa-user-circle"></i>
						<!-- <span class="badge badge-default">Cerrar </span> -->
						Infomacion Basica
					</router-link>  
					<router-link class="btn btn-primary" v-bind:to="{ name: 'Clients-View-Contacts' }">
						<span class="fas fa-users"></span>
						<!-- <span class="badge badge-default">Cerrar </span> -->
						Contactos
					</router-link>  
					<router-link class="btn btn-secondary" v-bind:to="{ name: 'Clients-View-Redicateds' }">
						<i class="fas fa-file-contract"></i>
						<!-- <span class="badge badge-default">Cerrar </span> -->
						Radicados
					</router-link>
					<router-link class="btn btn-secondary" v-bind:to="{ name: 'Clients-View-Auditors' }">
						<i class="fas fa-poll-h"></i>
						<!-- <span class="badge badge-default">Cerrar </span> -->
						Interventores
					</router-link>
					<router-link class="btn btn-secondary" v-bind:to="{ name: 'Clients-View-Services' }">
						<i class="fas fa-ticket-alt"></i>
						<!-- <span class="badge badge-default">Cerrar </span> -->
						Servicios
					</router-link>
					<router-link class="btn btn-secondary" v-bind:to="{ name: 'Clients-View-Invoices' }">
						<i class="fas fa-ticket-alt"></i>
						<!-- <span class="badge badge-default">Cerrar </span> -->
						Facturas
					</router-link>
				<router-link class="btn btn-secondary" v-bind:to="{ name: 'Clients-List' }">
					<span class="fa fa-window-close"></span>
					<!-- <span class="badge badge-default">Cerrar </span> -->
					Cerrar
				</router-link> 
			</div>
			<div class="card-body">
				<table class="table table-bordered">
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
			<div class="card-footer small text-muted"></div>
		</div>
	</div>		  
</template>

<template id="view-Clients-Redicateds">
	<div>
		<div class="card mb-3">
			<div class="card-header">
				Cuentas
					<router-link class="btn btn-secondary" v-bind:to="{ name: 'Clients-View' }">
						<i class="fas fa-user-circle"></i>
						<!-- <span class="badge badge-default">Cerrar </span> -->
						Infomacion Basica
					</router-link>  
					<router-link class="btn btn-secondary" v-bind:to="{ name: 'Clients-View-Contacts' }">
						<span class="fas fa-users"></span>
						<!-- <span class="badge badge-default">Cerrar </span> -->
						Contactos
					</router-link>  
					<router-link class="btn btn-primary" v-bind:to="{ name: 'Clients-View-Redicateds' }">
						<i class="fas fa-file-contract"></i>
						<!-- <span class="badge badge-default">Cerrar </span> -->
						Radicados
					</router-link>
					<router-link class="btn btn-secondary" v-bind:to="{ name: 'Clients-View-Auditors' }">
						<i class="fas fa-poll-h"></i>
						<!-- <span class="badge badge-default">Cerrar </span> -->
						Interventores
					</router-link>
					<router-link class="btn btn-secondary" v-bind:to="{ name: 'Clients-View-Services' }">
						<i class="fas fa-ticket-alt"></i>
						<!-- <span class="badge badge-default">Cerrar </span> -->
						Servicios
					</router-link>
					<router-link class="btn btn-secondary" v-bind:to="{ name: 'Clients-View-Invoices' }">
						<i class="fas fa-ticket-alt"></i>
						<!-- <span class="badge badge-default">Cerrar </span> -->
						Facturas
					</router-link>
				<router-link class="btn btn-secondary" v-bind:to="{ name: 'Clients-List' }">
					<span class="fa fa-window-close"></span>
					<!-- <span class="badge badge-default">Cerrar </span> -->
					Cerrar
				</router-link> 
			</div>
			<div class="card-body">
				<table class="table table-bordered">
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
			<div class="card-footer small text-muted"></div>
		</div>
	</div>		  
</template>

<template id="view-Clients-Auditors">
	<div>
		<div class="card mb-3">
			<div class="card-header">
				Cuentas
					<router-link class="btn btn-secondary" v-bind:to="{ name: 'Clients-View' }">
						<i class="fas fa-user-circle"></i>
						<!-- <span class="badge badge-default">Cerrar </span> -->
						Infomacion Basica
					</router-link>  
					<router-link class="btn btn-secondary" v-bind:to="{ name: 'Clients-View-Contacts' }">
						<span class="fas fa-users"></span>
						<!-- <span class="badge badge-default">Cerrar </span> -->
						Contactos
					</router-link>  
					<router-link class="btn btn-secondary" v-bind:to="{ name: 'Clients-View-Redicateds' }">
						<i class="fas fa-file-contract"></i>
						<!-- <span class="badge badge-default">Cerrar </span> -->
						Radicados
					</router-link>
					<router-link class="btn btn-primary" v-bind:to="{ name: 'Clients-View-Auditors' }">
						<i class="fas fa-poll-h"></i>
						<!-- <span class="badge badge-default">Cerrar </span> -->
						Interventores
					</router-link>
					<router-link class="btn btn-secondary" v-bind:to="{ name: 'Clients-View-Services' }">
						<i class="fas fa-ticket-alt"></i>
						<!-- <span class="badge badge-default">Cerrar </span> -->
						Servicios
					</router-link>
					<router-link class="btn btn-secondary" v-bind:to="{ name: 'Clients-View-Invoices' }">
						<i class="fas fa-ticket-alt"></i>
						<!-- <span class="badge badge-default">Cerrar </span> -->
						Facturas
					</router-link>
				<router-link class="btn btn-secondary" v-bind:to="{ name: 'Clients-List' }">
					<span class="fa fa-window-close"></span>
					<!-- <span class="badge badge-default">Cerrar </span> -->
					Cerrar
				</router-link> 
			</div>
			<div class="card-body">
				<table class="table table-bordered">
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
			<div class="card-footer small text-muted"></div>
		</div>
	</div>		  
</template>

<template id="view-Clients-Services">
	<div>
		<div class="card mb-3">
			<div class="card-header">
				Cuentas
					<router-link class="btn btn-secondary" v-bind:to="{ name: 'Clients-View' }">
						<i class="fas fa-user-circle"></i>
						<!-- <span class="badge badge-default">Cerrar </span> -->
						Infomacion Basica
					</router-link>  
					<router-link class="btn btn-secondary" v-bind:to="{ name: 'Clients-View-Contacts' }">
						<span class="fas fa-users"></span>
						<!-- <span class="badge badge-default">Cerrar </span> -->
						Contactos
					</router-link>  
					<router-link class="btn btn-secondary" v-bind:to="{ name: 'Clients-View-Redicateds' }">
						<i class="fas fa-file-contract"></i>
						<!-- <span class="badge badge-default">Cerrar </span> -->
						Radicados
					</router-link>
					<router-link class="btn btn-secondary" v-bind:to="{ name: 'Clients-View-Auditors' }">
						<i class="fas fa-poll-h"></i>
						<!-- <span class="badge badge-default">Cerrar </span> -->
						Interventores
					</router-link>
					<router-link class="btn btn-primary" v-bind:to="{ name: 'Clients-View-Services' }">
						<i class="fas fa-ticket-alt"></i>
						<!-- <span class="badge badge-default">Cerrar </span> -->
						Servicios
					</router-link>
					<router-link class="btn btn-secondary" v-bind:to="{ name: 'Clients-View-Invoices' }">
						<i class="fas fa-ticket-alt"></i>
						<!-- <span class="badge badge-default">Cerrar </span> -->
						Facturas
					</router-link>
				<router-link class="btn btn-secondary" v-bind:to="{ name: 'Clients-List' }">
					<span class="fa fa-window-close"></span>
					<!-- <span class="badge badge-default">Cerrar </span> -->
					Cerrar
				</router-link> 
			</div>
			<div class="card-body">
				<table class="table table-bordered">
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
								<table class="table table-bordered">
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
			<div class="card-footer small text-muted"></div>
		</div>
	</div>		  
</template>

<template id="view-Clients-Invoices">
	<div>
		<div class="card mb-3">
			<div class="card-header">
				Cuentas
					<router-link class="btn btn-secondary" v-bind:to="{ name: 'Clients-View' }">
						<i class="fas fa-user-circle"></i>
						<!-- <span class="badge badge-default">Cerrar </span> -->
						Infomacion Basica
					</router-link>  
					<router-link class="btn btn-secondary" v-bind:to="{ name: 'Clients-View-Contacts' }">
						<span class="fas fa-users"></span>
						<!-- <span class="badge badge-default">Cerrar </span> -->
						Contactos
					</router-link>  
					<router-link class="btn btn-secondary" v-bind:to="{ name: 'Clients-View-Redicateds' }">
						<i class="fas fa-file-contract"></i>
						<!-- <span class="badge badge-default">Cerrar </span> -->
						Radicados
					</router-link>
					<router-link class="btn btn-secondary" v-bind:to="{ name: 'Clients-View-Auditors' }">
						<i class="fas fa-poll-h"></i>
						<!-- <span class="badge badge-default">Cerrar </span> -->
						Interventores
					</router-link>
					<router-link class="btn btn-secondary" v-bind:to="{ name: 'Clients-View-Services' }">
						<i class="fas fa-ticket-alt"></i>
						<!-- <span class="badge badge-default">Cerrar </span> -->
						Servicios
					</router-link>
					<router-link class="btn btn-primary" v-bind:to="{ name: 'Clients-View-Invoices' }">
						<i class="fas fa-ticket-alt"></i>
						<!-- <span class="badge badge-default">Cerrar </span> -->
						Facturas
					</router-link>
				<router-link class="btn btn-secondary" v-bind:to="{ name: 'Clients-List' }">
					<span class="fa fa-window-close"></span>
					<!-- <span class="badge badge-default">Cerrar </span> -->
					Cerrar
				</router-link> 
			</div>
			<div class="card-body">
			</div>
			<div class="card-footer small text-muted"></div>
		</div>
	</div>		  
</template>

<template id="edit-Clients-Accounts">
	<div>
		<div class="card mb-3">
			<div class="card-header">
				<component-navbar-top-clients-edit v-bind:client_id="$route.params.client_id"></component-navbar-top-clients-edit>
			</div>
			<div class="card-body">
				<div class="card mb-3">
					<div class="card-header">
						<router-link class="btn btn-danger btn-md" v-bind:to="{name: 'Clients-Accounts-Edit-Add', params: { client_id: this.$route.params.client_id }}">
							<span class="fa fa-plus"></span>
							<!-- <span class="badge badge-default">Cerrar </span> -->
							Nueva
						</router-link> 
					</div>
					<div class="card-body">
						<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
							<thead>
								<tr>
									<td>ID</td>
									<td>Nombre del Proyecto</td>
									<td></td>
								</tr>
							</thead>
							<tbody>
								<tr v-for="account in accounts_clients">
									<td>{{ zfill(account.id, 11) }}</td>
									<td>{{ account.name }}</td>
									<td>
										<router-link class="btn btn-info btn-md" v-bind:to="{name: 'Clients-Accounts-Edit-Info', params: { account_id: account.id }}">
											<span class="fas fa-eye"></span>
											<!-- <span class="badge badge-default">Cerrar </span> -->
										</router-link> 
									</td>
								</tr>
							</tbody>
						</table>
					</div>
					<div class="card-footer small text-muted"></div>
				</div>
			</div>
			<div class="card-footer small text-muted">
			</div>
		</div>
	</div>
</template>

<template id="edit-Clients-Accounts-Info">
	<div>
		<div class="card mb-3">
			<div class="card-header">
				<component-navbar-top-clients-edit v-bind:client_id="$route.params.client_id"></component-navbar-top-clients-edit>
			</div>
			<div class="card-body">
				<div class="card mb-3">
					<div class="card-header">
						<router-link class="btn btn-primary	" v-bind:to="{name: 'Clients-Accounts-Edit-Info', params: { client_id: post.id }}">
							<span class="fa fa-window-close"></span>
							<!-- <span class="badge badge-default">Cerrar </span> -->
							Informacion Basica
						</router-link> 
						<router-link class="btn btn-secondary" v-bind:to="{name: 'Clients-Accounts-Edit-Invoices', params: { client_id: post.id }}">
							<span class="fa fa-window-close"></span>
							<!-- <span class="badge badge-default">Cerrar </span> -->
							Gastos
						</router-link> 
						<router-link class="btn btn-secondary" v-bind:to="{name: 'Clients-Accounts-Edit-Requests', params: { client_id: post.id }}">
							<span class="fa fa-window-close"></span>
							<!-- <span class="badge badge-default">Cerrar </span> -->
							Propuestas
						</router-link>
							<router-link class="btn btn-secondary" v-bind:to="{name: 'Clients-Accounts-Edit', params: { client_id: post.id, account_id: this.$route.params.account_id }}">
								<span class="fa fa-window-close"></span>
								<!-- <span class="badge badge-default">Cerrar </span> -->
								Cerrar
							</router-link> 
					</div>
					<div class="card-body">
						<div v-for="account in accounts_clients">
							<div class="row">
								<div class="col-md-2">
									<router-link class="btn btn-danger btn-md" v-bind:to="{name: 'Clients-Accounts-Delete', params: { client_id: account.client, account_client_id: account.id }}">
										<i class="fa fa-trash text-write"></i>
										Eliminar
									</router-link>
								</div>
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
											<select class="form-control search-select2-basic-single-null" v-model="account.contact">
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
						</div>
					</div>
					<div class="card-footer small text-muted"></div>
				</div>	
			</div>
			<div class="card-footer small text-muted">
			</div>
		</div>
	</div>
</template>

<template id="edit-Clients-Accounts-Invoices">
	<div>
		<div class="card mb-3">
			<div class="card-header">
				<component-navbar-top-clients-edit v-bind:client_id="$route.params.client_id"></component-navbar-top-clients-edit>
			</div>
			<div class="card-body">
				<div class="card mb-3">
					<div class="card-header">
						<router-link class="btn btn-secondary" v-bind:to="{name: 'Clients-Accounts-Edit-Info', params: { client_id: post.id }}">
							<span class="fa fa-window-close"></span>
							<!-- <span class="badge badge-default">Cerrar </span> -->
							Informacion Basica
						</router-link> 
						<router-link class="btn btn-primary" v-bind:to="{name: 'Clients-Accounts-Edit-Invoices', params: { client_id: post.id }}">
							<span class="fa fa-window-close"></span>
							<!-- <span class="badge badge-default">Cerrar </span> -->
							Gastos
						</router-link> 
						<router-link class="btn btn-secondary" v-bind:to="{name: 'Clients-Accounts-Edit-Requests', params: { client_id: post.id }}">
							<span class="fa fa-window-close"></span>
							<!-- <span class="badge badge-default">Cerrar </span> -->
							Propuestas
						</router-link>
							<router-link class="btn btn-secondary" v-bind:to="{name: 'Clients-Accounts-Edit', params: { client_id: post.id, account_id: this.$route.params.account_id }}">
								<span class="fa fa-window-close"></span>
								<!-- <span class="badge badge-default">Cerrar </span> -->
								Cerrar
							</router-link> 
					</div>
					<div class="card-body">
					
						<div v-for="account in accounts_clients">
							<div class="row">
								<div class="col-md-2">
									
									<router-link class="btn btn-success btn-md" v-bind:to="{name: 'ServicesClients-Add', params: { client_id: account.client, account_client_id: account.id }}">
										<i class="fa fa-plus"></i>
										Servicio
									</router-link>
								</div>
								<div class="col-md-2">
									<router-link class="btn btn-success btn-md" v-bind:to="{name: 'AttributesServicesClients-Add', params: { client_id: account.client, account_client_id: account.id }}">
										<i class="fa fa-plus"></i>
										Otro
									</router-link>
								</div>
								<div class="col-md-12">
									<h3></h3>
									<hr>
									<table class="table table-responsive">
										<thead>
											<tr>
												<th>ID</th>
												<th>NOMBRE</th>
												<!-- // <th>DESCRIPCION</th> -->
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
											<!-- // <td>{{ item.description }}</td> -->
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
								</div>
							</div>
						</div>
					</div>
					<div class="card-footer small text-muted"></div>
				</div>	
			</div>
			<div class="card-footer small text-muted">
			</div>
		</div>
	</div>
</template>

<template id="edit-Clients-Accounts-Requests">
	<div>
		<div class="card mb-3">
			<div class="card-header">
				<component-navbar-top-clients-edit v-bind:client_id="$route.params.client_id"></component-navbar-top-clients-edit>
			</div>
			<div class="card-body">
				<div class="card mb-3">
					<div class="card-header">
						<router-link class="btn btn-secondary" v-bind:to="{name: 'Clients-Accounts-Edit-Info', params: { client_id: post.id }}">
							<span class="fa fa-window-close"></span>
							<!-- <span class="badge badge-default">Cerrar </span> -->
							Informacion Basica
						</router-link> 
						<router-link class="btn btn-secondary" v-bind:to="{name: 'Clients-Accounts-Edit-Invoices', params: { client_id: post.id }}">
							<span class="fa fa-window-close"></span>
							<!-- <span class="badge badge-default">Cerrar </span> -->
							Gastos
						</router-link> 
						<router-link class="btn btn-primary" v-bind:to="{name: 'Clients-Accounts-Edit-Requests', params: { client_id: post.id }}">
							<span class="fa fa-window-close"></span>
							<!-- <span class="badge badge-default">Cerrar </span> -->
							Propuestas
						</router-link>
							<router-link class="btn btn-secondary" v-bind:to="{name: 'Clients-Accounts-Edit', params: { client_id: post.id, account_id: this.$route.params.account_id }}">
								<span class="fa fa-window-close"></span>
								<!-- <span class="badge badge-default">Cerrar </span> -->
								Cerrar
							</router-link> 
					</div>
					<div class="card-body">
						<div v-for="account in accounts_clients">
							<div class="row">
								<div class="col-md-2">
									<div class="dropup">
										<button class="btn btn-default btn-md dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
											Generar Propuesta
											<span class="caret"></span>
										</button>
										<hr>
										<ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
											<li class="dropdown-item" style="cursor:pointer;">
												<a @click="generateQuotation(account, 30)">
													<i class="fa fa-plus"></i>
													30 Días
												</a>
											</li>
											<li class="dropdown-item" style="cursor:pointer;">
												<a @click="generateQuotation(account, 60)">
													<i class="fa fa-plus"></i>
													60 Días
												</a>
											</li>
											<li class="dropdown-item" style="cursor:pointer;">
												<a @click="generateQuotation(account, 90)">
													<i class="fa fa-plus"></i>
													90 Días
												</a>
											</li class="dropdown-item" style="cursor:pointer;">
											<li role="separator" class="divider"></li>
											<!-- <li><a href="#">Separated link</a></li> -->
										</ul>
									</div>											
								</div>
								<div class="col-md-12">
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
												{{ quotation.status.name }}
											</td>
											<td>{{ quotation.validity }}</td>
											<td>														
												<div class="dropup">
													<button class="btn btn-default btn-md dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
														Ver PDF
														<span class="caret"></span>
													</button>
													<ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
														<li class="dropdown-item" style="cursor:pointer;">
															<a target="_new" v-bind:href="'/api/genQ.php?refQuotations=' + zfill(quotation.id, 11) + '&wellcome=false'">
																<i class="fa fa-eye"></i>
																Solo Propuesta
															</a>
														</li>
														<li role="separator" class="divider"></li>
														<li class="dropdown-item" style="cursor:pointer;">
															<a target="_new" v-bind:href="'/api/genQ.php?refQuotations=' + zfill(quotation.id, 11)">
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
					<div class="card-footer small text-muted"></div>
				</div>	
			</div>
			<div class="card-footer small text-muted">
			</div>
		</div>
	</div>
</template>

<template id="edit-Clients-Accounts-Add">
	<div>
		<div class="card mb-3">
			<div class="card-header">
				<component-navbar-top-clients-edit v-bind:client_id="$route.params.client_id"></component-navbar-top-clients-edit>
			</div>
			<div class="card-body">
				<div class="card mb-3">
					<div class="card-header">
						<router-link class="btn btn-secondary" v-bind:to="{ name: 'Clients-Accounts-Edit', params: { client_id: post.id } }">
							<span class="fa fa-window-close"></span>
							<!-- <span class="badge badge-default">Cerrar </span> -->
							Cerrar
						</router-link> 
					</div>
					<div class="card-body">
						<div class="row">
							<div class="col-md-6">
								<iframe v-if="urlMapSearchNewIframe != ''" style="width: 90%;height: 500px;left: 5%;position: relative;" v-bind:src="urlMapSearchNewIframe"></iframe>
							</div>
							<div class="col-md-6">
								<form class="row " v-on:submit="createNewAccount"> 
									<div class="form-group col-md-6">
										<label for="add-content">NOMBRE DEL PROYECTO</label>
										<input class="form-control" type="text" v-model="post_account.name" />
									</div>
									<div class="form-group col-md-6">
										<label for="add-content">PERSONA DE CONTACTO</label>
										<select class="form-control search-select2-basic-single-null" v-model="post_account.contact">
											<option v-for="item in selectOptions.crew_clients" :value="item.contact.id">{{ item.contact.identification_number }} - {{ item.contact.first_name }} {{ item.contact.second_name }} {{ item.contact.surname }} {{ item.contact.second_surname }} - {{ item.type_contact.name }}</option>
										</select>
									</div>
									<div class="form-group col-md-6">
										<label for="add-content">UBICACION DEL PROYECTO</label>
										<input class="form-control" type="text" v-model="post_account.address" @change="searchAddressGEO" />
									</div>
									<div class="form-group col-md-6">
										<label for="add-content">UBICACION DEL PROYECTO - GEO</label>
										<input class="form-control" type="text" v-model="post_account.geo_address" readonly="" />
									</div>
									<div class="form-group col-md-6">
										<label for="add-content">DIRECCION DE FACTURACION</label>
										<input class="form-control" type="text" v-model="post_account.address_invoices" @change="searchAddressInvoicesGEO" />
									</div>
									<div class="form-group col-md-6">
										<label for="add-content">UBICACION DE FACTURACION - GEO</label>
										<input class="form-control" type="text" v-model="post_account.geo_address_invoices" readonly="" />
									</div>
									<div class="form-group col-md-12">
										<label for="add-content">OBSERVACIONES</label>
										<textarea class="form-control" v-model="post_account.observations"></textarea>
									</div>
									<button type="submit" class="btn btn-primary col-md-12">Agregar</button>
								</form>
							</div>
						</div>
					</div>
					<div class="card-footer small text-muted">
						
					</div>
				</div>		
			</div>
			<div class="card-footer small text-muted">
				
			</div>
		</div>
	</div>
</template>



