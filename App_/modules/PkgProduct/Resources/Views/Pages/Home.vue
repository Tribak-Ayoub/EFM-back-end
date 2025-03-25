<template>
    <div>
        <button data-modal-target="default-modal" data-modal-toggle="default-modal"  @click="toggleModal(null)"
        class="block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
        type="button">
        Add Product
    </button>

    <form @submit.prevent="submitProduct">
        <p v-if="successMessage" class="text-green-600 mb-4">{{ successMessage }}</p>

                <div class="mb-4">
                    <label class="block text-gray-700">Name</label>
                    <textarea v-model="form.name" class="w-full p-2 border rounded" rows="4"
                        placeholder="Enter Product name"></textarea>
                    <p v-if="errors.content" class="text-red-500 text-sm">{{ errors.name[0] }}</p>
                </div>

                <div class="mb-4">
                    <label class="block text-gray-700">Stock</label>
                    <input type="number" v-model="form.stock" class="w-full p-2 border rounded">
                    <p v-if="errors.stock" class="text-red-500 text-sm">{{ errors.stock[0] }}</p>
                </div>

                <div class="mb-4">
                    <label class="block text-gray-700">Price</label>
                    <input type="number" v-model="form.price" class="w-full p-2 border rounded">
                    <p v-if="errors.price" class="text-red-500 text-sm">{{ errors.price[0] }}</p>
                </div>

                <div class="flex items-center">
                    <button type="submit"
                        class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 flex items-center gap-2">
                        <span>Create Product</span>
                    </button>
                    <button @click="closeModal" type="button"
                        class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Decline</button>
                </div>
            </form>

    <!-- <div v-if="isModalOpen" id="default-modal" tabindex="-1" aria-hidden="false"
        class="fixed inset-0 z-50 justify-center items-center w-full h-full bg-black bg-opacity-50 flex">
        <div class="bg-white p-6 rounded-lg w-1/3">
            <h2 class="text-2xl font-bold mb-4">Create New Product</h2>
            <button @click="closeModal"
                class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white">
                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 14 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                </svg>
                <span class="sr-only">Close modal</span>
            </button>
            <p v-if="successMessage" class="text-green-600 mb-4">{{ successMessage }}</p>

            <form @submit.prevent="submitProduct">
                <div class="mb-4">
                    <label class="block text-gray-700">Name</label>
                    <textarea v-model="form.name" class="w-full p-2 border rounded" rows="4"
                        placeholder="Enter Product name"></textarea>
                    <p v-if="errors.content" class="text-red-500 text-sm">{{ errors.name[0] }}</p>
                </div>

                <div class="mb-4">
                    <label class="block text-gray-700">Stock</label>
                    <input type="number" v-model="form.stock" class="w-full p-2 border rounded">
                    <p v-if="errors.stock" class="text-red-500 text-sm">{{ errors.stock[0] }}</p>
                </div>

                <div class="mb-4">
                    <label class="block text-gray-700">Price</label>
                    <input type="number" v-model="form.price" class="w-full p-2 border rounded">
                    <p v-if="errors.price" class="text-red-500 text-sm">{{ errors.price[0] }}</p>
                </div>

                <div class="flex items-center">
                    <button type="submit"
                        class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 flex items-center gap-2">
                        <span>Create Product</span>
                    </button>
                    <button @click="closeModal" type="button"
                        class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Decline</button>
                </div>
            </form>
        </div>
    </div> -->


    </div>
        <div class="p-6 space-y-6">
            <!-- Product Table -->
            <div class="overflow-x-auto bg-white p-4 rounded-lg shadow">
                <table class="w-full border border-gray-200 rounded-lg">
                    <thead>
                        <tr class="bg-gray-200 text-gray-700 text-left">
                            <th class="py-2 px-4">#</th>
                            <th class="py-2 px-4">Name</th>
                            <th class="py-2 px-4">stock</th>
                            <th class="py-2 px-4">price</th>
                        </tr>
                    </thead>
                    <tbody v-if="products.length">
                        <tr v-for="(product, index) in products" :key="product.id"
                            class="border-t hover:bg-gray-50 text-left">
                            <td class="py-2 px-4">{{ index + 1 }}</td>
                            <td class="py-2 px-4">{{ product.name }}</td>
                            <td class="py-2 px-4">{{ product.stock }}</td>
                            <td class="py-2 px-4">{{ product.price }}</td>

                        </tr>
                    </tbody>
                    <tbody v-else>
                        <tr>
                            <td colspan="6" class="text-center py-4">No products found.</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
</template>

<script setup>
import { ref, onMounted } from "vue";
import axios from "axios";

const products = ref([]);

const errors = ref({});

const successMessage = ref("");
const isModalOpen = ref(false);
const form = ref({
    name: "",
    stock: "",
    price: "",
});

const toggleModal = () => {
    isModalOpen.value = false
};
const closeModal = () => {
    isModalOpen.value = true;
};

const fetchProducts = async () => {
    try {
        const response = await axios.get("/api/products");
        products.value = response.data.product;
    } catch (error) {
        console.error("Error fetching products:", error);
    }
};

     const   submitProduct = async () => {
            errors.value = {};
            successMessage.value = "";

            try {
                axios.post("/api/products/store", {
                    name: form.value.name,
                    stock: form.value.stock,
                    price: form.value.price,
                });

                successMessage.value = "product created successfully!";

                setTimeout(() => router.push("/products"), 1000);
            } catch (error) {
                console.log('first' . errors);
                if (error.response && error.response.data.errors) {
                    errors.value = error.response.data.errors;
                }
            }
        };

onMounted(fetchProducts);
</script>