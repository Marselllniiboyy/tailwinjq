<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="./src/output.css" rel="stylesheet">
</head>
<body>
    <div class="bg-gray-900">
  <header class="absolute inset-x-0 top-0 z-50">
    <nav aria-label="Global" class="flex items-center justify-between p-6 lg:px-8">
      <div class="flex lg:flex-1">
        <a href="#" class="-m-1.5 p-1.5">
          <span class="sr-only">Your Company</span>
          <img src="https://tailwindcss.com/plus-assets/img/logos/mark.svg?color=indigo&shade=500" alt="" class="h-8 w-auto" />
        </a>
      </div>
      <div class="flex lg:hidden">
        <button type="button" command="show-modal" commandfor="mobile-menu" class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-gray-200">
          <span class="sr-only">Open main menu</span>
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" data-slot="icon" aria-hidden="true" class="size-6">
            <path d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" stroke-linecap="round" stroke-linejoin="round" />
          </svg>
        </button>
      </div>
      <div class="hidden lg:flex lg:gap-x-12">
        <a href="index.php" class="text-sm/6 font-semibold text-white">Product</a>
        <a href="#" class="text-sm/6 font-semibold text-white">Features</a>
        <a href="#" class="text-sm/6 font-semibold text-white">Marketplace</a>
        <a href="company.php" class="text-sm/6 font-semibold text-white">Company</a>
        <a href="blog.php" class="text-sm/6 font-semibold text-white">Blog</a>
        <a href="jq.php" class="text-sm/6 font-semibold text-white">Calculator</a>
      </div>
      <div class="hidden lg:flex lg:flex-1 lg:justify-end">
        <a href="login.php" class="text-sm/6 font-semibold text-white">Log in <span aria-hidden="true">&rarr;</span></a>
      </div>
    </nav>
    <el-dialog>
      <dialog id="mobile-menu" class="backdrop:bg-transparent lg:hidden">
        <div tabindex="0" class="fixed inset-0 focus:outline-none">
          <el-dialog-panel class="fixed inset-y-0 right-0 z-50 w-full overflow-y-auto bg-gray-900 p-6 sm:max-w-sm sm:ring-1 sm:ring-gray-100/10">
            <div class="flex items-center justify-between">
              <a href="#" class="-m-1.5 p-1.5">
                <span class="sr-only">Your Company</span>
                <img src="https://tailwindcss.com/plus-assets/img/logos/mark.svg?color=indigo&shade=500" alt="" class="h-8 w-auto" />
              </a>
              <button type="button" command="close" commandfor="mobile-menu" class="-m-2.5 rounded-md p-2.5 text-gray-200">
                <span class="sr-only">Close menu</span>
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" data-slot="icon" aria-hidden="true" class="size-6">
                  <path d="M6 18 18 6M6 6l12 12" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
              </button>
            </div>
            <div class="mt-6 flow-root">
              <div class="-my-6 divide-y divide-white/10">
                <div class="space-y-2 py-6">
                  <a href="#" class="-mx-3 block rounded-lg px-3 py-2 text-base/7 font-semibold text-white hover:bg-white/5">Product</a>
                  <a href="#" class="-mx-3 block rounded-lg px-3 py-2 text-base/7 font-semibold text-white hover:bg-white/5">Features</a>
                  <a href="#" class="-mx-3 block rounded-lg px-3 py-2 text-base/7 font-semibold text-white hover:bg-white/5">Marketplace</a>
                  <a href="#" class="-mx-3 block rounded-lg px-3 py-2 text-base/7 font-semibold text-white hover:bg-white/5">Company</a>
                </div>
                <div class="py-6">
                  <a href="#" class="-mx-3 block rounded-lg px-3 py-2.5 text-base/7 font-semibold text-white hover:bg-white/5">Log in</a>
                </div>
              </div>
            </div>
          </el-dialog-panel>
        </div>
      </dialog>
    </el-dialog>
  </header>
  </div>
  <div class="bg-gray-900 py-24 sm:py-32">
  <div class="mx-auto max-w-7xl px-6 lg:px-8">
    <div class="mx-auto max-w-2xl lg:mx-0">
      <h2 class="text-4xl font-semibold tracking-tight text-pretty text-white sm:text-5xl">From the blog</h2>
      <p class="mt-2 text-lg/8 text-gray-300">Learn how to grow your business with our expert advice.</p>
    </div>
    <div class="mx-auto mt-10 grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 border-t border-gray-700 pt-10 sm:mt-16 sm:pt-16 lg:mx-0 lg:max-w-none lg:grid-cols-3">
      <article class="flex max-w-xl flex-col items-start justify-between">
        <div class="flex items-center gap-x-4 text-xs">
          <time datetime="2020-03-16" class="text-gray-400">Mar 16, 2020</time>
          <a href="#" class="relative z-10 rounded-full bg-gray-800/60 px-3 py-1.5 font-medium text-gray-300 hover:bg-gray-800">Marketing</a>
        </div>
        <div class="group relative grow">
          <h3 class="mt-3 text-lg/6 font-semibold text-white group-hover:text-gray-300">
            <a href="#">
              <span class="absolute inset-0"></span>
              Boost your conversion rate
            </a>
          </h3>
          <p class="mt-5 line-clamp-3 text-sm/6 text-gray-400">Illo sint voluptas. Error voluptates culpa eligendi. Hic vel totam vitae illo. Non aliquid explicabo necessitatibus unde. Sed exercitationem placeat consectetur nulla deserunt vel. Iusto corrupti dicta.</p>
        </div>
        <div class="relative mt-8 flex items-center gap-x-4 justify-self-end">
          <img src="https://images.unsplash.com/photo-1519244703995-f4e0f30006d5?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="" class="size-10 rounded-full bg-gray-800" />
          <div class="text-sm/6">
            <p class="font-semibold text-white">
              <a href="#">
                <span class="absolute inset-0"></span>
                Michael Foster
              </a>
            </p>
            <p class="text-gray-400">Co-Founder / CTO</p>
          </div>
        </div>
      </article>
      <article class="flex max-w-xl flex-col items-start justify-between">
        <div class="flex items-center gap-x-4 text-xs">
          <time datetime="2020-03-10" class="text-gray-400">Mar 10, 2020</time>
          <a href="#" class="relative z-10 rounded-full bg-gray-800/60 px-3 py-1.5 font-medium text-gray-300 hover:bg-gray-800">Sales</a>
        </div>
        <div class="group relative grow">
          <h3 class="mt-3 text-lg/6 font-semibold text-white group-hover:text-gray-300">
            <a href="#">
              <span class="absolute inset-0"></span>
              How to use search engine optimization to drive sales
            </a>
          </h3>
          <p class="mt-5 line-clamp-3 text-sm/6 text-gray-400">Optio cum necessitatibus dolor voluptatum provident commodi et. Qui aperiam fugiat nemo cumque.</p>
        </div>
        <div class="relative mt-8 flex items-center gap-x-4 justify-self-end">
          <img src="https://images.unsplash.com/photo-1517841905240-472988babdf9?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="" class="size-10 rounded-full bg-gray-800" />
          <div class="text-sm/6">
            <p class="font-semibold text-white">
              <a href="#">
                <span class="absolute inset-0"></span>
                Lindsay Walton
              </a>
            </p>
            <p class="text-gray-400">Front-end Developer</p>
          </div>
        </div>
      </article>
      <article class="flex max-w-xl flex-col items-start justify-between">
        <div class="flex items-center gap-x-4 text-xs">
          <time datetime="2020-02-12" class="text-gray-400">Feb 12, 2020</time>
          <a href="#" class="relative z-10 rounded-full bg-gray-800/60 px-3 py-1.5 font-medium text-gray-300 hover:bg-gray-800">Business</a>
        </div>
        <div class="group relative grow">
          <h3 class="mt-3 text-lg/6 font-semibold text-white group-hover:text-gray-300">
            <a href="#">
              <span class="absolute inset-0"></span>
              Improve your customer experience
            </a>
          </h3>
          <p class="mt-5 line-clamp-3 text-sm/6 text-gray-400">Cupiditate maiores ullam eveniet adipisci in doloribus nulla minus. Voluptas iusto libero adipisci rem et corporis. Nostrud sint anim sunt aliqua. Nulla eu labore irure incididunt velit cillum quis magna dolore.</p>
        </div>
        <div class="relative mt-8 flex items-center gap-x-4 justify-self-end">
          <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="" class="size-10 rounded-full bg-gray-800" />
          <div class="text-sm/6">
            <p class="font-semibold text-white">
              <a href="#">
                <span class="absolute inset-0"></span>
                Tom Cook
              </a>
            </p>
            <p class="text-gray-400">Director of Product</p>
          </div>
        </div>
      </article>
    </div>
  </div>
</div>

</body>
</html>