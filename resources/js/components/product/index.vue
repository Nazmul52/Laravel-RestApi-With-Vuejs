<template>
	<div class="container-fluid" id="container-wrapper">
	        <div class="d-sm-flex align-items-center justify-content-between mb-4">
	          <h1 class="h3 mb-0 text-gray-800">All Product</h1>
	          <ol class="breadcrumb">
	            <li class="breadcrumb-item"><a href="./">Home</a></li>
	            <li class="breadcrumb-item">Product</li>
	            <li class="breadcrumb-item active" aria-current="page">All Product</li>
	          </ol>
	        </div>

<input type="text" v-model="searchTerm" placeholder="Search Here.. " class="form-control" style="width: 300px;"><br>
	        <!-- Row -->
	        <div class="row">
	          <!-- Datatables -->
	          <div class="col-lg-12">
	            <div class="card mb-4">
	              <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
	                <h6 class="m-0 font-weight-bold text-primary">Product List</h6>
	              </div>
	              <div class="table-responsive p-3">
	                <table class="table align-items-center table-flush" id="dataTable">
	                  <thead class="thead-light">
	                    <tr>
	                      <th>Name</th>
	                      <th>Code</th>
	                      <th>Category name</th>
	                      <th>Supplier name</th>
	                      <th>Buying price</th>
	                      <th>Selling price</th>
	                      <th>Buying Date</th>
	                      <th>Quantity</th>
	                      <th>Image</th>
	                     
	                      <th>Action</th>
	                    </tr>
	                  </thead>
	                
	                  <tbody>
	                    
	                    <tr v-for="product in filtersearch" :key="product.id">
	                      <td>{{product.product_name}}</td>
	                      <td>{{product.product_code}}</td>
	                      <td>{{product.name}}</td>
	                      <td>{{product.supplier_name}}</td>
	                      <td>{{product.buying_price}}</td>
	                      <td>{{product.selling_price}}</td>
	                      <td>{{product.buying_date}}</td>
	                      <td>{{product.product_quantity}}</td>
	                      <td><img :src="product.image" id="pro_photo" :alt="product.product_name"/></td>
	                      <td>
	                      	<router-link :to="{name: 'edit-product', params: {id:product.id}}" class="btn btn-sm btn-primary"><font color="#fff">Edit</font></router-link>
	                      	<a @click="deleteProduct(product.id)" class="btn btn-sm btn-danger"><font color="#fff">Delete</font></a>
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
				products:[],
				searchTerm:''

			}
		}, 

		computed:{
			filtersearch(){
			return	this.products.filter(product => {
				return product.product_name.match(this.searchTerm)
			})
			}
		},
		methods:{
			getAllProduct(){
				axios.get('/api/product')
				.then(({data}) => (this.products = data))
				.catch() 
			},
			deleteProduct(product_id){

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
				  	axios.delete('/api/product/'+product_id)
				  	.then(() => {
				  		this.products = this.products.filter(product => {
				  			return product.id != product_id
				  		})
				  	})
				  	.catch(() => {
				  		this.$router.push({ name: 'allProduct'})
				  	})

				    Swal.fire(
				      'Deleted!',
				      'Your product has been deleted.',
				      'success'
				    )
				  }
				})


			}
		},
		created(){
			this.getAllProduct();
		}  
	}
</script>



<style type="text/css">
	#pro_photo{
		width: 40px;
		height: 40px;
	}
</style>