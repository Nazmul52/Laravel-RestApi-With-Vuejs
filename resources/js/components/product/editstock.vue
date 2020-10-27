<template>
		
		<div>
			<div class="row">
				<router-link to="/stock" class="btn btn-primary">Go Back</router-link>
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
			                  <h1 class="h4 text-gray-900 mb-4">Edit Stock</h1>
			                </div>
			                <!-- Form start -->
			                <form class="user" @submit.prevent="updateStock">

			                <div class="form-group">
			                  	<div class="form-row">
			                  		<div class="col-md-6">
			                  			<label>Product Quantity</label>
			                  			<input type="number" class="form-control" id="quantity" v-model="form.product_quantity"  placeholder="Enter Product Quantity">
			                  			<small class="text-danger" v-if="errors.product_quantity"> {{ errors.product_quantity[0]}} </small>
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

				
			},

			data(){
				return {
					form: {
						product_quantity: null,
						
					},

					errors:{},
					
				}
			},

			created(){
				let id = this.$route.params.id
				axios.get('/api/product/'+id)
				.then(({data}) => (this.form = data))
				.catch()

				
			},
			methods:{

				
				updateStock(){
					let id = this.$route.params.id

					axios.post('/api/stock/edit/'+id, this.form)
					.then(res => {
						// User.responseAfterLogin(res)
						
						Toast.fire({
						  icon: 'success',
						  title: 'Successfully update product stock information'
						})

						this.$router.push({  name: 'stock'})

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
				
				
			}  
		

	}
</script>



<style type="text/css">
	
</style>