<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head,link } from '@inertiajs/vue3';

const page = usePage()

console.log(page.props.clientes);
</script>


<template>
    <AuthenticatedLayout>
        <div class="py-12">
            <div class="mx-auto max-w-7x1 sm:px-6 lg:px-8">
                <div>
                    <ul v-for="cliente in page.props.clientes.data">
                        <li>{{ cliente }}</li>
                    </ul>
                </div>
            </div>

        </div>
    </AuthenticatedLayout>

</template>