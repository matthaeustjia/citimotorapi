<template>
<form method="POST" action="/api/spareparts" @submit.prevent="onSubmit">
    <div class="form-group">
        <label for="id" class="col-form-label">Id:</label>
        <input type="text" v-model="id" name="id" class="form-control" id="id" required>
    </div>
    <div class="form-group">
        <label for="name" class="col-form-label">Name:</label>
        <input type="text" v-model="name" name="name" class="form-control" id="name" required>
    </div>
    <div class="form-group">
        <label for="type" class="col-form-label">type:</label>
        <input type="text" v-model="type" name="type" class="form-control" id="type" required>
    </div>
    <div class="form-group">
        <label for="car" class="col-form-label">Car:</label>
        <input type="text" v-model="car" name="car" class="form-control" id="car" required>
    </div>
    <div class="form-group">
        <label for="sellingprice" class="col-form-label">Selling Price:</label>
        <input type="number" v-model="sellingprice" name="sellingprice" class="form-control" id="sellingprice" required>
    </div>
    <div class="form-group">
        <label for="buyingprice" class="col-form-label">Buying Price:</label>
        <input type="number" v-model="buyingprice" name="buyingprice" class="form-control" id="buyingprice" required>
    </div>
          <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="reset" class="btn btn-warning">Reset</button>
        <button type="submit" class="btn btn-primary">Add</button>
      </div>
</form>
</template>
<script>
export default {
  data: function() {
    return {
      id: "",
      name: "",
      type: "",
      car: "",
      sellingprice: "",
      buyingprice: ""
    };
  },
  methods: {
    onSubmit() {
      axios
        .post("/api/spareparts", this.$data)
        .then(function(response) {
          console.log(response);
        })
        .catch(function(error) {
          console.log(error);
        });
    }
  }
};
</script>
