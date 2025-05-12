<template>
	
  <div class="telefonat_smt container">
  <Alert v-if="alert" v-bind:message='alert' />
  <h1 class="page-header">Sistemi per Menaxhimin e Telefonave (SMT)</h1>
  <input class="form-control" placeholder="Sheno Modelin e Telefonit" v-model="filterInput">
<br />
 <table class="table table-striped">
        <thead>
          <tr>
            <th>ModeliTelefonit_SMT	</th>
            <th>SistemiOperativTelefonit_SMT</th>
            <th>HapesiraTelefonit_SMT</th>
			<th>NumriModelitTelefonit_SMT</th>
			<th>NumriSerikTelefonit_SMT</th>
			<th>CmimiTelefonit_SMT</th>
			<th>GarancioniTelefonit_SMT</th>
			<th></th>
          </tr>
        </thead>
        <tbody>
          
		  <tr v-for="telefoni_smt in filterBy(telefonat_smt, filterInput)">
            <td>{{telefoni_smt.ModeliTelefonit_SMT}}</td>
            <td>{{telefoni_smt.SistemiOperativTelefonit_SMT}}</td>
            <td>{{telefoni_smt.HapesiraTelefonit_SMT}}</td>
			<td>{{telefoni_smt.NumriModelitTelefonit_SMT}}</td>
			<td>{{telefoni_smt.NumriSerikTelefonit_SMT}}</td>
			<td>{{telefoni_smt.CmimiTelefonit_SMT}}</td>
			<td>{{telefoni_smt.GarancioniTelefonit_SMT}}</td>
           <td>
		               <router-link class="btn btn-primary" v-bind:to="'/modifiko/'+telefoni_smt.ID">Modifiko</router-link>
		    <button class="btn btn-danger" v-on:click="deleteTelefoni_smt(telefoni_smt.ID)"  >Fshije</button>
			</td>
		           
		 
          </tr>
        </tbody>
    </table>
  </div>
</template>

<script>
	import Alert from './Alert';
	export default {
	  name: 'telefonat_smt',
	  data () {
		return {
		  
		  telefonat_smt: [],
		  alert: '',
		  filterInput:''

		
		}
	  },
	  methods: {
	 fetchTelefonat_smt(){
			this.$http.get('http://slimapp/api/telefonat_smt')
			  .then(function(response){
				this.telefonat_smt = response.body;
			  });
		},
		filterBy(list, value){
value=value.charAt(0).toUpperCase()+value.slice(1);		
return list.filter(function(telefoni_smt){				
return telefoni_smt.ModeliTelefonit_SMT.indexOf(value) > -1;				});		},


		deleteTelefoni_smt(ID){
		  var self = this;
          this.$http.delete('http://slimapp/api/telefoni_smt/delete/'+ID)
          .then(function(response){
					 self.alert = 'Te dhenat e Telefonit u Fshine me sukses!';
          			 this.$router.push({path: '/', query: {alert: 'Te dhenat e Telefonit u fshine me sukses!'}});
                 
          });
      }
		
	  }, 
	  created: function(){
	  if(this.$route.query.alert){
	  this.alert = this.$route.query.alert;
	  }
	  this.fetchTelefonat_smt();
	  },
	  updated: function(){
	  this.fetchTelefonat_smt();
	  },
	  

	 
	  components: {
		Alert
	  }
	}
</script>

</style>
