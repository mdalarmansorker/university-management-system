<x-admin-layout>
    <div class="py-12 w-full">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="flex">
                    <a href="{{ route('admin.permissions.index') }}" class="px-4 py-2 bg-green-500 rounded-md text-black">Permissions</a>
                </div>
                <div class="card shrink-0 w-full max-w-sm shadow-2x">
                    <form class="card-body" method="post" action="{{ route('admin.permissions.update', $permission) }}">
                        @csrf
                        @method('PUT')
                        <div class="form-control">
                            <label class="label">
                                <span class="label-text text-black">Permission Name</span>
                            </label>
                            <input type="text" value="{{ $permission->name }}" placeholder="Permission Name" name="name" class="input input-bordered bg-slate-100 border-blue-500 text-black" required />
                        </div>
                        @error('name') <span class="text-red-400 text-sm">{{ $message }}</span> @enderror
                        <div class="form-control mt-6">
                            <button class="btn btn-primary" type="submit">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
</x-admin-layout>