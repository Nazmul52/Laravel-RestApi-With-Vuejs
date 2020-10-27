<template>
	<div class="container-fluid" id="container-wrapper">
	        <div class="d-sm-flex align-items-center justify-content-between mb-4">
	          <h1 class="h3 mb-0 text-gray-800">All Supplier</h1>
	          <ol class="breadcrumb">
	            <li class="breadcrumb-item"><a href="./">Home</a></li>
	            <li class="breadcrumb-item">Supplier</li>
	            <li class="breadcrumb-item active" aria-current="page">All Supplier</li>
	          </ol>
	        </div>

<input type="text" v-model="searchTerm" placeholder="Search Here.. " class="form-control" style="width: 300px;"><br>
	        <!-- Row -->
	        <div class="row">
	          <!-- Datatables -->
	          <div class="col-lg-12">
	            <div class="card mb-4">
	              <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
	                <h6 class="m-0 font-weight-bold text-primary">Supplier List</h6>
	              </div>
	              <div class="table-responsive p-3">
	                <table class="table align-items-center table-flush" id="dataTable">
	                  <thead class="thead-light">
	                    <tr>
	                      <th>Name</th>
	                      <th>Email</th>
	                      <th>Phone</th>
	                      <th>Address</th>
	                      <th>Shop Name</th>
	                      <th>Photo</th>
	                      <th>Action</th>
	                    </tr>
	                  </thead>
	                
	                  <tbody>
	                    
	                    <tr v-for="supplier in filtersearch" :key="supplier.id">
	                      <td>{{supplier.name}}</td>
	                      <td>{{supplier.email}}</td>
	                      <td>{{supplier.phone}}</td>
	                      <td>{{supplier.address}}</td>
	                      <td>{{supplier.shopname}}</td>
	                      <td><img :src="supplier.photo" id="supplier_photo" :alt="supplier.name"/></td>
	                      <td>
	                      	<router-link :to="{name: 'edit-supplier', params: {id:supplier.id}}" class="btn btn-sm btn-primary"><font color="#fff">Edit</font></router-link>
	                      	<a @click="deleteSupplier(supplier.id)" class="btn btn-sm btn-danger"><font color="#fff">Delete</font></a>
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
				suppliers:[],
				searchTerm:''

			}
		}, 

		computed:{
			filtersearch(){
			return	this.suppliers.filter(supplier => {
				return supplier.name.match(this.searchTerm)
			})
			}
		},
		methods:{
			getAllSupplier(){
				axios.get('/api/supplier')
				.then(({data}) => (this.suppliers = data))
				.catch() 
			},
			deleteSupplier(supplier_id){

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
				  	axios.delete('/api/supplier/'+supplier_id)
				  	.then(() => {
				  		this.suppliers = this.suppliers.filter(supplier => {
				  			return supplier.id != supplier_id
				  		})
				  	})
				  	.catch(() => {
				  		this.$router.push({ name: 'allSupplier'})
				  	})

				    Swal.fire(
				      'Deleted!',
				      'Your supplier has been deleted.',
				      'success'
				    )
				  }
				})


			}
		},
		created(){
			this.getAllSupplier();
		}  
	}
</script>



<style type="text/css">
	#supplier_photo{
		width: 40px;
		height: 40px;
	}
</style>