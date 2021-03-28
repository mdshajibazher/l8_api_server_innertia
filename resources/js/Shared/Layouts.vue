<template>
    
<div id="wrapper">
    <div class="p-sidebar">
            <Nav/>
    </div>

    <div class="p-content">
        <div class="p-3">
        <slot/>
        </div>
    </div>

</div>
</template>

<script>
import Nav from '../Components/Nav'

export default {
    components:{Nav}
}
</script>
