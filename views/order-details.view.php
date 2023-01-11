<?php require_once('./partials/header.php'); ?>
<?php require_once('./partials/nav.php'); ?>
<main class="p-5">
      <div class="container mx-auto lg:w-2/3 xl:w-2/3">
        <h1 class="mb-6 text-3xl font-bold">Order #1234 Details</h1>

        <div class="p-3 bg-white shadow-md rounded-md">
          <div>
            <table class="table-sm">
              <tbody>
                <tr>
                  <td class="font-bold">Order #</td>
                  <td>1234</td>
                </tr>
                <tr>
                  <td class="font-bold">Order Date</td>
                  <td>May 3, 07:28PM</td>
                </tr>
                <tr>
                  <td class="font-bold">Status</td>
                  <td>
                    <span class="p-1 text-white rounded bg-emerald-500"
                      >Paid</span
                    >
                  </td>
                </tr>
                <tr>
                  <td class="font-bold">SubTotal</td>
                  <td>$157</td>
                </tr>
              </tbody>
            </table>
          </div>

          <hr class="my-5" />

          <!-- Order Items -->
          <div>
            <!-- Product Item -->
            <div class="flex gap-6">
              <div class="flex items-center w-16 h-16 border border-gray-300">
                <img src="/src/img/1_1.jpg" alt="" />
              </div>
              <div class="flex flex-col justify-between flex-1 pb-3">
                <h3 class="mb-4 text-ellipsis">
                  Logitech G502 HERO High Performance Wired Gaming Mouse, HERO
                  25K Sensor, 25,600 DPI, RGB, Adjustable Weights, 11
                </h3>
              </div>
              <div class="flex flex-col items-end justify-between w-32 pb-3">
                <div class="mb-4 text-lg">$17.99</div>
              </div>
            </div>
            <!--/ Product Item -->
            <hr class="my-2" />
            <!-- Product Item -->
            <div class="flex gap-6">
              <div class="flex items-center w-16 h-16 border border-gray-300">
                <img src="/src/img/1_1.jpg" alt="" />
              </div>
              <div class="flex flex-col justify-between flex-1 pb-3">
                <h3 class="mb-4 text-ellipsis">
                  Logitech G502 HERO High Performance Wired Gaming Mouse, HERO
                  25K Sensor, 25,600 DPI, RGB, Adjustable Weights, 11
                </h3>
              </div>
              <div class="flex flex-col items-end justify-between w-32 pb-3">
                <div class="mb-4 text-lg">$17.99</div>
              </div>
            </div>
            <!--/ Product Item -->
            <hr class="my-2" />
            <!-- Product Item -->
            <div class="flex gap-6">
              <div class="flex items-center w-16 h-16 border border-gray-300">
                <img src="/src/img/1_1.jpg" alt="" />
              </div>
              <div class="flex flex-col justify-between flex-1 pb-3">
                <h3 class="mb-4 text-ellipsis">
                  Logitech G502 HERO High Performance Wired Gaming Mouse, HERO
                  25K Sensor, 25,600 DPI, RGB, Adjustable Weights, 11
                </h3>
              </div>
              <div class="flex flex-col items-end justify-between w-32 pb-3">
                <div class="mb-4 text-lg">$17.99</div>
              </div>
            </div>
            <!--/ Product Item -->
          </div>
          <!--/ Order Items -->

          <div class="pt-4 border-t border-gray-300">
            <button type="submit" class="flex items-center justify-center w-full py-3 text-lg btn-primary">
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
              Proceed to Pay
            </button>
          </div>
        </div>
      </div>
    </main>

<?php require_once('./partials/footer.php'); ?>
