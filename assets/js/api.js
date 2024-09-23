const url = window.location.href;
let urlParams = new URLSearchParams(window.location.search);
// console.log(url.split("/"));
if (
  !url.split("/").includes("novosti") &&
  !url.split("/").includes("novosti-item") &&
  !url.split("/").includes("akcii") &&
  !url.split("/").includes("promo-item") &&
  !url.split("/").includes("proekty") &&
  !url.split("/").includes("sotrudnichestvo") &&
  !url.split("/").includes("o-companii") &&
  !url.split("/").includes("kontakty") &&
  !url.split("/").includes("sposob-pokupki") &&
  !url.split("/").includes("control")

) {
  console.log("------------- Старт Api ------------------");

  const choiceFilterForm = document.querySelector("[choice-form]");

  // функция проверки работы Api
  function checkApiData() {
    let errors = 0;
    allInfo.forEach((item) => {
      if (!item) {
        errors++;
      }
    });

    if (errors > 0) {
      console.log("%%%% Ошибка получения данных из API %%%%");
      console.log("errors:", errors);
      console.log(allInfo);
      return false;
    } else {
      console.log(allInfo);
      return true;
    }
  }

  // функция получения информации о обьектах строительства:
  async function getHouse() {
    let responseHouses = await fetch("/backend/intHouse.php", {
      method: "POST",
      headers: {
        "Content-Type": "application/json;charset=utf-8",
      },
    });

    let arr = [];

    if (responseHouses.ok) {
      let result = await responseHouses.json();
      arr = Object.values(result.response);
    } else {
      console.log("error");
    }
    return arr;
  }

  // Сосновый:
  // ГП1 house_id 933
  // ГП2 house_id 943
  // ГП3 house_id 945

  const idHouse = [1052, 1053, 1054];
  // const idHouse = [933, 943, 945];

  const projectById = [{ 1052: "Сосновый" }, { 1053: "Сосновый" }, { 1054: "Сосновый" }];

  function getProjectName(id) {
    return projectById.find((item) => item[id])[id];
  }

  // функция получения информации о квартирах:
  let allInfo = [];
  let houseInfo = {};
  let allApartsInfo = [];
  let allHouseInfo = [];

  async function getRealty(id) {
    let allAparstInfo = [];
    let houseInfo = {};
    let body = document.querySelector("body");
    body.classList.add("_sending");

    let responseAparts = await fetch("/backend/intApart.php", {
      method: "POST",
      headers: {
        "Content-Type": "application/json;charset=utf-8",
      },
      body: JSON.stringify({ id: id }),
    });

    if (responseAparts.ok) {
      body.classList.remove("_sending");
      let result = await responseAparts.json();
      if (!result.response.realty) {
        return;
      }
      allAparstInfo = Object.values(result.response.realty);
      houseInfo = result.response.house;
    } else {
      body.classList.remove("_sending");
      console.log("error");
    }
    const res = [houseInfo, allAparstInfo];

    return res;
  }

  // idHouse.forEach((item) => {});

  // // отправляем запросы к API последовательно:
  // async function getAllInfo(idHouse) {
  //   const allInfo = [];
  //   for (const item of idHouse) {
  //     allInfo.push(await getRealty(item));
  //   }
  //   return allInfo;
  // }

  // отправляем запросы к API параллельно:
  async function getAllInfo(idHouse) {
    // делаем "map" массива в промисы
    const promises = idHouse.map((id) => getRealty(id));
    promises.unshift(getHouse()); // добавляем запрос на получение информации о домах
    // ждем когда всё промисы будут выполнены
    return await Promise.all(promises);
  }

  allInfo = await getAllInfo(idHouse); // массив всей информации из api
  houseInfo = allInfo[0]; // массив с инофрмацией о домах

  if (checkApiData()) {
    console.log(allInfo);
    allInfo.splice(1).forEach((item) => {
      allHouseInfo.push(item[0]);
      allApartsInfo.push(...item[1]);
    });
  }

  // добавляем в обьекты квартир информацию о доме:
  allApartsInfo.forEach(function (item) {
    item.house_address = allHouseInfo.find((house) => house.id == item.house_id).address;
    item.house_ceiling_height = allHouseInfo.find((house) => house.id == item.house_id).ceiling_height;
    item.house_floor_count = allHouseInfo.find((house) => house.id == item.house_id).floor_count;
    // item.house_id = allHouseInfo.find((house) => house.id == item.house_id).id;
    item.house_img = allHouseInfo.find((house) => house.id == item.house_id).img;
    item.house_section_count = allHouseInfo.find((house) => house.id == item.house_id).section_count;
    item.house_title = allHouseInfo.find((house) => house.id == item.house_id).title.replace(/\D/g, "");
    item.project_name = getProjectName(item.house_id);
    item.house_building_begin = houseInfo.find((house) => house.house_id == item.house_id).house_building_begin.date;
    item.house_building_end = houseInfo.find((house) => house.house_id == item.house_id).house_building_end.date;
    item.house_material = houseInfo.find((house) => house.house_id == item.house_id).house_material;
    item.house_material_code = houseInfo.find((house) => house.house_id == item.house_id).house_material_code;
    item.house_title_rus = houseInfo.find((house) => house.house_id == item.house_id).house_title;
    item.object_type_code = houseInfo.find((house) => house.house_id == item.house_id).object_type_code;
    item.object_type_title = houseInfo.find((house) => house.house_id == item.house_id).object_type_title;
    item.apart_rooms = item.rooms == 1 ? 1 : item.rooms == 2 ? 2 : item.rooms == 3 ? 3 : item.rooms > 3 ? 4 : "";
    item.apart_rooms = item.roomsList.find((room) => room.title == "Жилая комната") ? item.apart_rooms : 11;
    item.optionBalcony = item.roomsList.find((room) => room.title == "Лоджия") ? 1 : 0;
    item.optionKitchenLiving = item.roomsList.find((room) => room.title == "Кухня-гостиная") ? 1 : 0;
    item.optionDressRoom = item.roomsList.find((room) => room.title == "Гардеробная") ? 1 : 0;
    item.optionGuestBathroom = item.roomsList.filter((room) => room.title == "Санузел").length > 1 ? 1 : 0;
    item.optionTwoSide = item.roomsList.find((room) => room.title == "Две стороны") ? 1 : 0;
    item.optionThreeSide = item.roomsList.find((room) => room.title == "Три стороны") ? 1 : 0;
    item.optionTerrace = item.roomsList.find((room) => room.title == "Терраса") ? 1 : 0;
    item.optionKeyToday = item.roomsList.find((room) => room.title == "Ключи сегодня") ? 1 : 0;
    item.optionPromotion = item.roomsList.find((room) => room.title == "Акция") ? 1 : 0;
    item.title =
      item.apart_rooms == 11
        ? `Студия ${item.square} м<sup>2</sup>`
        : `${item.rooms}-комнатная ${item.square} м<sup>2</sup>`;
    item.imgAlt = item.apart_rooms == 11 ? `Студия ${item.square} м2` : `${item.rooms}-комнатная ${item.square} м2`;
  });

  // console.log("allAparstInfo", allApartsInfo);

  // -------------------------------------- start функция создания карточки квартиры: --------------------------------------
  function getli(obj) {
    console.log("*************** Старт функции  getli ***************"); // имя функции

    const li = document.createElement("li"); // создаем li
    const classes = ["apartments__item", "swiper-slide"];

    // добавляем классы:
    classes.forEach((item) => {
      li.classList.add(item);
    });

    li.innerHTML = `
    <a class="apartments__item-link" href="/pages/apartments-item/?id=${obj.id}">
      <h5 class="apartments__item-title">
        ${obj.project_name ? obj.project_name : ""}  |  ${
      obj.house_title ? obj.house_title.replace("-", " ") : ""
    }  |  ${obj.floor ? obj.floor : ""} / ${obj.floor_count ? obj.floor_count : ""} этаж                    
      </h5>
      <div class="apartments__item-img">          
          <img src="${obj.img ? obj.img[0].img_path : ""}" alt="планировка квартиры">
      </div>

      <p class="apartments__item-number" style="display: none">
        ${obj.num}
      </p>
  
      <p class="apartments__item-desc">
        ${obj.rooms ? obj.rooms : ""}-комнатная ${obj.square ? obj.square : ""}м<sup>2</sup>
      </p>
  
      <div class="apartments__item-price-wrap">
        <p class="apartments__item-new-price">
        ${(obj.price ? obj.price * 1 : "").toString().replace(/\B(?=(\d{3})+(?!\d))/g, " ")} ₽
        </p>

        ${
          obj.old_price
            ? `<p class="apartments__item-old-price">${(obj.old_price * 1)
                .toString()
                .replace(/\B(?=(\d{3})+(?!\d))/g, " ")} ₽</p>`
            : ``
        }

      </div> 
    </a>
  `;

    // добавление и фльтрация опций:

    const allOptions = [
      "optionPromotion",
      "optionKeyToday",
      "optionTwoSide",
      "optionThreeSide",
      "optionBalcony",
      "optionKitchenLiving",
      "optionDressRoom",
      "optionGuestBathroom",
      "optionTerrace",
    ];

    // формируем массив опций из объекта:
    const optionsFromObj = [];

    for (let op in obj) {
      allOptions.forEach((option) => {
        if (op == option && obj[op]) {
          optionsFromObj.push(op);
        }
      });
    }

    const strOptions = `  
  <li class="apartments__item-footer-item" data-id="optionPromotion">
      <p class="apartments__item-footer-item-text">
        Акция
      </p>
    </li>

    <li class="apartments__item-footer-item" data-id="optionKeyToday">
      <p class="apartments__item-footer-item-text">
        Ключи сегодня
      </p>
    </li>

    <li class="apartments__item-footer-item" data-id="optionTwoSide">
      <p class="apartments__item-footer-item-text">
        Окна на 2 стороны
      </p>
    </li>

    <li class="apartments__item-footer-item" data-id="optionBalcony">
      <p class="apartments__item-footer-item-text">
        Балкон
      </p>
    </li>

    <li class="apartments__item-footer-item" data-id="optionThreeSide">
      <p class="apartments__item-footer-item-text">
        Окна на 3 стороны
      </p>
    </li>

    <li class="apartments__item-footer-item" data-id="optionGuestBathroom">
      <p class="apartments__item-footer-item-text">
        Гостевой санузел
      </p>
    </li>

    <li class="apartments__item-footer-item" data-id="optionKitchenLiving">
      <p class="apartments__item-footer-item-text">
        Кухня-гостинная
      </p>
    </li>

    <li class="apartments__item-footer-item" data-id="optionDressRoom">
      <p class="apartments__item-footer-item-text">
        Гардеробная
      </p>
    </li>

    <li class="apartments__item-footer-item" data-id="optionTerrace">
      <p class="apartments__item-footer-item-text">
        Терраса
      </p>
    </li>`;

    const options = document.createElement("ul");
    options.classList.add("apartments__item-footer");
    options.innerHTML = strOptions;

    const btnsElements = options.querySelectorAll(".apartments__item-footer-item");

    // фильтруем массив опций, удяляя лишние элементы:
    btnsElements.forEach((item) => {
      if (!optionsFromObj.includes(item.getAttribute("data-id"))) {
        item.remove();
      }
    });

    li.querySelector(".apartments__item-link").append(options);
    return li; // возвращаем li
  }
  // -------------------------------------- end функция создания карточки квартиры: --------------------------------------

  console.log("allAparstInfo", allApartsInfo[0]);
  // -------------------------------------- start полуаем граничные значения для фильтров: --------------------------------------
  function getMaxMinForFilters(allApartsInfo) {
    console.log("*************** Старт функции getMaxMinForFilters ***************"); // имя функции

    // получаем граничные значения из allAparstInfo:
    const minPrice = Math.floor(Math.min(...allApartsInfo.map((item) => item.price)));
    const maxPrice = Math.ceil(Math.max(...allApartsInfo.map((item) => item.price)));
    const minSquare = Math.floor(Math.min(...allApartsInfo.map((item) => item.square)));
    const maxSquare = Math.ceil(Math.max(...allApartsInfo.map((item) => item.square)));
    // const rooms = [...new Set(allApartsInfo.map((item) => item.rooms))].sort((a, b) => a - b);
    const rooms = [...new Set(allApartsInfo.map((item) => item.apart_rooms))].sort((a, b) => a - b);
    const minFloor = Math.floor(Math.min(...allApartsInfo.map((item) => item.floor)));
    const maxFloor = Math.ceil(Math.max(...allApartsInfo.map((item) => item.floor)));
    const projects = [...new Set(allApartsInfo.map((item) => item.project_name))];
    const houses = [...new Set(allApartsInfo.map((item) => item.house_title))];
    const sections = [...new Set(allApartsInfo.map((item) => item.section))];
    // const deadline = [... new Set(allAparstInfo.map((item) => new Date(item.house_building_end).toLocaleString()))];
    const deadline = [...new Set(allApartsInfo.map((item) => getQuarter(new Date(item.house_building_end))))];
    const btnsElements = document.querySelectorAll(".choice__btn-filter");
    let allOptions = [];
    // const allKeys = Object.keys(allApartsInfo[0]);

    btnsElements.forEach((item) => {
      // console.log(item);
      const id = item.getAttribute("data-id");
      // console.log("id", id);
      allOptions = [...allOptions, id];
      // btns.push.id;
    });

    let optionsInAllApartInfo = [];

    // ищем все опции в allApartsInfo:
    allOptions.forEach((item) => {
      allApartsInfo.forEach((obj) => {
        if (obj[item]) {
          optionsInAllApartInfo.push(item);
        }
      });
    });

    optionsInAllApartInfo = [...new Set(optionsInAllApartInfo)];

    // console.log("allApartsInfo[0]", allApartsInfo[0]);

    // найдем те элементы которые фигурируют в массиве allApartsInfo:

    // let btns = allOptions.filter((item) => allKeys.includes(item));

    // let btns = allApartsInfo[0].filter((item) => allOptions.includes(item.item));

    // filter(item => {
    //   console.log("item", item);
    //   console.log("allApartsInfo[0].item", allApartsInfo[0].item);
    //   if (allApartsInfo[0].item) {
    //     return true;
    //   };
    // });

    // console.log("minPrice", minPrice);
    // console.log("maxPrice", maxPrice);
    // console.log("minSquare", minSquare);
    // console.log("maxSquare", maxSquare);
    // console.log("rooms", rooms);
    // console.log("minFloor", minFloor);
    // console.log("maxFloor", maxFloor);
    // console.log("projects", projects);
    // console.log("houses", houses);
    // console.log("sections", sections);
    // console.log("deadline", deadline);

    const filterAllInfo = [
      {
        name: "Проект",
        value: projects,
      },
      {
        name: "Комнат",
        value: rooms,
      },
      {
        name: "Площадь, м2",
        value: {
          from: minSquare,
          to: maxSquare,
        },
      },
      {
        name: "Стоимость, ₽",
        value: {
          from: minPrice,
          to: maxPrice,
        },
      },
      {
        name: "Дом",
        value: houses,
      },
      {
        name: "Секция",
        value: sections,
      },
      {
        name: "Срок сдачи",
        value: deadline,
      },
      {
        name: "Этаж",
        value: {
          from: minFloor,
          to: maxFloor,
        },
      },
      {
        name: "btns",
        value: optionsInAllApartInfo,
      },
    ];

    console.log("filterAllInfo", filterAllInfo);

    return filterAllInfo;
  }

  // getMaxMinForFilters();
  // -------------------------------------- end полуаем граничные значения для фильтров: --------------------------------------

  // -------------------------------------- start устанавливаем граничные значения в фильтры: --------------------------------------
  function setMaxMinForFilters(filterAllInfo) {
    console.log("*************** Старт функции setMaxMinForFilters ***************"); // имя функции
    // const filterAllInfo = getMaxMinForFilters();
    const choiceFilterForm = document.querySelector("[choice-form]");
    console.log("choiceFilterForm", choiceFilterForm);

    if (!choiceFilterForm) {
      console.log("choiceFilterForm not found");
      return;
    }

    const projectFilter = choiceFilterForm.querySelector(".choice__input-block_select_project .select__list");
    const roomsFilter = choiceFilterForm.querySelector(".choice__input-block_buttons_rooms .choice__buttons-select");
    const squareFilter = choiceFilterForm.querySelector(".choice__input-block_slider_square");
    const costFilter = choiceFilterForm.querySelector(".choice__input-block_slider_cost");
    const houseFilter = choiceFilterForm.querySelector(".choice__input-block_select_house .select__list");
    const sectionFilter = choiceFilterForm.querySelector(".choice__input-block_select_section .select__list");
    const deadlineFilter = choiceFilterForm.querySelector(".choice__input-block_select_date .select__list");
    const floorFilter = choiceFilterForm.querySelector(".choice__input-block_slider_floor");
    const btnsFilter = choiceFilterForm.querySelector(".choice__btns-wrap");
    let allSelect = '<li class="select__item">Все</li>';

    if (projectFilter) {
      projectFilter.innerHTML = "";
      projectFilter.innerHTML =
        allSelect +
        filterAllInfo
          .find((item) => item.name === "Проект")
          .value.map((item) => `<li class="select__item" data-id="${item}">${item}</li>`)
          .join("");
      // projectFilter.innerHTML = allSelect + projectFilter.innerHTML;
    } else {
      console.log("projectFilter not found");
    }

    if (houseFilter) {
      houseFilter.innerHTML = "";
      houseFilter.innerHTML =
        allSelect +
        filterAllInfo
          .find((item) => item.name === "Дом")
          .value.map((item) => `<li class="select__item">${item}</li>`)
          .join("");
    } else {
      console.log("houseFilter not found");
    }

    if (sectionFilter) {
      sectionFilter.innerHTML = "";
      sectionFilter.innerHTML =
        allSelect +
        filterAllInfo
          .find((item) => item.name === "Секция")
          .value.map((item) => `<li class="select__item">${item}</li>`)
          .join("");
    } else {
      console.log("sectionFilter not found");
    }

    if (deadlineFilter) {
      deadlineFilter.innerHTML = "";
      deadlineFilter.innerHTML =
        allSelect +
        filterAllInfo
          .find((item) => item.name === "Срок сдачи")
          .value.map((item) => `<li class="select__item">${item}</li>`)
          .join("");
    } else {
      console.log("deadlineFilter not found");
    }

    if (roomsFilter) {
      const btns = roomsFilter.querySelectorAll(".choice__buttons-select-item");
      btns.forEach((item) => {
        if (filterAllInfo.find((item) => item.name === "Комнат").value.includes(Number(item.getAttribute("data-id")))) {
          item.classList.add("choice__buttons-select-item_available");
        } else {
          item.classList.remove("choice__buttons-select-item_available");
        }
      });
    } else {
      console.log("roomsFilter not found");
    }

    if (costFilter) {
      let minFilterCost = filterAllInfo.find((item) => item.name === "Стоимость, ₽").value.from;
      let maxFilterCost = filterAllInfo.find((item) => item.name === "Стоимость, ₽").value.to + 10000;
      rangeSliderInit(costFilter, 10000, minFilterCost, maxFilterCost);
    } else {
      console.log("costFilter not found");
    }

    if (squareFilter) {
      let minFilterSquare = filterAllInfo.find((item) => item.name === "Площадь, м2").value.from;
      let maxFilterSquare = filterAllInfo.find((item) => item.name === "Площадь, м2").value.to;
      rangeSliderInit(squareFilter, 1, minFilterSquare, maxFilterSquare);
    } else {
      console.log("squareFilter not found");
    }

    if (floorFilter) {
      let minFilterFloor = filterAllInfo.find((item) => item.name === "Этаж").value.from;
      let maxFilterFloor = filterAllInfo.find((item) => item.name === "Этаж").value.to;
      rangeSliderInit(floorFilter, 0, minFilterFloor, maxFilterFloor);
    } else {
      console.log("floorFilter not found");
    }

    if (btnsFilter) {
      const btnsElements = btnsFilter.querySelectorAll(".choice__btn-filter");
      btnsElements.forEach((item) => {
        if (filterAllInfo.find((el) => el.name === "btns").value.includes(item.getAttribute("data-id"))) {
          // const id = item.getAttribute("data-id");
          // if (!optionsInAllApartInfo.includes(id)) {
          item.classList.remove("choice__btn-filter_disabled");
        } else {
          item.classList.add("choice__btn-filter_disabled");
        }
      });
    } else {
      console.log("btnsFilter not found");
    }
  }

  setMaxMinForFilters(getMaxMinForFilters(allApartsInfo));

  // -------------------------------------- start функция установки и сброса значений фильтров ----------------
  // setNowFilters();
  function setNowFilters(arr) {
    console.log("*************** Старт функции setNowFilters ***************"); // имя функции
    console.log(arr);
    // let urlParams = new URLSearchParams(window.location.search);
    // arr = [
    //   // { name: "Проект", value: "Сосновый" },
    //   // { name: "Проект", value: "" },
    //   // { name: "Комнат", value: [1, 2] },
    //   { name: "Комнат", value: '' },
    //   // { name: "Площадь, м2", value: { from: 36, to: 60 } },
    //   { name: "Площадь, м2", value: "" },
    //   // { name: "Стоимость, ₽", value: { from: 1860000, to: 6250000 } },
    //   // { name: "Дом", value: 1 },
    //   { name: "Дом", value: '' },

    //   { name: "Секция", value: 1 },
    //   // { name: "Срок сдачи", value: "IV квартал 2025" },
    //   { name: "Этаж", value: { from: 2, to: 3 } },
    //   { name: "btns", value: [] },
    // ];
    // console.log(arr);

    if (!choiceFilterForm) {
      console.log("choiceFilterForm not found");
      return;
    }

    if (!arr) {
      window.history.pushState({}, document.title, window.location.pathname);
      urlParams = new URLSearchParams(window.location.search);
      console.log("сброс фильтров");
    }

    const projectFilter = choiceFilterForm.querySelector(".choice__input-block_select_project .select__text");
    let roomsFilter = choiceFilterForm.querySelector(".choice__input-block_buttons_rooms .choice__buttons-select");

    if (roomsFilter) {
      roomsFilter = [
        ...choiceFilterForm.querySelector(".choice__input-block_buttons_rooms .choice__buttons-select").children,
      ];
    }

    const squareInputFrom = choiceFilterForm.querySelector(".choice__input-block_slider_square .select__input_from");
    const squareInputTo = choiceFilterForm.querySelector(".choice__input-block_slider_square .select__input_to");

    const costInputFrom = choiceFilterForm.querySelector(".choice__input-block_slider_cost .select__input_from");
    const costInputTo = choiceFilterForm.querySelector(".choice__input-block_slider_cost .select__input_to");

    const houseFilter = choiceFilterForm.querySelector(".choice__input-block_select_house .select__text");
    const sectionFilter = choiceFilterForm.querySelector(".choice__input-block_select_section .select__text");
    const deadlineFilter = choiceFilterForm.querySelector(".choice__input-block_select_date .select__text");

    const floorInputFrom = choiceFilterForm.querySelector(".choice__input-block_slider_floor .select__input_from");
    const floorInputTo = choiceFilterForm.querySelector(".choice__input-block_slider_floor .select__input_to");

    let btnsFilter = choiceFilterForm.querySelector(".choice__btns-wrap");

    if (btnsFilter) {
      btnsFilter = btnsFilter.querySelectorAll(".choice__btn-filter");
    }

    // TODO можно написать цикл, который будет проверть все фильтры и добавлять или удалять классы.

    if (projectFilter) {
      if (arr) {
        if (arr.find((item) => item.name === "Проект") && arr.find((item) => item.name === "Проект").value !== "") {
          projectFilter.innerHTML = arr.find((item) => item.name === "Проект").value;
        }
      } else {
        projectFilter.innerHTML = "";
      }

      if (projectFilter.innerHTML !== "") {
        projectFilter.classList.add("select__text_active");
        projectFilter.closest(".choice__select").classList.add("select_active");
      } else {
        projectFilter.classList.remove("select__text_active");
        projectFilter.closest(".choice__select").classList.remove("select_active");
      }
    }

    if (houseFilter) {
      if (arr) {
        if (arr.find((item) => item.name === "Дом") && arr.find((item) => item.name === "Дом").value !== "") {
          houseFilter.innerHTML = arr.find((item) => item.name === "Дом").value;
        }
      } else {
        houseFilter.innerHTML = "";
      }

      if (houseFilter.innerHTML !== "") {
        houseFilter.classList.add("select__text_active");
        houseFilter.closest(".choice__select").classList.add("select_active");
        // houseFilter.closest(".select__wrapper").querySelector(".select__placeholder").style.display = "none";
      } else {
        houseFilter.classList.remove("select__text_active");
        houseFilter.closest(".choice__select").classList.remove("select_active");
        // houseFilter.closest(".select__wrapper").querySelector(".select__placeholder").style.display = "block";
      }
    }

    if (sectionFilter) {
      if (arr) {
        if (arr.find((item) => item.name === "Секция") && arr.find((item) => item.name === "Секция").value !== "") {
          sectionFilter.innerHTML = arr.find((item) => item.name === "Секция").value;
        }
      } else {
        sectionFilter.innerHTML = "";
      }

      if (sectionFilter.innerHTML !== "") {
        sectionFilter.classList.add("select__text_active");
        sectionFilter.closest(".choice__select").classList.add("select_active");
      } else {
        sectionFilter.classList.remove("select__text_active");
        sectionFilter.closest(".choice__select").classList.remove("select_active");
      }
    }

    if (deadlineFilter) {
      if (arr) {
        if (
          arr.find((item) => item.name === "Срок сдачи") &&
          arr.find((item) => item.name === "Срок сдачи").value !== ""
        ) {
          deadlineFilter.innerHTML = arr.find((item) => item.name === "Срок сдачи").value;
        }
      } else {
        deadlineFilter.innerHTML = "";
      }

      if (deadlineFilter.innerHTML !== "") {
        deadlineFilter.classList.add("select__text_active");
        deadlineFilter.closest(".choice__select").classList.add("select_active");
        // deadlineFilter.closest(".select__wrapper").querySelector(".select__placeholder").style.display = "none";
      } else {
        deadlineFilter.classList.remove("select__text_active");
        deadlineFilter.closest(".choice__select").classList.remove("select_active");
        // deadlineFilter.closest(".select__wrapper").querySelector(".select__placeholder").style.display = "block";
      }
    }

    if (roomsFilter) {
      if (arr) {
        if (arr.find((item) => item.name === "Комнат") && arr.find((item) => item.name === "Комнат").value !== "") {
          roomsFilter.forEach((item) =>
            arr.find((item) => item.name === "Комнат").value.includes(Number(item.getAttribute("data-id")))
              ? item.classList.add("choice__buttons-select-item_active")
              : item.classList.remove("choice__buttons-select-item_active")
          );
        }
      } else {
        roomsFilter.forEach((item) => item.classList.remove("choice__buttons-select-item_active"));
        // urlParams.delete("rooms"); //TODO зачем это здесь?
        // console.log("urlParams", urlParams);
      }
    }

    if (squareInputFrom) {
      if (arr) {
        if (
          arr.find((item) => item.name === "Площадь, м2") &&
          arr.find((item) => item.name === "Площадь, м2").value !== ""
        ) {
          squareInputFrom.value = arr.find((item) => item.name === "Площадь, м2").value.from;
          squareInputTo.value = arr.find((item) => item.name === "Площадь, м2").value.to;
          const squareFilter = choiceFilterForm.querySelector(".choice__input-block_slider_square");
          rangeSliderUpdate(squareFilter);
        }
      } else {
        squareInputFrom.value = squareInputFrom.getAttribute("min");
        squareInputTo.value = squareInputTo.getAttribute("max");
        const squareFilter = choiceFilterForm.querySelector(".choice__input-block_slider_square");
        rangeSliderUpdate(squareFilter);
      }
    }

    if (costInputFrom) {
      if (arr) {
        if (
          arr.find((item) => item.name === "Стоимость, ₽") &&
          arr.find((item) => item.name === "Стоимость, ₽").value !== ""
        ) {
          costInputFrom.value = arr.find((item) => item.name === "Стоимость, ₽").value.from;
          costInputTo.value = arr.find((item) => item.name === "Стоимость, ₽").value.to;
          const costFilter = choiceFilterForm.querySelector(".choice__input-block_slider_cost");
          rangeSliderUpdate(costFilter);
        }
      } else {
        costInputFrom.value = costInputFrom.getAttribute("min");
        costInputTo.value = costInputTo.getAttribute("max");
        const costFilter = choiceFilterForm.querySelector(".choice__input-block_slider_cost");
        rangeSliderUpdate(costFilter);
      }
    }

    if (floorInputFrom) {
      if (arr) {
        if (arr.find((item) => item.name === "Этаж") && arr.find((item) => item.name === "Этаж").value !== "") {
          floorInputFrom.value = arr.find((item) => item.name === "Этаж").value.from;
          floorInputTo.value = arr.find((item) => item.name === "Этаж").value.to;
          const floorFilter = choiceFilterForm.querySelector(".choice__input-block_slider_floor");
          rangeSliderUpdate(floorFilter);
        }
      } else {
        floorInputFrom.value = floorInputFrom.getAttribute("min");
        floorInputTo.value = floorInputTo.getAttribute("max");
        const floorFilter = choiceFilterForm.querySelector(".choice__input-block_slider_floor");
        rangeSliderUpdate(floorFilter);
      }
    }

    if (btnsFilter) {
      if (arr) {
        console.log(arr.find((item) => item.name === "btns"));
        if (arr.find((item) => item.name === "btns") && arr.find((item) => item.name === "btns").value !== "") {
          btnsFilter.forEach((item) =>
            arr.find((el) => el.name === "btns").value.includes(item.getAttribute("data-id"))
              ? item.classList.add("choice__btn-filter_active")
              : item.classList.remove("choice__btn-filter_active")
          );
        }
      } else {
        btnsFilter.forEach((item) => item.classList.remove("choice__btn-filter_active"));
        urlParams.delete("btns");
        console.log("urlParams", urlParams);
      }
    }
  }
  // -------------------------------------- end устанавливаем граничные значения в фильтры: --------------------------------------
  // функция перевода даты в квартал:
  function getQuarter(date) {
    const quarter = Math.ceil(date.getMonth() / 3);
    const rim = { 1: "I", 2: "II", 3: "III", 4: "IV" };
    const month = date.getMonth();
    const year = date.getFullYear();
    // console.log("getQuarter", `${rim[quarter]} квартал ${year}`);
    return `${rim[quarter]} квартал ${year}`;
  }

  // начальные параметры вывода квартир
  let limit = 12;
  let offset = 0;
  let filtredApartList = [];

  // функция вывода дополнительных квартир
  function getNewItems(filtredApartList) {
    console.log("*************** Старт функции getNewItems ***************"); // имя функции
    let copyArr = [...filtredApartList];
    offset = offset + limit;
    limit = 8;

    console.log("limit", limit);
    console.log("offset", offset);

    copyArr = [...copyArr].splice(offset, limit);

    copyArr.forEach((item) => {
      list.append(getli(item));
    });

    if (filtredApartList.length <= offset + limit) {
      addApartBtn.style.display = "none";
    } else {
      addApartBtn.style.display = "block";
    }
  }

  // кнопка показа дополнительных квартир
  const addApartBtn = document.getElementById("addApartrs");
  if (addApartBtn) {
    addApartBtn.addEventListener("click", function () {
      getNewItems(filtredApartList);
    });
  }

  let filterArr = parseUrlQuery();
  // первичный рендеринг квартир:
  const list = document.querySelector(".apartments__list");
  if (list) {
    setNowFilters(filterArr);
    apartRender(allApartsInfo);
  }

  // очищаем локальное хранилище если находимся на главной странице:
  if (window.location.pathname === "/") {
    localStorage.removeItem("filter");
  }

  // ------------------------------------------ start функция рендеринга квартир: --------------------------------------
  function apartRender(arr) {
    console.log("*************** Старт функции apartRender ***************"); // имя функции

    // let params = parseUrlQuery();
    // console.log(params);

    limit = 12;
    offset = 0;

    if (list) {
      list.innerHTML = "";
    }
    let copyList = [...arr]; // создаем копию массива
    // console.log(copyList);

    if (choiceFilterForm) {
      // если есть форма c фильтрами
      // console.log(choiceForm);

      // // проверяем наличие филтров в локальном хранилище:
      // if (localStorage.getItem('filter')) {
      //   console.log(localStorage.getItem('filter'));
      // const filterArr = [];
      // filterArr.push(...JSON.parse(localStorage.getItem("filter")));
      // } else {
      // }
      filterArr = getFilters();
      // filterArr = parseUrlQuery();
      // setNowFilters(filterArr);
      // console.log(filterArr);

      // Фильтрация таблицы:
      if (filterArr.find((item) => item.name === "Проект")) {
        const projectFilter = filterArr.find((item) => item.name === "Проект").value;
        if (projectFilter && projectFilter !== "Все") {
          copyList = filterTable(projectFilter, "project_name", copyList);
        }
      }

      if (filterArr.find((item) => item.name === "Комнат")) {
        const roomFilter = filterArr.find((item) => item.name === "Комнат").value;
        if (roomFilter.length && roomFilter[0] !== "") {
          // console.log(roomFilter.length && roomFilter[0] !== "");
          copyList = filterTableArr(roomFilter, "apart_rooms", copyList);
        }
      }

      if (filterArr.find((item) => item.name === "Дом")) {
        const houseFilter = filterArr.find((item) => item.name === "Дом").value;
        if (houseFilter && houseFilter !== "Все") {
          copyList = filterTable(houseFilter, "house_title", copyList);
        }
      }

      if (filterArr.find((item) => item.name === "Секция")) {
        const sectionFilter = filterArr.find((item) => item.name === "Секция").value;
        if (sectionFilter && sectionFilter !== "Все") {
          copyList = filterTable(sectionFilter, "section", copyList);
        }
      }

      if (filterArr.find((item) => item.name === "Срок сдачи")) {
        const deadlineFilter = filterArr.find((item) => item.name === "Срок сдачи").value;
        if (deadlineFilter && deadlineFilter !== "Все") {
          copyList = filterTableDate(deadlineFilter, "house_building_end", copyList);
        }
      }

      if (filterArr.find((item) => item.name === "Этаж")) {
        const floorFilter = filterArr.find((item) => item.name === "Этаж").value;
        if (floorFilter.from || floorFilter.to) {
          copyList = filterTableSlider(floorFilter, "floor", copyList);
        }
      }

      if (filterArr.find((item) => item.name === "Стоимость, ₽")) {
        const priceFilter = filterArr.find((item) => item.name === "Стоимость, ₽").value;
        if (priceFilter.from || priceFilter.to) {
          copyList = filterTableSlider(priceFilter, "price", copyList);
        }
      }

      if (filterArr.find((item) => item.name === "Площадь, м2")) {
        const squareFilter = filterArr.find((item) => item.name === "Площадь, м2").value;
        if (squareFilter.from || squareFilter.to) {
          copyList = filterTableSlider(squareFilter, "square", copyList);
        }
      }

      if (filterArr.find((item) => item.name === "btns")) {
        const btnsFilter = filterArr.find((item) => item.name === "btns").value;
        if (btnsFilter.length && btnsFilter[0] !== "") {
          copyList = filterTableBtns(btnsFilter, copyList);
        }
      }

      console.log("copyList", copyList);
      // console.log('difference ',  allAparstInfo.filter(item => !copyList.includes(item)));

      const choiceSearchText = document.querySelector(".choice__search-text");
      if (choiceSearchText) {
        choiceSearchText.textContent = `Найдено ${copyList.length} квартир`;
      }
    }

    filtredApartList = [...copyList];
    // getSliderValues(copyList);

    copyList = [...copyList].splice(offset, limit);
    // console.log('copyList', copyList);

    // console.log('limit', limit);
    // console.log('offset', offset);
    const addApartBtn = document.getElementById("addApartrs");
    if (addApartBtn) {
      if (filtredApartList.length <= offset + limit) {
        addApartBtn.style.display = "none";
      } else {
        addApartBtn.style.display = "block";
      }
    }

    copyList.forEach((item) => {
      if (list) {
        list.append(getli(item));
      }
    });
  }
  // ----------------------------------------- end функция рендеринга квартир: -------------------------------------
  // ----------------------------------------- start функция парсинга url и формирования фильтров: -------------------------------------

  function parseUrlQuery() {
    console.log("*************** Старт функции parseUrlQuery ***************");
    let urlParams = new URLSearchParams(window.location.search);

    // const urlParams = new URLSearchParams(window.location.search);
    const filterArr = [];
    const res = [];
    urlParams.forEach((value, key) => {
      filterArr.push({ name: key, value: value });
    });
    console.log("filterArr", filterArr);

    //   [
    //     {
    //         "name": "project",
    //         "value": "Все"
    //     },
    //     {
    //         "name": "house",
    //         "value": "2"
    //     },
    //     {
    //         "name": "section",
    //         "value": "2"
    //     },
    //     {
    //         "name": "rooms",
    //         "value": "2"
    //     },
    //     {
    //         "name": "date",
    //         "value": "IV квартал 2025"
    //     },
    //     {
    //         "name": "floor",
    //         "value": "2-4"
    //     },
    //     {
    //         "name": "cost",
    //         "value": "2330000-6260000"
    //     },
    //     {
    //         "name": "square",
    //         "value": "61-81"
    //     }
    // ]

    if (filterArr.find((item) => item.name === "project")) {
      const projectFilter = filterArr.find((item) => item.name === "project").value;
      res.push({
        name: "Проект",
        value: projectFilter,
      });
    }

    if (filterArr.find((item) => item.name === "rooms")) {
      const roomsFilter = filterArr.find((item) => item.name === "rooms").value;
      res.push({
        name: "Комнат",
        value: roomsFilter.split(",").map(Number),
      });
    }

    if (filterArr.find((item) => item.name === "square")) {
      const squareFilter = filterArr.find((item) => item.name === "square").value;
      res.push({
        name: "Площадь, м2",
        value: {
          from: squareFilter.split("-")[0],
          to: squareFilter.split("-")[1],
        },
      });
    }

    if (filterArr.find((item) => item.name === "cost")) {
      const costFilter = filterArr.find((item) => item.name === "cost").value;
      res.push({
        name: "Стоимость, ₽",
        value: {
          from: costFilter.split("-")[0],
          to: costFilter.split("-")[1],
        },
      });
    }

    if (filterArr.find((item) => item.name === "house")) {
      const houseFilter = filterArr.find((item) => item.name === "house").value;
      res.push({
        name: "Дом",
        value: houseFilter,
      });
    }

    if (filterArr.find((item) => item.name === "section")) {
      const sectionFilter = filterArr.find((item) => item.name === "section").value;
      res.push({
        name: "Секция",
        value: sectionFilter,
      });
    }

    if (filterArr.find((item) => item.name === "date")) {
      const dateFilter = filterArr.find((item) => item.name === "date").value;
      res.push({
        name: "Срок сдачи",
        value: dateFilter,
      });
    }

    if (filterArr.find((item) => item.name === "floor")) {
      const floorFilter = filterArr.find((item) => item.name === "floor").value;
      res.push({
        name: "Этаж",
        value: {
          from: floorFilter.split("-")[0],
          to: floorFilter.split("-")[1],
        },
      });
    }

    if (filterArr.find((item) => item.name.includes("option"))) {
      const btnsFilter = [];
      filterArr.forEach((item) => {
        if (item.name.includes("option")) {
          btnsFilter.push(item.name);
        }
      });
      res.push({
        name: "btns",
        value: btnsFilter,
      });
    }

    return res;
  }
  // console.log( parseUrlQuery() );
  // ----------------------------------------- end функция парсинга url и формирования фильтров: -------------------------------------
  // ----------------------------------------- start функциb фильтрации массива квартир: --------------------------------------
  function filterTableArr(filter, param, arr) {
    console.log(filter);
    return arr.filter(function (item) {
      return filter.indexOf(Number(item[param])) !== -1;
    });
  }

  function filterTableBtns(arrFilter, arrInit) {
    return arrInit.filter((obj) => arrFilter.every((key) => key in obj && obj[key]));
  }

  function filterTable(filter, param, arr) {
    return arr.filter((item) => item[param] == filter);
  }

  function filterTableDate(filter, param, arr) {
    return arr.filter((item) => getQuarter(new Date(item[param])) == filter);
  }

  function filterTableSlider(filter, param, arr) {
    return arr.filter((item) => item[param] >= filter["from"] && item[param] <= filter["to"]);
  }
  // ----------------------------------------- end функциb фильтрации массива квартир: --------------------------------------
  // -------------------------------------------- start установка адресной строки: ---------------------------------------------

  function setUrlParams() {
    // let urlParams = new URLSearchParams(window.location.search);
    // запись параметров в адресную строку:
    if (slider.classList.contains("choice__input-block_slider_cost")) {
      urlParams.set("cost", `${rangeInputMin.value}-${rangeInputMax.value}`);
    }
    if (slider.classList.contains("choice__input-block_slider_floor")) {
      urlParams.set("floor", `${rangeInputMin.value}-${rangeInputMax.value}`);
    }
    if (slider.classList.contains("choice__input-block_slider_square")) {
      urlParams.set("square", `${rangeInputMin.value}-${rangeInputMax.value}`);
    }
    window.history.pushState({}, "", "?" + urlParams.toString());
  }

  // -------------------------------------------- end установка адресной строки: ---------------------------------------------
  // -------------------------------------------- start range-slider: ---------------------------------------------

  function rangeSliderInit(slider, gap, minRange, maxRange) {
    // let urlParams = new URLSearchParams(window.location.search);
    const rangeSlider = slider.querySelector(".range-slider");

    // текстовые инпуты:
    const priceInputs = slider.querySelectorAll(".choice__slider-select .select__input");
    const textInputMin = slider.querySelector(".select__input_from");
    const textInputMax = slider.querySelector(".select__input_to");
    // console.log(priceInputs);
    // рендж инпуты:
    const rangeInputs = slider.querySelectorAll(".range-inputs-wrap input");
    const rangeInputMin = slider.querySelector(".min-range");
    const rangeInputMax = slider.querySelector(".max-range");

    // основные параметры:
    gap = gap;
    minRange = minRange;
    maxRange = maxRange;

    // присваиваем значения инпутам:
    textInputMin.min = minRange;
    textInputMax.min = minRange;
    rangeInputMin.min = minRange;
    rangeInputMax.min = minRange;

    textInputMin.max = maxRange;
    textInputMax.max = maxRange;
    rangeInputMin.max = maxRange;
    rangeInputMax.max = maxRange;

    textInputMin.step = gap;
    textInputMax.step = gap;
    rangeInputMin.step = gap;
    rangeInputMax.step = gap;

    // value должно стоять соследним!!!
    textInputMin.value = minRange;
    textInputMax.value = maxRange;
    rangeInputMin.value = minRange;
    rangeInputMax.value = maxRange;

    // обработка событий текстовых инпутов:
    priceInputs.forEach((input) => {
      input.addEventListener("change", (e) => {
        console.log("тест");
        //получаем значения из текстовых инпутов:
        let minVal = parseInt(textInputMin.value);
        let maxVal = parseInt(textInputMax.value);
        let diff = maxVal - minVal;

        // ограничиваем значение min инпута:
        if (minVal < minRange) {
          textInputMin.value = minRange;
          minVal = minRange;
        }

        // ограничиваем значение max инпута:
        if (maxVal > maxRange) {
          textInputMax.value = maxRange;
          maxVal = maxRange;
        }

        // ограничиваем максимальное значение min инпута:
        if (e.target === textInputMin) {
          if (minVal > maxVal - gap) {
            textInputMin.value = maxVal - gap;
            minVal = maxVal - gap;
          }
        }

        // ограничиваем минимальное значение max инпута:
        if (e.target === textInputMax) {
          if (maxVal < minVal + gap) {
            textInputMax.value = minVal + gap;
            maxVal = minVal + gap;
          }
        }

        // вычисляем положение рендж инпутов:
        if (diff >= gap) {
          rangeInputMax.value = maxVal;
          rangeInputMin.value = minVal;
          rangeSlider.style.right = `${100 - ((maxVal - minRange) * 100) / (maxRange - minRange)}%`;
          rangeSlider.style.left = `${((minVal - minRange) * 100) / (maxRange - minRange)}%`;
        }
        // apartRender = debounce(apartRender, 1000);

        // запись параметров в адресную строку:
        if (slider.classList.contains("choice__input-block_slider_cost")) {
          urlParams.set("cost", `${rangeInputMin.value}-${rangeInputMax.value}`);
        }
        if (slider.classList.contains("choice__input-block_slider_floor")) {
          urlParams.set("floor", `${rangeInputMin.value}-${rangeInputMax.value}`);
        }
        if (slider.classList.contains("choice__input-block_slider_square")) {
          urlParams.set("square", `${rangeInputMin.value}-${rangeInputMax.value}`);
        }
        window.history.pushState({}, "", "?" + urlParams.toString());
        apartRender(allApartsInfo);
      });
    });

    rangeInputs.forEach((input) => {
      // сброс ползунков при инициализации:
      let minVal = parseInt(rangeInputMin.value);
      let maxVal = parseInt(rangeInputMax.value);
      let diff = maxVal - minVal;
      // вычисляем положение рендж инпутов:
      if (diff >= gap) {
        textInputMin.value = minVal;
        textInputMax.value = maxVal;
        rangeSlider.style.right = `${100 - ((maxVal - minRange) * 100) / (maxRange - minRange)}%`;
        rangeSlider.style.left = `${((minVal - minRange) * 100) / (maxRange - minRange)}%`;
      }

      // изменение положения ползунков при перетаскивании:
      input.addEventListener("input", (e) => {
        console.log("тест");

        let minVal = parseInt(rangeInputMin.value);
        let maxVal = parseInt(rangeInputMax.value);
        let diff = maxVal - minVal;
        //получаем значения из текстовых инпутов:

        // ограничиваем значение min инпута:
        if (minVal < minRange) {
          rangeInputMin.value = minRange;
          minVal = minRange;
        }

        // ограничиваем значение max инпута:
        if (maxVal > maxRange) {
          rangeInputMax.value = maxRange;
          maxVal = maxRange;
        }

        // ограничиваем максимальное значение min инпута:
        if (e.target === rangeInputMin) {
          if (minVal > maxVal - gap) {
            rangeInputMin.value = maxVal - gap;
            minVal = maxVal - gap;
          }
        }

        // ограничиваем минимальное значение max инпута:
        if (e.target === rangeInputMax) {
          if (maxVal < minVal + gap) {
            rangeInputMax.value = minVal + gap;
            maxVal = minVal + gap;
          }
        }

        // вычисляем положение рендж инпутов:
        if (diff >= gap) {
          textInputMin.value = minVal;
          textInputMax.value = maxVal;
          rangeSlider.style.right = `${100 - ((maxVal - minRange) * 100) / (maxRange - minRange)}%`;
          rangeSlider.style.left = `${((minVal - minRange) * 100) / (maxRange - minRange)}%`;
        }
      });

      // // рендер при перетаскивании:
      // input.addEventListener("change", (e) => {
      //   console.log("тест");
      //   apartRender(allApartsInfo);
      // });

      input.addEventListener("change", (e) => {
        console.log("тест");
        // запись параметров в адресную строку:
        if (slider.classList.contains("choice__input-block_slider_cost")) {
          urlParams.set("cost", `${rangeInputMin.value}-${rangeInputMax.value}`);
        }
        if (slider.classList.contains("choice__input-block_slider_floor")) {
          urlParams.set("floor", `${rangeInputMin.value}-${rangeInputMax.value}`);
        }
        if (slider.classList.contains("choice__input-block_slider_square")) {
          urlParams.set("square", `${rangeInputMin.value}-${rangeInputMax.value}`);
        }
        window.history.pushState({}, "", "?" + urlParams.toString());
        apartRender(allApartsInfo);
      });
    });
  }

  function rangeSliderUpdate(slider) {
    // ползунок:
    const rangeSlider = slider.querySelector(".range-slider");

    // текстовые инпуты:
    const textInputMin = slider.querySelector(".select__input_from");
    const textInputMax = slider.querySelector(".select__input_to");

    // рендж инпуты:
    const rangeInputMin = slider.querySelector(".min-range");
    const rangeInputMax = slider.querySelector(".max-range");

    let minVal = textInputMin.value;
    let maxVal = textInputMax.value;
    let minRange = textInputMin.min;
    let maxRange = textInputMax.max;

    // присваиваем значения инпутам:
    rangeInputMin.value = textInputMin.value;
    rangeInputMax.value = textInputMax.value;

    // вычисляем положение рендж инпутов:
    rangeSlider.style.right = `${100 - ((maxVal - minRange) * 100) / (maxRange - minRange)}%`;
    rangeSlider.style.left = `${((minVal - minRange) * 100) / (maxRange - minRange)}%`;
  }

  // TODO можно выбирать из текущего массива для рендеринга крайние значений для ползунков и других фильтров

  // const debounce = (fn, ms) => {
  //   let timeout;
  //   return function () {
  //     const fnCall = () => { fn.apply(this, arguments) }
  //     clearTimeout(timeout);
  //     timeout = setTimeout(fnCall, ms)
  //   };
  // }

  // function debounce(callee, timeoutMs) {
  //   return function perform(...args) {
  //     let previousCall = this.lastCall
  //     this.lastCall = Date.now()

  //     if (previousCall && ((this.lastCall - previousCall) <= timeoutMs)) {
  //       clearTimeout(this.lastCallTimer)
  //     }

  //     this.lastCallTimer = setTimeout(() => callee(...args), timeoutMs)
  //   }
  // }

  // function debounce(action, timeoutMs) {
  //   console.log("debounce");
  //   let timeoutId;
  //   return function (...args) {
  //     if (timeoutId) {
  //       clearTimeout(timeoutId);
  //     }
  //     timeoutId = setTimeout(() => {
  //       action(...args);
  //     }, timeoutMs);
  //   };
  // }

  // function debounce(f, delay){
  //   var lastTimeout;
  //   return function(){
  //     if(lastTimeout){
  //       clearTimeout(lastTimeout);
  //     }
  //     var args = Array.from(arguments);
  //     lastTimeout = setTimeout(function(){
  //       f.apply(null, args);
  //     }, delay);
  //   }
  // }

  // const squareSlider = document.querySelector(".choice__slider-select_square");
  // if (squareSlider) {
  //   rangeSliderInit(squareSlider, 1, 26, 81);
  // }

  // const costSlider = document.querySelector(".choice__slider-select_cost");
  // if (costSlider) {
  //   rangeSliderInit(costSlider, 1, 2300000, 7000000);
  // }

  // const floorSlider = document.querySelector(".choice__slider-select_floor");
  // if (floorSlider) {
  //   rangeSliderInit(floorSlider, 1, 1, 4);
  // }

  // -------------------------------------------- end range-slider: ---------------------------------------------
  function getFilters() {
    console.log("*************** Старт функции getFilters ***************"); // имя функции
    const filterArr = [];
    const filters = document.querySelectorAll(".choice__input-block");
    filters.forEach((item) => {
      const name = item.querySelector(".choice__label").textContent.trim();

      if (item.classList.contains("choice__input-block_select")) {
        const valueBlock = item.querySelector(".select__text");
        const value = valueBlock.textContent.trim();
        const filterObj = {
          name: name,
          value: value,
        };
        // if (param == "reset") {
        //   filterObj.value = "";
        //   valueBlock.textContent = "Все";
        // }
        filterArr.push(filterObj);
        // console.log(name, value);
      }

      if (item.classList.contains("choice__input-block_buttons")) {
        const valueBtns = item.querySelectorAll(".choice__buttons-select-item_active");
        const value = [];
        valueBtns.forEach((item) => {
          value.push(Number(item.getAttribute("data-id")));
        });
        const filterObj = {
          name: name,
          value: value,
        };
        // if (param == "reset") {
        //   filterObj.value = [];
        //   valueBtns.forEach((item) => {
        //     item.classList.remove("choice__buttons-select-item_active");
        //   });
        // }
        filterArr.push(filterObj);
        // console.log(name, value);
      }

      if (item.classList.contains("choice__input-block_slider")) {
        const valueTo = item.querySelector(".select__input_to").value;
        const valueFrom = item.querySelector(".select__input_from").value;
        const value = {
          from: valueFrom,
          to: valueTo,
        };

        // if (param == "reset") {
        //   value.from = "";
        //   value.to = "";

        //   // getSliderValues(allAparstInfo);
        // }

        const filterObj = {
          name: name,
          value: value,
        };
        filterArr.push(filterObj);
        // console.log(name, value);
      }
    });
    const btns = document.querySelectorAll(".choice__btn-filter_active");
    if (btns) {
      const value = [];
      btns.forEach((item) => {
        value.push(item.getAttribute("data-id"));
      });
      const filterObj = {
        name: "btns",
        value: value,
      };
      // if (param === "reset") {
      //   filterObj.value = [];
      // }
      filterArr.push(filterObj);
    }
    // console.log(parseUrlQuery());

    // запишем фильр в локальное хранилище:
    localStorage.setItem("filter", JSON.stringify(filterArr));
    console.log(filterArr);
    return filterArr;
  }

  // --------------------------------------- start FILTERS: ----------------------------------------
  // const form = document.querySelector("[choice-form]");
  // if (form) {
  //   form.addEventListener("click", (e) => {
  //     getFilters();
  //   });
  // }

  const choiceTitle = document.querySelector(".choice__title");
  // console.log(choiceTitle);
  if (choiceTitle) {
    // const form = document.querySelector("[choice-form]");
    choiceTitle.addEventListener("click", (e) => {
      console.log("тест");
      // getFilters();
      // const debouncedDoSomething  = debounce(apartRender, 1000);
      // debouncedDoSomething (allAparstInfo);
      // filterAparts()
    });
  }

  const resetFiltersBtn = document.querySelector(".choice__btn-reset");
  if (resetFiltersBtn) {
    resetFiltersBtn.addEventListener("click", (e) => {
      console.log("сброс фильтров");
      // getFilters("reset");
      setNowFilters();
      apartRender(allApartsInfo);
      // getSliderValues(allAparstInfo);
    });
  }

  // TODO вывод количества квартир

  /* <p class="choice__search-text">
Найдено 20 квартир
</p> */

  // function filterAparts() {
  //   list.innerHTML = "";
  //   let copyArr = [...allAparstInfo];

  //   const filterArr = getFilters();

  //   if (filterArr.find((item) => item.name === "Комнат").value) {
  //     let kv = filterArr.find((item) => item.name === "Комнат").value;
  //     // console.log(item.rooms);
  //     // console.log(copyArr.filter((item) => item.rooms ));
  //     copyArr = copyArr.filter((item) => kv.indexOf(String(item.rooms)) !== -1);
  //     // copyArr = copyArr.filter(function(item) {
  //     //   return kv.indexOf(String(item.rooms)) !== -1;
  //     // });
  //   }
  //   console.log(copyArr);
  //   // let copyArr = [...copyArr].splice(offset, limit);

  //   apartRender(copyArr);
  // }

  // далее отправляем запрос на сервер и выбираем по фильтру квартиры,
  // рендерим квартиры на странице
  // заменяем текущий запрос на рендеринг

  // ------------------------- end FILTERS: ---------------------------

  // -------------------------------------------- start Селект: ---------------------------------------------

  // let queryParams = {
  //   name: "",
  //   phone: "",
  //   email: "",
  //   message: "",
  //   project: "sosnoviy",
  //   numbers_of_rooms: "",
  //   area: "",
  //   optionBalcony: "",
  //   dressing_room: "",
  //   side_2: "",
  //   side_3: "",
  //   guest_bathroom: "",
  //   kitchen_living_room: "",
  // };

  // console.log(selects);

  const choiceForm = document.querySelector(".choice__form");
  if (choiceForm) {
    console.log(choiceForm);
    const selectProjectList = document.querySelectorAll(".choice__select");
    if (selectProjectList.length > 0) {
      selectProjectList.forEach((selectProject) => {
        selectProject.addEventListener("click", (event) => {
          console.log("тест");
          if (selectProject.classList.contains("select_open")) {
            selectProjectList.forEach((selectProject) => {
              selectProject.classList.remove("select_open");
            });
          } else {
            selectProjectList.forEach((selectProject) => {
              selectProject.classList.remove("select_open");
            });
            selectProject.classList.add("select_open");
          }
        });
        const selectOptions = selectProject.querySelectorAll(".select__item");
        if (selectOptions.length > 0) {
          selectOptions.forEach((item) => {
            item.addEventListener("click", (event) => {
              console.log("тест");
              const input = selectProject.querySelector(".select__text");
              event.stopPropagation(); // отменяем всплытие, что бы повторно не сработало событие на самом селекте
              input.innerHTML = item.innerHTML;
              input.classList.add("select__text_active");
              input.setAttribute("data-id", item.getAttribute("data-id"));
              selectProject.classList.remove("select_open");
              selectProject.classList.add("select_active");

              if (selectProject.closest(".choice__input-block_select_project")) {
                urlParams.set("project", input.innerHTML);
              }
              if (selectProject.closest(".choice__input-block_select_house")) {
                urlParams.set("house", input.innerHTML);
              }

              if (selectProject.closest(".choice__input-block_select_section")) {
                urlParams.set("section", input.innerHTML);
              }

              if (selectProject.closest(".choice__input-block_select_date")) {
                urlParams.set("date", input.innerHTML);
              }

              window.history.pushState({}, "", "?" + urlParams.toString());
              apartRender(allApartsInfo);
            });
          });
        }
      });

      document.addEventListener("click", (event) => {
        if (!event.target.closest(".choice__select")) {
          selectProjectList.forEach((selectProject) => {
            selectProject.classList.remove("select_open");
          });
        }
      });
    }
    // selects.forEach((select) => {
    // });

    const choiceButtonsSelect = document.querySelector(".choice__buttons-select");
    if (choiceButtonsSelect) {
      // const btns = choiceButtonsSelect.querySelectorAll(".choice__buttons-select-item");

      const choiceBtns = document.querySelectorAll(".choice__buttons-select-item");

      if (choiceBtns) {
        choiceBtns.forEach((item) => {
          item.addEventListener("click", (event) => {
            console.log("тест");
            item.classList.toggle("choice__buttons-select-item_active");
            const valueBtns = choiceButtonsSelect.querySelectorAll(".choice__buttons-select-item_active");
            const value = [];
            valueBtns.forEach((item) => {
              value.push(item.getAttribute("data-id"));
            });

            console.log(urlParams);
            urlParams.set("rooms", value);
            window.history.pushState({}, "", "?" + urlParams.toString());
            apartRender(allApartsInfo);

            // window.location.search = urlParams;
            // console.log(window.location.search);
            // console.log(queryParams);
          });
        });
      }
    }

    const choiceForm = document.querySelector("#choice-form");
    // console.log(choiceForm);
    if (choiceForm) {
      const submitBtn = choiceForm.querySelector(".form__btn");
      // console.log(submitBtn);
      submitBtn.addEventListener("click", (event) => {
        // choiceForm.addEventListener("submit", (event) => {
        // console.log("click");
        // choiceForm.addEventListener("submit", (event) => {
        event.preventDefault();
        queryParams.name = choiceForm.querySelector(".form__input_name").value;
        queryParams.phone = choiceForm.querySelector(".form__input_phone").value;
        queryParams.email = choiceForm.querySelector(".form__input_email").value;
        queryParams.message = choiceForm.querySelector(".form__input_textarea").value;
        // console.log(queryParams);
        if (queryParams.name === "" || queryParams.phone === "") {
          alert("Заполните обязательные поля");
          return;
        } else {
          postForm(queryParams).then((res) => {
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
        // const popupSuccess = document.querySelector("#success");
        // popupOpen(popupSuccess);
        // postForm(queryParams);
        // const popupActive = document.querySelector(".popup.open");
        // popupClose(popupActive);
        // return false;
      });
    }

    const requestForm = document.querySelector("#request-form");
    if (requestForm) {
      const submitBtn = requestForm.querySelector(".request__btn");
      // console.log(submitBtn);
      submitBtn.addEventListener("click", (event) => {
        // console.log("click");
        // requestForm.addEventListener("submit", (event) => {
        event.preventDefault();

        const queryParams = {
          apartment: "",
          name: "",
          phone: "",
          email: "",
          message: "",
        };
        queryParams.apartment = requestForm.querySelector(".request__input_apartment").value;
        queryParams.name = requestForm.querySelector(".request__input_name").value;
        queryParams.phone = requestForm.querySelector(".request__input_phone").value;
        queryParams.email = requestForm.querySelector(".request__input_email").value;
        queryParams.message = requestForm.querySelector(".request__input_textarea").value;
        // console.log(queryParams);
        if (queryParams.apartment === "" || queryParams.name === "" || queryParams.phone === "") {
          alert("Заполните обязательные поля");
          return;
        } else {
          postRequest(queryParams).then((res) => {
            if (res === "OK!") {
              const popupSuccess = document.querySelector("#success");
              popupOpen(popupSuccess);
              // return false;
            } else {
              alert("Произошла ошибка, попробуйте позже.");
              // return false;

              // const popupError = document.querySelector("#error");
              // popupOpen(popupError);
            }
          });
        }

        // if (queryParams.phone === "") {
        //   queryParams.apartment = "Отсутствует";
        // }

        // postRequest(queryParams);
        // const popupActive = document.querySelector(".popup.open");
        // popupClose(popupActive);
        // const popupSuccess = document.querySelector("#success");
        // popupOpen(popupSuccess);

        // return false;
      });
    }

    const notificationForm = document.querySelector("#notification-form");
    if (notificationForm) {
      const submitBtn = notificationForm.querySelector(".notification__btn");
      // console.log(submitBtn);
      submitBtn.addEventListener("click", (event) => {
        // console.log("click");
        // notificationForm.addEventListener("submit", (event) => {
        event.preventDefault();

        const queryParams = {
          agency: "",
          agentName: "",
          agentPhone: "",
          clientName: "",
          clientPhone: "",
          message: "",
        };
        // queryParams.apartment = notificationForm.querySelector(".notification__input_apartment").value;
        // queryParams.name = notificationForm.querySelector(".notification__input_name").value;
        // queryParams.phone = notificationForm.querySelector(".notification__input_phone").value;
        // queryParams.email = notificationForm.querySelector(".notification__input_email").value;
        queryParams.agency = notificationForm.querySelector(".notification__input_agency").value;
        queryParams.agentName = notificationForm.querySelector(".notification__input_agent-name").value;
        queryParams.agentPhone = notificationForm.querySelector(".notification__input_agent-phone").value;
        queryParams.clientName = notificationForm.querySelector(".notification__input_client-name").value;
        queryParams.clientPhone = notificationForm.querySelector(".notification__input_client-phone").value;
        queryParams.message = notificationForm.querySelector(".notification__input_textarea").value;
        // console.log(queryParams);
        if (
          queryParams.agency === "" ||
          queryParams.agentName === "" ||
          queryParams.agentPhone === "" ||
          queryParams.clientName === "" ||
          queryParams.clientPhone === ""
        ) {
          alert("Заполните обязательные поля");
          return;
        } else {
          postNotification(queryParams).then((res) => {
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
  }

  const projectPage = document.querySelector(".project-item-page");
  const indexPage = document.querySelector(".glavnaya");

  if (projectPage || indexPage) {
    const choice = document.querySelector(".choice");
    const content = choice.querySelector(".choice__container");
    const popup = document.querySelector("#filter");
    const filterMobileBtn = choice.querySelector(".choice__btn-request_mobile_filter");

    // открытие popup и заполнение его формой
    filterMobileBtn.addEventListener("click", () => {
      console.log("тест");
      popupOpen(popup);
      bodyLock();

      popup.classList.add("open");
      popup.querySelector(".popup__content").append(content);
    });

    // закрытие popup по Esc
    document.addEventListener("keydown", function (e) {
      console.log("тест");
      if (e.key === "Escape") {
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
      }
    });
  }
  // -------------------------------------------- end Селект ---------------------------------------------
  // -------------------------------------------- start фильтр по особенностям ---------------------------------------------
  const btns = document.querySelectorAll(".choice__btn-filter");
  if (btns) {
    btns.forEach((item) => {
      item.addEventListener("click", (e) => {
        console.log("тест");
        item.classList.toggle("choice__btn-filter_active");

        btns.forEach((item) => {
          if (item.classList.contains("choice__btn-filter_active")) {
            urlParams.set(item.getAttribute("data-id"), 1);
          } else {
            urlParams.delete(item.getAttribute("data-id"));
          }
        });

        window.history.pushState({}, "", "?" + urlParams.toString());
        apartRender(allApartsInfo);
      });
    });
  }
  // -------------------------------------------- end фильтр по особенностям ---------------------------------------------
  // ------------------------------------- start render квартиры -------------------------------

  let apart = {};

  const apartmentsItemPage = document.querySelector(".apartments-item-page");
  if (apartmentsItemPage) {
    const url = new URL(window.location.href);
    const id = url.searchParams.get("id");
    // console.log('id:', id);
    const obj = allApartsInfo.filter((item) => item.id == id)[0];
    apart = obj;
    console.log("obj:", obj);

    const imgBlock = document.querySelector(".about__img");
    const imgArr = obj.img;
    imgArr.forEach((item) => {
      imgBlock.innerHTML += `<img src="${item.img_path}" alt="${obj.imgAlt}" data-fancybox="1">`;
    });

    const apartImgArr = imgBlock.querySelectorAll("img");

    for (let i = 0; i < apartImgArr.length; i++) {
      const id = i + 1;
      apartImgArr[i].setAttribute("data-img", id);
      if (id == 2) {
        apartImgArr[i].style.display = "none";
      }
    }

    const titleBlock = document.querySelector(".about__right-title");
    titleBlock.innerHTML = obj.title;

    const priceBlock = document.querySelector(".about__right-new-price");
    priceBlock.innerHTML = Number(obj.price).toLocaleString("ru-RU", {
      style: "currency",
      currency: "RUB",
      minimumFractionDigits: 0,
    });

    const oldPriceBlock = document.querySelector(".about__right-old-price");
    if (obj.old_price) {
      oldPriceBlock.innerHTML = Number(obj.old_price).toLocaleString("ru-RU", {
        style: "currency",
        currency: "RUB",
        minimumFractionDigits: 0,
      });
    } else {
      oldPriceBlock.style.display = "none";
    }

    const timeBlock = document.querySelector(".about__right-info-text-time");
    timeBlock.innerHTML = getQuarter(new Date(obj.house_building_end));

    const houseBlock = document.querySelector(".about__right-info-text-section");
    houseBlock.innerHTML = obj.house_title_rus;

    const projectBlock = document.querySelector(".about__btn-complex-text");
    projectBlock.innerHTML = `${obj.project_name} квартал`;

    const plansBtns = document.querySelectorAll(".about__btn");
    plansBtns.forEach((item) => {
      item.addEventListener("click", (e) => {
        const id = item.getAttribute("data-img");
        const imgArr = document.querySelectorAll(".about__img img");
        imgArr.forEach((item) => {
          if (item.getAttribute("data-img") == id) {
            item.style.display = "block";
          } else {
            item.style.display = "none";
          }
        });
      });
    });

    const strOptions = `
    <li class="about__right-btn-block-filter" data-id="optionPromotion">
      Акция
    </li>
    <li class="about__right-btn-block-filter" data-id="optionKeyToday">
      Ключи сегодня
    </li>
    <li class="about__right-btn-block-filter" data-id="optionBalcony">
      Балкон
    </li>
    <li class="about__right-btn-block-filter" data-id="optionDressRoom">
      Гардеробная
    </li>
    <li class="about__right-btn-block-filter" data-id="optionTwoSide">
      Окна на 2 стороны
    </li>
    <li class="about__right-btn-block-filter" data-id="optionThreeSide">
      Окна на 3 стороны
    </li>
    <li class="about__right-btn-block-filter" data-id="optionGuestBathroom">
      Гостевой санузел
    </li>
    <li class="about__right-btn-block-filter" data-id="optionTerrace">
      Терраса
    </li>
    <li class="about__right-btn-block-filter" data-id="optionKitchenLiving">
      Кухня-гостиная
    </li>  
  `;

    const optionsBlock = document.querySelector(".about__right-btn-block");

    const options = document.createElement("ul");
    options.classList.add("about__right-btn-block-wrap");
    options.innerHTML = strOptions;

    // добавление и фльтрация опций:

    const allOptions = [
      "optionPromotion",
      "optionKeyToday",
      "optionTwoSide",
      "optionThreeSide",
      "optionBalcony",
      "optionKitchenLiving",
      "optionDressRoom",
      "optionGuestBathroom",
      "optionTerrace",
    ];

    // формируем массив опций из объекта:
    const optionsFromObj = [];

    for (let op in obj) {
      allOptions.forEach((option) => {
        if (op == option && obj[op]) {
          optionsFromObj.push(op);
        }
      });
    }

    const btnsElements = options.querySelectorAll(".about__right-btn-block-filter");

    // фильтруем массив опций, удяляя лишние элементы:
    btnsElements.forEach((item) => {
      if (!optionsFromObj.includes(item.getAttribute("data-id"))) {
        item.remove();
      }
    });

    optionsBlock.append(options);
  }

  // ------------------------------------- end render квартиры -------------------------------

  // ------------------------------------- start передача в модалку данных -------------------------------
  const bookingButton = document.querySelector(".booking-btn");
  if (bookingButton) {
    const bookingPopup = document.querySelector("#popup-booking");
    bookingButton.addEventListener("click", () => {
      setAddFormInputs(bookingPopup, bookingButton);
    });
  }

  const bookingCallButton = document.querySelector(".booking-call-btn");
  if (bookingCallButton) {
    const bookingPopupCall = document.querySelector("#popup-booking-call");
    bookingCallButton.addEventListener("click", () => {
      setAddFormInputs(bookingPopupCall, bookingCallButton);
    });
  }

  function setAddFormInputs(popup, formBtn) {
    console.log("тест");

    let floor = formBtn.closest(".choice__form").querySelector(".select__text").innerHTML;
    console.log(floor);
    // checkbox__label_active
    let payment =
      formBtn
        .closest(".choice__form")
        .querySelector(".checkbox__label_active")
        .querySelector(".checkbox__tite")
        .innerHTML.trim() +
      " - " +
      formBtn
        .closest(".choice__form")
        .querySelector(".checkbox__label_active")
        .querySelector(".checkbox__desc")
        .innerHTML.trim();
    // const house = btn.closest(".choice__form").querySelector('.about__right-info-text-section').innerHTML.trim();
    const house = apart.house_title_rus;
    // const project = btn.closest(".choice__form").querySelector('.about__btn-complex-text').innerHTML.trim();
    const project = apart.project_name;
    const title = apart.imgAlt;
    const houseId = apart.house_id;

    const floorInput = popup.querySelector('input[name="floor"]');
    const paymentInput = popup.querySelector('input[name="payment"]');
    const houseInput = popup.querySelector('input[name="house"]');
    const projectInput = popup.querySelector('input[name="project"]');
    const titleInput = popup.querySelector('input[name="apartment"]');
    const houseIdInput = popup.querySelector('input[name="house_id"]');

    floorInput.value = floor;
    paymentInput.value = payment;
    houseInput.value = house;
    projectInput.value = project;
    titleInput.value = title;
    houseIdInput.value = houseId;

    console.log("floor:", floorInput.value);
    console.log("payment:", paymentInput.value);
    console.log("house:", houseInput.value);
    console.log("project:", projectInput.value);
    console.log("title:", titleInput.value);
    console.log("houseId:", houseIdInput.value);
  }

  // ------------------------------------- end передача в модалку данных -------------------------------
}
