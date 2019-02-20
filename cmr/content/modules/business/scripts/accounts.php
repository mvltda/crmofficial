<style>
	/* Vertical Tabs
	 .vertical-tabs{
		font-size:15px;
		padding:10px;
		color:#000
	}
	 .vertical-tabs .nav-tabs .nav-link{
		border-radius: 0;
		background:#c10101;
		text-align:center;
		font-size: 16px;
		border:1px solid #424242;
		color:#fff;
		height:40px;
		width: 135px;
	}
	 .vertical-tabs .nav-tabs .nav-link.active{
		background-color:#700000!important;
		color:#fff;
	}
	 .vertical-tabs .tab-content>.active{
		background:#fff;
		display:block;
	}
	 .vertical-tabs .nav.nav-tabs{
		border-bottom:0;
		border-right:3px solid #000;
		display:block;
		float:left;
		margin-right:20px;
		padding-right:15px;
	}
	 .vertical-tabs .sv-tab-panel{
		background:#fff;
		height:274px;
		padding-top:10px;
	}
	@media only screen and (max-width: 420px){
	  .titulo{font-size: 22px}
	}
	@media only screen and (max-width: 325px){
	  .vertical-tabs{ padding:8px;}
	} */
</style>
<script>
	var Navbar_Top_Clients_Component = Vue.component('component-navbar-top-clients-edit', {
		template: '#Navbar-Top-Clients-Edit-Component',
		props: [
			'client_id',
		],
		methods: {
			getClassEditClients: function(){
				var self = this;
				return 'btn btn-secondary';				
			}
		}
	});
	
	// ------------ CLIENTES - INICIO ------------------------------------- 
	var Clients_List = Vue.extend({
	  template: '#page-Clients',
	  data: function () {
		return {
			posts: [],
			searchKey: ''
		};
	  },
	  mounted: function () {
		var self = this;
		self.posts = [];
		apiMV.get('/clients', {
			params: {
				join: [
					'types_clients',
					'types_identifications',
				]
			}
		}).then(function (response) {
			self.posts = response.data.records;
			$(document).ready(function() { $('#dataTable').DataTable(); });
		}).catch(function (error) {
			$.notify(error.response.data.code + error.response.data.message, "error");
		});
	  },
	  computed: {
		filteredposts: function () {
		  return this.posts.filter(function (post) {
			return this.searchKey=='' || post.social_reason.indexOf(this.searchKey) !== -1;
		  },this);
		}
	  }
	});

	var Clients_Add = Vue.extend({
		template: '#add-Clients',
		data: function () {
			return {
				selectOptions: {
					types_clients: this.$parent.selectOptions.types_clients,
					types_identifications: this.$parent.selectOptions.types_identifications,
					types_societys: this.$parent.selectOptions.types_societys,
					geo_departments: this.$parent.selectOptions.geo_departments,
					geo_citys: [],
					contacts: this.$parent.selectOptions.contacts,
				},
				post: {
					type: 0,
					identification_type: 0,
					identification_number: '',
					social_reason: '',
					tradename: '',
					society_type: 0,
					department: 0,
					city: 0,
					address: '',
					geo_address: '',
					legal_representative: 0,
					contact_principal: 0,
					contact_alternative: 0,
					enable_audit: 0,
				}
			}
		},
		mounted: function(){
			var self = this;
			self.loadSelects();
			$(document).ready(function() { $('.search-select2-basic-single').select2(); });
		},
		methods: {
			loadSelects: function(){
				var self = this;
				
				apiMV.get('/types_clients', { params: { order: 'name,asc', } })
					.then(function (response) {
						self.selectOptions.types_clients = response.data.records;
					}).catch(function (error) {
						$.notify(error.response.data.code + error.response.data.message, "error");
					});
					
				apiMV.get('/types_identifications', { params: { order: 'name,asc', } })
					.then(function (response) {
						self.selectOptions.types_identifications = response.data.records;
					}).catch(function (error) {
						$.notify(error.response.data.code + error.response.data.message, "error");
					});
					
				apiMV.get('/types_societys', { params: { order: 'name,asc', } })
					.then(function (response) {
						self.selectOptions.types_societys = response.data.records;
					}).catch(function (error) {
						$.notify(error.response.data.code + error.response.data.message, "error");
					});
					
				apiMV.get('/geo_departments', { params: { order: 'name,asc', } })
					.then(function (response) {
						self.selectOptions.geo_departments = response.data.records;
					}).catch(function (error) {
						$.notify(error.response.data.code + error.response.data.message, "error");
					});
					
				apiMV.get('/geo_citys', { params: { order: 'name,asc', } })
					.then(function (response) {
						self.selectOptions.geo_citys = response.data.records;
					}).catch(function (error) {
						$.notify(error.response.data.code + error.response.data.message, "error");
					});
					
				apiMV.get('/contacts', { params: { order: 'name,asc', } })
					.then(function (response) {
						self.selectOptions.contacts = response.data.records;
					}).catch(function (error) {
						$.notify(error.response.data.code + error.response.data.message, "error");
					});
					
				apiMV.get('/types_contacts', { params: { order: 'name,asc', } })
					.then(function (response) {
						self.selectOptions.types_contacts = response.data.records;
					}).catch(function (error) {
						$.notify(error.response.data.code + error.response.data.message, "error");
					});
					
			},
			loadCitys: function(){
				var self = this;
				
				apiMV.get('/geo_citys', {
					params: {
						order: 'name,asc',
						filter: 'department,eq,' + self.post.department,
					}
				}).then(function (response) {
					self.selectOptions.geo_citys = response.data.records;
					
				}).catch(function (error) {
					$.notify(error.response.data.code + error.response.data.message, "error");
				});
			},
			createClient: function() {
				var post = this.post;
				apiMV.post('/clients', post).then(function (response) {
					post.id = response.data;
					router.push('/');
				}).catch(function (error) {
					$.notify(error.response.data.code + error.response.data.message, "error");
				});
			}
		},
	});

	var Clients_Info_Edit = Vue.extend({
		template: '#edit-Clients-Info',
		data: function () {
			return {
				selectOptions: {
					types_clients: [],
					types_identifications: [],
					types_societys: [],
					geo_departments: [],
					geo_citys: [],
					contacts: [],
					types_contacts: [],
					types_repeats_services_clients: [],
				},
				post: {
					id: this.$route.params.client_id,
					type: 0,
					identification_type: 0,
					identification_number: '',
					social_reason: '',
					tradename: '',
					society_type: 0,
					department: 0,
					city: 0,
					address: '',
					geo_address: '',
					legal_representative: 0,
					contact_principal: 0,
					contact_alternative: 0,
					enable_audit: 0,
				},
				crew_clients: [],
				redicated_clients: [],
				auditors_clients: [],
				accounts_clients: [],
				post_crew_clients: {
					client: this.$route.params.client_id,
					contact: 0,
					type_contact: 0,
				},
				post_redicated_clients: {
					client: this.$route.params.client_id,
					consecutive: '',
					name: '',
					object: '',
					description_service: '',
					date_start: '',
					date_end: '',
					additional_notes: '',
				},
				post_auditors_clients: {
					contact: 0,
					client: this.$route.params.client_id,
				},
				calc: {
					subService: 0,
					subTotalAttributes: 0,
				}
			};
		},
		mounted: function () {
			var self = this;
			self.loadSelects();
			self.findClients();
		},
		methods: {
			zfill: function(number, width) {
				var numberOutput = Math.abs(number); /* Valor absoluto del número */
				var length = number.toString().length; /* Largo del número */ 
				var zero = "0"; /* String de cero */  
				
				if (width <= length) {
					if (number < 0) {
						 return ("-" + numberOutput.toString()); 
					} else {
						 return numberOutput.toString(); 
					}
				} else {
					if (number < 0) {
						return ("-" + (zero.repeat(width - length)) + numberOutput.toString()); 
					} else {
						return ((zero.repeat(width - length)) + numberOutput.toString()); 
					}
				}
			},
			formatMoney: function(n, c, d, t){
				var c = isNaN(c = Math.abs(c)) ? 2 : c,
					d = d == undefined ? "." : d,
					t = t == undefined ? "," : t,
					s = n < 0 ? "-" : "",
					i = String(parseInt(n = Math.abs(Number(n) || 0).toFixed(c))),
					j = (j = i.length) > 3 ? j % 3 : 0;

				return s + (j ? i.substr(0, j) + t : "") + i.substr(j).replace(/(\d{3})(?=\d)/g, "$1" + t) + (c ? d + Math.abs(n - i).toFixed(c).slice(2) : "");
			},
			loadSelects: function(){
				var self = this;
				
				apiMV.get('/types_clients', { params: { order: 'name,asc', } })
					.then(function (response) {
						self.selectOptions.types_clients = response.data.records;
					}).catch(function (error) {
						$.notify(error.response.data.code + error.response.data.message, "error");
					});
					
				apiMV.get('/types_identifications', { params: { order: 'name,asc', } })
					.then(function (response) {
						self.selectOptions.types_identifications = response.data.records;
					}).catch(function (error) {
						$.notify(error.response.data.code + error.response.data.message, "error");
					});
					
				apiMV.get('/types_societys', { params: { order: 'name,asc', } })
					.then(function (response) {
						self.selectOptions.types_societys = response.data.records;
					}).catch(function (error) {
						$.notify(error.response.data.code + error.response.data.message, "error");
					});
					
				apiMV.get('/geo_departments', { params: { order: 'name,asc', } })
					.then(function (response) {
						self.selectOptions.geo_departments = response.data.records;
					}).catch(function (error) {
						$.notify(error.response.data.code + error.response.data.message, "error");
					});
					
				apiMV.get('/geo_citys', { params: { order: 'name,asc', } })
					.then(function (response) {
						self.selectOptions.geo_citys = response.data.records;
					}).catch(function (error) {
						$.notify(error.response.data.code + error.response.data.message, "error");
					});
					
				apiMV.get('/contacts', { params: { order: 'name,asc', } })
					.then(function (response) {
						self.selectOptions.contacts = response.data.records;
					}).catch(function (error) {
						$.notify(error.response.data.code + error.response.data.message, "error");
					});
					
				apiMV.get('/types_contacts', { params: { order: 'name,asc', } })
					.then(function (response) {
						self.selectOptions.types_contacts = response.data.records;
					}).catch(function (error) {
						$.notify(error.response.data.code + error.response.data.message, "error");
					});
					
			},
			loadCitys: function(){
				var self = this;
				
				apiMV.get('/geo_citys', {
					params: {
						order: 'name,asc',
						filter: 'department,eq,' + self.post.department,
					}
				}).then(function (response) {
					self.selectOptions.geo_citys = response.data.records;
					
				}).catch(function (error) {
					$.notify(error.response.data.code + error.response.data.message, "error");
				});
			},
			updateClient: function () {
				var self = this;
				var post = this.post;
				apiMV.put('/clients/' + post.id, post).then(function (response) {
					console.log(response.data);
					$.notify("Guardado con éxito.", "success");
					self.findClients();
				}).catch(function (error) {
					$.notify(error.response.data.code + error.response.data.message, "error");
				});
			},
			findClients: function(){
				var self = this;
				var idClient = self.$route.params.client_id;
				
				apiMV.get('/clients/' + idClient).then(function (response) {
					self.post = response.data;
					$(document).ready(function() { $('.search-select2-basic-single').select2(); });
				}).catch(function (error) {
					$.notify(error.response.data.code + error.response.data.message, "error");
				});
				
				
				$("#includeContactClient-Fast").hide();
				$("#includeRedicatedClient-Fast").hide();
				$("#includeAuditorClient-Fast").hide();
			},
			includeContactClient: function(){
				var self = this;
				
				apiMV.post('/crew_clients', self.post_crew_clients).then(function (response) {
					// post.id = response.data;
					$("#includeContactClient-Fast").hide();
					self.findClients();
					self.post_crew_clients.contact = 0;
					self.post_crew_clients.type_contact = 0;
				}).catch(function (error) {
					$.notify(error.response.data.code + error.response.data.message, "error");
					$.notify(error.response.data.code + error.response.data.message, "error");
				});
			},
			includeRedicatedClient: function(){
				var self = this;
				
				apiMV.post('/redicated_clients', self.post_redicated_clients).then(function (response) {
					// post.id = response.data;
					$("#includeRedicatedClient-Fast").hide();
					self.findClients();
					self.post_redicated_clients.consecutive = '';
					self.post_redicated_clients.name = '';
					self.post_redicated_clients.object = '';
					self.post_redicated_clients.description_service = '';
					self.post_redicated_clients.date_start = '';
					self.post_redicated_clients.date_end = '';
					self.post_redicated_clients.additional_notes = '';
				}).catch(function (error) {
					$.notify(error.response.data.code + error.response.data.message, "error");
					$.notify(error.response.data.code + error.response.data.message, "error");
				});
			},
			includeAuditorClient: function(){
				var self = this;
				
				apiMV.post('/auditors_clients', self.post_auditors_clients).then(function (response) {
					// post.id = response.data;
					$("#includeAuditorClient-Fast").hide();
					self.findClients();
					self.post_auditors_clients.contact = 0;
				}).catch(function (error) {
					$.notify(error.response.data.code + error.response.data.message, "error");
					$.notify(error.response.data.code + error.response.data.message, "error");
				});
			},
		}
	});

	var Clients_Contacts_Edit = Vue.extend({
		template: '#edit-Clients-Contacts',
		data: function () {
			return {
				selectOptions: {
					types_clients: this.$parent.selectOptions.types_clients,
					types_identifications: this.$parent.selectOptions.types_identifications,
					types_societys: this.$parent.selectOptions.types_societys,
					geo_departments: this.$parent.selectOptions.geo_departments,
					geo_citys: this.$parent.selectOptions.geo_citys,
					contacts: this.$parent.selectOptions.contacts,
					types_contacts: this.$parent.selectOptions.types_contacts,
					types_repeats_services_clients: this.$parent.selectOptions.types_repeats_services_clients,
				},
				post: {
					id: this.$route.params.client_id,
					type: 0,
					identification_type: 0,
					identification_number: '',
					social_reason: '',
					tradename: '',
					society_type: 0,
					department: 0,
					city: 0,
					address: '',
					geo_address: '',
					legal_representative: 0,
					contact_principal: 0,
					contact_alternative: 0,
					enable_audit: 0,
				},
				crew_clients: [],
				redicated_clients: [],
				auditors_clients: [],
				accounts_clients: [],
				post_crew_clients: {
					client: this.$route.params.client_id,
					contact: 0,
					type_contact: 0,
				},
				post_redicated_clients: {
					client: this.$route.params.client_id,
					consecutive: '',
					name: '',
					object: '',
					description_service: '',
					date_start: '',
					date_end: '',
					additional_notes: '',
				},
				post_auditors_clients: {
					contact: 0,
					client: this.$route.params.client_id,
				},
				calc: {
					subService: 0,
					subTotalAttributes: 0,
				}
			};
		},
		mounted: function () {
			var self = this;
			self.loadSelects();
			self.findClients();
		},
		methods: {
			zfill: function(number, width) {
				var numberOutput = Math.abs(number); /* Valor absoluto del número */
				var length = number.toString().length; /* Largo del número */ 
				var zero = "0"; /* String de cero */  
				
				if (width <= length) {
					if (number < 0) {
						 return ("-" + numberOutput.toString()); 
					} else {
						 return numberOutput.toString(); 
					}
				} else {
					if (number < 0) {
						return ("-" + (zero.repeat(width - length)) + numberOutput.toString()); 
					} else {
						return ((zero.repeat(width - length)) + numberOutput.toString()); 
					}
				}
			},
			formatMoney: function(n, c, d, t){
				var c = isNaN(c = Math.abs(c)) ? 2 : c,
					d = d == undefined ? "." : d,
					t = t == undefined ? "," : t,
					s = n < 0 ? "-" : "",
					i = String(parseInt(n = Math.abs(Number(n) || 0).toFixed(c))),
					j = (j = i.length) > 3 ? j % 3 : 0;

				return s + (j ? i.substr(0, j) + t : "") + i.substr(j).replace(/(\d{3})(?=\d)/g, "$1" + t) + (c ? d + Math.abs(n - i).toFixed(c).slice(2) : "");
			},
			loadSelects: function(){
				var self = this;
				
				apiMV.get('/types_clients', { params: { order: 'name,asc', } })
					.then(function (response) {
						self.selectOptions.types_clients = response.data.records;
					}).catch(function (error) {
						$.notify(error.response.data.code + error.response.data.message, "error");
					});
					
				apiMV.get('/types_identifications', { params: { order: 'name,asc', } })
					.then(function (response) {
						self.selectOptions.types_identifications = response.data.records;
					}).catch(function (error) {
						$.notify(error.response.data.code + error.response.data.message, "error");
					});
					
				apiMV.get('/types_societys', { params: { order: 'name,asc', } })
					.then(function (response) {
						self.selectOptions.types_societys = response.data.records;
					}).catch(function (error) {
						$.notify(error.response.data.code + error.response.data.message, "error");
					});
					
				apiMV.get('/geo_departments', { params: { order: 'name,asc', } })
					.then(function (response) {
						self.selectOptions.geo_departments = response.data.records;
					}).catch(function (error) {
						$.notify(error.response.data.code + error.response.data.message, "error");
					});
					
				apiMV.get('/geo_citys', { params: { order: 'name,asc', } })
					.then(function (response) {
						self.selectOptions.geo_citys = response.data.records;
					}).catch(function (error) {
						$.notify(error.response.data.code + error.response.data.message, "error");
					});
					
				apiMV.get('/contacts', { params: { order: 'name,asc', } })
					.then(function (response) {
						self.selectOptions.contacts = response.data.records;
					}).catch(function (error) {
						$.notify(error.response.data.code + error.response.data.message, "error");
					});
					
				apiMV.get('/types_contacts', { params: { order: 'name,asc', } })
					.then(function (response) {
						self.selectOptions.types_contacts = response.data.records;
					}).catch(function (error) {
						$.notify(error.response.data.code + error.response.data.message, "error");
					});
			},
			loadCitys: function(){
				var self = this;
				
				apiMV.get('/geo_citys', {
					params: {
						order: 'name,asc',
						filter: 'department,eq,' + self.post.department,
					}
				}).then(function (response) {
					self.selectOptions.geo_citys = response.data.records;
					
				}).catch(function (error) {
					$.notify(error.response.data.code + error.response.data.message, "error");
				});
			},
			updateClient: function () {
				var post = this.post;
				apiMV.put('/clients/' + post.id, post).then(function (response) {
					console.log(response.data);
					router.push('//' + self.$route.params.client_id + '/Contacts/Edit');
				}).catch(function (error) {
					$.notify(error.response.data.code + error.response.data.message, "error");
				});
			},
			findClients: function(){
				var self = this;
				var idClient = self.$route.params.client_id;
				
				apiMV.get('/clients/' + idClient).then(function (response) {
					self.post = response.data;
				}).catch(function (error) {
					$.notify(error.response.data.code + error.response.data.message, "error");
				});
				
				apiMV.get('/crew_clients', {
					params: {
						filter: 'client,eq,' + idClient,
						join: [
							'contacts',
							'types_contacts',
						],
					}
				}).then(function (response) {
					self.crew_clients = response.data.records;
					$(document).ready(function() { $('.search-select2-basic-single').select2(); });
				}).catch(function (error) {
					$.notify(error.response.data.code + error.response.data.message, "error");
				});
				
				
				$("#includeContactClient-Fast").hide();
				$("#includeRedicatedClient-Fast").hide();
				$("#includeAuditorClient-Fast").hide();
			},
			includeContactClient: function(){
				var self = this;
				
				console.log(self.post_crew_clients);
				
				apiMV.post('/crew_clients', self.post_crew_clients).then(function (response) {
					// post.id = response.data;
					$("#includeContactClient-Fast").hide();
					self.findClients();
					self.post_crew_clients.contact = 0;
					self.post_crew_clients.type_contact = 0;
				}).catch(function (error) {
					$.notify(error.response.data.code + error.response.data.message, "error");
					$.notify(error.response.data.code + error.response.data.message, "error");
				});
			},
			includeRedicatedClient: function(){
				var self = this;
				
				apiMV.post('/redicated_clients', self.post_redicated_clients).then(function (response) {
					// post.id = response.data;
					$("#includeRedicatedClient-Fast").hide();
					self.findClients();
					self.post_redicated_clients.consecutive = '';
					self.post_redicated_clients.name = '';
					self.post_redicated_clients.object = '';
					self.post_redicated_clients.description_service = '';
					self.post_redicated_clients.date_start = '';
					self.post_redicated_clients.date_end = '';
					self.post_redicated_clients.additional_notes = '';
				}).catch(function (error) {
					$.notify(error.response.data.code + error.response.data.message, "error");
					$.notify(error.response.data.code + error.response.data.message, "error");
				});
			},
			includeAuditorClient: function(){
				var self = this;
				
				apiMV.post('/auditors_clients', self.post_auditors_clients).then(function (response) {
					// post.id = response.data;
					$("#includeAuditorClient-Fast").hide();
					self.findClients();
					self.post_auditors_clients.contact = 0;
				}).catch(function (error) {
					$.notify(error.response.data.code + error.response.data.message, "error");
					$.notify(error.response.data.code + error.response.data.message, "error");
				});
			},
		}
	});

	var Clients_Redicateds_Edit = Vue.extend({
		template: '#edit-Clients-Redicateds',
		data: function () {
			return {
				selectOptions: {
					types_clients: this.$parent.selectOptions.types_clients,
					types_identifications: this.$parent.selectOptions.types_identifications,
					types_societys: this.$parent.selectOptions.types_societys,
					geo_departments: this.$parent.selectOptions.geo_departments,
					geo_citys: this.$parent.selectOptions.geo_citys,
					contacts: this.$parent.selectOptions.contacts,
					types_contacts: this.$parent.selectOptions.types_contacts,
					types_repeats_services_clients: this.$parent.selectOptions.types_repeats_services_clients,
				},
				post: {
					id: this.$route.params.client_id,
					type: 0,
					identification_type: 0,
					identification_number: '',
					social_reason: '',
					tradename: '',
					society_type: 0,
					department: 0,
					city: 0,
					address: '',
					geo_address: '',
					legal_representative: 0,
					contact_principal: 0,
					contact_alternative: 0,
					enable_audit: 0,
				},
				crew_clients: [],
				redicated_clients: [],
				auditors_clients: [],
				accounts_clients: [],
				post_crew_clients: {
					client: this.$route.params.client_id,
					contact: 0,
					type_contact: 0,
				},
				post_redicated_clients: {
					client: this.$route.params.client_id,
					consecutive: '',
					name: '',
					object: '',
					description_service: '',
					date_start: '',
					date_end: '',
					additional_notes: '',
				},
				post_auditors_clients: {
					contact: 0,
					client: this.$route.params.client_id,
				},
				calc: {
					subService: 0,
					subTotalAttributes: 0,
				}
			};
		},
		mounted: function () {
			var self = this;
			self.loadSelects();
			self.findClients();
		},
		methods: {
			zfill: function(number, width) {
				var numberOutput = Math.abs(number); /* Valor absoluto del número */
				var length = number.toString().length; /* Largo del número */ 
				var zero = "0"; /* String de cero */  
				
				if (width <= length) {
					if (number < 0) {
						 return ("-" + numberOutput.toString()); 
					} else {
						 return numberOutput.toString(); 
					}
				} else {
					if (number < 0) {
						return ("-" + (zero.repeat(width - length)) + numberOutput.toString()); 
					} else {
						return ((zero.repeat(width - length)) + numberOutput.toString()); 
					}
				}
			},
			formatMoney: function(n, c, d, t){
				var c = isNaN(c = Math.abs(c)) ? 2 : c,
					d = d == undefined ? "." : d,
					t = t == undefined ? "," : t,
					s = n < 0 ? "-" : "",
					i = String(parseInt(n = Math.abs(Number(n) || 0).toFixed(c))),
					j = (j = i.length) > 3 ? j % 3 : 0;

				return s + (j ? i.substr(0, j) + t : "") + i.substr(j).replace(/(\d{3})(?=\d)/g, "$1" + t) + (c ? d + Math.abs(n - i).toFixed(c).slice(2) : "");
			},
			loadSelects: function(){
				var self = this;
				
				apiMV.get('/types_clients', { params: { order: 'name,asc', } })
					.then(function (response) { self.selectOptions.types_clients = response.data.records; })
					.catch(function (error) { $.notify(error.response.data.code + error.response.data.message, "error"); });
					
				apiMV.get('/types_identifications', { params: { order: 'name,asc', } })
					.then(function (response) { self.selectOptions.types_identifications = response.data.records; })
					.catch(function (error) { $.notify(error.response.data.code + error.response.data.message, "error"); });
					
				apiMV.get('/types_societys', { params: { order: 'name,asc', } })
					.then(function (response) { self.selectOptions.types_societys = response.data.records; })
					.catch(function (error) { $.notify(error.response.data.code + error.response.data.message, "error"); });
					
				apiMV.get('/geo_departments', { params: { order: 'name,asc', } })
					.then(function (response) { self.selectOptions.geo_departments = response.data.records; })
					.catch(function (error) { $.notify(error.response.data.code + error.response.data.message, "error"); });
					
				apiMV.get('/geo_citys', { params: { order: 'name,asc', } })
					.then(function (response) { self.selectOptions.geo_citys = response.data.records; })
					.catch(function (error) { $.notify(error.response.data.code + error.response.data.message, "error"); });
					
				apiMV.get('/contacts', { params: { order: 'name,asc', } })
					.then(function (response) { self.selectOptions.contacts = response.data.records; })
					.catch(function (error) { $.notify(error.response.data.code + error.response.data.message, "error"); });
					
				apiMV.get('/types_contacts', { params: { order: 'name,asc', } })
					.then(function (response) { self.selectOptions.types_contacts = response.data.records; })
					.catch(function (error) { $.notify(error.response.data.code + error.response.data.message, "error"); });
					
			},
			loadCitys: function(){
				var self = this;
				
				apiMV.get('/geo_citys', {
					params: {
						order: 'name,asc',
						filter: 'department,eq,' + self.post.department,
					}
				}).then(function (response) {
					self.selectOptions.geo_citys = response.data.records;
					
				}).catch(function (error) {
					$.notify(error.response.data.code + error.response.data.message, "error");
				});
			},
			updateClient: function () {
				var post = this.post;
				apiMV.put('/clients/' + post.id, post).then(function (response) {
					console.log(response.data);
					router.push('//' + self.$route.params.client_id + '/Redicateds/Edit');
				}).catch(function (error) {
					$.notify(error.response.data.code + error.response.data.message, "error");
				});
			},
			findClients: function(){
				var self = this;
				var idClient = self.$route.params.client_id;
				
				apiMV.get('/clients/' + idClient).then(function (response) {
					self.post = response.data;
				}).catch(function (error) {
					$.notify(error.response.data.code + error.response.data.message, "error");
				});
							
				apiMV.get('/redicated_clients', {
					params: {
						filter: 'client,eq,' + idClient,
					}
				}).then(function (response) {
					self.redicated_clients = response.data.records;
					$(document).ready(function() { $('#dataTable').DataTable(); });
				}).catch(function (error) {
					$.notify(error.response.data.code + error.response.data.message, "error");
				});
				
				$("#includeContactClient-Fast").hide();
				$("#includeRedicatedClient-Fast").hide();
				$("#includeAuditorClient-Fast").hide();
			},
			includeContactClient: function(){
				var self = this;
				
				apiMV.post('/crew_clients', self.post_crew_clients).then(function (response) {
					// post.id = response.data;
					$("#includeContactClient-Fast").hide();
					self.findClients();
					self.post_crew_clients.contact = 0;
					self.post_crew_clients.type_contact = 0;
				}).catch(function (error) {
					$.notify(error.response.data.code + error.response.data.message, "error");
					$.notify(error.response.data.code + error.response.data.message, "error");
				});
			},
			includeRedicatedClient: function(){
				var self = this;
				
				apiMV.post('/redicated_clients', self.post_redicated_clients).then(function (response) {
					// post.id = response.data;
					$("#includeRedicatedClient-Fast").hide();
					self.findClients();
					self.post_redicated_clients.consecutive = '';
					self.post_redicated_clients.name = '';
					self.post_redicated_clients.object = '';
					self.post_redicated_clients.description_service = '';
					self.post_redicated_clients.date_start = '';
					self.post_redicated_clients.date_end = '';
					self.post_redicated_clients.additional_notes = '';
				}).catch(function (error) {
					$.notify(error.response.data.code + error.response.data.message, "error");
					$.notify(error.response.data.code + error.response.data.message, "error");
				});
			},
			includeAuditorClient: function(){
				var self = this;
				
				apiMV.post('/auditors_clients', self.post_auditors_clients).then(function (response) {
					// post.id = response.data;
					$("#includeAuditorClient-Fast").hide();
					self.findClients();
					self.post_auditors_clients.contact = 0;
				}).catch(function (error) {
					$.notify(error.response.data.code + error.response.data.message, "error");
					$.notify(error.response.data.code + error.response.data.message, "error");
				});
			},
		}
	});

	var Clients_Auditors_Edit = Vue.extend({
		template: '#edit-Clients-Auditors',
		data: function () {
			return {
				selectOptions: {
					types_clients: [],
					types_identifications: [],
					types_societys: [],
					geo_departments: [],
					geo_citys: [],
					contacts: [],
					types_contacts: [],
					types_repeats_services_clients: [],
				},
				post: {
					id: 0,
					type: 0,
					identification_type: 0,
					identification_number: '',
					social_reason: '',
					tradename: '',
					society_type: 0,
					department: 0,
					city: 0,
					address: '',
					geo_address: '',
					legal_representative: 0,
					contact_principal: 0,
					contact_alternative: 0,
					enable_audit: 0,
				},
				crew_clients: [],
				redicated_clients: [],
				auditors_clients: [],
				accounts_clients: [],
				post_crew_clients: {
					client: this.$route.params.client_id,
					contact: 0,
					type_contact: 0,
				},
				post_redicated_clients: {
					client: this.$route.params.client_id,
					consecutive: '',
					name: '',
					object: '',
					description_service: '',
					date_start: '',
					date_end: '',
					additional_notes: '',
				},
				post_auditors_clients: {
					contact: 0,
					client: this.$route.params.client_id,
				},
				calc: {
					subService: 0,
					subTotalAttributes: 0,
				}
			};
		},
		mounted: function () {
			var self = this;
			self.loadSelects();
			self.findClients();
		},
		methods: {
			zfill: function(number, width) {
				var numberOutput = Math.abs(number); /* Valor absoluto del número */
				var length = number.toString().length; /* Largo del número */ 
				var zero = "0"; /* String de cero */  
				
				if (width <= length) {
					if (number < 0) {
						 return ("-" + numberOutput.toString()); 
					} else {
						 return numberOutput.toString(); 
					}
				} else {
					if (number < 0) {
						return ("-" + (zero.repeat(width - length)) + numberOutput.toString()); 
					} else {
						return ((zero.repeat(width - length)) + numberOutput.toString()); 
					}
				}
			},
			formatMoney: function(n, c, d, t){
				var c = isNaN(c = Math.abs(c)) ? 2 : c,
					d = d == undefined ? "." : d,
					t = t == undefined ? "," : t,
					s = n < 0 ? "-" : "",
					i = String(parseInt(n = Math.abs(Number(n) || 0).toFixed(c))),
					j = (j = i.length) > 3 ? j % 3 : 0;

				return s + (j ? i.substr(0, j) + t : "") + i.substr(j).replace(/(\d{3})(?=\d)/g, "$1" + t) + (c ? d + Math.abs(n - i).toFixed(c).slice(2) : "");
			},
			loadSelects: function(){
				var self = this;
				
				apiMV.get('/types_clients', { params: { order: 'name,asc', } })
					.then(function (response) { self.selectOptions.types_clients = response.data.records; })
					.catch(function (error) { $.notify(error.response.data.code + error.response.data.message, "error"); });
					
				apiMV.get('/types_identifications', { params: { order: 'name,asc', } })
					.then(function (response) { self.selectOptions.types_identifications = response.data.records; })
					.catch(function (error) { $.notify(error.response.data.code + error.response.data.message, "error"); });
					
				apiMV.get('/types_societys', { params: { order: 'name,asc', } })
					.then(function (response) { self.selectOptions.types_societys = response.data.records; })
					.catch(function (error) { $.notify(error.response.data.code + error.response.data.message, "error"); });
					
				apiMV.get('/geo_departments', { params: { order: 'name,asc', } })
					.then(function (response) { self.selectOptions.geo_departments = response.data.records; })
					.catch(function (error) { $.notify(error.response.data.code + error.response.data.message, "error"); });
					
				apiMV.get('/geo_citys', { params: { order: 'name,asc', } })
					.then(function (response) { self.selectOptions.geo_citys = response.data.records; })
					.catch(function (error) { $.notify(error.response.data.code + error.response.data.message, "error"); });
					
				apiMV.get('/contacts', { params: { order: 'name,asc', } })
					.then(function (response) { self.selectOptions.contacts = response.data.records; })
					.catch(function (error) { $.notify(error.response.data.code + error.response.data.message, "error"); });
					
				apiMV.get('/types_contacts', { params: { order: 'name,asc', } })
					.then(function (response) { self.selectOptions.types_contacts = response.data.records; })
					.catch(function (error) { $.notify(error.response.data.code + error.response.data.message, "error"); });
					
			},
			loadCitys: function(){
				var self = this;
				
				apiMV.get('/geo_citys', {
					params: {
						order: 'name,asc',
						filter: 'department,eq,' + self.post.department,
					}
				}).then(function (response) {
					self.selectOptions.geo_citys = response.data.records;
					
				}).catch(function (error) {
					$.notify(error.response.data.code + error.response.data.message, "error");
				});
			},
			updateClient: function () {
				var post = this.post;
				apiMV.put('/clients/' + post.id, post).then(function (response) {
					console.log(response.data);
					router.push('//' + self.$route.params.client_id + '/Auditors/Edit');
				}).catch(function (error) {
					$.notify(error.response.data.code + error.response.data.message, "error");
				});
			},
			findClients: function(){
				var self = this;
				var idClient = self.$route.params.client_id;
				
				apiMV.get('/clients/' + idClient).then(function (response) {
					self.post = response.data;
				}).catch(function (error) {
					$.notify(error.response.data.code + error.response.data.message, "error");
				});
				
				apiMV.get('/auditors_clients', {
					params: {
						filter: 'client,eq,' + idClient,
						join: [
							'contacts',
						],
					}
				}).then(function (response) {
					self.auditors_clients = response.data.records;
					
				}).catch(function (error) {
					$.notify(error.response.data.code + error.response.data.message, "error");
				});

				
				$("#includeContactClient-Fast").hide();
				$("#includeRedicatedClient-Fast").hide();
				$("#includeAuditorClient-Fast").hide();
			},
			includeContactClient: function(){
				var self = this;
				
				apiMV.post('/crew_clients', self.post_crew_clients).then(function (response) {
					// post.id = response.data;
					$("#includeContactClient-Fast").hide();
					self.findClients();
					self.post_crew_clients.contact = 0;
					self.post_crew_clients.type_contact = 0;
				}).catch(function (error) {
					$.notify(error.response.data.code + error.response.data.message, "error");
					$.notify(error.response.data.code + error.response.data.message, "error");
				});
			},
			includeRedicatedClient: function(){
				var self = this;
				
				apiMV.post('/redicated_clients', self.post_redicated_clients).then(function (response) {
					// post.id = response.data;
					$("#includeRedicatedClient-Fast").hide();
					self.findClients();
					self.post_redicated_clients.consecutive = '';
					self.post_redicated_clients.name = '';
					self.post_redicated_clients.object = '';
					self.post_redicated_clients.description_service = '';
					self.post_redicated_clients.date_start = '';
					self.post_redicated_clients.date_end = '';
					self.post_redicated_clients.additional_notes = '';
				}).catch(function (error) {
					$.notify(error.response.data.code + error.response.data.message, "error");
					$.notify(error.response.data.code + error.response.data.message, "error");
				});
			},
			includeAuditorClient: function(){
				var self = this;
				
				apiMV.post('/auditors_clients', self.post_auditors_clients).then(function (response) {
					// post.id = response.data;
					$("#includeAuditorClient-Fast").hide();
					self.findClients();
					self.post_auditors_clients.contact = 0;
				}).catch(function (error) {
					$.notify(error.response.data.code + error.response.data.message, "error");
					$.notify(error.response.data.code + error.response.data.message, "error");
				});
			},
		}
	});

	var Clients_Invoices_Edit = Vue.extend({
		template: '#edit-Clients-Invoices',
		data: function () {
			return {
				selectOptions: {
					types_clients: [],
					types_identifications: [],
					types_societys: [],
					geo_departments: [],
					geo_citys: [],
					contacts: [],
					types_contacts: [],
					types_repeats_services_clients: [],
				},
				post: {
					id: this.$route.params.client_id,
					type: 0,
					identification_type: 0,
					identification_number: '',
					social_reason: '',
					tradename: '',
					society_type: 0,
					department: 0,
					city: 0,
					address: '',
					geo_address: '',
					legal_representative: 0,
					contact_principal: 0,
					contact_alternative: 0,
					enable_audit: 0,
				},
				crew_clients: [],
				redicated_clients: [],
				auditors_clients: [],
				accounts_clients: [],
				post_crew_clients: {
					client: this.$route.params.client_id,
					contact: 0,
					type_contact: 0,
				},
				post_redicated_clients: {
					client: this.$route.params.client_id,
					consecutive: '',
					name: '',
					object: '',
					description_service: '',
					date_start: '',
					date_end: '',
					additional_notes: '',
				},
				post_auditors_clients: {
					contact: 0,
					client: this.$route.params.client_id,
				},
				calc: {
					subService: 0,
					subTotalAttributes: 0,
				}
			};
		},
		mounted: function () {
			var self = this;
			self.loadSelects();
			self.findClients();
		},
		methods: {
			zfill: function(number, width) {
				var numberOutput = Math.abs(number); /* Valor absoluto del número */
				var length = number.toString().length; /* Largo del número */ 
				var zero = "0"; /* String de cero */  
				
				if (width <= length) {
					if (number < 0) {
						 return ("-" + numberOutput.toString()); 
					} else {
						 return numberOutput.toString(); 
					}
				} else {
					if (number < 0) {
						return ("-" + (zero.repeat(width - length)) + numberOutput.toString()); 
					} else {
						return ((zero.repeat(width - length)) + numberOutput.toString()); 
					}
				}
			},
			formatMoney: function(n, c, d, t){
				var c = isNaN(c = Math.abs(c)) ? 2 : c,
					d = d == undefined ? "." : d,
					t = t == undefined ? "," : t,
					s = n < 0 ? "-" : "",
					i = String(parseInt(n = Math.abs(Number(n) || 0).toFixed(c))),
					j = (j = i.length) > 3 ? j % 3 : 0;

				return s + (j ? i.substr(0, j) + t : "") + i.substr(j).replace(/(\d{3})(?=\d)/g, "$1" + t) + (c ? d + Math.abs(n - i).toFixed(c).slice(2) : "");
			},
			loadSelects: function(){
				var self = this;
				
				apiMV.get('/types_clients', { params: { order: 'name,asc', } })
					.then(function (response) { self.selectOptions.types_clients = response.data.records; })
					.catch(function (error) { $.notify(error.response.data.code + error.response.data.message, "error"); });
					
				apiMV.get('/types_identifications', { params: { order: 'name,asc', } })
					.then(function (response) { self.selectOptions.types_identifications = response.data.records; })
					.catch(function (error) { $.notify(error.response.data.code + error.response.data.message, "error"); });
					
				apiMV.get('/types_societys', { params: { order: 'name,asc', } })
					.then(function (response) { self.selectOptions.types_societys = response.data.records; })
					.catch(function (error) { $.notify(error.response.data.code + error.response.data.message, "error"); });
					
				apiMV.get('/geo_departments', { params: { order: 'name,asc', } })
					.then(function (response) { self.selectOptions.geo_departments = response.data.records; })
					.catch(function (error) { $.notify(error.response.data.code + error.response.data.message, "error"); });
					
				apiMV.get('/geo_citys', { params: { order: 'name,asc', } })
					.then(function (response) { self.selectOptions.geo_citys = response.data.records; })
					.catch(function (error) { $.notify(error.response.data.code + error.response.data.message, "error"); });
					
				apiMV.get('/contacts', { params: { order: 'name,asc', } })
					.then(function (response) { self.selectOptions.contacts = response.data.records; })
					.catch(function (error) { $.notify(error.response.data.code + error.response.data.message, "error"); });
					
				apiMV.get('/types_contacts', { params: { order: 'name,asc', } })
					.then(function (response) { self.selectOptions.types_contacts = response.data.records; })
					.catch(function (error) { $.notify(error.response.data.code + error.response.data.message, "error"); });
					
			},
			loadCitys: function(){
				var self = this;
				
				apiMV.get('/geo_citys', {
					params: {
						order: 'name,asc',
						filter: 'department,eq,' + self.post.department,
					}
				}).then(function (response) {
					self.selectOptions.geo_citys = response.data.records;
					
				}).catch(function (error) {
					$.notify(error.response.data.code + error.response.data.message, "error");
				});
			},
			updateClient: function () {
				
			},
			findClients: function(){
				var self = this;
				var idClient = self.$route.params.client_id;
				
			},
		}
	});

	var Clients_Quotations_Edit = Vue.extend({
		template: '#edit-Clients-Quotations',
		data: function () {
			return {
				selectOptions: {
					types_clients: [],
				},
				post: {
					id: this.$route.params.client_id,
					type: 0,
					identification_type: 0,
					identification_number: '',
					social_reason: '',
					tradename: '',
					society_type: 0,
					department: 0,
					city: 0,
					address: '',
					geo_address: '',
					legal_representative: 0,
					contact_principal: 0,
					contact_alternative: 0,
					enable_audit: 0,
				},
				posts: [],
			};
		},
		mounted: function () {
			var self = this;
			
			self.loadSelects();
			self.find();
		},
		methods: {
			zfill: function(number, width) {
				var numberOutput = Math.abs(number); /* Valor absoluto del número */
				var length = number.toString().length; /* Largo del número */ 
				var zero = "0"; /* String de cero */  
				
				if (width <= length) {
					if (number < 0) {
						 return ("-" + numberOutput.toString()); 
					} else {
						 return numberOutput.toString(); 
					}
				} else {
					if (number < 0) {
						return ("-" + (zero.repeat(width - length)) + numberOutput.toString()); 
					} else {
						return ((zero.repeat(width - length)) + numberOutput.toString()); 
					}
				}
			},
			loadSelects: function(){
				var self = this;
				/*
				apiMV.get('/types_clients', { params: { order: 'name,asc', } })
					.then(function (response) { self.selectOptions.types_clients = response.data.records; })
					.catch(function (error) { $.notify(error.response.data.code + error.response.data.message, "error"); });
					*/
			},
			find: function(){
				var self = this;
				var idClient = self.$route.params.client_id;
				
				apiMV.get('/clients/' + idClient).then(function (response) {
						self.post = response.data;
				}).catch(function (error) {
					$.notify(error.response.data.code + error.response.data.message, "error");
				});
				
				apiMV.get('/quotations_clients', {
					params: {
						join: [
							'contracts_clients',
							'accounts_clients',
						],
						filter: [
							'status,eq,2',
							'client,eq,' + idClient,
						]
					}
				}).then(function (response) {
					self.posts = response.data.records;
				}).catch(function (error) {
					$.notify(error.response.data.code + error.response.data.message, "error");
				});
				
			},
		}
	});

	var Clients_ContractsServices_Edit = Vue.extend({
		template: '#edit-Clients-ContractsServices',
		data: function () {
			return {
				selectOptions: {
					types_clients: [],
				},
				post: {
					id: 0,
					type: 0,
					identification_type: 0,
					identification_number: '',
					social_reason: '',
					tradename: '',
					society_type: 0,
					department: 0,
					city: 0,
					address: '',
					geo_address: '',
					legal_representative: 0,
					contact_principal: 0,
					contact_alternative: 0,
					enable_audit: 0,
				},
				posts: [],
			};
		},
		mounted: function () {
			var self = this;
			
			self.loadSelects();
			self.find();
		},
		methods: {
			zfill: function(number, width) {
				var numberOutput = Math.abs(number); /* Valor absoluto del número */
				var length = number.toString().length; /* Largo del número */ 
				var zero = "0"; /* String de cero */  
				
				if (width <= length) {
					if (number < 0) {
						 return ("-" + numberOutput.toString()); 
					} else {
						 return numberOutput.toString(); 
					}
				} else {
					if (number < 0) {
						return ("-" + (zero.repeat(width - length)) + numberOutput.toString()); 
					} else {
						return ((zero.repeat(width - length)) + numberOutput.toString()); 
					}
				}
			},
			loadSelects: function(){
				var self = this;
				/*
				apiMV.get('/types_clients', { params: { order: 'name,asc', } })
					.then(function (response) { self.selectOptions.types_clients = response.data.records; })
					.catch(function (error) { $.notify(error.response.data.code + error.response.data.message, "error"); });
					*/
			},
			find: function(){
				var self = this;
				var idClient = self.$route.params.client_id;
				
				apiMV.get('/clients/' + idClient).then(function (response) {
					self.post = response.data;
				}).catch(function (error) {
					$.notify(error.response.data.code + error.response.data.message, "error");
				});
				
				apiMV.get('/contracts_clients', {
					params: {
						join: [
							'quotations_clients',
						],
						filter: [
							'client,eq,' + idClient,
						]
					}
				}).then(function (response) {
					self.posts = response.data.records;
				}).catch(function (error) {
					$.notify(error.response.data.code + error.response.data.message, "error");
				});
				
			},
		}
	});

	var Clients_Delete = Vue.extend({
		template: '#delete-Clients',
		data: function () {
			return {
				post: {
					id: 0,
					social_reason: ''
				}
			};
		},
		mounted: function () {
			var self = this;
			self.findClients();
		},
		methods: {
			deleteClient: function () {
				var post = this.post;
				
				apiMV.delete('/clients/' + post.id).then(function (response) {
					console.log(response.data);
				}).catch(function (error) {
					$.notify(error.response.data.code + error.response.data.message, "error");
				});
				router.push('/');
				location.reload();
			},
			findClients: function(){
				var self = this;
				var idClient = self.$route.params.client_id;
				
				apiMV.get('/clients/' + idClient).then(function (response) {
					self.post = response.data;
				}).catch(function (error) {
					$.notify(error.response.data.code + error.response.data.message, "error");
				});
			}
		}
	});

	var Clients_Contacts_Delete = Vue.extend({
		template: '#delete-ClientsContacts',
		data: function () {
			return {
				post: {
					id: 0,
					client: 0,
					contact: '',
				}
			};
		},
		mounted: function () {
			var self = this;
			self.findClientContact();
		},
		methods: {
			deleteClientsContacts: function () {
				var self = this;
				var post = this.post;
				
				apiMV.delete('/crew_clients/' + self.$route.params.client_contact_id).then(function (response) {
					console.log(response.data);
				}).catch(function (error) {
					$.notify(error.response.data.code + error.response.data.message, "error");
				});
				router.push('/Edit/' + self.$route.params.client_id + '/Contacts');
			},
			findClientContact: function(){
				var self = this;
				var idClientContact = self.$route.params.client_contact_id;
				
				apiMV.get('/crew_clients/' + idClientContact).then(function (response) {
					self.post = response.data;
				}).catch(function (error) {
					$.notify(error.response.data.code + error.response.data.message, "error");
				});
			}
		}
	});

	var Clients_Redicated_Delete = Vue.extend({
		template: '#delete-RedicatedClients',
		data: function () {
			return {
				post: {
					id: 0,
					client: 0,
					consecutive: '',
					name: '',
					object: '',
					description_service: '',
					date_start: '',
					date_end: '',
					additional_notes: '',
				}
			};
		},
		mounted: function () {
			var self = this;
			self.findRedicatedClients();
		},
		methods: {
			deleteRedicatedClients: function () {
				var self = this;
				var post = this.post;
				
				apiMV.delete('/redicated_clients/' + self.$route.params.redicated_client_id).then(function (response) {
					console.log(response.data);
					router.push('/Edit/' + self.$route.params.client_id + '/Contracts');
				}).catch(function (error) {
					$.notify(error.response.data.code + error.response.data.message, "error");
				});
			},
			findRedicatedClients: function(){
				var self = this;
				var idRedicatedClients = self.$route.params.redicated_client_id;
				
				apiMV.get('/redicated_clients/' + idRedicatedClients).then(function (response) {
					self.post = response.data;
				}).catch(function (error) {
					$.notify(error.response.data.code + error.response.data.message, "error");
				});
			}
		}
	});

	var Clients_Auditors_Delete = Vue.extend({
		template: '#delete-ClientsAuditors',
		data: function () {
			return {
				post: {
					id: 0,
					client: 0,
					contact: 0,
				}
			};
		},
		mounted: function () {
			var self = this;
			self.findClientsAuditors();
		},
		methods: {
			deleteClientsAuditors: function () {
				var self = this;
				var post = this.post;
				
				apiMV.delete('/auditors_clients/' + self.$route.params.auditor_client_id).then(function (response) {
					console.log(response.data);
				}).catch(function (error) {
					$.notify(error.response.data.code + error.response.data.message, "error");
				});
				router.push('//' + self.$route.params.client_id + '/Auditors/Edit');
			},
			findClientsAuditors: function(){
				var self = this;
				var idClientsAuditors = self.$route.params.auditor_client_id;
				
				apiMV.get('/auditors_clients/' + idClientsAuditors).then(function (response) {
					self.post = response.data;
				}).catch(function (error) {
					$.notify(error.response.data.code + error.response.data.message, "error");
				});
			}
		}
	});

	var Clients_Attributes_Services_Delete = Vue.extend({
		template: '#delete-AttributesServicesClients',
		data: function () {
			return {
				post: {
					id: 0,
					service_client: 0,
					attribute: 0,
					quantity: 0,
					date_start: '',
					date_end: '',
				}
			};
		},
		mounted: function () {
			var self = this;
			self.findClientsAttributesServices();
		},
		methods: {
			deleteClientsAttributesServices: function () {
				var self = this;
				var post = this.post;
				
				apiMV.delete('/attributes_services_clients/' + self.$route.params.client_attribute_service_id).then(function (response) {
					console.log(response.data);
				}).catch(function (error) {
					$.notify(error.response.data.code + error.response.data.message, "error");
				});
				router.push('//' + self.$route.params.client_id + '/Accounts/Edit');
			},
			findClientsAttributesServices: function(){
				var self = this;
				var idClientsAttributesServices = self.$route.params.client_attribute_service_id;
				
				apiMV.get('/attributes_services_clients/' + idClientsAttributesServices).then(function (response) {
					if(!response.data.id)
					{
					}
					else
					{
						self.post = response.data;
					}
				}).catch(function (error) {
					$.notify(error.response.data.code + error.response.data.message, "error");
				});
			}
		}
	});

	var Clients_Attributes_Services_Add = Vue.extend({
		template: '#add-AttributesServicesClients',
		data: function () {
			return {
				selectOptions: {
					attributes: [],
				},
				post: {
					account: this.$route.params.account_client_id,
					attribute: 0,
					quantity: 0,
					iva: 0,
					date_start: '',
					date_end: '',
				},
			}
		},
		mounted: function(){
			var self = this;
			
			self.loadSelects();
		},
		methods: {
			formatMoney: function(n, c, d, t){
				var c = isNaN(c = Math.abs(c)) ? 2 : c,
					d = d == undefined ? "." : d,
					t = t == undefined ? "," : t,
					s = n < 0 ? "-" : "",
					i = String(parseInt(n = Math.abs(Number(n) || 0).toFixed(c))),
					j = (j = i.length) > 3 ? j % 3 : 0;

				return s + (j ? i.substr(0, j) + t : "") + i.substr(j).replace(/(\d{3})(?=\d)/g, "$1" + t) + (c ? d + Math.abs(n - i).toFixed(c).slice(2) : "");
			},
			calulator_result: function(){
				var self = this;
				
				select.total;
			},
			loadSelects: function(){
				var self = this;
				
				apiMV.get('/attributes', { params: { order: 'name,asc', } })
					.then(function (response) { self.selectOptions.attributes = response.data.records; })
					.catch(function (error) { $.notify(error.response.data.code + error.response.data.message, "error"); });
			},
			createAttributesServicesClients: function() {
				var self = this;
				var post = this.post;
				
				if(post.date_start == '' || post.date_start == 0){ delete post.date_start; };
				if(post.date_end == '' || post.date_end == 0){ delete post.date_end; };
				
				apiMV.post('/attributes_services_clients', post).then(function (response) {
					post.id = response.data;
					router.push('/Edit/' + self.$route.params.client_id + '/Accounts/' + self.$route.params.account_client_id + '/Invoices');
				}).catch(function (error) {
					$.notify(error.response.data.code + error.response.data.message, "error");
				});
			}
		}
	});
 
	var Clients_Services_Add = Vue.extend({
		template: '#add-ServicesClients',
		data: function () {
			return {
				selectOptions: {
					services: [],
					types_repeats_services_clients: [],
				},
				post: {
					account: this.$route.params.account_client_id,
					service: 0,
					quantity: 0,
					date_start: '',
					date_end: '',
				},
			}
		},
		mounted: function(){
			var self = this;
			self.loadSelects();
		},
		methods: {
			formatMoney: function(n, c, d, t){
				var c = isNaN(c = Math.abs(c)) ? 2 : c,
					d = d == undefined ? "." : d,
					t = t == undefined ? "," : t,
					s = n < 0 ? "-" : "",
					i = String(parseInt(n = Math.abs(Number(n) || 0).toFixed(c))),
					j = (j = i.length) > 3 ? j % 3 : 0;

				return s + (j ? i.substr(0, j) + t : "") + i.substr(j).replace(/(\d{3})(?=\d)/g, "$1" + t) + (c ? d + Math.abs(n - i).toFixed(c).slice(2) : "");
			},
			loadSelects: function(){
				var self = this;
				
				apiMV.get('/services', {
					params: {
						join: [
						],
						order: 'name,asc',
					}
				})
				.then(function (response) { self.selectOptions.services = response.data.records; })
				.catch(function (error) { $.notify(error.response.data.code + error.response.data.message, "error"); });
				
				apiMV.get('/types_repeats_services_clients', {
					params: {
						join: [
						],
						order: 'name,asc',
					}
				})
				.then(function (response) { self.selectOptions.types_repeats_services_clients = response.data.records; })
				.catch(function (error) { $.notify(error.response.data.code + error.response.data.message, "error"); });
			},
			createServicesClients: function() {
				var self = this;
				var post = this.post;
				
				if(post.date_start == '' || post.date_start == 0){ delete post.date_start; };
				if(post.date_end == '' || post.date_end == 0){ delete post.date_end; };
				
				apiMV.post('/services_clients', post).then(function (response) {
					post.id = response.data;
					
					router.push('/Edit/' + self.$route.params.client_id + '/Accounts/' + self.$route.params.account_client_id + '/Invoices');
				}).catch(function (error) {
					$.notify(error.response.data.code + error.response.data.message, "error");
				});
			}
		}
	});

	var Clients_Services_Delete = Vue.extend({
		template: '#delete-ServicesClients',
		data: function () {
			return {
				post: {
					id: 0,
					account: 0,
					service: 0,
					quantity: 0,
					date_start: '',
					date_end: '',
					repeat: 0,
					description: '',
				}
			};
		},
		mounted: function () {
			var self = this;
			self.findClientsServices();
		},
		methods: {
			deleteClientsServices: function () {
				var self = this;
				var post = this.post;
				
				apiMV.delete('/services_clients/' + self.$route.params.client_service_id).then(function (response) {
					console.log(response.data);
				}).catch(function (error) {
					$.notify(error.response.data.code + error.response.data.message, "error");
				});
				router.push('/Edit/' + self.$route.params.client_id + '/Accounts/' + self.$route.params.account_client_id + '/Invoices/');
			},
			findClientsServices: function(){
				var self = this;
				var idClientsServices = self.$route.params.client_service_id;
				
				apiMV.get('/services_clients/' + idClientsServices).then(function (response) {
					if(!response.data.id)
					{
					}
					else
					{
						self.post = response.data;
					}
				}).catch(function (error) {
					$.notify(error.response.data.code + error.response.data.message, "error");
				});
			}
		}
	});

	var Clients_Accounts_Delete = Vue.extend({
		template: '#delete-AccountsClients',
		data: function () {
			return {
				post: {
					id: 0,
					client: 0,
				}
			};
		},
		mounted: function () {
			var self = this;
			self.findAccountsClients();
		},
		methods: {
			deleteAccountsClients: function () {
				var self = this;
				var post = this.post;
				
				apiMV.delete('/accounts_clients/' + self.$route.params.account_client_id).then(function (response) {
					console.log(response.data);
					$.notify("Eliminada", "success");
					router.push('/Edit/' + self.$route.params.client_id + '/Accounts');
				}).catch(function (error) {
					console.log(error.response);
					console.log(error.response.data.code);
					console.log(error.response.data.code);
					if(error.response.data.code == 1010){
						$.notify("La cuenta debe estar vacia para ser eliminada.", "error");
					}
					else{
						$.notify(error.response.data.code + error.response.data.message, "error");
						
					}
					
					
				});
			},
			findAccountsClients: function(){
				var self = this;
				var idClientsAccounts = self.$route.params.account_client_id;
				
				apiMV.get('/accounts_clients/' + idClientsAccounts).then(function (response) {
					if(!response.data.id)
					{
						
					}
					else
					{
						self.post = response.data;
					}
				}).catch(function (error) {
					console.log(error.response);
					$.notify(error.response.data.code + error.response.data.message, "error");
				});
			}
		}
	});
	
	// ------------ CLIENTES - FIN ------------------------------------- 
	var Clients_View = Vue.extend({
		template: '#view-Clients',
		data: function () {
			return {
				post: {
					type: {
						id: 0,
						name: '',
					},
					identification_type: {
						id: 0,
						name: '',
					},
					identification_number: '',
					social_reason: '',
					tradename: '',
					society_type: {
						id: 0,
						name: '',
					},
					department: {
						id: 0,
						name: '',
					},
					city: {
						id: 0,
						department: 0,
						name: '',
					},
					address: '',
					geo_address: '',
					legal_representative: {
						id: 0,
						first_name: '',
						second_name: '',
						surname: '',
						second_surname: '',
						phone: '',
						phone_mobile: '',
						mail: '',
					},
					contact_principal: {
						id: 0,
						first_name: '',
						second_name: '',
						surname: '',
						second_surname: '',
						phone: '',
						phone_mobile: '',
						mail: '',
					},
					enable_audit: 0,
				},
				crew_clients: [],
				redicated_clients: [],
				auditors_clients: [],
				services_clients: [],
			};
		},
		mounted: function () {
			var self = this;
			self.findClients();
		},
		methods: {
			findClients: function(){
				var self = this;
				var idClient = self.$route.params.client_id;
				
				apiMV.get('/clients/' + idClient, {
					params: {
						join: [
							'types_clients',
							'types_identifications',
							'types_societys',
							'geo_departments',
							'geo_citys',
							'contacts',
						],
					}
				}).then(function (response) {
					self.post = response.data;
				}).catch(function (error) {
					$.notify(error.response.data.code + error.response.data.message, "error");
				});
				
				apiMV.get('/crew_clients', {
					params: {
						filter: 'client,eq,' + idClient,
						join: [
							'contacts',
							'types_contacts',
						],
					}
				}).then(function (response) {
					self.crew_clients = response.data.records;
					
				}).catch(function (error) {
					$.notify(error.response.data.code + error.response.data.message, "error");
				});
				
				apiMV.get('/redicated_clients', {
					params: {
						filter: 'client,eq,' + idClient,
					}
				}).then(function (response) {
					self.redicated_clients = response.data.records;
					
				}).catch(function (error) {
					$.notify(error.response.data.code + error.response.data.message, "error");
				});
				
				apiMV.get('/auditors_clients', {
					params: {
						filter: 'client,eq,' + idClient,
						join: [
							'contacts',
						],
					}
				}).then(function (response) {
					self.auditors_clients = response.data.records;
					
				}).catch(function (error) {
					$.notify(error.response.data.code + error.response.data.message, "error");
				});
				
				apiMV.get('/services_clients', {
					params: {
						filter: 'account,eq,' + idClient,
						join: [
							'services',
							'attributes_services_clients',
							'attributes_services_clients,attributes',
						],
					}
				}).then(function (response) {
					self.services_clients = response.data.records;
					
				}).catch(function (error) {
					$.notify(error.response.data.code + error.response.data.message, "error");
				});
			}
		}
	});

	var Clients_View_Contacts = Vue.extend({
		template: '#view-Clients-Contacts',
		data: function () {
			return {
				post: {
					type: {
						id: 0,
						name: '',
					},
					identification_type: {
						id: 0,
						name: '',
					},
					identification_number: '',
					social_reason: '',
					tradename: '',
					society_type: {
						id: 0,
						name: '',
					},
					department: {
						id: 0,
						name: '',
					},
					city: {
						id: 0,
						department: 0,
						name: '',
					},
					address: '',
					geo_address: '',
					legal_representative: {
						id: 0,
						first_name: '',
						second_name: '',
						surname: '',
						second_surname: '',
						phone: '',
						phone_mobile: '',
						mail: '',
					},
					contact_principal: {
						id: 0,
						first_name: '',
						second_name: '',
						surname: '',
						second_surname: '',
						phone: '',
						phone_mobile: '',
						mail: '',
					},
					enable_audit: 0,
				},
				crew_clients: [],
				redicated_clients: [],
				auditors_clients: [],
				services_clients: [],
			};
		},
		mounted: function () {
			var self = this;
			self.findClients();
		},
		methods: {
			findClients: function(){
				var self = this;
				var idClient = self.$route.params.client_id;
				
				apiMV.get('/clients/' + idClient, {
					params: {
						join: [
							'types_clients',
							'types_identifications',
							'types_societys',
							'geo_departments',
							'geo_citys',
							'contacts',
						],
					}
				}).then(function (response) {
					self.post = response.data;
				}).catch(function (error) {
					$.notify(error.response.data.code + error.response.data.message, "error");
				});
				
				apiMV.get('/crew_clients', {
					params: {
						filter: 'client,eq,' + idClient,
						join: [
							'contacts',
							'types_contacts',
						],
					}
				}).then(function (response) {
					self.crew_clients = response.data.records;
					
				}).catch(function (error) {
					$.notify(error.response.data.code + error.response.data.message, "error");
				});
				
				apiMV.get('/redicated_clients', {
					params: {
						filter: 'client,eq,' + idClient,
					}
				}).then(function (response) {
					self.redicated_clients = response.data.records;
					
				}).catch(function (error) {
					$.notify(error.response.data.code + error.response.data.message, "error");
				});
				
				apiMV.get('/auditors_clients', {
					params: {
						filter: 'client,eq,' + idClient,
						join: [
							'contacts',
						],
					}
				}).then(function (response) {
					self.auditors_clients = response.data.records;
					
				}).catch(function (error) {
					$.notify(error.response.data.code + error.response.data.message, "error");
				});
				
				apiMV.get('/services_clients', {
					params: {
						filter: 'account,eq,' + idClient,
						join: [
							'services',
							'attributes_services_clients',
							'attributes_services_clients,attributes',
						],
					}
				}).then(function (response) {
					self.services_clients = response.data.records;
					
				}).catch(function (error) {
					$.notify(error.response.data.code + error.response.data.message, "error");
				});
			}
		}
	});

	var Clients_View_Redicateds = Vue.extend({
		template: '#view-Clients-Redicateds',
		data: function () {
			return {
				post: {
					type: {
						id: 0,
						name: '',
					},
					identification_type: {
						id: 0,
						name: '',
					},
					identification_number: '',
					social_reason: '',
					tradename: '',
					society_type: {
						id: 0,
						name: '',
					},
					department: {
						id: 0,
						name: '',
					},
					city: {
						id: 0,
						department: 0,
						name: '',
					},
					address: '',
					geo_address: '',
					legal_representative: {
						id: 0,
						first_name: '',
						second_name: '',
						surname: '',
						second_surname: '',
						phone: '',
						phone_mobile: '',
						mail: '',
					},
					contact_principal: {
						id: 0,
						first_name: '',
						second_name: '',
						surname: '',
						second_surname: '',
						phone: '',
						phone_mobile: '',
						mail: '',
					},
					enable_audit: 0,
				},
				crew_clients: [],
				redicated_clients: [],
				auditors_clients: [],
				services_clients: [],
			};
		},
		mounted: function () {
			var self = this;
			self.findClients();
		},
		methods: {
			findClients: function(){
				var self = this;
				var idClient = self.$route.params.client_id;
				
				apiMV.get('/clients/' + idClient, {
					params: {
						join: [
							'types_clients',
							'types_identifications',
							'types_societys',
							'geo_departments',
							'geo_citys',
							'contacts',
						],
					}
				}).then(function (response) {
					self.post = response.data;
				}).catch(function (error) {
					$.notify(error.response.data.code + error.response.data.message, "error");
				});
				
				apiMV.get('/crew_clients', {
					params: {
						filter: 'client,eq,' + idClient,
						join: [
							'contacts',
							'types_contacts',
						],
					}
				}).then(function (response) {
					self.crew_clients = response.data.records;
					
				}).catch(function (error) {
					$.notify(error.response.data.code + error.response.data.message, "error");
				});
				
				apiMV.get('/redicated_clients', {
					params: {
						filter: 'client,eq,' + idClient,
					}
				}).then(function (response) {
					self.redicated_clients = response.data.records;
					
				}).catch(function (error) {
					$.notify(error.response.data.code + error.response.data.message, "error");
				});
				
				apiMV.get('/auditors_clients', {
					params: {
						filter: 'client,eq,' + idClient,
						join: [
							'contacts',
						],
					}
				}).then(function (response) {
					self.auditors_clients = response.data.records;
					
				}).catch(function (error) {
					$.notify(error.response.data.code + error.response.data.message, "error");
				});
				
				apiMV.get('/services_clients', {
					params: {
						filter: 'account,eq,' + idClient,
						join: [
							'services',
							'attributes_services_clients',
							'attributes_services_clients,attributes',
						],
					}
				}).then(function (response) {
					self.services_clients = response.data.records;
					
				}).catch(function (error) {
					$.notify(error.response.data.code + error.response.data.message, "error");
				});
			}
		}
	});

	var Clients_View_Auditors = Vue.extend({
		template: '#view-Clients-Auditors',
		data: function () {
			return {
				post: {
					type: {
						id: 0,
						name: '',
					},
					identification_type: {
						id: 0,
						name: '',
					},
					identification_number: '',
					social_reason: '',
					tradename: '',
					society_type: {
						id: 0,
						name: '',
					},
					department: {
						id: 0,
						name: '',
					},
					city: {
						id: 0,
						department: 0,
						name: '',
					},
					address: '',
					geo_address: '',
					legal_representative: {
						id: 0,
						first_name: '',
						second_name: '',
						surname: '',
						second_surname: '',
						phone: '',
						phone_mobile: '',
						mail: '',
					},
					contact_principal: {
						id: 0,
						first_name: '',
						second_name: '',
						surname: '',
						second_surname: '',
						phone: '',
						phone_mobile: '',
						mail: '',
					},
					enable_audit: 0,
				},
				crew_clients: [],
				redicated_clients: [],
				auditors_clients: [],
				services_clients: [],
			};
		},
		mounted: function () {
			var self = this;
			self.findClients();
		},
		methods: {
			findClients: function(){
				var self = this;
				var idClient = self.$route.params.client_id;
				
				apiMV.get('/clients/' + idClient, {
					params: {
						join: [
							'types_clients',
							'types_identifications',
							'types_societys',
							'geo_departments',
							'geo_citys',
							'contacts',
						],
					}
				}).then(function (response) {
					self.post = response.data;
				}).catch(function (error) {
					$.notify(error.response.data.code + error.response.data.message, "error");
				});
				
				apiMV.get('/crew_clients', {
					params: {
						filter: 'client,eq,' + idClient,
						join: [
							'contacts',
							'types_contacts',
						],
					}
				}).then(function (response) {
					self.crew_clients = response.data.records;
					
				}).catch(function (error) {
					$.notify(error.response.data.code + error.response.data.message, "error");
				});
				
				apiMV.get('/redicated_clients', {
					params: {
						filter: 'client,eq,' + idClient,
					}
				}).then(function (response) {
					self.redicated_clients = response.data.records;
					
				}).catch(function (error) {
					$.notify(error.response.data.code + error.response.data.message, "error");
				});
				
				apiMV.get('/auditors_clients', {
					params: {
						filter: 'client,eq,' + idClient,
						join: [
							'contacts',
						],
					}
				}).then(function (response) {
					self.auditors_clients = response.data.records;
					
				}).catch(function (error) {
					$.notify(error.response.data.code + error.response.data.message, "error");
				});
				
				apiMV.get('/services_clients', {
					params: {
						filter: 'account,eq,' + idClient,
						join: [
							'services',
							'attributes_services_clients',
							'attributes_services_clients,attributes',
						],
					}
				}).then(function (response) {
					self.services_clients = response.data.records;
					
				}).catch(function (error) {
					$.notify(error.response.data.code + error.response.data.message, "error");
				});
			}
		}
	});

	var Clients_View_Services = Vue.extend({
		template: '#view-Clients-Services',
		data: function () {
			return {
				post: {
					type: {
						id: 0,
						name: '',
					},
					identification_type: {
						id: 0,
						name: '',
					},
					identification_number: '',
					social_reason: '',
					tradename: '',
					society_type: {
						id: 0,
						name: '',
					},
					department: {
						id: 0,
						name: '',
					},
					city: {
						id: 0,
						department: 0,
						name: '',
					},
					address: '',
					geo_address: '',
					legal_representative: {
						id: 0,
						first_name: '',
						second_name: '',
						surname: '',
						second_surname: '',
						phone: '',
						phone_mobile: '',
						mail: '',
					},
					contact_principal: {
						id: 0,
						first_name: '',
						second_name: '',
						surname: '',
						second_surname: '',
						phone: '',
						phone_mobile: '',
						mail: '',
					},
					enable_audit: 0,
				},
				crew_clients: [],
				redicated_clients: [],
				auditors_clients: [],
				services_clients: [],
			};
		},
		mounted: function () {
			var self = this;
			self.findClients();
		},
		methods: {
			findClients: function(){
				var self = this;
				var idClient = self.$route.params.client_id;
				
				apiMV.get('/clients/' + idClient, {
					params: {
						join: [
							'types_clients',
							'types_identifications',
							'types_societys',
							'geo_departments',
							'geo_citys',
							'contacts',
						],
					}
				}).then(function (response) {
					self.post = response.data;
				}).catch(function (error) {
					$.notify(error.response.data.code + error.response.data.message, "error");
				});
				
				apiMV.get('/crew_clients', {
					params: {
						filter: 'client,eq,' + idClient,
						join: [
							'contacts',
							'types_contacts',
						],
					}
				}).then(function (response) {
					self.crew_clients = response.data.records;
					
				}).catch(function (error) {
					$.notify(error.response.data.code + error.response.data.message, "error");
				});
				
				apiMV.get('/redicated_clients', {
					params: {
						filter: 'client,eq,' + idClient,
					}
				}).then(function (response) {
					self.redicated_clients = response.data.records;
					
				}).catch(function (error) {
					$.notify(error.response.data.code + error.response.data.message, "error");
				});
				
				apiMV.get('/auditors_clients', {
					params: {
						filter: 'client,eq,' + idClient,
						join: [
							'contacts',
						],
					}
				}).then(function (response) {
					self.auditors_clients = response.data.records;
					
				}).catch(function (error) {
					$.notify(error.response.data.code + error.response.data.message, "error");
				});
				
				apiMV.get('/services_clients', {
					params: {
						filter: 'account,eq,' + idClient,
						join: [
							'services',
							'attributes_services_clients',
							'attributes_services_clients,attributes',
						],
					}
				}).then(function (response) {
					self.services_clients = response.data.records;
					
				}).catch(function (error) {
					$.notify(error.response.data.code + error.response.data.message, "error");
				});
			}
		}
	});

	var Clients_View_Invoices = Vue.extend({
		template: '#view-Clients-Invoices',
		data: function () {
			return {
				post: {
					type: {
						id: 0,
						name: '',
					},
					identification_type: {
						id: 0,
						name: '',
					},
					identification_number: '',
					social_reason: '',
					tradename: '',
					society_type: {
						id: 0,
						name: '',
					},
					department: {
						id: 0,
						name: '',
					},
					city: {
						id: 0,
						department: 0,
						name: '',
					},
					address: '',
					geo_address: '',
					legal_representative: {
						id: 0,
						first_name: '',
						second_name: '',
						surname: '',
						second_surname: '',
						phone: '',
						phone_mobile: '',
						mail: '',
					},
					contact_principal: {
						id: 0,
						first_name: '',
						second_name: '',
						surname: '',
						second_surname: '',
						phone: '',
						phone_mobile: '',
						mail: '',
					},
					enable_audit: 0,
				},
				crew_clients: [],
				redicated_clients: [],
				auditors_clients: [],
				services_clients: [],
			};
		},
		mounted: function () {
			var self = this;
			self.findClients();
		},
		methods: {
			findClients: function(){
				var self = this;
				var idClient = self.$route.params.client_id;
				
				apiMV.get('/clients/' + idClient, {
					params: {
						join: [
							'types_clients',
							'types_identifications',
							'types_societys',
							'geo_departments',
							'geo_citys',
							'contacts',
						],
					}
				}).then(function (response) {
					self.post = response.data;
				}).catch(function (error) {
					$.notify(error.response.data.code + error.response.data.message, "error");
				});
				
				apiMV.get('/crew_clients', {
					params: {
						filter: 'client,eq,' + idClient,
						join: [
							'contacts',
							'types_contacts',
						],
					}
				}).then(function (response) {
					self.crew_clients = response.data.records;
					
				}).catch(function (error) {
					$.notify(error.response.data.code + error.response.data.message, "error");
				});
				
				apiMV.get('/redicated_clients', {
					params: {
						filter: 'client,eq,' + idClient,
					}
				}).then(function (response) {
					self.redicated_clients = response.data.records;
					
				}).catch(function (error) {
					$.notify(error.response.data.code + error.response.data.message, "error");
				});
				
				apiMV.get('/auditors_clients', {
					params: {
						filter: 'client,eq,' + idClient,
						join: [
							'contacts',
						],
					}
				}).then(function (response) {
					self.auditors_clients = response.data.records;
					
				}).catch(function (error) {
					$.notify(error.response.data.code + error.response.data.message, "error");
				});
				
				apiMV.get('/services_clients', {
					params: {
						filter: 'account,eq,' + idClient,
						join: [
							'services',
							'attributes_services_clients',
							'attributes_services_clients,attributes',
						],
					}
				}).then(function (response) {
					self.services_clients = response.data.records;
					
				}).catch(function (error) {
					$.notify(error.response.data.code + error.response.data.message, "error");
				});
			}
		}
	});

	var Clients_Accounts_Edit = Vue.extend({
		template: '#edit-Clients-Accounts',
		data: function () {
			return {
				selectOptions: {
					crew_clients: [],
				},
				post: {
					id: 0,
					type: 0,
					identification_type: 0,
					identification_number: '',
					social_reason: '',
					tradename: '',
					society_type: 0,
					department: 0,
					city: 0,
					address: '',
					geo_address: '',
					legal_representative: 0,
					contact_principal: 0,
					contact_alternative: 0,
					enable_audit: 0,
				},
				crew_clients: [],
				redicated_clients: [],
				auditors_clients: [],
				accounts_clients: [],
				post_crew_clients: {
					client: this.$route.params.client_id,
					contact: 0,
					type_contact: 0,
				},
				post_redicated_clients: {
					client: this.$route.params.client_id,
					consecutive: '',
					name: '',
					object: '',
					description_service: '',
					date_start: '',
					date_end: '',
					additional_notes: '',
				},
				post_auditors_clients: {
					contact: 0,
					client: this.$route.params.client_id,
				},
				calc: {
					subService: 0,
					subTotalAttributes: 0,
				},
				post_account: {
					client: Number(this.$route.params.client_id),
					name: '',
					contact: 0,
					address: '',
					address_invoices: '',
				},
			};
		},
		mounted: function () {
			var self = this;
			self.loadSelects();
			self.findClients();
		},
		methods: {
			generateQuotation: function(data, validity=0){
				var self = this;
				var fullAccount = data;
				var quotationClient = {
					client: fullAccount.client,
					account: fullAccount.id,
					values: JSON.stringify({
						services: fullAccount.services_clients,
						attributes: fullAccount.attributes_services_clients,
					}),
					validity: validity,
				};
				
				console.log(quotationClient);
				
				apiMV.post('/quotations_clients', quotationClient).then(function (response) {
					$.notify('Cotizacion Creada con éxito.', 'info');
					self.findClients();
				}).catch(function (error) {
					$.notify(error.response.data.code + error.response.data.message, "error");
				});
			},
			zfill: function(number, width) {
				var numberOutput = Math.abs(number); /* Valor absoluto del número */
				var length = number.toString().length; /* Largo del número */ 
				var zero = "0"; /* String de cero */  
				
				if (width <= length) {
					if (number < 0) {
						 return ("-" + numberOutput.toString()); 
					} else {
						 return numberOutput.toString(); 
					}
				} else {
					if (number < 0) {
						return ("-" + (zero.repeat(width - length)) + numberOutput.toString()); 
					} else {
						return ((zero.repeat(width - length)) + numberOutput.toString()); 
					}
				}
			},
			formatMoney: function(n, c, d, t){
				var c = isNaN(c = Math.abs(c)) ? 2 : c,
					d = d == undefined ? "." : d,
					t = t == undefined ? "," : t,
					s = n < 0 ? "-" : "",
					i = String(parseInt(n = Math.abs(Number(n) || 0).toFixed(c))),
					j = (j = i.length) > 3 ? j % 3 : 0;

				return s + (j ? i.substr(0, j) + t : "") + i.substr(j).replace(/(\d{3})(?=\d)/g, "$1" + t) + (c ? d + Math.abs(n - i).toFixed(c).slice(2) : "");
			},
			loadSelects: function(){
				var self = this;
				var idClient = self.$route.params.client_id;
				
				apiMV.get('/crew_clients', {
					params: {
						filter: 'client,eq,' + idClient,
						join: [
							'contacts',
							'types_contacts',
						],
					}
				}).then(function (response) {
					self.selectOptions.crew_clients = response.data.records;
					
				}).catch(function (error) {
					$.notify(error.response.data.code + error.response.data.message, "error");
				});
				
				
				$("#includeAccountClient-Fast").hide();
			},
			loadCitys: function(){
				var self = this;
				
				apiMV.get('/geo_citys', {
					params: {
						order: 'name,asc',
						filter: 'department,eq,' + self.post.department,
					}
				}).then(function (response) {
					self.selectOptions.geo_citys = response.data.records;
					
				}).catch(function (error) {
					$.notify(error.response.data.code + error.response.data.message, "error");
				});
			},
			updateClient: function () {
				var post = this.post;
				apiMV.put('/clients/' + post.id, post).then(function (response) {
					console.log(response.data);
					router.push('/Edit/' + self.$route.params.client_id + '/Accounts/' + self.$route.params.account_client_id + '/Info');
				}).catch(function (error) {
					console.log(error.response);
					$.notify(error.response.data.code + error.response.data.message, "error");
				});
			},
			findClients: function(){
				var self = this;
				var idClient = self.$route.params.client_id;
				
				apiMV.get('/clients/' + idClient).then(function (response) {
					self.post = response.data;
				}).catch(function (error) {
					$.notify(error.response.data.code + error.response.data.message, "error");
				});
				
				apiMV.get('/crew_clients', {
					params: {
						filter: 'client,eq,' + idClient,
						join: [
							'contacts',
							'types_contacts',
						],
					}
				}).then(function (response) {
					self.crew_clients = response.data.records;
					
				}).catch(function (error) {
					$.notify(error.response.data.code + error.response.data.message, "error");
				});
				
				apiMV.get('/redicated_clients', {
					params: {
						filter: 'client,eq,' + idClient,
					}
				}).then(function (response) {
					self.redicated_clients = response.data.records;
					
				}).catch(function (error) {
					$.notify(error.response.data.code + error.response.data.message, "error");
				});
				
				apiMV.get('/auditors_clients', {
					params: {
						filter: 'client,eq,' + idClient,
						join: [
							'contacts',
						],
					}
				}).then(function (response) {
					self.auditors_clients = response.data.records;
					
				}).catch(function (error) {
					$.notify(error.response.data.code + error.response.data.message, "error");
				});
				
				apiMV.get('/accounts_clients', {
					params: {
						filter: 'client,eq,' + idClient,
						join: [
							'services_clients',
							'services_clients,types_meditions',
							'services_clients,services',
							'services_clients,services,types_meditions',
							'attributes_services_clients',
							'attributes_services_clients,attributes',
							'services_clients,types_repeats_services_clients',
							'quotations_clients',
						],
					}
				}).then(function (response) {
					self.accounts_clients = response.data.records;
					//self.sumarTodo();
				}).catch(function (error) {
					$.notify(error.response.data.code + error.response.data.message, "error");
				});
				
				$("#includeContactClient-Fast").hide();
				$("#includeRedicatedClient-Fast").hide();
				$("#includeAuditorClient-Fast").hide();
			},
			includeContactClient: function(){
				var self = this;
				
				apiMV.post('/crew_clients', self.post_crew_clients).then(function (response) {
					// post.id = response.data;
					$("#includeContactClient-Fast").hide();
					self.findClients();
					self.post_crew_clients.contact = 0;
					self.post_crew_clients.type_contact = 0;
				}).catch(function (error) {
					$.notify(error.response.data.code + error.response.data.message, "error");
					$.notify(error.response.data.code + error.response.data.message, "error");
				});
			},
			includeRedicatedClient: function(){
				var self = this;
				
				apiMV.post('/redicated_clients', self.post_redicated_clients).then(function (response) {
					// post.id = response.data;
					$("#includeRedicatedClient-Fast").hide();
					self.findClients();
					self.post_redicated_clients.consecutive = '';
					self.post_redicated_clients.name = '';
					self.post_redicated_clients.object = '';
					self.post_redicated_clients.description_service = '';
					self.post_redicated_clients.date_start = '';
					self.post_redicated_clients.date_end = '';
					self.post_redicated_clients.additional_notes = '';
				}).catch(function (error) {
					$.notify(error.response.data.code + error.response.data.message, "error");
					$.notify(error.response.data.code + error.response.data.message, "error");
				});
			},
			includeAuditorClient: function(){
				var self = this;
				
				apiMV.post('/auditors_clients', self.post_auditors_clients).then(function (response) {
					// post.id = response.data;
					$("#includeAuditorClient-Fast").hide();
					self.findClients();
					self.post_auditors_clients.contact = 0;
				}).catch(function (error) {
					$.notify(error.response.data.code + error.response.data.message, "error");
				});
			},
			updateAccountClient: function(data){
				var self = this;
				var tempAccount = {
					id: data.id,
					client: data.client,
					name: data.name,
					contact: data.contact,
					address: data.address,
					address_invoices: data.address_invoices,
					observations: data.observations,
				};
				
				apiMV.put('/accounts_clients/' + tempAccount.id, tempAccount).then(function (response) {
					$.notify("Guardado con éxito.", "success");
					self.findClients();
				}).catch(function (error) {
					$.notify(error.response.data.code + error.response.data.message, "error");
				});
			},
		}
	});

	var Clients_Accounts_Edit_Create = Vue.extend({
		template: '#edit-Clients-Accounts-Add',
		data: function () {
			return {
				selectOptions: {
					crew_clients: [],
				},
				post: {
					id: 0,
					type: 0,
					identification_type: 0,
					identification_number: '',
					social_reason: '',
					tradename: '',
					society_type: 0,
					department: 0,
					city: 0,
					address: '',
					geo_address: '',
					legal_representative: 0,
					contact_principal: 0,
					contact_alternative: 0,
					enable_audit: 0,
				},
				crew_clients: [],
				redicated_clients: [],
				auditors_clients: [],
				accounts_clients: [],
				post_crew_clients: {
					client: this.$route.params.client_id,
					contact: 0,
					type_contact: 0,
				},
				post_redicated_clients: {
					client: this.$route.params.client_id,
					consecutive: '',
					name: '',
					object: '',
					description_service: '',
					date_start: '',
					date_end: '',
					additional_notes: '',
				},
				post_auditors_clients: {
					contact: 0,
					client: this.$route.params.client_id,
				},
				calc: {
					subService: 0,
					subTotalAttributes: 0,
				},
				post_account: {
					client: Number(this.$route.params.client_id),
					name: '',
					contact: 0,
					address: '',
					address_invoices: '',
					geo_address: '',
					geo_address_invoices: '',
				},
				urlMapSearchNewIframe: '',
			};
		},
		mounted: function () {
			var self = this;
			self.loadSelects();
			self.findClients();
		},
		methods: {
			generateQuotation: function(data, validity=0){
				var self = this;
				var fullAccount = data;
				var quotationClient = {
					client: fullAccount.client,
					account: fullAccount.id,
					values: JSON.stringify({
						services: fullAccount.services_clients,
						attributes: fullAccount.attributes_services_clients,
					}),
					validity: validity,
				};
				
				console.log(quotationClient);
				
				apiMV.post('/quotations_clients', quotationClient).then(function (response) {
					$.notify('Cotizacion Creada con éxito.', 'info');
					self.findClients();
				}).catch(function (error) {
					$.notify(error.response.data.code + error.response.data.message, "error");
				});
			},
			createNewAccount: function(){			
				var self = this;
				
				console.log(self.post_account);
				
				apiMV.post('/accounts_clients', self.post_account).then(function (response) {
					post.id = response.data;	
					router.push('//' + self.$route.params.client_id + '/Accounts/Edit');
				}).catch(function (error) {
					$.notify(error.response.data.code + error.response.data.message, "error");
				});
				
			},
			zfill: function(number, width) {
				var numberOutput = Math.abs(number); /* Valor absoluto del número */
				var length = number.toString().length; /* Largo del número */ 
				var zero = "0"; /* String de cero */  
				
				if (width <= length) {
					if (number < 0) {
						 return ("-" + numberOutput.toString()); 
					} else {
						 return numberOutput.toString(); 
					}
				} else {
					if (number < 0) {
						return ("-" + (zero.repeat(width - length)) + numberOutput.toString()); 
					} else {
						return ((zero.repeat(width - length)) + numberOutput.toString()); 
					}
				}
			},
			formatMoney: function(n, c, d, t){
				var c = isNaN(c = Math.abs(c)) ? 2 : c,
					d = d == undefined ? "." : d,
					t = t == undefined ? "," : t,
					s = n < 0 ? "-" : "",
					i = String(parseInt(n = Math.abs(Number(n) || 0).toFixed(c))),
					j = (j = i.length) > 3 ? j % 3 : 0;

				return s + (j ? i.substr(0, j) + t : "") + i.substr(j).replace(/(\d{3})(?=\d)/g, "$1" + t) + (c ? d + Math.abs(n - i).toFixed(c).slice(2) : "");
			},
			loadSelects: function(){
				var self = this;
				var idClient = self.$route.params.client_id;
				
				apiMV.get('/crew_clients', {
					params: {
						filter: 'client,eq,' + idClient,
						join: [
							'contacts',
							'types_contacts',
						],
					}
				}).then(function (response) {
					self.selectOptions.crew_clients = response.data.records;
					
				}).catch(function (error) {
					$.notify(error.response.data.code + error.response.data.message, "error");
				});
				
				
				$("#includeAccountClient-Fast").hide();
			},
			loadCitys: function(){
				var self = this;
				
				apiMV.get('/geo_citys', {
					params: {
						order: 'name,asc',
						filter: 'department,eq,' + self.post.department,
					}
				}).then(function (response) {
					self.selectOptions.geo_citys = response.data.records;
					
				}).catch(function (error) {
					$.notify(error.response.data.code + error.response.data.message, "error");
				});
			},
			updateClient: function () {
				var post = this.post;
				apiMV.put('/clients/' + post.id, post).then(function (response) {
					console.log(response.data);
					router.push('//' + self.$route.params.client_id + '/Accounts/Edit');
				}).catch(function (error) {
					console.log(error.response);
					$.notify(error.response.data.code + error.response.data.message, "error");
				});
			},
			findClients: function(){
				var self = this;
				var idClient = self.$route.params.client_id;
				
				apiMV.get('/clients/' + idClient).then(function (response) {
					self.post = response.data;
				}).catch(function (error) {
					$.notify(error.response.data.code + error.response.data.message, "error");
				});
				
				apiMV.get('/crew_clients', {
					params: {
						filter: 'client,eq,' + idClient,
						join: [
							'contacts',
							'types_contacts',
						],
					}
				}).then(function (response) {
					self.crew_clients = response.data.records;
					
				}).catch(function (error) {
					$.notify(error.response.data.code + error.response.data.message, "error");
				});
				
				apiMV.get('/redicated_clients', {
					params: {
						filter: 'client,eq,' + idClient,
					}
				}).then(function (response) {
					self.redicated_clients = response.data.records;
					
				}).catch(function (error) {
					$.notify(error.response.data.code + error.response.data.message, "error");
				});
				
				apiMV.get('/auditors_clients', {
					params: {
						filter: 'client,eq,' + idClient,
						join: [
							'contacts',
						],
					}
				}).then(function (response) {
					self.auditors_clients = response.data.records;
					
				}).catch(function (error) {
					$.notify(error.response.data.code + error.response.data.message, "error");
				});
				
				apiMV.get('/accounts_clients', {
					params: {
						filter: 'client,eq,' + idClient,
						join: [
							'services_clients',
							'services_clients,types_meditions',
							'services_clients,services',
							'services_clients,services,types_meditions',
							'attributes_services_clients',
							'attributes_services_clients,attributes',
							'services_clients,types_repeats_services_clients',
							'quotations_clients',
						],
					}
				}).then(function (response) {
					self.accounts_clients = response.data.records;
					//self.sumarTodo();
				}).catch(function (error) {
					$.notify(error.response.data.code + error.response.data.message, "error");
				});
				
				$("#includeContactClient-Fast").hide();
				$("#includeRedicatedClient-Fast").hide();
				$("#includeAuditorClient-Fast").hide();
			},
			includeContactClient: function(){
				var self = this;
				
				apiMV.post('/crew_clients', self.post_crew_clients).then(function (response) {
					// post.id = response.data;
					$("#includeContactClient-Fast").hide();
					self.findClients();
					self.post_crew_clients.contact = 0;
					self.post_crew_clients.type_contact = 0;
				}).catch(function (error) {
					$.notify(error.response.data.code + error.response.data.message, "error");
					$.notify(error.response.data.code + error.response.data.message, "error");
				});
			},
			includeRedicatedClient: function(){
				var self = this;
				
				apiMV.post('/redicated_clients', self.post_redicated_clients).then(function (response) {
					// post.id = response.data;
					$("#includeRedicatedClient-Fast").hide();
					self.findClients();
					self.post_redicated_clients.consecutive = '';
					self.post_redicated_clients.name = '';
					self.post_redicated_clients.object = '';
					self.post_redicated_clients.description_service = '';
					self.post_redicated_clients.date_start = '';
					self.post_redicated_clients.date_end = '';
					self.post_redicated_clients.additional_notes = '';
				}).catch(function (error) {
					$.notify(error.response.data.code + error.response.data.message, "error");
					$.notify(error.response.data.code + error.response.data.message, "error");
				});
			},
			includeAuditorClient: function(){
				var self = this;
				
				apiMV.post('/auditors_clients', self.post_auditors_clients).then(function (response) {
					// post.id = response.data;
					$("#includeAuditorClient-Fast").hide();
					self.findClients();
					self.post_auditors_clients.contact = 0;
				}).catch(function (error) {
					$.notify(error.response.data.code + error.response.data.message, "error");
				});
			},
			updateAccountClient: function(data){
				var self = this;
				var tempAccount = {
					id: data.id,
					client: data.client,
					name: data.name,
					contact: data.contact,
					address: data.address,
					address_invoices: data.address_invoices,
					observations: data.observations,
				};
				
				apiMV.put('/accounts_clients/' + tempAccount.id, tempAccount).then(function (response) {
					$.notify("Guardado con éxito.", "success");
					self.findClients();
				}).catch(function (error) {
					$.notify(error.response.data.code + error.response.data.message, "error");
				});
			},
			searchAddressGEO(){
				var self = this;
				
				// DETECTAR MAPA
				// https://nominatim.openstreetmap.org/search?format=jsonv2&accept-language=es&q=Glorieta%20Pilsen&country=co&polygon=1
				
				aPiMap.get('/search', {
					params: {
						'q': self.post_account.address,
						'format': 'jsonv2',
						'accept-language': 'es',
						'country': 'co',
						'polygon': 1,
						'limit': 1,
					}
				}).then(function (r) {
					console.log(r);
					if(r.data[0] != undefined)
					{
						var temp = r.data[0];
						var coord = {
							lon: temp.lon,
							lat: temp.lat
						};
						
						console.log(coord);
						
						var cord1 = coord.lat + ',' + coord.lon;
						var cord2 = coord.lon + ',' + coord.lat;
						
						self.post_account.geo_address = cord1;
					
						var url = 'https://www.openstreetmap.org/export/embed.html?bbox=' + cord2 + ',' + cord2 + '&marker=' + cord1;
						
						console.log(url);
						
						self.urlMapSearchNewIframe = url;
					}
					else
					{
						alert('La direccion no fue encontrada');
					}
					
					/*
						map = new OpenLayers.Map("mapdiv");
						map.addLayer(new OpenLayers.Layer.OSM());

						var lonLat = new OpenLayers.LonLat( -0.1279688 ,51.5077286 )
							  .transform(
								new OpenLayers.Projection("EPSG:4326"), // transform from WGS 1984
								map.getProjectionObject() // to Spherical Mercator Projection
							  );
							  
						var zoom=16;

						var markers = new OpenLayers.Layer.Markers( "Markers" );
						map.addLayer(markers);
						
						markers.addMarker(new OpenLayers.Marker(lonLat));
						
						map.setCenter (lonLat, zoom);
					*/
				}).catch(function (er) {
					console.log(er);
					//$.notify(error.response.data.code + error.response.data.message, "error");
				});
				
			},
			searchAddressInvoicesGEO(){
				var self = this;
				
				aPiMap.get('/search', {
					params: {
						'q': self.post_account.address_invoices,
						'format': 'jsonv2',
						'accept-language': 'es',
						'country': 'co',
						'polygon': 1,
						'limit': 1,
					}
				}).then(function (r) {
					console.log(r);
					if(r.data[0] != undefined)
					{
						var temp = r.data[0];
						var coord = {
							lon: temp.lon,
							lat: temp.lat
						};
						
						console.log(coord);
						
						var cord1 = coord.lat + ',' + coord.lon;
						var cord2 = coord.lon + ',' + coord.lat;
						
						self.post_account.geo_address_invoices = cord1;
					
						var url = 'https://www.openstreetmap.org/export/embed.html?bbox=' + cord2 + ',' + cord2 + '&marker=' + cord1;
						
						console.log(url);
						
						self.urlMapSearchNewIframe = url;
					}
					else
					{
						alert('La direccion no fue encontrada');
					}
				}).catch(function (er) {
					console.log(er);
				});
				
			},
		}
	});

	var Clients_Accounts_Edit_Info = Vue.extend({
		template: '#edit-Clients-Accounts-Info',
		data: function () {
			return {
				selectOptions: {
					crew_clients: [],
				},
				post: {
					id: Number(this.$route.params.client_id),
					type: 0,
					identification_type: 0,
					identification_number: '',
					social_reason: '',
					tradename: '',
					society_type: 0,
					department: 0,
					city: 0,
					address: '',
					geo_address: '',
					legal_representative: 0,
					contact_principal: 0,
					contact_alternative: 0,
					enable_audit: 0,
				},
				crew_clients: [],
				redicated_clients: [],
				auditors_clients: [],
				accounts_clients: [],
				post_crew_clients: {
					client: this.$route.params.client_id,
					contact: 0,
					type_contact: 0,
				},
				post_redicated_clients: {
					client: this.$route.params.client_id,
					consecutive: '',
					name: '',
					object: '',
					description_service: '',
					date_start: '',
					date_end: '',
					additional_notes: '',
				},
				post_auditors_clients: {
					contact: 0,
					client: this.$route.params.client_id,
				},
				calc: {
					subService: 0,
					subTotalAttributes: 0,
				},
				post_account: {
					client: Number(this.$route.params.client_id),
					name: '',
					contact: 0,
					address: '',
					address_invoices: '',
				},
			};
		},
		mounted: function () {
			var self = this;
			self.loadSelects();
			self.findClients();
		},
		methods: {
			generateQuotation: function(data, validity=0){
				var self = this;
				var fullAccount = data;
				var quotationClient = {
					client: fullAccount.client,
					account: fullAccount.id,
					values: JSON.stringify({
						services: fullAccount.services_clients,
						attributes: fullAccount.attributes_services_clients,
					}),
					validity: validity,
				};
				
				console.log(quotationClient);
				
				apiMV.post('/quotations_clients', quotationClient).then(function (response) {
					$.notify('Cotizacion Creada con éxito.', 'info');
					self.findClients();
				}).catch(function (error) {
					$.notify(error.response.data.code + error.response.data.message, "error");
				});
			},
			createNewAccount: function(){			
				var self = this;
				
				console.log(self.post_account);
				
				apiMV.post('/accounts_clients', self.post_account).then(function (response) {
					post.id = response.data;	
					router.push('//' + self.$route.params.client_id + '/Accounts/Edit');
				}).catch(function (error) {
					$.notify(error.response.data.code + error.response.data.message, "error");
				});
				
			},
			zfill: function(number, width) {
				var numberOutput = Math.abs(number); /* Valor absoluto del número */
				var length = number.toString().length; /* Largo del número */ 
				var zero = "0"; /* String de cero */  
				
				if (width <= length) {
					if (number < 0) {
						 return ("-" + numberOutput.toString()); 
					} else {
						 return numberOutput.toString(); 
					}
				} else {
					if (number < 0) {
						return ("-" + (zero.repeat(width - length)) + numberOutput.toString()); 
					} else {
						return ((zero.repeat(width - length)) + numberOutput.toString()); 
					}
				}
			},
			formatMoney: function(n, c, d, t){
				var c = isNaN(c = Math.abs(c)) ? 2 : c,
					d = d == undefined ? "." : d,
					t = t == undefined ? "," : t,
					s = n < 0 ? "-" : "",
					i = String(parseInt(n = Math.abs(Number(n) || 0).toFixed(c))),
					j = (j = i.length) > 3 ? j % 3 : 0;

				return s + (j ? i.substr(0, j) + t : "") + i.substr(j).replace(/(\d{3})(?=\d)/g, "$1" + t) + (c ? d + Math.abs(n - i).toFixed(c).slice(2) : "");
			},
			loadSelects: function(){
				var self = this;
				var idClient = self.$route.params.client_id;
				
				apiMV.get('/crew_clients', {
					params: {
						filter: 'client,eq,' + idClient,
						join: [
							'contacts',
							'types_contacts',
						],
					}
				}).then(function (response) {
					self.selectOptions.crew_clients = response.data.records;
					
				}).catch(function (error) {
					$.notify(error.response.data.code + error.response.data.message, "error");
				});
				
				
				$("#includeAccountClient-Fast").hide();
			},
			loadCitys: function(){
				var self = this;
				
				apiMV.get('/geo_citys', {
					params: {
						order: 'name,asc',
						filter: 'department,eq,' + self.post.department,
					}
				}).then(function (response) {
					self.selectOptions.geo_citys = response.data.records;
					
				}).catch(function (error) {
					$.notify(error.response.data.code + error.response.data.message, "error");
				});
			},
			updateClient: function () {
				var post = this.post;
				apiMV.put('/clients/' + post.id, post).then(function (response) {
					console.log(response.data);
					router.push('//' + self.$route.params.client_id + '/Accounts/Edit');
				}).catch(function (error) {
					console.log(error.response);
					$.notify(error.response.data.code + error.response.data.message, "error");
				});
			},
			findClients: function(){
				var self = this;
				var idClient = self.$route.params.client_id;
				var idAccount = self.$route.params.account_id;
				
				
				apiMV.get('/accounts_clients', {
					params: {
						filter: [
							'client,eq,' + idClient,
							'id,eq,' + self.$route.params.account_id,
						],
						join: [
							'services_clients',
							'services_clients,types_meditions',
							'services_clients,services',
							'services_clients,services,types_meditions',
							'attributes_services_clients',
							'attributes_services_clients,attributes',
							'services_clients,types_repeats_services_clients',
							'quotations_clients',
						],
					}
				}).then(function (response) {
					self.accounts_clients = response.data.records;
					//self.sumarTodo();
				}).catch(function (error) {
					$.notify(error.response.data.code + error.response.data.message, "error");
				});
				
				$("#includeContactClient-Fast").hide();
				$("#includeRedicatedClient-Fast").hide();
				$("#includeAuditorClient-Fast").hide();
			},
			includeContactClient: function(){
				var self = this;
				
				apiMV.post('/crew_clients', self.post_crew_clients).then(function (response) {
					// post.id = response.data;
					$("#includeContactClient-Fast").hide();
					self.findClients();
					self.post_crew_clients.contact = 0;
					self.post_crew_clients.type_contact = 0;
				}).catch(function (error) {
					$.notify(error.response.data.code + error.response.data.message, "error");
					$.notify(error.response.data.code + error.response.data.message, "error");
				});
			},
			includeRedicatedClient: function(){
				var self = this;
				
				apiMV.post('/redicated_clients', self.post_redicated_clients).then(function (response) {
					// post.id = response.data;
					$("#includeRedicatedClient-Fast").hide();
					self.findClients();
					self.post_redicated_clients.consecutive = '';
					self.post_redicated_clients.name = '';
					self.post_redicated_clients.object = '';
					self.post_redicated_clients.description_service = '';
					self.post_redicated_clients.date_start = '';
					self.post_redicated_clients.date_end = '';
					self.post_redicated_clients.additional_notes = '';
				}).catch(function (error) {
					$.notify(error.response.data.code + error.response.data.message, "error");
					$.notify(error.response.data.code + error.response.data.message, "error");
				});
			},
			includeAuditorClient: function(){
				var self = this;
				
				apiMV.post('/auditors_clients', self.post_auditors_clients).then(function (response) {
					// post.id = response.data;
					$("#includeAuditorClient-Fast").hide();
					self.findClients();
					self.post_auditors_clients.contact = 0;
				}).catch(function (error) {
					$.notify(error.response.data.code + error.response.data.message, "error");
				});
			},
			updateAccountClient: function(data){
				var self = this;
				var tempAccount = {
					id: data.id,
					client: data.client,
					name: data.name,
					contact: data.contact,
					address: data.address,
					address_invoices: data.address_invoices,
					observations: data.observations,
				};
				
				apiMV.put('/accounts_clients/' + tempAccount.id, tempAccount).then(function (response) {
					$.notify("Guardado con éxito.", "success");
					self.findClients();
				}).catch(function (error) {
					$.notify(error.response.data.code + error.response.data.message, "error");
				});
			},
		}
	});

	var Clients_Accounts_Edit_Invoices = Vue.extend({
		template: '#edit-Clients-Accounts-Invoices',
		data: function () {
			return {
				selectOptions: {
					crew_clients: [],
				},
				post: {
					id: Number(this.$route.params.client_id),
					type: 0,
					identification_type: 0,
					identification_number: '',
					social_reason: '',
					tradename: '',
					society_type: 0,
					department: 0,
					city: 0,
					address: '',
					geo_address: '',
					legal_representative: 0,
					contact_principal: 0,
					contact_alternative: 0,
					enable_audit: 0,
				},
				crew_clients: [],
				redicated_clients: [],
				auditors_clients: [],
				accounts_clients: [],
				post_crew_clients: {
					client: this.$route.params.client_id,
					contact: 0,
					type_contact: 0,
				},
				post_redicated_clients: {
					client: this.$route.params.client_id,
					consecutive: '',
					name: '',
					object: '',
					description_service: '',
					date_start: '',
					date_end: '',
					additional_notes: '',
				},
				post_auditors_clients: {
					contact: 0,
					client: this.$route.params.client_id,
				},
				calc: {
					subService: 0,
					subTotalAttributes: 0,
				},
				post_account: {
					client: Number(this.$route.params.client_id),
					name: '',
					contact: 0,
					address: '',
					address_invoices: '',
				},
			};
		},
		mounted: function () {
			var self = this;
			self.loadSelects();
			self.findClients();
		},
		methods: {
			generateQuotation: function(data, validity=0){
				var self = this;
				var fullAccount = data;
				var quotationClient = {
					client: fullAccount.client,
					account: fullAccount.id,
					values: JSON.stringify({
						services: fullAccount.services_clients,
						attributes: fullAccount.attributes_services_clients,
					}),
					validity: validity,
				};
				
				console.log(quotationClient);
				
				apiMV.post('/quotations_clients', quotationClient).then(function (response) {
					$.notify('Cotizacion Creada con éxito.', 'info');
					self.findClients();
				}).catch(function (error) {
					$.notify(error.response.data.code + error.response.data.message, "error");
				});
			},
			createNewAccount: function(){			
				var self = this;
				
				console.log(self.post_account);
				
				apiMV.post('/accounts_clients', self.post_account).then(function (response) {
					post.id = response.data;	
					router.push('//' + self.$route.params.client_id + '/Accounts/Edit');
				}).catch(function (error) {
					$.notify(error.response.data.code + error.response.data.message, "error");
				});
				
			},
			zfill: function(number, width) {
				var numberOutput = Math.abs(number); /* Valor absoluto del número */
				var length = number.toString().length; /* Largo del número */ 
				var zero = "0"; /* String de cero */  
				
				if (width <= length) {
					if (number < 0) {
						 return ("-" + numberOutput.toString()); 
					} else {
						 return numberOutput.toString(); 
					}
				} else {
					if (number < 0) {
						return ("-" + (zero.repeat(width - length)) + numberOutput.toString()); 
					} else {
						return ((zero.repeat(width - length)) + numberOutput.toString()); 
					}
				}
			},
			formatMoney: function(n, c, d, t){
				var c = isNaN(c = Math.abs(c)) ? 2 : c,
					d = d == undefined ? "." : d,
					t = t == undefined ? "," : t,
					s = n < 0 ? "-" : "",
					i = String(parseInt(n = Math.abs(Number(n) || 0).toFixed(c))),
					j = (j = i.length) > 3 ? j % 3 : 0;

				return s + (j ? i.substr(0, j) + t : "") + i.substr(j).replace(/(\d{3})(?=\d)/g, "$1" + t) + (c ? d + Math.abs(n - i).toFixed(c).slice(2) : "");
			},
			loadSelects: function(){
				var self = this;
				var idClient = self.$route.params.client_id;
				
				apiMV.get('/crew_clients', {
					params: {
						filter: 'client,eq,' + idClient,
						join: [
							'contacts',
							'types_contacts',
						],
					}
				}).then(function (response) {
					self.selectOptions.crew_clients = response.data.records;
					
				}).catch(function (error) {
					$.notify(error.response.data.code + error.response.data.message, "error");
				});
				
				
				$("#includeAccountClient-Fast").hide();
			},
			loadCitys: function(){
				var self = this;
				
				apiMV.get('/geo_citys', {
					params: {
						order: 'name,asc',
						filter: 'department,eq,' + self.post.department,
					}
				}).then(function (response) {
					self.selectOptions.geo_citys = response.data.records;
					
				}).catch(function (error) {
					$.notify(error.response.data.code + error.response.data.message, "error");
				});
			},
			updateClient: function () {
				var post = this.post;
				apiMV.put('/clients/' + post.id, post).then(function (response) {
					console.log(response.data);
					router.push('//' + self.$route.params.client_id + '/Accounts/Edit');
				}).catch(function (error) {
					console.log(error.response);
					$.notify(error.response.data.code + error.response.data.message, "error");
				});
			},
			findClients: function(){
				var self = this;
				var idClient = self.$route.params.client_id;
				
				apiMV.get('/accounts_clients', {
					params: {
						filter: [
							'client,eq,' + idClient,
							'id,eq,' + self.$route.params.account_id,
						],
						join: [
							'services_clients',
							'services_clients,types_meditions',
							'services_clients,services',
							'services_clients,services,types_meditions',
							'attributes_services_clients',
							'attributes_services_clients,attributes',
							'services_clients,types_repeats_services_clients',
							'quotations_clients',
						],
					}
				}).then(function (response) {
					self.accounts_clients = response.data.records;
					//self.sumarTodo();
				}).catch(function (error) {
					$.notify(error.response.data.code + error.response.data.message, "error");
				});
				
				$("#includeContactClient-Fast").hide();
				$("#includeRedicatedClient-Fast").hide();
				$("#includeAuditorClient-Fast").hide();
			},
			includeContactClient: function(){
				var self = this;
				
				apiMV.post('/crew_clients', self.post_crew_clients).then(function (response) {
					// post.id = response.data;
					$("#includeContactClient-Fast").hide();
					self.findClients();
					self.post_crew_clients.contact = 0;
					self.post_crew_clients.type_contact = 0;
				}).catch(function (error) {
					$.notify(error.response.data.code + error.response.data.message, "error");
					$.notify(error.response.data.code + error.response.data.message, "error");
				});
			},
			includeRedicatedClient: function(){
				var self = this;
				
				apiMV.post('/redicated_clients', self.post_redicated_clients).then(function (response) {
					// post.id = response.data;
					$("#includeRedicatedClient-Fast").hide();
					self.findClients();
					self.post_redicated_clients.consecutive = '';
					self.post_redicated_clients.name = '';
					self.post_redicated_clients.object = '';
					self.post_redicated_clients.description_service = '';
					self.post_redicated_clients.date_start = '';
					self.post_redicated_clients.date_end = '';
					self.post_redicated_clients.additional_notes = '';
				}).catch(function (error) {
					$.notify(error.response.data.code + error.response.data.message, "error");
					$.notify(error.response.data.code + error.response.data.message, "error");
				});
			},
			includeAuditorClient: function(){
				var self = this;
				
				apiMV.post('/auditors_clients', self.post_auditors_clients).then(function (response) {
					// post.id = response.data;
					$("#includeAuditorClient-Fast").hide();
					self.findClients();
					self.post_auditors_clients.contact = 0;
				}).catch(function (error) {
					$.notify(error.response.data.code + error.response.data.message, "error");
				});
			},
			updateAccountClient: function(data){
				var self = this;
				var tempAccount = {
					id: data.id,
					client: data.client,
					name: data.name,
					contact: data.contact,
					address: data.address,
					address_invoices: data.address_invoices,
					observations: data.observations,
				};
				
				apiMV.put('/accounts_clients/' + tempAccount.id, tempAccount).then(function (response) {
					$.notify("Guardado con éxito.", "success");
					self.findClients();
				}).catch(function (error) {
					$.notify(error.response.data.code + error.response.data.message, "error");
				});
			},
		}
	});

	var Clients_Accounts_Edit_Requests = Vue.extend({
		template: '#edit-Clients-Accounts-Requests',
		data: function () {
			return {
				selectOptions: {
					crew_clients: [],
				},
				post: {
					id: Number(this.$route.params.client_id),
					type: 0,
					identification_type: 0,
					identification_number: '',
					social_reason: '',
					tradename: '',
					society_type: 0,
					department: 0,
					city: 0,
					address: '',
					geo_address: '',
					legal_representative: 0,
					contact_principal: 0,
					contact_alternative: 0,
					enable_audit: 0,
				},
				crew_clients: [],
				redicated_clients: [],
				auditors_clients: [],
				accounts_clients: [],
				post_crew_clients: {
					client: this.$route.params.client_id,
					contact: 0,
					type_contact: 0,
				},
				post_redicated_clients: {
					client: this.$route.params.client_id,
					consecutive: '',
					name: '',
					object: '',
					description_service: '',
					date_start: '',
					date_end: '',
					additional_notes: '',
				},
				post_auditors_clients: {
					contact: 0,
					client: this.$route.params.client_id,
				},
				calc: {
					subService: 0,
					subTotalAttributes: 0,
				},
				post_account: {
					client: Number(this.$route.params.client_id),
					name: '',
					contact: 0,
					address: '',
					address_invoices: '',
				},
			};
		},
		mounted: function () {
			var self = this;
			self.loadSelects();
			self.findClients();
		},
		methods: {
			generateQuotation: function(data, validity=0){
				var self = this;
				var fullAccount = data;
				var quotationClient = {
					client: fullAccount.client,
					account: fullAccount.id,
					values: JSON.stringify({
						services: fullAccount.services_clients,
						attributes: fullAccount.attributes_services_clients,
					}),
					validity: validity,
				};
				
				console.log(quotationClient);
				
				apiMV.post('/quotations_clients', quotationClient).then(function (response) {
					$.notify('Cotizacion Creada con éxito.', 'info');
					self.findClients();
				}).catch(function (error) {
					$.notify(error.response.data.code + error.response.data.message, "error");
				});
			},
			createNewAccount: function(){			
				var self = this;
				
				console.log(self.post_account);
				
				apiMV.post('/accounts_clients', self.post_account).then(function (response) {
					post.id = response.data;	
					router.push('//' + self.$route.params.client_id + '/Accounts/Edit');
				}).catch(function (error) {
					$.notify(error.response.data.code + error.response.data.message, "error");
				});
				
			},
			zfill: function(number, width) {
				var numberOutput = Math.abs(number); /* Valor absoluto del número */
				var length = number.toString().length; /* Largo del número */ 
				var zero = "0"; /* String de cero */  
				
				if (width <= length) {
					if (number < 0) {
						 return ("-" + numberOutput.toString()); 
					} else {
						 return numberOutput.toString(); 
					}
				} else {
					if (number < 0) {
						return ("-" + (zero.repeat(width - length)) + numberOutput.toString()); 
					} else {
						return ((zero.repeat(width - length)) + numberOutput.toString()); 
					}
				}
			},
			formatMoney: function(n, c, d, t){
				var c = isNaN(c = Math.abs(c)) ? 2 : c,
					d = d == undefined ? "." : d,
					t = t == undefined ? "," : t,
					s = n < 0 ? "-" : "",
					i = String(parseInt(n = Math.abs(Number(n) || 0).toFixed(c))),
					j = (j = i.length) > 3 ? j % 3 : 0;

				return s + (j ? i.substr(0, j) + t : "") + i.substr(j).replace(/(\d{3})(?=\d)/g, "$1" + t) + (c ? d + Math.abs(n - i).toFixed(c).slice(2) : "");
			},
			loadSelects: function(){
				var self = this;
				var idClient = self.$route.params.client_id;
				
				apiMV.get('/crew_clients', {
					params: {
						filter: 'client,eq,' + idClient,
						join: [
							'contacts',
							'types_contacts',
						],
					}
				}).then(function (response) {
					self.selectOptions.crew_clients = response.data.records;
					
				}).catch(function (error) {
					$.notify(error.response.data.code + error.response.data.message, "error");
				});
				
				
				$("#includeAccountClient-Fast").hide();
			},
			loadCitys: function(){
				var self = this;
				
				apiMV.get('/geo_citys', {
					params: {
						order: 'name,asc',
						filter: 'department,eq,' + self.post.department,
					}
				}).then(function (response) {
					self.selectOptions.geo_citys = response.data.records;
					
				}).catch(function (error) {
					$.notify(error.response.data.code + error.response.data.message, "error");
				});
			},
			updateClient: function () {
				var post = this.post;
				apiMV.put('/clients/' + post.id, post).then(function (response) {
					console.log(response.data);
					router.push('//' + self.$route.params.client_id + '/Accounts/Edit');
				}).catch(function (error) {
					console.log(error.response);
					$.notify(error.response.data.code + error.response.data.message, "error");
				});
			},
			findClients: function(){
				var self = this;
				var idClient = self.$route.params.client_id;
				
				apiMV.get('/accounts_clients', {
					params: {
						filter: [
							'client,eq,' + idClient, 
							'id,eq,' + self.$route.params.account_id,
						],
						join: [
							'services_clients',
							'services_clients,types_meditions',
							'services_clients,services',
							'services_clients,services,types_meditions',
							'attributes_services_clients',
							'attributes_services_clients,attributes',
							'services_clients,types_repeats_services_clients',
							'quotations_clients',
							'quotations_clients,status_quotations',
						],
					}
				}).then(function (response) {
					self.accounts_clients = response.data.records;
					//self.sumarTodo();
					// 'status_quotations',
					console.log("OK");
				}).catch(function (error) {
					$.notify(error.response.data.code + error.response.data.message, "error");
				});
				
				$("#includeContactClient-Fast").hide();
				$("#includeRedicatedClient-Fast").hide();
				$("#includeAuditorClient-Fast").hide();
			},
			includeContactClient: function(){
				var self = this;
				
				apiMV.post('/crew_clients', self.post_crew_clients).then(function (response) {
					// post.id = response.data;
					$("#includeContactClient-Fast").hide();
					self.findClients();
					self.post_crew_clients.contact = 0;
					self.post_crew_clients.type_contact = 0;
				}).catch(function (error) {
					$.notify(error.response.data.code + error.response.data.message, "error");
					$.notify(error.response.data.code + error.response.data.message, "error");
				});
			},
			includeRedicatedClient: function(){
				var self = this;
				
				apiMV.post('/redicated_clients', self.post_redicated_clients).then(function (response) {
					// post.id = response.data;
					$("#includeRedicatedClient-Fast").hide();
					self.findClients();
					self.post_redicated_clients.consecutive = '';
					self.post_redicated_clients.name = '';
					self.post_redicated_clients.object = '';
					self.post_redicated_clients.description_service = '';
					self.post_redicated_clients.date_start = '';
					self.post_redicated_clients.date_end = '';
					self.post_redicated_clients.additional_notes = '';
				}).catch(function (error) {
					$.notify(error.response.data.code + error.response.data.message, "error");
					$.notify(error.response.data.code + error.response.data.message, "error");
				});
			},
			includeAuditorClient: function(){
				var self = this;
				
				apiMV.post('/auditors_clients', self.post_auditors_clients).then(function (response) {
					// post.id = response.data;
					$("#includeAuditorClient-Fast").hide();
					self.findClients();
					self.post_auditors_clients.contact = 0;
				}).catch(function (error) {
					$.notify(error.response.data.code + error.response.data.message, "error");
				});
			},
			updateAccountClient: function(data){
				var self = this;
				var tempAccount = {
					id: data.id,
					client: data.client,
					name: data.name,
					contact: data.contact,
					address: data.address,
					address_invoices: data.address_invoices,
					observations: data.observations,
				};
				
				apiMV.put('/accounts_clients/' + tempAccount.id, tempAccount).then(function (response) {
					$.notify("Guardado con éxito.", "success");
					self.findClients();
				}).catch(function (error) {
					$.notify(error.response.data.code + error.response.data.message, "error");
				});
			},
		}
	});

	
	var Clients_Accounts_Edit_Users = Vue.extend({
		template: '#edit-Clients-Users',
		data: function () {
			return {
				selectOptions: {
					crew_clients: [],
				},
				post: {
					id: Number(this.$route.params.client_id),
					type: 0,
					identification_type: 0,
					identification_number: '',
					social_reason: '',
					tradename: '',
					society_type: 0,
					department: 0,
					city: 0,
					address: '',
					geo_address: '',
					legal_representative: 0,
					contact_principal: 0,
					contact_alternative: 0,
					enable_audit: 0,
				},
				crew_clients: [],
				redicated_clients: [],
				auditors_clients: [],
				accounts_clients: [],
				post_crew_clients: {
					client: this.$route.params.client_id,
					contact: 0,
					type_contact: 0,
				},
				post_redicated_clients: {
					client: this.$route.params.client_id,
					consecutive: '',
					name: '',
					object: '',
					description_service: '',
					date_start: '',
					date_end: '',
					additional_notes: '',
				},
				post_auditors_clients: {
					contact: 0,
					client: this.$route.params.client_id,
				},
				calc: {
					subService: 0,
					subTotalAttributes: 0,
				},
				post_account: {
					client: Number(this.$route.params.client_id),
					name: '',
					contact: 0,
					address: '',
					address_invoices: '',
				},
				posts: [],
				searchKey: ''
			};
		},
		mounted: function () {
			var self = this;
			//self.loadSelects();
			self.findClients();
		},
		computed: {
			filteredposts: function () {
			  return this.posts.filter(function (post) {
				return this.searchKey=='' || post.social_reason.indexOf(this.searchKey) !== -1;
			  },this);
			}
		},
		methods: {
			findClients: function (){
				var self = this;
				console.log('client,eq,' + self.$route.params.client_id);
				
				self.posts = [];
				apiMV.get('/users_clients', {
					params: {
						filter: [
							'client,eq,' + self.$route.params.client_id
						],
						join: [
							'users',
							'permissions',
						]
					}
				}).then(function (response) {
					console.log(response);
					self.posts = response.data.records;
					$(document).ready(function() { $('#dataTable').DataTable(); });
				}).catch(function (error) {
					$.notify(error.response.data.code + error.response.data.message, "error");
				});
			},
			createNewUser: function(){			
				var self = this;
				
				console.log(self.post_account);
				
				apiMV.post('/accounts_clients', self.post_account).then(function (response) {
					post.id = response.data;	
					router.push('//' + self.$route.params.client_id + '/Accounts/Edit');
				}).catch(function (error) {
					$.notify(error.response.data.code + error.response.data.message, "error");
				});
				
			},
			zfill: function(number, width) {
				var numberOutput = Math.abs(number); /* Valor absoluto del número */
				var length = number.toString().length; /* Largo del número */ 
				var zero = "0"; /* String de cero */  
				
				if (width <= length) {
					if (number < 0) {
						 return ("-" + numberOutput.toString()); 
					} else {
						 return numberOutput.toString(); 
					}
				} else {
					if (number < 0) {
						return ("-" + (zero.repeat(width - length)) + numberOutput.toString()); 
					} else {
						return ((zero.repeat(width - length)) + numberOutput.toString()); 
					}
				}
			},
			formatMoney: function(n, c, d, t){
				var c = isNaN(c = Math.abs(c)) ? 2 : c,
					d = d == undefined ? "." : d,
					t = t == undefined ? "," : t,
					s = n < 0 ? "-" : "",
					i = String(parseInt(n = Math.abs(Number(n) || 0).toFixed(c))),
					j = (j = i.length) > 3 ? j % 3 : 0;

				return s + (j ? i.substr(0, j) + t : "") + i.substr(j).replace(/(\d{3})(?=\d)/g, "$1" + t) + (c ? d + Math.abs(n - i).toFixed(c).slice(2) : "");
			},
			loadSelects: function(){
				var self = this;
				var idClient = self.$route.params.client_id;
				
				apiMV.get('/crew_clients', {
					params: {
						filter: 'client,eq,' + idClient,
						join: [
							'contacts',
							'types_contacts',
						],
					}
				}).then(function (response) {
					self.selectOptions.crew_clients = response.data.records;
					
				}).catch(function (error) {
					$.notify(error.response.data.code + error.response.data.message, "error");
				});
				
			},
			includeRedicatedClient: function(){
				var self = this;
				
				apiMV.post('/redicated_clients', self.post_redicated_clients).then(function (response) {
					// post.id = response.data;
					$("#includeRedicatedClient-Fast").hide();
					self.findClients();
					self.post_redicated_clients.consecutive = '';
					self.post_redicated_clients.name = '';
					self.post_redicated_clients.object = '';
					self.post_redicated_clients.description_service = '';
					self.post_redicated_clients.date_start = '';
					self.post_redicated_clients.date_end = '';
					self.post_redicated_clients.additional_notes = '';
				}).catch(function (error) {
					$.notify(error.response.data.code + error.response.data.message, "error");
					$.notify(error.response.data.code + error.response.data.message, "error");
				});
			},
		}
	});

	var router = new VueRouter({routes:[
		{ path: '/', component: Clients_List, name: 'Clients-List'},
		
		{ path: '/View/:client_id', component: Clients_View, name: 'Clients-View'},
		{ path: '/View/:client_id/Contacts', component: Clients_View_Contacts, name: 'Clients-View-Contacts'},
		{ path: '/View/:client_id/Redicateds', component: Clients_View_Redicateds, name: 'Clients-View-Redicateds'},
		{ path: '/View/:client_id/Auditors', component: Clients_View_Auditors, name: 'Clients-View-Auditors'},
		{ path: '/View/:client_id/Services', component: Clients_View_Services, name: 'Clients-View-Services'},
		{ path: '/View/:client_id/Invoices', component: Clients_View_Invoices, name: 'Clients-View-Invoices'},
		
		{ path: '/Edit/:client_id/Add/Accounts', component: Clients_Accounts_Edit_Create, name: 'Clients-Accounts-Edit-Add'},
		{ path: '/Edit/:client_id/Accounts', component: Clients_Accounts_Edit, name: 'Clients-Accounts-Edit'},
		{ path: '/Edit/:client_id/Accounts/:account_id/Info', component: Clients_Accounts_Edit_Info, name: 'Clients-Accounts-Edit-Info'},
		{ path: '/Edit/:client_id/Accounts/:account_id/Invoices', component: Clients_Accounts_Edit_Invoices, name: 'Clients-Accounts-Edit-Invoices'},
		{ path: '/Edit/:client_id/Accounts/:account_id/Requests', component: Clients_Accounts_Edit_Requests, name: 'Clients-Accounts-Edit-Requests'},
		{ path: '/Edit/:client_id/Users', component: Clients_Accounts_Edit_Users, name: 'Clients-Users-Edit'},
		
		{ path: '/Add', component: Clients_Add, name: 'Clients-Add'},
		{ path: '/Edit/:client_id', component: Clients_Info_Edit, name: 'Clients-Info'},
		{ path: '/Edit/:client_id/Contacts', component: Clients_Contacts_Edit, name: 'Clients-Contacts-Edit'},
		{ path: '/Edit/:client_id/Redicateds', component: Clients_Redicateds_Edit, name: 'Clients-Redicateds-Edit'},
		{ path: '/Edit/:client_id/Auditors', component: Clients_Auditors_Edit, name: 'Clients-Auditors-Edit'},
		{ path: '/Edit/:client_id/Invoices', component: Clients_Invoices_Edit, name: 'Clients-Invoices-Edit'},
		{ path: '/Edit/:client_id/Quotations', component: Clients_Quotations_Edit, name: 'Clients-Quotations-Edit'},
		{ path: '/Edit/:client_id/ContractsServices', component: Clients_ContractsServices_Edit, name: 'Clients-ContractsServices-Edit'},
		
		{ path: '/Edit/:client_id/Accounts/:account_client_id/Add/Services', component: Clients_Services_Add, name: 'ServicesClients-Add'},
		{ path: '/Edit/:client_id/Accounts/:account_client_id/Attributes/add', component: Clients_Attributes_Services_Add, name: 'AttributesServicesClients-Add'},
		{ path: '/Edit/:client_id/Accounts/:account_client_id/Attribute/:client_attribute_service_id', component: Clients_Attributes_Services_Delete, name: 'AttributesServicesClients-Delete'},
		{ path: '/Edit/:client_id/Accounts/:account_client_id/Service/:client_service_id', component: Clients_Services_Delete, name: 'ServicesClients-Delete'},
		
		{ path: '/Delete/:client_id/delete', component: Clients_Delete, name: 'Clients-Delete'},
		{ path: '/Delete/:client_id/Contact/:client_contact_id', component: Clients_Contacts_Delete, name: 'ClientsContacts-Delete'},
		{ path: '/Delete/:client_id/Redicated/:redicated_client_id', component: Clients_Redicated_Delete, name: 'RedicatedClients-Delete'},
		{ path: '/Delete/:client_id/Auditors/:auditor_client_id', component: Clients_Auditors_Delete, name: 'ClientsAuditors-Delete'},
		{ path: '/Delete/:client_id/Accounts/:account_client_id', component: Clients_Accounts_Delete, name: 'Clients-Accounts-Delete'},
		
	]});

	var appRender = new Vue({
		components: {
			'component-navbar-top-clients-edit': Navbar_Top_Clients_Component
		},
		data: function () {
			return {
				selectOptions: {
					types_clients: [],
					types_identifications: [],
					types_societys: [],
					geo_departments: [],
					geo_citys: [],
					contacts: [],
					types_contacts: [],
					types_repeats_services_clients: [],
				},
			};
		},	
		router:router,
		mounted: function () {
			var self = this;
			self.loadSelects();
		},
		methods: {
			loadSelects: function(){
				var self = this;
				
				apiMV.get('/types_clients', { params: { order: 'name,asc', } })
					.then(function (response) {
						self.selectOptions.types_clients = response.data.records;
					}).catch(function (error) {
						$.notify(error.response.data.code + error.response.data.message, "error");
					});
					
				apiMV.get('/types_identifications', { params: { order: 'name,asc', } })
					.then(function (response) {
						self.selectOptions.types_identifications = response.data.records;
					}).catch(function (error) {
						$.notify(error.response.data.code + error.response.data.message, "error");
					});
					
				apiMV.get('/types_societys', { params: { order: 'name,asc', } })
					.then(function (response) {
						self.selectOptions.types_societys = response.data.records;
					}).catch(function (error) {
						$.notify(error.response.data.code + error.response.data.message, "error");
					});
					
				apiMV.get('/geo_departments', { params: { order: 'name,asc', } })
					.then(function (response) {
						self.selectOptions.geo_departments = response.data.records;
					}).catch(function (error) {
						$.notify(error.response.data.code + error.response.data.message, "error");
					});
					
				apiMV.get('/geo_citys', { params: { order: 'name,asc', } })
					.then(function (response) {
						self.selectOptions.geo_citys = response.data.records;
					}).catch(function (error) {
						$.notify(error.response.data.code + error.response.data.message, "error");
					});
					
				apiMV.get('/contacts', { params: { order: 'name,asc', } })
					.then(function (response) {
						self.selectOptions.contacts = response.data.records;
					}).catch(function (error) {
						$.notify(error.response.data.code + error.response.data.message, "error");
					});
					
				apiMV.get('/types_contacts', { params: { order: 'name,asc', } })
					.then(function (response) {
						self.selectOptions.types_contacts = response.data.records;
					}).catch(function (error) {
						$.notify(error.response.data.code + error.response.data.message, "error");
					});
			},
		},
	}).$mount('#app');
</script>