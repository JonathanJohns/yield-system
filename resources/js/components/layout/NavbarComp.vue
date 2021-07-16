<template>
    <div  class="">
  <!-- <b-navbar toggleable="lg" type="dark" style="background-color: rgb(70, 130, 180)"> -->
  <b-navbar toggleable="lg" type="dark" style="background-color: #F1F1F1">
    <b-navbar-brand href="#" class="text-center">
      <!-- <img src='/img/eslogo.png' style="width: 40px"> -->
    <!-- Yield-sytem -->
    &nbsp;
    </b-navbar-brand>

    <b-navbar-toggle target="nav-collapse"></b-navbar-toggle>

    <b-collapse id="nav-collapse" is-nav >
      <b-navbar-nav class="ml-4 pl-4 float-right" >
        <!-- <b-nav-item href="#"><router-link to="/"><i class="fa fa-pie"></i> Dashboard</router-link></b-nav-item> -->
        <!-- <b-nav-item href="#"><router-link to="/surveys"><i class="fa fa-tasks"></i> Surveys</router-link></b-nav-item> -->
        <!-- <b-nav-item href=""><router-link to="/survey/builder"><i class="fa fa-wrentch"></i> Survey Builder</router-link></b-nav-item> -->
        <!-- <b-nav-item href="#">Interested Parties</b-nav-item> -->
 
        
      </b-navbar-nav>

      <!-- Right aligned nav items -->
      <b-navbar-nav class="ml-auto">
        <!-- <b-nav-form>
          <b-form-input size="sm" class="mr-sm-2" placeholder="Search"></b-form-input>
          <b-button size="sm" class="my-2 my-sm-0" type="submit">Search</b-button>
        </b-nav-form> -->


        <b-nav-item-dropdown right>
          <!-- Using 'button-content' slot -->
          <template #button-content>
            <em style="color: #6c757d !important" >Settings</em>
          </template>
          <!-- <b-dropdown-item href="#">Profile</b-dropdown-item> -->
          <b-dropdown-item @click.prevent="logout" >Sign Out</b-dropdown-item>
        </b-nav-item-dropdown>
      </b-navbar-nav>
    </b-collapse>
  </b-navbar>
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
        },
    }




</script>

<style  scoped>

  a:active {
    color:rgba(255, 255, 255, 0.75),
  }

  a {
    color: rgba(255, 255, 255, 0.5);
  }

  a:hover {
    color: rgba(255, 255, 255, 0.75);
    text-decoration: none;
  }

</style>