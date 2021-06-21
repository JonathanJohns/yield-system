<template>
    <div class="container">
        <!-- <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Example Component</div>

                    <div class="card-body">
                        I'm an example component.
                    </div>
                </div>
            </div>
        </div> -->
        <div class="row " >
        <div class="col-8">

            <h2 class="text-secondary"> Organizations


                <!-- <router-link class="btn btn-default btn-sm " to="/surveys">
            <i class="fa fa-refresh"></i> 
        </router-link> -->
            </h2>
            
            
            

        </div>
        <!-- <div class="col-4">

        <router-link style="margin-top: 5px; " class="btn btn-info btn-sm float-right d-none d-sm-block" to="/tutorial">
            <i class="fa fa-question"></i> Tutorial
        </router-link> -->

        <!-- MOBILE ONLY -->
        <!-- <router-link style="margin-top: 5px; " class="btn btn-info btn-sm float-right d-block d-sm-none" to="/tutorial">
            <i class="fa fa-question"></i>
        </router-link>
        </div> -->
        
        
    </div>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
            this.getOrganizations()
        },
        methods: {
            getOrganizations() {

                let config = {
                    headers: {
                        // crossDomain: 'true',
                        // dataType: 'jsonp',
                        // 'Access-Control-Allow-Origin': 'http://yield.co',
                        'Content-Type': 'application/json',
                        'Connection': 'Keep-Alive',
                        'Access-Control-Allow-Origin': '*',
                        'Access-Control-Allow-Headers': 'Origin, Content-Type, Authorization'
                        
                        // 'Access-Control-Allow-Origin': 'yield.co',
                        // 'Access-Control-Allow-Methods': 'GET, POST, PATCH, PUT, DELETE, OPTIONS',
                        // 'Access-Control-Allow-Headers': 'Origin, Content-Type, X-Auth-Token'


                    }
                    }


                $.ajaxSetup({
                            headers: {
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                            }
                    });

                let url = 'https://livi.enablingsolutions.co.za/webservices/rest.php?version=1.4';
                // let url = 'http://localhost/enabling/external/itop-2.6.1/web/webservices/rest.php?version=1.3';
                let json_data = {operation:"core/get",class:"Organization",key:"SELECT Organization AS o JOIN Printer AS p ON p.org_id = o.id WHERE p.id != \'\' ",output_fields:"name, status, parent_name, parent_id"};


                // axios.post(url,{
                //     // auth_user: 'admin',
                //     // auth_pwd: 'Solutions2',
                //     // json_data: json_data,
                //     }, config)

                $.ajax({
        type: "POST",
        url: url,
        dataType: 'json',
		data: { auth_user: 'admin', auth_pwd: 'Solutions2', json_data: JSON.stringify(json_data) },
		crossDomain: 'true',
        success: function (data) {
			console.log('reutrrrrn', data);
        }
    });
                
                axios.post(
                    url,
                  {
                        auth_user: 'admin',
                        'crossDomain': 'true',
                        auth_pwd: 'Solutions2',
                        json_data: "{'operation':'core/get','class':'Organization','key':'SELECT Organization AS o JOIN Printer AS p ON p.org_id = o.id WHERE p.id != \'\' ','output_fields':'name, status, parent_name, parent_id'}"
                    },
                    {
                    headers: {
                        // crossDomain: 'true',
                        // dataType: 'jsonp',
                        // 'Access-Control-Allow-Origin': 'http://yield.co',
                        // 'Content-Type': 'application/json',
                        // 'Connection': 'Keep-Alive',
                        // 'Access-Control-Allow-Origin': '*',
                        // 'Access-Control-Allow-Headers': 'Origin, Content-Type, Authorization',
                        // 'Content-Disposition': 'inline; filename=""'
                        'crossDomain': 'true'

                        
                        // 'Access-Control-Allow-Origin': 'yield.co',
                        // 'Access-Control-Allow-Methods': 'GET, POST, PATCH, PUT, DELETE, OPTIONS',
                        // 'Access-Control-Allow-Headers': 'Origin, Content-Type, X-Auth-Token'


                    }
                    }
                    // headers: {
                    //      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                    //      'Content-Type': 'application/json'
                    // }
                    ).then(response => {
                        console.log(response.data)
                    }).catch(error => {
                        console.log(error.response)
                    })
            }
        }
    }
</script>
