<template>
    <app-layout title="Machine machines">
        <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
            <div class="p-10">
                <!--Card 1-->
                <div class="w-full lg:max-w-full lg:flex">
                    <div
                        class="
                            border-r border-b border-l border-gray-400
                            lg:border-l-0 lg:border-t lg:border-gray-400
                            bg-white
                            rounded-b
                            lg:rounded-b-none lg:rounded-r
                            p-4
                            flex flex-col
                            justify-between
                            leading-normal
                            relative
                        "
                    >
                         <button
                            @click="deleteMachine"
                                class="
                                    bg-red-500
                                    hover:bg-red-700
                                    text-white
                                    font-bold
                                    py-2
                                    px-4
                                    rounded-full
                                    absolute
                                    top-2 right-2
                                "
                            >
                                Delete
                            </button>
                        <div class="mb-8">
                            <div class="text-gray-900 font-bold text-xl mb-2">
                                {{ machine.type.nom+" n° :"+ machine.numbre }}
                            </div>
                            <p class="text-gray-700 text-base">
                                Lorem ipsum dolor sit amet, consectetur
                                adipisicing elit. Voluptatibus quia, Nonea!
                                Maiores et perferendis eaque, exercitationem
                                praesentium nihil.
                            </p>
                            <button
                            @click="modifier"
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
                        </div>
                        <div class="flex items-center">
                            <div class="text-sm">
                              <div class="text-base">
                                        <span class="font-bold"
                                            >Machine Type : </span
                                        >{{ machine.type.nom }}
                                    </div>
                                  <div class="text-base">
                                        <span class="font-bold"
                                            >Emplacement : </span
                                        >{{ machine.emplacement }}
                                    </div>
                                    <div class="text-base">
                                        <span class="font-bold"
                                            >Date : </span
                                        >{{ machine.created_at }}
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
           <section class="py-1 bg-blueGray-50">
<div class="w-full  mb-12 xl:mb-0 px-4 mx-auto mt-2">
  <div class="relative flex flex-col min-w-0 break-words bg-white w-full mb-6 shadow-lg rounded ">
    <div class="rounded-t mb-0 px-4 py-3 border-0">
      <div class="flex flex-wrap items-center">
        <div class="relative w-full px-4 max-w-full flex-grow flex-1">
          <h3 class="font-semibold text-base text-blueGray-700">Maintenances</h3>
        </div>
        <div class="relative w-full px-4 max-w-full flex-grow flex-1 text-right">
          <button class="bg-indigo-500 text-white active:bg-indigo-600 text-xs font-bold uppercase px-3 py-1 rounded outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150" type="button" @click="showMaEdit({disc:'',machine_id:machine.id})">Add New</button>
        </div>
      </div>
    </div>

    <div class="block w-full overflow-x-auto">
      <table class="items-center bg-transparent w-full border-collapse ">
        <thead>
          <tr>
            <th class="px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                          Id
                        </th>
          <th class="px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                          Discription
                        </th>
           <th class="px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                          Date
                        </th>
          <th class="px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                          Modifier
                        </th>

          <th class="px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                          Delete
                        </th>
          </tr>
        </thead>

        <tbody>
          <tr v-for="ma in machine.maintenances" :key="ma.id">
            <th class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-left text-blueGray-700 ">
              {{ma.id}}
            </th>
            <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 ">
              {{ma.disc}}
            </td>
            <td class="border-t-0 px-6 align-center border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
              {{ma.created_at}}
            </td>
            <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
              <button @click="showMaEdit(ma)" class="bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-2 px-4 rounded">
                Modifier
                </button>
            </td>

            <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
              <button @click="deleteM(ma.id)" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">
                Delete
                </button>
            </td>
          </tr>




        </tbody>

      </table>
    </div>
  </div>
</div>

</section>
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
        Edit {{machine.nom}}
      </label>
  <form class="bg-white rounded px-8 pt-6 pb-1">
    <div class="mb-4">
      <label class="block text-gray-700 text-sm font-bold mb-2" for="name">
        Numbre
      </label>
      <input v-model="machinem.numbre" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="username" type="text" placeholder="name">
    </div>

      <div class="mb-4">

      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-state">
        Type
      </label>
      <div class="relative">
        <select v-model="machinem.type_id" class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-state">
          <option v-for="type in types" :key="type.id" :value="type.id">{{type.nom}}</option>

        </select>

      </div>

      </div>

      <div class="mb-4">
      <label class="block text-gray-700 text-sm font-bold mb-2" for="name">
        Emplacement
      </label>
      <input v-model="machinem.emplacement" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="username" type="text" placeholder="fournisseur">
    </div>

      <div class="mb-4">
      <label class="block text-gray-700 text-sm font-bold mb-2" for="name">
        Discription
      </label>
      <textarea v-model="machinem.disc" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="username" machine="text" placeholder="....."></textarea>
    </div>
  </form>

          </div>
        </div>
      </div>
      <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
        <button  @click="savemachine" machine="button" class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-blue-600 text-base font-medium text-white hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 sm:ml-3 sm:w-auto sm:text-sm">
          Save
        </button>
        <button @click="show=false" machine="button" class="mt-3 w-full inline-flex justify-center rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-base font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm">
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
    <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full">
      <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
        <div class="">

          <div class="mt-3 text-center  sm:text-left">
<label class="block text-gray-700 text-lg font-bold mb-2" >
        Edit Maintenance {{m.id}}
      </label>
  <form class="bg-white rounded px-8 pt-6 pb-1">
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
        <button  @click="addM" machine="button" class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-blue-600 text-base font-medium text-white hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 sm:ml-3 sm:w-auto sm:text-sm">
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
        machinea: Object,
    },
    data: function () {
        return {
            safta: "ali",
            show:false,
            showM:false,
            m:{},
            machinem:{
                ...this.machinea,
                disc :"...."
            },machine:this.machinea,
            types:[]
        };
    },
    methods: {
        modifier(){
            axios.get("/types/all").then((response) => {
                this.types = response.data;
                this.show = true;
            });
        },
        detaile(a) {
            this.$inertia.visit("machine/"+a);
        },
        savemachine(){
            delete this.machinem.maintenances;
            axios.post("/machine/save", this.machinem).then((response) => {
                console.log(response.data);
                this.machine = response.data;
                this.show = false;
            });
        },deleteM(id){
            if(confirm("Delete this maintenance Info")){
                axios.post("/maintenance/delete", {id}).then((response) => {
                   console.log(response.data);
                   //this.machine = response.data;
                   this.machine.maintenances = this.machine.maintenances.filter(function (el) {
                   return el.id != response.data
                   });
               });
            }
        },
        deleteMachine(){
            if(confirm("Delete this Machine")){
                axios.post("/machine/delete", {id:this.machine.id}).then((response) => {
                   console.log(response.data);
                   //this.machine = response.data;
                   this.machine = {};
                    this.$inertia.visit("/types");
               });
            }
        },
        addM(){
            axios.post("/maintenance/addEdit", this.m).then((response) => {
                console.log(response.data);
                this.machine.maintenances = response.data;
                this.showM = false;
            });
        },
        showMaEdit(m){
            this.m = m ;
            this.showM = true;
        }
    },
});
</script>
