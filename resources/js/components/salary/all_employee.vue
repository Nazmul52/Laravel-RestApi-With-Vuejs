<template>
	<div class="container-fluid" id="container-wrapper">
	        <div class="d-sm-flex align-items-center justify-content-between mb-4">
	          <h1 class="h3 mb-0 text-gray-800">All Employee</h1>
	          <ol class="breadcrumb">
	            <li class="breadcrumb-item"><a href="./">Home</a></li>
	            <li class="breadcrumb-item">Employee</li>
	            <li class="breadcrumb-item active" aria-current="page">All Employee</li>
	          </ol>
	        </div>

<input type="text" v-model="searchTerm" placeholder="Search Here.. " class="form-control" style="width: 300px;"><br>
	        <!-- Row -->
	        <div class="row">
	          <!-- Datatables -->
	          <div class="col-lg-12">
	            <div class="card mb-4">
	              <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
	                <h6 class="m-0 font-weight-bold text-primary">Employee List</h6>
	              </div>
	              <div class="table-responsive p-3">
	                <table class="table align-items-center table-flush" id="dataTable">
	                  <thead class="thead-light">
	                    <tr>
	                      <th>Name</th>
	                      <th>Email</th>
	                      <th>Phone</th>
	                      <th>salary</th>
	                      <th>Photo</th>
	                      <th>Action</th>
	                    </tr>
	                  </thead>
	                
	                  <tbody>
	                    
	                    <tr v-for="employee in filtersearch" :key="employee.id">
	                      <td>{{employee.name}}</td>
	                      <td>{{employee.email}}</td>
	                      <td>{{employee.phone}}</td>
	                      <td>{{employee.salary}}</td>
	                      <td><img :src="employee.photo" id="emp_photo" :alt="employee.name"/></td>
	                      <td>
	                      	<router-link :to="{name: 'pay-salary', params: {id:employee.id}}" class="btn btn-sm btn-primary"><font color="#fff">Pay Salary</font></router-link>
	                     
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
				employees:[],
				searchTerm:''

			}
		}, 

		computed:{
			filtersearch(){
			return	this.employees.filter(employee => {
				return employee.name.match(this.searchTerm)
			})
			}
		},
		methods:{
			getAllEmployee(){
				axios.get('/api/employee')
				.then(({data}) => (this.employees = data))
				.catch() 
			},
		
		},
		created(){
			this.getAllEmployee();
		}  
	}
</script>



<style type="text/css">
	#emp_photo{
		width: 40px;
		height: 40px;
	}
</style>