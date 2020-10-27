<template>
	<div class="container-fluid" id="container-wrapper">
	    
<input type="text" v-model="searchTerm" placeholder="Search Here.. " class="form-control" style="width: 300px;"><br>
	        <!-- Row -->
	        <div class="row">
	          <!-- Datatables -->
	          <div class="col-lg-12">
	            <div class="card mb-4">
	              <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
	                <h6 class="m-0 font-weight-bold text-primary">Stock</h6>
	              </div>
	              <div class="table-responsive p-3">
	                <table class="table align-items-center table-flush" id="dataTable">
	                  <thead class="thead-light">
	                    <tr>
	                      <th>Name</th>
	                      <th>Code</th>
	                      <th>Category </th>
	                      <th>Supplier </th>
	                      <th>Buying price</th>
	                      <th>Status</th>
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
	                      <td v-if="product.product_quantity >= 1"><span class="badge badge-success">Available</span></td>
	                      <td v-else="product.product_quantity <= 1"><span class="badge badge-danger">Stock out</span></td>
	                      <td>{{product.product_quantity}}</td>
	                      <td><img :src="product.image" id="pro_photo" :alt="product.product_name"/></td>
	                      <td>
	                      	<router-link :to="{name: 'edit-stock', params: {id:product.id}}" class="btn btn-sm btn-primary"><font color="#fff">Edit</font></router-link>
	                      
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