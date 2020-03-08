<template>
  <layout title="Welcome">
        <p>This is Dashboard, {{fname}}, {{lname}}</p>
  </layout>
</template>

<script>
  import Layout from './../../Shared/Layout'

  export default {
    components: {
      Layout,
    },
    props:['fname','lname']
  }
</script>
