<script>
import { data, options } from "@/assets/js/chart/bar.js";
import { Bar } from 'vue-chartjs'
export default {
  extends: Bar,
  mounted:function(){
    this.renderChart(data, options)
  }
}
</script>