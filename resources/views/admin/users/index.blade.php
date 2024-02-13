<x-admin-layout>
    <div class="py-12 w-full">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                
                <div class="overflow-x-auto text-black">
                    <table class="table p-8">
                        <!-- head -->
                        <thead>
                            <tr>
                                <th class="text-black">Name</th>
                                <th class="text-black">Email</th>
                                <th class="text-black">Phone</th>
                                <th class="text-black">University ID</th>
                                <th class="text-black"></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($users as $user)
                                <tr>
                                    <td class="font-semibold">
                                        {{ $user->name }}
                                    </td>
                                    <td class="font-semibold">
                                        {{ $user->email }}
                                    </td>
                                    <td class="font-semibold">
                                        {{ $user->phone }}
                                    </td>
                                    <td class="font-semibold">
                                        {{ $user->university_id }}
                                    </td>
                                    <td class="flex gap-6 justify-end">
                                        <a href="{{ route('admin.users.show', $user->id) }}" class="btn bg-blue-700 text-white">Roles</a>
                                        <form action="{{ route('admin.users.destroy', $user->id) }}" method="POST" onsubmit="return confirm('Are you sure?');">
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