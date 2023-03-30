<template>
  <div>
    <h2>
      <router-link :to="{ name : 'contact-us.create' }">
        Back To Create
      </router-link>
      ContactUs List
    </h2>
    <div style="overflow-x: auto;">
      <table>
        <table-header
            :columns="columns"
        />
        <table-body
            v-for="(column, index) in list"
            :columns="columns"
            :item="column"
            :key="index"
        />
      </table>
    </div>
  </div>
</template>

<script>
import {mapState} from 'vuex';
import TableHeader from "../../components/TableHeader";
import TableBody from "../../components/TableBody";

export default {
    name: "Index",
  components: {TableBody, TableHeader},
  data: () => ({
        columns:['name', 'email', 'subject', 'content'],
    }),
    computed: {
      ...mapState({
        list: state => state.contactUs.list
      })
    }
}
</script>

<style scoped>
  table {
    border-collapse: collapse;
    width: 100%;
  }

  th, td {
    text-align: left;
    padding: 8px;
  }

  tr:nth-child(even) {background-color: #f2f2f2;}
</style>
