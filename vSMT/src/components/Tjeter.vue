  <table class="table table-striped">
        <thead>
          <tr>
            <th>ModeliTelefonit_SMT</th>
            <th>SistemiOperativTelefonit_SMT</th>
            <th>HapesiraTelefonit_SMT</th>
            <th></th>
          </tr>
        </thead>
        <tbody>
          <tr v-for="telefoni_smt in telefonat_smt">
            <td>{{telefoni_smt.ModeliTelefonit_SMT}}</td>
            <td>{{telefoni_smt.SistemiOperativTelefonit_SMT}}</td>
            <td>{{telefoni_smt.HapesiraTelefonit_SMT}}</td>
            <td><router-link class="btn btn-default" v-bind:to="'/telefoni_smt/'+telefoni_smt.ID">Shfaq</router-link></td>
          </tr>
        </tbody>
    </table>
	
	
	
	