<template>
    <nav class="navbar navbar-expand-md navbar-dark bg-dark mb-4">
                <a class="navbar-brand" href="/">CitiMotorBekasi</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="navbar-nav nav-tabs mr-auto">
                        <li :class="{'nav-item active': isActive}">
                            <a class="nav-link" @click="onMenuClicked">Spare Parts</a>
                        </li>
                        <li :class="{'nav-item active': isActive}">
                            <a class="nav-link" href="#">Customer</a>
                        </li>
                        <li :class="{'nav-item active': isActive}">
                            <a class="nav-link" href="#">Customer</a>
                        </li>
                        <li :class="{'nav-item active': isActive}">
                            <a class="nav-link" href="#">Customer</a>
                        </li>
                        <li :class="{'nav-item active': isActive}">
                            <a class="nav-link" href="#">Customer</a>
                        </li>
                        <li :class="{'nav-item active': isActive}">
                            <a class="nav-link" href="#">Customer</a>
                        </li>
                        <li :class="{'nav-item active': isActive}">
                            <a class="nav-link" href="#">Customer</a>
                        </li>
                    </ul>
                </div>
            </nav>
</template>
<script>
export default {
  data: function() {
    return {
      isActive: false
    };
  },
  methods: {
    onMenuClicked() {
      Event.$emit("sparepartsClicked");
      this.isActive = true;
    }
  }
};
</script>
