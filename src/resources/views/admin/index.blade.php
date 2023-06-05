@extends('layouts.admin')

@section('content')
    {{-- @foreach ($questions as $question)
        <div class="card h-full">
            <div class="card-body">
                <h5 class="card-title">{{ $question->id }}</h5>
                <p class="card-text">{{ $question->content }}</p>
            </div>
        </div>
    @endforeach --}}

    <div class="relative overflow-x-auto shadow-md sm:rounded-lg mx-4 mt-3">
        <table class=" text-sm text-left text-gray-500 w-full ">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 ">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        問題番号
                    </th>
                    <th scope="col" class="px-6 py-3">
                        問題文
                    </th>
                    <th scope="col" class="px-6 py-3">
                        詳細
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach($questions as $question)
                <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        {{ $question->id }}
                    </th>
                    <td class="px-6 py-4">
                        {{ $question->content }}
                    </td>
                    <td class="px-6 py-4">
                        <a href="http://localhost/admin/detail/{{ $question->id }}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">詳細</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
