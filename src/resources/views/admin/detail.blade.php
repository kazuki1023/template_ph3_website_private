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
                        問題番号
                    </th>
                    <td class="px-6 py-4">
                        {{ $question->id }}
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
                @foreach( $choices as $i => $choice )
                <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        選択肢{{ $i + 1 }}
                        @if( $choice->valid == 1 )
                        <span class="bg-blue-100 text-blue-800 text-xs font-medium mr-2 px-2.5 py-0.5 rounded-full dark:bg-blue-900 dark:text-blue-300">正解</span>
                        @else
                        <span class="bg-red-100 text-red-800 text-xs font-medium mr-2 px-2.5 py-0.5 rounded-full dark:bg-red-900 dark:text-red-300">不正解</span>
                        @endif
                    </th>
                    <td class="px-6 py-4">
                        {{ $choice->name }}
                    </td>
                </tr>
                @endforeach
                <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        画像
                    </th>
                    <td class="px-6 py-4">
                        <img src="{{ asset('/storage/img/questions/' . $question->image)}}">
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
