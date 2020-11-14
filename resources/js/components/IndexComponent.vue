 <template>
         <div class="container">
          
          <router-link v-bind:to="{name: 'random.tell'}">
              <button id="random-tell" class="btn btn-success" @click="tell">通話</button>
          </router-link>

              <button class="btn  btn-info">部屋を作成</button>
        </div>
 </template>
 
 <script>
     export default {}
 </script>