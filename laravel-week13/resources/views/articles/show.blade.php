<x-layout>
<x-slot name="slot">
    <div class="row">
        <div class="panel panel-default">
            <div class="panel-heading">
            {{ $article->title }}
            </div>
            <div class="panel-body">
                {{ $article->body }}
            </div>
        </div>
    </div>
</x-slot>
</x-layout>
