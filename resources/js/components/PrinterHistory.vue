<template>

<div>
    <!-- <div class="row " v-if="!loaded">
          <div class="col-12 my-5 py-5 text-center">
            <i class="fa fa-spin fa-circle-notch fa-3x text-muted"></i>
          </div>
    </div> -->

     <div class="container-fluid" >
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

            <h2 class="text-secondary text-capitalize">Printer - Name


                <!-- <router-link class="btn btn-default btn-sm " to="/surveys">
            <i class="fa fa-refresh"></i> 
        </router-link> -->
            </h2>
            
            
            

        </div>
        <div class="col-4 text-right">

            <!-- <h2 class="text-secondary text-capitalize">Printer - Name


                
            </h2> -->
            <!-- <router-link class="btn btn-default btn-sm " to="/surveys">
            <i class="fa fa-refresh"></i> 
        </router-link> -->
        <span class="btn btn-primary mt-1 ">
            <i class="fa fa-plus"></i> Capture Yield
        </span>
            
            

        </div>
        <!-- <div class="col-12">
            <div class="body">
    <p><b>iTop REST/JSON API Test</b></p>
    <fieldset><legend>Server Parameters</legend>
<p>iTop Server URL: <input type="text" id="server_url" name="server_url" value="http://localhost/itop"/> (iTop server's URL, no trailing slash)<br/>
iTop Login: <input type="text" id="auth_user" name="auth_user" value="admin"/> Password: <input type="password" id="auth_pwd" name="auth_pwd" value=""/>
</p>
<p>API Version: <input type="text" id="version" name="version" value="1.0"/> <button type="button" :click="ListOperations">List Operations</button></p>
<p>Use: <input type="radio" id="json" value="json" name="json"/><label for="json"> JSON</label>&nbsp;&nbsp;<input type="radio" id="jsonp" value="jsonp"  name="json" checked/><label for="jsonp"> JSON-P</label></p>
    </fieldset>
<fieldset><legend>Get Object</legend>
Class: <input type="text" id="get_class" value="Contact"/> Key: <input type="text" id="get_key" value="1"/> <button type="button" :click=" GetObject">Get Object</button>
</fieldset>
<p>
Result:<br/>
<pre>
<span id="result">
</span>
</pre>
</p>
    </div>
        </div> -->
        
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
    <div class="row">
        <div class="col-12 mt-3">
            <h5 class="text-secondary text-capitalize">Serial No : </h5>
        </div>
        
    </div>
    <div class="row">
        <div class="col-12 mt-4" >
            <vue-good-table
                :columns="columns"
                :rows="rows"
                :search-options="{
                    enabled: true,
                    trigger: 'enter'
                }"
                :pagination-options="{
                    enabled: true,
                   
                }"
              styleClass="vgt-table striped bordered condensed text-center"
                >
                
                >
                <template slot="table-row" slot-scope="props">


                    
                    
                    <span class="pl-2 text-center">

                    <span v-if="props.column.field == 'name'">
                    <!-- <span class="text-dark c-font-500"  v-if="props.row.is_exclusive == 1" style="">Yes</span> 
                    <span class="text-dark c-font-500"  v-if="props.row.is_exclusive == 0" style="">No</span>  -->
                   
                    <!-- <span class="text-dark c-font-500"   style="">{{props.row.org_id}}</span>  -->
                    <router-link class="text-dark font-weight-normal" :to="'/printer/' + props.row.org_id">{{props.row.name}}</router-link>
                    </span>
                    <!-- <span v-else-if="props.column.field == 'id'">
                    <span  class="text-dark" style="font-weight: bold; ">#{{props.row.id}}</span> 
                    </span>
                    <span class="text-center" v-else-if="props.column.field == 'license_terms'">
                    <span  class=" btn-primary btn btn-sm btn-secondary" role="button" @click="license(props.row.id)" style=" ">View </span> 
                    </span>
                    <span v-else-if="props.column.field == 'price'">
                    <span  class="text-dark c-font-500" style=" ">R{{props.row.price}}</span> 
                    </span> -->
                    <span v-else>
                    <span class="text-dark c-font-500">
{{props.formattedRow[props.column.field]}}
                    </span>
                        
                    </span>

                    </span>
                    
                </template>
                
            </vue-good-table>
        </div>
    </div>
   
    
    </div>


</div>

   
</template>

<script>

import 'vue-good-table/dist/vue-good-table.css';
import { VueGoodTable } from 'vue-good-table';



    export default {
        mounted() {
            console.log('Component mounted.')
            this.getPrinters()
        },
        components: { VueGoodTable},
        data: function() {
            return {
                loaded:false,
                org_name: '',
                columns: [
        
        {
          label: 'Date',
          field: 'name',
        },
      
        {
          label: 'Reading',
          field: 'organization_name',
        },
        {
          label: 'Yield',
          field: 'brand_name',
        },
        
        {
          label: 'S/N Toner',
          field: 'model_name',
        },

        {
          label: 'Toner Changed',
          field: 'serialnumber',
        },
        {
          label: 'Ticket',
          field: 'location_name',
        },

        // {
        //   label: 'Status',
        //   field: 'status',
        // },
        // {
        //   label: 'Business Criticality',
        //   field: 'business_criticity',
        // },
        
        
        
        // {
        //   label: 'Action',
        //   field: 'org_id',
        // },
        //     {
        //   label: 'Beat Name',
        //   field: 'beat_name',
        // },
        
        // {
        //   label: 'Exclusive',
        //   field: 'is_exclusive',
        //   filterOptions: {
        //     // styleClass: 'class1', // class to be added to the parent th element
        //     enabled: true, // enable filter for this column
        //     // placeholder: 'Filter This Thing', // placeholder for filter input
        //     // filterValue: 'Jane', // initial populated value for this filter
        //     // filterDropdownItems: [], // dropdown (with selected values) instead of text input
        //     filterFn: function(data, filterString) {
        //     if (filterString == 1) {
        //         return 'Yes';
        //     }

        //     if (filterString == 0) {
        //         return 'No'
        //     }

        //     }, //custom filter function that
        //     // trigger: 'enter', //only trigger on enter not on keyup 
        //    },
        // },
        
        // {
        //   label: 'Purchase Price',
        //   field: 'price',
        // },
        // {
        //   label: 'Purchased on',
        //   field: 'purchased_at',
        //   type: 'date',
        //   dateInputFormat: 'yyyy-MM-dd HH:mm:ss',
        //   dateOutputFormat: 'd MMM yyyy HH:mm',
        // },
        // {
        //   label: 'License Terms',
        //   field: 'license_terms',
        // },
        // {
        //   label: 'Purchased At',
        //   field: 'age',
        //   type: 'number',
        // },
        // {
        //   label: 'Created On',
        //   field: 'createdAt',
          
        // },
        // {
        //   label: 'Percent',
        //   field: 'score',
        //   type: 'percentage',
        // },
      ],
    //   rows: [
    //     { id:1, name:"John", age: 20, createdAt: '',score: 0.03343 },
    //     { id:2, name:"Jane", age: 24, createdAt: '2011-10-31', score: 0.03343 },
    //     { id:3, name:"Susan", age: 16, createdAt: '2011-10-30', score: 0.03343 },
    //     { id:4, name:"Chris", age: 55, createdAt: '2011-10-11', score: 0.03343 },
    //     { id:5, name:"Dan", age: 40, createdAt: '2011-10-21', score: 0.03343 },
    //     { id:6, name:"John", age: 20, createdAt: '2011-10-31', score: 0.03343 },
    //   ],
            }
        },
        methods: {
             DoXSS(oJSON)
{
	var sVersion = $('#version').val();
	var sURL = $('#server_url').val()+"/webservices/rest.php?version="+sVersion;
	$('#result').html('');
	var sDataType = 'json';
	if ($(':input[name=json]:checked').val() == 'jsonp')
	{
		sDataType = 'jsonp';
	}

    $.ajax({
        type: "POST",
        url: sURL,
        dataType: sDataType,
		data: { auth_user: $('#auth_user').val(), auth_pwd: $('#auth_pwd').val(), json_data: JSON.stringify(oJSON) },
		crossDomain: 'true',
        success: function (data) {
			$('#result').html(syntaxHighlight(data));
        }
    });
	return false;
},

ListOperations()
{
	$('#result').val('');
	var oJSON = {
		operation: 'list_operations'
	};

    console.log('i am here')

	this.DoXSS(oJSON);
},

 GetObject()
{
	$('#result').val('');
	var oJSON = {
		operation: 'core/get',
		'class': $('#get_class').val(),
		key: $('#get_key').val()
	};

	this.DoXSS(oJSON);
},
syntaxHighlight(json) {
    if (typeof json != 'string') {
         json = JSON.stringify(json, undefined, 2);
    }
    json = json.replace(/&/g, '&amp;').replace(/</g, '&lt;').replace(/>/g, '&gt;');
    return json.replace(/("(\\u[a-zA-Z0-9]{4}|\\[^u]|[^\\"])*"(\s*:)?|\b(true|false|null)\b|-?\d+(?:\.\d*)?(?:[eE][+\-]?\d+)?)/g, function (match) {
        var cls = 'number';
        if (/^"/.test(match)) {
            if (/:$/.test(match)) {
                cls = 'key';
            } else {
                cls = 'string';
            }
        } else if (/true|false/.test(match)) {
            cls = 'boolean';
        } else if (/null/.test(match)) {
            cls = 'null';
        }
        return '<span class="' + cls + '">' + match + '</span>';
    });
},
            getPrinters() {
               var org_id =  this.$route.params.id ;
// return false;
                // let json_data = {operation:"core/get",class:"Organization",key:"SELECT Organization AS o JOIN Printer AS p ON p.org_id = o.id WHERE p.id != \'\' ",output_fields:"name, status, parent_name, parent_id"};

                if (org_id == 'all') {
                    var json_data = {operation:"core/get",class:"Printer",key:"SELECT Printer ",output_fields:"*"}
                } else {
                    var json_data = {operation:"core/get",class:"Printer",key:"SELECT Printer AS p JOIN Organization AS o ON p.org_id = o.id WHERE p.org_id = "+org_id ,output_fields:"*"}
                }

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

                let url = 'https://livi.enablingsolutions.co.za/webservices/rest.php?version=1.3';
                // let url = 'http://localhost/enabling/external/itop-2.6.1/web/webservices/rest.php?version=1.3';
                


                // axios.post(url,{
                //     // auth_user: 'admin',
                //     // auth_pwd: 'Solutions2',
                //     // json_data: json_data,
                //     }, config)

                $.ajax({
                        type: "POST",
                        url: url,
                        dataType: 'jsonp',
                        data: { auth_user: 'admin', auth_pwd: 'Solutions2', json_data: JSON.stringify(json_data) },
                        crossDomain: 'true',
                        success: (data) => {

                            var size = Object.keys(data.objects);
                            var result = Object.keys(data.objects).map(function(key) {
                return [key, data.objects[key]];
                });
           
			console.log('reutrrrrn', data );
			console.log('reutrrrrn', size );
			// console.log('reutrrrrn', result.length);

            this.org_name = result[0][1].fields.org_id_friendlyname
			console.log('reutrrrrn', result[0][1].fields.name);
            var final = []
             
            for (var i = 0; i < result.length; i++){
               console.log('herere')
                let object_final =  {
                    name: result[i][1].fields.name,
                    status: result[i][1].fields.status,
                    parent_name: result[i][1].fields.parent_name,
                    parent_id: result[i][1].fields.parent_id,
                    org_id: result[i][1].key,
                    organization_name: result[i][1].fields.organization_name,
                    business_criticity: result[i][1].fields.business_criticity,
                    location_name: result[i][1].fields.location_name,
                    brand_name: result[i][1].fields.brand_name,
                    model_name: result[i][1].fields.model_name,
                    serialnumber: result[i][1].fields.serialnumber,
                }
                final.push(object_final);
            }

            console.log('finallll', final)
            this.rows = final

            this.loaded = true;

        }
    });
                
                
            }
        }
    }
</script>

<style scoped>
    pre {outline: 1px solid #ccc; padding: 5px; margin: 5px; }
.string { color: green; }
.number { color: darkorange; }
.boolean { color: blue; }
.null { color: magenta; }
.key { color: red; }
.body { padding: 10px; font-size:10pt; font-family:Verdana, Arial, Helvetica; }
fieldset { padding: 10px; border: 1px #ccc solid; }
legend { padding: 10px; background-color: #fff; }

</style>