<template>
  <div id="app">
    <SideBar isActive="index"/>
    <NavBar />
    <div class="main">
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
  </div>
</template>

<script>
import SideBar from "@/components/navigation/SideBar";
import NavBar from "@/components/navigation/NavBar";
import BarChart from "@/components/charts/BarChart"
import DoughnutChart from "@/components/charts/DoughnutChart"
export default {
  
  components: { SideBar, NavBar, BarChart, DoughnutChart},
  data(){
    return {
      height: 300,
      width: 380
    }
  },
  methods: {
   
  },
  computed: {
    chartStyle () {
      return {
        height: `${this.height}px`,
        width: `${this.width}px`,
        position: 'relative'
      }
    }
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

