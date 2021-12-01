<template>
    <app-layout title="Machine Types">
        <div class="max-w-6xl mx-auto sm:px-6 lg:px-8 relative">
             <button
                            @click="show=true"
                                class="
                                    bg-blue-500
                                    hover:bg-blue-700
                                    text-white
                                    font-bold
                                    py-2
                                    px-4
                                    rounded-full
                                    absolute
                                    top-2 right-2
                                "
                            >
                                Add New Machine Type
                            </button>
            <div class="grid grid-cols-1 md:grid-cols-4">
                <div v-for="type in types" :key="type.id" >
                    <div
                        class="
                            my-20
                            px-4
                            py-6
                            transform
                            transition
                            duration-500
                            hover:scale-125
                        "
                        @click="detaile(type.id)"
                    >

                            <div
                                class="
                                    max-w-sm
                                    rounded
                                    overflow-hidden
                                    shadow-lg
                                "
                            >
                                <div class="px-6 py-4">
                                    <div class="font-bold mb-2 text-2xl">
                                        {{ type.nom }}
                                    </div>
                                    <p class="text-gray-700 text-base">
                                        Lorem ipsum dolor sit amet, consectetur
                                        adipisicing elit. Voluptatibus quia,
                                        Nonea! Maiores et perferendis eaque,
                                        exercitationem praesentium nihil.
                                    </p>
                                    <div class="text-base">
                                        <span class="font-bold"
                                            >Referance :</span
                                        >
                                        {{ type.ref }}
                                    </div>
                                    <div class="text-base">
                                        <span class="font-bold"
                                            >Fournisseur : </span
                                        >{{ type.fournisseur }}
                                    </div>
                                </div>
                            </div>

                    </div>
                </div>
            </div>
        </div>

                <!-- This example requires Tailwind CSS v2.0+ -->
<div  v-if="show" class="fixed z-10 inset-0 overflow-y-auto" aria-labelledby="modal-title" role="dialog" aria-modal="true">
  <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">

    <div @click="show=false" class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity" aria-hidden="true"></div>

    <!-- This element is to trick the browser into centering the modal contents. -->
    <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>
    <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full">
      <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
        <div class="">

          <div class="mt-3 text-center  sm:text-left">
<label class="block text-gray-700 text-lg font-bold mb-2" >
        New Type
      </label>
  <form class="bg-white rounded px-8 pt-6 pb-1">
    <div class="mb-4">
      <label class="block text-gray-700 text-sm font-bold mb-2" for="name">
        Name
      </label>
      <input v-model="t.nom" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="username" type="text" placeholder="name">
    </div>

      <div class="mb-4">
      <label class="block text-gray-700 text-sm font-bold mb-2" for="name">
        Ref
      </label>
      <input v-model="t.ref" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="ref" type="text" placeholder="ex :47d5f">
    </div>

      <div class="mb-4">
      <label class="block text-gray-700 text-sm font-bold mb-2" for="name">
        Fournisseur
      </label>
      <input v-model="t.fournisseur" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="username" type="text" placeholder="fournisseur">
    </div>

      <div class="mb-4">
      <label class="block text-gray-700 text-sm font-bold mb-2" for="name">
        Discription
      </label>
      <textarea v-model="t.disc" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="username" type="text" placeholder="....."></textarea>
    </div>
  </form>

          </div>
        </div>
      </div>
      <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
        <button  @click="saveType" type="button" class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-blue-600 text-base font-medium text-white hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 sm:ml-3 sm:w-auto sm:text-sm">
          Save
        </button>
        <button @click="show=false" type="button" class="mt-3 w-full inline-flex justify-center rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-base font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm">
          Cancel
        </button>
      </div>
    </div>
  </div>
</div>




    </app-layout>
</template>

<script>
import { defineComponent } from "vue";
import AppLayout from "@/Layouts/AppLayout.vue";
import JetNavLink from "@/Jetstream/NavLink.vue";

export default defineComponent({
    components: {
        AppLayout,
        JetNavLink,
    },
    props: {
        types: Object,
    },
    data: function () {
        return {
            show: false,
            t:{}
        };
    },methods:{
        detaile(a){
            this.$inertia.visit("types/"+a);
        }
    }
});
</script>
