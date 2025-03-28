const productCarousel = new Carousel(
  document.getElementById("productCarousel"),
  {
    transition: "slide",
    preload: 3, // Smoother navigation when using lazy loaded images

    Dots: false,
    Thumbs: {
      type: "classic",
      Carousel: {
        dragFree: false,
        slidesPerPage: "auto",
        Navigation: true,

        axis: "x",
        breakpoints: {
          "(min-width: 768px)": {
            axis: "y",
          },
        },
      },
    },
  },
  { Thumbs }
);

Fancybox.bind('[data-fancybox="gallery"]', {
  compact: false,
  idle: false,
  dragToClose: false,
  contentClick: () =>
    window.matchMedia("(max-width: 578px), (max-height: 578px)").matches
      ? "toggleMax"
      : "toggleCover",

  animated: false,
  showClass: false,
  hideClass: false,

  Hash: false,
  Thumbs: false,

  Toolbar: {
    display: {
      left: [],
      middle: [],
      right: ["close"],
    },
  },

  Carousel: {
    transition: "fadeFast",
    preload: 3,
  },

  Images: {
    zoom: false,
    Panzoom: {
      panMode: "mousemove",
      mouseMoveFactor: 1.1,
    },
  },
});
