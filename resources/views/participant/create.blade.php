@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900 dark:text-gray-100">
                        <form method="POST" action="">
                            <input type="hidden" name="_token" value="ihmWK80FHj1eZm7JYygzSgw1SW4MzWfkMJx5Ms82">
                            <!-- Name -->
                            <div class="mt-4">
                                <label class="block font-medium text-sm text-gray-700 dark:text-gray-300" for="name">
                                    Nom du participant
                                </label>
                                <input  class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm block mt-1 w-full" id="name" type="text" name="nom" placeholder="Nom du participant" required="required" autofocus="autofocus">
                            </div>

                            <div class="mt-4">
                                <label class="block font-medium text-sm text-gray-700 dark:text-gray-300" for="name">
                                    Prénom du participant
                                </label>
                                <input  class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm block mt-1 w-full" id="name" type="text" name="prenom" placeholder="Prénom du participant" required="required">
                            </div>

                            <div class="mt-4">
                                <label class="block font-medium text-sm text-gray-700 dark:text-gray-300" for="name">
                                    Téléphone du participant
                                </label>
                                <input  class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm block mt-1 w-full" id="name" type="text" name="tepehone" placeholder="Téléphone du participant">
                            </div>

                            <!-- Email Address -->
                            <div class="mt-4">
                                <label class="block font-medium text-sm text-gray-700 dark:text-gray-300" for="email">
                                    Email
                                </label>
                                <input  class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm block mt-1 w-full" id="email" type="email" name="email" required="required">
                            </div>
                            <div class="flex items-center justify-end mt-4">
                                <button type="submit" class="inline-flex items-center px-4 py-2 bg-gray-800 dark:bg-gray-200 border border-transparent rounded-md font-semibold text-xs text-white dark:text-gray-800 uppercase tracking-widest hover:bg-gray-700 dark:hover:bg-white focus:bg-gray-700 dark:focus:bg-white active:bg-gray-900 dark:active:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800 transition ease-in-out duration-150 ml-4">
                                    Enregistrer
                                </button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
