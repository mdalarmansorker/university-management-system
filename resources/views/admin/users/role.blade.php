<x-admin-layout>
    <div class="py-12 w-full text-black">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="flex">
                    <a href="{{ route('admin.users.index') }}" class="px-4 py-2 bg-green-500 rounded-md text-black">Roles</a>
                </div>
                <div class="flex flex-col p-2 bg-slate-100">
                    <div>User Name: {{ $user->name }}</div>
                    <div>User Email: {{ $user->email }}</div>
                    <div>User Phone: {{ $user->phone }}</div>
                    <div>University ID: {{ $user->university_id }}</div>
                </div>
                <div class="mt-6 p-2 bg-slate-100">
                    <h2 class="text-2xl font-semibold">Roles</h2>
                    <div class="flex space-x-2 mt-4 p-2">
                        @if ($user->roles)
                            @foreach ($user->roles as $user_role)
                                <form class="px-4 py-2 bg-red-500 hover:bg-red-700 text-white rounded-md" method="POST"
                                    action="{{ route('admin.users.roles.remove', [$user->id, $user_role->id]) }}"
                                    onsubmit="return confirm('Are you sure?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit">{{ $user_role->name }}</button>
                                </form>
                            @endforeach
                        @endif
                    </div>
                    <div class="max-w-xl mt-6">
                        <form method="POST" action="{{ route('admin.users.roles', $user->id) }}">
                            @csrf
                            <div class="sm:col-span-6">
                                <label for="role" class="block text-sm font-medium text-gray-700">Roles</label>
                                <select id="role" name="role" autocomplete="role-name"
                                    class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                    @foreach ($roles as $role)
                                        <option value="{{ $role->name }}">{{ $role->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            @error('role')
                                <span class="text-red-400 text-sm">{{ $message }}</span>
                            @enderror
                            <div class="sm:col-span-6 pt-5">
                                <button type="submit"
                                    class="px-4 py-2 bg-green-500 hover:bg-green-700 rounded-md">Assign</button>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- <div class="card shrink-0 w-full max-w-sm shadow-2x">
                    <form class="card-body" method="post" action="{{ route('admin.roles.update', $role) }}">
                        @csrf
                        @method('PUT')
                        <div class="form-control">
                            <label class="label">
                                <span class="label-text text-black">Post Name</span>
                            </label>
                            <input type="text" value="{{ $role->name }}" placeholder="Role Name" name="name" class="input input-bordered bg-slate-100 border-blue-500 text-black" required />
                        </div>
                        @error('name') <span class="text-red-400 text-sm">{{ $message }}</span> @enderror
                        <div class="form-control mt-6">
                            <button class="btn btn-primary" type="submit">Update</button>
                        </div>
                    </form>
                </div> -->
                <div class="mt-6 p-2">
                    <h2 class="text-2xl font-semibold text-black">Permissions</h2>
                    <div class="mt-4 p-2 flex gap-2">
                        @if ($user->permissions)
                            @foreach ($user->permissions as $user_permission)
                                <form class="px-4 py-2 bg-red-500 hover:bg-red-700 text-white rounded-md" method="POST"
                                    action="{{ route('admin.users.permissions.revoke', [$user->id, $user_permission->id]) }}"
                                    onsubmit="return confirm('Are you sure?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit">{{ $user_permission->name }}</button>
                                </form>
                            @endforeach
                        @endif
                    </div>
                    <div class="card shrink-0 w-full max-w-sm shadow-2x">
                        <form method="POST" action="{{ route('admin.users.permissions', $user->id) }}">
                            @csrf
                            <div class="sm:col-span-6">
                                <label for="permission"
                                    class="block text-sm font-medium text-gray-700">Permission</label>
                                <select id="permission" name="permission" autocomplete="permission-name"
                                    class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                    @foreach ($permissions as $permission)
                                        <option value="{{ $permission->name }}">{{ $permission->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            @error('name')
                                <span class="text-red-400 text-sm">{{ $message }}</span>
                            @enderror
                    
                            <div class="sm:col-span-6 pt-5">
                                <button type="submit"
                                    class="px-4 py-2 bg-green-500 hover:bg-green-700 rounded-md">Assign</button>
                            </div>
                    
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
    
</x-admin-layout>