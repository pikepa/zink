<template>
    <div class="text-red-600">
        <p>This is Dashboard, {{fname}}, {{lname}}</p>
    </div>

</template>

<script>
export default {
    props:['fname','lname']
}
</script>