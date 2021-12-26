<template>
    <app-layout title="Stock">
        <div class="container mx-auto px-4 mt-16">
            <div class="mb-5">
                <h1 class="text-gray-800 text-5xl font-semibold mb-11">
                    Stocks Elements
                </h1>
                <div class="relative mb-4 h-10">
                    <div
                        class="
                            my-2
                            flex
                            sm:flex-row

                            absolute
                            top-0
                            right-0
                        "
                    >
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
                                @click="newe"
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
                                @click="print"
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
                                @click="saveToPdf(elem)"
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

                                        <th
                                            scope="col"
                                            class="relative px-6 py-3"
                                        >
                                            <span class="sr-only">Edit</span>
                                        </th>
                                        <th
                                            scope="col"
                                            class="relative px-6 py-3"
                                        >
                                            <span class="sr-only">Delete</span>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody
                                    class="bg-white divide-y divide-gray-200"
                                >
                                    <tr v-for="e in elem" :key="e.id">
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
                                        <td
                                            class="
                                                px-6
                                                py-4
                                                whitespace-nowrap
                                                text-right text-sm
                                                font-medium
                                            "
                                        >
                                            <a
                                                href="#"
                                                class="
                                                    text-indigo-600
                                                    hover:text-indigo-900
                                                "
                                                @click="edit(e)"
                                                >Edit</a
                                            >
                                        </td>
                                        <td
                                            class="
                                                px-6
                                                py-4
                                                whitespace-nowrap
                                                text-right text-sm
                                                font-medium
                                            "
                                        >
                                            <a
                                                href="#"
                                                class="
                                                    text-red-600
                                                    hover:text-red-900
                                                "
                                                @click="deleteE(e.id)"
                                                >Delete</a
                                            >
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
                        sm:my-8 sm:align-middle sm:max-w-lg sm:w-full
                    "
                >
                    <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                        <div class="sm:items-start">
                            <p class="text-3xl font-bold leading-7 mb-5">
                                {{ el.action }}
                            </p>

                            <form class="max-w-lg mx-auto">
                                <div class="mb-6">
                                    <label
                                        for="email"
                                        class="
                                            text-sm
                                            font-medium
                                            text-gray-900
                                            block
                                            mb-2
                                        "
                                        >Name</label
                                    >
                                    <input
                                        v-model="el.name"
                                        type="text"
                                        id="n"
                                        class="
                                            bg-gray-50
                                            border border-gray-300
                                            text-gray-900
                                            sm:text-sm
                                            rounded-lg
                                            focus:ring-blue-500
                                            focus:border-blue-500
                                            block
                                            w-full
                                            p-2.5
                                        "
                                        required=""
                                    />
                                </div>
                                <div class="mb-6">
                                    <label
                                        for="email"
                                        class="
                                            text-sm
                                            font-medium
                                            text-gray-900
                                            block
                                            mb-2
                                        "
                                        >Qté</label
                                    >
                                    <input
                                        v-model="el.qte"
                                        type="numbre"
                                        id="q"
                                        class="
                                            bg-gray-50
                                            border border-gray-300
                                            text-gray-900
                                            sm:text-sm
                                            rounded-lg
                                            focus:ring-blue-500
                                            focus:border-blue-500
                                            block
                                            w-full
                                            p-2.5
                                        "
                                        required=""
                                    />
                                </div>
                                <div class="mb-6">
                                    <label
                                        for="email"
                                        class="
                                            text-sm
                                            font-medium
                                            text-gray-900
                                            block
                                            mb-2
                                        "
                                        >Discription</label
                                    >
                                    <input
                                        type="text"
                                        v-model="el.disc"
                                        id="d"
                                        class="
                                            bg-gray-50
                                            border border-gray-300
                                            text-gray-900
                                            sm:text-sm
                                            rounded-lg
                                            focus:ring-blue-500
                                            focus:border-blue-500
                                            block
                                            w-full
                                            p-2.5
                                        "
                                        required=""
                                    />
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
                            @click="save"
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
                            Save
                        </button>
                        <button
                            @click="show = false"
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
import { jsPDF } from "jspdf";
export default defineComponent({
    components: {
        AppLayout,
    },
    props: {
        elema: Object,
    },
    data: function () {
        return {
            elem: this.elema,
            show: false,
            showP:false,
            dd:[],
            el: {
                action: "new",
            },
            se: "",
            p:{
                y:55,m:55
            }
        };
    },
    methods: {

        printM() {
            axios.get("/machine/print",this.p).then((response) => {
                this.saveToPdfM(response.data);
            });
        },
        print() {
            axios.get("/stock/all").then((response) => {
                this.saveToPdf(response.data);
            });
        },
        saveToPdf(elem) {
            var a = elem.map((obj) => {
                obj.qte = obj.qte.toString();
                obj.description = obj.disc;
                return obj;
            });
            function createHeaders(keys) {
                var result = [];
                var w = [75, 90, 20, 80];
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
            var headers = createHeaders([
                "name",
                "description",
                "qte",
                "updated_at",
            ]);

            var today = new Date();
            var date =
                today.getFullYear() +
                "-" +
                (today.getMonth() + 1) +
                "-" +
                today.getDate();
            var doc = new jsPDF();
            doc.setFontSize(40);
            doc.text(" Stock Elements", 55, 35);
            doc.setFont("times", "italic");
            doc.setFontSize(15);
            doc.text(date, 95, 42);
            doc.table(5, 60, a, headers, {
                autoSize: false,
                printHeaders: true,
                fontSize: 9,
                padding: 2,
            });
            doc.save("stock.pdf");
            doc.autoPrint();
        },
        search() {
            if (this.se.length >= 3 || this.se.length == 0) {
                axios
                    .post("/stock/search", { se: this.se })
                    .then((response) => {
                        this.elem = response.data;
                    });
            }
        },
        ff() {
            this.$inertia.visit("/w/1");
        },
        newe() {
            this.el = {
                action: "new",
            };
            this.show = true;
        },
        save() {
            axios.post("/stock/save", this.el).then((response) => {
                this.elem = response.data;
                this.show = false;
            });
        },
        edit(ee) {
            this.el = { ...ee };
            this.el.action = "edit";
            this.show = true;
        },
        deleteE(id) {
            if (confirm("you are sure ??")) {
                axios.post("/stock/delete", { id }).then((response) => {
                    this.elem = response.data;
                });
            }
        }, 

    },
});
</script>

<style>
.border-3 {
    border-width: 3px;
}
</style>
