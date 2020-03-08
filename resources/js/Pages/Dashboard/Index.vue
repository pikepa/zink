<template>
  <layout title="Welcome">
      <div class="container mx-auto px-6 md:px-0">
        <p>This is Dashboard, {{fname}}, {{appl}}</p>
      </div>
  </layout>
</template>

<script>
  import Layout from './../../Shared/Layout'

  export default {
    components: {
      Layout,
    },
    props:['fname','appl']
  }
</script>
