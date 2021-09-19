<x-layout>
  <div class="min-h-screen bg-forest bg-no-repeat bg-cover bg-center p-5">
    <div class="flex flex-col min-h-screen">
      <div class="bg-green-800 bg-opacity-50 backdrop-filter backdrop-blur-sm py-2 -my-2 overflow-x-auto sm:-mx-6 sm:px-6 lg:-mx-8 lg:px-8 rounded-lg p-5">
        <div class="inline-block min-w-full overflow-hidden align-middle border-b border-gray-200 shadow sm:rounded-lg">
          <h1 class="flex items-center text-2xl font-rossetti text-green-200">
            Transactions
            <a href="add-transaction" class="inline-block ml-2"><svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v3m0 0v3m0-3h3m-3 0H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
              </svg></a>
          </h1>
          <table class="w-full flex flex-row flex-no-wrap rounded-lg overflow-hidden sm:shadow-lg my-5">
            <thead class="text-white">
              @foreach($transactions as $transaction)
              <tr class="bg-green-500 flex flex-col flex-no wrap sm:table-row rounded-l-lg sm:rounded-none mb-2 sm:mb-0">
                <th class="p-3 text-left">Amount</th>
                <th class="p-3 text-left">Wallet</th>
                <th class="p-3 text-left" width="110px">Date</th>
                <th class="p-3 text-left" width="110px">Delete</th>
              </tr>
              @endforeach
            </thead>
            <tbody class="flex-1 sm:flex-none">

              @foreach($transactions as $transaction)
              <tr class="bg-white flex flex-col flex-no wrap sm:table-row mb-2 sm:mb-0">
                <td class="border-grey-light border hover:bg-gray-100 p-3">{{$transaction->bitcoin_amount}}</td>
                <td class="border-grey-light border hover:bg-gray-100 p-3 truncate">{{$transaction->bitcoin_wallet}}</td>
                <td class="border-grey-light border hover:bg-gray-100 p-3 truncate">{{$transaction->transaction_date}}</td>
                <td class="border-grey-light border hover:bg-gray-100 p-3 text-red-400 hover:text-red-600 hover:font-medium cursor-pointer">
                  <a href="/delete-transaction/{{$transaction->id}}" class="flex items-center justify-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-red-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                    </svg>
                  </a>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</x-layout>
<style>
  @media (min-width: 640px) {
    table {
      display: inline-table !important;
    }

    thead tr:not(:first-child) {
      display: none;
    }
  }

  td:not(:last-child) {
    border-bottom: 0;
  }

  th:not(:last-child) {
    border-bottom: 2px solid rgba(0, 0, 0, .1);
  }
</style>
