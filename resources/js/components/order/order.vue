<template>
	<div class="container-fluid" id="container-wrapper">
	     
<!-- 
<input type="text" v-model="searchTerm" placeholder="Search Here.. " class="form-control" style="width: 300px;"><br> -->
	        <!-- Row -->
	        <div class="row">
	          <!-- Datatables -->
	          <div class="col-lg-12">
	            <div class="card mb-4">
	              <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
	                <h6 class="m-0 font-weight-bold text-primary">Today Order</h6>
	              </div>
	              <div class="table-responsive p-3">
	                <table class="table align-items-center table-flush" id="dataTable">
	                  <thead class="thead-light">
	                    <tr>
	                      <th>Customer Name</th>
	                      <th>Amount</th>
	                      <th>Expense Date</th>
	                     
	                      <th>Action</th>
	                    </tr>
	                  </thead>
	                
	                  <tbody>
	                    
	                    <tr v-for="customer in orders" :key="customer.id">
	                      <td>{{customer.name}}</td>
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
				orders:[],
				searchTerm:''

			}
		}, 

		computed:{
			filtersearch(){
			return	this.orders.filter(order => {
				return order.name.match(this.searchTerm)
			})
			}
		},
		methods:{
			getTodayOrders(){
				axios.get('/api/order/today')
				.then(({data}) => (this.orders = data))
				.catch() 
			},
		
		},
		created(){
			this.getTodayOrders();
		}  
	}
</script>



<style type="text/css">
	
</style>