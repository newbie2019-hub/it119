<template>
  <div id="app">
    <SideBar />
    <NavBar />
    <div class="main">
      <transition name="fade" mode="out-in">
        <router-view />
      </transition>
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
.fade-enter, .fade-leave-to {
  opacity: 0;
  transform: translateX(2rem);
}

.fade-enter-active, .fade-leave-active {
  transition: all .3s ease;
}
</style>
