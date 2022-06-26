<template>
  <div class="py-8 lg:py-12 bg-white my-8 mx-6 lg:m-14 rounded-lg">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="lg:text-center">
        <p class="mt-2 text-3xl leading-8 font-extrabold tracking-tight text-gray-900 sm:text-4xl">A better way to play</p>
        <p class="mt-4 max-w-2xl text-xl text-gray-500 lg:mx-auto">
            Built using the same mentality as other Fantasy Sports. <br>Starting with Formula 1 & W Series, but soon with other Motorsports.
        </p>
      </div>

      <div class="mt-10">
        <dl class="space-y-10 md:space-y-0 md:grid md:grid-cols-2 md:gap-x-8 md:gap-y-10">
          <div v-for="feature in features" :key="feature.name" class="relative">
            <dt>
              <div class="absolute flex items-center justify-center h-12 w-12 rounded-md bg-orange-600 text-white">
                <component :is="feature.icon" class="h-6 w-6" aria-hidden="true" />
              </div>
              <p class="ml-16 text-lg leading-6 font-medium text-gray-900">{{ feature.name }}</p>
            </dt>
            <dd class="mt-2 ml-16 text-base text-gray-500">
              {{ feature.description }}
            </dd>
          </div>
        </dl>
      </div>
      
    </div>
  </div>
</template>

<script>
  import { AnnotationIcon, ArrowsExpandIcon, CashIcon, LightningBoltIcon } from '@heroicons/vue/outline'

  const features = [
    {
      name: 'Set your own rules',
      description:
        'Want a different set of rules other than the default rules set up by other Fantasy Leagues? Here we offer "Fantasy Modes", these different modes will allow you to set which rules you want your league to follow!',
      icon: ArrowsExpandIcon,
    },
    {
      name: 'No hidden fees',
      description:
        'The goal is for OpenFantasyRacing.com to be free, & supported by donations. Please, if you like this project, donate & help us work on OpenFantasyRacing.com full time.',
      icon: CashIcon,
    },
    {
      name: 'Developed by you',
      description:
        'We dislike not having a say in how Fantasy Leagues should work, we promise to take your requests & figure out how to make them a reality. Keep in mind this project is in active delevelopment, with 1 person, as time permits.',
      icon: LightningBoltIcon,
    },
    {
      name: 'Open to suggestion',
      description:
        'Play with Leagues often forgotten by other Fantasy Leagues. Help us to develop & grow to support the type of racing you want to create a Fantasy League around.',
      icon: AnnotationIcon,
    },
  ]

  export default {
    setup() {
      return {
        features,
      }
    },
  }
</script>