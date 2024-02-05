<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.js"></script>
    <script type="text/javascript" src="https://platform-api.sharethis.com/js/sharethis.js#property=64faf5e1a79d9e0019880d68&product=inline-share-buttons&source=platform" async="async"></script>
    <script>
      let table = new DataTable('#myTable');

      AOS.init({
        once: true,
      });

      // swipper hero
      var swiper = new Swiper(".swiper-container", {
      effect: "fade",
      loop: true,
      autoplay: {
          delay: 1000,
          disableOnInteraction: false,
      }
      });

      var swiper = new Swiper(".mySwiperTesti", {
      spaceBetween: 20,
      slidesPerView: 4,
      loop: true,
      pagination: {
        el: ".swiper-pagination",
        dynamicBullets: true,
      },
      autoplay: {
        delay: 1000
      },
      breakpoints: {
            320: {
                slidesPerView: 1,
            },
            640: {
                slidesPerView: 1,
            },
            768: {
                slidesPerView: 2,
            },
            1024: {
                slidesPerView: 3,
            },
        }
    });

    
    </script>