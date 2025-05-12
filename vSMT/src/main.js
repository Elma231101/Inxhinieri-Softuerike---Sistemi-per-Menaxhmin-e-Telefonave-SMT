//Versioni i ndertimit Vue per t'u ngarkuar me komanden "Import"
// (vetem per kohezgjatje ose te pavarur) eshte vendosur ne webpack.base.conf me nje pseudonim.
import Vue from 'vue'
import App from './App'
//importo ruterin nga'./router'
import VueRouter from 'vue-router'
import vueResource from 'vue-resource'
import Telefonat_smt from './components/Telefonat_smt'
import Perne from './components/Perne'
import Shto from './components/Shto'
import Modifiko from './components/Modifiko'

Vue.use(vueResource)
Vue.use(VueRouter)

const router = new VueRouter({
	mode: 'history',
	base: __dirname,
	routes: [
	{path:'/', component: Telefonat_smt},
	{path: '/perne', component: Perne},
	{path: '/shto', component: Shto},
		{path: '/modifiko/:ID', component: Modifiko},
	]
})

Vue.config.productionTip = false

/* eslint-disable jo-i ri */
new Vue({
	router,
template:`
<div id="app">

      <nav class="navbar navbar-default">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">vSMT</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li><router-link to="/">Ballina</router-link></li>
            <li><router-link to="/perne">Rreth nesh</router-link></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><router-link to="/shto">Shto te dhenat e Telefonit</router-link></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

<router-view></router-view>
</div>`
}).$mount('#app')
