<template>
  <div id="app">
    <SideBar />
    <NavBar />
    <div class="main">
      <router-view />
    </div>
  </div>
</template>
<script>
import SideBar from "@/components/navigation/SideBar";
import NavBar from "@/components/navigation/NavBar";
export default {
  components: { SideBar, NavBar },
};
</script>

<style>
</style>
