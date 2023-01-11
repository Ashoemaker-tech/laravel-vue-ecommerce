<?php require_once('./partials/header.php'); ?>
<?php require_once('./partials/nav.php'); ?>
<main class="p-5">
<form
  action=""
  method="post"
  class="w-[400px] mx-auto p-6 my-16"
>
  <h2 class="mb-4 text-2xl font-semibold text-center">Create an account</h2>
  <p class="mb-3 text-center text-gray-500">
    or
    <a
      href="/src/login.html"
      class="text-sm text-purple-700 hover:text-purple-600"
      >login with existing account</a
    >
  </p>
  <div class="mb-4">
    <input
      placeholder="Your name"
      type="text"
      name="name"
      class="w-full border-gray-300 focus:border-purple-500 focus:outline-none focus:ring-purple-500 rounded-md"
    />
  </div>
  </p>
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
      placeholder="Password"
      type="password"
      name="password"
      class="w-full border-gray-300 focus:border-purple-500 focus:outline-none focus:ring-purple-500 rounded-md"
    />
  </div>
  </div>
  <div class="mb-4">
    <input
      placeholder="Repeat Password"
      type="password"
      name="password"
      class="w-full border-gray-300 focus:border-purple-500 focus:outline-none focus:ring-purple-500 rounded-md"
    />
  </div>

  <button
    class="w-full btn-primary bg-emerald-500 hover:bg-emerald-600 active:bg-emerald-700"
  >
    Signup
  </button>
</form>
</main>

<?php require_once('./partials/footer.php'); ?>
