<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registration System Login</title>

  <link rel="stylesheet" href="/css/edit_main.css">
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
      <div class="container px-5 py-24 mx-auto">
        <div class="text-center mb-20">
          <h1 class="sm:text-3xl text-2xl font-medium text-center title-font text-gray-900 mb-4">ยินดีต้องรับสู่หน้า Edit Data</h1>
          <p class="text-base leading-relaxed xl:w-2/4 lg:w-3/4 mx-auto">ยินดีต้องรับเข้าสู่หน้า Edit Data หากต้องการแก้ไขข้อมูลสามารถแก้ไขได้โดยไปที่หน้าแก้ไข</p>
        </div>

        <div class="flex flex-wrap lg:w-1/2 md:w-2/3 mx-auto">
          <div class="p-2 sm:w-1/2 w-full">
            <div class="rounded flex h-full items-center">
              <p for="name">ชื่อ :&nbsp;</p>
              <p class="title-font font-medium" id="name" name="name"><?= $name ? explode('/n', $name)[0] : ''; ?></p>
            </div>
          </div>
          <div class="p-2 sm:w-1/2 w-full">
            <div class="rounded flex h-full items-center">
              <p for="lastname">นามสกุล :&nbsp;</p>
              <p id="lastname" name="lastname" class="title-font font-medium"><?= $name ? explode('/n', $name)[1] : ''; ?></p>
            </div>
          </div>
          <div class="p-2 sm:w-1/2 w-full">
            <div class="rounded flex h-full items-center">
              <p for="gender">เพศ :&nbsp;</p>
              <p id="gender" name="gender" class="title-font font-medium"><?php
                                                                          if ($role) {
                                                                            $sex = $role === '1' ? 'ชาย' : 'หญิง';
                                                                            echo $sex;
                                                                          } else {
                                                                            echo "";
                                                                          }
                                                                          ?></p>
            </div>
          </div>
          <div class="p-2 sm:w-1/2 w-full">
            <div class="rounded flex h-full items-center">
              <p for="studentID">รหัสนักศึกษา :&nbsp;</p>
              <p id="studentID" name="studentID" class="title-font font-medium"><?= $id ? $id : ''; ?></p>
            </div>
          </div>

          <div class="p-2 sm:w-1/2 w-full">
            <div class="rounded flex h-full items-center">
              <p for="province">จังหวัด :&nbsp;</p>
              <p id="province" name="province" class="title-font font-medium"><?= $province ? $province : ''; ?></p>
            </div>
          </div>
          <div class="p-2 sm:w-1/2 w-full">
            <div class="rounded flex h-full items-center">
              <p for="telephone">เบอร์โทร :&nbsp;</p>
              <p id="telephone" name="telephone" class="title-font font-medium"><?= $tel ? $tel : ''; ?></p>
            </div>
          </div>
          <div class="p-2 sm:w-1/2 w-full">
            <div class="rounded flex h-full items-center">
              <p for="telephone">Email :&nbsp;</p>
              <p id="telephone" name="telephone" class="title-font font-medium"><?= $email ? $email : ''; ?></p>
            </div>
          </div>
          <div class="p-2 sm:w-1/2 w-full">
            <div class="rounded flex h-full items-center">
              <p for="facebook">Facebook :&nbsp;</p>
              <p id="facebook" name="facebook" class="title-font font-medium"><?= $facebook ? $facebook : ''; ?></p>
            </div>
          </div>
          <div class="p-2 sm:w-1/2 w-full">
            <div class="rounded flex h-full items-center">
              <p for="idLine">ID Line :&nbsp;</p>
              <p id="idLine" name="idLine" class="title-font font-medium"><?= $line ? $line : ''; ?></p>
            </div>
          </div>

          <?php
          if ($role == '1') {
          ?>
            <div class="p-2 sm:w-1/2 w-full">
              <div class="rounded flex h-full items-center">
                <p for="studyGroup">รุ่น :&nbsp;</p>
                <p id="studyGroup" name="studyGroup" class="title-font font-medium"><?= $gen ? $gen : ''; ?></p>
              </div>
            </div>
            <div class="p-2 sm:w-1/2 w-full">
              <div class="rounded flex h-full items-center">
                <p for="studyGroup">ชั้น :&nbsp;</p>
                <p id="studyGroup" name="studyGroup" class="title-font font-medium"><?= $class ? $class : ''; ?></p>
              </div>
            </div>
            <div class="p-2 sm:w-1/2 w-full">
              <div class="rounded flex h-full items-center">
                <p for="studyGroup">เกรดเฉลี่ย :&nbsp;</p>
                <p id="studyGroup" name="studyGroup" class="title-font font-medium"><?= $avgGrade ? $avgGrade : ''; ?></p>
              </div>
            </div>
            <div class="p-2 sm:w-1/2 w-full">
              <div class="rounded flex h-full items-center">
                <p for="studyGroup">เข้าศึกษาเมื่อ :&nbsp;</p>
                <p id="studyGroup" name="studyGroup" class="title-font font-medium"><?= $startDate ? $startDate : ''; ?></p>
              </div>
            </div>
            <div class="p-2 sm:w-1/2 w-full">
              <div class="rounded flex h-full items-center">
                <p for="studyGroup">จบการศึกษา :&nbsp;</p>
                <p id="studyGroup" name="studyGroup" class="title-font font-medium"><?= $endDate ? $endDate : ''; ?></p>
              </div>
            </div>

          <?php
          }
          ?>

          <?php
          if ($role == '2') {
          ?>
            <div class="p-2 sm:w-1/2 w-full">
              <div class="rounded flex h-full items-center">
                <p for="studyGroup">ตำแหน่ง :&nbsp;</p>
                <p id="studyGroup" name="studyGroup" class="title-font font-medium"><?= $position ? $position : ''; ?></p>
              </div>
            </div>

          <?php
          }
          ?>


        </div>
        <a href="/editProfile"><button class="flex mx-auto mt-16 text-white bg-pink-500 border-0 py-2 px-28 focus:outline-none hover:bg-pink-600 rounded text-lg">แก้ไข</button></a>
      </div>
    </section>

  </div>
  <footer>
    <img src="/image/footer.png" class="d-block w-100" alt="footer.png">
  </footer>
</body>

</html>