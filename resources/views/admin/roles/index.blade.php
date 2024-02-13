<x-admin-layout>
    <div class="py-12 w-full">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="flex justify-between">
                    <span class="text-extrabold text-xl text-black">All Roles</span>
                    <a href="{{ route('admin.roles.create') }}" class="px-4 py-2 bg-green-700 hover:bg-green-400 text-white rounded-md">Create Role</a>
                </div>
                <div class="overflow-x-auto text-black">
                    <table class="table p-8">
                        <!-- head -->
                        <thead>
                            <tr>
                                <th class="text-black">Name</th>
                                <th class="text-black"></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($roles as $role)
                                <tr>
                                    <td class="font-semibold">
                                        {{ $role->name }}
                                    </td>
                                    <td class="flex gap-6 justify-end">
                                        <a href="{{ route('admin.roles.edit', $role->id) }}" class="btn bg-blue-700 text-white">Edit</a>
                                        <a href="" class="btn bg-red-700 border-none text-white">Delete</a>
                                    </td>
                                </tr>
                            @endforeach
                        
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    
</x-admin-layout>