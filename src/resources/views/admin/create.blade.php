@extends('layouts.admin')

@section('content')
    <form action="{{ route("admin.store")}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg mx-4 mt-3">
            <table class="w-full text-sm text-left text-gray-500">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50">
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
                    <tr class="bg-white border-b">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                            問題文
                        </th>
                        <td class="px-6 py-4">
                            <div class="">
                                @error('content')
                                <div class="p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50" role="alert">
                                    <span class="font-medium">エラー!</span> {{ $message }}
                                </div>
                                @enderror
                                <textarea id="message" rows="4"
                                    class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500"
                                    name="content"></textarea>
                            </div>
                        </td>
                    </tr>
                    <tr class="bg-white border-b">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                            選択肢1
                        </th>
                        <td class="px-6 py-4">
                            @error('choice1')
                            <div class="p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50" role="alert">
                                <span class="font-medium">エラー!</span> {{ $message }}
                            </div>
                            @enderror
                            <input type="text" id="default-input"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                name="choice1">
                        </td>
                    </tr>
                    <tr class="bg-white border-b">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                            選択肢2
                        </th>
                        <td class="px-6 py-4">
                            @error('choice2')
                            <div class="p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50" role="alert">
                                <span class="font-medium">エラー!</span> {{ $message }}
                            </div>
                            @enderror
                            <input type="text" id="default-input"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                name="choice2">
                        </td>
                    </tr>
                    <tr class="bg-white border-b">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                            選択肢3
                        </th>
                        <td class="px-6 py-4">
                            @error('choice3')
                            <div class="p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50" role="alert">
                                <span class="font-medium">エラー!</span> {{ $message }}
                            </div>
                            @enderror
                            <input type="text" id="default-input"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                name="choice3">
                        </td>
                    </tr>
                    <tr class="bg-white border-b">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                            正解の選択肢
                        </th>
                        <td class="px-6 py-4">
                            <ul
                                class="items-center w-full text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg sm:flex">
                                <li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r">
                                    <div class="flex items-center pl-3">
                                        <input id="horizontal-list-radio-license-1" type="radio" name="list-radio"
                                            class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-2"
                                            value="1" checked>
                                        <label for="horizontal-list-radio-license-1"
                                            class="w-full py-3 ml-2 text-sm font-medium text-gray-900">選択肢1</label>
                                    </div>
                                </li>
                                <li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r">
                                    <div class="flex items-center pl-3">
                                        <input id="horizontal-list-radio-license-2" type="radio" name="list-radio"
                                            class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-2"
                                            value="2">
                                        <label for="horizontal-list-radio-license-2"
                                            class="w-full py-3 ml-2 text-sm font-medium text-gray-900">選択肢2</label>
                                    </div>
                                </li>
                                <li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r">
                                    <div class="flex items-center pl-3">
                                        <input id="horizontal-list-radio-license-3" type="radio" name="list-radio"
                                            class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-2"
                                            value="3">
                                        <label for="horizontal-list-radio-license-3"
                                            class="w-full py-3 ml-2 text-sm font-medium text-gray-900">選択肢3</label>
                                    </div>
                                </li>
                            </ul>
                        </td>
                    </tr>
                    <tr class="bg-white border-b">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                            画像
                        </th>
                        <td class="px-6 py-4">
                            <div class="">
                                @error('image')
                                <div class="p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50" role="alert">
                                    <span class="font-medium">エラー!</span> {{ $message }}
                                </div>
                                @enderror
                                <input
                                    class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 focus:outline-none upload-limit"
                                    id="file_input" type="file" name="image" accept=".jpg, .svg, .png"
                                    placeholder="1MG以下の写真しか対応してません">
                                <p class="mt-1 text-sm text-gray-500" id="file_input_help">SVG, PNG, or
                                    JPG .</p>
                            </div>
                        </td>
                    </tr>
                    <tr class="bg-white border-b">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                            補足
                        </th>
                        <td class="px-6 py-4">
                            <div class="">
                                @error('supplement')
                                <div class="p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50" role="alert">
                                    <span class="font-medium">エラー!</span> {{ $message }}
                                </div>
                                @enderror
                                <input type="text" id="default-input"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                    name="supplement">
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="content-center mt-2 flex justify-center">
            <button type="submit"
                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 focus:outline-none"
                onclick="location.href={{ route('admin.create')}}">作成する</button>
        </div>
    </form>
@endsection
