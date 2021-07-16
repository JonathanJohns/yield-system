<template>
   <div class=" sidebar ">
       <div class="sidebar-content " style="background-color: #F1F1F1; padding: 0px 15px 15px 15px !important">
           <ul class="list-group list-group-flush text-center" style="background-color: transparent;
           ">
           <!-- <p class="text-center mt-2 text-white d-none d-sm-block">&nbsp;</p> -->
           <li class="list-group-item" style="margin-bottom: 2px !important"><i class="fa fa-tachometer"></i><a to="/"> <img src="/img/Logo.png" > <hr>
            <span class="text-secondary" style="font-size: 12px !important;">Yield System</span>
           </a></li>
            <li  class="list-group-item"><i class="fa fa-dashboard"></i><router-link to="/" style="color: #555555"> Organizations</router-link></li>
            <!-- <router-link to="/" class="list-group-item"><span style=""> Organizations</span></router-link> -->
            <li  class="list-group-item"><router-link to="/printers/all" style="color: #555555"> All Printers</router-link></li>
             <!-- <li class="list-group-item"><i class="fa fa-bar-chart"></i><router-link to="/feedback"> Responses</router-link></li>
             <li class="list-group-item"><i class="fa fa-puzzle-piece"></i><router-link to="/categories"> Categories</router-link></li>
            <li class="list-group-item"><i class="fa fa-tasks"></i><router-link to="/surveys"> Surveys</router-link></li>
            <li class="list-group-item"><i class="fa fa-question"></i><router-link to="/tutorial"> Tutorial</router-link></li> -->

            
           
            <!-- <li class="list-group-item"><i class="fa fa-plus"></i><router-link to="/survey/builder"> Create Survey</router-link></li> -->
            <!-- <li class="list-group-item" @click.prevent="logout"><i class="fa fa-sign-out"></i> Logout </li> -->
            </ul>
       </div>
   </div>




</template>




<script>

    export default {
        mounted() { 
            console.log('menu mounted');
        },
        data: function() {
          return {
            csrf: document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
            dashboard: false,
          }
        },  
        methods:{
            logout:function(){
               axios.post('/logout').then(response => {
                  if (response.status === 302 || 401) {
                    window.location.href = "/";
                  }
                  else {
                    // throw error and go to catch block
                  }
                }).catch(error => {

              });
            },
            checkRole() {
            axios.get('/api/role')
            .then(response=> {

                if (response.data == 'user') {
                    // this.$router.push('/surveys')
                    this.dashboard = false;
                } else {
                  this.dashboard = true;
                }
            }).catch(error=> {
                this.checkRole()
            })
    }
        },
        created() {
        //   this.checkRole();
        }

    }




</script>

<style  scoped>

 /* nav li:hover, */
 /* .router-link-active,
 .router-link-exact-active {
  
   color: #E87C1E !important; 
   background: #fff !important;
   border: 1px solid #E87C1E !important;

 } */

hr { 
  margin-bottom: 2px !important;
  margin-top: 6px !important;
}

  a:active {
    color:rgba(255, 255, 255, 1),
  }

  a {
    color: rgba(255, 255, 255, 1);
  }

  a:hover {
    color: rgba(255, 255, 255, 1);
    text-decoration: none;
  }

.list-group-item {
    background: rgba(23, 162, 184, 0);
    border-bottom: 1px solid rgba(255, 255, 255, 0.125);
    color: #555555;
}

.list-group-item:hover {
    cursor: pointer;
}
 

  .sidebar-content, .sidebar {
      height: 100%;
      /* background-color: rgba(23, 162, 184, 0.7); */
      background-color: rgba(70, 130, 180, 0.7 );
      
  }
  
  .sidebar {
      background-image: url('/img/bg.jpg');
      background-size: cover;
      background-repeat: no-repeat;
  }

  .list-group-item {
    border: 1px solid rgba(124, 124, 124,0.2) !important;
      color: #555555 !important;
      font-weight: 600 !important;
      margin-bottom: 2px !important;
}


</style>