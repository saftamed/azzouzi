<template>
    <Head title="Welcome" />

    <div class="relative flex items-top justify-center min-h-screen  ">
        <div v-if="canLogin" class=" fixed top-0 right-0 px-6 py-4 z-50">
            <Link v-if="$page.props.user" :href="route('dashboard')" class="text-sm text-gray-700 underline">
                Dashboard
            </Link>

            <template v-else>
                <Link :href="route('login')" class="text-sm text-gray-700 underline">
                    Log in
                </Link>

                <Link v-if="canRegister" :href="route('register')" class="ml-4 text-sm text-gray-700 underline">
                    Register
                </Link>
            </template>
        </div>
         <section class="relative mt-10 pt-10">
        <div
          class="bottom-auto my-10 top-0 left-0 right-0 w-full absolute pointer-events-none overflow-hidden -mt-20"
          style="height: 80px;"
        >
          <svg
            class="absolute bottom-0 overflow-hidden"
            xmlns="http://www.w3.org/2000/svg"
            preserveAspectRatio="none"
            version="1.1"
            viewBox="0 0 2560 100"
            x="0"
            y="0"
          >
            <polygon
              class="text-white fill-current"
              points="2560 0 2560 100 0 100"
            ></polygon>
          </svg>
        </div>
        <div class="container mx-auto px-4 ">
          <div class="items-center flex flex-wrap">
            <div class="w-full md:w-4/12 ml-auto mr-auto px-4 mb-10">
              <img
                alt="..."
                class="max-w-full rounded-lg shadow-lg"
                src="aa.jpg"
              />
            </div>
            <div class="w-full md:w-5/12 ml-auto mr-auto px-4">
              <div class="md:pr-12">
                <div
                  class=" p-3 text-center inline-flex items-center justify-center w-80 h-24 mb-6 shadow-lg rounded-full"
                >
                  <img src="icon.png" alt="" srcset="">
                </div>
                <h3 class="text-3xl font-semibold">Sunplastik</h3>
                <p class="mt-4 text-lg leading-relaxed text-gray-600">
                 SUNPLASTIK (Fabrication de cintres en plastique et accessoires pour le prêt à porter) société du Groupe PLASTINOVA en Tunisie depuis 2000.
                </p>
                <ul class="list-none mt-6">
                  <li class="py-2">
                    <div class="flex items-center">
                      <div>
                        <span
                          class="text-xs font-semibold inline-block py-1 px-2 uppercase rounded-full text-pink-600 bg-pink-200 mr-3"
                          ><i class="fas fa-fingerprint"></i
                        ></span>
                      </div>
                      <div>
                        <h4 class="text-gray-600">
                          Tel : 73 290 690
                        </h4>
                      </div>
                    </div>
                  </li>
                  <li class="py-2">
                    <div class="flex items-center">
                      <div>
                        <span
                          class="text-xs font-semibold inline-block py-1 px-2 uppercase rounded-full text-pink-600 bg-pink-200 mr-3"
                          ><i class="fab fa-html5"></i
                        ></span>
                      </div>
                      <div>
                        <h4 class="text-gray-600">FB : Sunplastik</h4>
                      </div>
                    </div>
                  </li>
                  <li class="py-2">
                    <div class="flex items-center">
                      <div>
                        <span
                          class="text-xs font-semibold inline-block py-1 px-2 uppercase rounded-full text-pink-600 bg-pink-200 mr-3"
                          ><i class="far fa-paper-plane"></i
                        ></span>
                      </div>
                      <div>
                        <h4 class="text-gray-600">Email : sunplastik@planet.tn</h4>
                      </div>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>

                <footer class="text-gray-600 body-font sticky bottom-0 w-full mt-20">
        <div class="bg-white">
            <div
            class="
                container
                mx-auto
                py-4
                px-5
            "
            >
            <p class="text-gray-500 text-sm text-center">
                © 2021 Copyright:
                <a
                href="https://www.safta.com/"
                class="text-gray-600 ml-1"
                target="_blank"
                >By Safta Med with Azzouzi Mohamed</a
                >
            </p>
            </div>
        </div>
        </footer>
      </section>


    </div>
    
</template>

<style scoped>
p.text-gray-500.text-sm.text-center {
    font-size: 19px;
}
</style>

<script>
    import { defineComponent } from 'vue'
    import { Head, Link } from '@inertiajs/inertia-vue3';

    export default defineComponent({
        components: {
            Head,
            Link,
        },

        props: {
            canLogin: Boolean,
            canRegister: Boolean,
            laravelVersion: String,
            phpVersion: String,
        }
    })
</script>
