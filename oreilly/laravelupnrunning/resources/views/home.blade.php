<div class="content" data-page-name="{{ $pageNamecd }}">
    <p>Here's why you should sign up for our app:</p>
    @include('sign-up-button',['text'=> 'See just how great it is'])
</div>

<a class="button button--callout" data-page-name="{{ $pageNamecd }}">
    <i class="exclamation-icon"></i>{{ $text }}
</a>