<template>
  <div>
    <a-menu v-model="current" mode="horizontal">
      <a-menu-item key="home">
        <a href="/"><a-icon type="home" />Homepage</a>
      </a-menu-item>
      <a-menu-item key="themes">
        <a href="/themes"><a-icon type="experiment" />Theme</a>
      </a-menu-item>
      <a-menu-item key="sign-in" v-if="!user">
        <a href="/login"><a-icon type="login" />Sign In</a>
      </a-menu-item>
    </a-menu>
  </div>
</template>
<script>
export default {
  data() {
    return {
      user: window.auth_user,
      current: [],
    };
  },
};
</script>
