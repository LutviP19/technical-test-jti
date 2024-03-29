<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>

        <audio id="notifAudio">
            <source src="{{ asset('notification.wav') }}" type="audio/wav">
            Your browser does not support the audio element.
        </audio>
        <div style="display:none;" id="toast-default"
            class="fixed top-5 right-5 flex items-center w-full max-w-xs p-4 divide-gray-200 rounded-lg shadow text-sm text-green-700 bg-green-100 dark:bg-green-200 dark:text-green-800"
            role="alert">
            <div
                class="inline-flex items-center justify-center flex-shrink-0 w-8 h-8 text-green-500 bg-green-100 rounded-lg dark:bg-green-800 dark:text-green-200">
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                        clip-rule="evenodd"></path>
                </svg>
            </div>
            <div id="toast-text-default" class="ml-3 text-sm font-normal">Set yourself free.</div>

            <button type="button"
                class="float-right ml-auto -mx-1.5 -my-1.5 bg-white text-gray-400 hover:text-gray-900 rounded-lg focus:ring-2 focus:ring-gray-300 p-1.5 hover:bg-gray-100 inline-flex h-8 w-8 dark:text-gray-500 dark:hover:text-white dark:bg-gray-800 dark:hover:bg-gray-700"
                onclick="showMyToast()" aria-label="Close">
                <span class="sr-only">Close</span>
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                        clip-rule="evenodd"></path>
                </svg>
            </button>
        </div>

    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                    <div
                        class="p-4 w-full text-center bg-white rounded-lg border shadow-md sm:p-8 dark:bg-gray-800 dark:border-gray-700">
                        <h3 class="mb-2 text-3xl font-bold text-gray-900 dark:text-white">You're logged in!</h3>
                        <p class="mb-5 text-base text-gray-500 sm:text-lg dark:text-gray-400">Klik auto Nomor hp dan
                            Provider akan
                            otomatis terisi dan akan ada generate 500 random No hp random Provider</p>
                        <div class="justify-center items-center space-y-4 sm:flex sm:space-y-0 sm:space-x-4">
                            <a href="#"
                                class="w-full sm:w-auto bg-gray-800 hover:bg-gray-700 focus:ring-4 focus:ring-gray-300 text-white rounded-lg inline-flex items-center justify-center px-4 py-2.5 dark:bg-gray-700 dark:hover:bg-gray-600 dark:focus:ring-gray-700">
                                <svg class="mr-3 w-7 h-7" aria-hidden="true" focusable="false" data-prefix="fab"
                                    data-icon="apple" role="img" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 384 512">
                                    <path fill="currentColor"
                                        d="M318.7 268.7c-.2-36.7 16.4-64.4 50-84.8-18.8-26.9-47.2-41.7-84.7-44.6-35.5-2.8-74.3 20.7-88.5 20.7-15 0-49.4-19.7-76.4-19.7C63.3 141.2 4 184.8 4 273.5q0 39.3 14.4 81.2c12.8 36.7 59 126.7 107.2 125.2 25.2-.6 43-17.9 75.8-17.9 31.8 0 48.3 17.9 76.4 17.9 48.6-.7 90.4-82.5 102.6-119.3-65.2-30.7-61.7-90-61.7-91.9zm-56.6-164.2c27.3-32.4 24.8-61.9 24-72.5-24.1 1.4-52 16.4-67.9 34.9-17.5 19.8-27.8 44.3-25.6 71.9 26.1 2 49.9-11.4 69.5-34.3z">
                                    </path>
                                </svg>
                                <div class="text-left">
                                    <div class="mb-1 text-xs">Download on the</div>
                                    <div class="-mt-1 font-sans text-sm font-semibold">Mac App Store</div>
                                </div>
                            </a>
                            <a href="#"
                                class="w-full sm:w-auto bg-gray-800 hover:bg-gray-700 focus:ring-4 focus:ring-gray-300 text-white rounded-lg inline-flex items-center justify-center px-4 py-2.5 dark:bg-gray-700 dark:hover:bg-gray-600 dark:focus:ring-gray-700">
                                <svg class="mr-3 w-7 h-7" aria-hidden="true" focusable="false" data-prefix="fab"
                                    data-icon="google-play" role="img" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 512 512">
                                    <path fill="currentColor"
                                        d="M325.3 234.3L104.6 13l280.8 161.2-60.1 60.1zM47 0C34 6.8 25.3 19.2 25.3 35.3v441.3c0 16.1 8.7 28.5 21.7 35.3l256.6-256L47 0zm425.2 225.6l-58.9-34.1-65.7 64.5 65.7 64.5 60.1-34.1c18-14.3 18-46.5-1.2-60.8zM104.6 499l280.8-161.2-60.1-60.1L104.6 499z">
                                    </path>
                                </svg>
                                <div class="text-left">
                                    <div class="mb-1 text-xs">Get in on</div>
                                    <div class="-mt-1 font-sans text-sm font-semibold">Google Play</div>
                                </div>
                            </a>
                        </div>
                    </div>

                    <!-- columns -->
                    <div class="flex flex-row mb-4">
                        <div class="basis-1/2">
                            <div class="mt-8 max-w-sm rounded overflow-hidden shadow-lg">
                                <div class="px-6 py-4">
                                    <div class="font-bold text-xl mb-2">Data No Handphone</div>
                                    <form name="input-data" id="input-data" action="/api/process/save" method="POST"
                                        class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4 dark:bg-gray-800 dark:border-gray-700"
                                        x-data="processForm()" @submit.prevent="submitData">
                                        @csrf
                                        <div class="mb-4">
                                            <label
                                                class="block text-gray-500 sm:text-lg dark:text-gray-400 text-sm font-bold mb-2"
                                                for="username">
                                                No Handphone
                                            </label>
                                            <input
                                                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                                id="phone-number" name="phone_number" type="text"
                                                placeholder="No Handphone">
                                        </div>
                                        <div class="mb-6">
                                            <label
                                                class="block text-gray-500 sm:text-lg dark:text-gray-400  text-sm font-bold mb-2"
                                                for="provider">
                                                Provider
                                            </label>
                                            <div class="relative">
                                                <select
                                                    class="block shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline capitalize"
                                                    id="provider" name="provider">
                                                    @foreach ($providers as $provider => $val)
                                                        <option value="{{ $provider }}">{{ $provider }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="flex items-center justify-between">
                                            <button
                                                class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                                                type="submit" x-text="buttonLabel" :disabled="loading">
                                                Save
                                            </button>
                                            <button
                                                class="bg-indigo-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                                                type="button" @click="generateData" x-data="processAuto()"
                                                x-text="buttonAutoLabel" :disabled="loadingAuto">
                                                Auto
                                            </button>
                                        </div>
                                        <p x-text="message"></p>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <div class="basis-1/4 px-2">
                            <div class="font-bold text-xl mb-3 text-center py-3">Output Ganjil</div>
                            <div class="flex flex-col">
                                <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                                    <div class="inline-block py-2 min-w-full sm:px-6 lg:px-8">
                                        <div class="overflow-hidden shadow-md sm:rounded-lg">
                                            <table class="min-w-full" id="tblGanjil">
                                                <thead class="bg-gray-50 dark:bg-gray-700">
                                                    <tr>
                                                        <th scope="col"
                                                            class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                                            Ganjil
                                                        </th>
                                                        <th scope="col" class="relative py-3 px-6">
                                                            <span class="sr-only">Action</span>
                                                        </th>
                                                    </tr>
                                                </thead>
                                                <tbody id="tblBodyGanjil">
                                                    <!-- Data DB -->
                                                    @foreach ($numGanjil as $item)
                                                        <tr
                                                            class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                                            <td
                                                                class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                                {{ $item->phone_number }}
                                                            </td>
                                                            <td
                                                                class="py-4 px-6 text-sm font-medium text-right whitespace-nowrap">
                                                                <a href="#"
                                                                    class="text-blue-600 hover:text-blue-900 dark:text-blue-500 dark:hover:underline">Edit</a>
                                                                <a href="#"
                                                                    class="text-red-600 hover:text-red-900 dark:text-red-500 dark:hover:underline">Delete</a>
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="basis-1/4 px-2">
                            <div class="font-bold text-xl mb-3 text-center py-3">Output Genap</div>
                            <div class="flex flex-col">
                                <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                                    <div class="inline-block py-2 min-w-full sm:px-6 lg:px-8">
                                        <div class="overflow-hidden shadow-md sm:rounded-lg">
                                            <table class="min-w-full" id="tblGenap">
                                                <thead class="bg-gray-50 dark:bg-gray-700">
                                                    <tr>
                                                        <th scope="col"
                                                            class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                                            Genap
                                                        </th>
                                                        <th scope="col" class="relative py-3 px-6">
                                                            <span class="sr-only">Action</span>
                                                        </th>
                                                    </tr>
                                                </thead>
                                                <tbody id="tblBodyGenap">
                                                    <!-- Data DB -->
                                                    @foreach ($numGenap as $item)
                                                        <tr
                                                            class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                                            <td
                                                                class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                                {{ $item->phone_number }}
                                                            </td>
                                                            <td
                                                                class="py-4 px-6 text-sm font-medium text-right whitespace-nowrap">
                                                                <a href="#"
                                                                    class="text-blue-600 hover:text-blue-900 dark:text-blue-500 dark:hover:underline">Edit</a>
                                                                <a href="#"
                                                                    class="text-red-600 hover:text-red-900 dark:text-red-500 dark:hover:underline">Delete</a>
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <!-- Modal Form -->
    <div class="flex flex-row mb-4">
        <button
            class="block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
            type="button" data-modal-toggle="authentication-modal">
            Toggle modal
        </button>
    </div>

    <div id="authentication-modal" aria-hidden="true"
        class="hidden overflow-y-auto overflow-x-hidden fixed right-0 left-0 top-4 z-50 justify-center items-center h-modal md:h-full md:inset-0">
        <div class="relative px-4 w-full max-w-md h-full md:h-auto">

            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                <div class="flex justify-end p-2">
                    <button type="button"
                        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white"
                        data-modal-toggle="authentication-modal">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </button>
                </div>
                <form class="px-6 pb-4 space-y-6 lg:px-8 sm:pb-6 xl:pb-8" action="#">
                    <h3 class="text-xl font-medium text-gray-900 dark:text-white">Sign in to our
                        platform</h3>
                    <div>
                        <label for="email"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Your
                            email</label>
                        <input type="email" name="email" id="email"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                            placeholder="name@company.com" required="">
                    </div>
                    <div>
                        <label for="password"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Your
                            password</label>
                        <input type="password" name="password" id="password" placeholder="••••••••"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                            required="">
                    </div>
                    <div class="flex justify-between">
                        <div class="flex items-start">
                            <div class="flex items-center h-5">
                                <input id="remember" aria-describedby="remember" type="checkbox"
                                    class="w-4 h-4 bg-gray-50 rounded border border-gray-300 focus:ring-3 focus:ring-blue-300 dark:bg-gray-600 dark:border-gray-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800"
                                    required="">
                            </div>
                            <div class="ml-3 text-sm">
                                <label for="remember"
                                    class="font-medium text-gray-900 dark:text-gray-300">Remember
                                    me</label>
                            </div>
                        </div>
                        <a href="#"
                            class="text-sm text-blue-700 hover:underline dark:text-blue-500">Lost
                            Password?</a>
                    </div>
                    <button type="submit"
                        class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Login
                        to your account</button>
                    <div class="text-sm font-medium text-gray-500 dark:text-gray-300">
                        Not registered? <a href="#"
                            class="text-blue-700 hover:underline dark:text-blue-500">Create account</a>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script type="text/javascript">
        function showMyToast() {
            var x = document.getElementById('toast-default');
            if (x.style.display === 'none') {
                x.style.display = 'block';
            } else {
                x.style.display = 'none';
            }
        }

        toggleModal('authentication-modal', true);

        function processForm() {
            return {
                message: '',
                loading: false,
                buttonLabel: 'Save',
                submitData() {
                    let formElement = document.getElementById("input-data");
                    let phoneNumber = document.getElementById("phone-number");
                    let provider = document.getElementById("provider");

                    this.buttonLabel = 'Saving...';
                    this.loading = true;
                    this.message = '';

                    //let body = new FormData(formElement);
                    const body = {
                        phone_number: phoneNumber.value,
                        provider: provider.value
                    }

                    window.axios.post('/api/process/save',
                            body, {
                                headers: {
                                    'Content-Type': 'application/json'
                                }
                            })
                        .then((response) => {
                            //console.log(JSON.stringify(response));
                            if (response.data) {
                                let data = response.data;
                                console.log(JSON.stringify(data));
                                //this.message = 'Number ' + data.phone_number + ' successfully saved!'
                                this.message = ''
                            }
                        })
                        .catch((error) => {
                            //console.log(JSON.stringify(error));
                            if (error.length) {
                                let data = error.response.data;
                                var errors = data.errors;
                                console.log(JSON.stringify(data.errors));
                                var errMsg = '';
                                if (errors) {
                                    errors.map(item => {
                                        var temp = Object.assign({}, item);
                                        if (item.phone_number[0])
                                            errMsg += item.phone_number[0]
                                    });
                                }
                                this.message = 'Ooops! Something went wrong!, ' + data.message + errMsg
                            }
                        })
                        .finally(() => {
                            this.loading = false;
                            this.buttonLabel = 'Save'
                        })
                }
            }
        }

        function processAuto() {
            return {
                //message: '',
                loadingAuto: false,
                buttonAutoLabel: 'Auto',
                generateData() {
                    let formElement = document.getElementById("input-data");
                    let phoneNumber = document.getElementById("phone-number");
                    let provider = document.getElementById("provider");
                    //let body = new FormData(formElement);
                    const body = {
                        generate: true,
                        total: 500
                    }

                    //console.log(JSON.stringify(body));
                    this.buttonAutoLabel = 'Generating...';
                    this.loadingAuto = true;
                    this.message = '';

                    window.axios.post('/api/process/auto',
                            body, {
                                headers: {
                                    'Content-Type': 'application/json'
                                }
                            }
                        )
                        .then((response) => {
                            console.log(JSON.stringify(response));
                            let data = response.data;
                            this.message = '500 Random Number successfully generated!'
                            //this.message = ''
                        })
                        .catch((error) => {
                            console.log(JSON.stringify(error));
                            if (error.length) {
                                /* let data = error.response.data;
                                let errors = data.errors;
                                console.log(JSON.stringify(data.errors));
                                this.message = 'Ooops! Something went wrong!, ' + data.message */
                            }
                        })
                        .finally(() => {
                            this.loadingAuto = false;
                            this.buttonAutoLabel = 'Auto'
                        })
                }
            }
        }
    </script>

</x-app-layout>
