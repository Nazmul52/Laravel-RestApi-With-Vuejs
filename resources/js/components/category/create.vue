<template>
		
		<div>
			<div class="row">
				<router-link to="/allCategory" class="btn btn-primary">All Category</router-link>
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
			                  <h1 class="h4 text-gray-900 mb-4">Add Category</h1>
			                </div>
			                <!-- Form start -->
			                <form class="user" @submit.prevent="addCategory">

			                  <div class="form-group">
			                  	<div class="form-row">
			                  		<div class="col-md-6">
			                  			<label>Full Name</label>
			                  			<input type="text" class="form-control" id="exampleInputFirstName" v-model="form.name"  placeholder="Enter  Name">
			                  			<small class="text-danger" v-if="errors.name"> {{ errors.name[0]}} </small>
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
						name: null,
						
					},

					errors:{}
				}
			},
			methods:{

				
				addCategory(){
					axios.post('api/category', this.form)
					.then(res => {
						// User.responseAfterLogin(res)
						
						Toast.fire({
						  icon: 'success',
						  title: 'Successfully Added new Category'
						})

						this.$router.push({  name: 'allCategory'})

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