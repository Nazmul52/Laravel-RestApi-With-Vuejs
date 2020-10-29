<template>
	<div class="container-fluid" id="container-wrapper">
	     

<input type="text" v-model="searchTerm" placeholder="Search Here.. " class="form-control" style="width: 300px;"><br>
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
	                      <th>Total Amount</th>
	                      <th>Pay</th>
	                      <th>Due</th>
	                      <th>PayBy</th>
	                     
	                      <th>Action</th>
	                    </tr>
	                  </thead>
	                
	                  <tbody>
	                    
	                    <tr v-for="order in filtersearch" :key="order.id">
	                      <td>{{order.name}}</td>
	                      <td>{{order.total}}</td>
	                      <td>{{order.pay}}</td>
	                      <td>{{order.due}}</td>
	                      <td>{{order.pay_by}}</td>
	                      <!-- <td>{{expense.amount}}</td>
	                      <td>{{expense.expense_date}}</td> -->
	                    
	                      <td>
	                      	<router-link :to="{name: 'order-view', params: {id:order.id}}" class="btn btn-sm btn-primary"><font color="#fff">View</font></router-link>
	                      	
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