var swiper = new Swiper(".swiperNews", {
    spaceBetween: 30,
    centeredSlides: true,
    autoplay: {
      delay: 3000,
      disableOnInteraction: false,
    },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
});

var swiper = new Swiper(".swiperSlides", {
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
  loop: true,
});

document.querySelectorAll(".main-container .row").forEach(function (item) {
  let slide = item.querySelector(".product-slide");
  var swiper = new Swiper(slide, {
    slidesPerView: 1,
    spaceBetween: 5,
    breakpoints: {
      "@0.00": {
        slidesPerView: 1,
        spaceBetween: 10,
      },
      "@0.75": {
        slidesPerView: 2,
        spaceBetween: 20,
      },
      "@1.00": {
        slidesPerView: 3,
        spaceBetween: 40,
      },
      "@1.50": {
        slidesPerView: 4,
        spaceBetween: 50,
      },
    },
  });
});

document.querySelectorAll(".item-product").forEach(function (item) {
  let option = item.querySelector(".product-option");
  let preview = item.querySelector(".product-preview");

  var swiper = new Swiper(option, {
    spaceBetween: 10,
    slidesPerView: 4,
    freeMode: true,
    watchSlidesProgress: true,
  });
  
  var swiper2 = new Swiper(preview, {
    spaceBetween: 10,
    thumbs: {
      swiper: swiper,
    },
    allowTouchMove: false
  });
});

var detailPreview = new Swiper(".detail-preview", {
  spaceBetween: 10,
  slidesPerView: 4,
  freeMode: true,
  watchSlidesProgress: true,
});

var detailImage = new Swiper(".detail-image", {
  spaceBetween: 10,
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
  thumbs: {
    swiper: detailPreview,
  },
});