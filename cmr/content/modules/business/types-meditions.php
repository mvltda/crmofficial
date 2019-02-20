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
<!-- // ------------ TIPOS - MEDICIONES INICIO -------------------------------------  -->
<template id="page-TypesMeditions">
	<div>
		<div class="card mb-3">
			<div class="card-header">
				<router-link class="btn btn-success" v-bind:to="{ name: 'TypesMeditions-Add' }">
					<span class="fa fa-plus"></span>
					Nuevo
				</router-link> 
				Tipos de Mediciones
			</div>
			<div class="card-body">
				<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
					<thead>
						<tr>
							<th>ID</th>
							<th>Nombre</th>
							<th>Codigo</th>
							<th>Actions</th>
						</tr>
					</thead>
					<tbody>
						<tr v-if="posts===null">
							<td colspan="4">Loading...</td>
						</tr>
						<tr v-else v-for="post in filteredposts">
							<td>{{ post.id }}</td>
							<td>{{ post.name }}</td>
							<td>{{ post.code }}</td>
							<td>
							<router-link class="btn btn-info btn-md" v-bind:to="{name: 'TypesMeditions-View', params: { type_medition_id: post.id }}"><i class="fas fa-eye"></i> </router-link>
							<router-link class="btn btn-warning btn-md" v-bind:to="{name: 'TypesMeditions-Edit', params: { type_medition_id: post.id }}"><i class="fas fa-pencil-alt"></i> </router-link>
							<router-link class="btn btn-danger btn-md" v-bind:to="{name: 'TypesMeditions-Delete', params: { type_medition_id: post.id }}"><i class="fa fa-trash"></i> </router-link>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
			<div class="card-footer small text-muted"></div>
		</div>
	</div>
</template>

<template id="view-TypesMeditions">
	<div>
		<div class="card mb-3">
			<div class="card-header">
				<router-link class="btn btn-secondary" v-bind:to="{ name: 'TypesMeditions-List' }">
					<span class="fa fa-window-close"></span>
					<!-- <span class="badge badge-default">Cerrar </span> -->
					Cerrar
				</router-link> 
				Tipos de Mediciones
			</div>
			<div class="card-body">
				<table class="table table-bordered">
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
			</div>
			<div class="card-footer small text-muted"></div>
		</div>
	</div>		  
</template>

<template id="add-TypesMeditions">
	<div>
		<div class="card mb-3">
			<div class="card-header">
				<router-link class="btn btn-secondary" v-bind:to="{ name: 'TypesMeditions-List' }">
					<span class="fa fa-window-close"></span>
					<!-- <span class="badge badge-default">Cerrar </span> -->
					Cerrar
				</router-link> 
				Tipos de Mediciones
			</div>
			<div class="card-body">
				<form v-on:submit="createTypesMedition">
					<div class="form-group">
						<label for="add-content">NOMBRE</label>
						<input class="form-control" type="text" v-model="post.name" />
					</div>
					<div class="form-group">
						<label for="add-content">CODIGO</label>
						<input class="form-control" type="text" v-model="post.code" />
					</div>
					<button type="submit" class="btn btn-success">Crear</button>
				</form>
			</div>
			<div class="card-footer small text-muted"></div>
		</div>
	</div>
</template>

<template id="edit-TypesMeditions">
	<div>
		<div class="card mb-3">
			<div class="card-header">
				<router-link class="btn btn-secondary" v-bind:to="{ name: 'TypesMeditions-List' }">
					<span class="fa fa-window-close"></span>
					<!-- <span class="badge badge-default">Cerrar </span> -->
					Cerrar
				</router-link> 
				Tipos de Mediciones
			</div>
			<div class="card-body">
				<form v-on:submit="updateTypesMedition">
					<div class="form-group">
						<label for="edit-content">NOMBRE</label>
						<input class="form-control" id="edit-content" v-model="post.name" />
					</div>
					<div class="form-group">
						<label for="edit-content">CODIGO</label>
						<input class="form-control" id="edit-content" v-model="post.code" />
					</div>
					<button type="submit" class="btn btn-success">Guardar</button>
				</form>
			</div>
			<div class="card-footer small text-muted"></div>
		</div>
	</div>
</template>

<template id="delete-TypesMeditions">
	<div>
		<div class="card mb-3">
			<div class="card-header">
				<router-link class="btn btn-secondary" v-bind:to="{ name: 'TypesMeditions-List' }">
					<span class="fa fa-window-close"></span>
					<!-- <span class="badge badge-default">Cerrar </span> -->
					Cerrar
				</router-link> 
				Tipos de Mediciones
			</div>
			<div class="card-body">
			</div>
			<div class="card-footer small text-muted"></div>
		</div>
		<h2>TIPOS - MEDICIONES - Eliminar</h2>
		<form v-on:submit="deleteTypesMedition">
			<p>The action cannot be undone.</p>
			<button type="submit" class="btn btn-danger">Eliminar</button>
			<router-link class="btn btn-primary" v-bind:to="{ name: 'TypesMeditions-List' }">Cancelar</router-link>
		</form>
	</div>
</template>
<!-- // ------------ TIPOS - MEDICIONES FIN -------------------------------------  -->

