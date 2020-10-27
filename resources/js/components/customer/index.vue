<template>
	<div class="container-fluid" id="container-wrapper">
	        <div class="d-sm-flex align-items-center justify-content-between mb-4">
	          <h1 class="h3 mb-0 text-gray-800">All Customer</h1>
	          <ol class="breadcrumb">
	            <li class="breadcrumb-item"><a href="./">Home</a></li>
	            <li class="breadcrumb-item">Customer</li>
	            <li class="breadcrumb-item active" aria-current="page">All Customer</li>
	          </ol>
	        </div>

<input type="text" v-model="searchTerm" placeholder="Search Here.. " class="form-control" style="width: 300px;"><br>
	        <!-- Row -->
	        <div class="row">
	          <!-- Datatables -->
	          <div class="col-lg-12">
	            <div class="card mb-4">
	              <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
	                <h6 class="m-0 font-weight-bold text-primary">Customer List</h6>
	              </div>
	              <div class="table-responsive p-3">
	                <table class="table align-items-center table-flush" id="dataTable">
	                  <thead class="thead-light">
	                    <tr>
	                      <th>Name</th>
	                      <th>Email</th>
	                      <th>Phone</th>
	                      <th>Address</th>
	                      <th>Photo</th>
	                      <th>Action</th>
	                    </tr>
	                  </thead>
	                
	                  <tbody>
	                    
	                    <tr v-for="customer in filtersearch" :key="customer.id">
	                      <td>{{customer.name}}</td>
	                      <td>{{customer.email}}</td>
	                      <td>{{customer.phone}}</td>
	                      <td>{{customer.address}}</td>
	                      <td><img :src="customer.photo" id="customer_photo" :alt="customer.name"/></td>
	                      <td>
	                      	<router-link :to="{name: 'edit-customer', params: {id:customer.id}}" class="btn btn-sm btn-primary"><font color="#fff">Edit</font></router-link>
	                      	<a @click="deleteCustomer(customer.id)" class="btn btn-sm btn-danger"><font color="#fff">Delete</font></a>
	                      </td>
	                    </tr>
	                  

	                  </tbody>
	                </table>
	              </div>
	            </div>
	          </div>
	          
	        </div>
	        <!--Row-->


	 
	      </div>
</template>






<script type="text/javascript">
	export default {
		created(){
			if(!User.loggedIn()){
				this.router.push({name: '/'})
			}
			
		},

		data(){
			return {
				customers:[],
				searchTerm:''

			}
		}, 

		computed:{
			filtersearch(){
			return	this.customers.filter(customer => {
				return customer.name.match(this.searchTerm)
			})
			}
		},
		methods:{
			getAllCustomer(){
				axios.get('/api/customer')
				.then(({data}) => (this.customers = data))
				.catch() 
			},
			deleteCustomer(customer_id){

				Swal.fire({
				  title: 'Are you sure?',
				  text: "You won't be able to revert this!",
				  icon: 'warning',
				  showCancelButton: true,
				  confirmButtonColor: '#3085d6',
				  cancelButtonColor: '#d33',
				  confirmButtonText: 'Yes, delete it!'
				}).then((result) => {
				  if (result.isConfirmed) {
				  	axios.delete('/api/customer/'+customer_id)
				  	.then(() => {
				  		this.customers = this.customers.filter(customer => {
				  			return customer.id != customer_id
				  		})
				  	})
				  	.catch(() => {
				  		this.$router.push({ name: 'allCustomer'})
				  	})

				    Swal.fire(
				      'Deleted!',
				      'Your customer has been deleted.',
				      'success'
				    )
				  }
				})


			}
		},
		created(){
			this.getAllCustomer();
		}  
	}
</script>



<style type="text/css">
	#customer_photo{
		width: 40px;
		height: 40px;
	}
</style>