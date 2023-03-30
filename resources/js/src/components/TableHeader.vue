<template>
    <tr>
        <th v-for="(column, index) in columns" :key="index">
            <span>{{ column.toUpperCase() }}</span>
        </th>
    </tr>
</template>

<script>
export default {
    name: "TableHeader",
    props: {
        columns: {
            type: Array,
            required: true,
        }
    }
}
</script>

<style scoped>

</style>
