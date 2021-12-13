<template>
<div class="h-screen flex flex-col">
<input type="text" v-model="offer.language" placeholder="linguaggio">
<input type='text' v-model="offer.icon" placeholder="inserisci un link dell'immagine del linguaggio">
<input type='text' v-model="offer.company" placeholder="azienda">
<input type='integer' v-model="offer['RAL']" placeholder="stipendio annuale lordo">
<input type='text' v-model="offer.level" placeholder="livello">
<input type='text' v-model="offer.location" placeholder="luogo">
<input type='text' v-model="offer.description" placeholder="descrizione">
<button class='flex bg-green-200' @click="edit()">Salva</button>
</div>
</template>


<script>
import axios from 'axios';
export default {
    name:"NewOffer",
    data(){
    return {
        offer:{
            language : "",
            icon : "",
            company : "",
            RAL : 0,
            level : "",
            location: "",
            description : ""
        },
    }
},
methods:{
    async edit(){
        console.log(this.offer);
        let response = await axios.post("http://127.0.0.1:8000/api/edit/id", this.offer);
        console.log(response);
    },
},
}
</script>