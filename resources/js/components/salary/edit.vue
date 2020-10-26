<template>
		
		<div>
			<div class="row">
				<router-link to="/salary" class="btn btn-primary">All Salary</router-link>
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
			                  <h1 class="h4 text-gray-900 mb-4">Edit Salary</h1>
			                </div>
			                <!-- Form start -->
			                <form class="user" @submit.prevent="updateSalary">
			                		<div class="form-group">
			                			<div class="form-row">
			                				<div class="col-md-6">
			                					<label>Name</label>
			                					<input type="text" class="form-control" id="name" v-model="form.name"  placeholder="Enter Name">
			                					<small class="text-danger" v-if="errors.name"> {{ errors.name[0]}} </small>
			                				</div>
			                				<div class="col-md-6">
			                					<label>Email</label>
			                					
			                					<input type="text" class="form-control" id="email" v-model="form.email"  placeholder="Enter email">
			                					<small class="text-danger" v-if="errors.email"> {{ errors.email[0]}} </small>
			                				</div>
			                			</div>
			                		  

			                		</div>


			                	  <div class="form-group">
			                	  	<div class="form-row">
			                	  		<div class="col-md-6">
			                	  			<label>Salary</label>
			                	  			<input type="text" class="form-control" id="amount" v-model="form.amount"  placeholder="Enter Salary">
			                	  			<small class="text-danger" v-if="errors.amount"> {{ errors.amount[0]}} </small>
			                	  		</div>
			                	  		<div class="col-md-6">
			                	  			<label>Month</label>
			                	  			<select class="form-control" v-model="form.salary_month">
			                	  				<option value="January">January</option>
			                	  				<option value="February">February</option>
			                	  				<option value="March">March</option>
			                	  				<option value="April">April</option>
			                	  				<option value="May">May</option>
			                	  				<option value="June">June</option>
			                	  				<option value="July">July</option>
			                	  				<option value="August">August</option>
			                	  				<option value="September">September</option>
			                	  				<option value="October">October</option>
			                	  				<option value="November">November</option>
			                	  				<option value="December">December</option>
			                	  			</select>
			                	  			
			                	  		</div>
			                	  	</div>
			                	    

			                	  </div>

			                	
			               
			              

			                   
			                  <div class="form-group">
			                    <button type="submit" class="btn btn-primary btn-block">Update</button>
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
						name: '',
						email : '',
						salary_month : '',
						amount : '',
						
					},

					errors:{}
				}
			},

			created(){
				let id = this.$route.params.id
				axios.get('/api/edit/salary/'+id)
				.then(({data}) => (this.form = data))
				.catch()
			},
			methods:{

				
				updateSalary(){
					let id = this.$route.params.id

					axios.post('/api/update/salary/'+id, this.form)
					.then(res => {
						// User.responseAfterLogin(res)
						
						Toast.fire({
						  icon: 'success',
						  title: 'Successfully update employee salary'
						})

						this.$router.push({  name: 'salary'})

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