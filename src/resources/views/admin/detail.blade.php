@extends('layouts.admin')

@section('content')
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
                        問題名
                    </th>
                    <td class="px-6 py-4">
                        Silver
                    </td>
                </tr>
                <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        問題文
                    </th>
                    <td class="px-6 py-4">
                        {{ $question->content }}
                    </td>
                </tr>
                <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        選択肢１
                    </th>
                    <td class="px-6 py-4">
                        {{ $choices[0]->name }}
                    </td>
                </tr>
                <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        選択肢２
                    </th>
                    <td class="px-6 py-4">
                        {{ $choices[1]->name }}
                    </td>
                </tr>
                <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        選択肢３
                    </th>
                    <td class="px-6 py-4">
                        {{ $choices[2]->name }}
                    </td>
                </tr>
                <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        画像
                    </th>
                    <td class="px-6 py-4">
                        {{ $question->image }}
                    </td>
                </tr>
                <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        補足
                    </th>
                    <td class="px-6 py-4">
                        {{ $question->supplement }}
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="content-center mt-2 flex justify-center">
        <button type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800" onclick="location.href='http://localhost/admin/edit/{{ $question->id }}'">編集する</button>
        <button type="button"
            class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900" onclick="location.href='http://localhost/admin/delete/{{ $question->id }}'">削除する</button>
    </div>
@endsection
