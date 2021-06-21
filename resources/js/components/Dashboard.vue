<template>

<div class="" >

    
    <div class="row " >
        <div class="col-8">

            <h2 class="text-secondary"> Dashboard


                <!-- <router-link class="btn btn-default btn-sm " to="/surveys">
            <i class="fa fa-refresh"></i> 
        </router-link> -->
            </h2>
            
            
            

        </div>
        <div class="col-4">

        <router-link style="margin-top: 5px; " class="btn btn-info btn-sm float-right d-none d-sm-block" to="/tutorial">
            <i class="fa fa-question"></i> Tutorial
        </router-link>

        <!-- MOBILE ONLY -->
        <router-link style="margin-top: 5px; " class="btn btn-info btn-sm float-right d-block d-sm-none" to="/tutorial">
            <i class="fa fa-question"></i>
        </router-link>
        </div>
        
        
    </div>

<div v-if="loaded">

<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css" integrity="sha256-mmgLkCYLUQbXn0B1SRqzHar6dCnv9oZFPEC1g1cwlkk=" crossorigin="anonymous" /> -->


        <div class="row p-3">
            <div class="col-md-4  p-3">
                <div class="row c-card p-3 align-items-center" >
                    <div class="col-3">
                        <i class="fa fa-bar-chart fa-2x text-info"></i>
                    </div>
                    <div class="col-9  ">
                        
                        <div class="col-4 px-1 h3 text-info">20</div>
                        <div class="col-8 px-1 text-secondary ">
                            Total Responses
                        </div>
                    </div>  
                </div>
            
            </div>
        
    </div>
    
    


</div>


    

    
</div>


</template>

<script>



export default {
    
}


</script>

<style>

.c-card {
    background-color: white;
    
}
   
</style>