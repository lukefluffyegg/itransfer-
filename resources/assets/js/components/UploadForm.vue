<template>
    <div class="dragandrop">
        <input type="file" name="files[]" id="file" class="dragandrop__input" multiple>
        <label for="file" class="dragandrop__header">
            <strong>Drag files here</strong> or click to select files
        </label>
    </div>
</template>


<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>

<style scoped>
    .dragandrop {
        --dragandrop-min-height: 200px;
        width:100%;
        min-height: var(--dragandrop-min-height);
        background-color:#f8f8f8;
        position: relative;
        border: 3px dashed rgba(0, 0, 0, .2);
    }

    .dragandrop__input {
        display: none;
    }

    .dragandrop__header {
        display: block;
        font-size: 1.1em;
        color:#555;
        vertical-align: middle;
        text-align: center;
        margin: calc(var(--dragandrop-min-height) / 2) 20px;
    }

    .dragandrop__header:hover {
        text-decoration: underline;
        cursor: pointer;
    }

    .dragandrop__header--compact {
        margin: calc(var(--dragandrop-min-height) / 4) 20px;
    }


</style>