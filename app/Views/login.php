<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registration System Login</title>

  <link rel="stylesheet" href="/css/login.css">
  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
  <!-- JavaScript Bundle with Popper -->
  <script script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.8/tailwind.min.css" ntegrity="sha512-sP93un/6HzFSfkHZ4jCTbf4XgiMldakhz+/ibX+8sk6fVvkWvoGhqfFeVlFoY6aEPakF6zI4XvVGF5+t/ahHQg==" rossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
  <header class="text-gray-600 body-font header">
    <div class="container mx-auto flex flex-wrap p-1 flex-col md:flex-row items-center">
      <a href="/index"><img class="logo" src="/image/logo.png" alt="logo"></a>
      <nav class="md:ml-auto flex flex-wrap items-center text-base justify-center nav">
        <a href="/index" class="mr-5 hover:text-gray-900">Home</a>
        <a href="/login" class="mr-5 hover:text-gray-900">Log In</a>
        <a href="/register" class="mr-5 hover:text-gray-900">Register</a>
      </nav>
    </div>
  </header>

  <div class="article">
    <section class="text-gray-500 body-font">
      <div class="container px-5 py-24 mx-auto flex flex-wrap items-center">
        <div class="lg:w-3/5 md:w-1/2 md:pr-16 lg:pr-0 pr-0 text_contect">
          <h1 class="title-font font-medium text-3xl text-gray-900">เข้าสู่ระบบ</h1>
          <p class="leading-relaxed mt-4">ยินดีต้องรับเข้าสู่การเข้าสู่ระบบ เข้าสู่ระบบเพื่อดำเนินกิจกรรมต่างๆ ของระบบได้อย่างเต็มประสิทธิภาพ ทางเราแนะนำให้เข้าสู่ระบบก่อนดำเนินการต่างๆ</p>
        </div>


        <div class="lg:w-2/6 md:w-1/2 bg-gray-100 rounded-lg p-8 flex flex-col md:ml-auto w-full mt-10 md:mt-0">
          <?php
          if (session()->getFlashdata('msg')) {
          ?>
            <div class="alert flex flex-row items-center bg-red-200 p-3 rounded border-b-2 border-red-300">
              <div class="alert-icon flex items-center bg-red-100 border-2 border-red-500 justify-center h-10 w-10 flex-shrink-0 rounded-full">
                <span class="text-red-500">
                  <svg fill="currentColor" viewBox="0 0 20 20" class="h-6 w-6">
                    <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                  </svg>
                </span>
              </div>
              <div class="alert-content ml-4">
                <div class="alert-title font-semibold text-lg text-red-800">
                  Error
                </div>
                <div class="alert-description text-sm text-red-600">
                  <?= session()->getFlashdata('msg') ?>
                </div>
              </div>
            </div>
          <?php
          }
          ?>
          <form action="/login" method="POST">
            <div class="relative mb-4">
              <label for="full-name" class="leading-7 text-sm text-gray-600 complete">Student ID</label>
              <input type="text" id="studentID" name="id" class="w-full bg-white rounded border border-gray-300 focus:border-pink-500 focus:ring-2 focus:ring-pink-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
            </div>
            <div class="relative mb-4">
              <label for="email" class="leading-7 text-sm text-gray-600 complete">Password</label>
              <input type="password" id="password" name="password" class="w-full bg-white rounded border border-gray-300 focus:border-pink-500 focus:ring-2 focus:ring-pink-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
            </div>
            <a href="/index"><button class="text-white bg-pink-500 border-0 py-2 px-8 focus:outline-none hover:bg-pink-600 rounded text-lg" style="width: 100%;">Login</button></a>
            <p class="text-xs text-gray-500 mt-3 complete">You don't have account ? <a href="/register"><strong><u>Create account.</u></strong></a></p>
          </form>
        </div>

      </div>
    </section>
  </div>
  <footer>
    <img src="/image/footer.png" class="d-block w-100" alt="footer.png"">
  </footer>
</body>
</html>