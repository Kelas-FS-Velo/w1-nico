<template>
    <section id="blog" class="pt-36 pb-32 bg-white">
    <div class="container mx-auto">
      <div class="w-full px-4">
        <div class="mx-auto text-center mb-16">
          <h4 class="font-bold text-5xl text-primary mb-2">Blog</h4>
          <h2
            class="font-semibold text-dark text-3xl mb-4 sm:text-4xl lg:text-5xl"
          >
            Tulisan terkini
          </h2>
          <p class="font-medium text-secondary text-md md:text-lg">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi non
            incidunt voluptates nesciunt esse perspiciatis ea id nihil neque.
            Mollitia pariatur qui debitis laborum doloribus ad earum ducimus hic
            repudiandae!
          </p>
        </div>
      </div>
      <div class="flex flex-wrap">
        <div class="w-full px-4 lg:w-1/2 xl:w-1/3">
          <div class="bg-white rounded-xl shadow-lg overflow-hidden mb-10">
            <img
              src="assets/img/programming.jpeg"
              alt="programming"
              class="w-full"
            />
            <div class="py-8 px-6">
              <h3>
                <a
                  href="#"
                  class="block mb-3 font-semibold text-xl text-dark hover:text-primary truncate"
                  >tips belajar programming</a
                >
              </h3>
              <p class="font-medium text-base text-secondary mb-6">
                Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                Voluptatum, aperiam ad id suscipit quidem molestias
                reprehenderit rem eligendi, inventore, optio accusantium
                delectus accusamus cupiditate dolor mollitia molestiae! Nam,
                illo aperiam?
              </p>
              <a
                href="#"
                class="font-medium text-sm bg-primary py-2 px-4 rounded-md hover:opacity-80 text-blue-500"
                >Baca selengkapnya</a
              >
            </div>
          </div>
        </div>
        <div class="w-full px-4 lg:w-1/2 xl:w-1/3">
          <div class="bg-white rounded-xl shadow-lg overflow-hidden mb-10">
            <img
              src="assets/img/programming.jpeg"
              alt="programming"
              class="w-full"
            />
            <div class="py-8 px-6">
              <h3>
                <a
                  href="#"
                  class="block mb-3 font-semibold text-xl text-dark hover:text-primary truncate"
                  >{{ profile.job_title }}</a
                >
              </h3>
              <p class="font-medium text-base text-secondary mb-6">
                Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                Voluptatum, aperiam ad id suscipit quidem molestias
                reprehenderit rem eligendi, inventore, optio accusantium
                delectus accusamus cupiditate dolor mollitia molestiae! Nam,
                illo aperiam?
              </p>
              <a
                href="#"
                class="font-medium text-sm bg-primary py-2 px-4 rounded-md hover:opacity-80 text-blue-500"
                >Baca selengkapnya</a
              >
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</template>
<script setup>
import { ref } from 'vue'


// Fetch profile from API
const { data: profile } = await useFetch('/profile', { baseURL: 'http://127.0.0.1:8000' })
</script>