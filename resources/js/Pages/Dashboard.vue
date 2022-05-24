<template>
    <Head title="Dashboard" />
    <PageHeader title="Dashboard" />
    <!-- <BreadcrumbBar :pages="pages"/> -->

    <FantasyTeamsTable :fantasy_teams='fantasy_teams' />
    <!-- <Stats /> -->

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