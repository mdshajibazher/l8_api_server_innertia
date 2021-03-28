<template>
    <Layouts>
        <div>
        <h1>Vue Innertia {{foo}}</h1>
       
    </div>
    </Layouts>
</template>

<script>
import Layouts from '@/Shared/Layouts'
export default {
    components: {
        Layouts
    },
    props:['foo']
}
</script>

<style>

</style>