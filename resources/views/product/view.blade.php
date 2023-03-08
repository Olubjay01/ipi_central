<x-app-layout>
    <div class="container lg:w-2/3 xl:w-2/3 mx-auto">
        <div class="grid grid-cols-1 sm:grid-cols-5 items-start gap-6">
            <div class="col-span-3 bg-white p-4 rounded-lg shadow">
                <!-- Profile Details -->
                <div class="mb-6">
                    <h2 class="text-xl mb-5">Your Profile</h2>
                    <div class="mb-4">
                        <input
                            placeholder="Your Name"
                            type="text"
                            name="name"
                            class="border-gray-300 focus:border-purple-500 focus:outline-none focus:ring-purple-500 rounded-md w-full"
                        />
                    </div>
                    <div class="mb-4">
                        <input
                            placeholder="Your Email"
                            type="email"
                            name="email"
                            class="border-gray-300 focus:border-purple-500 focus:outline-none focus:ring-purple-500 rounded-md w-full"
                        />
                    </div>
                    <div class="mb-4">
                        <input
                            placeholder="Your Phone"
                            type="text"
                            name="phone"
                            class="border-gray-300 focus:border-purple-500 focus:outline-none focus:ring-purple-500 rounded-md w-full"
                        />
                    </div>
                </div>
                <!--/ Profile Details -->

                <!-- Billing Address -->
                <div class="mb-6">
                    <h2 class="text-xl mb-5">Billing Address</h2>
                    <div class="flex gap-3">
                        <div class="mb-4 flex-1">
                            <input
                                placeholder="Address 1"
                                type="text"
                                name="billing_address_1"
                                class="border-gray-300 focus:border-purple-500 focus:outline-none focus:ring-purple-500 rounded-md w-full"
                            />
                        </div>
                        <div class="mb-4 flex-1">
                            <input
                                placeholder="Address 2"
                                type="text"
                                name="billing_address_2"
                                class="border-gray-300 focus:border-purple-500 focus:outline-none focus:ring-purple-500 rounded-md w-full"
                            />
                        </div>
                    </div>
                    <div class="flex gap-3">
                        <div class="mb-4 flex-1">
                            <input
                                placeholder="City"
                                type="text"
                                name="billing_city"
                                class="border-gray-300 focus:border-purple-500 focus:outline-none focus:ring-purple-500 rounded-md w-full"
                            />
                        </div>
                        <div class="mb-4 flex-1">
                            <input
                                placeholder="State"
                                type="text"
                                name="billing_state"
                                class="border-gray-300 focus:border-purple-500 focus:outline-none focus:ring-purple-500 rounded-md w-full"
                            />
                        </div>
                    </div>
                    <div class="flex gap-3">
                        <div class="mb-4 flex-1">
                            <select
                                placeholder="Country"
                                type="text"
                                name="billing_country"
                                class="border-gray-300 focus:border-purple-500 focus:outline-none focus:ring-purple-500 rounded-md w-full"
                            >
                                <option value="">Country</option>
                                <option value="ge">Georgia</option>
                                <option value="de">Germany</option>
                                <option value="in">India</option>
                                <option value="us">United Kingdom</option>
                                <option value="uk">United States</option>
                            </select>
                        </div>
                        <div class="mb-4 flex-1">
                            <input
                                placeholder="Zipcode"
                                type="text"
                                name="billing_zipcode"
                                class="border-gray-300 focus:border-purple-500 focus:outline-none focus:ring-purple-500 rounded-md w-full"
                            />
                        </div>
                    </div>
                </div>
                <!--/ Billing Address -->

                <!-- Shipping Address -->
                <div class="mb-6">
                    <div class="flex items-center justify-between mb-5">
                        <h2 class="text-xl">Shipping Address</h2>
                        <div class="flex items-center">
                            <input
                                id="sameAsBillingAddress"
                                type="checkbox"
                                class="mr-3 rounded border-gray-300 text-purple-500 focus:ring-purple-500"
                            />
                            <label for="sameAsBillingAddress">Same as Billing</label>
                        </div>
                    </div>
                    <div class="flex gap-3">
                        <div class="mb-4 flex-1">
                            <input
                                placeholder="Address 1"
                                type="text"
                                name="shipping_address_1"
                                class="border-gray-300 focus:border-purple-500 focus:outline-none focus:ring-purple-500 rounded-md w-full"
                            />
                        </div>
                        <div class="mb-4 flex-1">
                            <input
                                placeholder="Address 2"
                                type="text"
                                name="shipping_address_2"
                                class="border-gray-300 focus:border-purple-500 focus:outline-none focus:ring-purple-500 rounded-md w-full"
                            />
                        </div>
                    </div>
                    <div class="flex gap-3">
                        <div class="mb-4 flex-1">
                            <input
                                placeholder="City"
                                type="text"
                                name="shipping_city"
                                class="border-gray-300 focus:border-purple-500 focus:outline-none focus:ring-purple-500 rounded-md w-full"
                            />
                        </div>
                        <div class="mb-4 flex-1">
                            <input
                                placeholder="State"
                                type="text"
                                name="shipping_state"
                                class="border-gray-300 focus:border-purple-500 focus:outline-none focus:ring-purple-500 rounded-md w-full"
                            />
                        </div>
                    </div>
                    <div class="flex gap-3">
                        <div class="mb-4 flex-1">
                            <select
                                placeholder="Country"
                                type="text"
                                name="shipping_country"
                                class="border-gray-300 focus:border-purple-500 focus:outline-none focus:ring-purple-500 rounded-md w-full"
                            >
                                <option value="">Country</option>
                                <option value="ge">Georgia</option>
                                <option value="de">Germany</option>
                                <option value="in">India</option>
                                <option value="us">United Kingdom</option>
                                <option value="uk">United States</option>
                            </select>
                        </div>
                        <div class="mb-4 flex-1">
                            <input
                                placeholder="Zipcode"
                                type="text"
                                name="shipping_zipcode"
                                class="border-gray-300 focus:border-purple-500 focus:outline-none focus:ring-purple-500 rounded-md w-full"
                            />
                        </div>
                    </div>
                </div>
                <!--/ Shipping Address -->

                <button class="btn-primary bg-emerald-500 hover:bg-emerald-600 active:bg-emerald-700 w-full">Update</button>
            </div>

            <div class="col-span-2 bg-white p-4 rounded-lg shadow">
                <h2 class="text-xl mb-5">Your Account</h2>
                <div class="mb-4">
                    <input
                        type="password"
                        name="password"
                        placeholder="Your Current password"
                        class="border-gray-300 focus:border-purple-500 focus:outline-none focus:ring-purple-500 rounded-md w-full"
                    />
                </div>
                <div class="mb-4">
                    <input
                        type="password"
                        name="password"
                        placeholder="New password"
                        class="border-gray-300 focus:border-purple-500 focus:outline-none focus:ring-purple-500 rounded-md w-full"
                    />
                </div>
                <div class="mb-4">
                    <input
                        type="password"
                        name="password"
                        placeholder="Repeat new password"
                        class="border-gray-300 focus:border-purple-500 focus:outline-none focus:ring-purple-500 rounded-md w-full"
                    />
                </div>
                <div>
                    <button class="btn-primary bg-emerald-500 hover:bg-emerald-600 active:bg-emerald-700">Update</button>
                </div>
            </div>
        </div>
    </div>

    {{--    <div class="container mx-auto">--}}
{{--        <div class="grid gap-6 grid-cols-1 lg:grid-cols-5">--}}
{{--          <div class="lg:col-span-3">--}}
{{--            <div--}}
{{--              x-data="{--}}
{{--  images: ['{{$product->image}}', 'img/1_4.jpg'],--}}
{{--  activeImage: null,--}}
{{--  prev() {--}}
{{--      let index = this.images.indexOf(this.activeImage);--}}
{{--      if (index === 0) --}}
{{--          index = this.images.length;--}}
{{--      this.activeImage = this.images[index - 1];--}}
{{--  },--}}
{{--  next() {--}}
{{--      let index = this.images.indexOf(this.activeImage);--}}
{{--      if (index === this.images.length - 1) --}}
{{--          index = -1;--}}
{{--      this.activeImage = this.images[index + 1];--}}
{{--  },--}}
{{--  init() {--}}
{{--      this.activeImage = this.images.length > 0 ? this.images[0] : null--}}
{{--  }--}}
{{--}"--}}
{{--            >--}}
{{--              <div class="relative">--}}
{{--                <template x-for="image in images">--}}
{{--                  <div--}}
{{--                    x-show="activeImage === image"--}}
{{--                    class="aspect-w-3 aspect-h-2"--}}
{{--                  >--}}
{{--                    <img :src="image" alt="" class="w-auto mx-auto"/>--}}
{{--                  </div>--}}
{{--                </template>--}}
{{--                <a--}}
{{--                  @click.prevent="prev"--}}
{{--                  class="cursor-pointer bg-black/30 text-white absolute left-0 top-1/2 -translate-y-1/2"--}}
{{--                >--}}
{{--                  <svg--}}
{{--                    xmlns="http://www.w3.org/2000/svg"--}}
{{--                    class="h-10 w-10"--}}
{{--                    fill="none"--}}
{{--                    viewBox="0 0 24 24"--}}
{{--                    stroke="currentColor"--}}
{{--                    stroke-width="2"--}}
{{--                  >--}}
{{--                    <path--}}
{{--                      stroke-linecap="round"--}}
{{--                      stroke-linejoin="round"--}}
{{--                      d="M15 19l-7-7 7-7"--}}
{{--                    />--}}
{{--                  </svg>--}}
{{--                </a>--}}
{{--                <a--}}
{{--                  @click.prevent="next"--}}
{{--                  class="cursor-pointer bg-black/30 text-white absolute right-0 top-1/2 -translate-y-1/2"--}}
{{--                >--}}
{{--                  <svg--}}
{{--                    xmlns="http://www.w3.org/2000/svg"--}}
{{--                    class="h-10 w-10"--}}
{{--                    fill="none"--}}
{{--                    viewBox="0 0 24 24"--}}
{{--                    stroke="currentColor"--}}
{{--                    stroke-width="2"--}}
{{--                  >--}}
{{--                    <path--}}
{{--                      stroke-linecap="round"--}}
{{--                      stroke-linejoin="round"--}}
{{--                      d="M9 5l7 7-7 7"--}}
{{--                    />--}}
{{--                  </svg>--}}
{{--                </a>--}}
{{--              </div>--}}
{{--              <div class="flex">--}}
{{--                <template x-for="image in images">--}}
{{--                  <a--}}
{{--                    @click.prevent="activeImage = image"--}}
{{--                    class="cursor-pointer w-[80px] border border-gray-300 hover:border-purple-500 flex items-center justify-center"--}}
{{--                    :class="{'border-purple-600': activeImage === image}"--}}
{{--                  >--}}
{{--                    <img :src="image" alt="" class="w-auto max-auto max-h-full"/>--}}
{{--                  </a>--}}
{{--                </template>--}}
{{--              </div>--}}
{{--            </div>--}}
{{--          </div>--}}
{{--          <div class="lg:col-span-2">--}}
{{--            <h1 class="text-lg font-semibold">--}}
{{--            {{$product->title}}--}}
{{--            </h1>--}}
{{--            <div class="text-xl font-bold mb-6">₦{{$product->price}}</div>--}}
{{--            <div class="flex items-center mb-6">--}}
{{--              <div class="flex items-center text-orange-400">--}}
{{--                <svg--}}
{{--                  xmlns="http://www.w3.org/2000/svg"--}}
{{--                  class="h-6 w-6"--}}
{{--                  viewBox="0 0 20 20"--}}
{{--                  fill="currentColor"--}}
{{--                >--}}
{{--                  <path--}}
{{--                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"--}}
{{--                  />--}}
{{--                </svg>--}}
{{--                <svg--}}
{{--                  xmlns="http://www.w3.org/2000/svg"--}}
{{--                  class="h-6 w-6"--}}
{{--                  viewBox="0 0 20 20"--}}
{{--                  fill="currentColor"--}}
{{--                >--}}
{{--                  <path--}}
{{--                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"--}}
{{--                  />--}}
{{--                </svg>--}}
{{--                <svg--}}
{{--                  xmlns="http://www.w3.org/2000/svg"--}}
{{--                  class="h-6 w-6"--}}
{{--                  viewBox="0 0 20 20"--}}
{{--                  fill="currentColor"--}}
{{--                >--}}
{{--                  <path--}}
{{--                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"--}}
{{--                  />--}}
{{--                </svg>--}}
{{--                <svg--}}
{{--                  xmlns="http://www.w3.org/2000/svg"--}}
{{--                  class="h-6 w-6"--}}
{{--                  viewBox="0 0 20 20"--}}
{{--                  fill="currentColor"--}}
{{--                >--}}
{{--                  <path--}}
{{--                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"--}}
{{--                  />--}}
{{--                </svg>--}}
{{--                <svg--}}
{{--                  xmlns="http://www.w3.org/2000/svg"--}}
{{--                  class="h-5 w-5"--}}
{{--                  fill="none"--}}
{{--                  viewBox="0 0 24 24"--}}
{{--                  stroke="currentColor"--}}
{{--                  stroke-width="2"--}}
{{--                >--}}
{{--                  <path--}}
{{--                    stroke-linecap="round"--}}
{{--                    stroke-linejoin="round"--}}
{{--                    d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"--}}
{{--                  />--}}
{{--                </svg>--}}
{{--              </div>--}}
{{--              <a--}}
{{--                href="#"--}}
{{--                class="ml-3 font-normal text-purple-600 hover:text-purple-500"--}}
{{--              >--}}
{{--                67 reviews--}}
{{--              </a>--}}
{{--            </div>--}}
{{--            <div class="flex items-center justify-between mb-5">--}}
{{--              <label for="quantity" class="block font-bold mr-4">--}}
{{--                Quantity--}}
{{--              </label>--}}
{{--              <input--}}
{{--                type="number"--}}
{{--                name="quantity"--}}
{{--                x-ref="quantityEl"--}}
{{--                value="1"--}}
{{--                class="w-32 focus:border-purple-500 focus:outline-none rounded"--}}
{{--              />--}}
{{--            </div>--}}
{{--            <button--}}
{{--              @click="addToCart(id, $refs.quantityEl.value)"--}}
{{--              class="btn-primary py-4 text-lg flex justify-center min-w-0 w-full mb-6"--}}
{{--            >--}}
{{--              <svg--}}
{{--                xmlns="http://www.w3.org/2000/svg"--}}
{{--                class="h-6 w-6 mr-2"--}}
{{--                fill="none"--}}
{{--                viewBox="0 0 24 24"--}}
{{--                stroke="currentColor"--}}
{{--                stroke-width="2"--}}
{{--              >--}}
{{--                <path--}}
{{--                  stroke-linecap="round"--}}
{{--                  stroke-linejoin="round"--}}
{{--                  d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"--}}
{{--                />--}}
{{--              </svg>--}}
{{--              Add to Cart--}}
{{--            </button>--}}
{{--            <div class="mb-6" x-data="{expanded: false}">--}}
{{--              <div--}}
{{--                x-show="expanded"--}}
{{--                x-collapse.min.120px--}}
{{--                class="text-gray-500 wysiwyg-content"--}}
{{--              >--}}
{{--                {{$product->description}}--}}
{{--              </div>--}}
{{--              <p class="text-right">--}}
{{--                <a--}}
{{--                  @click="expanded = !expanded"--}}
{{--                  href="javascript:void(0)"--}}
{{--                  class="text-purple-500 hover:text-purple-700"--}}
{{--                  x-text="expanded ? 'Read Less' : 'Read More'"--}}
{{--                ></a>--}}
{{--              </p>--}}
{{--            </div>--}}
{{--          </div>--}}
{{--        </div>--}}
{{--      </div>--}}
</x-app-layout>
