<template>
<li class="dropdown" id="markasread">
    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
    <span class="glyphicon glyphicon-globe">

    </span>
    <span class="badge">

    {{unreads.length}}

    </span>

    </a>
      <ul class="dropdown-menu" role="menu">
          <li>

          </li>
      </ul>
</li>
</template>

<script>
  window.Vue = require('vue');
    export default {
      props:['unreads', 'userid'],
        mounted() {
            console.log('Component mounted.');
            Echo.private('App.user.'+ this.userid)
            .notification((notification)=>{
            console.log(notification);
            });
        }
    }
</script>
