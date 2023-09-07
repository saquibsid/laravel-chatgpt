<style>
.container p {
   padding:5px;
}
</style>
<template>
  <div class="min-h-screen flex flex-col justify-between">
    <LoaderComponent v-if="isLoading"></LoaderComponent>
    <div class="p-4">
      <!-- Your page content goes here -->
        <div class="container" v-if="result" v-html="formattedResponse">
        </div>
      
    </div>
  
    <div class="p-4 fixed bottom-0 left-0 right-0 bg-white">
      <div class="grid grid-cols-12">
          <div class="col-span-11">
            <textarea :disabled="disabled" rows="1" @keydown.enter="addquery" placeholder="Send a message" v-model="message"
              class="w-full px-4 py-2 border rounded-md resize-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500"></textarea>
          </div>
          <!-- <div class="col-span-1">
            <button @click="addquery" class="bg-blue-500 text-white py-2 px-4 rounded-md">Submit</button>
          </div> -->
      </div>
    </div>
  </div>
</template>
<script>
import axios from 'axios';
import LoaderComponent from './LoaderComponent.vue';
export default {
  data() {
    return {
      message: '',
      result:null,
      error:null,
      isLoading:false,
      user_message:'',
      disabled:false
    }
  },
  components: {
    LoaderComponent
  },
  methods: {
    async addquery() {
      //console.log("hit enter", this.message);
      try {
          this.isLoading = true;
          this.disabled =  true;
          this.user_message = this.message;
          this.message = '';
          const response =  await axios.post('/api/v1/postchat',{message:this.user_message});
          this.result = response.data.data.content;
          this.isLoading = false;
          this.disabled =  false;
      } catch (error) {
          this.isLoading = false;
          this.disabled =  false;
          console.log(error)
          this.error = error;
          
      }
    },
  },
  computed:{
      formattedResponse(){
        return this.result.replace(/\n\n/g, "</p><p>");
      }
  },
  mounted() {
    console.log('Component mounted.')
  }
}
</script>