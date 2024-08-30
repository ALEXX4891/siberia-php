const choiceFilterForm = document.querySelector("[data-form]");
let urlParams = new URLSearchParams(window.location.search);


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

const idHouse = [933, 943, 945];
const projectById = [{ 933: "Сосновый" }, { 943: "Сосновый" }, { 945: "Сосновый" }];

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
    let result = await responseAparts.json();
    allAparstInfo = Object.values(result.response.realty);
    houseInfo = result.response.house;
    body.classList.remove("_sending");
  } else {
    console.log("error");
    body.classList.remove("_sending");
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

allInfo.splice(1).forEach((item) => {
  allHouseInfo.push(item[0]);
  allApartsInfo.push(...item[1]);
});

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
});

// console.log("allAparstInfo", allApartsInfo);

// -------------------------------------- start функция создания карточки квартиры: --------------------------------------
function getli(obj) {
  console.log("Старт функции  getli"); // имя функции

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
  return li; // возвращаем li
}
// -------------------------------------- end функция создания карточки квартиры: --------------------------------------

console.log("allAparstInfo", allApartsInfo[0]);
// -------------------------------------- start полуаем граничные значения для фильтров: --------------------------------------
function getMaxMinForFilters(allApartsInfo) {
  console.log("Старт функции getMaxMinForFilters"); // имя функции

  // получаем граничные значения из allAparstInfo:
  const minPrice = Math.floor(Math.min(...allApartsInfo.map((item) => item.price)));
  const maxPrice = Math.ceil(Math.max(...allApartsInfo.map((item) => item.price)));
  const minSquare = Math.floor(Math.min(...allApartsInfo.map((item) => item.square)));
  const maxSquare = Math.ceil(Math.max(...allApartsInfo.map((item) => item.square)));
  const rooms = [...new Set(allApartsInfo.map((item) => item.rooms))].sort((a, b) => a - b);
  const minFloor = Math.floor(Math.min(...allApartsInfo.map((item) => item.floor)));
  const maxFloor = Math.ceil(Math.max(...allApartsInfo.map((item) => item.floor)));
  const projects = [...new Set(allApartsInfo.map((item) => item.project_name))];
  const houses = [...new Set(allApartsInfo.map((item) => item.house_title))];
  const sections = [...new Set(allApartsInfo.map((item) => item.section))];
  // const deadline = [... new Set(allAparstInfo.map((item) => new Date(item.house_building_end).toLocaleString()))];
  const deadline = [...new Set(allApartsInfo.map((item) => getQuarter(new Date(item.house_building_end))))];

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
  ];

  console.log("filterAllInfo", filterAllInfo);

  return filterAllInfo;
}

// getMaxMinForFilters();
// -------------------------------------- end полуаем граничные значения для фильтров: --------------------------------------

// -------------------------------------- start устанавливаем граничные значения в фильтры: --------------------------------------
function setMaxMinForFilters(filterAllInfo) {
  console.log("Старт функции setMaxMinForFilters"); // имя функции
  // const filterAllInfo = getMaxMinForFilters();
  const choiceFilterForm = document.querySelector("[data-form]");
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
  let allSelect = '<li class="select__item">Все</li>';

  if (projectFilter) {
    projectFilter.innerHTML = "";
    projectFilter.innerHTML =
      allSelect +
      filterAllInfo
        .find((item) => item.name === "Проект")
        .value.map((item) => `<li class="select__item">${item}</li>`)
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
}

setMaxMinForFilters(getMaxMinForFilters(allApartsInfo));

// -------------------------------------- start функция установки и сброса значений фильтров ----------------
// setNowFilters();
function setNowFilters(arr) {
  console.log("Старт функции setNowFilters"); // имя функции
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

  if (!choiceFilterForm) {
    console.log("choiceFilterForm not found");
    return;
  }

  if (!arr) {
    window.history.pushState({}, document.title, window.location.pathname);
    urlParams = new URLSearchParams(window.location.search);
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

  // TODO можно написать цикл, который будет проверть все фильтры и добавлять или удалять классы.


  if (projectFilter) {
    if (arr) {
      if (arr.find((item) => item.name === "Проект") && arr.find((item) => item.name === "Проект").value !== "") {
        projectFilter.innerHTML = arr.find((item) => item.name === "Проект").value;
      }
    }

    projectFilter.innerHTML = "";    
      
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
    }

    houseFilter.innerHTML = "";    
      
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
    }

    sectionFilter.innerHTML = "";

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
      if (arr.find((item) => item.name === "Срок сдачи") && arr.find((item) => item.name === "Срок сдачи").value !== "") {
        deadlineFilter.innerHTML = arr.find((item) => item.name === "Срок сдачи").value;
      }
    }
    
    deadlineFilter.innerHTML = "";

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
          arr.find((item) => item.name === "Комнат").value.includes(Number(item.innerText))
            ? item.classList.add("choice__buttons-select-item_active")
            : item.classList.remove("choice__buttons-select-item_active")
        );
      }
    } else {
      roomsFilter.forEach((item) => item.classList.remove("choice__buttons-select-item_active"));
      urlParams.delete("rooms");
      console.log('urlParams', urlParams);
    }
  }

  if (squareInputFrom) {
    if (arr) {
      if (arr.find((item) => item.name === "Площадь, м2") && arr.find((item) => item.name === "Площадь, м2").value !== "") {
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
      if (arr.find((item) => item.name === "Стоимость, ₽") && arr.find((item) => item.name === "Стоимость, ₽").value !== "") {
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
  console.log("Старт функции getNewItems"); // имя функции
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

// первичный рендеринг квартир:
const list = document.querySelector(".apartments__list");
if (list) {
  apartRender(allApartsInfo);
}

// очищаем локальное хранилище если находимся на главной странице:
if (window.location.pathname === "/") {
  localStorage.removeItem("filter");
}

// ------------------------------------------ start функция рендеринга квартир: --------------------------------------
function apartRender(arr) {
  console.log("Старт функции apartRender"); // имя функции

  let params = window.location.search
    .replace("?", "")
    .split("&")
    .reduce(function (p, e) {
      var a = e.split("=");
      p[decodeURIComponent(a[0])] = decodeURIComponent(a[1]);
      return p;
    }, {});
  console.log(params);

  limit = 12;
  offset = 0;

  list.innerHTML = "";
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
    const filterArr = getFilters();

    // Фильтрация таблицы:
    if (filterArr.find((item) => item.name === "Проект")) {
      const projectFilter = filterArr.find((item) => item.name === "Проект").value;
      if (projectFilter && projectFilter !== "Все") {
        copyList = filterTable(projectFilter, "project_name", copyList);
      }
    }

    if (filterArr.find((item) => item.name === "Комнат")) {
      const roomFilter = filterArr.find((item) => item.name === "Комнат").value;
      if (roomFilter.length) {
        copyList = filterTableArr(roomFilter, "rooms", copyList);
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
    list.append(getli(item));
  });
}
// ----------------------------------------- end функция рендеринга квартир: -------------------------------------
console.log(window.location.href);
function getUrl(e) {
  e.preventDefault();
  let url = window.location.href;
  console.log(url);
  // window.location.href = url;
}
// ----------------------------------------- start функция парсинга url и формирования фильтров: -------------------------------------
function parseUrlQuery() {
  // let urlParams = new URLSearchParams(window.location.search);

  // const urlParams = new URLSearchParams(window.location.search);
  const filterArr = [];
  const res = [];
  urlParams.forEach((value, key) => {
    filterArr.push({ name: key, value: value });
  });

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
    res.push(
      {
        name: "Проект",
        value: projectFilter,
      }
    )
  }

  if (filterArr.find((item) => item.name === "house")) {
    const houseFilter = filterArr.find((item) => item.name === "house").value;
    res.push(
      {
        name: "Дом",
        value: houseFilter,
      }
    )
  }

  if (filterArr.find((item) => item.name === "section")) {
    const sectionFilter = filterArr.find((item) => item.name === "section").value;
    res.push(
      {
        name: "Секция",
        value: sectionFilter,
      }
    )
  }

  if (filterArr.find((item) => item.name === "date")) {
    const dateFilter = filterArr.find((item) => item.name === "date").value;
    res.push(
      {
        name: "Срок сдачи",
        value: dateFilter,
      }
    )
  }

  // if (filterArr.find((item) => item.name === "rooms")) {




  return res;
}
// console.log( parseUrlQuery() );
// ----------------------------------------- end функция парсинга url и формирования фильтров: -------------------------------------
// ----------------------------------------- start функциb фильтрации массива квартир: --------------------------------------
function filterTableArr(filter, param, arr) {
  return arr.filter((item) => filter.indexOf(String(item[param])) !== -1);
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

// TODO запрограммировать адаптив филтров.
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

const formAll = document.querySelectorAll(".main-form");

if (formAll) {
  formAll.forEach((form) => {
    form.addEventListener("submit", sendForm);

    async function sendForm(e) {
      e.preventDefault();

      let errore = formvalidation(form);

      if (errore === 0) {
        form.classList.add("_sending");
        let formData = new FormData(form);

        let response = await fetch("files/post-mail.php", {
          method: "POST",
          body: formData,
        });

        if (response.ok) {
          let result = await response.json();
          form.reset();
          popupOpen(document.getElementById("success"));
          form.classList.remove("_sending");
        } else {
          popupOpen(document.getElementById("error"));
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
// --------------------------------------- start FILTERS: ----------------------------------------
// const form = document.querySelector("[data-form]");
// if (form) {
//   form.addEventListener("click", (e) => {
//     getFilters();
//   });
// }

const choiceTitle = document.querySelector(".choice__title");
// console.log(choiceTitle);
if (choiceTitle) {
  // const form = document.querySelector("[data-form]");
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
    console.log('сброс фильтров');
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

function getFilters() {
  console.log("Старт функции getFilters"); // имя функции
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
        value.push(item.getAttribute("data-id"));
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
  console.log(filterArr);

  // запишем фильр в локальное хранилище:
  localStorage.setItem("filter", JSON.stringify(filterArr));

  return filterArr;
}

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
  const choice = apartmentsPage.querySelector(".choice");

  const choiceTop = apartmentsPage.querySelector(".choice__inputs-list_top");
  const choiceBot = apartmentsPage.querySelector(".choice__inputs-list_bot");
  const section__apartments = apartmentsPage.querySelector(".section__apartments");
  const height = choice.getBoundingClientRect().height;

  // const el = Array.from(choiceBot.children)[3];
  const el = apartmentsPage
    .querySelector(".choice__inputs-list_bot")
    .querySelector(".choice__input-block_slider_floor"); //
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
}
//------------------- end трансформация фильтра----------------

// --------------------------------------- start карта: ---------------------------------------------
const map = document.querySelector(".map");
if (map) {
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
// --------------------------------------- end карта: ---------------------------------------------
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
      apartRender(allApartsInfo);

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

      // setTimeout(() => {
      //   apartRender(allAparstInfo);
      // }, 500);
      // })

      // debounce(apartRender(allAparstInfo), 1000);
      // apartRender = debounce(apartRender, 1000);
    });

    input.addEventListener("change", (e) => {
      apartRender(allApartsInfo);
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

if (window.innerWidth >= 560) {
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
}

new Swiper(".commercial_swiper", {
  // Optional parameters
  direction: "horizontal",
  // loop: true,
  // allowTouchMove: true,
  slidesPerView: 3, // сколько слайдов показывать, можно дробно
  // slidesPerView: "auto", // сколько слайдов показывать, можно дробно
  slidersPerGroup: 3, // сколько слайдов в группе
  // centeredSlides: true, //выравнивание слайдов по центру
  // initialSlide: 0, //начальный слайд (c нуля)

  spaceBetween: 21,
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
  // slidesPerView: auto, // сколько слайдов показывать, можно дробно
  slidesPerView: "auto", // сколько слайдов показывать, можно дробно
  // slidersPerGroup: 3, // сколько слайдов в группе
  // centeredSlides: true, //выравнивание слайдов по центру
  // initialSlide: 0, //начальный слайд (c нуля)

  // spaceBetween: 40,
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

// -------------------------------------------- start корзина: ---------------------------------------------

const headerCartBtn = document.querySelector(".btn__cart");
if (headerCartBtn) {
  function setCartActive() {
    headerCartBtn.classList.add("btn__cart_active");
  }
  function setCartEmpty() {
    headerCartBtn.classList.remove("btn__cart_active");
  }
  headerCartBtn.addEventListener("click", function (e) {
    console.log("тест");
    e.preventDefault();
    window.location.href = "cart.html";
  });
}

const cartItemDelBtns = document.querySelectorAll(".card__del-btn");
if (cartItemDelBtns) {
  cartItemDelBtns.forEach((item) => {
    const el = item.closest(".cart__card");
    item.addEventListener("click", function (e) {
      console.log("тест");
      e.preventDefault();
      el.remove();
      getTotalCost();
    });
  });
}

const cartCards = document.querySelectorAll(".cart__card");

if (cartCards.length) {
  // console.log(cartCards);
  const btnMontage = document.querySelectorAll(".btn_montage");
  if (btnMontage) {
    btnMontage.forEach((item) => {
      // изменение вида кнопки при клике:
      item.addEventListener("click", function () {
        console.log("тест");
        item.classList.toggle("btn_montage_active");
        // const cost = item.closest(".cart__card").querySelector(".card__cost");
        // let quontity = item
        //   .closest(".cart__card")
        //   .querySelector(".card__counter-value").value;
        // console.log(quontity);
        getTotalCost();
      });
    });
  }

  cartCards.forEach((item) => {
    // счетчик количества карточек в корзине:
    const plus = item.querySelector(".card__counter-btn_plus");
    const minus = item.querySelector(".card__counter-btn_minus");
    const counterValue = item.querySelector(".card__counter-value");
    let quontity = 0;

    counterValue.addEventListener("input", function (e) {
      if (Number(counterValue.value) <= 0) {
        quontity = 0;
        counterValue.value = 0;
      } else {
        quontity = counterValue.value;
      }
      getCost(item, quontity);
      getTotalCost();
    });

    plus.addEventListener("click", function () {
      console.log("тест");
      quontity++;
      counterValue.value = quontity;
      getCost(item, quontity);
      getTotalCost();
      setCartActive();
    });
    minus.addEventListener("click", function () {
      console.log("тест");
      if (counterValue.value > 0) {
        quontity--;
        counterValue.value = quontity;
        getCost(item, quontity);
        getTotalCost();
      }
    });
  });
}

// вычисление стоимости товара в корзине, в зависимости от количества:
function getCost(item, quontity) {
  // console.log("getCost");
  const cost = item.querySelector(".card__cost");
  const priceText = item.querySelector(".card__price").innerHTML;
  const price = parseInt(priceText.replace(/\s/g, ""));
  cost.innerHTML = (price * quontity).toLocaleString();
}

// вычисление общей стоимости товаров в корзине:
function getTotalCost() {
  // console.log(55);
  let total = 0;
  const totalCost = document.querySelector(".form__cost-value");
  let allCosts = document.querySelectorAll(".card__cost");

  allCosts.forEach((item) => {
    total += parseInt(item.innerHTML.replace("&nbsp;", ""));
    totalCost.innerHTML = total.toLocaleString();
  });
  if (total === 0) {
    setCartEmpty();
    totalCost.innerHTML = "0";
  }
}

// -------------------------------------------- end корзина ---------------------------------------------

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

$(".phone").mask("+7(999) 999 99 99");

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
// -------------------------------------------- start Селект: ---------------------------------------------

// let queryParams = {
//   name: "",
//   phone: "",
//   email: "",
//   message: "",
//   project: "sosnoviy",
//   numbers_of_rooms: "",
//   area: "",
//   balcony: "",
//   dressing_room: "",
//   side_2: "",
//   side_3: "",
//   guest_bathroom: "",
//   kitchen_living_room: "",
// };

// console.log(selects);

const choiceForm = document.querySelector(".choice__form");
if (choiceForm) {
  const selectProjectList = document.querySelectorAll(".choice__select");
  if (selectProjectList) {
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
      if (selectOptions) {
        selectOptions.forEach((item) => {
          item.addEventListener("click", (event) => {
            const input = selectProject.querySelector(".select__text");
            event.stopPropagation(); // отменяем всплытие, что бы повторно не сработало событие на самом селекте
            input.innerHTML = item.innerHTML;
            input.classList.add("select__text_active");
            input.setAttribute("data-id", item.getAttribute("data-id"));
            selectProject.classList.remove("select_open");
            selectProject.classList.add("select_active");
            apartRender(allApartsInfo);

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

          apartRender(allApartsInfo);
          console.log(value);
          urlParams.set("rooms", value);
          console.log(urlParams);
          window.history.pushState({}, "", "?" + urlParams.toString());

          // window.location.search = urlParams;
          // console.log(window.location.search);
          // console.log(queryParams);
        });
      });
    }
  }

  // const filterBtns = document.querySelectorAll(".choice__btn-filter");

  // if (filterBtns) {
  //   filterBtns.forEach((item) => {
  //     item.addEventListener("click", (event) => {
  //       console.log("тест");
  //       item.classList.toggle("choice__btn-filter_active");
  //       let key = item.getAttribute("data-id");
  //       if (item.classList.contains("choice__btn-filter_active")) {
  //         queryParams[key] = "yes";
  //       } else {
  //         queryParams[key] = "";
  //       }
  //       // console.log(queryParams);
  //     });
  //   });
  // }

  // const choice__square = document.querySelector(".choice__square-select");
  // if (choice__square) {
  //   const inputFrom = choice__square.querySelector(".select__input_from");
  //   const inputTo = choice__square.querySelector(".select__input_to");
  //   queryParams.area = inputFrom.value + " - " + inputTo.value;

  //   inputFrom.addEventListener("input", (event) => {
  //     queryParams.area = inputFrom.value + " - " + inputTo.value;
  //     // console.log(queryParams);
  //   });

  //   inputTo.addEventListener("input", (event) => {
  //     queryParams.area = inputFrom.value + " - " + inputTo.value;
  //     // console.log(queryParams);
  //   });
  // }

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

  // const
  // const btns = choiceButtonsSelect.querySelectorAll(".choice__buttons-select-item";

  // btns.forEach((btn) => {
  //   btn.addEventListener("click", (event) => {
  //     const input = choiceButtonsSelect.querySelector(".choice__buttons-select-text");
  //     event.stopPropagation(); // отменяем всплытие, что бы повторно не сработало событие на самом селекте
  //     input.innerHTML = btn.innerHTML;
  //     input.classList.add("choice__buttons-select-text_active");
  //     input.setAttribute("data-id", btn.getAttribute("data-id"));
  //     queryParams.numbers_of_rooms = btn.getAttribute("data-id");
  //     // console.log(queryParams);
  //     choiceButtonsSelect.classList.remove("choice__buttons-select_active");
  //   });
  // });
  // }

  // console.log(selects);
  // const selects = document.querySelectorAll(".select");
  // if (selects) {
  //   selects.forEach((select) => {
  //     select.addEventListener("click", (event) => {
  //       console.log("click");
  //       select.classList.toggle("select_open");
  //     });
  //     const selectOptions = select.querySelectorAll(".select__item");
  //     selectOptions.forEach((item) => {
  //       item.addEventListener("click", (event) => {
  //         const input = select.querySelector(".select__text");
  //         event.stopPropagation(); // отменяем всплытие, что бы повторно не сработало событие на самом селекте
  //         input.innerHTML = item.innerHTML;
  //         input.classList.add("select__text_active");
  //         input.setAttribute("data-id", item.getAttribute("data-id"));
  //         select.classList.remove("select_open");
  //         select.classList.add("select_active");
  //       });
  //     });
  //   });
}

const projectPage = document.querySelector(".project-item-page");
if (projectPage) {
  const projectChoice = projectPage.querySelector(".choice");
  // console.log(projectChoice);
  const content = projectChoice.querySelector(".choice__container");
  const popup = document.querySelector("#filter");
  // console.log(popup);
  const filterMobileBtn = projectChoice.querySelector(".choice__btn-request_mobile");

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
        console.log("111");

        // передача формы обратно на главную страницу
        projectChoice.append(content);
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
        projectChoice.append(content);
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
      projectChoice.append(content);
    }
  });
}

const indexPage = document.querySelector(".glavnaya");
if (indexPage) {
  const indexChoice = indexPage.querySelector(".choice");
  console.log(indexChoice);
  const content = indexChoice.querySelector(".choice__container");
  const popup = document.querySelector("#filter");
  console.log(popup);
  const button = indexChoice.querySelector(".choice__btn-request_mobile");

  // открытие popup и заполнение его формой
  button.addEventListener("click", () => {
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
        console.log("111");

        // передача формы обратно на главную страницу
        indexChoice.append(content);
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
        indexChoice.append(content);
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
      indexChoice.append(content);
    }
  });
}
// -------------------------------------------- end Селект ---------------------------------------------
// -------------------------------------------- start Карта ---------------------------------------------
// Функция ymaps.ready() будет вызвана, когда
// загрузятся все компоненты API, а также когда будет готово DOM-дерево.

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

//-------------------------- start отправка формы на почту ------------------------------

async function postCall(queryParams) {
  // console.log(JSON.stringify(queryParams));
  // Блок try выполнится полностью, если не будет ошибок:
  try {
    // Выполняем запрос:
    const responce = await fetch("files/post-mail.php", {
      method: "POST",
      headers: {
        "Content-Type": "application/json",
      },
      body: JSON.stringify(queryParams),
    });
    const res = await responce.json();
    return res; // Возвращаем результат запроса
    // const infoList = await responce.json();
    // return infoList; // Возвращаем результат запроса
    // console.log(responce);
  } catch (err) {
    // Блок catch сработает только если будут какие-то ошибки в блоке try:
    // Выведем в консоли информацию об ошибке:
    console.log("При оптравке письма произошла ошибка, детали ниже:");
    console.error(err);
    // Вернем исключение с текстом поясняющим детали ошибки:
    // alert("Произошла ошибка при оптравке письма!");
    throw new Error("Запрос завершился неудачно.");
  }
}

async function postForm(queryParams) {
  // console.log(JSON.stringify(queryParams));
  // Блок try выполнится полностью, если не будет ошибок:
  try {
    // Выполняем запрос:
    const responce = await fetch("files/post-form.php", {
      method: "POST",
      headers: {
        "Content-Type": "application/json",
      },
      body: JSON.stringify(queryParams),
    });
    const res = await responce.json();
    return res; // Возвращаем результат запроса
    // const infoList = await responce.json();
    // return infoList; // Возвращаем результат запроса
    // console.log(responce);
  } catch (err) {
    // Блок catch сработает только если будут какие-то ошибки в блоке try:
    // Выведем в консоли информацию об ошибке:
    console.log("При оптравке письма произошла ошибка, детали ниже:");
    console.error(err);
    // Вернем исключение с текстом поясняющим детали ошибки:
    alert("Произошла ошибка при оптравке письма!");
    throw new Error("Запрос завершился неудачно.");
  }
}

async function postRequest(queryParams) {
  // console.log(JSON.stringify(queryParams));
  // Блок try выполнится полностью, если не будет ошибок:
  try {
    // Выполняем запрос:
    const responce = await fetch("files/post-request.php", {
      method: "POST",
      headers: {
        "Content-Type": "application/json",
      },
      body: JSON.stringify(queryParams),
    });
    const res = await responce.json();
    return res; // Возвращаем результат запроса
    // const infoList = await responce.json();
    // return infoList; // Возвращаем результат запроса
    // console.log(responce);
  } catch (err) {
    // Блок catch сработает только если будут какие-то ошибки в блоке try:
    // Выведем в консоли информацию об ошибке:
    console.log("При оптравке письма произошла ошибка, детали ниже:");
    console.error(err);
    // Вернем исключение с текстом поясняющим детали ошибки:
    alert("Произошла ошибка при оптравке письма!");
    throw new Error("Запрос завершился неудачно.");
  }
}

async function postNotification(queryParams) {
  // console.log(JSON.stringify(queryParams));
  // Блок try выполнится полностью, если не будет ошибок:
  try {
    // Выполняем запрос:
    const responce = await fetch("files/post-notification.php", {
      method: "POST",
      headers: {
        "Content-Type": "application/json",
      },
      body: JSON.stringify(queryParams),
    });
    const res = await responce.json();
    return res; // Возвращаем результат запроса
    // console.log(infoList);
  } catch (err) {
    // Блок catch сработает только если будут какие-то ошибки в блоке try:
    // Выведем в консоли информацию об ошибке:
    console.log("При оптравке письма произошла ошибка, детали ниже:");
    console.error(err);
    // Вернем исключение с текстом поясняющим детали ошибки:
    alert("Произошла ошибка при оптравке письма!");
    throw new Error("Запрос завершился неудачно.");
  }
}

// const choiceSendBtn = document.querySelector(".choice__btn");
// choiceSendBtn.addEventListener("click", (event) => {
//   // fetchToPost(queryParams)

//   const arrApartments = fetchToPost(queryParams);
//   console.log(arrApartments);
//   // event.preventDefault();
//   // const footerName = document.querySelector(".footer__input-name");
//   // const footerEmail = document.querySelector(".footer__input-email");
//   // const footerPhone = document.querySelector(".footer__input-phone");
//   // console.log(footerName.value);
//   // console.log(footerEmail.value);
//   // console.log(footerPhone.value);
//   // footerName.value = "";
//   // footerEmail.value = "";
//   // footerPhone.value = "";
//   // return false;
// });

// let postOptions = {
//   // опции для получения списка всех контрагентов
//   function: "getAll",
//   table: "apartments",
//   all: "*",
// };

// const arrApartments = await fetchToDB(options);
// console.log(arrApartments);

// console.log(options);
// await fetchToDB(options);
// требуется подключить скрипт как модуль, иначе await не работает!!!

//--------------------------end Отправка формы на почту----------------------------

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
