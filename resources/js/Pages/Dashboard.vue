<template>
    <Head title="Dashboard" />
    <PageHeader title="Dashboard" />
    <BreadcrumbBar :pages="pages"/>

    <!-- <div class=""> -->
      <FantasyTeamsTable :fantasy_teams='fantasy_teams' />
      <!-- <stats /> -->
    <!-- </div> -->
</template>

<script setup>
  import Stats from "@/Components/DataDisplay/Stats"
  import FantasyTeamsTable from "@/Components/Lists/FantasyTeamsTable"
  import PageHeader from "@/Components/PageHeadings/PageHeader"
  import BreadcrumbBar from "@/Components/Navigation/BreadcrumbBar";

  defineProps({
      title: String,
      description: String,
      rules: Array,
      fantasy_teams: Array
  })

  const pages = [
    { name: 'Dashboard', href: '/dashboard', current: true }
  ]
</script>