<template>
    <app-layout title="Machine machines">
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
                            flex flex-col
                            justify-between
                            leading-normal
                            relative
                        "
                    >
                        <div class="mb-8">
                            <div class="text-gray-900 font-bold text-xl mb-2">
                                {{
                                    machine.type.nom + " n° :" + machine.numbre
                                }}
                            </div>
                            <p class="text-gray-700 text-base">
                                {{machine.disc==null?"no Discription":machine.disc}}
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
                                    bottom-2
                                    right-2
                                "
                            >
                                Modifier
                            </button>

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
                                    bottom-2
                                    right-28
                                "
                            >
                                Delete
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
                                    <span class="font-bold">Emplacement : </span
                                    >{{ machine.emplacement }}
                                </div>
                                <div class="text-base mb-10">
                                    <span class="font-bold">Date : </span
                                    >{{ machine.created_at }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mb-5">
                <h1 class="text-gray-800 text-5xl font-semibold">
                    Maintenances
                </h1>
                <div class="relative mb-4 h-10">
                    <div class="my-2 flex sm:flex-row absolute top-0 right-0">
                        <div class="block relative">
                            <span
                                class="
                                    h-full
                                    absolute
                                    inset-y-0
                                    left-0
                                    flex
                                    items-center
                                    pl-2
                                "
                            >
                                <svg
                                    viewBox="0 0 24 24"
                                    class="h-4 w-4 fill-current text-gray-500"
                                >
                                    <path
                                        d="M10 4a6 6 0 100 12 6 6 0 000-12zm-8 6a8 8 0 1114.32 4.906l5.387 5.387a1 1 0 01-1.414 1.414l-5.387-5.387A8 8 0 012 10z"
                                    ></path>
                                </svg>
                            </span>

                            <input
                                placeholder="Search"
                                @keyup="search"
                                v-model="se"
                                class="
                                    appearance-none
                                    rounded-r rounded-l
                                    sm:rounded-l-none
                                    border-gray-400 border-3
                                    block
                                    pl-8
                                    pr-6
                                    py-2
                                    w-full
                                    border-none
                                    bg-white
                                    text-sm
                                    placeholder-gray-400
                                    text-gray-700
                                    focus:bg-white
                                    focus:placeholder-gray-600
                                    focus:text-gray-700
                                    outline-none
                                    focus:outline-none
                                    focus:border-blue-500
                                    focus:border-solid
                                "
                            />
                        </div>

                        <div class="flex flex-row mb-1 sm:mb-0 ml-2">
                            <button
                                @click="
                                    showMaEdit({
                                        machine_id: machine.id,
                                        elements: [],
                                    })
                                "
                                class="
                                    inline-flex
                                    items-center
                                    justify-center
                                    w-10
                                    h-10
                                    mr-2
                                    text-indigo-100
                                    transition-colors
                                    duration-150
                                    bg-blue-700
                                    rounded-lg
                                    focus:shadow-outline
                                    hover:bg-blue-800
                                "
                            >
                                <svg
                                    class="w-4 h-4 fill-current"
                                    viewBox="0 0 20 20"
                                >
                                    <path
                                        d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z"
                                        clip-rule="evenodd"
                                        fill-rule="evenodd"
                                    ></path>
                                </svg>
                            </button>

                            <button
                                @click="showPrintOp"
                                class="
                                    inline-flex
                                    items-center
                                    justify-center
                                    w-10
                                    h-10
                                    mr-2
                                    text-indigo-100
                                    transition-colors
                                    duration-150
                                    bg-blue-700
                                    rounded-lg
                                    focus:shadow-outline
                                    hover:bg-blue-800
                                "
                            >
                                <svg
                                    class="svg-icon fill-current p-1"
                                    viewBox="0 0 20 20"
                                >
                                    <path
                                        d="M17.453,12.691V7.723 M17.453,12.691V7.723 M1.719,12.691V7.723 M18.281,12.691V7.723 M12.691,12.484H7.309c-0.228,0-0.414,0.187-0.414,0.414s0.187,0.414,0.414,0.414h5.383c0.229,0,0.414-0.187,0.414-0.414S12.92,12.484,12.691,12.484M12.691,14.555H7.309c-0.228,0-0.414,0.187-0.414,0.414s0.187,0.414,0.414,0.414h5.383c0.229,0,0.414-0.187,0.414-0.414S12.92,14.555,12.691,14.555 M12.691,12.484H7.309c-0.228,0-0.414,0.187-0.414,0.414s0.187,0.414,0.414,0.414h5.383c0.229,0,0.414-0.187,0.414-0.414S12.92,12.484,12.691,12.484 M12.691,14.555H7.309c-0.228,0-0.414,0.187-0.414,0.414s0.187,0.414,0.414,0.414h5.383c0.229,0,0.414-0.187,0.414-0.414S12.92,14.555,12.691,14.555 M12.691,14.555H7.309c-0.228,0-0.414,0.187-0.414,0.414s0.187,0.414,0.414,0.414h5.383c0.229,0,0.414-0.187,0.414-0.414S12.92,14.555,12.691,14.555M12.691,12.484H7.309c-0.228,0-0.414,0.187-0.414,0.414s0.187,0.414,0.414,0.414h5.383c0.229,0,0.414-0.187,0.414-0.414S12.92,12.484,12.691,12.484 M7.309,13.312h5.383c0.229,0,0.414-0.187,0.414-0.414s-0.186-0.414-0.414-0.414H7.309c-0.228,0-0.414,0.187-0.414,0.414S7.081,13.312,7.309,13.312 M12.691,14.555H7.309c-0.228,0-0.414,0.187-0.414,0.414s0.187,0.414,0.414,0.414h5.383c0.229,0,0.414-0.187,0.414-0.414S12.92,14.555,12.691,14.555 M16.625,6.066h-1.449V3.168c0-0.228-0.186-0.414-0.414-0.414H5.238c-0.228,0-0.414,0.187-0.414,0.414v2.898H3.375c-0.913,0-1.656,0.743-1.656,1.656v4.969c0,0.913,0.743,1.656,1.656,1.656h1.449v2.484c0,0.228,0.187,0.414,0.414,0.414h9.523c0.229,0,0.414-0.187,0.414-0.414v-2.484h1.449c0.912,0,1.656-0.743,1.656-1.656V7.723C18.281,6.81,17.537,6.066,16.625,6.066 M5.652,3.582h8.695v2.484H5.652V3.582zM14.348,16.418H5.652v-4.969h8.695V16.418z M17.453,12.691c0,0.458-0.371,0.828-0.828,0.828h-1.449v-2.484c0-0.228-0.186-0.414-0.414-0.414H5.238c-0.228,0-0.414,0.186-0.414,0.414v2.484H3.375c-0.458,0-0.828-0.37-0.828-0.828V7.723c0-0.458,0.371-0.828,0.828-0.828h13.25c0.457,0,0.828,0.371,0.828,0.828V12.691z M7.309,13.312h5.383c0.229,0,0.414-0.187,0.414-0.414s-0.186-0.414-0.414-0.414H7.309c-0.228,0-0.414,0.187-0.414,0.414S7.081,13.312,7.309,13.312M7.309,15.383h5.383c0.229,0,0.414-0.187,0.414-0.414s-0.186-0.414-0.414-0.414H7.309c-0.228,0-0.414,0.187-0.414,0.414S7.081,15.383,7.309,15.383 M12.691,14.555H7.309c-0.228,0-0.414,0.187-0.414,0.414s0.187,0.414,0.414,0.414h5.383c0.229,0,0.414-0.187,0.414-0.414S12.92,14.555,12.691,14.555 M12.691,12.484H7.309c-0.228,0-0.414,0.187-0.414,0.414s0.187,0.414,0.414,0.414h5.383c0.229,0,0.414-0.187,0.414-0.414S12.92,12.484,12.691,12.484 M12.691,12.484H7.309c-0.228,0-0.414,0.187-0.414,0.414s0.187,0.414,0.414,0.414h5.383c0.229,0,0.414-0.187,0.414-0.414S12.92,12.484,12.691,12.484M12.691,14.555H7.309c-0.228,0-0.414,0.187-0.414,0.414s0.187,0.414,0.414,0.414h5.383c0.229,0,0.414-0.187,0.414-0.414S12.92,14.555,12.691,14.555"
                                    ></path>
                                </svg>
                            </button>

                            <button
                                @click="saveToPdfM(this.machine.maintenances)"
                                class="
                                    inline-flex
                                    items-center
                                    justify-center
                                    w-10
                                    h-10
                                    mr-2
                                    text-indigo-100
                                    transition-colors
                                    duration-150
                                    bg-blue-700
                                    rounded-lg
                                    focus:shadow-outline
                                    hover:bg-blue-800
                                "
                            >
                                <svg
                                    class="svg-icon fill-current"
                                    viewBox="0 0 20 20"
                                >
                                    <path
                                        d="M17.453,12.691V7.723 M17.453,12.691V7.723 M1.719,12.691V7.723 M18.281,12.691V7.723 M12.691,12.484H7.309c-0.228,0-0.414,0.187-0.414,0.414s0.187,0.414,0.414,0.414h5.383c0.229,0,0.414-0.187,0.414-0.414S12.92,12.484,12.691,12.484M12.691,14.555H7.309c-0.228,0-0.414,0.187-0.414,0.414s0.187,0.414,0.414,0.414h5.383c0.229,0,0.414-0.187,0.414-0.414S12.92,14.555,12.691,14.555 M12.691,12.484H7.309c-0.228,0-0.414,0.187-0.414,0.414s0.187,0.414,0.414,0.414h5.383c0.229,0,0.414-0.187,0.414-0.414S12.92,12.484,12.691,12.484 M12.691,14.555H7.309c-0.228,0-0.414,0.187-0.414,0.414s0.187,0.414,0.414,0.414h5.383c0.229,0,0.414-0.187,0.414-0.414S12.92,14.555,12.691,14.555 M12.691,14.555H7.309c-0.228,0-0.414,0.187-0.414,0.414s0.187,0.414,0.414,0.414h5.383c0.229,0,0.414-0.187,0.414-0.414S12.92,14.555,12.691,14.555M12.691,12.484H7.309c-0.228,0-0.414,0.187-0.414,0.414s0.187,0.414,0.414,0.414h5.383c0.229,0,0.414-0.187,0.414-0.414S12.92,12.484,12.691,12.484 M7.309,13.312h5.383c0.229,0,0.414-0.187,0.414-0.414s-0.186-0.414-0.414-0.414H7.309c-0.228,0-0.414,0.187-0.414,0.414S7.081,13.312,7.309,13.312 M12.691,14.555H7.309c-0.228,0-0.414,0.187-0.414,0.414s0.187,0.414,0.414,0.414h5.383c0.229,0,0.414-0.187,0.414-0.414S12.92,14.555,12.691,14.555 M16.625,6.066h-1.449V3.168c0-0.228-0.186-0.414-0.414-0.414H5.238c-0.228,0-0.414,0.187-0.414,0.414v2.898H3.375c-0.913,0-1.656,0.743-1.656,1.656v4.969c0,0.913,0.743,1.656,1.656,1.656h1.449v2.484c0,0.228,0.187,0.414,0.414,0.414h9.523c0.229,0,0.414-0.187,0.414-0.414v-2.484h1.449c0.912,0,1.656-0.743,1.656-1.656V7.723C18.281,6.81,17.537,6.066,16.625,6.066 M5.652,3.582h8.695v2.484H5.652V3.582zM14.348,16.418H5.652v-4.969h8.695V16.418z M17.453,12.691c0,0.458-0.371,0.828-0.828,0.828h-1.449v-2.484c0-0.228-0.186-0.414-0.414-0.414H5.238c-0.228,0-0.414,0.186-0.414,0.414v2.484H3.375c-0.458,0-0.828-0.37-0.828-0.828V7.723c0-0.458,0.371-0.828,0.828-0.828h13.25c0.457,0,0.828,0.371,0.828,0.828V12.691z M7.309,13.312h5.383c0.229,0,0.414-0.187,0.414-0.414s-0.186-0.414-0.414-0.414H7.309c-0.228,0-0.414,0.187-0.414,0.414S7.081,13.312,7.309,13.312M7.309,15.383h5.383c0.229,0,0.414-0.187,0.414-0.414s-0.186-0.414-0.414-0.414H7.309c-0.228,0-0.414,0.187-0.414,0.414S7.081,15.383,7.309,15.383 M12.691,14.555H7.309c-0.228,0-0.414,0.187-0.414,0.414s0.187,0.414,0.414,0.414h5.383c0.229,0,0.414-0.187,0.414-0.414S12.92,14.555,12.691,14.555 M12.691,12.484H7.309c-0.228,0-0.414,0.187-0.414,0.414s0.187,0.414,0.414,0.414h5.383c0.229,0,0.414-0.187,0.414-0.414S12.92,12.484,12.691,12.484 M12.691,12.484H7.309c-0.228,0-0.414,0.187-0.414,0.414s0.187,0.414,0.414,0.414h5.383c0.229,0,0.414-0.187,0.414-0.414S12.92,12.484,12.691,12.484M12.691,14.555H7.309c-0.228,0-0.414,0.187-0.414,0.414s0.187,0.414,0.414,0.414h5.383c0.229,0,0.414-0.187,0.414-0.414S12.92,14.555,12.691,14.555"
                                    ></path>
                                </svg>
                                <svg viewBox="0 0 24 24" class="fill-current">
                                    <path
                                        d="M10 4a6 6 0 100 12 6 6 0 000-12zm-8 6a8 8 0 1114.32 4.906l5.387 5.387a1 1 0 01-1.414 1.414l-5.387-5.387A8 8 0 012 10z"
                                    ></path>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <section class="py-1 bg-blueGray-50">
                <div class="w-full mb-12 xl:mb-0 px-4 mx-auto mt-2">
                    <div
                        class="
                            relative
                            flex flex-col
                            min-w-0
                            break-words
                            bg-white
                            w-full
                            mb-6
                            shadow-lg
                            rounded
                        "
                    >
                        <div class="block w-full overflow-x-auto">
                            <table
                                class="
                                    items-center
                                    bg-transparent
                                    w-full
                                    border-collapse
                                "
                            >
                                <thead>
                                    <tr>
                                        <th
                                            class="
                                                px-6
                                                bg-blueGray-50
                                                text-blueGray-500
                                                align-middle
                                                border
                                                border-solid
                                                border-blueGray-100
                                                py-3
                                                text-xs
                                                uppercase
                                                border-l-0 border-r-0
                                                whitespace-nowrap
                                                font-semibold
                                                text-left
                                            "
                                        >
                                            Id
                                        </th>
                                        <th
                                            class="
                                                px-6
                                                bg-blueGray-50
                                                text-blueGray-500
                                                align-middle
                                                border
                                                border-solid
                                                border-blueGray-100
                                                py-3
                                                text-xs
                                                uppercase
                                                border-l-0 border-r-0
                                                whitespace-nowrap
                                                font-semibold
                                                text-left
                                            "
                                        >
                                            Discription
                                        </th>
                                        <th
                                            class="
                                                px-6
                                                bg-blueGray-50
                                                text-blueGray-500
                                                align-middle
                                                border
                                                border-solid
                                                border-blueGray-100
                                                py-3
                                                text-xs
                                                uppercase
                                                border-l-0 border-r-0
                                                whitespace-nowrap
                                                font-semibold
                                                text-left
                                            "
                                        >
                                            Date
                                        </th>
                                        <th
                                            class="
                                                px-6
                                                bg-blueGray-50
                                                text-blueGray-500
                                                align-middle
                                                border
                                                border-solid
                                                border-blueGray-100
                                                py-3
                                                text-xs
                                                uppercase
                                                border-l-0 border-r-0
                                                whitespace-nowrap
                                                font-semibold
                                                text-left
                                            "
                                        >
                                            Modifier
                                        </th>

                                        <th
                                            class="
                                                px-6
                                                bg-blueGray-50
                                                text-blueGray-500
                                                align-middle
                                                border
                                                border-solid
                                                border-blueGray-100
                                                py-3
                                                text-xs
                                                uppercase
                                                border-l-0 border-r-0
                                                whitespace-nowrap
                                                font-semibold
                                                text-left
                                            "
                                        >
                                            Delete
                                        </th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <tr
                                        v-for="ma in machine.maintenances"
                                        :key="ma.id"
                                    >
                                        <th
                                            class="
                                                border-t-0
                                                px-6
                                                align-middle
                                                border-l-0 border-r-0
                                                text-xs
                                                whitespace-nowrap
                                                p-4
                                                text-left text-blueGray-700
                                            "
                                        >
                                            {{ ma.id }}
                                        </th>
                                        <td
                                            class="
                                                border-t-0
                                                px-6
                                                align-middle
                                                border-l-0 border-r-0
                                                text-xs
                                                whitespace-nowrap
                                                p-4
                                            "
                                        >
                                            {{ ma.disc }}
                                        </td>
                                        <td
                                            class="
                                                border-t-0
                                                px-6
                                                align-center
                                                border-l-0 border-r-0
                                                text-xs
                                                whitespace-nowrap
                                                p-4
                                            "
                                        >
                                            {{ ma.created_at }}
                                        </td>
                                        <td
                                            class="
                                                border-t-0
                                                px-6
                                                align-middle
                                                border-l-0 border-r-0
                                                text-xs
                                                whitespace-nowrap
                                                p-4
                                            "
                                        >
                                            <button
                                                @click="showMaEdit({...ma})"
                                                class="
                                                    bg-yellow-500
                                                    hover:bg-yellow-700
                                                    text-white
                                                    font-bold
                                                    py-2
                                                    px-4
                                                    rounded
                                                "
                                            >
                                                Modifier
                                            </button>
                                        </td>

                                        <td
                                            class="
                                                border-t-0
                                                px-6
                                                align-middle
                                                border-l-0 border-r-0
                                                text-xs
                                                whitespace-nowrap
                                                p-4
                                            "
                                        >
                                            <button
                                                @click="deleteM(ma.id)"
                                                class="
                                                    bg-red-500
                                                    hover:bg-red-700
                                                    text-white
                                                    font-bold
                                                    py-2
                                                    px-4
                                                    rounded
                                                "
                                            >
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
        <div
            v-if="show"
            class="fixed z-10 inset-0 overflow-y-auto"
            aria-labelledby="modal-title"
            role="dialog"
            aria-modal="true"
        >
            <div
                class="
                    flex
                    items-end
                    justify-center
                    min-h-screen
                    pt-4
                    px-4
                    pb-20
                    text-center
                    sm:block sm:p-0
                "
            >
                <div
                    @click="show = false"
                    class="
                        fixed
                        inset-0
                        bg-gray-500 bg-opacity-75
                        transition-opacity
                    "
                    aria-hidden="true"
                ></div>

                <!-- This element is to trick the browser into centering the modal contents. -->
                <span
                    class="hidden sm:inline-block sm:align-middle sm:h-screen"
                    aria-hidden="true"
                    >&#8203;</span
                >
                <div
                    class="
                        inline-block
                        align-bottom
                        bg-white
                        rounded-lg
                        text-left
                        overflow-hidden
                        shadow-xl
                        transform
                        transition-all
                        sm:my-8 sm:align-middle sm:max-w-lg w-full
                    "
                >
                    <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                        <div class="">
                            <div class="mt-3 text-center sm:text-left">
                                <label
                                    class="
                                        block
                                        text-gray-700 text-lg
                                        font-bold
                                        mb-2
                                    "
                                >
                                    Edit {{ machine.nom }}
                                </label>
                                <form class="bg-white rounded px-2 pt-6 pb-1">
                                    <div class="mb-4">
                                        <label
                                            class="
                                                block
                                                text-gray-700 text-sm
                                                font-bold
                                                mb-2
                                            "
                                            for="name"
                                        >
                                            Numbre
                                        </label>
                                        <input
                                            v-model="machinem.numbre"
                                            class="
                                                shadow
                                                appearance-none
                                                border
                                                rounded
                                                w-full
                                                py-2
                                                px-3
                                                text-gray-700
                                                leading-tight
                                                focus:outline-none
                                                focus:shadow-outline
                                            "
                                            id="username"
                                            type="text"
                                            placeholder="name"
                                        />
                                    </div>

                                    <div class="mb-4">
                                        <label
                                            class="
                                                block
                                                uppercase
                                                tracking-wide
                                                text-gray-700 text-xs
                                                font-bold
                                                mb-2
                                            "
                                            for="grid-state"
                                        >
                                            Type
                                        </label>
                                        <div class="relative">
                                            <select
                                                v-model="machinem.type_id"
                                                class="
                                                    block
                                                    appearance-none
                                                    w-full
                                                    bg-gray-200
                                                    border border-gray-200
                                                    text-gray-700
                                                    py-3
                                                    px-4
                                                    pr-8
                                                    rounded
                                                    leading-tight
                                                    focus:outline-none
                                                    focus:bg-white
                                                    focus:border-gray-500
                                                "
                                                id="grid-state"
                                            >
                                                <option
                                                    v-for="type in types"
                                                    :key="type.id"
                                                    :value="type.id"
                                                >
                                                    {{ type.nom }}
                                                </option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="mb-4">
                                        <label
                                            class="
                                                block
                                                text-gray-700 text-sm
                                                font-bold
                                                mb-2
                                            "
                                            for="name"
                                        >
                                            Emplacement
                                        </label>
                                        <input
                                            v-model="machinem.emplacement"
                                            class="
                                                shadow
                                                appearance-none
                                                border
                                                rounded
                                                w-full
                                                py-2
                                                px-3
                                                text-gray-700
                                                leading-tight
                                                focus:outline-none
                                                focus:shadow-outline
                                            "
                                            id="username"
                                            type="text"
                                            placeholder="fournisseur"
                                        />
                                    </div>

                                    <div class="mb-4">
                                        <label
                                            class="
                                                block
                                                text-gray-700 text-sm
                                                font-bold
                                                mb-2
                                            "
                                            for="name"
                                        >
                                            Discription
                                        </label>
                                        <textarea
                                            v-model="machinem.disc"
                                            class="
                                                shadow
                                                appearance-none
                                                border
                                                rounded
                                                w-full
                                                py-2
                                                px-3
                                                text-gray-700
                                                leading-tight
                                                focus:outline-none
                                                focus:shadow-outline
                                            "
                                            id="username"
                                            machine="text"
                                            placeholder="....."
                                        ></textarea>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div
                        class="
                            bg-gray-50
                            px-4
                            py-3
                            sm:px-6 sm:flex sm:flex-row-reverse
                        "
                    >
                        <button
                            @click="savemachine"
                            machine="button"
                            class="
                                w-full
                                inline-flex
                                justify-center
                                rounded-md
                                border border-transparent
                                shadow-sm
                                px-4
                                py-2
                                bg-blue-600
                                text-base
                                font-medium
                                text-white
                                hover:bg-blue-700
                                focus:outline-none
                                focus:ring-2
                                focus:ring-offset-2
                                focus:ring-blue-500
                                sm:ml-3 sm:w-auto sm:text-sm
                            "
                        >
                            Save
                        </button>
                        <button
                            @click="show = false"
                            machine="button"
                            class="
                                mt-3
                                w-full
                                inline-flex
                                justify-center
                                rounded-md
                                border border-gray-300
                                shadow-sm
                                px-4
                                py-2
                                bg-white
                                text-base
                                font-medium
                                text-gray-700
                                hover:bg-gray-50
                                focus:outline-none
                                focus:ring-2
                                focus:ring-offset-2
                                focus:ring-indigo-500
                                sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm
                            "
                        >
                            Cancel
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <div
            v-if="showM"
            class="fixed z-10 inset-0 overflow-y-auto"
            aria-labelledby="modal-title"
            role="dialog"
            aria-modal="true"
        >
            <div
                class="
                    flex
                    items-end
                    justify-center
                    min-h-screen
                    pt-4
                    px-4
                    pb-20
                    text-center
                    sm:block sm:p-0
                "
            >
                <div
                    @click="showM = false"
                    class="
                        fixed
                        inset-0
                        bg-gray-500 bg-opacity-75
                        transition-opacity
                    "
                    aria-hidden="true"
                ></div>

                <!-- This element is to trick the browser into centering the modal contents. -->
                <span
                    class="hidden sm:inline-block sm:align-middle sm:h-screen"
                    aria-hidden="true"
                    >&#8203;</span
                >
                <div
                    class="
                        inline-block
                        align-bottom
                        bg-white
                        rounded-lg
                        text-left
                        overflow-hidden
                        shadow-xl
                        transform
                        transition-all
                        sm:my-8 sm:align-middle sm:max-w-lg w-full
                    "
                >
                    <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                        <div class="">
                            <div class="mt-3 text-center sm:text-left">
                                <label
                                    class="
                                        block
                                        text-gray-700 text-lg
                                        font-bold
                                        mb-2
                                    "
                                >
                                    Edit Maintenance {{ m.id }}
                                </label>
                                <form class="bg-white rounded px-2 pt-6 pb-1" @submit.prevent="addM">
                                    <div class="mb-4">
                                        <label
                                            class="
                                                block
                                                text-gray-700 text-sm
                                                font-bold
                                                mb-2
                                            "
                                            for="name"
                                        >
                                            Discription
                                        </label>
                                        <textarea
                                            v-model="m.disc"
                                            class="
                                                shadow
                                                appearance-none
                                                border
                                                rounded
                                                w-full
                                                py-2
                                                px-3
                                                text-gray-700
                                                leading-tight
                                                focus:outline-none
                                                focus:shadow-outline
                                            "
                                            id="username"
                                            machine="text"
                                            placeholder="....."
                                        ></textarea>
                                    </div>
                                    <div class="relative h-14">
                                        <div class="absolute right-0 top-0">
                                            <button
                                                @click.prevent="elementsNum(1)"
                                                class="
                                                    inline-flex
                                                    items-center
                                                    justify-center
                                                    w-10
                                                    h-10
                                                    mr-2
                                                    text-indigo-100
                                                    transition-colors
                                                    duration-150
                                                    bg-blue-700
                                                    rounded-lg
                                                    focus:shadow-outline
                                                    hover:bg-blue-800
                                                "
                                            >
                                                +
                                            </button>
                                            <button
                                                @click.prevent="elementsNum(-1)"
                                                class="
                                                    inline-flex
                                                    items-center
                                                    justify-center
                                                    w-10
                                                    h-10
                                                    mr-2
                                                    text-indigo-100
                                                    transition-colors
                                                    duration-150
                                                    bg-blue-700
                                                    rounded-lg
                                                    focus:shadow-outline
                                                    hover:bg-blue-800
                                                "
                                            >
                                                -
                                            </button>
                                        </div>
                                    </div>
                                    <div
                                        class="mb-4"
                                        v-for="a in m.elements"
                                        :key="a"
                                    >
                                        <div class="flex flex-wrap -mx-3 mb-1">
                                            <div
                                                class="
                                                    md:w-2/3
                                                    px-3
                                                    mb-6
                                                    md:mb-0
                                                "
                                            >
                                                <label
                                                    class="
                                                        block
                                                        uppercase
                                                        tracking-wide
                                                        text-gray-700 text-xs
                                                        font-bold
                                                        mb-2
                                                    "
                                                    for="grid-first-name"
                                                >
                                                    element n 
                                                </label>
                                                <select
                                                    class="
                                                        form-select
                                                        block
                                                        w-full
                                                        mt-1
                                                    "
                                                    required
                                                    v-model="a.pivot.element_id"
                                                >
                                                <option value="">null</option>
                                                    <option
                                                        v-for="y in stock"
                                                        :key="y.id"
                                                        :value="y.id"
                                                    >
                                                        {{ y.name }}
                                                    </option>
                                                </select>
                                            </div>
                                            <div class="md:w-1/3 px-3">
                                                <label
                                                    class="
                                                        block
                                                        uppercase
                                                        tracking-wide
                                                        text-gray-700 text-xs
                                                        font-bold
                                                        mb-2
                                                    "
                                                    for="grid-last-name"
                                                >
                                                    QTE
                                                </label>
                                                <input
                                                
                                                    class="
                                                        appearance-none
                                                        block
                                                        w-full
                                                        bg-gray-200
                                                        text-gray-700
                                                        border border-gray-200
                                                        rounded
                                                        py-3
                                                        px-4
                                                        leading-tight
                                                        focus:outline-none
                                                        focus:bg-white
                                                        focus:border-gray-500
                                                        
                                                    "
                                                    id="grid-last-name"
                                                    type="number"
                                                    placeholder="0"
                                                    v-model="a.pivot.qte"
                                                    required
                                                    
                                                    min="1"
                                                    v-bind:max="(a.qte)? a.qte :10"
                                                    
                                                />
                                            </div>
                                        </div>
                                    </div>
                    <div
                        class="
                            bg-gray-50
                            py-3
                            sm:flex sm:flex-row-reverse
                        "
                    >
                        <button
                            machine="button"
                            class="
                                w-full
                                inline-flex
                                justify-center
                                rounded-md
                                border border-transparent
                                shadow-sm
                                px-4
                                py-2
                                bg-blue-600
                                text-base
                                font-medium
                                text-white
                                hover:bg-blue-700
                                focus:outline-none
                                focus:ring-2
                                focus:ring-offset-2
                                focus:ring-blue-500
                                sm:ml-3 sm:w-auto sm:text-sm
                            "
                        >
                            Save
                        </button>
                        <button
                            @click="showM = false"
                            machine="button"
                            class="
                                mt-3
                                w-full
                                inline-flex
                                justify-center
                                rounded-md
                                border border-gray-300
                                shadow-sm
                                px-4
                                py-2
                                bg-white
                                text-base
                                font-medium
                                text-gray-700
                                hover:bg-gray-50
                                focus:outline-none
                                focus:ring-2
                                focus:ring-offset-2
                                focus:ring-indigo-500
                                sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm
                            "
                        >
                            Cancel
                        </button>
                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div
            v-if="showP"
            class="fixed z-10 inset-0 overflow-y-auto"
            aria-labelledby="modal-title"
            role="dialog"
            aria-modal="true"
        >
            <div
                class="
                    flex
                    items-end
                    justify-center
                    min-h-screen
                    pt-4
                    px-4
                    pb-20
                    text-center
                    sm:block sm:p-0
                "
            >
                <div
                    @click="showP = false"
                    class="
                        fixed
                        inset-0
                        bg-gray-500 bg-opacity-75
                        transition-opacity
                    "
                    aria-hidden="true"
                ></div>

                <!-- This element is to trick the browser into centering the modal contents. -->
                <span
                    class="hidden sm:inline-block sm:align-middle sm:h-screen"
                    aria-hidden="true"
                    >&#8203;</span
                >

                <div
                    class="
                        inline-block
                        align-bottom
                        bg-white
                        rounded-lg
                        text-left
                        overflow-hidden
                        shadow-xl
                        transform
                        transition-all
                        sm:my-8 sm:align-middle sm:max-w-lg w-full
                    "
                >
                    <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                        <div class="sm:items-start">
                            <p class="text-3xl font-bold leading-7 mb-5">
                                Print
                            </p>

                            <form class="max-w-lg mx-auto">
                                <div class="mb-6">
                                    <label
                                        for="email"
                                        class="
                                            text-2xl
                                            font-medium
                                            text-gray-900
                                            block
                                            mb-2
                                        "
                                        >Select the Period</label
                                    >
                                    <label
                                        class="block text-left"
                                        style="max-width: 400px"
                                    >
                                        <span class="text-gray-700"
                                            >Select Year</span
                                        >
                                        <select
                                            v-model="p.y"
                                            class="
                                                form-select
                                                block
                                                w-full
                                                mt-1
                                            "
                                        >
                                            <option value="55" selected>
                                                --Select Year--
                                            </option>
                                            <option
                                                v-for="y in dd"
                                                :key="y"
                                                :value="y"
                                            >
                                                {{ y }}
                                            </option>
                                        </select>
                                    </label>
                                    <label
                                        class="block text-left"
                                        style="max-width: 400px"
                                    >
                                        <span class="text-gray-700"
                                            >Select Month</span
                                        >
                                        <select
                                            v-model="p.m"
                                            class="
                                                form-select
                                                block
                                                w-full
                                                mt-1
                                            "
                                        >
                                            <option value="55" selected>
                                                --Select Month--
                                            </option>
                                            <option value="01">Janaury</option>
                                            <option value="02">February</option>
                                            <option value="03">March</option>
                                            <option value="04">April</option>
                                            <option value="05">May</option>
                                            <option value="06">June</option>
                                            <option value="07">July</option>
                                            <option value="08">August</option>
                                            <option value="09">
                                                September
                                            </option>
                                            <option value="10">October</option>
                                            <option value="11">November</option>
                                            <option value="12">December</option>
                                            <option value="">
                                                All Month of the Year
                                            </option>
                                        </select>
                                    </label>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div
                        class="
                            bg-gray-50
                            px-4
                            py-3
                            sm:px-6 sm:flex sm:flex-row-reverse
                        "
                    >
                        <button
                            @click="printM"
                            type="button"
                            class="
                                w-full
                                inline-flex
                                justify-center
                                rounded-md
                                border border-transparent
                                shadow-sm
                                px-4
                                py-2
                                bg-blue-600
                                text-base
                                font-medium
                                text-white
                                hover:bg-blue-700
                                focus:outline-none
                                focus:ring-2
                                focus:ring-offset-2
                                focus:ring-red-500
                                sm:ml-3 sm:w-auto sm:text-sm
                            "
                        >
                            Print
                        </button>
                        <button
                            @click="showP = false"
                            type="button"
                            class="
                                mt-3
                                w-full
                                inline-flex
                                justify-center
                                rounded-md
                                border border-gray-300
                                shadow-sm
                                px-4
                                py-2
                                bg-white
                                text-base
                                font-medium
                                text-gray-700
                                hover:bg-gray-50
                                focus:outline-none
                                focus:ring-2
                                focus:ring-offset-2
                                focus:ring-indigo-500
                                sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm
                            "
                        >
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
import { jsPDF } from "jspdf";
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
            show: false,
            showM: false,
            se: "",
            m: {},
            stock: [],
            machinem: {
                ...this.machinea,
            },
            machine: this.machinea,
            types: [],
            showP: false,
            dd: [],
            p: {
                y: 55,
                m: 55,
            },
        };
    },
    methods: {
        elementsNum(a) {
           
            if(a>0){
              this.m.elements[this.m.elements.length] = {
                  pivot:{element_id:"",qte:1},
                  qte:10

              }  ;
            }else{
                this.m.elements.length += a;
            }
        },

        printM() {
            axios
                .post("/machine/print", { ...this.p, id: this.machine.id })
                .then((response) => {
                    //console.log(response.data)
                    this.saveToPdfM(response.data.maintenances);
                });
        },
        search() {
            if (this.se.length >= 3 || this.se.length == 0) {
                axios.post("/main/search", { se: this.se,id:this.machine.id }).then((response) => {
                    this.machine.maintenances = response.data;
                });
            }
        },
        modifier() {
            axios.get("/types/all").then((response) => {
                this.types = response.data;
                this.show = true;
            });
        },
        detaile(a) {
            this.$inertia.visit("machine/" + a);
        },
        savemachine() {
            delete this.machinem.maintenances;
            axios.post("/machine/save", this.machinem).then((response) => {
                console.log(response.data);
                this.machine = response.data;
                this.show = false;
            });
        },
        deleteM(id) {
            if (confirm("Delete this maintenance Info")) {
                axios.post("/maintenance/delete", { id }).then((response) => {
                    console.log(response.data);
                    //this.machine = response.data;
                    this.machine.maintenances =
                        this.machine.maintenances.filter(function (el) {
                            return el.id != response.data;
                        });
                });
            }
        },
        deleteMachine() {
            if (confirm("Delete this Machine")) {
                axios
                    .post("/machine/delete", { id: this.machine.id })
                    .then((response) => {
                        console.log(response.data);
                        //this.machine = response.data;
                        this.machine = {};
                        this.$inertia.visit("/types");
                    });
            }
        },
        addM() {
            var cc ={elements:{},d:{}} ;
            var mmm = this.machine.maintenances.find( ml => ml.id == this.m.id );
            this.m.elements.forEach((e,i) => {
                cc.elements[e.pivot.element_id.toString()]={
                    qte:e.pivot.qte,
                };
                if(mmm && mmm.elements)
                cc.elements[e.pivot.element_id.toString()].lqte=mmm.elements.find(ee=> ee.id == e.pivot.element_id)?mmm.elements.find(ee=> ee.id == e.pivot.element_id).pivot.qte :0

            });
           console.log(mmm) 
           if(mmm){

               var am =mmm.elements.filter(ee=> !Object.keys(cc.elements).includes(ee.id.toString()));
               am.forEach((e,i) => {
                   cc.d[e.pivot.element_id.toString()]={
                       qte:e.pivot.qte,
                   };
               });
           }
           // console.log(cc)
            cc.disc = this.m.disc;
            cc.machine_id = this.m.machine_id;
            cc.id = this.m.id;
            axios.post("/maintenance/addEdit", cc).then((response) => {
               // console.log(response.data);
                this.machine.maintenances = response.data;
                this.showM = false;
            });
        },
        showMaEdit(mk) {
            this.m =JSON.parse(JSON.stringify(mk));
            axios.get("/stock/all").then((response) => {
                this.stock = response.data;
            });
            this.showM = true;
        },
        showPrintOp() {
            var d = parseInt(new Date().getFullYear());
            var foo = [];

            for (var i = d; i >= d - 14; i--) {
                foo.push(i);
            }

            this.dd = foo;
            this.showP = true;
        },
        saveToPdfM(elem) {
            var a = elem.map((obj) => {
                obj.Date = obj.created_at.substring(0, 10);;
                obj.Description = obj.disc;
                obj.Stock = obj.elements.map((e)=>{
                    return e.name+" : " +e.pivot.qte;
                }).join(" | ");
                delete obj.elements;
                return obj;
            });
        console.log(a)
            function createHeaders(keys) {
                var result = [];
                var w = [100, 120,40];
                for (var i = 0; i < keys.length; i += 1) {
                    result.push({
                        id: keys[i],
                        name: keys[i],
                        prompt: keys[i],
                        align: "center",
                        width: w[i],
                        padding: 4,
                    });
                }
                return result;
            }
            var headers = createHeaders(["Description","Stock", "Date"]);

            var today = new Date();
            var date =
                today.getFullYear() +
                "-" +
                (today.getMonth() + 1) +
                "-" +
                today.getDate();
            var doc = new jsPDF();
            doc.setFontSize(40);
            doc.text("Maintenance sheet", 45, 35);
            doc.setFont("times", "italic");
            doc.setFontSize(15);
            doc.text(date, 95, 42);

            doc.setFont("helvetica", "normal");
            doc.text("Machine Numbre", 10, 70);
            doc.text(": " + this.machine.numbre, 100, 70);

            doc.text("Type", 10, 77);
            doc.text(": " + this.machine.type.nom, 100, 77);

            doc.text("Reference", 10, 84);
            doc.text(": " + this.machine.type.ref, 100, 84);

            doc.text("Location", 10, 91);
            doc.text(": " + this.machine.emplacement, 100, 91);

            doc.text("Provider", 10, 98);
            doc.text(": " + this.machine.type.fournisseur, 100, 98);

            doc.text("Period", 10, 105);
            doc.text(": " + this.p.y + " " + this.p.m, 100, 105);

            doc.table(10, 115, a, headers, {
                autoSize: false,
                printHeaders: true,
                fontSize: 10,
                padding: 2,
            });
            doc.save("Maintenance.pdf");
            this.showP = false;
        },
    },
});
</script>
<style>
.border-3 {
    border-width: 3px;
}
</style>
