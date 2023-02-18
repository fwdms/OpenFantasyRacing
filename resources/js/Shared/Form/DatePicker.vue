<script setup>
    import {computed} from 'vue'
    import Label from '@/Shared/Form/Label.vue'

    const props = defineProps({
        label: String,
        required: Boolean,
        modelValue: String | Number,
        errors: String,
        min: String | Object,
        max: String | Object,
        type: {
            type: String,
            default: 'text',
        },
    })

    const emit = defineEmits(['update:modelValue'])

    const name = computed(() => props.label.toLowerCase())

    const inputValue = computed({
        get() {
            return props.modelValue
        },
        set(value) {
            emit('update:modelValue', value)
        },
    })
</script>

<template>
    <div class="my-2 mx-2">
        <div class="flex justify-between">
            <Label :for="name">
                {{ props.label }}
            </Label>

            <Label class="text-sm text-gray-400" v-if="required">
                Required
            </Label>
        </div>

        <div class="mt-1">
            <input 
                class="
                    w-full border-gray-300 rounded-md shadow-sm placeholder-gray-400 
                    focus:ring-orange-500 focus:border-orange-500 sm:text-sm
                "
                type="date" 
                :id="props.label" 
                :name="props.label"
                :min="props.min" 
                :max="props.max"
                v-model="inputValue"
            />
        </div>

        <p class="mt-2 text-orange-600">
            {{ errors }}
        </p>
    </div>
</template>