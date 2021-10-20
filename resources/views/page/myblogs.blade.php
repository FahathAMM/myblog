<x-layout>
    <section class="px-6 py-3">
        <main class="max-w-lg mx-auto mt-10 bg-gray-100 border border-gray-200 p-6 rounded-xl">
            <h1 class="text-center font-bold text-xl">My Posts!</h1>
        </main>
        <div class="overflow-x-auto my-3">
            <div class="min-w-screen min-h-screen bg-gray-100 flex items-center justify-center bg-gray-100 font-sans ">
                <div class="w-full lg:w-5/6">
                    <div class="bg-white shadow-md rounded mt-2">
                        <table class="min-w-max w-full table-auto">
                            <thead>
                                <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
                                    <th class="py-3 px-6 text-left">#</th>
                                    <th class="py-3 px-6 text-left">Title</th>
                                    <th class="py-3 px-6 text-left">Author</th>
                                    <th class="py-3 px-6 text-center">Category</th>
                                    <th class="py-3 px-6 text-center">Actions</th>
                                </tr>
                            </thead>
                            <tbody class="text-gray-600 text-sm font-light">
                                @foreach ($myposts as $mypost)
                                    <x-mypost-row :mypost="$mypost" :no="$loop->iteration" />
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-layout>
