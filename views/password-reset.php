<?php require_once('./partials/header.php'); ?>
<?php require_once('./partials/nav.php'); ?><main class="p-5">
      <form action="" method="post" class="w-[400px] mx-auto p-6 my-16">
        <h2 class="mb-5 text-2xl font-semibold text-center">
          Enter or Email to reset password 
        </h2>
        <p class="mb-6 text-center text-gray-500">
          or
          <a
            href="/src/login.html"
            class="text-purple-600 hover:text-purple-500"
            >login with existing account</a
          >
        </p>

        <div class="mb-3">
          <input
            id="loginEmail"
            type="email"
            name="email"
            placeholder="Your email address"
            class="w-full border-gray-300 focus:border-purple-500 focus:outline-none focus:ring-purple-500 rounded-md"
          />
        </div>
        <button
          class="w-full btn-primary bg-emerald-500 hover:bg-emerald-600 active:bg-emerald-700"
        >
          Submit
        </button>
      </form>
    </main>

<?php require_once('./partials/footer.php'); ?>
