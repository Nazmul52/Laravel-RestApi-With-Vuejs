<template>
		
		<div>
			<div class="row">
				<router-link to="/allExpense" class="btn btn-primary">All Expense</router-link>
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
			                  <h1 class="h4 text-gray-900 mb-4">Add Expense</h1>
			                </div>
			                <!-- Form start -->
			                <form class="user" @submit.prevent="addExpense">

			                  <div class="form-group">
			                  	<div class="form-row">
			                  		<div class="col-md-12">
			                  			<label>Details</label>
			                  			<textarea class="form-control" id="details" v-model="form.details"  placeholder="Enter  Details"></textarea>
			                  			<small class="text-danger" v-if="errors.details"> {{ errors.details[0]}} </small>
			                  		</div>
			                  		
			                  	</div>
			                    

			                  </div>

			                  <div class="form-group">
			                  	<div class="form-row">
			                  		<div class="col-md-12">
			                  			<label>Amount</label>
			                  			<input class="form-control" id="amount" v-model="form.amount"  placeholder="Enter  Amount">
			                  			<small class="text-danger" v-if="errors.amount"> {{ errors.amount[0]}} </small>
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
						details: null,
						amount: null,
						
					},

					errors:{}
				}
			},
			methods:{

				
				addExpense(){
					axios.post('api/expense', this.form)
					.then(res => {
						// User.responseAfterLogin(res)
						
						Toast.fire({
						  icon: 'success',
						  title: 'Successfully Added new expense'
						})

						this.$router.push({  name: 'allExpense'})

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