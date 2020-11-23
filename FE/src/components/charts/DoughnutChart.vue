<script>
import { data, options } from "@/assets/js/chart/doughnut.js";
import { Doughnut } from 'vue-chartjs'
export default {
  extends: Doughnut,
  mounted:function(){
    this.renderChart(data, options)
  }
}
</script>