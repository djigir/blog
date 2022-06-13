<div class="container">
    <div class="row">
        <div class="col-lg-6 offset-lg-3 d-flex">
            <ul class="pagination mx-auto">
                {{ $items->withQueryString()->links() }}
            </ul>
        </div>
    </div>
</div>
{{--// TODO перенести стили в файл--}}
// TODO перенести стили в файл
<style>
    .page-item.active .page-link {
        background-color: #F29431;
        border-color: grey;
    }

    .page-link {
        color: black;
        border-color: grey;
    }

    .page-link:hover {
        z-index: 2;
        color: white;
        text-decoration: none;
        background-color: #f0ac65;
        border-color: #dee2e6;
    }
</style>
