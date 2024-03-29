<x-app-layout>
  <div class="w-4/5 mx-auto mt-4">
    <h2 class="text-gray-700 text-2xl sm:text-3xl font-bold">All Leave Requests </h2>
    <p>From the staffs</p>

    <div class="bg-white shadow-md rounded-md overflow-hidden mx-auto mt-5">
      <div class="bg-yellow-200 opacity-90 py-2 px-4">
        <h2 class="text-base sm:text-xl font-semibold text-yellow-700">Pending <span class="font-light">Leave Request ({{ $leave_request_amount }})</span></h2>
      </div>

      <ul class="divide-y divide-gray-200">
        @php($number = 1)
        @foreach ($leave_request->reverse() as $item)
        <li class="flex lg:flex-row flex-col items-center py-4 px-6">
          <span class="text-gray-700 text-base sm:text-lg font-medium mr-4">{{ $number }}</span>
          <img class="w-12 h-12 rounded-full object-cover mr-4" src="{{ url('img/icon_avatar.png') }}" alt="User avatar" />
          <div class="flex-1">
            <h3 class="text-xs sm:text-sm font-small text-gray-800">{{ date('d M Y', strtotime($item->created_at)) }}</h3>
            <h3 class="text-base sm:text-lg font-medium text-gray-800">{{ $item->employee->name }}</h3>
            <p class="text-gray-600 text-xs sm:text-base">{{ $item->amount_of_days }} Days</p>
            <p class="text-gray-600 text-xs sm:text-base">Category: {{ $item->category }}</p>
            <p class="text-red-600 text-sm sm:text-base">Due To: {{ $item->reason }}</p>
          </div>
          <div class="flex lg:mt-0 mt-3">
            <form action="{{ route('leaverequest.check', $item->id) }}" method="POST">
              @csrf
              @method('PATCH')
              <button type="submit" class="text-white bg-emerald-500 hover:bg-emerald-600 focus:ring-4 focus:ring-emerald-300 rounded-lg text-xs sm:text-sm px-5 py-2.5 me-2 mb-2 focus:outline-none dark:focus:ring-blue-800">Accept</button>
            </form>
            <form action="{{ route('leaverequest.reject', $item->id) }}" method="POST">
              @csrf
              @method('PATCH')
              <button type="submit" class="text-white bg-red-600 hover:bg-red-600 focus:ring-4 focus:ring-red-300 rounded-lg text-xs sm:text-sm px-5 py-2.5 me-2 mb-2 dark:bg-red-500 dark:hover:bg-red-600 focus:outline-none dark:focus:ring-blue-800">Reject</button>
            </form>
          </div>
        </li>
        @php($number++)
        @endforeach
      </ul>
    </div>

    <div class="bg-white shadow-md rounded-md overflow-hidden  mx-auto mt-8">
      <div class="bg-green-200 opacity-90 py-2 px-4">
        <h2 class="text-base sm:text-xl font-semibold text-green-700">Accepted <span class="font-light">Leave Request</span></h2>
      </div>

      <ul class="divide-y divide-gray-200">
        @php($number = 1)
        @foreach ($accepted_leave_request->reverse() as $item)
        <li class="flex flex-col sm:flex-row items-center py-4 sm:px-6">
          <span class="text-gray-700 text-lg font-medium mr-4">{{ $number }}</span>
          <img class="w-12 h-12 rounded-full object-cover mr-4" src="{{ url('img/icon_avatar.png') }}" alt="User avatar" />
          <div class="flex-1">
            <h3 class="text-xs sm:text-sm font-small text-gray-800">{{ date('d M Y', strtotime($item->created_at)) }}</h3>
            <h3 class="text-base sm:text-lg font-medium text-gray-800">{{ $item->employee->name }}</h3>
            <p class="text-gray-600 text-xs sm:text-base">{{ $item->amount_of_days }} Days</p>
            <p class="text-gray-600 text-xs sm:text-base">Category: {{ $item->category }}</p>
            <p class="text-red-600 text-sm sm:text-base">Due To: {{ $item->reason }}</p>
          </div>
          <div>
          </div>
        </li>
        @php($number++)
        @endforeach
      </ul>
    </div>

    <div class="bg-white shadow-md rounded-md overflow-hidden  mx-auto mt-8 mb-3">
      <div class="bg-red-200 opacity-90 py-2 px-4">
        <h2 class="text-base sm:text-xl font-semibold text-red-700">Rejected <span class="font-light">Leave Request</span></h2>
      </div>

      <ul class="divide-y divide-gray-200">
        @php($number = 1)
        @foreach ($rejected_leave_request->reverse() as $item)
        <li class="flex items-center py-4 px-6">
          <span class="text-gray-700 text-lg font-medium mr-4">{{ $number }}</span>
          <img class="w-12 h-12 rounded-full object-cover mr-4" src="{{ url('img/icon_avatar.png') }}" alt="User avatar" />
          <div class="flex-1">
            <h3 class="text-xs sm:text-sm font-small text-gray-800">{{ date('d M Y', strtotime($item->created_at)) }}</h3>
            <h3 class="text-base sm:text-lg font-medium text-gray-800">{{ $item->employee->name }}</h3>
            <p class="text-gray-600 text-xs sm:text-base">{{ $item->amount_of_days }} Days</p>
            <p class="text-gray-600 text-xs sm:text-base">Category: {{ $item->category }}</p>
            <p class="text-red-600 text-sm sm:text-base">Due To: {{ $item->reason }}</p>
          </div>
          <div>
          </div>
        </li>
        @php($number++)
        @endforeach
      </ul>
    </div>

    {{-- reset button --}}
    <div class="flex flex-col text-start sm:text-end gap-5 my-5">
      <form action="{{ route('leaverequest.reset') }}" method="post">
        @csrf
        @method('PATCH')
        <button type="submit">
          <a class="text-xs sm:text-sm bg-gray-200 hover:bg-gray-100 shadow-md text-gray-700 px-4 py-2 rounded-md my-5">Reset All Staff Leave Requests To 12</a>
        </button>
      </form>

      {{-- delete all button --}}
      <form action="{{ route('leaverequest.delete') }}" method="post">
        @csrf
        @method('DELETE')
        <button type="submit">
          <a class="text-xs sm:text-sm bg-red-800 hover:bg-red-700 shadow-md text-white px-4 py-2 rounded-md  my-5">Remove All Leave Request Recap</a>
        </button>
      </form>
    </div>
  </div>
</x-app-layout>
