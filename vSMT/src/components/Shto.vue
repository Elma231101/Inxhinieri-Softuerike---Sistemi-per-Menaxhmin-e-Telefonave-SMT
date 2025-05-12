<template>
  <div class="add container">
    <Alert v-if="alert" v-bind:message="alert" />
    <h1 class="page-header">Shto te dhenat e Telefonit</h1>
    <form v-on:submit="addTelefoni_smt">
       <div class="well">
            <h4>Informacionet e Modelit Telefonit:</h4>
            <div class="form-group">
                <label>ModeliTelefonit_SMT</label>
                <input type="text" class="form-control" placeholder="ModeliTelefonit_SMT" v-model="telefoni_smt.ModeliTelefonit_SMT">
            </div>
            <div class="form-group">
                <label>HapesiraTelefonit_SMT</label>
                <input type="text" class="form-control" placeholder="HapesiraTelefonit_SMT" v-model="telefoni_smt.HapesiraTelefonit_SMT">
            </div>
			<div class="form-group">
                <label>CmimiTelefonit_SMT</label>
                <input type="text" class="form-control" placeholder="CmimiTelefonit_SMT" v-model="telefoni_smt.CmimiTelefonit_SMT">
            </div>
        </div>
        <div class="well">
            <h4>Informacionet e Sistemit Operativ te Telefonit:</h4>
            <div class="form-group">
                <label>SistemiOperativTelefonit_SMT</label>
                <input type="text" class="form-control" placeholder="SistemiOperativTelefonit_SMT" v-model="telefoni_smt.SistemiOperativTelefonit_SMT">
            </div>
            <div class="form-group">
                <label>NumriModelitTelefonit_SMT</label>
                <input type="text" class="form-control" placeholder="NumriModelitTelefonit_SMT" v-model="telefoni_smt.NumriModelitTelefonit_SMT">
            </div>
			<div class="form-group">
                <label>NumriSerikTelefonit_SMT</label>
                <input type="text" class="form-control" placeholder="NumriSerikTelefonit_SMT" v-model="telefoni_smt.NumriSerikTelefonit_SMT">
            </div>
			<div class="form-group">
                <label>GarancioniTelefonit_SMT</label>
                <input type="text" class="form-control" placeholder="GarancioniTelefonit_SMT" v-model="telefoni_smt.GarancioniTelefonit_SMT">
            </div>
			
        </div>
        <button type="submit" class="btn btn-primary">Shto</button>
    </form>
  </div>
</template>

<script>
export default {
  name: 'add',
  data () {
    return {
      telefoni_smt: {}
    }
  },
      methods: {
        addTelefoni_smt(e){
            if(!this.telefoni_smt.ModeliTelefonit_SMT || !this.telefoni_smt.SistemiOperativTelefonit_SMT || !this.telefoni_smt.HapesiraTelefonit_SMT){
                this.alert = 'Ju duhet ti plotesoni te gjitha fushat e kerkuara';
            } else {
                let newTelefoni_smt = {
                    ModeliTelefonit_SMT: this.telefoni_smt.ModeliTelefonit_SMT,
                    SistemiOperativTelefonit_SMT: this.telefoni_smt.SistemiOperativTelefonit_SMT,
                    HapesiraTelefonit_SMT: this.telefoni_smt.HapesiraTelefonit_SMT,
                    NumriModelitTelefonit_SMT: this.telefoni_smt.NumriModelitTelefonit_SMT,
                    NumriSerikTelefonit_SMT: this.telefoni_smt.NumriSerikTelefonit_SMT,
                    CmimiTelefonit_SMT: this.telefoni_smt.CmimiTelefonit_SMT,
                    GarancioniTelefonit_SMT	: this.telefoni_smt.GarancioniTelefonit_SMT	
                }

                this.$http.post('http://slimapp/api/telefoni_smt/add', newTelefoni_smt)
                    .then(function(response){
                        this.$router.push({path: '/', query: {alert: 'Te dhenat e Telefonit u shtuan me sukses'}});
                    });

                e.preventDefault();
            }
            e.preventDefault();
        }
    }
}
</script>

</style>
