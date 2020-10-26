<template>
	<div class="container-fluid" id="container-wrapper">
	        <div class="d-sm-flex align-items-center justify-content-between mb-4">
	          <h1 class="h3 mb-0 text-gray-800">All Category</h1>
	          <ol class="breadcrumb">
	            <li class="breadcrumb-item"><a href="./">Home</a></li>
	            <li class="breadcrumb-item">Category</li>
	            <li class="breadcrumb-item active" aria-current="page">All Category</li>
	          </ol>
	        </div>

<input type="text" v-model="searchTerm" placeholder="Search Here.. " class="form-control" style="width: 300px;"><br>
	        <!-- Row -->
	        <div class="row">
	          <!-- Datatables -->
	          <div class="col-lg-12">
	            <div class="card mb-4">
	              <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
	                <h6 class="m-0 font-weight-bold text-primary">Category List</h6>
	              </div>
	              <div class="table-responsive p-3">
	                <table class="table align-items-center table-flush" id="dataTable">
	                  <thead class="thead-light">
	                    <tr>
	                      <th>Name</th>
	                     
	                      <th>Action</th>
	                    </tr>
	                  </thead>
	                
	                  <tbody>
	                    
	                    <tr v-for="category in filtersearch" :key="category.id">
	                      <td>{{category.name}}</td>
	                    
	                      <td>
	                      	<router-link :to="{name: 'edit-category', params: {id:category.id}}" class="btn btn-sm btn-primary"><font color="#fff">Edit</font></router-link>
	                      	<a @click="deleteCategory(category.id)" class="btn btn-sm btn-danger"><font color="#fff">Delete</font></a>
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
				categories:[],
				searchTerm:''

			}
		}, 

		computed:{
			filtersearch(){
			return	this.categories.filter(category => {
				return category.name.match(this.searchTerm)
			})
			}
		},
		methods:{
			getAllCategory(){
				axios.get('/api/category')
				.then(({data}) => (this.categories = data))
				.catch() 
			},
			deleteCategory(cat_id){

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
				  	axios.delete('/api/category/'+cat_id)
				  	.then(() => {
				  		this.categories = this.categories.filter(category => {
				  			return category.id != cat_id
				  		})
				  	})
				  	.catch(() => {
				  		this.$router.push({ name: 'allCategory'})
				  	})

				    Swal.fire(
				      'Deleted!',
				      'Your category has been deleted.',
				      'success'
				    )
				  }
				})


			}
		},
		created(){
			this.getAllCategory();
		}  
	}
</script>



<style type="text/css">
	
</style>