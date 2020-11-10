<template>
  <div id="app">
    <SideBar isActive="settings"/>
    <NavBar />
    <div class="main"></div>
  </div>
</template>
<script>
import SideBar from "../../components/SideBar";
import NavBar from "../../components/NavBar";

export default {
  components: { SideBar, NavBar },
  methods: {},
};
</script>

<style>
@import "../../assets/css/style.css";
</style>