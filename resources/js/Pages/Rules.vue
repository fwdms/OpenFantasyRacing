<template>
    <Head title="Rules" />
    <rules-table 
        title="Qualifing Points" 
        description="How to get points for Qualifying"
        :rules=qualifyingPoints
        notes=""
    />
    <rules-table 
        title="Qualifying Bonus Points" 
        description="How to get bonus points for Qualifying"
        :rules=qualifyingBonusPoints
    />
    <rules-table 
        title="Racing Points" 
        description="How to get points for Race Day"
        :rules=racePoints
        notes="* Race Positions Gained: Race positions gained are relative to Qualifying finishing position or Sprint finishing position
                where applicable.
                ** Classification: Cars that have covered 90% of the number of laps covered by the winner (rounded down to the nears
                whole number of laps) will be deemed to be Classified. Cars that have covered less than 90% of the number of laps
                covered by the winner (rounded down to the nearest whole number of laps) will be deemed to be Not Classified. Cars that
                are not listed on the Race Starting Grid will be neither Classified nor Not Classified, and will not receive points for either
                event type. Classifications are based on FIA decisions."
    />
    <rules-table 
        title="Racing Bonus Points" 
        description="How to get bonus points for Race Day"
        :rules=raceBonusPoints
    />
    <rules-table 
        title="Streaks" 
        description="How to get bonus points from Sreaks"
        :rules=streaks
        notes="
            * When a driver or constructor achieves a streak, that streak will reset and must be built up again. For example: A driver
            achieves five top tens in a row and will be awarded a streak, but must achieve another five top tens in a row to get streak
            points for a second time.
        
            ** Sprint is excluded from Streaks calculations
        "
    />
</template>

<script setup>
    import RulesTable from '@/Components/Lists/RulesTable'

    defineProps({
        qualifyingPoints: Array,
        qualifyingBonusPoints: Array,
        racePoints: Array,
        raceBonusPoints: Array,
        streaks: Array
    });
</script>
