<x-app-layout>
    <div class="w-5/6 sm:w-4/5 mx-auto mt-4 pb-3">
        <h2 class="text-gray-700 text-2xl sm:text-3xl font-bold">Quality Practice Accreditation</h2>
        <p>Staffs predicate</p>
        <div class="mt-6">
            <section class="grid gap-6 my-6 md:grid-cols-3">
                <div class="p-3 sm:p-6 bg-white shadow-lg rounded sm:rounded-2xl">
                    <dl class="sm:space-y-2">
                        <dt class="text-xs sm:text-sm font-medium text-gray-500">Great Predicate</dt>
                        <dd class="text-xl md:text-3xl">Total</dd>
                        <dd class="flex items-center space-x-1 text-xs sm:text-sm font-medium text-blue-500">
                            <span>10 Staffs with 90+</span>
                            <svg class="w-5 sm:w-7 h-5 sm:h-7" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17.25 15.25V6.75H8.75"></path>
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17 7L6.75 17.25"></path>
                            </svg>
                        </dd>
                    </dl>
                </div>

                <div class="p-3 sm:p-6 bg-white shadow-lg rounded sm:rounded-2xl">
                    <dl class="sm:space-y-2">
                        <dt class="text-sm font-medium text-gray-500">Bad Predicate</dt>
                        <dd class="text-xl md:text-3xl">Total</dd>
                        <dd class="flex items-center space-x-1 text-xs sm:text-sm font-medium text-red-500">
                            <span>0 Staffs with 60-</span>
                            <svg class="w-4 sm:w-7 h-4 sm:h-7" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17.25 8.75V17.25H8.75"></path>
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17 17L6.75 6.75"></path>
                            </svg>
                        </dd>
                    </dl>
                </div>

                <div class="p-3 sm:p-6 bg-white shadow-lg rounded sm:rounded-2xl">
                    <dl class="sm:space-y-2">
                        <dt class="text-sm font-medium text-gray-500">Average predicate</dt>
                        <dd class="text-xl md:text-3xl">Total</dd>
                        <dd class="flex items-center space-x-1 text-xs sm:text-sm font-medium text-yellow-500">
                            <span>Total Employees</span>
                            <svg
                                class="w-3 sm:w-5 h-4 sm:h-6 fill-current text-yellow-400"
                                xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 20 20"
                                fill="currentColor"
                            >
                                <path
                                fill-rule="evenodd"
                                d="M3.293 9.707a1 1 0 010-1.414l6-6a1 1 0 011.414 0l6 6a1 1 0 01-1.414 1.414L11 5.414V17a1 1 0 11-2 0V5.414L4.707 9.707a1 1 0 01-1.414 0z"
                                clip-rule="evenodd"
                                />
                            </svg>
                            <svg
                                class="w-3 sm:w-5 h-4 sm:h-6 fill-current text-yellow-400"
                                xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 20 20"
                                fill="currentColor"
                            >
                                <path
                                fill-rule="evenodd"
                                d="M16.707 10.293a1 1 0 010 1.414l-6 6a1 1 0 01-1.414 0l-6-6a1 1 0 111.414-1.414L9 14.586V3a1 1 0 012 0v11.586l4.293-4.293a1 1 0 011.414 0z"
                                clip-rule="evenodd"
                                />
                            </svg>
                        </dd>
                    </dl>
                </div>
            </section>
            {{-- list staff --}}
            <div class="my-3">
                <h4 class="text-gray-700 text-base sm:text-lg">The staffs records</h4>
                <ul role="list">
                    <li class="flex justify-between gap-x-6 py-3">
                        <div class="flex min-w-0 gap-x-4">
                        <img class="h-12 w-12 flex-none rounded-full bg-gray-50" src="{{ url('img/icon_avatar.png') }}" alt="">
                        <div class="min-w-0 flex-auto">
                            <p class="text-sm font-semibold text-gray-900">Employee name</p>
                            <p class="mt-1 text-xs sm:text-sm text-blue-500">100</p>
                            <p class="text-xs sm:text-sm text-gray-500">Great</p>
                        </div>
                        </div>
                        <div class="hidden shrink-0 sm:flex sm:flex-col sm:items-end">
                        <p class="text-sm text-gray-900">Position</p>
                        </div>
                    </li>
                    <hr>
                </ul>
            </div>

            {{-- information qpa --}}
            <div class="transition ease-in duration-200 shadow-sm hover:shadow-md hover:shadow-blue-400/50 px-3 sm:px-7 pt-6 bg-white ring-1 ring-gray-900/5 rounded-lg">
                <div class="">
                    <p class="text-sm sm:text-base text-slate-800">How the <strong>QPA</strong> works to calculate employee predicates?</p>
                </div>
                <div class="flex flex-col sm:flex-row justify-around text-center">
                    <div class="py-8 px-5 w-full sm:w-1/4">
                        <h1 class="text-lg sm:text-2xl font-light">90 - 100</h1>
                        <p class="text-sm sm:text-base">Predicate: <span class="text-blue-600">Great</span></p>
                    </div>
                    <div class="py-8 px-5 w-full sm:w-1/4">
                        <h1 class="text-lg sm:text-2xl font-light">80 - 89</h1>
                        <p class="text-sm sm:text-base">Predicate: <span class="text-emerald-500">Good Enough</span></p>
                    </div>
                    <div class="py-8 px-5 w-full sm:w-1/4">
                        <h1 class="text-lg sm:text-2xl font-light">70 - 79</h1>
                        <p class="text-sm sm:text-base">Predicate: <span class="text-yellow-500">Need Enhancement</span></p>
                    </div>
                    <div class="py-8 px-5 w-full sm:w-1/4">
                        <h1 class="text-lg sm:text-2xl font-light">78-</h1>
                        <p class="text-sm sm:text-base">Predicate: <span class="text-red-500">Bad</span></p>
                    </div>
                </div>
                <hr>
                <div class="pb-3 pt-1">
                    <p class="text-gray-600 text-sm sm:text-base">What things that would impact the QPA Score?</p>
                    <div>
                        <p class="text-gray-600 text-xs sm:text-sm">- Once Late will decrease of 5 points</p>
                        <p class="text-gray-600 text-xs sm:text-sm">- Once Take Permission will decrease of 3 points</p>
                    </div>
                </div>

            </div>
        </div>
    </div>
</x-app-layout>