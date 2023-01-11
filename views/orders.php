<?php require_once('./partials/header.php'); ?>
<?php require_once('./partials/nav.php'); ?><main class="p-5">
      <div class="container mx-auto lg:w-2/3 xl:w-2/3">
        <h1 class="mb-6 text-3xl font-bold">My Orders</h1>

        <div class="p-3 bg-white shadow-md rounded-md">
          <table class="table w-full table-auto">
            <thead class="border-b-2">
              <tr class="text-left">
                <th>Order</th>
                <th>Date</th>
                <th>Status</th>
                <th>Total</th>
                <th class="w-64">Actions</th>
              </tr>
            </thead>
            <tbody>
              <tr class="border-b">
                <td>
                  <a href="/src/order-details.html" class="text-purple-600 hover:text-purple-500">
                    #1234
                  </a>
                </td>
                <td>May 3, 07:28PM</td>
                <td>
                  <span class="p-1 text-white bg-gray-500 rounded">Unpaid</span>
                </td>
                <td>$58.25</td>
                <td class="flex gap-3">
                  <button
                    class="flex items-center px-2 py-1 btn-primary bg-emerald-500 hover:bg-emerald-600 active:bg-emerald-700"
                  >
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      class="w-5 h-5 mr-1"
                      fill="none"
                      viewBox="0 0 24 24"
                      stroke="currentColor"
                      stroke-width="2"
                    >
                      <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"
                      />
                    </svg>
                    Invoice
                  </button>
                  <button class="flex items-center px-2 py-1 btn-primary">
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      class="w-6 h-6 mr-1"
                      fill="none"
                      viewBox="0 0 24 24"
                      stroke="currentColor"
                      stroke-width="2"
                    >
                      <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z"
                      />
                    </svg>
                    Pay
                  </button>
                </td>
              </tr>
              <tr class="border-b">
                <td>
                  <a href="/src/order-details.html" class="text-purple-600 hover:text-purple-500">
                    #1234
                  </a>
                </td>
                <td>May 3, 07:28PM</td>
                <td>
                  <span class="p-1 text-white rounded bg-emerald-500">Paid</span>
                </td>
                <td>$58.25</td>
                <td class="flex gap-3">
                  <button
                    class="flex items-center px-2 py-1 btn-primary bg-emerald-500 hover:bg-emerald-600 active:bg-emerald-700"
                  >
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      class="w-5 h-5 mr-1"
                      fill="none"
                      viewBox="0 0 24 24"
                      stroke="currentColor"
                      stroke-width="2"
                    >
                      <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"
                      />
                    </svg>
                    Invoice
                  </button>
                  <button class="flex items-center px-2 py-1 btn-primary">
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      class="w-6 h-6 mr-1"
                      fill="none"
                      viewBox="0 0 24 24"
                      stroke="currentColor"
                      stroke-width="2"
                    >
                      <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z"
                      />
                    </svg>
                    Pay
                  </button>
                </td>
              </tr>
              <tr class="border-b">
                <td>
                  <a href="/src/order-details.html" class="text-purple-600 hover:text-purple-500">
                    #1234
                  </a>
                </td>
                <td>May 3, 07:28PM</td>
                <td>
                  <span class="p-1 text-white bg-orange-300 rounded">Processing</span>
                </td>
                <td>$58.25</td>
                <td class="flex gap-3">
                  <button
                    class="flex items-center px-2 py-1 btn-primary bg-emerald-500 hover:bg-emerald-600 active:bg-emerald-700"
                  >
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      class="w-5 h-5 mr-1"
                      fill="none"
                      viewBox="0 0 24 24"
                      stroke="currentColor"
                      stroke-width="2"
                    >
                      <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"
                      />
                    </svg>
                    Invoice
                  </button>
                  <button class="flex items-center px-2 py-1 btn-primary">
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      class="w-6 h-6 mr-1"
                      fill="none"
                      viewBox="0 0 24 24"
                      stroke="currentColor"
                      stroke-width="2"
                    >
                      <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z"
                      />
                    </svg>
                    Pay
                  </button>
                </td>
              </tr>
              <tr class="border-b">
                <td>
                  <a href="/src/order-details.html" class="text-purple-600 hover:text-purple-500">
                    #1234
                  </a>
                </td>
                <td>May 3, 07:28PM</td>
                <td>
                  <span class="p-1 text-white rounded bg-emerald-500">Paid</span>
                </td>
                <td>$58.25</td>
                <td class="flex gap-3">
                  <button
                    class="flex items-center px-2 py-1 btn-primary bg-emerald-500 hover:bg-emerald-600 active:bg-emerald-700"
                  >
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      class="w-5 h-5 mr-1"
                      fill="none"
                      viewBox="0 0 24 24"
                      stroke="currentColor"
                      stroke-width="2"
                    >
                      <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"
                      />
                    </svg>
                    Invoice
                  </button>
                  <button class="flex items-center px-2 py-1 btn-primary">
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      class="w-6 h-6 mr-1"
                      fill="none"
                      viewBox="0 0 24 24"
                      stroke="currentColor"
                      stroke-width="2"
                    >
                      <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z"
                      />
                    </svg>
                    Pay
                  </button>
                </td>
              </tr>
              <tr class="border-b">
                <td>
                  <a href="/src/order-details.html" class="text-purple-600 hover:text-purple-500">
                    #1234
                  </a>
                </td>
                <td>May 3, 07:28PM</td>
                <td>
                  <span class="p-1 text-white bg-red-500 rounded">Cancelled</span>
                </td>
                <td>$58.25</td>
                <td class="flex gap-3">
                  <button
                    class="flex items-center px-2 py-1 btn-primary bg-emerald-500 hover:bg-emerald-600 active:bg-emerald-700"
                  >
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      class="w-5 h-5 mr-1"
                      fill="none"
                      viewBox="0 0 24 24"
                      stroke="currentColor"
                      stroke-width="2"
                    >
                      <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"
                      />
                    </svg>
                    Invoice
                  </button>
                  <button class="flex items-center px-2 py-1 btn-primary">
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      class="w-6 h-6 mr-1"
                      fill="none"
                      viewBox="0 0 24 24"
                      stroke="currentColor"
                      stroke-width="2"
                    >
                      <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z"
                      />
                    </svg>
                    Pay
                  </button>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </main>

<?php require_once('./partials/footer.php'); ?>
