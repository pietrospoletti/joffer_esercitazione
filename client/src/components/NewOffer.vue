<template>
<div class="h-screen flex flex-col">
<input type="text" v-model="newOffer.language" placeholder="linguaggio">
<input type='text' v-model="newOffer.icon" placeholder="inserisci un link dell'immagine del linguaggio">
<input type='text' v-model="newOffer.company" placeholder="azienda">
<input type='integer' v-model="newOffer['RAL']" placeholder="stipendio annuale lordo">
<input type='text' v-model="newOffer.level" placeholder="livello">
<input type='text' v-model="newOffer.location" placeholder="luogo">
<input type='text' v-model="newOffer.description" placeholder="descrizione">
<button class='flex bg-green-200' @click="conferma()">Aggiungi la proiezione</button>
</div>
</template>


<script>
import axios from 'axios';
export default {
    name:"NewOffer",
    data(){
    return {
        newOffer:{
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
    async conferma(){
        console.log(this.newOffer);
        let response = await axios.post("http://127.0.0.1:8000/api/addoffer", this.newOffer);
        console.log(response);
    },
},
}
</script>

<style>
input{
    border: 1px solid black;
    border-radius: 1rem;
    margin: 3px;
    padding-left: 5px;
}
</style>