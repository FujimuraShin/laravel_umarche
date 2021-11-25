<x-tests.app>
    <x-slot name="header">ヘッダー001</x-slot>
    コンポーネント001

    <x-tests.card title="タイトル" content="本文" :message="$message"/>
    <x-tests.card title="タイトル001-2"/>
    <x-tests.card title="CSSを変更したい" class="bg-red-300"/>
</x-tests.app>