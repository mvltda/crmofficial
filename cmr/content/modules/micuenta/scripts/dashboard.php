<?php 
	global $session, $site;
?>
<script>
	var Sidebar_Busineses_Component = Vue.component('component-sidebar-busineses', {
		template: '#Sidebar-Busineses-Component',
		props: [
			'company_id'
		],
		data: function () {
			return {
				type: 'quotations',
				post: {
					id: 0,
				},
			};
		},
		mounted: function () {
			var self = this;
			
		},
	});

	// ------------ SIDEBARS ------------------------------------- 
	var Sidebar_Dashboard_Component = Vue.component('component-sidebar-dashboard', {
		template: '#Sidebar-Dashboard-Component',
		props: [
			'company_id'
		],
		data: function () {
			return {
				type: 'quotations',
				post: {
					id: 0,
				},
			};
		},
		mounted: function () {
			var self = this;
			
		},
	});
	
	// ------------ INICIO ------------------------------------- 
	var page_Dashboard = Vue.extend({
		template: '#page-Dashboard',
		data: function () {
			return {
				busineses: [],
			};
		},
		create: function () {
			var self = this;
		},
		mounted: function () {
			var self = this;
			console.log('Creando Dashboard');
			self.find();
			self.loadScripts();
		},
		methods: {
			loadScripts: function(){
				var LHCChatOptionsPage = {};
				LHCChatOptionsPage.opt = {};
				(function() {
				var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
				po.src = '//livecenter.dataservix.com/index.php/esp/chat/getstatusembed/(department)/1';
				var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
				})();
				
			},
			find: function(){
				var self = this;
				
				apiMV.get('/af_users_clients/', {
					params: {
						filter: [
							'user,eq,<?php echo $session->id; ?>',
						],
						join: [
							'af_clients',
							'af_clients,types_clients',
							'af_clients,types_identifications',
							'af_clients,geo_departments',
							'af_clients,geo_citys',
							'af_clients,contacts',
						],
					}
				}).then(function (r) {
					self.busineses = r.data.records;
					console.log(self.busineses);
					
				}).catch(function (error) {
					console.log(error);
					//$.notify(error.response.data.code + error.response.data.message, "error");
				});
			}
		}
	});
	
	var page_Busineses_Single = Vue.extend({
		template: '#page-Busineses-Single',
		data: function () {
			return {
				post: {
					id: this.$route.params.busineses_id,
					type: {
						id: 0,
						name: '',
					},
					identification_type: {
						id: 0,
						name: '',
					},
					identification_number: '',
					name: '',
					contact: {
						id: 0,
						identification_type: 0,
						identification_number: '',
						first_name: '',
						second_name: '',
						surname: '',
						second_surname: '',
						phone: '',
						phone_mobile: '',
						mail: '',
						department: 0,
						city: 0,
						address: '',
						geo_address: '',
					},
					represent_legal: {
						id: 0,
						identification_type: 0,
						identification_number: '',
						first_name: '',
						second_name: '',
						surname: '',
						second_surname: '',
						phone: '',
						phone_mobile: '',
						mail: '',
						department: 0,
						city: 0,
						address: '',
						geo_address: '',
					},
					address_principal: "Glorieta pilsen",
					address_principal_department: {
						id: 0,
						code: '',
						name: '',
					},
					address_principal_city: {
						id: 0,
						name: '',
						department: 0
					},
					address_invoices: '',
					address_invoices_department: {
						id: 0,
						code: '',
						name: '',
					},
					address_invoices_city: {
						id: 0,
						name: '',
						department: 0
					},
					audit_enabled: 0
				},
			};
		},
		create: function () {
			var self = this;
		},
		mounted: function () {
			var self = this;
			console.log('Creando Busineses Single');
			self.find();
		},
		methods: {
			find: function(){
				var self = this;
				
				apiMV.get('/af_users_clients/', {
					params: {
						filter: [
							'user,eq,<?php echo $session->id; ?>',
							'client,eq,' + self.post.id,
						],
						join: [
							'af_clients',
							'af_clients,types_clients',
							'af_clients,types_identifications',
							'af_clients,geo_departments',
							'af_clients,geo_citys',
							'af_clients,contacts',
						],
					}
				}).then(function (r) {
					if(r.data.records[0].client != undefined)
					{
						self.post = r.data.records[0].client;
					}
					else
					{
						$.notify('Cliente no existe o no tienes permisos', "error");
					}
				}).catch(function (error) {
					console.log(error);
					//$.notify(error.response.data.code + error.response.data.message, "error");
				});
			}
		}
	});
	
	var page_Business_Requests_Add = Vue.extend({
		template: '#page-Requests-Add',
		data: function () {
			return {
				post_add_services: {
					id: 0,
				},
				post: {
					client: this.$route.params.busineses_id,
					address_invoice: '',
					address_invoice_geo: '',
					request_notes: '',
					contact: 0,
					address_invoice_department: 0,
					address_invoice_city: 0,
					list_services: [],
				},
				list_departments: [],
				list_citys: [],
				list_contacts: [],
				list_services: [],
				repeats_services: [],
				urlMapSearchNewIframe: 'https://www.openstreetmap.org/export/embed.html?bbox=-4.2316872,16.0571269,-82.1243666,-66.8511907&marker=2.8894434,-73.783892',
			}
		},
		create: function () {
			var self = this;
		},
		mounted: function () {
			var self = this;
			console.log('Creando Requests Single');
			self.loadLists();
			self.find();
			
		},
		methods: {
			createRequest: function(){
				var self = this;
				console.log('generando solicitud..');
				
				if(
					self.post.client != 0
					&& self.post.contact != 0
					&& self.post.address_invoice_department != 0
					&& self.post.address_invoice_city != 0
					&& self.post.address_invoice != ''
					&& self.post.address_invoice_geo != ''
					&& self.post.list_services.length > 0
				)
				{
					var tempReq = {
						client: Number(self.post.client),
						contact: self.post.contact,
						address_invoice: self.post.address_invoice,
						address_invoice_department: self.post.address_invoice_department,
						address_invoice_city: self.post.address_invoice_city,
						address_invoice_geo: self.post.address_invoice_geo,
						request_notes: self.post.request_notes
					};
					
					console.log(tempReq);
					
					apiMV.post('/af_requests', tempReq)
					.then(function (response) {
						var request_id = response.data;
						console.log(request_id);
						
						// Agregar servicios a la solicitud y redireccionar
						
						var arrayfinal = [];
						var array1 = self.post.list_services;
						array1.forEach(function(element) {
							console.log(element);
							arrayfinal.push({
								client: tempReq.client,
								request: request_id,
								service: element.id,
								repeat: element.repeat,
							});
						});
						
						apiMV.post('/af_services_requests', arrayfinal)
						.then(function (response) {
							var id = response.data;
							console.log(id);
							
							router.push('/busineses/' + tempReq.client + '/Requests/view/' + request_id );
						})
						.catch(function (error) {
							console.log(error);
							console.log(error.response);
						});
					})
					.catch(function (error) {
						console.log(error);
						console.log(error.response);
					});
				}
				else
				{
					console.log("Campos incompletos");
				}
			},
			departmentChangeToCity: function(e){
				var self = this;
				apiMV.get('/geo_citys/', { params: {
					order: [ 'name,asc', ],
					filter: [ 'department,eq,' + e.target.value, ],
				}})
				.then(function (r) { self.list_citys = r.data.records; })
				.catch(function (error) { console.log(error); });
			},
			find: function(){
				var self = this;
				
				//$(function(){ $(".date").datepicker({ autoclose: true, todayHighlight: true }); });
			},
			loadLists: function(){
				var self = this;
				
				apiMV.get('/geo_departments/', { params: {
					order: [ 'name,asc', ],
				}})
				.then(function (r) {
					self.list_departments = r.data.records;
				})
				.catch(function (error) {
					console.log(error);
				});
				
				apiMV.get('/crew_clients/', { params: {
					order: [ 'id,asc', ],
					join: [
						'contacts',
					],
					filter: [
						'client,asc' + self.post.id, 
					],
				}})
				.then(function (r) {
					self.list_contacts = r.data.records;
				})
				.catch(function (error) {
					console.log(error);
				});
				
				apiMV.get('/services/', { params: {
					order: [ 'name,asc', ],
				}})
				.then(function (r) {
					self.list_services = r.data.records;
				})
				.catch(function (error) {
					console.log(error);
				});
				
				apiMV.get('/geo_citys/', { params: {
					order: [ 'name,asc', ],
				}})
				.then(function (r) { self.list_citys = r.data.records; })
				.catch(function (error) { console.log(error); });
				
				apiMV.get('/af_repeats_services/', { params: {
					order: [ 'name,asc', ],
				}})
				.then(function (r) { self.repeats_services = r.data.records; })
				.catch(function (error) { console.log(error); });
			},
			address_search: function(){
				var self = this;
				
				apiMV.get('/geo_citys', {
					params: {
						'filter': [
							'id,eq,' + self.post.address_invoice_city,
							'department,eq,' + self.post.address_invoice_department,
						],
						'join': [
							'geo_departments',
						],
					}
				})
				.then(function (r) {
					console.log(r);
					if(r.data.records[0] != undefined)
						{
							var temp = r.data.records[0];
							var searchData = {
									'q': self.post.address_invoice,
									'city': temp.name,
									'county': temp.department.name,
									'format': 'jsonv2',
									'accept-language': 'es',
									'country': 'co',
									'polygon': 1,
									'limit': 1,
								};
							
								console.log(searchData);
							aPiMap.get('/search', { params: searchData })
							.then(function (r) {
								if(r.data[0] != undefined)
									{
										var temp = r.data[0];
										var coord = {
											lon: temp.lon,
											lat: temp.lat
										};
										
										var cord1 = coord.lat + ',' + coord.lon;
										var cord2 = coord.lon + ',' + coord.lat;
										
										self.post.address_invoice_geo = cord1;
									
										var url = 'https://www.openstreetmap.org/export/embed.html?bbox=' + cord2 + ',' + cord2 + '&marker=' + cord1;
										
										console.log(url);
										
										self.urlMapSearchNewIframe = url;
									}
								else
									{
										alert('La direccion no fue encontrada');
									}
							})
							.catch(function (er) {
								console.log(er);
								//$.notify(error.response.data.code + error.response.data.message, "error");
							});
						}
					else
						{
							alert('La direccion no fue encontrada');
						}
				})
				.catch(function (er) {
					console.log(er);
					//$.notify(error.response.data.code + error.response.data.message, "error");
				});
				
			},
			addServiceRequest: function(){
				var self = this;
				
				apiMV.get('/services/' + self.post_add_services.id, { params: {
				}})
				.then(function (r) { self.post.list_services.push(r.data); })
				.catch(function (error) { console.log(error); });
			},
			removeServiceRequest: function(e){
				var self = this;
				self.post.list_services.splice(e, 1);
			},
		}
	});

	var page_Busineses_Requests_Single = Vue.extend({
		template: '#page-Requests-Single',
		data: function () {
			return {
				urlMapSearchNewIframe: '/preload.html',
				post: {
					id: this.$route.params.request_id,
					client: this.$route.params.busineses_id,
					"contact": {
						"id": 0,
						"identification_type": 0,
						"identification_number": "",
						"first_name": "",
						"second_name": "",
						"surname": "",
						"second_surname": "",
						"phone": "",
						"phone_mobile": "",
						"mail": "",
						"department": 0,
						"city": 0,
						"address": "",
						"geo_address": ""
					},
					"address_invoice": "",
					"address_invoice_department": {
						"id": 0,
						"code": "",
						"name": ""
					},
					"address_invoice_city": {
						"id": 0,
						"name": "",
						"department": 0
					},
					"address_invoice_geo": "",
					"request_notes": "",
					"af_services_requests": [],
					"af_quotations": [],
				},
			};
		},
		create: function () {
			var self = this;
		},
		mounted: function () {
			var self = this;
			console.log('Creando Requests Single');
			self.find();
		},
		methods: {
			find: function(){
				var self = this;
				
				apiMV.get('/af_requests/' + self.post.id, {
					params: {
						filter: [
							'client,eq,' + this.$route.params.busineses_id,
						],
						join: [
							'geo_departments',
							'geo_citys',
							'contacts',
							'af_services_requests,services',
							'af_services_requests,af_repeats_services',
							'af_quotations',
							'af_quotations,status_quotations',
						],
					}
				}).then(function (r) {
					self.post = r.data;
					console.log(self.post);
					
					
					var searchData = {
						'q': self.post.address_invoice,
						'format': 'jsonv2',
						'accept-language': 'es',
						'country': 'co',
						'polygon': 1,
						'limit': 1,
					};
					
					aPiMap.get('/search', { params: searchData })
							.then(function (r) {
								if(r.data[0] != undefined)
									{
										var temp = r.data[0];
										var coord = { lon: temp.lon, lat: temp.lat };
										var cord1 = coord.lat + ',' + coord.lon;
										var cord2 = coord.lon + ',' + coord.lat;
										
										var url = 'https://www.openstreetmap.org/export/embed.html?bbox=' + cord2 + ',' + cord2 + '&marker=' + cord1;
										
										self.urlMapSearchNewIframe = url;
									}
								else
									{
										alert('La direccion no fue encontrada');
									}
							})
							.catch(function (er) {
								console.log(er);
								//$.notify(error.response.data.code + error.response.data.message, "error");
							});
				}).catch(function (error) {
					console.log(error);
					//$.notify(error.response.data.code + error.response.data.message, "error");
				});
			},
		}
	});
	
	var page_Busineses_Requests_List = Vue.extend({
		template: '#page-Requests-List',
		data: function () {
			return {
				posts: [],
			};
		},
		create: function () {
			var self = this;
		},
		mounted: function () {
			var self = this;
			console.log('Creando Requests List');
			
			self.find();
		},
		methods: {
			find: function(){
				var self = this;
				
				apiMV.get('/af_requests/', {
					params: {
						filter: [
							'client,eq,' + this.$route.params.busineses_id,
						],
						join: [
							'af_requests',
						],
					}
				}).then(function (r) {
					self.posts = r.data.records;
				}).catch(function (error) {
					console.log(error);
					//$.notify(error.response.data.code + error.response.data.message, "error");
				});
			}
		}
	});
	
	var page_Busineses_Quotations_Single = Vue.extend({
		template: '#page-Quotations-Single',
		data: function () {
			return {
				post: {
				  'id': this.$route.params.quotation_id,
				  'client': {
					'id': this.$route.params.busineses_id,
					'type': 0,
					'identification_type': 0,
					'identification_number': '',
					'name': '',
					'contact': 0,
					'represent_legal': 0,
					'address_principal': '',
					'address_principal_department': 0,
					'address_principal_city': 0,
					'address_invoices': '',
					'address_invoices_department': 0,
					'address_invoices_city': 0,
					'audit_enabled': 0
				  },
				  'request': {
					'id': 0,
					'client': 0,
					'contact': {
					  'id': 0,
					  'identification_type': 0,
					  'identification_number': '',
					  'first_name': '',
					  'second_name': '',
					  'surname': '',
					  'second_surname': '',
					  'phone': '',
					  'phone_mobile': '',
					  'mail': '',
					  'department': 0,
					  'city': 0,
					  'address': '',
					  'geo_address': ''
					},
					'address_invoice': '',
					'address_invoice_department': {
					  'id': 0,
					  'code': '',
					  'name': ''
					},
					'address_invoice_city': {
					  'id': 0,
					  'name': '',
					  'department': 0
					},
					'address_invoice_geo': '',
					'request_notes': ''
				  },
				  'values': [],
				  'status': {
					'id': 0,
					'name': ''
				  },
				  'create': '',
				  'update': '',
				  'validity': 0,
				  'accept': ''
				},
				totales: {
					totalIva: 0,
					totalIvaInclude: 0,
					totalNotIva: 0,
				}
			};
		},
		create: function () {
			var self = this;
		},
		mounted: function () {
			var self = this;
			console.log('Creando Requests List');
			
			self.find();
			
			$('#printInvoice').click(function(){
				Popup($('.invoice')[0].outerHTML);
				function Popup(data) 
				{
					window.print();
					return true;
				}
			});
		},
		methods: {
			find: function(){
				var self = this;
				
				apiMV.get('/af_quotations/' + self.post.id, {
					params: {
						join: [
							'af_clients',
							'af_clients,geo_departments',
							'af_clients,geo_citys',
							'af_requests',
							'af_requests,contacts',
							'af_requests,contacts,geo_departments',
							'af_requests,geo_departments',
							'af_requests,geo_citys',
						],
					}
				}).then(function (r) {
					r.data.values = JSON.parse(r.data.values);
					self.post = r.data;
					
					var priceTotalSinIva = 0;
					var priceTotal = 0;
					var ivaTotal = 0;
					
					self.post.values.services.forEach(function(element) {
						price = Number(element.service.price);
						quantity = Number(element.quantity);
						iva_porc = Number(element.iva);
						subtotal = ( (price * quantity) );
						subtotalSoloIva = ( (subtotal / 100) * iva_porc );
						
						
						ivaTotal = ivaTotal + subtotalSoloIva;
						priceTotal = priceTotal + ( subtotalSoloIva + subtotal );
						priceTotalSinIva = priceTotalSinIva + ( subtotal );
					});
					
					self.totales.totalNotIva = priceTotalSinIva;
					self.totales.totalIva = ivaTotal;
					self.totales.totalIvaInclude = priceTotal;
					
					console.log(self.totales);
					
				}).catch(function (error) {
					console.log(error);
					//$.notify(error.response.data.code + error.response.data.message, "error");
				});
			}
		}
	});
	
	var page_Busineses_Users_List = Vue.extend({
		template: '#page-Business-Users-List',
		data: function () {
			return {
				posts: [],
				posts_pending: [],
			};
		},
		create: function () {
			var self = this;
		},
		mounted: function () {
			var self = this;
			console.log('Creando Users List');
			
			self.find();
		},
		methods: {
			find: function(){
				var self = this;
				
				apiMV.get('/af_users_clients', {
					params: {
						filter: [
							'client,eq,' + this.$route.params.busineses_id
						],
						join: [
							'users',
							'permissions',
						],
					}
				})
				.then(function (r) {
					self.posts = r.data.records;
					console.log(self.posts);
				})
				.catch(function (error) {
					console.log(error);
				});
				
				apiMV.get('/af_users_clients_pending', {
					params: {
						filter: [
							'client,eq,' + this.$route.params.busineses_id
						],
						join: [
							'users',
							'permissions',
						],
					}
				})
				.then(function (r) {
					self.posts_pending = r.data.records;
					console.log(self.posts_pending);
				})
				.catch(function (error) {
					console.log(error);
				});
			}
		}
	});
	
	var page_Busineses_Users_Add = Vue.extend({
		template: '#page-Business-Users-Add',
		data: function () {
			return {
				post: {
					"client": this.$route.params.busineses_id,
					"user_create": <?php echo $session->id; ?>,
					"names": "",
					"surname": "",
					"second_surname": "",
					"phone": "",
					"mobile": "",
					"mail": "",
					"hash": "",
					"permissions": 0
				},
				hash1: '',
			};
		},
		create: function () {
			var self = this;
		},
		mounted: function () {
			var self = this;
			console.log('Creando Users Add');
			
			self.find();
		},
		methods: {
			find: function(){
				
			},
			addRequestUser: function(){
				var self = this;
				
				if(
					self.post.client != 0
					&& self.post.user_create != 0
					&& self.post.names != ''
					&& self.post.surname != ''
					&& self.post.second_surname != ''
					&& self.post.phone != ''
					&& self.post.mobile != ''
					&& self.post.mail != ''
					&& self.post.hash != ''
					&& self.hash1 != ''
					&& self.post.permissions != 0
				)
				{
					if(self.post.hash != self.hash1)
					{
						$.notify("Las contraseñas no coinciden.", "error");
					}
					else
					{
						apiMV.post('/af_users_clients_pending', self.post)
						.then(function (response) {
							var request_id = response.data;
							console.log(request_id);
							
							router.push({ name: 'Business-Users-List', params: { userId: self.post.busineses_id } })
						})
						.catch(function (error) {
							console.log(error);
							console.log(error.response);
						});
					}
				}
				else
				{
					$.notify("Complete todos los campos.", "warning");
				}
				return false;
			},
		}
	});
	
	var page_Busineses_Contracts_List = Vue.extend({
		template: '#page-Business-Contracts-List',
		data: function () {
			return {
				posts: [],
				posts_pending: [],
			};
		},
		create: function () {
			var self = this;
		},
		mounted: function () {
			var self = this;
			console.log('Creando Contracts List');
			
			self.find();
		},
		methods: {
			find: function(){
				var self = this;
				
				apiMV.get('/af_contracts_clients', {
					params: {
						filter: [
							'client,eq,' + this.$route.params.busineses_id
						],
						join: [
							'status_contracts_clients',
							'af_requests',
							'af_quotations',
							'af_clients',
							'af_contracts_clients',
						],
					}
				})
				.then(function (r) {
					self.posts = r.data.records;
					console.log(self.posts);
				})
				.catch(function (error) {
					console.log(error);
				});
				
			}
		}
	});
	
	var page_Busineses_Invoices_List = Vue.extend({
		template: '#page-Business-Invoices-List',
		data: function () {
			return {
				posts: [],
				posts_pending: [],
			};
		},
		create: function () {
			var self = this;
		},
		mounted: function () {
			var self = this;
			console.log('Creando Invoices List');
			
			self.find();
		},
		methods: {
			find: function(){
				var self = this;
				
				apiMV.get('/af_invoices_clients', {
					params: {
						filter: [
							'client,eq,' + this.$route.params.busineses_id
						],
						join: [
							'af_clients',
							'status_invoices',
							'af_contracts_clients',
						],
					}
				})
				.then(function (r) {
					self.posts = r.data.records;
					console.log(self.posts);
				})
				.catch(function (error) {
					console.log(error);
				});
				
			}
		}
	});
	
	var page_Busineses_Contracts_Single = Vue.extend({
		template: '#page-Business-Contracts-Single',
		data: function () {
			return {
				posts: [],
				posts_pending: [],
			};
		},
		create: function () {
			var self = this;
		},
		mounted: function () {
			var self = this;
			console.log('Creando Contracts Single');
			
			self.find();
		},
		methods: {
			find: function(){
				var self = this;
				/*
				apiMV.get('/af_invoices_clients', {
					params: {
						filter: [
							'client,eq,' + this.$route.params.busineses_id
						],
						join: [
							'af_clients',
							'status_invoices',
							'ontract',
						],
					}
				})
				.then(function (r) {
					self.posts = r.data.records;
					console.log(self.posts);
				})
				.catch(function (error) {
					console.log(error);
				});
				*/
			}
		}
	});
	
	var page_Busineses_Invoices_Single = Vue.extend({
		template: '#page-Business-Invoices-Single',
		data: function () {
			return {
				posts: [],
				posts_pending: [],
			};
		},
		create: function () {
			var self = this;
		},
		mounted: function () {
			var self = this;
			console.log('Creando Invoices Single');
			
			self.find();
		},
		methods: {
			find: function(){
				var self = this;
				/*
				apiMV.get('/af_invoices_clients', {
					params: {
						filter: [
							'client,eq,' + this.$route.params.busineses_id
						],
						join: [
							'af_clients',
							'status_invoices',
							'ontract',
						],
					}
				})
				.then(function (r) {
					self.posts = r.data.records;
					console.log(self.posts);
				})
				.catch(function (error) {
					console.log(error);
				});
				*/
			}
		}
	});
	
	// ------------ FIN -------------------------------------
	
	var router = new VueRouter({routes:[
		{ path: '/', component: page_Dashboard, name: 'Dashboard'},
		{ path: '/busineses/:busineses_id', component: page_Busineses_Single, name: 'Business-Single'},
		{ path: '/busineses/:busineses_id/add', component: page_Business_Requests_Add, name: 'Business-Requests-Add'},
		{ path: '/busineses/:busineses_id/Requests', component: page_Busineses_Requests_List, name: 'Business-Requests-List'},
		{ path: '/busineses/:busineses_id/Requests/view/:request_id', component: page_Busineses_Requests_Single, name: 'Business-Requests-Single'},
		{ path: '/busineses/:busineses_id/Requests/view/:request_id/Quotations/view/:quotation_id', component: page_Busineses_Quotations_Single, name: 'Business-Quotations-Single'},
		{ path: '/busineses/:busineses_id/Users', component: page_Busineses_Users_List, name: 'Business-Users-List'},
		{ path: '/busineses/:busineses_id/Users/add', component: page_Busineses_Users_Add, name: 'Business-Users-Add'},
		{ path: '/busineses/:busineses_id/Contracts', component: page_Busineses_Contracts_List, name: 'Business-Contracts-List'},
		{ path: '/busineses/:busineses_id/Contracts/view/:contract_id', component: page_Busineses_Contracts_Single, name: 'Business-Contracts-Single'},
		{ path: '/busineses/:busineses_id/Invoices', component: page_Busineses_Invoices_List, name: 'Business-Invoices-List'},
		{ path: '/busineses/:busineses_id/Invoices/view/:invoice_id', component: page_Busineses_Invoices_Single, name: 'Business-Invoices-Single'},
	]});

	var appRender = new Vue({
		plugins: [
			//{ 'process.env.NODE_ENV': JSON.stringify( 'production' ) },
		],
		components: {
			'component-sidebar-busineses': Sidebar_Busineses_Component,
			'component-sidebar-dashboard': Sidebar_Dashboard_Component
		},
		data: function () {
			return {
			};
		},
		router:router,
		mounted: function () {
			var self = this;
		},
		methods: {
			cancelUserBusinesesRequest: function(a,b){
				var self = this;
				
				bootbox.confirm({
					title: "Validacion de seguridad",
					message: "¿Quieres aprobar estó ahora? Vas a eliminar un usuario, está acción es inrreversible y debes confirmarla para continuar.",
					buttons: {
						cancel: {
							label: '<i class="fa fa-times"></i> Cerrar'
						},
						confirm: {
							label: '<i class="fa fa-check"></i> Eliminar'
						}
					},
					callback: function (result) {
						if(result === true)
						{
							
							apiMV.get('/af_users_clients_pending/' + b, {
								params: {
									filter: [
										'client,eq,' + a,
										'id,eq,' + b,
									],
									
									join: [
										'users',
									]
								}
							})
							.then(function (r) {								
								if(r.data.id != undefined && r.data.id != '' && r.data.client == a && r.data.id == b)
								{
									console.log(r.data);
									
									apiMV.delete('/af_users_clients_pending/' + r.data.id).then(function (response) {
										console.log(response.data);
										$.notify("Eliminado con éxito", "success");
										location.reload();
									}).catch(function (error) {
										$.notify(error.response.data.code + error.response.data.message, "error");
									});
								}
								else
								{
									$.notify("Hubo un problema al eliminar la solicitud de usuario.", "error");
								}
							})
							.catch(function (error) {
								console.log(error);
							});
						}
					}
				});
			},
			DeleteUserBusineses: function(a,b){
				var self = this;
				
				bootbox.confirm({
					title: "Validacion de seguridad",
					message: "¿Quieres aprobar estó ahora? Vas a eliminar un usuario, está acción es inrreversible y debes confirmarla para continuar.",
					buttons: {
						cancel: {
							label: '<i class="fa fa-times"></i> Cerrar'
						},
						confirm: {
							label: '<i class="fa fa-check"></i> Eliminar'
						}
					},
					callback: function (result) {
						if(result === true)
						{
							apiMV.get('/af_users_clients', {
								params: {
									filter: [
										'client,eq,' + a,
										'id,eq,' + b,
									],
									
									join: [
										'users',
									]
								}
							})
							.then(function (r) {
								if(r.data.records[0] != undefined && r.data.records[0] != '' && r.data.records[0].client == a && r.data.records[0].id == b)
								{
									if(r.data.records[0].user.id != <?php echo $session->id; ?>)
									{
										apiMV.delete('/af_users_clients/' + r.data.records[0].id).then(function (response) {
											console.log(response.data);
											$.notify("Eliminado con éxito", "success");
											location.reload();
										}).catch(function (error) {
											$.notify(error.response.data.code + error.response.data.message, "error");
										});
									}
									else
									{
										bootbox.alert({
											message: 'Espera!. No te puedes eliminar tu mismo.',
											size: 'small'
										});
									}									
								}
								else
								{
									$.notify("Hubo un problema al eliminar el usuario.", "error");
								}
							})
							.catch(function (error) {
								console.log(error);
							});
							/**/
						}
					}
				});
			},
			changeStatusQuotations: function(a,b,c,d){
				var self = this;
				var temp = {
					id: Number(c),
					status: Number(d),
				};
				bootbox.confirm({
					title: "Validacion de seguridad",
					message: "¿Quieres aprobar estó ahora? Un representante será notificado para que se ponga en contacto contigo en caso de ser necesario.",
					buttons: {
						cancel: {
							label: '<i class="fa fa-times"></i> Aprobar Luego'
						},
						confirm: {
							label: '<i class="fa fa-check"></i> Aprobar Ahora'
						}
					},
					callback: function (result) {
						console.log('This was logged in the callback: ' + result);
						
						if(result == true){
							apiMV.get('/af_quotations/' + c, {
								params: {
									filter: [
										'client,eq,' + Number(a),
										'request,eq,' + Number(b),
									],
									join: [
									],
								}
							}).then(function (r) {
								if(r.data.id != undefined){
									console.log(temp);
									apiMV.put('/af_quotations/' + temp.id, temp).then(function (u) {
										$.notify("Cambiado con éxito.", "success");
										location.reload();
									}).catch(function (eu) {
										console.log(eu);
										console.log(eu.error);
										$.notify(eu.error.data.code + eu.error.data.message, "error");
									});
								}
							}).catch(function (er) {
								console.log(er);
								$.notify(er.r.data.code + er.r.data.message, "error");
							});
						}
					}
				});
			},
			zfill: function(number, width) {
				var numberOutput = Math.abs(number);
				var length = number.toString().length;
				var zero = "0";
				
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
		}
	}).$mount('#app');
</script>

<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker.css" rel="stylesheet" type="text/css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.js"></script>
<!--

<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.js"></script>
<script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.js"></script>
-->