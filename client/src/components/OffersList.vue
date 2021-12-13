<template>
    <div>
        <div v-for="(offer, index) in offer" :key="index">
            <div  class="flex flex-row m-5 mr-2 text-center">
                <img :src="offer.icon" alt="offer" class="flex w-20 h-20 mr-2" />
                <div class="flex flex-col text-black  text-center h-full w-full">
                    <div class="flex mb-1">{{ offer.language}} </div>
                    <div class="flex mb-1">{{ offer.company}} </div>
                    <button @click="edit(offer)" class="text-yellow-600 mr-2">Modifica</button>
                    <button @click="details(offer)" class="text-yellow-600 mr-2">dettagli</button>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import axios from "axios";
export default {
    name: "OffersList",
    data() {
    return {
      offer: [],
    };
  },

  async mounted() {
    let response = await axios.get("http://127.0.0.1:8000/api/offers");
    this.offer = response.data;
  },

methods: {
    edit(offer) {
      console.log(offer);

      this.$router.push("edit");
    },
    details(offer) {
      console.log(offer);

      this.$router.push("/offerdetail/" + offer.id);
    },
  }
}

</script>