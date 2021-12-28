<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-10">

        @can('write post')
        <div class="w-full m-5 ">
            <a href="{{route('post.create')}}" class="text-white-500 hover:text-in-900 m-2 p-2 bg-green-900 rounded-lg">Create New Post</a>
        </div>
        @endcan


        <div class="ml-4 px-2">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <!-- This example requires Tailwind CSS v2.0+ -->
                <div class="flex flex-col">

                    <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                        <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                            <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">

                                <table class="min-w-full divide-y divide-gray-200">
                                    <thead class="bg-gray-50 dark:bg-gray-300">
                                    <tr>
                                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            Id
                                        </th>
                                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            Title
                                        </th>

                                        <th scope="col" class="relative px-6 py-3">
                                            <span class="sr-only ">Actions</span>
                                        </th>
                                    </tr>
                                    </thead>
                                    <tbody class="bg-white divide-y divide-gray-200 dark:bg-gray-400">
                                    @foreach(\App\Models\Post::all() as $post)
                                        <tr>

                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="flex items-center">
                                                <div class="flex-shrink-0 h-10 w-10 text-gray-900">
                                                    {{$post->id}}
                                                </div>

                                            </div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="text-sm text-gray-900">{{$post->title}}</div>

                                        </td>


                                        <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                            @can('edit post')
                                            <a href="{{route('post.edit', $post->id)}}" class="text-white-500 hover:text-in-900 m-2 p-2 bg-yellow-900 rounded-lg">Edit</a>
                                            @endcan

                                       @can('publish post')
                                                <a href="#" class="text-white-500 hover:text-in-900 m-2 p-2 bg-green-900 rounded-lg">Publish</a>
                                            @endcan
                                        </td>



                                    </tr>
                                    @endforeach

                                    <!-- More people... -->
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</x-app-layout>
