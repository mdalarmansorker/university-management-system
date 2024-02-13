<x-admin-layout>
    <div class="py-12 w-full">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="flex justify-between">
                    <span class="text-extrabold text-xl text-black">All Permissions</span>
                    <a href="{{ route('admin.permissions.create') }}" class="px-4 py-2 bg-green-700 rounded-md hover:bg-green-400 text-white">Create Permission</a>
                </div>
                <div class="overflow-x-auto text-black">
                    <table class="table p-8">
                        <!-- head -->
                        <thead>
                            <tr>
                                <th class="text-black">Name</th>
                                <th class="text-black flex justify-end"></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($permissions as $permission)
                                <tr>
                                    <td class="font-semibold">
                                        {{ $permission->name }}
                                    </td>
                                    <td class="flex gap-6 justify-end">
                                        <a href="{{ route('admin.permissions.edit', $permission->id) }}" class="btn bg-blue-700 text-white">Edit</a>
                                        <form action="{{ route('admin.permissions.destroy', $permission->id) }}" method="POST" onsubmit="return confirm('Are you sure?');">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn bg-red-700 border-none text-white">Delete</button>
                                        </form>
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