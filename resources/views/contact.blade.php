@extends ('layouts.app')
@section ('title', 'Contact us')
<style>
@import url('https://fonts.googleapis.com/css2?family=Big+Shoulders+Stencil+Display:wght@300&display=swap');

.col-lg  {
    font-family: 'Big Shoulders Stencil Display', cursive;
    font-size: 40px;
}

.form-control.error {
    border-color: red;
    padding: .375rem .75rem; */
}
#title {
    line-height: 1.5;
    letter-spacing: .45px;
    font-family: 'Big Shoulders Stencil Display', cursive;
}
a {
    text-decoration: none;
}
</style>
@section ('content')
    <div class="container mt-4">
        <div class="row mt-5">
            <div class="col-lg">
                <h1 class="text-center">Contacting the Bassinet</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12 text-center mt-3">
                <p class="ml-5 mr-5" style="color:grey">
                    Have a question? We'll write an article in response.
                    Please reach us here at these available links, we'd love to hear from you.
                </p>
            </div>
        </div>
        <x-contact/>
    </div>
@endsection
