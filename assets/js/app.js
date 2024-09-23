// const choiceFilterForm = document.querySelector("[choice-form]");
// let urlParams = new URLSearchParams(window.location.search);

// ----------------------------------------- start заполнение фильтров: --------------------------------------

// // функция инициализации рэндж слайдеров:
// function getSliderValues(arr) {
//   console.log(arr);
//   const squareSlider = choiceFilterForm.querySelector(
//     ".choice__slider-select_square"
//   );
//   const costSlider = choiceFilterForm.querySelector(
//     ".choice__slider-select_cost"
//   );
//   const floorSlider = choiceFilterForm.querySelector(
//     ".choice__slider-select_floor"
//   );

//   let priceRange = [];
//   let squareRange = [];
//   let floorRange = [];
//   arr.forEach((item) => {
//     priceRange.push(item.price);
//     squareRange.push(item.square);
//     floorRange.push(item.floor);
//   });

//   if (costSlider) {
//     let minFilterCost = Math.min(...priceRange);
//     let maxFilterCost = Math.max(...priceRange) + 10000;
//     rangeSliderInit(costSlider, 10000, minFilterCost, maxFilterCost);
//   }

//   if (squareSlider) {
//     let minFilterSquare = Math.floor(Math.min(...squareRange));
//     let maxFilterSquare = Math.ceil(Math.max(...squareRange));
//     rangeSliderInit(squareSlider, 1, minFilterSquare, maxFilterSquare);
//   }

//   if (floorSlider) {
//     let minFilterFloor = Math.min(...floorRange);
//     let maxFilterFloor = Math.max(...floorRange);
//     rangeSliderInit(floorSlider, 0, minFilterFloor, maxFilterFloor);
//   }
// }

// console.log(allAparstInfo.filter((item) => Math.round(item.price) === Math.round(6250000)));

// ----------------------------------------- end заполнение фильтров: --------------------------------------

//   let copyArr = [...allAparstInfo].splice(offset, limit);
//   apartRender(copyArr);

// copyArr.forEach((item) => {
// const classes = [
//   "apartments__item",
//   "swiper-slide",
// ]
// });

// получаем информацию о квартирах в обьектах строительствах:
// формируем массивы информации о домах и квартирах:
// allHouseArr.forEach(item => {
// })

// async function processArray(array) {
//   for (const item of array) {
//     console.log("item.house_id", item.house_id);
//     const houseInfo = await getRealty(item.house_id);
//     allAparstInfo.push(houseInfo);
//   }
// }

// await processArray(allHouseArr);

// console.log("allAparstInfo", allAparstInfo);
// console.log('item', allAparstInfo);

// const houseArr = [];
// allAparstInfo.forEach(item => {
//   // houseArr.push(item[1]);
// })

// console.log('houseArr', houseArr);

// idHouseArr.forEach(item => {
// })

// запрос информации о квартирах:

// -------------------------------------------- start вывод квартир: ---------------------------------------------

// const btn = document.getElementById("addApartrs");
// console.log(btn);

// let limit = 8;
// let offset = 0;

// if (btn) {
//   btn.addEventListener("click", getNewItems);
// }

// function getNewItems() {
//   offset = offset + limit;
//   getItems(limit, offset);
// }

// let allApart = [];

// async function getItems(limit = 8, offset = 0) {
//   let query = `SELECT * FROM apartments ORDER BY area ASC LIMIT ${limit} OFFSET ${offset}`;

//   let response = await fetch("/backend/items.php", {
//     method: "POST",
//     headers: {
//       "Content-Type": "application/json;charset=utf-8",
//     },
//     body: JSON.stringify(query),
//   });

//   if (response.ok) {
//     let result = await response.json();
//     apartrender(result);
//     // allApart.push(...result);
//     // console.log(result);
//     // form.reset();
//     // popupOpen(document.getElementById("success"));
//     // form.classList.remove("_sending");
//   } else {
//     // popupOpen(document.getElementById("error"));
//     // form.classList.remove("_sending");
//   }
// }

// const list = document.querySelector(".apartments__list");
// if (list) {
//   getItems();
// }

// function apartrender(arr) {
//   const list = document.querySelector(".apartments__list");

//   arr.forEach((item) => {
//     // console.log(item);
//     const li = document.createElement("li");
//     li.classList.add("apartments__item");

//     li.innerHTML = `
//       <li class="apartments__item">
//       <a class="apartments__item-link" href="/pages/apartments-item/?id=${
//         item.id
//       }">
//         <h5 class="apartments__item-title">
//           ${item.complex} | ГП  ${item.house} | ${
//       item.stage
//     } этаж
//         </h5>
//         <div class="apartments__item-img">
//             <img src="/assets/img/${item.image}" alt="планировка квартиры">
//         </div>

//         <p class="apartments__item-desc">
//           ${item.number_of_rooms}-комнатная ${item.area}м<sup>2</sup>
//         </p>

//         <div class="apartments__item-price-wrap">
//           <p class="apartments__item-new-price">
//             ${(item.price * 1)
//               .toString()
//               .replace(/\B(?=(\d{3})+(?!\d))/g, " ")} ₽
//           </p>
//           <p class="apartments__item-old-price">
//           ${(item.price * 1.2)
//             .toString()
//             .replace(/\B(?=(\d{3})+(?!\d))/g, " ")} ₽
//           </p>
//         </div>

//         <ul class="apartments__item-footer">
//           <li class="apartments__item-footer-item">
//             <p class="apartments__item-footer-item-text">
//               Акция
//             </p>
//             <svg width="19" height="19" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
//               <rect x="0.5" y="0.5" width="18" height="18" rx="9" stroke="#56693E" />
//               <path
//                 d="M8.41903 11.8409V11.7855C8.42519 11.1977 8.48674 10.7299 8.60369 10.3821C8.72064 10.0343 8.88684 9.75272 9.10227 9.53729C9.31771 9.32185 9.57623 9.12334 9.87784 8.94176C10.0594 8.83097 10.2225 8.70017 10.3672 8.54936C10.5118 8.39548 10.6257 8.21851 10.7088 8.01847C10.795 7.81842 10.8381 7.59683 10.8381 7.35369C10.8381 7.05208 10.7673 6.79048 10.6257 6.56889C10.4841 6.3473 10.2949 6.17649 10.0579 6.05646C9.8209 5.93643 9.55777 5.87642 9.26847 5.87642C9.0161 5.87642 8.77296 5.92874 8.53906 6.03338C8.30516 6.13802 8.10973 6.30268 7.95277 6.52734C7.79581 6.75201 7.70502 7.04593 7.6804 7.40909H6.51705C6.54167 6.88589 6.67708 6.43809 6.9233 6.0657C7.17259 5.6933 7.50036 5.40862 7.90661 5.21165C8.31593 5.01468 8.76989 4.91619 9.26847 4.91619C9.81013 4.91619 10.281 5.02391 10.6811 5.23935C11.0843 5.45478 11.3951 5.75024 11.6136 6.12571C11.8352 6.50118 11.946 6.92898 11.946 7.40909C11.946 7.74763 11.8937 8.05386 11.7891 8.32777C11.6875 8.60168 11.5398 8.84635 11.3459 9.06179C11.1551 9.27723 10.9242 9.46804 10.6534 9.63423C10.3826 9.8035 10.1656 9.98201 10.0025 10.1697C9.83937 10.3544 9.72088 10.5745 9.64702 10.8299C9.57315 11.0853 9.53314 11.4039 9.52699 11.7855V11.8409H8.41903ZM9.00994 14.5739C8.7822 14.5739 8.58677 14.4923 8.42365 14.3292C8.26054 14.1661 8.17898 13.9706 8.17898 13.7429C8.17898 13.5152 8.26054 13.3197 8.42365 13.1566C8.58677 12.9935 8.7822 12.9119 9.00994 12.9119C9.23769 12.9119 9.43312 12.9935 9.59624 13.1566C9.75935 13.3197 9.84091 13.5152 9.84091 13.7429C9.84091 13.8937 9.80244 14.0322 9.7255 14.1584C9.65163 14.2846 9.55161 14.3861 9.42543 14.4631C9.30232 14.5369 9.16383 14.5739 9.00994 14.5739Z"
//                 fill="#56693E" />
//             </svg>
//           </li>

//           <!-- <li class="apartments__item-footer-item">
//           <p class="apartments__item-footer-item-text">
//             Ключи сегодня
//           </p>
//           <svg width="19" height="19" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
//             <rect x="0.5" y="0.5" width="18" height="18" rx="9" stroke="#56693E"/>
//             <path d="M8.41903 11.8409V11.7855C8.42519 11.1977 8.48674 10.7299 8.60369 10.3821C8.72064 10.0343 8.88684 9.75272 9.10227 9.53729C9.31771 9.32185 9.57623 9.12334 9.87784 8.94176C10.0594 8.83097 10.2225 8.70017 10.3672 8.54936C10.5118 8.39548 10.6257 8.21851 10.7088 8.01847C10.795 7.81842 10.8381 7.59683 10.8381 7.35369C10.8381 7.05208 10.7673 6.79048 10.6257 6.56889C10.4841 6.3473 10.2949 6.17649 10.0579 6.05646C9.8209 5.93643 9.55777 5.87642 9.26847 5.87642C9.0161 5.87642 8.77296 5.92874 8.53906 6.03338C8.30516 6.13802 8.10973 6.30268 7.95277 6.52734C7.79581 6.75201 7.70502 7.04593 7.6804 7.40909H6.51705C6.54167 6.88589 6.67708 6.43809 6.9233 6.0657C7.17259 5.6933 7.50036 5.40862 7.90661 5.21165C8.31593 5.01468 8.76989 4.91619 9.26847 4.91619C9.81013 4.91619 10.281 5.02391 10.6811 5.23935C11.0843 5.45478 11.3951 5.75024 11.6136 6.12571C11.8352 6.50118 11.946 6.92898 11.946 7.40909C11.946 7.74763 11.8937 8.05386 11.7891 8.32777C11.6875 8.60168 11.5398 8.84635 11.3459 9.06179C11.1551 9.27723 10.9242 9.46804 10.6534 9.63423C10.3826 9.8035 10.1656 9.98201 10.0025 10.1697C9.83937 10.3544 9.72088 10.5745 9.64702 10.8299C9.57315 11.0853 9.53314 11.4039 9.52699 11.7855V11.8409H8.41903ZM9.00994 14.5739C8.7822 14.5739 8.58677 14.4923 8.42365 14.3292C8.26054 14.1661 8.17898 13.9706 8.17898 13.7429C8.17898 13.5152 8.26054 13.3197 8.42365 13.1566C8.58677 12.9935 8.7822 12.9119 9.00994 12.9119C9.23769 12.9119 9.43312 12.9935 9.59624 13.1566C9.75935 13.3197 9.84091 13.5152 9.84091 13.7429C9.84091 13.8937 9.80244 14.0322 9.7255 14.1584C9.65163 14.2846 9.55161 14.3861 9.42543 14.4631C9.30232 14.5369 9.16383 14.5739 9.00994 14.5739Z" fill="#56693E"/>
//           </svg>
//         </li> -->

//           <li class="apartments__item-footer-item">
//             <p class="apartments__item-footer-item-text">
//               Окна на 2 стороны
//             </p>
//           </li>

//           <!-- <li class="apartments__item-footer-item">
//           <p class="apartments__item-footer-item-text">
//             Гостевой санузел
//           </p>
//         </li> -->

//           <li class="apartments__item-footer-item">
//             <p class="apartments__item-footer-item-text">
//               Кухня-гостинная
//             </p>
//           </li>
//         </ul>
//       </a>
//     </li>
//     `;

//     list.append(li);
//   });
// }
// ------------------------- end вывод квартир: ---------------------------
// ---------------------------------- start отправка и валидация формы ----------------------------------

const formAll = document.querySelectorAll(".os-form");

if (formAll) {
  console.log("formAll", formAll);
  formAll.forEach((form) => {
    form.addEventListener("submit", sendForm);

    async function sendForm(e) {
      e.preventDefault();

      let errore = formvalidation(form);

      if (errore === 0) {
        form.classList.add("_sending");
        let formData = new FormData(form);
        const dataRequest = form.closest(".popup").getAttribute("data-request");
        if (dataRequest) {
          formData.append("dataRequest", dataRequest);
        }

        let response = await fetch("/backend/post-mail.php", {
          method: "POST",
          body: formData,
        });

        for (var pair of formData.entries()) {
          console.log(pair[0] + ", " + pair[1]);
        }

        if (response.ok) {
          // let result = await response.json();
          form.reset();
          if (formData.get("id") == 3) {
            popupOpen(document.getElementById("popup-success-subscribe"));
          } else {
            popupOpen(document.getElementById("success"));
          }
          // TODO добавить логику показа разный сообщений об успешной отправке  через поле темы
          form.classList.remove("_sending");
        } else {
          // popupOpen(document.getElementById("error"));
          form.classList.remove("_sending");
        }
      } else {
        alert("Заполните обязательные поля");
      }
    }
  });

  function formvalidation(item) {
    let error = 0;
    let formReq = item.querySelectorAll("._req");

    for (let index = 0; index < formReq.length; index++) {
      const input = formReq[index];

      formRemoveError(input);

      if (input.classList.contains("_email")) {
        if (emailTest(input)) {
          formAddError(input);
          error++;
        }
      } else if (input.getAttribute("type") === "checkbox" && input.checked === false) {
        formAddError(input);
        error++;
      } else {
        if (input.value === "") {
          formAddError(input);
          error++;
        }
      }
    }
    return error;
  }

  function formAddError(input) {
    input.parentElement.classList.add("_error");
    input.classList.add("_error");
  }

  function formRemoveError(input) {
    input.parentElement.classList.remove("_error");
    input.classList.remove("_error");
  }

  function emailTest(input) {
    return !/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,8})+$/.test(input.value);
  }
}

// ---------------------------------- end отправка и валидация формы ----------------------------------

// ------------------------- start WEBP: ---------------------------

function testWebP(callback) {
  let webP = new Image();
  webP.onload = webP.onerror = function () {
    callback(webP.height == 2);
  };
  webP.src =
    "data:image/webp;base64,UklGRjoAAABXRUJQVlA4IC4AAACyAgCdASoCAAIALmk0mk0iIiIiIgBoSygABc6WWgAA/veff/0PP8bA//LwYAAA";
}
testWebP(function (support) {
  let className = support === true ? "webp" : "no-webp";
  document.documentElement.classList.add(className);
});

// ------------------------- end WEBP: ---------------------------
// ------------------------- start FANCYBOX: ---------------------------
const body = document.querySelector("body");
Fancybox.bind("[data-fancybox]", {
  // Your custom options
});
// ------------------------- end FANCYBOX: ---------------------------

const projectMapBtn = document.querySelector(".project-page__button_map");
if (projectMapBtn) {
  projectMapBtn.addEventListener("click", function (e) {
    console.log("тест");
    const body = projectMapBtn.closest("body");
    body.classList.toggle("project-page__full-map");
  });
}

//------------------- start трансформация фильтра:----------------

const apartmentsPage = document.querySelector(".apartments-page");
if (apartmentsPage) {
  const choice = document.querySelector(".choice");
  const choiceTop = document.querySelector(".choice__inputs-list_top");
  const choiceBot = document.querySelector(".choice__inputs-list_bot");
  const section__apartments = document.querySelector(".section__apartments");
  const height = choice.getBoundingClientRect().height;
  const showAllParams = document.querySelector(".choice__btn-additional_show");
  const hideAddParams = document.querySelector(".choice__btn-additional_hide");
  const dropFilters = document.querySelector(".choice__btn-reset .choice__btn-text");
  const searchCounter = document.querySelector(".choice__search-text");

  // const el = Array.from(choiceBot.children)[3];
  const el = document.querySelector(".choice__inputs-list_bot").querySelector(".choice__input-block_slider_floor"); //
  // console.log(el);
  // console.log(window.scrollY);

  if (window.innerWidth >= 1512) {
    if (window.scrollY > 500) {
      choiceTop.append(el);
      choice.classList.add("choice_fixed");
    }

    window.addEventListener("scroll", () => {
      if (window.scrollY > 500) {
        choiceTop.append(el);
        choice.classList.add("choice_fixed");
        section__apartments.style.marginTop = height + "px";
      } else {
        // choiceTop.prepend(el);
        choiceBot.append(el);
        choice.classList.remove("choice_fixed");
        section__apartments.style.marginTop = "0px";
      }
    });
  }

  if (showAllParams) {
    showAllParams.addEventListener("click", function () {
      console.log("тест");
      choiceBot.style.display = "grid";
      showAllParams.style.display = "none";
      hideAddParams.style.display = "grid";
      // choiceTop.append(el);
      // choice.classList.add("choice_fixed");
    });

    hideAddParams.addEventListener("click", function () {
      console.log("тест");
      choiceBot.style.display = "none";
      showAllParams.style.display = "grid";
      hideAddParams.style.display = "none";
      // choiceTop.append(el);
      // choice.classList.add("choice_fixed");
    });
  }

  // const choice = document.querySelector(".choice");
  const content = choice.querySelector(".choice__container");
  const popup = document.querySelector("#filter");
  const filterMobileBtn = choice.querySelector(".choice__btn-request_mobile_filter");
  const filterAplyBtn = choice.querySelector(".choice__btn-request_mobile_apply");

  // открытие popup и заполнение его формой
  filterMobileBtn.addEventListener("click", () => {
    dropFilters.innerHTML = "Сбросить";
    searchCounter.style.display = "none";
    filterMobileBtn.style.display = "none";
    filterAplyBtn.style.display = "block";
    console.log("тест");
    // choiceBot.style.display = "none";
    hideAddParams.style.display = "none";
    showAllParams.style.display = "none";
    popupOpen(popup);
    bodyLock();

    popup.classList.add("open");
    popup.querySelector(".popup__content").append(content);
  });

  filterAplyBtn.addEventListener("click", () => {
    dropFilters.innerHTML = "Сбросить фильтры";
    searchCounter.style.display = "none";
    filterMobileBtn.style.display = "grid";
    filterAplyBtn.style.display = "none";
    console.log("тест");
    // choiceBot.style.display = "none";
    hideAddParams.style.display = "none";
    showAllParams.style.display = "none";
    popupClose(popup);
    choice.append(content);
  });

  // закрытие popup по Esc
  document.addEventListener("keydown", function (e) {
    console.log("тест");
    if (e.key === "Escape") {
      // choiceBot.style.display = "none";
      // hideAddParams.style.display = "none";
      popupClose(popup);
      // bodyUnLock()

      popup.classList.remove("open");
      if (!popup.classList.contains("open")) {
        // console.log("111");

        // передача формы обратно на главную страницу
        choice.append(content);
      }
    }
  });

  // закрытие popup по клику вне его
  popup.addEventListener("click", function (e) {
    console.log("тест");
    if (!e.target.closest(".popup__content")) {
      // если клик был по области вокруг попапа то ничего не делаем
      if (popup.classList.contains("open")) {
        popupClose(popup);
        bodyUnLock();

        popup.classList.remove("open");
        // передача формы обратно на главную страницу
        choice.append(content);
      }
    }
  });

  // закрытие popup по кнопке
  const popupCloseIcon = popup.querySelector(".promo__close");
  popupCloseIcon.addEventListener("click", function (e) {
    console.log("тест");

    if (popup.classList.contains("open")) {
      popupClose(popup);
      bodyUnLock();
      popup.classList.remove("open");
      // передача формы обратно на главную страницу
      choice.append(content);

      dropFilters.innerHTML = "Сбросить фильтры";
      searchCounter.style.display = "none";
      filterMobileBtn.style.display = "grid";
      filterAplyBtn.style.display = "none";
      console.log("тест");
      // choiceBot.style.display = "none";
      hideAddParams.style.display = "none";
      showAllParams.style.display = "none";
      popupClose(popup);
      choice.append(content);
    }
  });
}

const commercialPage = document.querySelector(".commercial-page");
if (commercialPage) {
  const choice = document.querySelector(".choice");
  const choiceTop = document.querySelector(".choice__inputs-list_top");
  const choiceBot = document.querySelector(".choice__inputs-list_bot");
  // const section__apartments = document.querySelector(".section__apartments");
  // const height = choice.getBoundingClientRect().height;
  // const showAllParams = document.querySelector(".choice__btn-additional_show");
  // const hideAddParams = document.querySelector(".choice__btn-additional_hide");
  // const dropFilters = document.querySelector(".choice__btn-reset .choice__btn-text");
  // const searchCounter = document.querySelector(".choice__search-text");

  // const el = Array.from(choiceBot.children)[3];
  const el = document.querySelector(".choice__input-block_buttons_method"); //
  // console.log(el);
  // console.log(window.scrollY);

  if (window.innerWidth <= 1500) {
    choiceTop.append(el);
  } else {
    choiceBot.prepend(el);
  }

  // choice.classList.add("choice_fixed");
  // if (window.scrollY > 500) {
  // }

  // window.addEventListener("scroll", () => {
  //   if (window.scrollY > 500) {
  //     choiceTop.append(el);
  //     choice.classList.add("choice_fixed");
  //     section__apartments.style.marginTop = height + "px";
  //   } else {
  //     // choiceTop.prepend(el);
  //     choiceBot.append(el);
  //     choice.classList.remove("choice_fixed");
  //     section__apartments.style.marginTop = "0px";
  //   }
  // });
  // }

  // if (showAllParams) {
  //   showAllParams.addEventListener("click", function () {
  //     console.log("тест");
  //     choiceBot.style.display = "grid";
  //     showAllParams.style.display = "none";
  //     hideAddParams.style.display = "grid";
  //     // choiceTop.append(el);
  //     // choice.classList.add("choice_fixed");
  //   });

  //   hideAddParams.addEventListener("click", function () {
  //     console.log("тест");
  //     choiceBot.style.display = "none";
  //     showAllParams.style.display = "grid";
  //     hideAddParams.style.display = "none";
  //     // choiceTop.append(el);
  //     // choice.classList.add("choice_fixed");
  //   });
  // }

  // // const choice = document.querySelector(".choice");
  // const content = choice.querySelector(".choice__container");
  // const popup = document.querySelector("#filter");
  // const filterMobileBtn = choice.querySelector(".choice__btn-request_mobile_filter");
  // const filterAplyBtn = choice.querySelector(".choice__btn-request_mobile_apply");

  // // открытие popup и заполнение его формой
  // filterMobileBtn.addEventListener("click", () => {
  //   dropFilters.innerHTML = "Сбросить";
  //   searchCounter.style.display = "none";
  //   filterMobileBtn.style.display = "none";
  //   filterAplyBtn.style.display = "block";
  //   console.log("тест");
  //   // choiceBot.style.display = "none";
  //   hideAddParams.style.display = "none";
  //   showAllParams.style.display = "none";
  //   popupOpen(popup);
  //   bodyLock();

  //   popup.classList.add("open");
  //   popup.querySelector(".popup__content").append(content);
  // });

  // filterAplyBtn.addEventListener("click", () => {
  //   dropFilters.innerHTML = "Сбросить фильтры";
  //   searchCounter.style.display = "none";
  //   filterMobileBtn.style.display = "grid";
  //   filterAplyBtn.style.display = "none";
  //   console.log("тест");
  //   // choiceBot.style.display = "none";
  //   hideAddParams.style.display = "none";
  //   showAllParams.style.display = "none";
  //   popupClose(popup);
  //   choice.append(content);
  // })

  // // закрытие popup по Esc
  // document.addEventListener("keydown", function (e) {
  //   console.log("тест");
  //   if (e.key === "Escape") {
  //     // choiceBot.style.display = "none";
  //     // hideAddParams.style.display = "none";
  //     popupClose(popup);
  //     // bodyUnLock()

  //     popup.classList.remove("open");
  //     if (!popup.classList.contains("open")) {
  //       // console.log("111");

  //       // передача формы обратно на главную страницу
  //       choice.append(content);
  //     }
  //   }
  // });

  // // закрытие popup по клику вне его
  // popup.addEventListener("click", function (e) {
  //   console.log("тест");
  //   if (!e.target.closest(".popup__content")) {
  //     // если клик был по области вокруг попапа то ничего не делаем
  //     if (popup.classList.contains("open")) {
  //       popupClose(popup);
  //       bodyUnLock();

  //       popup.classList.remove("open");
  //       // передача формы обратно на главную страницу
  //       choice.append(content);
  //     }
  //   }
  // });

  // // закрытие popup по кнопке
  // const popupCloseIcon = popup.querySelector(".promo__close");
  // popupCloseIcon.addEventListener("click", function (e) {
  //   console.log("тест");

  //   if (popup.classList.contains("open")) {
  //     popupClose(popup);
  //     bodyUnLock();
  //     popup.classList.remove("open");
  //     // передача формы обратно на главную страницу
  //     choice.append(content);

  //     dropFilters.innerHTML = "Сбросить фильтры";
  //     searchCounter.style.display = "none";
  //     filterMobileBtn.style.display = "grid";
  //     filterAplyBtn.style.display = "none";
  //     console.log("тест");
  //     // choiceBot.style.display = "none";
  //     hideAddParams.style.display = "none";
  //     showAllParams.style.display = "none";
  //     popupClose(popup);
  //     choice.append(content);
  //   }
  // });
}
//------------------- end трансформация фильтра----------------

// --------------------------------------- start бокове меню: ---------------------------------------------
const asideMenu = document.querySelector(".aside-menu");
if (asideMenu) {
  const links = asideMenu.querySelectorAll(".slider__toggle-link");

  links.forEach((item) => {
    item.addEventListener("click", function () {
      console.log("тест");
      links.forEach((item) => {
        item.classList.remove("slider__toggle-link_active");
      });
      item.classList.add("slider__toggle-link_active");
    });
  });

  document.addEventListener("scroll", () => {
    // console.log("scroll");

    // получаем все секции с атрибутом id
    let sections = Array.from(document.querySelectorAll("section")).filter((section) => section.hasAttribute("id"));

    sections.forEach((section) => {
      // получаем параметры секции
      const rect = section.getBoundingClientRect();
      // проверяем что начало секции находится в первой половине экрана
      if (rect.top >= 0 && rect.top <= window.innerHeight / 2) {
        // console.log(rect.top);
        links.forEach((item) => {
          if (item.getAttribute("href").replace("#", "") === section.id) {
            item.classList.add("slider__toggle-link_active");
          } else {
            item.classList.remove("slider__toggle-link_active");
          }
        });
      }
    });
  });
}
// --------------------------------------- end бокове меню: ---------------------------------------------

const contactsPage = document.querySelector(".contacts-page");
if (contactsPage) {
  const btnsOpen = contactsPage.querySelectorAll(".address__item-btn_plus");
  const wrappers = contactsPage.querySelectorAll(".address__wrapper");
  const minusOpen = contactsPage.querySelectorAll(".address__item-btn_minus");

  btnsOpen.forEach((item) => {
    item.addEventListener("click", function () {
      console.log("тест");
      wrappers.forEach((item) => {
        item.classList.add("address__wrapper_close");
      });
      const wrapper = item.closest(".address__wrapper");
      wrapper.classList.remove("address__wrapper_close");
    });
  });

  minusOpen.forEach((item) => {
    item.addEventListener("click", function () {
      console.log("тест");
      wrappers.forEach((item) => {
        item.classList.add("address__wrapper_close");
      });
      const wrapper = item.closest(".address__wrapper");
      wrapper.classList.add("address__wrapper_close");
    });
  });
}

// --------------------------------------- start кнопки ремонта: ---------------------------------------------
const aboutBtnWrap = document.querySelector(".about__btn-wrap");
if (aboutBtnWrap) {
  const aboutBtns = aboutBtnWrap.querySelectorAll(".about__btn"); // console.log(aboutBtns);
  aboutBtns.forEach((item) => {
    item.addEventListener("click", function () {
      console.log("тест");
      aboutBtns.forEach((item) => {
        item.classList.remove("about__btn_active");
      });
      item.classList.add("about__btn_active");
    });
  });
}

const sliderBtnList = document.querySelector(".slider__btn-list");
if (sliderBtnList) {
  const sliderBtns = sliderBtnList.querySelectorAll(".slider__btn");
  sliderBtns.forEach((item) => {
    item.addEventListener("click", function () {
      console.log("тест");
      sliderBtns.forEach((item) => {
        item.classList.remove("slider__btn_active");
      });
      item.classList.add("slider__btn_active");
    });
  });
}
// --------------------------------------- end кнопки ремонта: ---------------------------------------------
//подсветка активного пункта меню:---------------------------------------------------------

// const page = body.getAttribute("data-page");
// const navLinks = document.querySelectorAll(".nav__link");
// navLinks.forEach((item) => {
//   if (item.getAttribute("href") === `${page}.html`) {
//     item.classList.add("nav__link_active");
//   }
// });

const page = window.location.pathname;
const navLinks = document.querySelectorAll(".nav__link");
navLinks.forEach((item) => {
  if (item.getAttribute("href") === page) {
    item.classList.add("nav__link_active");
  }
});

// const swiper = new Swiper(".swiper", {
//   // Optional parameters
//   direction: "horizontal",
//   loop: true,
//   allowTouchMove: true,
//   // Navigation arrows
//   navigation: {
//     nextEl: ".swiper-button-next",
//     prevEl: ".swiper-button-prev",
//   },
//   pagination: {
//     el: ".swiper-pagination",
//     clickable: true,
//   },
// });

// -------------------------------------------- start checkbox-lable: ---------------------------------------------
const checkbox = document.querySelectorAll(".checkbox__label");
if (checkbox) {
  checkbox.forEach((item) => {
    if (item.querySelector(".checkbox__input").checked) {
      item.classList.add("checkbox__label_active");
    }
    item.addEventListener("click", function () {
      console.log("тест");
      checkbox.forEach((item) => {
        item.classList.remove("checkbox__label_active");
      });
      item.classList.add("checkbox__label_active");
    });
  });
}
// -------------------------------------------- end checkbox-lable: ---------------------------------------------
// -------------------------------------------- start slider: ---------------------------------------------
new Swiper(".news-slider_swiper", {
  // Optional parameters
  direction: "horizontal",
  // loop: true,
  // allowTouchMove: true,
  slidesPerView: 3.2, // сколько слайдов показывать, можно дробно
  // slidesPerView: 'auto', // сколько слайдов показывать, можно дробно
  // slidersPerGroup: 3, // сколько слайдов в группе
  centeredSlides: true, //выравнивание слайдов по центру
  initialSlide: 1, //начальный слайд (c нуля)

  spaceBetween: 40,
  // slideToClickedSlide: true, //перелистывание слайдов по клику
  // grabCursor: true, //меняет курсор при наведении на руку
  watchOverflow: true, //отключает слайдер если все слайды входят в область видимости

  // Navigation arrows
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
  // mousewheel: { //перелистывание слайдов по мышке
  //   sensitivity: 1,
  //   eventsTarget: ".news__slider",
  // },
  // keyboard: { //перелистывание слайдов по нажатию клавиш
  //   enabled: true,
  //   onlyInViewport: true,
  //   // pageUpDown: true,
  // },
  breakpoints: {
    0: {
      slidesPerView: 1,
    },
    500: {
      slidesPerView: 2,
    },
    800: {
      slidesPerView: 3.35,
    },
  },
});

new Swiper(".building_swiper", {
  // Optional parameters
  direction: "horizontal",
  // loop: true,
  // allowTouchMove: true,
  // slidesPerView: auto, // сколько слайдов показывать, можно дробно
  slidesPerView: 1, // сколько слайдов показывать, можно дробно
  // slidersPerGroup: 3, // сколько слайдов в группе
  // centeredSlides: true, //выравнивание слайдов по центру
  // initialSlide: 0, //начальный слайд (c нуля)

  spaceBetween: 40,
  // slideToClickedSlide: true, //перелистывание слайдов по клику
  // grabCursor: true, //меняет курсор при наведении на руку
  watchOverflow: true, //отключает слайдер если все слайды входят в область видимости

  // Navigation arrows
  navigation: {
    nextEl: ".swiper-button-next-building",
    prevEl: ".swiper-button-prev-building",
  },
  // pagination: {
  //   el: ".swiper-pagination",
  //   clickable: true,
  // },
  // mousewheel: { //перелистывание слайдов по мышке
  //   sensitivity: 1,
  //   eventsTarget: ".news__slider",
  // },
  // keyboard: { //перелистывание слайдов по нажатию клавиш
  //   enabled: true,
  //   onlyInViewport: true,
  //   // pageUpDown: true,
  // },
  breakpoints: {
    0: {
      // slidesPerView: 1,
      spaceBetween: 20,
    },
    960: {
      spaceBetween: 40,
    },
  },
});

new Swiper(".regions_swiper", {
  // Optional parameters
  direction: "horizontal",
  // loop: true,
  // allowTouchMove: true,
  // slidesPerView: 3, // сколько слайдов показывать, можно дробно
  slidesPerView: "auto", // сколько слайдов показывать, можно дробно
  // slidersPerGroup: 3, // сколько слайдов в группе
  // centeredSlides: true, //выравнивание слайдов по центру
  // initialSlide: 0, //начальный слайд (c нуля)

  spaceBetween: 20,
  // slideToClickedSlide: true, //перелистывание слайдов по клику
  // grabCursor: true, //меняет курсор при наведении на руку
  watchOverflow: true, //отключает слайдер если все слайды входят в область видимости

  // Navigation arrows
  navigation: {
    nextEl: ".swiper-button-next_reg",
    prevEl: ".swiper-button-prev_reg",
  },
  // pagination: {
  //   el: ".swiper-pagination",
  //   clickable: true,
  // },
  // mousewheel: { //перелистывание слайдов по мышке
  //   sensitivity: 1,
  //   eventsTarget: ".news__slider",
  // },
  // keyboard: { //перелистывание слайдов по нажатию клавиш
  //   enabled: true,
  //   onlyInViewport: true,
  //   // pageUpDown: true,
  // },
  breakpoints: {
    0: {
      // slidesPerView: 1,
      spaceBetween: 10,
    },
    560: {
      // slidesPerView: 1,
      spaceBetween: 20,
    },
    960: {
      // spaceBetween: 40,
    },
  },
});

new Swiper(".regions_swiper_small", {
  // Optional parameters
  direction: "horizontal",
  // loop: true,
  // allowTouchMove: true,
  autoHeight: true,
  slidesPerView: 3, // сколько слайдов показывать, можно дробно
  // slidesPerView: "auto", // сколько слайдов показывать, можно дробно
  // slidersPerGroup: 3, // сколько слайдов в группе
  // centeredSlides: true, //выравнивание слайдов по центру
  // initialSlide: 0, //начальный слайд (c нуля)

  spaceBetween: 20,
  // slideToClickedSlide: true, //перелистывание слайдов по клику
  // grabCursor: true, //меняет курсор при наведении на руку
  watchOverflow: true, //отключает слайдер если все слайды входят в область видимости

  // Navigation arrows
  navigation: {
    nextEl: ".swiper-button-next_reg",
    prevEl: ".swiper-button-prev_reg",
  },
  // pagination: {
  //   el: ".swiper-pagination",
  //   clickable: true,
  // },
  // mousewheel: { //перелистывание слайдов по мышке
  //   sensitivity: 1,
  //   eventsTarget: ".news__slider",
  // },
  // keyboard: { //перелистывание слайдов по нажатию клавиш
  //   enabled: true,
  //   onlyInViewport: true,
  //   // pageUpDown: true,
  // },
  breakpoints: {
    0: {
      // slidesPerView: 1,
      spaceBetween: 10,
      slidesPerView: "auto", // сколько слайдов показывать, можно дробно
    },
    800: {
      // slidesPerView: 1,
      spaceBetween: 20,
      slidesPerView: 2,
    },
    1300: {
      // spaceBetween: 40,

      spaceBetween: 10,
    },
    1560: {
      // spaceBetween: 40,

      spaceBetween: 20,
    },
  },
});

// if (window.innerWidth >= 560) {

new Swiper(".apartments_swiper", {
  // Optional parameters
  direction: "horizontal",
  // loop: true,
  // allowTouchMove: true,
  // slidesPerView: auto, // сколько слайдов показывать, можно дробно
  slidesPerView: "auto", // сколько слайдов показывать, можно дробно
  // slidersPerGroup: 3, // сколько слайдов в группе
  // centeredSlides: true, //выравнивание слайдов по центру
  // initialSlide: 0, //начальный слайд (c нуля)

  spaceBetween: 10,
  // slideToClickedSlide: true, //перелистывание слайдов по клику
  // grabCursor: true, //меняет курсор при наведении на руку
  watchOverflow: true, //отключает слайдер если все слайды входят в область видимости

  // Navigation arrows
  navigation: {
    nextEl: ".swiper-button-next_apart",
    prevEl: ".swiper-button-prev_apart",
  },
  // pagination: {
  //   el: ".swiper-pagination",
  //   clickable: true,
  // },
  // mousewheel: { //перелистывание слайдов по мышке
  //   sensitivity: 1,
  //   eventsTarget: ".news__slider",
  // },
  // keyboard: { //перелистывание слайдов по нажатию клавиш
  //   enabled: true,
  //   onlyInViewport: true,
  //   // pageUpDown: true,
  // },
  breakpoints: {
    0: {
      // slidesPerView: 1,
    },
    500: {
      // slidesPerView: 2,
    },
    800: {
      // slidesPerView: 3.35,
    },
  },
});
// }

new Swiper(".commercial_swiper", {
  // Optional parameters
  direction: "horizontal",
  // loop: true,
  // allowTouchMove: true,
  slidesPerView: 3, // сколько слайдов показывать, можно дробно
  // slidesPerView: "auto", // сколько слайдов показывать, можно дробно
  // slidersPerGroup: 3, // сколько слайдов в группе
  // centeredSlides: true, //выравнивание слайдов по центру
  // initialSlide: 0, //начальный слайд (c нуля)

  spaceBetween: 21,
  // slideToClickedSlide: true, //перелистывание слайдов по клику
  // grabCursor: true, //меняет курсор при наведении на руку
  watchOverflow: true, //отключает слайдер если все слайды входят в область видимости

  // Navigation arrows
  navigation: {
    nextEl: ".swiper-button-next_com",
    prevEl: ".swiper-button-prev_com",
  },
  // pagination: {
  //   el: ".swiper-pagination",
  //   clickable: true,
  // },
  // mousewheel: { //перелистывание слайдов по мышке
  //   sensitivity: 1,
  //   eventsTarget: ".news__slider",
  // },
  // keyboard: { //перелистывание слайдов по нажатию клавиш
  //   enabled: true,
  //   onlyInViewport: true,
  //   // pageUpDown: true,
  // },
  breakpoints: {
    0: {
      // slidesPerView: 1,
      spaceBetween: 10,
      slidesPerView: 1, // сколько слайдов показывать, можно дробно
    },
    760: {
      // slidesPerView: 1,
      spaceBetween: 10,
      slidesPerView: 2, // сколько слайдов показывать, можно дробно
    },
    1460: {
      spaceBetween: 10,

      slidesPerView: 3, // сколько слайдов показывать, можно дробно
    },
    1560: {
      spaceBetween: 20,
    },
  },
});

new Swiper(".commercial-item_swiper", {
  // Optional parameters
  direction: "horizontal",
  // loop: true,
  // allowTouchMove: true,
  // slidesPerView: 3, // сколько слайдов показывать, можно дробно
  slidesPerView: "auto", // сколько слайдов показывать, можно дробно
  // slidersPerGroup: 3, // сколько слайдов в группе
  // centeredSlides: true, //выравнивание слайдов по центру
  // initialSlide: 0, //начальный слайд (c нуля)

  spaceBetween: 20,
  // slideToClickedSlide: true, //перелистывание слайдов по клику
  // grabCursor: true, //меняет курсор при наведении на руку
  watchOverflow: true, //отключает слайдер если все слайды входят в область видимости

  // Navigation arrows
  navigation: {
    nextEl: ".swiper-button-next_com",
    prevEl: ".swiper-button-prev_com",
  },
  // pagination: {
  //   el: ".swiper-pagination",
  //   clickable: true,
  // },
  // mousewheel: { //перелистывание слайдов по мышке
  //   sensitivity: 1,
  //   eventsTarget: ".news__slider",
  // },
  // keyboard: { //перелистывание слайдов по нажатию клавиш
  //   enabled: true,
  //   onlyInViewport: true,
  //   // pageUpDown: true,
  // },
  breakpoints: {
    0: {
      // slidesPerView: 1,
      spaceBetween: 10,
      slidesPerView: 1, // сколько слайдов показывать, можно дробно
    },
    760: {
      // slidesPerView: 1,
      spaceBetween: 10,
      slidesPerView: 2, // сколько слайдов показывать, можно дробно
    },
    1460: {
      spaceBetween: 10,

      slidesPerView: 3, // сколько слайдов показывать, можно дробно
    },
    1560: {
      spaceBetween: 20,
    },
  },
});

new Swiper(".promo_swiper", {
  // Optional parameters
  direction: "horizontal",
  // loop: true,
  // allowTouchMove: true,
  // slidesPerView: auto, // сколько слайдов показывать, можно дробно
  slidesPerView: 2, // сколько слайдов показывать, можно дробно
  // slidersPerGroup: 3, // сколько слайдов в группе
  // centeredSlides: true, //выравнивание слайдов по центру
  // initialSlide: 0, //начальный слайд (c нуля)

  spaceBetween: 20,
  // slideToClickedSlide: true, //перелистывание слайдов по клику
  // grabCursor: true, //меняет курсор при наведении на руку
  watchOverflow: true, //отключает слайдер если все слайды входят в область видимости

  // Navigation arrows
  navigation: {
    nextEl: ".swiper-button-next_promo",
    prevEl: ".swiper-button-prev_promo",
  },
  // pagination: {
  //   el: ".swiper-pagination",
  //   clickable: true,
  // },
  // mousewheel: { //перелистывание слайдов по мышке
  //   sensitivity: 1,
  //   eventsTarget: ".news__slider",
  // },
  // keyboard: { //перелистывание слайдов по нажатию клавиш
  //   enabled: true,
  //   onlyInViewport: true,
  //   // pageUpDown: true,
  // },
  breakpoints: {
    0: {
      // slidesPerView: 1,
      slidesPerView: "auto", // сколько слайдов показывать, можно дробно
    },
    560: {
      // slidesPerView: 2,
      slidesPerView: 2, // сколько слайдов показывать, можно дробно
    },
    800: {
      // slidesPerView: 3.35,
    },
  },
});

new Swiper(".news_swiper", {
  // Optional parameters
  direction: "horizontal",
  // loop: true,
  // allowTouchMove: true,
  // slidesPerView: auto, // сколько слайдов показывать, можно дробно
  slidesPerView: "auto", // сколько слайдов показывать, можно дробно
  // slidersPerGroup: 3, // сколько слайдов в группе
  // centeredSlides: true, //выравнивание слайдов по центру
  // initialSlide: 0, //начальный слайд (c нуля)

  spaceBetween: 40,
  // slideToClickedSlide: true, //перелистывание слайдов по клику
  // grabCursor: true, //меняет курсор при наведении на руку
  watchOverflow: true, //отключает слайдер если все слайды входят в область видимости

  // Navigation arrows
  navigation: {
    nextEl: ".swiper-button-next_news",
    prevEl: ".swiper-button-prev_news",
  },
  // pagination: {
  //   el: ".swiper-pagination",
  //   clickable: true,
  // },
  // mousewheel: { //перелистывание слайдов по мышке
  //   sensitivity: 1,
  //   eventsTarget: ".news__slider",
  // },
  // keyboard: { //перелистывание слайдов по нажатию клавиш
  //   enabled: true,
  //   onlyInViewport: true,
  //   // pageUpDown: true,
  // },
  breakpoints: {
    0: {
      slidesPerView: "auto",
      spaceBetween: 20,
    },
    560: {
      slidesPerView: 2,
      spaceBetween: 20,
    },
    960: {
      slidesPerView: "auto",
      spaceBetween: 20,
    },
    1560: {
      spaceBetween: 40,
    },
  },
});

new Swiper(".reparation_swiper", {
  // Optional parameters
  direction: "horizontal",
  // loop: true,
  // allowTouchMove: true,
  // slidesPerView: auto, // сколько слайдов показывать, можно дробно
  slidesPerView: 1, // сколько слайдов показывать, можно дробно
  // slidersPerGroup: 3, // сколько слайдов в группе
  // centeredSlides: true, //выравнивание слайдов по центру
  // initialSlide: 0, //начальный слайд (c нуля)

  // spaceBetween: 40,
  // slideToClickedSlide: true, //перелистывание слайдов по клику
  // grabCursor: true, //меняет курсор при наведении на руку
  watchOverflow: true, //отключает слайдер если все слайды входят в область видимости

  // Navigation arrows
  navigation: {
    nextEl: ".swiper-button-next_rep",
    prevEl: ".swiper-button-prev_rep",
  },
  // pagination: {
  //   el: ".swiper-pagination",
  //   clickable: true,
  // },
  // mousewheel: { //перелистывание слайдов по мышке
  //   sensitivity: 1,
  //   eventsTarget: ".news__slider",
  // },
  // keyboard: { //перелистывание слайдов по нажатию клавиш
  //   enabled: true,
  //   onlyInViewport: true,
  //   // pageUpDown: true,
  // },
  breakpoints: {
    0: {
      // slidesPerView: 1,
    },
    500: {
      // slidesPerView: 2,
    },
    800: {
      // slidesPerView: 3.35,
    },
  },
});

new Swiper(".slider_swiper", {
  // Optional parameters
  direction: "horizontal",
  // loop: true,
  // allowTouchMove: true,
  // slidesPerView: 1, // сколько слайдов показывать, можно дробно
  slidesPerView: "auto", // сколько слайдов показывать, можно дробно
  // slidersPerGroup: 3, // сколько слайдов в группе
  // centeredSlides: true, //выравнивание слайдов по центру
  // initialSlide: 0, //начальный слайд (c нуля)

  spaceBetween: 20,
  // slideToClickedSlide: true, //перелистывание слайдов по клику
  // grabCursor: true, //меняет курсор при наведении на руку
  // watchOverflow: true, //отключает слайдер если все слайды входят в область видимости

  // Navigation arrows
  navigation: {
    nextEl: ".swiper-button-next_slider",
    prevEl: ".swiper-button-prev_slider",
  },
  // pagination: {
  //   el: ".swiper-pagination",
  //   clickable: true,
  // },
  // mousewheel: { //перелистывание слайдов по мышке
  //   sensitivity: 1,
  //   eventsTarget: ".news__slider",
  // },
  // keyboard: { //перелистывание слайдов по нажатию клавиш
  //   enabled: true,
  //   onlyInViewport: true,
  //   // pageUpDown: true,
  // },
  breakpoints: {
    0: {
      // slidesPerView: 1,
    },
    500: {
      // slidesPerView: 2,
    },
    800: {
      // slidesPerView: 3.35,
    },
  },
});

new Swiper(".standarts-slider", {
  // Optional parameters
  direction: "horizontal",
  // loop: true,
  // allowTouchMove: true,
  // slidesPerView: auto, // сколько слайдов показывать, можно дробно
  slidesPerView: 1, // сколько слайдов показывать, можно дробно
  // slidersPerGroup: 3, // сколько слайдов в группе
  // centeredSlides: true, //выравнивание слайдов по центру
  // initialSlide: 0, //начальный слайд (c нуля)

  spaceBetween: 40,
  // slideToClickedSlide: true, //перелистывание слайдов по клику
  // grabCursor: true, //меняет курсор при наведении на руку
  // watchOverflow: true, //отключает слайдер если все слайды входят в область видимости

  // Navigation arrows
  navigation: {
    nextEl: ".swiper-button-next_stand",
    prevEl: ".swiper-button-prev_stand",
  },
  // pagination: {
  //   el: ".swiper-pagination",
  //   clickable: true,
  // },
  // mousewheel: { //перелистывание слайдов по мышке
  //   sensitivity: 1,
  //   eventsTarget: ".news__slider",
  // },
  // keyboard: { //перелистывание слайдов по нажатию клавиш
  //   enabled: true,
  //   onlyInViewport: true,
  //   // pageUpDown: true,
  // },
  breakpoints: {
    0: {
      // slidesPerView: 1,
    },
    500: {
      // slidesPerView: 2,
    },
    800: {
      // slidesPerView: 3.35,
    },
  },
});

new Swiper(".projects-slider", {
  // Optional parameters
  direction: "horizontal",
  // loop: true,
  // allowTouchMove: true,
  slidesPerView: "auto", // сколько слайдов показывать, можно дробно
  // slidesPerView: "4", // сколько слайдов показывать, можно дробно
  // slidersPerGroup: 4, // сколько слайдов в группе
  // centeredSlides: true, //выравнивание слайдов по центру
  // initialSlide: 0, //начальный слайд (c нуля)

  spaceBetween: 10, // расстояние между слайдами
  // slideToClickedSlide: true, //перелистывание слайдов по клику
  // grabCursor: true, //меняет курсор при наведении на руку
  // watchOverflow: true, //отключает слайдер если все слайды входят в область видимости

  // Navigation arrows
  navigation: {
    nextEl: ".swiper-button-next_projects",
    prevEl: ".swiper-button-prev_projects",
  },
  // pagination: {
  //   el: ".swiper-pagination",
  //   clickable: true,
  // },
  // mousewheel: { //перелистывание слайдов по мышке
  //   sensitivity: 1,
  //   eventsTarget: ".news__slider",
  // },
  // keyboard: { //перелистывание слайдов по нажатию клавиш
  //   enabled: true,
  //   onlyInViewport: true,
  //   // pageUpDown: true,
  // },
  breakpoints: {
    0: {
      // slidesPerView: 1,
    },
    500: {
      // slidesPerView: 2,
    },
    800: {
      // slidesPerView: 3.35,
    },
  },
});

new Swiper(".swiper_history", {
  // Optional parameters
  direction: "horizontal",
  // loop: true,
  // allowTouchMove: true,
  slidesPerView: "auto", // сколько слайдов показывать, можно дробно
  // slidesPerView: "4", // сколько слайдов показывать, можно дробно
  // slidersPerGroup: 4, // сколько слайдов в группе
  // centeredSlides: true, //выравнивание слайдов по центру
  // initialSlide: 0, //начальный слайд (c нуля)

  spaceBetween: 2, // расстояние между слайдами
  // slideToClickedSlide: true, //перелистывание слайдов по клику
  // grabCursor: true, //меняет курсор при наведении на руку
  watchOverflow: true, //отключает слайдер если все слайды входят в область видимости

  // Navigation arrows
  navigation: {
    nextEl: ".swiper-button-next_history",
    prevEl: ".swiper-button-prev_history",
  },
  // pagination: {
  //   el: ".swiper-pagination",
  //   clickable: true,
  // },
  // mousewheel: { //перелистывание слайдов по мышке
  //   sensitivity: 1,
  //   eventsTarget: ".news__slider",
  // },
  // keyboard: { //перелистывание слайдов по нажатию клавиш
  //   enabled: true,
  //   onlyInViewport: true,
  //   // pageUpDown: true,
  // },
  breakpoints: {
    0: {
      // slidesPerView: 1,
    },
    500: {
      // slidesPerView: 2,
    },
    800: {
      // slidesPerView: 3.35,
    },
  },
});
// -------------------------------------------- end slider: ---------------------------------------------
// -------------------------------------------- start popup: ---------------------------------------------
const popupLinks = document.querySelectorAll(".popup-link");
const lockPadding = document.querySelectorAll(".lock-padding");
// const btn = document.querySelector(".project-btn");

let unlock = true;
const timeout = 800;

if (popupLinks.length > 0) {
  for (let index = 0; index < popupLinks.length; index++) {
    const popupLink = popupLinks[index];
    popupLink.addEventListener("click", function (e) {
      console.log("тест");
      const popupName = popupLink.getAttribute("href").replace("#", "");
      const curentPopup = document.getElementById(popupName); //получаем id попап-окна

      const dataRequest = popupLink.getAttribute("data-request");
      if (dataRequest) {
        curentPopup.setAttribute("data-request", dataRequest);
      }
      popupOpen(curentPopup);
      e.preventDefault();
    });
  }
}

const popupCloseIcon = document.querySelectorAll(".popup-close");
if (popupCloseIcon.length > 0) {
  for (let index = 0; index < popupCloseIcon.length; index++) {
    const el = popupCloseIcon[index];
    el.addEventListener("click", function (e) {
      console.log("тест");
      popupClose(el.closest(".popup")); //ближайший родитель класса popup
      e.preventDefault();
    });
  }
}

function popupOpen(curentPopup) {
  if (curentPopup && unlock) {
    const popupActive = document.querySelector(".popup.open");
    if (popupActive) {
      // закрываем текущий открытый попап, если он есть
      popupClose(popupActive, false);
    } else {
      bodyLock();
    }
    // console.log(curentPopup);
    curentPopup.classList.add("open");
    curentPopup.addEventListener("click", function (e) {
      console.log("тест");
      if (!e.target.closest(".popup__content")) {
        // если клик был по области вокруг попапа то ничего не делаем
        popupClose(e.target.closest(".popup"));
      }
    });
  }
}

function popupClose(popupActive, doUnlock = true) {
  console.log("popupClose");
  if (unlock) {
    popupActive.classList.remove("open");
    if (doUnlock) {
      bodyUnLock();
    }
  }
}

// добавляем боди padding-right при открытии попапа, на ширину скролл-бара
function bodyLock() {
  const lockPaddingValue = window.innerWidth - document.querySelector(".header").offsetWidth + "px";
  // console.log(lockPaddingValue);
  for (let index = 0; index < lockPadding.length; index++) {
    const el = lockPadding[index];
    el.style.marginRight = lockPaddingValue;
    // console.log(el.style.marginRight);
  }
  body.style.paddingRight = lockPaddingValue;
  // console.log(body.style.paddingRight);
  body.classList.add("lock");

  unlock = false;
  setTimeout(function () {
    unlock = true;
  }, timeout);
}

function bodyUnLock() {
  setTimeout(function () {
    for (let index = 0; index < lockPadding.length; index++) {
      const el = lockPadding[index];
      el.style.marginRight = "0px";
    }
    body.style.paddingRight = "0px";
    body.classList.remove("lock");
  }, timeout);

  unlock = false;
  setTimeout(function () {
    unlock = true;
  }, timeout);
}

document.addEventListener("keydown", function (e) {
  if (e.key === "Escape") {
    const popupActive = document.querySelector(".popup.open");
    popupClose(popupActive);
  }
});
// -------------------------------------------- end popup: ---------------------------------------------

// -------------------------------------------- start gallery: ---------------------------------------------
// const previews = document.querySelectorAll(".plans__item");

// if (previews) {
//   previews.forEach((item) => {
//     item.addEventListener("click", function () {
// console.log('тест');
//       const imgBox = document.querySelector(".plans__img").querySelector("img");
//       const img = item.querySelector("img").getAttribute("src");
//       imgBox.setAttribute("src", img);
//     });
//   });
// }

// -------------------------------------------- end gallery: ---------------------------------------------

// -------------------------------------------- start btn_montage: ---------------------------------------------

// -------------------------------------------- end btn_montage ---------------------------------------------

// -------------------------------------------- start О компании: ---------------------------------------------

const btns = document.querySelectorAll(".stage__item");

const articles = document.querySelectorAll(".stage__article");

if (btns.length) {
  // console.log(btns);
  btns.forEach((item) => {
    item.addEventListener("click", function () {
      console.log("тест");
      btns.forEach((item) => {
        item.classList.remove("stage__item_active");
      });
      const id = item.getAttribute("data-id");
      articles.forEach((item) => {
        item.classList.remove("stage__article_active");
        if (item.getAttribute("data-id") === id) {
          item.classList.add("stage__article_active");
        }
      });
      // document.querySelector(`.stage__article[data-id="${id}"]`).classList.add("stage__article_active");
      item.classList.toggle("stage__item_active");
    });
  });
}
// -------------------------------------------- end О компании ---------------------------------------------

// -------------------------------------------- start Отзывы: ---------------------------------------------

// document.addEventListener("click", function (e) {
//   console.log('тест');
//   // закрытие отзывов при клике на другой елемент:
//   if (!e.target.closest(".card_about_open")) {
//     const cardsFeedback = document.querySelectorAll(".card_about");

//     cardsFeedback.forEach((item) => {
//       item.classList.remove("card_about_open");
//     });
//   }

//   // открытие отзывов:
//   const openBtns = document.querySelectorAll(".feedback-btn_open");
//   if (openBtns) {
//     openBtns.forEach((item) => {
//       if (e.target.closest(".feedback-btn_open") == item) {
//         const card = item.closest(".card_about");
//         const truthCardTextBlock = card.querySelector(".card__desc_hide");
//         const truthCardText = truthCardTextBlock.textContent;
//         const cardTextBlockForShow = card.querySelector(".card__desc_show");
//         card.classList.add("card_about_open");
//         cardTextBlockForShow.textContent = truthCardText;
//       }
//     });
//   }

//   // закрытие отзывов:
//   const closeBtns = document.querySelectorAll(".feedback-btn_close");
//   if (closeBtns) {
//     closeBtns.forEach((item) => {
//       if (e.target.closest(".feedback-btn_close") == item) {
//         const card = item.closest(".card_about");
//         const truthCardTextBlock = card.querySelector(".card__desc_hide");
//         const truthCardText = truthCardTextBlock.textContent;
//         const cardTextBlockForShow = card.querySelector(".card__desc_show");
//         card.classList.remove("card_about_open");
//         const cardTextTrim = truthCardText.slice(0, 140) + "...";
//         cardTextBlockForShow.textContent = cardTextTrim;
//       }
//     });
//   }
// });

// // форматирование отзывов при загрузке страницы:
// const cardsFeedback = document.querySelectorAll(".card_about");
// if (cardsFeedback.length) {
//   cardsFeedback.forEach((item) => {
//     const truthCardTextBlock = item.querySelector(".card__desc_hide");
//     const truthCardText = truthCardTextBlock.textContent;
//     // console.log(truthCardText);
//     const cardTextBlockForShow = item.querySelector(".card__desc_show");

//     if (truthCardText.length > 160) {
//       item.classList.add("card_about_overflow");
//       const cardTextTrim = truthCardText.slice(0, 140) + "...";
//       cardTextBlockForShow.textContent = cardTextTrim;
//     } else {
//       cardTextBlockForShow.textContent = truthCardText;
//     }
//   });
// }

// -------------------------------------------- end Отзывы ---------------------------------------------

// -------------------------------------------- start Каталог: ---------------------------------------------
const catalog = document.querySelector(".catalog-all-main");
if (catalog) {
  const activOptionsItem = document.querySelectorAll(".activ-options__item");
  if (activOptionsItem) {
    activOptionsItem.forEach((item) => {
      const closeBtn = item.querySelector(".activ-options__icon");
      closeBtn.addEventListener("click", function () {
        console.log("тест");
        item.remove();
      });
    });
  }

  const allActivOptionsDelBtn = document.querySelector(".activ-options__del-all");
  if (allActivOptionsDelBtn) {
    const closeBtn = allActivOptionsDelBtn.querySelector(".activ-options__icon");
    closeBtn.addEventListener("click", function () {
      console.log("тест");
      activOptionsItem.forEach((item) => {
        item.remove();
      });
      allActivOptionsDelBtn.remove();
    });
  }

  const menuItem = catalog.querySelectorAll(".filter__item_head");
  menuItem.forEach((item) => {
    item.addEventListener("click", function () {
      console.log("тест");
      menuItem.forEach((item) => {
        item.classList.remove("filter__item_head_active");
      });
      item.classList.add("filter__item_head_active");
    });
  });

  //открытие фильтра:
  const filterItem = catalog.querySelectorAll(".filter__item_body");
  filterItem.forEach((item) => {
    item.addEventListener("click", function (e) {
      console.log("тест");
      //закрытие всех остальных фильтров:
      filterItem.forEach((item) => {
        if (item !== e.target.closest(".filter__item_body")) {
          item.classList.remove("filter__item_body_active");
          const arrow = item.querySelector(".filter__icon");
          arrow.classList.remove("filter__icon_active");
        }
      });

      item.classList.toggle("filter__item_body_active");
      const arrow = item.querySelector(".filter__icon");
      arrow.classList.toggle("filter__icon_active");
    });
  });

  // закрытие фильтра:
  document.addEventListener("keydown", function (e) {
    if (e.key === "Escape") {
      filterItem.forEach((item) => {
        item.classList.remove("filter__item_body_active");
        const arrow = item.querySelector(".filter__icon");
        arrow.classList.remove("filter__icon_active");
      });
    }
  });
  document.addEventListener("click", function (e) {
    console.log("тест");
    if (!e.target.closest(".filter__item_body")) {
      filterItem.forEach((item) => {
        item.classList.remove("filter__item_body_active");
        const arrow = item.querySelector(".filter__icon");
        arrow.classList.remove("filter__icon_active");
      });
    }
  });

  const catalogCards = document.querySelectorAll(".catalog-all__item");

  if (catalogCards.length) {
    // console.log(catalogCards);
    catalogCards.forEach((item) => {
      const cartLinkBtn = item.querySelector(".in-cart__icon");
      cartLinkBtn.addEventListener("click", function (e) {
        console.log("тест");
        e.preventDefault();
        window.location.href = cartLinkBtn.getAttribute("data-href");
      });

      const colorBtn = item.querySelectorAll(".card__color-item");
      if (colorBtn) {
        colorBtn.forEach((item) => {
          item.addEventListener("click", function (e) {
            console.log("тест");
            e.preventDefault();
            colorBtn.forEach((item) => {
              item.classList.remove("card__color-item_active");
            });
            item.classList.add("card__color-item_active");
          });
        });
      }

      const toCartBtn = item.querySelector(".card__btn_to-cart");
      toCartBtn.addEventListener("click", function (e) {
        console.log("тест");
        e.preventDefault();
      });
      const cartBtn = item.querySelector(".card__btn_in-cart");
      cartBtn.addEventListener("click", function (e) {
        console.log("тест");
        e.preventDefault();
      });

      // счетчик количества карточек в корзине:
      const plus = item.querySelector(".card__counter-btn_plus");
      const minus = item.querySelector(".card__counter-btn_minus");
      const counterValue = item.querySelector(".card__counter-value");
      let quontity = 0;

      // counterValue.addEventListener("change", function (e) {
      //   quontity = e.target.value;
      // });
      counterValue.addEventListener("input", function (e) {
        if (Number(counterValue.value) <= 0) {
          quontity = 0;
          counterValue.value = "";
        } else {
          quontity = counterValue.value;
        }
      });

      plus.addEventListener("click", function (e) {
        console.log("тест");
        e.preventDefault();

        quontity++;
        counterValue.value = quontity;
        // getCost(item, quontity);
        // getTotalCost();
      });
      minus.addEventListener("click", function (e) {
        console.log("тест");
        if (counterValue.value > 0) {
          e.preventDefault();

          quontity--;
          counterValue.value = quontity;
          // getCost(item, quontity);
          // getTotalCost();
        }
      });

      const montageBtn = item.querySelector(".btn_montage");

      montageBtn.addEventListener("click", function (e) {
        console.log("тест");
        e.preventDefault();
        montageBtn.classList.toggle("btn_montage_active");
      });

      toCartBtn.addEventListener("click", function (e) {
        console.log("тест");
        e.preventDefault();
        toCartBtn.classList.add("card__btn_to-cart_hide");
        cartBtn.classList.add("card__btn_in-cart_visible");
      });
    });
  }
}

// -------------------------------------------- end Каталог ---------------------------------------------
// -------------------------------------------- start Описание товара: ---------------------------------------------

// const goodsItem = document.querySelector(".goods-item__main");
// if (goodsItem) {
//   const montageBtn = goodsItem.querySelector(".btn_montage");

//   montageBtn.addEventListener("click", function (e) {
// console.log('тест');
//     e.preventDefault();
//     montageBtn.classList.toggle("btn_montage_active");
//   });

//   const botMenu = goodsItem.querySelectorAll(".bot-block__menu-item");
//   const botText = goodsItem.querySelectorAll(".bot-block__text");
//   botMenu.forEach((item) => {
//     item.addEventListener("click", function (e) {
// console.log('тест');
//       const id = item.getAttribute("data-id");
//       botMenu.forEach((item) => {
//         item.classList.remove("bot-block__menu-item_active");
//       });
//       item.classList.add("bot-block__menu-item_active");

//       botText.forEach((item) => {
//         item.classList.remove("bot-block__text_active");
//         if (item.getAttribute("data-id") === id) {
//           item.classList.add("bot-block__text_active");
//         }
//       });
//     });
//   });

//   const previews = document.querySelectorAll(".small-img-wrap__img");

//   if (previews) {
//     previews.forEach((item) => {
//       item.addEventListener("click", function () {
// console.log('тест');
//         const imgBox = document
//           .querySelector(".goods-item__img")
//           .querySelector("img");
//         const img = item.querySelector("img").getAttribute("src");
//         imgBox.setAttribute("src", img);
//       });
//     });
//   }

//   // счетчик количества карточек в корзине:
//   const plus = goodsItem.querySelector(".in-cart__counter-btn_plus");
//   const minus = goodsItem.querySelector(".in-cart__counter-btn_minus");
//   const counterValue = goodsItem.querySelector(".in-cart__counter-value");
//   const totalCost = goodsItem.querySelector(".cost__cost-value");
//   const priceEl = goodsItem.querySelector(".in-cart__price").innerHTML;
//   let price = parseInt(priceEl.replace(/\s/g, ""));
//   console.log(totalCost);

//   let quontity = 0;
//   counterValue.addEventListener("input", function (e) {
//     if (Number(counterValue.value) <= 0) {
//       quontity = 0;
//       counterValue.value = 0;
//     } else {
//       quontity = counterValue.value;
//     }
//     totalCost.innerHTML = (quontity * price).toLocaleString();
//   });

//   plus.addEventListener("click", function (e) {
// console.log('тест');
//     quontity++;
//     counterValue.value = quontity;
//     console.log(quontity * price);
//     totalCost.innerHTML = (quontity * price).toLocaleString();
//   });

//   minus.addEventListener("click", function (e) {
// console.log('тест');
//     if (counterValue.value > 0) {
//       quontity--;
//       counterValue.value = quontity;
//       totalCost.innerHTML = (quontity * price).toLocaleString();
//       console.log(quontity * price);
//       totalCost.innerHTML = (quontity * price).toLocaleString();
//     }
//   });

//   const colorBtn = goodsItem.querySelectorAll(".color-list__color-item");
//   if (colorBtn) {
//     colorBtn.forEach((item) => {
//       item.addEventListener("click", function (e) {
// console.log('тест');
//         e.preventDefault();
//         colorBtn.forEach((item) => {
//           item.classList.remove("color-list__color-item_active");
//         });
//         item.classList.add("color-list__color-item_active");
//       });
//     });
//   }
// }

// -------------------------------------------- end Описание товара ---------------------------------------------
// -------------------------------------------- start BURGER: ---------------------------------------------

const burger = document.querySelector(".burger");
// console.log(burger);

if (burger) {
  const popup = document.querySelector("#menu");
  const popupContent = popup.querySelector(".popup__content.menu");

  const content = document.querySelector(".header__nav");
  const headerNavWrap = document.querySelector(".header__nav-wrap");

  burger.addEventListener("click", function (e) {
    console.log("тест");
    popupOpen(popup);
    // bodyLock()
    popup.classList.add("open");
    popupContent.append(content);
    console.log(popup);
  });

  // закрытие popup по Esc
  document.addEventListener("keydown", function (e) {
    console.log("тест");
    if (e.key === "Escape") {
      popupClose(popup);
      bodyUnLock();
      popup.classList.remove("open");
      if (popup.classList.contains("open")) {
        // передача формы обратно на главную страницу
        headerNavWrap.append(content);
      }
    }
  });

  // закрытие popup по клику вне его
  popup.addEventListener("click", function (e) {
    console.log("тест");
    console.log(e.target);
    if (!e.target.closest(".popup__content")) {
      popupClose(popup);
      bodyUnLock();
      popup.classList.remove("open");
      if (popup.classList.contains("open")) {
        // передача формы обратно на главную страницу
        headerNavWrap.append(content);
      }
    }
  });

  // закрытие popup по кнопке
  const popupCloseIcon = popup.querySelector(".promo__close");
  popupCloseIcon.addEventListener("click", function (e) {
    popupClose(popup);
    bodyUnLock();
    popup.classList.remove("open");
    if (popup.classList.contains("open")) {
      // передача формы обратно на главную страницу
      headerNavWrap.append(content);
    }
  });
}
// -------------------------------------------- end BURGER ---------------------------------------------

// -------------------------------------------- start Search: ---------------------------------------------
const headerSearchWrap = document.querySelector(".header__search-form-wrap");

if (headerSearchWrap) {
  if (window.screen.width <= 920) {
    headerSearchWrap.addEventListener("click", function (e) {
      console.log("тест");
      headerSearchWrap.classList.add("header__search-form-wrap_active");
      // console.log("200");
    });
  }

  const closeSearchBtn = headerSearchWrap.querySelector(".search-form__close-btn");
  const inputField = headerSearchWrap.querySelector(".search-form__input");

  if (closeSearchBtn) {
    closeSearchBtn.addEventListener("click", function (e) {
      console.log("тест");
      // e.preventDefault();
      headerSearchWrap.classList.remove("header__search-form-wrap_active");
      inputField.value = "";
      // console.log("100");
      e.stopPropagation();
    });
  }

  document.addEventListener("click", function (e) {
    console.log("тест");
    if (!e.target.closest(".search-form") && headerSearchWrap.classList.contains("header__search-form-wrap_active")) {
      headerSearchWrap.classList.remove("header__search-form-wrap_active");
      inputField.value = "";
      // console.log("400");
    }
  });
}

// -------------------------------------------- end Search ---------------------------------------------

// -------------------------------------------- start товар: ---------------------------------------------
const goodsCartBtn = document.querySelectorAll(".goods-item__btn_to-cart");

if (goodsCartBtn) {
  // const goodsQuantity = document.querySelector(".goods__quantity");
  goodsCartBtn.forEach((item) => {
    item.addEventListener("click", function (e) {
      console.log("тест");
      e.preventDefault();
      item.classList.toggle("goods-item__btn_to-cart_active");
      // headerCartBtn.classList.toggle("btn__cart_active");
      setCartActive();
    });
  });
}

// -------------------------------------------- end товар ---------------------------------------------
// -------------------------------------------- start сертификаты: ---------------------------------------------
// const sertificates = document.querySelectorAll(".card_sert");

// if (sertificates) {
//   sertificates.forEach((item) => {
//     item.addEventListener("click", function (e) {
// console.log('тест');
//       const img = item.innerHTML;
//       // const img = item.querySelector("img").getAttribute("src");
//       console.log(img);
//       // item.querySelector("img").setAttribute("src", img);

//       e.preventDefault();
//     });
//   });
// }

// -------------------------------------------- start сертификаты: ---------------------------------------------
// -------------------------------------------- end корзина ---------------------------------------------

$(".phone").mask("7(999) 999 99 99");
// console.log(urlParams);

// -------------------------------------------- start Куки: ---------------------------------------------
function setCookie(name, value, lifetimeDays = 30, path = "/") {
  var expires = "";
  if (lifetimeDays) {
    var date = new Date();
    date.setTime(date.getTime() + lifetimeDays * 24 * 60 * 60 * 1000);
    expires = "; expires=" + date.toUTCString();
  }
  document.cookie = name + "=" + (value || "") + expires + "; path=" + path;
}

function getCookie(name) {
  var nameEQ = name + "=";
  var cookies = document.cookie.split(";");
  for (var i = 0; i < cookies.length; i++) {
    var c = cookies[i];
    while (c.charAt(0) == " ") c = c.substring(1, c.length);
    if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length, c.length);
  }
  return null;
}

if (!getCookie("CookiePolicyAccepted")) {
  $(".cookie").show();
} else {
  $(".cookie").hide();
}

function acceptCookiePolicy() {
  // console.log("acceptCookiePolicy");
  setCookie("CookiePolicyAccepted", true);
  $(".cookie").fadeTo(500, 0);
  setTimeout(() => {
    $(".cookie").hide();
  }, 500);
}
function closeCookiePolicyNotification() {
  // console.log("closeCookiePolicyNotification");
  $(".cookie").fadeOut(300);
}

const cookieBtn = document.querySelector(".cookie__btn");
if (cookieBtn) {
  cookieBtn.addEventListener("click", function (e) {
    console.log("тест");
    e.preventDefault();
    acceptCookiePolicy();
  });
}

const cookieCloseBtn = document.querySelector(".cookie__close");
if (cookieCloseBtn) {
  cookieCloseBtn.addEventListener("click", function (e) {
    console.log("тест");
    e.preventDefault();
    closeCookiePolicyNotification();
  });
}
// -------------------------------------------- end Куки ---------------------------------------------
// -------------------------------------------- start Отзывы: ---------------------------------------------

// -------------------------------------------- end Отзывы ---------------------------------------------
// -------------------------------------------- start Карта ---------------------------------------------
// Функция ymaps.ready() будет вызвана, когда
// загрузятся все компоненты API, а также когда будет готово DOM-дерево.

const map = document.getElementById("map");
const map2 = document.getElementById("map2");
if (map || map2) {
  initMap();

  async function initMap() {
    //     // Промис `ymaps3.ready` будет зарезолвлен, когда загрузятся все компоненты основного модуля API
    await ymaps3.ready;

    const { YMap, YMapDefaultSchemeLayer, YMapDefaultFeaturesLayer, YMapMarker } = ymaps3;

    // const {YMapDefaultMarker} = await ymaps3.import('@yandex/ymaps3-markers@0.0.1');
    // // кластеризация маркеров
    // const {YMapClusterer, clusterByGrid} = await ymaps3.import('@yandex/ymaps3-clusterer@0.0.1');
    // const clusterer = new YMapClusterer({
    //   method: clusterByGrid({gridSize: 128}),
    //   features: map._points,
    //   функция которая вернет YMapMarker для маркера,
    //   функция которая вернет YMapMarker для кластера
    // });
    // // https://yandex.ru/dev/maps/jsapi/doc/3.0/ref/packages/clusterer/index.html

    // Иницилиазируем карту
    const map = new YMap(
      // Передаём ссылку на HTMLElement контейнера
      // document.querySelector(".map-yandex"),
      document.getElementById("map"),

      // Передаём параметры инициализации карты

      {
        location: {
          // Координаты центра карты
          center: [65.79187000766548, 56.97004647141038],
          // Уровень масштабирования
          zoom: 14.7,
        },
      },
      [
        // Добавляем слой, скрываем POI
        new YMapDefaultSchemeLayer({
          customization: [
            {
              tags: {
                any: ["poi", "transit"],
              },
              elements: "label",
              stylers: [
                {
                  opacity: 0,
                },
              ],
            },
          ],
        }),
        new YMapDefaultFeaturesLayer({}),
      ]
    );

    const markerElement = document.createElement("img");
    markerElement.className = "marker-class";
    markerElement.innerText = "I'm marker!";
    markerElement.style.width = "42px";
    markerElement.style.height = "58px";
    markerElement.src = "/assets/img/pin.svg";

    const marker = new YMapMarker(
      {
        coordinates: [65.80127919688765, 56.971359032603615],
        draggable: true,
        mapFollowsOnDrag: true,
      },
      markerElement
    );
    map.addChild(marker);

    const map2 = new YMap(
      // Передаём ссылку на HTMLElement контейнера
      document.getElementById("map2"),
      // Передаём параметры инициализации карты

      {
        location: {
          // Координаты центра карты
          center: [65.50887, 57.150993],
          // Уровень масштабирования
          zoom: 14.7,
        },
      },
      [
        // Добавляем слой, скрываем POI
        new YMapDefaultSchemeLayer({
          customization: [
            {
              tags: {
                any: ["poi", "transit"],
              },
              elements: "label",
              stylers: [
                {
                  opacity: 0,
                },
              ],
            },
          ],
        }),
        new YMapDefaultFeaturesLayer({}),
      ]
    );

    const markerElement2 = document.createElement("img");
    markerElement2.className = "marker-class";
    markerElement2.innerText = "I'm marker!";
    markerElement2.style.width = "100%";
    markerElement2.style.height = "100%";
    markerElement2.src = "/assets/img/pin-office.svg";

    const marker2 = new YMapMarker(
      {
        coordinates: [65.50887, 57.150993],
        draggable: true,
        mapFollowsOnDrag: true,
      },
      markerElement2
    );
    map2.addChild(marker2);
  }

  function setVisible() {
    myGeoObject4.options.set({
      visible: false,
    });
    myGeoObject3.options.set({
      visible: false,
    });
    myGeoObject2.options.set({
      visible: false,
    });
    myGeoObject.options.set({
      visible: false,
    });
  }
  $(document).ready(function () {
    $("#change-map").on("click", function () {
      setVisible();
    });
  });

  const filter = map.querySelectorAll(".map__mark-item_point");
  filter.forEach((item) => {
    item.addEventListener("click", function () {
      console.log("тест");
      item.classList.toggle("map__mark-item_active");
      checkAll();
    });
  });

  const resetBtns = map.querySelector(".reset-btn");

  if (resetBtns) {
    resetBtns.addEventListener("click", function () {
      console.log("тест");
      filter.forEach((item) => {
        item.classList.remove("map__mark-item_active");
        checkAll();
      });
    });
  }

  const allBtn = map.querySelector(".map__mark-item-all");

  if (allBtn) {
    allBtn.addEventListener("click", function () {
      console.log("тест");
      if (allBtn.classList.contains("map__mark-item_active")) {
        allBtn.classList.remove("map__mark-item_active");
        filter.forEach((item) => {
          item.classList.remove("map__mark-item_active");
        });
      } else {
        filter.forEach((item) => {
          item.classList.add("map__mark-item_active");
        });
        allBtn.classList.add("map__mark-item_active");
      }
    });
  }

  function checkAll() {
    console.log("тест");
    let activeItems = map.querySelectorAll(".map__mark-item_point.map__mark-item_active");
    console.log(activeItems.length);
    console.log(filter.length);

    if (activeItems.length === filter.length) {
      allBtn.classList.add("map__mark-item_active");
    } else {
      allBtn.classList.remove("map__mark-item_active");
    }
  }

  const markListBtnOpen = map.querySelector(".map__menu-btn-filters");
  const markListBtnClose = map.querySelector(".map__menu-btn-apply");

  if (markListBtnOpen) {
    markListBtnOpen.addEventListener("click", function () {
      const markList = map.querySelector(".map__mark-list-wrap");
      console.log("тест");
      markList.classList.add("map__mark-list-wrap_active");
    });

    markListBtnClose.addEventListener("click", function () {
      const markList = map.querySelector(".map__mark-list-wrap");
      console.log("тест");
      markList.classList.remove("map__mark-list-wrap_active");
    });
  }
}

// -------------------------------------------- end Карта ---------------------------------------------
//--------------------------Запрос к БД----------------------------
// Загружаем список контрагентов с БД:
// async function fetchToDB(options) {
//   // Блок try выполнится полностью, если не будет ошибок:
//   try {
//     // Выполняем запрос:
//     const responce = await fetch("files/main.php", {
//       method: "POST",
//       headers: {
//         "Content-Type": "application/json",
//       },
//       body: JSON.stringify(options),
//     });
//     const infoList = await responce.json();
//     return infoList; // Возвращаем результат запроса
//   } catch (err) {
//     // Блок catch сработает только если будут какие-то ошибки в блоке try:
//     // Выведем в консоли информацию об ошибке:
//     console.log("При запросе к БД произошла ошибка, детали ниже:");
//     console.error(err);
//     // Вернем исключение с текстом поясняющим детали ошибки:
//     // alert("Произошла ошибка при запросе к БД!");
//     throw new Error("Запрос завершился неудачно.");
//   }
// }

// let options = {
//   // опции для получения списка всех контрагентов
//   function: "getAll",
//   table: "apartments",
//   all: "*",
// };

// const arrApartments = await fetchToDB(options);
// const apartmentsForRender = [...arrApartments];
// console.log(apartmentsForRender);

// console.log(options);
// await fetchToDB(options);
// требуется подключить скрипт как модуль, иначе await не работает!!!
//--------------------------end Запрос к БД----------------------------

const footerForm = document.querySelector(".footer__form");
if (footerForm) {
  const submitBtn = footerForm.querySelector(".form__btn");
  submitBtn.addEventListener("click", (event) => {
    event.preventDefault();
    let queryParams = {
      name: "",
      phone: "",
      email: "",
      message: "",
    };

    queryParams.name = document.querySelector(".form__input_name").value;
    queryParams.phone = document.querySelector(".form__input_phone").value;
    queryParams.email = document.querySelector(".form__input_email").value;
    // footerForm.addEventListener("submit", (event) => {
    //   event.preventDefault();
    //   const footerName = document.querySelector(".footer__input-name");
    //   const footerEmail = document.querySelector(".footer__input-email");
    //   const footerPhone = document.querySelector(".footer__input-phone");
    //   console.log(footerName.value);
    //   console.log(footerEmail.value);
    //   console.log(footerPhone.value);
    //   footerName.value = "";
    //   footerEmail.value = "";
    //   footerPhone.value = "";
    //   return false;
    // });
    // console.log(queryParams);
    // postCall(queryParams);
    // const popupSuccess = document.querySelector("#success");
    // popupOpen(popupSuccess);

    if (queryParams.name === "" || queryParams.phone === "") {
      alert("Заполните обязательные поля");
      return;
    } else {
      postCall(queryParams).then((res) => {
        if (res === "OK!") {
          const popupSuccess = document.querySelector("#success");
          popupOpen(popupSuccess);
        } else {
          alert("Произошла ошибка, попробуйте позже.");
          // const popupError = document.querySelector("#error");
          // popupOpen(popupError);
        }
      });
    }
  });
}

// footerForm.addEventListener("submit", (event) => {
//   event.preventDefault();
//   const footerName = document.querySelector(".footer__input-name");
//   const footerEmail = document.querySelector(".footer__input-email");
//   const footerPhone = document.querySelector(".footer__input-phone");
//   console.log(footerName.value);
//   console.log(footerEmail.value);
//   console.log(footerPhone.value);
//   footerName.value = "";
//   footerEmail.value = "";
//   footerPhone.value = "";
//   return false;
// });

// -------------------------------------------- start Планы: ---------------------------------------------
//активные планировки:
// const plansItem = document.querySelectorAll(".plans__item");
// if (plansItem) {
//   plansItem.forEach((item) => {
//     item.addEventListener("click", (event) => {
// console.log('тест');
//       plansItem.forEach((item) => {
//         item.classList.remove("plans__item_active");
//       });
//       item.classList.add("plans__item_active");
//     });
//   });
// }

document.addEventListener("click", (event) => {
  console.log("глобальный тест");
  // if (!event.target.closest(".plans__item")) return;
  if (event.target.closest(".plans__item")) {
    const plansItem = document.querySelectorAll(".plans__item");
    plansItem.forEach((item) => {
      item.classList.remove("plans__item_active");
    });
    event.target.closest(".plans__item").classList.add("plans__item_active");
    const imgBox = document.querySelector(".plans__img").querySelector("img");
    const img = event.target.closest(".plans__item").querySelector("img").getAttribute("src");
    imgBox.setAttribute("src", img);
    const id = event.target.closest(".plans__item").getAttribute("data-id");
    // console.log(id);
    const title = document.querySelector(".plans__name");
    title.textContent = `${apartmentsForRender.filter((item) => item.id == id)[0].number_of_rooms}-комнатная ${
      apartmentsForRender.filter((item) => item.id == id)[0].area
    }м2`;
    const requestPopup = document.querySelector("#popup-request");
    const requestInput = requestPopup.querySelector(".request__input_apartment");
    requestInput.value = `${apartmentsForRender.filter((item) => item.id == id)[0].number_of_rooms}-комнатная ${
      apartmentsForRender.filter((item) => item.id == id)[0].area
    }м2`;
  }
});

// const previews = document.querySelectorAll(".plans__item");

// if (previews) {
//   previews.forEach((item) => {
//     item.addEventListener("click", function () {
// console.log("тест");
//       const imgBox = document.querySelector(".plans__img").querySelector("img");
//       const img = item.querySelector("img").getAttribute("src");
//       imgBox.setAttribute("src", img);
//     });
//   });
// }

//активные кнопки фильтра планировок:
const plansFilterItem = document.querySelectorAll(".plans__filter-item");
if (plansFilterItem) {
  plansFilterItem.forEach((item) => {
    item.addEventListener("click", (event) => {
      console.log("тест");
      plansFilterItem.forEach((item) => {
        item.classList.remove("plans__filter-item_active");
      });
      item.classList.add("plans__filter-item_active");
      // console.log(item.innerHTML);
      const key = item.innerHTML.trim();
      previewPlansRender(apartmentsForRender, key);
      // setInfo();
    });
  });
}

function filterPreviewArr(key, arr) {
  // console.log(key);
  // console.log(key === 'Студия');
  // console.log(arr);
  if (key === "Студия") {
    // console.log('Студия');
    return arr.filter((obj) => obj.number_of_rooms === 1 && obj.studio === 1 && obj.commerce === 0);
  }
  if (key === "1") {
    return arr.filter((obj) => obj.number_of_rooms === 1 && obj.studio === 0 && obj.commerce === 0);
  }
  if (key === "2") {
    return arr.filter((obj) => obj.number_of_rooms === 2 && obj.studio === 0 && obj.commerce === 0);
  }
  if (key === "3") {
    return arr.filter((obj) => obj.number_of_rooms === 3 && obj.studio === 0 && obj.commerce === 0);
  }
  if (key === "3+") {
    return arr.filter((obj) => obj.number_of_rooms > 3 && obj.studio === 0 && obj.commerce === 0);
  }
  if (key === "Коммерция") {
    return arr.filter((obj) => obj.commerce === 1);
  }
}

function previewPlansRender(arr, key = "Студия") {
  const previewList = document.querySelector(".plans__list");
  previewList.innerHTML = "";
  let copyArr = [...arr];
  // console.log(copyArr);
  // Фильтрация массива по фильтру:
  copyArr = filterPreviewArr(key, copyArr);
  // console.log(copyArr);
  copyArr.forEach((obj) => {
    getPreviewPlansItem(obj);
  });
}

// previewPlansRender(apartmentsForRender, "Студия");

function getPreviewPlansItem(obj) {
  const previewList = document.querySelector(".plans__list");
  // console.log(previewList);
  const previewItem = document.createElement("li");
  previewItem.classList.add("plans__item");
  const id = obj.id;
  previewItem.setAttribute("data-id", id);
  const previewImg = document.createElement("img");
  previewImg.src = `img/${obj.image}`;
  previewImg.alt = "планировка квартиры";
  previewItem.append(previewImg);
  previewList.append(previewItem);
}

const plansItem = document.querySelector(".plans__item");

function setInfo() {
  // console.log('setInfo');
  // console.log(plansItem);

  plansItem.classList.add("plans__item_active");
  // console.log(plans__item);

  // title.innerHTML = "1-комнатная 60м2";
  // console.log(title);
  const imgBox = document.querySelector(".plans__img").querySelector("img");
  const img = plansItem.querySelector("img").getAttribute("src");
  imgBox.setAttribute("src", img);
  const title = document.querySelector(".plans__name");
  const id = plansItem.getAttribute("data-id");
  title.textContent = `${apartmentsForRender.filter((item) => item.id == id)[0].number_of_rooms}-комнатная ${
    apartmentsForRender.filter((item) => item.id == id)[0].area
  }м2`;

  const requestPopup = document.querySelector("#popup-request");
  const requestInput = requestPopup.querySelector(".request__input_apartment");
  requestInput.value = `${apartmentsForRender.filter((item) => item.id == id)[0].number_of_rooms}-комнатная ${
    apartmentsForRender.filter((item) => item.id == id)[0].area
  }м2`;
  // console.log(img);
  // imgBox.setAttribute("src", img);
  // console.log(imgBox);
  // plans__item.addEventListener("click", (event) => {
  console.log("тест");
  // const imgBox = document.querySelector(".plans__img").querySelector("img");
  // const img = event.target.closest(".plans__item").querySelector("img").getAttribute("src");
  // imgBox.setAttribute("src", img);
  // });
}
// setInfo();

// }

// -------------------------------------------- end Планы ---------------------------------------------

// -------------------------------------------- start Передача поисковой строки ---------------------------------------------
const link = document.querySelector(".choice__btn-request_link");
if (link) {
  link.addEventListener("click", getLinkCatalogApart);
}

function getLinkCatalogApart(e) {
  const query = window.location.search;
  link.setAttribute("href", `/pages/kvartiry${query}`);
  link.click();
}
// -------------------------------------------- end Передача поисковой строки ---------------------------------------------

const slideBtn = document.querySelectorAll(".slider__btn");
if (slideBtn) {
  const slides = document.querySelectorAll(".rep-wrap");
  slideBtn.forEach((item) => {
    item.addEventListener("click", (e) => {
      console.log("тест");
      const id = item.getAttribute("data-id");
      slides.forEach((item) => {
        if (item.getAttribute("data-id") === id) {
          item.style.display = "grid";
        } else {
          item.style.display = "none";
        }
      });
    });
  });
}

// ------------------- start админка контакты --------------------------
const newOfficeBtn = document.getElementById("new-office-btn");
if (newOfficeBtn) {
  newOfficeBtn.addEventListener("click", () => {
    const form = document.getElementById("new-office");
    form.style.display = "grid";
    form.scrollIntoView({
      behavior: "smooth",
      block: "center",
    });
    newOfficeBtn.style.display = "none";
  });
}

const offices = document.querySelectorAll(".control__office");

if (offices.length > 0) {
  offices.forEach((item) => {
    const title = item.querySelector(".office__title").innerHTML.trim();
    const publishBtn = item.querySelector(".card__btn_publish");
    const editBtn = item.querySelector(".card__btn_edit");
    const deleteBtn = item.querySelector(".card__btn_delete");
    const id = item.getAttribute("data-id");
    const activeMark = item.querySelector(".office__active-mark");

    publishBtn.addEventListener("click", () => {
      console.log("тест");
      publishBtn.classList.toggle("_active");
      if (publishBtn.classList.contains("_active")) {
        setElActive(id);
        activeMark.innerHTML = 'Активный офис';
        activeMark.classList.add("_active");

      } else {
        setDisabled(id);
        activeMark.innerHTML = 'Неактивный офис';
        activeMark.classList.remove("_active");
        // publishBtn.textContent = "Опубликовать";
        // item.remove();
      }
    });

    deleteBtn.addEventListener("click", () => {
      console.log("тест");
      delFromDB(item, title, id);
    });

    editBtn.addEventListener("click", () => {
      console.log("тест");
      openForm(item);
      // editElInDb(item, title, id);
    });

  });

  function setElActive(id) {
    const form = document.querySelector(`.edit-office[data-id="${id}"]`)
    const chek = form.querySelector(".control__input_check");
    chek.checked = true;

    const options = {
      script: "/control/backend/active.php",
      function: "active",
      table: "offices",
      field: "status",
      id: id,
    };    
    fetchToDB(options);
  }

  function setDisabled(id) {
    const form = document.querySelector(`.edit-office[data-id="${id}"]`)
    const chek = form.querySelector(".control__input_check");
    chek.checked = false;


    const options = {
      script: "/control/backend/active.php",
      function: "deactive",
      table: "offices",
      field: "status",
      id: id,
    };
    fetchToDB(options);
  }

  function delFromDB(item, title, id) {
    const options = {
      script: "/control/backend/del.php",
      function: "del",
      table: "offices",
      id: id,
    };

    if (!confirm(`Вы действительно хотите удалить офис ${title}?`)) {
      return;
    }
    item.remove();
    fetchToDB(options);
  }

  function openForm(item) { 
    const id = item.getAttribute("data-id");   
    const form = document.querySelector(`.edit-office[data-id="${id}"]`);
    const office = document.querySelector(`.office[data-id="${id}"]`);
    form.style.display = "grid";
    office.style.display = "none";
    form.scrollIntoView({
      behavior: "smooth",
      block: "center",
    });
    newOfficeBtn.style.display = "none";
  }

  // async function fetchToDB(options) {
  //   // Блок try выполнится полностью, если не будет ошибок:
  //   try {
  //     // Выполняем запрос:
  //     const responce = await fetch(options.script, {
  //       method: "POST",
  //       headers: {
  //         "Content-Type": "application/json",
  //       },
  //       body: JSON.stringify(options),
  //     });
  //     console.log("тест");
  //     const res = await responce.json();
  //     // return infoList; // Возвращаем результат запроса
  //   } catch (err) {
  //     // Блок catch сработает только если будут какие-то ошибки в блоке try:
  //     // Выведем в консоли информацию об ошибке:
  //     console.log("При запросе к БД произошла ошибка, детали ниже:");
  //     console.error(err);
  //     // Вернем исключение с текстом поясняющим детали ошибки:
  //     alert("Произошла ошибка при запросе к БД!");
  //     throw new Error("Запрос завершился неудачно.");
  //   }
  // }

  async function fetchToDB(options) {
    let responseHouses = await fetch(options.script, {
      method: "POST",
      headers: {
        "Content-Type": "application/json;charset=utf-8",
      },
      body: JSON.stringify(options),
    });

    // let arr = [];

    if (responseHouses.ok) {
      console.log("ok");
      // let result = await responseHouses.json();
      // arr = Object.values(result.response);
    } else {
      console.log("error");
    }
    // return arr;
  }








}

const news = document.querySelectorAll(".control__news");

if (news.length > 0) {
  news.forEach((item) => {
    const title = item.querySelector(".card__title").innerHTML.trim();
    const publishBtn = item.querySelector(".card__btn_publish");
    const editBtn = item.querySelector(".card__btn_edit");
    const deleteBtn = item.querySelector(".card__btn_delete");
    const id = item.getAttribute("data-id");
    // const activeMark = item.querySelector(".office__active-mark");

    publishBtn.addEventListener("click", () => {
      console.log("тест");
      publishBtn.classList.toggle("_active");

      if (publishBtn.classList.contains("_active")) {
        setElActive(id);
        // activeMark.innerHTML = 'Активный офис';
        // activeMark.classList.add("_active");

      } else {
        setDisabled(id);
        // activeMark.innerHTML = 'Неактивный офис';
        // activeMark.classList.remove("_active");
        // publishBtn.textContent = "Опубликовать";
        // item.remove();
      }
    });

    deleteBtn.addEventListener("click", () => {
      console.log("тест");
      delFromDB(item, title, id);
    });

    editBtn.addEventListener("click", () => {
      console.log("тест");
      window.location.href = `/control/pages/novosti/edit.php?id=${id}`
      // openForm(item);
      // editElInDb(item, title, id);
    });

  });

  function setElActive(id) {
    // const form = document.querySelector(`.edit-office[data-id="${id}"]`)
    // const chek = form.querySelector(".control__input_check");
    // chek.checked = true;

    const options = {
      script: "/control/backend/active.php",
      function: "active",
      table: "news",
      field: "status",
      id: id,
    };    
    fetchToDB(options);
  }

  function setDisabled(id) {
    // const form = document.querySelector(`.edit-office[data-id="${id}"]`)
    // const chek = form.querySelector(".control__input_check");
    // chek.checked = false;


    const options = {
      script: "/control/backend/active.php",
      function: "deactive",
      table: "news",
      field: "status",
      id: id,
    };
    fetchToDB(options);
  }

  function delFromDB(item, title, id) {
    const options = {
      script: "/control/backend/del.php",
      function: "del",
      table: "news",
      id: id,
    };

    if (!confirm(`Вы действительно хотите удалить новостьт ${title}?`)) {
      return;
    }
    item.remove();
    fetchToDB(options);
  }

  async function fetchToDB(options) {
    let responseHouses = await fetch(options.script, {
      method: "POST",
      headers: {
        "Content-Type": "application/json;charset=utf-8",
      },
      body: JSON.stringify(options),
    });

    // let arr = [];

    if (responseHouses.ok) {
      console.log("ok");
      // let result = await responseHouses.json();
      // arr = Object.values(result.response);
    } else {
      console.log("error");
    }
    // return arr;
  }
}

const events = document.querySelectorAll(".control__events");

if (events.length > 0) {
  events.forEach((item) => {
    const title = item.querySelector(".card__title").innerHTML.trim();
    const publishBtn = item.querySelector(".card__btn_publish");
    const editBtn = item.querySelector(".card__btn_edit");
    const deleteBtn = item.querySelector(".card__btn_delete");
    const id = item.getAttribute("data-id");
    // const activeMark = item.querySelector(".office__active-mark");

    publishBtn.addEventListener("click", () => {
      console.log("тест");
      publishBtn.classList.toggle("_active");

      if (publishBtn.classList.contains("_active")) {
        setElActive(id);
        // activeMark.innerHTML = 'Активный офис';
        // activeMark.classList.add("_active");

      } else {
        setDisabled(id);
        // activeMark.innerHTML = 'Неактивный офис';
        // activeMark.classList.remove("_active");
        // publishBtn.textContent = "Опубликовать";
        // item.remove();
      }
    });

    deleteBtn.addEventListener("click", () => {
      console.log("тест");
      delFromDB(item, title, id);
    });

    editBtn.addEventListener("click", () => {
      console.log("тест");
      window.location.href = `/control/pages/akcii/edit.php?id=${id}`
      // openForm(item);
      // editElInDb(item, title, id);
    });

  });

  function setElActive(id) {
    // const form = document.querySelector(`.edit-office[data-id="${id}"]`)
    // const chek = form.querySelector(".control__input_check");
    // chek.checked = true;

    const options = {
      script: "/control/backend/active.php",
      function: "active",
      table: "events",
      field: "status",
      id: id,
    };    
    fetchToDB(options);
  }

  function setDisabled(id) {
    // const form = document.querySelector(`.edit-office[data-id="${id}"]`)
    // const chek = form.querySelector(".control__input_check");
    // chek.checked = false;


    const options = {
      script: "/control/backend/active.php",
      function: "deactive",
      table: "events",
      field: "status",
      id: id,
    };
    fetchToDB(options);
  }

  function delFromDB(item, title, id) {
    const options = {
      script: "/control/backend/del.php",
      function: "del",
      table: "events",
      id: id,
    };

    if (!confirm(`Вы действительно хотите удалить новостьт ${title}?`)) {
      return;
    }
    item.remove();
    fetchToDB(options);
  }

  async function fetchToDB(options) {
    let responseHouses = await fetch(options.script, {
      method: "POST",
      headers: {
        "Content-Type": "application/json;charset=utf-8",
      },
      body: JSON.stringify(options),
    });

    // let arr = [];

    if (responseHouses.ok) {
      console.log("ok");
      // let result = await responseHouses.json();
      // arr = Object.values(result.response);
    } else {
      console.log("error");
    }
    // return arr;
  }
}

const editForm = document.querySelector(".edit-office");
if (editForm) {
  const canselBtn = document.querySelectorAll(".control__btn_cancel");

  canselBtn.forEach((item) => {
    item.addEventListener("click", (e) => {
      e.preventDefault();
      const id = item.getAttribute("data-id");
      item.closest(".edit-office").style.display = "none";
      document.querySelector(`.office[data-id="${id}"]`).style.display = "grid";
    });
  });
}
// ------------------- end админка контакты --------------------------

// ------------------- start показ пароля --------------------------
const passBtn = document.querySelector(".auth__eye");
const passInput = document.querySelector(".auth__input_password");
passBtn.addEventListener("click", (e) => {
  e.preventDefault();
  passBtn.classList.toggle("_active");
  if (passInput.type === "password") {
    passInput.type = "text";
    passBtn.classList.add("_active");
  } else {
    passInput.type = "password";
    passBtn.classList.remove("_active");
  }
})
// ------------------- end показ пароля --------------------------
