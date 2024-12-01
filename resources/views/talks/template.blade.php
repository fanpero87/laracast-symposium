<div class="pb-12 border-b border-gray-900/10">
        @csrf
      <div class="grid grid-cols-1 mt-10 gap-x-6 gap-y-8 sm:grid-cols-6">
         <div class="sm:col-span-4">
            <label for="title" class="block font-medium text-gray-900 text-sm/6">Title</label>
            <div class="mt-2">
            <input id="title" name="title" type="text" autocomplete="title" value="{{ old('title', $talk->title) }}" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm/6">
            <x-input-error :messages="$errors->get('title')" class="mt-2" />
            </div>
        </div>

        <div class="sm:col-span-3">
            <label for="type" class="block font-medium text-gray-900 text-sm/6">Type</label>
            <div class="mt-2">
            <select id="type" name="type" autocomplete="type" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm/6">
                @foreach (App\Enums\TalkType::cases() as $talkType )
                <option {{ old('type') === $talkType->value ? 'selected' : '' }} value="{{ $talkType->value }}">{{ ucwords($talkType->value) }}</option>
                @endforeach
            </select>
            </div>
        </div>

        <div class="sm:col-span-3">
            <label for="length" class="block font-medium text-gray-900 text-sm/6">Length</label>
            <div class="mt-2">
            <input type="text" name="length" id="length" autocomplete="length" value="{{ old('length', $talk->length) }}" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm/6">
            <x-input-error :messages="$errors->get('length')" class="mt-2" />
          </div>
        </div>

        <div class="col-span-full">
            <label for="abstract" class="block font-medium text-gray-900 text-sm/6">Abstract</label>
            <div class="mt-2">
            <textarea id="abstract" name="abstract" rows="3" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm/6">{{ old('abstract', $talk->abstract) }}</textarea>
            <x-input-error :messages="$errors->get('abstract')" class="mt-2" />
            </div>
            <p class="mt-3 text-gray-600 text-sm/6">Describe the talk in a few sentences, in a way that's compelling and informative and could be presented to the public.</p>
        </div>

        <div class="col-span-full">
            <label for="organizer_notes" class="block font-medium text-gray-900 text-sm/6">Organizer Notes</label>
            <div class="mt-2">
            <textarea id="organizer_notes" name="organizer_notes" rows="3" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm/6">{{ old('organizer_notes', $talk->organizer_notes) }}</textarea>
            <x-input-error :messages="$errors->get('organizer_notes')" class="mt-2" />
            </div>
            <p class="mt-3 text-gray-600 text-sm/6">Write notes you may want to pass to an event organizer about this talk.</p>
        </div>
      </div>
</div>

  <div class="flex items-center justify-end mt-6 gap-x-6">
    <button type="button" class="font-semibold text-gray-900 text-sm/6">Cancel</button>
    <button type="submit" class="px-3 py-2 text-sm font-semibold text-white bg-indigo-600 rounded-md shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Save</button>
  </div>
