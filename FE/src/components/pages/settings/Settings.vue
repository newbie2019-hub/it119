<template>
  <div id="app">
    <SideBar isActive="settings"/>
    <NavBar />
    <div class="main"></div>
  </div>
</template>
<script>
import SideBar from "../../navigation/SideBar";
import NavBar from "../../navigation/NavBar";

export default {
  mounted(){
    document.title = "Settings"
  },
  components: { SideBar, NavBar },
  methods: {},
};
</script>

<style>
@import "../../../assets/css/style.css";
</style>