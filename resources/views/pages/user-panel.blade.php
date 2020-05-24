@include('components.admin.header')

<div id="wrapper">
@include('components.admin.nav')
<div class="container">
    <div class="row mt-5">
        <div class="col-lg-8 p-4 shadow">
            @include('components.user.create-post')
        </div>
    </div>
</div>
</div>
@include('components.admin.footer')