<div>
    <x-input-label for="title" :value="__('Title')" />
    <x-text-input id="title"
                  name="title"
                  type="text"
                  value="{{ old('title', $post->title) }}"
                  class="block w-full mt-1"
    />
    <x-input-error :messages="$errors->get('title')" class="mt-2" />
</div>

<div>
    <x-input-label for="body" :value="__('Body')" />
    <x-textarea id="body"
                name="body"
                class="block w-full mt-1"
    >{{ old('body', $post->body) }}</x-textarea>
    <x-input-error :messages="$errors->get('body')" class="mt-2" />
</div>


<div>
    <x-input-label for="published_at" :value="__('Published at')" />
    <x-text-input id="published_at"
                  name="published_at"
                  type="date"
                  value="{{ old('published_at', $post->published_at) }}"
                  class="block w-full mt-1"
    />
    <x-input-error :messages="$errors->get('published_at')" class="mt-2" />
</div>


<div>
    <x-input-label for="status" :value="__('Status')" />
    <select id="status" name="status" class="block w-full mt-1">
        <option value="published">Published</option>
        <option value="archived">Archived</option>
        <option value="pending">Pending</option>
        <option value="draft">Draft</option>
    </select>
    <x-input-error :messages="$errors->get('status')" class="mt-2" />
</div>

<div>
    <x-input-label for="reading_time" :value="__('Reading Time')" />
    <x-text-input id="reading_time"
                  name="reading_time"
                  type="number"
                  min="1"
                  value="{{ old('reading_time', $post->reading_time) }}"
                  class="block w-full mt-1"
    />
    <x-input-error :messages="$errors->get('reading_time')" class="mt-2" />
</div>
