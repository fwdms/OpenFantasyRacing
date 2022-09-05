<template>
  <Header title='UI Test Area' />
  <PageHeader title='UI Test Area' />
  
  <div class='mt-8 mb-4'>
    <p class='text-center my-4'>
      If you are here, you are probably a developer working on some front end components!
      Thank you, and congratulations! <br>
      I've been working very hard to make the font end components very easy to use,
      and I needed an area where I could do that.<br>
      This is that area! Yes, I know Storybook is a thing.
    </p>
  </div>
  
  <div class='mx-4'>
    <Alert errors='This is what the alert bar looks like.' />
  </div>
  
  <div class='my-4'>
    <TabBar :tabs='tabs' />
  </div>
  
  <div class='flex flex-wrap items-center justify-center my-4'>
    
    <Combobox label='Driver' :options='props.drivers' v-model='combobox' />
    <SelectMenu label='Select Menu' :options='drivers' v-model='selectMenu' />
    
    <Input label='Test Input' v-model='input' />
    <Input label='Test Input' :required='true' v-model='input' />
    
    <Toggle label='Boolean' v-model='toggleRef' />
    <Checkbox label='Checkbox' v-model='checkbox' />
    
    <Button @click='buttonClicked()'>Test Button</Button>
    <Button v-if='modalOpen === false' @click='modalOpen = !modalOpen'>
      Activate Modal
    </Button>
    <Button v-else @click='modalOpen = !modalOpen'>
      Close Modal
    </Button>
  </div>
  
  <hr class='my-4'>
  
  <p class='text-center'>
    This is an area to show you all of the bound data, so you can see how this is working in real time. <br>
    This is set up this way because in production, you don't have access to VueDevTools.
  </p>
  
  <div class='mx-4 mt-4'>
    <p class='my-4'> Input = {{ input }}</p>
    <p class='my-4'> Button = {{ button }}</p>
    <p class='my-4'> Toggle = {{ toggleRef }}</p>
    <p class='my-4'> Checkbox = {{ checkbox }}</p>
    <p class='my-4'> Modal = {{ modalOpen }}</p>
    <p class='my-4'> Select Menu = {{ selectMenu }}</p>
    <p class='my-4'> Combobox = {{ combobox }}</p>
  </div>
  
  <div>
    <Modal title='Test Modal' v-model='modalOpen'>
      <p class='mx-16'>Modal Works!</p>
      <Button class='my-8' @click='modalOpen = !modalOpen'> Close Modal</Button>
    </Modal>
  </div>
</template>

<script setup>
  import { ref, defineProps } from 'vue'
  import Combobox from '@/Components/Form/Combobox.vue'
  import Toggle from '@/Components/Form/Toggle.vue'
  import Input from '@/Components/Form/Input.vue'
  import Button from '@/Components/Form/Button.vue'
  import PageHeader from '@/Components/PageHeadings/PageHeader.vue'
  import Modal from '@/Components/Overlays/Modal.vue'
  import Checkbox from '@/Components/Form/Checkbox.vue'
  import SelectMenu from '@/Components/Form/SelectMenu.vue'
  import TabBar from '@/Components/Navigation/TabBar.vue'
  import Alert from '@/Components/Feedback/Alert.vue'
  
  const props = defineProps([
    'drivers'
  ])
  
  const combobox = ref('')
  const input = ref('Test Input')
  const toggleRef = ref(true)
  const button = ref('')
  const checkbox = ref(true)
  const selectMenu = ref()
  const modalOpen = ref(false)
  
  const tabs = [
    {
      name: 'Not Selected',
      href: '#',
      current: false
    },
    {
      name: 'Selected',
      href: '#',
      current: true
    }
  ]
  
  function buttonClicked() {
    button.value = 'clicked'
    setTimeout(() => {
      button.value = ''
    }, 1000)
  }
</script>

<script>
  import Admin from '@/Layouts/Admin.vue'
  
  export default {
    layout: Admin
  }
</script>