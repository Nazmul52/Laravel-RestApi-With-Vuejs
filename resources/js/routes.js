let login = require('./components/auth/login.vue').default;
let register = require('./components/auth/register.vue').default;
let forget = require('./components/auth/forget.vue').default;
let logout = require('./components/auth/logout.vue').default;

// end authentication
let home = require('./components/home.vue').default;

/* employee component*/
let addEmployee = require('./components/employee/create.vue').default;
let allEmployee = require('./components/employee/index.vue').default;
let editEmployee = require('./components/employee/edit.vue').default;


/* suppliers component*/
let addSupplier = require('./components/suppliers/create.vue').default;
let allSupplier = require('./components/suppliers/index.vue').default;
let editSupplier = require('./components/suppliers/edit.vue').default;

/* category component*/
let addCategory = require('./components/category/create.vue').default;
let allCategory = require('./components/category/index.vue').default;
let editCategory = require('./components/category/edit.vue').default;


/* product component*/
let addProduct = require('./components/product/create.vue').default;
let allProduct = require('./components/product/index.vue').default;
let editProduct = require('./components/product/edit.vue').default;


/* expense component*/
let addExpense = require('./components/expense/create.vue').default;
let allExpense = require('./components/expense/index.vue').default;
let editExpense = require('./components/expense/edit.vue').default;

/* Salary*/

let salary = require('./components/salary/all_employee.vue').default;
let paySalary = require('./components/salary/create.vue').default;
let allSalary = require('./components/salary/index.vue').default;
let viewSalary = require('./components/salary/view.vue').default;
let editSalary = require('./components/salary/edit.vue').default;


let stock = require('./components/product/stock.vue').default;
let editStock = require('./components/product/editstock.vue').default;

/* customer component*/
let addCustomer = require('./components/customer/create.vue').default;
let allCustomer = require('./components/customer/index.vue').default;
let editCustomer = require('./components/customer/edit.vue').default;

/* Pos*/

let pos = require('./components/pos/pos.vue').default;
let order = require('./components/order/order.vue').default;


 export const routes = [
  { path: '/', component: login, name: '/' },
  { path: '/register', component: register, name: '/register' },
  { path: '/forget', component: forget, name: '/forget' },
  { path: '/logout', component: logout, name: '/logout' },
  { path: '/home', component: home, name: 'home' },

	/*All For employee*/
  { path: '/addEmployee', component: addEmployee, name: 'addEmployee' },
  { path: '/allEmployee', component: allEmployee, name: 'allEmployee' },
  { path: '/edit-employee/:id', component: editEmployee, name: 'edit-employee' },

  /*All for Supplier*/
  { path: '/addSupplier', component: addSupplier, name: 'addSupplier' },
  { path: '/allSupplier', component: allSupplier, name: 'allSupplier' },
  { path: '/edit-supplier/:id', component: editSupplier, name: 'edit-supplier' },

    /*All for Category*/
  { path: '/addCategory', component: addCategory, name: 'addCategory' },
  { path: '/allCategory', component: allCategory, name: 'allCategory' },
  { path: '/edit-category/:id', component: editCategory, name: 'edit-category' },

    /*All for Product*/
  { path: '/addProduct', component: addProduct, name: 'addProduct' },
  { path: '/allProduct', component: allProduct, name: 'allProduct' },
  { path: '/edit-product/:id', component: editProduct, name: 'edit-product' },

   /*All for Expense*/
  { path: '/addExpense', component: addExpense, name: 'addExpense' },
  { path: '/allExpense', component: allExpense, name: 'allExpense' },
  { path: '/edit-expense/:id', component: editExpense, name: 'edit-expense' },


   /*All for Salary*/
  { path: '/given-salary', component: salary, name: 'given-salary' },
  { path: '/pay-salary/:id', component: paySalary, name: 'pay-salary' },
  { path: '/salary/', component: allSalary, name: 'salary' },
  { path: '/view-salary/:id', component: viewSalary, name: 'view-salary' },
  { path: '/edit-salary/:id', component: editSalary, name: 'edit-salary' },

  /* Stock component*/

  { path: '/stock', component: stock, name: 'stock' },
  { path: '/edit-stock/:id', component: editStock, name: 'edit-stock' },

  /*All for Customer*/
  { path: '/addCustomer', component: addCustomer, name: 'addCustomer' },
  { path: '/allCustomer', component: allCustomer, name: 'allCustomer' },
  { path: '/edit-customer/:id', component: editCustomer, name: 'edit-customer' },

  /* Post component*/

    { path: '/pos', component: pos, name: 'pos' },
    { path: '/order', component: order, name: 'order' },


]