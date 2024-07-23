@extends('layout.reportTemplate')

@section('content')

<h2 class="card-title d-flex" style="font-family: Montserrat; font-weight: bold; margin-left: 30px">Violation Information</h2>

<div class="container card-subtitle d-flex justify-content-between">
    <p style="display: flex; font-style: italic; margin-left: 25px;">Tipe Pelanggaran : </p>
    <p style="display: flex; font-style: italic;">Status : </p>
</div>

<p style="display: flex; font-style: italic; margin-left: 38px;">Kejadian : </p>
<div class="container card-subtitle">
<p style="text-align: justify; margin-left: 25px;">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quam itaque, cumque hic sapiente est placeat voluptatum! Repudiandae quidem nam ducimus. Maxime vitae neque reprehenderit soluta quisquam ratione quis doloremque, a accusamus excepturi dolore ab accusantium sequi cum modi dicta id dolores pariatur, quasi minima? Soluta consequuntur ullam accusantium eaque ex, quasi magnam excepturi debitis accusamus vel architecto ipsam, rem facere quaerat qui facilis! Labore explicabo illum voluptates soluta, modi nesciunt eaque dignissimos delectus facere laboriosam nemo excepturi incidunt at et! Nesciunt debitis, excepturi illo natus commodi repudiandae dolorum eaque esse maiores, fugit saepe atque id culpa placeat ipsam fuga dignissimos. Beatae vero consectetur, facere praesentium sed fuga explicabo amet, placeat soluta laudantium rerum obcaecati possimus repudiandae? Molestiae ducimus reiciendis repellat saepe mollitia expedita porro ab. Fuga totam tempore eius quas aperiam explicabo. Aliquid quas perferendis ipsum dolorem excepturi dolores molestiae illo totam? Praesentium at repellendus dicta totam tempore accusantium distinctio dolorem tenetur eligendi dolor tempora cum deleniti, assumenda facere sit architecto porro, eveniet ut. Ullam dignissimos, perferendis iste temporibus beatae placeat neque non explicabo, facere voluptatem fugit ad maxime alias repudiandae inventore enim, itaque incidunt cupiditate ea esse aut distinctio accusantium at magnam. Repellendus fugit omnis similique fuga impedit reiciendis excepturi accusantium incidunt sunt eligendi vero, quod architecto at consequuntur veniam et voluptates consectetur dolore quas culpa dicta eveniet eius! Alias reiciendis a nisi facere id unde adipisci ratione eius nihil minima eos nesciunt quisquam labore ipsam debitis asperiores, voluptatem, ab eum autem praesentium itaque! Repellendus minus aut, nobis consequatur, placeat, obcaecati vel sint error illo in impedit soluta officia quos doloremque odio consequuntur velit dolor ipsum. Laboriosam ab, eaque ipsam minima veritatis enim tempora velit unde impedit culpa vel autem doloremque sapiente nulla, ea exercitationem esse distinctio. Natus, ea maiores temporibus voluptas iure fuga! Temporibus culpa accusantium asperiores aut!</p>
<p style="display: flex; font-style: italic; margin-left: 25px;">Informasi Tambahan :</p>
<h5 class="card-title d-flex" style="font-family: Montserrat; font-weight: bold; margin-left: 25px;">Berikan umpan balik :</h5>
<div class="form-floating" action="">
        <textarea class="form-control" id="feedback" style="height: 200px; width: 1200px; margin-left: 25px;"></textarea>
        <label for="feedback" style="margin-left: 25px;">Berikan umpan balik disini...</label>
</div>
</div>
<div class="container d-flex align-items-center">
    <a href="" class="btn btn-primary" style="display: inline-block; border-radius: 22px; background-color: #00BCF4; font-weight: bold; text-align: center; padding: 10px 19px; margin-left: 15px; margin-top: 20px;">Submit Feedback</a>
</div>
<div class="container d-flex align-items-center">
    <a href="" class="btn btn-primary" style="display: inline-block; border-radius: 22px; background-color: #68DB6D; font-weight: bold; text-align: center; padding: 10px 51px; margin-left: 15px; margin-top: 20px;">Approve</a>
    <a href="" class="btn btn-primary" style="display: inline-block; border-radius: 22px; background-color: #C00F0C; font-weight: bold; text-align: center; padding: 10px 51px; margin-left: 15px; margin-top: 20px;">Reject</a>
    <a href="" class="btn btn-primary" style="display: inline-block; border-radius: 22px; background-color: #EBB12A; font-weight: bold; text-align: center; padding: 10px 51px; margin-left: 15px; margin-top: 20px;">Close</a>
</div>
</div>


@endsection