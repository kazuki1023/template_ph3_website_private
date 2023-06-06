@extends('layouts.admin')

@section('content')
    <form action="http://localhost/admin/store" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg mx-4 mt-3">
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            項目名
                        </th>
                        <th scope="col" class="px-6 py-3">
                            内容
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            問題文
                        </th>
                        <td class="px-6 py-4">
                            <div class="">
                              <textarea id="message" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" name="content"></textarea>
                            </div>
                        </td>
                    </tr>
                        <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                            <th scope="row"
                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                選択肢1
                            </th>
                            <td class="px-6 py-4">
                                <input type="text" id="default-input"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                  name="choice1">
                            </td>
                        </tr>
                        <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                            <th scope="row"
                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                選択肢2
                            </th>
                            <td class="px-6 py-4">
                                <input type="text" id="default-input"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                  name="choice2">
                            </td>
                        </tr>
                        <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                            <th scope="row"
                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                選択肢3
                            </th>
                            <td class="px-6 py-4">
                                <input type="text" id="default-input"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                  name="choice3">
                            </td>
                        </tr>
                    <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            正解の選択肢
                        </th>
                        <td class="px-6 py-4">
                            <ul
                                class="items-center w-full text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg sm:flex dark:bg-gray-700 dark:border-gray-600 dark:text-white">
                                <li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r dark:border-gray-600">
                                    <div class="flex items-center pl-3">
                                        <input id="horizontal-list-radio-license-1" type="radio"
                                            name="list-radio"
                                            class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500"
                                            value="1" checked
                                            >
                                        <label for="horizontal-list-radio-license-1"
                                            class="w-full py-3 ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">選択肢1</label>
                                    </div>
                                </li>
                                <li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r dark:border-gray-600">
                                    <div class="flex items-center pl-3">
                                        <input id="horizontal-list-radio-license-2" type="radio"
                                            name="list-radio"
                                            class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500"
                                            value="2"
                                            >
                                        <label for="horizontal-list-radio-license-2"
                                            class="w-full py-3 ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">選択肢2</label>
                                    </div>
                                </li>
                                <li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r dark:border-gray-600">
                                    <div class="flex items-center pl-3">
                                        <input id="horizontal-list-radio-license-3" type="radio"
                                            name="list-radio"
                                            class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500"
                                            value="3"
                                            >
                                        <label for="horizontal-list-radio-license-3"
                                            class="w-full py-3 ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">選択肢3</label>
                                    </div>
                                </li>
                            </ul>
                        </td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            画像
                        </th>
                        <td class="px-6 py-4">
                            <div class="">
                              <input class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" id="file_input" type="file" name="image" accept=".jpg, .svg, .png">
                              <p class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="file_input_help">SVG, PNG, or JPG .</p>
                            </div>
                        </td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            補足
                        </th>
                        <td class="px-6 py-4">
                            <div class="">
                                <input type="text" id="default-input"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    name="supplement">
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="content-center mt-2 flex justify-center">
            <button type="submit"
                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800"
                onclick="location.href='http://localhost/admin/update/">作成する</button>
        </div>
    </form>
@endsection