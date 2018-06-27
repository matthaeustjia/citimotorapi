<template>
    <div class="container-fluid">
        <h3><slot name="table-title"></slot></h3>
        <div class="table-responsive">
            <table class="table table-striped">
                <thead class="thead-dark">
                    <tr>
                        <th v-for="(key,value) in spareparts.data[0]">{{value}}</th>
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
    <li class="page-item"><a class="page-link" href="#" @click="getTable('/api/spareparts')"><<</a></li>
    <li class="page-item"><a class="page-link" href="#" @click="getTable(spareparts.prev_page_url)"><</a></li>
    <li class="page-item"><a class="page-link" href="#">{{spareparts.current_page}}</a></li>
    <li class="page-item"><a class="page-link" href="#" @click="getTable(spareparts.next_page_url)">></a></li>
    <li class="page-item"><a class="page-link" href="#" @click="getTable(spareparts.last_page_url)">>></a></li>
  </ul>
</nav>
    </div>
</template>


<script>
export default {
  data: function() {
    return {
      spareparts: []
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

