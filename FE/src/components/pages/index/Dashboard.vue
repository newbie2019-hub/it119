<template>
  <div id="app">
      <div class="container pt-4">
        <h6 class="text-muted">Here is your summary</h6>
        <div class="row mt-5">
          <div class="col-10 col-sm-10 col-md-6 col-lg-6 pb-3">
            <h6 class="text-muted">Borrowed and returned books</h6>
            <BarChart />
          </div>
          <div class="col-10 col-sm-10 col-md-6 col-lg-6 pb-3">
            <h6 class="text-muted">Popular book genre</h6>
           <DoughnutChart />
          </div>
        </div>
      </div>
  </div>
</template>

<script>
import BarChart from "@/components/charts/BarChart"
import DoughnutChart from "@/components/charts/DoughnutChart"
export default {
  
  components: { BarChart, DoughnutChart},
  methods: {
   
  },
  computed: {
  },
  mounted: function() {
    document.title = "Dashboard"
  },
};
</script>
<style >
canvas {
  max-height: 410px !important;
  max-width: 450px !important;
}
</style>

