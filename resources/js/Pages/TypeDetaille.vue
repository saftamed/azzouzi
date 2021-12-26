<template>
    <app-layout title="Machine Types">
        <div class="max-w-6xl mx-auto p-4">
            <div class="p-4 mx-auto max-w-6xl">
                <!--Card 1-->
                <div class="">
                    <div
                        class="
                            border-r border-b border-l border-gray-400
                            lg:border-l-0 lg:border-t lg:border-gray-400
                            bg-white
                            rounded-b
                            lg:rounded-b-none lg:rounded-r
                            p-4
                            mb-8
                            flex flex-col
                            justify-between
                            leading-normal
                            relative
                        "
                    >
                        <div class="mb-8">
                            <div class="text-gray-900 font-bold text-xl mb-2">
                                {{ type.nom }}
                            </div>
                            <p class="text-gray-700 text-base">
                                 {{type.disc==null?"no Discription":type.disc}}
                            </p>
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
                                    bottom-2 right-2
                                "
                            >
                                Modifier
                            </button>
                            <button
                                @click="deleteType"
                                class="
                                    bg-red-500
                                    hover:bg-red-700
                                    text-white
                                    font-bold
                                    py-2
                                    px-4
                                    rounded-full
                                    absolute
                                    bottom-2
                                    right-28
                                "
                            >
                                Delete
                            </button>
                        </div>
                        <div class="flex items-center">
                            <div class="text-sm">
                                <p class="text-gray-900 leading-none">
                                    {{ type.ref }}
                                </p>
                                <p class="text-gray-600">
                                    {{ type.fournisseur }}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
              <h1 class="text-gray-800 text-5xl font-semibold">
                    Machines
                </h1>
            <div class="grid grid-cols-1 md:grid-cols-4 relative mt-4">
              
                  <button
                            @click="showM=true"
                                class="
                                    bg-blue-500
                                    hover:bg-blue-700
                                    text-white
                                    font-bold
                                    py-2
                                    px-4
                                    rounded-full
                                    absolute
                                    -top-8 right-2
                                "
                            >
                                Add Machine
                            </button>
                
                <div v-for="machine in type.machines" :key="machine.id">
                    <div
                        class="
                            mt-2
                            px-4
                            py-4
                            transform
                            transition
                            duration-500
                            hover:scale-125
                        "
                        @click="detaile(machine.id)"
                    >
                        <div class="max-w-sm rounded overflow-hidden shadow-lg">
                            <div class="px-6 py-4">
                                <div class="font-bold mb-2 text-2xl">
                                    {{ type.nom + " n°: " + machine.numbre }}
                                </div>

                                <div class="text-base">
                                    <span class="font-bold">Emplacement :</span>
                                    {{ machine.emplacement }}
                                </div>
                                <div class="text-base">
                                    <span class="font-bold">Date :</span>
                                    {{ machine.created_at }}
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
    <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg w-full">
      <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
        <div class="">

          <div class="mt-3 text-center  sm:text-left">
<label class="block text-gray-700 text-lg font-bold mb-2" >
        Edit {{type.nom}}
      </label>
  <form class="bg-white rounded px-2 pt-6 pb-1">
    <div class="mb-4">
      <label class="block text-gray-700 text-sm font-bold mb-2" for="name">
        Name
      </label>
      <input v-model="typem.nom" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="username" type="text" placeholder="name">
    </div>

      <div class="mb-4">
      <label class="block text-gray-700 text-sm font-bold mb-2" for="name">
        Ref
      </label>
      <input v-model="typem.ref" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="ref" type="text" placeholder="ex :47d5f">
    </div>

      <div class="mb-4">
      <label class="block text-gray-700 text-sm font-bold mb-2" for="name">
        Fournisseur
      </label>
      <input v-model="typem.fournisseur" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="username" type="text" placeholder="fournisseur">
    </div>

      <div class="mb-4">
      <label class="block text-gray-700 text-sm font-bold mb-2" for="name">
        Discription
      </label>
      <textarea v-model="typem.disc" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="username" type="text" placeholder="....."></textarea>
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









<div  v-if="showM" class="fixed z-10 inset-0 overflow-y-auto" aria-labelledby="modal-title" role="dialog" aria-modal="true">
  <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">

    <div @click="showM=false" class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity" aria-hidden="true"></div>

    <!-- This element is to trick the browser into centering the modal contents. -->
    <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>
    <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg w-full">
      <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
        <div class="">

          <div class="mt-3 text-center  sm:text-left">
<label class="block text-gray-700 text-lg font-bold mb-2" >
        Edit New Machine
      </label>
  <form class="bg-white rounded px-2 pt-6 pb-1">
    <div class="mb-4">
      <label class="block text-gray-700 text-sm font-bold mb-2" for="name">
        Numbre
      </label>
      <input v-model="m.numbre" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="username" type="text" placeholder="numbre">
    </div>



      <div class="mb-4">
      <label class="block text-gray-700 text-sm font-bold mb-2" for="name">
        Emplacement
      </label>
      <input v-model="m.emplacement" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="username" type="text" placeholder="ex Bp1">
    </div>

      <div class="mb-4">
      <label class="block text-gray-700 text-sm font-bold mb-2" for="name">
        Discription
      </label>
      <textarea v-model="m.disc" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="username" machine="text" placeholder="....."></textarea>
    </div>
  </form>

          </div>
        </div>
      </div>
      <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
        <button  @click="savemachine" machine="button" class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-blue-600 text-base font-medium text-white hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 sm:ml-3 sm:w-auto sm:text-sm">
          Save
        </button>
        <button @click="showM=false" machine="button" class="mt-3 w-full inline-flex justify-center rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-base font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm">
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
        typea: Object,
    },
    data: function () {
        return {
            safta: "ali",
            show:false,
            showM:false,

            typem:{
                ...this.typea
            },type:this.typea,
             m:{
            },
        };
    },
    methods: {
        deleteType() {
            if (confirm("Delete this Type")) {
                axios
                    .post("/type/delete", { id: this.type.id })
                    .then((response) => {
                        console.log(response.data);
                        //this.machine = response.data;
                        this.type = {};
                        this.$inertia.visit("/types");
                    });
            }
        },
        savemachine(){
            axios.post("/machine/savenew",{...this.m,type:this.type.id} ).then((response) => {
                console.log(response.data);
                this.type = response.data;
                this.showM = false;
            });
        },
        detaile(a) {
            this.$inertia.visit("/machine/"+a);
        },
        saveType(){
            delete this.typem.machines;
            axios.post("/type/save", this.typem).then((response) => {
                console.log(response.data);
                this.type = response.data;
                this.show = false;
            });
        }
    },
});
</script>
