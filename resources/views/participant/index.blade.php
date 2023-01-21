@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900 dark:text-gray-100">
                        <h2>Liste des participants</h2>
                        <div class="flex flex-col">
                            <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                                <div class="py-2 inline-block min-w-full sm:px-6 lg:px-8">
                                    <div class="overflow-hidden">
                                        <table class="min-w-full" style="width: 100%">
                                            <thead class="border-b">
                                            <tr>
                                                <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                                    #
                                                </th>
                                                <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                                    Nom
                                                </th>
                                                <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                                    Prénoms
                                                </th>
                                                <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                                    Téléphone
                                                </th>
                                                <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                                    Email
                                                </th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($participants as $participant)
                                                <tr class="border-b">
                                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">{{ $participant->id }}</td>
                                                    <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                                        {{ $participant->nom_participant }}
                                                    </td>
                                                    <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                                        {{ $participant->prenom_participant }}
                                                    </td>
                                                    <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                                        {{ $participant->telephone_participant }}
                                                    </td>
                                                    <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                                        {{ $participant->email_participant }}
                                                    </td>

                                                   <!-- <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                                        <a href="#" class="inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out">7</a>
                                                        <a href="#"><i class="fa fa-eye"></i></a>
                                                        <a href="#"><i class="fa fa-eye"></i></a>
                                                    </td>-->
                                                </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
