<template>
    <div class="container-fluid">
        <h3>Sparepart</h3>
        <input type="text" placeholder="Search" @change="getTable('/api/spareparts/'+search)" v-model="search"aria-label="Search"><br>
        {{search}}

        <div class="table-responsive">
            <table class="table table-striped">
                <thead class="thead-dark">
                    <tr>
                        <th v-for="(key,value) in spareparts.data[0]">{{value}}</th>
                    <th><a href="blabla"><button type="button" class="btn btn-success btn-sm"><i class="fas fa-plus fa-fw"></i></button></a></th>
                    </tr>
                </thead>
                <tbody>
                    <tr v-for="sparepart in spareparts.data">
                        <td v-for="value in sparepart">{{value}}</td>
                    </tr>
                </tbody>
            </table>
        </div> 
        <nav aria-label="Page navigation example">
  <ul class="pagination justify-content-center">
    <li class="page-item"><button class="page-link" @click="getTable('/api/spareparts')"><<</button></li>
    <li class="page-item"><button class="page-link" @click="getTable(spareparts.prev_page_url)"><</button></li>
    <li class="page-item"><button class="page-link"> {{spareparts.current_page}}</button></li>
    <li class="page-item"><button class="page-link" @click="getTable(spareparts.next_page_url)">></button></li>
    <li class="page-item"><button class="page-link" @click="getTable(spareparts.last_page_url)">>></button></li>
  </ul>
</nav>
    </div>
</template>


<script>
export default {
  data: function() {
    return {
      spareparts: [],
      search: ""
    };
  },

  created() {
    Event.$on("sparepartsClicked", () => this.getTable("/api/spareparts"));
  },
  methods: {
    getTable: function(url) {
      axios.get(url).then(response => (this.spareparts = response.data));
    }
  }
};
</script>

