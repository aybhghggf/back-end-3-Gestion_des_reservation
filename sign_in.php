<html lang="en">
 <head>
  <meta charset="utf-8"/>
  <meta content="width=device-width, initial-scale=1" name="viewport"/>
  <title>
   Sign Up Page
  </title>
  <script src="https://cdn.tailwindcss.com">
  </script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
  <link href="https://fonts.googleapis.com/css2?family=Pacifico&amp;display=swap" rel="stylesheet"/>
  <style>
   .font-pacifico {
      font-family: "Pacifico", cursive;
    }
  </style>
 </head>
 <body class="bg-[#f8fafc] min-h-screen flex items-center justify-center p-4">
  <main class="bg-white rounded-xl p-8 w-full max-w-sm drop-shadow-md flex flex-col items-center">
   <h1 class="font-pacifico text-[24px] text-[#4c51bf] mb-4 select-none">
    Ecourse
   </h1>
   <h2 class="font-semibold text-black text-lg mb-6 select-none">
    Create Account
   </h2>
   <form class="w-full space-y-4">
    <div>
     <label class="sr-only" for="fullname">
      Full name
     </label>
     <div class="flex items-center bg-[#f1f5f9] border border-[#e2e8f0] rounded-md px-3 py-2 text-[#94a3b8] text-sm">
      <i class="fas fa-user mr-2">
      </i>
      <input class="bg-transparent outline-none w-full placeholder:text-[#94a3b8]" id="fullname" name="Nom" placeholder="Full name" type="text"/>
     </div>
    </div>
    <div>
     <label class="sr-only" for="email">
      Email
     </label>
     <div class="flex items-center bg-[#f1f5f9] border border-[#e2e8f0] rounded-md px-3 py-2 text-[#94a3b8] text-sm">
      <i class="fas fa-envelope mr-2">
      </i>
      <input class="bg-transparent outline-none w-full placeholder:text-[#94a3b8]" name="email" required id="email" placeholder="Email" type="email"/>
     </div>
    </div>
    <div>
     <label class="sr-only" for="phone">
      Phone
     </label>
     <div class="flex items-center bg-[#f1f5f9] border border-[#e2e8f0] rounded-md px-3 py-2 text-[#94a3b8] text-sm">
      <i class="fas fa-phone mr-2">
      </i>
      <input class="bg-transparent outline-none w-full placeholder:text-[#94a3b8]" id="phone" placeholder="Phone" type="tel" name="phone" />
     </div>
    </div>
    <div>
     <label class="sr-only" for="password">
      Password
     </label>
     <div class="flex items-center bg-[#f1f5f9] border border-[#e2e8f0] rounded-md px-3 py-2 text-[#94a3b8] text-sm">
      <i class="fas fa-lock mr-2">
      </i>
      <input class="bg-transparent outline-none w-full placeholder:text-[#94a3b8]" name="password" required id="password" placeholder="Password" type="password"/>
      <i class="far fa-eye text-[#94a3b8] cursor-pointer">
      </i>
     </div>
    </div>
    <button class="w-full bg-[#4c51bf] text-white font-semibold rounded-md py-3 mt-1" type="submit">
     Sign Up
    </button>
   </form>
   <p class="text-xs text-[#475569] mt-6 select-none">
    Already have an account?
    <a class="text-[#4c51bf] hover:underline" href="login.php">
     Login
    </a>
   </p>
  </main>
 </body>
</html>