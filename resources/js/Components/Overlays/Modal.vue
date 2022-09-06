<template>
  <TransitionRoot as='template' @click='toggleModal()' :show='props.modelValue'>
    <Dialog as='div' class='relative z-10'>
      <TransitionChild as='template' enter='ease-out duration-300' enter-from='opacity-0' enter-to='opacity-100'
                       leave='ease-in duration-200' leave-from='opacity-100' leave-to='opacity-0'
      >
        <div class='fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity' />
      </TransitionChild>
      
      <div class='fixed z-10 inset-0 overflow-y-auto'>
        <div class='flex items-end sm:items-center justify-center min-h-full p-4 text-center sm:p-0 '>
          <TransitionChild as='template' enter='ease-out duration-300'
                           enter-from='opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95'
                           enter-to='opacity-100 translate-y-0 sm:scale-100' leave='ease-in duration-200'
                           leave-from='opacity-100 translate-y-0 sm:scale-100'
                           leave-to='opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95'
          >
            <DialogPanel
              class='relative bg-white rounded-lg px-4 py-4 text-left shadow-xl transform transition-all sm:my-8 sm:p-6'
            >
              <div class='mt-3 text-center sm:mt-5'>
                <DialogTitle as='h3' class='text-lg leading-6 font-medium text-gray-900'>
                  {{ title }}
                </DialogTitle>
                <div class='mt-2'>
                  
                  <slot />
                
                </div>
              </div>
            </DialogPanel>
          </TransitionChild>
        </div>
      </div>
    </Dialog>
  </TransitionRoot>
</template>

<script setup>
  import { Dialog, DialogPanel, DialogTitle, TransitionChild, TransitionRoot } from '@headlessui/vue'
  
  const props = defineProps({
    title: String,
    modelValue: {
      type: Boolean,
      default: false
    }
  })
  
  const emit = defineEmits([
    'update:open'
  ])
  
  function toggleModal() {
    emit('update:open', props.modalValue = false)
  }
</script>