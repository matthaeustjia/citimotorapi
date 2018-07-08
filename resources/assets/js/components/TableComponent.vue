<template>
    <div class="container-fluid">
        <modal :tablename="tablename"></modal>
        <h3>{{tablename}}</h3>
        <input type="text" placeholder="Search" @change="getTable('/api/'+tablename+'/'+search)" v-model="search">
        <div class="table-responsive">
            <table class="table table-striped">
                <thead class="thead-dark">
                    <tr>
                        <th v-for="(key,value) in returnvalue.data[0]">{{value}}</th>
                               <th><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"></button></th>
                    </tr>
                </thead>
                <tbody>
                    <tr v-for="returnvalue in returnvalue.data">
                        <td v-for="value in returnvalue">{{value}}</td>
                        <button class="btn-warning xs">Edit</button><br>
                        <button class="btn-danger xs">Remove</button>
                    </tr>
                </tbody>
            </table>
        </div> 
        <nav aria-label="Page navifation example">
  <ul class="pagination justify-content-center">
    <li class="page-item"><button class="page-link" @click="getTable(returnvalue.links.first)"><<</button></li>
    <li v-if="returnvalue.links.prev" class="page-item"><button class="page-link" @click="getTable(returnvalue.links.prev)"><</button></li>
    <li class="page-item"><button class="page-link"> {{returnvalue.meta.current_page}}</button></li>
    <li :disabled="returnvalue.links.next == null" class="page-item"><button class="page-link" @click="getTable(returnvalue.links.next)">></button></li>
    <li class="page-item"><button class="page-link" @click="getTable(returnvalue.links.last)">>></button></li>
  </ul>
</nav>
    </div>
</template>


<script>
import Modal from "./modalcomponents/MasterComponent.vue";

export default {
  data: function() {
    return {
      returnvalue: [],
      tablename: "",
      search: ""
    };
  },

  created() {
    Event.$on("menuClicked", tablename =>
      this.getTable("/api/" + tablename, (this.tablename = tablename))
    );
  },
  methods: {
    getTable: function(url) {
      axios.get(url).then(response => (this.returnvalue = response.data));
    }
  },
  components: { modal: Modal }
};
</script>

