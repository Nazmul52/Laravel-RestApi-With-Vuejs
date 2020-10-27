<template>
	
	<div class="container-fluid" id="container-wrapper">
		<div class="row">
			<router-link to="/given-salary" class="btn btn-primary">Pay salary</router-link>
		</div>
	        <div class="d-sm-flex align-items-center justify-content-between mb-4">
	          <h1 class="h3 mb-0 text-gray-800">All Salary</h1>
	          <ol class="breadcrumb">
	            <li class="breadcrumb-item"><a href="./">Home</a></li>
	            <li class="breadcrumb-item">Salary</li>
	            <li class="breadcrumb-item active" aria-current="page">All Salary</li>
	          </ol>
	        </div>

<input type="text" v-model="searchTerm" placeholder="Search Here.. " class="form-control" style="width: 300px;"><br>
	        <!-- Row -->
	        <div class="row">
	          <!-- Datatables -->
	          <div class="col-lg-12">
	            <div class="card mb-4">
	              <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
	                <h6 class="m-0 font-weight-bold text-primary">Salary List</h6>
	              </div>
	              <div class="table-responsive p-3">
	                <table class="table align-items-center table-flush" id="dataTable">
	                  <thead class="thead-light">
	                    <tr>
	                      <th>Month Name</th>
	                      <th>Details</th>
	                   
	                    </tr>
	                  </thead>
	                
	                  <tbody>
	                    
	                    <tr v-for="salary in filtersearch" :key="salary.id">
	                      <td>{{salary.salary_month}}</td>
	                     
	                  
	                      	<router-link :to="{name: 'view-salary', params: {id:salary.salary_month}}" class="btn btn-sm btn-primary"><font color="#fff">View salary</font></router-link>
	                      	
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
				salaries:[],
				searchTerm:''

			}
		}, 

		computed:{
			filtersearch(){
			return	this.salaries.filter(salary => {
				return salary.salary_month.match(this.searchTerm)
			})
			}
		},
		methods:{
			getSalary(){
				axios.get('/api/salary/')
				.then(({data}) => (this.salaries = data))
				.catch() 
			},
			
		},
		created(){
			this.getSalary();
		}  
	}
</script>



<style type="text/css">
	#emp_photo{
		width: 40px;
		height: 40px;
	}
</style>