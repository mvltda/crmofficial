<script>
	// ------------ INICIO ------------------------------------- 
	var Sidebar_Clients_Component = Vue.component('component-sidebar-clients', {
		template: '#Sidebar-Clients-Component',
		props: [
			'company_id'
		],
	});

	var Company_Info_Edit = Vue.extend({
		template: '#page-Company-Info-View',
		data: function () {
			return {
				company_id: this.$route.params.company_id,
				post: {
					id: this.$route.params.company_id,
					type: {
						id: 0,
						name: ''
					},
					identification_type: {
						id: 0,
						name: ''
					},
					identification_number: '',
					social_reason: '',
					tradename: '',
					society_type: {
						id: 0,
						name: '',
						description: ''
					},
					department: {
						id: 0,
						code: '',
						name: ''
					},
					city: {
						id: 0,
						name: '',
						department: ''
					},
					address: '',
					geo_address: '',
					legal_representative: {
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
						geo_address:''
					},
					contact_principal: {
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
						geo_address:''
					},
					enable_audit: 0,
					accounts_clients: [],
				},
			};
		},
		create: function () {
			var self = this;
		},
		mounted: function () {
			var self = this;
			
			apiMV.get('/clients/' + self.post.id, {
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
				
				console.log(self.post);
			}).catch(function (error) {
				$.notify(error.response.data.code + error.response.data.message, "error");
			});
		},
	});

	var BASE = Vue.extend({
		template: '#page-Company-Quotations-View',
		data: function () {
			return {
				request_id: this.$route.params.request_id,
				company_id: this.$route.params.company_id,
				post: {
					id: this.$route.params.request_id,
					client: this.$route.params.company_id,
				},
				posts: [],
			};
		},
		create: function () {
		},
		mounted: function () {
			var self = this;
			self.find();
		},
		methods: {
			find: function(){
				var self = this;
				
			},
			
		}
	});

	// ------------ FIN -------------------------------------
	var router = new VueRouter({routes:[
		{ path: '/:company_id', component: Company_Info_Edit, name: 'Company-Info-View'},
	]});

	var appRender = new Vue({
		components: {
			'component-sidebar-clients': Sidebar_Clients_Component
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
		}
	}).$mount('#app');
</script>