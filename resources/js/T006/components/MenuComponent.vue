<template>
  <div>
    <div class="col-md-12">
      <div class="head1__inner">
        <div class="head1__inner--left">
          <div class="head1__logo">
            <a class="logo" href="/">
              <img src="/templates/T006/bplogo1.png" alt="Với chúng tôi, khách hàng tất cả">
            </a>
          </div>
          <div class="head1__formsearch">
            <form id="search" action="/search" method="get">
              <span role="status" aria-live="polite" class="ui-helper-hidden-accessible"></span><input type="text" name="q" placeholder="Search product" class="ui-autocomplete-input" autocomplete="off">
              <a href="javascript:{}" onclick="document.getElementById('search').submit();"><i class="fa fa-search"></i></a>
              <div id="searchFolding"></div>
            </form>
          </div>
        </div>
        <div class="head1__inner--right">
          <div class="head1__menu">
            <ul class="nav">
              <li class="text-center" v-for="menu in menus[0].menu">
                <a href="/">
                  <span>{{ menu.name }}</span>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>
<script>
export default {
  data() {
    return {
      menus: window.menus,
      current: [],
    };
  },
  mounted() {
    console.log(window.menus);
  }
};
</script>
