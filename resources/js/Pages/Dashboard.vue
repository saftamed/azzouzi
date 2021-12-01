<template>
    <app-layout title="Dashboard">
        <div class="container mx-auto px-4 mt-16">
            <div class="mb-5">
                <h1 class="text-gray-800 text-5xl font-semibold ">
                   Min Stocks Elements
                </h1>
            </div>
            <div class="flex flex-col">
                <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                    <div
                        class="
                            py-2
                            align-middle
                            inline-block
                            min-w-full
                            sm:px-6
                            lg:px-8
                        "
                    >
                        <div
                            class="
                                shadow
                                overflow-hidden
                                border-b border-gray-200
                                sm:rounded-lg
                            "
                        >
                            <table
                                class="min-w-full divide-y divide-gray-200"
                                id="tt"
                            >
                                <thead class="bg-gray-50">
                                    <tr>
                                        <th
                                            scope="col"
                                            class="
                                                px-6
                                                py-3
                                                text-left text-xs
                                                font-medium
                                                text-gray-500
                                                uppercase
                                                tracking-wider
                                            "
                                        >
                                            Name
                                        </th>
                                        <th
                                            scope="col"
                                            class="
                                                px-6
                                                py-3
                                                text-left text-xs
                                                font-medium
                                                text-gray-500
                                                uppercase
                                                tracking-wider
                                            "
                                        >
                                            Discription
                                        </th>
                                        <th
                                            scope="col"
                                            class="
                                                px-6
                                                py-3
                                                text-left text-xs
                                                font-medium
                                                text-gray-500
                                                uppercase
                                                tracking-wider
                                            "
                                        >
                                            Qté
                                        </th>

                                        <th
                                            scope="col"
                                            class="
                                                px-6
                                                py-3
                                                text-left text-xs
                                                font-medium
                                                text-gray-500
                                                uppercase
                                                tracking-wider
                                            "
                                        >
                                            Last Change
                                        </th>
                                    </tr>
                                </thead>
                                <tbody
                                    class="bg-white divide-y divide-gray-200"
                                >
                                    <tr v-for="e in stock" :key="e.id">
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="flex items-center">
                                                <div class="ml-4">
                                                    <div
                                                        class="
                                                            text-sm
                                                            font-medium
                                                            text-gray-900
                                                        "
                                                    >
                                                        {{ e.name }}
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="text-sm text-gray-500">
                                                {{ e.disc }}
                                            </div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="text-sm text-gray-500">
                                                {{ e.qte }}
                                            </div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="text-sm text-gray-500">
                                                {{ e.updated_at }}
                                            </div>
                                        </td>


                                    </tr>
                                    <!-- More people... -->
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container mx-auto px-4 mt-16 mb-5">
            <div class="mb-5">
                <h1 class="text-gray-800 text-5xl font-semibold ">
                    Last Maintenance saved
                </h1>
            </div>
            <div class="flex flex-col">
                <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                    <div
                        class="
                            py-2
                            align-middle
                            inline-block
                            min-w-full
                            sm:px-6
                            lg:px-8
                        "
                    >
                        <div
                            class="
                                shadow
                                overflow-hidden
                                border-b border-gray-200
                                sm:rounded-lg
                            "
                        >
                            <table
                                class="min-w-full divide-y divide-gray-200"
                                id="t5t"
                            >
                                <thead class="bg-gray-50">
                                    <tr>
                                        <th
                                            scope="col"
                                            class="
                                                px-6
                                                py-3
                                                text-left text-xs
                                                font-medium
                                                text-gray-500
                                                uppercase
                                                tracking-wider
                                            "
                                        >
                                            Machine Numbre
                                        </th>
                                        <th
                                            scope="col"
                                            class="
                                                px-6
                                                py-3
                                                text-left text-xs
                                                font-medium
                                                text-gray-500
                                                uppercase
                                                tracking-wider
                                            "
                                        >
                                            Discription
                                        </th>
                                        <th
                                            scope="col"
                                            class="
                                                px-6
                                                py-3
                                                text-left text-xs
                                                font-medium
                                                text-gray-500
                                                uppercase
                                                tracking-wider
                                            "
                                        >
                                            Machine Type
                                        </th>

                                        <th
                                            scope="col"
                                            class="
                                                px-6
                                                py-3
                                                text-left text-xs
                                                font-medium
                                                text-gray-500
                                                uppercase
                                                tracking-wider
                                            "
                                        >
                                            Last Change
                                        </th>
                                    </tr>
                                </thead>
                                <tbody
                                    class="bg-white divide-y divide-gray-200"
                                >
                                    <tr v-for="ee in main" :key="ee.id+20">
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="flex items-center">
                                                <div class="ml-4">
                                                    <div
                                                        class="
                                                            text-sm
                                                            font-medium
                                                            text-gray-900
                                                        "
                                                    >
                                                        {{ ee.machine.numbre }}
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="text-sm text-gray-500">
                                                {{ ee.disc }}
                                            </div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="text-sm text-gray-500">
                                                {{ ee.machine.type_id }}
                                            </div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="text-sm text-gray-500">
                                                {{ ee.updated_at }}
                                            </div>
                                        </td>


                                    </tr>
                                    <!-- More people... -->
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </app-layout>
</template>

<script>
    import { defineComponent } from 'vue'
    import AppLayout from '@/Layouts/AppLayout.vue'

    export default defineComponent({
        components: {
            AppLayout,
        },methods:{
            ff(){
                this.$inertia.visit("/w/1")
            }
        },props:{
            stock:Object,
            main:Object
        }
    })
</script>
