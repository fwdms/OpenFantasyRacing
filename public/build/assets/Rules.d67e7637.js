import{_ as f}from"./PageHeader.191a9e65.js";import{_ as u}from"./Table.b69d58e6.js";import{o,c as h,w,b as r,e as m,d as s,t as a,F as c,l as b,r as g,a as t}from"./app.e65882d1.js";/* empty css            */const y={class:"whitespace-nowrap py-4 w-96 pl-4 pr-3 text-center text-sm font-medium text-gray-900 sm:pl-6"},v={class:"whitespace-nowrap px-3 w-96 py-4 text-center text-sm text-gray-500"},C={class:"whitespace-nowrap px-3 py-4 text-sm text-center text-gray-500"},n={__name:"PointsTable",props:{title:String,description:String,points:Array,notes:String},setup(e){const l=["Name","Points Awarded","Description"];return(p,d)=>(o(),h(u,{title:e.title,description:e.description,headers:l,footnote:e.notes},{default:w(()=>[(o(!0),r(c,null,m(e.points,i=>(o(),r("tr",{key:i.id},[s("td",y,a(i.title),1),s("td",v,a(i.points_amount)+" pts ",1),s("td",C,a(i.description),1)]))),128))]),_:1},8,["title","description","footnote"]))}},A={__name:"Rules",props:{qualifyingPoints:Array,qualifyingBonusPoints:Array,racePoints:Array,raceBonusPoints:Array,streaks:Array,sprint:Array,sprintBonus:Array},setup(e){return b({name:""}),(l,p)=>{const d=g("Head");return o(),r(c,null,[t(d,{title:"Scoring / Rules"}),t(f,{title:"Scoring / Rules"}),t(n,{title:"Qualifing Points",description:"How to get points for Qualifying",points:e.qualifyingPoints,notes:`* Cars that are not entered into the Qualifying session will be neither Classified nor Not Classified, and will not receive
                points for either event type. Classifications are based on FIA decisions.`},null,8,["points"]),t(n,{title:"Qualifying Bonus Points",description:"How to get bonus points for Qualifying",points:e.qualifyingBonusPoints},null,8,["points"]),t(n,{title:"Racing Points",description:"How to get points for Race Day",points:e.racePoints,notes:`* Race Positions Gained: Race positions gained are relative to Qualifying finishing position or Sprint finishing position
                where applicable.

                ** Classification: Cars that have covered 90% of the number of laps covered by the winner (rounded down to the nears
                whole number of laps) will be deemed to be Classified. Cars that have covered less than 90% of the number of laps
                covered by the winner (rounded down to the nearest whole number of laps) will be deemed to be Not Classified. Cars that
                are not listed on the Race Starting Grid will be neither Classified nor Not Classified, and will not receive points for either
                event type. Classifications are based on FIA decisions.`},null,8,["points"]),t(n,{title:"Racing Bonus Points",description:"How to get bonus points for Race Day",points:e.raceBonusPoints},null,8,["points"]),t(n,{title:"Streaks",description:"How to get bonus points from Sreaks",points:e.streaks,notes:`
                * When a driver or constructor achieves a streak, that streak will reset and must be built up again. For example: A driver
                achieves five top tens in a row and will be awarded a streak, but must achieve another five top tens in a row to get streak
                points for a second time.
            
                ** Sprint is excluded from Streaks calculations
            `},null,8,["points"]),t(n,{title:"Sprints",description:"How to get bonus points from Sreaks",points:e.sprint,notes:`
                * Sprint Positions Gained: Sprint positions gained are relative to Qualifying finishing position.

                ** Classification: Cars that have covered 90% of the number of laps covered by the winner (rounded down to the nears
                whole number of laps) will be deemed to be Classified. Cars that have covered less than 90% of the number of laps
                covered by the winner (rounded down to the nearest whole number of laps) will be deemed to be Not Classified. Cars that
                are not listed on the Sprint Starting Grid will be neither Classified nor Not Classified, and will not receive points for either
                event type. Classifications are based on FlA decisions.

                *** Sprint is excluded from Streaks calculations.
            `},null,8,["points"]),t(n,{title:"Sprints Bonus",description:"How to get bonus points from Sreaks",points:e.sprintBonus,notes:`
                * Sprint Positions Gained: Sprint positions gained are relative to Qualifying finishing position.

                ** Classification: Cars that have covered 90% of the number of laps covered by the winner (rounded down to the nears
                whole number of laps) will be deemed to be Classified. Cars that have covered less than 90% of the number of laps
                covered by the winner (rounded down to the nearest whole number of laps) will be deemed to be Not Classified. Cars that
                are not listed on the Sprint Starting Grid will be neither Classified nor Not Classified, and will not receive points for either
                event type. Classifications are based on FlA decisions.

                *** Sprint is excluded from Streaks calculations.
            `},null,8,["points"])],64)}}};export{A as default};
