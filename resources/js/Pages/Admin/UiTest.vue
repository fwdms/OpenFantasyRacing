<script>
    import Admin from '@/Layouts/Admin.vue'

    export default {
    layout: Admin,
    }
</script>

<script setup>
    import {ref} from 'vue'
    import Combobox from '@/Shared/Form/Combobox.vue'
    import Toggle from '@/Shared/Form/Toggle.vue'
    import Input from '@/Shared/Form/Input.vue'
    import Button from '@/Shared/Form/Button.vue'
    import PageHeader from '@/Shared/PageHeadings/PageHeader.vue'
    import Modal from '@/Shared/Overlays/Modal.vue'
    import Checkbox from '@/Shared/Form/Checkbox.vue'
    import SelectMenu from '@/Shared/Form/SelectMenu.vue'
    import TabBar from '@/Shared/Navigation/TabBar.vue'
    import Alert from '@/Shared/Feedback/Alert.vue'

    const props = defineProps([
        'drivers'
    ])

    const combobox = ref(props.drivers[0])
    const selectMenu = ref(props.drivers[1])
    const input = ref('Test Input')
    const numInput = ref(10)
    const toggleRef = ref(true)
    const button = ref('')
    const checkbox = ref(true)
    const modalOpen = ref(false)

    const tabs = [
    {
        name: 'Not Selected',
        href: '#',
        current: false,
    },
    {
        name: 'Selected',
        href: '#',
        current: true,
    },
    {
        name: 'Not Selected',
        href: '#',
        current: false,
    },
    {
        name: 'Not Selected',
        href: '#',
        current: false,
    },
    {
        name: 'Not Selected',
        href: '#',
        current: false,
    },
    ]

    function buttonClicked() {
        button.value = 'clicked'
        setTimeout(() => {
            button.value = ''
        }, 1000)
    }
</script>

<template>
  <Header title="UI Test Area"/>
  <PageHeader title="UI Test Area"/>

  <div class="mt-8 mb-4">
    <p class="text-center my-4">
      If you are here, you are probably a developer working on some front end
      components! Thank you, and congratulations! <br/>
      I've been working very hard to make the font end components very easy to
      use, and I needed an area where I could do that.<br/>
      This is that area! Yes, I know Storybook is a thing.
    </p>
  </div>

  <div class="mx-4">
    <Alert errors="This is what the alert bar looks like."/>
  </div>

  <div class="my-4">
    <TabBar :tabs="tabs"/>
  </div>

  <div class="flex flex-wrap items-center justify-center my-4">
    <Input
        label="Input"
        v-model="input"
    />
    
    <Input
        label="Input"
        :required="true"
        v-model="input"
    />
    
    <Input
        label="Input"
        type="number"
        v-model="numInput"
    />

    <Toggle
        label="Toggle"
        v-model="toggleRef"
    />
    <Checkbox
        label="Checkbox"
        v-model="checkbox"
    />

    <Button @click="buttonClicked()">
        Button
    </Button>
    
    <Button
        v-if="modalOpen === false"
        @click="modalOpen = !modalOpen"
    >
      Activate Modal
    </Button>

    <Button
        v-else
        @click="modalOpen = !modalOpen"
    >
      Close Modal
    </Button>

    <Combobox
        label="Combobox"
        :options="props.drivers"
        :keys="[
            'first_name', 
            'last_name',
        ]"
        :inputDisplay = "[
            'first_name',
            'last_name',
        ]"
        v-model="combobox"
    >
        <template #option="{ option }">
           {{ option.first_name + ' ' + option.last_name }} 
        </template> 
    </Combobox>
    

    <SelectMenu
        label="Select Menu"
        :options="drivers"
        v-model="selectMenu"
    />
  </div>

  <hr class="my-4"/>

  <p class="text-center">
    This is an area to show you all of the bound data, so you can see how this
    is working in real time. <br/>
    This is set up this way because in production, you don't have access to
    VueDevTools.
  </p>

  <div class="flex flex-wrap gap-x-4 justify-center mx-4 mt-4">
    <p class="my-4">
      <span class="text-red-600">Input :</span> {{ input }} (
      {{ typeof input }} )
    </p>
    
    <p class="my-4">
      <span class="text-red-600">Number Input :</span>
      {{ numInput }} ( {{ typeof numInput }} )
    </p>
    
    <p class="my-4"><span class="text-red-600">Button : </span> 
        {{ button }}
    </p>
    
    <p class="my-4">
      <span class="text-red-600">Toggle : </span> {{ toggleRef }}
    </p>
    
    <p class="my-4">
      <span class="text-red-600">Checkbox : </span> {{ checkbox }}
    </p>
    
    <p class="my-4">
      <span class="text-red-600">Modal : </span> {{ modalOpen }}
    </p>
  </div>

  <div class="mx-4 mt-4">
    <p class="my-4">
      <span class="text-red-600">Combobox : </span> {{ combobox }}
    </p>

    <p class="my-4">
      <span class="text-red-600">Select Menu : </span> {{ selectMenu }}
    </p>
  </div>

  <div>
    <Modal
        title="Test Modal"
        v-model="modalOpen"
    >
      <p class="mx-16">Modal Works!</p>
      <Button
          class="my-8"
          @click="modalOpen = !modalOpen"
      >
        Close Modal
      </Button
      >
    </Modal>
  </div>
</template>