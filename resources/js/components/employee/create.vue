<template>
		
		<div>
			<div class="row">
				<router-link to="/allEmployee" class="btn btn-primary">All Employee</router-link>
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
			                  <h1 class="h4 text-gray-900 mb-4">Add Employee</h1>
			                </div>
			                <!-- Form start -->
			                <form class="user" enctype="multipart/form-data" @submit.prevent="addEmployee">

			                  <div class="form-group">
			                  	<div class="form-row">
			                  		<div class="col-md-6">
			                  			<label>Full Name</label>
			                  			<input type="text" class="form-control" id="exampleInputFirstName" v-model="form.name"  placeholder="Enter Full Name">
			                  			<small class="text-danger" v-if="errors.name"> {{ errors.name[0]}} </small>
			                  		</div>
			                  		<div class="col-md-6">
			                  			<label>Email</label>
			                  			<input type="email"  class="form-control" id="email" v-model="form.email"  placeholder="Enter Employee Email">
			                  			<small class="text-danger" v-if="errors.email"> {{ errors.email[0]}} </small>
			                  		</div>
			                  	</div>
			                    

			                  </div>

			                  <div class="form-group">
			                  	<div class="form-row">
			                  		<div class="col-md-6">
			                  			<label>Phone</label>
			                  			<input type="text" class="form-control" id="phone" v-model="form.phone"  placeholder="Enter Phone Number">
			                  			<small class="text-danger" v-if="errors.phone"> {{ errors.phone[0]}} </small>
			                  		</div>
			                  		<div class="col-md-6">
			                  			<label>NID</label>
			                  			<input type="text" class="form-control" id="nid" v-model="form.nid"  placeholder="Enter NID Number">
			                  			<small class="text-danger" v-if="errors.nid"> {{ errors.nid[0]}} </small>
			                  		</div>
			                  	</div>
			                    

			                  </div>
			              
			                <div class="form-group">
			                  	<div class="form-row">
			                  		<div class="col-md-6">
			                  				<label>Address</label>
			                  			<input type="text" class="form-control" id="address" v-model="form.address"  placeholder="Enter the address">
			                  			<small class="text-danger" v-if="errors.address"> {{ errors.address[0]}} </small>
			                  		</div>

			                  		<div class="col-md-6">
			                  			<label>Joining Date</label>
			                  			<input type="date" class="form-control" id="joining_date" v-model="form.joining_date"  placeholder="Enter Joining Date">
			                  			<small class="text-danger" v-if="errors.joining_date"> {{ errors.joining_date[0]}} </small>
			                  		</div>
			                  		
			                  	</div>
			                    

			                  </div>

			                  <div class="form-group">
			                  	<div class="form-row">
			                  		<div class="col-md-6">
			                  			<label>Salary</label>
			                  			<input type="text" class="form-control" id="salary" v-model="form.salary"  placeholder="Enter the Salary">
			                  			<small class="text-danger" v-if="errors.salary"> {{ errors.salary[0]}} </small>
			                  		</div>
			                  		
			                  		
			                  	</div>
			                    

			                  </div>

			                    <div class="form-group">
			                  	<div class="form-row">
			                  	
			                  		<div class="col-md-6">
			                  				<input type="file" class="custom-file-input" id="photo" placeholder="Upload photo" @change="onFileSelected">
			                  				<label class="custom-file-label" for="customFile">Choose file</label>
			                  				<small class="text-danger" v-if="errors.photo"> {{ errors.photo[0]}} </small>
			                  			
			                  		</div>

			                  		<div class="col-md-6">
			                  			<img :src="form.photo" style="height: 40px; width: 40px;">
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
						email : null,
						phone : null,
						salary: null,
						joining_date: null,
						photo: null,
						nid: null,
						address: null,
					},

					errors:{}
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
							this.form.photo = event.target.result
							console.log(event.target.result)
						};
						reader.readAsDataURL(file);
					}
					// console.log(file);
				},

				addEmployee(){
					axios.post('api/employee', this.form)
					.then(res => {
						// User.responseAfterLogin(res)
						
						Toast.fire({
						  icon: 'success',
						  title: 'Successfully Added new Employee'
						})

						this.$router.push({  name: 'allEmployee'})

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