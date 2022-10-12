<template>
  <div class='flex flex-wrap justify-center items-center mt-4'>
    <Input label='First Name' v-model='form.first_name' />
    <p>{{ form.errors.first_name }}</p>
    
    <Input label='Last Name' v-model='form.last_name' />
    
    <Input label='Number' type='number' v-model='form.number' />
    
    <SelectMenu
      label='Franchise'
      :options='franchises'
      v-model='form.franchise'
      @change='getConstructors()'
    />
    
    <SelectMenu
      label='Constructor'
      :options='constructors'
      v-model='form.constructor'
    />
    
    <Toggle label='Rookie' v-model='form.is_rookie' />
  </div>
  
  <div class='flex flex-wrap justify-center items-center'>
    <Button v-if='props.driver' @click='updateDriver()'>
      Update
    </Button>
    
    <Button v-else @click='saveDriver()'>
      Save
    </Button>
  </div>
</template>

<script setup>
  import { ref } from 'vue'
  import { useForm } from '@inertiajs/inertia-vue3'
  import { Inertia } from '@inertiajs/inertia'
  import Input from '@/Components/Form/Input.vue'
  import Toggle from '@/Components/Form/Toggle.vue'
  import SelectMenu from '@/Components/Form/SelectMenu.vue'
  import Button from '@/Components/Form/Button.vue'
  
  const props = defineProps([
    'franchises'
  ])
  
  const form = useForm({
    id: '',
    number: '',
    franchise: {},
    first_name: '',
    last_name: '',
    constructor: {},
    is_rookie: false
  })
  
  const constructors = ref({})
  
  function getConstructors() {
    Inertia.get(route('constructors.index.collection', { franchise: form.franchise.slug }),
      {},
      {
        onSuccess: (res) => console.log(res)
      })
  }
  
  function saveDriver() {
    form.post(route('admin.driver.store'), {
      onSuccess: () => form.reset()
    })
  }
  
  function updateDriver() {
    form.put(route('admin.driver.update', { driver: form.id }))
  }
</script>