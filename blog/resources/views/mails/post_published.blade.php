@component('mail::message')
# {{ $post->name }}

There is a new post

- one
- two
- three

## another one

 @component('mail::button')
    @slot('url')
    {{ route('posts.show', $post) }}
    @endslot

    @slot('color', 'green')


    Open post
 @endcomponent

@endcomponent
