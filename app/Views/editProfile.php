<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registration System Login</title>

  <link rel="stylesheet" href="css/edit_details.css">
  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
  <!-- JavaScript Bundle with Popper -->
  <script script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.8/tailwind.min.css" ntegrity="sha512-sP93un/6HzFSfkHZ4jCTbf4XgiMldakhz+/ibX+8sk6fVvkWvoGhqfFeVlFoY6aEPakF6zI4XvVGF5+t/ahHQg==" rossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
  <header class="text-gray-600 body-font header">
    <div class="container mx-auto flex flex-wrap p-1 flex-col md:flex-row items-center">
      <a href="index"><img class="logo" src="image/logo.png" alt="logo"></a>
      <nav class="md:ml-auto flex flex-wrap items-center text-base justify-center nav">
        <a href="index" class="mr-5 hover:text-gray-900">Home</a>
        <a href="login" class="mr-5 hover:text-gray-900">Log In</a>
        <a href="register" class="mr-5 hover:text-gray-900">Register</a>
      </nav>
    </div>
  </header>

  <div class="article">
    <section class="text-gray-500 body-font relative">
      <div class="container px-5 py-24 mx-auto">
        <div class="flex flex-col text-center w-full mb-12">
          <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-gray-900">แก้ไขข้อมูล</h1>
          <p class="lg:w-2/3 mx-auto leading-relaxed text-base">ยินดีต้องรับเข้าสู่หน้าแก้ไขข้อมูล หากต้องการแก้ไขข้อมูลสามารถแก้ไขได้ที่หน้านี้</p>
        </div>
        <div class="lg:w-1/2 md:w-2/3 mx-auto">
          <form action="/editProfile" method="POST">
            <div class="flex flex-wrap -m-2">

              <div class="p-2 w-1/2">
                <div class="relative">
                  <label for="name" class="leading-7 text-sm text-gray-600">ชื่อ</label>
                  <input type="text" id="firstName" name="firstName" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out" value="<?= $name ? explode('/n', $name)[0] : ''; ?>">
                </div>
              </div>
              <div class="p-2 w-1/2">
                <div class="relative">
                  <label for="lastName" class="leading-7 text-sm text-gray-600">นามสกุล</label>
                  <input type="text" id="lastName" name="lastName" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out" value="<?= $name ? explode('/n', $name)[1] : ''; ?>">
                </div>
              </div>

              <div class="p-2 w-1/2">
                <div class="relative">
                  <label for="gender" class="leading-7 text-sm text-gray-600">เพศ</label> <br>
                  <select class="form-select leading-7 text-sm text-gray-600" aria-label="Default select example">
                    <option selected id="gender" name="gender" disabled>เลือก</option>
                    <?php
                    if ($sex == '1') {
                    ?>
                      <option selected value="1">ชาย</option>
                      <option value="2">หญิง</option>
                    <?php
                    } else {
                    ?>
                      <option value="1">ชาย</option>
                      <option selected value="2">หญิง</option>
                    <?php
                    }
                    ?>

                  </select>
                </div>
              </div>
              <div class="p-2 w-1/2">
                <div class="relative">
                  <label for="studentID" class="leading-7 text-sm text-gray-600">รหัสนักศึกษา</label>
                  <input type="text" id="studentID" name="studentID" maxlength="9" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out" value="<?= $id ? $id : ''; ?>" disabled>
                </div>
              </div>

              <div class="p-2 w-1/2">
                <div class="relative">
                  <label for="province" class="leading-7 text-sm text-gray-600">จังหวัด</label>
                  <input type="text" id="province" name="province" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out" value="<?= $province ? $province : ''; ?>">
                </div>
              </div>
              <!-- <div class="p-2 w-1/4">
              <div class="relative">
                <label for="GradePopular" class="leading-7 text-sm text-gray-600">เกรดนิยม</label> <br>
                <select class="form-select leading-7 text-sm text-gray-600" aria-label="Default select example">
                  <option selected id="GradePopular" name="GradePopular">เลือก</option>
                  <option value="1">ไม่มีอันดับเกรดนิยม</option>
                  <option value="2">เกรดนิยมอันดับ 1</option>
                  <option value="3">เกรดนิยมอันดับ 2</option>
                  <option value="4">เกรดนิยมอันดับ 3</option>
                </select>
              </div>
            </div> -->

              <!-- <div class="p-2 w-1/2">
              <div class="relative">
                <label for="major" class="leading-7 text-sm text-gray-600">สาขาวิชา</label> <br>
                <select class="form-select leading-7 text-sm text-gray-600" aria-label="Default select example">
                  <option selected id="major" name="major">เลือก</option>
                  <option value="1">วิศวกรรมซอฟต์แวร์</option>
                  <option value="2">วิทยาการคอมพิวเตอร์</option>
                  <option value="3">สารธารณสุขศาสตร์</option>
                </select>
              </div>
            </div> -->
              <!-- <div class="p-2 w-1/2">
              <div class="relative">
                <label for="faculty" class="leading-7 text-sm text-gray-600">คณะ</label> <br>
                <select class="form-select leading-7 text-sm text-gray-600" aria-label="Default select example">
                  <option selected id="faculty" name="faculty">เลือก</option>
                  <option value="1">คณะครุศาสตร์</option>
                  <option value="2">คณะมนุษย์ศาสตร์และสังคมศาสตร์</option>
                  <option value="3">คณะวิทยาศาสตร์และเทคโนโลยีสารสนเทศ</option>
                  <option value="4">คณะวิทยาาการจัดการ</option>
                  <option value="5">คณะพยาบาลศาสตร์</option>
                </select>
              </div>
            </div> -->
              <!-- <div class="p-2 w-1/2">
              <div class="relative">
                <label for="startSchool" class="leading-7 text-sm text-gray-600">ปีการศึกษา</label> <br>
                <select class="form-select leading-7 text-sm text-gray-600" aria-label="Default select example">
                  <option selected id="startSchool" name="startSchool">เลือก</option>
                  <option value="1">จบการศึกษาแล้ว</option>
                  <option value="2">2557</option>
                  <option value="3">2558</option>
                  <option value="4">2559</option>
                  <option value="5">2560</option>
                  <option value="6">2561</option>
                  <option value="7">2562</option>
                  <option value="8">2563</option>
                  <option value="9">2564</option>
                </select>
              </div>
            </div>
            <div class="p-2 w-1/2">
              <div class="relative">
                <label for="endSchool" class="leading-7 text-sm text-gray-600">ปีการศึกษาที่จบ</label> <br>
                <select class="form-select leading-7 text-sm text-gray-600" aria-label="Default select example">
                  <option selected id="endSchool" name="endSchool">เลือก</option>
                  <option value="1">กำศึกษา</option>
                  <option value="2">2557</option>
                  <option value="3">2558</option>
                  <option value="4">2559</option>
                  <option value="5">2560</option>
                  <option value="6">2561</option>
                  <option value="7">2562</option>
                  <option value="8">2563</option>
                  <option value="9">2564</option>
                </select>
              </div>
            </div>
            <div class="p-2 w-1/2">
              <div class="relative">
                <label for="province" class="leading-7 text-sm text-gray-600">จังหวัด</label>
                <input type="text" id="province" name="province" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
              </div>
            </div> -->
              <div class="p-2 w-1/2">
                <div class="relative">
                  <label for="tel" class="leading-7 text-sm text-gray-600">เบอร์โทร</label>
                  <input type="text" id="tel" name="tel" maxlength="10" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out" value="<?= $tel ? $tel : ''; ?>">
                </div>
              </div>
              <div class="p-2 w-1/2">
                <div class="relative">
                  <label for="facebook" class="leading-7 text-sm text-gray-600">Facebook</label>
                  <input type="text" id="facebook" name="facebook" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out" value="<?= $facebook ? $facebook : ''; ?>">
                </div>
              </div>
              <div class="p-2 w-1/2">
                <div class="relative">
                  <label for="line" class="leading-7 text-sm text-gray-600">ID Line</label>
                  <input type="text" id="line" name="line" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out" value="<?= $line ? $line : ''; ?>">
                </div>
              </div>

              <div class="p-2 w-full m-5">
                <div class="flex justify-center">
                  <button class="inline-flex text-white bg-pink-500 border-0 py-2 px-28 focus:outline-none hover:bg-pink-600 rounded text-lg">บันทึก</button>
                  <a href="edit_main"><button class="ml-4 inline-flex text-gray-700 bg-gray-100 border-0 py-2 px-28 focus:outline-none hover:bg-gray-200 rounded text-lg">ยกเลิก</button></a>
                </div>
              </div>
            </div>
          </form>

        </div>
      </div>
    </section>

  </div>
  <footer>
    <img src="image/footer.png" class="d-block w-100" alt="footer.png">
  </footer>
</body>

</html>