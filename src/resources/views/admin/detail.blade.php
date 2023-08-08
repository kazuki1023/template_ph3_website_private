@extends('layouts.admin')

@section('content')
    @if (session('successUpdate'))
        <div id="alert-1" class="flex p-4 mb-4 text-blue-800 rounded-lg bg-blue-50 mx-4 mt-3" role="alert">
            <svg aria-hidden="true" class="flex-shrink-0 w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd"
                    d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
                    clip-rule="evenodd"></path>
            </svg>
            <span class="sr-only">Info</span>
            <div class="ml-3 text-sm font-medium">
                {{ session('successUpdate') }}
            </div>
            <button type="button"
                class="ml-auto -mx-1.5 -my-1.5 bg-blue-50 text-blue-500 rounded-lg focus:ring-2 focus:ring-blue-400 p-1.5 hover:bg-blue-200 inline-flex h-8 w-8"
                data-dismiss-target="#alert-1" aria-label="Close">
                <span class="sr-only">Close</span>
                <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                        clip-rule="evenodd"></path>
                </svg>
            </button>
        </div>
    @endif
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
                        問題番号
                    </th>
                    <td class="px-6 py-4">
                        {{ $question->id }}
                    </td>
                </tr>
                <tr class="bg-white border-b">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                        問題文
                    </th>
                    <td class="px-6 py-4">
                        {{ $question->content }}
                    </td>
                </tr>
                @foreach ($question->choices as $i => $choice)
                    <tr class="bg-white border-b">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                            選択肢{{ $i + 1 }}
                            @if ($choice->valid == 1)
                                <span
                                    class="bg-blue-100 text-blue-800 text-xs font-medium mr-2 px-2.5 py-0.5 rounded-full">正解</span>
                            @else
                                <span
                                    class="bg-red-100 text-red-800 text-xs font-medium mr-2 px-2.5 py-0.5 rounded-full">不正解</span>
                            @endif
                        </th>
                        <td class="px-6 py-4">
                            {{ $choice->name }}
                        </td>
                    </tr>
                @endforeach
                <tr class="bg-white border-b">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                        画像
                    </th>
                    <td class="px-6 py-4">
                        <img src="{{ asset('/storage/img/questions/' . $question->image) }}">
                    </td>
                </tr>
                <tr class="bg-white border-b">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
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
        <button type="button"
            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 focus:outline-none"
            onclick="location.href='{{ route('admin.edit', ['id' => $question->id]) }}'">編集する</button>
        <form action="{{ route('admin.delete', $question->id) }}" method="POST" enctype="multipart/form-data"">
            @csrf
            @method('DELETE')
            <button type="submit"
                class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2"

                onclick="deleteConfirm('{!! route('admin.delete', ['id' => $question->id]) !!}')">削除する</button>
        </form>
    </div>
@endsection
