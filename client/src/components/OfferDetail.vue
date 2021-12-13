<template>
    <div>
        <div v-for="(offer, index) in offer" :key="index">
                <div  class="flex flex-row m-5 mr-2 text-center">
                    <img :src="offer.icon" alt="offer" class="flex w-20 h-20 mr-2" />
                    <div class="flex flex-col text-black  text-center h-full w-full">
                        <div class="flex mb-1">{{ offer.language}} </div>
                        <div class="flex mb-1">{{ offer.company}} </div>
                        <div class="flex mb-1">{{ offer['RAL']}} </div>
                        <div class="flex mb-1">{{ offer.level}} </div>
                        <div class="flex mb-1">{{ offer.location}} </div>
                        <div class="flex mb-1">{{ offer.description}} </div>
                        <router-link to="/offerdetail">dettagli</router-link>
                    </div>
                </div>
            </div>
    </div>
</template>


<script>
import axios from "axios";
export default {
    name: "OfferDetail",
    data() {
    return {
      offer: [],
    };
  },

  async mounted() {
    let response = await axios.get("http://127.0.0.1:8000/api/offer/id");
    this.offer = response.data;
  },
}

</script>