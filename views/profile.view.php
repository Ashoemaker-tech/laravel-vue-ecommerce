<?php require_once('./partials/header.php'); ?>
<?php require_once('./partials/nav.php'); ?>
<main class="p-5">
      <div class="container mx-auto lg:w-2/3 xl:w-2/3">
        <div class="items-start grid grid-cols-1 sm:grid-cols-5 gap-6">
          <div class="p-4 bg-white rounded-lg shadow col-span-3">
            <!-- Profile Details -->
            <div class="mb-6">
              <h2 class="mb-5 text-xl">Your Profile</h2>
              <div class="mb-4">
                <input
                  placeholder="Your Name"
                  type="text"
                  name="name"
                  class="w-full border-gray-300 focus:border-purple-500 focus:outline-none focus:ring-purple-500 rounded-md"
                />
              </div>
              <div class="mb-4">
                <input
                  placeholder="Your Email"
                  type="email"
                  name="email"
                  class="w-full border-gray-300 focus:border-purple-500 focus:outline-none focus:ring-purple-500 rounded-md"
                />
              </div>
              <div class="mb-4">
                <input
                  placeholder="Your Phone"
                  type="text"
                  name="phone"
                  class="w-full border-gray-300 focus:border-purple-500 focus:outline-none focus:ring-purple-500 rounded-md"
                />
              </div>
            </div>
            <!--/ Profile Details -->

            <!-- Billing Address -->
            <div class="mb-6">
              <h2 class="mb-5 text-xl">Billing Address</h2>
              <div class="flex gap-3">
                <div class="flex-1 mb-4">
                  <input
                    placeholder="Address 1"
                    type="text"
                    name="billing_address_1"
                    class="w-full border-gray-300 focus:border-purple-500 focus:outline-none focus:ring-purple-500 rounded-md"
                  />
                </div>
                <div class="flex-1 mb-4">
                  <input
                    placeholder="Address 2"
                    type="text"
                    name="billing_address_2"
                    class="w-full border-gray-300 focus:border-purple-500 focus:outline-none focus:ring-purple-500 rounded-md"
                  />
                </div>
              </div>
              <div class="flex gap-3">
                <div class="flex-1 mb-4">
                  <input
                    placeholder="City"
                    type="text"
                    name="billing_city"
                    class="w-full border-gray-300 focus:border-purple-500 focus:outline-none focus:ring-purple-500 rounded-md"
                  />
                </div>
                <div class="flex-1 mb-4">
                  <input
                    placeholder="State"
                    type="text"
                    name="billing_state"
                    class="w-full border-gray-300 focus:border-purple-500 focus:outline-none focus:ring-purple-500 rounded-md"
                  />
                </div>
              </div>
              <div class="flex gap-3">
                <div class="flex-1 mb-4">
                  <select
                    placeholder="Country"
                    type="text"
                    name="billing_country"
                    class="w-full border-gray-300 focus:border-purple-500 focus:outline-none focus:ring-purple-500 rounded-md"
                  >
                    <option value="">Country</option>
                    <option value="ge">Georgia</option>
                    <option value="de">Germany</option>
                    <option value="in">India</option>
                    <option value="us">United Kingdom</option>
                    <option value="uk">United States</option>
                  </select>
                </div>
                <div class="flex-1 mb-4">
                  <input
                    placeholder="Zipcode"
                    type="text"
                    name="billing_zipcode"
                    class="w-full border-gray-300 focus:border-purple-500 focus:outline-none focus:ring-purple-500 rounded-md"
                  />
                </div>
              </div>
            </div>
            <!--/ Billing Address -->

            <!-- Shipping Address -->
            <div class="mb-6">
              <div class="flex items-center justify-between mb-5">
                <h2 class="text-xl">Shipping Address</h2>
                <div class="flex items-center">
                  <input
                    id="sameAsBillingAddress"
                    type="checkbox"
                    class="mr-3 text-purple-500 border-gray-300 rounded focus:ring-purple-500"
                  />
                  <label for="sameAsBillingAddress">Same as Billing</label>
                </div>
              </div>
              <div class="flex gap-3">
                <div class="flex-1 mb-4">
                  <input
                    placeholder="Address 1"
                    type="text"
                    name="shipping_address_1"
                    class="w-full border-gray-300 focus:border-purple-500 focus:outline-none focus:ring-purple-500 rounded-md"
                  />
                </div>
                <div class="flex-1 mb-4">
                  <input
                    placeholder="Address 2"
                    type="text"
                    name="shipping_address_2"
                    class="w-full border-gray-300 focus:border-purple-500 focus:outline-none focus:ring-purple-500 rounded-md"
                  />
                </div>
              </div>
              <div class="flex gap-3">
                <div class="flex-1 mb-4">
                  <input
                    placeholder="City"
                    type="text"
                    name="shipping_city"
                    class="w-full border-gray-300 focus:border-purple-500 focus:outline-none focus:ring-purple-500 rounded-md"
                  />
                </div>
                <div class="flex-1 mb-4">
                  <input
                    placeholder="State"
                    type="text"
                    name="shipping_state"
                    class="w-full border-gray-300 focus:border-purple-500 focus:outline-none focus:ring-purple-500 rounded-md"
                  />
                </div>
              </div>
              <div class="flex gap-3">
                <div class="flex-1 mb-4">
                  <select
                    placeholder="Country"
                    type="text"
                    name="shipping_country"
                    class="w-full border-gray-300 focus:border-purple-500 focus:outline-none focus:ring-purple-500 rounded-md"
                  >
                    <option value="">Country</option>
                    <option value="ge">Georgia</option>
                    <option value="de">Germany</option>
                    <option value="in">India</option>
                    <option value="us">United Kingdom</option>
                    <option value="uk">United States</option>
                  </select>
                </div>
                <div class="flex-1 mb-4">
                  <input
                    placeholder="Zipcode"
                    type="text"
                    name="shipping_zipcode"
                    class="w-full border-gray-300 focus:border-purple-500 focus:outline-none focus:ring-purple-500 rounded-md"
                  />
                </div>
              </div>
            </div>
            <!--/ Shipping Address -->

            <button class="w-full btn-primary bg-emerald-500 hover:bg-emerald-600 active:bg-emerald-700">Update</button>
          </div>

          <div class="p-4 bg-white rounded-lg shadow col-span-2">
            <h2 class="mb-5 text-xl">Your Account</h2>
            <div class="mb-4">
              <input
                type="password"
                name="password"
                placeholder="Your Current password"
                class="w-full border-gray-300 focus:border-purple-500 focus:outline-none focus:ring-purple-500 rounded-md"
              />
            </div>
            <div class="mb-4">
              <input
                type="password"
                name="password"
                placeholder="New password"
                class="w-full border-gray-300 focus:border-purple-500 focus:outline-none focus:ring-purple-500 rounded-md"
              />
            </div>
            <div class="mb-4">
              <input
                type="password"
                name="password"
                placeholder="Repeat new password"
                class="w-full border-gray-300 focus:border-purple-500 focus:outline-none focus:ring-purple-500 rounded-md"
              />
            </div>
            <div>
              <button class="btn-primary bg-emerald-500 hover:bg-emerald-600 active:bg-emerald-700">Update</button>
            </div>
          </div>
        </div>
      </div>
    </main>

<?php require_once('./partials/footer.php'); ?>
