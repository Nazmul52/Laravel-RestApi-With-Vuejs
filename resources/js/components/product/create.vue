<template>
		
		<div>
			<div class="row">
				<router-link to="/allProduct" class="btn btn-primary">All Product</router-link>
			</div>
			<div class="container-login">
			  <div class="row justify-content-center">
			    <div class="col-xl-12 col-lg-12 col-md-12">
			      <div class="card shadow-sm my-5">
			        <div class="card-body p-0">
			          <div class="row">
			            <div class="col-lg-12">
			              <div class="login-form">
			                <div class="text-center">
			                  <h1 class="h4 text-gray-900 mb-4">Add Product</h1>
			                </div>
			                <!-- Form start -->
			                <form class="user" enctype="multipart/form-data" @submit.prevent="addProduct">

			                  <div class="form-group">
			                  	<div class="form-row">
			                  		<div class="col-md-6">
			                  			<label>Product Name</label>
			                  			<input type="text" class="form-control" id="productName" v-model="form.product_name"  placeholder="Enter Product Name">
			                  			<small class="text-danger" v-if="errors.product_name"> {{ errors.product_name[0]}} </small>
			                  		</div>
			                  		<div class="col-md-6">
			                  			<label>Product Code</label>
			                  			<input type="text"  class="form-control" id="product_code" v-model="form.product_code"  placeholder="Enter Product Code">
			                  			<small class="text-danger" v-if="errors.product_code"> {{ errors.product_code[0]}} </small>
			                  		</div>
			                  	</div>
			                    

			                  </div>

			                  <div class="form-group">
			                  	<div class="form-row">
			                  		<div class="col-md-6">
			                  			<label>Category</label>
			                  			<select class="form-control" v-model="form.category_id" >
			                  				<option>Select Category</option>
			                  				<option :value="category.id" v-for="category in categories" :key="category.id">{{category.name}}</option>
			                  			</select>
			                  			<small class="text-danger" v-if="errors.category_id"> {{ errors.category_id[0]}} </small>
			                  		</div>
			                  		<div class="col-md-6">
			                  			<label>Supplier</label>
			                  			<select class="form-control" v-model="form.supplier_id">
			                  				<option>Select Supplier</option>
			                  				<option :value="supplier.id" v-for="supplier in suppliers" :key="supplier.id">{{supplier.name}}</option>
			                  			</select>
			                  			<small class="text-danger" v-if="errors.supplier_id"> {{ errors.supplier_id[0]}} </small>
			                  		</div>
			                  	</div>
			                    

			                  </div>
			              
			                <div class="form-group">
			                  	<div class="form-row">
			                  		<div class="col-md-4">
			                  				<label>Buying Price</label>
			                  			<input type="number" class="form-control" id="buying_price" v-model="form.buying_price"  placeholder="Enter Buying Price">
			                  			<small class="text-danger" v-if="errors.buying_price"> {{ errors.buying_price[0]}} </small>
			                  		</div>

			                  		<div class="col-md-4">
			                  			<label>Selling Price</label>
			                  			<input type="number" class="form-control" id="selling_price" v-model="form.selling_price"  placeholder="Enter Selling Price">
			                  			<small class="text-danger" v-if="errors.selling_price"> {{ errors.selling_price[0]}} </small>
			                  		</div>
			                  		<div class="col-md-4">
			                  			<label>Root</label>
			                  			<input type="text" class="form-control" id="root" v-model="form.root"  placeholder="Enter the root">
			                  			<small class="text-danger" v-if="errors.root"> {{ errors.root[0]}} </small>
			                  		</div>
			                  		
			                  	</div>
			                    

			                  </div>

			                  <div class="form-group">
			                  	<div class="form-row">
			                  		<div class="col-md-6">
			                  			<label>Buying Date</label>
			                  			<input type="date" class="form-control" id="buying_date" v-model="form.buying_date"  placeholder="Enter Buying Date">
			                  			<small class="text-danger" v-if="errors.buying_date"> {{ errors.buying_date[0]}} </small>
			                  		</div>
			                  		<div class="col-md-6">
			                  			<label>Product Quantity</label>
			                  			<input type="number" class="form-control" id="product_quantity" v-model="form.product_quantity"  placeholder="Enter Product Quantity">
			                  			<small class="text-danger" v-if="errors.product_quantity"> {{ errors.product_quantity[0]}} </small>
			                  		</div>
			                  		
			                  	</div>
			                    

			                  </div>

			                    <div class="form-group">
			                  	<div class="form-row">
			                  	
			                  		<div class="col-md-6">
			                  				<input type="file" class="custom-file-input" id="image" placeholder="Upload image" @change="onFileSelected">
			                  				<label class="custom-file-label" for="customFile">Choose file</label>
			                  				<small class="text-danger" v-if="errors.image"> {{ errors.image[0]}} </small>
			                  			
			                  		</div>

			                  		<div class="col-md-6">
			                  			<img :src="form.image" style="height: 40px; width: 40px;">
			                  		</div>
			                  		
			                  	</div>
			                    

			                  </div>

			                  <div class="form-group">
			                    <button type="submit" class="btn btn-primary btn-block">Submit</button>
			                  </div>
			                  <hr>
			                
			                </form>
			                <!-- Form End -->
			               
			              </div>
			            </div>
			          </div>
			        </div>
			      </div>
			    </div>
			  </div>
			</div>
		</div>


</template>






<script type="text/javascript">
	export default {
			created(){

				if(!User.loggedIn()){
					this.$router.push({ name: 'home' })
				}

				this.getAllCategory();
				this.getAllSupplier();
			},

			data(){
				return {
					form: {
						product_name: null,
						product_code : null,
						product_quantity : null,
						category_id: null,
						supplier_id: null,
						buying_date: null,
						image: null,
						root: null,
						buying_price: null,
						selling_price: null,
					},

					errors:{},
					categories: [],
					suppliers: [],
				}
			},
			methods:{

				onFileSelected(event){
					let file = event.target.files[0];

					if(file.size > 1048770){
						Notification.image_validation();
					}else{
						let reader = new FileReader();
						reader.onload = event =>{
							this.form.image = event.target.result
							console.log(event.target.result)
						};
						reader.readAsDataURL(file);
					}
					// console.log(file);
				},

				addProduct(){
					axios.post('api/product', this.form)
					.then(res => {
						// User.responseAfterLogin(res)
						
						Toast.fire({
						  icon: 'success',
						  title: 'Successfully Added new Product'
						})

						this.$router.push({  name: 'allProduct'})

					})
					.catch(error => this.errors = error.response.data.errors)
					.catch(
						console.log(error.response.data),
						Toast.fire({
						  icon: 'warning',
						  title: 'Something went wrong'
						})
					) 

						
				
				},

				getAllCategory(){
					axios.get('/api/category')
					.then(({data}) => (this.categories = data))
					.catch() 
				},

				getAllSupplier(){
					axios.get('/api/supplier')
					.then(({data}) => (this.suppliers = data))
					.catch() 
				},
				
			}  
		

	}
</script>



<style type="text/css">
	
</style>