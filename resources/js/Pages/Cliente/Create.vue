<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head, Link, useForm } from '@inertiajs/vue3';

const form = useForm({
  nombre: '',
  pri_ape: '',
  seg_ape: '',
  doc_tip: '',
  docu_num: '',
  telefono: '',
  direccion: ''
});

const submit = () => {
  form.post(route('cliente.store'));
};
</script>

<template>
  <Head title="Crear Cliente" />

  <AuthenticatedLayout>
    <template #header>
      <h2 class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
        Crear Nuevo Cliente
      </h2>
    </template>

    <div class="py-12">
      <div class="mx-auto max-w-4xl sm:px-6 lg:px-8 bg-white dark:bg-gray-800 p-6 shadow sm:rounded-lg">

        <form @submit.prevent="submit" class="space-y-6">

          <!-- Nombres -->
          <div>
            <label class="block text-sm font-medium text-gray-700 dark:text-gray-300">Nombres</label>
            <input v-model="form.nombre" type="text"
              class="mt-1 block w-full rounded-md shadow-sm border-gray-300 focus:ring dark:bg-gray-700 dark:text-white" />
            <div v-if="form.errors.nombre" class="text-red-500 text-sm mt-1">{{ form.errors.nombre }}</div>
          </div>

          <!-- Primer Apellido -->
          <div>
            <label class="block text-sm font-medium text-gray-700 dark:text-gray-300">Primer Apellido</label>
            <input v-model="form.pri_ape" type="text"
              class="mt-1 block w-full rounded-md shadow-sm border-gray-300 focus:ring dark:bg-gray-700 dark:text-white" />
            <div v-if="form.errors.pri_ape" class="text-red-500 text-sm mt-1">{{ form.errors.pri_ape }}</div>
          </div>

          <!-- Segundo Apellido -->
          <div>
            <label class="block text-sm font-medium text-gray-700 dark:text-gray-300">Segundo Apellido</label>
            <input v-model="form.seg_ape" type="text"
              class="mt-1 block w-full rounded-md shadow-sm border-gray-300 focus:ring dark:bg-gray-700 dark:text-white" />
            <div v-if="form.errors.seg_ape" class="text-red-500 text-sm mt-1">{{ form.errors.seg_ape }}</div>
          </div>

          <!-- Tipo de Documento -->
          <div>
            <label class="block text-sm font-medium text-gray-700 dark:text-gray-300">Tipo de Documento</label>
            <input v-model="form.doc_tip" type="text" maxlength="9"
              class="mt-1 block w-full rounded-md shadow-sm border-gray-300 focus:ring dark:bg-gray-700 dark:text-white"
              placeholder="DNI, RUC, etc." />
            <div v-if="form.errors.doc_tip" class="text-red-500 text-sm mt-1">{{ form.errors.doc_tip }}</div>
          </div>

          <!-- Número de Documento -->
          <div>
            <label class="block text-sm font-medium text-gray-700 dark:text-gray-300">Número de Documento</label>
            <input v-model="form.docu_num" type="text"
              class="mt-1 block w-full rounded-md shadow-sm border-gray-300 focus:ring dark:bg-gray-700 dark:text-white" />
            <div v-if="form.errors.docu_num" class="text-red-500 text-sm mt-1">{{ form.errors.docu_num }}</div>
          </div>

          <!-- Teléfono (opcional) -->
          <div>
            <label class="block text-sm font-medium text-gray-700 dark:text-gray-300">Teléfono</label>
            <input v-model="form.telefono" type="text"
              class="mt-1 block w-full rounded-md shadow-sm border-gray-300 focus:ring dark:bg-gray-700 dark:text-white" />
            <div v-if="form.errors.telefono" class="text-red-500 text-sm mt-1">{{ form.errors.telefono }}</div>
          </div>

          <!-- Dirección (opcional) -->
          <div>
            <label class="block text-sm font-medium text-gray-700 dark:text-gray-300">Dirección</label>
            <input v-model="form.direccion" type="text"
              class="mt-1 block w-full rounded-md shadow-sm border-gray-300 focus:ring dark:bg-gray-700 dark:text-white" />
            <div v-if="form.errors.direccion" class="text-red-500 text-sm mt-1">{{ form.errors.direccion }}</div>
          </div>

          <!-- Botones -->
          <div class="flex justify-between items-center">
            <Link :href="route('cliente.index')" class="text-blue-500 hover:underline">Cancelar</Link>
            <button type="submit"
              class="bg-blue-600 hover:bg-blue-800 text-white font-bold py-2 px-4 rounded"
              :disabled="form.processing">
              Guardar
            </button>
          </div>

        </form>
      </div>
    </div>
  </AuthenticatedLayout>
</template>