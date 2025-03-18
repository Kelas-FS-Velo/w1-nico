<template>
  <header class="relative top-0 left-0 w-full flex items-center z-10 bg-white">
    <div class="w-full">
      <div class="flex item-center justify-between relative w-full">
        <div class="px-4">
          <!-- <a href="#home" class="font-bold text-lg text-primary block py-6"
            >Nico</a
          > -->
          <nuxt-link class="font-bold text-lg text-primary block py-6" to="/"
            >  {{ profile.name }}</nuxt-link
          >
        </div>
        <div class="flex items-center px-4">
          <button
            id="hamburger"
            name="hamburger"
            type="button"
            class="block absolute right-4 lg:hidden"
          >
            <span
              class="origin-bottom-left hamburger-line transition duration-300 ease-in-out"
            ></span>
            <span
              class="hamburger-line transition duration-300 ease-in-out"
            ></span>
            <span
              class="origin-top-left hamburger-line transition duration-300 ease-in-out"
            ></span>
          </button>
          <nav
            id="nav-menu"
            class="hidden absolute py-5 bg-white shadow-lg rounded-lg max-w-[250px] w-full right-4 top-full lg:block lg:static lg:bg-transparent lg:max-w-full lg:shadow-none lg:rounded-none"
          >
            <ul class="block lg:flex">
              <li class="group">
                <!-- <a
                  href="#home"
                  class="text-base text-dark py-2 mx-8 flex group-hover:text-primary"
                  >Profile</a
                > -->
                <nuxt-link
                  class="text-base text-dark py-2 mx-8 flex group-hover:text-primary"
                  to="/profile"
                  >Profile</nuxt-link
                >
              </li>
              <li class="group">
                <a
                  href="#about"
                  class="text-base text-dark py-2 mx-8 flex group-hover:text-primary"
                  >About</a
                >
              </li>

              <li class="group">
                <a
                  href="#portfolio"
                  class="text-base text-dark py-2 mx-8 flex group-hover:text-primary"
                  >Portfolio</a
                >
              </li>

              <li class="group">
                <a
                  href="#blog"
                  class="text-base text-dark py-2 mx-8 flex group-hover:text-primary"
                  >Blog</a
                >
              </li>
              <li class="group">
                <a
                  href="#contact"
                  class="text-base text-dark py-2 mx-8 flex group-hover:text-primary"
                  >Contact</a
                >
              </li>
            </ul>
          </nav>
        </div>
      </div>
    </div>
  </header>
  <!-- header end -->
  <!-- header start -->

  <section id="about" class="pt-36 pb-32 mx-8">
    <div class="container">
      <div class="flex flex-wrap">
        <div class="w-full px-4 mb-10 lg:w-1/2">
          <h4 class="font-bold uppercase text-primary text-lg mb-3">
            Tentang saya
          </h4>
          <h2 class="font-bold text-dark text-3xl mb-5 max-w-md lg:text-4xl">
            Nico, Yuk belajar web programming
          </h2>
          <p class="font-medium text-base text-secondary max-w-xl lg:text-lg">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil eos
            ipsa ipsam nisi voluptates consequuntur dignissimos fuga facilis
            totam voluptas rem iusto illo delectus nemo explicabo, qui nulla.
            Repudiandae, expedita!
          </p>
        </div>
        <div class="w-full px-4 lg:w-1/2">
          <h3
            class="font-semibold text-dark text-2xl mb-4 lg:text-3xl lg:pt-10"
          >
            Mari berteman
          </h3>
          <p class="font-medium text-secondary text-base mb-6 lg:text-lg">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta quod
            animi itaque facere magnam vel sunt ex rerum molestiae temporibus?
            Est ipsa explicabo quis ducimus ipsam facilis, reiciendis cum
            excepturi.
          </p>
          <div class="flex items-center">
            <a
              href="#"
              class="w-9 h-9 mr-3 rounded-full flex justify-center items-center border border-slate-300 hover:bg-primary hover:border-primary hover:text-white text-red-500"
            >
              <svg
                role="img"
                class="fill-current"
                width="20"
                viewBox="0 0 24 24"
                xmlns="http://www.w3.org/2000/svg"
              >
                <title>YouTube</title>
                <path
                  d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"
                />
              </svg>
            </a>
            <a
              href="#"
              class="w-9 h-9 mr-3 rounded-full flex justify-center items-center border border-slate-300 hover:bg-primary hover:border-primary hover:text-white"
            >
              <svg
                role="img"
                class="fill-current"
                width="20"
                viewBox="0 0 24 24"
                xmlns="http://www.w3.org/2000/svg"
              >
                <title>Instagram</title>
                <path
                  d="M7.0301.084c-1.2768.0602-2.1487.264-2.911.5634-.7888.3075-1.4575.72-2.1228 1.3877-.6652.6677-1.075 1.3368-1.3802 2.127-.2954.7638-.4956 1.6365-.552 2.914-.0564 1.2775-.0689 1.6882-.0626 4.947.0062 3.2586.0206 3.6671.0825 4.9473.061 1.2765.264 2.1482.5635 2.9107.308.7889.72 1.4573 1.388 2.1228.6679.6655 1.3365 1.0743 2.1285 1.38.7632.295 1.6361.4961 2.9134.552 1.2773.056 1.6884.069 4.9462.0627 3.2578-.0062 3.668-.0207 4.9478-.0814 1.28-.0607 2.147-.2652 2.9098-.5633.7889-.3086 1.4578-.72 2.1228-1.3881.665-.6682 1.0745-1.3378 1.3795-2.1284.2957-.7632.4966-1.636.552-2.9124.056-1.2809.0692-1.6898.063-4.948-.0063-3.2583-.021-3.6668-.0817-4.9465-.0607-1.2797-.264-2.1487-.5633-2.9117-.3084-.7889-.72-1.4568-1.3876-2.1228C21.2982 1.33 20.628.9208 19.8378.6165 19.074.321 18.2017.1197 16.9244.0645 15.6471.0093 15.236-.005 11.977.0014 8.718.0076 8.31.0215 7.0301.0839m.1402 21.6932c-1.17-.0509-1.8053-.2453-2.2287-.408-.5606-.216-.96-.4771-1.3819-.895-.422-.4178-.6811-.8186-.9-1.378-.1644-.4234-.3624-1.058-.4171-2.228-.0595-1.2645-.072-1.6442-.079-4.848-.007-3.2037.0053-3.583.0607-4.848.05-1.169.2456-1.805.408-2.2282.216-.5613.4762-.96.895-1.3816.4188-.4217.8184-.6814 1.3783-.9003.423-.1651 1.0575-.3614 2.227-.4171 1.2655-.06 1.6447-.072 4.848-.079 3.2033-.007 3.5835.005 4.8495.0608 1.169.0508 1.8053.2445 2.228.408.5608.216.96.4754 1.3816.895.4217.4194.6816.8176.9005 1.3787.1653.4217.3617 1.056.4169 2.2263.0602 1.2655.0739 1.645.0796 4.848.0058 3.203-.0055 3.5834-.061 4.848-.051 1.17-.245 1.8055-.408 2.2294-.216.5604-.4763.96-.8954 1.3814-.419.4215-.8181.6811-1.3783.9-.4224.1649-1.0577.3617-2.2262.4174-1.2656.0595-1.6448.072-4.8493.079-3.2045.007-3.5825-.006-4.848-.0608M16.953 5.5864A1.44 1.44 0 1 0 18.39 4.144a1.44 1.44 0 0 0-1.437 1.4424M5.8385 12.012c.0067 3.4032 2.7706 6.1557 6.173 6.1493 3.4026-.0065 6.157-2.7701 6.1506-6.1733-.0065-3.4032-2.771-6.1565-6.174-6.1498-3.403.0067-6.156 2.771-6.1496 6.1738M8 12.0077a4 4 0 1 1 4.008 3.9921A3.9996 3.9996 0 0 1 8 12.0077"
                />
              </svg>
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- portfolio start -->
  <section id="portfolio" class="pt-36 pb-16 bg-slate-100 justify-center flex">
    <div class="container">
      <div
        class="w-full px-4 flex flex-wrap justify-center xl:w-10/12 xl:mx-auto"
      >
        <div class="w-full px-4">
          <div class="mx-auto text-center mb-16">
            <h4 class="font-bold text-5xl text-primary mb-2">Portfolio</h4>
            <h2
              class="font-bold text-gray-500 text-3xl mb-4 sm:text-4xl lg:text-5xl"
            >
              yang pernah bekerja sama
            </h2>
            <p class="font-medium text-secondary text-md md:text-lg">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi
              non incidunt voluptates nesciunt esse perspiciatis ea id nihil
              neque. Mollitia pariatur qui debitis laborum doloribus ad earum
              ducimus hic repudiandae!
            </p>
          </div>
        </div>
        <div class="mb-12 p-4 md:w-1/2">
          <div class="rounded-md shadow-md overflow-hidden bg-white">
            <img
              src="assets/img/programming.jpeg"
              alt="portfolio"
              width="w-full"
            />
            <h3 class="font-semibold text-dark text-xl text-center">
              Sertifikat velotek
            </h3>
            <p class="font-medium text-base text-secondary p-4">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem
              debitis eligendi, ad voluptatibus perspiciatis sit numquam fuga
            </p>
          </div>
        </div>
        <div class="mb-12 p-4 md:w-1/2">
          <div class="rounded-md shadow-md overflow-hidden bg-white">
            <img
              src="assets/img/programming.jpeg"
              alt="portfolio"
              width="w-full"
            />
            <h3 class="font-semibold text-dark text-xl text-center">
              Sertifikat {{ profile.job_title }}
            </h3>
            <p class="font-medium text-base text-secondary p-4">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem
              debitis eligendi, ad voluptatibus perspiciatis sit numquam fuga
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- portfolio end -->
  <Blog/>

  <Footer ></Footer>

</template>

<!-- <script>
export default {
  name: "IndexPage",
};
</script> -->
<script setup>
import { ref } from 'vue'


// Fetch profile from API
const { data: profile } = await useFetch('/profile', { baseURL: 'http://127.0.0.1:8000' })
</script>
