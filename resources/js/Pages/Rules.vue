<template>
    <Head title="Scoring / Rules" />

    <Tabs 
        title = "Scoring / Rules"
        :tabs = tabs
    />
    
    <div v-if="true == true">
        <points-table 
            title="Qualifing Points" 
            description="How to get points for Qualifying"
            :points=qualifyingPoints
            notes="* Cars that are not entered into the Qualifying session will be neither Classified nor Not Classified, and will not receive
                points for either event type. Classifications are based on FIA decisions."
        />

        <points-table 
            title="Qualifying Bonus Points" 
            description="How to get bonus points for Qualifying"
            :points=qualifyingBonusPoints
        />

        <points-table 
            title="Racing Points" 
            description="How to get points for Race Day"
            :points=racePoints
            notes="* Race Positions Gained: Race positions gained are relative to Qualifying finishing position or Sprint finishing position
                where applicable.

                ** Classification: Cars that have covered 90% of the number of laps covered by the winner (rounded down to the nears
                whole number of laps) will be deemed to be Classified. Cars that have covered less than 90% of the number of laps
                covered by the winner (rounded down to the nearest whole number of laps) will be deemed to be Not Classified. Cars that
                are not listed on the Race Starting Grid will be neither Classified nor Not Classified, and will not receive points for either
                event type. Classifications are based on FIA decisions."
        />

        <points-table 
            title="Racing Bonus Points" 
            description="How to get bonus points for Race Day"
            :points=raceBonusPoints
        />

        <points-table 
            title="Streaks" 
            description="How to get bonus points from Sreaks"
            :points=streaks
            notes="
                * When a driver or constructor achieves a streak, that streak will reset and must be built up again. For example: A driver
                achieves five top tens in a row and will be awarded a streak, but must achieve another five top tens in a row to get streak
                points for a second time.
            
                ** Sprint is excluded from Streaks calculations
            "
        />

        <points-table 
            title="Sprints" 
            description="How to get bonus points from Sreaks"
            :points=sprint
            notes="
                * Sprint Positions Gained: Sprint positions gained are relative to Qualifying finishing position.

                ** Classification: Cars that have covered 90% of the number of laps covered by the winner (rounded down to the nears
                whole number of laps) will be deemed to be Classified. Cars that have covered less than 90% of the number of laps
                covered by the winner (rounded down to the nearest whole number of laps) will be deemed to be Not Classified. Cars that
                are not listed on the Sprint Starting Grid will be neither Classified nor Not Classified, and will not receive points for either
                event type. Classifications are based on FlA decisions.

                *** Sprint is excluded from Streaks calculations.
            "
        />

        <points-table 
            title="Sprints Bonus" 
            description="How to get bonus points from Sreaks"
            :points=sprintBonus
            notes="
                * Sprint Positions Gained: Sprint positions gained are relative to Qualifying finishing position.

                ** Classification: Cars that have covered 90% of the number of laps covered by the winner (rounded down to the nears
                whole number of laps) will be deemed to be Classified. Cars that have covered less than 90% of the number of laps
                covered by the winner (rounded down to the nearest whole number of laps) will be deemed to be Not Classified. Cars that
                are not listed on the Sprint Starting Grid will be neither Classified nor Not Classified, and will not receive points for either
                event type. Classifications are based on FlA decisions.

                *** Sprint is excluded from Streaks calculations.
            "
        />
    </div>
</template>

<script setup>
    import PointsTable from '@/Components/Lists/PointsTable'
    import Tabs from '@/Components/Navigation/Tabs'

    defineProps({
        qualifyingPoints: Array,
        qualifyingBonusPoints: Array,
        racePoints: Array,
        raceBonusPoints: Array,
        streaks: Array,
        sprint: Array,
        sprintBonus: Array,
    });

    const tabs = [
        {
            name: 'Scoring Points',
            href: '#',
            current: true
        },
        {
            name: 'Rules',
            href: '#',
            current: false
        }
    ]
</script>
