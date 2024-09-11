<?
$title = 'Показ всех модалок';
$description = '';
$keywords = '';
include $_SERVER["DOCUMENT_ROOT"] . '/includes/head.php';
?>

<body class="glavnaya" data-page="index">
  <!-- Google Tag Manager (noscript) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NMZW3TMH" height="0" width="0"
      style="display:none;visibility:hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->

  <?
  include $_SERVER["DOCUMENT_ROOT"] . '/includes/header.php';
  ?>

  <main class="main ">
    <section class="section ">
      <div class="container ">
        <ul class="popup__list">

        </ul>
      </div>
    </section>
  </main>

  <?
  include '' . $_SERVER["DOCUMENT_ROOT"] . '/includes/footer.php';
  ?>

  <script>
    const popupArr = document.querySelectorAll('.popup')
    if (popupArr.length > 0) {
      popupArr.forEach((popup) => {
        const li = document.createElement('li');
        li.classList.add('popup__item');
        li.innerHTML = `<button style="margin-bottom: 10px" class="btn btn_light-green popup-link" href="#${popup.getAttribute('id')}">${popup.getAttribute('id')}</button>`;
        document.querySelector('.popup__list').appendChild(li)
        
        popup.classList.add('active')
      })
    }

  </script>
</body>

</html>