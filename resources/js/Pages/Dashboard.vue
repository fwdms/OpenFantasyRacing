<template>
    <Head title="Dashboard" />

    <PageHeader title="Dashboard" />

    <!-- <BreadcrumbBar :pages="pages"/> -->

    <FantasyTeamsTable :fantasy_teams='fantasy_teams' />

    <!-- <Stats /> -->
</template>

<script setup>
  import FantasyTeamsTable from "@/Components/Tables/FantasyTeamsTable.vue"
  import PageHeader from "@/Components/PageHeadings/PageHeader.vue"

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