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
            <canvas id="barChart" ref="barChart" width="280" height="200"></canvas>
          </div>
          <div class="col-10 col-sm-10 col-md-6 col-lg-6 pb-3">
            <h6 class="text-muted">Popular book genre</h6>
            <canvas id="pieChart" width="280" height="200"></canvas>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import SideBar from "../../components/navigation/SideBar";
import NavBar from "../../components/navigation/NavBar";
import Chart from 'chart.js';
export default {
  components: { SideBar, NavBar },
  data(){
    return {
      msg: 'Hello World!'
    }
  },
  methods: {
    
  },
  mounted() {
    document.title = "Dashboard"
    this.$nextTick(() => {
      var ctx = this.$refs.barChart.getContext("2d");
      new Chart(ctx, {
        type: "bar",
        data: {
          labels: ["JAN", "FEB", "MARCH", "APRIL", "MAY", "JUNE"],
          datasets: [
            {
              label: "Borrowed Books",
              data: [7, 10, 9, 12, 13, 6],
              backgroundColor: "rgba(117, 121, 231, .8)",
            },
            {
              label: "Returned Books",
              data: [4, 7, 10, 11, 8, 8],
              backgroundColor: "rgba(154, 179, 245, .8)",
            },
          ],
        },
        options: {
          scales: {
            yAxes: [
              {
                ticks: {
                  beginAtZero: true,
                },
              },
            ],
          },
        },
      });

      var pie = document.getElementById("pieChart").getContext("2d");
      new Chart(pie, {
        type: "doughnut",
        data: {
          datasets: [
            {
              data: [10, 20, 30, 20],
              backgroundColor: [
                "rgb(52, 152, 219, .8)",
                "rgba(154, 179, 245, .8)",
                "rgba(27, 206, 230, .8)",
                "rgba(27, 64, 230, .8)",
              ],
            },
          ],

          labels: ["Novel", "Fiction", "Biography", "Horror"],
        },
        options: {
          scales: {
            yAxes: [
              {
                ticks: {
                  beginAtZero: true,
                },
              },
            ],
          },
        },
      });

    });
  },
};
</script>

<style>
@import "../../assets/css/style.css";
</style>
