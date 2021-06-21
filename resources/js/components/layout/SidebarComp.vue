<template>
   <div class=" sidebar ">
       <div class="sidebar-content " style="">
           <ul class="list-group list-group-flush" style="background-color: transparent;
           padding-top: 0%">
           <!-- <p class="text-center mt-2 text-white d-none d-sm-block">&nbsp;</p> -->
           <!-- <li class="list-group-item"><i class="fa fa-tachometer"></i><router-link to="/"> Dashboard</router-link></li> -->
            <li  class="list-group-item"><i class="fa fa-dashboard"></i><router-link to="/"> Organizations</router-link></li>
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
    color: white;
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
    
}


</style>