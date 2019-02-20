<div>
    <section class="wthree-row" id="contact">
        <div class="container py-5">
			<section class="row" id="app">
				<div class="col-lg-12 py-5" data-blast="bgColor">
					<router-view></router-view>
				</div>
			</section>
		</div>
	</div>
</div>

<!-- // SIDEBAR -->
<template id="Sidebar-Clients-Component">
	<div>
		<div class="list-group ">
			<!--
			<router-link class="list-group-item list-group-item-action" 
			  v-bind:to="{name: 'Company-Info-View', params: { company_id: this.$route.params.company_id }}">
				<i class="fa fa-home"></i> 
				General
			</router-link>
			<router-link class="list-group-item list-group-item-action" 
			  v-bind:to="{name: 'Company-Requests-List', params: { company_id: this.$route.params.company_id }}">
				<i class="fa fa-home"></i> 
				Solicitudes & Proyectos
			</router-link>
			<router-link class="list-group-item list-group-item-action" 
			  v-bind:to="{name: 'Company-Invoices-List', params: { company_id: this.$route.params.company_id }}">
				<i class="fa fa-home"></i> 
				Facturas
			</router-link>
		 
			<router-link v-if="$route.params.quotation_id != undefined" class="list-group-item list-group-item-action" 
			  v-bind:to="{name: 'Company-Requests-View', params: { company_id: this.$route.params.company_id, request_id: this.$route.params.request_id }}">
				<i class="fa fa-home"></i> 
				Volver
			</router-link>
			-->
			
			<a v-if="$route.params.quotation_id == undefined" href="<?php echo path_homeClients; ?>" class="list-group-item list-group-item-action">Volver</a>
			
		</div> 
		<div class="container">
			<h3>{{ company_id }}</h3>
		</div>
	</div>
</template>
<!-- SIDEBAR // -->

<!-- INICIO -->
<template id="page-Company-Info-View">
	<div>
		<div class="container">
			<div class="row">
				<div class="col-md-3 ">
					<component-sidebar-clients></component-sidebar-clients>
				</div>
				<div class="col-md-9">
					<div class="card">
						<div class="card-body">
							<div class="row">
								<div class="col-md-12">
									<h4>Compañia</h4>
									<hr>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
									<form>
										<div class="form-group row">
											<label for="username" class="col-4 col-form-label">Tipo de Cliente</label>
											<div class="col-8">
												{{ post.type.name }}
											</div>
										</div>
										<div class="form-group row">
											<label for="username" class="col-4 col-form-label">Tipo de Identificacion</label>
											<div class="col-8">
												{{ post.identification_type.name }}
											</div>
										</div>
										<div class="form-group row">
											<label for="username" class="col-4 col-form-label">Numero de Identificacion</label>
											<div class="col-8">
												{{ post.identification_number }}
											</div>
										</div>
										<div class="form-group row">
											<label for="username" class="col-4 col-form-label">Nombre Comercial</label>
											<div class="col-8">
												{{ post.social_reason }}
											</div>
										</div>										
										<div class="form-group row">
											<label for="username" class="col-4 col-form-label">Nombre Comercial</label>
											<div class="col-8">
												{{ post.tradename }}
											</div>
										</div>
										<div class="form-group row">
											<label for="username" class="col-4 col-form-label">Departamento</label>
											<div class="col-8">
												{{ post.department.name }}
											</div>
										</div>
										<div class="form-group row">
											<label for="username" class="col-4 col-form-label">Ciudad</label>
											<div class="col-8">
												{{ post.city.name }}
											</div>
										</div>
										<div class="form-group row">
											<label for="username" class="col-4 col-form-label">Direccion Principal</label>
											<div class="col-8">
												{{ post.address }}
											</div>
										</div>
										<div class="form-group row">
											<label for="username" class="col-4 col-form-label">Representante Legal</label>
											<div class="col-8">
												Identificacion: {{ post.legal_representative.identification_number }}
												<br>
												Nombre Completo: {{ post.legal_representative.first_name }} {{ post.legal_representative.second_name }} {{ post.legal_representative.surname }}  {{ post.legal_representative.second_surname }} 
											</div>
										</div>
										<div class="form-group row">
											<label for="username" class="col-4 col-form-label">Contacto Principal</label>
											<div class="col-8">
												Identificacion: {{ post.contact_principal.identification_number }}
												<br>
												Nombre Completo: {{ post.contact_principal.first_name }} {{ post.contact_principal.second_name }} {{ post.contact_principal.surname }}  {{ post.contact_principal.second_surname }} 
											</div>
										</div>										
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</template>
<!-- FIN -->
