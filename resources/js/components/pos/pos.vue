<template>
	<div class="container-fluid" id="container-wrapper">
	       


		<div class="container-fluid" id="container-wrapper">
		  <div class="d-sm-flex align-items-center justify-content-between mb-4">
		    <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
		    <ol class="breadcrumb">
		      <li class="breadcrumb-item"><a href="./">Home</a></li>
		      <li class="breadcrumb-item active" aria-current="page">POS</li>
		    </ol>
		  </div>

		  <div class="row mb-3">
		    <!-- Earnings (Monthly) Card Example -->
		    

		    <!-- Area Chart -->
		    <div class="col-xl-5 col-lg-5">
		      <div class="card mb-4">
		        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
		          	<h6 class="m-0 font-weight-bold text-primary">Expense Insert</h6>
					<a class="btn btn-sm btn-info" data-toggle="modal" data-target="#logoutModal"><font color="#fff">Add Customer</font></a>	        
		        </div>

		      <div class="container-fluid" id="container-wrapper">
		          

	                <div class="row">
	                  <div class="col-lg-12 mb-4">
	                    <!-- Simple Tables -->
	                    <div class="card">
	                    <!--   <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
	                        <h6 class="m-0 font-weight-bold text-primary">Simple Tables</h6>
	                      </div> -->
	                      <div class="table-responsive">
	                        <table class="table align-items-center table-flush">
	                          <thead class="thead-light">
	                            <tr>
	                              <th>Name</th>
	                              <th>Qty</th>
	                              <th>Unit</th>
	                              <th>Total</th>
	                              <th>Action</th>
	                            </tr>
	                          </thead>
	                          <tbody>
	                            <tr v-for="cart in carts" :key="cart.id">
	                              <td>{{ cart.pro_name }}</td>
	                              <td>	<button @click.prevent="decrement(cart.id)" class="btn btn-sm btn-danger" v-if="cart.pro_quantity >= 2">-</button>
	                              	<button  class="btn btn-sm btn-danger" v-else="" disabled="">-</button>
	                              	<input type="text" style="width: 50px;" readonly="" :value="cart.pro_quantity"/>
	                              	<button class="btn btn-sm btn-success" @click.prevent="increment(cart.id)">+</button>
	                              </td>
	                              <td>{{ cart.product_price }}</td>
	                              <td>{{ cart.sub_total }}</td>
	                              <td><a @click="removeItem(cart.id)" class="btn btn-sm btn-primary"><font color="#fff">X</font></a></td>
	                            </tr>
	                           
	                          </tbody>
	                        </table>
	                      </div>
	                      <div class="card-footer">
	                      	<ul class="list-group">
	                      		<li class="list-group-item d-flex justify-content-between align-items-center">Total Quantity:
	                      			<strong>{{ qty }}</strong>
	                      		</li>
	                      		<li class="list-group-item d-flex justify-content-between align-items-center">Sub Total :
	                      			<strong>{{ subtotal }}</strong>
	                      		</li>
	                      		<li class="list-group-item d-flex justify-content-between align-items-center">Vat :
	                      			<strong>{{ vats.vat }} %</strong>
	                      		</li>
	                      		<li class="list-group-item d-flex justify-content-between align-items-center">Total Amount:
	                      			<strong>{{ subtotal*vats.vat / 100 + subtotal }}</strong>
	                      		</li>
	                      	</ul>
	                      	<br>
	                      	<br>
	                      	<form @submit.prevent="orderDone">
	                      		<label>Customer Name</label>
	                      		<select class="form-control" v-model="customer_id">
                      				<option>Select customer </option>
                      				<option v-for="customer in customers"  :value="customer.id">{{ customer.name }} </option>
	                      		</select>

	                      		<label>Pay</label>
	                      		<input type="text" class="form-control" required="" v-model="pay">
	                      		<label>Due</label>
	                      		<input type="text" class="form-control" required="" v-model="due">
	                      		<label>Pay By</label>
	                      		<select class="form-control" v-model="pay_by">
                      				<option value="Handcash">Handcash </option>
                      				<option value="Check">Check </option>
                      				<option value="Gift Card">Gift Card </option>
	                      		</select>
	                      		<br>

	                      		<button type="submit" class="btn btn-success">Submit</button>
	                      	</form>
	                      </div>
	                    </div>
	                  </div>
	                </div>
		                <!--Row-->

		                <!-- Modal Logout -->
		                <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabelLogout" aria-hidden="true">
		                  <div class="modal-dialog" role="document">
		                    <div class="modal-content">
		                      <div class="modal-header">
		                        <h5 class="modal-title" id="exampleModalLabelLogout">Ohh No!</h5>
		                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		                          <span aria-hidden="true">×</span>
		                        </button>
		                      </div>
		                      <div class="modal-body">
		                        <p>Are you sure you want to logout?</p>
		                      </div>
		                      <div class="modal-footer">
		                        <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Cancel</button>
		                        <a href="login.html" class="btn btn-primary">Logout</a>
		                      </div>
		                    </div>
		                  </div>
		                </div>

		              </div>

		      </div>

		    </div>

		    <!-- Pie Chart -->
		    <div class="col-xl-7 col-lg-7">
		      <div class="card mb-4">
		        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
		          <h6 class="m-0 font-weight-bold text-primary">Products Sold</h6>
		        
		        </div>
		        <!--  Tab start -->
		        <ul class="nav nav-tabs" id="myTab" role="tablist">
		          <li class="nav-item" role="presentation">
		            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">All Product</a>
		          </li>
		          <li class="nav-item" role="presentation" v-for="category in categories" :key="category.id">
		            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false" @click="getSubProduct(category.id)">{{ category.name }}</a>
		          </li>
		         
		        </ul>
		        <div class="tab-content" id="myTabContent">
		        	<!--  All product start -->
		          <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
	          	        <div class="card-body">
	          	        	<input type="text" v-model="searchTerm" placeholder="Search Here.. " class="form-control" style="width: 300px;">
	          	        	<br>

	          	        	<div class="row">
	          		        	<div class="col-lg-3 col-md-3 col-sm-6 col-6" v-for="product in filtersearch" :key="product.id">
	          		        		<div class="row">
	          		        			<button class="btn btn-sm"  @click.prevent="addToCart(product.id)">
	          			        			<div class="card" style="width: 8.5rem; margin-bottom: 5px;">
	          			        			  <img class="card-img-top" :src="product.image" id="pro_photo" :alt="product.product_name">
	          			        			  <div class="card-body">
	          			        			    <h6 class="card-title">{{ product.product_name }}</h6>
	          			        			    <span class="badge badge-success" v-if="product.product_quantity >= 1">Available ({{ product.product_quantity }})</span>
	          			        			    <span class="badge badge-danger" v-else="product.product_quantity <= 1">Stock out</span>
	          			        			    
	          			        			  </div>
	          			        			</div>
	          		        			</button>
	          		        		</div>
	          	        		</div>
	          	        	</div>
	          	       
	          	        </div>


		          </div>
		          <!-- All product End -->

		          <!--  Category Start -->
		          <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
		          	
		          	        	<input type="text" v-model="searchCategoryTerm" placeholder="Search Here.. " class="form-control" style="width: 300px;">
		          	        	<br>

		          	        	<div class="row">
		          		        	<div class="col-lg-3 col-md-3 col-sm-6 col-6" v-for="getProduct in getFilterSearch" :key="getProduct.id">
		          		        		<div class="row">
		          		        			<button class="btn btn-sm"  @click.prevent="addToCart(getProduct.id)">
		          			        			<div class="card" style="width: 8.5rem; margin-bottom: 5px;">
		          			        			  <img class="card-img-top" :src="getProduct.image" id="pro_photo" :alt="getProduct.product_name">
		          			        			  <div class="card-body">
		          			        			    <h6 class="card-title">{{ getProduct.product_name }}</h6>
		          			        			    <span class="badge badge-success" v-if="getProduct.product_quantity >= 1">Available ({{ getProduct.product_quantity }})</span>
		          			        			    <span class="badge badge-danger" v-else="getProduct.product_quantity <= 1">Stock out</span>
		          			        			    
		          			        			  </div>
		          			        			</div>
		          		        			</button>
		          		        		</div>
		          	        		</div>
		          	        	</div>
		          </div>

		          <!-- Category End -->
		        </div>
		        <!--  Tab End -->

		        
		        
		      </div>
		    </div>
		    <!-- Invoice Example -->
		 
		    <!-- Message From Customer-->
		
		  </div>
		  <!--Row-->

		

		

		</div>

	 
    </div>
</template>






<script type="text/javascript">
	export default {
		created(){
			if(!User.loggedIn()){
				this.router.push({name: '/'})
			}
			
		},
		created(){
			this.getAllProduct();
			this.getAllCategory();
			this.getAllCustomer();
			this.cartProduct();
			this.vat();
			Reload.$on('AfterAdd', () => {
				this.cartProduct();
			});
			
		}, 

		data(){
			return {
				products:[],
				categories:[],
				searchTerm:'',
				searchCategoryTerm:'',
				getProducts: [],
				customers: [],
				errors: {},
				carts: [],
				vats: '',
				
				customer_id: '',
				pay: '',
				due: '',
				pay_by: '',
				

			}
		}, 

		computed:{
			filtersearch(){
				return	this.products.filter(product => {
					return product.product_name.match(this.searchTerm)
				})
			},
			getFilterSearch(){
				return	this.getProducts.filter(getProduct => {
					return getProduct.product_name.match(this.searchCategoryTerm)
				})
			},

			qty(){
				let sum = 0;

				for(let i =0; i < this.carts.length; i++){
					sum += (parseFloat(this.carts[i].pro_quantity));
				}

				return sum;
			},

			subtotal(){
				let sum = 0;

				for(let i =0; i < this.carts.length; i++){
					sum += (parseFloat(this.carts[i].sub_total));
				}

				return sum;
			}

		

		},
		methods:{
			getAllProduct(){
				axios.get('/api/product')
				.then(({data}) => (this.products = data))
				.catch() 
			},

			getAllCategory(){
				axios.get('/api/category')
				.then(({data}) => (this.categories = data))
				.catch() 
			},

			getAllCustomer(){
				axios.get('/api/customer')
				.then(({data}) => (this.customers = data))
				.catch() 
			},

			getSubProduct(id){
				axios.get('/api/getting/product/'+id)
				.then(({data}) => (this.getProducts = data))
				.catch() 
			},
			
			addToCart(id){
				axios.get('/api/addToCart/'+id)
				.then(() => {
					Reload.$emit('AfterAdd')
					Toast.fire({
					  icon: 'success',
					  title: 'Successfully Add to Cart'
					})
				})
				.catch() 
			},
			orderDone(){

				let total = this.subtotal*this.vats.vat /100+this.subtotal;
				var data = {qty:this.qty, subtotal:this.subtotal, customer_id: this.customer_id, pay:this.pay, due:this.due, pay_by:this.pay_by, vat:this.vats.vat, total:total};

				axios.post('/api/order/complete/', data)
				.then(() => {
					Toast.fire({
					  icon: 'success',
					  title: 'Successfully Order Done'
					})
				})
				.catch(error => this.errors = error.response.data.errors) 
			},

			cartProduct(){
				axios.get('/api/cart/product/')
				.then(({data}) => (this.carts = data))
				.catch() 
			},

			vat(){
				axios.get('/api/vat/')
				.then(({data}) => (this.vats = data))
				.catch() 
			},

			removeItem(id){
				axios.get('/api/removeItem/'+id)
				.then(() => {
					Reload.$emit('AfterAdd')
					Toast.fire({
					  icon: 'success',
					  title: 'Successfully remove this product from cart'
					})
				})
				.catch() 
			},

			increment(id){
				axios.get('/api/increment/quantity/'+id)
				.then(() => {
					Reload.$emit('AfterAdd')
					// Toast.fire({
					//   icon: 'success',
					//   title: 'Successfully remove this product from cart'
					// })
				})
				.catch() 
			},

			decrement(id){
				axios.get('/api/decrement/quantity/'+id)
				.then(() => {
					Reload.$emit('AfterAdd')
					// Toast.fire({
					//   icon: 'success',
					//   title: 'Successfully remove this product from cart'
					// })
				})
				.catch() 
			}
		},
		 
	}
</script>



<style type="text/css" scoped>
	#pro_photo{
		width: 100px;
		height: 135px;
	}
</style>