<template>
  <div class="row alert_new">
    <div class="col-sm-4"></div>
    <div class="col-sm-4">
      <div class="alert alert-primary alert-dismissible fade show" role="alert">
        <strong @click="reloadPage()">Load New Content...</strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  methods: {
    reloadPage(){
      location.reload(true);
    }
  }
}
</script>

<style>
  .alert_new{
    cursor: pointer;
  }
</style>
