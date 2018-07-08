<template>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">{{tablename}}</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
         <component :is="dynamicModal"></component>
      </div>
    </div>
  </div>
</div>
</template>

<script>
import SparepartModal from "./SparepartModal.vue";
import CustomerModal from "./CustomerModal.vue";
export default {
  data: function() {
    return {
      kontol: ""
    };
  },
  props: ["tablename"],
  computed: {
    dynamicModal() {
      return this.tablename + "modal";
    }
  },
  components: {
    sparepartsmodal: SparepartModal,
    customersmodal: CustomerModal
  },
  methods: {
    addObject: tablename => {
      axios.post("/api/spareparts/");
    }
  }
};
</script>
