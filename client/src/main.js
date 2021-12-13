import Vue from 'vue'
import App from './App.vue'
import VueRouter from 'vue-router';
import OffersList from '@/components/OffersList.vue';
import NewOffer from '@/components/NewOffer.vue';
import OfferDetail from '@/components/OfferDetail.vue';
import EditOffer from '@/components/EditOffer.vue';

Vue.config.productionTip = false

Vue.use (VueRouter);

const routes = [
  {
    path: "/",
    name: "offers_list",
    component: OffersList,
  },
  {
    path: "/newoffer",
    name: "new_offer",
    component: NewOffer,
  },
  {
    path: "offerdetail",
    name: "offer_detail",
    component: OfferDetail,
  },
  {
    path: "/edit",
    name: "edit_offer",
    component: EditOffer,
  },

];
  

const router= new VueRouter({
mode: "history",
routes,
});

new Vue({
render: h => h(App),
router,
}).$mount('#app')
