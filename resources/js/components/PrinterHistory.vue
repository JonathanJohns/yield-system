<template>

<div v-if="loaded">
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
        <div class="col-lg-8 col-12">

            <h2 class="text-secondary text-capitalize">{{info.name}}<span style="font-size: 20px !important; padding-bottom: 10px" ><small>({{info.org_id_friendlyname}})</small></span>


                <!-- <router-link class="btn btn-default btn-sm " to="/surveys">
            <i class="fa fa-refresh"></i> 
        </router-link> -->
            </h2>
            
            
            

        </div>
        <div class="col-lg-4 text-right">

            <!-- <h2 class="text-secondary text-capitalize">Printer - Name


                
            </h2> -->
            <!-- <router-link class="btn btn-default btn-sm " to="/surveys">
            <i class="fa fa-refresh"></i> 
        </router-link> -->
        <!-- <span class="btn btn-primary mt-1 ">
            <i class="fa fa-plus"></i> Capture Yield
        </span> -->
            
            

        </div>
        <!-- <div class="col-12">
            <div class="body">
    <p><b>iTop REST/JSON API Test</b></p>
    <fieldset><legend>Server Parameters</legend>
<p>iTop Server URL: <input type="text" id="server_url" name="server_url" value="http://localhost/itop"/> (iTop server's URL, no trailing slash)<br/>
iTop Login: <input type="text" id="auth_user" name="auth_user" value="admin"/> Password: <input type="password" id="auth_pwd" name="auth_pwd" value=""/>
</p>
<p>API Version: <input type="text" id="version" name="version" value="1.0"/> <button type="button" :click="ListOperations">List Operations</button></p>
<p>Use: <input type="radio" id="json" value="json" name="json"/><label class="text-secondary" for="json"> JSON</label>&nbsp;&nbsp;<input type="radio" id="jsonp" value="jsonp"  name="json" checked/><label class="text-secondary" for="jsonp"> JSON-P</label></p>
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
        <div class="col-12 mt-3 px-3">
            <h5 class="text-secondary text-capitalize"><small>Serial No : {{info.serialnumber}} </small></h5>
        </div>
        
        
    </div>
    
    <div class="row">
        <div class="col-12 mt-3">
            <b-card no-body>
    <b-tabs v-model="tabIndex" card>
      <b-tab title="Yield History" active>
        <b-card-text>
            <div class="row">
          <div class="col-12">
              <div class="col-12 mt-4 px-0" >
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


                    
                    
                    <span class=" text-center">

                    <span v-if="props.column.field == 'id'">
                    <!-- <span class="text-dark c-font-500"  v-if="props.row.is_exclusive == 1" style="">Yes</span> 
                    <span class="text-dark c-font-500"  v-if="props.row.is_exclusive == 0" style="">No</span>  -->
                   
                    <span class="text-dark font-weight-bold"   style="">#{{props.row.id}}</span> 
                    <!-- <router-link class="text-dark font-weight-normal" :to="'/printer/' + props.row.org_id">{{props.row.name}}</router-link> -->
                    </span>
                    <span v-else-if="props.column.field == 'new_reading'">
                    
                   
                    <span class="text-dark font-weight-bold"   style="">{{props.row.new_reading}}</span> 
                    
                    </span>
                    <span v-else-if="props.column.field == 'comments'">
                    
                   
                    <span class="text-dark "   style="font-size: 14px !important">{{props.row.comments}}</span> 
                    
                    </span>
                    <!-- <span v-else-if="props.column.field == 'created_at'">
                    
                   
                    <span class="text-dark "   style="font-size: 14px !important">{{props.row.created_at}}</span> 
                    
                    </span> -->
                    <!-- <span v-else-if="props.column.field == 'initial_reading'">
                    
                   
                    <span class="text-dark font-weight-bold"   style="">{{props.row.initial_reading}}</span> 
                    
                    </span>
                    <span v-else-if="props.column.field == 'yield'">
                    
                   
                    <span class="text-dark font-weight-bold"   style="">{{props.row.yield}}</span> 
                   
                    </span> -->
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


        </b-card-text>
      </b-tab>
      <b-tab title="Capture Yield">
        <b-card-text>
            <!-- <div class="row mb-2">
                <div class="col-12 h3">
                    Printer Details
                </div>
            </div>
            <div class="row mb-5">
                <div class="col-4">
                    Serial:
                </div>
                <div class="col-4">
                    Location:
                </div>
                <div class="col-4">
                    Contact:
                </div>
            </div>
            <div class="row mb-2">
                <div class="col-12 h6">
                    Capture
                </div>
            </div> -->
                <div class="row">
                    <!-- <div class="col-12">

                    </div> -->
                    <div class="col-12 col-lg-6  ">
                        <b-container fluid>
                            <b-row class="my-3">
                            <b-col sm="4">
                                <label class="text-secondary" :for="``">Ticket No:</label>
                            </b-col>
                            <b-col sm="8">
                                <b-form-input :id="``" v-model="ticket_number" :type="type"></b-form-input>
                            </b-col>
                            </b-row>
                            <b-row class="my-3">
                            <b-col sm="4">
                                <label class="text-secondary" :for="``">CRO No. (Fincon):</label>
                            </b-col>
                            <b-col sm="8">
                                <b-form-input :id="``" v-model="cro_number" :type="type"></b-form-input>
                            </b-col>
                            </b-row>
                            <b-row class="my-3">
                            <b-col sm="4">
                                <label class="text-secondary" :for="``">Initial/Previous Reading:</label>
                            </b-col>
                            <b-col sm="8">
                                <b-form-input :id="``" v-model="initial_reading" :type="'number'"></b-form-input>
                            </b-col>
                            </b-row>
                            <b-row class="my-3">
                            <b-col sm="4">
                                <label class="text-secondary" :for="``">New Reading:</label>
                            </b-col>
                            <b-col sm="8">
                                <b-form-input :id="``" v-model="new_reading" :type="'number'"></b-form-input>
                            </b-col>
                            </b-row>
                            <b-row class="my-3">
                            <b-col sm="4">
                                <label class="text-secondary" :for="``">Yield:</label>
                            </b-col>
                            <b-col sm="8 text-secondary">
                                <!-- <b-form-input :id="``" v-model="printer_yield" :type="type"></b-form-input> -->

                                <small>{{printer_yield}}</small>
                            </b-col>
                            </b-row>
                        </b-container>
                       
                    </div>
                    <div class="col-12 col-lg-6" >
                        <b-container fluid>
                            <b-row class="my-3">
                            <b-col sm="4">
                                <label class="text-secondary" :for="``">Request Date: {{request_date}}</label>
                            </b-col>
                            <b-col sm="8">
                                <!-- <b-form-input :id="``" v-model="request_date" :type="type"></b-form-input> -->

                                <b-form-datepicker id="request-date" v-model="request_date" 
                                today-button
                                reset-button
                                close-button
                                :date-format-options="{ year: 'numeric', month: 'short', day: '2-digit'}"
                                class="mb-2"></b-form-datepicker>
                            </b-col>
                            </b-row>
                            <b-row class="my-3">
                            <b-col sm="4">
                                <label class="text-secondary" :for="``">Delivery Date:</label>
                            </b-col>
                            <b-col sm="8">
                                <!-- <b-form-input :id="``" v-model="delivery_date" :type="type"></b-form-input> -->

                                <b-form-datepicker id="delivery-date" v-model="delivery_date" 
                                today-button
                                reset-button
                                close-button
                                :date-format-options="{ year: 'numeric', month: 'short', day: '2-digit'}"
                                class="mb-2">
                                </b-form-datepicker>
                            </b-col>
                            </b-row>
                            <b-row class="my-3">
                            <b-col sm="4">
                                <label class="text-secondary" :for="``">Toner Serial No:</label>
                            </b-col>
                            <b-col sm="8">
                                <b-form-input :id="``" v-model="toner_serial_number" :type="type"></b-form-input>
                            </b-col>
                            </b-row>
                            <b-row class="my-3">
                            <b-col sm="4">
                                <label class="text-secondary" :for="``">Toner Changed:</label>
                            </b-col>
                            <b-col sm="8">
                                <!-- <b-form-input :id="``" v-model="toner_changed" :type="type"></b-form-input> -->
                                <b-form-select v-model="toner_changed" :options="options"></b-form-select>
                            </b-col>
                            </b-row>
                            <b-row class="my-3">
                            <b-col sm="4">
                                <label class="text-secondary" :for="``">Comments:</label>
                            </b-col>
                            <b-col sm="8">
                                <!-- <b-form-input :id="``" v-model="comments" :type="type"></b-form-input> -->

                                <b-form-textarea
                                    id="textarea"
                                    v-model="comments"
                                    placeholder="Enter something..."
                                    rows="3"
                                   
                                ></b-form-textarea>
                            </b-col>
                            </b-row>
                        </b-container>
                    </div>
                    <div class="col-12 mx-2 my-3 alert alert-danger font-weight-800" v-if="errors.length > 0" >
            <h5><i class="fas fa-info-circle"></i> Error</h5>
            <ul class="" v-for="(error,index) in errors " :key="index">
                <li class="mx-2 my-1" v-html="error"></li>
            </ul>
        </div>
                    <div class="col-12 mt-4 text-right">
                        <span v-if="!saving" @click="saveHistory" class="btn btn-success"><i class="fa fa-save"></i> Save</span>
                        <button v-if="saving" class="btn btn-success disabled"><i class="fa fa-save" disabled></i> Save</button>
                    </div>
                </div>


        </b-card-text>
      </b-tab>
    </b-tabs>
  </b-card>
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

            const str = "abc's test#s";
console.log('all time ',str.replace(/[^a-zA-Z ]/g, ""));
        },
        computed: { 
            printer_yield: function() {
               return  this.new_reading - this.initial_reading
            }
        },
        components: { VueGoodTable},
        data: function() {
            return {
                serial_number : '' ,
                tabIndex: 0,
                printer_id : '' ,
                printer_name : '' ,
                organization_name : '' ,
                organization_id : '' ,
                ticket_number : '' ,
                cro_number : '' ,
                initial_reading : '' ,
                new_reading : 0 ,
                // printer_yield : '' ,
                request_date : '' ,
                delivery_date : '',
                toner_serial_number : '' ,
                toner_changed : '' ,
                comments : '' ,
                loaded:false,
                org_name: '',
                value: 'text',
                type: 'text',
                printer: '',
                history_loaded: '',
                tabIndex: 0,
                saving: false,
                errors: [],
        options: [
          { value: null, text: 'Please select an option' },
          { value: 'No', text: 'No' },
          { value: 'yes', text: 'Yes' },
          
        //   { value: { C: '3PO' }, text: 'This is an option with object value' },
        //   { value: 'd', text: 'This one is disabled', disabled: true }
        ],
                types: [
                    'text',
                    'text',
                    'email',
                    'password',
                    'search',
                    'url',
                    'tel',
                    'date',
                    'time',
                    'range',
                    'color'
                    ],
                columns: [
       
      
        {
          label: 'Reference',
          field: 'id',
        },
        {
          label: 'New Reading',
          field: 'new_reading',
        },
        // {
        //   label: 'Initial Reading',
        //   field: 'initial_reading',
        // },
        // {
        //   label: 'New Reading',
        //   field: 'yield',
        // },
        {
          label: 'Yield',
          field: 'yield',
        },
        
        {
          label: 'Previous Reading',
          field: 'initial_reading',
        },
        {
          label: 'Toner S/N ',
          field: 'toner_serial_number',
        },

        {
          label: 'Toner Changed',
          field: 'toner_changed',
        },
        {
          label: 'Ticket',
          field: 'ticket_number',
        },
        {
          label: 'Comments',
          field: 'comments',
        },
         
        
         
        {
          label: 'Delivery Date',
          field: 'delivery_date',
        },
        {
          label: 'Request Date',
          field: 'request_date',
        },
         
        {
          label: 'Date',
          field: 'created_at',
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
      rows: [
        // { id:1, name:"John", age: 20, createdAt: '',score: 0.03343 },
        // { id:2, name:"Jane", age: 24, createdAt: '2011-10-31', score: 0.03343 },
        // { id:3, name:"Susan", age: 16, createdAt: '2011-10-30', score: 0.03343 },
        // { id:4, name:"Chris", age: 55, createdAt: '2011-10-11', score: 0.03343 },
        // { id:5, name:"Dan", age: 40, createdAt: '2011-10-21', score: 0.03343 },
        // { id:6, name:"John", age: 20, createdAt: '2011-10-31', score: 0.03343 },
      ],
            }
        },
        methods: {
            saveHistory() {

                this.errors = [];

                if (this.ticket_number == '') {
          this.errors.push('The <b>Ticket No.</b> is required')
        }

        if (this.cro_number == '') {
          this.errors.push('The <b>CRO No.</b> is required')
        }

        if (this.initial_reading  == '') {
          this.errors.push('The <b>Initial Reading</b> is required')
        }

        if (this.new_reading == '') {
          this.errors.push('The <b>New Reading</b> is required')
        }

        if (this.delivery_date == '') {
          this.errors.push('The <b>Delivery Date</b> is Required')
        }

        if (this.toner_serial_number == '') {
          this.errors.push('The <b>Toner Serial Number</b>is Required')
        }

        if (this.toner_changed == '') {
          this.errors.push('The <b>Toner Changed</b> field is Required')
        }


                if (this.errors.length == 0) {

                    this.saving = true
                axios.post('/yield', {
                    serial_number : this.serial_number ,
                    printer_id : this.printer_id ,
                    printer_name : this.printer_name ,
                    organization_name : this.organization_name ,
                    organization_id : this.organization_id ,
                    ticket_number : this.ticket_number ,
                    cro_number : this.cro_number ,
                    initial_reading : this.initial_reading ,
                    new_reading : this.new_reading ,
                    yield : this.printer_yield ,
                    request_date : this.request_date ,
                    delivery_date : this.delivery_date ,
                    toner_serial_number : this.toner_serial_number ,
                    toner_changed : this.toner_changed ,
                    comments : this.comments ,
                }).then(response => {

                    console.log(response);
                    this.tabIndex = 0;
                    this.getHistory(this.serial_number)
                    this.getInitialReading(this.serial_number)
                    this.saving =  false;

                    this.ticket_number = '' 
                    this.cro_number = '' 
                    this.initial_reading = '' 
                    this.new_reading = '' 
                    this.printer_yield = '' 
                    this.request_date = '' 
                    this.delivery_date = '' 
                    this.toner_serial_number = '' 
                    this.toner_changed = '' 
                    this.comments = '' 

                }).catch(error => {

                    console.log(error)

                })
                }

                
            },



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
getHistory(serial) {
    axios.get('/history/'+serial)
    .then((response) => {
        this.rows = response.data
        console.log('readings', response.data)
    }).catch( (error) => {
        this.getHistory(serial)
        console.log(error)
    })
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
                    var json_data = {operation:"core/get",class:"Printer",key:"SELECT Printer AS p WHERE p.id = "+ this.$route.params.id ,output_fields:"*"}
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

                console.log(result)
           
			// console.log('reutrrrrn', data );
			// console.log('reutrrrrn', size );
			console.log('reutrrrrn', result.length);

            this.org_name = result[0][1].fields.org_id_friendlyname;


            var serial_number = result[0][1].fields.serialnumber;

            
            this.getInitialReading(serial_number);
            this.getHistory(serial_number);
            this.info = result[0][1].fields;
            this.printer_name = result[0][1].fields.name;
            this.printer_id = result[0][1].key;
            this.organization_name = result[0][1].fields.org_id_friendlyname;
            this.organization_id = result[0][1].fields.org_id;
            this.serial_number = result[0][1].fields.serialnumber;
            this.info = result[0][1].fields;
			console.log('reutrrrrn', result[0][1].fields.name);
            // var final = []
             
            // for (var i = 0; i < result.length; i++){
            //    console.log('herere')
            //     let object_final =  {
            //         name: result[i][1].fields.name,
            //         status: result[i][1].fields.status,
            //         parent_name: result[i][1].fields.parent_name,
            //         parent_id: result[i][1].fields.parent_id,
            //         org_id: result[i][1].key,
            //         organization_name: result[i][1].fields.organization_name,
            //         business_criticity: result[i][1].fields.business_criticity,
            //         location_name: result[i][1].fields.location_name,
            //         brand_name: result[i][1].fields.brand_name,
            //         model_name: result[i][1].fields.model_name,
            //         serialnumber: result[i][1].fields.serialnumber,
            //     }
            //     final.push(object_final);
            // }

            // console.log('finallll', final)
            // this.rows = final

            // this.loaded = true;
            // this.loaded = true;

        }
    });
                
                
            },
            getInitialReading(serial) {

                axios.get('/reading/'+serial).then((response) => {
                    this.loaded = true;
                    if (response.data == 'empty') {
                        this.initial_reading = 0;
                    }else {
                        this.initial_reading = response.data.new_reading;
                    }

                })
                .catch((error) => {
                    this.loaded = true;
                    this.getInitialReading()
                })

                
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