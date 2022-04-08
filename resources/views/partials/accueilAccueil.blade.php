<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 bg-white border-b border-gray-200">
                <section class="w-full">
                    <h1 class="text-center text-6xl">Bienvenue sur ce site</h1>
                </section>
            </div>
        </div>
    </div>
</div>
<section class="bg-gray-100 dark:bg-gray-900 lg:py-12 lg:flex lg:justify-center mt-10">
    <div class="bg-white dark:bg-gray-800 lg:mx-8 lg:flex lg:max-w-5xl lg:shadow-lg lg:rounded-lg">
        <div class="lg:w-1/2">
            <div class="h-64 bg-cover lg:rounded-lg lg:h-full"
                style="background-image:url('https://images.unsplash.com/photo-1593642532400-2682810df593?ixlib=rb-1.2.1&ixid=MXwxMjA3fDF8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&auto=format&fit=crop&w=750&q=80')">
            </div>
        </div>

        <div class="max-w-xl px-6 py-12 lg:max-w-5xl lg:w-1/2">
            <h2 class="text-2xl font-bold text-gray-800 dark:text-white md:text-3xl">Build Your New <span
                    class="text-blue-600 dark:text-blue-400">Idea</span></h2>
            <p class="mt-4 text-gray-600 dark:text-gray-400">Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                Quidem modi reprehenderit vitae exercitationem aliquid dolores ullam temporibus enim expedita aperiam
                mollitia iure consectetur dicta tenetur, porro consequuntur saepe accusantium consequatur.</p>

            <div class="mt-8">
                @if (!Auth::user())
                    <a href="/login" class="px-5 py-2 font-semibold text-gray-100 transition-colors duration-200 transform bg-gray-900 rounded-md hover:bg-gray-700">Connectez-vous</a>
                    <a href="/register" class="px-5 py-2 font-semibold text-gray-100 transition-colors duration-200 transform bg-gray-900 rounded-md hover:bg-gray-700">Enregistrez-vous</a>
                @endif
            </div>
        </div>
    </div>
</section>
<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <h1 class="text-2xl font-bold text-center">All users</h1>
        <!-- component -->
        <div class="antialiased mt-10 bg-gray-100 text-gray-600 h-screen px-4">
            <div class="flex flex-col justify-center">
                <!-- Table -->
                <div class="w-full max-w-2xl mx-auto bg-white shadow-lg rounded-sm border border-gray-200">
                    <header class="px-5 py-4 border-b border-gray-100">
                        <h2 class="font-semibold text-gray-800">Customers</h2>
                    </header>
                    <div class="p-3">
                        <div class="overflow-x-auto">
                            <table class="table-auto w-full">
                                <thead class="text-xs font-semibold uppercase text-gray-400 bg-gray-50">
                                    <tr>
                                        <th class="p-2 whitespace-nowrap">
                                            <div class="font-semibold text-left">Name</div>
                                        </th>
                                        <th class="p-2 whitespace-nowrap">
                                            <div class="font-semibold text-left">email</div>
                                        </th>
                                        <th class="p-2 whitespace-nowrap">
                                            <div class="font-semibold text-left">Role</div>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody class="text-sm divide-y divide-gray-100">
                                    @foreach ($users as $user)
                                        <tr>
                                            <td class="p-2 whitespace-nowrap">
                                                <div class="flex items-center">
                                                    <div class="font-medium text-gray-800">{{$user->firstname}}</div>
                                                </div>
                                            </td>
                                            <td class="p-2 whitespace-nowrap">
                                                <div class="text-left">{{$user->email}}</div>
                                            </td>
                                            <td class="p-2 whitespace-nowrap">
                                                <div class="text-left font-medium text-green-500">{{$user->role->role}}</div>
                                            </td>
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