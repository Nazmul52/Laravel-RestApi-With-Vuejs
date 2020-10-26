<template>
	<div class="container-fluid" id="container-wrapper">
	        <div class="d-sm-flex align-items-center justify-content-between mb-4">
	          <h1 class="h3 mb-0 text-gray-800">All Expense</h1>
	          <ol class="breadcrumb">
	            <li class="breadcrumb-item"><a href="./">Home</a></li>
	            <li class="breadcrumb-item">Expense</li>
	            <li class="breadcrumb-item active" aria-current="page">All Expense</li>
	          </ol>
	        </div>

<input type="text" v-model="searchTerm" placeholder="Search Here.. " class="form-control" style="width: 300px;"><br>
	        <!-- Row -->
	        <div class="row">
	          <!-- Datatables -->
	          <div class="col-lg-12">
	            <div class="card mb-4">
	              <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
	                <h6 class="m-0 font-weight-bold text-primary">Expense List</h6>
	              </div>
	              <div class="table-responsive p-3">
	                <table class="table align-items-center table-flush" id="dataTable">
	                  <thead class="thead-light">
	                    <tr>
	                      <th>Details</th>
	                      <th>Amount</th>
	                      <th>Expense Date</th>
	                     
	                      <th>Action</th>
	                    </tr>
	                  </thead>
	                
	                  <tbody>
	                    
	                    <tr v-for="expense in filtersearch" :key="expense.id">
	                      <td>{{expense.details}}</td>
	                      <td>{{expense.amount}}</td>
	                      <td>{{expense.expense_date}}</td>
	                    
	                      <td>
	                      	<router-link :to="{name: 'edit-expense', params: {id:expense.id}}" class="btn btn-sm btn-primary"><font color="#fff">Edit</font></router-link>
	                      	<a @click="deleteExpense(expense.id)" class="btn btn-sm btn-danger"><font color="#fff">Delete</font></a>
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
				expenses:[],
				searchTerm:''

			}
		}, 

		computed:{
			filtersearch(){
			return	this.expenses.filter(expense => {
				return expense.details.match(this.searchTerm)
			})
			}
		},
		methods:{
			getAllExpense(){
				axios.get('/api/expense')
				.then(({data}) => (this.expenses = data))
				.catch() 
			},
			deleteExpense(exp_id){

				Swal.fire({
				  title: 'Are you sure?',
				  text: "You won't be able to revert this!",
				  icon: 'warning',
				  showCancelButton: true,
				  confirmButtonColor: '#3085d6',
				  cancelButtonColor: '#d33',
				  confirmButtonText: 'Yes, delete it!'
				}).then((result) => {
				  if (result.isConfirmed) {
				  	axios.delete('/api/expense/'+exp_id)
				  	.then(() => {
				  		this.expenses = this.expenses.filter(expense => {
				  			return expense.id != exp_id
				  		})
				  	})
				  	.catch(() => {
				  		this.$router.push({ name: 'allExpense'})
				  	})

				    Swal.fire(
				      'Deleted!',
				      'Your expense has been deleted.',
				      'success'
				    )
				  }
				})


			}
		},
		created(){
			this.getAllExpense();
		}  
	}
</script>



<style type="text/css">
	
</style>