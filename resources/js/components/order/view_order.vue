<template>
		
		<div>
			<div class="row">
				<router-link to="/order" class="btn btn-primary">Go Back</router-link>
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
			                  <h1 class="h4 text-gray-900 mb-4">Order Details</h1>
			                </div>
			                <!-- Form start -->
			            <!-- Row -->
			            <div class="row">
			              <!-- Datatables -->
			              <div class="col-lg-6">
			                <div class="card mb-4">
			                  <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
			                    <h6 class="m-0 font-weight-bold text-primary"> Order Details</h6>
			                  </div>
			                  <div class="table-responsive p-3">
			                    <table class="table align-items-center table-flush" id="dataTable">
			                      <thead class="thead-light">
			                        <tr>
			                          <th>Product Name</th>
			                          <th>Image</th>
			                          <th>Code</th>
			                          <th>Qty</th>
			                          <th>Price</th>
			                          <th>Total</th>
			                         
			                        </tr>
			                      </thead>
			                    
			                      <tbody>
			                        
			                        <tr v-for="order_detail in order_details" :key="order_detail.id">
			                          <td>{{order_detail.product_name}}</td>
			                          <td>{{order_detail.product_code}}</td>
			                          <td><img  :src="'/'+order_details.image" :alt="order_details.product_name"></td>
			                          <td>{{order_detail.product_qty}}</td>
			                          <td>{{order_detail.product_price}}</td>
			                          <td>{{order_detail.sub_total}}</td>
			                          
			                       
			                        
			                         
			                        </tr>
			                      

			                      </tbody>
			                    </table>
			                  </div>
			                </div>
			              </div>
			              

			              <!-- Datatables -->
			              <div class="col-lg-6">
			                <div class="card mb-4">
			                  <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
			                    <h6 class="m-0 font-weight-bold text-primary">Customer details</h6>
			                  </div>
			                  <div class="table-responsive p-3">
			                    <table class="table align-items-center table-flush" id="dataTable">
			                      <thead class="thead-light">
			                        <tr>
			                          <th>Customer Name</th>
			                          <th>Phone</th>
			                          <th>Address</th>
			                          <th>Total Amount</th>
			                          <th>Pay</th>
			                          <th>Due</th>
			                         
			                        </tr>
			                      </thead>
			                    
			                      <tbody>
			                        
			                        <tr v-for="order in orders" :key="order.id">
			                          <td>{{order.name}}</td>
			                          <td>{{order.phone}}</td>
			                          <td>{{order.address}}</td>
			                          <td>{{order.total}}</td>
			                          <td>{{order.pay}}</td>
			                          <td>{{order.due}}</td>
			                        
			                        
			                      
			                        </tr>
			                      

			                      </tbody>
			                    </table>
			                  </div>
			                </div>
			              </div>
			            </div>
			            <!--Row-->
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
					order_details: [],
					orders: [],
				}
			},

			created(){
				

				this.getOrder();
				this.getOrderDetails();
			},
			methods:{

				getOrder(){
					let id = this.$route.params.id
					axios.get('/api/order/view/'+id)
					.then(
						({data}) => (this.orders = data.order),
						
						)
					.catch() 
				},

				getOrderDetails(){
					let id = this.$route.params.id
					axios.get('/api/order/view/'+id)
					.then(
						({data}) => (this.order_details = data.order_details),
						
						)
					.catch() 
				},

				
			}  
		

	}
</script>



<style type="text/css" scoped="">
	img {
		width: 40px;
		height: 40px;
	}
</style>