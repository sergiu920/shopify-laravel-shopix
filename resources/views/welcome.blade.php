@extends('shopify-app::layouts.default')

@section('content')
    <p>Hello World!!!</p>
@endsection

@section('scripts')
    @parent
    <script>
        const titleBarOptions = {
            title: 'My page title',
        };
        const myTitleBar = actions.TitleBar.create(app, titleBarOptions);
    </script>
@endsection
