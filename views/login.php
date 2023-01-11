<?php require_once('./partials/header.php'); ?>
<?php require_once('./partials/nav.php'); ?>
<main class="p-5">
      <form action="" method="post" class="w-[600px] mx-auto p-6 my-16">
        <h2 class="mb-5 text-2xl font-semibold text-center">
          Login to your account
        </h2>
        <p class="mb-6 text-center text-gray-500">
          or
          <a
            href="/src/signup.html"
            class="text-sm text-purple-700 hover:text-purple-600"
            >create new account</a
          >

        </p>
        <div class="mb-4 input-group input-group-outline">
          <label class="form-label">Email</label>
          <input
             type="text" 
            class="form-control" 
            name="email"
            id="loginEmail"
            />
        </div>
        <div class="mb-4 input-group input-group-outline">
          <label class="form-label">Password</label>
          <input
             type="password" 
            class="form-control" 
            name="password"
            id="loginEmail"
            />
        </div>
        <div class="flex items-center justify-between mb-5">
          <div class="flex items-center">
            <label class="inline-flex items-center mt-3">
              <input
                type="checkbox"
                class="absolute z-10 opacity-0 cursor-pointer checkbox"
              />
              <div class="form-check-input"></div>
              <span class="text-gray-700 cursor-pointer select-none">Remember Me</span>
            </label>
          </div>
          <a href="/src/password-reset.html" class="text-sm text-purple-700 hover:text-purple-600">Forgot Password?</a>
        </div>
       <button class="w-full button button-dark" data-ripple-light="true">Sign In</button> 
      </form>
    </main>
<?php require_once('./partials/footer.php'); ?>
