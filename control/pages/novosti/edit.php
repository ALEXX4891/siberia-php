<?
$title = 'Страницы авторизации';
$description = '';
$keywords = '';
include $_SERVER["DOCUMENT_ROOT"] . '/control/includes/head.php';
error_reporting(E_ALL);

?>

<body class="body control__body control__body_news">

  <?
  include $_SERVER["DOCUMENT_ROOT"] . '/control/includes/header.php';
  ?>

  <main class="main control">
    <section class="section control__section edit-page">
      <div class="container control__container">
        <a href='/control/pages/novosti/index.php' class='control__back'>
          <svg width='9' height='15' viewBox='0 0 9 15' fill='none' xmlns='http://www.w3.org/2000/svg'>
            <path d='M8 13.4131L1 7.41309L8 1.41309' stroke='#999999' stroke-width='1.5' stroke-linecap='round' stroke-linejoin='round' />
          </svg>
          <span class='control__back-text'>
            Назад
          </span>
        </a>
        <h1 class='control__title'>
          Создать новость
        </h1>
        <?

        if (isset($_POST['noSubmit'])) {
          header("Location: /control/pages/novosti/");
        }

        if (isset($_POST['submit'])) {

          // echo '<pre>';
          // print_r($_POST);
          // echo '</pre>';
          // echo '<pre>';
          // print_r($_FILES);
          // echo '</pre>';

          $photoFileArr = [
            'photoFile',
            'image-1File',
            'image-2File',
            'image-3File',
            'image-4File',
            'image-5File',
            'image-6File',
            'image-7File',
            'image-8File',
            'image-9File',
            'image-10File'
          ];

          $images = [];

          echo $_FILES['image-3File']['name'];

          foreach ($photoFileArr as $value) {
            if (0 < $_FILES[$value]['error']) {
              $images[$value] = $_POST[str_replace('File', '', $value)];
              // echo $images[$value] . '<br>';
            } else {


              $rand = rand(1, 999);
              $data = date("dmy");
              $time = date("His"); // Определяем дату и время, для вставки в новое имя файла
              $mainPicture = $_FILES[$value]['name']; // Принимаем в переменную загруженный файл
              $type = strtolower(substr($mainPicture, 1 + strrpos($mainPicture, "."))); // Определяем расширение файла, переводим его в нижний регистр
              $file_new_name = $rand . '-' . $data . '-' . $time . '.' . $type; // Определяем новое имя файла
              move_uploaded_file($_FILES[$value]['tmp_name'], $_SERVER['DOCUMENT_ROOT'] . '/assets/img/' . $file_new_name);
              // echo $file_new_name;
              $images[$value] = $file_new_name;
              // echo $images[$value] . '<br>';
            }
          }

          // echo '<pre>';
          // print_r($images);
          // echo '</pre>';

          $id = $_GET['id'];
          $name = $_POST['title'];
          $date = $_POST['date'] ? $_POST['date'] : date('Y-m-d');
          $description = $_POST['description'];
          $photo = $images['photoFile'];
          $image_1 = $images['image-1File'];
          $image_2 = $images['image-2File'];
          $image_3 = $images['image-3File'];
          $image_4 = $images['image-4File'];
          $image_5 = $images['image-5File'];
          $image_6 = $images['image-6File'];
          $image_7 = $images['image-7File'];
          $image_8 = $images['image-8File'];
          $image_9 = $images['image-9File'];
          $image_10 = $images['image-10File'];
          $status = isset($_POST['check']) ? '1' : '0';

          $sql = sprintf(
            "UPDATE `news` SET 
            `title` = '%s', 
            `date` = '%s', 
            `description` = '%s', 
            `photo` = '%s', 
            `image-1` = '%s',
            `image-2` = '%s',
            `image-3` = '%s',
            `image-4` = '%s',
            `image-5` = '%s',
            `image-6` = '%s',
            `image-7` = '%s',
            `image-8` = '%s',
            `image-9` = '%s',
            `image-10` = '%s',
            `status` = '%s'
            WHERE id = '%s'
            ",
            mysqli_real_escape_string($db, $name),
            mysqli_real_escape_string($db, $date),
            mysqli_real_escape_string($db, $description),
            mysqli_real_escape_string($db, $photo),
            mysqli_real_escape_string($db, $image_1),
            mysqli_real_escape_string($db, $image_2),
            mysqli_real_escape_string($db, $image_3),
            mysqli_real_escape_string($db, $image_4),
            mysqli_real_escape_string($db, $image_5),
            mysqli_real_escape_string($db, $image_6),
            mysqli_real_escape_string($db, $image_7),
            mysqli_real_escape_string($db, $image_8),
            mysqli_real_escape_string($db, $image_9),
            mysqli_real_escape_string($db, $image_10),
            mysqli_real_escape_string($db, $status),
            mysqli_real_escape_string($db, $id)
          );
          // echo $sql;
          mysqli_query($db, $sql);
          header('Location: /control/pages/novosti/');

        }

        $id = $_GET['id'];
        $resultNews = mysqli_query($db, "SELECT * FROM news WHERE id = " . $id);
        $news = mysqli_fetch_array($resultNews);
        $chek = $news['status'] === '1' ? 'checked' : '';

        echo "

        <form action='#' method='post' class='control__head control__form' enctype='multipart/form-data'>
          <div class='control__form-top-wrap'>
            <label for='title' class='control__label control__label_title'>
              <span>
                Заголовок
              </span>
              <input id='title' class='control__input control__input_title' value='{$news['title']}' name='title' type='text' placeholder='Заголовок'>
            </label>
  
            <label for='date' class='control__label control__label_date'>
              <span>
                Дата
              </span>
              <input id='date' class='control__input control__input_date' value='{$news['date']}' type='date' name='date'>
            </label>
  
            <label class='control__label control__label_photo'>
              <span>
                Обложка (1712х563 px)
              </span>
              <input class='control__input control__input_photo' type='file' name='photoFile' hidden accept='image/*,image/jpeg'>
              <input class='control__input control__input_photo' value='{$news['photo']}' type='text' name='photo' hidden>

              <div class='control__photo-wrap'>
                <img src='/assets/img/{$news['photo']}' class='control__photo' alt='Обложка'>
              </div>
              <span class='control__btn control__btn_photo'>
                Загрузить фото
              </span>
            </label>
          </div>


          <label for='text' class='control__label control__label_text'>
            <span>
              Текст новости
            </span>
            <textarea id='text' class='control__input control__input_text' name='description' placeholder='Текст'>{$news['description']}</textarea>
          </label>

          <div class='control__gallery-wrap'>
            <span>
              Галерея
            </span>

            <div class='control__gallery-images'>
            <input class='control__input control__input_gallery' value='{$news['image-1']}' type='text' name='image-1' hidden>
              <label class='control__label control__label_gallery'>
                <input class='control__input control__input_gallery' type='file' name='image-1File' hidden accept='image/*,image/jpeg'>
                <div class='control__img-wrap'>
                  <img src='/assets/img/{$news['image-1']}' class='control__gallery' alt='Обложка'>
                </div>
                <span class='control__btn control__btn_gallery'>
                  Загрузить фото
                </span>
              </label>

              <input class='control__input control__input_gallery' value='{$news['image-2']}' type='text' name='image-2' hidden>
              <label class='control__label control__label_gallery'>
                <input class='control__input control__input_gallery' type='file' name='image-2File' hidden accept='image/*,image/jpeg'>

                <div class='control__img-wrap'>
                  <img src='/assets/img/{$news['image-2']}' class='control__gallery' alt='Обложка'>
                </div>
                <span class='control__btn control__btn_gallery'>
                  Загрузить фото
                </span>
              </label>

              <input class='control__input control__input_gallery' value='{$news['image-3']}' type='text' name='image-3' hidden>
              <label class='control__label control__label_gallery'>
                <input class='control__input control__input_gallery' type='file' name='image-3File' hidden accept='image/*,image/jpeg'>
                <div class='control__img-wrap'>
                  <img src='/assets/img/{$news['image-3']}' class='control__gallery' alt='Обложка'>
                </div>
                <span class='control__btn control__btn_gallery'>
                  Загрузить фото
                </span>
              </label>

              <input class='control__input control__input_gallery' value='{$news['image-4']}' type='text' name='image-4' hidden>
              <label class='control__label control__label_gallery'>
                <input class='control__input control__input_gallery' type='file' name='image-4File' hidden accept='image/*,image/jpeg'>
                <div class='control__img-wrap'>
                  <img src='/assets/img/{$news['image-4']}' class='control__gallery' alt='Обложка'>
                </div>
                <span class='control__btn control__btn_gallery'>
                  Загрузить фото
                </span>
              </label>

              <input class='control__input control__input_gallery' value='{$news['image-5']}' type='text' name='image-5' hidden>
              <label class='control__label control__label_gallery'>
                <input class='control__input control__input_gallery' type='file' name='image-5File' hidden accept='image/*,image/jpeg'>
                <div class='control__img-wrap'>
                  <img src='/assets/img/{$news['image-5']}' class='control__gallery' alt='Обложка'>
                </div>
                <span class='control__btn control__btn_gallery'>
                  Загрузить фото
                </span>
              </label>

              <input class='control__input control__input_gallery' value='{$news['image-6']}' type='text' name='image-6' hidden>
              <label class='control__label control__label_gallery'>
                <input class='control__input control__input_gallery' type='file' name='image-6File' hidden accept='image/*,image/jpeg'>
                <div class='control__img-wrap'>
                  <img src='/assets/img/{$news['image-6']}' class='control__gallery' alt='Обложка'>
                </div>
                <span class='control__btn control__btn_gallery'>
                  Загрузить фото
                </span>
              </label>

              <input class='control__input control__input_gallery' value='{$news['image-7']}' type='text' name='image-7' hidden>
              <label class='control__label control__label_gallery'>
                <input class='control__input control__input_gallery' type='file' name='image-7File' hidden accept='image/*,image/jpeg'>
                <div class='control__img-wrap'>
                  <img src='/assets/img/{$news['image-7']}' class='control__gallery' alt='Обложка'>
                </div>
                <span class='control__btn control__btn_gallery'>
                  Загрузить фото
                </span>
              </label>

              <input class='control__input control__input_gallery' value='{$news['image-8']}' type='text' name='image-8' hidden>
              <label class='control__label control__label_gallery'>
                <input class='control__input control__input_gallery' type='file' name='image-8File' hidden accept='image/*,image/jpeg'>
                <div class='control__img-wrap'>
                  <img src='/assets/img/{$news['image-8']}' class='control__gallery' alt='Обложка'>
                </div>
                <span class='control__btn control__btn_gallery'>
                  Загрузить фото
                </span>
              </label>

              <input class='control__input control__input_gallery' value='{$news['image-9']}' type='text' name='image-9' hidden>
              <label class='control__label control__label_gallery'>
                <input class='control__input control__input_gallery' type='file' name='image-9File' hidden accept='image/*,image/jpeg'>
                <div class='control__img-wrap'>
                  <img src='/assets/img/{$news['image-9']}' class='control__gallery' alt='Обложка'>
                </div>
                <span class='control__btn control__btn_gallery'>
                  Загрузить фото
                </span>
              </label>

              <input class='control__input control__input_gallery' value='{$news['image-10']}' type='text' name='image-10' hidden>
              <label class='control__label control__label_gallery'>
                <input class='control__input control__input_gallery' type='file' name='image-10File' hidden accept='image/*,image/jpeg'>
                <div class='control__img-wrap'>
                  <img src='/assets/img/{$news['image-10']}' class='control__gallery' alt='Обложка'>
                </div>
                <span class='control__btn control__btn_gallery'>
                  Загрузить фото
                </span>
              </label>
            </div>
          </div>

          <label for='check' class='control__label control__label_check'>
            <input id='check' class='control__check control__input_check' type='checkbox' name='check' {$chek}>
            <span>
              Опубликовать
            </span>
          </label>

          <div class='control__btn-wrap'>
            <button class='control__input control__input_submit btn btn_green' name='submit' type='submit'>Сохранить</button>
            <button class='control__btn control__btn_cancel btn btn_white' name='noSubmit' type='submit'>Отмена</button>
          </div>
        </form>

          ";

        ?>


      </div>
    </section>


  </main>

  <?
  include '' . $_SERVER["DOCUMENT_ROOT"] . '/includes/footer.php';
  ?>

</body>

</html>