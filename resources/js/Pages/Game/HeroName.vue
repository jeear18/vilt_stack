<template>
    <div class="text-2xl font-bold"> Hero Name
        <span> : {{ game.Mobile_Legend	 }} </span>      
    </div> 
    <div class="text-2xl font-bold"> Hero Name
        <span> : {{ game.CoD	 }} </span>      
    </div> 
    <div class="text-2xl font-bold"> Hero Name
        <span> : {{ game.Wildrift	 }} </span>      
    </div> 
        
    <!-- <span>
        {{ game.Mobile_Legend	 }} {{ game.CoD }}, {{ game.Wildrift }}
    </span> -->
</template>

<script setup>  
    defineProps({
        game: Object,
    })
</script>