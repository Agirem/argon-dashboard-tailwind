<?php
include('../build/header.php');
?>
<main class="relative h-full max-h-screen transition-all duration-200 ease-in-out xl:ml-68 rounded-xl">
  <!-- Navbar -->
  <nav
    class="relative flex flex-wrap items-center justify-between px-0 py-2 mx-6 transition-all ease-in shadow-none duration-250 rounded-2xl lg:flex-nowrap lg:justify-start"
    navbar-main navbar-scroll="false">
    <div class="flex items-center justify-between w-full px-4 py-1 mx-auto flex-wrap-inherit">
      <nav>
        <!-- breadcrumb -->
        <ol class="flex flex-wrap pt-1 mr-12 bg-transparent rounded-lg sm:mr-16">
          <li class="text-sm leading-normal">
            <a class="text-white opacity-50" href="javascript:;">Pages</a>
          </li>
          <li
            class="text-sm pl-2 capitalize leading-normal text-white before:float-left before:pr-2 before:text-white before:content-['/']"
            aria-current="page">Tableau de Bord</li>
        </ol>
        <h6 class="mb-0 font-bold text-white capitalize">Tableau de Bord</h6>
      </nav>

      <div class="flex items-center mt-2 grow sm:mt-0 sm:mr-6 md:mr-0 lg:flex lg:basis-auto">
        <div class="flex items-center md:ml-auto md:pr-4">
          <div class="relative flex flex-wrap items-stretch w-full transition-all rounded-lg ease">
            <span
              class="text-sm ease leading-5.6 absolute z-50 -ml-px flex h-full items-center whitespace-nowrap rounded-lg rounded-tr-none rounded-br-none border border-r-0 border-transparent bg-transparent py-2 px-2.5 text-center font-normal text-slate-500 transition-all">
              <i class="fas fa-search"></i>
            </span>
            <input type="text"
              class="pl-9 text-sm focus:shadow-primary-outline ease w-1/100 leading-5.6 relative -ml-px block min-w-0 flex-auto rounded-lg border border-solid border-gray-300 dark:bg-slate-850 dark:text-white bg-white bg-clip-padding py-2 pr-3 text-gray-700 transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none focus:transition-shadow"
              placeholder="Rechercher..." />
          </div>
        </div>
        <ul class="flex flex-row justify-end pl-0 mb-0 list-none md-max:w-full">

          <li class="flex items-center pl-4 xl:hidden">
            <a href="javascript:;" class="block p-0 text-sm text-white transition-all ease-nav-brand" sidenav-trigger>
              <div class="w-4.5 overflow-hidden">
                <i class="ease mb-0.75 relative block h-0.5 rounded-sm bg-white transition-all"></i>
                <i class="ease mb-0.75 relative block h-0.5 rounded-sm bg-white transition-all"></i>
                <i class="ease relative block h-0.5 rounded-sm bg-white transition-all"></i>
              </div>
            </a>
          </li>


          <!-- notifications -->

          <li class="relative flex items-center pr-2">
            <p class="hidden transform-dropdown-show"></p>
            <a href="javascript:;" class="block p-0 text-sm text-white transition-all ease-nav-brand" dropdown-trigger
              aria-expanded="false">
              <i class="cursor-pointer fa fa-bell"></i>
            </a>

            <ul dropdown-menu
              class="text-sm transform-dropdown before:font-awesome before:leading-default before:duration-350 before:ease lg:shadow-3xl duration-250 min-w-44 before:sm:right-8 before:text-5.5 pointer-events-none absolute right-0 top-0 z-50 origin-top list-none rounded-lg border-0 border-solid border-transparent dark:shadow-dark-xl dark:bg-slate-850 bg-white bg-clip-padding px-2 py-4 text-left text-slate-500 opacity-0 transition-all before:absolute before:right-2 before:left-auto before:top-0 before:z-50 before:inline-block before:font-normal before:text-white before:antialiased before:transition-all before:content-['\f0d8'] sm:-mr-6 lg:absolute lg:right-0 lg:left-auto lg:mt-2 lg:block lg:cursor-pointer">
              <!-- add show class on dropdown open js -->
              <li class="relative mb-2">
                <a class="dark:hover:bg-slate-900 ease py-1.2 clear-both block w-full whitespace-nowrap rounded-lg bg-transparent px-4 duration-300 hover:bg-gray-200 hover:text-slate-700 lg:transition-colors"
                  href="javascript:;">
                  <div class="flex py-1">
                    <div class="my-auto">
                      <img src="./assets/img/team-2.jpg"
                        class="inline-flex items-center justify-center mr-4 text-sm text-white h-9 w-9 max-w-none rounded-xl" />
                    </div>
                    <div class="flex flex-col justify-center">
                      <h6 class="mb-1 text-sm font-normal leading-normal dark:text-white"><span
                          class="font-semibold">New message</span> from Laur</h6>
                      <p class="mb-0 text-xs leading-tight text-slate-400 dark:text-white/80">
                        <i class="mr-1 fa fa-clock"></i>
                        13 minutes ago
                      </p>
                    </div>
                  </div>
                </a>
              </li>

              <li class="relative mb-2">
                <a class="dark:hover:bg-slate-900 ease py-1.2 clear-both block w-full whitespace-nowrap rounded-lg px-4 transition-colors duration-300 hover:bg-gray-200 hover:text-slate-700"
                  href="javascript:;">
                  <div class="flex py-1">
                    <div class="my-auto">
                      <img src="./assets/img/small-logos/logo-spotify.svg"
                        class="inline-flex items-center justify-center mr-4 text-sm text-white bg-gradient-to-tl from-zinc-800 to-zinc-700 dark:bg-gradient-to-tl dark:from-slate-750 dark:to-gray-850 h-9 w-9 max-w-none rounded-xl" />
                    </div>
                    <div class="flex flex-col justify-center">
                      <h6 class="mb-1 text-sm font-normal leading-normal dark:text-white"><span
                          class="font-semibold">New album</span> by Travis Scott</h6>
                      <p class="mb-0 text-xs leading-tight text-slate-400 dark:text-white/80">
                        <i class="mr-1 fa fa-clock"></i>
                        1 day
                      </p>
                    </div>
                  </div>
                </a>
              </li>

              <li class="relative">
                <a class="dark:hover:bg-slate-900 ease py-1.2 clear-both block w-full whitespace-nowrap rounded-lg px-4 transition-colors duration-300 hover:bg-gray-200 hover:text-slate-700"
                  href="javascript:;">
                  <div class="flex py-1">
                    <div
                      class="inline-flex items-center justify-center my-auto mr-4 text-sm text-white transition-all duration-200 ease-nav-brand bg-gradient-to-tl from-slate-600 to-slate-300 h-9 w-9 rounded-xl">
                      <svg width="12px" height="12px" viewBox="0 0 43 36" version="1.1"
                        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                        <title>credit-card</title>
                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                          <g transform="translate(-2169.000000, -745.000000)" fill="#FFFFFF" fill-rule="nonzero">
                            <g transform="translate(1716.000000, 291.000000)">
                              <g transform="translate(453.000000, 454.000000)">
                                <path class="color-background"
                                  d="M43,10.7482083 L43,3.58333333 C43,1.60354167 41.3964583,0 39.4166667,0 L3.58333333,0 C1.60354167,0 0,1.60354167 0,3.58333333 L0,10.7482083 L43,10.7482083 Z"
                                  opacity="0.593633743"></path>
                                <path class="color-background"
                                  d="M0,16.125 L0,32.25 C0,34.2297917 1.60354167,35.8333333 3.58333333,35.8333333 L39.4166667,35.8333333 C41.3964583,35.8333333 43,34.2297917 43,32.25 L43,16.125 L0,16.125 Z M19.7083333,26.875 L7.16666667,26.875 L7.16666667,23.2916667 L19.7083333,23.2916667 L19.7083333,26.875 Z M35.8333333,26.875 L28.6666667,26.875 L28.6666667,23.2916667 L35.8333333,23.2916667 L35.8333333,26.875 Z">
                                </path>
                              </g>
                            </g>
                          </g>
                        </g>
                      </svg>
                    </div>
                    <div class="flex flex-col justify-center">
                      <h6 class="mb-1 text-sm font-normal leading-normal dark:text-white">Payment successfully completed
                      </h6>
                      <p class="mb-0 text-xs leading-tight text-slate-400 dark:text-white/80">
                        <i class="mr-1 fa fa-clock"></i>
                        2 days
                      </p>
                    </div>
                  </div>
                </a>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- end Navbar -->

  <!-- cards -->
  <div class="w-full px-6 py-6 mx-auto">
    <!-- row 1 -->
    <div class="flex flex-wrap -mx-3">
      <!-- card1 -->
      <div class="w-full max-w-full px-3 mb-6 sm:w-1/2 sm:flex-none xl:mb-0 xl:w-1/4">
        <div
          class="relative flex flex-col min-w-0 break-words bg-white shadow-xl dark:bg-slate-850 dark:shadow-dark-xl rounded-2xl bg-clip-border">
          <div class="flex-auto p-4">
            <div class="flex flex-row -mx-3">
              <div class="flex-none w-2/3 max-w-full px-3">
                <div>
                  <p
                    class="mb-0 font-sans text-sm font-semibold leading-normal uppercase dark:text-white dark:opacity-60">
                    Encaissement du jour</p>
                  <h5 class="mb-2 font-bold dark:text-white">$53,000</h5>
                  <p class="mb-0 dark:text-white dark:opacity-60">
                    dont <span class="text-sm font-bold leading-normal text-emerald-500">+55%</span>
                    en Cash
                  </p>
                </div>
              </div>
              <div class="px-3 text-right basis-1/3">
                <div
                  class="inline-block w-12 h-12 text-center rounded-circle bg-gradient-to-tl from-blue-500 to-violet-500">
                  <i class="ni leading-none ni-money-coins text-lg relative top-3.5 text-white"></i>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- card2 -->
      <div class="w-full max-w-full px-3 mb-6 sm:w-1/2 sm:flex-none xl:mb-0 xl:w-1/4">
        <div
          class="relative flex flex-col min-w-0 break-words bg-white shadow-xl dark:bg-slate-850 dark:shadow-dark-xl rounded-2xl bg-clip-border">
          <div class="flex-auto p-4">
            <div class="flex flex-row -mx-3">
              <div class="flex-none w-2/3 max-w-full px-3">
                <div>
                  <p
                    class="mb-0 font-sans text-sm font-semibold leading-normal uppercase dark:text-white dark:opacity-60">
                    Réservation confirmés</p>
                  <h5 class="mb-2 font-bold dark:text-white">2,300</h5>
                  <p class="mb-0 dark:text-white dark:opacity-60">
                    Dont <span class="text-sm font-bold leading-normal text-emerald-500">+3%</span>
                    voyages prévus aujourd'hui
                  </p>
                </div>
              </div>
              <div class="px-3 text-right basis-1/3">
                <div
                  class="inline-block w-12 h-12 text-center rounded-circle bg-gradient-to-tl from-red-600 to-orange-600">
                  <i class="ni leading-none ni-world text-lg relative top-3.5 text-white"></i>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- card3 -->
      <div class="w-full max-w-full px-3 mb-6 sm:w-1/2 sm:flex-none xl:mb-0 xl:w-1/4">
        <div
          class="relative flex flex-col min-w-0 break-words bg-white shadow-xl dark:bg-slate-850 dark:shadow-dark-xl rounded-2xl bg-clip-border">
          <div class="flex-auto p-4">
            <div class="flex flex-row -mx-3">
              <div class="flex-none w-2/3 max-w-full px-3">
                <div>
                  <p
                    class="mb-0 font-sans text-sm font-semibold leading-normal uppercase dark:text-white dark:opacity-60">
                    Passagers absents</p>
                  <h5 class="mb-2 font-bold dark:text-white">+3,462</h5>
                  <p class="mb-0 dark:text-white dark:opacity-60">
                    Aujourd'hui
                  </p>
                </div>
              </div>
              <div class="px-3 text-right basis-1/3">
                <div
                  class="inline-block w-12 h-12 text-center rounded-circle bg-gradient-to-tl from-emerald-500 to-teal-400">
                  <i class="ni leading-none ni-paper-diploma text-lg relative top-3.5 text-white"></i>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- card4 -->
      <div class="w-full max-w-full px-3 sm:w-1/2 sm:flex-none xl:w-1/4">
        <div
          class="relative flex flex-col min-w-0 break-words bg-white shadow-xl dark:bg-slate-850 dark:shadow-dark-xl rounded-2xl bg-clip-border">
          <div class="flex-auto p-4">
            <div class="flex flex-row -mx-3">
              <div class="flex-none w-2/3 max-w-full px-3">
                <div>
                  <p
                    class="mb-0 font-sans text-sm font-semibold leading-normal uppercase dark:text-white dark:opacity-60">
                    réservations totales </p>
                  <h5 class="mb-2 font-bold dark:text-white">$103,430</h5>
                  <p class="mb-0 dark:text-white dark:opacity-60">
                    Depuis la mise en place du système
                  </p>
                </div>
              </div>
              <div class="px-3 text-right basis-1/3">
                <div
                  class="inline-block w-12 h-12 text-center rounded-circle bg-gradient-to-tl from-orange-500 to-yellow-500">
                  <i class="ni leading-none ni-cart text-lg relative top-3.5 text-white"></i>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- cards row 2 -->
    <div class="flex flex-row mt-6 -mx-3">
      <div class="w-1/2 max-w-1/2 px-3 mt-0 lg:w-6/12 lg:flex-none">
        <div
          class="border-black/12.5 dark:bg-slate-850 dark:shadow-dark-xl shadow-xl relative z-20 flex min-w-0 flex-col break-words rounded-2xl border-0 border-solid bg-white bg-clip-border">
          <div class="border-black/12.5 mb-0 rounded-t-2xl border-b-0 border-solid p-6 pt-4 pb-0">
            <h6 class="capitalize dark:text-white">Nouvelle réservation</h6>
          </div>

          <div class="flex p-4">
            <div class="flex items-center justify-start space pb-5">
              <label for="places" class="mx-4">Date</label>
              <input class="w-42 border-2 rounded-lg h-12 pl-2 border-blue-500" type="date" name="" id=""
                placeholder="Num. CNI/Passeport" required />
            </div>
            <div class="flex items-center justify-start space pb-5">
              <label for="places" class="mx-4">Heure</label>
              <input class="w-42 border-2 rounded-lg h-12 pl-4 border-blue-500" type="date" name="" id=""
                placeholder="Num. CNI/Passeport" required />

            </div>
          </div>

          <div class="flex p-4">
            <div class="flex items-center justify-start space pb-5">
              <label for="places">Nom complet</label>
              <input class="w-42 border-2 rounded-lg h-12 pl-4 border-blue-500 ml-4" type="text" name="" id=""
                placeholder="Num. CNI/Passeport" required />
            </div>
          </div>

          <div class="flex p-4">
            <div class="flex items-center justify-start space pb-5">
              <label for="places">CNI ou Passeport</label>
              <input class="w-42 border-2 rounded-lg h-12 pl-4 border-blue-500 ml-4" type="text" name="" id=""
                placeholder="Num. CNI/Passeport" required />

            </div>
          </div>

          <div class="flex p-4">
            <div class="flex items-center justify-start space pb-5">
              <label for="places">Téléphone</label>
              <input class="w-42 border-2 rounded-lg h-12 pl-4 border-blue-500 ml-4" type="text" name="" id=""
                placeholder="Num. CNI/Passeport" required />
            </div>
          </div>

          <div class="flex p-4 justify-center">
            <div class="flex items-center justify-center space pb-5">
              <input type="radio" id="contactChoice1" name="contact" value="email" class="mr-1" />
              <label for="contactChoice1" class="mr-4">Cash</label>

              <input type="radio" id="contactChoice2" name="contact" value="telephone" class="mr-1" />
              <label for="contactChoice2">Mobile Money</label>
            </div>
          </div>

          <div class="flex p-4 justify-center">
            <div class="flex items-center justify-center space pb-5">
              <button class="bg-blue-500 hover:bg-blue-700 text-white p-2 rounded-lg">
                Valider la Réservation
              </button>
            </div>
          </div>


        </div>
      </div>

      <div class="w-1/2 max-w-1/2 px-3 mt-0 lg:w-6/12 lg:flex-none">
        <div
          class="border-black/12.5 dark:bg-slate-850 dark:shadow-dark-xl shadow-xl relative z-20 flex min-w-0 flex-col break-words rounded-2xl border-0 border-solid bg-white bg-clip-border">
          <div class="border-black/12.5 mb-0 rounded-t-2xl border-b-0 border-solid p-6 pt-4 pb-0">
            <h6 class="capitalize dark:text-white">Modifier une Réservation</h6>
          </div>
          <div class="flex p-4">
            <div class="flex items-center justify-start space pb-5">
              <label for="places">Ref. Voyage</label>
              <input class="w-42 border-2 rounded-lg h-12 pl-4 border-blue-500 ml-4" type="text" name="" id=""
                placeholder="Num. CNI/Passeport" required />

            </div>
          </div>

          <div class="flex p-4">
            <div class="flex items-center justify-start space pb-5">
              <label for="places">Date Voyage</label>
              <input class="w-42 border-2 rounded-lg h-12 pl-4 border-blue-500 ml-4" type="date" name="" id=""
                placeholder="Num. CNI/Passeport" required />

            </div>

          </div>

          <div class="flex p-4 justify-center">
            <div class="flex items-center justify-center space pb-5">
              <button class="bg-blue-500 hover:bg-blue-700 text-white p-2 rounded-lg">
                Rechercher le Billet
              </button>
            </div>
          </div>


        </div>
      </div>
    </div>
    <?php
    include('../build/footer.php');
    ?>