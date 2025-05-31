<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head, Link, usePage } from '@inertiajs/vue3';

const page = usePage();
</script>

<template>
  <Head title="Clientes" />

  <AuthenticatedLayout>
    <template #header>
      <h2 class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
        Lista de Clientes
      </h2>
    </template>

    <div class="py-12">
      <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
        
        <!-- Botón nuevo cliente -->
        <div class="mb-4 flex justify-end">
          <Link
            :href="route('cliente.create')"
            class="bg-blue-600 hover:bg-blue-800 text-white font-bold py-2 px-4 rounded"
          >
            Nuevo Cliente
          </Link>
        </div>

        <!-- Tabla -->
        <div class="overflow-x-auto bg-white dark:bg-gray-800 shadow sm:rounded-lg">
          <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
            <thead class="bg-gray-50 dark:bg-gray-700">
              <tr>
                <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase">Nombres</th>
                <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase">Primer Apellido</th>
                <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase">Segundo Apellido</th>
                <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase">Tipo Documento</th>
                <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase">Número Documento</th>
                <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase">Teléfono</th>
                <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase">Dirección</th>
              </tr>
            </thead>
            <tbody class="bg-white dark:bg-gray-800 divide-y divide-gray-200 dark:divide-gray-700">
              <tr v-for="cliente in page.props.clientes" :key="cliente.id">
                <td class="px-4 py-2 text-sm text-gray-900 dark:text-gray-100">{{ cliente.nombre }}</td>
                <td class="px-4 py-2 text-sm text-gray-900 dark:text-gray-100">{{ cliente.pri_ape }}</td>
                <td class="px-4 py-2 text-sm text-gray-900 dark:text-gray-100">{{ cliente.seg_ape }}</td>
                <td class="px-4 py-2 text-sm text-gray-900 dark:text-gray-100">{{ cliente.doc_tip }}</td>
                <td class="px-4 py-2 text-sm text-gray-900 dark:text-gray-100">{{ cliente.docu_num }}</td>
                <td class="px-4 py-2 text-sm text-gray-900 dark:text-gray-100">{{ cliente.telefono || '—' }}</td>
                <td class="px-4 py-2 text-sm text-gray-900 dark:text-gray-100">{{ cliente.direccion || '—' }}</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </AuthenticatedLayout>
</template>