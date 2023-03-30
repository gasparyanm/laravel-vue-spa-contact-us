<template>
    <tr>
        <td
            v-for="(column, index) in columns"
            :key="index"
            style="text-align: center"
        >
            {{ item[column]}}
        </td>
    </tr>
</template>

<script>
export default {
    name: "TableBody",
    props: {
        item: {
            type: Object,
            required: true,
        },
        columns: {
            type: Array,
            required: true,
        }
    }
}
</script>

<style scoped>

</style>
